# -*- coding: utf-8 -*-
"""
Created on Fri Mar 24 10:28:31 2023

@author: P558

numpy kütüphanesi 
karmaşık matematiksel işlemler için kullanılan kütüphanedir


"""

import numpy as np

numpy_listesi = np.array([1,2,3,4,5,6])
#array: dizi



sayilar_listesi=[1,2,3,4]

numpy_listesi = np.array([ [0,1,2] , [5,4,3] ])
print(numpy_listesi.shape)

numpy_listesi = np.arange(0,30,2).reshape(5,3)


#numpy_listesi [satır,sütun]
print('eleman : ',numpy_listesi[1,2]) # 1 nolu satırın 2. sütunundaki değeri göster
print('eleman : ',numpy_listesi[1, : ]) # 1 nolu satırın bütün sütunlarını göster
print('eleman : ',numpy_listesi[0,0]) # 0 nolu satırın 0. sütunundaki değeri göster
print('eleman : ',numpy_listesi[ : , 0:2 ]) # tüm satırı al -  0dan2  ye kadar (2 dahil değil) olan aralıktaki sütunları al
print('eleman : ',numpy_listesi [1:3 , 0:2] ) # 1den2 ye kadar olan (2 dahil değil) satırları al,   -   0. ve 1. sütunu al

print('eleman : ',numpy_listesi [ 0:2 , 1:3 ]) # 0 ve 1. satırdaki elemanları al, 

sifir = np.zeros((5,3))
bir= np.ones((5,3))
birimmatris = np.eye(5)

#print(numpy_listesi)
#print(numpy_listesi.ndim)











