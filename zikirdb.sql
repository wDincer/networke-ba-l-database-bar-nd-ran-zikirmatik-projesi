-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3307
-- Üretim Zamanı: 30 Oca 2025, 16:57:08
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `zikirdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parola` varchar(150) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp(),
  `Allah` int(11) NOT NULL,
  `Er_Rahman` int(11) DEFAULT 0,
  `Er_Rahim` int(11) DEFAULT 0,
  `El_Melik` int(11) DEFAULT 0,
  `El_Kuddus` int(11) DEFAULT 0,
  `Es_Selam` int(11) DEFAULT 0,
  `El_Mumin` int(11) DEFAULT 0,
  `El_Muheyymin` int(11) DEFAULT 0,
  `El_Aziz` int(11) DEFAULT 0,
  `El_Cebbar` int(11) DEFAULT 0,
  `El_Mutekebbir` int(11) DEFAULT 0,
  `El_Halik` int(11) DEFAULT 0,
  `El_Bari` int(11) DEFAULT 0,
  `El_Musavvir` int(11) DEFAULT 0,
  `El_Gaffar` int(11) DEFAULT 0,
  `El_Kahhar` int(11) DEFAULT 0,
  `El_Vehhab` int(11) DEFAULT 0,
  `Er_Rezzak` int(11) DEFAULT 0,
  `El_Fettah` int(11) DEFAULT 0,
  `El_Alim` int(11) DEFAULT 0,
  `El_Kabid` int(11) DEFAULT 0,
  `El_Basit` int(11) DEFAULT 0,
  `El_Hafid` int(11) DEFAULT 0,
  `Er_Rafi` int(11) DEFAULT 0,
  `El_Muiz` int(11) DEFAULT 0,
  `El_Muzil` int(11) DEFAULT 0,
  `Es_Semi` int(11) DEFAULT 0,
  `El_Basir` int(11) DEFAULT 0,
  `El_Hakem` int(11) DEFAULT 0,
  `El_Adl` int(11) DEFAULT 0,
  `El_Latif` int(11) DEFAULT 0,
  `El_Habir` int(11) DEFAULT 0,
  `El_Halim` int(11) DEFAULT 0,
  `El_Azim` int(11) DEFAULT 0,
  `El_Gafur` int(11) DEFAULT 0,
  `Es_Sekur` int(11) DEFAULT 0,
  `El_Aliyy` int(11) DEFAULT 0,
  `El_Kebir` int(11) DEFAULT 0,
  `El_Hafiz` int(11) DEFAULT 0,
  `El_Mukit` int(11) DEFAULT 0,
  `El_Hasib` int(11) DEFAULT 0,
  `El_Celil` int(11) DEFAULT 0,
  `El_Kerim` int(11) DEFAULT 0,
  `Er_Rakib` int(11) DEFAULT 0,
  `El_Mucib` int(11) DEFAULT 0,
  `El_Vasi` int(11) DEFAULT 0,
  `El_Hakim` int(11) DEFAULT 0,
  `El_Vedud` int(11) DEFAULT 0,
  `El_Mecid` int(11) DEFAULT 0,
  `El_Bais` int(11) DEFAULT 0,
  `Es_Sehid` int(11) DEFAULT 0,
  `El_Hak` int(11) DEFAULT 0,
  `El_Vekil` int(11) DEFAULT 0,
  `El_Kaviyy` int(11) DEFAULT 0,
  `El_Metin` int(11) DEFAULT 0,
  `El_Veliyy` int(11) DEFAULT 0,
  `El_Hamid` int(11) DEFAULT 0,
  `El_Muhsi` int(11) DEFAULT 0,
  `El_Mubdi` int(11) DEFAULT 0,
  `El_Muid` int(11) DEFAULT 0,
  `El_Muhyi` int(11) DEFAULT 0,
  `El_Mumit` int(11) DEFAULT 0,
  `El_Hayy` int(11) DEFAULT 0,
  `El_Kayyum` int(11) DEFAULT 0,
  `El_Vacid` int(11) DEFAULT 0,
  `El_Macid` int(11) DEFAULT 0,
  `El_Vahid` int(11) DEFAULT 0,
  `Es_Samed` int(11) DEFAULT 0,
  `El_Kadir` int(11) DEFAULT 0,
  `El_Muktedir` int(11) DEFAULT 0,
  `El_Mukaddim` int(11) DEFAULT 0,
  `El_Muahhir` int(11) DEFAULT 0,
  `El_Evvel` int(11) DEFAULT 0,
  `El_Ahir` int(11) DEFAULT 0,
  `Ez_Zahir` int(11) DEFAULT 0,
  `El_Batin` int(11) DEFAULT 0,
  `El_Vali` int(11) DEFAULT 0,
  `El_Muteali` int(11) DEFAULT 0,
  `El_Berr` int(11) DEFAULT 0,
  `Et_Tevvab` int(11) DEFAULT 0,
  `El_Muntekim` int(11) DEFAULT 0,
  `El_Afuv` int(11) DEFAULT 0,
  `Er_Rauf` int(11) DEFAULT 0,
  `Malik_ul_Mulk` int(11) DEFAULT 0,
  `Zul_Celali_vel_Ikram` int(11) DEFAULT 0,
  `El_Muksit` int(11) DEFAULT 0,
  `El_Cami` int(11) DEFAULT 0,
  `El_Gani` int(11) DEFAULT 0,
  `El_Mugni` int(11) DEFAULT 0,
  `El_Mani` int(11) DEFAULT 0,
  `Ed_Darr` int(11) DEFAULT 0,
  `En_Nafi` int(11) DEFAULT 0,
  `En_Nur` int(11) DEFAULT 0,
  `El_Hadi` int(11) DEFAULT 0,
  `El_Bedi` int(11) DEFAULT 0,
  `El_Baki` int(11) DEFAULT 0,
  `El_Varis` int(11) DEFAULT 0,
  `Er_Resid` int(11) DEFAULT 0,
  `Es_Sabur` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `email`, `parola`, `kayit_tarihi`, `Allah`, `Er_Rahman`, `Er_Rahim`, `El_Melik`, `El_Kuddus`, `Es_Selam`, `El_Mumin`, `El_Muheyymin`, `El_Aziz`, `El_Cebbar`, `El_Mutekebbir`, `El_Halik`, `El_Bari`, `El_Musavvir`, `El_Gaffar`, `El_Kahhar`, `El_Vehhab`, `Er_Rezzak`, `El_Fettah`, `El_Alim`, `El_Kabid`, `El_Basit`, `El_Hafid`, `Er_Rafi`, `El_Muiz`, `El_Muzil`, `Es_Semi`, `El_Basir`, `El_Hakem`, `El_Adl`, `El_Latif`, `El_Habir`, `El_Halim`, `El_Azim`, `El_Gafur`, `Es_Sekur`, `El_Aliyy`, `El_Kebir`, `El_Hafiz`, `El_Mukit`, `El_Hasib`, `El_Celil`, `El_Kerim`, `Er_Rakib`, `El_Mucib`, `El_Vasi`, `El_Hakim`, `El_Vedud`, `El_Mecid`, `El_Bais`, `Es_Sehid`, `El_Hak`, `El_Vekil`, `El_Kaviyy`, `El_Metin`, `El_Veliyy`, `El_Hamid`, `El_Muhsi`, `El_Mubdi`, `El_Muid`, `El_Muhyi`, `El_Mumit`, `El_Hayy`, `El_Kayyum`, `El_Vacid`, `El_Macid`, `El_Vahid`, `Es_Samed`, `El_Kadir`, `El_Muktedir`, `El_Mukaddim`, `El_Muahhir`, `El_Evvel`, `El_Ahir`, `Ez_Zahir`, `El_Batin`, `El_Vali`, `El_Muteali`, `El_Berr`, `Et_Tevvab`, `El_Muntekim`, `El_Afuv`, `Er_Rauf`, `Malik_ul_Mulk`, `Zul_Celali_vel_Ikram`, `El_Muksit`, `El_Cami`, `El_Gani`, `El_Mugni`, `El_Mani`, `Ed_Darr`, `En_Nafi`, `En_Nur`, `El_Hadi`, `El_Bedi`, `El_Baki`, `El_Varis`, `Er_Resid`, `Es_Sabur`) VALUES
(30, 'ahmetdinco', 'ahmetxdincer@gmail.com', '$2y$10$.i9dswO/xkPnuFMCuk88kuIXU38x8jp/JLWZ0AhBnf2zwYVByjSiW', '2025-01-30 03:36:12', 46, 0, 1, 0, 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 3),
(31, 'enesbatos', 'ahmetxdincer@gmail.com', '$2y$10$nB8TcgUyudubIqjTaBEZuOW8QRwdUcaW.t.86yxm0X.IzxyydZ326', '2025-01-30 17:20:58', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `zikirkelimeleri`
--

CREATE TABLE `zikirkelimeleri` (
  `id` int(11) NOT NULL,
  `isim` varchar(100) NOT NULL,
  `anlam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `zikirkelimeleri`
--

INSERT INTO `zikirkelimeleri` (`id`, `isim`, `anlam`) VALUES
(1, 'Allah', 'Her şeyin yaratıcısı, her şeye gücü yeten tek Tanrı'),
(2, 'Er_Rahman', 'Çok merhametli, herkese merhamet eden'),
(3, 'Er_Rahim', 'Çok şefkatli, müminlere özel merhamet gösteren'),
(4, 'El_Melik', 'Hükümdar, her şeyin sahibi, mutlak hükümdar'),
(5, 'El_Kuddus', 'Her türlü eksiklikten uzak, kutsal'),
(6, 'Es_Selam', 'Barış veren, güvenliği sağlayan, huzuru veren'),
(7, 'El_Mumin', 'Güven veren, iman edenlerin koruyucusu'),
(8, 'El_Muheyymin', 'Her şeyi gözetip koruyan, her şeyi denetleyen'),
(9, 'El_Aziz', 'Yüce, galip, her şeyin üstünde olan'),
(10, 'El_Cebbar', 'Zorluklardan kurtaran, her şeyin üzerine galip olan'),
(11, 'El_Mutekebbir', 'Büyüklükte eşsiz, kibirli, her şeyden yüce'),
(12, 'El_Halik', 'Yaratan, her şeyi yoktan var eden'),
(13, 'El_Bari', 'Her şeyi kusursuz şekilde yaratan'),
(14, 'El_Musavvir', 'Şekil veren, her şeyin biçimini veren'),
(15, 'El_Gaffar', 'Çokça bağışlayan, günahları örten'),
(16, 'El_Kahhar', 'Her şeye hakim, galip gelen'),
(17, 'El_Vehhab', 'Çok bağışlayan, nimetleri veren'),
(18, 'Er_Rezzak', 'Rızık veren, her canlının ihtiyacını karşılayan'),
(19, 'El_Fettah', 'Açan, her türlü zorlukları açan'),
(20, 'El_Alim', 'Her şeyi bilen, ilim sahibi olan'),
(21, 'El_Kabid', 'Sıkıştıran, daraltan'),
(22, 'El_Basit', 'Genişleten, ferahlatan'),
(23, 'El_Hafid', 'Yükselten, alçaltan'),
(24, 'Er_Rafi', 'Yükselten, terfi ettiren'),
(25, 'El_Muiz', 'İzzet veren, şerefli kılan'),
(26, 'El_Muzil', 'Zayıflatan, alçaltan'),
(27, 'Es_Semi', 'Her şeyi işiten, her sesin sahibidir'),
(28, 'El_Basir', 'Her şeyi gören, gözle görülmeyeni dahi görebilen'),
(29, 'El_Hakem', 'Hükmeden, her şeyi adaletle yöneten'),
(30, 'El_Adl', 'Adil olan, adaleti sağlayan'),
(31, 'El_Latif', 'Her şeydeki inceliği, güzelliği gören'),
(32, 'El_Habir', 'Her şeyin en ince detayına kadar haberi olan'),
(33, 'El_Halim', 'Çok sabırlı, öfkesini gizleyen'),
(34, 'El_Azim', 'Çok büyük, azametli'),
(35, 'El_Gafur', 'Çokça bağışlayan, affeden'),
(36, 'Es_Sekur', 'Hakkında doğru bilgiye sahip olan'),
(37, 'El_Aliyy', 'Yüce, yüksek'),
(38, 'El_Kebir', 'Büyük, ulu'),
(39, 'El_Hafiz', 'Koruyan, muhafaza eden'),
(40, 'El_Mukit', 'Her şeyin kontrolünü elinde tutan'),
(41, 'El_Hasib', 'Hesap gören, her şeyi tartan'),
(42, 'El_Celil', 'Celal sahibi, büyüklük sahibi'),
(43, 'El_Kerim', 'Cömert, çok değerli'),
(44, 'Er_Rakib', 'Her şeyin üzerine gözetici olarak bakandır'),
(45, 'El_Mucib', 'Herkesin duasına cevap veren'),
(46, 'El_Vasi', 'Sonsuz genişlik, her şeye gücü yeten'),
(47, 'El_Hakim', 'Her şeyin hikmetle yöneteni'),
(48, 'El_Vedud', 'Sevgiyle dolu, sevilen'),
(49, 'El_Mecid', 'Şerefli, yüce'),
(50, 'El_Bais', 'Ölüleri dirilten, yeniden hayat veren'),
(51, 'Es_Sehid', 'Her şeyin şahidi, her şeyin farkında'),
(52, 'El_Hak', 'Gerçek olan, doğru olan'),
(53, 'El_Vekil', 'Her şeyin işini gören, her şeyin vekili'),
(54, 'El_Kaviyy', 'Çok kuvvetli, güçlü'),
(55, 'El_Metin', 'Çok sağlam, sarsılmaz'),
(56, 'El_Veliyy', 'Yanında olan, koruyan, dost olan'),
(57, 'El_Hamid', 'Her türlü övgüye layık olan'),
(58, 'El_Muhsi', 'Her şeyin sayısını bilen'),
(59, 'El_Mubdi', 'Başlatan, ilk yaratan'),
(60, 'El_Muid', 'Yeniden yaratıcı, hayat veren'),
(61, 'El_Muhyi', 'Can veren, hayatı veren'),
(62, 'El_Mumit', 'Öldüren, can alan'),
(63, 'El_Hayy', 'Diri, hayat sahibi'),
(64, 'El_Kayyum', 'Her şeyin varlıkta durmasını sağlayan'),
(65, 'El_Vacid', 'Bulunması mümkün olan'),
(66, 'El_Macid', 'Şanlı, yüce'),
(67, 'El_Vahid', 'Tek olan, bir olan'),
(68, 'Es_Samed', 'Her şeyin muhtaç olduğu varlık'),
(69, 'El_Kadir', 'Her şeye kadir olan, her işte gücü yeten'),
(70, 'El_Muktedir', 'Her şeyin gücünü elinde tutan'),
(71, 'El_Mukaddim', 'Öne alıcı, önce koyan'),
(72, 'El_Muahhir', 'Geri bırakan, geçiktiren'),
(73, 'El_Evvel', 'İlk, evvelki'),
(74, 'El_Ahir', 'Son, nihai'),
(75, 'Ez_Zahir', 'Açık olan, görünür'),
(76, 'El_Batin', 'Gizli olan, içteki'),
(77, 'El_Vali', 'İrade sahibi, hüküm süren'),
(78, 'El_Muteali', 'Yüce, yüksek'),
(79, 'El_Berr', 'İyi, güzel, doğruluğa sahip'),
(80, 'Et_Tevvab', 'Tövbe edenin tövbesini kabul eden'),
(81, 'El_Muntekim', 'Hesap soran, intikam alıcı'),
(82, 'El_Afuv', 'Affeden, bağışlayan'),
(83, 'Er_Rauf', 'Çok şefkatli, çok merhametli'),
(84, 'Malik_ul_Mulk', 'Mülkün sahibi, her şeyin hakimi'),
(85, 'Zul_Celali_vel_Ikram', 'Celal ve ikram sahibi olan'),
(86, 'El_Muksit', 'Adaletli, dengeyi sağlayan'),
(87, 'El_Cami', 'Toplayan, bir araya getiren'),
(88, 'El_Gani', 'Zengin, hiçbir şeye ihtiyacı olmayan'),
(89, 'El_Mugni', 'Rızık veren, zenginleştiren'),
(90, 'El_Mani', 'Engelleyen, yasaklayan'),
(91, 'Ed_Darr', 'Zarar veren'),
(92, 'En_Nafi', 'Fayda veren'),
(93, 'En_Nur', 'Işık, nur'),
(94, 'El_Hadi', 'Yol gösteren, hidayet veren'),
(95, 'El_Bedi', 'Her şeyi yoktan var eden'),
(96, 'El_Baki', 'Baki kalan, sonsuz olan'),
(97, 'El_Varis', 'Varlığın mirasçısı'),
(98, 'Er_Resid', 'Her şeyin sırlarını bilen'),
(99, 'Es_Sabur', 'Çok sabırlı, sabırla davranan');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `zikirler`
--

CREATE TABLE `zikirler` (
  `id` int(11) NOT NULL,
  `Allah` int(11) NOT NULL,
  `Rahman` int(11) NOT NULL,
  `Rahim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `zikirler`
--

INSERT INTO `zikirler` (`id`, `Allah`, `Rahman`, `Rahim`) VALUES
(30, 3, 3, 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_adi` (`kullanici_adi`);

--
-- Tablo için indeksler `zikirkelimeleri`
--
ALTER TABLE `zikirkelimeleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `zikirler`
--
ALTER TABLE `zikirler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `zikirkelimeleri`
--
ALTER TABLE `zikirkelimeleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Tablo için AUTO_INCREMENT değeri `zikirler`
--
ALTER TABLE `zikirler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `zikirler`
--
ALTER TABLE `zikirler`
  ADD CONSTRAINT `zikirler_ibfk_1` FOREIGN KEY (`id`) REFERENCES `kullanicilar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
