-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 05:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

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
(1, 'Vehement Capital Partners', '2001-05-18', 'tanjung buntung', '08888888'),
(2, 'Massive Dynamic', '2001-05-20', 'australia', '09888888'),
(3, 'Umbrella Corporation', '2001-05-03', 'united kingdom wesetminister', '0912383132');

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
(3, 'raay', 'Oermasalahan', 'rismaa11@gmial.com', '085271772709', 'why still problem');

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
(40, 'Kamera Canon', '150000', '2', 'Tanjung Buntung Kav,  Kelurahan Tanjung Buntung\r\nBlok A No09. RT 08 RW 02', 'Kamera sangat bagus untuk foto', '4.jpg', 1, 'kamera3.jpg', 'kamera2.jpg', 'kamera1.jpg'),
(41, 'Kamera Sony', '130000', '2', 'Batamindo Industrial Park, Jl. Rambutan Lot No.504-508A, Kabil, Kecamatan Nongsa, Kota Batam, Kepula', 'Sony alfa 6000', 'kamera3.jpg', 2, '4.jpg', 'kamera2.jpg', 'kamera1.jpg'),
(42, 'Kamera Fuji Film', '160000', '2', 'Kedoya Elok Plaza Bl DA/6, Dki Jakarta', 'Kamera Sangat jernih', 'kamera1.jpg', 3, 'image-2.jpg', 'kamera2.jpg', 'kamera3.jpg'),
(43, 'Kemeja Hitam', '50000', '1', 'Street:  Jl H Yahya 25 RT 002/09, Dki Jakarta\r\n\r\nCity:   Dki Jakarta\r\n\r\nState/province/area:    Jaka', 'Sangat nyaman dipakai', '3.jpg', 3, 'eo.jpg', 'b2.jpg', 'a1.jpg'),
(44, 'Blazer Abu-abu', '80000', '1', 'JL.Pejuang no.98, Jawa Barat', 'Tampil Modern', 'b1.jpg', 2, '3.jpg', 'b2.jpg', 'img-2.jpg'),
(45, 'Luxury Gorden', '2000000', '4', 'Jl Tebet Dlm III A 1, Dki Jakarta', 'Gorden sangat Mewah', '2.1.jpg', 1, 'a6.jpg', 'a3.jpg', 'a6.jpg'),
(46, 'Mic 1 Set', '30000', '3', 'JL.Rajawali No.4, Palu', 'Mic 1 set lengkap', '1.jpg', 2, 'a4.jpg', 'image-1.jpg', 'image-2.jpg'),
(47, 'Baju Badut', '50000', '3', 'Jl H Yahya 25 RT 002/09, Dki Jakarta', 'Kostum Badut', 'b2.jpg', 2, '4.jpg', 'a4.jpg', 'a6.jpg'),
(48, 'Black Luxury Gorden', '500000', '4', 'Jl Raden Patah 85 Semarang, Jawa Tengah', 'Warna sangat bagus dan mewah', 'a6.jpg', 2, '2.1.jpg', 'image-1.jpg', '2.jpg');

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
(3, 'adajdhfksksd', 'alsk;d', 'tafdtfasjd@gmail.com'),
(4, 'risma', '12345', 'rismaananda11@gmail.com'),
(5, 'saya', 'saya', 'rismaananda11@gmail.com'),
(6, 'saya', 'saya', 'rismaananda11@gmail.com'),
(7, 'saya', 'saya', 'rismaananda11@gmail.com'),
(8, 'rimss', 'passs', 'raayyyproduction22@gmail.com');

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
  MODIFY `id_fb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_data_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
