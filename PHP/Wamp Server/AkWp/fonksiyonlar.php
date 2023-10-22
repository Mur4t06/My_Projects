<?php

//fonksiyonlar
//parametreli //parametresiz
//geriye değer gönderen // göndermeyen


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

//$sonuc=fnk_topla(5,6);
//fnk_mesaj_parametreli($sonuc);

function fnk_degerler_arası($a, $b)
{
	$degerler_arasi_tpl=0;
	
	
	for($i=($a+1); $i<$b; $i =$i+1)
	{
		$degerler_arasi_tpl= $degerler_arasi_tpl+$i;
	}
	
	return $degerler_arasi_tpl;
}

function fnk_5e_bolunen($a, $b)
{
	$bolum=0;
	
	
	for($i=($a+1); $i<$b; $i =$i+1)
	{
		if($i % 5 ==0)
		{
			$bolum = $bolum + 1;
		}
	}
	
	return $bolum;
}


/*parametre olarak almış olduğu iki değer arasındaki sayıların toplamını bulan ve sonucu geri gönderen bir fonksiyon yazınız.
degerler dahil değil?*/


/*parametre olarak almış olduğu iki değer arasındaki 5 e bölünen sayıların sayısını bulan ve sonucu geri gönderen bir fonksiyon yazınız.
degerler dahil değil?*/

?>