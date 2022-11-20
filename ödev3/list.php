
<?php
$baglan = new PDO("mysql:host=localhost;dbname=uygulama;charset=utf8","atlas","1234");
$baglan -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$veri = $baglan->query("select * from girdiler",PDO::FETCH_ASSOC);
$sayac = 0;
echo "<table border ='1' width = '%100'>
    <tr>
    <td><b>ADI SOYADI</td>
    <td><b>TELEFON NUMARASI</b></td>
    <td><b>İşlem</b></td>";
foreach ($veri as $satir){
    $sayac ++;
    echo "<tr>
    <td><b>$satir[adsoyad]</td>
    <td>$satir[telno]</b></td>
    <td><html><form method = 'post' action = 'kayitsil.php'>
    <input type = 'submit' value = 'Sil'></b></td>";
}
echo "</form>";

echo "<table><tr>Toplamda $sayac adet kayıt vardır</table>";

?>
<body>
<form  method = "post" action ="index.php">
<br>
<input type = "submit" value="Kayıt Ekranına Dönmek için Lütfen Tılayınız">
</form>