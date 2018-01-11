-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 07:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2017_08_23_045500_create_products_table', 1),
(4, '2017_08_25_072036_create_carts_table', 1),
(5, '2017_08_25_201952_create_orders_table', 1),
(6, '2017_10_06_090921_create_quantities_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `table` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `is_served` tinyint(1) NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `user_id`, `cart`, `table`, `name`, `total`, `is_served`, `is_paid`) VALUES
(1, '2018-01-11 03:08:33', '2018-01-11 03:08:33', 1, 'O:8:\"App\\Cart\":4:{s:5:\"items\";a:1:{i:3;a:5:{s:3:\"qty\";s:1:\"4\";s:5:\"price\";i:200;s:4:\"item\";O:11:\"App\\Product\":25:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagepath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:3;s:10:\"created_at\";s:19:\"2018-01-11 14:02:08\";s:10:\"updated_at\";s:19:\"2018-01-11 14:02:09\";s:9:\"imagepath\";s:16:\"images/donut.jpg\";s:5:\"title\";s:5:\"Donut\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:50;}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:3;s:10:\"created_at\";s:19:\"2018-01-11 14:02:08\";s:10:\"updated_at\";s:19:\"2018-01-11 14:02:09\";s:9:\"imagepath\";s:16:\"images/donut.jpg\";s:5:\"title\";s:5:\"Donut\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:50;}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:9:\"\0*\0events\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:10:\"product_id\";i:3;s:5:\"image\";s:16:\"images/donut.jpg\";}}s:8:\"totalQty\";i:4;s:10:\"totalPrice\";i:200;s:3:\"qty\";i:0;}', '2', 'Kabilarajah Yuvarajah', 200, 0, 0),
(2, '2018-01-11 05:59:30', '2018-01-11 05:59:30', 1, 'O:8:\"App\\Cart\":4:{s:5:\"items\";a:2:{i:1;a:5:{s:3:\"qty\";s:1:\"3\";s:5:\"price\";i:120;s:4:\"item\";O:11:\"App\\Product\":25:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagepath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2018-01-11 14:00:24\";s:10:\"updated_at\";s:19:\"2018-01-11 14:00:31\";s:9:\"imagepath\";s:15:\"images/cake.jpg\";s:5:\"title\";s:4:\"Cake\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:40;}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2018-01-11 14:00:24\";s:10:\"updated_at\";s:19:\"2018-01-11 14:00:31\";s:9:\"imagepath\";s:15:\"images/cake.jpg\";s:5:\"title\";s:4:\"Cake\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:40;}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:9:\"\0*\0events\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:10:\"product_id\";i:1;s:5:\"image\";s:15:\"images/cake.jpg\";}i:7;a:5:{s:3:\"qty\";s:1:\"4\";s:5:\"price\";i:100;s:4:\"item\";O:11:\"App\\Product\":25:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagepath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:7;s:10:\"created_at\";s:19:\"2018-01-11 14:04:00\";s:10:\"updated_at\";s:19:\"2018-01-11 14:04:01\";s:9:\"imagepath\";s:15:\"images/milk.jpg\";s:5:\"title\";s:4:\"Milk\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:25;}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:7;s:10:\"created_at\";s:19:\"2018-01-11 14:04:00\";s:10:\"updated_at\";s:19:\"2018-01-11 14:04:01\";s:9:\"imagepath\";s:15:\"images/milk.jpg\";s:5:\"title\";s:4:\"Milk\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:25;}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:9:\"\0*\0events\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:10:\"product_id\";i:7;s:5:\"image\";s:15:\"images/milk.jpg\";}}s:8:\"totalQty\";i:7;s:10:\"totalPrice\";i:220;s:3:\"qty\";i:0;}', '1', 'Kabilarajah Yuvarajah', 220, 0, 0);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagepath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://placehold.it/640x480',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `imagepath`, `title`, `description`, `price`) VALUES
(1, '2018-01-11 08:30:24', '2018-01-11 08:30:31', 'images/cake.jpg', 'Cake', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 40),
(2, '2018-01-11 08:31:35', '2018-01-11 08:31:36', 'images/coffee.jpg', 'Coffee', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 30),
(3, '2018-01-11 08:32:08', '2018-01-11 08:32:09', 'images/donut.jpg', 'Donut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 50),
(4, '2018-01-11 08:32:30', '2018-01-11 08:32:31', 'images/hotdog.jpg', 'Hot Dog', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 120),
(5, '2018-01-11 08:32:57', '2018-01-11 08:32:58', 'images/icecream.jpg', 'Ice Cream', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 80),
(6, '2018-01-11 08:33:40', '2018-01-11 08:33:40', 'images/juice.jpg', 'Juice', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 60),
(7, '2018-01-11 08:34:00', '2018-01-11 08:34:01', 'images/milk.jpg', 'Milk', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 25),
(8, '2018-01-11 08:34:29', '2018-01-11 08:34:30', 'images/pizza.jpg', 'Pizza', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 350);

-- --------------------------------------------------------

--
-- Table structure for table `quantities`
--

CREATE TABLE `quantities` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kabilarajah Yuvarajah', 'kabilarajahy@gmail.com', '$2y$10$DAp.e28rklT6alHiqjpfpeoY1wMfldygpVjUfAlxnVfOd2R8pAHv6', 0, 'o5ZC22b1SKLlwngh2vqppdqPHuWQJDIr7ynT142SwqKnKabyoWwAEl2GNnvj', '2018-01-11 02:55:40', '2018-01-11 02:55:40'),
(2, 'admin', 'admin@admin.com', '$2y$10$I2.0XXepQRPm/sNMc9HbUujpMMmFSdIh8YoscMU4wx89wVMY4KxG6', 1, 'myN3OCvgiVTFkDoTrqUGtOKXyjc9dUEeJUU8mJFrjLkIZ6tEp20JfVpNZVii', '2018-01-11 02:56:50', '2018-01-11 02:56:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantities`
--
ALTER TABLE `quantities`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `quantities`
--
ALTER TABLE `quantities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
