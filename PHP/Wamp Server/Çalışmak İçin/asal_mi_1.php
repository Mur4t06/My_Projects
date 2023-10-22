<?php

include('fonksiyonlar_new.php');

$sayi = $_POST['veri'];
	
$asal = fnk_asal_mi($sayi);

fnk_mesaj_parametreli($asal);









?>