-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2017 at 12:39 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SportsPortal`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE `Admins` (
  `username` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Admins`
--

INSERT INTO `Admins` (`username`, `password`) VALUES
('dattatreya', 'dattatreya'),
('sarthak', 'sarthak');

-- --------------------------------------------------------

--
-- Table structure for table `Register`
--

CREATE TABLE `Register` (
  `user` varchar(30) COLLATE utf8_bin NOT NULL,
  `sysadmin` varchar(30) COLLATE utf8_bin NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Register`
--

INSERT INTO `Register` (`user`, `sysadmin`, `login`, `logout`) VALUES
('Pramod', 'dattatreya', '2017-02-05 00:09:46', '2017-02-05 00:09:46'),
('Prajjwal', 'dattatreya', '2017-02-05 11:58:31', '2017-02-05 11:58:31'),
('Prajjwal', 'dattatreya', '2017-02-05 11:59:44', '2017-02-05 11:59:44'),
('Prajjwal', 'dattatreya', '2017-02-05 12:01:49', '2017-02-05 12:01:49'),
('Pramod', 'sarthak', '2017-02-05 12:03:26', '2017-02-05 12:03:26'),
('Pramod', 'dattatreya', '2017-02-05 12:04:19', '2017-02-05 12:04:19'),
('Prajjwal', 'dattatreya', '2017-02-05 12:08:00', '2017-02-05 12:08:00'),
('Prajjwal', 'dattatreya', '2017-02-05 12:09:12', '2017-02-05 12:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`username`, `password`) VALUES
('Prajjwal', 'Prajjwal'),
('Pramod', 'Pramod');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
