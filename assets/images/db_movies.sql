-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 05:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_post_realtion`
--

CREATE TABLE `cat_post_realtion` (
  `id` int(50) NOT NULL,
  `cat_id` int(50) NOT NULL,
  `post_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat_post_realtion`
--

INSERT INTO `cat_post_realtion` (`id`, `cat_id`, `post_id`, `type`) VALUES
(1, 1, 49, 'movies');

-- --------------------------------------------------------

--
-- Table structure for table `srz_cats`
--

CREATE TABLE `srz_cats` (
  `ID` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `parents` varchar(255) NOT NULL,
  `obj_id` int(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `srz_cats`
--

INSERT INTO `srz_cats` (`ID`, `type`, `value`, `parents`, `obj_id`, `name`) VALUES
(1, 'Movies', 'hindi', '', NULL, 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `srz_cpt`
--

CREATE TABLE `srz_cpt` (
  `ID` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `title` varchar(300) DEFAULT '',
  `post_type` varchar(300) DEFAULT '',
  `slug` varchar(400) DEFAULT '',
  `description` varchar(1000) DEFAULT '',
  `status` int(1) DEFAULT NULL,
  `parent_id` int(10) DEFAULT 0,
  `thumb_id` int(10) DEFAULT NULL,
  `pub_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mod_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `srz_cpt`
--

INSERT INTO `srz_cpt` (`ID`, `user_id`, `title`, `post_type`, `slug`, `description`, `status`, `parent_id`, `thumb_id`, `pub_date`, `mod_date`) VALUES
(49, 1, 'Tiger', 'movies', 'tiger', 'Tiger Nageswara Rao (2023)', 1, 0, NULL, '2024-02-21 13:11:05', '2024-02-21 13:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `srz_fields`
--

CREATE TABLE `srz_fields` (
  `ID` int(10) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `name` varchar(255) DEFAULT '',
  `value` longtext DEFAULT '',
  `obj_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `srz_fields`
--

INSERT INTO `srz_fields` (`ID`, `type`, `name`, `value`, `obj_id`) VALUES
(147, 'order', 'names', 'a:1:{i:0;s:8:\"Md Sohag\";}', 48),
(148, 'order', 'email_user', 'mdsohagislam25@gmail.com', 48),
(149, 'order', 'payment_datas', 'a:17:{s:2:\"id\";s:10:\"4595506851\";s:8:\"token_id\";s:10:\"5418910271\";s:8:\"order_id\";s:2:\"48\";s:17:\"order_description\";s:18:\"Flight Reservation\";s:12:\"price_amount\";s:1:\"5\";s:14:\"price_currency\";s:3:\"USD\";s:12:\"pay_currency\";N;s:16:\"ipn_callback_url\";s:23:\"https://127.0.0.1:3000/\";s:11:\"invoice_url\";s:46:\"https://nowpayments.io/payment/?iid=4595506851\";s:11:\"success_url\";s:32:\"https://127.0.0.1:3000/dashboard\";s:10:\"cancel_url\";s:32:\"https://127.0.0.1:3000/dashboard\";s:18:\"partially_paid_url\";N;s:15:\"payout_currency\";N;s:10:\"created_at\";s:24:\"2024-01-05T01:29:08.227Z\";s:10:\"updated_at\";s:24:\"2024-01-05T01:29:08.227Z\";s:13:\"is_fixed_rate\";b:0;s:19:\"is_fee_paid_by_user\";b:0;}', 48);

-- --------------------------------------------------------

--
-- Table structure for table `srz_options`
--

CREATE TABLE `srz_options` (
  `ID` int(10) NOT NULL,
  `name` varchar(255) DEFAULT '',
  `value` longtext DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `srz_options`
--

INSERT INTO `srz_options` (`ID`, `name`, `value`) VALUES
(1, 'siteName', 'MySite.Com'),
(2, 'siteTitle', 'MySite'),
(3, 'siteDescription', 'This is is for bla bla bla'),
(4, 'siteEmail', 'admin@gmail.com'),
(5, 'sitePhone', '017000000000'),
(6, 'siteLogo', '/assets/uploads/site/b7e68a2122f61dea8f88127b6bddd533fac43591a365ab22399f879917976197.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `refer_by` int(50) NOT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT 0,
  `verified` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `resettable` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `roles_mask` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `registered` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `force_logout` mediumint(7) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `refer_by`, `status`, `verified`, `resettable`, `roles_mask`, `registered`, `last_login`, `force_logout`) VALUES
(12, 'rasel4521@gmail.com', '4521', '54', 0, 0, 1, 1, 0, 0, NULL, 0),
(13, 'mdsohagislam25@gmail.com', '$2y$10$z7NQByWh9S8Iq57RVxrQ.e/0tx6JyBdGi8oc1tvBVoWEzz4qqwWDi', '49', 0, 0, 1, 1, 0, 1708522874, 1708522917, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_confirmations`
--

CREATE TABLE `users_confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_remembered`
--

CREATE TABLE `users_remembered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_remembered`
--

INSERT INTO `users_remembered` (`id`, `user`, `selector`, `token`, `expires`) VALUES
(1, 13, 'Nts5JROzh4vJDkKfR2eV7TNE', '$2y$10$ir3eXUrERNFLUlB3P58oPOLbV5g7mLxG5y/rTKhzofV1jmh9HoHBa', 1710942117);

-- --------------------------------------------------------

--
-- Table structure for table `users_resets`
--

CREATE TABLE `users_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_throttling`
--

CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float UNSIGNED NOT NULL,
  `replenished_at` int(10) UNSIGNED NOT NULL,
  `expires_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_throttling`
--

INSERT INTO `users_throttling` (`bucket`, `tokens`, `replenished_at`, `expires_at`) VALUES
('ejWtPDKvxt-q7LZ3mFjzUoIWKJYzu47igC8Jd9mffFk', 66.2383, 1708522917, 1709062917),
('Jjl8HEbTSJpZBWoyXOajJXqciuUdngUbah061jwhliE', 14.1334, 1708522487, 1708558487),
('xU9Ct6oxJtgtf2qyD5KAC3HXZi_JuDns5y3JjFxuPpI', 494.695, 1708522487, 1708695287),
('sZYXdcyzJCIQjhLWDhxqtQgKYyGMgsFMjHNxwbpWOAE', 49, 1708522874, 1708594874),
('vgtpck8kTb8GKfcOojnrG6zsL9uFB8R3SK0hYnxcEeQ', 29, 1708522874, 1708594874),
('vEvcabMzE8W9R9JtEUvRpv7JD_ItLSo453-ZielTCvU', 29, 1708522874, 1708594874),
('CUeQSH1MUnRpuE3Wqv_fI3nADvMpK_cg6VpYK37vgIw', 4, 1708522874, 1708954874);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_post_realtion`
--
ALTER TABLE `cat_post_realtion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srz_cats`
--
ALTER TABLE `srz_cats`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `srz_cpt`
--
ALTER TABLE `srz_cpt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `srz_fields`
--
ALTER TABLE `srz_fields`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `srz_options`
--
ALTER TABLE `srz_options`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_confirmations`
--
ALTER TABLE `users_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `email_expires` (`email`,`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users_remembered`
--
ALTER TABLE `users_remembered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `users_resets`
--
ALTER TABLE `users_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user_expires` (`user`,`expires`);

--
-- Indexes for table `users_throttling`
--
ALTER TABLE `users_throttling`
  ADD PRIMARY KEY (`bucket`),
  ADD KEY `expires_at` (`expires_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_post_realtion`
--
ALTER TABLE `cat_post_realtion`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `srz_cats`
--
ALTER TABLE `srz_cats`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `srz_cpt`
--
ALTER TABLE `srz_cpt`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `srz_fields`
--
ALTER TABLE `srz_fields`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `srz_options`
--
ALTER TABLE `srz_options`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
