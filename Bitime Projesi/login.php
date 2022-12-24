<?php
include("baglan.php");
if($_POST){
  $kullanıcı = $_POST['kullanıcı'];
  $parola = $_POST['parola'];
  $sorgu = $baglan->query("select * from kayit where kullanıcı = '$kullanıcı' and parola='$parola'");
  $satir = $sorgu->fetch(PDO::FETCH_ASSOC);

if($satir){
  session_start();
  $_SESSION["data"]="var";
    echo "<script>
   window.top.location = 'panel.php';
   </script>";
}
else{
    echo "<script>
   alert('Kullanıcı Adı ve ya Şifre Hatalı, Lütfen Kontrol ettikten sonra tekrar deneyiniz.');
   window.top.location = 'login.php';
   </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ekranı</title>
</head>
<body style="text-align:center">
<h1>Atlas Real Estate</h1>
<h5>Kayıt işlemi başarılı. Lütfen giriş yapınız.</h5>
   <form method = "post" action ="">
      <b>Kullanıcı Adı:
      <br><br><input type = "text" name='kullanıcı' required>
      <br><br>Parola :</b> 
      <br><br><input type = "password" name='parola' required>
      <br><br>
      <style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #7B68EE;
  border: none;
  color: white;
  padding: 5px 20px;
}
</style>
    <input type = "submit"  value="Doğrula ve Kaydet">
</form> 
