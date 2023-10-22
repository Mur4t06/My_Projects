<?php
if (($_POST['S1'])=='')
{
	echo "Eksik Bilgi Girdiniz.";   
}
else
{
	if(($_POST['S1'] % 2 == 0))
   		{
	 		echo "Bu Sayı Çift Sayıdır.".$S1;  
		}
		else
		  	echo "Bu Sayı Tek Sayıdır.".$S1;
}














?>