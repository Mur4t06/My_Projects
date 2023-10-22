# -*- coding: utf-8 -*-
"""
Python da döngüler

While
Türkçe karşılığı “-iken” anlamına gelen while kelimesi kodların her defasında tekrarlanmasını sağlar.
 Koşul sağlanıyorsa döngü devam eder, eğer koşul sağlanmıyorsa döngü sona erer.


sayi1=1
sayi2=10

while sayi1<=sayi2:
    print(sayi1," ")
    sayi1+=1
    if(sayi1==5) :
        break # döngüyü kırar, sonlandırır

  
print ("döngünün işi bitti")

#Soru : While kullanarak 1 den 10a kadar olan sayıların toplamını yazdıran python kodu

i=1
toplam=0
while i <= 10:
    toplam+=i
    i+=1
print (toplam)    

#Soru : While kullanarak 1 den 10a kadar olan tek sayıların toplamını yazdıran python kodu
"""
tek=1
tek_toplam=0
while  tek<=1000000:
    print (tek)
    tek_toplam+=tek
    tek+=2
print (tek_toplam)


x=0
toplam2=0
while x<=1000000:
    print (x)
    if (x%2 !=0):
        toplam2+=x
    x+=1
print ("Toplam 2: ", toplam2)





