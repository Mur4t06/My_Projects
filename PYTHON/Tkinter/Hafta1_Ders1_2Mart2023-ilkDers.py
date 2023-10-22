# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""
# bu ilk kod bloğu 

import tkinter as tk
ilkekran= tk.Tk()

ilkekran.title('Form Başlığı')
label1=tk.Label(text='bu bir etiket Label', fg='green', bg='black', font='Times 30 italic')

label1.pack()
ilkekran.mainloop()