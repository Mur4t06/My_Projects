<?php

/* Kullanıcının girmiş oldugu degerler arasında yine
Kullanıcının girmiş oldugu deger kadar rastgele üretilen sayılardan
kaç tanesi 5' e tam bölünebilir ? sayıları göstericez
*/

if($_POST['veri1']=="" || $_POST['veri2']=="" || $_POST['veri3']=="")
{
	echo "Eksik bilgi girildi";
}
else
{
	$sayi1=$_POST['veri1'];
	$sayi2=$_POST['veri2'];
	$adet=$_POST['veri3'];
	
	$kucuk_sayi=0;
	$buyuk_sayi=0;
	$say=0;
	
	if($sayi1<$sayi2)
	{
		$kucuk_sayi=$sayi1;
		$buyuk_sayi=$sayi2;
	}
	else
	{
		$kucuk_sayi=$sayi2;
		$buyuk_sayi=$sayi1;
	}
	
	for($i=1;$i<=$adet;$i=$i+1)
	{
		$rs=rand($kucuk_sayi,$buyuk_sayi);
		
		if($rs%5==0)
		{
			echo $rs;
			echo '<br>';
			$say=$say+1;
		}
	}
	echo "5' e bölünen sayıların sayısı = ".$say;
	
	
}








?>