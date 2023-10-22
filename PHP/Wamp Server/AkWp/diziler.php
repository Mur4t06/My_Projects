<?php

$dizi = array(1,5,6,9,8);

echo $dizi[1];
echo '<br>';
$dizi[1] =7;

echo $dizi[1];
echo '<br>';

for($i = 0; $i<count($dizi); $i =$i + 1)
{
	echo $dizi [$i];
	echo '<br>';
}

$dizi_2[0] = 5;
$dizi_2[1] = 9;
$dizi_2[2] = 4;

echo "2. dizinin eleman sayısı : " .count($dizi_2);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>