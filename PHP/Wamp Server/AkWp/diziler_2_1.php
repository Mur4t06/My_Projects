<?php

/* Kullanıcının girmiş olduğu iki değer arasında kullanıcın girmiş olduğu değer kadar rastgele elemanlardan oluşan bir dizinin elemanları toplamını bulan programı yazı dizi elemanlarını yazdırın */


if(($_POST['veri1'] == "") || ($_POST['veri2'] == "") || ($_POST['dongu'] == ""))
{
	echo "Eksik Bilgi Girdiniz ";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$dongu_sayisi = $_POST['dongu'];
	$toplam = 0;
	$sayi_kucuk = 0;
	$sayi_buyuk = 0;
	
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
		echo $dizi[$i] = rand($sayi_kucuk, $sayi_buyuk);
		echo '<br>';
		$toplam = $toplam + $dizi[$i];
	}
	
	echo '<br>';
	echo "Sonuç : " .$toplam;
	

	
	
	
}


?>