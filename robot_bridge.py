import serial
import time
import json
import requests # Install via: pip install requests

# Konfigurasi Robot Kapal UNDIP
# Sesuaikan 'COM3' (Windows) atau '/dev/ttyUSB0' (Linux/Mac)
SERIAL_PORT = '/dev/ttyUSB0' 
BAUD_RATE = 9600

def read_robot_data():
    try:
        ser = serial.Serial(SERIAL_PORT, BAUD_RATE, timeout=1)
        print(f"Terhubung ke Robot Kapal di {SERIAL_PORT}")
        
        while True:
            if ser.in_waiting > 0:
                line = ser.readline().decode('utf-8').rstrip()
                print(f"Data Masuk: {line}")
                
                # Misal data dari robot formatnya: Roll,Pitch,Yaw,Speed
                # Kita bisa memprosesnya di sini
                
                # Catatan: Karena web sekarang static, Python tidak bisa 
                # langsung "input" ke database. Python bisa digunakan untuk
                # menulis ke file JSON yang nantinya dibaca oleh script.js
                # atau mengirim ke server Firebase/MQTT.
                
            time.sleep(0.1)
    except Exception as e:
        print(f"Error: {e}")

if __name__ == "__main__":
    read_robot_data()