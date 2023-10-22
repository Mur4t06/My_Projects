# -*- coding: utf-8 -*-
"""
Created on Fri Apr  7 10:47:25 2023

@author: MuratReyiz
"""

class Kisi:
    def __init__(self, isim, yas):
        self.isim = isim
        self.yas = yas
    def yazdir(self):
        print("Hoşgeldin ", self.isim)
        
class Ogrenci(Kisi):
    def __init__(self, isim, yas, sinif = None):#None yazarak opsiyonel hale getiririz bu da isteğe bağlı girdi yapar.
        Kisi.__init__(self, isim, yas)
        self.sinif = sinif
        
    def yazdir(self, mesaj):
        self.mesaj = mesaj
        print(self.mesaj, self.isim,"Yaşınız :", self.yas, "sınıfınız " , self.sinif)
        
k2 = Ogrenci("Mehmet", 12, "6-İ")
k2.yazdir("Değerli Öğrencimiz Bayramınız Mübarek Olsun")

k3 = Ogrenci("Efe", 25)
k3.yazdir("Eski Öğrencimiz ")

