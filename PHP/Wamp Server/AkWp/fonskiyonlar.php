<?php

//fonksiyonlar
//parametreli //parametresiz
//geriye değer gönderen // göndermeyen

function fnk_mesaj()
{	
	echo "Fonksiyonun İçersindeyiz.";	
}

function fnk_mesaj_parametreli($a)
{
	echo $a;
}


//fnk_mesaj();
fnk_mesaj_parametreli(5);











?>