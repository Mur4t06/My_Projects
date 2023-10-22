<?php

//fonksiyonlar
// parametreli/ parametresiz
// geriye deger gönderen / göndermeyen

function fnk_mesaj()//
{
	echo "fonjksiyon içerisindeyiz";
}

// dışarıdan almış oldugu parametreyi ekrana
// mesaj olarak veren bir fonksiyon
function fnk_mesaj_parametreli($a)
{
	echo $a;
}

//fnk_mesaj();
//fnk_mesaj_parametreli("akif");

//dışarıdan almış oldugu iki degerin toplamını bulan
//sonucu geri gönderen bir fonksiyon yazalım,
function fnk_topla($a,$b)//$a=5 $b=6
{
	$toplam=$a+$b;
	return $toplam;
}
//$sonuc=fnk_topla(5,6);
//fnk_mesaj_parametreli($sonuc);

/*parametre olarak almış oldugu bir sayının
faktöriyelini hesaplayan ve sonucu geri gönderen
bir fonksiyon yazınız ve kullanınız*/
function fnk_fk($a)
{//4!=1*2*3*4
	$sonuc=1;
	for($i=1; $i<=$a; $i=$i+1)
	{
		$sonuc=$sonuc*$i;
	}
	
	return $sonuc;
	
}

/*
parametre olarak almış oldugu 2 değeri çarpan
ve sonucu geri gönderen bir fonksiyon yazınız


*/
function fnk_carpim($a,$b)
{
	return $a*$b;
}

/*- Parametre olarak almış olddugu 2 degerin
farkını alan bir fonksiyon yazınız ?

- (x!+4y)/(3t-2z)= formülünü sadece yazmış oldugunuz
fonksiyonlarla hesaplatıp sonucu ekrana yazdırınız */

function fnk_fark($a,$b)
{
	return $a-$b;
}

function fnk_bolme($a,$b)
{
	return $a/$b;
}


/* parametre olarak almış oldugu iki deger
arasındaki sayıların toplamını bulan ve sonucu 
geri gönderen bir fonksiyon yazınız? 
degerler dahil degil */
function fnk_ara_topla($a,$b)
{
	$toplam=0;
	for($i=($a+1); $i<$b; $i=$i+1 )
	{
		$toplam=$toplam+$i;
	}
	
	return toplam;
}

/* parametre olarak almış oldugu iki deger
arasındaki 5 e bölünen sayıların 
sayısını bulan ve sonucu 
geri gönderen bir fonksiyon yazınız? 
degerler dahil  */
function fnk_5_bolunenler($a,$b)
{
	$say=0;
	for($i=$a; $i<=$b; $i=$i+1)
	{
		if($i%5==0)
		{
			$say=$say+1;
		}
	}
	return $say;
	 
}
/*- parametre olarak almış olduğu bir degerin 
mutlak degerini alan bir fonksiyon yazınız
(|a|+(4b)!)/(5c-2d)=
sadece fonksiyon kullanarak çözünüz
gerekli BÜTÜN KONTROLLER SAĞLANACAK

*/

function fnk_mutlak($a)
{
	if($a<0)
	{
		$a=$a*-1;
	}
	return $a;
}
/*
Parametre olarak almış oldugu 2 deger arasında
yine parametre olarak almış oldugu boyut kadar,
rastgele elemanlardan oluşan bir dizi oluşturan
ve diziyi geri gönderen bir fonksiyon yazınız ?
*/

function fnk_dizi_olustur($a,$b,$c)// a-baslangıç b-bitis c-boyut
{

	for($i=0; $i<$c; $i=$i+1)
	{
		$dizi[$i]=rand($a,$b);
	}
	return $dizi;
}

/*parametre olarak almış oldugu dizinin elamanlarını 
toplamını bulan ve sonucu geri gönderen bir fonksiyon 
yazınız*/

function fnk_dizi_eleman_toplam($a)
{
	$toplam=0;
	for($i=0; $i<count($a); $i=$i+1)
	{
		$toplam=$toplam+$a[$i];
	}
	
	return $toplam;
}








?>