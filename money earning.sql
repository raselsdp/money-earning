-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 05:06 PM
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
-- Database: `refer_earning_db`
--

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
(164, 'user', 'phone_number', '1839636122', 16),
(163, 'user', 'name', 'Sohag Srz', 16),
(162, 'user', 'phone_number', '1839636973', 15),
(161, 'user', 'name', 'Md Rasel Srz', 15);

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
(6, 'siteLogo', 'https://thepromaxnetwork.com/assets/images/logoIcon/logo.png'),
(9, 'name', 'Md Rasel Srz'),
(10, 'username', 'rasel_4521'),
(11, 'phone_number', '1839636973'),
(12, 'email', 'raselislam4521@gmail.com'),
(13, 'address', ''),
(14, 'zip', ''),
(15, 'city', '');

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
(16, 'SohagSrz4521@gmail.com', '$2y$10$CMQtS2KRRpNxHxfYfL6YWOkxzMz72eD4JYC6vBZcoSuEGaOmBGW4u', 'Sohag_srz', 0, 0, 1, 1, 0, 1709567667, 1709567667, 0),
(15, 'raselislam4521@gmail.com', '$2y$10$SV6rLqiPaPoUilDNledwXuOw/NKQO8RYUXlU9q127OALPoJ7Rk.NG', 'rasel_4521', 0, 0, 1, 1, 0, 1709409332, 1709568043, 0);

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
(29, 15, '5FMRH6M4NObBx-pBsDVXpXgT', '$2y$10$d18L2lzm8Qk2u9HnJi3VSebruGM9IetqYwuGDZ/3iioRGyfy/lUVS', 1711987243),
(26, 15, 'agrCZmUzxavEOa_RaSR0eiBm', '$2y$10$0054tdDrr0cZnPNdceGP0umTbgjkk5F1HSKh8k6tyFkX3CFEZH.rm', 1711858790),
(18, 13, 'CZRgmsBBMVp9JXNeaSzHkIQh', '$2y$10$sSXbVtJlgcXGhnl4ZbmHHOuG/UcizPe9wUTTpDX5UYqamyeswxr2K', 1711787854);

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
('ejWtPDKvxt-q7LZ3mFjzUoIWKJYzu47igC8Jd9mffFk', 70.2364, 1709568043, 1710108043),
('sZYXdcyzJCIQjhLWDhxqtQgKYyGMgsFMjHNxwbpWOAE', 49, 1709567667, 1709639667),
('uwPQzkgJYV6VOgPRh5OaiCH6_ph3jsXaybEp8QaO5s8', 29, 1708526826, 1708598826),
('7vseYrw9h3JB0em7PE6kt5gfMGql44T4BKqXZc1N4RE', 29, 1708526826, 1708598826),
('CUeQSH1MUnRpuE3Wqv_fI3nADvMpK_cg6VpYK37vgIw', 4, 1708526826, 1708958826),
('Jjl8HEbTSJpZBWoyXOajJXqciuUdngUbah061jwhliE', 16.3155, 1709407980, 1709443980),
('xU9Ct6oxJtgtf2qyD5KAC3HXZi_JuDns5y3JjFxuPpI', 499, 1709407951, 1709580751),
('AnGtiPix65JhhWaymTORy6MyZ1ZJKOC_vP4dBSQsZpc', 29, 1709136241, 1709208241),
('xBr9aAcDP0_xSWtirUmaOVFmmUgq0mAJ4nKmZvNMR68', 29, 1709136241, 1709208241),
('bwiabKhMJIkE97AHVD-3TXfSVmv8wgLmhRmoNMVPCPc', 498.116, 1709407980, 1709580780),
('o1KJMguTIPwPhnAvNw_gqJacLLEWYbsG38HhSxc2GBE', 29, 1709408024, 1709480024),
('ABZDFGI224TfeifCuofpaOlEKBK105XeN4UtLVG-HnA', 29, 1709408024, 1709480024),
('vCOt9mzVJDObpPclZ6pZDsoyHPjwrIkeUBRZ-k211_0', 29, 1709409333, 1709481333),
('yLlwMYNq1FW0ydBEHxqjls37oaVsGEOc1eyGLBO822o', 29, 1709409333, 1709481333),
('dbXHcailSmzgK8_m1Gz39v2eSHj9fWqBrZQ_vX_BjZI', 29, 1709567667, 1709639667),
('cYj7WRf6jq7ioxQ19NYYQPHFneG2_av4HKzSZyKBh2c', 29, 1709567667, 1709639667);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `srz_cpt`
--
ALTER TABLE `srz_cpt`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `srz_fields`
--
ALTER TABLE `srz_fields`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `srz_options`
--
ALTER TABLE `srz_options`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
