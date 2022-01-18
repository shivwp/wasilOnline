-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 06:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoobla_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_notes`
--

CREATE TABLE `order_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_notes`
--

INSERT INTO `order_notes` (`id`, `order_id`, `order_status`, `order_note`, `created_at`, `updated_at`) VALUES
(1, 1, 'shipped', 'test', '2022-01-12 06:54:58', '2022-01-12 06:54:58'),
(2, 1, 'cancelled', 'test', '2022-01-12 06:56:39', '2022-01-12 06:56:39'),
(3, 1, 'in process', 'test', '2022-01-12 06:58:04', '2022-01-12 06:58:04'),
(4, 1, 'delivered', NULL, '2022-01-12 06:58:21', '2022-01-12 06:58:21'),
(5, 1, 'in process', 'test', '2022-01-12 07:49:18', '2022-01-12 07:49:18'),
(6, 1, 'in process', NULL, '2022-01-13 01:53:35', '2022-01-13 01:53:35'),
(7, 1, 'in process', NULL, '2022-01-13 04:47:11', '2022-01-13 04:47:11'),
(8, 1, 'in process', NULL, '2022-01-13 04:47:40', '2022-01-13 04:47:40'),
(9, 1, 'in process', NULL, '2022-01-13 04:47:54', '2022-01-13 04:47:54'),
(10, 1, 'in process', NULL, '2022-01-13 04:49:17', '2022-01-13 04:49:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_notes`
--
ALTER TABLE `order_notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_notes`
--
ALTER TABLE `order_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
