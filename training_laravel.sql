-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2023 at 03:31 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

DROP TABLE IF EXISTS `categorys`;
CREATE TABLE IF NOT EXISTS `categorys` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men', NULL, NULL),
(2, 'Women', NULL, NULL),
(3, 'Sport', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'LPV01', -40, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2023_05_13_152938_create_products_table', 2),
(21, '2023_05_13_154434_create_categorys_table', 2),
(22, '2023_05_13_154656_create_products_image_table', 2),
(23, '2023_05_21_134851_add_role_to_users_table', 3),
(24, '2023_05_26_041950_create_coupon_table', 4),
(25, '2023_05_26_043957_create_coupons_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `products_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorys_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `products_name`, `products_price`, `description`, `categorys_id`, `created_at`, `updated_at`) VALUES
(1, 'Quần M', '122', 'This is quần M', 1, NULL, NULL),
(2, 'Polo-shirt-1', '111', 'This is Polo-shirt-1', 1, NULL, NULL),
(3, 'Polo-shirt-2', '222', 'This is Polo-shirt-2', 1, NULL, NULL),
(4, 'Polo-shirt-3', '333', 'This is Polo-shirt-3', 1, NULL, NULL),
(5, 'Polo-shirt-5', '555', 'This is Polo-shirt-5', 1, NULL, NULL),
(6, 'Polo-shirt-6', '765', 'This is Polo-shirt-6', 1, NULL, NULL),
(7, 'T-shirt-1', '456', 'This is T-shirt-1', 1, NULL, NULL),
(8, 'Girl-1', '123', 'This is girl 1', 2, NULL, NULL),
(9, 'Girl-2', '723', 'This is girl-2', 2, NULL, NULL),
(10, 'Girl-3', '122', 'This is Girl-3', 2, NULL, NULL),
(11, 'Girl-4', '232', 'This is Girl-4', 2, NULL, NULL),
(12, 'Girl-5', '323', 'This is Girl-5', 2, NULL, NULL),
(13, 'Girl-7', '333', 'This is Girl-7', 2, NULL, NULL),
(14, 'Girl-6', '666', 'This is Girl-6', 2, NULL, NULL),
(15, 'Sport-1', '111', 'This is Sport-1', 3, NULL, NULL),
(16, 'Sport-2', '444', 'This is Sport-2', 3, NULL, NULL),
(17, 'Sport-3', '554', 'This is Sport-3', 3, NULL, NULL),
(18, 'Sport-4', '777', 'This is Sport-4', 3, NULL, NULL),
(19, 'Sport-5', '444', 'This is Sport-5', 3, NULL, NULL),
(20, 'Sport-6', '878', 'This is Sport-6', 3, NULL, NULL),
(21, 'Sport-7', '222', 'This is Sport-7', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_image`
--

DROP TABLE IF EXISTS `products_image`;
CREATE TABLE IF NOT EXISTS `products_image` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_image`
--

INSERT INTO `products_image` (`id`, `img_name`, `products_id`, `created_at`, `updated_at`) VALUES
(1, 'T-shirt-1.png', 1, NULL, NULL),
(2, 'polo-shirt-2.png', 2, NULL, NULL),
(3, 'polo-shirt-4.png', 3, NULL, NULL),
(4, 'polo-shirt-5.png', 4, NULL, NULL),
(5, 'polo-shirt-6.png', 5, NULL, NULL),
(6, 't-shirt-1.png', 6, NULL, NULL),
(7, 'Girl-1.png', 8, NULL, NULL),
(8, 'Girl-2.png', 9, NULL, NULL),
(9, 'Girl-3.png', 10, NULL, NULL),
(10, 'Girl-4.png', 11, NULL, NULL),
(11, 'Girl-5.png', 12, NULL, NULL),
(12, 'Girl-6.png', 13, NULL, NULL),
(13, 'Girl-7.png', 14, NULL, NULL),
(14, 'Sport-1.png', 15, NULL, NULL),
(15, 'Sport-2.png', 16, NULL, NULL),
(16, 'Sport-3.png', 17, NULL, NULL),
(17, 'Sport-4.png', 18, NULL, NULL),
(18, 'Sport-5.png', 19, NULL, NULL),
(19, 'Sport-6.png', 20, NULL, NULL),
(20, 'Sport-7.png', 21, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Vũ Nguyễn Thành', 'vu@gmail.com', NULL, '$2y$10$5lsxdskRxep1NjVFr.aqfOLvZx0zIrcBDEdW.szWMikNVy7b9SmiC', NULL, '2023-05-19 08:18:35', '2023-05-19 08:18:35', NULL),
(2, 'vũ', 'b@gmail.com', NULL, '$2y$10$AnT0mF3HDn4rM9kdyl8r1exaxScfsDWbdc8hXGPmsAC123TwsSRW2', NULL, '2023-05-20 18:05:22', '2023-05-20 18:05:22', NULL),
(3, 'Khánh', 'v@gmail.com', NULL, '$2y$10$QGFL4c4XBZspPaN.40qmQeO7qFfI/CWjfikj2ik6/iegATMEPs7kq', NULL, '2023-05-20 18:06:43', '2023-05-20 18:06:43', NULL),
(4, 'Thanh ne', 'we@gmail.com', NULL, '$2y$10$1Hg4hvbgr41z0tY.TkhxkOCPiw84Hguv7ljxQafepQK68chWs3qfi', NULL, '2023-05-20 20:01:23', '2023-05-20 20:01:23', NULL),
(5, 'User', 'user1@gmail.com', NULL, '$2y$10$n8oGTnBmr.q3dm.ouWnEYu6ZlxXf8syE3kG8OrEYP1wLxy4HT4RnO', NULL, '2023-05-21 08:17:11', '2023-05-21 08:17:11', NULL),
(6, 'User2', 'User2@gmail.com', NULL, '$2y$10$yugVNrwuBeutfjigmcRg1umV/P4x0mm21Oo9yxvDMEOXQh/rFlNEu', NULL, '2023-05-21 08:19:06', '2023-05-21 08:19:06', '0'),
(7, 'admin', 'admin@gmail.com', NULL, '$2y$10$tXL7s6hqasQ.amW3In0h3u7rjVuHOJvFw3iUCvyj1kGB6L00hEChu', NULL, '2023-05-21 08:20:07', '2023-05-21 08:20:07', '1'),
(8, 'vinh', 'vinhcodeacademy@gmail.com', NULL, '$2y$10$cwcMxgSF9Mst8ePCS4vLLOAMeqI/ocoD17rXyEVd/KIyZ0qF4ccr2', NULL, '2023-05-23 23:01:15', '2023-05-23 23:01:15', '0'),
(9, 'vinh', 'vinh@gmail.com', NULL, '$2y$10$mULePLT7TQ8k3Ba1z3jbsupMzDR2rZCW9nBYyetZv9olOFDbDqZIa', NULL, '2023-05-24 07:53:41', '2023-05-24 07:53:41', '0'),
(10, 'detuvu', 'vu@mail.com', NULL, '$2y$10$cAwSv0PUhWgIX0vDf0bhieJ4ttpkiqroHw3z.4h1GLO07EYBnrVye', NULL, '2023-05-24 07:55:36', '2023-05-24 07:55:36', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
