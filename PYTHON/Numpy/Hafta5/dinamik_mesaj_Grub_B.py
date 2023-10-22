#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Fri Mar 31 16:25:07 2023

@author: m1mac
"""

mesaj = """
Sayın {adi}
Aldığınız Ürün     : {telefon_model}
Ürün Fiyatı        : {urunbedeli} 
Ürün Alış Tarihi   : 31/3/2023
Ürününüzü iyi günlerde kullanın
Sizinle {ceptel} nolu hattınızla iletişime geçilecektir.
-----------------
İmza: Bir Dost
-----------------


"""

satis_listesi = ["Iphone 14 pro max", 45000, "Samsung Z-Flip", 30000, "Huawei zzz",  27000, "Samsung aaa", 55000]
kisiler=["Selim Özdem", 5321793451, "Ayşenur Yıldız", 5321132333, "Gülzade Erkan", 5424556555, "Hüseyin Aygün", 5551222121]


def listeyi_bol(gelen_nesne):
    d1=[]
    d2=[]
    
    for j in gelen_nesne:
        if isinstance(j, float) or isinstance(j, int):
            d1.append(j)
        elif isinstance(j, str):
            d2.append(j)
        else:
            pass
    return d1,d2
    



def mesaj_olustur(gelen_nesne1, gelen_nesne2):
    
    fiyatlar, urunler = listeyi_bol(gelen_nesne1)
    numara, adsoyad = listeyi_bol(gelen_nesne2)
    
    if (len(fiyatlar) ==len(urunler)) and (len(numara)==len(adsoyad)):
        print("veriler sağlıklı")
        i=0
        for gez in adsoyad:
            
            yeni_mesaj = mesaj.format(
                adi= gez,
                telefon_model= urunler[i],
                urunbedeli = fiyatlar[i],
                ceptel= numara[i]              
                )
            i+=1
            print(yeni_mesaj)
    else:
        print("verilerde sorun var. kontrol et")
    
    
    """
    print(fiyatlar)
    print(urunler)
    print(numara)
    print(adsoyad)
    """
    
    
mesaj_olustur(satis_listesi, kisiler)










