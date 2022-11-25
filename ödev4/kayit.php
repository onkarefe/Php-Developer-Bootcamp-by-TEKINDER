<?php
$adsoyad = $_POST['adsoyad'];
$tc = $_POST['kimlik'];
require_once('baglan.php');
class kontrol{
    public function kayitdurum($veri){
        $ayirma = str_split($veri);
        if(count($ayirma) != 11 || $ayirma[0] == 0){
            return "TC Kimlik Geçersiz";

        }
        else{
            $tek = ($ayirma[0] + $ayirma[2] + $ayirma[4] +$ayirma[6] + $ayirma[8]) * 7;
            $cift = $ayirma[1] + $ayirma[3] + $ayirma[5] + $ayirma[7];
            $eksi = $tek - $cift;
            $mod = $eksi % 10;
            $indis = 0;
            $toplam = array_sum($ayirma) - $ayirma[10];
            $mod2 = $toplam % 10;
            if($mod != $ayirma[9] || $mod2 != $ayirma[10]){
                return "TC Kimlik Geçersiz"; 
            }
            else{
                return "TC Kimlik Geçerli";
            }
          
        }
        
        }

    }
    


$sorgu = $baglan->prepare("insert into kimlik values(?,?,?,?)");
$ekle = $sorgu->execute(array(NULL, $adsoyad, $tc, $durum));

header("Location:index.php");






