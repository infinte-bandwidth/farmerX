-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 09:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `global_market`
--

CREATE TABLE `global_market` (
  `sno` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `crop` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `msp`
--

CREATE TABLE `msp` (
  `sno` int(10) NOT NULL,
  `crop` varchar(20) NOT NULL,
  `2017-18` int(10) NOT NULL,
  `2018-19` int(10) NOT NULL,
  `2019-20` int(10) NOT NULL,
  `2020-21` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msp`
--

INSERT INTO `msp` (`sno`, `crop`, `2017-18`, `2018-19`, `2019-20`, `2020-21`) VALUES
(1, 'PADDY', 1550, 1750, 1815, 1868),
(2, 'JOWAR', 1700, 2430, 2550, 2620),
(3, 'BAJRA', 1425, 1950, 2000, 2150),
(4, 'MAIZE', 1425, 1700, 1760, 1850),
(5, 'RAGI', 1900, 2897, 3150, 3295),
(6, 'Tur (Arhar)', 5450, 5675, 5800, 6000),
(7, 'MOONG', 5575, 6975, 7050, 7196),
(8, 'URAD', 5400, 5600, 5700, 6000),
(9, 'COTTON', 4020, 5150, 5255, 5515),
(10, 'GROUNDNUT', 4450, 4890, 5090, 5275),
(11, 'SUNFLOWER SEED', 4100, 5388, 5650, 5885),
(12, 'SOYABEAN', 3050, 3399, 3710, 0),
(13, 'SESAMUM', 5300, 6249, 6485, 6855),
(14, 'NIGERSEED', 4050, 5877, 5940, 6695),
(15, 'WHEAT', 1735, 1840, 1925, 1975),
(16, 'BARLEY', 1410, 1440, 1525, 1600),
(17, 'GRAM', 4400, 4620, 4875, 5100),
(18, 'MASUR (LENTIL)', 4250, 4475, 4800, 5100),
(19, 'MUSTARD', 4000, 4200, 4425, 4650),
(20, 'SAFFLOWER', 4100, 4945, 5215, 5327),
(21, 'TORIA', 3900, 4190, 4425, 0),
(22, 'COPRA', 6500, 7511, 9521, 9960),
(23, '(Calender Year)', 6785, 7750, 9920, 10300),
(24, 'DE-HUSKED COCONUT', 1760, 2030, 2571, 2700),
(25, 'JUTE', 3500, 3700, 3950, 4225);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `imagedata` mediumblob NOT NULL,
  `imagename` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `global_market`
--
ALTER TABLE `global_market`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `msp`
--
ALTER TABLE `msp`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `global_market`
--
ALTER TABLE `global_market`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `msp`
--
ALTER TABLE `msp`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
