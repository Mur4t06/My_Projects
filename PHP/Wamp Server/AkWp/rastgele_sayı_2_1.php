<?php

/* Kullanıcının girmiş olduğu değerler arasında yine kullanıcının girmiş olduğu değer kadar rastgele üretilen sayılardan 
kaç tanesi 5'e tam bölünrbilir ? (Sayıları da yazdır.)*/

if(($_POST['veri1'] =="") || ($_POST['veri2'] ==""))
{
	echo "Lütfen Sayı Giriniz .";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$sayi3 = $_POST['veri3'];
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
	
	
	for($i=1; $i<=$sayi3; $i=$i + 1)
	{
		 $a = rand($sayi_kucuk , $sayi_buyuk);
		if($a % 5 == 0)
		{
			
			echo $a;
			echo "<br>";
			$tpl = $tpl + 1;
			
		}	
	}

	echo "5'e Bölünen Sayı Miktarı." .$tpl;
}

?>