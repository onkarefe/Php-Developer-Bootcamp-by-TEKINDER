<?php
require_once('baglan.php');
$veri = $baglan->prepare("delete from girdiler");
$sil = $veri->execute(array(''));

if($sil){
    echo "Silme Başarılı";
}
else{
    echo "olmadı";
}

//Hocam, Sil komutuna basıldığında hangi satırda olduğunu muhtemelen id'den getirmem gerekiyordu ama malesef yapamadım. Basıldığı zaman bütün tabloyu siliyor.
