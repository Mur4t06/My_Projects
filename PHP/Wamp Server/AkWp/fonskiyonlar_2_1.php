<?php

function fnk_sayıların_toplamı($a, $b)
{
	$a=$_POST['veri1'];
	$b=$_POST['veri2'];
}
function fnk_toplam($snc)
{
	echo $snc;
}
fnk_toplam(fnk_sayıların_toplamı($snc));




?>