<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ekranı</title>
</head>
<body style="text-align:center">
<h1>Form Sayfası</h1>
   <form method = "post" action ="kayit.php">
      <b>Ad Soyad :
      <br><br><input type = "text" name='adsoyad'>
      <br><br>TC Kimlik Numarası :</b>
      <br><br><input type = "number" name='kimlik'>
      <br><br>
      <style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #7B68EE;
  border: none;
  color: white;
  padding: 5px 20px;
}
</style>
    <input type = "submit"  value="Doğrula ve Kaydet">
</form> 
<?php

require_once('baglan.php');
$veri = $baglan->query("select * from kimlik",PDO::FETCH_ASSOC);
$veri->execute();
echo "<br><h1>Kayıtlar</h1><br><br>
<table width = '100%' border='1'>
<tr>
<td width = '10%'><b>Id</td>
<td width = '30%'><b>Adı Soyadı</b></td>
<td width = '30%'><b>Tc Kimlik Numarası</b></td>
<td width = '30%'><b>Durum</b></td>
</tr>";
foreach ($veri as $satir){
    echo "<tr>
    <td>$satir[id]</td>
    <td>$satir[adsoyad]</td>
    <td>$satir[tckimlik]</td>
    <td>$satir[durum]</td>
    </tr>";
}