<?php

$sayi1 = $_POST['veri1'];
$sayi2 = $_POST['veri2'];

if(($_POST['veri1'] =="") || ($_POST['veri2'] ==""))
{
	echo "Eksik Bilgi Girdiniz";
}
else
{
	if($sayi1>$sayi2)
	{
		echo "Büyük Sayı" .$sayi1;
	}
	elseif($sayi2>$sayi1)
	{
		echo "Büyük Sayı" .$sayi2;
	}
	else
	{
		echo "Sayılar Birbirine eşittir";
	}
	
	
}



?>