<?php
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$tür = $_POST['tkod'];
$boy = $_POST['bkod'];
$ton = $_POST['ton'];
$temizlik = $_POST['temizlik'];
require_once('fonksiyon.php');
$urunfiyat = (cevherFiyat($tür) * (100 - taneEtkisi($boy))) / 100; //Burda Kaldın 0'da burası çalışmıyor.
$tetkisi = $urunfiyat - ($urunfiyat * $temizlik) /100;
$listfiyat = $urunfiyat - $tetkisi;
$kdvsiz = $listfiyat * $ton;
$kdv = ($kdvsiz * 8)/100;
$kdvli = ($kdvsiz * 108)/100;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KasaFişi</title>
</head>
<body style="text-align:center">
<style>
        .container {
            width: 230px; height: 600px; border: 1px solid grey; margin: 0 auto;
        }
    </style>
    <div class="container"><footer style="text-align:left"></style>  
    <p><?php echo "** Cevher v1.0 *** <br>  * Müşteri'nin <br> Adı : " . $ad ."<br>".
    "Soyadı : " .$soyad . "<br>" . 
    "*  Cevherin Kodu : " . $tür . "<br>".
    "Tane Büyüklüğü : " .$boy . "<br>" . 
    "Temizlik Oranı : " . $temizlik . "<br>".
    "Miktar (ton) : " . $ton ."<br><br>".
    "-------------------------------------------<br><br>********Fatura*******<br>".
    "Alıcı : " .$ad ."  " .$soyad ."<br><br><br>" .
    "Cevher Türü : ". urunad($tür) ."<br>".
    "Normal Birim Fiyat:" .cevherFiyat($tür) ."TON/TL<br>".
    "Tane : " .taneAdı($boy) ." -%" . taneEtkisi($boy)."<br>".
    taneAdı($boy). "Fiyat : " .$urunfiyat. "<br>".
    "Temizlik : "."%" .$temizlik.","."Etkisi:"."-".$tetkisi."TL<br>".
    "Temizlik Etkisi Sonrası <br>".
    "Birim Fiyat : ". $listfiyat ."TON/TL<br>".
    "Toplam : ".$kdvsiz . "TL<br>".
    "KDV(%8) . " . $kdv ."<br>".
    "Genel Toplam : " . $kdvli . "TL<br><br><br>".
    "Mega Madencilik,2016<br>".
    "*****************************";
    


?>
