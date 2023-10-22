# -*- coding: utf-8 -*-
"""
Created on Fri Mar 31 10:06:59 2023

@author: MuratReyiz

"""

#isinstance : Nesne ve değerlerin veri tipini karşılastırma yapmak için kullanılır. True yada False döndürür.

items = ["Mic", "Phone", 323.12, 3123.123, "Justin", "Bag", "Cliff Bars", 134]

str_items = []
num_items = []

for i in items:
    if isinstance(i, float) or isinstance(i, int):
        num_items.append(i)
    elif isinstance(i, str):
        str_items.append(i)
    else:
        pass
    
print(num_items)

print(str_items)
