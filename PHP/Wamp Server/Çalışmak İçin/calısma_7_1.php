<?php

/* Kullanıcının girdiği iki sayı arasındaki (sayılar dahil) sayıların toplamını bulan php kodunu yazınız */

if($_POST['veri1']==""||$_POST['veri2']=="")
{
	echo ("eksik bilgi girildi");
}
else
{
	$sayi1=$_POST['veri1'];
	$sayi2=$_POST['veri2'];
	$kucuk_sayi=0;
	$buyuk_sayi=0;
	$toplam=0;
	
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
	
	for($i=$kucuk_sayi;$i<=$buyuk_sayi;$i++)
	{
		$toplam=$toplam+$i;
		echo '<br>';
		echo $toplam;
	}
	echo '<br>';
	echo("sayıların toplamı :".$toplam);
	
}














?>