#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Fri Apr  7 11:17:01 2023

@author: m1mac
"""

import smtplib


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

send_email("merhaba, deneme maili", "murat06cinar06@gmail.com")

