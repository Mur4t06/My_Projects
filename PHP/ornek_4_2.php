<?php

if( ($_POST['s1']=="")||($_POST['s2']==""))
{
	echo "Eksik Bilgi Girildi";
}
else
{
	$sayi1=$_POST['s1'];
	$sayi2=$_POST['s2'];
	$sonuc=$sayi1%$sayi2;
	echo "Sonuç : ".$sonuc;
}

?>