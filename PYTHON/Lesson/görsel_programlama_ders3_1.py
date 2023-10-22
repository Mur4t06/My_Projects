# -*- coding: utf-8 -*-
"""
Created on Thu Mar 16 13:25:05 2023

@author: MuratReyiz
"""

import tkinter as tk
from tkinter import messagebox

anaform=tk.Tk()

anaform.title("Form Başlığı")

anaform.geometry("400x300")

lbl_adi = tk.Label(text="Kullanıcı Adı" )
lbl_adi.pack()


txt_adi = tk.Entry()
txt_adi.pack()

def verial():
    lbl_adi['text'] = txt_adi.get()
    #messagebox.showinfo(title="Başlık",message='mesaj bilgisi')
    #messagebox.showerror(title="Başlık", message='mesaj bilgisi')
    #messagebox.showwarning(title="Başlık", message='mesaş bilgisi')
    
    cevap= messagebox.askyesnocancel(title="Başlık", message='mesaj içerik')
    print(cevap)
    if cevap == True:
        lbl_adi['text']="Evet Butonuna Basıldı"
    elif cevap == False:
        lbl_adi['text']="Hayır Butonuna Basıldı"
    else:
        lbl_adi['text']="İptal Butonuna Basıldı"
    
btn_verial = tk.Button(text="Kaydet", command=verial).pack()

#lbl_adi.pack()

anaform.mainloop() 