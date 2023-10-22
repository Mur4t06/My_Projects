<?php
/*x!+3Y=? formülünün hesaplanmasını 
sadece fonksiyonları kullanarak yapınız?*/

include("fonksiyonlar.php");


$fk_x=fnk_fk($_POST['deger1']);
$y_3=fnk_carpim(3,$_POST['deger2']);
$sonuc=fnk_topla($fk_x,$y_3);
fnk_mesaj_parametreli("Formül Sonucu:".$sonuc);

//fnk_mesaj_parametreli(fnk_topla(fnk_fk($_POST['deger1']),fnk_carpim(3,$_POST['deger2'])));


?>