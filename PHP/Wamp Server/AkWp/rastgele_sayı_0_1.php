<?php
/* 	kullancının girmiş olduğı iki değer arasındaki rastgele 10 sayının toplamını bulan program */


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
	
	
	for($i=1; $i<=10; $i=$i + 1)
	{
	
		echo $a = rand($sayi_kucuk , $sayi_buyuk);
		echo  "<br>";
		$tpl = $a+ $tpl;
		
	}
	
	echo "Rastgele Sayıların Toplamı." . $tpl;
}


/* 2 ForLU Kısım

if(($_POST['veri1'] =="") || ($_POST['veri2'] ==""))
{
	echo "Lütfen Sayı Giriniz .";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$tpl=0;
	
	
 	if ($sayi1 < sayi2)
	{
		for($i=1; $i<=10; $i=$i + 1)
		{
			echo $a = rand($sayi1 , $sayi2);
			echo "<br>";
			$tpl = $tpl + $a;
		}
	
	}
	else
	{
		for($i=1; $i<=10; $i=$i + 1)
		{
			echo $a = rand($sayi1 , $sayi2);
			echo "<br>";
			$tpl = $tpl + $a;
	    }

	}
}

	echo "Rastgele Sayıların Toplamı." .$tpl;

?>