<?php

/*
Kullanıcının girmiş oldugu degerler
arasıda kullanıcnın girmiş oldugu
deger kadar rastgele TEK elemanlardan
oluşan bir dizi oluşturun.
Oluşan dizinin en küçük elemanını
bulun 
*/

for($i=0;$i<$_POST['veri3'];$i=$i+1)
{
	$rs=rand($_POST['veri1'],$_POST['veri2']);
	if($rs%2==1)
	{
		echo $dizi[$i]=$rs;
		echo '<br>';
	}
	else
	{
		$i=$i-1;
	}
}

$en_kucuk_deger=$dizi[0];

for($k=0;$k<count($dizi);$k=$k+1)
{
	if($dizi[$k]<$en_kucuk_deger)
	{
		$en_kucuk_deger=$dizi[$k];
	}
}

echo "en küçük eleman : ".$en_kucuk_deger;

?>