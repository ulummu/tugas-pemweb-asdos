-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 12:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `berita_id` int(5) NOT NULL,
  `berita_judul` varchar(100) NOT NULL,
  `berita_headline` text NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_author` varchar(15) NOT NULL,
  `berita_tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `berita_headline`, `berita_isi`, `berita_author`, `berita_tanggal`) VALUES
(2, 'asdf', 'as', 'sdg', 'asda', '2017-03-18 04:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(5) NOT NULL,
  `fName` varchar(25) NOT NULL,
  `lName` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `asal` varchar(15) NOT NULL,
  `privilege` int(2) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fName`, `lName`, `username`, `email`, `password`, `jk`, `sekolah`, `asal`, `privilege`, `no_telp`) VALUES
(8, 'raisa', 'islan', 'raisa123', 'raisa@gmail.com', '$2y$10$AvBAlzU.reZVMfoRHIJdn.Gt0dLy7gm/UsgBA9zFUBsobr0yI7qu.', 'Perempuan', 'Universitas Indonesia', 'Kota Jakarta', 1, '081234567890'),
(10, 'Afif', 'Muhammad', 'afifmu', 'afifmuhammad5997@yahoo.com', '$2y$10$AeTMv.WuFqyj56lM.laBGOlC1.bvaRKnMxYicqPamlWRONJQbFpHa', 'Laki-laki', 'uin suka jogja', 'Kota Yogyakarta', 1, '082299222699'),
(11, 'Afif', 'Muhammad', 'afifmhd', 'afm5997@yahoo.com', '$2y$10$cEOXf0XeGeVpRcw42IiDFun9HnlX2NvDL8fj.B/HzRXUiHE6lz0zu', 'Laki-laki', 'uin sunan kalijaga', 'Kota Yogyakarta', 0, '082299222699'),
(12, 'misbahul', 'ulum', 'ulum12', 'ulumknightt@gmail.com', '$2y$10$4hpZuadTu7lO9eAAL8g7Eex6gtbJGSgQ1XzLGs2g3TbEY0jzfEHMe', 'Laki-laki', 'sma jancok', 'Kota Yogyakarta', 1, '081234567890'),
(14, 'misbahul', 'ulum', 'ulum123', 'ulum_knight@yahoo.co.id', '$2y$10$zNvIfThrKBOBZlBm4f0y0eNCbd5f3/osS94LHDiHrzIQACuwHvA7K', 'Laki', 'sma 123', 'diy', 0, '0812345678'),
(15, 'misbahul', 'ulum', 'ulum123', 'ulum_knight@yahoo.co.id', '$2y$10$KZ2ke8.NYZ1opsqTslpm/etPzApM8fRpoClaO.AYQ8xMhpInIzpxK', 'Laki', 'sma 123', 'diy', 0, '0812345678'),
(18, 'misbahul', 'ulum', 'ulum123', 'ulum_knight@yahoo.co.id', '$2y$10$0peKgJaLKH60ghz2QXYx0OtFTtysES5DAhUrT4QQhDTN.auvqYb46', 'Laki', 'sma 123', 'diy', 1, '0812345678'),
(19, 'misbahul', 'ulum', 'ulummu3', 'ulum_knight@yahoo.co.id', '$2y$10$gVcQyQkpS548uwr/IDeigugDhJa7EpicUsXMdIeMdwu6jANpcMGOS', 'Laki', 'sman mana', 'diy', 1, '0812345678'),
(20, 'ulum', 'misbahul', 'ucul21', 'ulum_knight@yahoo.co.id', '$2y$10$SHWuSs/r5DUnlUuAW..KLuvlfp7IheQMYFlZ2/oqhcyCbhI5FayRW', 'Laki', 'sma 123', 'diy', 0, '0812345678'),
(21, 'raisa', 'adriana', 'raisa6690', 'ulum_knight@yahoo.co.id', '$2y$10$8jDqeAfc3KmkSPiATeJT3ewH3ttFeymtg6roo3.t1.QQxq2kMdLVi', 'perem', 'sma 123', 'diy', 1, '0812345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
