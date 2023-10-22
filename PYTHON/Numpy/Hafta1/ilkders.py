# -*- coding: utf-8 -*-
"""
Created on Fri Mar  3 09:29:06 2023

@author: P558
"""

print("""Merhaba""")

ay=12
sehir="CORUM"
km=30.5
#print(ay)
#print(sehir)
#print(km)

#print(ay,"istege gore yazılan metin",sehir)

kullaciciadi="admin"
sifre=123456

if (kullaciciadi=="admin" and sifre==123456):
    print("kullanıcı girişi yapıldı")
else:
   print("hatalı giriş")
   
isim = input("adınız  :")
yas = input("yaşınız  :")
egitim = input("eğitim durumunuz  :")


yas=int(yas)

if (yas>17) :
    if (egitim=="lise" or egitim=="üniversite"):
        print(f'{isim} ehliyet alabilirsiniz')
    else:
        print(f'{isim} eğitim durumunuzdan dolayı ehliyet alamazsınız ')
else:
    print(f'{isim} yaşınız uygun olmadığından ehliyet alamazsınız')
        
        
        
        
        
        
        
        
        
