-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 04:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `product_id`, `user_id`, `amount`, `created_at`, `updated_at`) VALUES
(2, 4, 2, 8500, '2022-07-27 09:12:59', '2022-07-27 09:12:59'),
(14, 4, 2, 8600, '2022-07-27 11:24:31', '2022-07-27 11:24:31'),
(15, 9, 2, 300, '2022-09-02 09:54:13', '2022-09-02 09:54:13'),
(16, 9, 2, 400, '2022-09-02 09:55:56', '2022-09-02 09:55:56'),
(17, 9, 1, 500, '2022-09-02 09:57:00', '2022-09-02 09:57:00'),
(18, 9, 1, 600, '2022-09-02 10:00:56', '2022-09-02 10:00:56'),
(19, 9, 2, 700, '2022-09-02 10:07:04', '2022-09-02 10:07:04'),
(20, 9, 1, 750, '2022-09-02 10:17:38', '2022-09-02 10:17:38'),
(21, 9, 2, 780, '2022-09-02 10:26:54', '2022-09-02 10:26:54'),
(22, 9, 2, 781, '2022-09-06 08:58:21', '2022-09-06 08:58:21'),
(23, 9, 2, 782, '2022-09-06 08:58:42', '2022-09-06 08:58:42'),
(24, 9, 1, 790, '2022-09-06 09:04:25', '2022-09-06 09:04:25'),
(25, 9, 2, 791, '2022-09-06 10:57:48', '2022-09-06 10:57:48'),
(26, 9, 2, 792, '2022-09-06 11:51:06', '2022-09-06 11:51:06'),
(27, 9, 1, 793, '2022-09-06 12:01:36', '2022-09-06 12:01:36'),
(28, 9, 2, 794, '2022-09-06 12:10:36', '2022-09-06 12:10:36'),
(29, 9, 1, 795, '2022-09-06 12:13:37', '2022-09-06 12:13:37'),
(30, 9, 2, 796, '2022-09-06 13:06:02', '2022-09-06 13:06:02'),
(31, 9, 1, 797, '2022-09-06 13:06:19', '2022-09-06 13:06:19'),
(32, 9, 2, 798, '2022-09-06 13:06:56', '2022-09-06 13:06:56'),
(33, 9, 2, 799, '2022-09-06 13:14:56', '2022-09-06 13:14:56'),
(34, 9, 2, 800, '2022-09-06 13:28:06', '2022-09-06 13:28:06'),
(35, 9, 8, 801, '2022-09-07 06:06:02', '2022-09-07 06:06:02'),
(36, 9, 8, 802, '2022-09-07 06:08:07', '2022-09-07 06:08:07'),
(37, 9, 8, 803, '2022-09-07 06:08:50', '2022-09-07 06:08:50'),
(38, 10, 2, 9001, '2022-09-07 06:10:45', '2022-09-07 06:10:45'),
(39, 10, 2, 9002, '2022-09-07 06:18:21', '2022-09-07 06:18:21'),
(40, 9, 2, 804, '2022-09-08 00:25:11', '2022-09-08 00:25:11'),
(41, 9, 2, 805, '2022-09-08 02:28:03', '2022-09-08 02:28:03'),
(42, 9, 2, 806, '2022-09-08 02:28:33', '2022-09-08 02:28:33'),
(43, 9, 8, 807, '2022-09-08 02:29:12', '2022-09-08 02:29:12'),
(44, 9, 2, 808, '2022-09-08 02:30:23', '2022-09-08 02:30:23'),
(45, 9, 2, 809, '2022-09-08 02:30:38', '2022-09-08 02:30:38'),
(46, 9, 8, 810, '2022-09-11 09:14:53', '2022-09-11 09:14:53'),
(47, 9, 2, 811, '2022-09-13 02:40:41', '2022-09-13 02:40:41'),
(48, 9, 2, 812, '2022-09-13 03:31:28', '2022-09-13 03:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'car', 'car', 1, '2022-07-20 11:48:40', '2022-07-20 11:48:40'),
(2, 'land', 'land', 1, '2022-07-22 12:09:01', '2022-07-22 12:09:01'),
(3, 'boat', 'boat', 1, '2022-07-25 00:03:41', '2022-07-25 00:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'voyager::seeders.data_rows.roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(25, 4, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 4),
(26, 4, 'slug', 'text', 'Slug', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 4, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 4),
(57, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(58, 16, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 16, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 6),
(60, 16, 'total_bid', 'text', 'Total Bid', 1, 1, 1, 0, 0, 0, '{}', 7),
(61, 16, 'expired_at', 'timestamp', 'Expired At', 0, 1, 1, 1, 1, 1, '{}', 8),
(62, 16, 'rating', 'text', 'Rating', 1, 1, 1, 0, 0, 0, '{}', 9),
(63, 16, 'total_rating', 'text', 'Total Rating', 1, 1, 1, 0, 0, 0, '{}', 10),
(64, 16, 'review', 'text', 'Review', 1, 1, 1, 1, 1, 1, '{}', 11),
(65, 16, 'short_description', 'text', 'Short Description', 0, 1, 1, 1, 1, 1, '{}', 12),
(66, 16, 'long_description', 'text_area', 'Long Description', 0, 1, 1, 1, 1, 1, '{}', 13),
(67, 16, 'specification', 'text', 'Specification', 0, 1, 1, 1, 1, 1, '{}', 14),
(68, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 1, 1, '{}', 15),
(69, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16),
(70, 16, 'category_id', 'text', 'Category Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(71, 16, 'product_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 17),
(72, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 6),
(73, 1, 'tpno', 'text', 'Tpno', 1, 1, 1, 1, 1, 1, '{}', 12),
(74, 1, 'nic', 'text', 'Nic', 1, 1, 1, 1, 1, 1, '{}', 13),
(75, 16, 'image_path', 'image', 'image', 0, 1, 1, 1, 1, 1, '{}', 4),
(76, 16, 'user_id', 'text', 'User Id', 1, 0, 0, 0, 0, 0, '{}', 18),
(77, 16, 'product_belongsto_user_relationship', 'relationship', 'Seller', 0, 1, 1, 0, 0, 0, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"bids\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(78, 16, 'Is_active', 'checkbox', 'Is Active', 1, 1, 1, 1, 1, 1, '{}', 17);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-05-16 01:06:48', '2022-07-24 23:52:13'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-05-16 01:06:48', '2022-07-20 11:09:58'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(14, 'product', 'product', 'Product', 'Products', NULL, 'App\\Models\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-07-20 11:33:23', '2022-07-20 11:33:23'),
(16, 'products', 'products', 'Product', 'Products', NULL, 'App\\Models\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-07-20 11:41:25', '2022-09-18 08:33:09');

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
-- Table structure for table `info_users`
--

CREATE TABLE `info_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tpno` int(11) NOT NULL,
  `adress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(2, 'normal', '2022-05-16 09:20:54', '2022-05-16 09:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-home', '#000000', NULL, 1, '2022-05-16 01:06:48', '2022-05-16 12:40:54', 'voyager.dashboard', 'null'),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2022-05-16 01:06:48', '2022-05-16 01:06:48', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.categories.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.pages.index', NULL),
(14, 2, 'Home', '/', '_self', 'voyager-home', '#ed0707', NULL, 1, '2022-05-16 09:23:58', '2022-07-17 11:22:10', NULL, ''),
(15, 2, 'About', '/', '_self', 'voyager-info-circled', '#f02424', NULL, 2, '2022-05-16 09:25:55', '2022-07-17 11:22:10', NULL, ''),
(16, 2, 'Contact', '', '_self', 'voyager-phone', '#e21212', NULL, 3, '2022-05-16 09:26:35', '2022-07-17 11:22:10', NULL, ''),
(17, 2, 'Login', '/login', '_self', NULL, '#000000', NULL, 4, '2022-05-16 09:58:54', '2022-07-17 11:22:10', NULL, ''),
(18, 2, 'profile', '', '_self', NULL, '#000000', NULL, 5, '2022-07-17 11:09:28', '2022-07-17 11:22:10', 'voyager.profile.index', 'null'),
(21, 1, 'Products', '', '_self', NULL, '#000000', NULL, 16, '2022-07-20 11:41:25', '2022-08-08 23:54:18', 'voyager.products.index', 'null');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2022_05_17_151308_create_info_users_table', 2),
(31, '2016_02_15_204651_create_categories_table', 4),
(32, '2022_07_20_153402_create_products_table', 5),
(33, '2022_07_21_175944_products', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2022-05-16 01:06:48', '2022-05-16 13:02:16');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(2, 'browse_bread', NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(3, 'browse_database', NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(4, 'browse_media', NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(5, 'browse_compass', NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(6, 'browse_menus', 'menus', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(7, 'read_menus', 'menus', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(8, 'edit_menus', 'menus', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(9, 'add_menus', 'menus', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(10, 'delete_menus', 'menus', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(11, 'browse_roles', 'roles', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(12, 'read_roles', 'roles', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(13, 'edit_roles', 'roles', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(14, 'add_roles', 'roles', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(15, 'delete_roles', 'roles', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(16, 'browse_users', 'users', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(17, 'read_users', 'users', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(18, 'edit_users', 'users', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(19, 'add_users', 'users', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(20, 'delete_users', 'users', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(21, 'browse_settings', 'settings', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(22, 'read_settings', 'settings', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(23, 'edit_settings', 'settings', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(24, 'add_settings', 'settings', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(25, 'delete_settings', 'settings', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(26, 'browse_categories', 'categories', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(27, 'read_categories', 'categories', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(28, 'edit_categories', 'categories', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(29, 'add_categories', 'categories', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(30, 'delete_categories', 'categories', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(31, 'browse_posts', 'posts', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(32, 'read_posts', 'posts', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(33, 'edit_posts', 'posts', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(34, 'add_posts', 'posts', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(35, 'delete_posts', 'posts', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(36, 'browse_pages', 'pages', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(37, 'read_pages', 'pages', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(38, 'edit_pages', 'pages', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(39, 'add_pages', 'pages', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(40, 'delete_pages', 'pages', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(46, 'browse_product', 'product', '2022-07-20 11:33:23', '2022-07-20 11:33:23'),
(47, 'read_product', 'product', '2022-07-20 11:33:23', '2022-07-20 11:33:23'),
(48, 'edit_product', 'product', '2022-07-20 11:33:23', '2022-07-20 11:33:23'),
(49, 'add_product', 'product', '2022-07-20 11:33:23', '2022-07-20 11:33:23'),
(50, 'delete_product', 'product', '2022-07-20 11:33:23', '2022-07-20 11:33:23'),
(51, 'browse_products', 'products', '2022-07-20 11:41:25', '2022-07-20 11:41:25'),
(52, 'read_products', 'products', '2022-07-20 11:41:25', '2022-07-20 11:41:25'),
(53, 'edit_products', 'products', '2022-07-20 11:41:25', '2022-07-20 11:41:25'),
(54, 'add_products', 'products', '2022-07-20 11:41:25', '2022-07-20 11:41:25'),
(55, 'delete_products', 'products', '2022-07-20 11:41:25', '2022-07-20 11:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(6, 2),
(6, 3),
(7, 1),
(7, 2),
(7, 3),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(26, 2),
(26, 3),
(27, 1),
(27, 2),
(27, 3),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(31, 2),
(31, 3),
(32, 1),
(32, 2),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 2),
(36, 3),
(37, 1),
(37, 2),
(37, 3),
(38, 1),
(39, 1),
(40, 1),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-16 01:06:48', '2022-05-16 01:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `total_bid` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `expired_at` datetime DEFAULT NULL,
  `rating` decimal(5,2) NOT NULL DEFAULT 0.00,
  `total_rating` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `review` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `total_bid`, `expired_at`, `rating`, `total_rating`, `review`, `short_description`, `long_description`, `specification`, `image_path`, `created_at`, `updated_at`, `category_id`, `user_id`, `Is_active`) VALUES
(4, 'watch', '8000.00000000', 0, '2022-07-29 14:40:00', '0.00', 0, 0, 'classic watch ', 'Watches evolved from portable spring-driven clocks, which first appeared in 15th-century Europe. Watches were not widely worn in pockets until the 17th century. One account suggests that the word \"watch\" came from the Old English word woecce - which meant \"watchman\" – because town watchmen used the technology to keep track of their shifts at work.[14] Another says that the term came from 17th-century sailors, who used the new mechanisms to time the length of their shipboard watches (duty shifts).', 'gdfgfdgdfgdfgdfgd', '202207221754xs-p1.jpg.pagespeed.ic.1dcktNEdKa.jpg', '2022-07-22 12:24:37', '2022-07-22 12:24:37', 2, 8, 1),
(5, 'paint', '90000.00000000', 0, '2022-07-03 12:37:00', '0.00', 0, 0, 'oil paint ', 'Painting is the practice of applying paint, pigment, color or other medium to a solid surface (called the \"matrix\" or \"support\").[1] The medium is commonly applied to the base with a brush, but other implements, such as knives, sponges, and airbrushes, can be used.\r\n\r\nIn art, the term painting describes both the act and the result of the action (the final work is called \"a painting\"). The support for paintings includes such surfaces as walls, paper, canvas, wood, glass, lacquer, pottery, leaf, copper and concrete, and the painting may incorporate multiple other materials, including sand, clay, paper, plaster, gold leaf, and even whole objects.\r\n\r\nPainting is an important form in the visual arts, bringing in elements such as drawing, composition, gesture (as in gestural painting), narration (as in narrative art), and abstraction (as in abstract art).[2] Paintings can be naturalistic and representational (as in still life and landscape painting), photographic, abstract, narrative, symbolistic (as in Symbolist art), emotive (as in Expressionism) or political in nature (as in Artivism).\r\n\r\nA portion of the history of painting in both Eastern and Western art is dominated by religious art. Examples of this kind of painting range from artwork depicting mythological figures on pottery, to Biblical scenes on the Sistine Chapel ceiling, to scenes from the life of Buddha (or other images of Eastern religious origin).', 'fdgdfgfdsgdfgdgdsg', '202207230708f8338b95-4539-49d1-ba70-ddb5286a9abf.jpg', '2022-07-23 01:38:17', '2022-07-23 01:38:17', 1, 8, 1),
(6, 'erertre', '6000000.00000000', 0, '2022-07-28 12:38:00', '0.00', 0, 0, 'eegddfsrgdfg', 'dfgdfsgdfsgdfg\r\ndfsgfdg\r\nfsdgdfgdfg', 'gertrgergergerg', '202207230709Opera Snapshot_2021-07-14_113247_pahe.ph.png', '2022-07-23 01:39:20', '2022-07-23 01:39:20', 2, 8, 1),
(7, 'Sword', '5909.00000000', 0, '2022-07-26 13:16:00', '0.00', 0, 0, 'Elucidator', 'First up is a black blade to match Kirito\'s dark outfit: the sword known as Elucidator. He obtained this sword in Aincrad, and it\'s a demonic monster drop weapon that Kirito tended to use alongside Dark Repulser (more on that soon). Elucidator was used from Floor 50 onwards, and it quickly proved to be one of Kirito\'s most reliable weapons.\r\n\r\nBetter yet, Lisbeth the blacksmith improved its stats to the point that it outclasses anything in her shop. Kirito tested Elucidator\'s power by striking it against another sword, the best in Lisbeth\'s inventory, and watched as Elucidator shattered the other blade with ease. Kirito had this weapon in hand when he defeated The Skull Reaper on Floor 75, and he wielded it against Heathcliff, too', '214494646464', '202207230747Untitled-1.jpg', '2022-07-23 02:17:12', '2022-07-23 02:17:12', 2, 8, 1),
(8, 'picture', '5000.00000000', 0, '2022-07-29 10:14:00', '0.00', 0, 0, 'aserstdfgdgsdg', 'agrdfgedfsgdfg\r\nfgdfgdfgfdgdfg\r\ndfgdfggdgdgd', '1234445', '202207250444049.jpg', '2022-07-24 23:14:55', '2022-07-24 23:14:55', 2, 8, 1),
(9, 'Omnitrix', '200.00000000', 32, '2022-09-19 10:18:00', '0.00', 0, 0, 'toy car', 'ewfweafweafawef\r\newafwaefwefwe\r\nawefeawfwef\r\nweafwefwefwae', 'feewewerterte', '202207250451ben-10-ultimate-ultimatrix.jpg', '2022-07-24 23:21:29', '2022-09-13 03:31:28', 1, 5, 1),
(10, 'toy car', '9000.00000000', 2, '2022-09-20 10:59:00', '0.00', 0, 0, 'toy car', 'First up is a black blade to match Kirito\'s dark outfit: the sword known as Elucidator. He obtained this sword in Aincrad, and it\'s a demonic monster drop weapon that Kirito tended to use alongside Dark Repulser (more on that soon). Elucidator was used from Floor 50 onwards, and it quickly proved to be one of Kirito\'s most reliable weapons.\r\n\r\nBetter yet, Lisbeth the blacksmith improved its stats to the point that it outclasses anything in her shop. Kirito tested Elucidator\'s power by striking it against another sword, the best in Lisbeth\'s inventory, and watched as Elucidator shattered the other blade with ease. Kirito had this weapon in hand when he defeated The Skull Reaper on Floor 75, and he wielded it against Heathcliff, too', 'dfgfdgdgdg', '202207250530xs-p1.jpg.pagespeed.ic.1dcktNEdKa.jpg', '2022-07-25 00:00:00', '2022-09-07 06:18:21', 2, 8, 1),
(11, 'dfdsfsdf', '1000.00000000', 0, '2022-09-24 22:04:00', '0.00', 0, 0, 'dsfdsfas', 'fsadfsdaf', NULL, '202209101634logo.png', '2022-09-10 11:04:45', '2022-09-10 11:04:45', 3, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(2, 'bidder', 'bidder', '2022-05-16 01:06:48', '2022-05-17 00:39:43'),
(3, 'seller', 'Seller', '2022-05-17 00:41:14', '2022-05-17 00:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'BID_BOX', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'A place where you can easily get what you dreamed of', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\May2022\\gYYtsiELOukU4uZKrG45.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\July2022\\aYZB1FK92jz6sf9TApR4.png', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'BID_BOX', '', 'text', 2, 'Admin'),
(7, 'admin.description', 'Admin Description', NULL, '', 'text', 1, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\May2022\\UToihQmcEW3EPx0o71w9.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2022-05-16 01:06:48', '2022-05-16 01:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tpno` int(10) UNSIGNED NOT NULL,
  `nic` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `tpno`, `nic`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users\\July2022\\7f2n80nchzDSjDVsLzav.jpg', NULL, '$2y$10$kLShytY2nVH7INtELsapEup/FAgGklSWkLIQL6WN0s/lbMJhGeV86', 'yomXb3kHEenFJRKqiS8dzF4PIwRmEAWCwN5FEcUWd01m1Sj0kKkaySsUJdOC', '{\"locale\":\"en\"}', '2022-05-16 01:06:48', '2022-07-24 23:16:27', 0, ''),
(2, 2, 'thisara', 'thisaratharinda196@gmail.com', '202209071601toy car.jpg', NULL, '$2y$10$G/yMPofi7i21wnmf4p6a/.2yRGaoubzzbD/VVS/dDaHiBrwrl8tMS', NULL, NULL, '2022-07-17 10:50:06', '2022-09-07 10:31:46', 773423341, '200101802102'),
(8, 3, '123', 'nisalkaushalya7@gmail.com', 'users/default.png', NULL, '$2y$10$vaXJz4QnPDOFmCkJZ/UshOw7ljbxa8bJ99IVzT8DjAJ902YR5/FoC', NULL, NULL, '2022-07-18 11:08:05', '2022-07-18 11:08:05', 1234567890, '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `info_users`
--
ALTER TABLE `info_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `info_users_nic_unique` (`nic`),
  ADD UNIQUE KEY `info_users_tpno_unique` (`tpno`),
  ADD KEY `info_users_user_id_index` (`user_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_tpno_unique` (`tpno`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_users`
--
ALTER TABLE `info_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
