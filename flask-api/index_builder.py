from langchain_community.document_loaders import PyMuPDFLoader
from langchain_community.vectorstores import FAISS
from langchain_community.embeddings import OpenAIEmbeddings
from langchain.text_splitter import CharacterTextSplitter
import os, sys

from dotenv import load_dotenv
load_dotenv()

def build_index(file_path, index_dir):
    loader = PyMuPDFLoader(file_path)
    documents = loader.load()

    text_splitter = CharacterTextSplitter(chunk_size=1000, chunk_overlap=200)
    docs = text_splitter.split_documents(documents)

    embeddings = OpenAIEmbeddings(model="text-embedding-3-small")
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


