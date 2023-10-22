# -*- coding: utf-8 -*-
"""
Created on Fri Apr 14 10:02:47 2023

@author: MuratReyiz
"""


import tkinter as tk # Soru 1 için tkinter kütüphanesini ekledim.
from tkinter import messagebox # Soru 1 için tkinter kütüphanesindeki message yazmak için çağırdım.

# Soru 6-2 için Button_1 e basıldığı zaman uyarı mesaj penceresini ekranda gösterip '1. Görev Tamamlandı' diye uyarı verdim.

def mesaji_goster():
    messagebox.showwarning(title="Uyarı", message='1. Görev Tamamlandı')

anaform= tk.Tk()
anaform.title('Görsel Programlama 22-23-Bahar-Ara Sınavı') #Soru 3 için Başlık eklendi.
anaform.geometry('400x600') # Soru 2 için form genişliği ayarlandı.
anaform.configure(bg='red') # Soru 4 için arka plan rengi ayarlandı.

Ana_Frame = tk.Frame(anaform)
Ana_Frame.pack()

Frame_1= tk.Frame(Ana_Frame, bg='blue') # Soru 5 için  1. Frame oluşturuldu.
Frame_1.grid(row=0, column=0, padx=15, pady=2)

Entry_1= tk.Entry(Frame_1) # Soru 6-1 için giriş kutusu oluşturuldu.
Entry_1.grid(row=0, column=0, padx=5)

label_1=tk.Label(Frame_1, text='label_1', bg='blue') # Soru 6-1 için label_1 oluşturuldu. 
label_1.grid(row=0, column=1, padx= 5)

Button_1 = tk.Button(Frame_1, text='button_1', bg='green', width=16, command=mesaji_goster) # Soru 6-1 için 
Button_1.grid(row=1, pady=10)

Frame_2=tk.Frame(Ana_Frame, bg='yellow')
Frame_2.grid(row=0, column=1)

label_2=tk.Label(Frame_2, text='label_2', bg='yellow')
label_2.grid(row=0, column=0, padx= 5)

Button_2 = tk.Button(Frame_2, text='button_2', bg='green', width=16)
Button_2.grid(row=1,column=0, pady=10)
    
anaform.mainloop()