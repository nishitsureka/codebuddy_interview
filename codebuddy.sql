-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 11:22 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codebuddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 0, 'cat1', NULL, NULL),
(2, 1, 'cat1.1', NULL, NULL),
(3, 1, 'cat1.2', NULL, NULL),
(4, 0, 'cat2', NULL, NULL),
(5, 4, 'cat31', '2023-04-07 03:03:44', '2023-04-07 03:08:36'),
(6, 0, 'cat4', '2023-04-07 03:04:18', '2023-04-07 03:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_07_060431_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin john', 'admin@admin.com', NULL, '$2y$10$Q7XAkyLHB0JDP/SRBhWnM.GcGaK4xl1OvmQ798452hT.oRnEf2XCO', 1, NULL, '2023-04-06 22:24:33', '2023-04-06 22:24:33'),
(2, 'user john', 'user@user.com', NULL, '$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, 'IHtO8PTVw3U8CwWjraYdpbFx0V4aK2SmDX6WJn4GhPX3iF7kns5Mf0EFvh5V', '2023-04-06 22:54:57', '2023-04-06 22:54:57'),
(3, 'Nishit123', 'doejohn@gmail.com', NULL, '$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, NULL, '2023-04-07 01:01:53', '2023-04-07 01:01:53'),
(5, 'Nishit1231680849168', 'doejohn1680849168@gmail.com', NULL, '$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, NULL, '2023-04-07 01:02:48', '2023-04-07 01:02:48'),
(6, 'Nishit1231680849271', 'doejohn1680849271@gmail.com', NULL, '$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, NULL, '2023-04-07 01:04:31', '2023-04-07 01:04:31'),
(7, 'Nishit1231680849273', 'doejohn1680849273@gmail.com', NULL, '$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, NULL, '2023-04-07 01:04:33', '2023-04-07 01:04:33'),
(8, 'Nishit1231680849274', 'doejohn1680849274@gmail.com', NULL, '$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, NULL, '2023-04-07 01:04:34', '2023-04-07 01:04:34'),
(10, 'Nishit1231680849276', 'doejohn1680849276@gmail.com', NULL, '$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, NULL, '2023-04-07 01:04:36', '2023-04-07 01:04:36'),
(11, 'Nishit1231680849277', 'doejohn1680849277@gmail.com', NULL, '1234567890$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, NULL, '2023-04-07 01:04:37', '2023-04-07 01:04:37'),
(12, 'Nishit1231680849278', 'doejohn1680849278@gmail.com', NULL, '$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, NULL, '2023-04-07 01:04:38', '2023-04-07 01:04:38'),
(13, 'Nishit1231680849279', 'doejohn1680849279@gmail.com', NULL, '$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, NULL, '2023-04-07 01:04:39', '2023-04-07 01:04:39'),
(14, 'Nishit1231680849280', 'doejohn1680849280@gmail.com', NULL, '$2y$10$Ei8/X4GVvzeUQKexGHA6COch86p004EzC4eeWIO5x8dqIzst/Ut7K', 0, NULL, '2023-04-07 01:04:40', '2023-04-07 01:04:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
