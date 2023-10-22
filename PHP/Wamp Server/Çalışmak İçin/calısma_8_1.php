<?php

if(($_POST['veri1'] =="") || ($_POST['veri2'] ==""))
{
	echo "Eksik Bilgi Girdiniz ";
}
else 
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	$toplam = 0;
	
	if($sayi1 < $sayi2)
	{
		for($i = $sayi1; $i <= $sayi2; $i = $i +1 )
		{
			if($i % 2 == 1)
			{
				$toplam = $toplam + $i;
			}
		}
		
	}
	else
	{
		for($i = $sayi2; $i <= $sayi1; $i = $i + 1)
		{
			if($i % 2 == 1)
			{
				$toplam = $toplam + $i;
			}
		}
	}
	echo "Tek Sayıların Toplamı : " .$toplam;

}


?>