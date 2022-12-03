<?php

$sure = $_POST['sn'];


    $dk1 =floor($sure/60);
    $saat = floor($dk1 /60);
    $dk2 = $dk1 - ($saat*60);
    $kalan1 = $sure - ($saat * 60);
    $sn = $sure - ($dk1 * 60);

    echo $saat .":" . $dk2 . ":" . $sn; 

