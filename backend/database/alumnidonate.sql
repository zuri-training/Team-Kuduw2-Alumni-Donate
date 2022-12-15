-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 09:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnidonate`
--
CREATE DATABASE IF NOT EXISTS `alumnidonate` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `alumnidonate`;

-- --------------------------------------------------------

--
-- Stand-in structure for view `all users`
-- (See below for the actual view)
--
CREATE TABLE `all users` (
`id` int(11)
,`fullName` varchar(50)
,`email` varchar(50)
,`password` varchar(50)
,`schoolName` varchar(100)
,`matricNumber` varchar(50)
,`level` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `donation_data`
--

CREATE TABLE `donation_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `donation_title` varchar(50) NOT NULL,
  `description` varchar(240) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_data`
--

INSERT INTO `donation_data` (`id`, `name`, `donation_title`, `description`, `amount`) VALUES
(1, 'Enrico Iglesias', 'Science Theatre', 'Save my department from disrepair', 15000),
(2, 'Enrico Iglesias', 'Science Theatre', 'Save my department from disrepair', 15000),
(3, 'Enrico Iglesias', 'Science Theatre', 'Save my department from disrepair', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `schoolName` varchar(100) NOT NULL,
  `matricNumber` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `schoolName`, `matricNumber`, `level`) VALUES
(1, '', 'patrick@email.com', 'qwerty', 'FUT Minna', '345678tyui6789', 600),
(2, 'Ed Zito', 'ed@email.com', 'spotty', 'FUT Minna', '2019923', 300),
(3, 'Tony Montana', 'tony@email.com', 'TMontana', 'Madonna University', 'MAD2014/0019', 400),
(4, 'Percy Jackson', 'percy@email.com', '12345', 'Edo Uni', '21334tg', 300);

-- --------------------------------------------------------

--
-- Structure for view `all users`
--
DROP TABLE IF EXISTS `all users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `all users`  AS SELECT `users`.`id` AS `id`, `users`.`fullName` AS `fullName`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`schoolName` AS `schoolName`, `users`.`matricNumber` AS `matricNumber`, `users`.`level` AS `level` FROM `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_data`
--
ALTER TABLE `donation_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_data`
--
ALTER TABLE `donation_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
