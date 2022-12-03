<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ekranı</title>
</head>
<body style="text-align:center">
<h1>Kalp Krizi Risk Hesaplama</h1>
   <form method = "post" action ="kayit.php">
   <label for="baslangıc">Sigara İçiyor mu ?:</label>
<select name="baslangıc" id="C1">
    <option value="1">Evet</option>
    <option value="0">Hayır</option>
</select><br>

   <label for="ikinci">Ailesinde Kalp Krizi Geçiren Biri Var mı ?:</label>
    <select name="ikinci" id="C2">
    <option value="1">Evet</option>
    <option value="0">Hayır</option>
</select><br>
<label for="ücüncü">Alkol Kullanıyor mu ?:</label>
<select name="ücüncü" id="C3">
    <option value="1">Evet</option>
    <option value="0">Hayır</option>
</select><br>
<label for="dördüncü">Yaşı 40'un üzerinde mi ?:</label>
<select name="dördüncü" id="C4">
    <option value="1">Evet</option>
    <option value="0">Hayır</option>
</select><br>
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
<?php
