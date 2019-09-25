-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 01:27 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datadiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `Id` int(3) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Username` char(10) NOT NULL,
  `Password` char(8) NOT NULL,
  `Email` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`Id`, `Nama`, `Username`, `Password`, `Email`) VALUES
(2, 'Sugrad', 'cuugrad13', 'cugrad_1', 'sugrade13@gmail.com'),
(4, 'Budi', 'ini_ibubud', 'ibubudi1', 'budiiii.10@gmail.com'),
(6, 'Gaple ki', 'gaplekiyo', 'gpleki', 'gpley1@gmail.com'),
(13, 'Risma', 'rismaaesr', 'risma15e', 'rismaasr@gmail.com'),
(16, 'Juan', 'juju', 'rachmans', 'juandika30@gmail.com'),
(17, 'Iyanatull', 'ianatule', '30des', 'ian_atu@gmail.com'),
(18, 'M. Amad', 'Amadun', 'bodoamat', 'madunamad@gmail.com'),
(19, 'Bintang', 'bntngq', 'mbohae', 'qbintang@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
