<?php
include("baglan.php");
session_start();
if($_SESSION["data"] != "var") {
    header("location: cikis.php");
}
if($_GET){ //hocam burda get kullanmamın sebebi if($_POST) yaparsam önceki saydadan geleni aldığı için hata vermesi.
$baslik = $_GET['baslik'];
$il = $_GET['il'];
$ilce = $_GET['ilce'];
$mahalle = $_GET['mahalle'];
$tür = $_GET['tür'];
$boy = $_GET['boy'];
$oda = $_GET['oda'];
$detay = $_GET['detay'];
$fiyat = $_GET['fiyat'];
$sorgu = $baglan->prepare("insert into panel values(?,?,?,?,?,?,?,?,?,?)");
$ekle = $sorgu->execute(array(NULL, $baslik, $il, $ilce, $mahalle, $tür, $boy, $oda, $detay, $fiyat));
header("Location:panel.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Kayıt Ekleme</title>
</head>
<body style="text-align:left">
<h1>Yeni Kayıt</h1>
   <form method = "get" action ="">
   <table width = '25%' border='0'>
       <tr><td><b>Başlık:
       <td><input type = 'text' name='baslik'><br>
       <tr><td><b>İl:
       <td><input type = 'text' name='il' ><br>
       <tr><td><b>İlçe:
       <td><input type = 'text' name='ilce'><br>
       <tr><td><b>Mahalle:
       <td><input type = 'text' name='mahalle' ><br>
       <tr><td><b>Tür:
       <td><input type = 'text' name='tür'><br>
       <tr><td><b>Boyut m^2:
       <td><input type = 'number' name='boy'><br>
       <tr><td><b>Oda Sayısıı:
       <td><input type = 'text' name='oda'><br>
       <tr><td><b>Detaylar:
       <td><input type = 'text' name='detay'><br>
       <tr><td><b>Fiyat:
       <td><input type = 'text' name='fiyat'><br>
       <tr><td><td><input type = 'submit' value = 'Ekle' name = 'ekle'>
    </table>
</form> 


