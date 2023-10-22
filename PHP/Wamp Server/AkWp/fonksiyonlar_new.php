<?php
function fnk_mesaj()
{
	echo "fonksiyon içerisindeyiz";
}

function fnk_mesaj_parametreli($a)
{
	echo $a;
}

function fnk_topla($a,$b)
{
	$toplam=$a+$b;
	return $toplam;
}
function fnk_faktoriyel($a)
{
	$sonuc=1;
	for($i=1; $i<=$a; $i=$i+1)
	{
		$sonuc=$sonuc*$i;
	}
		return($sonuc);
}

function fnk_carpim($a,$b)
{
	$sonuc=$a*$b;
	return $sonuc;
}

function fnk_cikar($a,$b)
{
	return $a-$b;
}
function fnk_bolme($a,$b)
{
	return $a/$b;
}
function fnk_dizi_olustur($a, $b, $c)
{
	for($i=0; $i<$c; $i=$i+1)
	{
		$dizi[$i]=rand($a,$b);
	}
	return $dizi;

/* Parametre olarak almış olduğu bir dizinin elemanlarındann kaç tanesinin tek olduğunu bulan ve sonucu gerş gönderen bşr fonksiyon 
yazınız ve kullanınız ?
- Parametre olarak almış olduğu bir dizinin elemanlarını yazdıran bir fonksiyon yazınız ?*/
}
function fnk_dizinin_tek_elemanlari($a)
{
	$toplam=0;
	for($i=0; $i<count($a); $i=$i+1)
	{
		if ($a[$i] % 2 == 1)
		{
			$toplam = $toplam + 1;
		}
	}
	
	return $toplam;
}
function fnk_dizinin_elemanlari_ekrana_yazdir($b)
{
	for($i=0; $i < count($b); $i = $i + 1)
	{
		echo $b[$i];
		echo '<br>';
	}
}

/* Parametre olarak almış oldugu degerler arasında Parametre olarak almış olduğu boyut kadar TEKRAR ETMEYEN ELEMANLARDAN OLUŞAN bir dizi oluşturun ve bu diziyi geri gönderen bir fonksiyon yazınız ?*/

function fnk_tekrar_etmeyen_degerli_dizi($start, $finish, $repeat)
{
	$kontrol = 0;
	for($i=0; $i<$c; $i=$i+1)
	{
		$rand_sayi=rand($start,$finish);
		for($k=0; $k<$i; $i = $i + 1)
		{
			if($rand_sayi == $dizi[$k])
			{
				$kontrol = 1;
			}
			else
			{
				$i = $i -1;
			}
			
		}
	}
}

function fnk_asal_mi($a)
{
	$kontrol = 0;
	
	for($i = 2; $i < $a; $i = $i + 1)
	{
		if($a % $i == 0)
		{
			$kontrol ++;
		}
	}
	if($kontrol == 0)
	{
		echo "Girilen Sayı Asal Sayıdır.";
	}
	else
	{
		echo "Girilen Sayı Asal Sayı Değildir.";
	}
	
	return($kontrol);
}

/*(4! + 5x) % (4y - 3z) yi fonksiyonlarla yapın */




//$sonuc=fnk_topla(5,6);
//fnk_mesaj_parametreli($sonuc);


?>