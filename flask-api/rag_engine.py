from langchain_community.vectorstores import FAISS
from langchain_openai import OpenAIEmbeddings, ChatOpenAI
from langchain_core.prompts import PromptTemplate
from config_manager import get_setting, get_openai_key
from db_connection import get_connection
import os

# Prompt template dari database setting
prompt_template = get_setting("prompt")

prompt = PromptTemplate(
    input_variables=["context", "history", "question"],
    template=prompt_template,
)

# Load embedding model sekali saja
embeddings = OpenAIEmbeddings(
    model="text-embedding-3-small",
    openai_api_key=get_openai_key()
)

def get_history(session_id):
    conn = get_connection()
    try:
        with conn.cursor() as cursor:
            sql = """
            SELECT user_msg, bot_reply FROM tb_chat_history 
            WHERE session_id=%s AND DATE(waktu)=CURDATE() ORDER BY waktu ASC
            """
            cursor.execute(sql, (session_id,))
            results = cursor.fetchall()

            history_text = ""
            for row in results:
                if row['user_msg']:
                    history_text += f"Bunda: {row['user_msg']}\n"
                if row['bot_reply']:
                    history_text += f"MaminaCare: {row['bot_reply']}\n"

            return history_text
    finally:
        conn.close()

def get_answer(query, session_id):
    vectorstore_dir = os.path.join(os.path.dirname(os.path.abspath(__file__)), "vectorstore")
    index_dirs = os.listdir(vectorstore_dir)
    answers = []

    for dir_name in index_dirs:
        index_path = os.path.join(vectorstore_dir, dir_name)
        if os.path.isdir(index_path):
            try:
                db = FAISS.load_local(index_path, embeddings, allow_dangerous_deserialization=True)
                
                # ambil 5 dokumen paling relevan + similarity score
                # docs_and_scores = db.similarity_search_with_score(query, k=5)

                # for doc, score in docs_and_scores:
                #     print(score, doc.page_content[:100])

                # threshold similarity score (semakin kecil, semakin mirip — biasanya 0.25–0.4)
                # threshold = 0.5

                # filter dokumen dengan skor di bawah threshold
                # filtered_docs = [doc for doc, score in docs_and_scores if score <= threshold]

                # kalau ga ada hasil relevan, skip aja ke index berikutnya
                # if not filtered_docs:
                #     continue

                # context = "\n".join([doc.page_content for doc in filtered_docs])

                retriever = db.as_retriever()

                docs = retriever.invoke(query)
                context = "\n".join([doc.page_content for doc in docs])

                llm = ChatOpenAI(
                    model_name="gpt-3.5-turbo",
                    openai_api_key=get_openai_key()
                )

                history_text = get_history(session_id)

                response = llm.invoke(prompt.format(
                    context=context,
                    history=history_text,
                    question=query
                ))

                answers.append(response)

            except Exception as e:
                print(f"Gagal load {index_path}: {e}")

    if answers:
        # Ambil jawaban paling panjang (atau kamu bisa ubah jadi yang pertama saja)
        answer_texts = [ans.content for ans in answers]
        best_answer = max(answer_texts, key=len)
        return best_answer
    else:
        return "Maaf Bunda, saya belum bisa memproses permintaan ini. Silakan coba beberapa saat lagi atau hubungi admin."

