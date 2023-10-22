# -*- coding: utf-8 -*-
"""
Python da listeler

listeler köşeli parantez ile kullanılır

"""

liste = ["Çorum", "Amasya", "Tokat", "Çankırı", "Yozgat", 19, 5, 60,18,6.6]

a = "Araba"

for item in liste:
    print("{} veri tipi : {}"  .format(item, type(item)))
    
    print (item, "veri tipi", type(item))
    
#print (dir(liste))