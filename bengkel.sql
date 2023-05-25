-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2023 pada 07.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kd_barang` varchar(20) NOT NULL,
  `nm_barang` varchar(200) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `diskon` int(3) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_barang`, `nm_barang`, `harga_jual`, `diskon`, `stok`) VALUES
('10', 'Ban ', 80000, 0, 0),
('07084323', 'knalpot', 200000, 0, 5),
('9', 'Spion', 25000, 0, 3),
('8', 'has cnmsa', 60000, 0, 4),
('13', 'Oli B5', 45000, 0, 24),
('7', 'Oli B6', 50000, 0, 9),
('5', 'nfsfn', 35000, 0, 11),
('4', 'Oli 89', 45000, 0, 3),
('3', 'Oli B4', 70000, 10, 2),
('1', 'Oli Top 1', 90000, 10, 1),
('2', 'Oli E2', 40000, 0, 24),
('26013937', 'Oli Castrol', 51000, 0, 18),
('12', 'sjfbs sdfjbsk', 100000, 0, 10),
('05040328', 'Coba', 100000, 0, 50),
('DICK/20230523/00001', 'kokokkoko', 100000000, 10, 10),
('DICK/20230523/00002', 'kokokkoko', 123123123, 10, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasaservice`
--

CREATE TABLE `jasaservice` (
  `kd_jasa` varchar(20) NOT NULL,
  `nama_jasa` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `diskon` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jasaservice`
--

INSERT INTO `jasaservice` (`kd_jasa`, `nama_jasa`, `harga`, `diskon`) VALUES
('72814', 'Ganti Oli belakang dan depan', 7500, 10),
('24234', 'Service roda dua yang rusak', 67000, 10),
('76512', 'ganti spion', 20000, 0),
('761578', 'ganti ruji', 25000, 0),
('77777', 'ganti gigi', 30000, 10),
('26014137', 'Ganti Oli', 10000, 0),
('07084233', 'ganti knalpot', 45000, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `no_invoice` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `namaPelanggan` varchar(225) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`no_invoice`, `tanggal`, `namaPelanggan`, `no_polisi`, `totalharga`, `status`) VALUES
('77', '2019-05-04', '11', '11', 0, 1),
('54', '2019-05-04', 'ol', 'vf', 0, 1),
('07081617', '2019-05-07', 'ilya', 'BN 567 N', 206300, 1),
('24054645', '0000-00-00', 'alfred', '23456', 614000, 1),
('07013428', '2019-05-07', 'al', '231', 110300, 1),
('07084411', '2019-05-07', 'Al', 'BN 3636 N', 125300, 1),
('07080818', '2019-05-07', 'ali', 'N 77 K5', 130000, 0),
('26014151', '2023-03-26', 'Sugeng', 'TDR 3000', 112000, 0),
('26014728', '2023-03-25', 'Asep', 'TD 4050', 161000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_item`
--

CREATE TABLE `transaksi_item` (
  `id` int(5) NOT NULL,
  `no_invoice` varchar(10) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `jenis_transaksi` varchar(1) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_item`
--

INSERT INTO `transaksi_item` (`id`, `no_invoice`, `kode`, `jenis_transaksi`, `jumlah`) VALUES
(174, '7081617', '24234', '1', 1),
(160, '7013428', '24234', '1', 1),
(159, '7013428', '7', '0', 1),
(175, '7081617', '76512', '1', 1),
(91, '54', '72814', '1', 1),
(92, '54', '24234', '1', 1),
(93, '54', '7', '0', 1),
(94, '77', '77777', '1', 1),
(96, '77', '2', '0', 2),
(166, '7014428', '13', '0', 1),
(165, '7014428', '1231', '1', 1),
(178, '7084411', '24234', '1', 1),
(179, '7084411', '76512', '1', 1),
(180, '7084411', '7084323', '0', 1),
(181, '7084411', '13', '0', 1),
(182, '24054645', '76512', '1', 1),
(183, '24054645', '77777', '1', 1),
(184, '24054645', '1', '0', 7),
(177, '7081617', '1', '0', 1),
(176, '7081617', '4', '0', 1),
(173, '7080818', '4', '0', 2),
(172, '7080818', '76512', '1', 1),
(171, '7080818', '76512', '1', 1),
(185, '26014151', '26014137', '1', 1),
(186, '26014151', '26013937', '0', 2),
(187, '26014728', '26014137', '1', 1),
(188, '26014728', '76512', '1', 1),
(189, '26014728', '1', '0', 1),
(190, '26014728', '9', '0', 2);

--
-- Trigger `transaksi_item`
--
DELIMITER $$
CREATE TRIGGER `penambahan stok` AFTER DELETE ON `transaksi_item` FOR EACH ROW BEGIN 
	UPDATE barang set barang.stok = barang.stok + OLD.jumlah where barang.kd_barang = OLD.kode;
   END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pengurangan stok` AFTER INSERT ON `transaksi_item` FOR EACH ROW BEGIN
	UPDATE barang SET barang.stok = barang.stok - new.jumlah WHERE barang.kd_barang = NEW.kode;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('kasir','admin') NOT NULL DEFAULT 'kasir'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userid`, `password`, `nama`, `level`) VALUES
('admin', '123', 'Wahyu', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indeks untuk tabel `jasaservice`
--
ALTER TABLE `jasaservice`
  ADD PRIMARY KEY (`kd_jasa`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_invoice`);

--
-- Indeks untuk tabel `transaksi_item`
--
ALTER TABLE `transaksi_item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaksi_item`
--
ALTER TABLE `transaksi_item`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
