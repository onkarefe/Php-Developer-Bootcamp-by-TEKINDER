<?php
$baglan = new PDO("mysql:host=localhost;dbname=uygulama;charset=utf8","atlas","1234");
$baglan -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);