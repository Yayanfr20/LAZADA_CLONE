-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2023 pada 01.59
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lazada`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_products`
--

CREATE TABLE `tb_products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `images` varchar(100) NOT NULL,
  `stok` double NOT NULL,
  `sold_out` double NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_products`
--

INSERT INTO `tb_products` (`id`, `name`, `price`, `images`, `stok`, `sold_out`, `category`) VALUES
(1, 'Sepatu Olahraga', 300000, 'product.webp', 1000, 100, 'Olahraga'),
(2, 'Kemeja Lengan Pendek', 150000, 'product.webp', 1000, 100, 'Pakaian'),
(3, 'Tas Ransel', 250000, 'product.webp', 1000, 100, 'Aksesoris'),
(4, 'Celana Jeans', 200000, 'product.webp', 1000, 100, 'Pakaian'),
(5, 'Pulpen Warna', 10000, 'product.webp', 1000, 100, 'Alat Tulis'),
(6, 'Headphone Bluetooth', 500000, 'product.webp', 1000, 100, 'Elektronik'),
(7, 'Baju Renang', 150000, 'product.webp', 1000, 100, 'Olahraga'),
(8, 'Botol Minum', 50000, 'product.webp', 1000, 100, 'Aksesoris'),
(9, 'Mouse Wireless', 100000, 'product.webp', 1000, 100, 'Elektronik'),
(10, 'Buku Cerita Anak', 75000, 'product.webp', 1000, 100, 'Buku'),
(11, 'Buku Cerita Sikancil', 75000, 'product.webp', 1000, 100, 'Buku');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
