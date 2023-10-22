<?php
$sayi1 = $_POST['veri1'];
$sayi2 = $_POST['veri2'];
$tpl = 0;

if(($_POST['veri1'] =="") || ($_POST['veri2'] ==""))
{
	echo "Lütfen Bir Sayı Giriniz";
}
else 
{
	$tpl = $sayi1 + $sayi2;		
	
	
	echo "Sayıların Toplamı :" .$tpl;

}

?>