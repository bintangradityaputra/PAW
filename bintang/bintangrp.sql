-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2022 pada 11.58
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bintang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_177`
--

CREATE TABLE `tbl_177` (
  `id_mhs` int(5) NOT NULL,
  `nim_mhs` varchar(12) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `alamat_mhs` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_177`
--

INSERT INTO `tbl_177` (`id_mhs`, `nim_mhs`, `nama_mhs`, `alamat_mhs`) VALUES
(1, '200411100166', 'Jarjit Nur Muhammad', 'Durian Runtuh - Malaysia'),
(8, '200411100099', 'Andi Garuda Skala', 'Bojonegoro - Jawa Timur'),
(9, '200411100119', 'Anisa Handayani', 'Pamekasan - Jawa Timur'),
(10, '200411100188', 'Putri Astin Ningrum', 'Jawa Timur - Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_177`
--
ALTER TABLE `tbl_177`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_177`
--
ALTER TABLE `tbl_177`
  MODIFY `id_mhs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
