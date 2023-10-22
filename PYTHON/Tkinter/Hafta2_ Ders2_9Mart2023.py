# -*- coding: utf-8 -*-
"""
anchor= 's' 
s : aşağı
n: yukarı
w: sol
e: sağ

"""

import tkinter as tk

anaform= tk.Tk()
anaform.title('Ana Form')
anaform.geometry('1000x500')

#label = tk.Label(anaform, text= 'enesin labeli')
#label.pack(side = tk.TOP, expand=1)

label=tk.Label(anaform, text="Salih in labeli")
label.pack(expand=1, anchor="center")

btn_ekle= tk.Button(anaform, text='EKLE' , bg='red')
btn_ekle.pack(expand=1, anchor='se')

lbl_ad= tk.Label(anaform, text='Adı :')
lbl_ad.pack(pady=10)



anaform.mainloop()