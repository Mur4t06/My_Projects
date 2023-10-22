<?php

/* Kullanıcının girmiş olduğu iki değer arasında rastgele sayılardan oluşan 10 elemanlı bir dizi oluşturun ve elemanlarını yazdırın ? */

if(($_POST['veri1'] == "") || ($_POST['veri2'] == ""))
{
	echo "Eksik Bilgi Girdiniz. ";
}
else
{
	$sayi1 = $_POST['veri1'];
	$sayi2 = $_POST['veri2'];
	
	
	if($sayi1 < $sayi2)
	{
		for($i = 0; $i<10; $i = $i + 1)
		{
			echo $dizi[$i] = rand($sayi1,$sayi2);
			echo '<br>';
		}
		
	}
	else
	{
		for($i = 0; $i<10; $i = $i + 1)
		{
			echo $dizi[$i] = rand($sayi2, $sayi1);
			echo '<br>';
		}
		
	}
    
}



?>