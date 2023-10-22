<?php
/*Kullanıcının girmiş olduğu değerler arasında
rastgele üretilen 20 sayıdan TEK olanların sayısını bulan
programı yazınız ? (Sayılar ekranda gösterilecek)
*/

if($_POST['veri1']=="" || $_POST['veri2']=="")
{
	echo "Eksik sayı girildi";
}
else
{
	$sayi1=$_POST['veri1'];//rand(ks,bs)
	$sayi2=$_POST['veri2'];
	if($sayi1<$sayi2)
	{
		$kucuk_sayi=$sayi1;
		$buyuk_sayi=$sayi2;
	}
	else
	{
		$kucuk_sayi=$sayi2;
		$buyuk_sayi=$sayi1;
	}
	
	for($k=1; $k<21; $k=$k+1)
	{
		$rs=rand($kucuk_sayi,$buyuk_sayi);
		if( $rs % 2 == 1)//rasgele üretilen sayının tek olması durumu
		{
			echo $rs;
			echo '</br>';
			$say=$say+1;
		}
	}
	
	echo "Tek sayıların sayısı = ".$say;
	
}

?>