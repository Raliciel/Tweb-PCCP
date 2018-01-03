-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 12:03 PM
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
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `2203`
--

CREATE TABLE `2203` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `2205`
--

CREATE TABLE `2205` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `2206`
--

CREATE TABLE `2206` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `2208`
--

CREATE TABLE `2208` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3101`
--

CREATE TABLE `3101` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3102`
--

CREATE TABLE `3102` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3103`
--

CREATE TABLE `3103` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3104`
--

CREATE TABLE `3104` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3105`
--

CREATE TABLE `3105` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3201`
--

CREATE TABLE `3201` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3202`
--

CREATE TABLE `3202` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3203`
--

CREATE TABLE `3203` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3204`
--

CREATE TABLE `3204` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3205`
--

CREATE TABLE `3205` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3206`
--

CREATE TABLE `3206` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3207`
--

CREATE TABLE `3207` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3208`
--

CREATE TABLE `3208` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3301`
--

CREATE TABLE `3301` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3302`
--

CREATE TABLE `3302` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3303`
--

CREATE TABLE `3303` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3304`
--

CREATE TABLE `3304` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3305`
--

CREATE TABLE `3305` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3306`
--

CREATE TABLE `3306` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3307`
--

CREATE TABLE `3307` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3308`
--

CREATE TABLE `3308` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3401`
--

CREATE TABLE `3401` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3402`
--

CREATE TABLE `3402` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3403`
--

CREATE TABLE `3403` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3404`
--

CREATE TABLE `3404` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3405`
--

CREATE TABLE `3405` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3406`
--

CREATE TABLE `3406` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3407`
--

CREATE TABLE `3407` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3408`
--

CREATE TABLE `3408` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `3409`
--

CREATE TABLE `3409` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `บรรยายรวม`
--

CREATE TABLE `บรรยายรวม` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `หอประชุม`
--

CREATE TABLE `หอประชุม` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ห้องปฎิบัติการเคมี`
--

CREATE TABLE `ห้องปฎิบัติการเคมี` (
  `ผู้จอง` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `วัน` date NOT NULL,
  `เวลาเริ่ม` time NOT NULL,
  `เวลาเลิก` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
