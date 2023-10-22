<?php
/*Parametre olarak almış olduğu bir sayının farktöriyelini hesaplayan ve sonucu geri göderen bir fonsiyon yazınız ve kullanınız*/

function fnk_faktoriyel($a)
{
	$toplam = 1;
	for($i=2; $i<=$a; $i = $i + 1)
	{
		$toplam = $toplam * $i;
	}
	
	return $toplam;
}





?>