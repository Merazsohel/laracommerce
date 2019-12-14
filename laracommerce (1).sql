-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 05:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, 'admin', '', 'admin@gmail.com', '$2y$12$NgAlynXatEGZJayJPFvAkekzdelKA3ZEnI3aDWsQrGUFThvpBUt3S', 'KLxVBlvJsVCioSsslVtpjnciKYDoC9MWtybE9NNuHf8W086UooAZAxearta8', NULL, '2019-12-10 08:00:00'),
(5, 'sub', 'admin', 'subadmin@gmail.com', '$2y$10$z3MRApC3EoMn/DPSOD3lFOe9BtD7lHER59Uhf0JLzv6PpxQgLRedO', NULL, '2019-12-14 13:41:52', '2019-12-14 13:41:52');

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
(4, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `title`, `subtitle`, `link`, `position`, `photo`) VALUES
(5, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text', NULL, 'slider', '12-08-2019_1126am8811.jpg'),
(6, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text', NULL, 'slider', '12-08-2019_1128am6529.jpg'),
(7, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text', NULL, 'slider', '12-08-2019_1130am1846.png'),
(8, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text', NULL, 'slider', '12-08-2019_1131am3337.png');

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
(2, 'Brand One', '12-08-2019_1136am6133.png'),
(3, 'Brand Two', '12-08-2019_1136am3363.png'),
(4, 'Brand Three', '12-08-2019_1137am1705.png'),
(5, 'Brand Four', '12-08-2019_1137am2113.png'),
(6, 'Brand  Five', '12-08-2019_1137am8543.png'),
(7, 'Brand Six', '12-08-2019_1137am2527.png'),
(8, 'Brand Eight', '12-08-2019_1138am4095.png'),
(9, 'Brand Nine', '12-08-2019_1140am6536.png'),
(10, 'Brand Ten', '12-08-2019_1140am8708.png'),
(11, 'Brand Eleven', '12-08-2019_1140am4177.png');

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
(6, 'Category Four', '12-08-2019_1122am4923.png'),
(7, 'Category Five', '12-08-2019_1122am7940.png'),
(8, 'Category Three', '12-08-2019_1122am9175.png'),
(13, 'Category Two', '12-08-2019_1121am8888.png');

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
(3, 8, 'Child Three'),
(4, 8, 'Child Five'),
(6, 11, 'Child Seven'),
(7, 11, 'Child Eight'),
(12, 11, 'Child Two');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `email_address`, `password`, `mobile_number`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'Md.Meraz Hossain', 'merazhossain64@gmail.com', '25d55ad283aa400af464c76d713c07ad', '01821438375', 'B/14, Block - E, Zakir Hossain Road, Mohammadpur, Dhaka - 1207', NULL, NULL, NULL);

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
(26, 1, 60, 30, 30, 'August', 2018, '5643456', 'Admin', '2018-08-13 20:38:23', '2018-08-13 20:38:23'),
(27, 1, 60, 15, 15, 'August', 2018, '56434565', 'Admin', '2018-08-13 20:38:33', '2018-08-13 20:38:33'),
(28, 1, 60, 15, 0, 'August', 2018, '56434512', 'Admin', '2018-08-13 20:38:44', '2018-08-13 20:38:44'),
(29, 1, 120, 30, 30, 'August', 2018, '5643456', 'Admin', '2018-08-14 15:44:03', '2018-08-14 15:44:03'),
(30, 1, 120, 15, 15, 'August', 2018, '56434565', 'Admin', '2018-08-14 15:45:42', '2018-08-14 15:45:42'),
(31, 1, 120, 10, 5, 'August', 2018, '56434565', 'Admin', '2018-08-14 18:20:56', '2018-08-14 18:20:56');

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
(21, '2018_07_23_122448_create_reviews_table', 1);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `address`, `customer_id`, `delivery_charge`, `total`, `cycle`, `code`, `created_at`, `updated_at`) VALUES
(51, 'B/14, Block - E, Zakir Hossain Road, Mohammadpur, Dhaka - 1207', 18, 50.00, 35000.00, 'new', '966586903', '2019-12-14 16:37:52', '2019-12-14 16:37:52');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `qty`, `attr`, `created_at`, `updated_at`) VALUES
(30, 51, 6, 1, NULL, '2019-12-14 16:37:52', '2019-12-14 16:37:52');

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
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keypoint` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplierprice` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `pcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category_id`, `subcategory_id`, `child_category`, `supplier_id`, `brand_id`, `description`, `keypoint`, `supplierprice`, `price`, `pcode`, `created_by`) VALUES
(4, 'Product One', NULL, NULL, NULL, 2, NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 500.00, 550.00, 'p3645', 'Admin'),
(6, 'Product Two', 5, NULL, 1, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 30000.00, 35000.00, 'p3645', 'Admin'),
(7, 'Product Three', NULL, NULL, NULL, 1, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 100000.00, 120000.00, 'p3645', 'Admin'),
(12, 'Product Four', 3, NULL, 1, 2, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5000.00, 5505.00, 'p3645', 'Admin'),
(30, 'Product Five', 13, 11, 6, 4, 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 83.00, 90.00, 'MP', 'Admin'),
(31, 'Product Six', 13, 11, 6, 4, 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 92.00, 100.00, 'STB', 'Admin'),
(32, 'Product Seven', 13, 11, 7, 4, 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 125.00, 135.00, 'MD1', 'Admin'),
(33, 'Product Eight', 13, 11, 7, 4, 9, NULL, '<ul>\r\n	<li>Colgate herbal</li>\r\n	<li>Anti tooth decay toothpaste</li>\r\n	<li>Stronger and healthier teeth</li>\r\n</ul>', 111.00, 120.00, 'CH', 'Admin'),
(34, 'Product Nine', 13, 11, 7, 4, 9, NULL, '<ul>\r\n	<li>Foaming Toothpaste Cleans Hard-to-Reach Areas</li>\r\n	<li>30% More Foam as You Brush*</li>\r\n	<li>Long Lasting Fresh Breath</li>\r\n	<li>Removes Surface Stains to Whiten Teeth</li>\r\n	<li>*versus leading fluoride toothpaste</li>\r\n	<li>Sugar Free, Gluten Free</li>\r\n</ul>', 111.00, 120.00, 'CG', 'Admin'),
(35, 'Product Ten', 13, 11, 7, 4, 9, NULL, '<ul>\r\n	<li>Fights cavities.</li>\r\n	<li>Gently removes plaque and stains to whiten teeth with proper brushing.</li>\r\n	<li>Contains enamel-strengthening fluoride for effective cavity protection.</li>\r\n</ul>', 111.00, 120.00, 'PG', 'Admin'),
(36, 'Product Eleven', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>17% solution and neutral pH cleanses root canals rapidly</li>\r\n	<li>Helpful in enlarging of canals</li>\r\n	<li>Opens calcified canals</li>\r\n	<li>Water-based, easily reach narrow apical area and can be easily removed</li>\r\n</ul>', 740.00, 800.00, 'DS1', 'Admin'),
(37, 'Product Twelve', 13, 11, 8, 4, 9, '<ul>\r\n	<li>Chemical root canal dilatation.</li>\r\n	<li>Location of canal entrances.</li>\r\n	<li>Citric acid is a mild, slightly antibacterial, biocompatible chelating agent that forms a relatively stable chelate complex with the calcium ions in the dentine (action similar to EDTA preparations). This demineralizes and softens hard dental substance and removes the smear layer on the canal wall, thus opening the dentine tubuli and even widening them.</li>\r\n	<li>Residual citric acid must be thoroughly flushed out to prevent continuing demineralization along the length of the tubuli. Opening up the dentine tubuli facilitates adaptation of the root canal sealer, generally improving the sealing of the root canal filling. This effect is further enhanced by activating the solution with ultrasound.</li>\r\n	<li>Calcium hydroxide residues can also be reliably removed (for instance from a medical inlay).</li>\r\n	<li>Allergic reactions to citric acid.</li>\r\n	<li>Wide-open apical foramen.</li>\r\n</ul>', '<ul>\r\n	<li><em>Mild chelating agent used as a root canal irrigant/cleaner and conditioner that facilitates the removal of smear layer and dissolves calcium hydroxide.</em></li>\r\n	<li>Low-viscosity&nbsp;<strong><em>40% solution of citric acid</em></strong>&nbsp;in purified water</li>\r\n</ul>', 648.00, 700.00, 'CA', 'Admin'),
(39, 'Product Thirteen', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>The FORMOCRESOL is a Dental Pulp Mummification Material</li>\r\n	<li>Its formulation attends the concepts adopted by the current researches being, therefore, more diluted than the standard composition of Buckley, but it has the same or superior effectiveness, and a larger biological compatibility.</li>\r\n	<li>Its function is to fasten the alive pulps, maintaining them inert and facilitating the conservation in deciduous tooth until a close time of the physiologic fall (pulpotomy).</li>\r\n	<li>It has a potent antibacterial action by its components action, which justifies its use in long curative in endodontics treatment.</li>\r\n	<li>Its function and fix the living pulp, keeping them inert and enabling the conservation of deciduous tooth until a nearby epoch of physiological fall (pulpotomy).&nbsp;</li>\r\n	<li>Antiseptic</li>\r\n	<li>Mumificante The pulp tissue</li>\r\n</ul>', 463.00, 500.00, 'FM01', 'Admin'),
(40, 'Product Fourteen', 13, 11, 8, 4, 9, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>', 555.00, 600.00, 'CP', 'Admin'),
(41, 'Product Fifteen', 8, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>It treats periapical infections.&nbsp;</li>\r\n	<li>The oily composition remains active for a long time, helps</li>\r\n</ul>', 462.00, 500.00, 'CP20', 'Admin'),
(42, 'Product Sixteen', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Low maintenance</li>\r\n	<li>Water resistance</li>\r\n	<li>Comfort underfoot</li>\r\n	<li>Stain resistance</li>\r\n</ul>', 3330.00, 3600.00, 'VS', 'Admin'),
(43, 'Product Seventeen', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>The product is sufficiently viscous and allows easy application and control over the place to be protected</li>\r\n	<li>Excelent adhesion on the gingiva</li>\r\n	<li>High adhesion isolation</li>\r\n	<li>Easily removed</li>\r\n	<li>No gingival tissue irritation</li>\r\n	<li>Blue shade</li>\r\n</ul>', 832.00, 900.00, 'i-block', 'Admin'),
(44, 'Product Eighteen', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>For home bleaching of vital teeth</li>\r\n	<li>For home bleaching of non-vital teeth</li>\r\n	<li>For home bleaching of discoloured teeth</li>\r\n	<li>Simple to use</li>\r\n	<li>Minimally invasive treatment</li>\r\n	<li>Ideal consistency</li>\r\n	<li>With fluoride</li>\r\n</ul>', 462.00, 500.00, 'Taste  Apple', 'Admin'),
(45, 'Product Nineteen', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Simple to use</li>\r\n	<li>Minimally invasive treatment</li>\r\n	<li>Ideal consistency</li>\r\n	<li>With fluoride</li>\r\n</ul>', 370.00, 400.00, 'Taste Orange', 'Admin'),
(46, 'Product Twenty', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Frenna-AC is a buffered 25% Aluminum Chloride Solution.</li>\r\n	<li>It is epinephrine-free to prevent cardiac reactions.</li>\r\n	<li>It stops minor gingival bleeding very effectively.</li>\r\n	<li>It is recommended to arrest bleeding during crown preparations, before impression taking, for minor surgery, curettage, gingivectomies and deep scaling.</li>\r\n	<li>It is easily absorbed by retraction cords</li>\r\n</ul>', 600.00, 650.00, 'Hemostatic Solution', 'Admin'),
(47, 'Product Twenty One', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Cord is made of 100% cotton</li>\r\n	<li>Knitted into thousands of tiny loops forming long interlocking chains</li>\r\n	<li>The unique knitted design exerts a gentle continuous outward force following placement as knitted loops seek to open</li>\r\n	<li>Easy to control and place</li>\r\n	<li>Will not tangle in burs or packers</li>\r\n</ul>', 740.00, 800.00, 'Knitted Retraction Cord', 'Admin'),
(48, 'ProductTwenty Two', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Simple to use</li>\r\n	<li>Minimally invasive treatment</li>\r\n	<li>Ideal consistency</li>\r\n	<li>Low fluoride contents</li>\r\n</ul>', 324.00, 350.00, 'Fluoride Gel', 'Admin'),
(49, 'Product Twenty Three', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Hygienic dispensing</li>\r\n	<li>Bends into any angle for the placement of small controlled amounts of material in limited access areas</li>\r\n	<li>Multiple applicator colors are available to identify different materials during a procedure</li>\r\n	<li>Three precise head sizes, Regular (2.5 mm), Fine (2.00 mm) and Ultrafine (1.5 mm</li>\r\n</ul>', 370.00, 400.00, 'Disposable Micro Applicators', 'Admin'),
(50, 'Product 24', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Simple to use</li>\r\n	<li>Minimally invasive treatment</li>\r\n	<li>Ideal consistency</li>\r\n	<li>With fluorid</li>\r\n</ul>', 462.00, 500.00, 'Cotton Rolls', 'Admin'),
(51, 'Product 25', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Simple to use</li>\r\n	<li>Minimally invasive treatment</li>\r\n	<li>Ideal consistency</li>\r\n	<li>With fluoride</li>\r\n</ul>', 462.00, 500.00, 'Cotton Rolls', 'Admin'),
(52, 'Product 26', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>For lubrication and cleaning of turbines and handpieces.</li>\r\n</ul>', 1156.00, 1250.00, 'Handpiece Lubricant Spray', 'Admin'),
(53, 'Product 27', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Used for stain removal and polishing</li>\r\n	<li>Prepares surface for sealant and orthodontic procedures</li>\r\n	<li>Single use</li>\r\n	<li>For professional dental application only</li>\r\n</ul>', 370.00, 400.00, 'Prophy Brushes', 'Admin'),
(54, 'Product 28', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Flexible to reach into occlusal fissures and grooves to remove debris without injury</li>\r\n	<li>Excellent for polishing composite restorations</li>\r\n	<li>Latex free</li>\r\n</ul>', 462.00, 500.00, 'Prophy Brushes', 'Admin'),
(55, 'Product 29', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Flexible to reach into occlusal fissures and grooves to remove debris without injury</li>\r\n	<li>Excellent for polishing composite restorations</li>\r\n	<li>Latex free</li>\r\n</ul>', 462.00, 500.00, 'Prophy Brushes', 'Admin'),
(57, 'Product 30', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Simple to use</li>\r\n	<li>Fresh taste</li>\r\n	<li>With or without fluoride</li>\r\n</ul>', 370.00, 400.00, 'Prophy faste', 'Admin'),
(58, 'Product 31', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Thixotropic</li>\r\n	<li>Optimum level of viscosity</li>\r\n	<li>37% phosphoric acid</li>\r\n</ul>', 878.00, 950.00, 'Phosphoric Acid', 'Admin'),
(59, 'Product 32', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Thixotropic.</li>\r\n	<li>Optimum level of viscosity.</li>\r\n	<li>37% phosphoric acid.</li>\r\n</ul>', 555.00, 600.00, 'Phosphoric Acid', 'Admin'),
(60, 'Product 33', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>To clean debris, plaque, calculus, stains and other accretions from the teeth</li>\r\n	<li>For the teeth surface preparation (cleaning and polishing) prior to restorations and fluoride treatment</li>\r\n	<li>For recontouring, finishing and polishing the surface after restoration to restore normal contours, smooth margins and to create a high luster shine, the overal appearance and longevity of the restoration itself</li>\r\n	<li>Thixotropic</li>\r\n	<li>Optimum level of viscosity</li>\r\n	<li>37% phosphoric acid</li>\r\n</ul>', 277.00, 300.00, 'Phosphoric Acid', 'Admin'),
(61, 'Product 34', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Quick curing</li>\r\n	<li>High adhesion</li>\r\n	<li>High strenght and hardness</li>\r\n	<li>Easily packable consistency</li>\r\n	<li>Ideal for temporary fillings of short and extended periods</li>\r\n	<li>All temporary fillings</li>\r\n</ul>', 694.00, 750.00, 'Filling Material', 'Admin'),
(62, 'Product 35', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>High adhesion</li>\r\n	<li>Non sticky</li>\r\n	<li>Radiopaque</li>\r\n	<li>High strength and hardness</li>\r\n	<li>Easily packable</li>\r\n	<li>Different hardness after setting</li>\r\n	<li>Eugenol free</li>\r\n</ul>', 462.00, 500.00, 'Temporary Filling Material', 'Admin'),
(63, 'Product 36', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>For disinfection of root canal</li>\r\n	<li>To irrigate canal after filling with appropriate chelating agent</li>\r\n	<li>Irrigates root canal</li>\r\n	<li>Helps debride root canal</li>\r\n	<li>Disinfects root canal during instrumentation</li>\r\n</ul>', 694.00, 750.00, 'Sodium Hypochlorite', 'Admin'),
(64, 'Product 37', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Irrigates root canal.</li>\r\n	<li>Helps debride root canal.</li>\r\n	<li>Disinfects root canal during instrumentation</li>\r\n</ul>', 600.00, 650.00, 'Sodium Hypochlorite', 'Admin'),
(65, 'Product 38', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>17% solution and neutral pH cleanses root canals rapidly</li>\r\n	<li>Helpful in enlarging of canals</li>\r\n	<li>Opens calcified canals</li>\r\n</ul>', 1850.00, 2000.00, 'I-edta', 'Admin'),
(66, 'Product 39', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Antibacterial effect</li>\r\n	<li>Helps to find the root canal entrys</li>\r\n	<li>Reduces file breakage during mechanical preparation</li>\r\n	<li>EDTA helps in chelating the calcium salts</li>\r\n	<li>Gel helps lubricate endodontic instrument and makes penetration easier</li>\r\n	<li>Carbamide peroxide in EDTA promotes internal bleaching on irrigation with hypochlorite solution</li>\r\n	<li>&nbsp;</li>\r\n</ul>', 694.00, 750.00, 'I-edta-2', 'Admin'),
(67, 'Product 40', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Radiopaque</li>\r\n	<li>Easy to insert in the canal</li>\r\n	<li>Antiseptic and anti-inflammatory activity lasts for several hours after being placed in the canal</li>\r\n</ul>', 1388.00, 1500.00, 'I-endo- 3', 'Admin'),
(68, 'Product 41', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Time-saving direct application and&nbsp;faster action.</li>\r\n	<li>Increased antimicrobial effect.</li>\r\n	<li>Radiopaque integrated.</li>\r\n	<li>High pH value good for use.</li>\r\n	<li>Excellent antibacterial and bacteriostatic properties.</li>\r\n	<li>Ensures complete coating of canal walls.</li>\r\n	<li>Prolonged release of calcium hydroxide helps create secondary dentine.</li>\r\n	<li>Excellent bio-compatibility with no toxic effects on cells.</li>\r\n	<li>Non hardening paste with silicon oil base.</li>\r\n	<li>Stimulates hard tissue formation.</li>\r\n	<li>Stimulates apexification and apexogenesis.</li>\r\n	<li>Ideal for infected root canals and vital pulpotomies in deciduous teeth.</li>\r\n	<li>Can be used in conjunction with gutta percha points and regular root canal sealants.</li>\r\n</ul>', 2035.00, 2200.00, 'I-cal Plus', 'Admin'),
(69, 'Product 42', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Time-saving direct application</li>\r\n	<li>Increased antimicrobial effect</li>\r\n	<li>Radiopaque</li>\r\n	<li>High pH value</li>\r\n	<li>Excellent antibacterial and bacteriostatic properties</li>\r\n	<li>Ensures complete coating of canal walls</li>\r\n	<li>Prolonged release of calcium hydroxide helps create secondary dentine</li>\r\n	<li>Excellent bio-compatibility with no toxic effects on cells</li>\r\n	<li>Non hardening paste with silicon oil base</li>\r\n	<li>Stimulates hard tissue formation</li>\r\n	<li>Stimulates apexification and apexogenesis</li>\r\n	<li>Ideal for infected root canals and vital pulpotomies in deciduous teeth</li>\r\n	<li>Can be used in conjunction with gutta percha points and regular root canal sealant</li>\r\n</ul>', 555.00, 600.00, 'I-cal Plus-2', 'Admin'),
(70, 'Product 43', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Time-saving direct application.</li>\r\n	<li>Easy removal, as the material does not set when in place.</li>\r\n	<li>Radiopaque.</li>\r\n	<li>High pH value.</li>\r\n	<li>Water based element.</li>\r\n</ul>', 416.00, 450.00, 'I-cal', 'Admin'),
(71, 'Product 44', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>High strength</li>\r\n	<li>Quick setting</li>\r\n	<li>Resin modified</li>\r\n</ul>', 1388.00, 1500.00, 'Eugenol Liquid', 'Admin'),
(72, 'Product 45', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Bases and linings under amalgams.</li>\r\n	<li>Bases and linings under glass ionomers.</li>\r\n	<li>Temporary fillings.</li>\r\n	<li>Temporary fixing crowns and bridges.</li>\r\n	<li>High strength.</li>\r\n	<li>Faster setting.</li>\r\n	<li>Resin modified.</li>\r\n</ul>', 600.00, 650.00, 'Eugenol Cement', 'Admin'),
(73, 'Product 46', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>High strength</li>\r\n	<li>Quick setting</li>\r\n	<li>Resin modified</li>\r\n</ul>', 508.00, 550.00, 'Oxide Powder', 'Admin'),
(74, 'Product 47', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>High adhesion (chemically bonds to the tooth structure)</li>\r\n	<li>Fluoride release</li>\r\n	<li>Radiopaque</li>\r\n</ul>', 740.00, 800.00, 'Polycarboxylate Cement', 'Admin'),
(75, 'Product 48', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Linings under composites.</li>\r\n	<li>Linings under amalgams.</li>\r\n	<li>Temporary fillings.</li>\r\n	<li>Cementation of crowns and bridges.</li>\r\n	<li>Cementation of inlays and onlays.</li>\r\n	<li>Cementation of orthodontic brackets and bands.</li>\r\n	<li>High adhesion to dentin, enamel and alloys.</li>\r\n	<li>Quick setting.</li>\r\n</ul>', 600.00, 650.00, 'Phosphate Cement', 'Admin'),
(76, 'Product 49', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Removes smear layer and debris for improved bonding.</li>\r\n	<li>10 second application.</li>\r\n	<li>Longevity of the restoration.</li>\r\n	<li>Leaves smear plugs in the tubules (less risk sensitivity after operative).</li>\r\n</ul>', 555.00, 600.00, 'I-sol', 'Admin'),
(78, 'Product 50', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Quick setting</li>\r\n	<li>High adhesion</li>\r\n	<li>Resin modified</li>\r\n	<li>Radiopaque</li>\r\n	<li>Low film thickness&nbsp; and good aesthetic</li>\r\n	<li>Good translucency</li>\r\n	<li>Excellent biocompatibility</li>\r\n	<li>Contains and releases fluoride ions</li>\r\n	<li>Excellent thermal expansion</li>\r\n	<li>Lower odour than competitive products</li>\r\n</ul>', 1800.00, 1950.00, 'IF', 'Admin'),
(79, 'Product 51', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Base linings under composite restorations and amalgams</li>\r\n	<li>Fast-setting</li>\r\n	<li>Radiopaque</li>\r\n	<li>Excellent thermal expansion</li>\r\n	<li>High strength and hardness</li>\r\n	<li>Contains and releases fluoride ions</li>\r\n</ul>', 416.00, 450.00, 'Glass Ionomer Base', 'Admin'),
(80, 'Product 52', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Fast-setting</li>\r\n	<li>Radiopaque</li>\r\n	<li>Excellent thermal expansion</li>\r\n	<li>High strength and hardness</li>\r\n	<li>Contains and releases fluoride ions</li>\r\n</ul>', 1800.00, 1950.00, 'Base Lining Cement', 'Admin'),
(81, 'Product 53', 13, 11, 8, 4, 9, NULL, '<ul>\r\n	<li>Fast-setting</li>\r\n	<li>Radiopaque</li>\r\n	<li>Non-translucent silver reinforced</li>\r\n	<li>Excellent thermal expansion</li>\r\n	<li>High strength and hardness</li>\r\n	<li>Contains and releases fluoride ions</li>\r\n</ul>', 416.00, 450.00, 'I-sil Liquid- Silver', 'Admin');

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
(4, 4, 'red'),
(5, 4, 'blue'),
(9, 6, 'red'),
(10, 6, 'blue'),
(11, 6, 'black'),
(24, 30, 'pink'),
(25, 49, 'blue'),
(29, 40, 'red');

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
(6, 4, '192181.png'),
(7, 4, '364121.png'),
(10, 6, '496336.png'),
(11, 6, '804221.png'),
(12, 7, '812548.png'),
(13, 7, '760943.png'),
(18, 12, '111482.png'),
(30, 30, '288492.png'),
(31, 31, '768164.png'),
(32, 32, '573613.png'),
(33, 33, '419303.png'),
(34, 34, '394311.png'),
(35, 35, '183536.png'),
(36, 36, '660879.png'),
(37, 37, '906642.png'),
(39, 39, '553886.png'),
(40, 40, '400610.png'),
(41, 41, '116664.png'),
(42, 42, '671323.png'),
(43, 43, '213037.png'),
(44, 44, '226393.png'),
(45, 45, '735566.png'),
(46, 46, '754701.png'),
(47, 47, '569833.png'),
(48, 48, '288557.png'),
(49, 49, '870208.png'),
(50, 50, '499688.png'),
(51, 51, '936330.png'),
(52, 52, '862746.png'),
(53, 53, '858954.png'),
(54, 54, '766376.png'),
(55, 55, '294372.png'),
(57, 57, '379049.png'),
(58, 58, '551069.png'),
(59, 59, '341667.png'),
(60, 60, '905406.png'),
(61, 61, '659505.png'),
(62, 62, '311771.png'),
(63, 63, '651811.png'),
(64, 64, '869695.png'),
(65, 65, '215364.png'),
(66, 66, '254040.png'),
(67, 67, '933486.png'),
(68, 68, '642184.png'),
(69, 69, '141387.png'),
(70, 70, '417866.png'),
(71, 71, '580221.png'),
(72, 72, '589835.png'),
(73, 73, '713939.png'),
(74, 74, '414244.png'),
(75, 75, '621903.png'),
(76, 76, '638860.png'),
(78, 78, '367750.png'),
(79, 79, '871905.png'),
(80, 80, '600390.png'),
(81, 81, '305342.png');

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
(5, 4, 'l'),
(6, 4, 'xl'),
(7, 4, 's'),
(22, 49, 'l'),
(25, 40, 'xl');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `product_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, 6, 'Sub-Category Four'),
(11, 13, 'Sub-Category Two'),
(12, 7, 'Sub-Category Five'),
(13, 8, 'Sub-Category Three');

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
(11, 1, 35, 10000.00, 0.00, 'September', '10-09-18');

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
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_customer_id_foreign` (`customer_id`);

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `childcategories`
--
ALTER TABLE `childcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery_payment`
--
ALTER TABLE `delivery_payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orderdeliveries`
--
ALTER TABLE `orderdeliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier_payment`
--
ALTER TABLE `supplier_payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
