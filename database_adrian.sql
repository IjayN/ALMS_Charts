-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2019 at 11:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_adrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(10) UNSIGNED NOT NULL,
  `holiday_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holiday_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `holiday_type`, `holiday_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'national ', '01/16', NULL, NULL, NULL),
(2, 'national', '01/20', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE `leave_application` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(30) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reliever` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_days` int(100) DEFAULT NULL,
  `reliever_approval` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `HOD` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `HR` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `MD` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`id`, `userId`, `type`, `startDate`, `endDate`, `reliever`, `leave_days`, `reliever_approval`, `HOD`, `HR`, `MD`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, '2019/01/01', '2019/01/22', '5', NULL, 'pending', 'pending', 'pending', 'pending', NULL, '2018-12-31 11:20:16', '2018-12-31 11:20:16'),
(2, 0, 'sick-leave', '2019/01/01', '2019/01/22', '5', NULL, 'pending', 'pending', 'pending', 'pending', NULL, '2018-12-31 11:27:35', '2018-12-31 11:27:35'),
(3, 0, 'sick-leave', '2019/01/01', '2019/01/22', '5', NULL, 'pending', 'pending', 'pending', 'pending', NULL, '2018-12-31 11:28:23', '2018-12-31 11:28:23'),
(4, 4, 'Sick', '2019/01/05', '2019/01/25', '2', 15, 'accepted', 'accepted', 'pending', 'pending', NULL, '2019-01-03 05:25:43', '2019-01-03 05:25:43'),
(5, 8, 'Sick', 'Tuesday 08 January 2019', 'Thursday 31 January 2019', '8', 10, 'accepted', 'pending', 'pending', 'pending', NULL, '2019-01-07 07:58:36', '2019-01-07 07:58:36');

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2018_12_31_112941_leave_application_table', 2),
(9, '2018_12_31_113820_holidays_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('2c1b6b97f0ef4fa5c36a7c8642b0102fbe225109f748ad26ed558eb8b8e3cb46edf2cc63cff8f940', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-31 05:21:02', '2018-12-31 05:21:02', '2019-12-31 08:21:02'),
('400cf0e31c555145936f05d18372e44e8478668baa0674f589629ad73c2e6a117bf3759730a58946', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-28 09:40:01', '2018-12-28 09:40:01', '2019-12-28 12:40:01'),
('407e0dcc19d25479408834395c76aff598ed9bb2234b60ecc8223e2dde3feb02208029b78f739e84', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-31 04:09:53', '2018-12-31 04:09:53', '2019-12-31 07:09:53'),
('4892f73e527015e271896182a9e765da7b5008553263a9a7ac82d08015bc1f3a89573264d80c519f', 2, 1, 'Personal Access Token', '[]', 0, '2019-01-06 06:12:41', '2019-01-06 06:12:41', '2020-01-06 09:12:41'),
('4caa1ccab105bd57ea958a3f0841a32c3d6c038f6c98ebf52f687a0dc09e536ade6d7da4a01255d3', 2, 1, 'Personal Access Token', '[]', 0, '2019-01-06 07:28:43', '2019-01-06 07:28:43', '2020-01-06 10:28:43'),
('510bf86110cca9e74b859b68262ee5170d7e70bdfde6a4ea85145950121eecbfb7241671f80b8491', 5, 1, 'Personal Access Token', '[]', 0, '2019-01-03 10:15:22', '2019-01-03 10:15:22', '2020-01-03 13:15:22'),
('687d4285928104d7ceb9c2eb686039a3d2cc0d833e8db66d2a23166e899f1f97824a72a6d85b7812', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-28 10:13:15', '2018-12-28 10:13:15', '2019-12-28 13:13:15'),
('80c8dc8d769732a705a6dfc863e4e39a7ece90a7baecc470d98d720d8c5de0c4f060b26fd662a459', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-31 05:22:32', '2018-12-31 05:22:32', '2019-12-31 08:22:32'),
('8c41e05be6c1d7aa4aeecbaf6f1c03384d6ea743b5e05718cec9ad1972c32d1ba0906c0f9714e206', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-28 10:27:41', '2018-12-28 10:27:41', '2019-12-28 13:27:41'),
('94ac45626a955bd647f4c50beea510861d8a8300d356e8a265217681063c63d6a17f3a5e3077ca99', 2, 1, 'Personal Access Token', '[]', 0, '2019-01-09 03:33:35', '2019-01-09 03:33:35', '2020-01-09 06:33:35'),
('98d6f58384f29b6efabc1fe43041a8044bf537a6483d2041e71166a7fff214f97a37521655cc0bf5', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-28 10:13:08', '2018-12-28 10:13:08', '2019-12-28 13:13:08'),
('a2054be0e96a48adc6f3ecf5c767714a1199e12ad5dc05a023f1be7501f543187e706860e51ff7c4', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-31 04:05:45', '2018-12-31 04:05:45', '2019-12-31 07:05:45'),
('ac43a98538e07a7a92956c6a1efa8e3d218c0b2a071a191498f925b24ff568ee5567fba03eaf7148', 2, 1, 'Personal Access Token', '[]', 0, '2019-01-06 06:27:42', '2019-01-06 06:27:42', '2020-01-06 09:27:42'),
('be274d72ac90080fd7318621005e85b69033600511fc4794a0be7b121a9a7b6adaa5ea66414a1bfe', 2, 1, 'Personal Access Token', '[]', 0, '2019-01-09 03:33:17', '2019-01-09 03:33:17', '2020-01-09 06:33:17'),
('cad329f2590ba9e4640524504a03da98087cc987a303456634cb4c4fca05fcb666129bbc64b2aaf4', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-21 07:49:34', '2018-12-21 07:49:34', '2019-12-21 10:49:34'),
('ce6db66c8b002f559d1b8dcb6cf3b1b4299c95b8d61d735cff98c631898d3066ab692f8f974f31bc', 2, 1, 'Personal Access Token', '[]', 0, '2019-01-03 09:30:03', '2019-01-03 09:30:03', '2020-01-03 12:30:03'),
('d08302b5abee0cae6b1dce43e5266a3d236857da2c37c0b78265e247c2d61d6448f2b341549286db', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-28 10:12:36', '2018-12-28 10:12:36', '2019-12-28 13:12:36'),
('e1299c4deb4768425ff975b37f4fb5245f7be9da49ab6d742f25362c2d8a8b5dc70f5748935f595a', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-31 03:48:53', '2018-12-31 03:48:53', '2019-12-31 06:48:53'),
('e213c0fe722a2c9d988d656ea3461746b3eeed7dc690b61359f55fa5dd0fa504c9846e19b81e958f', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-27 03:58:49', '2018-12-27 03:58:49', '2019-12-27 06:58:49'),
('e34120b65a092ec5fb9919cfc8c4bd184c2a4f683d779cd8b16ead64eac055e85695a7d24fb394ae', 2, 1, 'Personal Access Token', '[]', 0, '2018-12-31 05:25:19', '2018-12-31 05:25:19', '2019-12-31 08:25:19'),
('e53c68e174f46e334ec6ac058235e5d96eda8f0fb47e324b06e7ff9e2c86d074a683b6df340793b8', 2, 1, 'Personal Access Token', '[]', 0, '2019-01-09 09:05:46', '2019-01-09 09:05:46', '2020-01-09 12:05:46'),
('f2b28dc794eaa87382503c33d998713c7f3df913a382c57728330e785b636b7a9554ff34df77770f', 2, 1, 'Personal Access Token', '[]', 0, '2019-01-09 08:43:22', '2019-01-09 08:43:22', '2020-01-09 11:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'phczlAihTatum3F75KIcIVmi5MOAIMY639LfPkLm', 'http://localhost', 1, 0, 0, '2018-12-19 07:37:24', '2018-12-19 07:37:24'),
(2, NULL, 'Laravel Password Grant Client', 'ED8Zk1T14T01CVZwI1Z8E7J6quAghl76oFmC2oA7', 'http://localhost', 0, 1, 0, '2018-12-19 07:37:24', '2018-12-19 07:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-12-19 07:37:24', '2018-12-19 07:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `nat_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NSSF` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NHIF` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KRA_Pin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.png',
  `active` tinyint(1) DEFAULT '0',
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `nat_id`, `NSSF`, `NHIF`, `KRA_Pin`, `avatar`, `active`, `department`, `user_type`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'testuser1geto', 'testuser5@gmail.com', '$2y$10$1mrqfAyAW27v65jlTsVpMu9UiprZHp1pJCNGRNEkzzMzTsMRPoEXy', '30812345', '12334', '12334', '2341', 'avatar.png', 1, 'HR', NULL, 'active', NULL, '2019-01-04 07:43:40', '2019-01-08 13:09:25', '2019-01-08 13:09:25'),
(2, 'ianjohn', 'ianjohnngure@gmail.com', '$2y$10$1mrqfAyAW27v65jlTsVpMu9UiprZHp1pJCNGRNEkzzMzTsMRPoEXy', '30812345', '12334', '12334', '2341', 'avatar.png', 1, 'HR', 'HOD', 'active', '7HaIOAfElb4PomZNWOMO3FEZul12Nkn9W8heWs56WnN0LPJt4F32l1h7Oogm', '2019-01-04 07:46:28', '2019-01-04 07:46:28', NULL),
(3, 'testuser2', 'testuser2@gmail.com', '$2y$10$1mrqfAyAW27v65jlTsVpMu9UiprZHp1pJCNGRNEkzzMzTsMRPoEXy', '30812345', '12334', '12334', '2341', 'avatar.png', 1, 'Finance', 'HOD', 'active', 'V3u0gJF1iUsdpgyUxf3TY76TF8dOO1k2j68U7QpyEz5qxFsKY4zhhCCXYpCD', '2019-01-04 09:11:02', '2019-01-04 09:11:02', NULL),
(4, 'testuser2', 'testuser3@gmail.com', '$2y$10$rfhcOYKANhpZ/4gisSkeg.UTjNqNOyrfBePfQuMAQcZgQmoJ.itQW', '30812345', '12334', '12334', '2341', 'avatar.png', 1, 'Finance', 'HOD', 'active', NULL, '2019-01-04 12:38:59', '2019-01-04 12:38:59', NULL),
(5, 'testuser4', 'testuser4@gmail.com', '$2y$10$uGuMOrJK.U2Q.6hrbc5HGuNu9dGezw/pYaWUGEbwDiMdHuunrI94i', '30812345', '12334', '12334', '2341', 'avatar.png', 0, 'Finance', 'HOD', 'active', NULL, '2019-01-05 09:51:43', '2019-01-05 09:51:43', NULL),
(6, 'testuser4', 'testuser4@adrian.com', '$2y$10$7k7PzT.dVBMsWFsawAgWKOHF8YENhRdNpSDLtmRtcTR1g0MP5T7ze', '30812345', '12334', '12334', '2341', 'avatar.png', 0, 'Finance', 'HOD', 'active', NULL, '2019-01-06 20:38:12', '2019-01-06 20:38:12', NULL),
(7, 'testuser5', 'testuser5@adrian.com', '$2y$10$lgF//h6bR5hq.kYvgKmoDu81hwF1ZkqOQ4AqwmY2ku18cenPBEPTO', '30812345', '12334', '12334', '2341', 'avatar.png', 1, 'IT', 'EMPLOYEE', 'active', NULL, '2019-01-07 09:47:36', '2019-01-07 09:47:36', NULL),
(8, 'me me', 'me@gmail.com', '$2y$10$ndVhjhIKasGMTTtOKk11ZudKgi9B5hGItF5u5K/eNCQSYnAwd2kX2', NULL, NULL, NULL, NULL, 'avatar.png', 0, 'none', 'EMPLOYEE', 'active', NULL, '2019-01-07 07:19:34', '2019-01-07 07:19:34', NULL),
(9, 'Mageto Denis', 'meme@gmail.com', '$2y$10$xvcmas.iBZo8EKi5e4wuO.gUXsml7bVwIFb4te3LUihgnzftIelZa', '12345678', '1234567', NULL, NULL, 'avatar.png', 0, 'Finance', NULL, 'active', NULL, '2019-01-07 07:26:09', '2019-01-07 07:26:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nat_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `fname`, `lname`, `phone`, `company_name`, `nat_id`, `employee_id`, `avatar`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pony', 'Stark', '0700111222', 'Ellixar', '32164590', '3', NULL, NULL, '2019-01-09 09:45:20', '2019-01-09 09:45:20'),
(2, 'Pony', 'Stark', '0700111222', 'Ellixar', '32164590', '3', NULL, NULL, '2019-01-09 09:46:21', '2019-01-09 09:46:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_application`
--
ALTER TABLE `leave_application`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
