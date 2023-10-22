
<?php
echo "PHP Kod Yazmaya Başlıyoruz";
echo '<br>';
// değikenler
$veri=4;
$veri2="hitit";
$veri3=12.8;
echo $veri;
echo '<br>';
echo $veri2; 

/*
birinci sayıyı al
ikinsi sayıyı al
iki sayıyı topla
sonucu ekrana yazdır
*/
//matematiksel operatörler + - * /
$sayi1=8;
$sayi2=9;
$toplam=$sayi1+$sayi2;
$fark=$sayi1-$sayi2;
$carpim=$sayi1*$sayi2;
$bolum= $sayi1/$sayi2;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	echo '<br>';
	echo "Toplam Sonucu : ".$toplam;
?>
<table width="400" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="126">Toplamı</td>
    <td width="261"><?php echo $toplam;?></td>
  </tr>
  <tr>
    <td>Farkı</td>
    <td><?php echo $fark;?></td>
  </tr>
  <tr>
    <td>Çarpımı</td>
    <td><?php echo  $carpim;?></td>
  </tr>
  <tr>
    <td>Bölümü</td>
    <td><?php echo $bolum;?></td>
  </tr>
</table>

</body>
</html>