-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 06:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 1, 2, '2020-12-20 10:33:47', '2020-12-20 10:33:47'),
(6, 4, 3, '2020-12-22 05:26:53', '2020-12-22 05:26:53'),
(7, 2, 3, '2020-12-22 05:28:10', '2020-12-22 05:28:10'),
(10, 1, 4, '2020-12-22 12:27:25', '2020-12-22 12:27:25'),
(11, 4, 4, '2020-12-22 12:27:30', '2020-12-22 12:27:30'),
(15, 1, 7, '2020-12-22 13:10:57', '2020-12-22 13:10:57'),
(16, 3, 7, '2020-12-22 13:11:03', '2020-12-22 13:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_11_26_112913_create_users_table', 1),
(2, '2020_11_30_140510_create_products_table', 2),
(3, '2020_12_15_121942_create_cart_table', 3),
(4, '2020_12_17_092308_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `payment_method`, `payment_status`, `address`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 'pending', 'cash', 'pending', 'Sylhet', NULL, NULL),
(2, 3, 6, 'pending', 'cash', 'pending', 'Sylhet', NULL, NULL),
(3, 1, 6, 'pending', 'cash', 'pending', 'Sylhet', NULL, NULL),
(4, 1, 8, 'pending', 'cash', 'pending', 'Sylhet', NULL, NULL),
(5, 4, 8, 'pending', 'cash', 'pending', 'Sylhet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cetagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gellary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `cetagory`, `description`, `gellary`, `created_at`, `updated_at`) VALUES
(1, 'Full Set', '350', 'Wooden Set', 'It is very beautiful and ajustable', '/productImage/images1.jpg', NULL, NULL),
(2, 'One piece', '200', 'Nack Piece', 'It is very beautiful ', '/productImage/images2.jpg', NULL, NULL),
(3, 'Ear Ring', '150', 'Ear Ring', 'It is ajustable', '/productImage/images3.jpg', NULL, NULL),
(4, 'Bengle', '180', 'Bengle Set', 'It is free Style', '/productImage/images4.jpg', NULL, NULL),
(5, 'Ring', '100', 'Wooden Ring', 'Very light and beautiful', '/productImage/images5.jpg', NULL, NULL),
(6, 'Full Set', '230', 'Wooden Set', 'It is a beautiful set', '/productImage/images7.jpg', NULL, NULL),
(7, 'Bengle', '200', 'Bengle Set', 'It is free Size', '/productImage/images6.jpg', NULL, NULL),
(8, 'One piece', '190', 'Nack Piece', 'It is adjustable', '/productImage/images8.jpg', NULL, NULL),
(9, 'Ring', '100', 'Wooden Ring', 'This is beautiful and light weight', '/productImage/images9.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Joy Das', 'joy@gmail.com', '$2y$10$Y1c6ET0TzERqA04GOAfwQevp/lL2KIZNQZBNEuQTIdDK0WgV6.2BC', NULL, NULL),
(2, 'Pranta Das', 'p@gmail.com', '$2y$10$qX3Yl0XTQ3Sng7iVjZFX7OxtYcNXl3nfQnDHlpT3//5BSBc41CQk2', NULL, NULL),
(3, 'ria', 'r@gmail.com', '$2y$10$GV30dszYolgpKt8dhQXIGeOmQhmALkLVxlp3qT7pP6nKKJBhPTvDq', '2020-12-20 11:29:03', '2020-12-20 11:29:03'),
(4, 'joti', 'j@gmail.com', '$2y$10$8OtVoJrbM7p3aYWZDM9h7eD5etO6JGzvb/QeP2Pyt5Fa7P4e4I7F2', '2020-12-22 12:26:22', '2020-12-22 12:26:22'),
(6, 'Dipa', 'd@gmail.com', '$2y$10$xIrME6FG9XPD16kYiLPvSurnv4gB7pBKmNNl/Rv/W38Fjpxoe3XKm', '2020-12-22 12:47:59', '2020-12-22 12:47:59'),
(7, 'Asima', 'a@gmail.com', '$2y$10$TYY2EvfzVM913FWqLDIPzOVTNemaFSEAIkvGJ6.yrrxHjIqsQkQKq', '2020-12-22 13:09:53', '2020-12-22 13:09:53'),
(8, 'Bina', 'b@gmail.com', '$2y$10$g.sbuLNPRbM0iQIj.5DrDOsDzEzLkViol7Y0ERy8QqHLOer9IDWtu', '2020-12-22 13:18:09', '2020-12-22 13:18:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
