-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 03:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `siparistakip`
--

CREATE TABLE `siparistakip` (
  `Adres` varchar(50) NOT NULL,
  `Telefon` varchar(50) NOT NULL,
  `IP` varchar(50) NOT NULL,
  `Siparis` varchar(50) NOT NULL,
  `Zaman` datetime NOT NULL,
  `Ad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siparistakip`
--

INSERT INTO `siparistakip` (`Adres`, `Telefon`, `IP`, `Siparis`, `Zaman`, `Ad`) VALUES
('Mars', '05996999999', '::1', 'Tavuk Döner', '0000-00-00 00:00:00', 'Elon Musk'),
('mars', '53994696789', '::1', 'Tavuk Döner', '0000-00-00 00:00:00', 'Elon Musk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
