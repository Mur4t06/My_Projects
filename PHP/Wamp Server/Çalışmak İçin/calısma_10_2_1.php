<?php

if(($_POST['veri1']=="") || ($_POST['veri2']==""))
{
	echo "Eksik Bilgi Girdiniz. ";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$sayi_k = 0;
	$sayi_b =0;
	$toplam = 0;
	

	if($sayi1 < $sayi2)
	{
		$sayi_k = $sayi1;
		$sayi_b = $sayi2;
	}
	else
	{
		$sayi_b = $sayi1;
		$sayi_k = $sayi2;
	}
	
	for($i = 0; $i < 3; $i = $i + 1)
	{
		echo $rnd = rand($sayi_k, $sayi_b);
		echo'<br>';
		$toplam = $toplam + $rnd;
	}
	echo "Rastgele Sayıların Toplamı : " .$toplam;
}






?>