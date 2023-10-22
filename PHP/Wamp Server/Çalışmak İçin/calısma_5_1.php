<?php
$sayi1 = $_POST['veri1'];

if(($_POST['veri1'] ==""))
{
	echo "Lüfen Bir Sayı Giriniz";
}
else
{
	if($sayi1 % 2 == 0)
	{
		echo "Girdiğiniz Sayı Çift Sayıdır. " .$sayi1;
	}
	else
	{
		echo "Girdiğiniz Sayı Tek Sayıdır. " .$sayi1;
	}

}

?>