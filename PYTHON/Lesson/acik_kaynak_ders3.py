# -*- coding: utf-8 -*-
"""
Created on Fri Mar 17 09:26:25 2023

@author: MuratReyiz


Split komutu 
Listeler

"""

metin = "Açık Kaynak Web Programlama"
kelime=metin.split()
print(kelime)

for i in kelime:
   print(i) 
    
#sehirler = "Çorum, Antalya, Hatay, Adana"
#print(sehirler.split(','))



alfabe="abcçdefgh"
metin = "Açık Kaynak Web Programlama"
harfler=list(metin)
print(harfler)

kelime.append("Bahar")
print(kelime)

kelime.insert(0,"TBMYO")
print(kelime)

kelime.extend(harfler)
print(kelime)

# remove listeden eleman çıkarır
# pop da listeden indeks numarasına göre öğe çıkarır.
# indeks yazılmazsa son eleman çıkarılır


kelime.remove("TBMYO")
print(kelime)

kelime.pop(1)
print(kelime)

del kelime[5]
#print(kelime)

#1-100 arasındaki sayılardan oluşan bir liste oluşturalım 

#liste = [x for x in range(1,100)]
#print(liste)

#soru: 1-100 arasındaki çift sayılar 

liste_cift= [y for y in range(2,100,2)]
print(liste_cift)



#soru2: 200- 500 arasındaki 6 ile tam bölünen sayıları listeye ekleyen kodu yazınız.

bol_6 = [z for z in range(200,500) if z % 6 == 0 ]
print(bol_6)



 