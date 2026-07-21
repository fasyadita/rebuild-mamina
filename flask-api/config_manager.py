from db_connection import get_connection

def get_setting(key):
    conn = get_connection()
    try:
        with conn.cursor() as cursor:
            sql = "SELECT setting_value FROM tb_chatbot_settings WHERE setting_key=%s"
            cursor.execute(sql, (key,))
            result = cursor.fetchone()
            return result['setting_value'] if result else None
    finally:
        conn.close()

def update_setting(key, value):
    conn = get_connection()
    try:
        with conn.cursor() as cursor:
            sql = "UPDATE tb_chatbot_settings SET setting_value=%s WHERE setting_key=%s"
            cursor.execute(sql, (value, key))
            conn.commit()
    finally:
        conn.close()

def get_openai_key():
    conn = get_connection()
    try:
        with conn.cursor() as cursor:
            cursor.execute("SELECT setting_value FROM tb_chatbot_settings WHERE setting_key='openai_api_key'")
            result = cursor.fetchone()
            return result['setting_value'] if result else None
    finally:
        conn.close()

