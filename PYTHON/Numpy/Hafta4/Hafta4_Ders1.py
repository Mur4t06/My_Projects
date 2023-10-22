# -*- coding: utf-8 -*-
"""
Created on Fri Mar 24 09:52:06 2023

@author: P558
Demetler

tuple: Sait veri içeren farklı türden veri türleri barındıran bir çeşit listedir.


"""

demetornek = ('Çorum', 19, 'Ramazan', 'Sahur', 1902)
print (demetornek)

demetornek2= tuple('abcde')
print(demetornek2)

s='selim'

demetornek3= tuple(s)
print(demetornek3)

l= ['ali','veli']
d=('ali', 'veli')

print (d[1])

#Soru: demetornek2 değişkeninde bulunan değerlere f elemanını ekleyiniz. 
#Çözüm: demet listeye dönüştürülr. değişiklik ytapılır. Sonra tekrar demet e dönüştürülür 

tmp = list(demetornek2)
tmp.append('f')

demetornek2 = tuple(tmp)

demetornek.append('Ankara')
print(demetornek)






