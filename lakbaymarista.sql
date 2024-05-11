-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 05:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lakbaymarista`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mobile`, `password`, `access_level`) VALUES
(1, '', '', 'benzajtil@gmail.com', '', '$2y$10$qZjrt/gEzjGB58T338lUpeZgBiJFJgPuhrMpv.xOp76wPGKR5iA7i', 1),
(2, '', '', 'benzajtil@gmail.com1', '', '$2y$10$g5ScqAnnxvIKrZSng.yCLuFtJYzWWFRIpOx0cQ/PHMXkODtcsEYbW', 1),
(3, '', '', '123@gmail.com1', '', '$2y$10$aXZD6EP7c7vj6.02RPlT3OgtSO0TuqYO1yxdb36JgSek3UnMa1x1S', 1),
(4, '', '', '1benzajtil@gmail.com', '', '$2y$10$oVlrSNSyvQJIEjLrGtjXNOcrjKcGqUQk4SYvt0AFgqa9hcK4czXEC', 1),
(5, '', '', '12benzajtil@gmail.com', '', '$2y$10$aNaQIwtjeLpKA3zW3kIDle2lmA3Lb/liew5YH4Hrp7wdwXH8SAEtW', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
