-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2024 at 04:26 PM
-- Server version: 10.11.4-MariaDB-1~deb12u1
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdv`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance_salaries`
--

CREATE TABLE `advance_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `advance_salary` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advance_salaries`
--

INSERT INTO `advance_salaries` (`id`, `employee_id`, `month`, `year`, `status`, `advance_salary`, `created_at`, `updated_at`) VALUES
(88, 28, 'Enero', '2024', NULL, NULL, '2024-01-17 16:54:49', NULL),
(89, 29, 'Enero', '2024', NULL, NULL, '2024-01-17 16:55:36', NULL),
(90, 30, 'Enero', '2024', NULL, NULL, '2024-01-17 16:58:19', NULL),
(91, 31, 'Enero', '2024', NULL, NULL, '2024-01-17 16:58:42', NULL),
(92, 32, 'Enero', '2024', NULL, NULL, '2024-01-17 16:59:35', NULL),
(93, 33, 'Enero', '2024', NULL, NULL, '2024-01-17 17:00:29', NULL),
(94, 34, 'Enero', '2024', NULL, NULL, '2024-01-17 17:00:57', NULL),
(95, 35, 'Enero', '2024', NULL, NULL, '2024-01-17 17:01:38', NULL),
(96, 36, 'Enero', '2024', NULL, NULL, '2024-01-17 17:02:15', NULL),
(97, 37, 'Enero', '2024', NULL, NULL, '2024-01-17 17:02:51', NULL),
(98, 37, 'Diciembre', '2023', 'Pagado', '500', '2024-01-17 17:11:32', '2024-01-17 17:12:16'),
(99, 36, 'Diciembre', '2023', NULL, '300.5', '2024-01-18 18:49:59', '2024-01-18 18:49:59'),
(100, 35, 'Diciembre', '2023', NULL, NULL, '2024-01-17 17:08:55', NULL),
(101, 34, 'Diciembre', '2023', NULL, NULL, '2024-01-17 17:08:55', NULL),
(102, 33, 'Diciembre', '2023', NULL, NULL, '2024-01-17 17:08:55', NULL),
(103, 31, 'Diciembre', '2023', NULL, NULL, '2024-01-17 17:08:55', NULL),
(104, 30, 'Diciembre', '2023', NULL, NULL, '2024-01-17 17:08:55', NULL),
(105, 32, 'Diciembre', '2023', NULL, NULL, '2024-01-17 17:08:55', NULL),
(106, 29, 'Diciembre', '2023', NULL, NULL, '2024-01-17 17:08:55', NULL),
(107, 28, 'Diciembre', '2023', NULL, NULL, '2024-01-17 17:08:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `anios`
--

CREATE TABLE `anios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anio` varchar(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anios`
--

INSERT INTO `anios` (`id`, `anio`, `created_at`, `updated_at`) VALUES
(1, '2023', NULL, NULL),
(2, '2024', NULL, '2024-01-12 19:49:34'),
(5, '2025', NULL, NULL),
(6, '2026', NULL, NULL),
(7, '2027', NULL, NULL),
(8, '2028', NULL, NULL),
(9, '2029', NULL, NULL),
(10, '2030', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attend_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `employee_id`, `date`, `attend_status`, `created_at`, `updated_at`) VALUES
(101, 28, '2023-12-19', 'Presente', '2024-01-17 17:14:42', '2024-01-17 17:14:42'),
(102, 29, '2023-12-19', 'Presente', '2024-01-17 17:14:42', '2024-01-17 17:14:42'),
(103, 30, '2023-12-19', 'Presente', '2024-01-17 17:14:42', '2024-01-17 17:14:42'),
(104, 31, '2023-12-19', 'Presente', '2024-01-17 17:14:42', '2024-01-17 17:14:42'),
(105, 32, '2023-12-19', 'Presente', '2024-01-17 17:14:42', '2024-01-17 17:14:42'),
(106, 33, '2023-12-19', 'Ausente', '2024-01-17 17:14:42', '2024-01-17 17:14:42'),
(107, 34, '2023-12-19', 'Permiso', '2024-01-17 17:14:42', '2024-01-17 17:14:42'),
(108, 35, '2023-12-19', 'Permiso', '2024-01-17 17:14:42', '2024-01-17 17:14:42'),
(109, 36, '2023-12-19', 'Presente', '2024-01-17 17:14:42', '2024-01-17 17:14:42'),
(110, 37, '2023-12-19', 'Presente', '2024-01-17 17:14:42', '2024-01-17 17:14:42'),
(111, 28, '2024-01-15', 'Presente', '2024-01-17 17:15:02', '2024-01-17 17:15:02'),
(112, 29, '2024-01-15', 'Presente', '2024-01-17 17:15:02', '2024-01-17 17:15:02'),
(113, 30, '2024-01-15', 'Presente', '2024-01-17 17:15:02', '2024-01-17 17:15:02'),
(114, 31, '2024-01-15', 'Presente', '2024-01-17 17:15:02', '2024-01-17 17:15:02'),
(115, 32, '2024-01-15', 'Presente', '2024-01-17 17:15:02', '2024-01-17 17:15:02'),
(116, 33, '2024-01-15', 'Presente', '2024-01-17 17:15:02', '2024-01-17 17:15:02'),
(117, 34, '2024-01-15', 'Presente', '2024-01-17 17:15:02', '2024-01-17 17:15:02'),
(118, 35, '2024-01-15', 'Presente', '2024-01-17 17:15:02', '2024-01-17 17:15:02'),
(119, 36, '2024-01-15', 'Presente', '2024-01-17 17:15:02', '2024-01-17 17:15:02'),
(120, 37, '2024-01-15', 'Ausente', '2024-01-17 17:15:02', '2024-01-17 17:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(2, 'Frutas y Verduras', '2024-01-17 17:27:45', NULL),
(3, 'Carnes, Pescados y Mariscos', '2024-01-17 17:28:16', '2024-01-18 16:48:06'),
(5, 'Mascotas', '2024-01-17 17:28:29', NULL),
(6, 'Lácteos', '2024-01-17 17:28:43', '2024-01-18 16:47:48'),
(7, 'Congelados', '2024-01-17 17:28:51', NULL),
(8, 'Bebidas y Licores', '2024-01-17 17:28:56', '2024-01-18 16:47:26'),
(9, 'Abarrotes', '2024-01-17 17:29:03', '2024-01-18 16:45:59'),
(10, 'Hogar y Autos', '2024-01-17 17:29:10', '2024-01-18 16:45:47'),
(11, 'Electrónica', '2024-01-17 17:29:16', '2024-01-18 16:45:26'),
(12, 'Ferretería', '2024-01-17 17:29:22', NULL),
(13, 'Juguetería', '2024-01-18 16:52:06', '2024-01-18 16:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `shopname` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `account_holder` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `shopname`, `image`, `account_holder`, `account_number`, `bank_name`, `bank_branch`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Jonas Banks', 'ruxuryru@mailinator.com', '+1 (858) 768-7855', 'Sed fugit consectet', 'Shaine Browning', 'upload/customer/1780935966691541.png', 'Jonas Banks', '456456456', 'Santander', 'La Mesa', 'Tijuana, BC', '2023-10-28 08:54:50', '2023-10-28 08:54:50'),
(2, 'Uriel Crane', 'ruxyryfo@mailinator.com', '+1 (579) 569-1913', 'ARTICULO 27 NO. 4100 7, A. CONSTITUCION', 'Carter Savage', 'upload/customer/1780935777498890.jpg', 'Uriel Crane', '599876A', 'Garrison Rocha', 'Beatae consequatur', 'Consectetur sunt par', '2023-10-28 08:53:48', '2023-10-28 08:53:48'),
(4, 'Chiquita Peck', 'ligezinaq@mailinator.com', '+1 (828) 422-6711', '68 Green Old Extension', 'Paki Mcintyre', 'upload/customer/1781141949718532.jpg', 'Chiquita Peck', '574', 'Samson Estrada', 'Rerum quos placeat', 'Tijuana, BC', '2023-10-30 15:28:51', NULL),
(5, 'Cheryl Herrera', 'tenewet@mailinator.com', '+1 (692) 696-4726', '97 East White Second Extension', 'Wesley Lott', 'upload/customer/1781141990576246.jpg', 'Cheryl Herrera', '908', 'Ruth Ferguson', 'Ipsum dolore dolore', 'Tijuana, BC', '2023-10-30 15:29:30', NULL),
(6, 'Jack Rose', 'tuketikuw@mailinator.com', '+1 (248) 551-5772', '17 West Milton Extension', 'Kelsie Goodman', 'upload/customer/1781142027670086.jpeg', 'Jack Rose', '157', 'Beverly Austin', 'Pariatur Ullamco te', 'Mexicali B.C.', '2023-10-30 15:30:05', NULL),
(7, 'Leigh Thompson', 'hycehocyd@mailinator.com', '+1 (381) 957-6672', '729 South Milton Parkway', 'Blaze Bowman', 'upload/customer/1781142117615006.jpg', 'Leigh Thompson', '177', 'Abdul Cummings', 'Nobis nihil accusamue', 'Ensenada BC', '2023-10-30 15:31:31', NULL),
(8, 'Olga Roth', 'vydyxol@mailinator.com', '+1 (845) 712-8225', '221 West Milton Drive', 'Lael Stone', 'upload/customer/1781142141173818.jpg', 'Olga Roth', '120', 'Cherokee Sutton', 'Explicabo Reiciendi', 'Tijuana, BC', '2023-10-30 15:31:53', NULL),
(9, 'Dawn Foster', 'syxovy@mailinator.com', '+1 (845) 479-3775', '61 South Cowley Street', 'Colette Schneider', 'upload/customer/1781142177240484.jpg', 'Dawn Foster', '217', 'Nehru Landry', 'Nostrum impedit sun', 'Ensenada BC', '2023-10-30 15:32:28', NULL),
(10, 'Tyler Hamilton', 'coxyha@mailinator.com', '+1 (171) 656-4716', '407 New Boulevard', 'Liberty Vaughn', 'upload/customer/1781142326903221.jpg', 'Tyler Hamilton', '304', 'John Bowen', 'Aut placeat dolorib', 'Tijuana, BC', '2023-10-30 15:34:51', NULL),
(11, 'Brady Morse', 'wodagiha@mailinator.com', '+1 (269) 159-6208', '28 Nobel Court', 'Odysseus Daniel', 'upload/customer/1781142361936361.jpg', 'Brady Morse', '685', 'Brandon Gonzalez', 'Magna ut ut nisi lau', 'Mexicali B.C.', '2023-10-30 15:35:24', NULL),
(12, 'Herman Houston', 'cirakylef@mailinator.com', '+1 (581) 739-7039', '99 Milton Drive', 'Kylan Berry', 'upload/customer/1781142391989142.jpg', 'Herman Houston', '736', 'Upton Cabrera', 'Labore facilis volup', 'Tijuana, BC', '2023-10-30 15:35:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `vacation` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `address`, `experience`, `image`, `salary`, `vacation`, `city`, `created_at`, `updated_at`) VALUES
(28, 'Odette Roman', 'sumyv@mailinator.com', '+1 (763) 248-8128', '158 Cowley Boulevard', '5 Años', 'upload/employee/1788357366560531.jpg', '15600', '5', 'Tijuana, BC', '2024-01-17 16:54:49', NULL),
(29, 'George Lucas', 'fawepaj@mailinator.com', '+1 (416) 527-2342', '869 Cowley Drive', '5 Años', 'upload/employee/1788357415855891.jpg', '20000', '10', 'CDMX', '2024-01-17 16:55:36', NULL),
(30, 'Hope Mcdowell', 'byzaqiwa@mailinator.com', '+1 (308) 487-2042', '873 Second Parkway', '1 Año', 'upload/employee/1788357586901750.jpg', '15800', '5', 'Tijuana, BC', '2024-01-17 16:59:47', '2024-01-17 16:59:47'),
(31, 'Jolie Hodge', 'kisigigi@mailinator.com', '+1 (362) 396-6028', '789 New Parkway', '5 Años', 'upload/employee/1788357611476850.jpg', '18000', '5', 'Tijuana, BC', '2024-01-17 16:59:56', '2024-01-17 16:59:56'),
(32, 'John Strickland', 'nuca@mailinator.com', '+1 (746) 703-6622', '19 South New Boulevard', '2 Años', 'upload/employee/1788357666720077.jpg', '16500', '5', 'Ensenada BC', '2024-01-17 16:59:35', NULL),
(33, 'Autumn Burns', 'kerokojo@mailinator.com', '+1 (527) 408-1725', '35 White Milton Extension', '3 Años', 'upload/employee/1788357723866320.jpg', '14500', '5', 'Tijuana, BC', '2024-01-17 17:00:29', NULL),
(34, 'Moses Curtis', 'kizovux@mailinator.com', '+1 (469) 304-3422', '58 West Rocky Hague Lane', '3 Años', 'upload/employee/1788357752736524.jpg', '16500', '5', 'Tijuana, BC', '2024-01-17 17:00:57', NULL),
(35, 'Alyssa Phelps', 'hehoxan@mailinator.com', '+1 (489) 727-2251', '669 South Rocky Milton Street', '2 Años', 'upload/employee/1788357795434110.jpg', '16500', '3', 'Tijuana, BC', '2024-01-17 17:01:38', NULL),
(36, 'Ulysses Rodriguez', 'kywar@mailinator.com', '+1 (952) 957-8127', '19 Fabien Road', '5 Años', 'upload/employee/1788357835041854.jpg', '12300', '2', 'Tijuana, BC', '2024-01-17 17:02:15', NULL),
(37, 'Courtney Cruz', 'sejyciqy@mailinator.com', '+1 (187) 707-1387', '781 East First Court', '5 Años', 'upload/employee/1788357872141151.jpg', '15600', '6', 'Tijuana, BC', '2024-01-17 17:02:51', NULL);

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
(5, '2024_01_03_143722_create_employees_table', 2),
(6, '2024_01_06_084349_create_customers_table', 3),
(7, '2024_01_06_175235_create_suppliers_table', 4),
(8, '2024_01_06_175238_create_suppliers_table', 5),
(9, '2024_01_07_091939_create_advance_salaries_table', 6),
(10, '2024_01_08_055955_create_pay_salaries_table', 7),
(11, '2024_01_08_055957_create_pay_salaries_table', 8),
(12, '2024_01_09_194721_create_avance_salarios_table', 9),
(13, '2024_01_12_101149_create_anios_table', 10),
(14, '2024_01_15_130815_create_attendances_table', 11),
(15, '2024_01_16_192616_create_categories_table', 12),
(16, '2024_01_17_175005_create_products_table', 13),
(17, '2024_01_17_175007_create_products_table', 14);

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
-- Table structure for table `pay_salaries`
--

CREATE TABLE `pay_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `salary_month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `paid_amount` varchar(255) DEFAULT NULL,
  `advance_salary` varchar(255) DEFAULT NULL,
  `due_salary` varchar(255) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_salaries`
--

INSERT INTO `pay_salaries` (`id`, `employee_id`, `salary_month`, `year`, `paid_amount`, `advance_salary`, `due_salary`, `status`, `created_at`, `updated_at`) VALUES
(20, 37, 'Diciembre', '2023', '15600', '500', '15100', 'Pagado', '2024-01-17 17:12:16', NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_garage` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_store` varchar(255) DEFAULT NULL,
  `buying_date` varchar(255) DEFAULT NULL,
  `expire_date` varchar(255) DEFAULT NULL,
  `buying_price` varchar(255) DEFAULT NULL,
  `selling_price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `supplier_id`, `product_code`, `product_garage`, `product_image`, `product_store`, `buying_date`, `expire_date`, `buying_price`, `selling_price`, `created_at`, `updated_at`) VALUES
(2, 'Queso Kraft tipo parmesano rallado 227 g - 139', 6, 3, 'CP240005', 'A1', 'upload/product/1788540549067189.png', '5', '2024-01-01', '2024-01-27', '100', '139', '2024-01-20 02:29:14', '2024-01-20 02:29:14'),
(3, 'Huevo blanco Bachoco fresco 18 pzas - 46.50', 6, 3, 'CP240001', 'A1', 'upload/product/1788540699277398.png', '5', '2024-01-01', '2024-01-31', '40', '50', '2024-01-20 01:49:02', '2024-01-20 01:49:02'),
(4, 'Queso crema Philadelphia original 180 g - 38', 6, 3, 'CP240002', 'A1', 'upload/product/1788540921341155.png', '5', '2024-01-01', '2024-01-31', '25', '30', '2024-01-20 01:48:13', '2024-01-20 01:48:13'),
(5, 'Tomates molidos Del Fuerte condimentados 259 gr.', 9, 3, 'CP240003', 'A2', 'upload/product/1788571247211010.png', '12', '2024-01-02', '2024-01-31', '8', '11.50', '2024-01-20 01:34:21', NULL),
(6, 'Alimento para Perro Ol\'Roy Adulto 15 kg - 585', 5, 1, 'CP240004', 'A1', 'upload/product/1788574671624470.png', '20', '2024-01-01', '2024-06-28', '500', '585', '2024-01-20 02:28:47', NULL),
(7, 'Correa para Perro Petcare4f Retráctil 5 m - 288', 5, 1, 'CP240006', 'A1', 'upload/product/1788574787144815.png', '20', '2024-01-03', '2025-01-19', '230', '288', '2024-01-20 02:30:37', NULL),
(8, 'Chile Serrano por kilo - 36.90', 2, 1, 'CP240007', 'A2', 'upload/product/1788574898869745.png', '12', '2024-01-02', '2024-01-31', '30', '36.90', '2024-01-20 02:32:24', NULL),
(9, 'Aerosol WD-40 Aflojatodo con 11 OZ - 144', 12, 1, 'CP240008', 'A3', 'upload/product/1788575008340510.png', '13', '2024-01-01', '2024-08-09', '100', '144', '2024-01-20 02:34:08', NULL),
(10, 'Cerveza clara Carta Blanca 6 pack 355 mL c/u - 55', 8, 3, 'CP240009', 'A4', 'upload/product/1788575142636710.png', '20', '2024-01-01', '2025-09-01', '49', '55', '2024-01-20 02:36:16', NULL),
(11, 'Cerveza Victoria 6 latas con 330 ml c_u - 68', 8, 3, 'CP240010', 'A3', 'upload/product/1788575223719922.png', '20', '2024-01-01', '2024-12-25', '60', '68', '2024-01-20 02:37:33', NULL),
(12, 'Arrachera de res Marketside marinada 600 g - 207', 3, 3, 'CP240011', 'A5', 'upload/product/1788575337614194.png', '20', '2024-01-01', '2024-03-13', '180', '207', '2024-01-20 02:39:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `shopname` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `account_holder` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `phone`, `address`, `shopname`, `image`, `type`, `account_holder`, `account_number`, `bank_name`, `bank_branch`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Procter & Gamble', 'fudequbej@mailinator.com', '+1 (215) 571-8418', 'Doloribus pariatur', 'Melvin Walsh', 'upload/supplier/1781019150176655.jpg', 'Distribuidor', 'Vitae quia excepteur', '45665489', 'Santander', 'La Mesa', 'Tijuana, BC', '2024-01-18 19:04:44', '2024-01-18 19:04:44'),
(3, 'Sigma Alimentos', 'pafarobu@mailinator.com', '+1 (879) 976-6713', 'Eligendi labore esse', 'Colton Mcconnell', 'upload/supplier/1781025474508581.jpg', 'Mayorista', 'Qui vero consequatur', '396', 'Jena Robertson', 'Porro non assumenda', 'Eu tempora deserunt', '2024-01-18 19:04:24', '2024-01-18 19:04:24'),
(4, 'Coca-Cola FEMSA', 'nikozuwe@mailinator.com', '+1 (257) 737-6012', '20 Hague Lane', 'Jack Riley', 'upload/supplier/1781142231965594.jpg', 'Distribuidor', 'Geoffrey Dotson', '415', 'Rana Lyons', 'Dignissimos laudanti', 'Tijuana, BC', '2024-01-18 19:04:06', '2024-01-18 19:04:06'),
(5, 'Grupo Bimbo', 'pybelaral@mailinator.com', '+1 (594) 839-5712', '873 West Oak Court', 'Quinlan Nelson', 'upload/supplier/1781142270314764.jpg', 'Mayorista', 'Seth Baird', '919', 'Willow Golden', 'Quae fugiat voluptat', 'Ensenada BC', '2024-01-18 19:03:52', '2024-01-18 19:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `photo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Jose', 'admin@gmail.com', '6646289328', '20240103172978.jpg', NULL, '$2y$12$8eS3WvmFg0yzL/HxocTNA.wFbdfCb0Dll.w45ouMJ/zj9CMWx1zu.', 'tK5mjlmF0bc5y3gOMoZ5zPN7OZkAxELLNSYgMNj5lhtDe2a6czXzr0QfTrUP', '2024-01-01 10:20:41', '2024-01-07 14:54:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_salaries`
--
ALTER TABLE `advance_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anios`
--
ALTER TABLE `anios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pay_salaries`
--
ALTER TABLE `pay_salaries`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_code_unique` (`product_code`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `advance_salaries`
--
ALTER TABLE `advance_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `anios`
--
ALTER TABLE `anios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pay_salaries`
--
ALTER TABLE `pay_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
