<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php
if(($_POST['Sayi1']=="")||($_POST['Sayi2'])=="")
{
	echo "Eksik Bilgi Girildi";
}
else
{
	$sayi1=$_POST['Sayi1'];
	$sayi2=$_POST['Sayi2'];

	echo $sayi1%$sayi2;
}
?>
</body>
</html>