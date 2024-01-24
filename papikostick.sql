-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 03:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `papikostick`
--

-- --------------------------------------------------------

--
-- Table structure for table `peseta`
--

CREATE TABLE `peseta` (
  `ID` int(12) NOT NULL,
  `namaa` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `tanggal_testa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peseta`
--

INSERT INTO `peseta` (`ID`, `namaa`, `nip`, `jabatan`, `pendidikan`, `tanggal_testa`) VALUES
(1, '', '2319913893183', 'SPV', 'D4/S1', ''),
(2, 'Muhammmad Ilham', '2319913893183', 'SPV', 'D4/S1', '2023-11-20'),
(3, 'Muhammmad Ilham', '2319913893183', 'SPV', 'D4/S1', '2023-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `ID` int(12) NOT NULL,
  `no1` varchar(100) DEFAULT NULL,
  `no2` varchar(100) DEFAULT NULL,
  `no3` varchar(100) DEFAULT NULL,
  `no4` varchar(100) DEFAULT NULL,
  `no5` varchar(100) DEFAULT NULL,
  `no6` varchar(100) DEFAULT NULL,
  `no7` varchar(100) DEFAULT NULL,
  `no8` varchar(100) DEFAULT NULL,
  `no9` varchar(100) DEFAULT NULL,
  `no10` varchar(100) DEFAULT NULL,
  `no11` varchar(100) DEFAULT NULL,
  `no12` varchar(100) DEFAULT NULL,
  `no13` varchar(100) DEFAULT NULL,
  `no14` varchar(100) DEFAULT NULL,
  `no15` varchar(100) DEFAULT NULL,
  `no16` varchar(100) DEFAULT NULL,
  `no17` varchar(100) DEFAULT NULL,
  `no18` varchar(100) DEFAULT NULL,
  `no19` varchar(100) DEFAULT NULL,
  `no20` varchar(100) DEFAULT NULL,
  `no21` varchar(100) DEFAULT NULL,
  `no22` varchar(100) DEFAULT NULL,
  `no23` varchar(100) DEFAULT NULL,
  `no24` varchar(100) DEFAULT NULL,
  `no25` varchar(100) DEFAULT NULL,
  `no26` varchar(100) DEFAULT NULL,
  `no27` varchar(100) DEFAULT NULL,
  `no28` varchar(100) DEFAULT NULL,
  `no29` varchar(100) DEFAULT NULL,
  `no30` varchar(100) DEFAULT NULL,
  `no31` varchar(100) DEFAULT NULL,
  `no32` varchar(100) DEFAULT NULL,
  `no33` varchar(100) DEFAULT NULL,
  `no34` varchar(100) DEFAULT NULL,
  `no35` varchar(100) DEFAULT NULL,
  `no36` varchar(100) DEFAULT NULL,
  `no37` varchar(100) DEFAULT NULL,
  `no38` varchar(100) DEFAULT NULL,
  `no39` varchar(100) DEFAULT NULL,
  `no40` varchar(100) DEFAULT NULL,
  `no41` varchar(100) DEFAULT NULL,
  `no42` varchar(100) DEFAULT NULL,
  `no43` varchar(100) DEFAULT NULL,
  `no44` varchar(100) DEFAULT NULL,
  `no45` varchar(100) DEFAULT NULL,
  `no46` varchar(100) DEFAULT NULL,
  `no47` varchar(100) DEFAULT NULL,
  `no48` varchar(100) DEFAULT NULL,
  `no49` varchar(100) DEFAULT NULL,
  `no50` varchar(100) DEFAULT NULL,
  `no51` varchar(100) DEFAULT NULL,
  `no52` varchar(100) DEFAULT NULL,
  `no53` varchar(100) DEFAULT NULL,
  `no54` varchar(100) DEFAULT NULL,
  `no55` varchar(100) DEFAULT NULL,
  `no56` varchar(100) DEFAULT NULL,
  `no57` varchar(100) DEFAULT NULL,
  `no58` varchar(100) DEFAULT NULL,
  `no59` varchar(100) DEFAULT NULL,
  `no60` varchar(100) DEFAULT NULL,
  `no61` varchar(100) DEFAULT NULL,
  `no62` varchar(100) DEFAULT NULL,
  `no63` varchar(100) DEFAULT NULL,
  `no64` varchar(100) DEFAULT NULL,
  `no65` varchar(100) DEFAULT NULL,
  `no66` varchar(100) DEFAULT NULL,
  `no67` varchar(100) DEFAULT NULL,
  `no68` varchar(100) DEFAULT NULL,
  `no69` varchar(100) DEFAULT NULL,
  `no70` varchar(100) DEFAULT NULL,
  `no71` varchar(100) DEFAULT NULL,
  `no72` varchar(100) DEFAULT NULL,
  `no73` varchar(100) DEFAULT NULL,
  `no74` varchar(100) DEFAULT NULL,
  `no75` varchar(100) DEFAULT NULL,
  `no76` varchar(100) DEFAULT NULL,
  `no77` varchar(100) DEFAULT NULL,
  `no78` varchar(100) DEFAULT NULL,
  `no79` varchar(100) DEFAULT NULL,
  `no80` varchar(100) DEFAULT NULL,
  `no81` varchar(100) DEFAULT NULL,
  `no82` varchar(100) DEFAULT NULL,
  `no83` varchar(100) DEFAULT NULL,
  `no84` varchar(100) DEFAULT NULL,
  `no85` varchar(100) DEFAULT NULL,
  `no86` varchar(100) DEFAULT NULL,
  `no87` varchar(100) DEFAULT NULL,
  `no88` varchar(100) DEFAULT NULL,
  `no89` varchar(100) DEFAULT NULL,
  `no90` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`ID`, `no1`, `no2`, `no3`, `no4`, `no5`, `no6`, `no7`, `no8`, `no9`, `no10`, `no11`, `no12`, `no13`, `no14`, `no15`, `no16`, `no17`, `no18`, `no19`, `no20`, `no21`, `no22`, `no23`, `no24`, `no25`, `no26`, `no27`, `no28`, `no29`, `no30`, `no31`, `no32`, `no33`, `no34`, `no35`, `no36`, `no37`, `no38`, `no39`, `no40`, `no41`, `no42`, `no43`, `no44`, `no45`, `no46`, `no47`, `no48`, `no49`, `no50`, `no51`, `no52`, `no53`, `no54`, `no55`, `no56`, `no57`, `no58`, `no59`, `no60`, `no61`, `no62`, `no63`, `no64`, `no65`, `no66`, `no67`, `no68`, `no69`, `no70`, `no71`, `no72`, `no73`, `no74`, `no75`, `no76`, `no77`, `no78`, `no79`, `no80`, `no81`, `no82`, `no83`, `no84`, `no85`, `no86`, `no87`, `no88`, `no89`, `no90`) VALUES
(1, '1', '2', '1', '2', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '2', '2', '2', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '2', '1', '2', '1', '1', '1', '1', '1', '1', '2', '2', '1', '1', '1', '2', '1', '1', '1', '2', '1', '1', '1', '2', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1', '1', '1', '1', '1', '1', '1', '2', '2', '1', '1', '1', '1', '2', '1', '2', '1', '1'),
(2, '1', '2', '2', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '2', '2', '1', '1', '1', '2', '2', '1', '1', '2', '2', '1', '1', '1', '1', '1', '1', '1', '2', '1', '2', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '2', '2', '1', '1', '2', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1'),
(3, '1', '2', '1', '2', '1', '1', '1', '1', '2', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '2', '1', '1', '2', '1', '1', '1', '1', '1', '1', '2', '2', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1'),
(4, '1', '2', '1', '1', '2', '1', '2', '1', '1', '1', '2', '1', '2', '1', '2', '1', '1', '2', '1', '1', '2', '2', '2', '2', '1', '1', '2', '1', '2', '1', '2', '2', '2', '1', '1', '2', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '2', '2', '1', '2', '2', '1', '1', '1', '2', '2', '1', '1', '2', '1', '1', '1', '2', '1', '1', '2', '2', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', '2', '1', '1', '2', '2', '2'),
(5, '1', '2', '1', '1', '2', '1', '2', '1', '1', '1', '2', '1', '2', '1', '2', '1', '1', '2', '1', '1', '2', '2', '2', '2', '1', '1', '2', '1', '2', '1', '2', '2', '2', '1', '1', '2', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '2', '2', '1', '2', '2', '1', '1', '1', '2', '2', '1', '1', '2', '1', '1', '1', '2', '1', '1', '2', '2', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', '2', '1', '1', '2', '2', '2'),
(6, '1', '2', '1', '1', '2', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '2', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '2', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '2', '1', '1', '1', '2', '1', '2', '1', '1', '2', '1', '1', '1', '2', '1', '1', '1', '2', '1', '1', '2', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peseta`
--
ALTER TABLE `peseta`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peseta`
--
ALTER TABLE `peseta`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
