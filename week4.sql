-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 03:03 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `week4`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `serial` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serial`, `product`, `price`, `description`, `email`, `date`) VALUES
(2, 'Nice Laptop', '5000', 'this is the great', 'emmnuelonyo34@gmail.com', '0000-00-00'),
(7, 'HP compaq', '6000', 'this is good', 'emmanuelonyo34@gmail.com', '0000-00-00'),
(8, 'HP Pavilion', '1000', 'ok finish', 'emmanuelonyo34@gmail.com', '0000-00-00'),
(9, 'Nokia Iperia', '500000', 'Nokia imperia with 3gb batrey and 5000 mah ram', 'emmanuelonyo34@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `serial` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`serial`, `fullname`, `email`, `pass`, `username`, `token`) VALUES
(1, 'Emmanuel', 'admin@payvtu.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin@payvtu.com', ''),
(4, 'Emmanuel Onyo', 'emmanuelonyo34@gmail.com', 'd8dfe7e07ee98b2b2fb71c1c9f58e2d1', 'Technolix', ''),
(5, 'Emmanuel Onyo', 'emmanuelonyo4@gmail.com', '9935620581c5158fa8df1323270be06e', 'BANKOLE', ''),
(6, 'Emmanuel Onyo', 'emmanuelonyo14@gmail.com', '9935620581c5158fa8df1323270be06e', 'BANKOLE4', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
