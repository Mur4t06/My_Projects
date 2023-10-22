# -*- coding: utf-8 -*-
"""
Created on Fri Mar 24 09:52:00 2023

@author: MuratReyiz


tuple: Sabit veri içeren farklı türden veri türleri barındıran bir çeşit listedir.


"""

demetornek=('Çorum', 19, 'Ramazan','Sahur', 1902)
print(demetornek)

demetornek2 =tuple("abcdefg")
print(demetornek2)


m='Murat'

demetornek3=tuple(m)
print(demetornek3)


#soru: demetornek2 demetine h harfini ekleyiniz.

listeornek2= list(demetornek2)
print(type(listeornek2))

listeornek2.append('h')


demetornek2tekrar=tuple(listeornek2)
print(listeornek2)