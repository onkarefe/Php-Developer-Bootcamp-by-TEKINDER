<?php

$adsoyad = $_POST['adsoyad'];
$telno = $_POST['telno'];

require_once('baglan.php');
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

