<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php
 echo "PHP Kod Yazmaya Başlıyorum";	
 echo '<br>';

$veri1=4;
$veri2=5;
$veri3=12;
$veri4="Hitit Üniversitesi";
echo $veri1;
echo '<br>';
echo $veri2;
echo $veri3;
echo $veri4;
echo '<br>';	
// Örnek
$sayi1=23;
$sayi2=14;
$toplam=$sayi1+$sayi2;	
$farki=$sayi1-$sayi2;
$carpimi=$sayi1*$sayi2;
$bolumu=$sayi1/$sayi2;
?>
<table width="355" height="148" border="2" bgcolor="red#00A2F3"  >
  <tbody>
    <tr>
      <td width="100">Toplamı</td>
      <td width="239"><?php echo $toplam;?></td>
    </tr>
    <tr>
      <td>Farkı</td>
      <td><?php echo $farki;?></td>
    </tr>
    <tr>
      <td>Çarpımı</td>
      <td><?php echo $carpimi;?></td>
    </tr>
    <tr>
      <td>Bölümü</td>
      <td><?php echo $bolumu;?></td>
    </tr>
  </tbody>
</table>
</body>
</html>