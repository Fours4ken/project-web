-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 06:29 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_kendaraan` int(12) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jam_ambil` time NOT NULL,
  `media_bayar` varchar(50) NOT NULL,
  `lama_hari` int(12) NOT NULL,
  `ppn` int(12) NOT NULL,
  `total_bayar` int(12) NOT NULL,
  `status_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking_tmp`
--

CREATE TABLE `tb_booking_tmp` (
  `id` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_kendaraan` int(12) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jam_ambil` time NOT NULL,
  `media_bayar` varchar(50) NOT NULL,
  `lama_hari` int(12) NOT NULL,
  `ppn` int(12) NOT NULL,
  `total_bayar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_booking_tmp`
--

INSERT INTO `tb_booking_tmp` (`id`, `id_user`, `id_kendaraan`, `tgl_awal`, `tgl_akhir`, `jam_ambil`, `media_bayar`, `lama_hari`, `ppn`, `total_bayar`) VALUES
(32, 2, 2, '2020-05-21', '2020-05-22', '10:00:00', 'Bank Transfer', 1, 1, 220001);

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(12) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `pesan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `nama`, `email`, `judul`, `pesan`) VALUES
(1, 'Remu Suzumori', 'anggisdr1901@gmail.com', 'Test', 'Cuma Ngetes gan'),
(2, 'Remu Suzumori', 'anggisdr1901@gmail.com', 'Test', 'Cuma Ngetes gan'),
(3, 'Remu Suzumori', 'anggisdr1901@gmail.com', 'Test', 'Testetetsstst');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(12) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `is_active` int(1) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `nama`, `alamat`, `email`, `password`, `no_telp`, `is_active`, `foto`) VALUES
(1, 'Lord Kazuma', 'Jln. Panjang', 'anggisdr1903@gmail.com', '11111111', '081211111111', 1, 'default.png'),
(2, 'Lord Muzan', 'Jln. Pendek', 'anggisdr1901@gmail.com', '22222222', '081122222222', 1, 'default.png'),
(3, 'Remu Suzumori', 'Jln. Tengah', 'anggisdr1902@gmail.com', '33333333', '082233333333', 1, '580b57fcd9996e24bc43c521.png'),
(4, 'Inosuke', 'Jln. Jalan', 'anggisdr1904@gmail.com', '44444444', '081544444444', 1, 'default.png'),
(5, 'Naruto', 'Konoha', 'anggisdr1905@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(6, 'Naruto', 'Konoha', 'anggisdr1906@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(7, 'Naruto', 'Konoha', 'anggisdr1907@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(8, 'Naruto', 'Konoha', 'anggisdr1908@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(9, 'Naruto', 'Konoha', 'anggisdr1909@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(10, 'Naruto', 'Konoha', 'anggisdr1910@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(11, 'Naruto', 'Konoha', 'anggisdr1911@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(12, 'Naruto', 'Konoha', 'anggisdr1912@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(13, 'Naruto', 'Konoha', 'anggisdr1913@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(14, 'Naruto', 'Konoha', 'anggisdr1914@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(15, 'Naruto', 'Konoha', 'anggisdr1915@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(16, 'Naruto', 'Konoha', 'anggisdr1916@gmail.com', '55555555', '081755555555', 1, 'default.png'),
(17, 'Remu Suzumori', '', 'anggisdr1917@gmail.com', '11111111', '', 0, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(12) NOT NULL,
  `nama_kategori` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sepeda Motor'),
(2, 'Mobil Pribadi'),
(3, 'Mobil Barang'),
(4, 'Minibus'),
(5, 'Motor Besar'),
(6, 'Motor Sport');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id` int(12) NOT NULL,
  `id_kategori` int(12) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `pabrikan` varchar(128) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jarak_tempuh` int(12) NOT NULL,
  `transmisi` varchar(50) NOT NULL,
  `bahan_bakar` varchar(50) NOT NULL,
  `besar_cc` int(5) NOT NULL,
  `harga_perhari` int(12) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `gambar_detail` varchar(256) NOT NULL,
  `gambar_png` varchar(256) NOT NULL,
  `gambar_detail_xl` varchar(256) NOT NULL,
  `promo` int(12) NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`id`, `id_kategori`, `merk`, `pabrikan`, `tahun`, `jarak_tempuh`, `transmisi`, `bahan_bakar`, `besar_cc`, `harga_perhari`, `gambar`, `gambar_detail`, `gambar_png`, `gambar_detail_xl`, `promo`, `status`, `deskripsi`) VALUES
(1, 1, 'Beat', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 210000, 'product1.jpg', 'product_detail1.jpg', '', 'product_detail_xl1.jpg', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(2, 2, 'Jazz', 'Honda', 2018, 5000, 'Automatic', 'Premium', 110, 220000, 'product2.jpg', 'product_detail2.jpg', '', 'product_detail_xl2.jpg', 0, 'Booked', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(3, 6, 'R15', 'Honda', 2019, 5000, 'Automatic', 'Premium', 110, 230000, 'product3.jpg', 'product_detail3.jpg', '', 'product_detail_xl3.jpg', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(4, 5, 'R1M', 'Honda', 2020, 5000, 'Automatic', 'Premium', 110, 240000, 'product4.jpg', 'product_detail4.jpg', '', 'product_detail_xl4.jpg', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(5, 4, 'Elf', 'Honda', 2021, 5000, 'Automatic', 'Premium', 110, 250000, 'product5.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(6, 3, 'Colt Enkle', 'Honda', 2022, 5000, 'Automatic', 'Premium', 110, 260000, 'product6.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(7, 1, 'Beat', 'Honda', 2022, 5000, 'Automatic', 'Premium', 110, 260000, 'product7.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(8, 1, 'Nmax', 'Honda', 2021, 5000, 'Automatic', 'Premium', 110, 250000, 'product8.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(9, 6, 'R15', 'Honda', 2020, 5000, 'Automatic', 'Premium', 110, 240000, 'product9.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(10, 1, 'Vario 150', 'Honda', 2019, 5000, 'Automatic', 'Premium', 110, 230000, 'product10.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(11, 5, 'Z10R', 'Honda', 2018, 5000, 'Automatic', 'Premium', 110, 220000, 'product11.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(12, 2, 'Avansa', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 210000, 'product12.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(13, 2, 'Xenia', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 200000, 'product13.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(14, 2, 'Mobilio', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 200000, 'product14.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(15, 2, 'Jazz', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 200000, 'product15.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(16, 2, 'Mini Cooper', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 200000, 'product16.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(17, 2, 'Carry', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 200000, 'product17.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(18, 3, 'L300', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 200000, 'product18.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(19, 3, 'Grandmax', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 200000, 'product19.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(20, 4, 'Elf', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 200000, 'product20.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(21, 5, 'R1M', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 200000, 'product21.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.'),
(22, 6, 'Duke', 'Honda', 2017, 5000, 'Automatic', 'Premium', 110, 200000, 'product22.jpg', '', '', '', 0, 'Ready', 'Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_logo`
--

CREATE TABLE `tb_logo` (
  `id` int(12) NOT NULL,
  `gambar_logo` varchar(128) NOT NULL,
  `komentar` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_token`
--

CREATE TABLE `tb_token` (
  `id` int(12) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_booking_tmp`
--
ALTER TABLE `tb_booking_tmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_logo`
--
ALTER TABLE `tb_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_token`
--
ALTER TABLE `tb_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_booking_tmp`
--
ALTER TABLE `tb_booking_tmp`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_logo`
--
ALTER TABLE `tb_logo`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
