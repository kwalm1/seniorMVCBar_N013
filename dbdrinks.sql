-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 06:52 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdrinks`
--

-- --------------------------------------------------------

--
-- Table structure for table `drinkqueue`
--

CREATE TABLE `drinkqueue` (
  `Id` int(50) NOT NULL,
  `Drink` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinkqueue`
--

INSERT INTO `drinkqueue` (`Id`, `Drink`, `Quantity`) VALUES
(1, 'Jack and Coke', 'one'),
(2, 'Jack and Coke', 'three'),
(3, 'Jack and Coke', 'four'),
(4, 'Jack and Coke', 'one'),
(5, 'Jack and Coke', 'three'),
(6, 'Jack and Coke', 'two'),
(7, 'Jack and Coke', 'four');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drinkqueue`
--
ALTER TABLE `drinkqueue`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drinkqueue`
--
ALTER TABLE `drinkqueue`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
