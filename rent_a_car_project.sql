-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 08:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_a_car_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `carname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carmodel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carseats` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carpic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posttype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`id`, `user_id`, `carname`, `carprice`, `carmodel`, `carseats`, `address`, `personnumber`, `carpic`, `posttype`, `location`, `created_at`, `updated_at`) VALUES
(15, 4, 'BMW', '75,000', 'Ghost', '5', '3/251-h Varattanapalli Road , Kandhikuppam(Vii) , Bargur(Tk) , Krishnagiri(Dt) , 635108', '8870656056', 'car-rent-1.png', 'With Driver', 'TamilNadu', '2022-10-03 06:51:58', '2022-10-03 06:51:58'),
(16, 4, 'Ferrari', '80,000', 'Astor', '5', '3/251-h Varattanapalli Road , Kandhikuppam(Vii) , Bargur(Tk) , Krishnagiri(Dt) , 635108', '8870656056', 'car-rent-2.png', 'With Driver', 'Kerala', '2022-10-03 06:52:29', '2022-10-03 06:52:29'),
(17, 4, 'Rolls Royce', '50,000', 'Ghost', '6', '3/251-h Varattanapalli Road , Kandhikuppam(Vii) , Bargur(Tk) , Krishnagiri(Dt) , 635108', '8870656056', 'car-rent-3.png', 'Without Driver', 'Aandhra', '2022-10-03 06:53:06', '2022-10-03 06:53:06'),
(18, 5, 'MERCEDES BENZ', '72,000', 'R3', '8', '3/251-h Varattanapalli Road , Kandhikuppam(Vii) , Bargur(Tk) , Krishnagiri(Dt) , 635108', '9086751432', 'car-rent-4.png', 'With Driver', 'Mumbai', '2022-10-03 06:54:33', '2022-10-03 06:54:33'),
(19, 5, 'JAQUAR', '90000', 'Defender', '7', '3/251-h Varattanapalli Road , Kandhikuppam(Vii) , Bargur(Tk) , Krishnagiri(Dt) , 635108', '9086751432', 'car-rent-5.png', 'Without Driver', 'Bangalore', '2022-10-03 06:55:20', '2022-10-03 06:55:20'),
(20, 5, 'Range Rover', '80,000', 'Ghost', '6', '3/251-h Varattanapalli Road , Kandhikuppam(Vii) , Bargur(Tk) , Krishnagiri(Dt) , 635108', '9086751432', 'car-rent-6.png', 'With Driver', 'Kolkata', '2022-10-03 06:55:54', '2022-10-03 06:55:54');

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
(4, '2021_05_30_104530_create_car_details_table', 1),
(5, '2022_09_29_131336_create_subscribers_table', 2);

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
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `number`, `city`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Sakthi Ganapathi', 'sakthiganapathis97@gmail.com', NULL, '8870656056', 'Krishnagiri', '$2y$10$Flp/1.4Ueta1qTGyeOcEuujH.1Jnj0YOAuxBdPYrZ79WOQg7QOBXe', NULL, '2022-10-03 02:01:58', '2022-10-03 02:01:58'),
(5, 'preethi', 'preethi@gmail.com', NULL, '9086751432', 'Salem', '$2y$10$MlMa4JmGdxAnBvjsgnZxeeswCEvm4Bd.wFiK9RS3WqWEDJk/hbzOG', NULL, '2022-10-03 04:40:25', '2022-10-03 04:40:25'),
(6, 'jerome', 'jerome@gmail.com', NULL, '9078564132', 'Yelagiri', '$2y$10$1CjMcbcomLCapzi6q4duaunJICsydDBCav2g/Ct2sAzdbqSBVyAU2', NULL, '2022-10-03 04:49:43', '2022-10-03 04:49:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_details_user_id_foreign` (`user_id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
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
-- AUTO_INCREMENT for table `car_details`
--
ALTER TABLE `car_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_details`
--
ALTER TABLE `car_details`
  ADD CONSTRAINT `car_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
