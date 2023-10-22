items = ["Çorum", 19, "Ankara", 6, "Hatay", 31,"Kahramanmaraş",46]

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


