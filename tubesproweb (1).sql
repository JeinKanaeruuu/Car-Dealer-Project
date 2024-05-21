-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 04:23 PM
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
-- Database: `tubesproweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `thumbnail` text NOT NULL,
  `mil` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `seats` int(11) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `title`, `slug`, `price`, `thumbnail`, `mil`, `transmission`, `seats`, `fuel`, `description`, `created_at`, `updated_at`) VALUES
(7, 'Mclaren P1', 'mclaren-p1', 120, '01HXX2X6DP0QDR8ZQDPZAF7WFW.jpg', '120', 'Manual', 2, 'Shell Premium', 'The P1™ features a 3.8L V8 twin-turbocharged engine with a 132 kW electric motor. This hybrid power plant generates 903 bhp and 664 lb-ft of torque. Those specs allow a McLaren P1™ for sale to go from 0-62 mph in just 2.8 seconds.', '2024-05-14 18:57:05', '2024-05-14 19:14:02'),
(8, 'Supra MK4', 'supra-mk4', 63989, '01HXX3DRZY5G07AJGZDNW6CQ9N.jpg', '4000', 'manual', 4, '3', 'Lorem Ipsum', '2024-05-14 19:06:08', '2024-05-14 19:14:20'),
(9, 'BMW M3 Coupe', 'bmw-m3-coupe', 33190, '01HXX3P32W2ZFH0CNE7J39WSA5.webp', '156343', 'Manual', 2, '3', 'Lorem Ipsum', '2024-05-14 19:10:41', '2024-05-14 19:14:38'),
(10, 'Toyota Supra SZ', 'toyota-supra-sz', 40423, '01HXX3VCWX9XGBMRD13KVPPT1F.webp', '58409', 'Manual', 2, '3', 'Lorem Ipsum', '2024-05-14 19:13:35', '2024-05-14 19:15:01'),
(11, 'Lamborghini Veneno', 'lamborghini-veneno', 900, '01HY124RXM16NBFVGZE3H8Y9D6.webp', '90', 'Manual', 2, 'S', 'Lorem Ipsum', '2024-05-16 08:00:43', '2024-05-16 08:00:43'),
(12, 'Lamborghini Veneno', 'lamborghini-veneno-1', 90, '01HY12742EB6PZBSW166P9N6X8.jpg', '90', 'Manual', 2, 'Shell Premium', 'Lorem Ipsum', '2024-05-16 08:01:59', '2024-05-16 08:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

CREATE TABLE `car_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_images`
--

INSERT INTO `car_images` (`id`, `car_id`, `image_path`, `created_at`, `updated_at`) VALUES
(11, 7, '01HXX2X6DWFBGTQEX3KH03HGVD.webp', '2024-05-14 18:57:05', '2024-05-14 18:57:05'),
(12, 7, '01HXX2X6DZ72XHNKN6JNDV42P9.jpg', '2024-05-14 18:57:05', '2024-05-14 18:57:05'),
(13, 8, '01HXX3DS02GHWENQ5FT32HZFS4.jpg', '2024-05-14 19:06:08', '2024-05-14 19:06:08'),
(14, 9, '01HXX3P33095ZXV41Q5VAZTQ9V.webp', '2024-05-14 19:10:41', '2024-05-14 19:10:41'),
(15, 10, '01HXX3VCX1GE5P598351TRJW5Q.webp', '2024-05-14 19:13:35', '2024-05-14 19:13:35'),
(16, 11, '01HY124RYEH7QRE3JC3QYCSPAX.jpg', '2024-05-16 08:00:43', '2024-05-16 08:00:43'),
(17, 11, '01HY124RYH32XH2HGX2SVD131R.jpg', '2024-05-16 08:00:43', '2024-05-16 08:00:43'),
(18, 12, '01HY12742HGGZYX8EQ04KSJ7WK.jpg', '2024-05-16 08:01:59', '2024-05-16 08:01:59');

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
-- Table structure for table `landing_pages`
--

CREATE TABLE `landing_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `image_title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_pages`
--

INSERT INTO `landing_pages` (`id`, `image_path`, `image_title`, `created_at`, `updated_at`) VALUES
(2, '01HY12AEV7RHG8C15GM17SWYHQ.jpg', 'Head', '2024-05-14 18:39:31', '2024-05-16 08:03:49'),
(3, '01HXX23HERVDH936NCDEA1ZYC6.jpg', 'About', '2024-05-14 18:43:04', '2024-05-14 18:43:04'),
(4, '01HXX24580PNBPPYRK1EDJHQM4.jpg', 'Driver', '2024-05-14 18:43:25', '2024-05-14 18:43:25'),
(5, '01HXX265DXV3503A6MWKY612XW.jpg', 'Cars', '2024-05-14 18:44:30', '2024-05-14 18:44:30'),
(6, '01HXX2YVCD90ENSZDHXC198YZQ.png', 'Services', '2024-05-14 18:57:59', '2024-05-14 18:58:14'),
(7, '01HXX317HF2DN8JRP70DQPXXX2.jpg', 'ContactUs', '2024-05-14 18:59:17', '2024-05-14 18:59:36');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_08_145005_create_cars_table', 2),
(6, '2024_05_13_144007_landing_pages', 3),
(7, '2024_05_14_055632_add_role_to_users', 4),
(8, '2024_05_14_070954_create_car_images_table', 5);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$oYtHeqNWHMdWK8z0mVhukO/ZmN/Yq.1zOB6v.sLz1IxvfUIzMU7Xm', NULL, '2024-05-08 03:39:48', '2024-05-13 22:14:20', 'SUPER ADMIN'),
(3, 'Pegawai', 'pegawai@gmail.com', NULL, '$2y$12$eW..kdOOqdnNJJ2N1XOOeezVfcCqJIwWiYrWs9Sllame0hWBzDp4e', NULL, '2024-05-13 22:06:19', '2024-05-13 22:14:06', 'ADMIN'),
(4, 'Pegawai2', 'pegawai2@gmail.com', NULL, '$2y$12$sxugk3KtFSGGHOku9wb5TOw/m0o9fOMhQYjGumaTIBF.E.7kYrzRW', NULL, '2024-05-16 08:04:48', '2024-05-16 08:04:48', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_images`
--
ALTER TABLE `car_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_images_car_id_foreign` (`car_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `landing_pages`
--
ALTER TABLE `landing_pages`
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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `car_images`
--
ALTER TABLE `car_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landing_pages`
--
ALTER TABLE `landing_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_images`
--
ALTER TABLE `car_images`
  ADD CONSTRAINT `car_images_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
