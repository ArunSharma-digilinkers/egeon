-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2025 at 12:00 PM
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
-- Database: `egeon`
--

-- --------------------------------------------------------

--
-- Table structure for table `battery_registrations`
--

CREATE TABLE `battery_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_mobile` varchar(255) NOT NULL,
  `battery_model` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `warranty_start` date NOT NULL,
  `warranty_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `battery_registrations`
--

INSERT INTO `battery_registrations` (`id`, `dealer_id`, `customer_name`, `customer_mobile`, `battery_model`, `serial_number`, `state`, `warranty_start`, `warranty_end`, `created_at`, `updated_at`) VALUES
(1, 2, 'manoj', '9582964593', '9582964593', 'QMK4WCHHP60L', '', '2025-12-24', '2027-12-24', '2025-12-24 03:36:47', '2025-12-24 03:36:47'),
(2, 6, 'manoj', '9873507684', 'm-98', 'VJPD1KUNGTFD', 'Delhi', '2025-12-24', '2027-12-24', '2025-12-24 03:56:02', '2025-12-24 03:56:02'),
(3, 6, 'anil', '45693582', 'p23', 'XASCZZDGPESV', 'Delhi', '2025-12-24', '2027-12-24', '2025-12-24 04:26:11', '2025-12-24 04:26:11'),
(4, 6, 'shahid', '9873507634', 'Tubularmodel', 'VSUIZX0TOE2O', 'Delhi', '2025-12-26', '2027-12-26', '2025-12-26 00:56:23', '2025-12-26 00:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `blog_post` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `featured_image`, `post_title`, `blog_post`, `title`, `description`, `tags`, `category`, `slug`, `author`, `created_at`, `updated_at`) VALUES
(1, '17667436666508.jpg', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2025-12-26 04:37:46', '2025-12-26 04:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_12_09_035812_create_products_table', 2),
(11, '2025_12_09_052303_alter_capacity_nullable_in_products_table', 3),
(12, '2025_12_22_105354_create_blogs_table', 3),
(13, '2025_12_23_100835_make_state_nullable_in_users_table', 4),
(14, '2025_12_24_082151_create_battery_registrations_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `voltage` varchar(255) NOT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `model`, `voltage`, `capacity`, `warranty`, `image`, `created_at`, `updated_at`) VALUES
(1, 'inverter', 'EG-16572', '12V', '100 AH', '36+36* MONTHS', '17667460681511.png', '2025-12-09 00:51:39', '2025-12-26 05:17:48'),
(2, 'inverter', 'EG-18572', '12V', '100 AH', '36+36* MONTHS', '17667460608140.png', '2025-12-09 00:52:37', '2025-12-26 05:17:40'),
(3, 'inverter', 'EG-21072', '12V', '100 AH', '36+36* MONTHS', '17667460512666.png', '2025-12-09 00:53:08', '2025-12-26 05:17:31'),
(4, 'inverter', 'EG-24072', '12V', '100 AH', '36+36* MONTHS', '17667460383463.png', '2025-12-09 00:53:42', '2025-12-26 05:17:18'),
(5, 'inverter', 'EG-26072', '12V', '100 AH', '36+36* MONTHS', '17667460292904.png', '2025-12-09 00:54:40', '2025-12-26 05:17:09'),
(6, 'inverter', 'EG-19084', '12V', '100 AH', '42+42* MONTHS', '17667460213937.png', '2025-12-09 00:56:20', '2025-12-26 05:17:01'),
(7, 'inverter', 'EG-25084', '12V', '100 AH', '42+42* MONTHS', '17667460135551.png', '2025-12-09 00:56:49', '2025-12-26 05:16:53'),
(8, 'rickshaw', 'EGL- 48v', '12V', '100 AH', '18* MONTHS', '17667460011039.png', '2025-12-09 00:59:35', '2025-12-26 05:16:41'),
(9, 'rickshaw', 'EGL - 48v', '12V', '150 AH', '36* MONTHS', '17667459939692.png', '2025-12-09 01:27:56', '2025-12-26 05:16:33'),
(10, 'rickshaw', 'EGL-60v', '12V', '100 AH', '18* MONTHS', '17667459845864.png', '2025-12-09 01:28:40', '2025-12-26 05:16:24'),
(11, 'rickshaw', 'EGL- 60v', '12V', '150 AH', '36* MONTHS', '17667459755523.png', '2025-12-09 01:41:02', '2025-12-26 05:16:15'),
(12, 'rickshaw', 'EGL -72v', '12V', '200 AH', '24* MONTHS', '17667459638685.png', '2025-12-09 01:41:57', '2025-12-26 05:16:03'),
(13, 'rickshaw', 'EGL12.8', '12V', '100 AH/150 AH/200 АН', '3*/5*/7* YEARS', '17667459531859.png', '2025-12-09 01:47:29', '2025-12-26 05:15:53'),
(14, 'rickshaw', 'EGL25.6', '12V', '100 AH/150 AH/200 АН', '3*/5*/7* YEARS', '17667459414199.png', '2025-12-09 01:48:34', '2025-12-26 05:15:41'),
(15, 'bike', 'EGL60v30а', '12V', '100 AH', '25* MONTHS', '17667459272677.png', '2025-12-09 01:50:16', '2025-12-26 05:15:27'),
(16, 'bike', 'EGL60v45a', '12V', '100 AH', '25* MONTHS', '17667459184806.png', '2025-12-09 01:51:11', '2025-12-26 05:15:18'),
(17, 'bike', 'EGL48v30a', '12V', '100 AH', '25* MONTHS', '17667459065534.png', '2025-12-09 01:51:54', '2025-12-26 05:15:06'),
(18, 'bike', 'EGL48v45а', '12V', '100 AH', '25* MONTHS', '17667458979306.png', '2025-12-09 01:52:26', '2025-12-26 05:14:57'),
(19, 'bike', 'EGL72v30a', '12V', '100 AH', '25* MONTHS', '17667458534612.png', '2025-12-09 01:53:03', '2025-12-26 05:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0ue1I2IucVxdEtMJGOphBS0JAVSds17vTF4KMuhL', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidzBhOGxDbGNIc1JtM0pnQUhMa0ppSXBwOEU5VXNmSUVRcWhkUGdUTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo1OiJpbmRleCI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9ibG9nIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1766746804),
('kHLC6DOy76Q95Iq6zEmlRrrII6zgSNhqIDL0V4sj', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:146.0) Gecko/20100101 Firefox/146.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS3VsUE9OaTYxQmxjaWtkM01ZcTFEVTJTeEpCNVBpZnl4TnVYUGZxWCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZWFsZXIvdmlldy13YXJyYW50eSI7czo1OiJyb3V0ZSI7czoyMDoiZGVhbGVyLnZpZXctd2FycmFudHkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O30=', 1766741407),
('qLoDUbLgZU4wT3NrY6yE5biqMVufeb0qNunSJfFN', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRVFnMzFwVjFtSUJZSWtWYzdEY1BsbUZ2NTNqVTZMUG9Xa3BMdnBxVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kaXN0cmlidXRvci9jaGVjay13YXJyYW50eSI7czo1OiJyb3V0ZSI7czoyNjoiZGlzdHJpYnV0b3IuY2hlY2std2FycmFudHkiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=', 1766746783);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('company','distributor','dealer') NOT NULL DEFAULT 'dealer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `state`) VALUES
(1, 'anas', 'anas@gmail.com', NULL, '$2y$12$GUKygBvv5ayXJCOZE8msXO4Rg8Uc.Hfrpq797Sq68N7jwddcgg3YC', 'dealer', NULL, '2025-12-08 22:20:22', '2025-12-08 22:20:22', ''),
(2, 'shahid', 'shahid@gmail.com', NULL, '$2y$12$KZ/6Fvw69x8h4CmL68yQMu1uc415UexOAPMzyrImWgenXWvd8jrrS', 'dealer', NULL, '2025-12-22 02:46:20', '2025-12-22 02:46:20', ''),
(3, 'Company Admin', 'admin@company.com', NULL, '$2y$12$1PNq7Tm9WytX8sb86xyliO3zzzLI8wh9GHJhJkrbslqD8Z3QRWshq', 'company', NULL, '2025-12-23 04:40:15', '2025-12-23 04:40:15', NULL),
(4, 'Shahid', 'Digilinkerlab@gmail.com', NULL, '$2y$12$8Cfi0MjpwcYizakh1DSNYui.8R4nRNTnxDplHSFCPx5BbB4e6.lvS', 'dealer', NULL, '2025-12-23 05:32:15', '2025-12-23 05:32:15', NULL),
(5, 'aman', 'aman@gmail.com', NULL, '$2y$12$MQ58Q3mY7MS5dSfxMgV.R.QY4ebNXfFyh4JQcY/nXohvjbcJvv4Gq', 'distributor', NULL, '2025-12-24 01:49:19', '2025-12-24 01:49:19', NULL),
(6, 'rohan', 'rohan@gmail.com', NULL, '$2y$12$.hYg7j94IgEqYorNQLaQDOUcHWadpIdOIOA3UzYz/SWeZ6HhY5bqm', 'dealer', NULL, '2025-12-24 03:55:14', '2025-12-24 03:55:14', 'Delhi'),
(7, 'anil', 'anil@gmail.com', NULL, '$2y$12$puJICwk/vcOVGlch0O9qDu30QB5GNajgzbUfrTq2zDlEeR/1l4vLy', 'distributor', NULL, '2025-12-26 00:13:05', '2025-12-26 00:13:05', 'Delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `battery_registrations`
--
ALTER TABLE `battery_registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `battery_registrations_serial_number_unique` (`serial_number`),
  ADD KEY `battery_registrations_dealer_id_foreign` (`dealer_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `battery_registrations`
--
ALTER TABLE `battery_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `battery_registrations`
--
ALTER TABLE `battery_registrations`
  ADD CONSTRAINT `battery_registrations_dealer_id_foreign` FOREIGN KEY (`dealer_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
