-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 06:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_user`
--

CREATE TABLE `tbl_data_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_user`
--

INSERT INTO `tbl_data_user` (`id_user`, `nama`, `tanggal_lahir`, `alamat_user`, `no_hp`) VALUES
(1, 'Vehement Capital Partners', '2001-05-18', 'tanjung buntung', '08888888');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id_fb` int(11) NOT NULL,
  `nama_fb` varchar(255) NOT NULL,
  `subjek_fb` varchar(255) NOT NULL,
  `email_fb` varchar(100) NOT NULL,
  `nomor_fb` varchar(100) NOT NULL,
  `pesan_fb` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id_fb`, `nama_fb`, `subjek_fb`, `email_fb`, `nomor_fb`, `pesan_fb`) VALUES
(2, 'Risma Ananda Harby', 'Permasalahan', 'rismaananda11@gmail.com', '085271772709', 'kenapa terjadi permasalahan'),
(4, 'Adam Firdaus', 'Error Beli', 'adamfrdsid@gmail.com', '08961293457', 'Saya mau beli HP, yang dikirim kolor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(10) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `berat` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `input_gambar` varchar(100) NOT NULL,
  `id_user` int(10) NOT NULL,
  `input_gambar_2` varchar(100) NOT NULL,
  `input_gambar_3` varchar(100) NOT NULL,
  `input_gambar_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `nama_product`, `harga`, `berat`, `alamat`, `deskripsi`, `input_gambar`, `id_user`, `input_gambar_2`, `input_gambar_3`, `input_gambar_4`) VALUES
(45, 'Luxury Gorden', '2000000', '4', 'Jl Tebet Dlm III A 1, Dki Jakarta', 'Gorden sangat Mewah', '2.1.jpg', 1, 'a6.jpg', 'a3.jpg', 'a6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`) VALUES
(1, 'risma', '12345', 'rismaananda18@yahoo.com'),
(2, 'risma', '12345', 'rismaananda18@yahoo.com'),
(4, 'risma', '12345', 'rismaananda11@gmail.com'),
(5, 'saya', 'saya', 'rismaananda11@gmail.com'),
(6, 'saya', 'saya', 'rismaananda11@gmail.com'),
(7, 'saya', 'saya', 'rismaananda11@gmail.com'),
(9, 'admin', 'admin', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id_fb`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id_fb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_data_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
