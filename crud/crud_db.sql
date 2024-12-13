-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 11 Nov 2022 pada 08.45
-- Versi server: 5.7.30
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datadina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dina`
--

CREATE TABLE `data` (
  `id` int(10) NOT NULL AUTO_INCREMENT;
  `Nama` varchar(50) NOT NULL,
  `Kelas` int(15) NOT NULL,
  `Alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `Nama`, `NIM`, `Prodi`) VALUES
(1, 'Dina Rizkya Sofiana', 'E1R022006', 'Pendidikan Matematika'),
(2, 'Nazwa Risfaida', 'E1R022017', 'Pendidikan Matematika'),
(4, 'Risma Cahyaningrum', 'E1R022022', 'Pendidikan Matematika'),


--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
  ALTER TABLE data AUTO_INCREMENT = [nilai_id_terakhir + 1];



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
