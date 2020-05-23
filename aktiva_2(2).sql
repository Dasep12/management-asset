-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2019 pada 06.17
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aktiva_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(60) NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `id_barang` varchar(60) NOT NULL,
  `stock` varchar(60) NOT NULL,
  `stiker` varchar(60) NOT NULL,
  `ribbon` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `id_barang`, `stock`, `stiker`, `ribbon`) VALUES
(1, 'Stiker', '1', '0', '99', '99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `email`
--

CREATE TABLE `email` (
  `id` int(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `admin` varchar(60) NOT NULL,
  `keterangan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `email`
--

INSERT INTO `email` (`id`, `email`, `ip`, `admin`, `keterangan`) VALUES
(1, 'Dc_Support@JKT.indomaret.co.id', '192.168.19.52 - Iwang_STC', 'Iwang', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `handheld`
--

CREATE TABLE `handheld` (
  `id` int(60) NOT NULL,
  `sn` varchar(60) NOT NULL,
  `aktiva` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `kode` varchar(60) NOT NULL,
  `nilai_p` varchar(60) NOT NULL,
  `tahun_p` varchar(60) NOT NULL,
  `biaya_p` varchar(60) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `tgl_update` varchar(60) NOT NULL,
  `ket` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `merk` varchar(60) NOT NULL,
  `support` varchar(60) NOT NULL,
  `tanggal_pinjam` varchar(60) NOT NULL,
  `tanggal_balik` varchar(60) NOT NULL,
  `peminjam` varchar(60) NOT NULL,
  `dikembalikan` varchar(60) NOT NULL,
  `posisi_sebelumnya` varchar(60) NOT NULL,
  `selisih_pinjam` varchar(60) NOT NULL,
  `jam_keluar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `handheld`
--

INSERT INTO `handheld` (`id`, `sn`, `aktiva`, `type`, `kode`, `nilai_p`, `tahun_p`, `biaya_p`, `posisi`, `ip`, `tgl_update`, `ket`, `status`, `merk`, `support`, `tanggal_pinjam`, `tanggal_balik`, `peminjam`, `dikembalikan`, `posisi_sebelumnya`, `selisih_pinjam`, `jam_keluar`) VALUES
(61, 'TPMYKL90', 'C01.4566', 'GUN-MC230', 'JKT-23', '60000', '2015-05-04', '901000', 'Issuing', '10.11.30.23', '2015-08-17', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(62, 'TPMYKL91', 'C01.4567', 'GUN-MC231', 'JKT-24', '60001', '2015-05-05', '901001', 'Issuing', '10.11.30.24', '2015-08-18', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(63, 'TPMYKL92', 'C01.4568', 'GUN-MC232', 'JKT-25', '60002', '2015-05-06', '901002', 'Issuing', '10.11.30.25', '2015-08-19', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(64, 'TPMYKL93', 'C01.4569', 'GUN-MC233', 'JKT-26', '60003', '2015-05-07', '901003', 'Issuing', '10.11.30.26', '2015-08-20', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(65, 'TPMYKL94', 'C01.4570', 'GUN-MC234', 'JKT-27', '60004', '2015-05-08', '901004', 'Issuing', '10.11.30.27', '2015-08-21', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(66, 'TPMYKL95', 'C01.4571', 'GUN-MC235', 'JKT-28', '60005', '2015-05-09', '901005', 'Issuing', '10.11.30.28', '2015-08-22', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(67, 'TPMYKL96', 'C01.4572', 'GUN-MC236', 'JKT-29', '60006', '2015-05-10', '901006', 'Issuing', '10.11.30.29', '2015-08-23', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(68, 'TPMYKL97', 'C01.4573', 'GUN-MC237', 'JKT-30', '60007', '2015-05-11', '901007', 'Issuing', '10.11.30.30', '2015-08-24', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(69, 'TPMYKL98', 'C01.4574', 'GUN-MC238', 'JKT-31', '60008', '2015-05-12', '901008', 'Issuing', '10.11.30.31', '2015-08-25', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(70, 'TPMYKL99', 'C01.4575', 'GUN-MC239', 'JKT-32', '60009', '2015-05-13', '901009', 'Issuing', '10.11.30.32', '2015-08-26', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(71, 'TPMYKL100', 'C01.4576', 'GUN-MC240', 'JKT-33', '60010', '2015-05-14', '901010', 'Issuing', '10.11.30.33', '2015-08-27', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(72, 'TPMYKL101', 'C01.4577', 'GUN-MC241', 'JKT-34', '60011', '2015-05-15', '901011', 'Issuing', '10.11.30.34', '2015-08-28', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(73, 'TPMYKL102', 'C01.4578', 'GUN-MC242', 'JKT-35', '60012', '2015-05-16', '901012', 'Issuing', '10.11.30.35', '2015-08-29', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(74, 'TPMYKL103', 'C01.4579', 'GUN-MC243', 'JKT-36', '60013', '2015-05-17', '901013', 'Issuing', '10.11.30.36', '2015-08-30', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(75, 'TPMYKL104', 'C01.4580', 'GUN-MC244', 'JKT-37', '60014', '2015-05-18', '901014', 'Issuing', '10.11.30.37', '2015-08-31', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(76, 'TPMYKL105', 'C01.4581', 'GUN-MC245', 'JKT-38', '60015', '2015-05-19', '901015', 'Issuing', '10.11.30.38', '2015-09-01', 'Aktif', 'Aktif', 'Motorola', '', '', '', '', '', '', '', ''),
(77, 'TPMYKL106', 'C01.4582', 'GUN-MC246', 'JKT-39', '60016', '2015-05-20', '901016', 'Issuing', '10.11.30.39', '2015-09-02', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(78, 'TPMYKL107', 'C01.4583', 'GUN-MC247', 'JKT-40', '60017', '2015-05-21', '901017', 'Issuing', '10.11.30.40', '2015-09-03', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(79, 'TPMYKL108', 'C01.4584', 'GUN-MC248', 'JKT-41', '60018', '2015-05-22', '901018', 'Issuing', '10.11.30.41', '2015-09-04', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(80, 'TPMYKL109', 'C01.4585', 'GUN-MC249', 'JKT-42', '60019', '2015-05-23', '901019', 'Issuing', '10.11.30.42', '2015-09-05', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(81, 'TPMYKL110', 'C01.4586', 'GUN-MC250', 'JKT-43', '60020', '2015-05-24', '901020', 'Issuing', '10.11.30.43', '2015-09-06', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(82, 'TPMYKL111', 'C01.4587', 'GUN-MC251', 'JKT-44', '60021', '2015-05-25', '901021', 'Issuing', '10.11.30.44', '2015-09-07', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(83, 'TPMYKL112', 'C01.4588', 'GUN-MC252', 'JKT-45', '60022', '2015-05-26', '901022', 'Issuing', '10.11.30.45', '2015-09-08', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(84, 'TPMYKL113', 'C01.4589', 'GUN-MC253', 'JKT-46', '60023', '2015-05-27', '901023', 'Issuing', '10.11.30.46', '2015-09-09', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(85, 'TPMYKL114', 'C01.4590', 'GUN-MC254', 'JKT-47', '60024', '2015-05-28', '901024', 'Issuing', '10.11.30.47', '2015-09-10', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(86, 'TPMYKL115', 'C01.4591', 'GUN-MC255', 'JKT-48', '60025', '2015-05-29', '901025', 'Issuing', '10.11.30.48', '2015-09-11', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(87, 'TPMYKL116', 'C01.4592', 'GUN-MC256', 'JKT-49', '60026', '2015-05-30', '901026', 'Issuing', '10.11.30.49', '2015-09-12', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(88, 'TPMYKL117', 'C01.4593', 'GUN-MC257', 'JKT-50', '60027', '2015-05-31', '901027', 'Issuing', '10.11.30.50', '2015-09-13', 'Aktif', 'Rusak', 'Motorola', '', '', '', '', '', '', '', ''),
(89, 'TPMYKL118', 'C01.4594', 'GUN-MC258', 'JKT-51', '60028', '2015-06-01', '901028', 'Issuing', '10.11.30.51', '2015-09-14', 'Aktif', 'Service', 'Motorola', '', '', '', '', '', '', '', ''),
(90, 'TPMYKL119', 'C01.4595', 'GUN-MC259', 'JKT-52', '60029', '2015-06-02', '901029', 'Issuing', '10.11.30.52', '2015-09-15', 'Aktif', 'Service', 'Motorola', '', '', '', '', '', '', '', ''),
(91, 'TPMYKL120', 'C01.4596', 'GUN-MC260', 'JKT-53', '60030', '2015-06-03', '901030', 'Issuing', '10.11.30.53', '2015-09-16', 'Aktif', 'Service', 'Motorola', '', '', '', '', '', '', '', ''),
(92, 'TPMYKL121', 'C01.4597', 'GUN-MC261', 'JKT-54', '60031', '2015-06-04', '901031', 'Issuing', '10.11.30.54', '2015-09-17', 'Aktif', 'Service', 'Motorola', '', '', '', '', '', '', '', ''),
(93, 'TPMYKL122', 'C01.4598', 'GUN-MC262', 'JKT-55', '60032', '2015-06-05', '901032', 'Issuing', '10.11.30.55', '2015-09-18', 'Aktif', 'Service', 'Motorola', '', '', '', '', '', '', '', ''),
(94, 'TPMYKL123', 'C01.4599', 'GUN-MC263', 'JKT-56', '60033', '2015-06-06', '901033', 'Issuing', '10.11.30.56', '2015-09-19', 'Aktif', 'Service', 'Motorola', '', '', '', '', '', '', '', ''),
(95, 'TPMYKL124', 'C01.4600', 'GUN-MC264', 'JKT-57', '60034', '2015-06-07', '901034', 'Issuing', '10.11.30.57', '2015-09-20', 'Aktif', 'Service', 'Motorola', '', '', '', '', '', '', '', ''),
(96, 'TPMYKL125', 'C01.4601', 'GUN-MC265', 'JKT-58', '60035', '2015-06-08', '901035', 'Issuing', '10.11.30.58', '2015-09-21', 'Aktif', 'Service', 'Motorola', '', '', '', '', '', '', '', ''),
(97, 'TPMYKL126', 'C01.4602', 'GUN-MC266', 'JKT-59', '60036', '2015-06-09', '901036', 'Kl Fraction', '10.11.30.59', '2015-09-22', 'Aktif', 'Dipinjamkan', 'Motorola', 'dasep', '2019-05-04', '', 'Dasep', '', '', '', '07:28:37'),
(98, 'TPMYKL127', 'C01.4603', 'GUN-MC267', 'JKT-60', '60037', '2015-06-10', '901037', 'Receiving', '10.11.30.60', '2015-09-23', 'Aktif', 'Dipinjamkan', 'Motorola', 'dasep', '2019-05-08', '', 'Mohammad Alvin Nur', '', '', '', '12:39:58'),
(99, 'TPMYKL128', 'C01.4604', 'GUN-MC268', 'JKT-61', '60038', '2015-06-11', '901038', 'Support', '10.11.30.61', '2015-09-24', 'Aktif', 'Cadangan', 'Motorola', 'dasep', '2019-05-01', '2019-05-04', 'Mohammad Alvin Nur', 'kembali', 'Receiving', '', '07:29:18'),
(100, 'TPMYKL129', 'C01.4605', 'GUN-MC269', 'JKT-62', '60039', '2015-06-12', '901039', 'BIC', '10.11.30.62', '2015-09-25', 'Aktif', 'Dipinjamkan', 'Motorola', 'dasep', '2019-04-29', '', 'Ahmad Daripai', '', '', '', '07:29:41'),
(101, 'TPMYKL130', 'C01.4606', 'GUN-MC270', 'JKT-63', '60040', '2015-06-13', '901040', 'Issuing', '10.11.30.63', '2015-09-26', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', ''),
(102, 'TPMYKL131', 'C01.4607', 'GUN-MC271', 'JKT-64', '60041', '2015-06-14', '901041', 'Issuing', '10.11.30.64', '2015-09-27', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', ''),
(103, 'TPMYKL132', 'C01.4608', 'GUN-MC272', 'JKT-65', '60042', '2015-06-15', '901042', 'Issuing', '10.11.30.65', '2015-09-28', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', ''),
(104, 'TPMYKL133', 'C01.4609', 'GUN-MC273', 'JKT-66', '60043', '2015-06-16', '901043', 'Issuing', '10.11.30.66', '2015-09-29', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', ''),
(105, 'TPMYKL134', 'C01.4610', 'GUN-MC274', 'JKT-67', '60044', '2015-06-17', '901044', 'Issuing', '10.11.30.67', '2015-09-30', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', ''),
(106, 'TPMYKL135', 'C01.4611', 'GUN-MC275', 'JKT-68', '60045', '2015-06-18', '901045', 'Issuing', '10.11.30.68', '2015-10-01', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', ''),
(107, 'TPMYKL136', 'C01.4612', 'GUN-MC276', 'JKT-69', '60046', '2015-06-19', '901046', 'Issuing', '10.11.30.69', '2015-10-02', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', ''),
(108, 'TPMYKL137', 'C01.4613', 'GUN-MC277', 'JKT-70', '60047', '2015-06-20', '901047', 'Issuing', '10.11.30.70', '2015-10-03', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', ''),
(109, 'TPMYKL138', 'C01.4614', 'GUN-MC278', 'JKT-71', '60048', '2015-06-21', '901048', 'Issuing', '10.11.30.71', '2015-10-04', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', ''),
(110, 'TPMYKL139', 'C01.4615', 'GUN-MC279', 'JKT-72', '60049', '2015-06-22', '901049', 'Issuing', '10.11.30.72', '2015-10-05', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', ''),
(111, 'TPMYKL140', 'C01.4616', 'GUN-MC280', 'JKT-73', '60050', '2015-06-23', '901050', 'Issuing', '10.11.30.73', '2015-10-06', 'Aktif', 'Cadangan', 'Motorola', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_pinjamhh`
--

CREATE TABLE `history_pinjamhh` (
  `id` int(60) NOT NULL,
  `sn` varchar(60) NOT NULL,
  `aktiva` varchar(60) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `tanggal_pinjam` varchar(50) NOT NULL,
  `tanggal_balik` varchar(50) NOT NULL,
  `peminjam` varchar(60) NOT NULL,
  `support` varchar(60) NOT NULL,
  `posisi_sebelumnya` varchar(60) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  `stat` varchar(60) NOT NULL,
  `lama_hari` varchar(60) NOT NULL,
  `penerima` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history_pinjamhh`
--

INSERT INTO `history_pinjamhh` (`id`, `sn`, `aktiva`, `kode`, `tanggal_pinjam`, `tanggal_balik`, `peminjam`, `support`, `posisi_sebelumnya`, `posisi`, `stat`, `lama_hari`, `penerima`) VALUES
(42, 'MK4YUH0008', 'C01.650879', 'JKT-97', '2019-04-01', '2019-04-04', 'Risma', 'dasep', 'BIC', 'Support', '', '3 Hari', 'dasep'),
(43, 'MK4YUHMK', 'C01.809562', 'JKT-012', '2019-03-31', '2019-04-04', 'Dasep', 'Depiyawan', 'Receiving', 'Support', '', '4 Hari', 'dasep'),
(44, 'MK4YUHQ56', 'C01.010150', 'JKT-115', '2019-04-02', '2019-05-04', 'Mohammad Alvin Nur', 'dasep', 'BIC', 'Support', '', '2 Hari', 'dasep'),
(45, 'MK4YUHWE96', 'C01.65656', 'JKT-64', '2019-03-29', '2019-05-04', 'Ahmad Daripai', 'dasep', 'Receiving', 'Support', '', '6 Hari', 'dasep'),
(46, 'MK4YUH963', 'C01.6562036', 'JKT-85', '2019-04-03', '2019-05-04', 'Andi', 'dasep', 'Kl Fraction', 'Support', '', '1 Hari', 'dasep'),
(47, 'MK4YUHQ', 'C01.056520', 'JKT-20', '2019-04-04', '2019-05-04', 'Mohammad Alvin Nur', 'Depiyawan', 'Kl Fraction', 'Support', '', '0 Hari', 'dasep'),
(48, 'TPMYKL128', 'C01.4604', 'JKT-61', '2019-05-01', '2019-05-04', 'Mohammad Alvin Nur', 'dasep', 'Receiving', 'Support', '', '3 Hari', 'dasep');

-- --------------------------------------------------------

--
-- Struktur dari tabel `intermac`
--

CREATE TABLE `intermac` (
  `id` int(60) NOT NULL,
  `merk` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `sn` varchar(60) NOT NULL,
  `aktiva` varchar(60) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `nilai_p` varchar(60) NOT NULL,
  `biaya_p` varchar(60) NOT NULL,
  `tahun_p` varchar(60) NOT NULL,
  `tgl_update` varchar(60) NOT NULL,
  `ket` varchar(60) NOT NULL,
  `kode` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `intermac`
--

INSERT INTO `intermac` (`id`, `merk`, `type`, `sn`, `aktiva`, `ip`, `posisi`, `status`, `nilai_p`, `biaya_p`, `tahun_p`, `tgl_update`, `ket`, `kode`) VALUES
(9, 'Intermac', 'PDF-45', 'SNJK9098', 'C02.2323', '192.168.4.45', 'Zona 5', 'Rusak', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-32'),
(10, 'Intermac', 'PDF-46', 'SNJK9099', 'C02.2324', '192.168.4.46', 'Zona 6', 'Rusak', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-33'),
(11, 'Intermac', 'PDF-47', 'SNJK9100', 'C02.2325', '192.168.4.47', 'Zona 7', 'Rusak', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-34'),
(12, 'Intermac', 'PDF-48', 'SNJK9101', 'C02.2326', '192.168.4.48', 'Zona 8', 'Rusak', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-35'),
(13, 'Intermac', 'PDF-49', 'SNJK9102', 'C02.2327', '192.168.4.49', 'Zona 9', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-36'),
(14, 'Intermac', 'PDF-50', 'SNJK9103', 'C02.2328', '192.168.4.50', 'Zona 10', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-37'),
(15, 'Intermac', 'PDF-51', 'SNJK9104', 'C02.2329', '192.168.4.51', 'Zona 11', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-38'),
(16, 'Intermac', 'PDF-52', 'SNJK9105', 'C02.2330', '192.168.4.52', 'Zona 12', 'Cadangan', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-39'),
(17, 'Intermac', 'PDF-53', 'SNJK9106', 'C02.2331', '192.168.4.53', 'Zona 13', 'Cadangan', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-40'),
(18, 'Intermac', 'PDF-54', 'SNJK9107', 'C02.2332', '192.168.4.54', 'Zona 14', 'Rusak', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-41'),
(19, 'Intermac', 'PDF-55', 'SNJK9108', 'C02.2333', '192.168.4.55', 'Zona 15', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-42'),
(20, 'Intermac', 'PDF-56', 'SNJK9109', 'C02.2334', '192.168.4.56', 'Zona 16', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-43'),
(21, 'Intermac', 'PDF-57', 'SNJK9110', 'C02.2335', '192.168.4.57', 'Zona 17', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-44'),
(22, 'Intermac', 'PDF-58', 'SNJK9111', 'C02.2336', '192.168.4.58', 'Zona 18', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-45'),
(23, 'Intermac', 'PDF-59', 'SNJK9112', 'C02.2337', '192.168.4.59', 'Zona 19', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-46'),
(24, 'Intermac', 'PDF-60', 'SNJK9113', 'C02.2338', '192.168.4.60', 'Zona 20', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-47'),
(25, 'Intermac', 'PDF-61', 'SNJK9114', 'C02.2339', '192.168.4.61', 'Zona 21', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-48'),
(26, 'Intermac', 'PDF-62', 'SNJK9115', 'C02.2340', '192.168.4.62', 'Zona 22', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-49'),
(27, 'Intermac', 'PDF-63', 'SNJK9116', 'C02.2341', '192.168.4.63', 'Zona 23', 'Aktif', '95200000', '650000', '2015-02-12', '2019-04-05', 'Terpasang', 'INT-50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ip_dc`
--

CREATE TABLE `ip_dc` (
  `id` int(60) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `user` varchar(60) NOT NULL,
  `ket` varchar(60) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ip_dc`
--

INSERT INTO `ip_dc` (`id`, `ip`, `user`, `ket`, `posisi`, `status`) VALUES
(9, '10.11.30.89', 'iwang', '', 'Admin GPS', 'Pasif'),
(10, '10.11.30.125', 'Dika', '', 'Admin GPS', 'Aktif'),
(11, '10.11.30.128', 'Febry', '', 'Admin BPB', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komputer`
--

CREATE TABLE `komputer` (
  `id` int(60) NOT NULL,
  `merk` varchar(60) NOT NULL,
  `sn` varchar(60) NOT NULL,
  `aktiva` varchar(60) NOT NULL,
  `biaya_p` int(60) NOT NULL,
  `tahun_p` varchar(60) NOT NULL,
  `nilai_aktiva` varchar(60) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `tgl_update` varchar(60) NOT NULL,
  `ket` varchar(60) NOT NULL,
  `ram` varchar(60) NOT NULL,
  `procesor` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komputer`
--

INSERT INTO `komputer` (`id`, `merk`, `sn`, `aktiva`, `biaya_p`, `tahun_p`, `nilai_aktiva`, `ip`, `posisi`, `status`, `tgl_update`, `ket`, `ram`, `procesor`) VALUES
(2, 'Zyrex', 'MK4Y12PO', 'C01.4561', 60001, '2015-05-13', '6001', '192.168.46.101', 'ADM Bawah', 'Service', '2015-12-13', 'Aktif', '3 GB', 'Core2Duo'),
(3, 'Zyrex', 'MK4Y12PO', 'C01.4562', 60002, '2015-05-14', '6002', '192.168.46.102', 'ADM Bawah', 'Aktif', '2015-12-14', 'Aktif', '4 GB', 'Core2Duo'),
(4, 'Zyrex', 'MK4Y12PO', 'C01.4563', 60003, '2015-05-15', '6003', '192.168.46.103', 'ADM Bawah', 'Aktif', '2015-12-15', 'Aktif', '5 GB', 'Core2Duo'),
(5, 'Zyrex', 'MK4Y12PO', 'C01.4564', 60004, '2015-05-16', '6004', '192.168.46.104', 'ADM Bawah', 'Aktif', '2015-12-16', 'Aktif', '6 GB', 'Core2Duo'),
(6, 'Zyrex', 'MK4Y12PO', 'C01.4565', 60005, '2015-05-17', '6005', '192.168.46.105', 'ADM Bawah', 'Aktif', '2015-12-17', 'Aktif', '7 GB', 'Core2Duo'),
(7, 'Zyrex', 'MK4Y12PO', 'C01.4566', 60006, '2015-05-18', '6006', '192.168.46.106', 'ADM Bawah', 'Aktif', '2015-12-18', 'Aktif', '8 GB', 'Core2Duo'),
(8, 'Zyrex', 'MK4Y12PO', 'C01.4567', 60007, '2015-05-19', '6007', '192.168.46.107', 'ADM Bawah', 'Aktif', '2015-12-19', 'Aktif', '9 GB', 'Core2Duo'),
(9, 'Zyrex', 'MK4Y12PO', 'C01.4568', 60008, '2015-05-20', '6008', '192.168.46.108', 'ADM Bawah', 'Aktif', '2015-12-20', 'Aktif', '10 GB', 'Core2Duo'),
(10, 'Zyrex', 'MK4Y12PO', 'C01.4569', 60009, '2015-05-21', '6009', '192.168.46.109', 'ADM Bawah', 'Aktif', '2015-12-21', 'Aktif', '11 GB', 'Core2Duo'),
(11, 'Zyrex', 'MK4Y12PO', 'C01.4570', 60010, '2015-05-22', '6010', '192.168.46.110', 'ADM Bawah', 'Aktif', '2015-12-22', 'Aktif', '12 GB', 'Core2Duo'),
(12, 'Zyrex', 'MK4Y12PO', 'C01.4571', 60011, '2015-05-23', '6011', '192.168.46.111', 'ADM Bawah', 'Aktif', '2015-12-23', 'Aktif', '13 GB', 'Core2Duo'),
(13, 'Zyrex', 'MK4Y12PO', 'C01.4572', 60012, '2015-05-24', '6012', '192.168.46.112', 'ADM Bawah', 'Aktif', '2015-12-24', 'Aktif', '14 GB', 'Core2Duo'),
(14, 'Zyrex', 'MK4Y12PO', 'C01.4573', 60013, '2015-05-25', '6013', '192.168.46.113', 'ADM Bawah', 'Aktif', '2015-12-25', 'Aktif', '15 GB', 'Core2Duo'),
(15, 'Zyrex', 'MK4Y12PO', 'C01.4574', 60014, '2015-05-26', '6014', '192.168.46.114', 'ADM Bawah', 'Aktif', '2015-12-26', 'Aktif', '16 GB', 'Core2Duo'),
(16, 'Zyrex', 'MK4Y12PO', 'C01.4575', 60015, '2015-05-27', '6015', '192.168.46.115', 'ADM Bawah', 'Aktif', '2015-12-27', 'Aktif', '17 GB', 'Core2Duo'),
(17, 'Zyrex', 'MK4Y12PO', 'C01.4576', 60016, '2015-05-28', '6016', '192.168.46.116', 'ADM Bawah', 'Aktif', '2015-12-28', 'Aktif', '18 GB', 'Core2Duo'),
(18, 'Zyrex', 'MK4Y12PO', 'C01.4577', 60017, '2015-05-29', '6017', '192.168.46.117', 'ADM Bawah', 'Aktif', '2015-12-29', 'Aktif', '19 GB', 'Core2Duo'),
(19, 'Zyrex', 'MK4Y12PO', 'C01.4578', 60018, '2015-05-30', '6018', '192.168.46.118', 'ADM Bawah', 'Aktif', '2015-12-30', 'Aktif', '20 GB', 'Core2Duo'),
(20, 'Zyrex', 'MK4Y12PO', 'C01.4579', 60019, '2015-05-31', '6019', '192.168.46.119', 'ADM Bawah', 'Aktif', '2015-12-31', 'Aktif', '21 GB', 'Core2Duo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_aktivis`
--

CREATE TABLE `log_aktivis` (
  `id` int(60) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tgl` varchar(60) NOT NULL,
  `jam` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_aktivis`
--

INSERT INTO `log_aktivis` (`id`, `nama`, `tgl`, `jam`) VALUES
(1, '', '2019-05-17', '15:56:01'),
(2, 'dasep', '2019-05-17', '15:56:23'),
(3, 'dasep', '2019-05-17', '15:58:41'),
(4, 'dasep', '2019-05-17', '15:57:31'),
(5, 'sri', '2019-05-17', '15:59:49'),
(6, 'Dasep', '2019-05-18', '07:28:06'),
(7, 'dasep', '2019-05-18', '07:28:06'),
(8, 'dasep', '2019-05-29', '11:35:42'),
(9, 'Depiyawan', '2019-06-12', '11:45:57'),
(10, 'Depiyawan', '2019-06-12', '11:46:05'),
(11, 'Depiyawan', '2019-06-12', '11:46:11'),
(12, 'dasep', '2019-06-12', '11:46:18'),
(13, 'dasep', '2019-06-16', '13:24:04'),
(14, 'Dasep Depiyawan', '2019-07-07', '12:27:09'),
(15, 'Dasep', '2019-07-07', '12:27:17'),
(16, 'ada', '2019-07-07', '12:27:34'),
(17, 'sS', '2019-07-07', '12:27:52'),
(18, 'Dasep', '2019-07-13', '03:56:29'),
(19, 'Dasep', '2019-07-13', '03:58:17'),
(20, 'Dasep', '2019-07-13', '03:59:12'),
(21, 'Dasep', '2019-07-13', '03:59:12'),
(22, 'Dasep', '2019-07-13', '04:03:16'),
(23, 'Dasep Depiyawan', '2019-08-03', '05:16:04'),
(24, 'Dasep', '2019-08-03', '05:16:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitor`
--

CREATE TABLE `monitor` (
  `id` int(60) NOT NULL,
  `merk` text NOT NULL,
  `sn` varchar(60) NOT NULL,
  `aktiva` varchar(60) NOT NULL,
  `ukuran` varchar(60) NOT NULL,
  `tahun_p` varchar(60) NOT NULL,
  `biaya_p` varchar(60) NOT NULL,
  `nilai_aktiva` varchar(60) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `ket` text NOT NULL,
  `tgl_update` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `monitor`
--

INSERT INTO `monitor` (`id`, `merk`, `sn`, `aktiva`, `ukuran`, `tahun_p`, `biaya_p`, `nilai_aktiva`, `posisi`, `status`, `ket`, `tgl_update`) VALUES
(64, 'Samsung', 'ETLEBVYJK565', 'C01.2366', '15\"', '2015-12-56', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-02'),
(65, 'Samsung', 'ETLEBVYJK566', 'C01.2367', '15\"', '2015-12-57', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-03'),
(66, 'Samsung', 'ETLEBVYJK567', 'C01.2368', '15\"', '2015-12-58', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-04'),
(67, 'Samsung', 'ETLEBVYJK568', 'C01.2369', '15\"', '2015-12-59', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-05'),
(68, 'Samsung', 'ETLEBVYJK569', 'C01.2370', '15\"', '2015-12-60', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-06'),
(69, 'Samsung', 'ETLEBVYJK570', 'C01.2371', '15\"', '2015-12-61', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-07'),
(70, 'Samsung', 'ETLEBVYJK571', 'C01.2372', '15\"', '2015-12-62', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-08'),
(71, 'Samsung', 'ETLEBVYJK572', 'C01.2373', '15\"', '2015-12-63', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-09'),
(72, 'Samsung', 'ETLEBVYJK573', 'C01.2374', '15\"', '2015-12-64', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-10'),
(73, 'Samsung', 'ETLEBVYJK574', 'C01.2375', '15\"', '2015-12-65', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-11'),
(75, 'Samsung', 'ETLEBVYJK576', 'C01.2377', '15\"', '2015-12-67', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-13'),
(76, 'Samsung', 'ETLEBVYJK577', 'C01.2378', '15\"', '2015-12-68', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-14'),
(77, 'Samsung', 'ETLEBVYJK578', 'C01.2379', '15\"', '2015-12-69', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-15'),
(78, 'Samsung', 'ETLEBVYJK579', 'C01.2380', '15\"', '2015-12-70', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-16'),
(79, 'Samsung', 'ETLEBVYJK580', 'C01.2381', '15\"', '2015-12-71', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-17'),
(80, 'Samsung', 'ETLEBVYJK581', 'C01.2382', '15\"', '2015-12-72', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-18'),
(81, 'Samsung', 'ETLEBVYJK582', 'C01.2383', '15\"', '2015-12-73', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-19'),
(82, 'Samsung', 'ETLEBVYJK583', 'C01.2384', '15\"', '2015-12-74', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-20'),
(83, 'Samsung', 'ETLEBVYJK584', 'C01.2385', '15\"', '2015-12-75', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-21'),
(84, 'Samsung', 'ETLEBVYJK585', 'C01.2386', '15\"', '2015-12-76', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-22'),
(85, 'Samsung', 'ETLEBVYJK586', 'C01.2387', '15\"', '2015-12-77', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-23'),
(86, 'Samsung', 'ETLEBVYJK565', 'C01.2366', '15\"', '2015-12-56', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-02'),
(87, 'Samsung', 'ETLEBVYJK566', 'C01.2367', '15\"', '2015-12-57', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-03'),
(88, 'Samsung', 'ETLEBVYJK567', 'C01.2368', '15\"', '2015-12-58', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-04'),
(89, 'Samsung', 'ETLEBVYJK568', 'C01.2369', '15\"', '2015-12-59', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-05'),
(90, 'Samsung', 'ETLEBVYJK569', 'C01.2370', '15\"', '2015-12-60', '600000', '65000', 'ADM-Bawah', 'Aktif', 'Terpasang', '2019-05-06'),
(91, 'Samsung', 'ETLEBVYJK570', 'C01.2371', '15\"', '2015-12-61', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-07'),
(92, 'Samsung', 'ETLEBVYJK571', 'C01.2372', '15\"', '2015-12-62', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-08'),
(93, 'Samsung', 'ETLEBVYJK572', 'C01.2373', '15\"', '2015-12-63', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-09'),
(94, 'Samsung', 'ETLEBVYJK573', 'C01.2374', '15\"', '2015-12-64', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-10'),
(95, 'Samsung', 'ETLEBVYJK574', 'C01.2375', '15\"', '2015-12-65', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-11'),
(96, 'Samsung', 'ETLEBVYJK575', 'C01.2376', '15\"', '2015-12-66', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-12'),
(97, 'Samsung', 'ETLEBVYJK576', 'C01.2377', '15\"', '2015-12-67', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-13'),
(98, 'Samsung', 'ETLEBVYJK577', 'C01.2378', '15\"', '2015-12-68', '600000', '65000', 'ADM-Bawah', 'Cadangan', 'Terpasang', '2019-05-14'),
(99, 'Samsung', 'ETLEBVYJK578', 'C01.2379', '15\"', '2015-12-69', '600000', '65000', 'ADM-Bawah', 'Cadangan', 'Terpasang', '2019-05-15'),
(100, 'Samsung', 'ETLEBVYJK579', 'C01.2380', '15\"', '2015-12-70', '600000', '65000', 'ADM-Bawah', 'Cadangan', 'Terpasang', '2019-05-16'),
(101, 'Samsung', 'ETLEBVYJK580', 'C01.2381', '15\"', '2015-12-71', '600000', '65000', 'ADM-Bawah', 'Cadangan', 'Terpasang', '2019-05-17'),
(102, 'Samsung', 'ETLEBVYJK581', 'C01.2382', '15\"', '2015-12-72', '600000', '65000', 'ADM-Bawah', 'Cadangan', 'Terpasang', '2019-05-18'),
(103, 'Samsung', 'ETLEBVYJK582', 'C01.2383', '15\"', '2015-12-73', '600000', '65000', 'ADM-Bawah', 'Cadangan', 'Terpasang', '2019-05-19'),
(104, 'Samsung', 'ETLEBVYJK583', 'C01.2384', '15\"', '2015-12-74', '600000', '65000', 'ADM-Bawah', 'Cadangan', 'Terpasang', '2019-05-20'),
(105, 'Samsung', 'ETLEBVYJK584', 'C01.2385', '15\"', '2015-12-75', '600000', '65000', 'ADM-Bawah', 'Cadangan', 'Terpasang', '2019-05-21'),
(106, 'Samsung', 'ETLEBVYJK585', 'C01.2386', '15\"', '2015-12-76', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-22'),
(107, 'Samsung', 'ETLEBVYJK586', 'C01.2387', '15\"', '2015-12-77', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-23'),
(108, 'Samsung', 'ETLEBVYJK565', 'C01.2366', '15\"', '2015-12-56', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-02'),
(109, 'Samsung', 'ETLEBVYJK566', 'C01.2367', '15\"', '2015-12-57', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-03'),
(110, 'Samsung', 'ETLEBVYJK567', 'C01.2368', '15\"', '2015-12-58', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-04'),
(111, 'Samsung', 'ETLEBVYJK568', 'C01.2369', '15\"', '2015-12-59', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-05'),
(112, 'Samsung', 'ETLEBVYJK569', 'C01.2370', '15\"', '2015-12-60', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-06'),
(113, 'Samsung', 'ETLEBVYJK570', 'C01.2371', '15\"', '2015-12-61', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-07'),
(114, 'Samsung', 'ETLEBVYJK571', 'C01.2372', '15\"', '2015-12-62', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-08'),
(115, 'Samsung', 'ETLEBVYJK572', 'C01.2373', '15\"', '2015-12-63', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-09'),
(116, 'Samsung', 'ETLEBVYJK573', 'C01.2374', '15\"', '2015-12-64', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-10'),
(117, 'Samsung', 'ETLEBVYJK574', 'C01.2375', '15\"', '2015-12-65', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-11'),
(118, 'Samsung', 'ETLEBVYJK575', 'C01.2376', '15\"', '2015-12-66', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-12'),
(119, 'Samsung', 'ETLEBVYJK576', 'C01.2377', '15\"', '2015-12-67', '600000', '65000', 'ADM-Bawah', 'Rusak', 'Terpasang', '2019-05-13'),
(120, 'Samsung', 'ETLEBVYJK577', 'C01.2378', '15\"', '2015-12-68', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-14'),
(121, 'Samsung', 'ETLEBVYJK578', 'C01.2379', '15\"', '2015-12-69', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-15'),
(122, 'Samsung', 'ETLEBVYJK579', 'C01.2380', '15\"', '2015-12-70', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-16'),
(123, 'Samsung', 'ETLEBVYJK580', 'C01.2381', '15\"', '2015-12-71', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-17'),
(124, 'Samsung', 'ETLEBVYJK581', 'C01.2382', '15\"', '2015-12-72', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-18'),
(125, 'Samsung', 'ETLEBVYJK582', 'C01.2383', '15\"', '2015-12-73', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-19'),
(126, 'Samsung', 'ETLEBVYJK583', 'C01.2384', '15\"', '2015-12-74', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-20'),
(127, 'Samsung', 'ETLEBVYJK584', 'C01.2385', '15\"', '2015-12-75', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-21'),
(128, 'Samsung', 'ETLEBVYJK585', 'C01.2386', '15\"', '2015-12-76', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-22'),
(129, 'Samsung', 'ETLEBVYJK586', 'C01.2387', '15\"', '2015-12-77', '600000', '65000', 'ADM-Bawah', 'Service', 'Terpasang', '2019-05-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(60) NOT NULL,
  `id_barang` varchar(60) NOT NULL,
  `stock` varchar(60) NOT NULL,
  `stiker` varchar(60) NOT NULL,
  `ribbon` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `id_barang`, `stock`, `stiker`, `ribbon`) VALUES
(48, '1', '', '100', '100'),
(49, '1', '', '38', '38'),
(50, '1', '', '2', '1'),
(51, '1', '', '30', '27');

--
-- Trigger `pembelian`
--
DELIMITER $$
CREATE TRIGGER `pembelian-SR` AFTER INSERT ON `pembelian` FOR EACH ROW BEGIN
	UPDATE barang SET stiker=stiker+NEW.stiker , ribbon=ribbon+NEW.ribbon
    WHERE id_barang=NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaan`
--

CREATE TABLE `penggunaan` (
  `id` int(60) NOT NULL,
  `id_barang` varchar(60) NOT NULL,
  `stock` varchar(60) NOT NULL,
  `zona` varchar(60) NOT NULL,
  `tanggal` varchar(60) NOT NULL,
  `ket` varchar(60) NOT NULL,
  `user` varchar(60) NOT NULL,
  `kode` varchar(60) NOT NULL,
  `stiker` varchar(60) NOT NULL,
  `ribbon` varchar(60) NOT NULL,
  `jam` varchar(60) NOT NULL,
  `bulan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penggunaan`
--

INSERT INTO `penggunaan` (`id`, `id_barang`, `stock`, `zona`, `tanggal`, `ket`, `user`, `kode`, `stiker`, `ribbon`, `jam`, `bulan`) VALUES
(112, '1', '', 'Zona 6', '2019-03-30', '', 'dasep', 'SR19033148G023', '1', '1', '', '2019-05'),
(113, '1', '', 'Zona 6', '2019-03-30', '', 'dasep', 'SR1265EF65', '1', '0', '', '2019-01'),
(114, '1', '', 'Zona 10', '2019-03-31', '', 'dasep', 'SR19033117G023', '1', '1', '', '2019-01'),
(115, '1', '', 'Zona 6', '2019-03-31', '', 'dasep', 'SR1265EF65', '0', '1', '', '2019-01'),
(116, '1', '', 'Zona 6', '2019-03-30', '', 'dasep', 'SR1265EF65', '0', '1', '', '2019-01'),
(117, '1', '', 'Zona 6', '2019-03-31', '', 'dasep', 'SR1265EF65', '1', '0', '', '2019-01'),
(118, '1', '', 'Zona 13', '2019-03-31', '', 'dasep', 'SR19033113G023', '1', '1', '', '2019-02'),
(119, '1', '', 'Zona 17', '2019-03-31', '', 'dasep', 'SR19033155G023', '1', '1', '', '2019-01'),
(120, '1', '', 'Zona 13', '2019-03-31', '', 'dasep', 'SR19033100G023', '1', '1', '', '2019-02'),
(121, '1', '', 'Zona 6', '2019-03-30', '', 'dasep', 'SR19033104G023', '1', '1', '', '2019-01'),
(122, '1', '', 'Zona 20', '2019-03-30', '', 'dasep', 'SR19033119G023', '1', '1', '', '2019-01'),
(123, '1', '', 'Zona 9', '2019-03-30', '', 'dasep', 'SR1265EF65', '1', '0', '', '2019-04'),
(124, '1', '', 'Zona 6', '2019-03-31', '', 'dasep', 'SR1265EF65', '1', '0', '', '2019-01'),
(125, '1', '', 'Zona 6', '2019-01-01', '', 'dasep', 'SR19033127G023', '1', '1', '', '2019-04'),
(126, '1', '', 'Zona 6', '2019-02-01', '', 'dasep', 'SR19040139G023', '1', '1', '', '2019-02'),
(127, '1', '', 'Zona 6', '2019-03-01', '', 'dasep', 'SR19040147G023', '1', '1', '', '2019-03'),
(128, '1', '', 'Zona 6', '2019-04-01', '', 'dasep', 'SR19040154G023', '1', '1', '', '2019-02'),
(129, '1', '', 'Zona 6', '2019-04-01', '', 'dasep', 'SR19040116G012', '1', '1', '', '2019-01'),
(130, '1', '', 'Zona 6', '2019-12-20', '', 'dasep', 'SR19040134G012', '1', '1', '', '2019-12'),
(131, '1', '', 'Zona 6', '2019-05-09', '', 'dasep', 'SR19040115G012', '1', '1', '', '2019-08'),
(132, '1', '', 'Zona 6', '2019-06-20', '', 'dasep', 'SR19040146G012', '1', '1', '', '2019-07'),
(133, '1', '', 'Zona 6', '2019-06-20', '', 'dasep', 'SR19040157G012', '1', '1', '', '2019-06'),
(134, '1', '', 'Zona 14', '2019-04-01', '', 'dasep', 'SR19040106G012', '1', '1', '', '2019-09'),
(135, '1', '', 'Zona 6', '2019-04-02', '', 'dasep', 'SR19040131G012', '1', '1', '', '2019-11'),
(136, '1', '', 'Zona 6', '2019-04-25', '', 'dasep', 'SR19040136G012', '1', '1', '', '2019-08'),
(137, '1', '', 'Zona 6', '2019-04-07', '', 'dasep', 'SR19040141G012', '1', '1', '', '2019-10'),
(138, '1', '', 'Zona 6', '2019-04-21', '', 'dasep', 'SR19040146G012', '1', '1', '', '2019-08'),
(139, '1', '', 'Zona 6', '2019-04-01', '', 'dasep', 'SR1265EF65', '1', '0', '', '2019-11'),
(140, '1', '', 'Zona 11', '2019-04-01', '', 'dasep', 'SR19040110G012', '1', '1', '', '2019-04'),
(141, '1', '', 'Zona 16', '2019-04-01', '', 'dasep', 'SR19040145G012', '1', '1', '', '2019-03'),
(142, '1', '', 'Zona 20', '2019-04-01', '', 'dasep', 'SR19040150G012', '1', '1', '', '2019-04'),
(143, '1', '', 'Zona 17', '2019-04-01', '', 'dasep', 'SR19040154G012', '1', '1', '', '2019-04'),
(144, '1', '', 'Zona 6', '2019-04-02', '', 'dasep', 'SR1265EF65', '', '', '', ''),
(145, '1', '', 'Zona 6', '2019-04-02', '', 'dasep', 'SR1265EF65', '', '', '', ''),
(146, '1', '', 'Zona 7', '2019-05-07', '', 'dasep', 'SR19050846G012', '1', '1', '', '');

--
-- Trigger `penggunaan`
--
DELIMITER $$
CREATE TRIGGER `penggunaan_barang` AFTER INSERT ON `penggunaan` FOR EACH ROW BEGIN
	UPDATE barang SET stiker=stiker-NEW.stiker , ribbon=ribbon-NEW.ribbon
    WHERE id_barang=NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `printer`
--

CREATE TABLE `printer` (
  `id` int(60) NOT NULL,
  `merk` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `sn` varchar(60) NOT NULL,
  `aktiva` varchar(60) NOT NULL,
  `nilai_aktiva` varchar(60) NOT NULL,
  `tahun_p` varchar(60) NOT NULL,
  `biaya_p` varchar(60) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `ket` varchar(60) NOT NULL,
  `tgl_update` varchar(60) NOT NULL,
  `kode` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `printer`
--

INSERT INTO `printer` (`id`, `merk`, `type`, `sn`, `aktiva`, `nilai_aktiva`, `tahun_p`, `biaya_p`, `posisi`, `status`, `ket`, `tgl_update`, `kode`) VALUES
(69, 'EPSON', 'L210', 'MK4YIOKJ09', 'C01.456565', '60000', '2015-10-20', '600000', 'ADM-Bawag', 'Cadangan', 'Baik', '2019-12-09', 'PRT-545'),
(70, 'EPSON', 'L211', 'MK4YIOKJ10', 'C01.456566', '60001', '2015-10-21', '600001', 'ADM-Bawag', 'Cadangan', 'Baik', '2019-12-10', 'PRT-546'),
(71, 'EPSON', 'L212', 'MK4YIOKJ11', 'C01.456567', '60002', '2015-10-22', '600002', 'ADM-Bawag', 'Cadangan', 'Baik', '2019-12-11', 'PRT-547'),
(72, 'EPSON', 'L213', 'MK4YIOKJ12', 'C01.456568', '60003', '2015-10-23', '600003', 'ADM-Bawag', 'Cadangan', 'Baik', '2019-12-12', 'PRT-548'),
(73, 'EPSON', 'L214', 'MK4YIOKJ13', 'C01.456569', '60004', '2015-10-24', '600004', 'ADM-Bawag', 'Cadangan', 'Baik', '2019-12-13', 'PRT-549'),
(74, 'EPSON', 'L215', 'MK4YIOKJ14', 'C01.456570', '60005', '2015-10-25', '600005', 'ADM-Bawag', 'Cadangan', 'Baik', '2019-12-14', 'PRT-550'),
(75, 'EPSON', 'L216', 'MK4YIOKJ15', 'C01.456571', '60006', '2015-10-26', '600006', 'ADM-Bawag', 'Cadangan', 'Baik', '2019-12-15', 'PRT-551'),
(76, 'EPSON', 'L217', 'MK4YIOKJ16', 'C01.456572', '60007', '2015-10-27', '600007', 'ADM-Bawag', 'Cadangan', 'Baik', '2019-12-16', 'PRT-552'),
(77, 'EPSON', 'L218', 'MK4YIOKJ17', 'C01.456573', '60008', '2015-10-28', '600008', 'ADM-Bawag', 'Cadangan', 'Baik', '2019-12-17', 'PRT-553'),
(78, 'EPSON', 'L219', 'MK4YIOKJ18', 'C01.456574', '60009', '2015-10-29', '600009', 'ADM-Bawag', 'Rusak', 'Baik', '2019-12-18', 'PRT-554'),
(79, 'EPSON', 'L220', 'MK4YIOKJ19', 'C01.456575', '60010', '2015-10-30', '600010', 'ADM-Bawag', 'Rusak', 'Baik', '2019-12-19', 'PRT-555'),
(80, 'EPSON', 'L221', 'MK4YIOKJ20', 'C01.456576', '60011', '2015-10-31', '600011', 'ADM-Bawag', 'Rusak', 'Baik', '2019-12-20', 'PRT-556'),
(81, 'EPSON', 'L222', 'MK4YIOKJ21', 'C01.456577', '60012', '2015-11-01', '600012', 'ADM-Bawag', 'Rusak', 'Baik', '2019-12-21', 'PRT-557'),
(82, 'EPSON', 'L223', 'MK4YIOKJ22', 'C01.456578', '60013', '2015-11-02', '600013', 'ADM-Bawag', 'Rusak', 'Baik', '2019-12-22', 'PRT-558'),
(83, 'EPSON', 'L224', 'MK4YIOKJ23', 'C01.456579', '60014', '2015-11-03', '600014', 'ADM-Bawag', 'Rusak', 'Baik', '2019-12-23', 'PRT-559'),
(84, 'EPSON', 'L225', 'MK4YIOKJ24', 'C01.456580', '60015', '2015-11-04', '600015', 'ADM-Bawag', 'Rusak', 'Baik', '2019-12-24', 'PRT-560'),
(85, 'EPSON', 'L226', 'MK4YIOKJ25', 'C01.456581', '60016', '2015-11-05', '600016', 'ADM-Bawag', 'Rusak', 'Baik', '2019-12-25', 'PRT-561'),
(86, 'EPSON', 'L227', 'MK4YIOKJ26', 'C01.456582', '60017', '2015-11-06', '600017', 'ADM-Bawag', 'Rusak', 'Baik', '2019-12-26', 'PRT-562'),
(87, 'EPSON', 'L228', 'MK4YIOKJ27', 'C01.456583', '60018', '2015-11-07', '600018', 'ADM-Bawag', 'Aktif', 'Baik', '2019-12-27', 'PRT-563'),
(88, 'EPSON', 'L229', 'MK4YIOKJ28', 'C01.456584', '60019', '2015-11-08', '600019', 'ADM-Bawag', 'Aktif', 'Baik', '2019-12-28', 'PRT-564'),
(89, 'EPSON', 'L230', 'MK4YIOKJ29', 'C01.456585', '60020', '2015-11-09', '600020', 'ADM-Bawag', 'Aktif', 'Baik', '2019-12-29', 'PRT-565'),
(90, 'EPSON', 'L231', 'MK4YIOKJ30', 'C01.456586', '60021', '2015-11-10', '600021', 'ADM-Bawag', 'Aktif', 'Baik', '2019-12-30', 'PRT-566'),
(91, 'EPSON', 'L232', 'MK4YIOKJ31', 'C01.456587', '60022', '2015-11-11', '600022', 'ADM-Bawag', 'Aktif', 'Baik', '2019-12-31', 'PRT-567'),
(92, 'EPSON', 'L233', 'MK4YIOKJ32', 'C01.456588', '60023', '2015-11-12', '600023', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-01', 'PRT-568'),
(93, 'EPSON', 'L234', 'MK4YIOKJ33', 'C01.456589', '60024', '2015-11-13', '600024', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-02', 'PRT-569'),
(94, 'EPSON', 'L235', 'MK4YIOKJ34', 'C01.456590', '60025', '2015-11-14', '600025', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-03', 'PRT-570'),
(95, 'EPSON', 'L236', 'MK4YIOKJ35', 'C01.456591', '60026', '2015-11-15', '600026', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-04', 'PRT-571'),
(96, 'EPSON', 'L237', 'MK4YIOKJ36', 'C01.456592', '60027', '2015-11-16', '600027', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-05', 'PRT-572'),
(97, 'EPSON', 'L238', 'MK4YIOKJ37', 'C01.456593', '60028', '2015-11-17', '600028', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-06', 'PRT-573'),
(98, 'EPSON', 'L239', 'MK4YIOKJ38', 'C01.456594', '60029', '2015-11-18', '600029', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-07', 'PRT-574'),
(99, 'EPSON', 'L240', 'MK4YIOKJ39', 'C01.456595', '60030', '2015-11-19', '600030', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-08', 'PRT-575'),
(100, 'EPSON', 'L241', 'MK4YIOKJ40', 'C01.456596', '60031', '2015-11-20', '600031', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-09', 'PRT-576'),
(101, 'EPSON', 'L242', 'MK4YIOKJ41', 'C01.456597', '60032', '2015-11-21', '600032', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-10', 'PRT-577'),
(102, 'EPSON', 'L243', 'MK4YIOKJ42', 'C01.456598', '60033', '2015-11-22', '600033', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-11', 'PRT-578'),
(103, 'EPSON', 'L244', 'MK4YIOKJ43', 'C01.456599', '60034', '2015-11-23', '600034', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-12', 'PRT-579'),
(104, 'EPSON', 'L245', 'MK4YIOKJ44', 'C01.456600', '60035', '2015-11-24', '600035', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-13', 'PRT-580'),
(105, 'EPSON', 'L246', 'MK4YIOKJ45', 'C01.456601', '60036', '2015-11-25', '600036', 'ADM-Bawag', 'Aktif', 'Baik', '2020-01-14', 'PRT-581'),
(106, 'EPSON', 'L210', 'MK4YIOKJ09', 'C01.456565', '60000', '2015-10-20', '600000', 'ADM-Atas', 'Service', 'Baik', '2019-12-09', 'PRT-545'),
(107, 'EPSON', 'L211', 'MK4YIOKJ10', 'C01.456566', '60001', '2015-10-21', '600001', 'ADM-Atas', 'Service', 'Baik', '2019-12-10', 'PRT-546'),
(108, 'EPSON', 'L212', 'MK4YIOKJ11', 'C01.456567', '60002', '2015-10-22', '600002', 'ADM-Atas', 'Service', 'Baik', '2019-12-11', 'PRT-547'),
(109, 'EPSON', 'L213', 'MK4YIOKJ12', 'C01.456568', '60003', '2015-10-23', '600003', 'ADM-Atas', 'Service', 'Baik', '2019-12-12', 'PRT-548'),
(110, 'EPSON', 'L214', 'MK4YIOKJ13', 'C01.456569', '60004', '2015-10-24', '600004', 'ADM-Atas', 'Service', 'Baik', '2019-12-13', 'PRT-549'),
(111, 'EPSON', 'L215', 'MK4YIOKJ14', 'C01.456570', '60005', '2015-10-25', '600005', 'ADM-Atas', 'Service', 'Baik', '2019-12-14', 'PRT-550'),
(112, 'EPSON', 'L216', 'MK4YIOKJ15', 'C01.456571', '60006', '2015-10-26', '600006', 'ADM-Atas', 'Service', 'Baik', '2019-12-15', 'PRT-551'),
(113, 'EPSON', 'L217', 'MK4YIOKJ16', 'C01.456572', '60007', '2015-10-27', '600007', 'ADM-Atas', 'Service', 'Baik', '2019-12-16', 'PRT-552'),
(114, 'EPSON', 'L218', 'MK4YIOKJ17', 'C01.456573', '60008', '2015-10-28', '600008', 'ADM-Atas', 'Service', 'Baik', '2019-12-17', 'PRT-553'),
(115, 'EPSON', 'L219', 'MK4YIOKJ18', 'C01.456574', '60009', '2015-10-29', '600009', 'ADM-Atas', 'Service', 'Baik', '2019-12-18', 'PRT-554'),
(116, 'EPSON', 'L220', 'MK4YIOKJ19', 'C01.456575', '60010', '2015-10-30', '600010', 'ADM-Atas', 'Service', 'Baik', '2019-12-19', 'PRT-555'),
(117, 'EPSON', 'L221', 'MK4YIOKJ20', 'C01.456576', '60011', '2015-10-31', '600011', 'ADM-Atas', 'Service', 'Baik', '2019-12-20', 'PRT-556'),
(118, 'EPSON', 'L222', 'MK4YIOKJ21', 'C01.456577', '60012', '2015-11-01', '600012', 'ADM-Atas', 'Service', 'Baik', '2019-12-21', 'PRT-557'),
(119, 'EPSON', 'L223', 'MK4YIOKJ22', 'C01.456578', '60013', '2015-11-02', '600013', 'ADM-Atas', 'Service', 'Baik', '2019-12-22', 'PRT-558'),
(120, 'EPSON', 'L224', 'MK4YIOKJ23', 'C01.456579', '60014', '2015-11-03', '600014', 'ADM-Atas', 'Service', 'Baik', '2019-12-23', 'PRT-559'),
(121, 'EPSON', 'L225', 'MK4YIOKJ24', 'C01.456580', '60015', '2015-11-04', '600015', 'ADM-Atas', 'Service', 'Baik', '2019-12-24', 'PRT-560'),
(122, 'EPSON', 'L226', 'MK4YIOKJ25', 'C01.456581', '60016', '2015-11-05', '600016', 'ADM-Atas', 'Rusak', 'Baik', '2019-12-25', 'PRT-561'),
(123, 'EPSON', 'L227', 'MK4YIOKJ26', 'C01.456582', '60017', '2015-11-06', '600017', 'ADM-Atas', 'Rusak', 'Baik', '2019-12-26', 'PRT-562'),
(124, 'EPSON', 'L228', 'MK4YIOKJ27', 'C01.456583', '60018', '2015-11-07', '600018', 'ADM-Atas', 'Aktif', 'Baik', '2019-12-27', 'PRT-563'),
(125, 'EPSON', 'L229', 'MK4YIOKJ28', 'C01.456584', '60019', '2015-11-08', '600019', 'ADM-Atas', 'Aktif', 'Baik', '2019-12-28', 'PRT-564'),
(126, 'EPSON', 'L230', 'MK4YIOKJ29', 'C01.456585', '60020', '2015-11-09', '600020', 'ADM-Atas', 'Aktif', 'Baik', '2019-12-29', 'PRT-565'),
(127, 'EPSON', 'L231', 'MK4YIOKJ30', 'C01.456586', '60021', '2015-11-10', '600021', 'ADM-Atas', 'Aktif', 'Baik', '2019-12-30', 'PRT-566'),
(128, 'EPSON', 'L232', 'MK4YIOKJ31', 'C01.456587', '60022', '2015-11-11', '600022', 'ADM-Atas', 'Aktif', 'Baik', '2019-12-31', 'PRT-567'),
(129, 'EPSON', 'L233', 'MK4YIOKJ32', 'C01.456588', '60023', '2015-11-12', '600023', 'ADM-Atas', 'Aktif', 'Baik', '2020-01-01', 'PRT-568'),
(130, 'EPSON', 'L234', 'MK4YIOKJ33', 'C01.456589', '60024', '2015-11-13', '600024', 'ADM-Atas', 'Aktif', 'Baik', '2020-01-02', 'PRT-569'),
(131, 'EPSON', 'L235', 'MK4YIOKJ34', 'C01.456590', '60025', '2015-11-14', '600025', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-03', 'PRT-570'),
(132, 'EPSON', 'L236', 'MK4YIOKJ35', 'C01.456591', '60026', '2015-11-15', '600026', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-04', 'PRT-571'),
(133, 'EPSON', 'L237', 'MK4YIOKJ36', 'C01.456592', '60027', '2015-11-16', '600027', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-05', 'PRT-572'),
(134, 'EPSON', 'L238', 'MK4YIOKJ37', 'C01.456593', '60028', '2015-11-17', '600028', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-06', 'PRT-573'),
(135, 'EPSON', 'L239', 'MK4YIOKJ38', 'C01.456594', '60029', '2015-11-18', '600029', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-07', 'PRT-574'),
(136, 'EPSON', 'L240', 'MK4YIOKJ39', 'C01.456595', '60030', '2015-11-19', '600030', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-08', 'PRT-575'),
(137, 'EPSON', 'L241', 'MK4YIOKJ40', 'C01.456596', '60031', '2015-11-20', '600031', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-09', 'PRT-576'),
(138, 'EPSON', 'L242', 'MK4YIOKJ41', 'C01.456597', '60032', '2015-11-21', '600032', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-10', 'PRT-577'),
(139, 'EPSON', 'L243', 'MK4YIOKJ42', 'C01.456598', '60033', '2015-11-22', '600033', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-11', 'PRT-578'),
(140, 'EPSON', 'L244', 'MK4YIOKJ43', 'C01.456599', '60034', '2015-11-23', '600034', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-12', 'PRT-579'),
(141, 'EPSON', 'L245', 'MK4YIOKJ44', 'C01.456600', '60035', '2015-11-24', '600035', 'ADM-Bawah', 'Aktif', 'Baik', '2020-01-13', 'PRT-580'),
(142, 'EPSON', 'L246', 'MK4YIOKJ45', 'C01.456601', '60036', '2015-11-25', '600036', 'GA', 'Aktif', 'Baik', '2020-01-14', 'PRT-581');

-- --------------------------------------------------------

--
-- Struktur dari tabel `scanner`
--

CREATE TABLE `scanner` (
  `id` int(60) NOT NULL,
  `merk` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `sn` varchar(60) NOT NULL,
  `aktiva` varchar(60) NOT NULL,
  `tahun_p` varchar(60) NOT NULL,
  `biaya_p` varchar(60) NOT NULL,
  `nilai_aktiva` varchar(60) NOT NULL,
  `tgl_update` varchar(60) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `ket` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `scanner`
--

INSERT INTO `scanner` (`id`, `merk`, `type`, `sn`, `aktiva`, `tahun_p`, `biaya_p`, `nilai_aktiva`, `tgl_update`, `posisi`, `status`, `ket`) VALUES
(2, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901291', '2015-10-06', '60000', '60000', '2019-12-13', 'Zona 4', 'Rusak', 'Terpasang'),
(4, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901293', '2015-10-08', '60000', '60000', '2019-12-15', 'Zona 9', 'Rusak', 'Terpasang'),
(5, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901294', '2015-10-09', '60000', '60000', '2019-12-16', 'Zona 10', 'Rusak', 'Terpasang'),
(7, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901296', '2015-10-11', '60000', '60000', '2019-12-18', 'Zona 12', 'Cadangan', 'Terpasang'),
(8, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901297', '2015-10-12', '60000', '60000', '2019-12-19', 'Zona 13', 'Cadangan', 'Terpasang'),
(9, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901298', '2015-10-13', '60000', '60000', '2019-12-20', 'Zona 14', 'Service', 'Terpasang'),
(10, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901299', '2015-10-14', '60000', '60000', '2019-12-21', 'Zona 15', 'Service', 'Terpasang'),
(11, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901300', '2015-10-15', '60000', '60000', '2019-12-22', 'Zona 16', 'Service', 'Terpasang'),
(12, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901301', '2015-10-16', '60000', '60000', '2019-12-23', 'Zona 17', 'Service', 'Terpasang'),
(13, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901302', '2015-10-17', '60000', '60000', '2019-12-24', 'Zona 18', 'Aktif', 'Terpasang'),
(14, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901303', '2015-10-18', '60000', '60000', '2019-12-25', 'Zona 19', 'Aktif', 'Terpasang'),
(15, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901304', '2015-10-19', '60000', '60000', '2019-12-26', 'Zona 20', 'Aktif', 'Terpasang'),
(16, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901305', '2015-10-20', '60000', '60000', '2019-12-27', 'Zona 21', 'Aktif', 'Terpasang'),
(17, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901306', '2015-10-21', '60000', '60000', '2019-12-28', 'Zona 22', 'Aktif', 'Terpasang'),
(18, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901307', '2015-10-22', '60000', '60000', '2019-12-29', 'Zona 23', 'Aktif', 'Terpasang'),
(19, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901308', '2015-10-23', '60000', '60000', '2019-12-30', 'Zona 24', 'Aktif', 'Terpasang'),
(21, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901310', '2015-10-25', '60000', '60000', '2020-01-01', 'Zona 26', 'Aktif', 'Terpasang'),
(22, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901311', '2015-10-26', '60000', '60000', '2020-01-02', 'Zona 27', 'Aktif', 'Terpasang'),
(23, 'Motorola', 'Doraemon', 'MKLO890k', 'C01.901312', '2015-10-27', '60000', '60000', '2020-01-03', 'Zona 28', 'Aktif', 'Terpasang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sj_keluar`
--

CREATE TABLE `sj_keluar` (
  `id` int(60) NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `tujuan` varchar(60) NOT NULL,
  `detail` varchar(60) NOT NULL,
  `penerima` varchar(60) NOT NULL,
  `pengirim` varchar(60) NOT NULL,
  `tanggal_kirim` varchar(60) NOT NULL,
  `qty` varchar(60) NOT NULL,
  `type_kirim` varchar(60) NOT NULL,
  `nomor_sj` varchar(60) NOT NULL,
  `ket` varchar(60) NOT NULL,
  `type_sj` varchar(60) NOT NULL,
  `folder` varchar(60) NOT NULL,
  `filename` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sj_keluar`
--

INSERT INTO `sj_keluar` (`id`, `nama_barang`, `tujuan`, `detail`, `penerima`, `pengirim`, `tanggal_kirim`, `qty`, `type_kirim`, `nomor_sj`, `ket`, `type_sj`, `folder`, `filename`) VALUES
(40, 'Handheld', 'HO/Supllier', 'MK4Y5689QWER', 'Andri', 'Dasep', '2019-04-01', '1', 'Service Rusak', '1345/SJ/Vum/2019', 'Rusak LCD Pecah Layar', 'Keluar', './lampiran/', 'handheld.png'),
(41, 'Handheld', 'HO/Supllier', 'TMPY12090PK', 'Andriansyah', 'Dasep', '2019-04-02', '1', 'Selesai Service', '1345/SJ/Vum/2019', 'Rusak Lampu Indikator', 'Keluar', './lampiran/', 'images (1).jpeg'),
(42, 'Printer', 'Support', 'MK4Y12PK1KL', 'Dasep', 'Aditya', '2019-03-31', '2', 'Selesai Service', '1345/SJ/Vum/2019', 'Rusak Cetakan ', 'Masuk', './lampiran/', 'images (1).jpeg'),
(43, 'Handheld', 'HO/Supllier', '12', 'Dasep', 'Aditya', '2019-03-31', '2', 'Service Rusak', '1345/SJ/Vum/2019', '', 'Keluar', './lampiran/', 'images (1).jpeg'),
(44, 'asa', 'GA', '12', 'Dasep', 'Dasep', '2019-04-02', '1', 'Service Rusak', '1345/SJ/Vum/2019', '', 'Keluar', './lampiran/', 'IMG-20181226-WA0018.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(60) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `group_user` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `nik` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `folder` varchar(60) NOT NULL,
  `filename` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `group_user`, `pass`, `nik`, `status`, `folder`, `filename`) VALUES
(60, 'Dasep', 'Support', '15de21c670ae7c3f6f3f1f37029303c9', '2015045465', 'Online', 'login/file/', 'Screenshot_20190123-062842.png'),
(63, 'Sri', 'Support', '202cb962ac59075b964b07152d234b70', '2013045465', '', './file', 'rty.jpg'),
(64, 'Dasep', 'Admin', '15de21c670ae7c3f6f3f1f37029303c9', '201305654', '', './file', 'IMG-20181231-WA0021.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(100) NOT NULL,
  `merk` varchar(60) NOT NULL,
  `sn` varchar(60) NOT NULL,
  `aktiva` varchar(60) NOT NULL,
  `tahun_p` varchar(60) NOT NULL,
  `biaya_p` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  `ket` varchar(60) NOT NULL,
  `tgl_update` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `nilai_p` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vehicle`
--

INSERT INTO `vehicle` (`id`, `merk`, `sn`, `aktiva`, `tahun_p`, `biaya_p`, `status`, `posisi`, `ket`, `tgl_update`, `type`, `nilai_p`) VALUES
(22, 'Epson', 'MK4YUHJ65', 'C01.65623', '2012-12-05', '1000000', 'Aktif', 'HO/Supplier', 'asad', '2019-03-29', 'FD421', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_dc`
--

CREATE TABLE `web_dc` (
  `id` int(60) NOT NULL,
  `web` varchar(60) NOT NULL,
  `link` varchar(60) NOT NULL,
  `ket` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_dc`
--

INSERT INTO `web_dc` (`id`, `web`, `link`, `ket`) VALUES
(21, 'LIS G001', '192.168.46.100/lisg001/default.aspx', 'Web IIS'),
(23, 'SO IC', '192.168.46.230/Sorg001', ''),
(25, 'WEB CO', '172.145.12.150/default.aspx', 'Buat Complain KE IT'),
(28, 'Arif Fadillah', '192.168.19.51 - Admin GPS', '12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `handheld`
--
ALTER TABLE `handheld`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history_pinjamhh`
--
ALTER TABLE `history_pinjamhh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `intermac`
--
ALTER TABLE `intermac`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ip_dc`
--
ALTER TABLE `ip_dc`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log_aktivis`
--
ALTER TABLE `log_aktivis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penggunaan`
--
ALTER TABLE `penggunaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `printer`
--
ALTER TABLE `printer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `scanner`
--
ALTER TABLE `scanner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sj_keluar`
--
ALTER TABLE `sj_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_dc`
--
ALTER TABLE `web_dc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `email`
--
ALTER TABLE `email`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `handheld`
--
ALTER TABLE `handheld`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `history_pinjamhh`
--
ALTER TABLE `history_pinjamhh`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `intermac`
--
ALTER TABLE `intermac`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `ip_dc`
--
ALTER TABLE `ip_dc`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `komputer`
--
ALTER TABLE `komputer`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `log_aktivis`
--
ALTER TABLE `log_aktivis`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `penggunaan`
--
ALTER TABLE `penggunaan`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT untuk tabel `printer`
--
ALTER TABLE `printer`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT untuk tabel `scanner`
--
ALTER TABLE `scanner`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `sj_keluar`
--
ALTER TABLE `sj_keluar`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `web_dc`
--
ALTER TABLE `web_dc`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
