# -*- coding: utf-8 -*-
"""
Created on Thu Mar 30 14:26:47 2023

@author: MuratReyiz
"""

import tkinter as tk
from tkinter import ttk
from tkinter import messagebox

def veriekle():
    print(onay_kontrol.get())
    if onay_kontrol.get() == "onaylandi" :
        tk.messagebox.showwarning(message="ONAY TAMAM")
    else:
        tk.messagebox.showwarning(message="İŞLEM ONAYLANMADI, KAYIT YAPILAMADI")
    

form = tk.Tk()
form.title("Veri Giriş Formu")
form.geometry("700x550")
ana_frame = tk.Frame(form)
ana_frame.pack() # SARI RENK 

kullanici_bilgileri_frame = tk.LabelFrame(ana_frame, text='Kullanıcı Bilgileri')
kullanici_bilgileri_frame.grid(row=0, column=0) # MAVİ RENK

lbl_adi= tk.Label(kullanici_bilgileri_frame, text='Adı :')
lbl_adi.grid(row=0, column=0)

lbl_soyadi= tk.Label(kullanici_bilgileri_frame, text='Soyadı :')
lbl_soyadi.grid(row=0, column=1)
 
lbl_bolum= tk.Label(kullanici_bilgileri_frame, text='Bölümü :')
lbl_bolum.grid(row=0, column=2)

txt_adi = tk.Entry(kullanici_bilgileri_frame)
txt_adi.grid(row=1, column=0)

txt_soyadi = tk.Entry(kullanici_bilgileri_frame)
txt_soyadi.grid(row=1, column=1)

cmb_bolum = ttk.Combobox(kullanici_bilgileri_frame, 
                         values=['Bilgisayar Programcılığı', 
                                 'Elektronik ve Otomasyon',
                                 'Moda Tasarımı',
                                 'Mekatronik',
                                 'Turizm',
                                 'Muhasebe'])
cmb_bolum.grid(row=1, column=2)

lbl_yas= tk.Label(kullanici_bilgileri_frame, text='Yaş :')
lbl_yas.grid(row=2, column=0)

lbl_uyruk= tk.Label(kullanici_bilgileri_frame, text='Uyruk :')
lbl_uyruk.grid(row=2, column=1)

spn_box_yas = tk.Spinbox(kullanici_bilgileri_frame, from_= 13, to= 110)
spn_box_yas.grid(row=3, column=0)

cmb_uyruk = ttk.Combobox(kullanici_bilgileri_frame, 
                         values=["",
                                 "Türkiye",
                                 "Azerbaycan",
                                 "Bosna Hersek",
                                 "Gürcistan",
                                 "Kazakistan",
                                 "Almanya"])
cmb_uyruk.grid(row=3, column=1)

for kb in kullanici_bilgileri_frame.winfo_children():
    kb.grid_configure(padx =5, pady= 3)
    

kurs_bilgileri_frame = tk.LabelFrame(ana_frame, text="Kurs Bilgileri")
kurs_bilgileri_frame.grid(row=1, column=0)

lbl_kayit = tk.Label(kurs_bilgileri_frame, text="Ders Kaydı Yaptı Mı ?")
lbl_kayit.grid(row=0, column=0)

onay_kontrol = tk.StringVar(value=("onaylanmadi"))

onay_frame = tk.LabelFrame(ana_frame, text="Onay Çerçevesi")
onay_frame.grid(row=2, column=0)

chk_onay = tk.Checkbutton(onay_frame, text="Evet",
                          variable=onay_kontrol,
                          offvalue="onaylanmadi",
                          onvalue="onaylandi")
chk_onay.grid(row=0, column=0)

btn_kaydet= tk.Button(ana_frame, text="Kaydet", command=veriekle)
btn_kaydet.grid(row=3, column=0,sticky='news', padx=14, pady=3)







form.mainloop()