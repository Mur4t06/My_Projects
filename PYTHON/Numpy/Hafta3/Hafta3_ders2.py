# -*- coding: utf-8 -*-
"""
Created on Fri Mar 17 14:24:02 2023

@author: P558

Split Fonksiyonu +
list Fonksiyonu +
Listeler ve özellkleri

"""
#split fonksiyonu
metin = 'Açık Kaynak Web Programlama'
kelime = metin.split()

sehirler='Çorum,Malatya, Hatay, Adana'
kelime= sehirler.split( ','  )

for a in kelime:
    print(a)
    
print (kelime)

kelime_list = list(metin)

s=123
# kelime_list = list(s) #bu kodun çalışması için s değişkenini stringe çevirmek gerekli 

print(kelime_list[0])

#listeye eleman eklemek
    #append fonksiyonu listenin sonunda eleman ekler
    
sehirler_list=['Ankara', 'Çorum']
sehirler_list.append('Antalya')

    #insert fonksiyonu listede araya, ya da istenilen index e eleman ekler
sehirler_list.insert(1, 'Hakkari')

    #extend fonksiyonu listeleri birlştirir
kelime_list.extend(sehirler_list)

#Listeden eleman çıkartmak
kelime_list.remove('Ankara')

kelime_list.pop(5)

del kelime_list[27]

del kelime_list

#print (kelime_list)



#liste üreteci 
#1-den 100 e kadar olan sayılardan oluşan bir liste hazırla
#sayilar= [1,2,3,4,5,........97,98,99,100]

sayilar = [i for i in range(1,101)]

"""
sayilar2 =[]
for i in range (1,101):
    sayilar2 += [i]
print (sayilar2)
"""


#200-500 arasındaki 7 ile tam bölünen sayılardan oluşan bir liste hazırla

yediilebolunen= [x for x in range(200,501) if x%7==0]






