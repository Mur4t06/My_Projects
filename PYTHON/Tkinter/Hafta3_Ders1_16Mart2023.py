# -*- coding: utf-8 -*-
"""
Created on Thu Mar 16 09:15:34 2023

@author: P558
"""
import tkinter as tk

from tkinter import messagebox

root= tk.Tk()
root.title('Form Başlığı')
root.geometry('500x400')


txt_kadi= tk.Entry(root)
txt_kadi.pack()

lbl_bilgi= tk.Label(root, text='')
lbl_bilgi.pack()

def verial():
    lbl_bilgi['text']= txt_kadi.get()
    #messagebox.showwarning(title='başlık', message='mesaj içerik')
   # donut= messagebox.askokcancel(title='başlık', message='mesaj')
   # donut= messagebox.askyesno(title='başlık', message='mesaj')
    donut= messagebox.askyesnocancel(title='başlık', message=txt_kadi.get())
    print (donut)
    if  donut=='True':
        pass
            
def verisil():
    txt_kadi.delete(0,'end')
    lbl_bilgi['text']=''



btn_verial = tk.Button(text='Veri Al', bg='green', command=verial) 
btn_verial.pack()

btn_verisil = tk.Button(text= 'Veri Sil', command=verisil)
btn_verisil.pack()

chkbtn_cinsiyeterkek= tk.Checkbutton(root, text='Erkek')
chkbtn_cinsiyeterkek.pack()

chkbtn_cinsiyetkadin= tk.Checkbutton(root, text='Kadın')
chkbtn_cinsiyetkadin.pack()

rdn_button_sec=tk.Radiobutton(root, text='Kabul Ediyorum', activebackground='blue' ,
                              activeforeground='white',
                              command=verial).pack()


root.mainloop()


