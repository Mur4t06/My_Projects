<?php

/* Kullanıcın girmiş olduğu değerler arasında kullanıcının girdiği değer kadar rastgele çift elemanlardan oluşan bir dizinin EN KÜÇÜK elemanını bulan programı yazınız . Dizi elemanları ve en küçük dizi elemanını ekrana yazdırın . */

if(($_POST['veri1'] =="") || ($_POST['veri2'] =="") || ($_POST['dongu'] ==""))
{
	echo "Eksik Bilgi Girdiniz. ";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$dongu_sayisi = $_POST['dongu'];
	
	
	if($sayi1 < $sayi2)
	{
		for($i = 0; $i < $dongu_sayisi; $i = $i + 1)
		{
			$rnd = rand($sayi1, $sayi2);
			if($rnd % 2 == 1)
			{
				echo $dizi[$i] = $rnd;
				echo '<br>';
				
			}
			else
			{
				$i = $i - 1;
			}
		}
		$en_kucuk_sayi = $dizi[0];
		for($j = 0; $j < count($dizi); $j = $j + 1)
		{
			if($dizi[$j] < $en_kucuk_sayi)
			{
				$en_kucuk_sayi = $dizi[$j];
			}
		}
		
		echo "En küçük eleman : " .$en_kucuk_sayi;
	
		
	}
}











?>