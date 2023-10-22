<?php

/*Kullanıcnın girmiş oldugu degerler arasında
10 adet rastgele elemandan oluşan dizinin 
eleman sayılarının toplamını bulan programı yazınız*/

if(($_POST['veri1']=="") || ($_POST['veri2']==""))
{
	echo "Eksik Bilgi Girdiniz. ";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$toplam = 0;
	
	if($sayi1 < $sayi2)
	{
		for($i = 0; $i < 10; $i = $i + 1)
		{
			$rnd = rand($sayi1, $sayi2);
			echo $dizi[$i] = $rnd;
			echo '<br>';
			$toplam = $toplam + $dizi[$i];
		}
		
	}
	else
	{
		for($i = 0; $i < 10; $i = $i + 1)
		{
			$rnd = rand($sayi2, $sayi1);
			echo $dizi[$i] = $rnd;
			echo '<br>';
			$toplam = $toplam + $dizi[$i];
		}
		
	}
	
	echo "Rastgele Sayıların Toplamı : " .$toplam;
	
	
}



?>