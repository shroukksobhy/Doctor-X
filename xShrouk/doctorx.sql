-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 12:30 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorx`
--

-- --------------------------------------------------------

--
-- Table structure for table `laps`
--

CREATE TABLE `laps` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laps`
--

INSERT INTO `laps` (`id`, `name`, `address`, `image`) VALUES
(1, 'TICNO SCAN', 'shoubra Misr\r\n\r\n<br>\r\n\r\n15 ali street -Dawran shoubra Misr ', 'im4.jpg'),
(2, 'ARAB for x-rays', 'Dokki\r\n\r\n<br>\r\n20 Ahmed zweil street\r\nin front of Cairo university', 'im2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `college` varchar(50) NOT NULL,
  `national` int(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `phone` int(11) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 doctors && 1 patient',
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `department`, `college`, `national`, `email`, `password`, `birth`, `phone`, `degree`, `image`, `type`, `status`) VALUES
(1, 'Ahmed', 'باطني', 'عين شمس', 2147483647, 'Payyoumy2018@gmail.com', '010', '0000-00-00', 1155809004, 'MPhil', 'doctor-x.jpg', 0, 0),
(3, 'Ahmed', '', '', 2147483647, 'payyoumy2018@gmail.com', '012', '2012-10-28', 1155809004, '', 'doctor-x.jpg', 1, 0),
(4, 'shrouk', 'skin', 'skin', 2147483647, 'shroukksobhy@gmail.com', '123456', '1997-02-08', 1286011876, 'DCM', 'doctor-x.jpg', 0, 0),
(5, 'patient', '', '', 2147483647, 'shroukksobhy@gmail.com', '123459', '1997-02-08', 1286011876, '', 'doctor-x.jpg', 1, 0),
(6, 'patient', '', '', 2147483647, 'shroukksobhy@gmail.com', '123459', '1997-02-08', 1286011876, '', 'doctor-x.jpg', 1, 0),
(7, 'heyllllll', 'kilo', 'computer science', 2147483647, 'shroukksobhy@gmail.com', '12345678', '1997-02-08', 1286011876, 'MCM', 'doctor-x.jpg', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laps`
--
ALTER TABLE `laps`
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
-- AUTO_INCREMENT for table `laps`
--
ALTER TABLE `laps`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
