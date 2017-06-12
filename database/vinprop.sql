-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 03:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinprop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(2, NULL, 1, 'Category 2', 'category-2', '2017-05-04 06:34:17', '2017-05-04 06:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(2, 1, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '', 2),
(3, 1, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, '', 3),
(4, 1, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '', 4),
(5, 1, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 5),
(6, 1, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '', 6),
(7, 1, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '\n{\n    \"resize\": {\n        \"width\": \"1000\",\n        \"height\": \"null\"\n    },\n    \"quality\": \"70%\",\n    \"upsize\": true,\n    \"thumbnails\": [\n        {\n            \"name\": \"medium\",\n            \"scale\": \"50%\"\n        },\n        {\n            \"name\": \"small\",\n            \"scale\": \"25%\"\n        },\n        {\n            \"name\": \"cropped\",\n            \"crop\": {\n                \"width\": \"300\",\n                \"height\": \"250\"\n            }\n        }\n    ]\n}', 7),
(8, 1, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '\n{\n    \"slugify\": {\n        \"origin\": \"title\",\n        \"forceUpdate\": true\n    }\n}', 8),
(9, 1, 'meta_description', 'text_area', 'meta_description', 1, 0, 1, 1, 1, 1, '', 9),
(10, 1, 'meta_keywords', 'text_area', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 10),
(11, 1, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '\n{\n    \"default\": \"DRAFT\",\n    \"options\": {\n        \"PUBLISHED\": \"published\",\n        \"DRAFT\": \"draft\",\n        \"PENDING\": \"pending\"\n    }\n}', 11),
(12, 1, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 12),
(13, 1, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 13),
(14, 2, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(15, 2, 'author_id', 'text', 'author_id', 1, 0, 0, 0, 0, 0, '', 2),
(16, 2, 'title', 'text', 'title', 1, 1, 1, 1, 1, 1, '', 3),
(17, 2, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 4),
(18, 2, 'body', 'rich_text_box', 'body', 1, 0, 1, 1, 1, 1, '', 5),
(19, 2, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"}}', 6),
(20, 2, 'meta_description', 'text', 'meta_description', 1, 0, 1, 1, 1, 1, '', 7),
(21, 2, 'meta_keywords', 'text', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 8),
(22, 2, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(23, 2, 'created_at', 'timestamp', 'created_at', 1, 1, 1, 0, 0, 0, '', 10),
(24, 2, 'updated_at', 'timestamp', 'updated_at', 1, 0, 0, 0, 0, 0, '', 11),
(25, 2, 'image', 'image', 'image', 0, 1, 1, 1, 1, 1, '', 12),
(26, 3, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(27, 3, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
(28, 3, 'email', 'text', 'email', 1, 1, 1, 1, 1, 1, '', 3),
(29, 3, 'password', 'password', 'password', 1, 0, 0, 1, 1, 0, '', 4),
(30, 3, 'remember_token', 'text', 'remember_token', 0, 0, 0, 0, 0, 0, '', 5),
(31, 3, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 6),
(32, 3, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 7),
(33, 3, 'avatar', 'image', 'avatar', 0, 1, 1, 1, 1, 1, '', 8),
(34, 5, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(35, 5, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
(36, 5, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
(37, 5, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
(38, 4, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(39, 4, 'parent_id', 'select_dropdown', 'parent_id', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(40, 4, 'order', 'text', 'order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(41, 4, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 4),
(42, 4, 'slug', 'text', 'slug', 1, 1, 1, 1, 1, 1, '', 5),
(43, 4, 'created_at', 'timestamp', 'created_at', 0, 0, 1, 0, 0, 0, '', 6),
(44, 4, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 7),
(45, 6, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(46, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(47, 6, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
(48, 6, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
(49, 6, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(50, 1, 'seo_title', 'text', 'seo_title', 0, 1, 1, 1, 1, 1, '', 14),
(51, 1, 'featured', 'checkbox', 'featured', 1, 1, 1, 1, 1, 1, '', 15),
(52, 3, 'role_id', 'text', 'role_id', 1, 1, 1, 1, 1, 1, '', 9),
(53, 7, 'location_id', 'checkbox', 'Location Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(54, 7, 'location_name', 'text', 'Location Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(55, 7, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, NULL, 3),
(56, 7, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, NULL, 4),
(57, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 5),
(58, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
(79, 9, 'prop_id', 'checkbox', 'Prop Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(80, 9, 'prop_name', 'text', 'Prop Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(81, 9, 'prop_type_id', 'text', 'Prop Type Id', 0, 1, 1, 1, 1, 1, NULL, 3),
(82, 9, 'prop_address', 'text', 'Prop Address', 0, 1, 1, 1, 1, 1, NULL, 4),
(83, 9, 'prop_location_id', 'text', 'Prop Location Id', 0, 1, 1, 1, 1, 1, NULL, 5),
(84, 9, 'prop_bedroom', 'text', 'Prop Bedroom', 0, 1, 1, 1, 1, 1, NULL, 6),
(85, 9, 'prop_bathroom', 'text', 'Prop Bathroom', 0, 1, 1, 1, 1, 1, NULL, 7),
(86, 9, 'prop_maids_room', 'text', 'Prop Maids Room', 0, 1, 1, 1, 1, 1, NULL, 8),
(87, 9, 'prop_floor', 'text', 'Prop Floor', 0, 1, 1, 1, 1, 1, NULL, 9),
(88, 9, 'prop_phone_lines', 'text', 'Prop Phone Lines', 0, 1, 1, 1, 1, 1, NULL, 10),
(89, 9, 'prop_direction_id', 'text', 'Prop Direction Id', 0, 1, 1, 1, 1, 1, NULL, 11),
(90, 9, 'prop_water_src_id', 'text', 'Prop Water Src Id', 0, 1, 1, 1, 1, 1, NULL, 12),
(91, 9, 'prop_price', 'text', 'Prop Price', 0, 1, 1, 1, 1, 1, NULL, 13),
(92, 9, 'prop_fee', 'text', 'Prop Fee', 0, 1, 1, 1, 1, 1, NULL, 14),
(93, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 15),
(94, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 16),
(95, 9, 'expired_at', 'timestamp', 'Expired At', 0, 1, 1, 1, 1, 1, NULL, 17),
(96, 9, 'prop_electricity', 'text', 'Prop Electricity', 0, 1, 1, 1, 1, 1, NULL, 18),
(97, 9, 'prop_certificate', 'text', 'Prop Certificate', 0, 1, 1, 1, 1, 1, NULL, 19),
(98, 9, 'prop_surafce_area', 'text', 'Prop Surafce Area', 0, 1, 1, 1, 1, 1, NULL, 20),
(99, 9, 'prop_building_area', 'text', 'Prop Building Area', 0, 1, 1, 1, 1, 1, NULL, 21),
(100, 9, 'prop_owner_name', 'text', 'Prop Owner Name', 0, 1, 1, 1, 1, 1, NULL, 22),
(101, 9, 'prop_owner_contact', 'text', 'Prop Owner Contact', 0, 1, 1, 1, 1, 1, NULL, 23),
(102, 10, 'list_type_id', 'checkbox', 'List Type Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(103, 10, 'list_type_name', 'text', 'List Type Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(104, 10, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, NULL, 3),
(105, 10, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, NULL, 4),
(106, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 5),
(107, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
(108, 11, 'prop_type_id', 'checkbox', 'Prop Type Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(109, 11, 'prop_type_name', 'text', 'Prop Type Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(110, 11, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, NULL, 3),
(111, 11, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, NULL, 4),
(112, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 5),
(113, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
(114, 12, 'water_src_id', 'text', 'Water Src Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(115, 12, 'water_src_name', 'text', 'Water Src Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(116, 12, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, NULL, 3),
(117, 12, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, NULL, 4),
(118, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 5),
(119, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `controller`, `description`, `generate_permissions`, `server_side`, `created_at`, `updated_at`) VALUES
(1, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', '', '', 1, 0, '2017-05-04 06:34:16', '2017-05-04 06:34:16'),
(2, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', '', '', 1, 0, '2017-05-04 06:34:16', '2017-05-04 06:34:16'),
(3, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', '', '', 1, 0, '2017-05-04 06:34:16', '2017-05-04 06:34:16'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', '', '', 1, 0, '2017-05-04 06:34:16', '2017-05-04 06:34:16'),
(5, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', '', '', 1, 0, '2017-05-04 06:34:16', '2017-05-04 06:34:16'),
(6, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', '', '', 1, 0, '2017-05-04 06:34:16', '2017-05-04 06:34:16'),
(7, 'locations', 'locations', 'Location', 'Locations', NULL, 'App\\Location', NULL, NULL, 1, 0, '2017-05-18 10:01:59', '2017-05-18 10:01:59'),
(9, 'properties', 'properties', 'Property', 'Properties', NULL, 'App\\Property', NULL, NULL, 1, 0, '2017-05-20 10:29:26', '2017-05-20 10:29:26'),
(10, 'list_types', 'list-types', 'List Type', 'List Types', NULL, 'App\\ListType', NULL, NULL, 1, 0, '2017-05-22 09:48:06', '2017-05-22 09:48:06'),
(11, 'property_types', 'property-types', 'Property Type', 'Property Types', NULL, 'App\\PropertyType', NULL, NULL, 1, 0, '2017-05-22 09:52:51', '2017-05-22 09:52:51'),
(12, 'water_sources', 'water-sources', 'Water Source', 'Water Sources', NULL, 'App\\WaterSource', NULL, NULL, 1, 0, '2017-06-08 10:48:51', '2017-06-08 10:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `list_types`
--

CREATE TABLE `list_types` (
  `list_type_id` int(10) UNSIGNED NOT NULL,
  `list_type_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_types`
--

INSERT INTO `list_types` (`list_type_id`, `list_type_name`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jual', 1, 1, '2017-05-22 09:55:32', '2017-05-22 09:55:32'),
(2, 'Sewa', 1, 1, '2017-05-22 09:56:12', '2017-05-22 09:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(10) UNSIGNED NOT NULL,
  `location_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location_name`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tangerang', NULL, 0, '2017-05-18 10:15:33', '2017-05-18 10:15:33'),
(2, 'Serpong', NULL, 1, '2017-05-18 10:16:21', '2017-05-18 10:16:21'),
(3, 'BSD', NULL, 1, '2017-05-18 10:16:39', '2017-05-18 10:16:39'),
(4, 'Alam Sutra', NULL, 0, '2017-05-18 10:17:35', '2017-05-18 10:17:35'),
(5, 'Bintaro', 0, 1, '2017-05-20 10:30:24', '2017-05-20 10:30:24'),
(6, 'Bekasi', NULL, 1, '2017-05-20 10:31:56', '2017-05-20 10:31:56'),
(7, 'Gading Serpong', NULL, 1, '2017-05-20 10:32:22', '2017-05-20 10:32:22'),
(8, 'Karawaci', NULL, 1, '2017-05-20 10:32:58', '2017-05-20 10:32:58'),
(9, 'Jakarta', NULL, 1, '2017-05-20 10:33:15', '2017-05-20 10:33:15'),
(10, 'Parung', NULL, 1, '2017-05-20 10:33:30', '2017-05-20 10:33:30'),
(11, 'Melati Mas', NULL, 1, '2017-05-20 10:36:59', '2017-05-20 10:36:59'),
(12, 'Residence 1', NULL, 1, '2017-05-20 10:37:17', '2017-05-20 10:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(2, 'vinprop_menu', '2017-05-18 08:06:35', '2017-05-18 08:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '/admin', '_self', 'voyager-boat', NULL, NULL, 1, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(2, 1, 'Media', '/admin/media', '_self', 'voyager-images', NULL, NULL, 5, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(3, 1, 'Posts', '/admin/posts', '_self', 'voyager-news', NULL, NULL, 6, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(4, 1, 'Users', '/admin/users', '_self', 'voyager-person', NULL, NULL, 3, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(5, 1, 'Categories', '/admin/categories', '_self', 'voyager-categories', NULL, NULL, 8, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(6, 1, 'Pages', '/admin/pages', '_self', 'voyager-file-text', NULL, NULL, 7, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(7, 1, 'Roles', '/admin/roles', '_self', 'voyager-lock', NULL, NULL, 2, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(8, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(9, 1, 'Menu Builder', '/admin/menus', '_self', 'voyager-list', NULL, 8, 10, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(10, 1, 'Database', '/admin/database', '_self', 'voyager-data', NULL, 8, 11, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(11, 1, 'Settings', '/admin/settings', '_self', 'voyager-settings', NULL, NULL, 12, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL, NULL),
(12, 2, 'Property List', '/property_list', '_self', NULL, '#000000', NULL, 1, '2017-05-18 08:18:23', '2017-05-18 08:48:53', NULL, ''),
(13, 2, 'Tools', '/tools', '_self', NULL, '#000000', NULL, 3, '2017-05-18 08:19:33', '2017-05-18 08:23:33', NULL, ''),
(14, 2, 'Report', '/report', '_self', NULL, '#000000', NULL, 2, '2017-05-18 08:19:53', '2017-05-18 08:23:33', NULL, ''),
(15, 2, 'List Type', '/tools/list_type', '_self', NULL, '#000000', 13, 1, '2017-05-18 08:26:03', '2017-05-18 08:28:13', NULL, ''),
(16, 2, 'Property Type', '/tools/property_type', '_self', NULL, '#000000', 13, 2, '2017-05-18 08:26:48', '2017-05-18 08:28:13', NULL, ''),
(17, 2, 'Location', '/tools/location', '_self', NULL, '#000000', 13, 3, '2017-05-18 08:27:16', '2017-05-18 08:28:10', NULL, '');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_add_permission_group_id_to_permissions_table', 1),
(17, '2017_01_15_000000_create_permission_groups_table', 1),
(18, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(19, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(20, '2017_04_21_000000_add_order_to_data_rows_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/AAgCCnqHfLlRub9syUdw.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2017-05-04 06:34:17', '2017-05-04 06:34:17');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`, `permission_group_id`) VALUES
(1, 'browse_admin', NULL, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(2, 'browse_database', NULL, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(3, 'browse_media', NULL, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(4, 'browse_settings', NULL, '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(5, 'browse_menus', 'menus', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(6, 'read_menus', 'menus', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(7, 'edit_menus', 'menus', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(8, 'add_menus', 'menus', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(9, 'delete_menus', 'menus', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(10, 'browse_pages', 'pages', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(11, 'read_pages', 'pages', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(12, 'edit_pages', 'pages', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(13, 'add_pages', 'pages', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(14, 'delete_pages', 'pages', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(15, 'browse_roles', 'roles', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(16, 'read_roles', 'roles', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(17, 'edit_roles', 'roles', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(18, 'add_roles', 'roles', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(19, 'delete_roles', 'roles', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(20, 'browse_users', 'users', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(21, 'read_users', 'users', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(22, 'edit_users', 'users', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(23, 'add_users', 'users', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(24, 'delete_users', 'users', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(25, 'browse_posts', 'posts', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(26, 'read_posts', 'posts', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(27, 'edit_posts', 'posts', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(28, 'add_posts', 'posts', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(29, 'delete_posts', 'posts', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(30, 'browse_categories', 'categories', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(31, 'read_categories', 'categories', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(32, 'edit_categories', 'categories', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(33, 'add_categories', 'categories', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(34, 'delete_categories', 'categories', '2017-05-04 06:34:17', '2017-05-04 06:34:17', NULL),
(35, 'browse_locations', 'locations', '2017-05-18 10:01:59', '2017-05-18 10:01:59', NULL),
(36, 'read_locations', 'locations', '2017-05-18 10:01:59', '2017-05-18 10:01:59', NULL),
(37, 'edit_locations', 'locations', '2017-05-18 10:01:59', '2017-05-18 10:01:59', NULL),
(38, 'add_locations', 'locations', '2017-05-18 10:01:59', '2017-05-18 10:01:59', NULL),
(39, 'delete_locations', 'locations', '2017-05-18 10:01:59', '2017-05-18 10:01:59', NULL),
(45, 'browse_properties', 'properties', '2017-05-20 10:29:26', '2017-05-20 10:29:26', NULL),
(46, 'read_properties', 'properties', '2017-05-20 10:29:26', '2017-05-20 10:29:26', NULL),
(47, 'edit_properties', 'properties', '2017-05-20 10:29:26', '2017-05-20 10:29:26', NULL),
(48, 'add_properties', 'properties', '2017-05-20 10:29:26', '2017-05-20 10:29:26', NULL),
(49, 'delete_properties', 'properties', '2017-05-20 10:29:26', '2017-05-20 10:29:26', NULL),
(50, 'browse_list_types', 'list_types', '2017-05-22 09:48:06', '2017-05-22 09:48:06', NULL),
(51, 'read_list_types', 'list_types', '2017-05-22 09:48:06', '2017-05-22 09:48:06', NULL),
(52, 'edit_list_types', 'list_types', '2017-05-22 09:48:06', '2017-05-22 09:48:06', NULL),
(53, 'add_list_types', 'list_types', '2017-05-22 09:48:06', '2017-05-22 09:48:06', NULL),
(54, 'delete_list_types', 'list_types', '2017-05-22 09:48:06', '2017-05-22 09:48:06', NULL),
(55, 'browse_property_types', 'property_types', '2017-05-22 09:52:51', '2017-05-22 09:52:51', NULL),
(56, 'read_property_types', 'property_types', '2017-05-22 09:52:51', '2017-05-22 09:52:51', NULL),
(57, 'edit_property_types', 'property_types', '2017-05-22 09:52:51', '2017-05-22 09:52:51', NULL),
(58, 'add_property_types', 'property_types', '2017-05-22 09:52:51', '2017-05-22 09:52:51', NULL),
(59, 'delete_property_types', 'property_types', '2017-05-22 09:52:51', '2017-05-22 09:52:51', NULL),
(60, 'browse_water_sources', 'water_sources', '2017-06-08 10:48:51', '2017-06-08 10:48:51', NULL),
(61, 'read_water_sources', 'water_sources', '2017-06-08 10:48:51', '2017-06-08 10:48:51', NULL),
(62, 'edit_water_sources', 'water_sources', '2017-06-08 10:48:51', '2017-06-08 10:48:51', NULL),
(63, 'add_water_sources', 'water_sources', '2017-06-08 10:48:51', '2017-06-08 10:48:51', NULL),
(64, 'delete_water_sources', 'water_sources', '2017-06-08 10:48:51', '2017-06-08 10:48:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
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
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/nlje9NZQ7bTMYOUG4lF1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/7uelXHi85YOfZKsoS6Tq.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/9txUSY6wb7LTBSbDPrD9.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/yuk1fBwmKKZdY2qR1ZKM.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2017-05-04 06:34:17', '2017-05-04 06:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `prop_id` int(10) UNSIGNED NOT NULL,
  `prop_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prop_list_type_id` int(11) DEFAULT NULL,
  `prop_type_id` int(11) DEFAULT NULL,
  `prop_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prop_location_id` int(11) DEFAULT NULL,
  `prop_bedroom` int(11) DEFAULT NULL,
  `prop_bathroom` int(11) DEFAULT NULL,
  `prop_maids_room` int(11) DEFAULT NULL,
  `prop_floor` int(11) DEFAULT NULL,
  `prop_phone_lines` int(11) DEFAULT NULL,
  `prop_electricity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prop_direction_id` int(11) DEFAULT NULL,
  `prop_water_src_id` int(11) DEFAULT NULL,
  `prop_surface_area` int(11) DEFAULT NULL,
  `prop_building_area` int(11) DEFAULT NULL,
  `prop_certificate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prop_price` bigint(20) DEFAULT NULL,
  `prop_fee` int(11) DEFAULT NULL,
  `prop_user_id` int(11) DEFAULT NULL,
  `prop_owner_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prop_owner_contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prop_notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `prop_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`prop_id`, `prop_name`, `prop_list_type_id`, `prop_type_id`, `prop_address`, `prop_location_id`, `prop_bedroom`, `prop_bathroom`, `prop_maids_room`, `prop_floor`, `prop_phone_lines`, `prop_electricity`, `prop_direction_id`, `prop_water_src_id`, `prop_surface_area`, `prop_building_area`, `prop_certificate`, `prop_price`, `prop_fee`, `prop_user_id`, `prop_owner_name`, `prop_owner_contact`, `prop_notes`, `prop_image`, `status`, `created_at`, `updated_at`, `expired_at`) VALUES
(1, 'Avani Cluster Nitaya Blok A7 No. 8', 1, 1, 'Avani Cluster Nitaya Blok A7 No. 8', 1, 3, 2, 0, 1, 1, '2200', NULL, 1, 112, 80, NULL, NULL, NULL, 1, 'Antonius', '08129921881', NULL, NULL, NULL, '2017-05-21 10:09:21', '2017-05-21 10:09:21', NULL),
(2, 'De Maja Blok E 20 No. 8 Depark', 2, 1, 'Episode 351.mp4', 1, 5, 6, 0, 2, 1, NULL, NULL, 1, 480, 310, 'PPJB', 8250000000, NULL, 1, 'Ivan Khoe', '08129921881', NULL, NULL, NULL, '2017-05-22 08:52:11', '2017-05-22 08:52:11', NULL),
(3, 'Delatinos Brazillian Flamingo Blok D3 No. 16', 1, 1, 'Delatinos Brazillian Flamingo Blok D3 No. 16', 3, 3, 2, 0, 2, 0, '2200', NULL, 1, 112, 100, 'SHM', 1400000000, 2, 2, 'Ricky Salim', NULL, NULL, NULL, NULL, '2017-06-04 07:54:46', '2017-06-04 07:54:46', NULL),
(4, 'Delatinos Buenos Aires Blok I 2 No. 11', 2, 1, 'Delatinos Buenos Aires Blok I 2 No. 11', 3, 5, 6, 0, 1, 0, NULL, NULL, 1, 297, 360, NULL, 4800000000, 2, 2, 'Ninik', NULL, 'Kontak owner sementara belum tersedia', NULL, NULL, '2017-06-04 08:37:28', '2017-06-04 08:37:28', '2017-06-29 17:00:00'),
(5, 'Test', 1, 2, 'test 123', 6, 3, 0, 0, 1, 0, '1100', NULL, 1, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, '/Applications/XAMPP/xamppfiles/htdocs/vinprop/public/images/properties/Test.jpg', NULL, '2017-06-06 08:32:04', '2017-06-06 08:32:04', '2017-06-05 17:00:00'),
(6, 'Test 2', 2, 3, 'Karawaci Raya', 8, 6, 4, 5, 3, 2, '1000', NULL, 1, 100, 80, 'SHM', 1500500500500, 5, 2, 'Yudi', '085640037667', 'Jangan dijual dulu', NULL, NULL, '2017-06-06 08:42:57', '2017-06-06 08:42:57', '2017-06-09 17:00:00'),
(7, 'Test 3', 1, 4, 'Parung Besar II', 10, 0, 0, 0, 1, 0, '5000', NULL, 1, 200, 100, 'SHM', 100000000, 2, 2, 'Alien', '081325780832', NULL, '/images/properties/Test 3.jpg', 1, '2017-06-06 08:48:16', '2017-06-06 08:48:16', '2017-06-22 17:00:00'),
(10, 'test yang terbaru', 2, 1, 'Melati mas raya 123', 11, 3, 1, 2, 1, 1, '1300', NULL, 1, 100, 80, 'SHM', 200000000, 2, 2, 'Shiody', '08122532456', 'belum laku-laku', '/images/properties/test yang terbaru.jpg', 1, '2017-06-08 10:31:06', '2017-06-08 11:07:02', '2017-06-29 17:00:00'),
(8, 'test444', 1, 2, 'test alamat', 12, 0, 0, 0, 1, 0, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, '/images/properties/test444.jpg', 1, '2017-06-07 10:08:22', '2017-06-07 10:08:22', '2017-06-06 17:00:00'),
(9, 'test555', 2, 6, 'Jl Tebet Barat Dalam Raya IX no 82', 9, 2, 3, 4, 2, 3, '1200', NULL, 2, 123, 88, 'PPJB', 5000000000, 1, 2, 'Ari Royces', '081223344556', 'Bangunan bagus buat usaha', '/images/properties/test555.jpg', 1, '2017-06-07 10:10:06', '2017-06-08 11:07:23', '2017-06-07 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `prop_type_id` int(10) UNSIGNED NOT NULL,
  `prop_type_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`prop_type_id`, `prop_type_name`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rumah', 1, 1, '2017-05-22 09:58:12', '2017-05-22 09:58:12'),
(2, 'Apartemen', 1, 1, '2017-05-22 09:58:32', '2017-05-22 09:58:32'),
(3, 'Kios', 1, 1, '2017-05-22 09:58:53', '2017-05-22 09:58:53'),
(4, 'Gudang', 1, 1, '2017-05-22 09:59:10', '2017-05-22 09:59:10'),
(5, 'Kavling', 1, 1, '2017-05-22 09:59:33', '2017-05-22 09:59:33'),
(6, 'Ruko', 1, 1, '2017-05-22 09:59:48', '2017-05-22 09:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(2, 'user', 'Normal User', '2017-05-04 06:34:17', '2017-05-04 06:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`) VALUES
(1, 'title', 'Site Title', 'Site Title', '', 'text', 1),
(2, 'description', 'Site Description', 'Site Description', '', 'text', 2),
(3, 'logo', 'Site Logo', '', '', 'image', 3),
(4, 'admin_bg_image', 'Admin Background Image', '', '', 'image', 9),
(5, 'admin_title', 'Admin Title', 'Voyager', '', 'text', 4),
(6, 'admin_description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 5),
(7, 'admin_loader', 'Admin Loader', '', '', 'image', 6),
(8, 'admin_icon_image', 'Admin Icon Image', '', '', 'image', 7),
(9, 'google_analytics_client_id', 'Google Analytics Client ID', '', '', 'text', 9);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 1, 'pt', 'Post', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(2, 'data_types', 'display_name_singular', 2, 'pt', 'Página', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(3, 'data_types', 'display_name_singular', 3, 'pt', 'Utilizador', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(5, 'data_types', 'display_name_singular', 5, 'pt', 'Menu', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(6, 'data_types', 'display_name_singular', 6, 'pt', 'Função', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(7, 'data_types', 'display_name_plural', 1, 'pt', 'Posts', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(8, 'data_types', 'display_name_plural', 2, 'pt', 'Páginas', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(9, 'data_types', 'display_name_plural', 3, 'pt', 'Utilizadores', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(11, 'data_types', 'display_name_plural', 5, 'pt', 'Menus', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(12, 'data_types', 'display_name_plural', 6, 'pt', 'Funções', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(13, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(14, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(15, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(16, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(17, 'menu_items', 'title', 2, 'pt', 'Media', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(18, 'menu_items', 'title', 3, 'pt', 'Publicações', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(19, 'menu_items', 'title', 4, 'pt', 'Utilizadores', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(20, 'menu_items', 'title', 5, 'pt', 'Categorias', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(21, 'menu_items', 'title', 6, 'pt', 'Páginas', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(22, 'menu_items', 'title', 7, 'pt', 'Funções', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(23, 'menu_items', 'title', 8, 'pt', 'Ferramentas', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(24, 'menu_items', 'title', 9, 'pt', 'Menus', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(25, 'menu_items', 'title', 10, 'pt', 'Base de dados', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(26, 'menu_items', 'title', 11, 'pt', 'Configurações', '2017-05-04 06:34:17', '2017-05-04 06:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', '$2y$10$az8LxLeUPjPmx2HcQSTv3uaDR.RkQ5XJcUgX4eocA.bDcQV8rY3py', '9Y3cXZBnAMXg8UQWaEHuNVBPO3PK9FZs55MofxDyBJbbQTJBZsVx9J40nYfa', 'users/default.png', '2017-05-04 06:34:17', '2017-05-04 06:34:17'),
(2, 2, 'User', 'user@user.com', '$2y$10$neyMJORuBAjlpCP5OO9q8.clDnXGrg7y7SovVX1Y/T7agXMhCfhre', '7EL3DyrKYZ4MOC3pK2ZfqGrxfyVxiM2iIjcc8GMs3QSemwYDbI1qfTdpZBzh', 'users/default.png', '2017-05-10 06:45:45', '2017-05-10 06:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `water_sources`
--

CREATE TABLE `water_sources` (
  `water_src_id` int(10) UNSIGNED NOT NULL,
  `water_src_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `water_sources`
--

INSERT INTO `water_sources` (`water_src_id`, `water_src_name`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PAM', 1, 1, '2017-06-08 10:54:19', '2017-06-08 10:54:19'),
(2, 'Sumur', 1, 1, '2017-06-08 10:54:53', '2017-06-08 10:54:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

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
-- Indexes for table `list_types`
--
ALTER TABLE `list_types`
  ADD PRIMARY KEY (`list_type_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

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
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_groups_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`prop_name`),
  ADD KEY `prop_id` (`prop_id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`prop_type_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `water_sources`
--
ALTER TABLE `water_sources`
  ADD PRIMARY KEY (`water_src_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `list_types`
--
ALTER TABLE `list_types`
  MODIFY `list_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `prop_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `prop_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `water_sources`
--
ALTER TABLE `water_sources`
  MODIFY `water_src_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
