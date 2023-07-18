-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2023 at 07:11 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `blue`
--

CREATE TABLE `blue` (
  `id` int NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `parents_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `percentage` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blue`
--

INSERT INTO `blue` (`id`, `FirstName`, `LastName`, `dob`, `parents_name`, `address`, `city`, `phone`, `percentage`) VALUES
(2, 'ayush', 'nema', '2024-06-21', 'papa ji', 'Indira gandhi ward pipariya,teshil calony pipariya', 'pipariya', '9806604871', 85),
(3, 'sashanka', 'maha', '2015-06-07', 'papa ji', 'Indira gandhi ward pipariya,teshil calony pipariya', 'pipariya', '986854171', 50),
(4, 'sashanka ', 'sekhar', '2016-02-05', 'parameswar mahanta', 'keonjhar', 'keonjhar', '7978766460', 75),
(5, 'sashanka ', 'mahanta', '2013-02-05', 'parameswar mahanta', 'keonjhar', 'keonjhar', '582469214', 56),
(6, 'sashanka ', 'nema', '2000-02-05', 'parameswar mahanta', 'keonjhar', 'keonjhar', '7978766460', 70),
(7, 'sashanka ', 'nemanth', '2000-02-05', 'parameswar mahanta', 'bihar', 'keonjhar', '7978766460', 79),
(8, 'sumit', 'katwadi', '2014-02-05', 'parameswar mahanta', 'koimbatur', 'keonjhar', '7978766460', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blue`
--
ALTER TABLE `blue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blue`
--
ALTER TABLE `blue`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
