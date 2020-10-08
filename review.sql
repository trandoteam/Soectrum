-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 09:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_review`
--

CREATE TABLE `customer_review` (
  `review_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review_msg` varchar(255) NOT NULL,
  `review_date` date NOT NULL,
  `rating` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_review`
--

INSERT INTO `customer_review` (`review_id`, `name`, `review_msg`, `review_date`, `rating`, `product_name`) VALUES
(1, 'Suraj Ram', 'welcome', '2020-09-23', 0, ''),
(2, 'Suraj Ram', 'yes good ', '2020-09-23', 0, ''),
(3, 'Suraj Ram', 'hey', '2020-09-25', 0, ''),
(4, 'Suraj Ram', 'this is very good product', '2020-09-26', 4, ''),
(5, 'Suraj Ram', 'ye this is goood product to buy', '2020-09-26', 3, ''),
(6, 'Suraj Ram', 'sdlkdsndksandkandkasndlas', '2020-09-26', 0, ''),
(7, 'Suraj Ram', 'dfsdfsdf', '2020-09-26', 2, ''),
(8, 'Suraj Ram', '', '2020-09-26', 4, ''),
(9, 'Suraj Ram', 'yes it is good', '2020-09-26', 0, ''),
(10, 'Suraj Ram', 'yes', '2020-09-26', 0, ''),
(11, 'Suraj Ram', '', '2020-09-26', 3, 'shirt'),
(12, 'Suraj Ram', 'ksdnsajdasnsdlasd', '2020-09-26', 3, 'tshirt'),
(13, 'Suraj Ram', 'sdajnasdjandasdas', '2020-09-26', 5, 'pants'),
(14, 'Suraj Kumar', 'suraj kumar', '2020-09-26', 3, 'pants');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_review`
--
ALTER TABLE `customer_review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_review`
--
ALTER TABLE `customer_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
