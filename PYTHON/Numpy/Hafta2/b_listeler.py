# -*- coding: utf-8 -*-
"""
Python da listeler
"""
liste =  ["Çorum", "Amasya","Tokat","Yozgat", 19, 5, 60, 6.6] 

print (type(liste))

for item in liste:
    #print (item, "  değeri  ", type(item))
    print ("{} verisinin tipi  : {} " .format(item, type(item)))

print(dir(list))

    