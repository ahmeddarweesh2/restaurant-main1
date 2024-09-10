-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 10:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `how_many` varchar(100) DEFAULT NULL,
  `book_date` date DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `phone_number`, `email`, `how_many`, `book_date`, `reg_date`) VALUES
(1, 'mohamed', 123456789, 'mo@gmail.com', '2', '2024-09-15', '2024-09-10 19:59:29'),
(2, 'sherief', 112345698, 'sherief@gm.com', '3', '2024-09-16', '2024-09-10 20:01:02'),
(3, 'gad', 1236548971, 'gad@gm.com', '4', '2024-09-25', '2024-09-10 20:01:31'),
(4, 'ahmed', 123456987, 'ahmed@gm.com', '5', '2024-09-28', '2024-09-10 20:01:53'),
(5, 'amr', 123654987, 'amr@gm.com', '5', '2024-09-24', '2024-09-10 20:04:00'),
(6, 'mahmoud', 123654789, 'mahmoud@gm.com', '4', '2024-09-18', '2024-09-10 20:05:54'),
(7, 'loay', 125687456, 'loay@gm.com', '5', '2024-09-25', '2024-09-10 20:12:13'),
(8, 'amira', 145236987, 'amira@gm.com', '3', '2024-09-19', '2024-09-10 20:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_date` date DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `licence` varchar(100) DEFAULT NULL,
  `dimension` varchar(100) DEFAULT NULL,
  `format` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_date`, `title`, `licence`, `dimension`, `format`, `image`, `user_id`, `tag_id`, `reg_date`) VALUES
(1, '0000-00-00', 'Chesse', '', '', '', NULL, 1, 1, '2024-09-09 13:00:29'),
(2, '2024-09-20', 'Chicken', 'License', 'vjjgbvb', 'gvbvb', NULL, 1, 1, '2024-09-09 13:00:18'),
(3, '2024-09-16', 'White Rice', 'License', 'test', 'test', NULL, 1, 3, '2024-09-09 13:02:19'),
(4, '2024-09-03', 'Meat', 'License', 'test1', 'test1', NULL, 1, 2, '2024-09-09 13:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `reg_date`) VALUES
(1, 'Pizza', '2024-09-09 13:00:48'),
(2, 'Burger', '2024-09-09 13:00:52'),
(3, 'Rice', '2024-09-04 18:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `user_name`, `email`, `password`, `reg_date`) VALUES
(1, 'Test', 'Test', 'Test@gmail.com', '123456', '2024-09-04 10:05:47'),
(2, 'Test', 'Test', 'Test@gmail.com', '123456', '2024-09-04 10:13:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
