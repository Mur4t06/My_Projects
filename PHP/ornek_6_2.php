<?php

if($_POST['veri']=="")
{
	echo "Sayı Girilmedi !";
}
else
{
	$sayi=$_POST['veri'];
	
	$tpl=0;
	for($i=1; $i<=$sayi; $i =$i+1)
	{
		$tpl = $tpl + $i;
	}
	
	echo "Toplam Sonucu : ".$tpl;
}

?>