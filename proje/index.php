<?php
include("baglan.php");
if($_POST){
  $kullanıcı = $_POST['kullanıcı'];
  $parola = $_POST['parola'];
  $tekrar = $_POST['tekrar'];
  $mail = $_POST['mail'];
  if($parola == $tekrar && $kullanıcı != "") {
  $sorgu = $baglan->prepare("insert into kayit values(?,?,?,?)");
  $ekle = $sorgu->execute(array(NULL, $kullanıcı, $parola, $mail,));
  echo "<script>
    window.top.location = 'login.php';
    </script>";
  }
  else{
    echo "<script>
    alert('Kayıt olmak için şifreler eşleşmelidir. Lütfen tekrar deneyiniz.');
    window.top.location = 'index.php';
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
<h1>Atlas Real Estate<br></h1>
<h3>Kayıt Formu<br></h3>
   <form method = "post" action ="">
      <b>Kullanıcı Adı:
      <br><br><input type = "text" name='kullanıcı' required>
      <br><br>Parola :
      <br><br><input type = "password" name='parola' required>
      <br><br>Parola Onay : 
      <br><br><input type = "password" name='tekrar' required>
      <br><br>Email Adresi: :</b> 
      <br><br><input type = "text" name='mail' required>
      <br><br>
      <style> 

input[type=button], input[type=submit], input[type=reset] {
  background-color: #7B68EE;
  border: none;
  color: white;
  padding: 5px 20px;
}
</style>
    <input type = "submit"  value="Kayıt Ol">
</form> 