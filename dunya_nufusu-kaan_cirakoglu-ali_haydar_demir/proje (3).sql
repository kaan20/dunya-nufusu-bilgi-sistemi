-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Oca 2023, 18:58:55
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aclik`
--

CREATE TABLE `aclik` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `kita_id` int(11) NOT NULL,
  `deger` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `aclik`
--

INSERT INTO `aclik` (`id`, `kullanici_id`, `kita_id`, `deger`) VALUES
(1, 0, 1, 155),
(2, 0, 2, 1000),
(3, 0, 1, 1800),
(4, 0, 1, 500),
(5, 0, 5, 300),
(6, 0, 6, 400);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dogumolum`
--

CREATE TABLE `dogumolum` (
  `id` int(11) NOT NULL,
  `kita_id` int(11) NOT NULL,
  `deger` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `dogumolum`
--

INSERT INTO `dogumolum` (`id`, `kita_id`, `deger`) VALUES
(1, 1, 700),
(2, 2, 800),
(3, 3, 900),
(4, 4, 1000),
(5, 5, 350),
(6, 6, 800);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gida`
--

CREATE TABLE `gida` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `kita_id` int(11) NOT NULL,
  `deger` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `gida`
--

INSERT INTO `gida` (`id`, `kullanici_id`, `kita_id`, `deger`) VALUES
(1, 0, 1, 155),
(2, 0, 2, 1000),
(3, 0, 3, 1800),
(4, 0, 4, 500),
(5, 0, 5, 700),
(6, 0, 6, 800);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitalar`
--

CREATE TABLE `kitalar` (
  `id` int(11) NOT NULL,
  `kita` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kitalar`
--

INSERT INTO `kitalar` (`id`, `kita`) VALUES
(1, 'Asya'),
(2, 'Afrika'),
(3, 'Avrupa'),
(4, 'Kuzey Amerika'),
(5, 'Avustralya'),
(6, 'Güney Amerika');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `cinsiyet` tinyint(4) DEFAULT NULL,
  `dogum_tarihi` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `type`, `name`, `surname`, `email`, `phone`, `password`, `cinsiyet`, `dogum_tarihi`) VALUES
(8, 2, 'test', 'test', 'test@gmail.com', '', '098f6bcd4621d373cade4e832627b4f6', 1, '2022-12-18'),
(9, 1, 'deneme@gmail.com', 'deneme', 'deneme@gmail.com', '1231232131', '8f10d078b2799206cfe914b32cc6a5e9', 1, '2023-01-02'),
(10, 2, 'kaan@hotmail.com', 'kaan', 'kaan@hotmail.com', '123123134134', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2023-01-01'),
(11, 1, 'ali@hotmail.com', 'ali', 'ali@hotmail.com', '1234134', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2023-01-01'),
(12, 1, 'ali@demir.com', 'ali', 'ali@demir.com', '684651651', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2023-01-02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar_log`
--

CREATE TABLE `kullanicilar_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tarih` datetime NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicilar_log`
--

INSERT INTO `kullanicilar_log` (`id`, `user_id`, `tarih`, `text`) VALUES
(1, 8, '2022-12-31 20:10:23', 'Login Oldu'),
(2, 8, '2022-12-31 20:11:39', 'Login Oldu'),
(3, 8, '2022-12-31 20:12:12', 'Çıkış Yaptı'),
(4, 8, '2022-12-31 20:12:15', 'Login Oldu'),
(5, 8, '2022-12-31 20:12:56', 'Çıkış Yaptı'),
(6, 8, '2022-12-31 20:13:16', 'Login Oldu'),
(7, 8, '2022-12-31 20:17:16', 'Çıkış Yaptı'),
(8, 8, '2022-12-31 20:17:40', 'Login Oldu'),
(9, 8, '2022-12-31 20:18:01', 'Çıkış Yaptı'),
(10, 8, '2022-12-31 20:18:05', 'Login Oldu'),
(11, 8, '2023-01-01 18:12:19', 'Çıkış Yaptı'),
(12, 9, '2023-01-01 18:19:32', 'Çıkış Yaptı'),
(13, 8, '2023-01-01 18:20:44', 'Login Oldu'),
(14, 8, '2023-01-01 18:20:54', 'Çıkış Yaptı'),
(15, 8, '2023-01-01 18:20:58', 'Login Oldu'),
(16, 8, '2023-01-01 18:21:20', 'Çıkış Yaptı'),
(17, 9, '2023-01-01 18:21:29', 'Login Oldu'),
(18, 9, '2023-01-01 19:12:28', 'Çıkış Yaptı'),
(19, 8, '2023-01-01 19:15:31', 'Login Oldu'),
(20, 8, '2023-01-01 19:16:00', 'Çıkış Yaptı'),
(21, 9, '2023-01-01 19:16:08', 'Login Oldu'),
(22, 10, '2023-01-01 19:47:19', 'Çıkış Yaptı'),
(23, 10, '2023-01-01 19:47:39', 'Login Oldu'),
(24, 10, '2023-01-01 19:55:34', 'Çıkış Yaptı'),
(25, 11, '2023-01-01 19:56:50', 'Çıkış Yaptı'),
(26, 12, '2023-01-02 07:21:09', 'Çıkış Yaptı'),
(27, 10, '2023-01-02 07:22:19', 'Login Oldu'),
(28, 10, '2023-01-02 09:26:17', 'Çıkış Yaptı'),
(29, 10, '2023-01-02 09:26:34', 'Login Oldu'),
(30, 10, '2023-01-02 09:27:26', 'Çıkış Yaptı'),
(31, 12, '2023-01-02 09:27:39', 'Login Oldu'),
(32, 12, '2023-01-02 09:52:47', 'Çıkış Yaptı'),
(33, 10, '2023-01-02 10:01:59', 'Login Oldu'),
(34, 10, '2023-01-02 10:02:12', 'Çıkış Yaptı'),
(35, 12, '2023-01-02 10:02:30', 'Login Oldu'),
(36, 12, '2023-01-02 10:05:32', 'Çıkış Yaptı'),
(37, 10, '2023-01-02 10:05:43', 'Login Oldu'),
(38, 10, '2023-01-02 10:13:40', 'Çıkış Yaptı'),
(39, 10, '2023-01-02 10:14:12', 'Login Oldu'),
(40, 10, '2023-01-02 11:07:27', 'Çıkış Yaptı'),
(41, 14, '2023-01-02 11:16:43', 'Çıkış Yaptı'),
(42, 10, '2023-01-02 11:16:59', 'Login Oldu'),
(43, 10, '2023-01-02 11:19:42', 'Çıkış Yaptı'),
(44, 12, '2023-01-02 11:19:56', 'Login Oldu'),
(45, 12, '2023-01-02 11:29:32', 'Çıkış Yaptı'),
(46, 10, '2023-01-02 11:49:20', 'Login Oldu'),
(47, 10, '2023-01-02 11:55:14', 'Çıkış Yaptı'),
(48, 10, '2023-01-02 12:03:24', 'Login Oldu'),
(49, 10, '2023-01-02 12:05:21', 'Çıkış Yaptı'),
(50, 15, '2023-01-02 12:07:43', 'Çıkış Yaptı'),
(51, 10, '2023-01-02 12:13:19', 'Login Oldu'),
(52, 10, '2023-01-02 12:13:55', 'Çıkış Yaptı'),
(53, 12, '2023-01-02 12:14:26', 'Login Oldu'),
(54, 12, '2023-01-02 12:16:28', 'Çıkış Yaptı'),
(55, 10, '2023-01-02 12:16:58', 'Login Oldu'),
(56, 10, '2023-01-02 12:17:34', 'Çıkış Yaptı'),
(57, 12, '2023-01-02 12:17:50', 'Login Oldu'),
(58, 12, '2023-01-02 13:15:22', 'Çıkış Yaptı'),
(59, 10, '2023-01-02 13:18:04', 'Login Oldu'),
(60, 10, '2023-01-02 13:18:30', 'Çıkış Yaptı'),
(61, 12, '2023-01-02 13:18:37', 'Login Oldu'),
(62, 12, '2023-01-02 13:27:57', 'Çıkış Yaptı'),
(63, 10, '2023-01-02 13:28:05', 'Login Oldu'),
(64, 10, '2023-01-02 13:28:19', 'Çıkış Yaptı'),
(65, 10, '2023-01-02 13:30:00', 'Login Oldu'),
(66, 10, '2023-01-02 13:30:03', 'Çıkış Yaptı'),
(67, 12, '2023-01-02 13:30:10', 'Login Oldu'),
(68, 12, '2023-01-02 13:47:50', 'Çıkış Yaptı'),
(69, 10, '2023-01-02 13:48:01', 'Login Oldu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `olum`
--

CREATE TABLE `olum` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) DEFAULT NULL,
  `kita_id` int(11) NOT NULL,
  `cinsiyet` int(11) NOT NULL,
  `deger` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `olum`
--

INSERT INTO `olum` (`id`, `kullanici_id`, `kita_id`, `cinsiyet`, `deger`) VALUES
(1, 0, 1, 1, '1000'),
(2, 0, 2, 1, '4000'),
(3, 0, 3, 1, '1234'),
(4, 0, 4, 1, '1500'),
(5, 0, 5, 1, '3000'),
(6, 0, 6, 1, '2444'),
(7, 0, 1, 2, '2000'),
(8, 0, 2, 2, '3000'),
(9, 0, 3, 2, '1000'),
(10, 0, 4, 2, '4500'),
(11, 0, 5, 2, '3000'),
(12, 0, 6, 2, '2500');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ulkeler`
--

CREATE TABLE `ulkeler` (
  `id` int(11) NOT NULL,
  `ulke` varchar(255) NOT NULL,
  `deger` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `ulkeler`
--

INSERT INTO `ulkeler` (`id`, `ulke`, `deger`) VALUES
(1, 'Türkiye', '200'),
(2, 'Çin', '600'),
(3, 'Amerika', '500'),
(4, 'Rusya', '450'),
(5, 'Kanada', '350'),
(6, 'Hindistan', '800'),
(7, 'Diğer', '1400');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aclik`
--
ALTER TABLE `aclik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `dogumolum`
--
ALTER TABLE `dogumolum`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gida`
--
ALTER TABLE `gida`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kitalar`
--
ALTER TABLE `kitalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar_log`
--
ALTER TABLE `kullanicilar_log`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `olum`
--
ALTER TABLE `olum`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ulkeler`
--
ALTER TABLE `ulkeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aclik`
--
ALTER TABLE `aclik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `dogumolum`
--
ALTER TABLE `dogumolum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `gida`
--
ALTER TABLE `gida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kitalar`
--
ALTER TABLE `kitalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar_log`
--
ALTER TABLE `kullanicilar_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Tablo için AUTO_INCREMENT değeri `olum`
--
ALTER TABLE `olum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `ulkeler`
--
ALTER TABLE `ulkeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
