<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>
<?php
$sayi1=$_POST['Sayi1'];
$sayi2=$_POST['Sayi2'];
?>
<body>
<table width="509" height="148" border="1">
  <tbody>
    <tr>
      <td width="134">TOPLAMA</td>
      <td width="359"><?php echo $sayi1+$sayi2?></td>
    </tr>
    <tr>
      <td>ÇIKARMA</td>
      <td><?php echo $sayi1-$sayi2?></td>
    </tr>
    <tr>
      <td>ÇARPMA</td>
      <td><?php echo $sayi1*$sayi2?></td>
    </tr>
    <tr>
      <td>BÖLME</td>
      <td><?php echo $sayi1/$sayi2?></td>
    </tr>
  </tbody>
</table>
</body>
</html>
