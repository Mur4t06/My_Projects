<?php

include("fonksiyonlar.php");

$hesap=fnk_fk($_POST['deger']);
fnk_mesaj_parametreli($hesap);

//fnk_mesaj_parametreli(fnk_fk($_POST['deger']));

?>