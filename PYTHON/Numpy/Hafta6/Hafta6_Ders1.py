#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Fri Apr  7 09:52:13 2023

@author: m1mac
"""

class Sevimlidostlar():
    ad      = 'kedi'
    ses     = 'miyav'
    boyut   = "minnak"
    renk    = "siyah"
    
    def renk_gonder(self):
        return self.renk
    
    def ses_gonder(self):
        return self.ses

kopek = Sevimlidostlar() #kope nesnesi oluşturuldu. Bu nesne sevimlidostlar sınıfndan oluşturuldu

kopek.ses_gonder()   # kopek nesnesi sevimlidostlar sınıfından ses_gonder fonksiyonuna ulaştı

kopek.ad= 'KÖPÜŞ'
kopek.ses ="HAV"
kopek.boyut = "ortaboy"

print(kopek.ad)
print(kopek.boyut)


class Kisi :
    def __init__(self, isim,yas):
        self.isim = isim
        self.yas = yas
    
    def yazdir (self):
        print("Merhaba, adım ", self.isim, ", yaşım ", self.yas)
        
        
k1 = Kisi("Salim", 23)

#print(k1.isim)
#print(k1.yas)

k1.yazdir()





















