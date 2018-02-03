-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 02:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectend`
--

-- --------------------------------------------------------

--
-- Table structure for table `room-type`
--

CREATE TABLE `room-type` (
  `id` int(11) NOT NULL COMMENT 'รหัสห้อง',
  `roomname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อห้อง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roomtable`
--

CREATE TABLE `roomtable` (
  `room-type-id` int(11) NOT NULL COMMENT 'รหัสห้อง',
  `user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` date NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `class` int(11) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roomtable2`
--

CREATE TABLE `roomtable2` (
  `roomrend` int(11) NOT NULL,
  `sub` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` date NOT NULL,
  `user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_table`
--

CREATE TABLE `room_table` (
  `room-type-id` int(11) NOT NULL,
  `sub` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` date NOT NULL,
  `user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub-type`
--

CREATE TABLE `sub-type` (
  `id` int(11) NOT NULL COMMENT 'รหัสวิชา',
  `subname` int(11) NOT NULL COMMENT 'ชื่ิอวิชา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room-type`
--
ALTER TABLE `room-type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtable`
--
ALTER TABLE `roomtable`
  ADD PRIMARY KEY (`room-type-id`,`sub`);

--
-- Indexes for table `room_table`
--
ALTER TABLE `room_table`
  ADD PRIMARY KEY (`room-type-id`);

--
-- Indexes for table `sub-type`
--
ALTER TABLE `sub-type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room-type`
--
ALTER TABLE `room-type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสห้อง';
--
-- Constraints for dumped tables
--

--
-- Constraints for table `roomtable`
--
ALTER TABLE `roomtable`
  ADD CONSTRAINT `roomtable_ibfk_1` FOREIGN KEY (`room-type-id`) REFERENCES `room-type` (`id`);

--
-- Constraints for table `room_table`
--
ALTER TABLE `room_table`
  ADD CONSTRAINT `room_table_ibfk_1` FOREIGN KEY (`room-type-id`) REFERENCES `room-type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
