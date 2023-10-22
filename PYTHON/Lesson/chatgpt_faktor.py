# -*- coding: utf-8 -*-
"""
Created on Thu Mar 16 15:39:53 2023

@author: MuratReyiz
"""

sayi = int(input("Faktöriyelini hesaplamak istediğiniz sayıyı giriniz : "))

faktoriyel=1

if sayi < 0:
    print("Negatif sayıların fatöriyeli hesaplanmaz.")
elif sayi ==0:
    print("0'ın faktöriyeli 1' dir.")
else:
    for i in range(1,sayi + 1):
        faktoriyel=faktoriyel*i
    print(sayi, "sayısının faktöriyeli" , faktoriyel, "dir.")