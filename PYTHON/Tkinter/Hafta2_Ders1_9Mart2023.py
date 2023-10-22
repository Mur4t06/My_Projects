# -*- coding: utf-8 -*-
"""
açıklama satırları 


"""
# bu ilk kod bloğu 

import tkinter as tk
ilkekran= tk.Tk()

ilkekran.title("Soru 1")
ilkekran.geometry('900x600+450+200')
#ilkekran.minsize(400,400)
#ilkekran.maxsize(900,800)
#ilkekran.resizable(True,False)
#ilkekran.state('normal')
#ilkekran.state('zoomed')
#ilkekran.state('iconic')
ilkekran.wm_attributes('-alpha',1)

lbl_Baslik=tk.Label(ilkekran, text='Bu Form Python da oluşturulmuştur', bg='red', fg='white' , font='Times 35 bold')
lbl_Baslik.pack(side=tk.TOP,  fill=tk.X, expand=1)

label1=tk.Label(ilkekran, text='Adı Soyadı', fg='green', bg='black', font='Times 14 bold')
label1.pack(side=tk.RIGHT, fill=tk.Y)

txtadsoyad=tk.Entry(ilkekran, fg='blue', bg='gray')
txtadsoyad.pack(side=tk.RIGHT)

label2=tk.Label(ilkekran, text='Numarası', bg='yellow',  font='Arial 14 bold')
label2.pack(side=tk.RIGHT, fill=tk.Y)

txt_numara=tk.Entry(ilkekran)
txt_numara.pack(side=tk.RIGHT, fill=tk.X)

bizimbuton=tk.Button(ilkekran, text='Ders2 ders2')
bizimbuton.pack(side=tk.LEFT, fill=tk.Y)

ilkekran.mainloop()