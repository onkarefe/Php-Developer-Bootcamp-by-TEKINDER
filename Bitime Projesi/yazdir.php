<?php
include("baglan.php");
session_start();
if($_SESSION["data"] != "var") {
    header("location: cikis.php");
}

$dosya = fopen("kayitlar.csv", "abt");
$yazdir = $baglan->query("select * from panel",PDO::FETCH_ASSOC);
$yazdir->execute();

foreach ($yazdir as $satir){
  $sonuc = fwrite($dosya, "$satir[baslik]/ $satir[il]/ $satir[ilçe]/ $satir[mahalle]/ $satir[tür] / $satir[boy] / $satir[oda] / $satir[detay] / $satir[fiyat]\n");
  
}
fclose($dosya);


header("location: cikis.php");