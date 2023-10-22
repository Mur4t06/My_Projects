<?php

/* 1' den kullanıcının girmiş olduğu sayıya kadar (sayılar dahil ) sayıların toplamını bulan php kodunu yazınız */

$sayi = $_POST['veri1'];
$tpl = 0;


if(($_POST['veri1'] ==""))
{
	echo "Lütfen Bir Sayı Giriniz .";
}
else
{
	for($i=1; $i<=$sayi; $i = $i + 1)
	{
		$tpl=  $tpl + $i;
		echo '<br>';
		echo $tpl;
	}
	echo '<br>';
	echo "1' den " .$sayi . "'ya kadar olan sayıların toplamı : " . $tpl;
}
?>