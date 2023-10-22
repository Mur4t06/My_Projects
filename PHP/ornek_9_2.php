<?php

if($_POST['veri1']=="" || $_POST['veri2']=="")
{
	echo "Eksik Bilgi Girildi";
}
else
{
	$sayi1=$_POST['veri1'];
	$sayi2=$_POST['veri2'];
	$sayi_kucuk=0;
	$sayi_buyuk=0;
	$tpl=0;
	
	if($sayi1<$sayi2)
	{
		$sayi_kucuk=$sayi1;
		$sayi_buyuk=$sayi2;
	}
	else
	{
		$sayi_kucuk=$sayi2;
		$sayi_buyuk=$sayi1;
	}
	
	for($k=($sayi_kucuk+1); $k<$sayi_buyuk; $k=$k+1)
	{
		if($k % 4==0)
		{
			$tpl=$tpl+1;
		}
	}
	
	echo "Dörde bölünenlerin sayısı : ".$tpl;
	
}


?>