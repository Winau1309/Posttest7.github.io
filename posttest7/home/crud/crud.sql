-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 14.31
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_gc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` int(30) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id`, `nama`, `email`, `notelp`, `pesan`, `gambar_produk`) VALUES
(14, 'jimin', 'jimin@gmail.com', 627412523, 'jalan menuju hatimu', '812-jimin.jpeg'),
(15, 'jungkook', 'jungkook@gmail.com', 879215335, 'jalan ke pelukan mu', '117-jungkook.jpeg'),
(16, 'taeyong', 'taeyong@gmail.com', 2534758, 'ke pelaminan', '677-Taeyong nct.jpeg'),
(17, 'jaehyun', 'jaehyun@gmail.com', 2147483647, 'jalan ke manapun bersama mu', '90-jaehyun.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
