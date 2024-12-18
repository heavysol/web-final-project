-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 07:24 PM
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
-- Database: `gamestation-final-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `dont-crash`
--

CREATE TABLE `dont-crash` (
  `record_id` int(100) NOT NULL,
  `player_id` int(100) NOT NULL,
  `high_score` int(255) NOT NULL,
  `playtime` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dont-crash`
--

INSERT INTO `dont-crash` (`record_id`, `player_id`, `high_score`, `playtime`) VALUES
(23, 21, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(10) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`, `updated_at`) VALUES
(21, 'apple123', '$2y$10$PTwDUwQjMjY1RsNTvdmRpuIF3sQ0wtWpL/iKRQKmLEqAfc5mPoVX6', 'apple123@gmail.com', 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `where-seed`
--

CREATE TABLE `where-seed` (
  `record_id` int(100) NOT NULL,
  `player_id` int(100) NOT NULL,
  `high_score` int(255) NOT NULL,
  `playtime` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `where-seed`
--

INSERT INTO `where-seed` (`record_id`, `player_id`, `high_score`, `playtime`) VALUES
(19, 21, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dont-crash`
--
ALTER TABLE `dont-crash`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `where-seed`
--
ALTER TABLE `where-seed`
  ADD PRIMARY KEY (`record_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dont-crash`
--
ALTER TABLE `dont-crash`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `where-seed`
--
ALTER TABLE `where-seed`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
