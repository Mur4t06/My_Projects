<?php

if(($_POST['veri1'] =="") || ($_POST['veri2'] ==""))
{
	echo "Lütfen Sayı Giriniz !";
}
else
{
	$sayi1=$_POST['veri1'];
	$sayi2=$_POST['veri2'];
	$tpl=0;
	
	if($sayi1<$sayi2)
	{
		for($i=($sayi1 +1); $i<$sayi2; $i=$i + 1)
		{
			if($i% 2!=0)
			{
				$tpl = $tpl+ $i;
			}
			
		}
	}
	else
	{
		for($i=($sayi2 +1); $i<$sayi1; $i=$i + 1)
		{
			if($i% 2!=0)
			{
				$tpl = $tpl+ $i;
			}
	}

	}
	echo "Sonuç :".$tpl;
}
?>