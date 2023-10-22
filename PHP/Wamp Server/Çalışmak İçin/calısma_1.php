<?php
	
$veri1 = 25;
$veri2 = 6.4;
$toplam = $veri1 + $veri2;
$cikarma = $veri1 - $veri2;
$carpma = $veri1 * $veri2;
$bolme = $veri1 / $veri2;	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body><table width="200" border="1">
  <tbody>
    <tr>
      <td>Toplamı</td>
      <td><?php echo $toplam?></td>
    </tr>
    <tr>
      <td>Eksiği</td>
      <td><?php echo $cikarma?></td>
    </tr>
    <tr>
      <td>Çarpımı</td>
      <td><?php echo $carpma?></td>
    </tr>
    <tr>
      <td>Bölme</td>
      <td><?php echo $bolme?></td>
    </tr>
  </tbody>
</table>

</body>
</html>