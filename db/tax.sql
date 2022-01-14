-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2022 at 10:49 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tax`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `addr` text NOT NULL,
  `tax_id` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `addr`, `tax_id`, `time`) VALUES
(2, 'Mr. Smith Stone', 'stone0@yahoo.com', 'Itolu, Ilaro , Ogun state , Nigeria', '47209123', '2022-01-14 10:15:44'),
(3, 'Mrs. Aduke Alice', 'adukeade@gmail.com', 'Abule Itolu, Ilaro , Ogun state , Nigeria', '37739127', '2022-01-14 10:15:44'),
(4, 'Mr. John', 'johnbull@hotmail.com', 'Owode , Ogun state , Nigeria', '06209957', '2022-01-14 10:15:44'),
(5, 'Mr. Dave Oladele', 'davolee@yahoo.com', 'Sango , Ogun state , Nigeria', '17200333', '2022-01-14 10:15:44'),
(6, 'Mr. Ajewole Ayodele', 'ajea.y@yahoo.com', 'Oshodi , Lagos state , Nigeria', '90205103', '2022-01-14 10:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `pwd` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pwd`, `time`) VALUES
(1, 'N/MCE/20/0027', 'pass', '2022-01-14 08:58:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
