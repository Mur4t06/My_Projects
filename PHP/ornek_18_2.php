<?php

include("fonksiyonlar.php");

$sonuc=fnk_topla($_POST['veri1'],$_POST['veri2']);
fnk_mesaj_parametreli($sonuc);


?>