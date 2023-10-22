# -*- coding: utf-8 -*-
"""
Created on Fri Apr  7 08:59:49 2023

@author: MuratReyiz
"""

kisiler = ["Selim Özdem", "selimozdem@gmail.com",
           "Cihat Eser", "cihateser@gmail.com",
           "Lütfullah Turan", "lutfullah@gmail.com",
           "Murat Çınar", "muratcinar@gmail.com",
           ]



def diziyi_parcala (parametre):
    ad_soyad = []
    mail_adres = []
    
    for i in kisiler:
        if isinstance(i, str) and i == 1 and i +2:
            ad_soyad.append(i)
        elif isinstance(i, str) and i == 2 and i+2:
            mail_adres.append(i)
        else:
            pass
    return ad_soyad, mail_adres
print(diziyi_parcala(kisiler))
            

