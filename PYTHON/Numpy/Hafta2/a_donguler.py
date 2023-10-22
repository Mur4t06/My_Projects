# -*- coding: utf-8 -*-
"""
Python da döngüler
while : 
Türkçe karşılığı “-iken” anlamına gelen while kelimesi kodların her defasında tekrarlanmasını sağlar. 
Koşul sağlanıyorsa döngü devam eder, eğer koşul sağlanmıyorsa döngü sona erer.

for : 


sayi1=1
sayi2=6

while sayi1<sayi2 :          #      6<6
    print (sayi1, " ")
    sayi1+= 2 #bu satır ne işe yarıyor?
print ("döngüden çıktı")

#soru: while döngüsü kaç iterasyon çalıştı?

"""

sonsayi=100
ilksayi=1
toplam=0

while ilksayi<=sonsayi :
    toplam+=ilksayi
    ilksayi+=1
    
    if(ilksayi==50):
        break  # döngüyü kırar, döngüyü sonlandırır
    
print ("Sayıların Toplamı : ",toplam)





