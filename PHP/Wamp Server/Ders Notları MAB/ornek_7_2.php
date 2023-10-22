<?php


if($_POST['veri1']=="" || $_POST['veri2']=="")
{
	echo "Eksik Bilgi Girildi";
}
else
{
	$sayi1=$_POST['veri1'];
	$sayi2=$_POST['veri2'];
	$tpl=0;
	
	if($sayi1<$sayi2)
	{
		for($i=$sayi1; $i<=$sayi2; $i=$i+1)
		{
			$tpl=$tpl+$i;
		}
		//echo "Sonuç : ".$tpl;
	}
	else
	{
		for($i=$sayi2; $i<=$sayi1; $i=$i+1)
		{
			$tpl=$tpl+$i;
		}
		
	}
	echo "Sonuc : ".$tpl;
}

?>