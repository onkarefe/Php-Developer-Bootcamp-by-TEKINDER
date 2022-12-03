<?php
include("baglan.php");
session_start();
if($_SESSION["data"] != "var") {
    header("location: cikis.php");
}
?>

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
<td width = '30%'><b>Detaylar</b></td>
<td width = '10%'><b>Fiyat</b></td>


<?php

if($_POST){
    $anahtar = $_POST['kategori'];
    $arama = $_POST['arama'];
    if($anahtar == "1"){
        $sorgu = $baglan->query("select * from panel where il = '$arama'",PDO::FETCH_ASSOC);
        $sorgu->execute();
        foreach($sorgu as $a){   
        echo "<tr>
        <td>$a[baslik]</td>
        <td>$a[il]</td>
        <td>$a[ilçe]</td>
        <td>$a[mahalle]</td>
        <td>$a[tür]</td>
        <td>$a[boy]</td>
        <td>$a[oda]</td>
        <td>$a[detay]</td>
        <td>$a[fiyat] TL</td><br>";
        }
    }
    elseif($anahtar == "2"){
            $sorgu = $baglan->query("select * from panel where ilçe = '$arama'",PDO::FETCH_ASSOC);
            $sorgu->execute();
            foreach($sorgu as $a){   
            echo "<tr>
            <td>$a[baslik]</td>
            <td>$a[il]</td>
            <td>$a[ilçe]</td>
            <td>$a[mahalle]</td>
            <td>$a[tür]</td>
            <td>$a[boy]</td>
            <td>$a[oda]</td>
            <td>$a[detay]</td>
            <td>$a[fiyat] TL</td><br>";    
            }
        }
    elseif($anahtar == "3"){
            $sorgu = $baglan->query("select * from panel where mahalle = '$arama'",PDO::FETCH_ASSOC);
            $sorgu->execute();
            foreach($sorgu as $a){   
            echo "<tr>
            <td>$a[baslik]</td>
            <td>$a[il]</td>
            <td>$a[ilçe]</td>
            <td>$a[mahalle]</td>
            <td>$a[tür]</td>
            <td>$a[boy]</td>
            <td>$a[oda]</td>
            <td>$a[detay]</td>
            <td>$a[fiyat] TL</td><br>";    
            }
        }
        elseif($anahtar == "4"){
            $sorgu = $baglan->query("select * from panel where tür = '$arama'",PDO::FETCH_ASSOC);
            $sorgu->execute();
            foreach($sorgu as $a){   
            echo "<tr>
            <td>$a[baslik]</td>
            <td>$a[il]</td>
            <td>$a[ilçe]</td>
            <td>$a[mahalle]</td>
            <td>$a[tür]</td>
            <td>$a[boy]</td>
            <td>$a[oda]</td>
            <td>$a[detay]</td>
            <td>$a[fiyat] TL</td><br>";    
            }
        }
        elseif($anahtar == "5"){
            $sorgu = $baglan->query("select * from panel where boy = '$arama'",PDO::FETCH_ASSOC);
            $sorgu->execute();
            foreach($sorgu as $a){   
            echo "<tr>
            <td>$a[baslik]</td>
            <td>$a[il]</td>
            <td>$a[ilçe]</td>
            <td>$a[mahalle]</td>
            <td>$a[tür]</td>
            <td>$a[boy]</td>
            <td>$a[oda]</td>
            <td>$a[detay]</td>
            <td>$a[fiyat] TL</td><br>";    
            }
        }
        elseif($anahtar == "6"){
            $sorgu = $baglan->query("select * from panel where oda = '$arama'",PDO::FETCH_ASSOC);
            $sorgu->execute();
            foreach($sorgu as $a){   
            echo "<tr>
            <td>$a[baslik]</td>
            <td>$a[il]</td>
            <td>$a[ilçe]</td>
            <td>$a[mahalle]</td>
            <td>$a[tür]</td>
            <td>$a[boy]</td>
            <td>$a[oda]</td>
            <td>$a[detay]</td>
            <td>$a[fiyat] TL</td><br>";    
            }
        }
        elseif($anahtar == "7"){
            $sorgu = $baglan->query("select * from panel where detay = '$arama'",PDO::FETCH_ASSOC);
            $sorgu->execute();
            foreach($sorgu as $a){   
            echo "<tr>
            <td>$a[baslik]</td>
            <td>$a[il]</td>
            <td>$a[ilçe]</td>
            <td>$a[mahalle]</td>
            <td>$a[tür]</td>
            <td>$a[boy]</td>
            <td>$a[oda]</td>
            <td>$a[detay]</td>
            <td>$a[fiyat] TL</td><br>";    
            }
        }
        elseif($anahtar == "8"){
            $sorgu = $baglan->query("select * from panel where fiyat = '$arama'",PDO::FETCH_ASSOC);
            $sorgu->execute();
            foreach($sorgu as $a){   
            echo "<tr>
            <td>$a[baslik]</td>
            <td>$a[il]</td>
            <td>$a[ilçe]</td>
            <td>$a[mahalle]</td>
            <td>$a[tür]</td>
            <td>$a[boy]</td>
            <td>$a[oda]</td>
            <td>$a[detay]</td>
            <td>$a[fiyat] TL</td><br>";    
            }
        }
        
}
?>
<footer>
        <p><a href='panel.php?hareket=düzenle&id=$satir[id]'
    >Panele dönmek için tıklayınız</a></p>
    </footer>