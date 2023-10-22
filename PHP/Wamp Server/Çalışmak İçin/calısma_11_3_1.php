<?php

if(($_POST['veri1']=="") || ($_POST['veri2']==""))
{
	echo "Eksik Bilgi Girdiniz . ";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	
	
	if($sayi1 < $sayi2)
	{
		for($i = 0; $i <5; $i = $i + 1)
		{
			$rnd = rand($sayi1, $sayi2);
			$dizi[$i]; $rnd;
			echo $dizi[$i];
			echo '<br>';
		}
	}
	else
	{
		for($i = 0; $i <5; $i = $i + 1)
		{
			$rnd = rand($sayi2, $sayi1);
			$dizi[$i]; $rnd;
			echo $dizi[$i];
			echo '<br>';
		}
	}
}


?>