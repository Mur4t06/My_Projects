<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>
<?php
$sayi1=$_POST['Sayi1'];
$sayi2=$_POST['Sayi2'];
	
if($sayi1>$sayi2)
{
	echo "Büyük Sayı: ".$sayi1; 
}
else if ($sayi1<$sayi2)
{
	echo "Büyük Sayı: ".$sayi2; 
}
else
{
	echo "Sayılar eşittir. ";
}
?>
<body>
</body>
</html>