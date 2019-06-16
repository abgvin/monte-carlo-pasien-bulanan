-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 07:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monte_carlo_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_2016`
--

CREATE TABLE `data_2016` (
  `id_bulan` varchar(10) NOT NULL,
  `jumlah_pasien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_2016`
--

INSERT INTO `data_2016` (`id_bulan`, `jumlah_pasien`) VALUES
('B01', 1752),
('B02', 1726),
('B03', 1432),
('B04', 1609),
('B05', 1562),
('B06', 1367),
('B07', 1372),
('B08', 1538),
('B09', 1424),
('B10', 1148),
('B11', 1578),
('B12', 1228);

-- --------------------------------------------------------

--
-- Table structure for table `data_2017`
--

CREATE TABLE `data_2017` (
  `id_bulan` varchar(10) NOT NULL,
  `jumlah_pasien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_2017`
--

INSERT INTO `data_2017` (`id_bulan`, `jumlah_pasien`) VALUES
('B01', 1592),
('B02', 1377),
('B03', 1201),
('B04', 1525),
('B05', 1434),
('B06', 1342),
('B07', 1346),
('B08', 1974),
('B09', 1752),
('B10', 1327),
('B11', 1489),
('B12', 1675);

-- --------------------------------------------------------

--
-- Table structure for table `data_2018`
--

CREATE TABLE `data_2018` (
  `id_bulan` varchar(10) NOT NULL,
  `jumlah_pasien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_2018`
--

INSERT INTO `data_2018` (`id_bulan`, `jumlah_pasien`) VALUES
('B01', 1268),
('B02', 1230),
('B03', 1532),
('B04', 1702),
('B05', 1418),
('B06', 1239),
('B07', 3295),
('B08', 4374),
('B09', 2507),
('B10', 2253),
('B11', 2389),
('B12', 2155);

-- --------------------------------------------------------

--
-- Table structure for table `rand_2016`
--

CREATE TABLE `rand_2016` (
  `nomor` int(3) NOT NULL,
  `id_bulan` varchar(10) NOT NULL,
  `bilangan_acak` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rand_2016`
--

INSERT INTO `rand_2016` (`nomor`, `id_bulan`, `bilangan_acak`) VALUES
(1, 'B01', 31),
(2, 'B02', 40),
(3, 'B03', 49),
(4, 'B04', 58),
(5, 'B05', 67),
(6, 'B06', 76),
(7, 'B07', 85),
(8, 'B08', 94),
(9, 'B09', 4),
(10, 'B10', 13),
(11, 'B11', 22),
(12, 'B12', 31);

-- --------------------------------------------------------

--
-- Table structure for table `rand_2017`
--

CREATE TABLE `rand_2017` (
  `nomor` int(3) NOT NULL,
  `id_bulan` varchar(10) NOT NULL,
  `bilangan_acak` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rand_2017`
--

INSERT INTO `rand_2017` (`nomor`, `id_bulan`, `bilangan_acak`) VALUES
(1, 'B01', 31),
(2, 'B02', 40),
(3, 'B03', 49),
(4, 'B04', 58),
(5, 'B05', 67),
(6, 'B06', 76),
(7, 'B07', 85),
(8, 'B08', 94),
(9, 'B09', 4),
(10, 'B10', 13),
(11, 'B11', 22),
(12, 'B12', 31);

-- --------------------------------------------------------

--
-- Table structure for table `rand_2018`
--

CREATE TABLE `rand_2018` (
  `nomor` int(3) NOT NULL,
  `id_bulan` varchar(10) NOT NULL,
  `bilangan_acak` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rand_2018`
--

INSERT INTO `rand_2018` (`nomor`, `id_bulan`, `bilangan_acak`) VALUES
(1, 'B01', 31),
(2, 'B02', 40),
(3, 'B03', 49),
(4, 'B04', 58),
(5, 'B05', 67),
(6, 'B06', 76),
(7, 'B07', 85),
(8, 'B08', 94),
(9, 'B09', 4),
(10, 'B10', 13),
(11, 'B11', 22),
(12, 'B12', 31);

-- --------------------------------------------------------

--
-- Table structure for table `range_2016`
--

CREATE TABLE `range_2016` (
  `jumlah_pasien` int(10) NOT NULL,
  `range_awal` int(10) NOT NULL,
  `range_akhir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `range_2016`
--

INSERT INTO `range_2016` (`jumlah_pasien`, `range_awal`, `range_akhir`) VALUES
(1752, 1, 10),
(1726, 11, 20),
(1432, 21, 28),
(1609, 29, 37),
(1562, 38, 46),
(1367, 47, 54),
(1372, 55, 62),
(1538, 63, 71),
(1424, 72, 79),
(1148, 80, 85),
(1578, 86, 94),
(1228, 95, 100);

-- --------------------------------------------------------

--
-- Table structure for table `range_2017`
--

CREATE TABLE `range_2017` (
  `jumlah_pasien` int(10) NOT NULL,
  `range_awal` int(10) NOT NULL,
  `range_akhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `range_2017`
--

INSERT INTO `range_2017` (`jumlah_pasien`, `range_awal`, `range_akhir`) VALUES
(1592, 1, 9),
(1377, 10, 17),
(1201, 18, 24),
(1525, 25, 32),
(1434, 33, 40),
(1342, 41, 47),
(1346, 48, 54),
(1974, 55, 65),
(1752, 66, 75),
(1327, 76, 82),
(1489, 83, 90),
(1675, 91, 99);

-- --------------------------------------------------------

--
-- Table structure for table `range_2018`
--

CREATE TABLE `range_2018` (
  `jumlah_pasien` int(10) NOT NULL,
  `range_awal` int(10) NOT NULL,
  `range_akhir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `range_2018`
--

INSERT INTO `range_2018` (`jumlah_pasien`, `range_awal`, `range_akhir`) VALUES
(1268, 1, 5),
(1230, 6, 10),
(1532, 11, 16),
(1702, 17, 23),
(1418, 24, 29),
(1239, 30, 34),
(3295, 35, 47),
(4374, 48, 64),
(2507, 65, 74),
(2253, 75, 83),
(2389, 84, 92),
(2155, 93, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bulan`
--

CREATE TABLE `tabel_bulan` (
  `id_bulan` varchar(10) NOT NULL,
  `nama_bulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_bulan`
--

INSERT INTO `tabel_bulan` (`id_bulan`, `nama_bulan`) VALUES
('B01', 'Januari'),
('B02', 'Februari'),
('B03', 'Maret'),
('B04', 'April'),
('B05', 'Mei'),
('B06', 'Juni'),
('B07', 'Juli'),
('B08', 'Agustus'),
('B09', 'September'),
('B10', 'Oktober'),
('B11', 'November'),
('B12', 'Desember');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_2016`
--
ALTER TABLE `data_2016`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `data_2017`
--
ALTER TABLE `data_2017`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `data_2018`
--
ALTER TABLE `data_2018`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `rand_2016`
--
ALTER TABLE `rand_2016`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `rand_2017`
--
ALTER TABLE `rand_2017`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `rand_2018`
--
ALTER TABLE `rand_2018`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `tabel_bulan`
--
ALTER TABLE `tabel_bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_2016`
--
ALTER TABLE `data_2016`
  ADD CONSTRAINT `data_2016_ibfk_1` FOREIGN KEY (`id_bulan`) REFERENCES `tabel_bulan` (`id_bulan`);

--
-- Constraints for table `data_2017`
--
ALTER TABLE `data_2017`
  ADD CONSTRAINT `data_2017_ibfk_1` FOREIGN KEY (`id_bulan`) REFERENCES `tabel_bulan` (`id_bulan`);

--
-- Constraints for table `data_2018`
--
ALTER TABLE `data_2018`
  ADD CONSTRAINT `data_2018_ibfk_1` FOREIGN KEY (`id_bulan`) REFERENCES `tabel_bulan` (`id_bulan`);

--
-- Constraints for table `rand_2016`
--
ALTER TABLE `rand_2016`
  ADD CONSTRAINT `rand_2016_ibfk_1` FOREIGN KEY (`id_bulan`) REFERENCES `tabel_bulan` (`id_bulan`);

--
-- Constraints for table `rand_2017`
--
ALTER TABLE `rand_2017`
  ADD CONSTRAINT `rand_2017_ibfk_1` FOREIGN KEY (`id_bulan`) REFERENCES `tabel_bulan` (`id_bulan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
