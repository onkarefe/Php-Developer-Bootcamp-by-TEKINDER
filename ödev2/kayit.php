<?php
session_start();

$urun1 = $_POST['adet1'];
$urun2 = $_POST['adet2'];
$urun3 = $_POST['adet3'];
$sayac = 0;




if ($urun1 >= 0){
    $sayac++;
      if (isset($_SESSION["bir"][$sayac])) {
        $_SESSION["bir"][$sayac] += $urun1; 
      } else {
        $_SESSION["bir"][$sayac] = $urun1; 
      }
      header("Location:index.php");
    } 


if ($urun2 >= 0){
    $sayac++;
      if (isset($_SESSION["iki"][$sayac])) {
        $_SESSION["iki"][$sayac] += $urun2; 
      } else {
        $_SESSION["iki"][$sayac] = $urun2; 
      }
      header("Location:index.php");
    } 


if ($urun3 >= 0){
    $sayac++;
      if (isset($_SESSION["üc"][$sayac])) {
        $_SESSION["üc"][$sayac] += $urun3; 
      } else {
        $_SESSION["üc"][$sayac] = $urun3; 
      }
      header("Location:index.php");
    } 

