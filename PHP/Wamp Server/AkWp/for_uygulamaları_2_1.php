<?php

if(($_POST['veri1'] =="") || ($_POST['veri2'] ==""))
{
	echo "Lütfen Sayı Giriniz !";
}
else
{
	$sayi1=$_POST['veri1'];
	$sayi2=$_POST['veri2'];
	$sayi_kucuk=0;
	$sayi_buyuk=0;
	$tpl=0;
	
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
	for($i=($sayi_kucuk); $i<=$sayi_buyuk; $i=$i + 1)
	{
		$tpl= $tpl + $i;
	}
	echo "Sayıların Toplamı : ".$tpl;
	
	// kullanıcının girmiş olduğu iki değer arasındaki tek sayıların toplamı
	





}
?>