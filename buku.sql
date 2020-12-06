-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 08:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c14`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `kode` varchar(12) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kode`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(3, 'Nov001', '5 CM', '5-cm', 'Dhonny Dhirgantoro', 'PT. Grasindo', '5cm.jpeg', NULL, NULL),
(4, 'Nov002', 'Koala Kumal', 'koala-kumal', 'Raditiya Dhika', 'Gagas Media', 'koalakumal.jpg', NULL, '2020-12-03 04:00:04'),
(5, 'Nov003', 'Perahu Kertas', 'perahu-kertas', 'Dewi Lestari (Dee)', 'Treudee Pustaka Sejati dan Bentang Pustaka', 'perahukertas.jpg', NULL, NULL),
(6, 'Nov004', 'Laskar Pelangi', 'laskar-pelangi', 'Andrea Hirata', 'Bentang Pustaka, Yogyakarta', 'laskarpelangi.jpg', NULL, NULL),
(7, 'Nov005', 'Pudarnya Pesona Cleopatra', 'pudarnya-pesona-cleopatra', ' Habiburrahman El Shirazy', 'Republika, Jakarta', 'pudarpesona.jpg', '2020-12-02 23:59:25', '2020-12-02 23:59:25'),
(8, 'Nov006', 'Guru Aini', 'guru-aini', 'Andrea Hirata', 'Bentang Pustaka', 'guruaini.jpg', '2020-12-03 00:13:35', '2020-12-03 00:13:35'),
(12, 'Nov007', 'Sewu Dino', 'sewu-dino', 'Simpleman', 'Bukune', 'sewudino.jpg', '2020-12-03 01:16:37', '2020-12-03 01:16:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
