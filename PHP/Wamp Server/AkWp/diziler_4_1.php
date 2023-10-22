<?php

/* Kullanıcının girmiş olduğu değerler arasında kullanıcının girmiş olduğu deger kadar rastgele TEK elemanlardan olusan
oluşan bir dizi oluşturun. Oluşan dizinin en küçük elemanını bulun */

if(($_POST['veri1'] = "") || ($_POST['veri2'] = "") || ($_POST['dongu'] = ""))
{
	echo "Eksik Bilgi Girdiniz . ";
}
else
{
	echo $sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$dongu_sayisi = $_POST['dongu_sayisi'];
	$sayi_kucuk = 0;
	$sayi_buyuk = 0;
	$kucuk_eleman = 0;
	
	
	if($sayi1 < $sayi2)
	{
		$sayi_kucuk = $sayi1;
		$sayi_buyuk = $sayi2;
	}
	else
	{
		$sayi_kucuk = $sayi2;
		$sayi_buyuk = $sayi1;
	}
	
	for($i = 0; $i < $dongu_sayisi; $i = $i + 1)
	{
		
		if($rnd_sayi % 2 == 1)
		{
			echo $rnd_sayi = rand($sayi_kucuk, $sayi_buyuk);
			echo '<br>';
		}
		else
		{
			$i = $i - 1;
		}
		
	}
	$kucuk_eleman = $dizi[0];
	
	for($j = 0; $j <count($dizi); $j = $j + 1)
	{
		if($dizi[$j] < $kucuk_eleman)
		{
			$dizi[$j] = $kucuk_eleman;
		}
	}
	
	echo "Dizini küçük elemanı : " .$kucuk_eleman;
}




?>