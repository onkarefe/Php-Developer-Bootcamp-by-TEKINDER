<?php
function otBirimFiyat($ot){
    $fiyat = 0;
    if($ot ==1){
        $fiyat = 50;
    }
    elseif($ot ==2){
        $fiyat = 75;
    }
    elseif($ot ==3){
        $fiyat = 100;
    }
    elseif($ot ==4){
        $fiyat = 90;
    }
    return $fiyat;
}

function tazelikEtkisi($ot,$durum){
    $eksi = 0;
    if($ot == 1 and $durum == 0){
        $eksi = 0.1;
    }
    elseif($ot==2 and $durum ==0){
        $eksi = 0.2;
    }
    elseif($ot ==3 and $durum ==0){
        $eksi = 0.1;
    }
    elseif($ot ==4 and $durum ==0){
        $eksi = 0.25;
    }
    return $eksi;
}

function urunAdı($ot){
    $isim = "";
    if($ot ==1){
        $isim = "Kekik";
    }
    elseif($ot ==2){
        $isim = "Nane";
    }
    elseif($ot ==3){
        $isim = "Fesleğen";
    }
    elseif($ot==4){
        $isim = "Reyhan";
    }
    return $isim;
}


function grkg($gr){
    $kg = $gr/1000 ;
    return $kg;
}
