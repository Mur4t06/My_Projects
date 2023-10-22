<?php

if(($_POST['veri1'] == "") || $_POST['veri2'] == "")
{
	echo "Eksik Bilgi Girildi . ";
}
else
{
	$sayi1 = $_POST['veri1'];
	echo $sayi2 = $_POST['veri2'];
	$sayi_k = 0;
	$sayi_b = 0;
	
	
	if($sayi1 < $sayi2)
	{
		$sayi1 = $sayi_k;
		$sayi2 = $sayi_b;
	}
	else
	{
		$sayi1 = $sayi_b;
		$sayi2 = $sayi_k;
	}
	
	for($i = 0; $i <5; $i = $i + 1)
	{
		echo $rnd = rand($sayi_k, $sayi_b);
		$dizi[$i] = $rnd;
		echo $dizi[$i];
		echo '<br>';
	}


}








?>