from langchain_community.document_loaders import PyMuPDFLoader
from langchain_community.vectorstores import FAISS
from langchain_google_genai import GoogleGenerativeAIEmbeddings
from langchain_text_splitters import CharacterTextSplitter
from config_manager import get_gemini_key
import os, sys

def build_index(file_path, index_dir):
    loader = PyMuPDFLoader(file_path)
    documents = loader.load()

    text_splitter = CharacterTextSplitter(chunk_size=1000, chunk_overlap=200)
    docs = text_splitter.split_documents(documents)

    embeddings = GoogleGenerativeAIEmbeddings(model="models/gemini-embedding-2", google_api_key=get_gemini_key())
    db = FAISS.from_documents(docs, embeddings)
    db.save_local(index_dir)
    
    print(len(docs))

if __name__ == "__main__":
    file_path = sys.argv[1]
    index_name = os.path.splitext(os.path.basename(file_path))[0].lower().replace(" ", "_")
    index_dir = f'flask-api/vectorstore/{index_name}'

    if not os.path.exists(index_dir):
        os.makedirs(index_dir)

    build_index(file_path, index_dir)


