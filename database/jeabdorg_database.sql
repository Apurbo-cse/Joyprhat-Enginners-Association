-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2022 at 05:15 PM
-- Server version: 10.6.10-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeabdorg_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE `advisors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_parent` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `added_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devjeas`
--

CREATE TABLE `devjeas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devjeas`
--

INSERT INTO `devjeas` (`id`, `name`, `designation`, `job`, `job_location`, `phone`, `email`, `facebook`, `linkedin`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apurbo Kumar Anup', 'Software Engineer', 'TFP Solutions ( Bangladesh ) LTD.', 'Banani, Dhaka', '01732955937', 'apurboka@gmaul.com', 'https://www.facebook.com/apurbo.cse/', 'https://www.linkedin.com/in/apurbocse/', 'images/member/1652022983275663473_3095974180658785_8195691205065224661_n.jpg', '1', '2022-05-08 07:16:23', '2022-05-08 07:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `eternals`
--

CREATE TABLE `eternals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eternal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'President', 'Congrats', 'images/gallery/1652020664280362063_322703719995275_4078174744604050911_n.jpg', 'active', '2022-05-08 06:25:40', '2022-05-08 06:37:44'),
(2, 'Moment', 'Prize', 'images/gallery/1652020749280319507_322703056662008_930942695709014288_n.jpg', 'active', '2022-05-08 06:39:09', '2022-05-08 06:39:09'),
(3, 'Cover', 'Kasem Moydan', 'images/gallery/1652020796280377492_322703336661980_4890288190301116746_n.jpg', 'active', '2022-05-08 06:39:56', '2022-05-08 06:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_10_110611_create_categories_table', 1),
(6, '2022_03_29_115508_create_silders_table', 1),
(7, '2022_03_29_151508_create_sliders_table', 1),
(8, '2022_03_30_044025_create_galleries_table', 1),
(9, '2022_04_08_093703_create_thana_committees_table', 1),
(10, '2022_04_09_055059_create_thana_committee_types_table', 1),
(11, '2022_04_30_110641_create_posts_table', 1),
(12, '2022_04_30_110957_create_tags_table', 1),
(13, '2022_05_02_040928_create_members_table', 1),
(14, '2022_05_02_085115_create_p_members_table', 1),
(15, '2022_05_02_102251_create_s_members_table', 1),
(16, '2022_05_02_105227_create_v_p_members_table', 1),
(17, '2022_05_02_144856_create_eternals_table', 1),
(18, '2022_05_02_160225_create_services_table', 1),
(19, '2022_05_02_162223_create_advisors_table', 1),
(20, '2022_05_07_084705_create_devjeas_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` bigint(20) NOT NULL DEFAULT 0,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` timestamp NULL DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `description`, `image`, `view_count`, `is_featured`, `published_at`, `status`, `created_at`, `updated_at`) VALUES
(3, 'hfsdk jfsd', 'hfsdk-jfsd', 'jfh dk;jfed', '/tmp/php4u10rY', 0, 1, '2022-06-16 23:30:54', 'active', '2022-06-16 23:30:54', '2022-06-16 23:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p_members`
--

CREATE TABLE `p_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p_members`
--

INSERT INTO `p_members` (`id`, `name`, `designation`, `job`, `job_location`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Engr. S M Bappy Reza', 'CEO & Founder', 'Azaan Construction & Consultancy', 'Dhaka & Joypurhat', 'images/member/1652199437PNG.png', '1', '2022-05-10 08:17:17', '2022-05-10 08:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `info`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'refwe', 'f vdsfsd gf', 'images/member/16519927881651326497about1st_image.jpg', '1', '2022-05-07 22:53:08', '2022-05-07 22:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `silders`
--

CREATE TABLE `silders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'One year celebration', 'A bunch of engineers from Joypurhat who have been leading with reputation in different parts of Bangladesh and making Joypurhat famous. On Wednesday, May 4, 2022, the 2nd day of Eid, this engineering fair has been organized in Joypurhat Municipality (3rd floor).', 'active', 'images/slider/1652020450280377492_322703336661980_4890288190301116746_n.jpg', '2022-05-07 22:44:16', '2022-05-08 06:34:10'),
(2, '1st session of JEA', 'All', 'active', 'images/slider/1652021117244502459_3079460825713365_8802579549236846991_n.jpg', '2022-05-08 06:45:18', '2022-05-08 06:45:18'),
(3, 'Rally', 'content', 'active', 'images/slider/1652021234280353594_322703206661993_8151439030250751603_n.jpg', '2022-05-08 06:47:14', '2022-05-08 06:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `s_members`
--

CREATE TABLE `s_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thana_committees`
--

CREATE TABLE `thana_committees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thana_committees`
--

INSERT INTO `thana_committees` (`id`, `title`, `description`, `name`, `department`, `status`, `image`, `thana_type`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Mahadi Hasan Saon', 'Chief Member', '1', 'images/thana/1652199907Mahadi_Hasan_Saon-removebg-preview.png', 'Joypuraht Sadar', '2022-05-10 08:25:07', '2022-05-10 08:25:07'),
(2, NULL, NULL, 'Sofiur Rashid', 'Chief Member', '1', 'images/thana/1652199995_Sofiur_Rashid-removebg-preview.png', 'Joypuraht Sadar', '2022-05-10 08:26:35', '2022-05-10 08:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `thana_committee_types`
--

CREATE TABLE `thana_committee_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thana_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thana_committee_types`
--

INSERT INTO `thana_committee_types` (`id`, `thana_type`, `title`, `description`, `source`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Joypuraht Sadar', '23/05/2021 Publish', 'Joypurhat sadar thana', 'Kk', '1', '2022-05-10 08:21:08', '2022-05-10 08:21:08'),
(2, 'Joypuraht Sadar', 'dgds', 'ds dv', 'f sdf', '1', '2022-06-16 23:32:25', '2022-06-16 23:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diploma_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diploma_institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diploma_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diploma_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bsc_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bsc_institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bsc_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bsc_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msc_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msc_institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msc_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msc_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mba_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mba_institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mba_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mba_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `phone`, `user_type`, `email_verified_at`, `password`, `facebook`, `linkedin`, `description`, `image`, `course_name`, `course_subject`, `course_status`, `job_type`, `job_designation`, `job_work`, `hsc_group`, `hsc_institute`, `hsc_status`, `hsc_passing_year`, `diploma_subject`, `diploma_institute`, `diploma_status`, `diploma_passing_year`, `bsc_subject`, `bsc_institute`, `bsc_status`, `bsc_passing_year`, `msc_subject`, `msc_institute`, `msc_status`, `msc_passing_year`, `mba_subject`, `mba_institute`, `mba_status`, `mba_passing_year`, `father_name`, `mother_name`, `present_add`, `permanent_add`, `district`, `thana`, `nid`, `dob`, `gender`, `religion`, `blood`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. admin', NULL, 'apurboka@gmail.com', '01408137111', 'admin', NULL, '$2y$10$xOWfkY0mV1bp8cclFrOB6eKCReKgwruk3HSuhhKEpcrl8xSnfWDQy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '90dxVPGoUP5xcXRYvU0Htaedax5Fu20AFw25WSIQTR0QFSupweAriXu6QTWp', '2022-05-07 22:35:53', '2022-05-07 22:35:53'),
(5, 'Joti', 'Islsa', 'a@g.c', NULL, NULL, NULL, '$2y$10$RMw3hiCVmYXJIrsdLLjjvOGIGdpy7fS4HLcINTwBMgLJFsBn4wspu', NULL, NULL, NULL, NULL, 'BSc in Engineering', 'ghfdd', 'Complete', 'Govt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Male', 'Islam', 'A+', NULL, '2022-05-09 22:28:53', '2022-05-09 22:29:20'),
(6, 'Arafat', 'Hosain', 'a@g.com', NULL, NULL, NULL, '$2y$10$BHYbqib.4b//V.G3MTIweeI8MPV2aXzUXOZj8blRAyztIQPhBh4mm', NULL, NULL, NULL, 'images/user/Y5l4JfcnVy-1652189468.jpg', 'Diploma in Engineering', 'Sdd', 'Complete', 'Govt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Male', 'Islam', 'A+', NULL, '2022-05-10 05:29:43', '2022-05-10 05:31:08'),
(7, 'Apurbo Kumar', 'Anup', 'apurbo@gmail.com', '01732957865654', NULL, NULL, '$2y$10$TicRUlo56s/ZI7rk2z5QnObyN617BYtg/f6YMNOxEAExX5H3bl1Te', 'https://www.facebook.com/apurbo.cse', 'https://www.facebook.com/apurbo.cse', 'g fdgfd hdfh fh d', 'images/user/rQl8j1Q0Hk-1652198073.jpg', 'BSc in Engineering', 'Computer Science & Engineering', 'Complete', 'Company', 'Software Engineer', 'TFP Solutions ( Bnagladesh) LTD, Banani, Dhaka', 'jgdfsJDLG F', 'SD FDSG ZDFG', NULL, NULL, 'G FDG FDG', 'G FDG DFG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunil', 'Nibha', 'fcbc', 'Kendul', NULL, 'Joypurhat Sadar', NULL, NULL, 'Male', 'Hindusim', 'A+', NULL, '2022-05-10 07:47:18', '2022-05-10 07:55:20'),
(8, 'S M', 'Bappy Reza', 'bappyreza16@gmail.com', '01738426929', NULL, NULL, '$2y$10$bTyVAwPowwyFFZbG6gggcuijQTenqV9qDcuuWirv6LEw2orrFz2B2', 'https://www.facebook.com/bappy.reza.10/', NULL, NULL, 'images/user/d1cLtsosui-1652198957.png', 'BSc in Engineering (Diploma)', 'Civil Engineering', 'Complete', 'Govt', 'CEO', 'Dhaka/ Joypurhat', NULL, NULL, NULL, NULL, 'Na', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Md. Nazrul Islam', 'Most. Beauty Beagum', '297/E, R-01, Adabar, Dhaka', 'Harail, Muslimnagar, Joypurhat', NULL, 'Joypurhat Sadar', NULL, NULL, 'Male', 'Islam', 'O+', NULL, '2022-05-10 08:03:16', '2022-05-10 08:09:25'),
(9, 'rfsd', 'sadfsadfas', 'a@gmail.com', NULL, NULL, NULL, '$2y$10$Bb2iuz87QeBhFKNMRPWmUu/wH9Q5nD2NDVx2AhhEKRLsJCGIIwIry', NULL, NULL, NULL, 'images/user/TkKlbcAadK-1654088188.png', 'BSc in Engineering', 'sdfsdfsd', 'Running', 'Govt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Male', 'Islam', 'A+', NULL, '2022-06-01 04:55:56', '2022-06-01 04:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `v_p_members`
--

CREATE TABLE `v_p_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `v_p_members`
--

INSERT INTO `v_p_members` (`id`, `name`, `designation`, `job`, `job_location`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'S SM', 'f sdf', 'fddsf', 'asfas', 'images/member/16521639571651322416about2.jpg', '1', '2022-05-09 22:25:57', '2022-05-09 22:25:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisors`
--
ALTER TABLE `advisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_added_by_foreign` (`added_by`);

--
-- Indexes for table `devjeas`
--
ALTER TABLE `devjeas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eternals`
--
ALTER TABLE `eternals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
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
  ADD UNIQUE KEY `posts_title_unique` (`title`);

--
-- Indexes for table `p_members`
--
ALTER TABLE `p_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `silders`
--
ALTER TABLE `silders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_members`
--
ALTER TABLE `s_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `thana_committees`
--
ALTER TABLE `thana_committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thana_committee_types`
--
ALTER TABLE `thana_committee_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `v_p_members`
--
ALTER TABLE `v_p_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisors`
--
ALTER TABLE `advisors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `devjeas`
--
ALTER TABLE `devjeas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eternals`
--
ALTER TABLE `eternals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p_members`
--
ALTER TABLE `p_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `silders`
--
ALTER TABLE `silders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `s_members`
--
ALTER TABLE `s_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thana_committees`
--
ALTER TABLE `thana_committees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thana_committee_types`
--
ALTER TABLE `thana_committee_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `v_p_members`
--
ALTER TABLE `v_p_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
