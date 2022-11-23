<?php
$ot = $_POST['ürün'];
$gr = $_POST['gram'];
$durum = $_POST['durum'];
if($durum == "taze"){
    $durum = 1;
} 
else {
    $durum = 0;
}
require_once('fonksiyon.php');

$tazelik = otBirimFiyat($ot) * tazelikEtkisi($ot,$durum);//ürün fiyatında tazelik olup olmadığına göre değişim yapılır.
//$tazelist = tazelikEtkisi($ot,$durum) * grkg($gr);
$islemtut = otBirimFiyat($ot) * grkg($gr);
$urunFiyat = otBirimFiyat($ot) - $tazelik; 
$sonFiyat = ($urunFiyat/1000) * $gr;//tazelik durumuna göre kdv'siz fiyat belirlenir.
$kdv = ($sonFiyat * 118)/100;//kdv'li son fiyat hesaplanır.
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
            width: 200px; height: 600px; border: 1px solid grey; margin: 0 auto;
        }
    </style>
    <div class="container"><footer style="text-align:left"></style><p>   
    </p>** Ot Master v1.0 ***<br><br>
    Kg başı ot fiyatları:<br><br>
    Kekik : 50<br><br>
    Nane : 75<br><br>
    Fesleğen: 100<br><br>
    Reyhan: 90<br><br>
    *************************<br>
    Tür : <?php echo urunAdı($ot) ."<br>"."-" . urunadı($ot) . "-" . "miktar (kg) :   " . grkg($gr) . "<br>" .
    "Taze mi? (1=taze)  :  " . $durum . "<br>" . "İşlem Tutarı : " . $islemtut ."<br>" . "Tazelik Etkisi :  " . ($sonFiyat - $islemtut) .
    "<br>" . "Tutar : " . $sonFiyat . "<br>" . "KDV(%18) : " . (($sonFiyat * 18)/100) . "<br>" . "*************************<br>" .
    "Fatura<br>" ."-------------------------------------" ."<br>" . "OT A.Ş" ."<br><br>" . "*   " . urunAdı($ot) .":" . grkg($gr) . "x" . (otbirimfiyat($ot) - $tazelik) .
    "=" .$sonFiyat . "<br><br>" . "KDV(%18) : " . (($sonFiyat * 18)/100) . "    TL" . "<br><br>" . "Genel Toplam: " .$kdv;


?>


    
    </body>