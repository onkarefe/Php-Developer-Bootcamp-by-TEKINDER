<?php

$adsoyad = $_POST['adsoyad'];
$telno = $_POST['telno'];

$baglan = new PDO("mysql:host=localhost;dbname=uygulama;charset=utf8","atlas","1234");
$baglan -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sorgu = $baglan->prepare("insert into girdiler values(?,?,?)");
$ekle = $sorgu->execute(array(NULL, "$adsoyad", "$telno"));
if($ekle){
   echo "Kayıt Eklendi";
   echo "<script>
   alert('Ürünler Sepete Başarıyla Eklendi');
   window.top.location = 'index.php';
   </script>";
}
else {
   echo "<script>
   alert('Kayıt İşlemi Başarısız');
   window.top.location = 'index.php';
   </script>";
}

