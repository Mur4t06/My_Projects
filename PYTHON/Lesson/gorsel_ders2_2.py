# -*- coding: utf-8 -*-
"""
Created on Sun Mar 12 14:48:43 2023

@author: MuratReyiz
"""

import tkinter as tk 

anaform=tk.Tk()

anaform.title("Ana Form")
anaform.geometry("600x500")


btn_ekle=tk.Button(anaform, text="EKLE", bg="blue")
btn_ekle.pack(expand=1, anchor="n")

label1=tk.Label(anaform, text="Efe", bg="red",fg="blue")
label1.pack(expand=1, anchor="n")


anaform.mainloop()