<?php

//DİZİLER

$dizi=array(1,5,6,8,9);

echo $dizi[1];//5
echo '<br>';
$dizi[1]=7;
echo $dizi[1];//7
echo '<br>';

for($i=0;$i<count($dizi);$i=$i+1)
{
	echo $dizi[$i];
	echo '<br>';
}

$dizi_2[0]=5;
$dizi_2[1]=8;
$dizi_2[2]=1;

echo "2. dizinin eleman sayısı : ".count($dizi_2);


?>