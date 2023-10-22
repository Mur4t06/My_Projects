<?php

/*Kullanıının girmiş olduğu degerler arasında
10 adet rastgele belirlenen sayıların toplamını bulan program
*/
if($_POST['veri1']=="" || $_POST['veri2']=="")
{
	echo "Eksik bilgi girildi";
}
else
{
	$sayi1=$_POST['veri1'];
	$sayi2=$_POST['veri2'];
	$toplam=0;
	/* 2 for döngüsü ile
	if($sayi1<$sayi2)//rand($sayi1,$sayi2)
	{
		for($i=1;$i<11;$i=$i+1)
		{
			echo $rsayi=rand($sayi1,$sayi2);
			echo '<br>';
			$toplam=$toplam+$rsayi;
		}
		
	}
	else//rand($sayi2,$sayi1)
	{
		for($i=1;$i<11;$i=$i+1)
		{
			echo $rsayi=rand($sayi2,$sayi1);
			echo '<br>';
			$toplam=$toplam+$rsayi;
		}
		
	}
	
	echo "Sayıların Toplamı = ".$toplam;*/
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
	
	for($i=1;$i<11;$i=$i+1)
		{
			echo $rsayi=rand($kucuk_sayi,$buyuk_sayi);
			echo '<br>';
			$toplam=$toplam+$rsayi;
		}
	echo "Sayıların Toplamı = ".$toplam;
}

?>


















