from db_connection import get_connection

def save_chat_history(session_id, user_msg, bot_msg):
    conn = get_connection()
    try:
        print(f"types: session_id={type(session_id)}, user_msg={type(user_msg)}, bot_msg={type(bot_msg)}", flush=True)
        print(f"bot_msg value: {bot_msg}", flush=True)
        with conn.cursor() as cursor:
            sql = "INSERT INTO tb_chat_history (session_id, user_msg, bot_reply) VALUES (%s, %s, %s)"
            cursor.execute(sql, (session_id, user_msg, bot_msg))
        conn.commit()
    finally:
        conn.close()

def get_history(session_id):
    conn = get_connection()
    try:
        with conn.cursor() as cursor:
            sql = "SELECT user_msg, bot_reply FROM tb_chat_history WHERE session_id=%s ORDER BY waktu ASC"
            cursor.execute(sql, (session_id,))
            results = cursor.fetchall()
            history_text = ""
            for row in results:
                if row["user_msg"]:
                    history_text += f"User: {row['user_msg']}\n"
                if row["bot_reply"]:
                    history_text += f"Bot: {row['bot_reply']}\n"
            return history_text
    finally:
        conn.close()
