<?php

/* Kullanıcını girmiş olduğu değerler arasında kullanıcın girmiş olduğu değer kadar rastgele TEK elemanlardan oluşan bir dizi oluşturun. Dizi elemanlarını ekrana yazdırın. */

if(($_POST['veri1'] =="") || ($_POST['veri2'] =="") || ($_POST['dongu_sayisi'] ==""))
{
	echo "Eksik Bilgi Girdiniz. ";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$dongu_sayisi = $_POST['dongu_sayisi'];
	
	
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
	}
	else
	{
		for($i = 0; $i < $dongu_sayisi; $i = $i + 1)
		{
			$rnd = rand($sayi2, $sayi1);
			
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
	}
}




?>