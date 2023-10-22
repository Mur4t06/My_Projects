<?php

/* Kullanıcının girmiş olduğu değerler arasında kullanıcın belirlediği eleman sayısı kadar rastgele elemanlardan oluşan bir dizi içerisnden kaç tane çift sayının olduğunu bulan bir program yazınız. Dizi elemanları görünecek. */

if(($_POST['veri1'] =="") || ($_POST['veri2'] =="") || ($_POST['dongu_sayisi'] ==""))
{
	echo "Eksik Bilgi Girdiniz. ";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$dongu_sayisi = $_POST['dongu_sayisi'];
	$say = 0;
	
	if($sayi1 < $sayi2)
	{
		for($i = 0; $i < $dongu_sayisi; $i = $i + 1)
		{
			echo $dizi[$i] = rand($sayi1, $sayi2);
			echo '<br>';
			
		}
		for($j = 0; $j < count($dizi); $j = $j + 1)
		{
			if($dizi[$j] % 2 == 0)
			{
				$say = $say + 1;
			}
		}
		
		echo "Dizideki Çiftlerin Sayısı : " .$say;
	
	}
	else
	{
		for($i = 0; $i < $dongu_sayisi; $i = $i + 1)
		{
			echo $dizi[$i] = rand($sayi2, $sayi1);
			echo '<br>';
			
		}
		for($j = 0; $j < count($dizi); $j = $j + 1)
		{
			if($dizi[$j] % 2 == 0)
			{
				$say = $say + 1;
			}
		}
		
		echo "Dizideki Çiftlerin Sayısı : " .$say;
	
	}
}
	










?>