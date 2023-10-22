# -*- coding: utf-8 -*-
"""
Created on Fri Mar 24 10:27:08 2023

@author: MuratReyiz



numpy kütüphanesi
karmaşık matematiksel işlemler için kullanılan kütüphanedir.

"""

import numpy as np 

numpy_listesi = np.array([1,2,3,4,5,6])

print(numpy_listesi)



numpy_listesi = np.arange(0,30,2).reshape(5,3)


print('eleman :', numpy_listesi[0:2, 1:3])
#print(numpy_listesi.shape)
print(numpy_listesi.ndim)

sifir = np.zeros((5,3))
bir = np.ones((5,3))
birimmatris = np.eye((2))
