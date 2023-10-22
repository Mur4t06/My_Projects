# -*- coding: utf-8 -*-
"""
Created on Fri Mar 17 09:30:06 2023

Split fonksiyonu
List fonksiyonu
"""
#split fonksiyonu
metin = 'Açık Kaynak Web Programlama Dersi'
kelime = metin.split()
print( kelime )

for tekkelime in kelime:
    #print(tekkelime)
    pass

#sehirler = 'çorum, antalya, hatay, adana'
#print (sehirler.split(', '))


#list fonksiyonu
alfabe = 'abcçdefg'
harfler= list(alfabe)
##print (harfler)

##print(list(range(30)))

#listelere öğe eklemek

#append fonksiyonu
    #Append Metodu, kendisine gönderilen değeri listenin sonuna ekler. 
    #Append metodu ile liste sonuna sadece bir elaman eklenebilmektedir.
    #['Açık', 'Kaynak', 'Web', 'Programlama', 'Dersi']
kelime.append('Bahar')
print(kelime)

#insert fonksiyonu 
kelime.insert(4, 'TBMYO')
print(kelime)

#extend fonksiyonu, listeleri genişletir, birleştirir.
kelime.extend(harfler)
print (kelime)

#listeden öğe çıkarmak
    #remove fonksiyonu
kelime.remove('TBMYO')

    #pop fonksiyonu
kelime.pop()


    #del fonksiyonu
del kelime[5]


del kelime
#print(kelime)

#Liste Üreteçleri 
    #1-100 arasındaki sayılardan oluşan bir liste oluşturalım 
#liste=[1,2,3....98,99,100]

liste=[x for x in range(1,100)  ]
print(liste)

# soru: 1-100 arasındaki çift sayıları listeye ekleyen kodu yazınız

ciftsayilar = [x for x in range(2,101,2)]
print(ciftsayilar)

# soru2 : 200-500 arasındaki 6 ile tam bölünen sayıları listeye ekleyen kodu yazınız

#altiilebolunen = [x for x in range(200,501) if x%6 ==0]
#print(altiilebolunen)

altiilebolunen =[]
for x in range(200,500):
    if x%6==0:
       altiilebolunen += [x]
print (altiilebolunen)





















