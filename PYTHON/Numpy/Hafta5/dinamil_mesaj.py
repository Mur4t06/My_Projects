#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Fri Mar 31 15:42:08 2023

@author: m1mac
"""

satis_listesi = ["Iphone 14 pro max", 45000, "Samsung Z-Flip", 30000, "Huawei zzz",  27000]

""" bir fonksiyon olsun ki: 
bu fonksiyon: satış listesindeki telefonları 
urunler listesine kaydetsin
fiyatları da fiyatlr listesine kaydetsin.
aynı zamanda bu fonksiyon satış toplamını yazdırsın. 
"""

def listeyi_bol(gelen_nesne):
    s=[]
    m=[]
    
    for j in gelen_nesne:
        if isinstance(j, float) or isinstance(j, int):
            s.append(j)
        elif isinstance(j, str):
            m.append(j)
        else:
            pass
    return s,m
    
fiyatlar, urunler = listeyi_bol(satis_listesi)
print(sum(fiyatlar))