<?php

$ilk = $_POST['baslangıc'];
$ikinci = $_POST['ikinci'];
$ücüncü = $_POST['ücüncü'];
$dördüncü = $_POST['dördüncü'];

if($ilk =="0"){
    if($ikinci =="0"){
        if($ücüncü =="0"){
            echo "Kalp Krizi Riski %1";
        }
        elseif($ücüncü =="1"){
            echo "Kalp Krizi Riski %20";
        }
    }
    elseif($ikinci =="1"){
        echo "Kalp Krizi Riski %70";
    }
    
}
elseif($ilk =="1"){
    if($dördüncü =="0"){
        echo "Kalp Krizi Riskiniz %30";
    }
    elseif($dördüncü=="1"){
        if($ücüncü == "0"){
            echo "Kalp Krizi Riskiniz %60";
        }
        elseif($ücüncü =="1"){
            echo "Kalp Krizi Riskiniz %90";

        }
    }
    
}