-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Ara 2022, 11:47:59
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `emlak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

DROP TABLE IF EXISTS `kayit`;
CREATE TABLE IF NOT EXISTS `kayit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanıcı` text COLLATE utf8_turkish_ci NOT NULL,
  `parola` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `panel`
--

DROP TABLE IF EXISTS `panel`;
CREATE TABLE IF NOT EXISTS `panel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ilçe` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mahalle` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tür` varchar(50) COLLATE utf8_turkish_ci NOT NULL COMMENT 'villa/daire/arsa',
  `boy` int(100) NOT NULL COMMENT 'm^2',
  `oda` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `detay` varchar(500) COLLATE utf8_turkish_ci NOT NULL COMMENT 'ilan detayları',
  `fiyat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `panel`
--

INSERT INTO `panel` (`id`, `baslik`, `il`, `ilçe`, `mahalle`, `tür`, `boy`, `oda`, `detay`, `fiyat`) VALUES
(43, 'Yatırımlık Arsa', 'Antalya', 'Aksu', 'Patırlar', 'Arsa', 5000, '', 'İmara açık yatırımlık Arsa', 1450000),
(42, 'Eşyalı', 'İstanbul', 'Beşiktaş', 'Dikilitaş', 'Kiralık Daire', 130, '3+1', 'Beşiktaş', 14000),
(58, 'Havuzlu Villa', 'Antalya', 'Döşemealtı', 'Yeşilbayır', 'Kiralık Villa', 299, '6+2', 'İnşaat firmasından Antalya\'nın en güzel yerinde kiralık havuzlu müstakil villa', 45000),
(44, 'Antalya', 'Antalya', 'Muratpaşa', 'Fener', 'Kiralık Daire', 200, '4+1', 'Antalya\'da', 25000),
(45, 'Heybeliada', 'İstanbul', 'Adalar', 'Heybeliada', 'Satılık Villa', 300, '5+2', 'Müstakil Bahçeli sahile yakın ters dublex, satılık villa', 7350000),
(56, 'Beylikdüzü', 'İstanbul', 'Beylikdüzü', 'Barış', 'Kiralık Daire', 200, '4+1', 'İstanbul\'un', 20000),
(57, 'Kadıköy kiralık 3+1', 'İstanbul', 'Kadıköy', 'Acıbadem', 'Kiralık Daire', 180, '2+1', 'Kısa dönem eşyalı kiralık 2+1', 10000),
(59, 'Acil Satılık Arsa', 'Antalya', 'Döşemealtı', 'Duacı', 'Arsa', 6000, '', 'İmara açık acil satılık arsa', 4500000),
(60, 'Sahibinden Kiralık Acil', 'Ankara', 'Çankaya', 'Bahçelievler ', 'Kiralık', 85, '1+1', 'Öğrenciye kiralık eşyalı', 4000),
(61, 'Boğaz Manzaralı 4+1', 'İstanbul', 'Beşiktaş', 'Nispetiye', 'Kiralık Daire', 350, '4+1', '32. Kat Residance, 6 ay peşin eşyasız kiralık', 75000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
