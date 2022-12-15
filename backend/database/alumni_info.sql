-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2022 at 12:06 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_info`
--

CREATE TABLE `alumni_info` (
  `al_name` varchar(30) NOT NULL,
  `al_mat_no` varchar(20) NOT NULL,
  `al_school` varchar(20) NOT NULL,
  `al_email` varchar(20) NOT NULL,
  `al_level` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni_info`
--

INSERT INTO `alumni_info` (`al_name`, `al_mat_no`, `al_school`, `al_email`, `al_level`, `pwd`) VALUES
('preshchima', 'cdcsds', 'wwnfkle', 'preshchima@d', '4rk4', ''),
('Hameed', '1234', 'Zuri', 'Hamsoc@mail.com', '12345678', ''),
('Precious', '87654321', 'Ingressive', 'precious@gmail.com', '200', ''),
('Hameed', '12345678', 'Zuri', 'preshchima@gmail.com', '200', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
