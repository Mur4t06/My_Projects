# -*- coding: utf-8 -*-
"""
Created on Thu Mar 23 08:37:09 2023

@author: P558
"""

# Geometrik yöneticiler
#pack
#place
#grid


import tkinter as tk 

form= tk.Tk()
form.title('geometrik yöneticiler')
form.geometry('650x500')




buton2 = tk.Button()
buton2.pack()


def degistir():
   buton2['bg'] = 'Yellow'
   buton2['width']=50
   buton2['height']=4
   buton2['relx']=0.6
   buton2['rely']=0.5
  


def degistir2():
   buton2['bg'] = 'red'
   buton2.place(relx=0.6, rely=0.8, width=202, height=202)


buton = tk.Button(text='TIKLA', fg='Green', bg='Blue' , command=degistir2 )
buton.place(relx=0.5, rely=0.5, width=100, height=100)


"""
fonksiyon özellikleri
TIKLA butonuına tıkladığımızda buton2nin rengi değişin
buton2 nin genişliği ve yüksekliği değişsin
buton2 nin konumu değişsin


"""

"""https://medium.com/@ahmedsemihozmekik/aray%C3%BCz-tasar%C4%B1m%C4%B1-python-7304a994d2e2
https://www.pythonguis.com/faq/pack-place-and-grid-in-tkinter/

#Bu web siteleri örnek olarak öğrencilere verildi. 5. haftaya kadar inceleyecekler
"""

form.mainloop()