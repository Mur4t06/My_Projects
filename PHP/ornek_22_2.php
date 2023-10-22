<?php


include("fonksiyonlar.php");


//(|a|+(4b)!)/(5c-2d)=

if($_POST['deger1']=="" || $_POST['deger2']=="" || $_POST['deger3']=="" || $_POST['deger4']=="")
{
	fnk_mesaj_parametreli("Eksik bilgi gönderildi");
}
else
{
	$a_mtlk=fnk_mutlak($_POST['deger1']);
	$b_4_fk=fnk_fk(fnk_carpim(4,$_POST['deger2']));
	$c_5=fnk_carpim($_POST['deger3'],5);
	$d_2=fnk_carpim(2,$_POST['deger4']);
	$payda=fnk_fark($c_5,$d_2);
	
	if($payda==0)
	{
		fnk_mesaj_parametreli("Hesaplanamaz");
	}
	else
	{
		$pay=fnk_topla($a_mtlk,$b_4_fk);
		$sonuc=fnk_bolme($pay,$payda);
		fnk_mesaj_parametreli("Formül Sonucu :".$sonuc);
	}
	
}

?>