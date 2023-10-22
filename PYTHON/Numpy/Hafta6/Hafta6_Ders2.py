#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Fri Apr  7 10:49:28 2023

@author: m1mac
"""

class Kisi:
    def __init__(self, isim, yas):
        self.isim = isim
        self.yas = yas
        
    def yazdir (self):
        print("Hoşgeldin ", self.isim)

class Ogrenci(Kisi):
    def __init__(self, isim, yas,sinif=None):
        Kisi.__init__(self, isim, yas)
        self.sinif=sinif
    
    def yazdir(self):
        print("Hoşgeldiniz değerli öğrencimiz . ", self.isim, "Yaşınız ", self.yas ," sınıfınız ",self.sinif)

k2 = Ogrenci("Mehmet", 12, "6-İ")
k2.yazdir()

k1 = Kisi("Nuri", 41)
k1.yazdir()

#SORU: ÖDEV: Ogrenci sınıfında yazdır fonksiyonuna dışardan metin gönderelim. 
#Örn : {isim} Bayramın mübarek olsun 
        
k3 = Ogrenci("Esra", 32)
k3.yazdir()

k4= Ogrenci('Murat', 21)
k4.yazdir()