-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 07:09 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `act!ona!d`
--

-- --------------------------------------------------------

--
-- Table structure for table `ai_role`
--

CREATE TABLE `ai_role` (
  `ro_id` int(10) UNSIGNED NOT NULL,
  `ro_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ro_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ai_role`
--

INSERT INTO `ai_role` (`ro_id`, `ro_name`, `ro_desc`) VALUES
(1, 'Admin', NULL),
(2, 'Country Director', NULL),
(3, 'HROD', NULL),
(4, 'HOFSP', NULL),
(5, 'Hub Coordinator', NULL),
(6, 'Programe Officer', NULL),
(7, 'Line Manager', NULL),
(8, 'Project Coordinator', NULL),
(9, 'Regional MEL', NULL),
(10, 'Finance Officer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ai_userflow`
--

CREATE TABLE `ai_userflow` (
  `uf_id` int(10) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `uf_CountryId` int(11) NOT NULL DEFAULT '1',
  `uf_hofspId` int(11) NOT NULL DEFAULT '0',
  `uf_hubCoordinatorId` int(11) NOT NULL DEFAULT '0',
  `uf_hoppId` int(11) NOT NULL DEFAULT '0',
  `uf_lineManagerId` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ai_userflow`
--

INSERT INTO `ai_userflow` (`uf_id`, `userId`, `uf_CountryId`, `uf_hofspId`, `uf_hubCoordinatorId`, `uf_hoppId`, `uf_lineManagerId`) VALUES
(1, 1, 1, 0, 0, 0, 0),
(2, 2, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ai_users`
--

CREATE TABLE `ai_users` (
  `us_id` int(10) UNSIGNED NOT NULL,
  `us_fullName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `us_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_profileImg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '/Admin/images/users/default.png',
  `us_mobile` int(11) DEFAULT NULL,
  `us_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ai_users`
--

INSERT INTO `ai_users` (`us_id`, `us_fullName`, `us_email`, `us_password`, `us_profileImg`, `us_mobile`, `us_location`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Shariful Islam', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '/Admin/images/users/S9iZ3mPcVcx4ExNX5CB5gtN5jhPYxXylzNc9Qhn3.jpeg', 1969516500, '3151', 1, '2018-07-31 18:00:00', '2018-07-31 18:00:00'),
(2, 'Country Director', 'country@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '/Admin/images/users/default.png', 9663515, NULL, 2, NULL, NULL),
(3, 'HROD', 'hrod@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '/Admin/images/users/default.png', NULL, NULL, 3, NULL, NULL),
(4, 'HOFSP', 'hofsp@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '/Admin/images/users/default.png', NULL, NULL, 4, NULL, NULL),
(5, 'Hub Coordinator', 'hub@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '/Admin/images/users/mWg1lgcpWlxGLXXx5wQuN9xkufxOsUSl4pzyAes7.png', 1969515555, '31535', 5, NULL, NULL),
(6, 'Programe Officer', 'po@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '/Admin/images/users/default.png', NULL, NULL, 6, NULL, NULL),
(7, 'Line Manager', 'lm@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '/Admin/images/users/default.png', NULL, NULL, 7, NULL, NULL),
(8, 'Project Coordinator', 'pc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '/Admin/images/users/default.png', NULL, NULL, 8, NULL, NULL),
(9, 'Regional MEL', 'rm@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '/Admin/images/users/default.png', NULL, NULL, 9, NULL, NULL),
(10, 'Finance Officer', 'fo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '/Admin/images/users/default.png', NULL, NULL, 10, NULL, NULL);

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
(3, '2018_08_20_182036_create_ai_users_table', 1),
(4, '2018_08_20_194037_create_ai_role_table', 1),
(5, '2018_08_20_194214_create_ai_user_flow_table', 1);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `ai_role`
--
ALTER TABLE `ai_role`
  ADD PRIMARY KEY (`ro_id`);

--
-- Indexes for table `ai_userflow`
--
ALTER TABLE `ai_userflow`
  ADD PRIMARY KEY (`uf_id`);

--
-- Indexes for table `ai_users`
--
ALTER TABLE `ai_users`
  ADD PRIMARY KEY (`us_id`),
  ADD UNIQUE KEY `ai_users_us_email_unique` (`us_email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ai_role`
--
ALTER TABLE `ai_role`
  MODIFY `ro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ai_userflow`
--
ALTER TABLE `ai_userflow`
  MODIFY `uf_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ai_users`
--
ALTER TABLE `ai_users`
  MODIFY `us_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
