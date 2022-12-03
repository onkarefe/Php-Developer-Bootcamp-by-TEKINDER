<?php
include("baglan.php");
session_start();
if($_SESSION["data"] != "var") {
    header("location: cikis.php");
}


$islem = $_GET["hareket"];
$id = $_GET["id"];

if($islem == "sil"){
    $islem = $baglan->query("delete from panel where id = '$id'");
    header("Location:panel.php");
}
$veri = $baglan->query("select * from panel where id = '$id'",PDO::FETCH_ASSOC);//bunu kontrol et düzenlemede sadece ilk paragrafı alıyor.
foreach($veri as $a){
    echo "<h3>Düzenlemek istediğiniz alanları doldurun </h3>
    <table width = '25%' border='0'>
    <form method = 'post' action ='''>
       <tr><td><b>Başlık:</td>
       <td><input type = 'text' name='baslik' value = $a[baslik]><br></td>
       <tr><td><b>İl:</td>
       <td><input type = 'text' name='il' value = $a[il]><br></td>
       <tr><td><b>İlçe:</td>
       <td><input type = 'text' name='ilce' value = $a[ilçe]><br>
       <tr><td><b>Mahalle:</td>
       <td><input type = 'text' name='mahalle' value = $a[mahalle]><br>
       <tr><td><b>Tür:</td>
       <td><input type = 'text' name='tür' value = $a[tür]><br>
       <tr><td><b>Boyut m^2:</td>
       <td><input type = 'number' name='boy' value = $a[boy]><br>
       <tr><td><b>Oda Sayısıı:</td>
       <td><input type = 'text' name='oda' value = $a[oda]><br>
       <tr><td><b>Detaylar:</td>
       <td><input type = 'text' name='detay' value = $a[detay]><br>
       <tr><td><b>Fiyat:</td>
       <td><input type = 'number' name='fiyat' value = $a[fiyat]><br>
       </table>
       <input type = 'submit' value = 'Düzenlemeyi onayla' name = 'düzenle'>
       <input type='hidden' name='id' value='$id'>";
}



if($_POST){
    $baslik = $_POST['baslik'];
$il = $_POST['il'];
$ilce = $_POST['ilce'];
$mahalle = $_POST['mahalle'];
$tür = $_POST['tür'];
$boy = $_POST['boy'];
$oda = $_POST['oda'];
$detay = $_POST['detay'];
$fiyat = $_POST['fiyat'];
    $islem = $baglan->query("delete from panel where id = '$id'");
$sorgu = $baglan->prepare("insert into panel values(?,?,?,?,?,?,?,?,?,?)");
$ekle = $sorgu->execute(array($id, $baslik, $il, $ilce, $mahalle, $tür, $boy, $oda, $detay, $fiyat));
header("Location:panel.php");

}


?>
