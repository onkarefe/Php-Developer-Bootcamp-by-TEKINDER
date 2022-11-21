<?php

$girdiler = array("agilSayisi" => "5" , "agilKapasitesi" => "30", "koyunSayisi" => "72");
$kapasite = $girdiler["agilSayisi"] * $girdiler["agilKapasitesi"];
$kalanKontrol = $girdiler["koyunSayisi"] - ($girdiler["agilKapasitesi"] * $girdiler["agilSayisi"]);

echo "Toplam Ağıl:" .$girdiler["agilSayisi"] ."<br>";
echo "Toplam Kapasite:" .$kapasite ."<br>";
echo "Koyun Sayısı:" .$girdiler["koyunSayisi"] . "<br>";

for ($girdiler["agilSayisi"]; $girdiler["agilSayisi"]>=1; $girdiler["agilSayisi"] = $girdiler["agilSayisi"] - 1){
    if ($girdiler["koyunSayisi"] >= $girdiler["agilKapasitesi"] ){
        echo $girdiler["agilSayisi"]. ". Ağıl:" . $girdiler["agilKapasitesi"] . "<br>";
    }
    elseif ($girdiler["koyunSayisi"] < $girdiler["agilKapasitesi"] && $girdiler["koyunSayisi"]>0) {
        echo $girdiler["agilSayisi"]. ". Ağıl:" . $girdiler ["koyunSayisi"] . "<br>";
    }
    elseif ($girdiler["koyunSayisi"] < 0) {
        echo $girdiler["agilSayisi"]. ". Ağıl:" . "0" . "<br>";
    }
$girdiler["koyunSayisi"] = $girdiler["koyunSayisi"] - $girdiler["agilKapasitesi"];
}

if ($kalanKontrol > 0) {
    echo "<br><br>" . "Dışarıda Kalan:" .$kalanKontrol ."Koyun vardır.";
}