<?php
include("fonksiyonlar_new.php");
	
$yeni_dizi = fnk_dizi_olustur($_POST['deger1'], $_POST['deger2'], $_POST['deger3']);

fnk_dizinin_elemanlari_ekrana_yazdir($yeni_dizi);

$tek_say=fnk_dizinin_tek_elemanlari($yeni_dizi);
fnk_mesaj_parametreli("Tek sayısı :1".$tek_say);














?>