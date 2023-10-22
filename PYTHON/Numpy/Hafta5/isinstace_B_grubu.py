#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Fri Mar 31 14:51:09 2023

@author: m1mac
"""
# isinstance: bir nesne ya da liste,demet gibi bir veri kaynağındaki elemanların
# ni sorgular, True, ya  da false değeri döndürür.

liste = ["Çorum",19,"Amasya", 5, "Antalya", 7, "Ankara", 6, "Nevşehir",50, "Alaca",19.5]


def listeyi_parcala(p1):
    #işlemler
    str_olanlar = []
    sayisal_olanlar=[]
    
    for i in p1:
        if isinstance(i, float) or isinstance(i,int):
            sayisal_olanlar.append(i)
        elif isinstance(i, str):
            str_olanlar.append(i)
        else:
            pass
    
    return str_olanlar,sayisal_olanlar
    

x,y= listeyi_parcala(liste)

"""
#liste.sort()
#a-z
str_olanlar.sort(key=str.lower)

#z-a
str_olanlar.sort(key=str.lower, reverse=True)

sayisal_olanlar.sort(reverse=True)


toplam = sum(sayisal_olanlar)
ortalama = toplam/ len(sayisal_olanlar)
"""