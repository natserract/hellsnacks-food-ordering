-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Nov 2017 pada 11.17
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hellsnacks_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `image`) VALUES
(1, 'Abon', 'category-abon.jpg'),
(2, 'Basreng', 'category-basreng.jpg'),
(3, 'Bawang Goreng', 'category-bawangpedas.jpg'),
(4, 'Kentang', 'category-kentangpedas.jpg'),
(5, 'Keripik', 'category-keripik.jpg'),
(6, 'Kerupuk', 'category-kerupukpedas.jpg'),
(8, 'Rendang', 'category-rendang.jpg'),
(9, 'Singkong', 'category-singkong.jpg'),
(11, 'Makaroni', 'snackmakaroni-makronice.jpg'),
(12, 'Sambal', 'category-sambal.jpg'),
(13, 'Instan', 'category-instant.jpg'),
(14, 'Serbi', 'category-serbi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(10) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `pesan` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_lengkap`, `email`, `no_telp`, `pesan`) VALUES
(46, 'naif', 'naif@gmail.com', '2147483647', 'qjhdqwidqfq'),
(48, 'hb1', 'alfin@gmail.com', '2147483647', 'xfc cgv hvb '),
(49, 'alfin surya', 'alfins132@gmail.com', '2147483647', 'Mohon dibantu sekian dan terimakasih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_d` int(10) NOT NULL,
  `id_order` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_header`
--

CREATE TABLE `order_header` (
  `id_order` int(16) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `status` int(1) NOT NULL,
  `jml_barang` int(2) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_header`
--

INSERT INTO `order_header` (`id_order`, `username`, `tgl`, `status`, `jml_barang`, `total`) VALUES
(156646, 'alfin.surya', '2017-11-12', 0, 4, 70000),
(321990, 'alfin.surya', '2017-11-12', 0, 8, 125000),
(758300, 'alfin.surya', '2017-11-12', 0, 4, 70000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(5) NOT NULL,
  `id_order` int(16) NOT NULL,
  `nama_lengkap` varchar(32) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tlp` tinyint(13) DEFAULT NULL,
  `alamat` text,
  `provinsi` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `c_pesanan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_order`, `nama_lengkap`, `email`, `tlp`, `alamat`, `provinsi`, `kota`, `c_pesanan`) VALUES
(7, 556976, 'ryan', 'ryan@gmail.com', 127, 'Jl.Kertapura', 'Bali', 'Denpasar', ''),
(8, 662200, 'Hidayat', 'diayatpray@gmail.com', 127, 'Jl.Kertapura', 'Bali', 'Denpasar', 'kamkasmdasdas'),
(9, 770141, 'Ryan', 'ryan@gmail.com', 127, 'Jl.Patuha', 'Bali', 'Denpasar', ''),
(10, 92315, 'egi yana', 'egi@gmail.com', 127, 'Jl.Ubung', 'Bali', 'Denpasar', ''),
(11, 407989, 'Foto', 'fot@gmail.com', 127, 'Jl.Kertapura', 'Bali', 'Denpasar', ''),
(12, 321990, 'Egi', 'egi@gmail.com', 127, 'Jl.Patuha', 'Bali', 'Denpasar', 'Nothing'),
(13, 156646, 'jowo', 'jowo@gmail.com', 127, 'Jl.en', 'Bali', 'Denpasar', ''),
(14, 758300, 'supra', 'supra@gmail.com', 127, 'Jl.Buyar', 'Bali', 'Denpasar', ''),
(15, 183380, 'satu', 'satu@gmail.com', 127, 'asasdas', 'Bali', 'Denpasar', ''),
(16, 8758, 'supra', 'supra@gmail.com', 127, 'Jl.kertapura', 'Bali', 'Denpasar', ''),
(17, 392242, 'aku', 'sayang@kamu.com', 127, 'adasdasdas', 'Bali', 'Denpasar', 'adasda'),
(18, 428039, 'aku', 'sayang@kamu.com', 127, 'adasdasdas', 'Bali', 'Denpasar', 'adasda'),
(19, 986206, 'zZXZXX', 'ZxZ@a.a', 127, '123123123123', 'Bali', 'Denpasar', ''),
(20, 435699, 'zZXZXX', 'ZxZ@a.a', 127, '123123123123', 'Bali', 'Denpasar', ''),
(21, 126800, 'ben', 'ben@gmail.com', 127, 'Jl.Edit Data', 'Bali', 'Denpasar', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `produk_nama` varchar(50) NOT NULL,
  `produk_image` text NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `long_desc` text NOT NULL,
  `produk_harga` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `produk_nama`, `produk_image`, `nama_kategori`, `short_desc`, `long_desc`, `produk_harga`) VALUES
(1, 'Cimol Kering Pedas', 'cimolpedas.jpg', 'Keripik', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 17500),
(4, 'Keripik Singkong Bawang Pedas', 'keripiksingkong.jpg', 'Singkong', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 12500),
(5, 'Makaroni Pedas', 'bawangpedas.jpg', 'Makaroni', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 12500),
(6, 'Kerupuk Jengkol Pedas', 'kerupukjengkolpedas.jpg', 'Kerupuk', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 10000),
(7, 'Gurilem Pedas', 'gurilempedas.jpg', 'Kerupuk', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 11500),
(8, 'Bawang Goreng Medan', 'bawangpedas.jpg', 'Bawang Goreng', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 41500),
(9, 'Abon Lele Leker', 'abon-lele-leker.jpg', 'Abon', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 23500),
(10, 'Eastern Hot Chili Oil', 'earnhot.jpg', 'Serbi', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 40000),
(11, 'Kacang Bogor Pedas Entis', 'kacang-bogor.jpg', 'Serbi', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 19000),
(12, 'Gurilem Cobian', 'gurilem-cobian.jpg', 'Serbi', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 7000),
(13, 'Kentang Balado Qiara', 'kentang-balado-qeira.jpg', 'Kentang', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 30000),
(14, 'Keripik Kentang Super Pikkong', 'kentang-pikkong.jpg', 'Kentang', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 21000),
(15, 'Sambel Oncom Ma Enok', 'sambal-ma-enok.jpg', 'Sambal', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 22500),
(16, 'Sambal Boyya Pedas', 'sambal-boya-pedas.jpg', 'Sambal', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 33500),
(17, 'Sambal Teri Cap Mertua', 'sambal-teri-mertua.jpg', 'Sambal', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 24000),
(18, 'Kerupuk Tahu Extra Pedas', 'kerupuk-tahu-pedas.jpg', 'Kerupuk', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 19000),
(19, 'Kerupuk Slondok Mang Eman', 'kerupukslondokmangeman.jpg', 'Kerupuk', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 9000),
(20, 'Kerupuk Ikan Pink Lada', 'kerupukikanpinklada.jpg', 'Kerupuk', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 7000),
(21, 'Drokdok Sapi Lada', 'drokdoklapilada.jpg', 'Kerupuk', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 11500),
(23, 'Mie Mou Sapi Lada', 'miemou.jpg', 'Mie', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 9500),
(24, 'Rendang Daging Sapi Uda Gembul', 'rendang-daging-sapi-uda-gembul.jpg', 'Rendang', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 37500),
(26, 'Sambal Bawang Cap Mertua', 'SambalBawangCapMertua.jpg', 'Sambal', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 24000),
(27, 'Lakoca Siomay Cuanki Instan', 'LakocaSiomayCuankiInstan.jpg', 'Instan', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 12000),
(28, 'Keripik Singkong Super Pedas', 'KeripikSingkongSuperPedas.jpg', 'singkong', 'Once you understand what language your customers speak in, determined which keywords your customers are using to find your product, and have developed a list of words that best communicate your product’s benefits, it’s time to craft the product description. ', 'Put your TV viewing into overdrive with scenes that jump off your screen when you add 3D HDTVs to your home-theater system. Alternate-frame sequencing (AFS) gives you every scene in two angles, making every image pop with clarity and intensity. This collection has HDTVs in both active and passive 3D – the difference lies in the glasses needed to view in 3D. Some models feature refresh rates as high as 600 Hz in plasma models and 480 Hz in LCD models. Look to the top names in visual entertainment, such as Panasonic, LG, Sony HDTVs and many others for 42”, 47”, 55” and larger screen sizes. Regardless of the size, adding a 3D HDTV to your home forever changes the way you watch TV with vibrant scenes that come to life.', 7000),
(29, 'Basreng Sapi Lada', 'Basreng-Sapi-Lada.jpg', 'Basreng', 'Basreng dengan bumbu khas sapi lada...\r\n\r\nrasanya sangat segar karena ada aroma jeruknya...\r\n\r\nga bisa berenti makannya...\r\n\r\n\r\nNett 104gram\r\n1kg 6-8pcs', 'Lorem ipsum dolor sit amet, duo at scripta honestatis, ut possim recusabo salutatus pro. An ignota senserit pri. Rebum vocibus vel id, his te ignota deleniti conclusionemque, eos dicant rationibus ne. Et eripuit ponderum electram vix. Malis platonem mel eu, in duo adhuc inermis.', 12000),
(33, 'Basreng Maling', 'Basreng-Maling.jpg', 'Basreng', 'Basreng Maling dibuat dari baso ikan. Dengan rasanya yang asin dan gurih, basreng ini menjadi salah satu produk BESTSELLER  di HELLSNACKS <br>\r\ndisebut Basreng MALING karena rasanya sungguh-sungguh lezat sampai maling saja tidak tahan untuk tidak mencurinya', 'Lorem ipsum dolor sit amet, duo at scripta honestatis, ut possim recusabo salutatus pro. An ignota senserit pri. Rebum vocibus vel id, his te ignota deleniti conclusionemque, eos dicant rationibus ne. Et eripuit ponderum electram vix. Malis platonem mel eu, in duo adhuc inermis.', 9500),
(34, 'Bawang Goreng Pedas Dalada', 'Bawang-Goreng-Pedas-Dalada.jpg', 'Bawang Goreng', 'Dalada adalah perpaduan bawang dan cabe rawit goreng\r\n\r\ndengan rasa yang gurih, renyah, enak\r\n\r\ncocok untuk dimakan dengan berbagai macam makanan\r\n\r\ndari mulai nasi putih, pempek, soto, bubur, sampai oatmeal\r\n\r\nOleh-oleh yang PALING dicari untuk dibawa keluar negeri. \r\n<p>&nbsp;</p>\r\nNett 100gram<br', 'Lorem ipsum dolor sit amet, duo at scripta honestatis, ut possim recusabo salutatus pro. An ignota senserit pri. Rebum vocibus vel id, his te ignota deleniti conclusionemque, eos dicant rationibus ne. Et eripuit ponderum electram vix. Malis platonem mel eu, in duo adhuc inermis.', 26500),
(35, 'Bawang Goreng Pedas Ma Uchu', 'Bawang-Goreng-Pedas-Ma-Uchu.jpg', 'Bawang Goreng', 'Dibuat dari cabai rawit dan bawang goreng segar menjadikan Bawang Goreng Ma Uchu kombinasi maut\r\n\r\nyang sanggup membangkitkan selera makan anda.\r\n<p>&nbsp;</p>\r\nNett 150gram<br />\r\n1kg', 'Lorem ipsum dolor sit amet, duo at scripta honestatis, ut possim recusabo salutatus pro. An ignota senserit pri. Rebum vocibus vel id, his te ignota deleniti conclusionemque, eos dicant rationibus ne. Et eripuit ponderum electram vix. Malis platonem mel eu, in duo adhuc inermis.', 50000),
(36, 'Rendang Daging Cap Nenek', 'Rendang-Daging-Cap-Nenek.jpg', 'Rendang', 'Rendang adalah salah satu makanan terlezat di Dunia, daripada Anda susah untuk membuatnya, kami menjual produk rendang yang higienis.\r\n<p>&nbsp;</p> Mudah disajikan, lezat, dan tahan hingga 6 bulan. Dengan kemasan yang telah di seal kedap udara, sehingga produk ini bisa dibawa hingga keluar negeri. ', 'Lorem ipsum dolor sit amet, duo at scripta honestatis, ut possim recusabo salutatus pro. An ignota senserit pri. Rebum vocibus vel id, his te ignota deleniti conclusionemque, eos dicant rationibus ne. Et eripuit ponderum electram vix. Malis platonem mel eu, in duo adhuc inermis.', 72500),
(38, 'Seblak Basah Instan Mommy', 'SeblakBasahInstanMommyIndo.jpg', 'Instan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 11000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `telepon`, `alamat`, `role`) VALUES
(51, 'alfin.surya', 'alfin', 'supra@gmail.com', '087761456951', 'Jl. Monang Maning Denpasar No.90', 'user'),
(54, 'stone', 'alfin', 'stone@gmail.com', '0874290401310', 'Jl.Gunung Kalimutu No.22', 'user'),
(55, 'admin', 'admin', '', '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_d`);

--
-- Indexes for table `order_header`
--
ALTER TABLE `order_header`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
