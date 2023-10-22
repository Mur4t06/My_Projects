<?php


/*
Kullanıcının girmiş olduğu iki deger arasında
kullanıcının girmiş olduğu değer kadar
rastgele elemanlardan oluşan bir dizinin
elemanlarından çift olanların sayısını bulan programı yazınız.
dizi elemanları yazdırılacak
*/

$say=0;
for($i=0; $i<$_POST['veri3'];$i=$i+1)
{
	echo $dizi[$i]=rand($_POST['veri1'],$_POST['veri2']);
	//echo '<b>'.$dizi[$i].'</b>';
	echo '<br>';
	
	if($dizi[$i]%2==0)
	{
		$say=$say+1;
	}
}

echo "çift eleman sayısı : ".$say;


?>