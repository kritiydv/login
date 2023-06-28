-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2023 at 10:20 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_table`
--

DROP TABLE IF EXISTS `auth_table`;
CREATE TABLE IF NOT EXISTS `auth_table` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `auth_table`
--

INSERT INTO `auth_table` (`username`, `password`) VALUES
('', ''),
('customer1', 'customer1'),
('admin', 'admin'),
('customer2', 'customer2');

-- --------------------------------------------------------

--
-- Table structure for table `customer1`
--

DROP TABLE IF EXISTS `customer1`;
CREATE TABLE IF NOT EXISTS `customer1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_dt` date NOT NULL,
  `company` varchar(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `item` varchar(30) NOT NULL,
  `qty` int NOT NULL,
  `weight` float NOT NULL,
  `req_shipmnt` varchar(30) NOT NULL,
  `tracking_id` varchar(30) NOT NULL,
  `ship_size` float NOT NULL,
  `box_count` int NOT NULL,
  `specification` varchar(30) NOT NULL,
  `checklist_qty` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer1`
--

INSERT INTO `customer1` (`id`, `order_dt`, `company`, `owner`, `item`, `qty`, `weight`, `req_shipmnt`, `tracking_id`, `ship_size`, `box_count`, `specification`, `checklist_qty`) VALUES
(1, '2023-06-07', 'abc', 'bfd', 'fridge', 0, 500, 'yes', 'abc3214', 12, 10, 'abc', '10'),
(2, '2023-06-07', 'abc', 'bfd', 'fridge', 10, 500, 'yes', 'abc3214', 12, 10, 'abc', '10'),
(3, '2023-06-07', 'abc', 'bfd', 'fridge', 10, 500, 'yes', 'abc3214', 12, 10, 'abc', '10');

-- --------------------------------------------------------

--
-- Table structure for table `customer2`
--

DROP TABLE IF EXISTS `customer2`;
CREATE TABLE IF NOT EXISTS `customer2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_dt` date NOT NULL,
  `company` varchar(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `item` varchar(30) NOT NULL,
  `qty` int NOT NULL,
  `weight` float NOT NULL,
  `req_shipmnt` varchar(30) NOT NULL,
  `tracking_id` varchar(30) NOT NULL,
  `ship_size` float NOT NULL,
  `box_count` int NOT NULL,
  `specification` varchar(30) NOT NULL,
  `checklist_qty` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer2`
--

INSERT INTO `customer2` (`id`, `order_dt`, `company`, `owner`, `item`, `qty`, `weight`, `req_shipmnt`, `tracking_id`, `ship_size`, `box_count`, `specification`, `checklist_qty`) VALUES
(2, '2023-06-07', '', 'bfd', 'fridge', 20, 300, 'no', 'abc1342', 12, 30, 'abs', '20'),
(3, '2023-06-07', '', 'bfd', 'fridge', 20, 300, 'no', 'abc1342', 12, 30, 'abs', '20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
