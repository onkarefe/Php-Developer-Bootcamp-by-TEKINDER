<?php

$tl = $_POST['tutar'];
require_once('baglan.php');
$veri = $baglan->query("select * from kur",PDO::FETCH_ASSOC);
$veri->execute();

foreach($veri as $satir){
    $sonfiyat = $tl * $satir['kur'];
    echo $satir['adı'] . "Kuru : ". $satir['kur'] ."<br>";
    echo $satir['adı'] . ":". $sonfiyat ."<br>";
}