-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 03:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`, `status`) VALUES
(85, 'Electrican', '1653714879.jpg', '2022-05-27 23:44:39', '2022-05-27 23:44:39', 1),
(99, 'clothes', '1654602985.jpg', '2022-06-07 06:26:25', '2022-06-07 06:26:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `number`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'shyam', 'admin@gmail.com', '1234567890', 'i am good devloper', '2022-06-06 07:56:24', '2022-06-06 07:56:24');

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
(5, '2022_05_13_065645_create_admins_table', 1),
(6, '2022_05_13_091325_create_students_table', 2),
(7, '2022_05_13_113447_create_students_table', 3),
(8, '2022_05_18_092338_create_categories_table', 4),
(9, '2022_05_21_091447_create_sub_categories_table', 5),
(10, '2022_05_23_103646_create_products_table', 6),
(11, '2022_05_23_121646_create_products_table', 7),
(12, '2022_05_27_070418_create_fronts_table', 8),
(13, '2022_05_28_085453_create_carts_table', 8),
(14, '2022_05_30_111412_create_carts_table', 9),
(15, '2022_06_01_075933_create_orders_table', 10),
(16, '2022_06_01_105646_create_ragisters_table', 10),
(17, '2022_06_02_082244_create_order_items_table', 11),
(18, '2022_06_04_082039_create_wishlists_table', 12),
(19, '2022_06_06_131533_create_contacts_table', 13),
(20, '2022_06_07_054226_create_slides_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `fname`, `lname`, `email`, `phone`, `add`, `country`, `code`, `city`, `status`, `payment_mode`, `payment_id`) VALUES
(137, '2022-06-06 04:21:53', '2022-06-06 04:21:53', 'rohit', 'lodwal', 'rohit@gmail.com', '1234567890', 'ujjain', 'india', '456010', 'ujjain', 1, 'rezorpay payment', 'pay_JeALuEfZak1tiI'),
(138, '2022-06-06 04:41:12', '2022-06-06 04:41:12', 'mohan', 'kumar', 'rohitlodwalmspl@gmail.com', '1234567890', 'ujjain', 'india', '23456', 'ujjain', 1, 'rezorpay payment', 'pay_JeAgISdp6181D7'),
(139, '2022-06-06 05:42:44', '2022-06-06 05:42:44', 'ravi', 'malviya', 'ravi@gmail.com', '0987654321', 'ujjain', 'india', '456010', 'ujjain', 1, 'rezorpay payment', 'pay_JeBjIQY2qE2aWe'),
(140, '2022-06-06 05:52:21', '2022-06-06 05:52:21', 'rohit', 'lodwal', 'admin@gmail.com', '1234567890', 'ujjain', 'india', '23456', 'ujjain', 1, 'rezorpay payment', 'pay_JeBtSUnnjENbYM'),
(141, '2022-06-06 08:09:55', '2022-06-06 08:09:55', 'mukesh', 'ram', 'mukesh@gmail.com', '9691125611', 'ujjain', 'india', '23456', 'ujjain', 1, 'rezorpay payment', 'pay_JeEEgGlYNlpeik'),
(142, '2022-06-08 06:21:13', '2022-06-08 06:21:13', 'mohan', 'shyam', 'mohan@gmail.com', '96911256115', 'ujjain', 'india', '456010', 'ujjain', 1, 'rezorpay payment', 'pay_JezSBeN1Ye8KVK'),
(143, '2022-06-09 02:44:08', '2022-06-09 02:44:08', 'ram', 'sharma', 'ram@gmail.com', '8889414581', 'ujjain', 'india', '09876', 'ujjain', 1, 'rezorpay payment', 'pay_JfKHz3Ft50ocV2'),
(144, '2022-06-09 02:56:04', '2022-06-09 02:56:04', 'rohit', 'kumar', 'rohit@gmail.com', '96911256115', 'ujjain', 'india', '456010', 'ujjain', 1, 'rezorpay payment', 'pay_JfKUbugrHj0VUl'),
(145, '2022-06-09 02:56:36', '2022-06-09 02:56:36', 'rohit', 'kumar', 'rohit@gmail.com', '96911256115', 'ujjain', 'india', '456010', 'ujjain', 1, 'rezorpay payment', 'pay_JfKVBRZMo2nlVC'),
(146, '2022-06-09 02:58:02', '2022-06-09 02:58:02', 'rohit', 'kumar', 'rohit@gmail.com', '96911256115', 'ujjain', 'india', '456010', 'ujjain', 1, 'rezorpay payment', 'pay_JfKWgmYzfL0DM4'),
(147, '2022-06-09 02:59:38', '2022-06-09 02:59:38', 'manish', 'kumar', 'rohitlodwalmspl@gmail.com', '9691125611', 'ujjain', 'india', '43434', 'ujjain', 1, 'rezorpay payment', 'pay_JfKYOAxrq60OEf'),
(148, '2022-06-09 03:19:46', '2022-06-09 03:19:46', 'manish', 'lodwal', 'admin@gmail.com', '96911256115', 'ujjain', 'india', '3223444', 'ujjain', 1, 'rezorpay payment', 'pay_JfKteRNQ7gGDg2'),
(149, '2022-06-09 03:20:10', '2022-06-09 03:20:10', 'manish', 'lodwal', 'admin@gmail.com', '96911256115', 'ujjain', 'india', '3223444', 'ujjain', 1, 'rezorpay payment', 'pay_JfKu2izyhTqm4v'),
(150, '2022-06-09 03:20:46', '2022-06-09 03:20:46', 'manish', 'lodwal', 'admin@gmail.com', '96911256115', 'ujjain', 'india', '3223444', 'ujjain', 1, 'rezorpay payment', 'pay_JfKuiYyI5IXPQW'),
(151, '2022-06-09 03:21:48', '2022-06-09 03:21:48', 'rohit', 'lodwal', 'admin@gmail.com', '96911256115', 'ujjain', 'india', '33233', 'ujjain', 1, 'rezorpay payment', 'pay_JfKvoFDI10m2m4'),
(152, '2022-06-09 03:22:05', '2022-06-09 03:22:05', 'rohit', 'lodwal', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '33233', 'ujjain', 1, 'rezorpay payment', 'pay_JfKw5hdzoEB1Nf'),
(153, '2022-06-09 03:22:45', '2022-06-09 03:22:45', 'rohit', 'lodwal', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '33233', 'ujjain', 1, 'rezorpay payment', 'pay_JfKwncRFmTZpoi'),
(154, '2022-06-09 03:23:11', '2022-06-09 03:23:11', 'rohit', 'lodwal', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '33233', 'ujjain', 1, 'rezorpay payment', 'pay_JfKxGS5dLVaIo4'),
(155, '2022-06-09 03:24:46', '2022-06-09 03:24:46', 'manish', 'kumar', 'rohit@gmail.com', '96911256115', 'ujjain', 'india', '3434244', 'ujjain', 1, 'rezorpay payment', 'pay_JfKyvoGWNKnUbQ'),
(156, '2022-06-09 03:25:58', '2022-06-09 03:25:58', 'manish', 'kumar', 'rohit@gmail.com', '96911256115', 'ujjain', 'india', '3434244', 'ujjain', 1, 'rezorpay payment', 'pay_JfL0D3IFgvFbB6'),
(157, '2022-06-09 03:26:40', '2022-06-09 03:26:40', 'manish', 'kumar', 'rohit@gmail.com', '96911256115', 'ujjain', 'india', '3434244', 'ujjain', 1, 'rezorpay payment', 'pay_JfL0vb3CAhP3iI'),
(158, '2022-06-09 03:27:02', '2022-06-09 03:27:02', 'manish', 'kumar', 'rohit@gmail.com', '96911256115', 'ujjain', 'india', '3434244', 'ujjain', 1, 'rezorpay payment', 'pay_JfL1Kpe7yrvBNZ'),
(159, '2022-06-09 03:27:32', '2022-06-09 03:27:32', 'rohit', 'lodwal', 'admin@gmail.com', '96911256115', 'ujjain', 'india', '43', 'ujjain', 1, 'rezorpay payment', 'pay_JfL1rlKkRYsRTG'),
(160, '2022-06-09 07:00:04', '2022-06-09 07:00:04', 'rohit', 'lodwal', 'rohit@gmail.com', '4444444', 'ujjain', 'india', '3333', 'ujjain', 1, '0', '0'),
(161, '2022-06-09 07:05:21', '2022-06-09 07:05:21', 'rohit', 'lodwal', 'rohitlodwalmspl@gmail.com', '9691125611', 'ujjain', 'india', '3456', 'ujjain', 1, '0', '0'),
(162, '2022-06-09 07:16:22', '2022-06-09 07:16:22', 'shyam', 'ram', 'shyam@gmail.com', '9691125611', 'ujjain', 'india', '456010', 'ujjain', 1, '0', '0'),
(163, '2022-06-09 08:02:34', '2022-06-09 08:02:34', 'manish', 'kumar', 'rohit@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(164, '2022-06-09 08:03:25', '2022-06-09 08:03:25', 'manish', 'kumar', 'rohit@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(165, '2022-06-09 08:05:30', '2022-06-09 08:05:30', 'mohan', 'kumar', 'rohit@gmail.com', '9691125611', 'ujjain', 'india', '4544', 'ujjain', 1, '0', '0'),
(166, '2022-06-09 08:06:25', '2022-06-09 08:06:25', 'shyam', 'ram', 'nasrullahsheikh1998@gmail.com', '96911256115', 'ujjain', 'india', '666', 'ujjain', 1, '0', '0'),
(167, '2022-06-09 08:08:27', '2022-06-09 08:08:27', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '5555', 'ujjain', 1, '0', '0'),
(168, '2022-06-10 01:18:03', '2022-06-10 01:18:03', 'mohan', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '7777', 'ujjain', 1, '0', '0'),
(169, '2022-06-10 01:18:25', '2022-06-10 01:18:25', 'mohan', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '7777', 'ujjain', 1, '0', '0'),
(170, '2022-06-10 01:19:05', '2022-06-10 01:19:05', 'mohan', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '7777', 'ujjain', 1, '0', '0'),
(171, '2022-06-10 01:19:41', '2022-06-10 01:19:41', 'mohan', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '7777', 'ujjain', 1, '0', '0'),
(172, '2022-06-10 01:19:52', '2022-06-10 01:19:52', 'mohan', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '7777', 'ujjain', 1, '0', '0'),
(173, '2022-06-10 01:22:37', '2022-06-10 01:22:37', 'mohan', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '7777', 'ujjain', 1, '0', '0'),
(174, '2022-06-10 01:32:26', '2022-06-10 01:32:26', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(175, '2022-06-10 01:33:39', '2022-06-10 01:33:39', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(176, '2022-06-10 01:34:18', '2022-06-10 01:34:18', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(177, '2022-06-10 01:34:46', '2022-06-10 01:34:46', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(178, '2022-06-10 01:35:22', '2022-06-10 01:35:22', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(179, '2022-06-10 01:36:11', '2022-06-10 01:36:11', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(180, '2022-06-10 01:36:22', '2022-06-10 01:36:22', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(181, '2022-06-10 01:36:55', '2022-06-10 01:36:55', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(182, '2022-06-10 01:37:08', '2022-06-10 01:37:08', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(183, '2022-06-10 01:37:55', '2022-06-10 01:37:55', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '44444', 'ujjain', 1, '0', '0'),
(184, '2022-06-10 01:39:07', '2022-06-10 01:39:07', 'mohan', 'kumar', 'rohit@gmail.com', '9691125611', 'ujjain', 'india', '4444', 'ujjain', 1, '0', '0'),
(185, '2022-06-10 02:18:14', '2022-06-10 02:18:14', 'manish', 'lodwal', 'rohitlodwalmspl@gmail.com', '9691125611', 'ujjain', 'india', '566789', 'ujjain', 1, '0', '0'),
(186, '2022-06-10 03:48:22', '2022-06-10 03:48:22', 'rohit', 'kumar', 'rohit@gmail.com', '96911256115', 'ujjain', 'india', '4566', 'ujjain', 1, '0', '0'),
(187, '2022-06-11 00:00:32', '2022-06-11 00:00:32', 'manish', 'lodwal', 'rohit@gmail.com', '9691125611', 'ujjain', 'india', '666', 'ujjain', 1, '0', '0'),
(188, '2022-06-11 00:02:28', '2022-06-11 00:02:28', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '5555', 'ujjain', 1, '0', '0'),
(189, '2022-06-11 00:12:54', '2022-06-11 00:12:54', 'manish', 'kumar', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '555', 'ujjain', 1, '0', '0'),
(190, '2022-06-11 07:45:16', '2022-06-11 07:45:16', 'manish', 'ram', 'admin@gmail.com', '9691125611', 'ujjain', 'india', '5555', 'ujjain', 1, '0', '0'),
(191, '2022-06-11 07:47:17', '2022-06-11 07:47:17', 'manish', 'kumar', 'msn987@gmail', '9691125611', 'ujjain', 'india', '4444', 'ujjain', 1, '0', '0'),
(192, '2022-06-11 07:47:31', '2022-06-11 07:47:31', 'manish', 'kumar', 'msn987@gmail', '9691125611', 'ujjain', 'india', '4444', 'ujjain', 1, '0', '0'),
(193, '2022-06-11 07:59:09', '2022-06-11 07:59:09', 'rohit', 'lodwal', 'rohit@gmail.com', '9691125611', 'ujjain', 'india', '777', 'ujjain', 1, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`, `updated_at`, `status`) VALUES
(1, '124', '45', '1', '5000', '2022-06-03 00:17:07', '2022-06-03 00:17:07', 1),
(2, '124', '43', '4', '15000', '2022-06-03 00:17:07', '2022-06-03 00:17:07', 1),
(3, '125', '48', '1', '3000', '2022-06-03 07:49:02', '2022-06-03 07:49:02', 1),
(4, '126', '47', '1', '20000', '2022-06-06 03:45:12', '2022-06-06 03:45:12', 1),
(5, '127', '47', '1', '20000', '2022-06-06 03:46:45', '2022-06-06 03:46:45', 1),
(6, '128', '47', '1', '20000', '2022-06-06 03:50:40', '2022-06-06 03:50:40', 1),
(7, '129', '47', '1', '20000', '2022-06-06 03:52:15', '2022-06-06 03:52:15', 1),
(8, '130', '47', '1', '20000', '2022-06-06 03:54:42', '2022-06-06 03:54:42', 1),
(9, '131', '47', '1', '20000', '2022-06-06 03:55:44', '2022-06-06 03:55:44', 1),
(10, '132', '47', '1', '20000', '2022-06-06 03:58:33', '2022-06-06 03:58:33', 1),
(11, '133', '47', '1', '20000', '2022-06-06 04:00:17', '2022-06-06 04:00:17', 1),
(12, '134', '47', '1', '20000', '2022-06-06 04:07:45', '2022-06-06 04:07:45', 1),
(13, '135', '47', '1', '20000', '2022-06-06 04:11:19', '2022-06-06 04:11:19', 1),
(14, '136', '47', '1', '20000', '2022-06-06 04:15:36', '2022-06-06 04:15:36', 1),
(15, '137', '47', '1', '20000', '2022-06-06 04:21:53', '2022-06-06 04:21:53', 1),
(16, '138', '47', '1', '20000', '2022-06-06 04:41:12', '2022-06-06 04:41:12', 1),
(17, '139', '47', '1', '20000', '2022-06-06 05:42:44', '2022-06-06 05:42:44', 1),
(18, '140', '47', '1', '20000', '2022-06-06 05:52:21', '2022-06-06 05:52:21', 1),
(19, '141', '43', '2', '15000', '2022-06-06 08:09:55', '2022-06-06 08:09:55', 1),
(20, '142', '43', '2', '15000', '2022-06-08 06:21:14', '2022-06-08 06:21:14', 1),
(21, '143', '47', '3', '20000', '2022-06-09 02:44:08', '2022-06-09 02:44:08', 1),
(22, '144', '47', '3', '20000', '2022-06-09 02:56:06', '2022-06-09 02:56:06', 1),
(23, '145', '47', '3', '20000', '2022-06-09 02:56:36', '2022-06-09 02:56:36', 1),
(24, '146', '47', '3', '20000', '2022-06-09 02:58:02', '2022-06-09 02:58:02', 1),
(25, '147', '47', '3', '20000', '2022-06-09 02:59:39', '2022-06-09 02:59:39', 1),
(26, '148', '47', '3', '20000', '2022-06-09 03:19:47', '2022-06-09 03:19:47', 1),
(27, '149', '47', '3', '20000', '2022-06-09 03:20:10', '2022-06-09 03:20:10', 1),
(28, '150', '47', '3', '20000', '2022-06-09 03:20:47', '2022-06-09 03:20:47', 1),
(29, '151', '47', '3', '20000', '2022-06-09 03:21:48', '2022-06-09 03:21:48', 1),
(30, '152', '47', '3', '20000', '2022-06-09 03:22:05', '2022-06-09 03:22:05', 1),
(31, '153', '47', '3', '20000', '2022-06-09 03:22:46', '2022-06-09 03:22:46', 1),
(32, '154', '47', '3', '20000', '2022-06-09 03:23:11', '2022-06-09 03:23:11', 1),
(33, '155', '47', '3', '20000', '2022-06-09 03:24:46', '2022-06-09 03:24:46', 1),
(34, '156', '47', '3', '20000', '2022-06-09 03:25:58', '2022-06-09 03:25:58', 1),
(35, '157', '47', '3', '20000', '2022-06-09 03:26:41', '2022-06-09 03:26:41', 1),
(36, '158', '47', '3', '20000', '2022-06-09 03:27:02', '2022-06-09 03:27:02', 1),
(37, '159', '47', '3', '20000', '2022-06-09 03:27:32', '2022-06-09 03:27:32', 1),
(38, '160', '47', '1', '20000', '2022-06-09 07:00:04', '2022-06-09 07:00:04', 1),
(39, '161', '47', '1', '20000', '2022-06-09 07:05:21', '2022-06-09 07:05:21', 1),
(40, '162', '53', '1', '1000', '2022-06-09 07:16:23', '2022-06-09 07:16:23', 1),
(41, '163', '48', '3', '3000', '2022-06-09 08:02:34', '2022-06-09 08:02:34', 1),
(42, '164', '48', '3', '3000', '2022-06-09 08:03:25', '2022-06-09 08:03:25', 1),
(43, '165', '48', '3', '3000', '2022-06-09 08:05:30', '2022-06-09 08:05:30', 1),
(44, '166', '48', '3', '3000', '2022-06-09 08:06:25', '2022-06-09 08:06:25', 1),
(45, '167', '48', '3', '3000', '2022-06-09 08:08:27', '2022-06-09 08:08:27', 1),
(46, '168', '48', '2', '3000', '2022-06-10 01:18:03', '2022-06-10 01:18:03', 1),
(47, '169', '48', '2', '3000', '2022-06-10 01:18:25', '2022-06-10 01:18:25', 1),
(48, '170', '48', '2', '3000', '2022-06-10 01:19:05', '2022-06-10 01:19:05', 1),
(49, '171', '48', '2', '3000', '2022-06-10 01:19:41', '2022-06-10 01:19:41', 1),
(50, '172', '48', '2', '3000', '2022-06-10 01:19:52', '2022-06-10 01:19:52', 1),
(51, '173', '48', '2', '3000', '2022-06-10 01:22:38', '2022-06-10 01:22:38', 1),
(52, '174', '48', '2', '3000', '2022-06-10 01:32:26', '2022-06-10 01:32:26', 1),
(53, '175', '48', '2', '3000', '2022-06-10 01:33:39', '2022-06-10 01:33:39', 1),
(54, '176', '48', '2', '3000', '2022-06-10 01:34:18', '2022-06-10 01:34:18', 1),
(55, '177', '48', '2', '3000', '2022-06-10 01:34:46', '2022-06-10 01:34:46', 1),
(56, '178', '48', '2', '3000', '2022-06-10 01:35:22', '2022-06-10 01:35:22', 1),
(57, '180', '48', '2', '3000', '2022-06-10 01:36:22', '2022-06-10 01:36:22', 1),
(58, '181', '48', '2', '3000', '2022-06-10 01:36:55', '2022-06-10 01:36:55', 1),
(59, '182', '48', '2', '3000', '2022-06-10 01:37:08', '2022-06-10 01:37:08', 1),
(60, '183', '48', '2', '3000', '2022-06-10 01:37:55', '2022-06-10 01:37:55', 1),
(61, '184', '53', '1', '1000', '2022-06-10 01:39:08', '2022-06-10 01:39:08', 1),
(62, '185', '52', '6', '1500', '2022-06-10 02:18:14', '2022-06-10 02:18:14', 1),
(63, '187', '47', '2', '20000', '2022-06-11 00:00:32', '2022-06-11 00:00:32', 1),
(64, '188', '47', '1', '20000', '2022-06-11 00:02:28', '2022-06-11 00:02:28', 1),
(65, '189', '47', '3', '20000', '2022-06-11 00:12:54', '2022-06-11 00:12:54', 1),
(66, '190', '48', '2', '3000', '2022-06-11 07:45:16', '2022-06-11 07:45:16', 1),
(67, '193', '48', '1', '3000', '2022-06-11 07:59:10', '2022-06-11 07:59:10', 1);

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
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `qty` int(11) NOT NULL,
  `trending` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `name`, `brand`, `price`, `sell_price`, `image`, `created_at`, `updated_at`, `status`, `qty`, `trending`) VALUES
(42, 85, 81, 'Core i5 11th Gen - (16 GB/512 GB SSD)', 'HP', '150000', '16000', '1654755076.jpg', '2022-05-28 02:29:18', '2022-06-09 00:41:16', 1, 0, '1'),
(43, 85, 82, 'SAMSUNG Galaxy J7 Prime (Gold, 32 GB)  (3 GB RAM)', 'Sumsung', '15000', '17000', '1654242340.jpg', '2022-05-28 02:30:47', '2022-06-03 02:15:40', 1, 0, ''),
(44, 85, 86, 'APPLE iPhone 11 Pro (Midnight Green, 64 GB)', 'Iphone', '50000', '40000', '1654242421.jpg', '2022-05-28 02:32:05', '2022-06-03 02:17:01', 1, 0, ''),
(47, 85, 87, 'LG-24 inch Full HD', 'LG', '20000', '19000', '1654755127.jpg', '2022-06-03 01:57:44', '2022-06-09 00:42:07', 1, 5, '1'),
(48, 85, 88, '87036PL02W Analog Watch', 'sonata', '3000', '2000', '1654254429.jpg', '2022-06-03 02:14:09', '2022-06-10 01:22:38', 1, 1, ''),
(52, 85, 89, 'videogame', 'sony', '1500', '1300', '1654602881.jpg', '2022-06-07 06:24:41', '2022-06-07 06:24:41', 1, 3, ''),
(53, 99, 90, 'new falixible jeans top modal', 'nick', '1000', '900', '1654603128.jpg', '2022-06-07 06:28:48', '2022-06-07 06:28:48', 1, 4, ''),
(54, 99, 91, 'new  party wear tie', 'nick', '500', '400', '1654755104.jpg', '2022-06-07 06:29:55', '2022-06-09 00:41:44', 1, 4, '1'),
(55, 99, 92, 'half T-shirt t', 'nick', '1200', '1000', '1654603245.jpg', '2022-06-07 06:30:45', '2022-06-07 06:30:45', 1, 1, ''),
(56, 99, 93, 'Bleazer coat party wear', 'nick', '5000', '4000', '1654603312.jpg', '2022-06-07 06:31:52', '2022-06-07 06:31:52', 1, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `ragisters`
--

CREATE TABLE `ragisters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ragisters`
--

INSERT INTO `ragisters` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `status`) VALUES
(7, 'rohit ', 'rohit@gmail.com', 111, '2022-06-03 01:04:08', '2022-06-03 01:04:08', 1),
(8, 'rohit lodwal', 'msn987@gmail', 123, '2022-06-06 06:19:13', '2022-06-06 06:19:13', 1),
(9, 'name', 'name@gmail.com', 123, '2022-06-10 00:56:05', '2022-06-10 00:56:05', 1),
(10, 'rahul', 'rahul@gmail.com', 2341, '2022-06-11 01:00:00', '2022-06-11 01:00:00', 1),
(11, 'aaa', 'aaa@gmail.com', 9, '2022-06-11 02:42:45', '2022-06-11 02:42:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide`, `price`, `title`, `image`, `created_at`, `updated_at`, `status`) VALUES
(5, 'Watch', '1200', 'Compra todos tus productos Smart por internet.', '1654587957.jpg', '2022-06-07 02:15:57', '2022-06-07 02:15:57', 1),
(6, 'Exclusive Furniture Packages', '200', 'Exclusive Furniture Packages to Suit every need.', '1654588056.jpg', '2022-06-07 02:17:36', '2022-06-13 07:40:19', 1),
(7, 'Extra 25% Off', 'Use Code: #FA6868', 'TRansparent  Straps', '1654588154.jpg', '2022-06-07 02:19:14', '2022-06-13 07:48:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cource` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `section`, `cource`, `gender`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rohit', 'A', 'Bcom', 'male', 'none.png', 1, '2022-05-13 06:17:07', '2022-05-16 01:29:07'),
(2, 'shyam', 'A', 'bsc', 'Male', 'none.png', 0, '2022-05-13 06:25:05', '2022-05-13 07:10:40'),
(3, 'rohit lodwal', 'A', 'bca', 'Male', 'none.png', 0, '2022-05-14 04:59:26', '2022-05-14 04:59:37'),
(7, 'Rohit@gmail.com', 'c', 'Bsc', 'male', '1652775884.jpg', 1, '2022-05-15 23:53:11', '2022-05-17 02:54:44'),
(9, 'Shyam', 'c', 'Bca', 'female', '1652775905.jpg', 1, '2022-05-16 01:53:40', '2022-05-17 02:55:05'),
(13, 'Rohit Lodwal', 'A', 'Bsc', 'male', '1652701081.jpg', 1, '2022-05-16 03:58:01', '2022-05-16 06:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `image`, `created_at`, `updated_at`, `status`) VALUES
(81, '85', 'laptop', '1653724321.jpg', '2022-05-28 02:22:01', '2022-05-28 02:22:01', 1),
(82, '85', 'mobile', '1653724357.jpg', '2022-05-28 02:22:37', '2022-05-28 02:22:37', 1),
(85, 'Electrican', 'Headphone', '1653724437.jpg', '2022-05-28 02:23:57', '2022-06-10 03:06:26', 1),
(87, '85', 'LCD', '1654241050.jpg', '2022-06-03 01:54:10', '2022-06-03 01:54:10', 1),
(88, '85', 'watch', '1654242099.jpg', '2022-06-03 02:11:39', '2022-06-03 02:11:39', 1),
(89, 'Electrican', 'videogame', '1654602831.jpg', '2022-06-07 06:23:51', '2022-06-13 07:38:24', 1),
(90, '99', 'jeans', '1654603014.jpg', '2022-06-07 06:26:54', '2022-06-07 06:26:54', 1),
(91, '99', 'tie', '1654603043.jpg', '2022-06-07 06:27:23', '2022-06-07 06:27:23', 1),
(92, '99', 'half T-shirt', '1654603062.jpg', '2022-06-07 06:27:42', '2022-06-07 06:27:42', 1),
(96, '99', 'women', '1654849521.jpg', '2022-06-10 02:55:21', '2022-06-10 02:55:21', 1);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'rohit', 'rohit@gmail.com', NULL, '12345', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `ragisters`
--
ALTER TABLE `ragisters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `ragisters`
--
ALTER TABLE `ragisters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
