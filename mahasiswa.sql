-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 06:15 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdas`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `jk` text NOT NULL,
  `prodi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jk`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
('6701101106', 'momon cantik', '', 'MI', 'FIT', 'papua barat', 'sukses amin'),
('6701173009', 'Ridho anugrah', 'Pria', 'MI', 'FIT', 'banten', 'ehehhee'),
('6701174000', 'Rizky Febiaan', '', 'MI', 'FIT', 'Jakarta', 'Menyanyi yukkk'),
('6701174001', 'dilaa', 'Wanita', 'AKUNTANSI', 'FEB', 'qqq', 'aaaa'),
('6701174004', 'ulin', 'Wanita', 'MBTI', 'FKB', 'jawa', 'tidur'),
('6701174005', 'Faizal', '', 'MI', 'FIT', 'bandung', 'maqan'),
('6701174081', 'princess', '', 'MI', 'FIT', 'jayapura', 'sukses dunia akhiratttt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
