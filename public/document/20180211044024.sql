-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 09:15 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etrain`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_pertanyaan`
--

CREATE TABLE `jawaban_pertanyaan` (
  `id_jawaban` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jawaban_pertanyaan`
--

INSERT INTO `jawaban_pertanyaan` (`id_jawaban`, `id_user`, `id_pertanyaan`, `jawaban`) VALUES
(12, 2, 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `Id_Notifikasi` int(11) NOT NULL,
  `Tgl_Notifikasi` datetime NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Id_Barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`Id_Notifikasi`, `Tgl_Notifikasi`, `Judul`, `Id_Barang`) VALUES
(1, '2017-06-05 00:00:00', 'Product asd ditambahkan', 1),
(2, '2017-06-05 21:23:18', 'Product 1 ditambahkan', 1),
(3, '2017-06-05 21:23:34', 'Product 1 ditambahkan', 1),
(4, '2017-06-05 21:24:15', 'Product 1 ditambahkan', 1),
(5, '2017-06-05 21:24:57', 'Product 1 ditambahkan', 1),
(6, '2017-06-05 21:25:01', 'Product 1 ditambahkan', 1),
(7, '2017-06-05 21:25:32', 'Product 1 ditambahkan', 1),
(8, '2017-06-05 22:36:00', 'Product adaw2 diubah', 1),
(9, '2017-06-05 22:38:11', 'Product adaw2 diubah', 1),
(10, '2017-06-05 22:38:18', 'Product adaw23 diubah', 1),
(11, '2017-06-05 22:41:00', 'Product adaw23 diubah', 1),
(12, '2017-06-05 22:43:43', 'Product adaw23 diubah', 1),
(13, '2017-06-05 22:43:48', 'Product adaw23 diubah', 1),
(14, '2017-06-05 22:45:40', 'Product adaw23 diubah', 1),
(15, '2017-06-05 22:47:45', 'Product adaw23 diubah', 1),
(16, '2017-06-05 22:48:04', 'Product adaw23 diubah', 1),
(17, '2017-06-05 22:49:39', 'Product adaw23 diubah', 1),
(18, '2017-06-05 22:50:16', 'Product adaw23 diubah', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban_pertanyaan`
--
ALTER TABLE `jawaban_pertanyaan`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`Id_Notifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban_pertanyaan`
--
ALTER TABLE `jawaban_pertanyaan`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `Id_Notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
