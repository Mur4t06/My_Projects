items = ["Çorum", 19, "Ankara", 6, "Hatay", 31,"Kahramanmaraş",46]

"""
metinsel_degerler = []

sayisal_degerler = []

for i in items:
    if isinstance(i, float) or isinstance(i, int):
        sayisal_degerler.append(i)
    elif isinstance(i, str):
        metinsel_degerler.append(i)
    else:
        pass

print(metinsel_degerler)

print(sayisal_degerler)
"""
def diziyi_parcala (parametre):
    m_list = []
    s_list = []
    
    for i in items:
        if isinstance(i, float) or isinstance(i, int):
            s_list.append(i)
        elif isinstance(i, str):
            m_list.append(i)
        else:
            pass
    return s_list, m_list

print (diziyi_parcala(items))

m,s = diziyi_parcala(items)


import datetime

unf_mesaj = """{sehiradi} Şehrimize Hoşgeldiniz
Kurtuluş yılı {kurulus}
Bilgi Günceleme TArihi {guncel_tarih}

"""

def mesaj_olustur(sehir, deger):
    mesaj=[]

    if len(sehir) == len(deger):
        i =0

        bugun = datetime.date.today()

        tarih = '{bugun.day}/{bugun.month}/{bugun.year}'.format(bugun=bugun)

        for il in sehir:
            ky= "%.0f" %(deger[i])

            nm=unf_mesaj.format(
            sehiradi = il,
            guncel_tarih=tarih,
            kurulus = ky
            )
            i += 1
            print(nm)



sehirler = ["Çorum","Amasya", "Yozgat"]
kurtulus_yili = [1730.89, 1180, 230]


mesaj_olustur(sehirler,kurtulus_yili)