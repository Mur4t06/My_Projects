<?php
include("fonksiyonlar.php");

$olusan_dizi=fnk_dizi_olustur($_POST['deger1'],$_POST['deger2'],$_POST['deger3']);

for($i=0;$i<count($olusan_dizi);$i=$i+1)//$_POST['deger3'] de olur
{
	fnk_mesaj_parametreli($olusan_dizi[$i]);
	fnk_mesaj_parametreli('<br>');
}

$tpkl=fnk_dizi_eleman_toplam($olusan_dizi);
fnk_mesaj_parametreli("Eleman toplamı: ".$tpkl);

?>