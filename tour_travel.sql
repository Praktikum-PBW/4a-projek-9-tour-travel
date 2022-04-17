-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 06:04 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail`
--

CREATE TABLE `tb_detail` (
  `id` int(4) NOT NULL,
  `no_pesanan` int(4) NOT NULL,
  `jmlh_tiket` varchar(4) NOT NULL,
  `tgl_berangkat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_items`
--

CREATE TABLE `tb_items` (
  `no_items` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  `tujuan_wisata` varchar(50) NOT NULL,
  `jmlh_hari` int(2) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `transportasi` enum('pesawat','kereta','bus','kapal') NOT NULL,
  `penginapan` varchar(50) NOT NULL,
  `restoran` varchar(50) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_items`
--

INSERT INTO `tb_items` (`no_items`, `user_id`, `tujuan_wisata`, `jmlh_hari`, `jam_berangkat`, `jam_tiba`, `transportasi`, `penginapan`, `restoran`, `harga`, `deskripsi`) VALUES
(1, 1, 'Jakarta', 2, '07:30:00', '08:45:00', 'pesawat', 'hotel', 'Lazatto', '2000000', 'Sifat Trip       : Private Trip (Tidak digabung dengan peserta lain)\r\nDurasi Trip    : 2 Hari 1 Malam\r\nStart Trip       : 09.00\r\nEnd Trip        : 16.00\r\nMeeting Point   : Tambun Selatan\r\nTanggal Trip      : Sesuai permintaan'),
(2, 1, 'Lembang', 4, '06:30:00', '22:00:00', 'kereta', 'Oyo', 'Hanamasa', '500000', 'Sifat Trip : Private Trip (Tidak digabung dengan peserta lain)\r\nDurasi Trip : 2 Hari 1 Malam Start Trip : 09.00\r\nEnd Trip : 16.00 Meeting Point : Tambun Selatan Tanggal Trip : Sesuai permintaan'),
(3, 1, 'Manchester', 12, '07:00:00', '19:00:00', 'pesawat', 'hotel', 'The Laundrette', '25000000', 'Sifat Trip : Private Trip (Tidak digabung dengan peserta lain)\r\nDurasi Trip : 12 Hari 11 Malam \r\nStart Trip : 07.00\r\nEnd Trip : 07.00\r\nMeeting Point : Tambun Selatan\r\nTanggal Trip : Sesuai permintaan'),
(4, 1, 'Paris', 10, '02:00:00', '14:00:00', 'pesawat', 'hotel', 'Sur un arbre perche', '30000000', 'Sifat Trip : Private Trip (Tidak digabung dengan peserta lain)\r\nDurasi Trip : 10 Hari 9 Malam \r\nStart Trip : 02.00\r\nEnd Trip : 02.00 Meeting Point : Tambun Selatan \r\nTanggal Trip : Sesuai permintaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trans`
--

CREATE TABLE `tb_trans` (
  `no_trans` int(4) NOT NULL,
  `detail_id` int(4) NOT NULL,
  `tgl_trans` date NOT NULL,
  `sub_total` varchar(9) NOT NULL,
  `biaya_admin` varchar(9) NOT NULL,
  `total` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_cust` int(4) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_cust`, `username`, `password`, `nama_cust`, `alamat`, `no_telp`, `status`) VALUES
(1, 'yohaness', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Yohanes Anjar Dewantara', 'Tambun Selatan', '0813425', 'admin'),
(2, 'alidongan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Ali Dongan', 'Cibitung', '081234567890', 'admin'),
(6, 'yohan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Yohan Wei', 'Solo', '081234567890', 'user'),
(7, 'altolyto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Altolyto Sitanggang', 'Jatimulya', '081234567891', 'user'),
(8, 'roses', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Park Chae Young', 'Australia', '0881234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_pesanan` (`no_pesanan`);

--
-- Indexes for table `tb_items`
--
ALTER TABLE `tb_items`
  ADD PRIMARY KEY (`no_items`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_trans`
--
ALTER TABLE `tb_trans`
  ADD PRIMARY KEY (`no_trans`),
  ADD KEY `no_trans` (`detail_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_cust`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail`
--
ALTER TABLE `tb_detail`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_items`
--
ALTER TABLE `tb_items`
  MODIFY `no_items` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_trans`
--
ALTER TABLE `tb_trans`
  MODIFY `no_trans` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_cust` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD CONSTRAINT `tb_detail_ibfk_1` FOREIGN KEY (`no_pesanan`) REFERENCES `tb_items` (`no_items`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_items`
--
ALTER TABLE `tb_items`
  ADD CONSTRAINT `tb_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id_cust`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_trans`
--
ALTER TABLE `tb_trans`
  ADD CONSTRAINT `tb_trans_ibfk_1` FOREIGN KEY (`detail_id`) REFERENCES `tb_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
