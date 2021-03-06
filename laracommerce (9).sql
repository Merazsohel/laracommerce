-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 30, 2019 at 11:36 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laracommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstName`, `lastName`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', '', 'admin@gmail.com', '$2y$12$NgAlynXatEGZJayJPFvAkekzdelKA3ZEnI3aDWsQrGUFThvpBUt3S', 'xXwo7I3sTqXkH8ZsPb2EXk9EKHXACbI2w7G8sgeizrHitZXn71TlgtOF8jdr', NULL, '2019-12-10 08:00:00'),
(5, 'sub', 'admin', 'subadmin@gmail.com', '$2y$12$NgAlynXatEGZJayJPFvAkekzdelKA3ZEnI3aDWsQrGUFThvpBUt3S', 'OsNp9M58DSXsee3GtK1CR79gEkbsclDcQ4NDamvygCl2svu5A4XiEAcNmEKa', '2019-12-14 13:41:52', '2019-12-26 06:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `admin_id`, `role_id`) VALUES
(3, 4, 1),
(6, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `title`, `subtitle`, `link`, `position`, `photo`) VALUES
(5, 'Hot Deals', 'New Arrivals (Grab the best deal now)', 'http://localhost/ecommerce/product/Watch%20001/154', 'slider', '12-08-2019_1126am8811.jpg'),
(6, 'Summer Collection', 'Grab the best deal now', 'http://localhost/ecommerce/product/Watch%20001/154', 'slider', '12-08-2019_1128am6529.jpg'),
(7, 'Male Fashion', 'Grab the best deal now', 'http://localhost/ecommerce/product/Watch%20001/154', 'slider', '12-08-2019_1130am1846.png'),
(8, 'Smartphones', 'Free Shipping for first purchase', 'http://localhost/ecommerce/product/Watch%20001/154', 'slider', '12-08-2019_1131am3337.png');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `photo`) VALUES
(12, 'Rolex', '12-19-2019_1219pm9275.png'),
(13, 'Omega', '12-19-2019_1219pm7141.png'),
(14, 'Tudor', '12-19-2019_1219pm8237.png'),
(15, 'Breguet', '12-19-2019_1223pm4227.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `photo`) VALUES
(6, 'Rolex', '12-08-2019_1122am4923.png'),
(7, 'Patek Philippe', '12-08-2019_1122am7940.png'),
(8, 'Omega', '12-08-2019_1122am9175.png'),
(13, 'Tudor', '12-08-2019_1121am8888.png');

-- --------------------------------------------------------

--
-- Table structure for table `childcategories`
--

CREATE TABLE `childcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED DEFAULT NULL,
  `childcategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childcategories`
--

INSERT INTO `childcategories` (`id`, `subcategory_id`, `childcategory`) VALUES
(3, 8, 'Ulysse Nardin'),
(4, 8, 'Skin Care'),
(6, 11, 'Richard Mille'),
(7, 11, 'Sinn'),
(12, 11, 'Longines'),
(13, 12, 'Oris'),
(14, 12, 'Chronographs'),
(15, 13, 'A. Lange & Söhne');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`, `created_at`, `updated_at`) VALUES
(5, 'white', '2019-12-30 06:20:15', '2019-12-30 06:20:15'),
(6, 'green', '2019-12-30 06:20:18', '2019-12-30 06:20:18'),
(8, 'blue', '2019-12-30 06:45:06', '2019-12-30 06:45:06'),
(9, 'yellow', '2019-12-30 06:45:11', '2019-12-30 06:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'customer@gmail.com', '01811111111', 'Product Delivery', 'I am not get product yet', NULL, NULL),
(2, 'customer', 'customer@gmail.com', '01811111111', 'Product Delivery', 'I am not get product yet', '2019-12-29 11:13:40', '2019-12-29 11:13:40'),
(3, 'customer', 'customer@gmail.com', '01811111111', 'Product Delivery', 'I am not get product yet', '2019-12-29 11:14:18', '2019-12-29 11:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `email_address`, `mobile_number`, `password`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Md. Meraz Hossain', 'merazhossain64@gmail.com', '01629064868', 'e10adc3949ba59abbe56e057f20f883e', 'Badda, Dhaka-1207', NULL, NULL, '2019-12-26 09:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `policy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `name`, `address`, `phone`, `policy`, `created_at`, `updated_at`) VALUES
(1, 'Meraz Shop', 'Badda, Dhaka-1207', '01629064868', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an u', '2018-08-11 21:44:43', '2019-12-08 19:44:46'),
(3, 'Sohel Shop', 'Mohammadpur, Dhaka', '01939973873', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an u', '2018-08-14 18:34:54', '2019-12-08 19:45:17'),
(4, 'Raz Shop', 'Mohakhali, Dhaka', '01838738273', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an u', '2018-11-10 23:25:09', '2019-12-08 19:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_payment`
--

CREATE TABLE `delivery_payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `delivery_id` int(10) UNSIGNED DEFAULT NULL,
  `payable` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `remain` int(11) NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `invoice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_payment`
--

INSERT INTO `delivery_payment` (`id`, `delivery_id`, `payable`, `paid`, `remain`, `month`, `year`, `invoice`, `paid_by`, `created_at`, `updated_at`) VALUES
(32, 1, 100, 50, 50, 'December', 2019, '974935544', 'admin', '2019-12-30 10:42:04', '2019-12-30 10:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2018_07_11_045437_create_products_table', 1),
(4, '2018_07_14_043914_create_product_colors_table', 1),
(5, '2018_07_14_045036_create_product_sizes_table', 1),
(6, '2018_07_14_050903_create_product_images_table', 1),
(7, '2018_07_14_085102_create_categories_table', 1),
(8, '2018_07_14_085550_create_subcategories_table', 1),
(9, '2018_07_14_085602_create_childcategories_table', 1),
(10, '2018_07_15_044738_create_customers_table', 1),
(11, '2018_07_15_044916_create_addresses_table', 1),
(12, '2018_07_16_084613_create_suppliers_table', 1),
(13, '2018_07_16_114447_create_brands_table', 1),
(14, '2018_07_16_164143_create_deliveries_table', 1),
(15, '2018_07_17_085019_create_admins_table', 1),
(16, '2018_07_17_085840_create_roles_table', 1),
(17, '2018_07_17_085941_create_admin_role_table', 1),
(18, '2018_07_19_061341_create_orders_table', 1),
(19, '2018_07_19_065655_create_order_products_table', 1),
(20, '2018_07_21_045923_create_advertisements_table', 1),
(21, '2018_07_23_122448_create_reviews_table', 1),
(22, '2019_12_22_150713_create_settings_table', 2),
(23, '2019_12_23_150409_add_mobile_email_to_settings', 3),
(24, '2019_12_24_121547_create_allcustomers_table', 4),
(25, '2019_12_24_124010_create_customers_table', 5),
(26, '2019_12_24_161133_add_payment_type_to_orders', 6),
(27, '2019_12_29_170937_create_contacts_table', 7),
(28, '2019_12_30_114138_create_colors_table', 8),
(29, '2019_12_30_114220_create_sizes_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orderdeliveries`
--

CREATE TABLE `orderdeliveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED DEFAULT NULL,
  `delivery_id` int(11) DEFAULT NULL,
  `delivery_charge` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdeliveries`
--

INSERT INTO `orderdeliveries` (`id`, `order_id`, `delivery_id`, `delivery_charge`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 0.00, '2019-12-30 10:18:01', '2019-12-30 10:18:01'),
(2, NULL, 1, 0.00, '2019-12-30 10:18:19', '2019-12-30 10:18:19'),
(3, 1, 1, 50.00, '2019-12-30 10:33:14', '2019-12-30 10:33:14'),
(4, 2, 3, 50.00, '2019-12-30 10:33:52', '2019-12-30 10:33:52'),
(5, 3, 1, 50.00, '2019-12-30 10:36:51', '2019-12-30 10:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `delivery_charge` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `cycle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `address`, `customer_id`, `delivery_charge`, `total`, `cycle`, `code`, `created_at`, `updated_at`, `payment_type`) VALUES
(1, 'Badda, Dhaka-1207', 3, 50.00, 11000.00, 'success', '974935544', '2019-12-26 06:23:13', '2019-12-30 10:37:19', 'cash_on_delivery'),
(2, 'Badda, Dhaka-1207', 3, 50.00, 11000.00, 'ondelivery', '905621606', '2019-12-26 06:24:35', '2019-12-30 10:33:52', 'cash_on_delivery'),
(3, 'Badda, Dhaka-1207', 3, 50.00, 11000.00, 'success', '979872928', '2019-12-26 06:25:20', '2019-12-30 10:36:53', 'cash_on_delivery'),
(4, 'Badda, Dhaka-1207', 3, 50.00, 11000.00, 'new', '729848328', '2019-12-26 06:31:16', '2019-12-26 06:31:16', 'cash_on_delivery'),
(5, 'Badda, Dhaka-1207', 3, 50.00, 12500.00, 'new', '461567683', '2019-12-26 06:42:30', '2019-12-26 06:42:30', 'cash_on_delivery'),
(6, 'Badda, Dhaka-1207', 3, 50.00, 21500.00, 'new', '564056001', '2019-12-30 08:57:00', '2019-12-30 08:57:00', 'cash_on_delivery'),
(7, 'Badda, Dhaka-1207', 3, 50.00, 21500.00, 'new', '828633805', '2019-12-30 08:57:20', '2019-12-30 08:57:20', 'cash_on_delivery'),
(8, 'Badda, Dhaka-1207', 3, 50.00, 21500.00, 'new', '780730715', '2019-12-30 08:57:43', '2019-12-30 08:57:43', 'cash_on_delivery'),
(9, 'Badda, Dhaka-1207', 3, 50.00, 9000.00, 'new', '949833316', '2019-12-30 09:00:45', '2019-12-30 09:00:45', 'cash_on_delivery'),
(11, 'Badda, Dhaka-1207', 3, 50.00, 9000.00, 'new', '538693772', '2019-12-30 09:11:01', '2019-12-30 09:11:01', 'cash_on_delivery'),
(12, 'Badda, Dhaka-1207', 3, 50.00, 9000.00, 'new', '862192829', '2019-12-30 09:11:49', '2019-12-30 09:11:49', 'cash_on_delivery'),
(13, 'Badda, Dhaka-1207', 3, 50.00, 12500.00, 'new', '388114404', '2019-12-30 09:16:43', '2019-12-30 09:16:43', 'cash_on_delivery'),
(14, 'Badda, Dhaka-1207', 3, 50.00, 12500.00, 'new', '587465169', '2019-12-30 09:18:05', '2019-12-30 09:18:05', 'cash_on_delivery'),
(15, 'Badda, Dhaka-1207', 3, 50.00, 25000.00, 'new', '379557660', '2019-12-30 09:29:18', '2019-12-30 09:29:18', 'cash_on_delivery'),
(16, 'Badda, Dhaka-1207', 3, 50.00, 25000.00, 'new', '992978830', '2019-12-30 09:30:29', '2019-12-30 09:30:29', 'cash_on_delivery'),
(17, 'Badda, Dhaka-1207', 3, 50.00, 12500.00, 'new', '286288127', '2019-12-30 09:32:06', '2019-12-30 09:32:06', 'cash_on_delivery'),
(18, 'Badda, Dhaka-1207', 3, 50.00, 25000.00, 'new', '678550325', '2019-12-30 09:38:09', '2019-12-30 09:38:09', 'cash_on_delivery');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `attr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `qty`, `attr`, `color`, `size`, `created_at`, `updated_at`) VALUES
(1, 1, 155, 1, NULL, NULL, NULL, '2019-12-26 06:23:13', '2019-12-26 06:23:13'),
(2, 2, 155, 1, NULL, NULL, NULL, '2019-12-26 06:24:36', '2019-12-26 06:24:36'),
(3, 3, 155, 1, NULL, NULL, NULL, '2019-12-26 06:25:20', '2019-12-26 06:25:20'),
(4, 4, 155, 1, NULL, NULL, NULL, '2019-12-26 06:31:16', '2019-12-26 06:31:16'),
(5, 5, 154, 1, NULL, NULL, NULL, '2019-12-26 06:42:30', '2019-12-26 06:42:30'),
(6, 6, 156, 1, NULL, NULL, NULL, '2019-12-30 08:57:00', '2019-12-30 08:57:00'),
(7, 6, 154, 1, NULL, NULL, NULL, '2019-12-30 08:57:01', '2019-12-30 08:57:01'),
(8, 7, 156, 1, NULL, NULL, NULL, '2019-12-30 08:57:21', '2019-12-30 08:57:21'),
(9, 7, 154, 1, NULL, NULL, NULL, '2019-12-30 08:57:21', '2019-12-30 08:57:21'),
(10, 8, 156, 1, NULL, NULL, NULL, '2019-12-30 08:57:43', '2019-12-30 08:57:43'),
(11, 8, 154, 1, NULL, NULL, NULL, '2019-12-30 08:57:43', '2019-12-30 08:57:43'),
(12, 9, 156, 1, NULL, NULL, NULL, '2019-12-30 09:00:45', '2019-12-30 09:00:45'),
(14, 11, 156, 1, NULL, NULL, NULL, '2019-12-30 09:11:01', '2019-12-30 09:11:01'),
(15, 12, 156, 1, NULL, NULL, NULL, '2019-12-30 09:11:50', '2019-12-30 09:11:50'),
(16, 13, 154, 1, NULL, NULL, NULL, '2019-12-30 09:16:43', '2019-12-30 09:16:43'),
(17, 14, 154, 1, NULL, NULL, NULL, '2019-12-30 09:18:05', '2019-12-30 09:18:05'),
(18, 15, 154, 2, NULL, NULL, NULL, '2019-12-30 09:29:18', '2019-12-30 09:29:18'),
(19, 16, 154, 2, NULL, NULL, NULL, '2019-12-30 09:30:29', '2019-12-30 09:30:29'),
(20, 17, 154, 1, NULL, NULL, NULL, '2019-12-30 09:32:06', '2019-12-30 09:32:06'),
(21, 18, 154, 2, NULL, NULL, NULL, '2019-12-30 09:38:09', '2019-12-30 09:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `subcategory_id` int(10) UNSIGNED DEFAULT NULL,
  `child_category` int(10) UNSIGNED DEFAULT NULL,
  `supplier_id` int(10) UNSIGNED DEFAULT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `keypoint` text COLLATE utf8mb4_unicode_ci,
  `supplierprice` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `pcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category_id`, `subcategory_id`, `child_category`, `supplier_id`, `brand_id`, `description`, `keypoint`, `supplierprice`, `price`, `pcode`, `created_by`) VALUES
(154, 'Breguet Marine Automatic 40mm Mens Watch - 5517BBY25ZU', 13, 11, 12, 8, 12, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\r\n\r\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\r\n\r\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 12990.00, 12500.00, 'Code-001', 'admin'),
(155, 'Breguet Marine 18K Gold Papiere & Box Automatic Service 12/2019', 8, 13, 3, 8, 13, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 12000.00, 11000.00, 'Code-002', 'admin'),
(156, 'Omega Speedmaster Moonwatch Co‑Axial Chronograph 44.25 mm', 8, 13, 3, 8, 14, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 10000.00, 9000.00, 'Code-003', 'admin'),
(157, 'Rolex Submariner Date Hulk Unworn 40mm', 6, 8, 4, 8, 15, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 5000.00, 4500.00, 'Code-004', 'admin'),
(158, 'Rolex Submariner Hulk 116610LV', 7, 12, 4, 8, 12, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 6000.00, 5000.00, 'Code-005', 'admin'),
(159, 'Rolex Submariner Steel Automatic Green Dial Men\'s Watch', 8, 12, 6, 8, 15, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 12000.00, 9000.00, 'Code-007', 'admin'),
(160, 'Rolex Submariner Date Hulk 116610LV', 7, 12, 4, 8, 13, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 10000.00, 8000.00, 'Code-007', 'admin'),
(161, 'Audemars Piguet Offshore Chronograph Michael Schumacher', 8, 11, 7, 8, 12, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 9000.00, 8500.00, 'Code-008', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color`) VALUES
(48, 154, 'red'),
(49, 154, 'blue'),
(50, 154, 'black'),
(51, 156, 'red'),
(52, 156, 'green'),
(53, 156, 'white'),
(54, 160, 'green'),
(55, 160, 'white'),
(56, 160, 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`) VALUES
(155, 154, '12-17-2019_1101pm6713.png'),
(156, 154, '12-17-2019_1101pm2846.png'),
(157, 154, '12-17-2019_1101pm7889.png'),
(158, 154, '12-17-2019_1101pm5567.png'),
(159, 155, '12-17-2019_1103pm8162.png'),
(160, 155, '12-17-2019_1103pm1446.png'),
(161, 155, '12-17-2019_1103pm1864.png'),
(162, 155, '12-17-2019_1103pm5327.png'),
(163, 156, '12-17-2019_1104pm1934.png'),
(164, 156, '12-17-2019_1104pm2861.png'),
(165, 156, '12-17-2019_1104pm6296.png'),
(166, 156, '12-17-2019_1104pm9670.png'),
(167, 157, '12-17-2019_1105pm9783.png'),
(168, 157, '12-17-2019_1105pm6233.png'),
(169, 157, '12-17-2019_1105pm7992.png'),
(170, 157, '12-17-2019_1105pm8026.png'),
(171, 158, '12-17-2019_1107pm1317.png'),
(172, 158, '12-17-2019_1107pm9432.png'),
(173, 158, '12-17-2019_1107pm6969.png'),
(174, 158, '12-17-2019_1107pm4809.png'),
(175, 159, '12-17-2019_1108pm6174.png'),
(176, 159, '12-17-2019_1108pm7200.png'),
(177, 159, '12-17-2019_1108pm2870.png'),
(178, 159, '12-17-2019_1108pm6477.png'),
(179, 160, '12-17-2019_1108pm2243.png'),
(180, 160, '12-17-2019_1108pm1443.png'),
(181, 160, '12-17-2019_1108pm7809.png'),
(182, 160, '12-17-2019_1108pm2392.png'),
(183, 161, '12-17-2019_1109pm6240.png'),
(184, 161, '12-17-2019_1109pm7787.png'),
(185, 161, '12-17-2019_1109pm1680.png'),
(186, 161, '12-17-2019_1109pm9944.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size`) VALUES
(39, 158, 'l'),
(40, 158, 'm'),
(41, 158, 's'),
(42, 159, 'm'),
(43, 159, 's');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `customer`, `review`, `created_at`) VALUES
(2, 154, 'Md. Meraz Hossain', 'Good Product', '2019-12-22 14:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'customercare', NULL, NULL),
(3, 'dataentry', NULL, NULL),
(4, 'subadmin', NULL, NULL),
(5, 'analyst', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_logo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedIn_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `site_logo`, `favicon`, `address`, `facebook_link`, `twitter_link`, `instagram_link`, `linkedIn_link`, `copyright_text`, `created_at`, `updated_at`, `mobile`, `email`) VALUES
(2, 'Meraz Shop', '12-29-2019_0455pm6170.png', '12-22-2019_0433pm9672.ico', 'B/14, Block - E, Zakir Hossain Road, Mohammadpur, Dhaka - 1207', '#', '#', '#', '#', 'Copyright © Meraz 2019. All Right Reserved.', '2019-12-22 10:33:27', '2019-12-29 10:55:52', '01629064868', 'merazhossain64@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'L', '2019-12-30 05:49:13', '2019-12-30 05:49:13'),
(3, 'XL', '2019-12-30 05:49:18', '2019-12-30 05:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `subcategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory`) VALUES
(8, 6, 'Seiko'),
(11, 13, 'Cartier'),
(12, 7, 'Panerai'),
(13, 8, 'Zenith');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT 'a+',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `companyname`, `phone`, `email`, `address`, `point`, `created_at`, `updated_at`) VALUES
(8, 'Sohel', 'Sohel Limited', '01821438375', 'sohel@gmail.com', 'B/14, Block - E, Zakir Hossain Road, Mohammadpur, Dhaka - 1207', 'a+', '2019-12-14 13:39:19', '2019-12-14 13:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_payment`
--

CREATE TABLE `supplier_payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `payable` double(8,2) NOT NULL,
  `paid` double(8,2) NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier_payment`
--

INSERT INTO `supplier_payment` (`id`, `supplier_id`, `order_id`, `payable`, `paid`, `month`, `date`) VALUES
(4, 1, 24, 1000.00, 800.00, 'August', '18-08-11'),
(6, 1, 30, 100000.00, 0.00, 'August', '12-08-18'),
(7, 2, 30, 500.00, 400.00, 'August', '2018-08-12'),
(8, 2, 31, 500.00, 0.00, 'August', '13-08-18'),
(9, 1, 33, 100000.00, 0.00, 'August', '13-08-18'),
(10, 1, 34, 2000.00, 0.00, 'August', '13-08-18'),
(11, 1, 35, 10000.00, 0.00, 'September', '10-09-18'),
(12, 8, 66, 12000.00, 12000.00, 'December', '2019-12-22'),
(13, 8, 3, 12000.00, 0.00, 'December', '30-12-19'),
(14, 8, 1, 12000.00, 0.00, 'December', '30-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`),
  ADD KEY `admin_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `childcategories`
--
ALTER TABLE `childcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `childcategories_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_address_unique` (`email_address`),
  ADD UNIQUE KEY `customers_mobile_number_unique` (`mobile_number`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_payment`
--
ALTER TABLE `delivery_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discounts_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdeliveries`
--
ALTER TABLE `orderdeliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_code_unique` (`code`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email_address`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_colors_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_sizes_product_id_foreign` (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_payment`
--
ALTER TABLE `supplier_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_customer_id_foreign` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `childcategories`
--
ALTER TABLE `childcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `delivery_payment`
--
ALTER TABLE `delivery_payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `orderdeliveries`
--
ALTER TABLE `orderdeliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `supplier_payment`
--
ALTER TABLE `supplier_payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `childcategories`
--
ALTER TABLE `childcategories`
  ADD CONSTRAINT `childcategories_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdeliveries`
--
ALTER TABLE `orderdeliveries`
  ADD CONSTRAINT `orderdeliveries_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD CONSTRAINT `product_sizes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
