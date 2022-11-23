<?php

function cevherFiyat($tür){
    $fiyat = 0;
    if($tür == "DMR"){
        $fiyat = 1500;
    }
    elseif($tür =="KRM"){
        $fiyat =5000;
    }
    elseif($tür =="BKR"){
        $fiyat =3000;
    }
    elseif($tür =="KMR"){
        $fiyat = 500;
    }
    else{
        echo "Lütfen Ürün Kodunu Doğru giriniz." .
        "<script>
        alert('Kayıt İşlemi Başarısız');
        window.top.location = 'index.php';
        </script>";
    }
    return $fiyat;
}

function taneEtkisi($boy){
    $etki = 0;
    if($boy == 1){
        $etki = 15;
    }
    elseif($boy ==2){
        $etki = 10;
    }
    elseif($boy ==3){
        $etki = 0;
    }
    else{
        echo "Lütfen Ürün Kodunu Doğru giriniz." .
        "<script>
        alert('Kayıt İşlemi Başarısız');
        window.top.location = 'index.php';
        </script>"; 
    }
    return $etki;
}

$urunfiyat = (cevherFiyat($tür) * (100 - taneEtkisi($boy))) / 100;

function temizlikEtkisi($temizlik,$urunfiyat){
    $sonfiyat = ($urunfiyat * $temizlik) / 100;
    return $sonfiyat;
}

function urunAd($tür){
    $urunadı = "";
    if($tür == "DMR"){
        $urunadı = "Demir";
    }
    elseif($tür =="KRM"){
        $urunadı ="Krom";
    }
    elseif($tür =="BKR"){
        $urunadı ="Bakır";
    }
    elseif($tür =="KMR"){
        $urunadı = "Kömür";
    }
    return $urunadı;
}

function taneAdı($boy){
    $taneadı = "";
    if($boy == 1){
        $taneadı = "Erik";
    }
    elseif($boy ==2){
        $taneadı = "Portakal";
    }
    elseif($boy ==3){
        $taneadı = "Karpuz";
    }
    return $taneadı;
}
