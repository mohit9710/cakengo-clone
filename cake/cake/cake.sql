-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2020 at 11:23 AM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address2` varchar(250) DEFAULT NULL,
  `pincode` int(8) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `order_notes` varchar(255) DEFAULT NULL,
  `address_type` tinyint(1) DEFAULT NULL COMMENT '1-home,2-office',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `name`, `email`, `address2`, `pincode`, `city`, `state`, `mobile`, `order_notes`, `address_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:19:21', '2020-10-31 05:19:21'),
(2, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:19:53', '2020-10-31 05:19:53'),
(3, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:20:18', '2020-10-31 05:20:18'),
(4, 1, 'name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:22:35', '2020-10-31 05:22:35'),
(5, 1, 'name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:32:08', '2020-10-31 05:32:08'),
(6, 1, 'name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:32:31', '2020-10-31 05:32:31'),
(7, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:33:46', '2020-10-31 05:33:46'),
(8, 1, 'name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:34:34', '2020-10-31 05:34:34'),
(9, 1, 'name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:38:00', '2020-10-31 05:38:00'),
(10, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:38:18', '2020-10-31 05:38:18'),
(11, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:39:18', '2020-10-31 05:39:18'),
(12, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:40:13', '2020-10-31 05:40:13'),
(13, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:40:21', '2020-10-31 05:40:21'),
(14, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121004, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:53:43', '2020-10-31 05:53:43'),
(15, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121004, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 05:54:13', '2020-10-31 05:54:13'),
(16, 1, 'name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 06:03:09', '2020-10-31 06:03:09'),
(17, 1, 'name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-10-31 06:05:20', '2020-10-31 06:05:20'),
(18, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-04 10:16:21', '2020-11-04 10:16:21'),
(19, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-04 10:16:40', '2020-11-04 10:16:40'),
(20, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-04 10:17:10', '2020-11-04 10:17:10'),
(21, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-04 10:19:01', '2020-11-04 10:19:01'),
(22, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-04 10:19:23', '2020-11-04 10:19:23'),
(23, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-04 10:20:25', '2020-11-04 10:20:25'),
(24, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 06:19:06', '2020-11-19 06:19:06'),
(25, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', 'test online payment', NULL, '2020-11-19 06:22:54', '2020-11-19 06:22:54'),
(26, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', 'test online payment', NULL, '2020-11-19 06:36:20', '2020-11-19 06:36:20'),
(27, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', 'test notes', NULL, '2020-11-19 06:36:57', '2020-11-19 06:36:57'),
(28, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 06:57:46', '2020-11-19 06:57:46'),
(29, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 06:58:20', '2020-11-19 06:58:20'),
(30, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 06:58:28', '2020-11-19 06:58:28'),
(31, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 06:58:40', '2020-11-19 06:58:40'),
(32, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 07:00:47', '2020-11-19 07:00:47'),
(33, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 07:06:53', '2020-11-19 07:06:53'),
(34, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 07:10:06', '2020-11-19 07:10:06'),
(35, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 07:11:59', '2020-11-19 07:11:59'),
(36, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 07:17:19', '2020-11-19 07:17:19'),
(37, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-19 07:22:38', '2020-11-19 07:22:38'),
(38, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-25 08:59:38', '2020-11-25 08:59:38'),
(39, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck\r\nDLF center point building, Opposite Bata Flyover, Office no, F8, Faridabad', 121002, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-25 09:00:28', '2020-11-25 09:00:28'),
(40, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck\r\nDLF center point building, Opposite Bata Flyover, Office no, F8, Faridabad', 121002, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-25 09:01:14', '2020-11-25 09:01:14'),
(41, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck\r\nDLF center point building, Opposite Bata Flyover, Office no, F8, Faridabad', 121002, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-26 12:00:38', '2020-11-26 12:00:38'),
(42, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-26 12:02:39', '2020-11-26 12:02:39'),
(43, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck\r\nDLF center point building, Opposite Bata Flyover, Office no, F8, Faridabad', 121002, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-26 12:08:50', '2020-11-26 12:08:50'),
(44, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck', 121003, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-26 12:16:40', '2020-11-26 12:16:40'),
(45, 1, 'Kumar Satyam', 'admin@admin.com', 'DLF center point building, Opposite Bata Flyover, Office no, F8, Faridabad\r\nDLF center point building, Opposite Bata Flyover, Office no, F8, Faridabad', 121003, 'Faridababd', 'Haryana', '07877898989', NULL, NULL, '2020-11-26 12:24:07', '2020-11-26 12:24:07'),
(46, 1, 'amdmin name', 'admin@admin.com', 'rc cndknck\r\nDLF center point building, Opposite Bata Flyover, Office no, F8, Faridabad', 121002, 'fbd', 'hry', '07877898989', NULL, NULL, '2020-11-26 12:25:47', '2020-11-26 12:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(13) NOT NULL,
  `question_id` varchar(255) DEFAULT NULL,
  `answers` varchar(255) DEFAULT NULL,
  `marks` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `type`, `short_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Choco Day Special', 'Slider', 'On this special occasion of Chocolate day', '1606541394_feature1.jpg', '1', '2020-11-28 05:29:54', '2020-11-28 05:29:54'),
(2, 'Flowers Day', 'Slider', 'Make Someone special with the beauty of flower\'s', '1606541483_feature3.jpg', '1', '2020-11-28 05:31:23', '2020-11-28 05:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caketype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cakemassage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giftmassage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `color`, `size`, `user_id`, `qty`, `price`, `delivery_date`, `caketype`, `cakemassage`, `giftmassage`, `created_at`, `updated_at`) VALUES
(12, '16', NULL, '20', '4', NULL, '800', '2020-12-02', '', 'test message', 'gift essage', '2020-11-28 06:31:31', '2020-11-28 06:31:31'),
(13, '16', NULL, '20', '4', NULL, '800', '2020-12-02', '', 'test message', 'new test git', '2020-11-28 06:32:01', '2020-11-28 06:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `type`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Diwali-14 November', NULL, NULL, '1603437855_diwali.jpeg', '2020-10-23 07:24:15', '2020-10-24 08:52:57'),
(3, 'Cakes', NULL, NULL, '1603437877_cake.jpeg', '2020-10-23 07:24:37', '2020-10-23 07:24:37'),
(4, 'Flowers', NULL, NULL, '1603437971_flowers.jpeg', '2020-10-23 07:26:11', '2020-10-23 07:26:11'),
(6, 'Combos', NULL, NULL, '1603438055_flowers.jpeg', '2020-10-23 07:27:35', '2020-10-23 07:27:35'),
(7, 'Occasions', NULL, NULL, '1603438079_diwali.jpeg', '2020-10-23 07:27:59', '2020-10-23 07:27:59'),
(9, 'Plants', NULL, NULL, '1603438622_cake4.jpeg', '2020-10-23 07:37:02', '2020-10-24 08:53:17'),
(10, 'More Gifts', NULL, NULL, '1603438650_flowers.jpeg', '2020-10-23 07:37:30', '2020-10-23 07:37:30'),
(11, 'Chocolates', NULL, NULL, '1603529660_cake2.jpeg', '2020-10-24 08:54:20', '2020-10-24 08:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(13) NOT NULL,
  `auth_id` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `delivery_charges` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `status` int(13) DEFAULT -1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `auth_id`, `address`, `mobile`, `pincode`, `transaction_id`, `delivery_charges`, `total_price`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '18', '07877898989', '121003', 'online', '0', '900', '0', -1, '2020-11-04 10:16:29', '2020-11-04 10:16:29'),
(2, '1', '19', '07877898989', '121003', 'online', '0', '900', '0', -1, '2020-11-04 10:16:51', '2020-11-04 10:16:51'),
(3, '1', '20', '07877898989', '121003', 'online', '0', '900', '0', -1, '2020-11-04 10:17:19', '2020-11-04 10:17:19'),
(4, '1', '21', '07877898989', '121003', 'online', '0', '900', '0', -1, '2020-11-04 10:19:12', '2020-11-04 10:19:12'),
(5, '1', '22', '07877898989', '121003', 'online', '0', '900', '0', -1, '2020-11-04 10:19:33', '2020-11-04 10:19:33'),
(6, '1', '23', '07877898989', '121003', 'cashondelivery', '40', '800', '0', -1, '2020-11-04 10:20:25', '2020-11-04 10:20:25'),
(7, '1', '24', '07877898989', '121003', 'cashondelivery', '40', '500', '100', -1, '2020-11-19 06:19:06', '2020-11-19 06:19:06'),
(8, '1', '27', '07877898989', '121003', 'cashondelivery', '40', '0', '100', -1, '2020-11-19 06:36:57', '2020-11-19 06:36:57'),
(9, '1', '35', '07877898989', '121003', 'online', '40', '200', '0', -1, '2020-11-19 07:12:09', '2020-11-19 07:12:09'),
(10, '1', '36', '07877898989', '121003', 'online', '40', '300', '100', -1, '2020-11-19 07:17:32', '2020-11-19 07:17:32'),
(11, '1', '37', '07877898989', '121003', 'online', '0', '180', '20', -1, '2020-11-19 07:22:50', '2020-11-19 07:22:50'),
(12, '1', '38', '07877898989', '121003', 'online', '0', '749', '100', -1, '2020-11-25 08:59:48', '2020-11-25 08:59:48'),
(13, '1', '39', '07877898989', '121002', 'online', '0', '749', '100', -1, '2020-11-25 09:00:39', '2020-11-25 09:00:39'),
(14, '1', '40', '07877898989', '121002', 'online', '0', '749', '100', -1, '2020-11-25 09:01:35', '2020-11-25 09:01:35'),
(15, '1', '41', '07877898989', '121002', 'online', '0', '1700', '100', -1, '2020-11-26 12:00:49', '2020-11-26 12:00:49'),
(16, '1', '42', '07877898989', '121003', 'cashondelivery', '40', '0', '0', -1, '2020-11-26 12:02:39', '2020-11-26 12:02:39'),
(17, '1', '43', '07877898989', '121002', 'cashondelivery', '50', '1000', '100', -1, '2020-11-26 12:08:50', '2020-11-26 12:08:50'),
(18, '1', '44', '07877898989', '121003', 'cashondelivery', '40', '700', '100', -1, '2020-11-26 12:16:40', '2020-11-26 12:16:40'),
(19, '1', '45', '07877898989', '121003', 'cashondelivery', '0', '700', '100', -1, '2020-11-26 12:24:07', '2020-11-26 12:24:07'),
(20, '1', '46', '07877898989', '121002', 'cashondelivery', '50', '0', '100', -1, '2020-11-26 12:25:47', '2020-11-26 12:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_carts`
--

CREATE TABLE `checkout_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `checkout_id` int(13) NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caketype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cakemassage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giftmassage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkout_carts`
--

INSERT INTO `checkout_carts` (`id`, `checkout_id`, `product_id`, `size`, `user_id`, `qty`, `price`, `delivery_date`, `caketype`, `cakemassage`, `giftmassage`, `created_at`, `updated_at`) VALUES
(1, 5, '1', '3', '1', '2', '300', '2020-11-19', 'eggless', 'test', '', '2020-11-04 10:19:33', '2020-11-04 10:19:33'),
(2, 5, '1', '3', '1', '1', '300', '2020-11-25', 'egg', 'Smart Admin', '', '2020-11-04 10:19:33', '2020-11-04 10:19:33'),
(3, 6, '1', '1', '1', '4', '200', '2020-11-17', 'eggless', 'adminop', '', NULL, NULL),
(4, 7, '1', '2', '1', '2', '250', '2020-11-20', 'egg', 'test', '', '2020-11-19 06:19:06', '2020-11-19 06:19:06'),
(5, 7, '1', '2', '1', NULL, '250', '2020-11-21', 'eggless', 'test cake message', 'test gift message', '2020-11-19 06:19:06', '2020-11-19 06:19:06'),
(6, 8, '3', '6', '1', NULL, '200', '2020-11-25', 'egg', 'test wala', 'test wala gift', '2020-11-19 06:36:57', '2020-11-19 06:36:57'),
(7, 8, '3', '7', '1', NULL, '200', '2020-11-28', 'eggless', 'new tes', 'new test git', '2020-11-19 06:36:57', '2020-11-19 06:36:57'),
(8, 9, '3', '6', '1', NULL, '200', '2020-11-29', 'eggless', 'test message', 'test gift message', '2020-11-19 07:12:09', '2020-11-19 07:12:09'),
(9, 10, '3', '6', '1', NULL, '200', '2020-11-24', 'eggless', 'test cake message', 'test gift message', '2020-11-19 07:17:32', '2020-11-19 07:17:32'),
(10, 10, '1', '1', '1', NULL, '200', '2020-11-29', 'egg', 'test message', 'gift essage', '2020-11-19 07:17:32', '2020-11-19 07:17:32'),
(11, 11, '1', '1', '1', NULL, '200', '2020-11-24', 'eggless', 'test message', 'new test git', '2020-11-19 07:22:50', '2020-11-19 07:22:50'),
(12, 12, '9', '13', '1', NULL, '250', '2020-11-28', 'egg', 'test cake message', 'test gift message', '2020-11-25 08:59:48', '2020-11-25 08:59:48'),
(13, 13, '9', '13', '1', NULL, '250', '2020-11-28', 'egg', 'test cake message', 'test gift message', '2020-11-25 09:00:39', '2020-11-25 09:00:39'),
(14, 14, '9', '13', '1', NULL, '250', '2020-11-28', 'egg', 'test cake message', 'test gift message', '2020-11-25 09:01:35', '2020-11-25 09:01:35'),
(15, 15, '8', '8', '1', NULL, '200', '2020-11-28', 'egg', 'test cake message', 'test gift message', '2020-11-26 12:00:49', '2020-11-26 12:00:49'),
(16, 15, '12', '26', '1', NULL, '800', '2020-11-28', '', 'test cake message', 'gift essage', '2020-11-26 12:00:49', '2020-11-26 12:00:49'),
(17, 15, '16', '20', '1', NULL, '800', '2020-11-28', '', 'test message', 'test gift message', '2020-11-26 12:00:49', '2020-11-26 12:00:49'),
(18, 16, '9', '13', '1', NULL, '250', '2020-11-28', 'egg', 'test cake message', 'test gift message', '2020-11-26 12:02:39', '2020-11-26 12:02:39'),
(19, 16, '11', '27', '1', NULL, '500', '2020-11-28', '', 'test cake message', 'test gift message', '2020-11-26 12:02:39', '2020-11-26 12:02:39'),
(20, 17, '2', '5', '1', NULL, '200', '2020-12-05', '', 'test message', 'test gift message', '2020-11-26 12:08:50', '2020-11-26 12:08:50'),
(21, 17, '7', '21', '1', NULL, '800', '2020-11-28', '', 'test message', 'test gift message', '2020-11-26 12:08:50', '2020-11-26 12:08:50'),
(22, 18, '16', '20', '1', NULL, '800', '2020-11-28', '', 'test cake message', 'test gift message', '2020-11-26 12:16:40', '2020-11-26 12:16:40'),
(23, 19, '7', '21', '1', NULL, '800', '2020-11-29', '', 'test cake message', 'test gift message', '2020-11-26 12:24:07', '2020-11-26 12:24:07'),
(24, 20, '2', '4', '1', NULL, '100', '2020-11-27', '', 'test cake message', 'test gift message', '2020-11-26 12:25:47', '2020-11-26 12:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(13) NOT NULL,
  `checkout_carts_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(13) NOT NULL,
  `images` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `offer` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `images`, `description`, `offer`, `created_at`, `updated_at`) VALUES
(1, '1606736244_cake3.webp', 'Special Christmas cake', '20', '2020-11-30 11:48:39', '2020-11-30 11:37:24'),
(2, '1606736224_flower3.jpg', 'Beautiful Red Rose Bouquet', '25', '2020-11-30 11:49:04', '2020-11-30 11:37:04'),
(3, '1606738945_onlinediwaligift.jpg', 'Combos Diwali gifts', '10', '2020-11-30 12:29:44', '2020-11-30 12:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `meta_title`, `keyword`, `description`, `address`, `mobile`, `email`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test', 'this is test', NULL, NULL, NULL, '1604393231_diwali.jpeg', NULL, '2020-11-03 08:46:34', '2020-11-03 08:47:11'),
(2, 'about_us', 'about_us', 'terms_condition', '<h3><strong>Product</strong></h3><ul><li>All products as shown on this website are subject to availability (as may be varied from time to time).</li><li>In the event of any supply difficulties, we reserve the right to substitute with a product of equivalent value and quality without notice.</li><li>In the event that we are unable to supply all or part of your order (the product or any substitute product to you at all), we shall notify you as soon as possible and reimburse your payment in full not later than 15 days after the intended delivery date.</li></ul><br><h3><strong>Delivery</strong></h3><ul><li>We will not consider ourselves bound by a contract with you in any given situation.</li><li>Deliveries via courier services cannot be delivered at specific times. All orders will be delivered during the working day between 9am and 9 pm.</li><li>In case of a delivery not possible on public holidays or local restriction, orders will be delivered on the next working day.</li><li>To avoid problems or delays with delivery, please ensure that you have included complete address, including accurate postcode of the intended recipient and telephone number, together with your daytime contact number or e-mail address so that we can inform you if any delivery problems are encountered.</li><li>If, for any reason, you wish to change or cancel your order, you can easily do so by calling +91 9953938606 (8:00 am - 11:00 pm) or send an email to Cakesongoofficial@gmail.com</li><li>Please give us at least 48 hours notice before the requested delivery date.</li><li>Orders cannot be canceled or modified within 48 hrs from delivery date.</li><li>Delivery confirmation for all midnight deliveries will be notified the next day before 10:00 am.</li><li>Our custom delivery options are as follows:</li></ul>', 'cbqc', '234567890', 'test@gmail.com', '1606754242_flowers1.webp', '1', NULL, '2020-11-30 16:37:22'),
(3, 'refundpolicy', 'refundpolicy', 'refund', '<p></p><h3><strong>Product</strong></h3><ul><li>All products as shown on this website are subject to availability (as may be varied from time to time).</li><li>In the event of any supply difficulties, we reserve the right to substitute with a product of equivalent value and quality without notice.</li><li>In the event that we are unable to supply all or part of your order (the product or any substitute product to you at all), we shall notify you as soon as possible and reimburse your payment in full not later than 15 days after the intended delivery date.</li></ul><br><h3><strong>Delivery</strong></h3><ul><li>We will not consider ourselves bound by a contract with you in any given situation.</li><li>Deliveries via courier services cannot be delivered at specific times. All orders will be delivered during the working day between 9am and 9 pm.</li><li>In case of a delivery not possible on public holidays or local restriction, orders will be delivered on the next working day.</li><li>To avoid problems or delays with delivery, please ensure that you have included complete address, including accurate postcode of the intended recipient and telephone number, together with your daytime contact number or e-mail address so that we can inform you if any delivery problems are encountered.</li><li>If, for any reason, you wish to change or cancel your order, you can easily do so by calling +91 9953938606 (8:00 am - 11:00 pm) or send an email to Cakesongoofficial@gmail.com</li><li>Please give us at least 48 hours notice before the requested delivery date.</li><li>Orders cannot be canceled or modified within 48 hrs from delivery date.</li><li>Delivery confirmation for all midnight deliveries will be notified the next day before 10:00 am.</li><li>Our custom delivery options are as follows:<br>Early Morning Delivery: 7:00 am - 9:00 am ( Rs 100 Charge Extra)<br>Fixed Time Slot Delivery: 10:00 am - 10:00 pm( Free)<br>Standard Delivery: 8:00 am - 9:00 pm (4 time slots are available)<br>Midnight Delivery: 11:00 PM - 12:00 AM ( Rs 250 Charge Extra)</li><li>We take preference \"Preferred Delivery Time\" from customer, it is for your convenience and we make our best efforts to deliver your order within \"preferred timeline\" however this is not guaranteed and may not always be possible.</li><li>During peak holidays, festivals or events, our customer service agents may not be able to provide immediate delivery confirmation. However, please be assured that our team is working hard to get your orders delivered as soon as possible.</li><li>If the recipient is not found at home / office, your gift will be delivered to the neighbor, or security. At reception (in case of office), your order will be considered as delivered and we will not be responsible for any damage or loss of items. If recipient\'s number is incorrect, not responding, or is unavailable, the delivery may not be possible and as such the recipient must collect the order from our delivery center within 24 hrs. from scheduled delivery time.</li><li>If, for any reason, the delivery is \"refused by recipient\", the order will be considered as delivery attempted and no refund / change of order is acceptable in this case. We, however, will try our best to convince the recipient for accepting the delivery.</li><li>All items ordered under \"GIFTS\" category are shipped using courier company. As such we cannot specify any delivery timings, all orders will be delivered between 9:00 am - 7:00 pm and may take 3-5 days of shipping time depending on the product, availability and other parameters. Please notice \"Earliest Date of Delivery\" specified on product description page. If you have ordered multiple products and selected a date of delivery earlier than available date, other products such as flowers and cakes will be delivered on selected date and gifts will be shipped at the earliest possibility.</li></ul><br><h3><strong>Refund</strong></h3><ul><li>A refund can only be requested in case of service failure. Our team will evaluate whether an order qualifies for a refund and decision of the management will be final. Under no circumstances will the refund amount can exceed the amount paid by customer. We are not liable for any loss or claim beyond the amount actually paid by customer.</li><li>Our team works very hard to deliver finest quality and service experience to its customers. For us, our customer and business is most important and we really care about delivering the best.</li><li>In rare case of service failure or quality complaint, you can write an email to cakesongoofficial@gmail.com and our team will respond to you within 8-12 working hours.</li><li>Our team will process a quick investigation on your order and in case of any quality / service failure found, we assure to re-deliver your product with complimentary flowers within next 24 hrs.</li><li>While we really understand \"Message on Card\" and \"Message on Cake\" is extremely important to be accompanied with flowers and gifts. However, due to large number of complexities, we unfortunately do not guarantee the accuracy and delivery of such messages. It goes without saying that every possible care and attention is taken to ensure we do not miss on these messages. However, we will not take any guarantee about spelling mistakes or missing message on the cakes. What\'s best here is that we rarely miss your messages. And in cases, usually our support team goes that extra mile to assist and take care of your every order complaint and concerns and makes an extra effort to put things right as and when possible</li></ul><p></p>', NULL, NULL, NULL, '1606752518_flower4.webp', '1', '2020-11-30 16:08:38', '2020-11-30 16:26:02'),
(4, 'privacy_policy', 'privacy_policy', 'privacy_policy', '<p></p><h3><strong>Product</strong></h3><ul><li>All products as shown on this website are subject to availability (as may be varied from time to time).</li><li>In the event of any supply difficulties, we reserve the right to substitute with a product of equivalent value and quality without notice.</li><li>In the event that we are unable to supply all or part of your order (the product or any substitute product to you at all), we shall notify you as soon as possible and reimburse your payment in full not later than 15 days after the intended delivery date.</li></ul><br><h3><strong>Delivery</strong></h3><ul><li>We will not consider ourselves bound by a contract with you in any given situation.</li><li>Deliveries via courier services cannot be delivered at specific times. All orders will be delivered during the working day between 9am and 9 pm.</li><li>In case of a delivery not possible on public holidays or local restriction, orders will be delivered on the next working day.</li><li>To avoid problems or delays with delivery, please ensure that you have included complete address, including accurate postcode of the intended recipient and telephone number, together with your daytime contact number or e-mail address so that we can inform you if any delivery problems are encountered.</li><li>If, for any reason, you wish to change or cancel your order, you can easily do so by calling +91 9953938606 (8:00 am - 11:00 pm) or send an email to Cakesongoofficial@gmail.com</li><li>Please give us at least 48 hours notice before the requested delivery date.</li><li>Orders cannot be canceled or modified within 48 hrs from delivery date.</li><li>Delivery confirmation for all midnight deliveries will be notified the next day before 10:00 am.</li><li>Our custom delivery options are as follows:<br>Early Morning Delivery: 7:00 am - 9:00 am ( Rs 100 Charge Extra)<br>Fixed Time Slot Delivery: 10:00 am - 10:00 pm( Free)<br>Standard Delivery: 8:00 am - 9:00 pm (4 time slots are available)<br>Midnight Delivery: 11:00 PM - 12:00 AM ( Rs 250 Charge Extra)</li><li>We take preference \"Preferred Delivery Time\" from customer, it is for your convenience and we make our best efforts to deliver your order within \"preferred timeline\" however this is not guaranteed and may not always be possible.</li><li>During peak holidays, festivals or events, our customer service agents may not be able to provide immediate delivery confirmation. However, please be assured that our team is working hard to get your orders delivered as soon as possible.</li><li>If the recipient is not found at home / office, your gift will be delivered to the neighbor, or security. At reception (in case of office), your order will be considered as delivered and we will not be responsible for any damage or loss of items. If recipient\'s number is incorrect, not responding, or is unavailable, the delivery may not be possible and as such the recipient must collect the order from our delivery center within 24 hrs. from scheduled delivery time.</li><li>If, for any reason, the delivery is \"refused by recipient\", the order will be considered as delivery attempted and no refund / change of order is acceptable in this case. We, however, will try our best to convince the recipient for accepting the delivery.</li><li>All items ordered under \"GIFTS\" category are shipped using courier company. As such we cannot specify any delivery timings, all orders will be delivered between 9:00 am - 7:00 pm and may take 3-5 days of shipping time depending on the product, availability and other parameters. Please notice \"Earliest Date of Delivery\" specified on product description page. If you have ordered multiple products and selected a date of delivery earlier than available date, other products such as flowers and cakes will be delivered on selected date and gifts will be shipped at the earliest possibility.</li></ul><br><p></p>', NULL, NULL, NULL, '1606752946_giftideas.webp', '1', '2020-11-30 16:15:46', '2020-11-30 16:26:08'),
(5, 'terms_condition', 'terms_condition', 'terms_condition', '<p></p><h3><strong>Product</strong></h3><ul><li>All products as shown on this website are subject to availability (as may be varied from time to time).</li><li>In the event of any supply difficulties, we reserve the right to substitute with a product of equivalent value and quality without notice.</li><li>In the event that we are unable to supply all or part of your order (the product or any substitute product to you at all), we shall notify you as soon as possible and reimburse your payment in full not later than 15 days after the intended delivery date.</li></ul><br><h3><strong>Delivery</strong></h3><ul><li>We will not consider ourselves bound by a contract with you in any given situation.</li><li>Deliveries via courier services cannot be delivered at specific times. All orders will be delivered during the working day between 9am and 9 pm.</li><li>In case of a delivery not possible on public holidays or local restriction, orders will be delivered on the next working day.</li><li>To avoid problems or delays with delivery, please ensure that you have included complete address, including accurate postcode of the intended recipient and telephone number, together with your daytime contact number or e-mail address so that we can inform you if any delivery problems are encountered.</li><li>If, for any reason, you wish to change or cancel your order, you can easily do so by calling +91 9953938606 (8:00 am - 11:00 pm) or send an email to Cakesongoofficial@gmail.com</li><li>Please give us at least 48 hours notice before the requested delivery date.</li><li>Orders cannot be canceled or modified within 48 hrs from delivery date.</li><li>Delivery confirmation for all midnight deliveries will be notified the next day before 10:00 am.</li><li>Our custom delivery options are as follows:<br>Early Morning Delivery: 7:00 am - 9:00 am ( Rs 100 Charge Extra)<br>Fixed Time Slot Delivery: 10:00 am - 10:00 pm( Free)<br>Standard Delivery: 8:00 am - 9:00 pm (4 time slots are available)<br>Midnight Delivery: 11:00 PM - 12:00 AM ( Rs 250 Charge Extra)</li><li>We take preference \"Preferred Delivery Time\" from customer, it is for your convenience and we make our best efforts to deliver your order within \"preferred timeline\" however this is not guaranteed and may not always be possible.</li><li>During peak holidays, festivals or events, our customer service agents may not be able to provide immediate delivery confirmation. However, please be assured that our team is working hard to get your orders delivered as soon as possible.</li><li>If the recipient is not found at home / office, your gift will be delivered to the neighbor, or security. At reception (in case of office), your order will be considered as delivered and we will not be responsible for any damage or loss of items. If recipient\'s number is incorrect, not responding, or is unavailable, the delivery may not be possible and as such the recipient must collect the order from our delivery center within 24 hrs. from scheduled delivery time.</li><li>If, for any reason, the delivery is \"refused by recipient\", the order will be considered as delivery attempted and no refund / change of order is acceptable in this case. We, however, will try our best to convince the recipient for accepting the delivery.</li><li>All items ordered under \"GIFTS\" category are shipped using courier company. As such we cannot specify any delivery timings, all orders will be delivered between 9:00 am - 7:00 pm and may take 3-5 days of shipping time depending on the product, availability and other parameters. Please notice \"Earliest Date of Delivery\" specified on product description page. If you have ordered multiple products and selected a date of delivery earlier than available date, other products such as flowers and cakes will be delivered on selected date and gifts will be shipped at the earliest possibility.</li></ul><br><br><p></p>', NULL, NULL, NULL, '1606753056_flowers1.webp', NULL, '2020-11-30 16:17:36', '2020-11-30 16:17:36'),
(6, 'contact_us', 'contact_us', 'contact_us', '<p>test</p>', 'Corporate Office:  309 Sec 42 Gurugram', '9953938606', 'test@gmail.com', '1606754076_flower3.jpg', '1', '2020-11-30 16:25:50', '2020-11-30 16:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mohit.techosoft@gmail.com', '$2y$10$wxNHAW1kKSUb8DAfcz1OxOPl4Iz1KOKCINxm4m6DPmnmqTD2gvzuS', '2020-12-30 05:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `payment_collection`
--

CREATE TABLE `payment_collection` (
  `id` int(13) NOT NULL,
  `user_id` int(13) NOT NULL,
  `receipt_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `signature_id` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_collection`
--

INSERT INTO `payment_collection` (`id`, `user_id`, `receipt_no`, `name`, `email`, `mobile`, `address`, `amount`, `order_id`, `payment_id`, `signature_id`, `date`) VALUES
(1, 1, 'cakesongo_0001', 'amdmin name', 'admin@admin.com', '07877898989', '3', '1500', 'order_FvOHxkB3Ersn2H', 'pay_FvOIkdJhDDFvwv', 'fe027db7791d6b4f2ecd456746bce92b12be2c703a8da1fa6644ad618ecb70ec', '2020-10-31 05:21:11'),
(2, 1, 'cakesongo_0002', 'name', 'admin@admin.com', '07877898989', '4', '2000', 'order_FvOKK8A5dnrWKN', 'pay_FvOKWvCDvx1veq', 'cf379568f01a494fa783775cf75cf91ae50dae8592771b9b36bc00f88a0d8e0e', '2020-10-31 05:22:53'),
(3, 1, 'cakesongo_0003', 'amdmin name', 'admin@admin.com', '07877898989', '15', '2000', 'order_FvOrhXTImHC85v', 'pay_FvOrmHl3j3yr2H', '8d93ccbce4d486f1b3dd9622b3dc72f0fc7c19bc31248b5a6f824cf982bb6f45', '2020-10-31 05:54:20'),
(4, 1, 'cakesongo_0004', 'name', 'admin@admin.com', '07877898989', '16', '1700', 'order_FvP19HVyd9JedZ', 'pay_FvP29J76ZS4FI1', 'd981e9944c1015a2f063ccbad5a04751bd55c7f05e954e71221808b5ee49d3ce', '2020-10-31 06:04:10'),
(5, 1, 'cakesongo_0005', 'name', 'admin@admin.com', '07877898989', '17', '2250', 'order_FvP3Rh6kqU0D2I', 'pay_FvP3bggNgnZxOa', '09b092d4fdc8d6d90a70fad950228ef2e320e40533bb707f2767deb7b435c808', '2020-10-31 06:05:33'),
(6, 1, 'cakesongo_0006', 'amdmin name', 'admin@admin.com', '07877898989', '18', '900', 'order_Fx3T5vYuMXRMgh', 'pay_Fx3TBAnYNpkQXj', '225af2b4a17a916f0a514c8818a10d4918775cf4d0683d7ff2ca8af5f071e303', '2020-11-04 10:16:29'),
(7, 1, 'cakesongo_0007', 'amdmin name', 'admin@admin.com', '07877898989', '19', '900', 'order_Fx3TQcLSvHTGTg', 'pay_Fx3TYyQoPUYkkr', 'bc263968195bf3207319b30ee2e79461e0b8c1595754e2be14316c77f5596dcb', '2020-11-04 10:16:51'),
(8, 1, 'cakesongo_0008', 'amdmin name', 'admin@admin.com', '07877898989', '20', '900', 'order_Fx3TwnyI7LRaue', 'pay_Fx3U3r1cigT5lA', 'f7173525a9d385b38053bb87ac5caf00ca66392272ea7bd84d50160a7faa5a06', '2020-11-04 10:17:19'),
(9, 1, 'cakesongo_0009', 'amdmin name', 'admin@admin.com', '07877898989', '21', '900', 'order_Fx3Vur4IuOo6dd', 'pay_Fx3W35tlfSYn2J', '72a87e511f350db4b9a3f7ed50c92bef525dc39014d10c85c4c1652922b0414b', '2020-11-04 10:19:12'),
(10, 1, 'cakesongo_00010', 'amdmin name', 'admin@admin.com', '07877898989', '22', '900', 'order_Fx3WIp9U30fcpX', 'pay_Fx3WPy4JMM4xlz', '785c8b3121d64ca2f333163348d12ec08355b875549b35576237794a9defbee1', '2020-11-04 10:19:33'),
(11, 1, 'cakesongo_00011', 'amdmin name', 'admin@admin.com', '07877898989', '33', '200', 'order_G2wFkrb5UcRIPJ', 'pay_G2wIpid0dlkkMT', 'f4e327f009bd09ed594450a588e0297dcfc78b7da106857a92a6f4e44fbe9f65', '2020-11-19 07:09:50'),
(12, 1, 'cakesongo_00012', 'amdmin name', 'admin@admin.com', '07877898989', '34', '200', 'order_G2wJ9yJsz5svhe', 'pay_G2wJIM69O2BhrV', '042485016e0de80782299aa7b354df0fcc27b77507167785df594e4f1b063865', '2020-11-19 07:10:17'),
(13, 1, 'cakesongo_00013', 'amdmin name', 'admin@admin.com', '07877898989', '35', '200', 'order_G2wL9Nbvyst0Vv', 'pay_G2wLGhOPwrg4PY', '2706c9256f4904be9858ebb84d927e3eeaaedc05bcb8ecc2f4e0e238edb33d89', '2020-11-19 07:12:09'),
(14, 1, 'cakesongo_00014', 'amdmin name', 'admin@admin.com', '07877898989', '36', '300', 'order_G2wQmGtQsNeiFv', 'pay_G2wQxN1tZ1L1Kh', 'bdc17451fbb6f8144989667fdb1746abb871537ce59f196265b6e53c7ad2e933', '2020-11-19 07:17:32'),
(15, 1, 'cakesongo_00015', 'amdmin name', 'admin@admin.com', '07877898989', '37', '180', 'order_G2wWOwrtOKlHEs', 'pay_G2wWYkSQ0T9oJi', '82aa1b3feeb5f778a878929cf71554454dd53adb3a8fedc7cf48c2417b9061bd', '2020-11-19 07:22:50'),
(16, 1, 'cakesongo_00016', 'amdmin name', 'admin@admin.com', '07877898989', '38', '749', 'order_G5LNZugoGSRBGR', 'pay_G5LNgvR5CTi1kE', 'f4e73d1fbffe13db24e8b62bb752a8e8f90850458bcc3c65989a7b571e90f10e', '2020-11-25 08:59:48'),
(17, 1, 'cakesongo_00017', 'amdmin name', 'admin@admin.com', '07877898989', '39', '749', 'order_G5LOSt1cbqIyXB', 'pay_G5LOaUk7kE7wBN', '5d6243882082c33ac1268e5869eeca1f8aa46a63061e4554da07af05ce52e9ab', '2020-11-25 09:00:39'),
(18, 1, 'cakesongo_00018', 'amdmin name', 'admin@admin.com', '07877898989', '40', '749', 'order_G5LPHQpRbZ7h5v', 'pay_G5LPaDdqaaZoNw', '266c2e2bce4a54567f2ad21c9a54e062046cd4925e0459e2cdccc673a51e6a86', '2020-11-25 09:01:35'),
(19, 1, 'cakesongo_00019', 'amdmin name', 'admin@admin.com', '07877898989', '41', '1700', 'order_G5mztZCFHvsnxE', 'pay_G5n00zbwCRbXkB', 'deba2e0fa3deb7e92c49ccdf29eb657c05937dc56cdbce279fa60393f2bcb338', '2020-11-26 12:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2020-04-01 03:56:31', '2020-04-01 03:56:31'),
(2, 'role-create', 'web', '2020-04-01 03:56:31', '2020-04-01 03:56:31'),
(3, 'role-edit', 'web', '2020-04-01 03:56:31', '2020-04-01 03:56:31'),
(4, 'role-delete', 'web', '2020-04-01 03:56:31', '2020-04-01 03:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

CREATE TABLE `pincode` (
  `id` int(10) UNSIGNED NOT NULL,
  `pincode` int(7) NOT NULL,
  `delivery_time` varchar(255) NOT NULL,
  `max_delivery_charge` varchar(255) NOT NULL,
  `delivery_charge` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pincode`
--

INSERT INTO `pincode` (`id`, `pincode`, `delivery_time`, `max_delivery_charge`, `delivery_charge`, `created_at`, `updated_at`) VALUES
(1, 121003, '4 days', '100', '40', '2020-10-28 08:32:00', '2020-10-28 08:32:00'),
(3, 121002, '4', '100', '50', '2020-11-02 07:11:25', '2020-11-02 07:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eggless_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_amount` int(13) NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `sub_sub_category_id`, `meta_title`, `meta_keyword`, `title`, `status`, `description`, `eggless_description`, `offer_amount`, `main_image`, `created_at`, `updated_at`) VALUES
(1, '3', '1', NULL, 'Birthday Cake', 'Birthday Cake', 'Chocolate Birthday Cake', '1', '<p>Special Chocolate Cake With Extra Dark Chocolate\'s.</p>', NULL, 300, '1603433497_cake.jpeg', '2020-10-20 11:22:21', '2020-10-24 06:12:33'),
(2, '11', '14', NULL, 'Fererro Rocher', 'Fererro Rocher', 'Fererro Rocher', '1', '<p>test product</p>', '<p>m</p>', 500, '1606122924_chocolate1.webp', '2020-11-02 09:37:21', '2020-11-23 09:15:24'),
(3, '13', '15', NULL, 'test producta', 'test producta', 'test product', '1', '<p>test product</p>', '<p>this is only for eggless cake description.</p>', 200, '1604313698_cakesngo.jpg', '2020-11-02 10:41:38', '2020-11-04 11:43:08'),
(7, '4', '16', NULL, 'Red Rose', 'Red Rose', 'Red Rose', '1', '<p>test </p>', '<p>eggless test</p>', 200, '1605164106_flowers.jpeg', '2020-11-12 06:55:06', '2020-11-12 06:55:06'),
(8, '3', '5', NULL, 'Red Velvet Cake', 'Red Velvet Cake', 'Special Red Velvet Cake', '1', '<p>A special Red Velvet Cake</p>', '<p>A special Red Velvet Eggless Cake<br></p>', 300, '1606121682_cake3.webp', '2020-11-23 08:54:42', '2020-11-23 08:54:42'),
(9, '3', '4', NULL, 'Cartoon Cakes', 'Cartoon Cake', 'Special Cartoon Cake', '1', '<p>A Special Cartoon Cake.<br></p>', '<p>A Special Cartoon Eggless Cake.<br></p>', 360, '1606121827_cake2.webp', '2020-11-23 08:57:07', '2020-11-23 08:57:07'),
(10, '3', '17', NULL, 'Designer Cake', 'Designer Cake', 'Special Designer Cake', '1', '<p>A Special Designer Cake</p>', '<p>A Special Designer Eggless Cake<br></p>', 200, '1606122067_cake1.webp', '2020-11-23 09:01:07', '2020-11-23 09:01:07'),
(11, '11', '18', NULL, 'Ferrero Rocher', 'Ferrero Rocher', 'Ferrero Rocher Chocolate', '1', '<p>Ferrero Rocher Chocolate<br></p>', '<p>1</p>', 400, '1606122581_chocolate1.webp', '2020-11-23 09:09:41', '2020-11-23 09:09:41'),
(12, '11', '19', NULL, 'Cadbury Dairy Milk Chocolate', 'Cadbury Dairy Milk Chocolate', 'Cadbury Dairy Milk Chocolate Pack of 2', '1', '<p>Cadbury Dairy Milk Chocolate<br></p>', '<p>Cadbury Dairy Milk Chocolate<br></p>', 500, '1606122753_cadbury.webp', '2020-11-23 09:12:33', '2020-11-23 09:12:33'),
(13, '11', '20', NULL, 'Kitkat Chocolate', 'Kitkat Chocolate', 'Kitkat Chocolate Family Pack', '1', '<p>Kitkat Chocolate Family Pack<br></p>', '<p>Kitkat Chocolate Family Pack<br></p>', 450, '1606122832_kitkat.webp', '2020-11-23 09:13:52', '2020-11-23 09:13:52'),
(14, '4', '16', NULL, 'Flowers', 'Flowers', 'Blue Flowers', '0', '<p>test </p>', '<p>test</p>', 200, '1606123823_flower4.webp', '2020-11-23 09:30:23', '2020-11-23 09:37:28'),
(15, '4', '16', NULL, 'Exotic Blue Orchids', 'Exotic Blue Orchids', 'Exotic Blue Orchids', '1', '<p></p><h1>Exotic Blue Orchids</h1><br><p></p>', '<p></p><h1>Exotic Blue Orchids</h1><br><p></p>', 400, '1606123923_flower4.webp', '2020-11-23 09:32:03', '2020-11-23 09:32:03'),
(16, '4', '16', NULL, 'Red Classic Bouquet', 'Red Classic Bouquet', 'Red Classic Bouquet', '1', '<p><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.cakesongo.com/product-page/red-classic-bouquet\"></a></p><div><h3><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.cakesongo.com/product-page/red-classic-bouquet\">Red Classic Bouquet</a></h3></div><br><br><p></p>', '<p><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.cakesongo.com/product-page/red-classic-bouquet\"></a></p><div><h3><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.cakesongo.com/product-page/red-classic-bouquet\">Red Classic Bouquet</a></h3></div><br><br><p></p>', 600, '1606123965_flower3.jpg', '2020-11-23 09:32:45', '2020-11-23 09:32:45'),
(17, '4', '16', NULL, 'Abundant Red', 'Abundant Red', 'Abundant Red', '1', '<p>Abundant Red<br></p>', '<p>Abundant Red<br></p>', 700, '1606124100_flower2.webp', '2020-11-23 09:35:00', '2020-11-23 09:35:00'),
(18, '4', '16', NULL, 'Attractive Yellow', 'Attractive Yellow', 'Attractive Yellow', '1', '<p>Attractive Yellow<br></p>', '<p>Attractive Yellow<br></p>', 800, '1606124151_flowers1.webp', '2020-11-23 09:35:51', '2020-11-23 09:35:51'),
(19, '2', '7', NULL, 'Diwali Gift\'s For Family', 'Diwali Gift\'s For Family', 'Diwali Gift\'s For Family', '1', '<p>test</p>', '<p>est</p>', 500, '1606210116_diwaligift.webp', '2020-11-24 09:28:36', '2020-11-24 09:28:36'),
(20, '2', '8', NULL, 'Diwali Gift Ideas', 'Diwali Gift Ideas', 'Diwali Gift Ideas', '1', '<p>test </p>', '<p>test</p>', 400, '1606210175_giftideas.webp', '2020-11-24 09:29:35', '2020-11-24 09:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `productsizes`
--

CREATE TABLE `productsizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productsizes`
--

INSERT INTO `productsizes` (`id`, `product_id`, `size`, `weight`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, '.5 Pound', '200', '1', '2020-10-24 06:11:52', '2020-10-23 06:12:56'),
(2, '1', NULL, '1 Pound', '250', '1', '2020-10-24 06:12:33', '2020-10-23 06:12:33'),
(3, '1', NULL, '1.5 Pound', '300', '1', '2020-10-24 06:12:33', '2020-10-23 06:12:46'),
(4, '2', NULL, '100 g', '100', '1', '2020-11-02 09:37:42', '2020-11-02 09:37:42'),
(5, '2', NULL, '200 g', '200', '1', '2020-11-02 09:37:53', '2020-11-02 09:37:53'),
(6, '3', NULL, '.5 pound', '200', '1', '2020-11-02 10:41:57', '2020-11-02 10:41:57'),
(7, '3', NULL, '1 pound', '400', '1', '2020-11-02 10:42:08', '2020-11-02 10:42:08'),
(8, '8', NULL, '.5 kg', '200', '1', '2020-11-23 08:54:51', '2020-11-23 08:54:51'),
(9, '8', NULL, '1.5 Pound', '400', '1', '2020-11-23 08:54:58', '2020-11-23 08:54:58'),
(10, '9', NULL, '1.5 kg', '200', '1', '2020-11-23 08:57:17', '2020-11-23 08:57:33'),
(11, '9', NULL, '.5 kg', '150', '1', '2020-11-23 08:57:25', '2020-11-23 08:57:25'),
(12, '9', NULL, '1 kg', '180', '1', '2020-11-23 08:57:47', '2020-11-23 08:57:47'),
(13, '9', NULL, '2 kg', '250', '1', '2020-11-23 08:57:56', '2020-11-23 08:58:06'),
(14, '10', NULL, '.5 kg', '200', '1', '2020-11-23 09:01:12', '2020-11-23 09:01:12'),
(15, '10', NULL, '1 kg', '300', '1', '2020-11-23 09:01:19', '2020-11-23 09:01:35'),
(16, '10', NULL, '2 kg', '500', '1', '2020-11-23 09:01:28', '2020-11-23 09:01:28'),
(17, '14', NULL, '1', '400', '1', '2020-11-23 09:45:25', '2020-11-23 09:45:25'),
(18, '18', NULL, 'Attractive Yellow', '400', '1', '2020-11-23 09:46:06', '2020-11-23 09:46:06'),
(19, '17', NULL, 'Abundant Red', '600', '1', '2020-11-23 09:46:30', '2020-11-23 09:46:30'),
(20, '16', NULL, 'Red Classic Bouquet', '800', '1', '2020-11-23 09:52:27', '2020-11-23 09:52:27'),
(21, '7', NULL, 'Red Rose', '800', '1', '2020-11-23 09:53:22', '2020-11-23 09:53:22'),
(22, '19', NULL, '1', '599', '1', '2020-11-24 09:28:46', '2020-11-24 09:28:46'),
(23, '20', NULL, 'Diwali Gift Idea', '799', '1', '2020-11-24 09:29:41', '2020-11-24 09:36:47'),
(24, '15', NULL, 'Exotic Blue Orchid', '899', '1', '2020-11-26 08:50:19', '2020-11-26 08:50:19'),
(25, '13', NULL, 'Kitkat Chocolate Family Pack', '599', '1', '2020-11-26 09:07:50', '2020-11-26 09:07:50'),
(26, '12', NULL, 'Cadbury Dairy Milk Chocolate Pack of 2', '800', '1', '2020-11-26 09:10:30', '2020-11-26 09:10:30'),
(27, '11', NULL, 'Ferrero Rocher Chocolate', '500', '1', '2020-11-26 09:11:47', '2020-11-26 09:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atribute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_file`
--

CREATE TABLE `product_file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_file`
--

INSERT INTO `product_file` (`id`, `product_id`, `file_type`, `files`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1603433676_cake2.jpeg', '2020-10-23 06:14:36', NULL),
(2, '1', '1', '1603433687_cake3.jpeg', '2020-10-23 06:14:47', NULL),
(3, '1', '1', '1603433696_cake4.jpeg', '2020-10-23 06:14:56', NULL),
(4, '2', '1', '1604309898_cake4.jpeg', '2020-11-02 09:38:18', NULL),
(5, '2', '1', '1604309910_cake3.jpeg', '2020-11-02 09:38:30', NULL),
(6, '3', '1', '1604313772_cake.jpeg', '2020-11-02 10:42:52', NULL),
(7, '3', 'Select File Type', '1604313777_cake2.jpeg', '2020-11-02 10:42:57', NULL),
(8, '3', 'Select File Type', '1604313781_cake4.jpeg', '2020-11-02 10:43:01', NULL),
(9, '3', 'Select File Type', '1604313786_cake4.jpeg', '2020-11-02 10:43:06', NULL),
(10, '8', '1', '1606121722_cake3.webp', '2020-11-23 08:55:22', NULL),
(11, '8', '1', '1606121730_cake2.webp', '2020-11-23 08:55:30', NULL),
(12, '8', '1', '1606121736_cake1.webp', '2020-11-23 08:55:36', NULL),
(13, '9', '1', '1606121918_cake2.webp', '2020-11-23 08:58:38', NULL),
(14, '9', '1', '1606121928_cake1.webp', '2020-11-23 08:58:48', NULL),
(15, '9', '1', '1606121935_cake4.jpeg', '2020-11-23 08:58:55', NULL),
(16, '9', '1', '1606121941_cake3.jpeg', '2020-11-23 08:59:01', NULL),
(17, '9', '1', '1606121950_cake2.jpeg', '2020-11-23 08:59:10', NULL),
(18, '10', '1', '1606122106_cake1.webp', '2020-11-23 09:01:46', NULL),
(19, '10', 'Select File Type', '1606122114_cake.jpeg', '2020-11-23 09:01:54', NULL),
(20, '10', 'Select File Type', '1606122127_cake3.webp', '2020-11-23 09:02:07', NULL),
(21, '10', 'Select File Type', '1606122132_cake2.webp', '2020-11-23 09:02:12', NULL),
(22, '12', '1', '1606122766_cadbury.webp', '2020-11-23 09:12:46', NULL),
(23, '12', '1', '1606122774_chocolate1.webp', '2020-11-23 09:12:54', NULL),
(24, '12', '1', '1606122781_kitkat.webp', '2020-11-23 09:13:01', NULL),
(25, '13', '1', '1606122843_kitkat.webp', '2020-11-23 09:14:03', NULL),
(26, '13', 'Select File Type', '1606122847_chocolate1.webp', '2020-11-23 09:14:07', NULL),
(27, '13', 'Select File Type', '1606122856_cadbury.webp', '2020-11-23 09:14:16', NULL),
(28, '14', '1', '1606124710_flowers1.webp', '2020-11-23 09:45:10', NULL),
(29, '17', '1', '1606124833_flowers1.webp', '2020-11-23 09:47:13', NULL),
(31, '18', 'Select File Type', '1606124960_flowers1.webp', '2020-11-23 09:49:20', NULL),
(32, '15', '1', '1606124983_flower2.webp', '2020-11-23 09:49:43', NULL),
(33, '16', '1', '1606125156_flower4.webp', '2020-11-23 09:52:36', NULL),
(34, '16', 'Select File Type', '1606125162_flower3.jpg', '2020-11-23 09:52:42', NULL),
(35, '7', '1', '1606125253_flowers.jpeg', '2020-11-23 09:54:13', NULL),
(36, '19', '1', '1606210138_diwaligift.webp', '2020-11-24 09:28:58', NULL),
(37, '20', '1', '1606210190_giftideas.webp', '2020-11-24 09:29:50', NULL),
(38, '11', '1', '1606382295_cadbury.webp', '2020-11-26 09:18:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `category_id`, `question`, `answer`, `option1`, `option2`, `option3`, `option4`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'what is newton\'s law?', 'opt_4', 'no way', 'never', 'none', 'collection of complex theory', '1', '2020-10-03 07:37:19', '2020-10-03 08:53:57'),
(2, '2', 'What is Metallergy?', 'opt_3', 'know', 'no', 'none', 'no way', '1', '2020-10-03 09:18:17', '2020-10-03 09:18:17'),
(3, '2', 'what is soil?', 'opt_4', 'one ki', 'twowo', 'three war', 'forurur', '1', '2020-10-03 09:18:58', '2020-10-03 09:18:58'),
(4, '3', 'What is computer?', 'opt_1', 'commonly operating machine', 'common machine', 'machine', 'electorinc machine', '1', '2020-10-03 09:20:17', '2020-10-03 09:20:17'),
(5, '4', 'Who is the father of php?', 'opt_1', 'radolf rausmus', 'charles babage', 'newton', 'einstein', '1', '2020-10-03 09:21:17', '2020-10-03 09:21:17'),
(6, '5', 'Meaning of go away?', 'opt_3', 'Come her', 'go from here', 'keep distance from the speaker', 'none', '1', '2020-10-03 09:22:23', '2020-10-03 09:22:23'),
(1, '2', 'what is newton\'s law?', 'opt_4', 'no way', 'never', 'none', 'collection of complex theory', '1', '2020-10-03 07:37:19', '2020-10-03 08:53:57'),
(2, '2', 'What is Metallergy?', 'opt_3', 'know', 'no', 'none', 'no way', '1', '2020-10-03 09:18:17', '2020-10-03 09:18:17'),
(3, '2', 'what is soil?', 'opt_4', 'one ki', 'twowo', 'three war', 'forurur', '1', '2020-10-03 09:18:58', '2020-10-03 09:18:58'),
(4, '3', 'What is computer?', 'opt_1', 'commonly operating machine', 'common machine', 'machine', 'electorinc machine', '1', '2020-10-03 09:20:17', '2020-10-03 09:20:17'),
(5, '4', 'Who is the father of php?', 'opt_1', 'radolf rausmus', 'charles babage', 'newton', 'einstein', '1', '2020-10-03 09:21:17', '2020-10-03 09:21:17'),
(6, '5', 'Meaning of go away?', 'opt_3', 'Come her', 'go from here', 'keep distance from the speaker', 'none', '1', '2020-10-03 09:22:23', '2020-10-03 09:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `quizcategories`
--

CREATE TABLE `quizcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2020-04-01 04:23:08', '2020-04-01 04:23:08');

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
(1, 1),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `size`, `credit`, `debit`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', NULL, '2020-10-23 06:13:10', '2020-10-23 06:13:10'),
(2, '1', '1', '2', NULL, '2020-10-23 06:13:14', '2020-10-23 06:13:14'),
(3, '1', '1', '2', NULL, '2020-10-23 06:13:21', '2020-10-23 06:13:21'),
(4, '2', '4', '2', NULL, '2020-11-02 09:38:02', '2020-11-02 09:38:02'),
(5, '2', '5', '4', NULL, '2020-11-02 09:38:07', '2020-11-02 09:38:07'),
(6, '3', '6', '5', NULL, '2020-11-02 10:42:18', '2020-11-02 10:42:18'),
(7, '3', '7', '3', NULL, '2020-11-02 10:42:23', '2020-11-02 10:42:23'),
(8, '8', '8', '2', NULL, '2020-11-23 08:55:03', '2020-11-23 08:55:03'),
(9, '8', '9', '1', NULL, '2020-11-23 08:55:07', '2020-11-23 08:55:07'),
(10, '9', '10', '1', NULL, '2020-11-23 08:58:14', '2020-11-23 08:58:14'),
(11, '9', '11', '1', NULL, '2020-11-23 08:58:18', '2020-11-23 08:58:18'),
(12, '9', '12', '1', NULL, '2020-11-23 08:58:23', '2020-11-23 08:58:23'),
(13, '9', '13', '1', NULL, '2020-11-23 08:58:28', '2020-11-23 08:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_sub_category`
--

CREATE TABLE `sub_sub_sub_category` (
  `id` int(13) NOT NULL,
  `category_id` int(13) NOT NULL,
  `sub_category_id` int(13) NOT NULL,
  `sub_sub_sub_id` int(13) NOT NULL,
  `subsubsubcategory` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sub_sub_category`
--

INSERT INTO `sub_sub_sub_category` (`id`, `category_id`, `sub_category_id`, `sub_sub_sub_id`, `subsubsubcategory`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Notes 1', '2020-10-21 05:46:55', '2020-10-21 05:46:55'),
(2, 1, 2, 1, 'Notes 1', '2020-10-21 05:47:14', '2020-10-21 05:47:14'),
(3, 1, 1, 2, 'Notes 1', '2020-10-21 05:47:29', '2020-10-21 05:47:29'),
(4, 1, 1, 2, 'Notes 2', '2020-10-21 05:47:38', '2020-10-21 05:47:38'),
(5, 1, 1, 3, 'Notes 1 beginner', '2020-10-21 05:47:47', '2020-10-21 05:47:47'),
(6, 1, 1, 3, 'Notes 2 semi final', '2020-10-21 05:48:05', '2020-10-21 05:48:05'),
(7, 1, 1, 3, 'Notes 3 final', '2020-10-21 05:48:14', '2020-10-21 05:48:14'),
(8, 1, 1, 1, 'Notes 2', '2020-10-21 07:10:28', '2020-10-21 07:10:28'),
(1, 1, 1, 1, 'Notes 1', '2020-10-21 05:46:55', '2020-10-21 05:46:55'),
(2, 1, 2, 1, 'Notes 1', '2020-10-21 05:47:14', '2020-10-21 05:47:14'),
(3, 1, 1, 2, 'Notes 1', '2020-10-21 05:47:29', '2020-10-21 05:47:29'),
(4, 1, 1, 2, 'Notes 2', '2020-10-21 05:47:38', '2020-10-21 05:47:38'),
(5, 1, 1, 3, 'Notes 1 beginner', '2020-10-21 05:47:47', '2020-10-21 05:47:47'),
(6, 1, 1, 3, 'Notes 2 semi final', '2020-10-21 05:48:05', '2020-10-21 05:48:05'),
(7, 1, 1, 3, 'Notes 3 final', '2020-10-21 05:48:14', '2020-10-21 05:48:14'),
(8, 1, 1, 1, 'Notes 2', '2020-10-21 07:10:28', '2020-10-21 07:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `sub__categories`
--

CREATE TABLE `sub__categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub__categories`
--

INSERT INTO `sub__categories` (`id`, `category_id`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, '3', 'Chocolate Truffled Cake', '2020-10-24 08:55:57', '2020-10-24 08:55:57'),
(2, '3', 'Chocolate Cake', '2020-10-24 08:56:12', '2020-10-24 08:56:12'),
(3, '3', 'Special Cake', '2020-10-24 08:56:23', '2020-10-24 08:56:23'),
(4, '3', 'Cartoon', '2020-10-24 08:56:36', '2020-10-24 08:56:36'),
(5, '3', 'Red Velvet Cake', '2020-10-24 08:56:47', '2020-10-24 08:56:47'),
(6, '3', 'Vanilla Flavour Cake', '2020-10-24 08:57:04', '2020-10-24 08:57:04'),
(7, '2', 'Diwali Gifts for Family', '2020-10-24 09:10:31', '2020-10-24 09:10:31'),
(8, '2', 'Gift Ideas for Diwali', '2020-10-24 09:10:57', '2020-10-24 09:10:57'),
(9, '2', 'Online Gifts for Diwali', '2020-10-24 09:11:18', '2020-10-24 09:11:18'),
(10, '2', 'Valetine Gifts', '2020-10-24 09:11:45', '2020-10-24 09:11:45'),
(11, '2', 'Valentine Chocolates', '2020-10-24 09:12:02', '2020-10-24 09:12:02'),
(12, '2', 'Valentine Bouquet', '2020-10-24 09:12:15', '2020-10-24 09:12:15'),
(14, '11', 'Dark Chocolate', '2020-11-02 09:36:10', '2020-11-02 09:36:10'),
(16, '4', 'Flowers Combo', '2020-11-12 06:48:28', '2020-11-12 06:48:28'),
(17, '3', 'Designer Cakes', '2020-11-23 09:00:03', '2020-11-23 09:00:03'),
(18, '11', 'Ferrero Rocher', '2020-11-23 09:06:55', '2020-11-23 09:06:55'),
(19, '11', 'Cadbury Dairy MIlk', '2020-11-23 09:10:23', '2020-11-23 09:10:23'),
(20, '11', 'Kitkat Chocolate', '2020-11-23 09:11:39', '2020-11-23 09:11:39'),
(21, '7', 'Christmas - 25th', '2020-11-24 09:21:12', '2020-11-24 09:21:12'),
(22, '7', 'Father\'s Day - 21 June', '2020-11-24 09:21:38', '2020-11-24 09:21:38'),
(23, '7', 'Brother\'s Day - 24 May', '2020-11-24 09:22:04', '2020-11-24 09:22:04'),
(24, '7', 'Mother\'s Day - 10 May', '2020-11-24 09:22:28', '2020-11-24 09:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `sub__sub__categories`
--

CREATE TABLE `sub__sub__categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub__sub__categories`
--

INSERT INTO `sub__sub__categories` (`id`, `category_id`, `sub_category_id`, `sub_sub_category`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Bestseller Cake', '2020-10-23 07:20:44', '2020-10-23 07:20:44'),
(2, '1', '1', 'Photo Cake', '2020-10-23 07:21:10', '2020-10-23 07:21:10'),
(3, '1', '1', 'Superhero Cake', '2020-10-23 07:21:23', '2020-10-23 07:21:23'),
(4, '1', '1', 'Cartoon Cake', '2020-10-23 07:21:40', '2020-10-23 07:21:40'),
(5, '1', '1', 'Cake Combos', '2020-10-23 07:21:52', '2020-10-23 07:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1-active user, 0-inactive user',
  `otp_verified_updatetime` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_singnal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `otp`, `address`, `email_verified_at`, `status`, `otp_verified_updatetime`, `password`, `one_singnal`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'mohit.techosoft@gmail.com', '', NULL, NULL, NULL, NULL, NULL, '$2y$10$oJ/aCM/jxlmx9XOow2m8PeVnepvwWko/jNibzYwWcYn79OBy5JZEC', NULL, '3jYyg2aMstKCsn84Em3OM2BbiCVH25u9agt4dHWJ4WJSBCgutk3hGWLNdWtm', NULL, '2020-11-30 05:06:04'),
(2, 'Kumar Satyam', 'krsatyam844701@gmail.com', '8447126401', '1362', 'Ballabgarh', NULL, NULL, NULL, '$2y$12$hZxAASgKtpgWOOERgrXRjesnLkhVLEtEs8Lm4gaVUWfsAqRoolpuC', '1221212', NULL, '2020-07-18 16:07:00', '2020-08-23 10:51:18'),
(3, 'rahul', 'rahulrkumar7@gmail.com', '7058239556', '1380', '11/2 shree niwas housing socity tagor nagar 5 mumbai 83', NULL, NULL, NULL, NULL, 'b15993ef-1a4c-45ad-b087-71ffb3aa3033', NULL, '2020-07-19 04:40:24', '2020-08-19 20:56:39'),
(4, 'Umang', 'admin@admin.com', '7982527376', '1864', 'Ballabgarh Faridabad', NULL, NULL, NULL, '$2y$10$MjcNrIuCTjQHhDNXUcGRx./B.doLbCNM0GPT4wL6B1M.B9JfyFPva', 'b61b4e3f-cc87-45bd-9809-b747d4e50848', NULL, '2020-07-20 05:53:12', '2020-08-05 16:40:15'),
(5, 'rahul', 'rahulchaube@gmail.com', '8976898022', '1907', 'rahul jskdkdkdkdkdkkdkdkdkdkfkdkdkdbdbdbd', NULL, NULL, NULL, NULL, 'b15993ef-1a4c-45ad-b087-71ffb3aa3033', NULL, '2020-07-20 06:37:20', '2020-07-20 06:37:43'),
(6, 'Bapan', 'amitkumar7361@gmail.com', '9717999121', '1582', 'SAIDULAJAb gali no 3 new delhi \n110030', NULL, NULL, NULL, NULL, '24f0d71c-f11c-470e-9a15-52ea0bdf20f1', NULL, '2020-07-20 14:45:59', '2020-08-23 03:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `label`, `title`, `description`, `start_date`, `end_date`, `offer_type`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DIWALI', 'Diwali special', 'Diwali speacial', '2020-10-10', '2020-12-10', 'Percentage', '10', '1', '2020-10-29 10:58:40', '2020-10-29 10:58:40'),
(3, 'NEW', 'test', 'test', '2020-10-10', '2020-12-10', 'Fixed', '100', '1', '2020-10-30 06:34:38', '2020-10-30 06:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` int(13) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_carts`
--
ALTER TABLE `checkout_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_collection`
--
ALTER TABLE `payment_collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pincode`
--
ALTER TABLE `pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsizes`
--
ALTER TABLE `productsizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_file`
--
ALTER TABLE `product_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub__categories`
--
ALTER TABLE `sub__categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub__sub__categories`
--
ALTER TABLE `sub__sub__categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `checkout_carts`
--
ALTER TABLE `checkout_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_collection`
--
ALTER TABLE `payment_collection`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pincode`
--
ALTER TABLE `pincode`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `productsizes`
--
ALTER TABLE `productsizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_file`
--
ALTER TABLE `product_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub__categories`
--
ALTER TABLE `sub__categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sub__sub__categories`
--
ALTER TABLE `sub__sub__categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
