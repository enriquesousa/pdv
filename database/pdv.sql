-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2024 at 07:09 PM
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
(28, 18, 'Enero', '2024', 'Pagado', NULL, '2024-01-10 23:38:07', '2024-01-11 18:37:43'),
(29, 19, 'Enero', '2024', NULL, NULL, '2024-01-10 23:39:17', NULL),
(30, 20, 'Enero', '2024', NULL, NULL, '2024-01-10 23:39:47', NULL),
(31, 21, 'Enero', '2024', NULL, NULL, '2024-01-10 23:40:15', NULL),
(32, 22, 'Enero', '2024', NULL, NULL, '2024-01-10 23:40:47', NULL),
(33, 23, 'Enero', '2024', NULL, NULL, '2024-01-10 23:41:10', NULL),
(34, 24, 'Enero', '2024', NULL, NULL, '2024-01-10 23:41:35', NULL),
(35, 25, 'Enero', '2024', NULL, NULL, '2024-01-10 23:42:06', NULL),
(36, 26, 'Enero', '2024', NULL, NULL, '2024-01-10 23:42:32', NULL),
(37, 27, 'Enero', '2024', NULL, NULL, '2024-01-10 23:42:59', NULL),
(38, 27, 'Diciembre', '2023', 'Pagado', NULL, '2024-01-11 18:23:24', '2024-01-11 18:37:06'),
(39, 26, 'Diciembre', '2023', NULL, '400', '2024-01-10 23:44:22', NULL),
(40, 25, 'Diciembre', '2023', 'Pagado', '350', '2024-01-10 23:44:36', '2024-01-11 18:37:10'),
(41, 24, 'Diciembre', '2023', NULL, '400', '2024-01-10 23:44:49', NULL),
(42, 18, 'Diciembre', '2023', NULL, NULL, '2024-01-11 18:39:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `avance_salarios`
--

CREATE TABLE `avance_salarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `advance_salary` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avance_salarios`
--

INSERT INTO `avance_salarios` (`id`, `employee_id`, `month`, `year`, `advance_salary`, `created_at`, `updated_at`) VALUES
(18, 27, 'Diciembre', '2023', NULL, '2024-01-11 18:23:24', NULL),
(19, 18, 'Diciembre', '2023', NULL, '2024-01-11 18:39:37', NULL);

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
(18, 'Abraham Best', 'gavah@mailinator.com', '+1 (279) 667-7724', '34 Cowley Boulevard', '4 Años', 'upload/employee/1787748561400688.jpg', '15600', '5', 'Tijuana, BC', '2024-01-10 23:38:07', NULL),
(19, 'Omar Goodman', 'xugogopip@mailinator.com', '+1 (384) 224-5348', '41 Oak Avenue', '5 Años', 'upload/employee/1787748635216536.jpg', '16500', '3', 'Ensenada BC', '2024-01-10 23:39:17', NULL),
(20, 'Fallon Lester', 'sysimymyp@mailinator.com', '+1 (185) 507-9791', '889 South Clarendon Extension', '1 Año', 'upload/employee/1787748666577686.jpg', '18000', '5', 'CDMX', '2024-01-10 23:39:47', NULL),
(21, 'Kelly Jones', 'facocejage@mailinator.com', '+1 (572) 944-6367', '71 Oak Drive', '2 Años', 'upload/employee/1787748695510320.jpg', '15600', '5', 'CDMX', '2024-01-10 23:40:15', NULL),
(22, 'Ivory Brady', 'fonuwazobi@mailinator.com', '+1 (559) 342-6886', '150 East Rocky Milton Court', '4 Años', 'upload/employee/1787748729224152.jpg', '14500', '4', 'CDMX', '2024-01-10 23:40:47', NULL),
(23, 'Talon Woods', 'cynisohah@mailinator.com', '+1 (141) 759-9847', '67 Fabien Lane', '5 Años', 'upload/employee/1787748753242847.jpg', '18000', '5', 'Tijuana, BC', '2024-01-10 23:41:10', NULL),
(24, 'Chester Bradley', 'tuhumajem@mailinator.com', '+1 (578) 464-7261', '30 Clarendon Road', '1 Año', 'upload/employee/1787748779743865.jpg', '18000', '4', 'CDMX', '2024-01-10 23:41:35', NULL),
(25, 'Felicia Wyatt', 'kaxoduly@mailinator.com', '+1 (379) 647-9342', '74 East Rocky Clarendon Parkway', '3 Años', 'upload/employee/1787748812604845.jpg', '18000', '5', 'Tijuana, BC', '2024-01-10 23:42:06', NULL),
(26, 'Buffy Craft', 'hyzusagope@mailinator.com', '+1 (309) 379-4347', '625 South New Road', '3 Años', 'upload/employee/1787748839640897.jpg', '14500', '3', 'Tijuana, BC', '2024-01-10 23:42:32', NULL),
(27, 'Aline Bell', 'hyfe@mailinator.com', '+1 (885) 541-1176', '571 Second Extension', '4 Años', 'upload/employee/1787748867991686.jpg', '15600', '4', 'Ensenada BC', '2024-01-10 23:42:59', NULL);

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
(12, '2024_01_09_194721_create_avance_salarios_table', 9);

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
(8, 27, 'Diciembre', '2023', '15600', '0', '15600', 'Pagado', '2024-01-11 18:37:06', NULL),
(9, 25, 'Diciembre', '2023', '18000', '350', '17650', 'Pagado', '2024-01-11 18:37:10', NULL),
(10, 18, 'Enero', '2024', '15600', '0', '15600', 'Pagado', '2024-01-11 18:37:43', NULL);

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
(1, 'Haley Mitchell', 'fudequbej@mailinator.com', '+1 (215) 571-8418', 'Doloribus pariatur', 'Melvin Walsh', 'upload/supplier/1781019150176655.jpg', 'Distribuidor', 'Vitae quia excepteur', '45665489', 'Santander', 'La Mesa', 'Tijuana, BC', '2023-10-29 06:57:00', NULL),
(3, 'Tad Cantu Group', 'pafarobu@mailinator.com', '+1 (879) 976-6713', 'Eligendi labore esse', 'Colton Mcconnell', 'upload/supplier/1781025474508581.jpg', 'Mayorista', 'Qui vero consequatur', '396', 'Jena Robertson', 'Porro non assumenda', 'Eu tempora deserunt', '2023-10-30 06:27:03', '2023-10-30 06:27:03'),
(4, 'Geoffrey Dotson', 'nikozuwe@mailinator.com', '+1 (257) 737-6012', '20 Hague Lane', 'Jack Riley', 'upload/supplier/1781142231965594.jpg', 'Distribuidor', 'Geoffrey Dotson', '415', 'Rana Lyons', 'Dignissimos laudanti', 'Tijuana, BC', '2023-10-30 15:33:20', NULL),
(5, 'Seth Baird 2', 'pybelaral@mailinator.com', '+1 (594) 839-5712', '873 West Oak Court', 'Quinlan Nelson', 'upload/supplier/1781142270314764.jpg', 'Mayorista', 'Seth Baird', '919', 'Willow Golden', 'Quae fugiat voluptat', 'Ensenada BC', '2024-01-07 02:20:42', '2024-01-07 02:20:42');

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
(2, 'Jose', 'admin@gmail.com', '6646289328', '20240103172978.jpg', NULL, '$2y$12$8eS3WvmFg0yzL/HxocTNA.wFbdfCb0Dll.w45ouMJ/zj9CMWx1zu.', 'wju8IDsvI8sAcbgmpZ9KuIphsd9IvyJn83SDRiMP1Jjv0zlWIjY87Ua6nNqA', '2024-01-01 10:20:41', '2024-01-07 14:54:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_salaries`
--
ALTER TABLE `advance_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avance_salarios`
--
ALTER TABLE `avance_salarios`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `avance_salarios`
--
ALTER TABLE `avance_salarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pay_salaries`
--
ALTER TABLE `pay_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
