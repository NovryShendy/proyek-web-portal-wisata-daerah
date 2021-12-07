-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 04:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata_yogyakarta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Novry Shendy', 'shendy', '$2y$10$IUvUIXVuue4JeMK2TH8TVuyWnyvPt7jE5Z2MaFGDoOPz58X1HPyrG');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `judul`, `deskripsi`) VALUES
(1, 'Coba ganti', 'Halo semuanya!');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id_vidio` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id_vidio`, `judul`, `waktu`, `link`) VALUES
(1, 'Acom', '03.25', 'https://www.youtube.com/watch?v=S2WSeMk5RjQ');

-- --------------------------------------------------------

--
-- Table structure for table `link_header`
--

CREATE TABLE `link_header` (
  `id_vidio_header` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link_header`
--

INSERT INTO `link_header` (`id_vidio_header`, `judul`, `deskripsi`) VALUES
(1, 'Gilaa asw', 'Cobainlah asw');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama`, `harga`, `gambar`, `hari`) VALUES
(5, 'Salju', 50, 'f758eeb8a1ff1b260203d1f448614fa8.png', 1),
(6, 'Faiz Adrianto', 50, 'c9479ba5e6c6659ef27218c197a4f3f2.png', 1),
(7, 'Ahmad Daffa', 50, '5ef34e6d9fa0ac4dbafded69a4497730.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wisata_header`
--

CREATE TABLE `wisata_header` (
  `id_wisata_header` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata_header`
--

INSERT INTO `wisata_header` (`id_wisata_header`, `judul`, `deskripsi`) VALUES
(1, 'Cobain', 'Gilaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id_vidio`);

--
-- Indexes for table `link_header`
--
ALTER TABLE `link_header`
  ADD PRIMARY KEY (`id_vidio_header`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `wisata_header`
--
ALTER TABLE `wisata_header`
  ADD PRIMARY KEY (`id_wisata_header`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id_vidio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `link_header`
--
ALTER TABLE `link_header`
  MODIFY `id_vidio_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wisata_header`
--
ALTER TABLE `wisata_header`
  MODIFY `id_wisata_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
