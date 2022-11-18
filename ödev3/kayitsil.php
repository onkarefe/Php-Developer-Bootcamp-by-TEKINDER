<?php
$baglan = new PDO("mysql:host=localhost;dbname=uygulama;charset=utf8","atlas","1234");
$baglan -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$veri = $baglan->prepare("delete from girdiler");
$sil = $veri->execute(array(''));

if($sil){
    echo "Silme Başarılı";
}
else{
    echo "olmadı";
}

//Hocam, Sil komutuna basıldığında hangi satırda olduğunu muhtemelen id'den getirmem gerekiyordu ama malesef yapamadım. Basıldığı zaman bütün tabloyu siliyor.
