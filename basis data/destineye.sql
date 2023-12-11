-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 12:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destineye`
--

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasipembayaran`
--

CREATE TABLE `konfirmasipembayaran` (
  `id` int(11) NOT NULL,
  `invoice_id` varchar(255) DEFAULT NULL,
  `transfer_date` date DEFAULT NULL,
  `jumlah_transfer` decimal(10,2) DEFAULT NULL,
  `virtual_account_type` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bukti_pembayaran_path` varchar(255) DEFAULT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_invoice` varchar(50) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `destinasi` varchar(255) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `no` int(11) NOT NULL,
  `id_invoice` varchar(11) NOT NULL,
  `destinasi` varchar(255) NOT NULL,
  `id_pemesan` varchar(255) NOT NULL,
  `title_pelanggan` varchar(10) NOT NULL,
  `nama_depan_pelanggan` varchar(255) NOT NULL,
  `nama_belakang_pelanggan` varchar(255) NOT NULL,
  `no_telepon_pelanggan` varchar(15) NOT NULL,
  `alamat_email_pelanggan` varchar(255) NOT NULL,
  `title_tamu` varchar(10) NOT NULL,
  `nama_depan_tamu` varchar(255) NOT NULL,
  `nama_belakang_tamu` varchar(255) NOT NULL,
  `tanggal_kedatangan` varchar(255) NOT NULL,
  `tanggal_berakhir` varchar(255) NOT NULL,
  `harga_paket` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2),
(2, 'tes1', 'tes1@gmail.com', 'fa3fb6e0dccc657b57251c97db271b05', 1),
(3, 'Muhammad Fajri', 'muhfajri@gmail.com', '2ef7d029ac164b37ae8283fb71014edc', 1),
(4, 'muhsaipul', 'muhsaipul@gmail.com', '151a4707bc956b2f5591fbe549878045', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konfirmasipembayaran`
--
ALTER TABLE `konfirmasipembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `unique_id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konfirmasipembayaran`
--
ALTER TABLE `konfirmasipembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
