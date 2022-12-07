-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 06:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamtangan_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(20) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'wanita'),
(3, 'wanita'),
(10, 'pria');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keranjang`
--

CREATE TABLE `tbl_keranjang` (
  `id_keranjang` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `gambar_barang` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `statusPengiriman` varchar(50) NOT NULL,
  `no_tlpn` int(25) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `total_pembelian` varchar(50) NOT NULL,
  `tgl_pembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order detail`
--

CREATE TABLE `tbl_order detail` (
  `id_detail` int(20) NOT NULL,
  `id_order` int(20) NOT NULL,
  `jumlah_barang` int(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembelian`
--

CREATE TABLE `tbl_pembelian` (
  `id_order` int(20) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `nama_pembeli` varchar(75) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `Kota` varchar(35) NOT NULL,
  `kode pos` int(15) NOT NULL,
  `detail alamat` text NOT NULL,
  `total_pembelian` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_barang` int(20) NOT NULL,
  `id_kategori` int(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_barang` varchar(125) NOT NULL,
  `jumlah_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statuskirim`
--

CREATE TABLE `tbl_statuskirim` (
  `id_kirim` int(10) NOT NULL,
  `status_kirim` varchar(30) NOT NULL,
  `total pembayaran` varchar(60) NOT NULL,
  `id_pembelian` int(10) NOT NULL,
  `nama_pembeli` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tlpn` int(20) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `tgl_lahir` varchar(15) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `email`, `tlpn`, `jenis_kelamin`, `tgl_lahir`, `level`) VALUES
(1, 'Annisa Kurli Ivanka', '6f57aca475d75fc4d91aff85977eede7', 'nisaa@gmail.cm', 0, '', '', 'user'),
(16, 'nisa', '8fcd7901963a04ad91bdfb6cd84b917d', 'wawad@gmail.cm', 2345678, 'perempuan', '10-01-2006', 'user'),
(19, 'Annisa', 'e9af23dd5a45126ff689eba7bb2146bb', '', 0, '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_order detail`
--
ALTER TABLE `tbl_order detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD UNIQUE KEY `id_order` (`id_order`);

--
-- Indexes for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_statuskirim`
--
ALTER TABLE `tbl_statuskirim`
  ADD PRIMARY KEY (`id_kirim`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  MODIFY `id_keranjang` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order detail`
--
ALTER TABLE `tbl_order detail`
  MODIFY `id_detail` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  MODIFY `id_order` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_statuskirim`
--
ALTER TABLE `tbl_statuskirim`
  MODIFY `id_kirim` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
