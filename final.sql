-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 05:52 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `status`, `isdelete`, `user_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'نور', 'noor@gmail.com', 1, 0, 1, 1, 1, '2020-02-23 22:00:00', '2020-02-24 16:35:35'),
(2, 'محمد', 'mh@gmail.com', 1, 0, 3, 1, NULL, '2020-04-30 09:02:27', '2020-04-30 09:02:27'),
(3, 'ahmed', 'ahmed@gmail.com', 1, 0, 5, 1, NULL, '2020-06-07 05:41:59', '2020-06-07 05:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `admin_link`
--

CREATE TABLE `admin_link` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_link`
--

INSERT INTO `admin_link` (`id`, `admin_id`, `link_id`, `created_at`, `updated_at`) VALUES
(141, 1, 1, '2020-06-06 21:00:00', NULL),
(142, 1, 6, '2020-06-06 21:00:00', NULL),
(143, 1, 7, '2020-06-06 21:00:00', NULL),
(144, 1, 9, '2020-06-06 21:00:00', NULL),
(145, 1, 10, '2020-06-06 21:00:00', NULL),
(146, 1, 11, '2020-06-06 21:00:00', NULL),
(147, 1, 12, '2020-06-06 21:00:00', NULL),
(148, 1, 13, '2020-06-06 21:00:00', NULL),
(149, 1, 14, '2020-06-06 21:00:00', NULL),
(150, 2, 1, '2020-06-06 21:00:00', NULL),
(151, 2, 6, '2020-06-06 21:00:00', NULL),
(152, 2, 7, '2020-06-06 21:00:00', NULL),
(153, 2, 8, '2020-06-06 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `isdelete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'الوجبات الرئيسية', 1, 0, 1, 1, '2020-02-18 15:43:19', '2020-06-07 05:35:24'),
(2, 'المقبلات', 1, 0, 1, 1, '2020-02-18 15:43:28', '2020-02-24 16:36:30'),
(3, 'المشروبات', 1, 0, 1, 1, '2020-02-18 15:43:39', '2020-02-24 16:36:30'),
(4, 'عام', 1, 0, 1, 1, '2020-02-18 15:43:46', '2020-02-24 16:36:31'),
(5, 'حلويات', 1, 0, 1, NULL, '2020-04-07 10:23:29', '2020-04-07 10:23:29'),
(6, 'مششرووبات', 0, 1, 1, 1, '2020-06-07 05:35:47', '2020-06-07 05:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `restaurant_id`, `user_id`, `status`, `isdelete`, `created_at`, `updated_at`, `updated_by`) VALUES
(4, 'عصير لذيذ *_^', 1, 3, 1, 0, '2019-11-08 19:38:51', '2020-02-24 17:26:59', NULL),
(5, 'لذيذ', 2, 1, 1, 0, '2019-12-18 08:33:55', '2020-02-24 17:27:08', NULL),
(6, 'أنصح به', 1, 1, 1, 0, '2020-05-23 09:23:09', '2020-05-23 09:23:09', NULL),
(7, 'أنصح به', 5, 1, 1, 0, '2020-05-23 09:24:27', '2020-05-23 09:24:27', NULL),
(8, 'لذيذ', 5, 1, 1, 0, '2020-05-23 09:26:02', '2020-05-23 09:26:02', NULL),
(9, 'جميل', 4, 1, 1, 0, '2020-05-23 09:40:17', '2020-05-23 09:40:17', NULL),
(10, 'جميع المنتجات لذيذة', 6, 1, 1, 0, '2020-05-27 12:01:45', '2020-05-27 12:01:45', NULL),
(11, 'شيف رائع', 1, 1, 1, 0, '2020-06-07 05:19:56', '2020-06-07 05:19:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `show_in_menu` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `title`, `url`, `icon`, `parent_id`, `show_in_menu`, `created_at`, `updated_at`) VALUES
(1, 'الشيفات', '#', 'fa fa-file', 0, 1, '2020-02-17 22:00:00', '2020-02-17 22:00:00'),
(2, 'تصنيفات الشيفات', '/admin/category', 'fa fa-list', 1, 1, '2020-02-17 22:00:00', '2020-02-17 22:00:00'),
(3, 'اضافة تصنيف جديد', '/admin/category/create', 'fa fa-plus', 1, 1, '2020-02-18 14:43:05', '2020-02-17 22:00:00'),
(4, 'ادارة الشيفات', '/admin/restaurant', 'fa fa-file', 1, 1, '2020-02-24 22:00:00', '2020-02-24 22:00:00'),
(5, 'اضافة شيف جديد', '/admin/restaurant/create', 'fa fa-plus', 1, 1, NULL, NULL),
(6, 'ادارة الأصناف', '/admin/meal', 'fa fa-file', 1, 1, '2020-02-24 22:00:00', '2020-02-24 22:00:00'),
(7, 'اضافة صنف جديد', '/admin/meal/create', 'fa fa-plus', 1, 1, '2020-02-24 22:00:00', '2020-02-24 22:00:00'),
(8, 'ادارة التعليقات', '/admin/comment', 'fa fa-comment\r\n', 1, 1, NULL, NULL),
(9, 'الشرائح', '#', 'fa fa-tv', 0, 1, NULL, NULL),
(10, 'ادارة الشرائح', '/admin/slider', '	\r\nfa fa-list', 9, 1, NULL, NULL),
(11, 'اضافة شريحة جديدة', '/admin/slider/create', 'fa fa-plus', 9, 1, NULL, NULL),
(12, 'المستخدمين', '	\r\n#', 'fa fa-users', 0, 1, NULL, NULL),
(13, 'ادارة المستخدمين', '/admin/admin', 'fa fa-list', 12, 1, NULL, NULL),
(14, 'اضافة مستخدم جديد', '/admin/admin/create', 'fa fa-plus', 12, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `details` varchar(1000) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `isdelete` tinyint(4) DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `title`, `price`, `details`, `category_id`, `restaurant_id`, `image`, `status`, `isdelete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'ورق عنب', '25', NULL, 2, 1, 'TwQD1JDyrJh0RfdT4vpnBtU9B3wZB2spKt9hrglw.png', 1, 0, 1, NULL, '2020-04-07 13:25:20', '2020-04-07 13:25:20'),
(2, 'باشا وعساكره', '35', NULL, 1, 1, 'HhIPW3enYBh7Zues02tVYUG4LDtsQc8K0JdQxRIt.png', 1, 0, 1, NULL, '2020-04-07 13:26:21', '2020-04-07 13:26:21'),
(3, 'شيش برك', '30', NULL, 1, 1, 'KlDZjT4qygpHmj0op0lVhPOkDC1A7kbvgLHCdQI3.png', 1, 0, 1, NULL, '2020-04-07 13:27:04', '2020-04-07 13:27:04'),
(4, 'كبة بلبن', '15', NULL, 1, 1, 'DMmsyuZQe585Q5XrVJh6QibVjmWCi2dCK26XFpbc.png', 1, 0, 1, NULL, '2020-04-07 13:27:51', '2020-04-07 13:27:51'),
(5, 'رقائق باللحمة المفرومة', '15', NULL, 1, 1, 'fL8yXOK5aQc90R3jBtTWJncdTTQPzzAzJRpZ5f1B.png', 1, 0, 1, NULL, '2020-04-07 13:29:29', '2020-04-07 13:29:29'),
(6, 'مكرونة بشاميل', '20', NULL, 1, 1, 'BwhpkXq78ixQss7gPPn3lgJ9JJ0NULlc24frhk5I.png', 1, 0, 1, NULL, '2020-04-07 13:30:09', '2020-04-07 13:30:09'),
(7, 'معجنات سبانخ(قطعة)', '1', NULL, 2, 1, 'IStl8SvbUA9F3H9dxk2XvPqgzrqFYrsrpqUhmnlL.png', 1, 0, 1, NULL, '2020-04-07 13:30:54', '2020-04-07 13:30:54'),
(8, 'معجنات جبنة(قطعة)', '1', NULL, 2, 1, 'iztbTi6I98g4XbzLXdp0N5ZpUO0PVigCbPUPnbyh.png', 1, 0, 1, NULL, '2020-04-07 13:31:40', '2020-04-07 13:31:40'),
(9, 'مسخن رول(قطعة)', '2', NULL, 2, 1, '02L6YQtBUor1lzMPKCI8knU92jh4oOsHQL5zttvD.png', 1, 0, 1, NULL, '2020-04-07 13:32:18', '2020-04-07 13:32:18'),
(10, 'معمول (1 كيلو )', '20', NULL, 5, 2, 'FB5BkzS4iJsZ0rREYTMYpQN7FcYiNGA3PnAYxUEj.png', 1, 0, 1, NULL, '2020-04-07 13:33:28', '2020-04-07 13:33:28'),
(11, 'ورق عنب (0.5 كيلو)', '25', NULL, 2, 3, 'YK9VGICj64GV6nXuuh5o6DnoLR3iWi3cfospIjFe.png', 1, 0, 1, NULL, '2020-04-07 14:34:09', '2020-04-07 14:34:09'),
(12, 'أرز كبسة', '37', NULL, 1, 3, 'XxD8vCb8jOuwJOLXoM55djIHVQHX4RVBpQrf5zK2.png', 1, 0, 1, NULL, '2020-04-07 14:35:23', '2020-04-07 14:35:23'),
(13, 'بيتزا (قطعة)', '1.5', NULL, 2, 3, '1UjvnpqajIxwirADfIPwtIo16ku1UwIQdqM8Va3M.png', 1, 0, 1, NULL, '2020-04-07 14:36:03', '2020-04-07 14:36:03'),
(14, 'مندي', '45', NULL, 1, 4, 'UPHgzaGuDpEcVEKRM7Chvcr8Hi4rhWEp9A66Gqyd.png', 1, 0, 1, NULL, '2020-04-07 14:36:50', '2020-04-07 14:36:50'),
(15, 'حلويات جزائرية (قريويش) (1 كيلو )', '20', NULL, 5, 4, 'EgfFTjtJoPfhuixMb5po3E9rpuUxLIZKctZ1UOoU.png', 1, 0, 1, NULL, '2020-04-07 14:37:44', '2020-04-07 14:37:44'),
(16, 'كرات بطاطس (قطعة)', '2', NULL, 2, 5, 'n8y48Sq08tSW7BAMq7uQLKC1t6QzOOGPXIvvvV7L.png', 1, 0, 1, NULL, '2020-04-07 14:38:42', '2020-04-07 14:38:42'),
(17, 'بخاري', '13', NULL, 1, 5, 'eFgoVsFvrzuHwL76ZWd13l95ae8wlHQmU16H8a9G.png', 1, 0, 1, NULL, '2020-04-07 14:44:41', '2020-04-07 14:44:41'),
(18, 'بخاري (علبة)', '4', NULL, 5, 6, 'ZfeRoBLMTMgAg0R49aViKKeF2LSR8rK0fdKNgTza.png', 1, 0, 1, NULL, '2020-04-07 14:45:29', '2020-04-07 14:45:29'),
(19, 'تشيز كيك', '20', NULL, 5, 6, '4EsfbvUx9QiZs0Fr5xQ4h61V9rP7hqa0hRabJNCH.png', 1, 0, 1, NULL, '2020-04-07 14:46:09', '2020-04-07 14:46:09'),
(20, 'كرات كورن فليكس (علبة)', '7', NULL, 5, 6, 'Y9xGyOmKpecaZhMx7SeEj1Dl8bs2zqfcaRsXrBAW.png', 1, 0, 1, NULL, '2020-04-07 14:46:53', '2020-04-07 14:46:53'),
(21, 'كب كيك (قطعة)', '1.5', NULL, 5, 6, 'y5PdXhGMCfuxogeZ1ZGfHiooQCG2BrTjNwNy6eom.png', 1, 0, 1, NULL, '2020-04-07 14:47:54', '2020-04-07 14:47:54'),
(22, 'كيك', '40', NULL, 5, 15, 'FX2hZAqxXgSq3cGs9tg8JMUrELsNbIuWXgX9x0Hd.png', 1, 0, 1, NULL, '2020-04-07 14:48:48', '2020-04-07 14:48:48'),
(23, 'بسبوسة', '20', NULL, 5, 16, 'jhQN2Jaukn7fZJkZjKwWLDEuRBFlWdqETe5KrX2Z.png', 1, 0, 1, NULL, '2020-04-07 14:49:37', '2020-04-07 14:49:37'),
(24, 'تشيز كيك مخبوز', '40', NULL, 5, 16, 'yt8q8rthrqXNodrz6xeBqdaVSGnGVSrJ3Dld1zLA.png', 1, 0, 1, NULL, '2020-04-07 14:50:45', '2020-04-07 14:50:45'),
(25, 'كيك شوكولاتة', '40', NULL, 5, 16, '7vky3QUzmh24N2ZqhoG5SNy7vS6BIkYspKiz98lU.png', 1, 0, 1, NULL, '2020-04-07 14:51:12', '2020-04-07 14:51:12'),
(26, 'كيك فانيلا بحشوة البلوبيري', '50', NULL, 5, 7, 'oaS6sRcctLSSDlcXDP1O6ZCFhLjyvta3Pa5HOuYW.png', 1, 0, 1, NULL, '2020-04-07 14:52:02', '2020-04-07 14:52:02'),
(27, 'كيك شوكولاتة', '50', NULL, 5, 7, 'fSp1SU5iGDWng3TJ5jF1bivzJDUqGS1pin1qbPat.png', 1, 0, 1, NULL, '2020-04-07 14:52:27', '2020-04-07 14:52:27'),
(28, 'كب كيك (قطعة)', '2', NULL, 5, 7, 'LPRrLZCNWor6t9TudXZRJfQHQ5az7Ga7QOjoIvIH.png', 1, 0, 1, NULL, '2020-04-07 14:53:15', '2020-04-07 14:53:15'),
(29, 'كيك للمناسبات', '100', NULL, 5, 7, '4bmoXwSATIx85SNT176ZRcYVi9MDVslaVk7Gvzzz.png', 1, 0, 1, NULL, '2020-04-07 14:53:47', '2020-04-07 14:53:47'),
(30, 'الجوزية (قطعة)', '2', NULL, 5, 8, 'qZjolXwU0RV4O6vQPau80e44tpmkM2Zzl26AKTyW.png', 1, 0, 1, NULL, '2020-04-07 14:54:42', '2020-04-07 14:54:42'),
(31, 'فيكتوريا كيك', '60', NULL, 5, 9, 'OJZ1lMaStgssic38Xud8ZyR3ijjrDf6uR7PLpYEz.png', 1, 0, 1, NULL, '2020-04-07 14:55:19', '2020-04-07 14:55:19'),
(32, 'كيك القلب', '70', NULL, 5, 9, 'e68t7ui61oDM9y6woIKMr6oAuJymMGM2YmI9VG2u.png', 1, 0, 1, NULL, '2020-04-07 14:55:51', '2020-04-07 14:55:51'),
(33, 'بقلاوة (1 كيلو)', '20', NULL, 5, 9, 'zgFJqLKgQJwR5WLGWpt9JzpPmijWRAnL71p50sV3.png', 1, 0, 1, NULL, '2020-04-07 14:56:35', '2020-04-07 14:56:35'),
(34, 'سينابون (قطعة)', '2.5', NULL, 5, 17, 'xX7Yh3n2KyKc6xheHc81fwsjLWhiS2Ul06Jx0hES.png', 1, 0, 1, NULL, '2020-04-07 14:57:30', '2020-04-07 14:57:30'),
(35, 'الكعك (1 كيلو)', '20', NULL, 5, 10, '4pakrTcI9M8R1ScHsUAgYT88YqYS0D3co8BWpaw6.png', 1, 0, 1, NULL, '2020-04-07 14:58:07', '2020-04-07 14:58:07'),
(36, 'معجنات مشكلة(سبانخ-بيتزا-زعتر-جبنة) (قطعة)', '1', NULL, 2, 10, 'fDyC6bTLeBxMgHmqxxoCI2qqV0KzjCRYeYgKvuzw.png', 1, 0, 1, NULL, '2020-04-07 14:59:02', '2020-04-07 14:59:02'),
(37, 'الكومبير', '5', NULL, 2, 10, '5Ot46EYpx51ZucwUZWMNHAjcw4rdDbDnbKJ99NS4.png', 1, 0, 1, NULL, '2020-04-07 14:59:31', '2020-04-07 14:59:31'),
(38, 'سينابون (قطعة)', '2', NULL, 5, 11, '637BiTXEaYULq5pj3KitfDI7KUUF30KGOkRg1eyn.png', 1, 0, 1, NULL, '2020-04-07 15:00:18', '2020-04-07 15:00:18'),
(39, 'كيك الفواكه', '50', NULL, 5, 11, 'LHy1fVZB7uqJsKEjl7527FgQll3ZIiudR1PZnw5A.png', 1, 0, 1, NULL, '2020-04-07 15:00:56', '2020-04-07 15:00:56'),
(40, 'تشيز كيك', '50', NULL, 5, 12, 'qklvLkyufTTI754UOk2ChfJCztvTuQZ56Dgu5Axh.png', 1, 0, 1, NULL, '2020-04-07 15:01:40', '2020-04-07 15:01:40'),
(41, 'حلا الخشخش (علبة)', '5', NULL, 5, 12, 'YTk6PXZ7iiglIF1nZJVPdF6BTHuOaF5bRVpl51f6.png', 1, 0, 1, NULL, '2020-04-07 15:02:14', '2020-04-07 15:02:14'),
(42, 'بسكوت حبات الفراولة (علبة)', '30', NULL, 5, 12, 'Ho8KZfqP2KJv8SiYloQNYCHyoXVcqyQfJaPqVv2t.png', 1, 0, 1, NULL, '2020-04-07 15:03:10', '2020-04-07 15:03:10'),
(43, 'فيتوشيني', '20', NULL, 1, 13, '9LLLP2remaDpIAZLQeVIebl8VWzoQQZLhYEJxD0q.png', 1, 0, 1, NULL, '2020-04-07 15:03:54', '2020-04-07 15:03:54'),
(44, 'كبة (قطعة)', '2', NULL, 2, 13, 'cFGLC1GyB3Q6BQmBowsLiatFef7VFR2IAfpT0baf.png', 1, 0, 1, NULL, '2020-04-07 15:04:57', '2020-04-07 15:04:57'),
(45, 'فخارة دجاج بالخضار والكريمة', '20', NULL, 1, 13, 'MCa92ECOSAPqI02ACRm4JxTuN52Yyi5RyzPQ21aC.png', 1, 0, 1, NULL, '2020-04-07 15:05:30', '2020-04-07 15:05:30'),
(46, 'براونيز (قطعة)', '2', NULL, 5, 18, 'VDmM0uAUh0qkso6GRlenHmuJTCldaZ0vd7gI1Zod.png', 1, 0, 1, NULL, '2020-04-07 15:06:19', '2020-04-07 15:06:19'),
(47, 'معجنات مشكلة (زعتر- جبنة-لحمة) (قطعة)', '1.5', NULL, 2, 14, 'xV1uJw6ecb3Zla6ZBPrlHwiyY0fE157jgdgbFo87.png', 1, 0, 1, NULL, '2020-04-07 15:07:07', '2020-04-07 15:07:07'),
(48, 'بفاريا الكاسات (قطعة)', '3', NULL, 5, 14, 'moIXgKgP3YiwL8IL1xoNjiP2vjiT3vjm9xdALH3o.png', 1, 0, 1, NULL, '2020-04-07 15:07:46', '2020-04-07 15:07:46'),
(49, 'ورق عنب (0.5 كيلو)', '15', NULL, 2, 14, 'oD3HRigsqu96s2WRVO3MGlLVHnFL2jvv2wwcDF0f.png', 1, 0, 1, NULL, '2020-04-07 15:08:24', '2020-04-07 15:08:24'),
(50, 'كيك', '60', NULL, 5, 14, 'Yu7aJ9KaD9SAVLSAXvyJUrkdkoLlSIOEmm651yHe.png', 1, 0, 1, NULL, '2020-04-07 15:08:51', '2020-04-07 15:08:51'),
(51, 'زبدية صدر دجاج', '20', NULL, 1, 14, '10XdPNDxFpDvNUwE7drU11Yly8WDtmyo9JM4NNHK.png', 1, 0, 1, NULL, '2020-04-07 15:09:29', '2020-04-07 15:09:29'),
(52, 'كبة مقلية(قطعة)', '2', NULL, 2, 1, '3rbBdr2QIIChS5zkAYcGxeVtLNQE57IbW1wfAKRB.png', 1, 0, 1, NULL, '2020-04-07 15:10:16', '2020-04-07 15:10:16'),
(53, 'فطائر لحمة (قطعة)', '2', NULL, 2, 1, 'fG0b8e16HEnwF4uiEiBxa9Zh0yaxSLYkqO7eYxcD.png', 1, 0, 1, NULL, '2020-04-07 15:11:01', '2020-04-07 15:11:01'),
(54, 'بيتزا (قطعة)', '2', NULL, 2, 1, 'g0kBOcKPU4SHbz2EUZZiRbOGp4Pb87iOnLoSUx5I.png', 1, 0, 1, NULL, '2020-04-07 15:11:54', '2020-04-07 15:11:54'),
(55, 'تبولة (طبق)', '10', NULL, 2, 3, 'plbAOpnAsBupzOlI6F9a9OxQASh9ZFqZxVGHxYQe.png', 1, 0, 1, NULL, '2020-04-07 15:12:45', '2020-04-07 15:12:45'),
(56, 'كبة بلبن', '15', NULL, 1, 3, 'hys0cwAoTZVnBqvSltS0pq4vZI7gn1sQPmIJierr.png', 1, 0, 1, NULL, '2020-04-07 15:13:32', '2020-04-07 15:13:32'),
(57, 'ورق عنب (0.5 كيلو)', '25', NULL, 2, 4, 'LwI9FtrkPqh5BblfpQ4uTCX6roQpvpoK5LUbuhQn.png', 1, 0, 1, NULL, '2020-04-07 15:14:28', '2020-04-07 15:14:28'),
(58, 'خبز فلسطيني (3 أرغفة)', '1', NULL, 1, 4, 'oHyG1L90diijcsi0ED25advcsar2zI4RBOOM2WQb.png', 1, 0, 1, NULL, '2020-04-07 15:15:34', '2020-04-07 15:15:34'),
(59, 'معجنات مشكل (قطعة)', '1', NULL, 2, 4, '5RLRnRAmV3Iul18jGYfX23vWL5Yh4qr7NeTcBBlN.png', 1, 0, 1, NULL, '2020-04-07 15:16:44', '2020-04-07 15:16:44'),
(60, 'كبة مقلية (قطعة)', '2.5', NULL, 2, 4, 'sphKbLCu3dFeSR2FCH5g3S5LwHwEQUWLBJyBgG6e.png', 1, 0, 1, NULL, '2020-04-07 15:17:08', '2020-04-07 15:17:08'),
(61, 'كعك بعدة اشكال (كيلو)', '30', NULL, 5, 4, 'Xh6k9rJu0sCcm1h7se9ocyKTJ5aKGBd8THYYCxCX.png', 1, 0, 1, NULL, '2020-04-07 15:18:22', '2020-04-07 15:18:22'),
(62, 'أصابع زينب (كيلو)', '20', NULL, 5, 4, 'Vtb8UK2Z7ioFiaRUaURHIrsXCa2YBBlx6MHwEedJ.png', 1, 0, 1, NULL, '2020-04-07 15:18:54', '2020-04-07 15:18:54'),
(63, 'سلطة ملفوف احمر', '4', NULL, 2, 5, 'BK6SWQpnwmL4Yn4ubc87bXZvG39pdxCVjxnb6ta8.png', 1, 0, 1, NULL, '2020-04-07 15:19:42', '2020-04-07 15:19:42'),
(64, 'برياني', '25', NULL, 1, 5, 'a8zMJcUmPASUAcrnqVaTRdqEYFalHvgurLX2YpDj.png', 1, 0, 1, NULL, '2020-04-07 15:20:28', '2020-04-07 15:20:28'),
(65, 'مندي يمني', '25', NULL, 1, 5, 'nKQdgcmFf8uLcgF5wJgG1ZUkHrFb1zL8xHjbRP6w.png', 1, 0, 1, NULL, '2020-04-07 15:21:06', '2020-04-07 15:21:06'),
(66, 'دجاج بالخضار', '40', NULL, 1, 5, 'RhQTorjnWoFcoqsyTf7lA3aBWKtmnVzi0kWXBveD.png', 1, 0, 1, NULL, '2020-04-07 15:21:39', '2020-04-07 15:21:39'),
(67, 'علبة كرز', '3', NULL, 5, 6, 'EdxzprFHbwiP0JOcpFNSAnZKSJueptseEYowzodQ.png', 1, 0, 1, NULL, '2020-04-07 15:22:10', '2020-04-07 15:22:10'),
(68, 'كاكاو برازيلي (باكيت)', '4', NULL, 3, 6, 'u6FmwB5uVRpTX8ToPrm6otmypq6oXTN02mV1UrHS.png', 1, 0, 1, NULL, '2020-04-07 15:22:58', '2020-04-07 15:22:58'),
(69, 'جوز هند محمص (علبة)', '3', NULL, 5, 6, '0x3fZ2jl6vK4fUIbhI9GBxf49IlwK3k0S9FTZ0bD.png', 1, 0, 1, NULL, '2020-04-07 15:23:33', '2020-04-07 15:23:33'),
(70, 'بلوبيري (0.5 كيلو)', '8', NULL, 5, 6, 'S6GEaZdTwFEriCwn8aUPJa9U6jALFeRC1EyTO8Xj.png', 1, 0, 1, NULL, '2020-04-07 15:24:08', '2020-04-07 15:24:08'),
(71, 'كرسبي (علبة)', '4', NULL, 5, 6, 'tx1H8c95T7lnh6wmaUnFtu7YTrlrZGeyTXqY9GfF.png', 1, 0, 1, NULL, '2020-04-07 15:24:43', '2020-04-07 15:24:43'),
(72, 'توفي (كيلو)', '13', NULL, 5, 6, '312oXj6dXRFRkGJERW43SpfKowCJd5cgDnQiYsWC.png', 1, 0, 1, NULL, '2020-04-07 15:25:20', '2020-04-07 15:25:20'),
(73, 'ميزرا ملونة (علبة)', '2', NULL, 5, 6, 'X8wp9VjOnvPI4vkjvz0u1KMT4rwEqjb6blkvT84B.png', 1, 0, 1, NULL, '2020-04-07 15:25:53', '2020-04-07 15:25:53'),
(74, 'بسبوسة شوكولاتة', '35', NULL, 5, 6, 'bwfGYSyleNjNV2r0WYWt1XLEGFzPLhRlF82aBNbs.png', 1, 0, 1, NULL, '2020-04-07 15:26:43', '2020-04-07 15:26:43'),
(75, 'معجنات مشكلة (قطعة)', '1', NULL, 2, 6, '46Bt6kAGww4q0qjKnmeWgzinUfDaXG8TuQI2LgfY.png', 1, 0, 1, NULL, '2020-04-07 15:27:19', '2020-04-07 15:27:19'),
(76, 'تيراميسو', '50', NULL, 5, 9, 'VjHef2sXMqI0W6HEK5SnROcXfogZXHnGlJi4gEHd.png', 1, 0, 1, NULL, '2020-04-07 15:28:06', '2020-04-07 15:28:06'),
(77, 'كيكة الارقام', '70', NULL, 5, 9, 'bNdMl4TiGjnAGJgGULoaQ4g5FyBiPTdxzIWNUdvi.png', 1, 0, 1, NULL, '2020-04-07 15:28:37', '2020-04-07 15:28:37'),
(78, 'حلا الخشخش (علبة)', '4', NULL, 5, 10, 'vejDCjfm5Xyle8FChnRMc5RslULJNgNNoRkphzL8.png', 1, 0, 1, NULL, '2020-04-07 15:29:33', '2020-04-07 15:29:33'),
(79, 'البسبوسة', '20', NULL, 5, 10, '0TUxx8Bscv6f34FVviWPn63RP0kFdfSWezWWwl05.png', 1, 0, 1, NULL, '2020-04-07 15:30:27', '2020-04-07 15:30:27'),
(80, 'رول المسخن (قطعة)', '1.5', NULL, 2, 10, 'UydyEeTC4urVpHd6svLRZe3Ldu8dOp3z0UM1qIeF.png', 1, 0, 1, NULL, '2020-04-07 15:31:20', '2020-04-07 15:31:20'),
(81, 'ريد فيلفت', '40', NULL, 5, 11, 'lCfxRhsCg45MxKGDjVhPTvIz1Pf8mXTY20Me1WbW.png', 1, 0, 1, NULL, '2020-04-07 15:31:50', '2020-04-07 15:31:50'),
(82, 'كيك بالشوكولاتة', '40', NULL, 5, 11, '4gVHsIJ10fdR3MITtqW0ITyfiTKFDM8vE0S7X1GG.png', 1, 0, 1, NULL, '2020-04-07 15:32:16', '2020-04-07 15:32:16'),
(83, 'كيك (قطعة)', '1', NULL, 5, 11, 'Yu6wGCtxoH6gjqFWOnZTQesDj8qAI56aPL0F2Ug6.png', 1, 0, 1, NULL, '2020-04-07 15:33:09', '2020-04-07 15:33:09'),
(84, 'مدلوقة (علبة)', '5', NULL, 5, 12, 'eV1TqsSVzEmAHDZ75ZTJN2f0VcDVvlPt4oKmZyyW.png', 1, 0, 1, NULL, '2020-04-07 15:33:57', '2020-04-07 15:33:57'),
(85, 'جار فوريرو روشيه (علبة)', '5', NULL, 5, 12, 'qHXiOequeUXqXpHYlCayruAmXskqFkXLc0eP0juh.png', 0, 0, 1, NULL, '2020-04-07 15:34:31', '2020-04-07 15:34:31'),
(86, 'تكساس فرايز', '20', NULL, 1, 13, 'K9rTIJ9713wZmNZDuQmpgpM2UdCMUA3L5u8CiqrV.png', 1, 0, 1, NULL, '2020-04-07 15:35:03', '2020-04-07 15:35:03'),
(87, 'مقروط بالتمر (كيلو)', '25', NULL, 5, 14, 'qWM61BGSlml9ldygjZj3bEC0Z0YwXEaw2Lr3GyN6.png', 1, 0, 1, NULL, '2020-04-07 15:36:00', '2020-04-07 15:36:00'),
(88, 'تشيز كيك', '50', NULL, 5, 14, 'IrLe40fkaA7Vhq5eeG7xj4twOJr8eucV0IaLbCAB.png', 1, 0, 1, NULL, '2020-04-07 15:36:24', '2020-04-07 15:36:24'),
(89, 'كنافة', '50', NULL, 5, 14, 'MihbSwGL5tf3WqFbmW8a5TDScz62QwpSJn0Q9Eoy.png', 1, 0, 1, NULL, '2020-04-07 15:38:47', '2020-04-07 15:38:47'),
(90, 'تشيز كيك مكس', '60', NULL, 5, 6, 'wr7Luj5usQ4q7CgSfvIHrrNbySncN0eTJ3tPHOxb.png', 1, 0, 1, NULL, '2020-04-07 15:40:05', '2020-04-07 15:40:05'),
(91, 'ورق عنب (0.5 كيلو)', '35', NULL, 2, 5, 'HFod0c1yd8Rvnn1oBeBhEO2ohZVnpkzl8CuNUoez.png', 1, 0, 1, NULL, '2020-04-07 15:40:43', '2020-04-07 15:40:43'),
(92, 'شارلوت فراولة', '70', NULL, 5, 9, 'vovi6o8zIAVBOuUe8ujTgrDJOnU5p1dIEgUZqMcq.png', 1, 0, 1, NULL, '2020-04-07 15:41:49', '2020-04-07 15:41:49'),
(93, 'باستا البيتزا', '50', NULL, 1, 13, '4AtzDmMg42gdMnQWWbztHb91QgPqAqWZppDOM9Qm.png', 1, 0, 1, NULL, '2020-04-07 15:42:30', '2020-04-07 15:42:30'),
(94, 'كيك شوكولاتة', '70', NULL, 5, 9, 'jYl2JuyFCqvp8ejWAjoZReoXITn6eSpP15SG2E9A.png', 1, 0, 1, NULL, '2020-04-07 15:43:07', '2020-04-07 15:43:07');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2018_07_22_133623_create_category_table', 1),
(13, '2018_07_22_133636_create_article_table', 1),
(14, '2018_07_22_133645_create_admin_table', 1),
(15, '2018_07_22_133654_create_comment_table', 1),
(16, '2018_07_22_133702_create_link_table', 1),
(17, '2018_07_22_133711_create_admin_link_table', 1),
(18, '2018_07_22_133738_create_slider_table', 1),
(19, '2018_07_29_125023_add_url_column_to_slider', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowcomment` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `title`, `summary`, `details`, `category_id`, `image`, `allowcomment`, `status`, `isdelete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'فانيلا و زعفران', 'نحن على استعداد بتلبية كافة طلباتكم للحفلات واعياد الميلاد والمناسبات السعيدة بالإضافة لإمكانية اعداد أي وجبة بناء على رغبتكم حتى لو لم تتواجد في قائمة الطعام خاصتنا.', '*مختصون بعمل المعمول بكافة حشواته, ورق العنب , رقاق باللحمة, كبة بأنواعها, وجميع أنواع المعجنات.\r\n*يمكنك التواصل معنا عن طريق الرقم التالي 0599577422 او على حسابنا على الانستغرام (فانيلا وزعفران).', 1, 'VhKge5xbXpcKztTOWHoqmGTFRr5N2y9eGosNX7Fb.png', 1, 1, 0, 1, 1, '2020-04-07 10:15:54', '2020-06-06 08:40:54'),
(2, 'فتافيت السكر', ': نحن على استعداد بتلبية كافة طلباتكم من منتجاتنا للحفلات واعياد الميلاد والمناسبات السعيدة.', 'مختصون بعمل المعمول بكافة حشواته.\r\nيمكنك التواصل معنا عن طريق الرقم التالي 0592600684 او على حسابنا على الانستغرام (فتافيت السكر).', 5, 'sioqgkfykb6oWNnhkPb5zW8JdsAW1tFBM6fBGxpC.png', 1, 1, 0, 1, NULL, '2020-04-07 10:24:37', '2020-04-07 10:24:37'),
(3, 'اطيب طبخة', 'نحن على استعداد بتلبية كافة طلباتكم للحفلات واعياد الميلاد والمناسبات السعيدة بالإضافة لإمكانية اعداد أي وجبة بناء على رغبتكم حتى لو لم تتواجد في قائمة الطعام خاصتنا ويرجي التواصل معنا قبل 24 ساعة من موعد تسليم الطلبية.', 'مختصون بعمل المعمول والكعك, ورق العنب , الأرز بانواعه, كبة بأنواعها, وجميع أنواع المعجنات.\r\nيمكنك التواصل معنا عن طريق الرقم التالي 0595552184 او على حسابنا على الانستغرام (اطيب طبخة).', 4, 'jfgTGnNvapy0MzegFNcjXYQxopWmymjONlLyCWkK.png', 1, 1, 0, 1, NULL, '2020-04-07 10:35:11', '2020-04-07 10:35:11'),
(4, 'مطبخ الكوفية', 'نحن على استعداد بتلبية كافة طلباتكم للحفلات واعياد الميلاد والمناسبات السعيدة بالإضافة لإمكانية اعداد أي وجبة بناء على رغبتكم حتى لو لم تتواجد في قائمة الطعام خاصتنا ويرجي التواصل معنا قبل 24 ساعة من موعد تسليم الطلبية.', 'مختصون بعمل المعمول والكعك، ورق العنب، والحلويات الجزائرية، الكبة المقلية، وجميع أنواع المعجنات بالإضافة لتواجد الخبز البلدي الفلسطيني.\r\nيمكنك التواصل معنا عن طريق الرقم التالي 0599903441 او على حسابنا على الفيس بوك (حلويات ومعجنات الكوفية).', 4, 'jO0ltcu3BNQVfSwOwdq8bag2LH4d0Q5W4bMmrIft.png', 1, 1, 0, 1, NULL, '2020-04-07 10:36:43', '2020-04-07 10:36:43'),
(5, 'طعام الملوك', 'نحن على استعداد بتلبية كافة طلباتكم من صواني الأرز بانواعه لكم ولولائمكم.', 'طعام الملوك للمأكولات الشرقية والغربية (رز مندي يمني - برياني – بخاري) والمقبلات.\r\nيمكنك التواصل معنا عن طريق الرقم التالي 0567666763 او على حسابنا على الانستغرام (king food Gaza).', 1, 'SZ7qN7LTg5GzSXuaSVMNYBKlXGM7veCaWO6IMcpV.png', 1, 1, 0, 1, NULL, '2020-04-07 10:41:06', '2020-04-07 10:41:06'),
(6, 'مطبخ الاخوات', 'نحن على استعداد بتلبية كافة طلباتكم من الكيك والحلويات والمعجنات.', 'مختصون بصناعة الكيك والحلويات وتواجد مستلزمات الكيك.\r\nيمكنك التواصل معنا عن طريق الرقم التالي  0597693397او على حسابنا على الانستغرام (sisters.kitchen4).', 5, 'MTgNAYAHFTcUs7tlMdsS5CAtsuEqJJBbwRa9YTpD.png', 1, 1, 0, 1, NULL, '2020-04-07 10:42:31', '2020-04-07 10:42:31'),
(7, 'awesome cake', 'نحن على استعداد بتلبية كافة طلباتكم من الكيك ويرجي الحجز قبل يومين', 'مختصون بصناعة الكيك.\r\nيمكنك التواصل معنا عن طريق حسابنا على الانستغرام (Awesome cake ) او الاتصال علي الرقم 0599014700', 5, 'aFZQl3xi245kTF5rKCjnT0XyQeWXQkJ7Q5h6pLqm.png', 1, 1, 0, 1, NULL, '2020-04-07 10:43:49', '2020-04-07 10:43:49'),
(8, 'seba sweet', 'نحن على استعداد بتلبية كافة طلباتكم من الجوزية بكافة حشواتها وجميع الألوان.', 'مختصون بصناعة الجوزية.\r\nيمكنك التواصل معنا عن طريق حسابنا على الانستغرام (seba sweet ) او الاتصال علي الرقم 0599088843.', 5, 'SfVMfAuOw43xGm5DtD4H0evj8dwIcrZC29rOq4KZ.png', 1, 1, 0, 1, NULL, '2020-04-07 10:45:30', '2020-04-07 10:45:30'),
(9, 'بيت رندة', ': نحن على استعداد بتلبية كافة طلباتكم من الحلويات.', ': يمكنك التواصل معنا عن طريق حسابنا على الانستغرام (baitranda)', 5, 'E6lbxTdJV2MvGM0KHQP7OGMQW2OnYuwnHzqhftpv.png', 1, 1, 0, 1, NULL, '2020-04-07 10:46:19', '2020-04-07 10:46:19'),
(10, 'اكلات سما', 'نحن على استعداد بتلبية كافة طلباتكم من الحلويات والمعجنات والكعك.', 'مختصون بصناعة الحلويات والمعجنات والكعك.\r\nيمكنك التواصل معنا عن طريق حسابنا على الانستغرام (aklat_sama) او علي الرقم (0598480242)', 4, 'kpMBvFKu61PTwQpTpfsxYfaKA1ESwHMBOGdWPWl4.png', 1, 1, 0, 1, NULL, '2020-04-07 10:48:03', '2020-04-07 10:48:03'),
(11, 'اليمنى', 'نحن على استعداد بتلبية كافة طلباتكم من الحلويات والكيك.', 'يمكنك التواصل معنا عن طريق حسابنا على الانستغرام (yomnacake) او على الرقم (0599975213).', 5, 'DSAXzPF8G76VkHjkqOEyt4m18hSmEiyj9lro1TR1.png', 1, 1, 0, 1, NULL, '2020-04-07 10:48:55', '2020-04-07 10:48:55'),
(12, 'sweet home', 'نحن على استعداد بتلبية كافة طلباتكم من الحلويات العربية والغربية.', 'يمكنك التواصل معنا عن طريق حسابنا على الانستغرام (sweet.home766) .', 5, 'W0rMjXbHRC0kXf7yOUvM8TLgfIIqJZBpZdMP9fZm.png', 1, 1, 0, 1, NULL, '2020-04-07 10:49:55', '2020-04-07 10:49:55'),
(13, 'pasta station', 'اول مطبخ متخصص في تقديم الباستا بأنواعها الي جانب أصناف مختلفة.', 'يمكنك التواصل معنا عن طريق حسابنا على الانستغرام (pasta.station.gaza)  او الاتصال علي الرقم 0597323545.', 1, 'p3YQmEX3txdojEPrX3kUDEwVoxtIoHLpCaqDtRIH.png', 1, 1, 0, 1, NULL, '2020-04-07 10:50:45', '2020-04-07 10:50:45'),
(14, 'مطبخ هنود', 'يمكننا اعداد كافة طلبياتكم وتقديمها بأفضل ما يمكن ويرجي الحجز قبل يوم.', 'يمكنك التواصل معنا عن طريق حسابنا على الانستغرام (الشيف هنود)  او الاتصال علي الرقم 0592683997.', 4, 'Ou7nKeSnqnX36cGh1GOlkeMiN997vYiyHPBhZgik.png', 1, 1, 0, 1, NULL, '2020-04-07 10:51:46', '2020-04-07 10:51:46'),
(15, 'سيدرا كيك', 'نحن على استعداد بتلبية كافة طلباتكم من الكيك.', 'يمكنك التواصل معنا عن طريق الرقم التالي  0595929150او على حسابنا على الانستغرام (seedracake).', 5, 'nZid2EyYjXzSJhOka6sTwrjGyhzdEFNEOjuuf7Rt.png', 1, 1, 0, 1, NULL, '2020-04-07 11:26:51', '2020-04-07 11:26:51'),
(16, 'sweets house', 'نحن على استعداد بتلبية كافة طلباتكم من الكيك والحلويات الباردة.', 'يمكنك التواصل معنا عن طريق حسابنا على الانستغرام (sweetshouse01).', 5, 'MkMPZLFlm4jAExQSCYDduj2sogySYuIALSHdIdr1.png', 1, 1, 0, 1, NULL, '2020-04-07 11:27:45', '2020-04-07 11:27:45'),
(17, 'cinnamon roll gaza', 'نحن على استعداد بتلبية كافة طلباتكم من السينابون باختلاف طعم الصوص المرافق.', 'يمكنك التواصل معنا عن طريق حسابنا على الانستغرام (cinnamongaza) او على الرقم (0569446496)', 5, 'j0z31AoSuSowS0dcq7HY1VlyioWK33a5sWItSuIk.png', 1, 1, 0, 1, NULL, '2020-04-07 11:28:57', '2020-04-07 11:28:57'),
(18, 'dima\'s delights', ': مختصون في تقديم حلا البراونيز.', 'يمكنك التواصل معنا عن طريق حسابنا على الانستغرام (dimas delight).', 5, '4Id0Wn23swqmGNZikn7crFiAuHNg9wE6cnY9ZNN8.png', 1, 1, 0, 1, NULL, '2020-04-07 11:29:59', '2020-04-07 11:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `summary`, `image`, `status`, `isdelete`, `created_by`, `updated_by`, `created_at`, `updated_at`, `url`) VALUES
(1, 'نور', 'نورنورنورنورنورنورنورنورنورنورنورنورنورنور', 'lOeQM3mTCMZxYUPlQcq8Eq5uKgYowhzySnY3y2u3.png', 1, 0, 1, 1, '2019-10-31 12:18:35', '2020-02-24 17:07:58', NULL),
(2, 'first', NULL, 'lOeQM3mTCMZxYUPlQcq8Eq5uKgYowhzySnY3y2u3.png', 1, 0, 1, 1, '2019-11-01 15:24:10', '2020-02-24 16:28:36', 'http://localhost/phpmyadmin/sql.php?server=1&db=cms&table=article&pos=0'),
(3, 'نور', 'ftrhtrf', 'lOeQM3mTCMZxYUPlQcq8Eq5uKgYowhzySnY3y2u3.png', 1, 1, 1, 0, '2020-02-22 18:18:27', '2020-02-24 17:16:59', ''),
(4, 'hhhh', NULL, 'lOeQM3mTCMZxYUPlQcq8Eq5uKgYowhzySnY3y2u3.png', 1, 1, 1, 0, '2020-02-24 17:10:12', '2020-02-24 17:10:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'نور', 'noor@gmail.com', '$2y$10$MUR53xUMCXJCDid2slov7.AN.II1V2oeGFzsSAyfvwm0XJ5hBMWvy', 'LbUHWOQb4dtdijHLfB5kcZFhcB3c1pimvDSv6m3xgVCXHz6KAVQtIwqOfxDm', NULL, '2019-11-08 18:58:45'),
(2, 'نيفو', 'nv@gmail.com', '$2y$10$Iq.XWhH/6Hq1ZmTz74.ov.6RTAJ6dcUjRRdpeBnxT6We7zsdmbg6C', 'Y2ow6EV0vfmfB9xG7OUyNyjDL36vGQO0axxnxqsfBjUZ1cjkhLcwWTJrJvQI', '2020-04-29 14:06:43', '2020-04-29 14:06:43'),
(3, 'محمد', 'mh@gmail.com', '$2y$10$0ofTxUX8k1Y0O8ZZCiR/0.O4i61eQBb1a5wkR296b41eKgFeiAcJe', NULL, '2020-04-30 09:02:27', '2020-04-30 09:02:27'),
(4, 'raghad', 'raghad@gmail.com', '$2y$10$x16uh3YsESI/dgLoOR3N4.xnc5LXYN8VBmX/MbEcQG0fbFLHpwry2', '4WsueTnkGK6IZI407Nw8DPTqUknFgsgSLgkeB5pgaNHRaMskdVcHsodo2pJf', '2020-06-07 05:39:39', '2020-06-07 05:39:39'),
(5, 'ahmed', 'ahmed@gmail.com', '$2y$10$KMkISdzc6rWoH2fqSB5vzecSMnXvYqon9ALJucrxhgZ2vctSJY1aq', NULL, '2020-06-07 05:41:59', '2020-06-07 05:41:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_link`
--
ALTER TABLE `admin_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_link`
--
ALTER TABLE `admin_link`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
