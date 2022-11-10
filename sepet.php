<?php
include "urunler.php";

$urun1 = $_POST["adet1"];
$urun2 = $_POST["adet2"];
$urun3 = $_POST["adet3"];
$uruntop = ($urun1 * 10) + ($urun2 * 20) + ($urun3 * 20);


if ($urun1 < 0 || $urun2 <0 || $urun3 <0) {
    echo "<script>
    alert('Hatalı giriş yaptınız. Lütfen sıfırdan büyük bir sayı değeri giriniz.');
    window.top.location = 'index.php';
    </script>";
    die();
}



$dosya = fopen("veriler.php", "abt");
$sonuc = fwrite ($dosya, "$urun1 | $urun2 | $urun3 | $uruntop\n");
fclose($dosya);

if($sonuc == true) {
    echo "<script>
    alert('Ürünler Sepete Başarıyla Eklendi');
    window.top.location = 'index.php';
    </script>";
}
else {
    echo "<script>
    alert('Ürünler sepete eklenemedi');
    window.top.location = 'index.php';
    </script>";
}






