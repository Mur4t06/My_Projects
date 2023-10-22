<?php

/*
Kullanıcının girmiş olduğu iki deger arasında
kullanıcının girmiş olduğu değer kadar
rastgele elemanlardan oluşan bir dizinin
elemanlatı toplamını bulan programı yazın 
dizi elemanlarını yazdırın 
*/

$toplam=0;

for($i=0; $i<$_POST['veri3']; $i=$i+1)
{
	echo $dizi[$i]=rand($_POST['veri1'],$_POST['veri2']);
	echo '<br>';
	$toplam=$toplam+$dizi[$i];
}
echo "Dizi toplamı : ".$toplam;



?>