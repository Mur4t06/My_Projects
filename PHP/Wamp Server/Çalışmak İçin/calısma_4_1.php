<?php

/* Kullanıcının girmiş olduğu iki sayının modunu bulunuz */

$sayi1 = $_POST['veri1'];
$sayi2 = $_POST['veri2'];
$sonuc = 0;


if(($_POST['veri1'] =="") || ($_POST['veri2'] ==""))
{
	echo "Lütfen Sayı Giriniz";
}
else
{
	$sonuc = $sayi1 % $sayi2;
	
	echo "Bölümünden Kalan : " .$sonuc; 
}
?>