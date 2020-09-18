-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Sep 2020 pada 04.34
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_makam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ahliwaris`
--

CREATE TABLE `ahliwaris` (
  `id_ahliwaris` int(11) NOT NULL,
  `id_makam` int(11) NOT NULL,
  `alamat_ahliwaris` varchar(100) NOT NULL,
  `nik_ahliwaris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ahliwaris`
--

INSERT INTO `ahliwaris` (`id_ahliwaris`, `id_makam`, `alamat_ahliwaris`, `nik_ahliwaris`) VALUES
(12345, 2345, 'ntdsmhgd,glgdfxdfx', 789879);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_pemakaman`
--

CREATE TABLE `biaya_pemakaman` (
  `id_biaya` int(11) NOT NULL,
  `id_makam` int(11) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_makam`
--

CREATE TABLE `master_makam` (
  `id_makam` int(11) NOT NULL,
  `no_makam` int(11) NOT NULL,
  `kode_blok` int(11) NOT NULL,
  `lokas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_makam`
--

INSERT INTO `master_makam` (`id_makam`, `no_makam`, `kode_blok`, `lokas`) VALUES
(1, 12345, 5, 'Sudut'),
(2345, 23, 56, 'hulu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemakaman`
--

CREATE TABLE `pemakaman` (
  `id_makam` int(11) NOT NULL,
  `no_register` int(11) NOT NULL,
  `nama_mendiang` varchar(50) NOT NULL,
  `tgl_pemakaman` date NOT NULL,
  `biaya_pemakaman` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `no_makam` int(11) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `nik_mendiang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemakaman`
--

INSERT INTO `pemakaman` (`id_makam`, `no_register`, `nama_mendiang`, `tgl_pemakaman`, `biaya_pemakaman`, `status`, `no_makam`, `jatuh_tempo`, `nik_mendiang`) VALUES
(7, 12354, 'fgt', '2020-09-09', 3000, 'wna', 43, '2022-09-09', 98765),
(12, 7564, 'fbh', '2020-09-17', 4000, 'wna', 87, '2021-09-09', 9876),
(67, 90877, 'bnm', '2020-09-18', 4000, 'wna', 90, '2020-09-26', 67890),
(2345, 45, 'galish', '2020-09-21', 2000, 'wv', 21, '2020-09-29', 3254),
(123445, 12345, 'rftuid', '2020-09-01', 3210, 'wv', 234, '2020-10-01', 45678);

-- --------------------------------------------------------

--
-- Struktur dari tabel `retribusi`
--

CREATE TABLE `retribusi` (
  `id_makam` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `banyaknya` int(11) NOT NULL,
  `no_makam` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ahliwaris`
--
ALTER TABLE `ahliwaris`
  ADD PRIMARY KEY (`id_ahliwaris`),
  ADD KEY `ahliwaris_ibfk_1` (`id_makam`);

--
-- Indeks untuk tabel `biaya_pemakaman`
--
ALTER TABLE `biaya_pemakaman`
  ADD PRIMARY KEY (`id_biaya`),
  ADD KEY `id_makam` (`id_makam`);

--
-- Indeks untuk tabel `master_makam`
--
ALTER TABLE `master_makam`
  ADD PRIMARY KEY (`id_makam`);

--
-- Indeks untuk tabel `pemakaman`
--
ALTER TABLE `pemakaman`
  ADD PRIMARY KEY (`id_makam`);

--
-- Indeks untuk tabel `retribusi`
--
ALTER TABLE `retribusi`
  ADD PRIMARY KEY (`id_makam`,`no_makam`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ahliwaris`
--
ALTER TABLE `ahliwaris`
  ADD CONSTRAINT `ahliwaris_1` FOREIGN KEY (`id_makam`) REFERENCES `pemakaman` (`id_makam`),
  ADD CONSTRAINT `ahliwaris_ibfk_1` FOREIGN KEY (`id_makam`) REFERENCES `master_makam` (`id_makam`);

--
-- Ketidakleluasaan untuk tabel `biaya_pemakaman`
--
ALTER TABLE `biaya_pemakaman`
  ADD CONSTRAINT `biaya_pemakaman_ibfk_1` FOREIGN KEY (`id_makam`) REFERENCES `pemakaman` (`id_makam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
