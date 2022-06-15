-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 12:28 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distributor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retailer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product`, `distributor_id`, `points`, `price`, `units`, `retailer_id`, `created_at`, `updated_at`, `total`, `status`, `order_id`) VALUES
(11, 'Premium white Maize flour 2kg x 12pkts bale', '2', '100', '1400', '100', '3', '2022-03-15 07:17:57', '2022-03-15 15:03:11', '140000', '0', '209565'),
(12, 'Premium white Maize flour 2kg x 12pkts bale', '2', '100', '1400', '100', '3', '2022-03-15 07:19:24', '2022-03-15 15:03:11', '140000', '0', '209565'),
(13, 'Premium white Maize flour 2kg x 12pkts bale', '2', '100', '1400', '100', '3', '2022-03-15 15:02:42', '2022-03-15 15:03:11', '140000', '0', '552418');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Food and Beverages', '2022-03-03 14:59:10', '2022-03-03 14:59:10'),
(2, 'Stationaries', '2022-03-03 14:59:38', '2022-03-03 14:59:38'),
(3, 'Cleaning & Laundry', '2022-03-03 15:00:20', '2022-03-03 15:00:20'),
(4, 'Personal Care', '2022-03-03 15:00:47', '2022-03-03 15:00:47'),
(5, 'Fruits & Vegetables', '2022-03-03 15:01:19', '2022-03-03 15:01:19'),
(6, 'Dairy & Beef', '2022-03-03 15:01:50', '2022-03-03 15:01:50'),
(7, 'Cosmetics', '2022-03-03 15:02:38', '2022-03-03 15:02:38'),
(8, 'Household Goods', '2022-03-03 15:03:00', '2022-03-03 15:03:00'),
(9, 'Tobacco Products', '2022-03-03 15:04:22', '2022-03-03 15:04:22'),
(10, 'Health Products', '2022-03-03 15:05:42', '2022-03-03 15:05:42'),
(11, 'Alcohol and Cigarettes', '2022-03-03 15:06:21', '2022-03-03 15:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`id`, `region`, `county`, `created_at`, `updated_at`) VALUES
(1, 'Nairobi', 'Nairobi', '2022-03-03 15:50:33', '2022-03-03 15:50:33'),
(2, 'Eastern', 'Machakos', '2022-03-03 15:54:53', '2022-03-03 15:54:53'),
(3, 'Central', 'Murang\'a', '2022-03-03 15:55:37', '2022-03-03 15:55:37'),
(4, 'Western', 'Kakamega', '2022-03-03 15:55:58', '2022-03-03 15:55:58'),
(5, 'North Eastern', 'Mandela', '2022-03-03 15:56:15', '2022-03-03 15:56:15'),
(6, 'Nyanza', 'Kisumu', '2022-03-03 15:57:27', '2022-03-03 15:57:27'),
(7, 'Coast', 'Mombasa', '2022-03-03 15:57:50', '2022-03-03 15:57:50'),
(8, 'Rift Valley', 'Nandi', '2022-03-03 15:58:48', '2022-03-03 15:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `distributor_profiles`
--

CREATE TABLE `distributor_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliverystatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distributor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distributor_profiles`
--

INSERT INTO `distributor_profiles` (`id`, `store_name`, `category`, `region`, `county`, `town`, `location_description`, `deliverystatus`, `working_days`, `distributor_id`, `created_at`, `updated_at`, `contact1`, `contact2`, `image`, `store_description`) VALUES
(1, 'Mkulima Wholesalers', 'Food and Beverages', 'Nairobi', 'Nairobi', 'westlands', 'adfsd', 'no', '[\"Monday\",\"Sunday\"]', '2', '2022-03-06 13:29:40', '2022-03-06 13:29:40', 'westlands', '543534', '1st.JPG', 'We deal with all food and beverage products.we sell cereals like maize,beans,arrow roots among others.'),
(2, 'Mawazo Distributors', 'Food and Beverages', 'Nairobi', 'Nairobi', 'westlands', 'dsf', 'no', '[\"Tuesday\",\"Wednesday\"]', '4', '2022-03-06 16:37:44', '2022-03-06 16:37:44', '1234567890', '1234567890', '2nd.JPG', 'We deal with all food and beverage products.we sell cereals like maize,beans,arrow roots among others.');

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
-- Table structure for table `favourite_distributors`
--

CREATE TABLE `favourite_distributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distributor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `store_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourite_distributors`
--

INSERT INTO `favourite_distributors` (`id`, `store_name`, `category`, `region`, `county`, `town`, `distributor_id`, `user_id`, `created_at`, `updated_at`, `store_description`) VALUES
(12, 'Mawazo Distributors', 'Food and Beverages', 'Nairobi', 'Nairobi', 'westlands', '4', '3', '2022-03-10 11:27:16', '2022-03-10 11:27:16', 'We deal with all food and beverage products.we sell cereals like maize,beans,arrow roots among others.'),
(13, 'Mkulima Wholesalers', 'Food and Beverages', 'Nairobi', 'Nairobi', 'westlands', '2', '3', '2022-03-10 13:21:11', '2022-03-10 13:21:11', 'We deal with all food and beverage products.we sell cereals like maize,beans,arrow roots among others.');

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
(5, '2022_03_03_175403_create_categories_table', 2),
(6, '2022_03_03_181553_create_regions_table', 3),
(7, '2022_03_03_182451_create_regions_table', 4),
(8, '2022_03_03_184558_create_counties_table', 5),
(9, '2022_03_03_192823_create_towns_table', 6),
(10, '2022_03_04_045404_create_retailers_table', 7),
(11, '2022_03_04_110428_create_distributor_profiles_table', 8),
(12, '2022_03_04_193706_add_contact1_to_distributor_profiles', 8),
(13, '2022_03_05_174828_create_products_table', 8),
(14, '2022_03_09_104619_create_favourite_distributors_table', 9),
(15, '2022_03_09_191130_add_user_id_to_favourite_distributors_table', 10),
(16, '2022_03_10_091606_create_favourite_distributors_table', 11),
(17, '2022_03_10_094308_add_store_description_to_favourite_distributors_table', 12),
(18, '2022_03_10_110319_add_distributor_id_to_products_table', 13),
(19, '2022_03_10_115500_products', 14),
(20, '2022_03_10_192521_create_carts_table', 15),
(21, '2022_03_14_160552_create_products_table', 15),
(22, '2022_03_14_173448_add_total_to_carts_table', 16),
(23, '2022_03_14_200307_create_orders_table', 17),
(24, '2022_03_14_201743_add_status_to_carts_table', 18),
(25, '2022_03_14_211206_add_order_id_to_carts_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `distributor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retailer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `distributor_id`, `retailer_id`, `status`, `order_id`, `created_at`, `updated_at`) VALUES
(23, '2', '3', '0', '552418', '2022-03-15 07:47:45', '2022-03-15 07:47:45'),
(24, '2', '3', '1', '209565', '2022-03-15 15:03:11', '2022-03-15 15:03:11');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distributor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `distributor_id`, `points`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Premium white Maize flour 2kg x 12pkts bale', '2', '100', '1400', 'b5.jpg', '2022-03-14 13:13:30', '2022-03-14 13:13:30'),
(2, 'weraw  werwe werwe', '5', '200', '2000', 'b4.jpg', '2022-03-14 13:15:32', '2022-03-14 13:15:32'),
(3, 'sukaroi', '2', '60', '1000', 'b6.jpg', '2022-03-14 13:32:32', '2022-03-14 13:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region`, `created_at`, `updated_at`) VALUES
(2, 'Nairobi', '2022-03-03 15:30:59', '2022-03-03 15:30:59'),
(3, 'Central', '2022-03-03 15:31:09', '2022-03-03 15:31:09'),
(4, 'Coast', '2022-03-03 15:31:16', '2022-03-03 15:31:16'),
(5, 'Eastern', '2022-03-03 15:31:23', '2022-03-03 15:31:23'),
(6, 'North Eastern', '2022-03-03 15:31:33', '2022-03-03 15:31:33'),
(7, 'Nyanza', '2022-03-03 15:31:43', '2022-03-03 15:31:43'),
(8, 'Rift Valley', '2022-03-03 15:31:56', '2022-03-03 15:31:56'),
(9, 'Western', '2022-03-03 15:32:02', '2022-03-03 15:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `retailers`
--

CREATE TABLE `retailers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile1` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retailer_id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `retailers`
--

INSERT INTO `retailers` (`id`, `store`, `category`, `region`, `county`, `town`, `location_description`, `mobile1`, `mobile2`, `store_description`, `image`, `retailer_id`, `created_at`, `updated_at`) VALUES
(1, 'Wema Wholesallers', 'Personal Care', 'Nairobi', 'Nairobi', 'westlands', 'We are located at westlands near Tmall towers opposite Sarova Dishes', '0705030613', '0705030613', 'We deal with households', 'se.PNG', '3', '2022-03-04 14:40:49', '2022-03-04 14:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `towns`
--

CREATE TABLE `towns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `county` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`id`, `county`, `region`, `town`, `created_at`, `updated_at`) VALUES
(1, 'Murang\'a', 'Central', 'Murang\'a', '2022-03-04 01:28:49', '2022-03-04 01:28:49'),
(2, 'Murang\'a', 'Central', 'Kenol', '2022-03-04 01:29:07', '2022-03-04 01:29:07'),
(3, 'Machakos', 'Eastern', 'Athiriver', '2022-03-04 01:29:20', '2022-03-04 01:29:20'),
(4, 'Machakos', 'Eastern', 'Mwala', '2022-03-04 01:29:32', '2022-03-04 01:29:32'),
(5, 'Nairobi', 'Nairobi', 'Westlands', '2022-03-04 01:29:53', '2022-03-04 01:29:53'),
(6, 'Nairobi', 'Nairobi', 'Embakasi', '2022-03-04 01:30:02', '2022-03-04 01:30:02'),
(7, 'Kakamega', 'Western', 'Kakamega', '2022-03-04 01:30:31', '2022-03-04 01:30:31'),
(8, 'Kakamega', 'Western', 'Vicotia', '2022-03-04 01:30:49', '2022-03-04 01:30:49'),
(9, 'Mandela', 'North Eastern', 'Abojia', '2022-03-04 01:31:11', '2022-03-04 01:31:11'),
(10, 'Mandela', 'North Eastern', 'Mandera', '2022-03-04 01:31:23', '2022-03-04 01:31:23'),
(11, 'Kisumu', 'Nyanza', 'Mumias', '2022-03-04 01:31:39', '2022-03-04 01:31:39'),
(12, 'Mombasa', 'Coast', 'Mwembe Tayari', '2022-03-04 01:32:01', '2022-03-04 01:32:01'),
(13, 'Mombasa', 'Coast', 'Pwani', '2022-03-04 01:32:10', '2022-03-04 01:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userName`, `mobile`, `userType`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mutie Lawrence', 'lawrence', '254708399315', '1', 'nduku1234@isuzu.co.ke', NULL, '$2y$10$JLCuuRQQrbhElvDT4mD55uzpAutsYEXD8HUbGQs.QGzi4sVbgvRCW', NULL, '2022-03-02 13:46:46', '2022-03-02 13:46:46'),
(2, 'Muema Kyeze', 'kyeze', '254708399315', '1', 'odhiambo@isuzu.com', NULL, '$2y$10$QOr/JTs6pMHAJVvghUMwf.JPsXRh.243SZVLFmPFLDpPqWP1BJzdW', NULL, '2022-03-02 13:51:51', '2022-03-02 13:51:51'),
(3, 'George Muema', 'kinara', '254705030613', '2', 'george@gmail.com', NULL, '$2y$10$xHdnfoE0b1ZCsZeR13TLY.HpMRy0tv1xtQIGjMz73YlhgJ4uMPcNi', NULL, '2022-03-02 15:31:06', '2022-03-02 15:31:06'),
(4, 'Eric Kasanza', 'kasanza', '254799494949', '2', 'kasanza@gmail.com', NULL, '$2y$10$eCaqdp746bvJq1y3RvwUUOpOf8fgoXk2D7.ExkWF/26EKvasl/bJi', NULL, '2022-03-02 15:34:44', '2022-03-02 15:34:44'),
(5, 'admin', 'admin', '254656565656', '0', 'admin@gmail.com', NULL, '$2y$10$lsYRziPZts5jYeY4H.nu/OiHg5k6bSZ.y2QoZOEuwnjD/0fo4dp1K', NULL, '2022-03-02 15:36:09', '2022-03-02 15:36:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributor_profiles`
--
ALTER TABLE `distributor_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourite_distributors`
--
ALTER TABLE `favourite_distributors`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailers`
--
ALTER TABLE `retailers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `towns`
--
ALTER TABLE `towns`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `distributor_profiles`
--
ALTER TABLE `distributor_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourite_distributors`
--
ALTER TABLE `favourite_distributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `retailers`
--
ALTER TABLE `retailers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `towns`
--
ALTER TABLE `towns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
