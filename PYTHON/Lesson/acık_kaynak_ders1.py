# -*- coding: utf-8 -*-
"""
Created on Fri Mar  3 09:28:45 2023

@author: MuratReyiz
"""

print ("Merhaba Dünya")

ay=12
sehir="ANKARA"
km=30.5

print(ay)
print(sehir)
print(km)

deger1="ISPARTA"
deger2="Güller Diyarı"

print(deger1, " " , deger2)

if km<ay:
    print(km)
else:
    print("""ay km den büyüktür""")
    print("""TMBYO""")
    print("""Geçmiş olsun Türkiyem""")
    
kullaniciadi="admin"
sifre="123456"

if(kullaniciadi=="admin" and sifre=="123456"):
    print("kullanıcı girişi algılandı")
else:
    print("kullanıcı girişi hatalı")
    
"""isim= input("adınız : ")
soyadiniz= input ("soyadınız: ")
yas= int(input("yaş: "))
egitim_durumu= input("Eğitim durumunuz: ")

if (yas>17):
    if(egitim_durumu=="Lise" or egitim_durumu=="Üniversite"):
        print(f'{isim} ehliyet alabilirsin')
    else:
        print(f'{isim} ehliyet almak için eğitim durumu yetersiz')
else:
    print(f'{isim} yaşınız ehliyet almak için yeterli değildir')
""" 

taban= int(input("üçgeninizin tabanını yazınız : "))
yukseklik= int(input("üçgeninizğin yüksekliğini yazınız : "))

sonuc= (taban * yukseklik) / 2

print("Üçgeninizin Alanı" , sonuc)






