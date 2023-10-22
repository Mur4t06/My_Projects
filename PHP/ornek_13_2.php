<?php
/*
Kullanıcının girmiş oldugu iki deger arasında
rastgele sayılardan oluşan 10 elemanlı bir dizi 
oluşturun ve elemanlarını yazdırın ?
*/

if($_POST['veri1']=="" || $_POST['veri2']=="")
{
	echo "Eksik bilgi girildi";
}
else
{
	$sayi1=$_POST['veri1'];
	$sayi2=$_POST['veri2'];
	$sayi_kucuk=0;
	$sayi_buyuk=0;
	if($sayi1<$sayi2)
	{
		$sayi_kucuk=$sayi1;
		$sayi_buyuk=$sayi2;
	}
	else
	{
		$sayi_kucuk=$sayi2;
		$sayi_buyuk=$sayi1;
	}
	
	for($i=0;$i<10; $i=$i+1)
	{
		echo $dizi[$i]=rand($sayi_kucuk,$sayi_buyuk);
		echo '<br>';
	}
	
}


?>