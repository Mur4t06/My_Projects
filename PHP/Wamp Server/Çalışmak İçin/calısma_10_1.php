<?php

if(($_POST['veri1']) =="" || ($_POST['veri2'] ==""))
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
		for($i = 2; $i < 5; $i = $i + 1)
		{
			echo $rnd = rand($sayi1 , $sayi2);
			echo '<br>';
			$toplam = $toplam + $rnd;	
		}
	}
	else
	{
		for($i = 2; $i < 5; $i = $i + 1)
		{
			echo $rnd = rand($sayi2, $sayi1);
			echo '<br>';
			$toplam = $toplam + $rnd;	
		}
	}
	echo '<br>';
	echo "Sonuç = " .$toplam;
}



?>