<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AktarKasaUygulaması</title>
</head>
<body style="text-align:center">
   <form method = "post" action ="islem.php">
   <label for="ürün">Ürün Seçiniz:</label>
<select name="ürün" id="Ürün Seçimi">
    <option value="">Lütfen Seçim Yapınız</option>
    <option value="1">Kekik</option>
    <option value="2">Nane</option>
    <option value="3">Fesleğen</option>
    <option value="4">Reyhan</option>
</select><br><br>
    Kaç Gram almak istersiniz:
    <input type = "number" id="gram" name="gram" value="gram">
    <br><br>Ürün Durumu
    <input type = "radio" id='taze' name='durum' value='taze'>
    <label for="taze">Taze</label>
    <input type = "radio" id='taze değil' name='durum' value='taze değil'>
    <label for="eski">Taze Değil</label>
    <br><br>
    <input type = "submit" value="Sepete Ekle">
</form> 
    <br><br><br>
    
    <style>
        .container {
            width: 200px; height: 500px; border: 1px solid grey; margin: 0 auto;
        }
    </style>
    <div class="container"><footer style="text-align:left"></style><p>Fiyatlarımız(1Kg):
    <br><br>Kekik 50Tl<br><br>Nane 75Tl<br><br>Fesleğen 100Tl<br><br>Reyhan 90Tl<br><br>
    Burada seçeceğiniz ürünlerin durumlarına göre fiyatları değişmektedir.
    Ürünlerin taze olmadığı durumlarda;
    <br><br>Kekikte %10<br><br>Nanede %20<br><br>Fesleğende %10<br><br>Reyhanda%25<br><br>
    İndirim uygulanmaktadır. Fiyatlarımıza KDV dahil değildir.   
    </p></div>
    </body>
    