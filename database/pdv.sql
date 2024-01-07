-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2024 at 05:45 PM
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
  `advance_salary` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advance_salaries`
--

INSERT INTO `advance_salaries` (`id`, `employee_id`, `month`, `year`, `advance_salary`, `created_at`, `updated_at`) VALUES
(2, 9, 'Enero', '2023', '5000', '2023-10-31 15:24:58', NULL),
(3, 8, 'Enero', '2023', '1500', '2023-10-31 15:25:35', NULL),
(4, 6, 'Enero', '2023', '5500', '2023-10-31 15:26:15', NULL),
(5, 9, 'Diciembre', '2023', '2000', '2023-12-31 01:25:47', NULL);

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
(1, 'Carmen Landry', 'mynejoq@mailinator.com', '+1 (411) 804-5305', 'ANT CARR A CHAPALA NUM 2748, ALAMO INDUSTRIAL, 45560', '2 Años', 'upload/employee/1780783815232879.jpg', '15600', '2', 'Guadalajara, Jalisco', '2023-11-05 07:54:33', '2023-11-05 07:54:33'),
(2, 'Declan Joyner', 'soxu@mailinator.com', '+1 (296) 566-5094', 'ARTICULO 27 NO. 4100 7, A. CONSTITUCION', '3 Años', 'upload/employee/1781107929559108.jpg', '15000', '3', 'Tijuana, BC', '2023-11-05 07:54:23', '2023-11-05 07:54:23'),
(5, 'Carolyn Norris', 'loxopujen@mailinator.com', '+1 (944) 523-9006', '60 North Nobel Street', '2 Años', 'upload/employee/1781141596546228.jpg', '12300', '2', 'Tijuana, BC', '2023-11-05 07:54:12', '2023-11-05 07:54:12'),
(6, 'Jena Kelly', 'kyqovy@mailinator.com', '+1 (891) 205-4017', '921 Rocky New Lane', '3 Años', 'upload/employee/1781141644022694.jpg', '10000', '3', 'Rosarito BC', '2023-11-05 07:53:54', '2023-11-05 07:53:54'),
(7, 'Shellie Hester', 'xacofud@mailinator.com', '+1 (521) 358-1249', '318 Old Extension', '5 Años', 'upload/employee/1781141701407182.jpg', '9250', '4', 'Ensenada BC', '2023-11-05 07:53:38', '2023-11-05 07:53:38'),
(8, 'Regan Johns', 'kidabu@mailinator.com', '+1 (453) 941-2024', '994 Cowley Drive', '1 Año', 'upload/employee/1781141815037667.jpg', '8500', '1', 'Tijuana, BC', '2023-11-05 07:53:24', '2023-11-05 07:53:24'),
(9, 'Coby Mays', 'kymuqi@mailinator.com', '+1 (591) 386-4277', '476 East White Cowley Freeway', '2 Años', 'upload/employee/1781141851771376.jpg', '7000', '2', 'Mexicali B.C.', '2023-11-05 07:53:13', '2023-11-05 07:53:13'),
(10, 'Quentin Wilcox', 'juqalov@mailinator.com', '+1 (836) 541-2163', '54 Cowley Freeway', '2 Años', 'upload/employee/1781141879793564.jpg', '6000', '1', 'Mexicali B.C.', '2023-11-05 07:53:04', '2023-11-05 07:53:04');

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
(9, '2024_01_07_091939_create_advance_salaries_table', 6);

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
(2, 'Jose', 'admin@gmail.com', '6646289328', '20240103172978.jpg', NULL, '$2y$12$8eS3WvmFg0yzL/HxocTNA.wFbdfCb0Dll.w45ouMJ/zj9CMWx1zu.', 'OLfwE3yjk7kN0Ex8eJGVNkqzmGtprne4WRIJH7netCaaoWkO4eaPwpAByYmq', '2024-01-01 10:20:41', '2024-01-07 14:54:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_salaries`
--
ALTER TABLE `advance_salaries`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
