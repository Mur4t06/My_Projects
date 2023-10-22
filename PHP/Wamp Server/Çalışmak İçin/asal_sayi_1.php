<?php

if($_POST['veri1'] =="")
{
	echo "Eksik Bilgi Girdiniz. ";
}
else
{
	$sayi1 = $_POST['veri1'];
	$asalmi = 0;
	
	
	for($i = 2; $i < $sayi1; $i = $i + 1 )
	{
		if($sayi1 % $i == 0)
		{
			$asalmi ++ ;
		}
			
	}

	if($asalmi == 0)
	{
		echo "Girilen Sayı Asaldır .";
	}
	else
	{
		echo "Girilen Sayı Asal Değildir .";
	}
}





?>