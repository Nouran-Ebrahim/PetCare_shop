-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 10:05 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catg_id` int(11) NOT NULL,
  `catg_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catg_id`, `catg_name`) VALUES
(1, 'cats'),
(2, 'dogs');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_amount` float GENERATED ALWAYS AS (`price` * `quantity`) VIRTUAL,
  `catg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `typee` enum('user','doctor','admain') DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `full_name` varchar(100) GENERATED ALWAYS AS (concat(`first_name`,' ',`last_name`)) VIRTUAL,
  `email` varchar(100) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` enum('femail','mail') DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `passwordd` varchar(100) DEFAULT NULL,
  `imagee` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `typee`, `first_name`, `last_name`, `email`, `birth_date`, `gender`, `phone`, `passwordd`, `imagee`) VALUES
(1, 'user', 'nouran', 'ebrahim', 'nouran.ssp@gmail.com', '2020-12-15', '', '01017944211', 'fnccf85285', 'Screenshot (1).png'),
(2, 'admain', 'ahmed', 'ebrahim hassan', 'ahmed@gmail.com', '2020-12-01', '', '01223701860', 'fjf jhbhj', 'Screenshot (12).png'),
(5, 'doctor', 'nadeen', 'kadash', 'nadeen@gmail.com', '2020-12-15', '', '0109809489', 'hhh8552', 'Screenshot (15).png'),
(6, 'admain', 'nour', 'el mohamady', 'nour@gmail.com', '2020-12-15', 'femail', '01017944222', '66hhhh', NULL),
(7, 'doctor', 'mohamed', 'shawky', 'mohamed@gmail.com', '1969-01-11', '', '01217944711', 'svdddddg', 'Screenshot (13).png'),
(8, 'user', 'nagham', 'mohamed', 'nagham@gmail.com', '2020-12-20', '', '01223701960', 'rvhhh', 'Screenshot (11).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catg_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `catg_id_items` (`catg_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id_posts` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `first_name` (`first_name`),
  ADD UNIQUE KEY `last_name` (`last_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `passwordd` (`passwordd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `catg_id_items` FOREIGN KEY (`catg_id`) REFERENCES `categories` (`catg_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `user_id_posts` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
