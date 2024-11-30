-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2024 at 09:54 AM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u890116276_arkham`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `product_id`, `user_id`, `amount`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 1, 345001, '2023-01-06 19:47:45', '2023-01-06 19:47:45', 1),
(2, 4, 2, 63990001, '2023-01-09 10:14:44', '2023-01-09 10:14:44', 1),
(4, 1, 10, 346000, '2023-01-09 11:18:13', '2023-01-09 11:18:13', 1),
(5, 3, 2, 69400, '2023-01-09 13:58:44', '2023-01-09 13:58:44', 1),
(8, 6, 2, 4001, '2023-01-09 14:31:30', '2023-01-09 14:31:30', 1),
(9, 5, 12, 153690002, '2023-01-12 12:32:29', '2023-01-12 12:32:29', 1),
(10, 7, 2, 50001, '2024-06-22 11:21:26', '2024-06-22 11:21:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `slug` varchar(40) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Art', 'art', 1, '2023-01-06 19:24:16', '2023-01-06 19:24:16'),
(2, 'Antiques & Collectables', 'antiques-and-collectables', 1, '2023-01-06 19:25:42', '2023-01-06 19:25:42'),
(3, 'Jewellery', 'jewellery', 1, '2023-01-06 19:25:56', '2023-01-06 19:25:56'),
(4, 'Cars & Automotive', 'cars-and-automotive', 1, '2023-01-06 19:26:32', '2023-01-06 19:26:32'),
(5, 'Real Estate', 'real-estate', 1, '2023-01-06 19:48:00', '2023-01-06 19:48:00'),
(6, 'Fantasy, Gothic and Mythical', 'fantasy-gothic-and-mythical', 1, '2023-01-06 19:48:53', '2023-01-06 19:48:53'),
(7, 'Fundraising', 'fundraising', 1, '2023-01-06 19:49:43', '2023-01-06 19:49:43'),
(8, 'Interiors & Decorations', 'interiors-and-decorations', 1, '2023-01-06 20:28:30', '2023-01-06 20:28:30'),
(9, 'temporary', 'temporary', 1, '2023-01-09 14:41:20', '2023-01-09 14:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 4),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 6),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 7),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 0, '{}', 2),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'voyager::seeders.data_rows.roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 12),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 15),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 10),
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
(72, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 0, 0, 0, '{}', 9),
(73, 1, 'tpno', 'text', 'Tpno', 1, 1, 1, 1, 1, 1, '{}', 13),
(74, 1, 'nic', 'text', 'Nic', 1, 1, 1, 1, 1, 1, '{}', 16),
(75, 16, 'image_path', 'image', 'image', 0, 1, 1, 1, 1, 1, '{}', 4),
(76, 16, 'user_id', 'text', 'User Id', 1, 0, 0, 0, 0, 0, '{}', 18),
(77, 16, 'product_belongsto_user_relationship', 'relationship', 'Seller', 0, 1, 1, 0, 0, 0, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"bids\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(78, 16, 'Is_active', 'checkbox', 'Is Active', 1, 1, 1, 1, 1, 1, '{}', 17),
(79, 1, 'is_active', 'checkbox', 'Is Active', 1, 1, 1, 1, 1, 1, '{}', 14),
(92, 29, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(93, 29, 'product_id', 'text', 'Product Id', 1, 1, 1, 0, 0, 0, '{}', 2),
(94, 29, 'customer_id', 'text', 'Customer Id', 1, 1, 1, 0, 0, 0, '{}', 3),
(95, 29, 'bid_id', 'text', 'Bid Id', 1, 1, 1, 0, 0, 0, '{}', 4),
(96, 29, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 8),
(97, 29, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(98, 29, 'winner_belongsto_bid_relationship', 'relationship', 'bids', 0, 1, 1, 0, 0, 0, '{\"model\":\"App\\\\Models\\\\Bid\",\"table\":\"bids\",\"type\":\"belongsTo\",\"column\":\"bid_id\",\"key\":\"id\",\"label\":\"amount\",\"pivot_table\":\"bids\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(99, 29, 'winner_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 0, 0, 0, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"customer_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"bids\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(100, 29, 'winner_belongsto_product_relationship', 'relationship', 'products', 0, 1, 1, 0, 0, 0, '{\"model\":\"App\\\\Models\\\\Product\",\"table\":\"products\",\"type\":\"belongsTo\",\"column\":\"product_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"bids\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(101, 32, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(102, 32, 'payment_id', 'text', 'Payment Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(103, 32, 'amount', 'text', 'Amount', 0, 1, 1, 1, 1, 1, '{}', 3),
(104, 32, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, '{}', 4),
(105, 32, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(106, 32, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(107, 32, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 7),
(108, 32, 'currency', 'text', 'Currency', 0, 1, 1, 1, 1, 1, '{}', 8),
(109, 32, 'receipt_url', 'text', 'Receipt Url', 0, 1, 1, 1, 1, 1, '{}', 9),
(110, 32, 'product_id', 'text', 'Product Id', 0, 1, 1, 1, 1, 1, '{}', 10),
(111, 32, 'payment_belongsto_product_relationship', 'relationship', 'products', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Product\",\"table\":\"products\",\"type\":\"belongsTo\",\"column\":\"product_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"bids\",\"pivot\":\"0\",\"taggable\":null}', 11),
(112, 32, 'payment_hasone_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\user\",\"table\":\"users\",\"type\":\"hasOne\",\"column\":\"email\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"bids\",\"pivot\":\"0\",\"taggable\":null}', 12);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_name_singular` varchar(255) NOT NULL,
  `display_name_plural` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `policy_name` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-05-16 01:06:48', '2022-09-27 02:00:36'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-05-16 01:06:48', '2022-07-20 11:09:58'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2022-05-16 01:06:48', '2022-05-16 01:06:48'),
(14, 'product', 'product', 'Product', 'Products', NULL, 'App\\Models\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-07-20 11:33:23', '2022-07-20 11:33:23'),
(16, 'products', 'products', 'Product', 'Products', NULL, 'App\\Models\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-07-20 11:41:25', '2022-09-26 10:16:38'),
(29, 'winners', 'winners', 'Winner', 'Winners', NULL, 'App\\Models\\winner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-10-29 04:11:17', '2022-10-29 04:36:18'),
(32, 'payments', 'payments', 'Payment', 'Payments', NULL, 'App\\Models\\Payment', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2023-01-01 06:33:56', '2023-01-01 06:33:56');

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
-- Table structure for table `info_users`
--

CREATE TABLE `info_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nic` varchar(255) NOT NULL,
  `tpno` int(11) NOT NULL,
  `adress` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `parameters` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-home', '#000000', NULL, 1, '2022-05-16 01:06:48', '2022-05-16 12:40:54', 'voyager.dashboard', 'null'),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 6, '2022-05-16 01:06:48', '2023-01-01 06:27:18', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2022-05-16 01:06:48', '2022-05-16 01:06:48', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2022-05-16 01:06:48', '2023-01-01 06:35:49', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2022-05-16 01:06:48', '2023-01-01 06:24:38', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2022-05-16 01:06:48', '2023-01-01 06:24:38', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2022-05-16 01:06:48', '2023-01-01 06:35:49', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2022-05-16 01:06:48', '2023-01-01 06:35:49', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 10, '2022-05-16 01:06:48', '2023-01-01 06:35:49', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 7, '2022-05-16 01:06:48', '2023-01-01 06:26:32', 'voyager.categories.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 11, '2022-05-16 01:06:48', '2023-01-01 06:35:49', 'voyager.pages.index', NULL),
(14, 2, 'Home', '/', '_self', 'voyager-home', '#ed0707', NULL, 1, '2022-05-16 09:23:58', '2022-07-17 11:22:10', NULL, ''),
(15, 2, 'About', '/', '_self', 'voyager-info-circled', '#f02424', NULL, 2, '2022-05-16 09:25:55', '2022-07-17 11:22:10', NULL, ''),
(16, 2, 'Contact', '', '_self', 'voyager-phone', '#e21212', NULL, 3, '2022-05-16 09:26:35', '2022-07-17 11:22:10', NULL, ''),
(17, 2, 'Login', '/login', '_self', NULL, '#000000', NULL, 4, '2022-05-16 09:58:54', '2022-07-17 11:22:10', NULL, ''),
(18, 2, 'profile', '', '_self', NULL, '#000000', NULL, 5, '2022-07-17 11:09:28', '2022-07-17 11:22:10', 'voyager.profile.index', 'null'),
(21, 1, 'Products', '', '_self', 'voyager-bag', '#000000', NULL, 4, '2022-07-20 11:41:25', '2023-01-01 06:25:06', 'voyager.products.index', 'null'),
(24, 1, 'Winners', '', '_self', 'voyager-diamond', '#000000', NULL, 5, '2022-10-29 04:11:17', '2024-06-22 11:25:08', 'voyager.winners.index', 'null'),
(25, 1, 'Payments', '', '_self', 'voyager-wallet', '#000000', NULL, 8, '2023-01-01 06:33:56', '2023-01-01 06:35:49', 'voyager.payments.index', 'null');

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
  `title` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'INACTIVE',
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
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('thisaratharindaciscoitn@gmail.com', '$2y$10$rNBXRbmDnBL6nZMqGs7D9e2EzISQsT.Ogmt5picl862cqZuOn4neS', '2022-12-24 09:06:24'),
('thisaratharinda196@gmail.com', '$2y$10$bg/Zs3IOoox1qlMuJqrI1ukfRMnojk1kDC1Abj4.ZOvHwt8R.SN4W', '2023-01-02 13:21:38'),
('magame8014@zamaneta.com', '$2y$10$Ek5NAmn2vcnCKQmQfP1GdOJTCWx2ScXhrrPnY3ViscDilkaEYNDDC', '2023-11-02 10:07:41'),
('alfagayan@gmail.com', '$2y$10$chua/YlDjsKnpoq7m9rRMuix/6UBd16fmc8apCayKQ03ZEwgjhEc6', '2024-06-22 12:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` varchar(400) NOT NULL,
  `amount` float DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `currency` varchar(11) DEFAULT NULL,
  `receipt_url` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `table_name` varchar(255) DEFAULT NULL,
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
(55, 'delete_products', 'products', '2022-07-20 11:41:25', '2022-07-20 11:41:25'),
(66, 'browse_winners', 'winners', '2022-10-29 04:11:17', '2022-10-29 04:11:17'),
(67, 'read_winners', 'winners', '2022-10-29 04:11:17', '2022-10-29 04:11:17'),
(68, 'edit_winners', 'winners', '2022-10-29 04:11:17', '2022-10-29 04:11:17'),
(69, 'add_winners', 'winners', '2022-10-29 04:11:17', '2022-10-29 04:11:17'),
(70, 'delete_winners', 'winners', '2022-10-29 04:11:17', '2022-10-29 04:11:17'),
(71, 'browse_payments', 'payments', '2023-01-01 06:33:56', '2023-01-01 06:33:56'),
(72, 'read_payments', 'payments', '2023-01-01 06:33:56', '2023-01-01 06:33:56'),
(73, 'edit_payments', 'payments', '2023-01-01 06:33:56', '2023-01-01 06:33:56'),
(74, 'add_payments', 'payments', '2023-01-01 06:33:56', '2023-01-01 06:33:56'),
(75, 'delete_payments', 'payments', '2023-01-01 06:33:56', '2023-01-01 06:33:56');

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
(55, 3),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1);

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
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') NOT NULL DEFAULT 'DRAFT',
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
  `name` varchar(40) DEFAULT NULL,
  `price` bigint(20) NOT NULL DEFAULT 0,
  `total_bid` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `expired_at` datetime DEFAULT NULL,
  `rating` decimal(5,2) NOT NULL DEFAULT 0.00,
  `total_rating` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `review` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `specification` text DEFAULT NULL,
  `image_path` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_expired` tinyint(4) DEFAULT 0,
  `is_winner_selected` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `total_bid`, `expired_at`, `rating`, `total_rating`, `review`, `short_description`, `long_description`, `specification`, `image_path`, `created_at`, `updated_at`, `category_id`, `user_id`, `Is_active`, `is_expired`, `is_winner_selected`) VALUES
(2, 'Trifari Eagle Brooch', 56000, 0, '2023-01-07 00:00:00', 0.00, 0, 0, 'This piece is an example of Trifari\'s prime work. It is considered a rarity in the costume jewelry world and is highly sought by avid collectors.', 'This is a beautiful Patriotic flying eagle from the 1990s and signed on the back TRIFARI and 1990a The eagle is a shiny goldtone with clear paste set Aurora Borealis rhinestones accents in the wings and tail. The wing span width is 3\" and the brooch is 1 1/8\" high with good dimensionality. All rhinestones appear original and the pin back is straight and works smoothly and securely. It is in excellent condition.', NULL, 'assets/images/product/202301061502Trifari Eagle Brooch.jpg', '2023-01-06 20:02:49', '2023-01-09 04:48:40', 2, 12, 1, 1, 0),
(3, '1989 Porsche 911 \"Turbo\"', 69400000, 3, '2023-01-08 00:00:00', 0.00, 0, 0, 'The Porsche 930 Turbo remains one of the ultimate sport car for enthusiasts across the globe and is one of the most usable, collectable and iconic classic supercars extant.', 'The Porsche 930 Turbo remains one of the ultimate sport car for enthusiasts across the globe and is one of the most usable, collectable and iconic classic supercars extant. The final iteration of the 930 series was the 1989 model, which featured the G50 5 speed gearbox that vastly improved the drivability of the car, allowing the driver to stay on boost and access its full performance with far more ease than the earlier four speed types.\r\n\r\nJust 857 Coupe 930 Turbo G50 5 Speed units were built in 1989 making this a very rare version and even rarer with the 930/66/S with 330bhp as this 930 is.\r\n\r\nThe pinnacle of this final series was the Turbo S. This relatively unknown model was built to special order at the request of selected clients under the Porsche Exclusiv programme and it is believed that just 55 Turbo S models were produced in 1989, making it one of the rarest 930 types constructed.\r\n\r\nFitted with a number of significant upgrades over the standard model, the 3. 3L engine was tuned to 330BHP, known by the internal code 930/66S and had a special front mounted Oil-Cooler, 7000rpm rev counter with 300kph speedometer and 1 Bar boost gauge, redesigned rear lower valence with quad exhaust pipes, sports seats and G50 five speed gearbox with limited slip differential. Naturally clients had the option to specify even more special-order options if they desired.\r\n\r\nThis coupe was delivered new in Germany on 10th May 1989, finished in Black (non-metallic) coachwork with Black leather interior, electric sunroof, heated front sports seats and 40% locking differential, Blaupunkt Bremen SQR46 radio with amplifier and headlight levelling system.\r\n\r\nBy 1991 the car had found its way to Belgium where it remained until 1997, maintained by D?Ieteren Porsche Center of Brussels evidenced by the four stamps in the service book with mileage at 17, 514kms in 1991 to 78, 109kms in 1996\r\n\r\nSold in 1997 to Mr Fahey of Cheltenham, UK, who retained the car until 2002, maintaining the car regularly with supporting invoices on file. Following his ownership, the Turbo was sold to France where it remained until 2006. Throughout this time it was carefully maintained without regard to expense and benefited from a full engine rebuild, with all invoices retained on file\r\n\r\nSince 2006 the Porsche has resided in Spain and has been the subject of further improvements, notably a full repaint, new rubber mouldings, replacement lights, new clutch, drive shaft bearings, gearbox rebuild, torsion bars, new cold start valve, fuel metering unit, distributor etc\r\n\r\nFeatured within a five-page article in European Porsche magazine 9Once Plus Magazine in May 2014, this super rare Turbo S has complete and comprehensive service history which includes the original and complete book pack, two sets of keys, photographic documentation and invoices of engine rebuild and extensive maintenance records\r\n\r\nClearly a cherished example throughout its life, a recent drive confirms this special ?Turbo S? to drive even better than it looks, with scintillating performance, exceptional road holding and great presence. With much recent expenditure and a full engine rebuild completed 10k kms ago.', 'Car', 'assets/images/product/202301061507carpixel.net-1989-porsche-911-turbo-limited-edition-50000-wide.jpg', '2023-01-06 20:07:20', '2023-01-09 14:07:26', 4, 12, 1, 1, 0),
(4, '1965 Mercedes-Benz S-Class', 63990000, 2, '2023-01-10 00:00:00', 0.00, 0, 0, '300 SE Coupé W112 | Matching Nrs. & Colors | First paint | Original checkbook', 'The Mercedes Benz 300 SE Coupé of the series W112 offered here presents itself in its very well preserved first paint - dark reddish brown. In combination with the very attractive exterior color is the interior of the almost 5 meters long luxury coupe, the original cognac-colored leather. A discreet but still clearly visible patina of the leather perfectly completes the image of the interior. This 300 SE coupe has an incomparable charm that makes you feel the almost 60 years of history. It literally feels like stepping back in time to the 60s.\r\n\r\nThe Coupé was originally delivered as a new vehicle to Belgium and was there until 16.08.1980 with a mileage of 38,334 Km in first hand. From the present owner the vehicle was acquired on 03.10.1987 with a mileage of 53.924 Km from the second owner in the Netherlands.\r\n\r\nThe interior is also like the body, the paint, the glazing, the chrome parts and the technology in a remarkably good and original condition. The car is unwelded and the underbody is immaculate as all cavities were treated with Binitrol when new. A special feature of this 300 SE is the included luggage set from Hepco, which was used to advertise the 300 SE - a picture of the original advertisement is available.\r\n\r\nIf you turn the ignition key of the coupe, the in-line six-cylinder starts without hesitation and convinces with a smooth running character. The gears of the 4-speed manual transmission are easy to engage. Driving can be described more as floating over the asphalt, thanks to the long wheelbase and the comfortable chassis.\r\n\r\nThis Mercedes Benz 300 SE Coupé W112 is in an incredible and original condition. Just the right companion for lovers of originality.', NULL, 'assets/images/product/202301061536139300-932304-car-20220912_165312-exterieur_ansicht_001.jpg', '2023-01-06 20:36:20', '2023-11-01 11:02:58', 4, 10, 1, 1, 0),
(5, '1976 Aston Martin V8', 153690000, 1, '2023-01-20 00:00:00', 0.00, 0, 0, 'Aston Martin V8 Evolution', 'This fully restored Aston Martin V8 Evolution 6.0 is for sale, with a V8 6000cc electronic fuel injection engine this masterpiece produces 430bhp, reaches 0-60mph in approximately 5.5secs and has a top speed of 160mph+. Finished in Cumberland Grey exterior and a Black Leather interior, this V8 Evolution 6.0 is a stunning example of craftsmanship at its best. This V8 has only 823 miles on the clock due to limited use and test mileage from restoration. To reinforce the time and effort that has gone into this creation, we have included the restoration timeline that went into transforming this beautiful Aston Martin. Showcasing the Aston Workshop’s ‘V8 Evolution 6.0’ package of upgrades. Workshop Manager, Neil Calvert explains the project, ‘Think of it as an evolved V8 developed from years of experience rebuilding and upgrading Astons with the latest hardware. You could make it more extreme, but this would be our ultimate road specification.’ Restoration ProjectThe project began when a long-standing customer asked for his V8 to be ‘sexed up’. His left-hand-drive car had first been delivered to Japan (hence the ‘J’ prefix to the chassis number) before more recently residing at the present (British) owner’s Florida residence.', NULL, 'assets/images/product/20230106154048f622b9-a15a-4b11-99ba-741c959fa8df.jpg', '2023-01-06 20:40:00', '2023-11-01 11:02:58', 4, 10, 1, 1, 0),
(6, 'temporary', 4000, 1, '2023-01-23 00:00:00', 0.00, 0, 0, 'sdrf', 'temporary item', 'temp', 'assets/images/product/202301090930Untitled Diagram (4).jpg', '2023-01-09 14:30:28', '2023-11-01 11:02:58', 2, 12, 1, 1, 0),
(7, 'Inner Harmony', 5000, 1, '2024-06-30 00:00:00', 0.00, 0, 0, 'ergresdgersg', 'ergergersgesrgersg', 'ersgersgersgresgersg', 'assets/images/product/202406221118KRO-610-e1717233096177.png', '2024-06-22 11:18:01', '2024-06-22 11:21:26', 8, 12, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
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
  `key` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'BID_BOX', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'A place where you can easily get what you dreamed of', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/July2022/vWorkg6QLyeoZ8KZ5vcA.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\July2022\\aYZB1FK92jz6sf9TApR4.png', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'BID_BOX', '', 'text', 2, 'Admin'),
(7, 'admin.description', 'Admin Description', NULL, '', 'text', 1, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/July2022/uqNZk7PTdALS9xl3z34Y.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `column_name` varchar(255) NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `value` text NOT NULL,
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
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'assets/images/user/default.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tpno` int(10) UNSIGNED NOT NULL,
  `nic` varchar(12) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `tpno`, `nic`, `is_active`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users\\July2022\\7f2n80nchzDSjDVsLzav.jpg', NULL, '$2y$10$kLShytY2nVH7INtELsapEup/FAgGklSWkLIQL6WN0s/lbMJhGeV86', '5tU13ZxYwLoNdWcITezIqGVFxKi3Gg9DLe7bqxAEsZh8oPDFS5jkeu4RH4IJ', '{\"locale\":\"en\"}', '2022-05-16 01:06:48', '2022-07-24 23:16:27', 0, '', 1),
(2, 2, 'thisara', 'thisaratharinda196@gmail.com', 'assets/images/user/202209071601toy car.jpg', NULL, '$2y$10$SnsRo6kntJKNev2kpBUyvOvWFsqF91j7Qh/VFlax49SZf4aLln/5.', NULL, NULL, '2022-07-17 10:50:06', '2023-11-02 10:10:33', 773423341, '200101802102', 1),
(8, 3, '123', 'nisalkaushalya7@gmail.com', 'users/default.png', NULL, '$2y$10$W8jQ4DLh43KBtF6EPozixOVbd5VO8aC7mndkSM7CeOPk33j4DGCLW', NULL, NULL, '2022-07-18 11:08:05', '2024-04-26 00:41:01', 1234567890, '1234567890', 1),
(10, 3, 'Kavindu Gayan', 'magame8014@zamaneta.com', '/assets/images/user/202212311514ezgif-2-fce1ff2a2c.jpg', '2022-12-31 20:14:13', '$2y$10$A4H9i0sSO002lCwGZaUmK.NA7oa2giPnk2FHXmzqalAbxmbD13bDa', 't94flY64giSAFTZ1z7ll829PuAN9xXKkVpJ8CWiSUpT3jr0hxBRWVstvCTpi', NULL, '2022-12-31 20:12:37', '2023-11-02 10:08:59', 766966969, '500023133451', 1),
(11, 2, 'Pubudu Ishan', 'pubuduishan2000@gmail.com', 'assets/images/user/default.jpg', NULL, '$2y$10$7W2sYyh35iSMq6B0ydfSlOoMZz2YvLmTRdz58EvApfUA3hxfP8ga2', NULL, NULL, '2023-01-05 14:21:29', '2023-01-05 14:21:29', 711760916, '200027201290', 1),
(12, 3, 'Gayan', 'alfagayan@gmail.com', 'assets/images/user/default.jpg', NULL, '$2y$10$Lm1/04AnXGocgTW1tUZJmegruEz2sTIEncFGJijrALWLB7p00olIy', 'rucRGksm7pcphi1ihHWX3IZyXQ4RgwWKpVFGnpxsMn8zpFmgFvIUwow8KMXo', NULL, '2023-01-06 19:23:19', '2024-06-22 11:16:35', 765552222, '200012500150', 1),
(14, 3, 'kogised951@chnlog.com', 'kogised951@chnlog.com', 'assets/images/user/default.jpg', '2023-01-09 11:00:01', '$2y$10$YHEaOTRdVBs2wffBhKaE6ey6lhgn8Rdxuf4oB0tKOjbqbc6/Q1cQK', NULL, NULL, '2023-01-09 10:59:48', '2023-01-09 11:00:01', 752345612, '200045600890', 1),
(15, 3, 'kaushalya', 'lifafah.rucuci@gotgel.org', 'assets/images/user/default.jpg', NULL, '$2y$10$953HyOouFp//HB2Kq0Ogk.8IEJCAQ0HHNypo7T55d9ucmcCWMcquS', NULL, NULL, '2023-01-09 13:48:26', '2023-01-09 13:48:26', 711147560, '965478964216', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `bid_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`id`, `product_id`, `customer_id`, `bid_id`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 7, '2023-01-09 14:07:26', '2023-01-09 14:07:26'),
(2, 1, 10, 4, '2023-11-01 11:02:58', '2023-11-01 11:02:58'),
(3, 4, 2, 2, '2023-11-01 11:02:58', '2023-11-01 11:02:58'),
(4, 5, 12, 9, '2023-11-01 11:02:58', '2023-11-01 11:02:58'),
(5, 6, 2, 8, '2023-11-01 11:02:58', '2023-11-01 11:02:58');

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
