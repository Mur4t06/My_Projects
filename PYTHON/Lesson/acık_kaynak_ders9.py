# -*- coding: utf-8 -*-
"""
Created on Fri Apr 28 13:59:32 2023

@author: MuratReyiz
"""


import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

def send_email (mesaj, gonderilecekler):
    
    host = "smtp.gmail.com"
    port = 587
    username = "selimozdem.deneme@gmail.com"
    password= "hzasdiuihaqjbufd"
    
    email_conn = smtplib.SMTP(host, port)
    email_conn.ehlo()
    email_conn.starttls()
    email_conn.login(username, password)
    email_conn.sendmail(username, gonderilecekler, mesaj)
    email_conn.quit()
    
    print("mail gönderildi")
    

yeni_mesaj = MIMEMultipart("yeni mesaj")
send_email("""
        <html>
          <head>
          </head>
          <body>
            <b> merhaba, deneme maili </b>
          </body>
        </html>
           """,
           
           "selimozdem.deneme@gmail.com"
           )