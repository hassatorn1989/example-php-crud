-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 07:03 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ProductDescription` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ProductPicture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProductCategory` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `QuantityStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Picture`, `ProductDescription`, `ProductPicture`, `ProductCategory`, `Price`, `QuantityStock`) VALUES
(3, '55', '', '55', 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Wayne_Rooney_%2850121725757%29.jpg', '55', '55.00', 555),
(4, 'name', '', 'des', 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Wayne_Rooney_%2850121725757%29.jpg', 'ca', '11.00', 222),
(5, 'asd', '', '55', 'https://upload.wikimedia.org/wikipedia/commons/1/11/Rooney_CL.jpg', '55', '55.00', 55),
(6, 'asd', '', 'aa', 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Wayne_Rooney_%2850121725757%29.jpg', 'aaa', '10.00', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
