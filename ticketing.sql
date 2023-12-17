-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 11:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `nama_rek` varchar(20) NOT NULL,
  `nama_bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `no_rek`, `nama_rek`, `nama_bank`) VALUES
(1, '5220304312', 'Adie', 'BCA'),
(2, '0178305704', 'Adie', 'BNI');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penumpang`
--

CREATE TABLE `detail_penumpang` (
  `id_detail_penumpang` int(11) NOT NULL,
  `id_pemesanan` int(20) NOT NULL,
  `nama_penumpang` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_kursi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_penumpang`
--

INSERT INTO `detail_penumpang` (`id_detail_penumpang`, `id_pemesanan`, `nama_penumpang`, `alamat`, `kode_kursi`) VALUES
(17, 49, 'Arif Sulistiyo', 'Cepu', 'B10'),
(19, 50, 'adie', 'Desa Bakalan ', 'B05'),
(20, 51, 'adie', 'Desa Bakalan ', 'A11');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(20) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Petugas'),
(3, 'Penumpang');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(20) NOT NULL,
  `kode_pemesanan` varchar(50) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tempat_pemesanan` varchar(20) NOT NULL,
  `id_rute` int(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_cekin` time NOT NULL,
  `jam_berangkat` time NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `id_petugas` int(20) NOT NULL,
  `tagihan` int(11) NOT NULL,
  `jumlah_penumpang` int(11) NOT NULL,
  `id_penumpang` int(20) NOT NULL,
  `transfer_ke` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `tanggal_pemesanan`, `tempat_pemesanan`, `id_rute`, `tujuan`, `tanggal_berangkat`, `jam_cekin`, `jam_berangkat`, `total_bayar`, `id_petugas`, `tagihan`, `jumlah_penumpang`, `id_penumpang`, `transfer_ke`) VALUES
(49, 'FXFrQNBxuz', '2021-03-12', '', 5, 'Surabaya', '2021-03-12', '09:46:00', '09:50:00', 'Rp.  6000', 1, 6000, 1, 6, '5220304312'),
(50, 'D3jH5TkFli', '2021-03-22', '', 5, 'Surabaya', '2021-03-22', '09:46:00', '09:50:00', 'Rp.  6000', 1, 6000, 1, 3, ''),
(51, 'jyzN86y9G3', '2021-03-22', '', 5, 'Surabaya', '2021-03-22', '09:46:00', '09:50:00', 'Rp.  6000', 1, 6000, 1, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_penumpang` varchar(20) NOT NULL,
  `alamat_penumpang` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki_laki','perempuan','') NOT NULL,
  `telephone` int(15) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `nama_rek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `username`, `password`, `nama_penumpang`, `alamat_penumpang`, `tanggal_lahir`, `jenis_kelamin`, `telephone`, `no_rek`, `nama_rek`) VALUES
(1, 'user', 'user', 'M, Riki', 'Bojonegoro', '2003-02-03', 'laki_laki', 8108129, '', ''),
(2, 'user1', 'user1', 'RIZKIK', 'Bojonegoro', '2003-02-03', 'laki_laki', 8800000, '', ''),
(3, 'penumpang', 'penumpang', 'adie', 'Bojonegoro', '2021-03-03', 'laki_laki', 2147483647, '8291128', 'Koirifa'),
(4, 'penumpang1', 'penumpang1', 'sulton', 'pacing', '2021-03-03', 'laki_laki', 2147483647, '8291128', 'sulton'),
(5, 'prakerin', 'prakerin', 'M. Rizki Khoirifa S', 'Mulyoagung', '2007-02-03', 'laki_laki', 883902073, '0829379286', 'Rizki'),
(6, 'arif', 'arif', 'Arif', 'Cepu', '2021-03-12', 'laki_laki', 23445566, '736353673', 'Arif');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_petugas` varchar(20) NOT NULL,
  `id_level` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `id_level`) VALUES
(1, 'admin', 'admin', 'Yoga Adie Nugroho', 1),
(2, 'petugas', 'petugas', 'Yoga Adie Nugroho', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `kota_awal` varchar(20) NOT NULL,
  `rute_akhir` varchar(20) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_cekin` time NOT NULL,
  `jam_berangkat` time NOT NULL,
  `harga` varchar(20) NOT NULL,
  `id_transportasi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `tujuan`, `kota_awal`, `rute_akhir`, `tanggal_berangkat`, `jam_cekin`, `jam_berangkat`, `harga`, `id_transportasi`) VALUES
(3, 'Lamongan', 'Bojonegoro', 'Stasiun Pasar Turi', '2021-02-09', '06:00:00', '08:00:00', '6000', 3),
(5, 'Surabaya', 'Bojonegoro', 'Surabaya', '2021-03-22', '09:46:00', '09:50:00', '6000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `id_transportasi` int(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `jumlah_kursi` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_type_transportasi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportasi`
--

INSERT INTO `transportasi` (`id_transportasi`, `kode`, `jumlah_kursi`, `keterangan`, `id_type_transportasi`) VALUES
(3, 'C', '90', 'Ekonomi', 2),
(4, 'B', '80', 'Eksekutif', 3);

-- --------------------------------------------------------

--
-- Table structure for table `type_transportasi`
--

CREATE TABLE `type_transportasi` (
  `id_type_transportasi` int(20) NOT NULL,
  `nama_type` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_transportasi`
--

INSERT INTO `type_transportasi` (`id_type_transportasi`, `nama_type`, `keterangan`) VALUES
(2, 'KRD', 'Ekonomi'),
(3, 'Jaya Baya', 'Eksekutif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `detail_penumpang`
--
ALTER TABLE `detail_penumpang`
  ADD PRIMARY KEY (`id_detail_penumpang`),
  ADD UNIQUE KEY `kode_kursi` (`kode_kursi`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_penumpang` (`id_penumpang`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD KEY `id_transportasi` (`id_transportasi`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id_transportasi`),
  ADD KEY `id_type_transportasi` (`id_type_transportasi`);

--
-- Indexes for table `type_transportasi`
--
ALTER TABLE `type_transportasi`
  ADD PRIMARY KEY (`id_type_transportasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_penumpang`
--
ALTER TABLE `detail_penumpang`
  MODIFY `id_detail_penumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_penumpang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id_transportasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_transportasi`
--
ALTER TABLE `type_transportasi`
  MODIFY `id_type_transportasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penumpang`
--
ALTER TABLE `detail_penumpang`
  ADD CONSTRAINT `fk_pemesanan` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`id_penumpang`) REFERENCES `penumpang` (`id_penumpang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`id_transportasi`) REFERENCES `transportasi` (`id_transportasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD CONSTRAINT `transportasi_ibfk_1` FOREIGN KEY (`id_type_transportasi`) REFERENCES `type_transportasi` (`id_type_transportasi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
