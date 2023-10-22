<?php

$sayi1=$_POST['veri1'];
$sayi2=$_POST['veri2'];

if($sayi1>$sayi2)
{
	echo "Büyük Sayı : ".$sayi1;
}
else if($sayi1<$sayi2)
{
	echo "Büyük Sayı : ".$sayi2;
}
else
{
	echo "Girilen Sayılar Eşittir";
}


?>