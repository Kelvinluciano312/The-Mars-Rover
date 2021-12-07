-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 07:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, '1', '', 'c4ca4238a0b923820dcc509a6f75849b', '2021-12-07 16:45:42'),
(2, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '2021-12-07 16:50:02'),
(3, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '2021-12-07 16:59:03'),
(4, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '2021-12-07 16:59:10'),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2021-12-07 16:59:16'),
(6, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '2021-12-07 16:59:55'),
(7, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '2021-12-07 17:00:00'),
(8, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '2021-12-07 17:00:17'),
(9, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '2021-12-07 17:01:51'),
(10, '2', '2', 'c81e728d9d4c2f636f067f89cc14862c', '2021-12-07 17:02:05'),
(11, 'Kelvin', 'Kelvin', '8cdaea2a5cf19cc337a1441ca7f83d42', '2021-12-07 17:03:19'),
(12, 'kelv', 'kelv', 'c9075b671312f6fb08dc9481aaf7c1c8', '2021-12-07 17:05:24'),
(13, 'kelvin1', 'kelvin1', 'fca2ac21883a3852d6400cacfdbf9661', '2021-12-07 17:10:39'),
(14, 'kelvin2', 'kelvin2', 'fb6d0a9c6d9be2eda01b40c061de8d1c', '2021-12-07 17:12:28'),
(15, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '2021-12-07 18:51:25'),
(16, 'luc', 'luc', '2e6fdbc573b2975790d504991183519e', '2021-12-07 18:51:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
