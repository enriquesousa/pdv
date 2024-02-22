-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2024 at 07:33 AM
-- Server version: 10.11.6-MariaDB-0+deb12u1
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
(88, 28, 'Enero', '2024', 'Pagado', NULL, '2024-01-17 16:54:49', '2024-02-04 01:49:11'),
(89, 29, 'Enero', '2024', NULL, NULL, '2024-01-17 16:55:36', NULL),
(90, 30, 'Enero', '2024', 'Pagado', NULL, '2024-01-17 16:58:19', '2024-02-04 01:49:15'),
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
(107, 28, 'Diciembre', '2023', NULL, NULL, '2024-01-17 17:08:55', NULL),
(108, 37, 'Febrero', '2024', NULL, '0', '2024-02-01 20:23:41', NULL),
(109, 36, 'Febrero', '2024', NULL, '0', '2024-02-01 20:23:41', NULL),
(110, 35, 'Febrero', '2024', NULL, '0', '2024-02-01 20:23:41', NULL),
(111, 34, 'Febrero', '2024', NULL, '0', '2024-02-01 20:23:41', NULL),
(112, 33, 'Febrero', '2024', NULL, '0', '2024-02-01 20:23:41', NULL),
(113, 31, 'Febrero', '2024', NULL, '0', '2024-02-01 20:23:41', NULL),
(114, 30, 'Febrero', '2024', NULL, '0', '2024-02-01 20:23:41', NULL),
(115, 32, 'Febrero', '2024', NULL, '0', '2024-02-01 20:23:41', NULL),
(116, 29, 'Febrero', '2024', NULL, '0', '2024-02-01 20:23:41', NULL),
(117, 28, 'Febrero', '2024', NULL, '0', '2024-02-01 20:23:41', NULL),
(122, 33, 'Marzo', '2024', NULL, NULL, '2024-02-03 23:25:30', NULL),
(123, 31, 'Marzo', '2024', NULL, NULL, '2024-02-03 23:25:30', NULL),
(124, 30, 'Marzo', '2024', NULL, NULL, '2024-02-03 23:25:30', NULL),
(125, 32, 'Marzo', '2024', NULL, NULL, '2024-02-03 23:25:30', NULL),
(126, 29, 'Marzo', '2024', NULL, NULL, '2024-02-03 23:25:30', NULL),
(127, 28, 'Marzo', '2024', NULL, NULL, '2024-02-03 23:25:30', NULL);

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
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text NOT NULL,
  `amount` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `details`, `amount`, `month`, `year`, `date`, `created_at`, `updated_at`) VALUES
(2, 'Gasolina', '300', 'enero', '2024', '2024-01-21', '2024-01-22 17:25:37', NULL),
(3, 'Renta', '3500', 'enero', '2024', '2024-01-18', '2024-01-22 17:54:57', NULL),
(4, 'Papelería 222', '2350', 'enero', '2024', '2024-01-22', '2024-01-22 20:32:11', '2024-01-22 20:32:11'),
(5, 'Comida', '1300', 'enero', '2024', '2024-01-22', '2024-01-22 18:19:45', NULL),
(6, 'Gasolina', '300', 'febrero', '2024', '2024-02-03', '2024-02-04 02:24:59', NULL);

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
(17, '2024_01_17_175007_create_products_table', 14),
(18, '2024_01_22_073214_create_expenses_table', 15),
(19, '2024_01_23_072202_create_shoppingcart_table', 16),
(20, '2024_01_24_062420_create_orders_table', 17),
(21, '2024_01_24_063220_create_order_details_table', 17),
(22, '2024_01_28_092935_create_permission_tables', 18);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 8),
(1, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 5),
(7, 'App\\Models\\User', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `sub_total` varchar(255) DEFAULT NULL,
  `iva` varchar(255) DEFAULT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `pay` varchar(255) DEFAULT NULL,
  `due` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `order_status`, `total_products`, `sub_total`, `iva`, `invoice_no`, `total`, `payment_status`, `pay`, `due`, `created_at`, `updated_at`) VALUES
(3, 10, '24-January-2024', 'completada', '5', '812.00', '121.80', 'EPOS93252487', '933.80', 'Efectivo', '903', '30', '2024-01-24 16:44:44', '2024-02-19 14:47:14'),
(4, 5, '24-January-2024', 'completada', '2', '832.00', '124.80', 'EPOS80687971', '956.80', 'Efectivo', '906', '50', '2024-01-24 16:55:25', '2024-02-06 05:00:59'),
(7, 6, '24/enero/2024', 'completada', '1', '154.00', '23.10', 'EPOS49528532', '177.10', 'Efectivo', '157', '20', '2024-01-24 19:25:33', '2024-02-19 14:50:21'),
(8, 6, '24/enero/2024', 'completada', '2', '136.00', '20.40', 'EPOS34701562', '156.40', 'Efectivo', '156.40', '0', '2024-01-25 03:45:48', '2024-01-25 03:46:21'),
(9, 7, '25/enero/2024', 'pendiente', '2', '320.00', '48.00', 'EPOS76529036', '368.00', 'Efectivo', '368', '0', '2024-01-25 16:01:44', NULL),
(10, 4, '25/enero/2024', 'pendiente', '1', '119.00', '17.85', 'EPOS37635913', '136.85', 'Efectivo', '136.85', '0', '2024-01-25 16:44:09', NULL),
(11, 1, '25/enero/2024', 'completada', '1', '220.00', '33.00', 'EPOS10253654', '253.00', 'Efectivo', '253.00', '0', '2024-01-25 16:45:19', '2024-01-25 16:45:47'),
(12, 12, '5/febrero/2024', 'pendiente', '2', '900.00', '135.00', 'EPOS51713125', '1035.00', 'Efectivo', '1031', '4', '2024-02-06 02:28:56', '2024-02-06 04:58:06'),
(13, 5, '6/febrero/2024', 'completada', '4', '594.00', '89.10', 'EPOS92398222', '683.10', 'Efectivo', '683.10', '0', '2024-02-06 14:38:00', '2024-02-06 14:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `unit_cost` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `unit_cost`, `total`, `created_at`, `updated_at`) VALUES
(7, 3, 21, '1', '220', '253.00', NULL, NULL),
(8, 3, 20, '1', '75', '86.25', NULL, NULL),
(9, 3, 19, '1', '119', '136.85', NULL, NULL),
(10, 3, 18, '2', '199', '457.70', NULL, NULL),
(11, 4, 17, '1', '779', '895.85', NULL, NULL),
(12, 4, 16, '1', '53', '60.95', NULL, NULL),
(17, 7, 22, '1', '154', '177.10', NULL, NULL),
(18, 8, 11, '2', '68', '156.40', NULL, NULL),
(19, 9, 23, '1', '121', '139.15', NULL, NULL),
(20, 9, 18, '1', '199', '228.85', NULL, NULL),
(21, 10, 19, '1', '119', '136.85', NULL, NULL),
(22, 11, 21, '1', '220', '253.00', NULL, NULL),
(23, 12, 17, '1', '779', '895.85', NULL, NULL),
(24, 12, 23, '1', '121', '139.15', NULL, NULL),
(25, 13, 23, '1', '121', '139.15', NULL, NULL),
(26, 13, 20, '1', '75', '86.25', NULL, NULL),
(27, 13, 18, '2', '199', '457.70', NULL, NULL);

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
(20, 37, 'Diciembre', '2023', '15600', '500', '15100', 'Pagado', '2024-01-17 17:12:16', NULL),
(21, 28, 'Enero', '2024', '15600', '0', '15600', 'Pagado', '2024-02-04 01:49:11', NULL),
(22, 30, 'Enero', '2024', '15800', '0', '15800', 'Pagado', '2024-02-04 01:49:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(2, 'panel.pdv', 'web', 'panel', '2024-01-29 16:14:28', '2024-02-19 15:59:34'),
(3, 'empleado.menu', 'web', 'empleado', '2024-01-29 16:15:32', '2024-01-29 16:15:32'),
(4, 'panel.control', 'web', 'panel', '2024-01-29 16:17:28', '2024-02-19 15:54:07'),
(5, 'empleado.all', 'web', 'empleado', '2024-01-29 16:18:02', '2024-01-29 16:18:02'),
(6, 'empleado.add', 'web', 'empleado', '2024-01-29 16:18:24', '2024-01-29 16:18:24'),
(7, 'empleado.edit', 'web', 'empleado', '2024-01-29 16:18:37', '2024-01-29 16:18:37'),
(8, 'empleado.delete', 'web', 'empleado', '2024-01-29 16:19:09', '2024-01-29 16:19:09'),
(9, 'cliente.menu', 'web', 'cliente', '2024-01-29 16:21:37', '2024-01-29 16:21:37'),
(10, 'cliente.all', 'web', 'cliente', '2024-01-29 16:21:53', '2024-01-29 16:21:53'),
(11, 'cliente.add', 'web', 'cliente', '2024-01-29 16:22:18', '2024-01-29 16:22:18'),
(12, 'cliente.edit', 'web', 'cliente', '2024-01-29 16:22:31', '2024-01-29 16:22:31'),
(13, 'cliente.delete', 'web', 'cliente', '2024-01-29 16:22:42', '2024-01-29 16:22:42'),
(14, 'proveedor.menu', 'web', 'proveedor', '2024-01-29 16:24:29', '2024-01-29 16:24:29'),
(15, 'proveedor.all', 'web', 'proveedor', '2024-01-29 16:24:40', '2024-01-29 16:24:40'),
(16, 'proveedor.add', 'web', 'proveedor', '2024-01-29 16:24:52', '2024-01-29 16:24:52'),
(17, 'proveedor.edit', 'web', 'proveedor', '2024-01-29 16:25:04', '2024-01-29 16:25:04'),
(18, 'proveedor.delete', 'web', 'proveedor', '2024-01-29 16:25:18', '2024-01-29 16:25:18'),
(19, 'salario.menu', 'web', 'salario', '2024-01-29 16:27:40', '2024-01-29 16:27:40'),
(20, 'asistencias.menu', 'web', 'asistencia', '2024-01-29 16:28:10', '2024-01-29 16:28:10'),
(21, 'asistencias.all', 'web', 'asistencia', '2024-01-29 16:30:23', '2024-01-29 16:30:23'),
(22, 'asistencias.add', 'web', 'asistencia', '2024-01-29 16:30:46', '2024-01-29 16:30:46'),
(23, 'asistencias.edit', 'web', 'asistencia', '2024-01-29 16:31:27', '2024-01-29 16:31:27'),
(24, 'asistencias.detail', 'web', 'asistencia', '2024-01-29 16:32:00', '2024-02-02 00:07:14'),
(25, 'categorias.menu', 'web', 'categoría', '2024-01-29 16:33:22', '2024-01-29 16:33:22'),
(26, 'productos.menu', 'web', 'producto', '2024-01-29 16:33:41', '2024-01-29 16:33:41'),
(27, 'almacen.menu', 'web', 'almacén', '2024-01-29 16:33:59', '2024-01-29 16:33:59'),
(28, 'gastos.menu', 'web', 'gasto', '2024-01-29 16:34:12', '2024-01-29 16:34:12'),
(29, 'datos.menu', 'web', 'datos', '2024-01-29 16:35:24', '2024-01-29 16:35:24'),
(31, 'proveedor.detail', 'web', 'proveedor', '2024-02-01 17:55:26', '2024-02-01 17:55:26'),
(32, 'gastos.add', 'web', 'gasto', '2024-02-01 18:12:45', '2024-02-01 18:12:45'),
(33, 'gastos.hoy', 'web', 'gasto', '2024-02-01 18:13:02', '2024-02-01 18:13:02'),
(34, 'gastos.mes', 'web', 'gasto', '2024-02-01 18:13:13', '2024-02-01 18:13:13'),
(35, 'gastos.año', 'web', 'gasto', '2024-02-01 18:13:27', '2024-02-01 18:13:27'),
(36, 'salario.avance', 'web', 'salario', '2024-02-01 20:25:20', '2024-02-01 20:25:20'),
(37, 'salario.agregar', 'web', 'salario', '2024-02-01 20:26:11', '2024-02-01 20:26:11'),
(38, 'salario.pagar.mes', 'web', 'salario', '2024-02-01 20:27:11', '2024-02-01 20:27:11'),
(39, 'salario.ver.mes', 'web', 'salario', '2024-02-01 20:27:42', '2024-02-01 20:27:42'),
(40, 'salario.pagar.otro.mes', 'web', 'salario', '2024-02-01 20:28:07', '2024-02-01 20:28:07'),
(41, 'productos.all', 'web', 'producto', '2024-02-02 00:39:17', '2024-02-02 00:39:32'),
(42, 'categorias.all', 'web', 'categoría', '2024-02-02 03:29:07', '2024-02-02 03:29:07'),
(43, 'categorias.add', 'web', 'categoría', '2024-02-02 03:29:26', '2024-02-02 03:29:26'),
(44, 'categorias.edit', 'web', 'categoría', '2024-02-02 03:30:00', '2024-02-02 03:30:00'),
(45, 'categorias.delete', 'web', 'categoría', '2024-02-02 03:30:19', '2024-02-02 03:30:19'),
(46, 'productos.add', 'web', 'producto', '2024-02-02 03:43:21', '2024-02-02 03:43:21'),
(47, 'productos.edit', 'web', 'producto', '2024-02-02 03:43:44', '2024-02-02 03:43:44'),
(48, 'productos.delete', 'web', 'producto', '2024-02-02 03:44:02', '2024-02-02 03:44:02'),
(49, 'productos.codigo', 'web', 'producto', '2024-02-02 03:44:34', '2024-02-02 03:44:34'),
(50, 'productos.importar', 'web', 'producto', '2024-02-02 03:44:57', '2024-02-02 03:44:57'),
(51, 'productos.exportar', 'web', 'producto', '2024-02-02 03:45:13', '2024-02-02 03:45:13'),
(52, 'ventas.menu', 'web', 'ventas', '2024-02-03 01:51:52', '2024-02-03 01:51:52'),
(53, 'ventas.pendientes', 'web', 'ventas', '2024-02-03 01:52:36', '2024-02-03 01:52:36'),
(54, 'ventas.completadas', 'web', 'ventas', '2024-02-03 01:52:51', '2024-02-03 01:52:51'),
(55, 'almacen.all', 'web', 'almacén', '2024-02-03 01:59:24', '2024-02-03 01:59:24'),
(56, 'permisos.menu', 'web', 'permiso', '2024-02-03 02:01:30', '2024-02-03 02:01:30'),
(57, 'usuarios.menu', 'web', 'usuarios', '2024-02-03 02:05:42', '2024-02-03 02:05:42'),
(58, 'salario.editar', 'web', 'salario', '2024-02-03 23:17:20', '2024-02-03 23:17:20'),
(59, 'salario.delete', 'web', 'salario', '2024-02-03 23:26:20', '2024-02-03 23:26:20'),
(60, 'salario.pagar.ahora', 'web', 'salario', '2024-02-04 01:46:55', '2024-02-04 01:46:55'),
(61, 'salario.historial', 'web', 'salario', '2024-02-04 01:51:07', '2024-02-04 01:51:07'),
(62, 'respaldo.menu', 'web', 'respaldo', '2024-02-05 15:06:38', '2024-02-05 15:06:38');

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
(3, 'Huevo blanco Bachoco fresco 18 pzas - 46.50', 6, 3, 'CP240001', 'A1', 'upload/product/1788540699277398.png', '5', '2024-01-01', '2024-01-31', '40', '50', '2024-01-20 01:49:02', '2024-01-20 01:49:02'),
(4, 'Queso crema Philadelphia original 180 g - 38', 6, 3, 'CP240002', 'A1', 'upload/product/1788540921341155.png', '5', '2024-01-01', '2024-01-31', '25', '30', '2024-01-20 01:48:13', '2024-01-20 01:48:13'),
(5, 'Tomates molidos Del Fuerte condimentados 259 gr.', 9, 3, 'CP240003', 'A2', 'upload/product/1788571247211010.png', '12', '2024-01-02', '2024-01-31', '8', '11.50', '2024-01-20 01:34:21', NULL),
(6, 'Alimento para Perro Ol\'Roy Adulto 15 kg - 585', 5, 1, 'CP240004', 'A1', 'upload/product/1788574671624470.png', '20', '2024-01-01', '2024-06-28', '500', '585', '2024-01-20 02:28:47', NULL),
(7, 'Correa para Perro Petcare4f Retráctil 5 m - 288', 5, 1, 'CP240006', 'A1', 'upload/product/1788574787144815.png', '20', '2024-01-03', '2025-01-19', '230', '288', '2024-01-20 02:30:37', NULL),
(8, 'Chile Serrano por kilo - 36.90', 2, 1, 'CP240007', 'A2', 'upload/product/1788574898869745.png', '12', '2024-01-02', '2024-01-31', '30', '36.90', '2024-01-20 02:32:24', NULL),
(9, 'Aerosol WD-40 Aflojatodo con 11 OZ - 144', 12, 1, 'CP240008', 'A3', 'upload/product/1788575008340510.png', '13', '2024-01-01', '2024-08-09', '100', '144', '2024-01-20 02:34:08', NULL),
(10, 'Cerveza clara Carta Blanca 6 pack 355 mL c/u - 55', 8, 3, 'CP240009', 'A4', 'upload/product/1788575142636710.png', '20', '2024-01-01', '2025-09-01', '49', '55', '2024-01-20 02:36:16', NULL),
(11, 'Cerveza Victoria 6 latas con 330 ml c_u - 68', 8, 3, 'CP240010', 'A3', 'upload/product/1788575223719922.png', '18', '2024-01-01', '2024-12-25', '60', '68', '2024-01-20 02:37:33', '2024-01-25 03:46:21'),
(12, 'Arrachera de res Marketside marinada 600 g - 207', 3, 3, 'CP240011', 'A5', 'upload/product/1788575337614194.png', '20', '2024-01-01', '2024-03-13', '180', '207', '2024-01-20 02:39:22', NULL),
(14, 'Cepillo para Perro Pets&More de Limpieza Automática - 185', 5, 1, 'CP240012', 'A1', 'upload/product/1788833738145700.png', '10', '2024-01-01', '2025-06-11', '130', '185', '2024-01-22 23:06:32', NULL),
(15, 'Aceite puro de soya Nutrioli 946 ml - 45', 9, 3, 'CP240013', 'B2', 'upload/product/1788833843720685.png', '10', '2024-01-02', '2025-06-18', '40', '45', '2024-01-22 23:08:13', NULL),
(16, 'Aderezo para ensaladas Clemente Jacques estilo ranch 473 g - 53', 9, 3, 'CP240014', 'C1', 'upload/product/1788833934955043.png', '9', '2024-01-01', '2026-06-22', '45', '53', '2024-01-22 23:09:40', '2024-02-02 14:59:08'),
(17, 'Tequila Don Julio 70 Cristalino 700 ml - 779', 8, 4, 'CP240015', 'D1', 'upload/product/1788834035270025.png', '9', '2023-12-14', '2027-01-13', '650', '779', '2024-01-25 05:26:06', '2024-02-02 14:59:08'),
(18, 'Molida de res premium 95_5 por kilo - 199 por Kg', 3, 3, 'CP240016', 'A1', 'upload/product/1788834122421659.png', '6', '2024-01-02', '2024-01-31', '180', '199', '2024-01-22 23:12:39', '2024-02-06 14:38:10'),
(19, 'Pechuga de pollo con hueso y sin piel 800 g aprox - 119 por kg', 3, 3, 'CP240017', 'A1', 'upload/product/1788834219183173.png', '9', '2024-01-01', '2024-01-31', '100', '119', '2024-01-22 23:14:11', '2024-01-26 17:42:57'),
(20, 'Yoghurt griego Oikos natural 900 g - 75', 6, 3, 'CP240018', 'A1', 'upload/product/1788834628150074.png', '8', '2024-01-01', '2024-01-17', '70', '75', '2024-01-22 23:20:41', '2024-02-06 14:38:10'),
(21, 'Alitas de pollo Bachoco Picositas sabor tocino limón picante 700 g - 220', 7, 3, 'CP240019', 'D1', 'upload/product/1788834759979205.png', '8', '2024-04-24', '2024-04-24', '180', '220', '2024-01-22 23:22:47', '2024-01-26 17:42:57'),
(22, 'Paleta Helada Holanda Magnum mini almendras 6 pzas 55 ml c_u - 154', 7, 3, 'CP240020', 'B2', 'upload/product/1788834844836877.png', '10', '2024-01-01', '2024-05-15', '120', '154', '2024-01-22 23:24:07', NULL),
(23, 'Hamburguesa de pollo Pilgrim\'s de pechuga de pollo 700 g - 121', 7, 3, 'CP240021', 'A1', 'upload/product/1788834934067307.png', '9', '2024-01-01', '2024-02-19', '105', '121', '2024-02-19 16:29:19', '2024-02-19 16:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2024-01-29 20:12:17', '2024-01-29 20:12:17'),
(2, 'Admin', 'web', '2024-01-29 20:12:43', '2024-01-29 20:12:43'),
(4, 'Manager', 'web', '2024-01-29 20:14:19', '2024-01-29 20:14:19'),
(7, 'Usuario', 'web', '2024-02-01 12:58:21', '2024-02-01 12:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(3, 4),
(3, 7),
(4, 1),
(5, 1),
(5, 2),
(5, 4),
(5, 7),
(6, 1),
(6, 2),
(6, 4),
(7, 1),
(7, 2),
(7, 7),
(8, 1),
(8, 2),
(8, 7),
(9, 1),
(9, 2),
(9, 4),
(9, 7),
(10, 1),
(10, 2),
(10, 4),
(10, 7),
(11, 1),
(11, 2),
(11, 7),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(20, 4),
(20, 7),
(21, 1),
(21, 2),
(21, 4),
(21, 7),
(22, 1),
(22, 2),
(22, 4),
(23, 1),
(23, 2),
(23, 4),
(24, 1),
(24, 2),
(24, 4),
(24, 7),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(26, 7),
(27, 1),
(27, 2),
(27, 4),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(41, 7),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(57, 1),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(62, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `identifier` varchar(255) NOT NULL,
  `instance` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'Jose', 'admin@gmail.com', '6646289328', '20240103172978.jpg', NULL, '$2y$12$8eS3WvmFg0yzL/HxocTNA.wFbdfCb0Dll.w45ouMJ/zj9CMWx1zu.', '9l0iKQjDkYsWyg9gt1pA84Klihd1nZl3iWYhL12KjEa5BdEdYOw3tpRrwAo4', '2024-01-01 10:20:41', '2024-01-07 14:54:14'),
(5, 'Julio', 'julio@gmail.com', '5556887889', '20240201051550.jpg', NULL, '$2y$12$1arRC5YBQDPDwhL4nhirDehtVdtZJeZBbsBkbiAQjFfb1MO4lh0mu', NULL, '2024-01-31 16:25:45', '2024-02-01 13:15:48'),
(8, 'Enrique Sousa', 'enrique.sousa@gmail.com', '6641880604', '202401311109fotojess_300x300.jpg', '2024-02-19 12:48:10', '$2y$12$aXlZjBSWBSNdHbXjCooc5e9vEz.uxa.CYqY8QU6guO.xJVMFbIwFK', NULL, '2024-01-31 18:59:20', '2024-02-19 12:48:10'),
(9, 'User', 'user@gmail.com', '+1 (103) 684-7606', NULL, NULL, '$2y$12$ot5ZnFytwzyVjeFK6AZgUuegJnWA52FOVmMeS6U0JCi8qykIZBuG6', NULL, '2024-02-03 15:45:41', '2024-02-03 15:45:41'),
(10, 'James', 'james@gmail.com', '6641880567', NULL, NULL, '$2y$12$8rQ4l8WtdYPJXpVRBqpap.C9JtcYtssqYaZaQ0ba06k8GBEy0DVJ.', NULL, '2024-02-19 14:37:46', '2024-02-19 14:37:46');

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
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`identifier`,`instance`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

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
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pay_salaries`
--
ALTER TABLE `pay_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
