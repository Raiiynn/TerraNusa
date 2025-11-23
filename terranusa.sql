-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2024 at 07:59 AM
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
-- Database: `terranusa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `PASSWORD`, `NAME`, `created_at`) VALUES
(1, 'admin', '$2y$10$OhscGiFYiitzFDdwzZCbrOBNdTDArjmPh6s.6IRzcMvhFvenmlUBy', 'Administrator', '2024-12-23 15:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_code` varchar(20) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_phone` varchar(20) DEFAULT NULL,
  `tour_date` date DEFAULT NULL,
  `participant_count` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `payment_status` enum('pending','paid','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `package_id`, `customer_name`, `customer_phone`, `tour_date`, `participant_count`, `total_amount`, `payment_status`, `created_at`) VALUES
(1, 'TN2412233655', 0, 'asdsa', '0891277272', '2024-12-25', 4, NULL, 'pending', '2024-12-23 14:28:34'),
(2, 'TN2412234716', 0, 'asdsa', '0891277272', '2024-12-25', 4, NULL, 'pending', '2024-12-23 14:28:40'),
(3, 'TN2412238225', 0, 'asdsa', '0891277272', '2024-12-24', 1, NULL, 'pending', '2024-12-23 14:29:48'),
(4, 'TN2412233024', 0, 'asdsa', '0891277272', '2024-12-24', 2, NULL, 'pending', '2024-12-23 14:33:22'),
(5, 'TN2412231964', 0, 'asdsaaa', '0891277272', '2024-12-25', 2, 700000.00, 'pending', '2024-12-23 16:18:13'),
(6, 'TN2412235599', 0, 'asdsaaa', '0891277272', '2024-12-25', 2, 700000.00, 'pending', '2024-12-23 16:20:58'),
(7, 'TN2412237992', 0, 'qeqewwq', '0891277272', '2024-12-25', 1, 350000.00, 'pending', '2024-12-23 16:39:37'),
(8, 'TN2412236913', 0, 'qeqewwq', '0891277272', '2024-12-25', 1, 350000.00, 'pending', '2024-12-23 16:40:00'),
(9, 'TN2412234445', 0, 'qeqewwqd', '0891277272', '2024-12-25', 2, 700000.00, 'pending', '2024-12-23 16:40:15'),
(10, 'TN2412237019', 0, 'qeqewwqd', '0891277272', '2024-12-25', 2, 700000.00, 'pending', '2024-12-23 16:42:13'),
(11, 'TN2412237505', 0, 'qeqewwqd', '0891277272', '2024-12-25', 1, 350000.00, 'pending', '2024-12-23 18:05:59'),
(12, 'TN2412237198', 0, 'qeqewwqd', '0891277272', '2024-12-25', 1, 350000.00, 'pending', '2024-12-23 18:06:03'),
(13, 'TN2412236650', 0, 'qeqewwqd', '0891277272', '2024-12-25', 1, 350000.00, 'pending', '2024-12-23 18:08:16'),
(14, 'TN2412234331', 0, 'asdads', '0891277272', '2024-12-18', 2, 700000.00, 'pending', '2024-12-23 18:08:29'),
(15, 'TN2412231610', 0, 'asdsaaa', '0891277272', '2024-12-26', 2, 700000.00, 'pending', '2024-12-23 18:11:11'),
(16, 'TN2412236713', 0, 'asdsaaa', '0891277272', '2024-12-26', 2, 700000.00, 'pending', '2024-12-23 18:12:48'),
(17, 'TN2412238465', 1, 'adssadas', '0891277272', '2024-12-25', 1, 350000.00, 'pending', '2024-12-23 18:24:43'),
(18, 'TN2412237360', 1, 'asdsaaaad', '0891277272', '2024-12-27', 2, 700000.00, 'pending', '2024-12-23 18:31:44'),
(19, 'TN2412233587', 1, 'asdsa', '0891277272', '2024-12-26', 2, 700000.00, 'pending', '2024-12-23 18:36:30'),
(20, 'TN2412235018', 1, 'qeqewwqd', '0891277272', '2024-12-25', 2, 700000.00, 'paid', '2024-12-23 18:40:46'),
(21, 'TN2412232088', 1, 'asdsa', '0891277272', '2025-01-02', 2, 700000.00, 'pending', '2024-12-23 18:43:42'),
(22, 'TN2412231571', 1, 'asdsa', '0891277272', '2025-01-02', 1, 350000.00, 'pending', '2024-12-23 19:01:38'),
(23, 'TN2412233704', 1, 'asdsa', '0891277272', '2024-12-25', 2, 700000.00, 'pending', '2024-12-23 20:36:15'),
(24, 'TN2412242896', 1, 'asdsa', '0891277272', '2024-12-25', 3, 1050000.00, 'pending', '2024-12-24 02:11:06'),
(25, 'TN2412247914', 1, 'asdsa', '0891277272', '2024-12-25', 1, 350000.00, 'pending', '2024-12-24 02:13:05'),
(26, 'TN2412248028', 1, 'asdsa', '0891277272', '2024-12-25', 1, 350000.00, 'paid', '2024-12-24 02:13:23'),
(27, 'TN2412248732', 1, 'asdsa', '0891277272', '2024-12-25', 1, 350000.00, 'pending', '2024-12-24 06:43:34');

-- --------------------------------------------------------

--
--
--


-- --------------------------------------------------------

--
-- 
--



-- --------------------------------------------------------

--
-- Table structure for table `packagess`
--

CREATE TABLE `packagess` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packagess`
--

INSERT INTO `packagess` (`id`, `name`, `description`, `duration`, `price`, `image_url`, `created_at`) VALUES
(1, 'Pantai Selatan', NULL, 'One Day Trip', 350000.00, NULL, '2024-12-23 18:59:26'),
(2, 'City Tour Yogyakarta', NULL, 'One Day Trip', 300000.00, NULL, '2024-12-23 18:59:26'),
(3, 'Merapi Adventure', NULL, 'One Day Trip', 450000.00, NULL, '2024-12-23 18:59:26'),
(4, 'Nature Escape', NULL, '2 Hari 1 Malam', 850000.00, NULL, '2024-12-23 18:59:26'),
(5, 'Cultural Heritage', NULL, '3 Hari 2 Malam', 1750000.00, NULL, '2024-12-23 18:59:26'),
(6, 'Adventure Package', NULL, '3 Hari 2 Malam', 2250000.00, NULL, '2024-12-23 18:59:26'),
(7, 'Complete Yogyakarta', NULL, '4 Hari 3 Malam', 3500000.00, NULL, '2024-12-23 18:59:26'),
(8, 'Premium Experience', NULL, '4 Hari 3 Malam', 5500000.00, NULL, '2024-12-23 18:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile_image`, `created_at`) VALUES
(1, 'rere', 'asd@gmail.com', '$2y$10$di7su8tb0wDiVSEA6khYVOnB.c.88VbNUf7nDBRMI/B2RDePO.0x.', NULL, '2024-12-23 19:47:01'),
(6, 'rew', 'qew@gmail.com', '$2y$10$8grN9sovc.7DWtmeFk4YtO10fRv8PzkeMstkmP04RHKGn11bg52Q6', NULL, '2024-12-24 02:04:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_code` (`order_code`);

--
-- Indexes for table `packagees`
--
ALTER TABLE `packagees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packagess`
--
ALTER TABLE `packagess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `packagees`
--
ALTER TABLE `packagees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packagess`
--
ALTER TABLE `packagess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
