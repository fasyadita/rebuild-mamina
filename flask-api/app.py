from flask import Flask, request, jsonify, render_template
from flask_cors import CORS
from rag_engine import get_answer
from save_chat import save_chat_history, get_history
from dotenv import load_dotenv
from db_connection import get_connection
import os

load_dotenv()

app = Flask(__name__)
CORS(app)

@app.route('/')
def home():
    return render_template('chatbot.html')  # tampilkan halaman chatbot

@app.route('/get_intro', methods=['GET'])
def get_intro():
    conn = get_connection()
    try:
        with conn.cursor() as cursor:
            cursor.execute("SELECT setting_value FROM tb_chatbot_settings WHERE setting_key='introduction'")
            intro = cursor.fetchone()
            return jsonify({"intro": intro['setting_value'] if intro else "Halo Bunda! Selamat datang di MaminaCare 👩‍🍼✨. Ada yang bisa saya bantu hari ini? 🌸"})
    finally:
        conn.close()

@app.route('/simpan_ulasan', methods=['POST'])
def simpan_ulasan():
    data = request.get_json()
    rating = data.get("rating")
    komentar = data.get("komentar")
    session_id = data.get("session_id")

    conn = get_connection()
    with conn.cursor() as cursor:
        sql = "INSERT INTO tb_ulasan (tanggal, rating, komentar, session_id) VALUES (NOW(), %s, %s, %s)"
        cursor.execute(sql, (rating, komentar, session_id))
    conn.commit()
    conn.close()

    return jsonify({"status": "success"})

@app.route('/ask', methods=['POST'])
def ask():
    data = request.get_json()
    query = data.get("query", "")
    session_id = data.get("session_id", "anonymous")

    # Kirim ke RAG engine
    answer = get_answer(query, session_id)

    # Simpan ke database
    save_chat_history(session_id, query, answer)
    return jsonify({"response": answer})

if __name__ == "__main__":
    app.run(host='0.0.0.0', port=5001)

