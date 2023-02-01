-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2022 at 08:00 AM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `challenge2022`
--
CREATE DATABASE IF NOT EXISTS `challenge2022` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `challenge2022`;

-- --------------------------------------------------------

--
-- Table structure for table `bundesliga`
--

CREATE TABLE `bundesliga` (
  `id` int(11) NOT NULL,
  `verein` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punkte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bundesliga`
--

INSERT INTO `bundesliga` (`id`, `verein`, `punkte`) VALUES
(1, 'RB Salzburg', 3),
(2, 'Sportklub', 90),
(3, 'Vienna', 80),
(4, 'Austria Wien', 1),
(5, 'SK Rapid', 100),
(6, 'Mattersburg', 24),
(7, 'LASK', 30),
(8, 'Sturm Graz', 41),
(9, 'St. Pölten', 12),
(10, 'SV Horn', 32);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bundesliga`
--
ALTER TABLE `bundesliga`
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
-- AUTO_INCREMENT for table `bundesliga`
--
ALTER TABLE `bundesliga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;
