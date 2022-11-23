
<?php
require_once('baglan.php');
$veri = $baglan->query("select * from girdiler",PDO::FETCH_ASSOC);
$sayac = 0;
$veri->execute();
echo "<table border ='1' width = '%100'>
    <tr>
    <td><b>ADI SOYADI</td>
    <td><b>TELEFON NUMARASI</b></td>
    <td><b>İşlem</b></td>";
foreach ($veri as $satir){
    $sayac ++;
    echo "<tr>
    <td>$satir[adsoyad]</td>
    <td>$satir[telno]</td>
    <td><a href='kayitsil.php?op=id&id=$satir[id]'>Sil</a>
    </td>
    </tr>";
}

echo "<table><tr>Toplamda $sayac adet kayıt vardır</table>";
$veri->closeCursor(); unset($veri);

?>
<body>
<form  method = "post" action ="index.php">
<br>
<input type = "submit" value="Kayıt Ekranına Dönmek için Lütfen Tılayınız">
</form>