<?php

include("fonksiyonlar.php");
//(x!+4y)/(3t-2z)

$d_fk=fnk_fk($_POST['deger1']);
$d_4y=fnk_carpim(4,$_POST['deger2']);

$pay=fnk_topla($d_fk,$d_4y);//pay hesaplandı

$d_3t=fnk_carpim(3,$_POST['deger3']);
$d_2z=fnk_carpim(2,$_POST['deger4']);

$payda=fnk_fark($d_3t,$d_2z);

$sonuc=fnk_bolme($pay,$payda);

fnk_mesaj_parametreli("Formül Sonucu : ".$sonuc);

?>