# -*- coding: utf-8 -*-
"""
Created on Thu May 25 15:41:58 2023

@author: MuratReyiz
"""

from PyQt5 import uic 

with open ('Kod_form.py','w',encoding="utf-8")as kodlama:
    uic.compileUi("hafta_13_gorsel.ui", kodlama)    
    