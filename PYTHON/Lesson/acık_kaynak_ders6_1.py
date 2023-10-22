# -*- coding: utf-8 -*-
"""
Created on Fri Apr  7 09:54:47 2023

@author: MuratReyiz
"""
class sevimli_dostlar():
    ad = 'kedi'
    ses = 'miyav'
    boyut = 'minik'
    renk = "siyah"

    def renk_gonder(self):
        return self.renk
    
    def ses_gonder(self):
        return self.ses

kopek = sevimli_dostlar()
kopek.ses_gonder()

kopek.ad = "Köpüş"
kopek.ses = "Hav"
kopek.boyut = "Orta"
kopek.renk = "Sarı"

print(kopek.ad)


class Car:
    def __init__(self, name, type, engine, hp):
        self.name = name
        self.type = type
        self.engine = engine
        self.hp = hp
        
car_1 = Car("Ferrari", "SuperSport", "Gasoline", 4000)
car_2 = Car("Tofaş", "Basic", "LPG", 1600)

print(car_1.name)
print(car_1.type)
print(car_1.engine)
print(car_1.hp)

print(car_2.name)
print(car_2.type)
print(car_2.engine)
print(car_2.hp)
        
