<?php
include("baglan.php");
$veri = $baglan->query("select * from panel",PDO::FETCH_ASSOC);
$veri->execute();
session_start();
if($_SESSION["data"] != "var") {
    header("location: cikis.php");
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
</head>

<body style="text-align:center">
<br><h1>Kayıtlar</h1><br><br>
<table width = '100%' border='1'>
<tr>
<td width = '10%'><b>Başlık</td>
<td width = '10%'><b>İl</b></td>
<td width = '10%'><b>İlçe</b></td>
<td width = '10%'><b>Mahalle</b></td>
<td width = '5%'><b>Tür</td>
<td width = '5%'><b>Boyut(m^2)</b></td>
<td width = '10%'><b>Oda Sayısı</b></td>
<td width = '20%'><b>Detaylar</b></td>
<td width = '10%'><b>Fiyat</b></td>
<td width = '5%'><b>Düzenle</b></td>
<td width = '5%'><b>Sil</b></td>
</tr>
<?php
foreach ($veri as $satir){
    echo "<tr>
    <td>$satir[baslik]</td>
    <td>$satir[il]</td>
    <td>$satir[ilçe]</td>
    <td>$satir[mahalle]</td>
    <td>$satir[tür]</td>
    <td>$satir[boy]</td>
    <td>$satir[oda]</td>
    <td>$satir[detay]</td>
    <td>$satir[fiyat] TL</td>
    <td><a href='düz_sil.php?hareket=düzenle&id=$satir[id]'
    >DÜZENLE</a></td>
    <td><a href='düz_sil.php?hareket=sil&id=$satir[id]'
    onclick=\"if (!confirm('İlanı silmek istediğinize emin misiniz?')) return false;\">SİL</a></td>
    </tr>";
}
echo "<a href='cikis.php?'
onclick=\"if (!confirm('Çıkış yapmak istediğinize emin misiniz?')) return false;\">Çıkış<br><br></a></td>";
?>

<form action = 'arama.php' method = 'POST'>
<select name="kategori" id="arama">
    <option value="">Arama yapmak istediğiniz kategoriyi seçiniz.</option>
    <option value="1">İl</option>
    <option value="2">İlçe</option>
    <option value="3">Mahalle</option>
    <option value="4">Tür</option>
    <option value="5">Boy</option>
    <option value="6">Oda</option>
    <option value="7">Detay</option>
    <option value="8">Fiyat</option>
</select>
<input type="search" name = 'arama'>

<button>Ara</button><br><br></form>
<br><br><br>
<form action = 'yk.php' method = 'POST'> 
    <input type = 'submit' value = 'Yeni Kayıt Ekle' name = 'ykelke'>
</form>




<?php
//dosyaları csv'ye yazdırma

$dosya = fopen("kayitlar.csv", "abt");
$yazdir = $baglan->query("select * from panel",PDO::FETCH_ASSOC);
$yazdir->execute();

foreach ($yazdir as $satir){
  $sonuc = fwrite($dosya, "$satir[baslik] | $satir[il] | $satir[ilçe] | $satir[mahalle] | $satir[tür] | $satir[boy] | $satir[oda] | $satir[detay] | $satir[fiyat]\n");
  
}
fclose($dosya);



