-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 10:18 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laratrust_logbook2`
--

-- --------------------------------------------------------

--
-- Table structure for table `logbooks`
--

CREATE TABLE `logbooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `segment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_problem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solved_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketing_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logbooks`
--

INSERT INTO `logbooks` (`id`, `segment`, `source_problem`, `impact`, `description`, `solved_by`, `marketing_id`, `created_at`, `updated_at`) VALUES
(1, 'Telkom', 'Network Outage', 'Fiber Cut', 'Masalah pada fiber cut', 'Teknisi', 2, NULL, NULL),
(2, 'Indosat', 'Network Outage', 'Fiber Broken', 'Masalah kabel fiber', 'Teknisi', 1, NULL, NULL),
(3, 'StarNet', 'Connection/Internet', 'Internet Slow', 'Wifi user problem', 'Teknisi', 1, '2018-02-04 00:25:49', '2018-02-04 00:25:49'),
(4, 'StarNet', 'Connection/Internet', 'Bisa doong', 'Masalah laptop Andri', 'Teknisi', 3, '2018-02-04 02:00:36', '2018-02-04 02:00:36'),
(5, 'StarNet', 'Network Outage', 'Internet Down', 'Fiber Putus bos', 'Teknisi', 4, '2018-02-04 02:15:31', '2018-02-04 02:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `marketings`
--

CREATE TABLE `marketings` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket_langganan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marketings`
--

INSERT INTO `marketings` (`id`, `nama_pelanggan`, `username`, `alamat`, `paket_langganan`, `id_customer`, `created_at`, `updated_at`) VALUES
(1, 'PT Eduplex', 'Eduplex', 'Jl. Bisa', '20Mbps', 5, '2018-01-31 17:00:00', '2018-01-31 17:00:00'),
(2, 'PT Nutrifood', 'Nutrifood', 'PT Bisa dong', '10 Mbps', 5, '2018-02-08 17:00:00', '2018-02-01 17:00:00'),
(3, 'PT Uap Air', 'Uap Air', 'Jl. Pasteur No. 21', '50MB-Bronze', 9, '2018-02-04 01:59:40', '2018-02-04 01:59:40'),
(4, 'PT Inmajin', 'Inmajin', 'Jl. Dago No 23', '200MB-Gold', 10, '2018-02-04 02:14:47', '2018-02-04 02:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_13_112719_laratrust_setup_tables', 1),
(4, '2017_12_23_005131_create_marketings_table', 1),
(5, '2017_12_23_010210_create_logbooks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2018-02-03 20:56:22', '2018-02-03 20:56:22'),
(2, 'read-users', 'Read Users', 'Read Users', '2018-02-03 20:56:22', '2018-02-03 20:56:22'),
(3, 'update-users', 'Update Users', 'Update Users', '2018-02-03 20:56:22', '2018-02-03 20:56:22'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2018-02-03 20:56:22', '2018-02-03 20:56:22'),
(5, 'read-profile', 'Read Profile', 'Read Profile', '2018-02-03 20:56:22', '2018-02-03 20:56:22'),
(6, 'update-profile', 'Update Profile', 'Update Profile', '2018-02-03 20:56:22', '2018-02-03 20:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2018-02-03 20:56:21', '2018-02-03 20:56:21'),
(2, 'noc', 'Noc', 'Noc', '2018-02-03 20:56:22', '2018-02-03 20:56:22'),
(3, 'teknisi', 'Teknisi', 'Teknisi', '2018-02-03 20:56:23', '2018-02-03 20:56:23'),
(4, 'marketing', 'Marketing', 'Marketing', '2018-02-03 20:56:24', '2018-02-03 20:56:24'),
(5, 'customer', 'Customer', 'Customer', '2018-02-03 20:56:24', '2018-02-03 20:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User'),
(4, 4, 'App\\User'),
(5, 5, 'App\\User'),
(5, 7, 'App\\User'),
(5, 8, 'App\\User'),
(5, 9, 'App\\User'),
(5, 10, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@app.com', '$2y$10$Hi8AL022PoyjNN8/SFVbDuGBP.3ZxMm1tF5iRCrbAjXVfcGWmAx0K', NULL, '2018-02-03 20:56:22', '2018-02-03 20:56:22'),
(2, 'Noc', 'noc@app.com', '$2y$10$w7GS5qkicja1UitsxepRK.S6mpVHJbN9BY1Y5unLfuD3WrnB0eiDu', 'uvtHjf5UxUq2LYwSrjLyvXgfuMxLe3gjDW1ItR3AVsZZxYXYSLuEfp5yzpBm', '2018-02-03 20:56:23', '2018-02-03 20:56:23'),
(3, 'Teknisi', 'teknisi@app.com', '$2y$10$RF/eKT0gs2GwKE8eECm0gORHix9wkPvkuKd.JeeQ.IpM0Hz/v3Gca', 'MOu4DKA9IOp3nndgrPveZqbuj4V4LsSGd2EONVUHwER3sbtpc7CRdPJPT5TU', '2018-02-03 20:56:24', '2018-02-03 20:56:24'),
(4, 'Marketing', 'marketing@app.com', '$2y$10$Gm30YrhcIf.QnCI3YV9V7Onsz/sHiNrkk4qLNkxBjJqGRSFXXHE8O', 'IVGQrzQwuVIuvrrdUJonnVzwnBBAcJB13TQCRSRh3cS423XinfZaPNGoC8h8', '2018-02-03 20:56:24', '2018-02-03 20:56:24'),
(5, 'Customer', 'customer@app.com', '$2y$10$iBT.e6RMC4Q5bp0N6./ZwOYWcowZ0TD/bQdYEPjlNHW2nHKQnm7..', 'BpbfATiI4JKFNIcxstAxMYU0TjYG4NBbMLilDemrPARKIDNkoC4oU072jE7f', '2018-02-03 20:56:25', '2018-02-03 20:56:25'),
(7, 'Eduplex', 'eduplex@app.com', '$2y$10$vWOQHmTnFWCjZ1MMz089/OMQbp8hVsNmxevgNrMK.GludOHEa8LxW', 'dV1JLWsUu50hHeWw2EK9J5C2UQbzkGo61Ll50pDfgCzrGHKNxNfW2jy1bPie', '2018-02-03 22:41:20', '2018-02-03 22:41:20'),
(8, 'Nutrifood', 'nutrifood@app.com', '$2y$10$qM9X3d7r/draAqBGFO2w5Ov.HeknaHjpra18BfUoz9VBsbFfAFnf2', 'MyJeasP0HH6dGQztdBouy7LmwtRRRo7qlJYxswPVPmOsbwu4HUNQS1t6MCe5', '2018-02-03 22:49:05', '2018-02-03 22:49:05'),
(9, 'Uap Air', 'uap@app.com', '$2y$10$K1eRwha3Bh/dMro2Wi17buhUlG2WboWQ.AbP0EesajkjAj3KNOMB6', 'uUZiXEGqSSyY5S1Rf1ZhCmb5gnKqN9Q2rEsgvW7dxh4fugEvRbddfF21M7cv', '2018-02-04 01:59:06', '2018-02-04 01:59:06'),
(10, 'Inmajin', 'inmajin@app.com', '$2y$10$7LsufKC55rx5Kz3lPZaND.c0lxuCZAxJVRCvddXpAv5QHXOVU7FXe', 'noivY8l6FyID5jrgqmS3RUuafLxOPK5xANbLwg38QqSFsNZ8MeUKvQRlJp9s', '2018-02-04 02:13:36', '2018-02-04 02:13:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logbooks`
--
ALTER TABLE `logbooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logbooks_marketing_id_foreign` (`marketing_id`);

--
-- Indexes for table `marketings`
--
ALTER TABLE `marketings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marketings_id_customer_foreign` (`id_customer`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `logbooks`
--
ALTER TABLE `logbooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `marketings`
--
ALTER TABLE `marketings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `logbooks`
--
ALTER TABLE `logbooks`
  ADD CONSTRAINT `logbooks_marketing_id_foreign` FOREIGN KEY (`marketing_id`) REFERENCES `marketings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marketings`
--
ALTER TABLE `marketings`
  ADD CONSTRAINT `marketings_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
