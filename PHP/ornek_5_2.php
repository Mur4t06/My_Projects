<?php

if($_POST['s1']!="")
{
	$sonuc=$_POST['s1'] % 2;
	if($sonuc==0)
	{
		echo "Çift";
	}
	else
	{
		echo "Tek";
	}
}
else
{
	echo "Sayı Girilmedi";
}
?>