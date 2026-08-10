from langchain_community.vectorstores import FAISS
from langchain_google_genai import GoogleGenerativeAIEmbeddings, ChatGoogleGenerativeAI
from langchain_core.prompts import PromptTemplate
from config_manager import get_setting, get_gemini_key
from db_connection import get_connection
import os

# Prompt template dari database setting
prompt_template = get_setting("prompt")

prompt = PromptTemplate(
    input_variables=["context", "history", "question"],
    template=prompt_template,
)

# Load embedding model sekali saja
gemini_api_key = get_gemini_key()
embeddings = GoogleGenerativeAIEmbeddings(
    model="models/gemini-embedding-2",
    google_api_key=gemini_api_key
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

                llm = ChatGoogleGenerativeAI(
                    model="gemini-3.5-flash",
                    google_api_key=gemini_api_key,
                    temperature=0
                )

                history_text = get_history(session_id)

                response = llm.invoke(prompt.format(
                    context=context,
                    history=history_text,
                    question=query
                ))

                answers.append(response)

            except Exception as e:
                import traceback
                print(f"Gagal load {index_path}: {e}", flush=True)
                traceback.print_exc()

    if answers:
        # Ambil jawaban paling panjang (atau kamu bisa ubah jadi yang pertama saja)
        answer_texts = []
        for ans in answers:
            if isinstance(ans.content, list):
                text = "".join([part.get("text", "") for part in ans.content if isinstance(part, dict) and part.get("type") == "text"])
                answer_texts.append(text)
            else:
                answer_texts.append(str(ans.content))
                
        best_answer = max(answer_texts, key=len)
        return best_answer
    else:
        return "Maaf Bunda, saya belum bisa memproses permintaan ini. Silakan coba beberapa saat lagi atau hubungi admin."

