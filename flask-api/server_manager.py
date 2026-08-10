import os
import sys
import socket

def is_flask_running(host="127.0.0.1", port=5001):
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    try:
        s.settimeout(1)
        s.connect((host, port))
        s.close()
        return True
    except:
        return False

def start_flask_server():
    app_path = os.path.join(os.path.dirname(os.path.abspath(__file__)), "app.py")
    os.system(f"start /B python \"{app_path}\"")

if __name__ == "__main__":
    if sys.argv[1] == "check_status":
        print("running" if is_flask_running() else "stopped")
    elif sys.argv[1] == "start_server":
        start_flask_server()
        print("started")

