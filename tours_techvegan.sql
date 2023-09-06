-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 02:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours_techvegan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`) VALUES
('admin', 'Alex', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `members` varchar(255) NOT NULL,
  `journey` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `usertype` varchar(30) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `email`, `package`, `members`, `journey`, `amount`, `date`, `status`, `usertype`) VALUES
(12, 'alexstephen2003@gmail.com', 'food', '6', 'Train', '1404', '2023-09-03', 1, 'user'),
(16, 'femi@gmail.com', 'food', '2', 'bike', '468', '2023-09-04', 1, 'user'),
(17, 'femi@gmail.com', 'food', '2', 'bike', '468', '2023-09-04', 1, 'user'),
(21, 'jona@gmail.com', 'Idly', '1', 'bike', '10', '2023-09-06', 1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `contact`, `password`, `usertype`) VALUES
(6, 'alex', 'alexstephen2003@gmail.com', '9765432187', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'user'),
(7, 'alex', 'alex@gmail.com', '8870671388', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'user'),
(10, 'femila', 'admifemi@ffn', '135435457', '0bba3da70a423bd9075ad4473651251587384953', 'user'),
(11, 'femila', 'femi@gmail.com', '564656456', '48b4a13709511e0c079bfb9d90441510f51b097e', 'user'),
(14, 'jona', 'jona@gmail.com', '8870671388', 'ef7c555eb0865712e50537a788bde90fed8c0dbc', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `name`, `amount`) VALUES
(22, 'Idly', 10),
(23, 'food', 234);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `usertype` enum('user','admin') DEFAULT 'user',
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `contact` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `usertype`, `email`, `password`, `contact`) VALUES
(1, 'jones', NULL, 'jones@gmail.com', '4', 2147483647),
(2, 'beni', NULL, 'beni@gmail.com', 'c2fc4d58a9bf671', 2147483647),
(3, 'stephen', 'user', 'step@gmail.com', '5baa61e4c9b93f3', 667789955);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `aid` (`aid`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
