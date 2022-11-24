<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Market</title>
</head>
<body>
<?php
$urunler = array(
    array("kod" => "birinci","urun" => "Ülker Çikolatalı Gofret", "fiyat" =>"10"),
    array("kod" => "ikinci","urun" => "Eti Damak Kare Çikolata", "fiyat" =>"20"),
    array("kod" => "ucuncu","urun" => "Nestle Bitter Çikolata", "fiyat" =>"20")
);
$sayac = 1;

echo "<table width = '100%' border='1'>
    <tr>
    <td width = '60%'><b>Ürün Adı</td>
    <td width = '20%'><b>Ürün Fiyatı</b></td>
    <td width = '10%'><b>Adet</b></td>
    </tr>";
    foreach($urunler as $satir){
        echo "<tr><td>$satir[urun]</td>
        <td>$satir[fiyat]</td>
        <td><form action='kayit.php?hareket=ekle' method='post'>
        <input type = 'number' name = 'adet$sayac'></td>"; 
        $sayac++;
    }

    echo "</table>";
    ?>
    <div style = 'text-align:right'>                        
    <input type = 'submit' value = 'Sepete Ekle'></form>
</div>
    
<?php
$urun1 = 10 * $_SESSION['bir'][1];
$urun2 = 20 * $_SESSION['iki'][2];
$urun3 = 20 * $_SESSION['üc'][3];
$urunler2 = array(
    array("kod" => "birinci","urun" => "Ülker Çikolatalı Gofret", "fiyat" =>"10","sonfiyat" =>"$urun1"),
    array("kod" => "ikinci","urun" => "Eti Damak Kare Çikolata", "fiyat" =>"20","sonfiyat" =>"$urun2"),
    array("kod" => "ucuncu","urun" => "Nestle Bitter Çikolata", "fiyat" =>"20","sonfiyat" =>"$urun3")
);

echo "<br><br><b>Alışveriş Sepeti</b>";
echo "<table width = '100%' border='1'>
    <tr>
    <td width = '40%'><b>Ürün Adı</td>
    <td width = '20%'><b>Ürün Fiyatı</b></td>
    <td width = '10%'><b>Adet</b></td>
    <td width = '10%'><b>Tutar</b></td>
    </tr>";
    foreach($urunler2 as $satir){
        echo "<tr><td>$satir[urun]</td>
        <td>$satir[fiyat]</td>
        <td>-</td>
        <td>$satir[sonfiyat]";
        }