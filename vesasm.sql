-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 10:37 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vesasm`
--

-- --------------------------------------------------------

--
-- Table structure for table `indents`
--

CREATE TABLE `indents` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `department` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `reason_request` varchar(110) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indents`
--

INSERT INTO `indents` (`id`, `user_id`, `item`, `qty`, `status`, `department`, `description`, `reason_request`) VALUES
(6, 9, 'Printer', 2, 2, 3, NULL, NULL),
(7, 9, 'PC', 1, 3, 3, NULL, NULL),
(8, 9, 'Printer', 1, 3, 3, NULL, NULL),
(9, 12, 'books', 23, 0, 3, NULL, NULL),
(10, 12, 'mouse', 4, 2, 3, NULL, NULL),
(11, 18, 'Laptop', 2, 0, 4, NULL, NULL),
(12, 12, 'Laptop', 3, 0, 3, 'dell', 'no pc');

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
(3, '2018_09_23_070837_create_roles_table', 1),
(4, '2018_09_23_071214_create_user_role_table', 1);

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
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `po_id` int(10) UNSIGNED NOT NULL,
  `indent_id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `po_id`, `indent_id`, `item`, `qty`, `available`) VALUES
(12, 7, 6, 'Printer', 2, 1),
(13, 13, 10, 'mouse', 4, 0),
(14, 13, 9, 'books', 23, 0),
(15, 19, 11, 'Laptop', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2018-09-23 02:06:03', '2018-09-23 02:06:03'),
(2, 'User', '2018-09-23 02:06:03', '2018-09-23 02:06:03'),
(3, 'Purchase Officer', '2018-09-23 02:06:03', '2018-09-23 02:06:03'),
(4, 'Store Mgr', '2018-09-23 02:06:03', '2018-09-23 02:06:03'),
(5, 'Guest', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store_stock`
--

CREATE TABLE `store_stock` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_stock`
--

INSERT INTO `store_stock` (`id`, `item_name`, `qty`) VALUES
(3, 'PC', 3),
(4, 'Printer', 10),
(5, 'Laptop', 6),
(6, 'Projector', 2),
(7, 'CRO', 3),
(8, 'Chalk Box', 20),
(9, 'White Board Marker', 12),
(10, 'Bread Board', 16);

--
-- Triggers `store_stock`
--
DELIMITER $$
CREATE TRIGGER `if_available` AFTER UPDATE ON `store_stock` FOR EACH ROW update requests join store_stock
on requests.item=store_stock.item_name
set requests.available=1 where requests.qty<=store_stock.qty
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `department`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Abhiruchi Bhattacharya', 'abhiruchi.bhattacharya@gmail.com', 1, NULL, '$2y$10$5OuHk36e2ftuEwKEz2Oi1OXOefDCGM.gX5SGkyCasnehoOpkI7yBu', 'fRQ4ZVKdS0R2tyntL8ZfwLgPpZeO3ZVQzkW9iP0HdhZhXC5dzDlCXfD72iVb', '2018-09-23 06:34:57', '2018-09-23 06:34:57'),
(3, 'Alka Hest', 'c@d.com', NULL, NULL, '$2y$10$ze/fOsw1MWRHuAXqzhiucupicPPotPwxoHUD/uWciSNy0P6U7DcYS', 'n5RjP3NO0zASAmxBl0cX7mqFi7xiamMQjpOiOluFAQQfUHHtdLYDLrRWKbQw', '2018-09-23 06:47:33', '2018-09-23 06:47:33'),
(5, 'qqq', 'ppp@pp.p', NULL, NULL, '$2y$10$lvfHdR3UbU3eW4M7TeQ7VOd8D77DB3.EoGLTlUa3j2DRai711Vr2G', '1WxSs9o9k5cgSWF7ZJTTMhLBkYnDWTWkPOTcdKrrbcBzliJ1kNnUuHCxp2lW', '2018-09-23 07:53:21', '2018-09-23 07:53:21'),
(6, 'www', 'www@ww.w', NULL, NULL, '$2y$10$KdOZycYJmUmIGGA2Xgd61OC6NTnd9oJnbXEoW5sPZw39SOn1AEIhC', 'mScfzAiDSO5Ea8Bxd4ECDfjCpvSbkwnPycTkNorhNTuoEromkLTzllV4SxMw', '2018-09-23 08:03:08', '2018-09-23 08:03:08'),
(7, 'po', 'po@po.po', 3, NULL, '$2y$10$U6./MWG1E6E0QU3zWb1rj.T9vBKi9.5v/y28pcy7XUln/sNyEEmy2', 'n6w56oZcc9ZAQ6GE4sbU6KRY9ZqUi35ziJ5Q05fjjlXQDzOQuno1O222wNAN', '2018-09-23 08:19:48', '2018-09-23 08:19:48'),
(8, 'sm', 'smsm@sm.sm', NULL, NULL, '$2y$10$0uQMg.M3XJVEfa0JsCzb1eECrGjAD7DcdXgB.VxK0qA3/kOoE9QnO', 'yOZmq5P2lg7za6d0WzQ5iI3I2MjDFOx6kJfxGJOUZbp8hMNmVgvflZTPD8rn', '2018-09-23 08:21:42', '2018-09-23 08:21:42'),
(9, 'user', 'user@u.com', 3, NULL, '$2y$10$cWJXxMFti.ZYHqYqLbscs.1WjbOjlPWZDSNiANSVrqFUUE/pHefE2', 'UTSMPbyxrZwdARMxpWARSQnAxUcK7VcLyRAsZY5z74Ba2FPSWORsSzKTt6s5', '2018-09-23 08:32:21', '2018-09-23 08:32:21'),
(10, 'newuser', 'new@new.com', NULL, NULL, '$2y$10$22dfFO90aiHuQGXFafQMEOCu3BokNhT3Ucbv4Z94m.FjTlbYvbk2i', 'uhIECPx96jihCxF9dryHzZ25Q0XtZKCzjYuvztaxj6J4bAiuahByQ9ZUsKPp', '2018-09-23 21:58:40', '2018-09-23 21:58:40'),
(11, 'Smruti', 's.k20@sk.com', 1, NULL, '$2y$10$Cottxvudi793QSmSDENuzeR6fkxaIuOra1G4d9KoHx8Uqvcx5U9Gi', '3If0EPHJ7qimSNu1lCDvzFze0Ljtnc95VvTBWYuifobeiaiS6NuzI8w9TNRc', '2018-09-24 10:01:03', '2018-09-24 10:01:03'),
(12, 'chinmay sankhe', 'aaaa@a.aaa', 3, NULL, '$2y$10$vXWSibCYZ2Ub0v04AQrfn.4f/1ihYeZgIL7VLguPNkzOW.7Yjusha', 'Rdk7nU55tPNP6wrKd7G05uCyLeUVKkcKjP7JiGxAnee7oYAaz20reUsXfwQe', '2018-09-24 14:38:01', '2018-09-24 14:38:01'),
(13, 'chinmay_sankhe', 'bbb@b.bb', 3, NULL, '$2y$10$9qHwCy52UTUDEsor/KghZesZ5Y6kRFltnNUwNClxvevZvO75/tZLS', 'HaSiAxoeE2wX0zi1zBINem0vSf0Y4MMiMxTeSn4yoVozhHUnYPJJqpMupxAK', '2018-09-24 14:41:19', '2018-09-24 14:41:19'),
(14, '2016.chinmay.sankhe@ves.ac.in', '2016.chinmay.sankhe@ves.ac.in', 4, NULL, '$2y$10$CkTBx3qrwCg3.VdKa.qhGegZ1IDWXIrATR/2/i6/ICIpPH.0JwicS', '7m2LPMwkmlk2SyUr94Bisx46kEWGfEOBs7OlkYP1mTrWcyOZxTirdwZZzsDY', '2018-09-24 14:44:34', '2018-09-24 14:44:34'),
(15, 'sanket', 'zzz@zz.com', 3, NULL, '$2y$10$dReAluv6KCsnzEw24CYXuePF1rz2pj7scS90oTEh7j4zuKZR/jJNy', 'o9XhjQw8XRe7uLvUWRfUCpmraTjhSCn6spt0sPRAuyJ0weognkjUjOT2c4r4', '2018-09-24 23:28:55', '2018-09-24 23:28:55'),
(16, 'uu', 'uu@uu.com', 3, NULL, '$2y$10$Fx6ksICv0W/TmSM7faglQuGmgBoNawcVEqdFM5Pqe0ZKJkhOqgTm6', 'KDFgMlqfYwKXYTfFM0RSJUaMeZTVFeB5ZAKSLDx0T4I3QXYl1gUThEdmzmPk', '2018-09-25 01:29:34', '2018-09-25 01:29:34'),
(17, 'rr', 'rr@rr.com', 3, NULL, '$2y$10$Fk14si/4teFRdDHwm4YzJ.q6AjPZq.6cUh6m0XUhFg5CXURrAj/16', 'kj45Il6I9MNAq1qC2HcvtSY2Y69QdJVlqZRGwC5YYwh57IvRm2BJSG0SpI6w', '2018-09-25 01:43:40', '2018-09-25 01:43:40'),
(18, 'rishil', 'qwerty@as.a', 4, NULL, '$2y$10$SRPAbFj9BVc4AhIQfOshmOAq8G2cItjp.mcTQdZ3GBawiJeht5mJi', 'fsne2g2m8RmkvgCr7Tz5QrKHU5DnWxuZiXkasc6PfEHYFmqW2ZOHRM2m9lSo', '2018-09-25 02:33:18', '2018-09-25 02:33:18'),
(19, 'smruti', 'sm@sm.sm1', 4, NULL, '$2y$10$vteUSrAt2XJnDNgX7xKl0Oycbcryc82EDGMo.fTa64N.Rc9cYPGeG', 'kyWOokwUUvgoT86qipy9fDkf9mn9ncmmYf99zn3cRUeVAPISJqGfRyQI7Oxf', '2018-09-25 02:39:06', '2018-09-25 02:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 5, 5, NULL, NULL),
(2, 6, 1, '2018-09-23 13:44:50', '2018-09-23 13:44:50'),
(3, 7, 3, '2018-09-23 13:51:16', '2018-09-23 13:51:16'),
(4, 8, 4, '2018-09-23 13:54:22', '2018-09-23 13:54:22'),
(5, 9, 2, '2018-09-23 14:02:47', '2018-09-23 14:02:47'),
(6, 10, 2, '2018-09-24 03:29:11', '2018-09-24 03:29:11'),
(7, 11, 4, '2018-09-24 15:54:34', '2018-09-24 15:54:34'),
(8, 12, 2, '2018-09-24 20:09:11', '2018-09-24 20:09:11'),
(9, 13, 3, '2018-09-24 20:11:55', '2018-09-24 20:11:55'),
(10, 14, 4, '2018-09-24 20:15:12', '2018-09-24 20:15:12'),
(11, 15, 4, '2018-09-25 04:59:29', '2018-09-25 04:59:29'),
(12, 16, 2, '2018-09-25 07:00:31', '2018-09-25 07:00:31'),
(13, 17, 2, '2018-09-25 07:17:06', '2018-09-25 07:17:06'),
(14, 18, 2, '2018-09-25 08:03:37', '2018-09-25 08:03:37'),
(15, 19, 3, '2018-09-25 08:09:36', '2018-09-25 08:09:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indents`
--
ALTER TABLE `indents`
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
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `po_id` (`po_id`),
  ADD KEY `item` (`item`),
  ADD KEY `qty` (`qty`),
  ADD KEY `indent_id` (`indent_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_stock`
--
ALTER TABLE `store_stock`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_name` (`item_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indents`
--
ALTER TABLE `indents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store_stock`
--
ALTER TABLE `store_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`indent_id`) REFERENCES `indents` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
