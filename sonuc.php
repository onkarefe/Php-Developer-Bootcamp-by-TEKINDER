<?php
$satirlar = array();
$dosya = fopen("veriler.php", "rb");
while (!feof($dosya)) {
    $satirlar[] = fgets($dosya);
}
fclose($dosya);



echo "<table border ='1' width = '%100'>
    <tr>
    <td>Ürün Adı</td>
    <td>Fiyat</td>
    <td>Adet</td>";

    foreach($satirlar as $satir){
        $veri = explode(" | ", $satir);

        echo "<tr>
        <td>Ülker Çikolatalı Gofret</td>
        <td>10Tl</td>
        <td>$veri[0]</td>
        <tr>
        <td>Eti Damak Kare Çikolata</td>
        <td>20Tl</td>
        <td>$veri[1]</td>
        <tr>
        <td>Nestle Bitter Çikolata</td>
        <td>20Tl</td>
        <td>$veri[2]</td>
        <tr>
        <td>Toplam Fiyat</td>
        <td>----</td>
        <td>$veri[3]</td>";}

        

