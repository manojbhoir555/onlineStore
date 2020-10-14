-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 04:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'manoj mukund bhoir', 'manoj.bhoir9@gmail.com', '705,bilad bloom field,plot 71-74 ,sect 18', '07798717197'),
(2, 'manoj mukund bhoir', 'manoj.bhoir9@gmail.com', '705,bilad bloom field,plot 71-74 ,sect 18', '07798717197'),
(3, 'manoj mukund bhoir', 'manoj.bhoir9@gmail.com', '705,bilad bloom field,plot 71-74 ,sect 18', '07798717197'),
(4, 'manoj mukund bhoir', 'manoj.bhoir9@gmail.com', '705,bilad bloom field,plot 71-74 ,sect 18', '07798717197'),
(5, 'manoj mukund bhoir', 'manoj.bhoir9@gmail.com', '705,bilad bloom field,plot 71-74 ,sect 18', '07798717197'),
(6, 'manoj mukund bhoir', 'manoj.bhoir9@gmail.com', '705,bilad bloom field,plot 71-74 ,sect 18', '07798717197');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `serial` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(1, '2020-10-14', 1),
(2, '2020-10-14', 2),
(3, '2020-10-14', 3),
(4, '2020-10-14', 4),
(5, '2020-10-14', 5),
(6, '2020-10-14', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(1, 6, 2, 6999),
(2, 6, 1, 168),
(2, 2, 1, 22.3),
(3, 6, 1, 168),
(3, 2, 3, 22.3),
(3, 3, 1, 55.99),
(4, 2, 1, 22.3),
(5, 3, 3, 55.99),
(5, 2, 3, 22.3),
(6, 3, 3, 55.99),
(6, 2, 3, 22.3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(1, 'Google Nexus 6', 'The Qualecomm  snapdragon 805 ', 699, 'images/mobile.jpg'),
(2, 'Ipad Air 2', 'Full HD Recording,\nWi-Fi Enabled,\nFaceTime,\n8 MP Primary Camera,\nA8X Chip with M8 Motion Co-processor,\n1.2 MP Secondary Camera,\n9.7-inch LED Touchscreen', 396, 'images/ipad.jpg'),
(3, 'Home Theater', ' Home Theater 4.1 with USB and FM Wired Home Audio Speaker', 64, 'images/sound.jpg'),
(4, 'Samsung Split AC', 'Out Door Unit Stand.\nExtra copper wire if any.\nDrain Pipe extension if any.\nPlumbing and Masonry Work.\nWiring extension from Meter to site, Power point/MCB fitting and any other electrical work Carpentry work.', 461, 'images/ac.jpg'),
(5, 'Nikon DSLR Camera', '(Black, Body with AF-S DX NIKKOR 18-55mm f/3.5-5.6G VR II Lens) 2 Years Nikon India Warranty and Free Transit Insurance.', 850, 'images/camera.jpg'),
(6, 'Tea maker', 'Morphy Richards 1.5 Ltr – Tea Maker Silver Black', 41, 'images/teamaker.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
