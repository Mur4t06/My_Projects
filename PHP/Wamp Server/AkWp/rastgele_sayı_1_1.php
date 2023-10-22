<?php

if(($_POST['veri1'] =="") || ($_POST['veri2'] ==""))
{
	echo "Lütfen Sayı Giriniz .";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$tpl=0;
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
	
	
	for($i=1; $i<=20; $i=$i + 1)
	{
		 $a = rand($sayi_kucuk , $sayi_buyuk);
		if($a % 2 != 0)
		{
			
			echo $a;
			echo "<br>";
			$tpl = $tpl + 1;
			
		}	
		
	}
	
	echo "Rastgele Sayıların Toplamı." . $tpl;
}
















?>