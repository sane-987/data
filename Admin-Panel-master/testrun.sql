-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 03:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testrun`
--

-- --------------------------------------------------------

--
-- Table structure for table `templateinfo`
--

CREATE TABLE `templateinfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `backimage` varchar(30) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `titleX` varchar(10) DEFAULT NULL,
  `titley` varchar(10) DEFAULT NULL,
  `subtitleX` varchar(10) DEFAULT NULL,
  `subtitleY` varchar(10) DEFAULT NULL,
  `imageX` varchar(10) DEFAULT NULL,
  `imageY` varchar(10) DEFAULT NULL,
  `contentX` varchar(10) DEFAULT NULL,
  `contentY` varchar(10) DEFAULT NULL,
  `titleColor` varchar(30) DEFAULT NULL,
  `subColor` varchar(30) DEFAULT NULL,
  `cColor` varchar(30) DEFAULT NULL,
  `floatv` varchar(10) DEFAULT NULL,
  `temp_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `templateinfo`
--

INSERT INTO `templateinfo` (`id`, `title`, `subtitle`, `content`, `backimage`, `image`, `titleX`, `titley`, `subtitleX`, `subtitleY`, `imageX`, `imageY`, `contentX`, `contentY`, `titleColor`, `subColor`, `cColor`, `floatv`, `temp_name`) VALUES
(7, 'hgfhjbvnbvbdfbvbvbbdgv', 'bbfbdddddddddddddddddddd', 'bbbbbbbbbfdddddddddddddddddddd', 'temp.jpg', 'naruto.jpg', '9%', '20%', '9%', '31%', '55%', '31%', '6%', '48%', 'black', 'black', 'black', '', 'john'),
(8, 'ssdvcgdcsdcsdyusdcuds', 'vddvsdvvsdvvdsdvvdv', 'vdsvsvsdsvdsvvdvdvsvfdghfdvvvf', 'temp.jpg', 'naruto.jpg', '9%', '20%', '9%', '31%', '55%', '31%', '6%', '48%', 'black', 'black', 'black', '', 'mkkk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `templateinfo`
--
ALTER TABLE `templateinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `templateinfo`
--
ALTER TABLE `templateinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
