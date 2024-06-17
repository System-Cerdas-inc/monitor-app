-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 04:07 PM
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
-- Database: `p_webman`
--

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
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_09_064224_create_user_profiles_table', 1),
(5, '2021_11_11_110731_create_permission_tables', 1),
(6, '2021_11_16_114009_create_media_table', 1),
(7, '2023_09_25_124447_create_opds_table', 1),
(8, '2023_09_25_150608_create_uptds_table', 1),
(9, '2023_09_29_072147_create_sites_table', 1),
(10, '2023_11_03_081410_create_monitorings_table', 1),
(11, '2023_11_17_034852_create_validasis_table', 1),
(12, '2023_11_23_062855_create_laporans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 22),
(3, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 28),
(3, 'App\\Models\\User', 29),
(3, 'App\\Models\\User', 30),
(3, 'App\\Models\\User', 31),
(3, 'App\\Models\\User', 32),
(3, 'App\\Models\\User', 33),
(3, 'App\\Models\\User', 34),
(3, 'App\\Models\\User', 35),
(3, 'App\\Models\\User', 36),
(3, 'App\\Models\\User', 37),
(3, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 39),
(3, 'App\\Models\\User', 40),
(3, 'App\\Models\\User', 41),
(3, 'App\\Models\\User', 42),
(3, 'App\\Models\\User', 43);

-- --------------------------------------------------------

--
-- Table structure for table `monitorings`
--

CREATE TABLE `monitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `site_id` bigint(20) UNSIGNED NOT NULL,
  `kondisi` enum('Normal','Error') NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opds`
--

CREATE TABLE `opds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_opd` varchar(255) NOT NULL,
  `alias_opd` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `secondemail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opds`
--

INSERT INTO `opds` (`id`, `nama_opd`, `alias_opd`, `alamat`, `email`, `secondemail`, `created_at`, `updated_at`) VALUES
(1, 'Pemerintah Provinsi Banten', 'Pemprov Banten', 'Jl. Syeh Nawawi Al-Bantani, KP3B, Curug, Kota Serang', 'admin@bantenprov.go.id', 'bantenprov@gmail.com', '2024-01-11 21:19:00', '2024-01-11 21:19:00'),
(2, 'Dinas Pendidikan dan Kebudayaan', 'Dindikbud', 'Jl. Syeh Nawawi Al-Bantani, KP3B, Curug, Kota Serang', 'dindikbud@bantenprov.go.id', 'dindikbudbanten@gmail.com', '2024-01-11 21:19:27', '2024-01-11 21:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `title`, `guard_name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'role', 'Role', 'web', NULL, '2024-01-11 21:01:45', '2024-01-11 21:01:45'),
(2, 'role-add', 'Role Add', 'web', 1, '2024-01-11 21:01:45', '2024-01-11 21:01:45'),
(3, 'role-list', 'Role List', 'web', 1, '2024-01-11 21:01:45', '2024-01-11 21:01:45'),
(4, 'permission', 'Permission', 'web', NULL, '2024-01-11 21:01:45', '2024-01-11 21:01:45'),
(5, 'permission-add', 'Permission Add', 'web', 4, '2024-01-11 21:01:45', '2024-01-11 21:01:45'),
(6, 'permission-list', 'Permission List', 'web', 4, '2024-01-11 21:01:45', '2024-01-11 21:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `title`, `guard_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'web', 1, '2024-01-11 21:01:45', '2024-01-11 21:01:45'),
(2, 'demo_admin', 'Demo Admin', 'web', 1, '2024-01-11 21:01:45', '2024-01-11 21:01:45'),
(3, 'user', 'User', 'web', 1, '2024-01-11 21:01:45', '2024-01-11 21:01:45');

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
(4, 1),
(5, 1),
(6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opd_id` bigint(20) UNSIGNED NOT NULL,
  `uptd_id` bigint(20) UNSIGNED DEFAULT NULL,
  `domain` varchar(255) NOT NULL,
  `status` enum('Aktif','Suspend','Tidak Aktif') NOT NULL,
  `jenis` enum('Aplikasi','Website') NOT NULL,
  `lokasi_server` enum('Diskominfo','Diluar') NOT NULL,
  `sumber_dana` enum('APBD','Non-APBD') NOT NULL,
  `tahun` enum('2016','2017','2018','2019','2020','2021','2022','2023') NOT NULL,
  `deskripsi` text NOT NULL,
  `kak` varchar(255) NOT NULL,
  `probis` varchar(255) NOT NULL,
  `manual_book` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `opd_id`, `uptd_id`, `domain`, `status`, `jenis`, `lokasi_server`, `sumber_dana`, `tahun`, `deskripsi`, `kak`, `probis`, `manual_book`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'bantenprov.go.id', 'Aktif', 'Website', 'Diskominfo', 'Non-APBD', '2016', 'agdsfzvc', '20221128 Command Center Banten.pdf', '20221128 Data Center Banten.pdf', '20221129 Command Center Banten REVISI 1.pdf', '2024-01-11 21:20:37', '2024-01-11 21:20:37'),
(2, 2, NULL, 'dindikubd.bantenprov.go.id', 'Aktif', 'Website', 'Diskominfo', 'Non-APBD', '2016', 'dsgafbad', '20221128 Command Center Banten.pdf', '20221128 Data Center Banten.pdf', '20221129 Command Center Banten REVISI 1.pdf', '2024-01-11 21:21:22', '2024-01-11 21:21:22'),
(3, 2, 1, 'smkn2serang.sch.id', 'Aktif', 'Website', 'Diluar', 'Non-APBD', '2016', 'rhsFSDz', '20221128 Command Center Banten.pdf', '20221128 Data Center Banten.pdf', '20221129 Command Center Banten REVISI 1.pdf', '2024-01-11 21:21:59', '2024-01-11 21:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `uptds`
--

CREATE TABLE `uptds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opd_id` bigint(20) UNSIGNED NOT NULL,
  `nama_uptd` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `secondemail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uptds`
--

INSERT INTO `uptds` (`id`, `opd_id`, `nama_uptd`, `alamat`, `email`, `secondemail`, `created_at`, `updated_at`) VALUES
(1, 2, 'SMK Negeri 2 Kota Serang', 'Kota Serang', 'smkn2kotaserang@bantenprov.go.id', 'smkn2kotaserang@gmail.com', '2024-01-11 21:19:54', '2024-01-11 21:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `phone_number`, `email_verified_at`, `user_type`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'systemadmin', 'System', 'Admin', 'admin@example.com', '+12398190255', '2024-01-11 21:01:45', 'admin', '$2y$10$GDXW93kcFPbjp5bGXlJMre8huXCzMCxJgw8tAXkFmaI.l1Ad3EDSC', 'active', NULL, '2024-01-11 21:01:45', '2024-01-11 21:01:45'),
(2, 'demoadmin', 'Demo', 'Admin', 'demo@example.com', '+12398190255', '2024-01-11 21:01:45', 'demo_admin', '$2y$10$1Vung49z4NN14pKf1dxIeOEhGot89KgPpg5pSmP0cQ3D5N/6tUpMO', 'pending', NULL, '2024-01-11 21:01:45', '2024-01-11 21:01:45'),
(3, 'user', 'John', 'User', 'user@example.com', '+12398190255', '2024-01-11 21:01:45', 'user', '$2y$10$8ntjps6VZoFntfEzla.S1OyVt65YtWLWKi.OjTzQwHgBDWbM9QhQC', 'inactive', NULL, '2024-01-11 21:01:45', '2024-01-11 21:01:45'),
(4, 'kalliestokes', 'Kallie', 'Stokes', 'priscilla.wisozk@example.org', '+1 (740) 373-8202', '2024-01-11 21:01:46', 'user', '$2y$10$zNV9WttXxgsvcyUenMWa8.EXz1e9wmwui1IFkO4ceH1NP0gAGC4yC', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(5, 'jedschumm', 'Jed', 'Schumm', 'rdickinson@example.org', '+1.484.290.6832', '2024-01-11 21:01:46', 'user', '$2y$10$lKffK/rui5xk5LacGqDVkeYfQ5k.HwNq8bdNx0qV.8DdJh6jq3KC6', 'pending', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(6, 'shaniabalistreri', 'Shania', 'Balistreri', 'rkassulke@example.org', '+1.321.475.8342', '2024-01-11 21:01:46', 'user', '$2y$10$u8lYgtMcKgXv99S7z7t41e9s/mWT9SizjBMgDbiwc5gueFBfNHVMS', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(7, 'citlallinader', 'Citlalli', 'Nader', 'oschulist@example.com', '(551) 496-0700', '2024-01-11 21:01:46', 'user', '$2y$10$yf9FmiS.tlt4XC.w1a2qruZe0JamqguVa3ruFjgodSemgmqDp1pTq', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(8, 'jaquanflatley', 'Jaquan', 'Flatley', 'oma24@example.com', '+12699340469', '2024-01-11 21:01:46', 'user', '$2y$10$LaGbwxZEKSIF7K/C0/aQ4.jI/MyJu8VtofijB3HDf4sMSvWCXtJj6', 'pending', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(9, 'craigrohan', 'Craig', 'Rohan', 'angie.kassulke@example.com', '520.769.6836', '2024-01-11 21:01:46', 'user', '$2y$10$Y6uKJgBX6UNB/1LOlkSoVuMs8J7UNHcZeSMaTZverUh.roNTK1cgq', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(10, 'leliakunde', 'Lelia', 'Kunde', 'giovanna.kihn@example.com', '541-521-4406', '2024-01-11 21:01:46', 'user', '$2y$10$IEo.cB0s.6E6RYGWchdMJOL02OeUus7SVJ96mb8gYn9RxCYfkXzl6', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(11, 'dewaynelakin', 'Dewayne', 'Lakin', 'adolphus87@example.net', '+1 (341) 757-5359', '2024-01-11 21:01:46', 'user', '$2y$10$GmQBBkIJ4ihQ//4aNQTUUOw/kXHnrJ9.7G2kVt1pgM2OCTOOXB4W.', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(12, 'krisbogan', 'Kris', 'Bogan', 'mae.hammes@example.org', '+1.714.481.1293', '2024-01-11 21:01:47', 'user', '$2y$10$1SNqsbT4gDwGQ7ljdm.sSeV7R8LmHXS9VwT8am38KBViJsfh7FE.C', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(13, 'conradaufderhar', 'Conrad', 'Aufderhar', 'ubaldo62@example.com', '270-643-7623', '2024-01-11 21:01:47', 'user', '$2y$10$nVc.62b7lqzSZFHvF5tp/ONQxKDt12XujKDCELdYNKufG.sLThPJW', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(14, 'penelopekuphal', 'Penelope', 'Kuphal', 'myriam.mitchell@example.org', '+15414688275', '2024-01-11 21:01:47', 'user', '$2y$10$kY2Xm7.79pub7TD0kasT3ONrGVhDPoLaQj1KEEKKe0Y2TrIlAjTn.', 'pending', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(15, 'devangoodwin', 'Devan', 'Goodwin', 'dovie.ferry@example.net', '+1 (725) 736-3269', '2024-01-11 21:01:47', 'user', '$2y$10$27ZqKtaN.PgccDbu0ydR9uDCsTF5b3Xixj.KUV4Ulbzo4dYEmWfpa', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(16, 'ricardokulas', 'Ricardo', 'Kulas', 'carroll.parker@example.com', '(716) 720-7024', '2024-01-11 21:01:47', 'user', '$2y$10$jPRyOL6WyN2Y2CY5IlxYVOT8Bjaozs3LH09ZU0qM8L3/JYMMFfYz6', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(17, 'earnestineziemann', 'Earnestine', 'Ziemann', 'alexandria86@example.org', '364.414.9733', '2024-01-11 21:01:47', 'user', '$2y$10$R1L34ywFIFRR19PC54Tng.9MJt/bH2Eup9EvJNRgd7qTfgXDRgbeq', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(18, 'mervinkirlin', 'Mervin', 'Kirlin', 'iharber@example.com', '619.210.6634', '2024-01-11 21:01:47', 'user', '$2y$10$QOpgepxYyfpIqZffsqO3IeYTdF01fedHO/FsXO5BW2BZ.nvbnDaFe', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(19, 'mavisprice', 'Mavis', 'Price', 'maya60@example.org', '1-364-947-2596', '2024-01-11 21:01:47', 'user', '$2y$10$urVvHawKvE/RGFC2kw98ouutp0L.VMYaLRxr6hej7vCNbYGh2.3LS', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(20, 'enriquesanford', 'Enrique', 'Sanford', 'ahand@example.net', '(402) 960-1132', '2024-01-11 21:01:47', 'user', '$2y$10$SnTmB1.7d5ca3eDlWpXWbe4CfOtl2dshXooJb8AqWb4j0KOJ99odO', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(21, 'devanlarson', 'Devan', 'Larson', 'hudson.cordia@example.net', '+13208626765', '2024-01-11 21:01:47', 'user', '$2y$10$YDirE.8k/sG4ZpgY2QkGmeqNEVRR4YCcnNcFxgxN2ml69jEVoTBLC', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(22, 'gladyceswaniawski', 'Gladyce', 'Swaniawski', 'krista.jones@example.com', '352.748.8557', '2024-01-11 21:01:47', 'user', '$2y$10$D8.aclc5yXR3R7x8f3bWROEgGvoBbgnbB511pe9ScrfOw4Wk1wMN.', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(23, 'dellaking', 'Della', 'King', 'oceane.dach@example.org', '1-916-817-3623', '2024-01-11 21:01:47', 'user', '$2y$10$cwT82ccqfegsl0wBvNdwiuCfuLT8HyaodIRfTDPColwhf3WGZIzkC', 'pending', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(24, 'eddienikolaus', 'Eddie', 'Nikolaus', 'oschamberger@example.net', '928.233.3685', '2024-01-11 21:01:47', 'user', '$2y$10$yRaPdBCu0N.yscO6LWA7WOSv2k8tc5oBCBPqMXNws0mONEqOuWBsa', 'pending', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(25, 'rosettachristiansen', 'Rosetta', 'Christiansen', 'oberbrunner.shaina@example.com', '(972) 338-8047', '2024-01-11 21:01:48', 'user', '$2y$10$pNQT/c88nvMKU4XWMNiBj.Yfb4kH4BjBazwnYsEfUh6r1rC2phUfW', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(26, 'bulahupton', 'Bulah', 'Upton', 'heaven.ondricka@example.net', '+1.520.592.6807', '2024-01-11 21:01:48', 'user', '$2y$10$bgmA7GEsDzRFm3u/YkBHpufGX1wAb.NRTa7DKBIuK3MitkVH8PGs6', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(27, 'garettstehr', 'Garett', 'Stehr', 'pfannerstill.lois@example.net', '(754) 913-0979', '2024-01-11 21:01:48', 'user', '$2y$10$v2R1vu2nbFRdUHSCVRymmek6xWayz0PrTCrPu8CnJxONPzJfCXUQy', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(28, 'burnicenicolas', 'Burnice', 'Nicolas', 'josie93@example.com', '(308) 390-2189', '2024-01-11 21:01:48', 'user', '$2y$10$.IUNYoKbF7w8MAANK//oM.R/MW0TIt.EhnCNCSH1thnVBpU7a1TNe', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(29, 'patriciahand', 'Patricia', 'Hand', 'agreenfelder@example.com', '763-999-2763', '2024-01-11 21:01:48', 'user', '$2y$10$kaPTqU1ZDyJNrLM.NG6WPuP8yvYqdlml/MZowWRTk2nIh2XG7BRpq', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(30, 'fletacole', 'Fleta', 'Cole', 'kailyn86@example.org', '+1.854.745.8322', '2024-01-11 21:01:48', 'user', '$2y$10$RVj20aw14wV5LS0G9xyMOu/kyzkn/6j1NOST2VzD.WKoX3vjDLJ0.', 'pending', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(31, 'hendersonturcotte', 'Henderson', 'Turcotte', 'wgreenholt@example.com', '+1.818.389.4742', '2024-01-11 21:01:48', 'user', '$2y$10$HXo4P8hi.zN8yIpoohPP9uSE7wA/ZMODXNnqi9qcoorE.EcZddqS.', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(32, 'bradenhegmann', 'Braden', 'Hegmann', 'kassulke.jaylon@example.net', '+1-260-516-6384', '2024-01-11 21:01:48', 'user', '$2y$10$1HSrazLXsSPDn1MGtInxjuR4LtQTS/ep.DwBWUSf01iwzwCw3RecC', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(33, 'marjorieschumm', 'Marjorie', 'Schumm', 'gwisoky@example.net', '415-775-6102', '2024-01-11 21:01:48', 'user', '$2y$10$AlYS7gJrdgsHq3HFQMzbc.fooJQzF25.uJ7Rav08rJnszHtFzP1lW', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(34, 'merleweissnat', 'Merle', 'Weissnat', 'kris30@example.com', '(810) 521-5491', '2024-01-11 21:01:48', 'user', '$2y$10$XxN7bZNnS1zgn/XSZN.Kle1Fyx/7DetM411ybIxTJEwzNAgDfTtpi', 'pending', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(35, 'seamusquitzon', 'Seamus', 'Quitzon', 'skohler@example.com', '970.990.4535', '2024-01-11 21:01:48', 'user', '$2y$10$/0VTzJCTTsz/Hs6azkDkye4cwcUVEGc2yoNRVlnbW1CWkyQOSM7p.', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(36, 'andreanekautzer', 'Andreane', 'Kautzer', 'martin35@example.com', '+16305587689', '2024-01-11 21:01:48', 'user', '$2y$10$eTxUCIHT6o48UDuQ47kDcO/gMAbVitrgrf.SiH00ESMT5Jt6.mTcm', 'pending', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(37, 'skyecole', 'Skye', 'Cole', 'arnoldo98@example.com', '+1 (563) 472-9225', '2024-01-11 21:01:48', 'user', '$2y$10$utrFn9o.aCd7Ifaf84GE6ew3Z4DYNAvoP8rvH7fphsempDntpQEFm', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(38, 'kadinsteuber', 'Kadin', 'Steuber', 'fisher.estel@example.net', '989.849.3722', '2024-01-11 21:01:49', 'user', '$2y$10$MHI6YdQB75xprW87sHgAWeJUL7C0KihkQAj8chaZ8XEo4.a01nRp6', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(39, 'tyreekcarter', 'Tyreek', 'Carter', 'erwin.cormier@example.org', '815-317-2045', '2024-01-11 21:01:49', 'user', '$2y$10$RFyaNo.u/AqO1Krq1VMKv.RhuCIpcKCohlIIox/4.6rryCbfftIwq', 'pending', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(40, 'llewellynleffler', 'Llewellyn', 'Leffler', 'conroy.abbey@example.com', '+1-336-498-5602', '2024-01-11 21:01:49', 'user', '$2y$10$HZi4Do3P.0I/pN8FOcecO.kV1Kr9rOtbPanVt7MgnZnoryTjGtMXa', 'inactive', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(41, 'marianneconsidine', 'Marianne', 'Considine', 'aracely.mayer@example.net', '580.499.7798', '2024-01-11 21:01:49', 'user', '$2y$10$fLDgJzNNk/HC69ss7RvFxOzpxikils1bW5HWDngKyjYkvIijm46b2', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(42, 'zariawalter', 'Zaria', 'Walter', 'ywillms@example.net', '+1.408.515.9524', '2024-01-11 21:01:49', 'user', '$2y$10$E5s.Q4hohJunt6DjWGXjRu988npmSEWXAscIVg2jB3GxHi1DuMLvi', 'pending', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(43, 'waderenner', 'Wade', 'Renner', 'enrico.pollich@example.com', '+1-747-242-1616', '2024-01-11 21:01:49', 'user', '$2y$10$nwqfyg8b64LRhDbAZdyeN.mhO88waYsLcwYa1SA6smz0RrrJJ3zvq', 'active', NULL, '2024-01-11 21:01:49', '2024-01-11 21:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `street_addr_1` varchar(255) DEFAULT NULL,
  `street_addr_2` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `alt_phone_number` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pin_code` bigint(20) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `linkdin_url` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `company_name`, `street_addr_1`, `street_addr_2`, `phone_number`, `alt_phone_number`, `country`, `state`, `city`, `pin_code`, `facebook_url`, `instagram_url`, `twitter_url`, `linkdin_url`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'mollitia incidunt', NULL, NULL, NULL, NULL, 'United States of America', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(2, 'repellat assumenda', NULL, NULL, NULL, NULL, 'Bhutan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(3, 'nisi labore', NULL, NULL, NULL, NULL, 'Solomon Islands', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(4, 'quo omnis', NULL, NULL, NULL, NULL, 'Zimbabwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(5, 'labore voluptatem', NULL, NULL, NULL, NULL, 'Ethiopia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(6, 'facilis non', NULL, NULL, NULL, NULL, 'Azerbaijan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(7, 'unde minima', NULL, NULL, NULL, NULL, 'Ethiopia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(8, 'aut eum', NULL, NULL, NULL, NULL, 'Jamaica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(9, 'sunt dolor', NULL, NULL, NULL, NULL, 'Liberia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(10, 'doloribus eos', NULL, NULL, NULL, NULL, 'Bermuda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(11, 'soluta perspiciatis', NULL, NULL, NULL, NULL, 'Sierra Leone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(12, 'in consequatur', NULL, NULL, NULL, NULL, 'United States of America', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(13, 'aliquid quod', NULL, NULL, NULL, NULL, 'Peru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(14, 'ipsum dolores', NULL, NULL, NULL, NULL, 'Christmas Island', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(15, 'blanditiis libero', NULL, NULL, NULL, NULL, 'Nepal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(16, 'nostrum saepe', NULL, NULL, NULL, NULL, 'Sierra Leone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(17, 'nemo ratione', NULL, NULL, NULL, NULL, 'Sao Tome and Principe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(18, 'asperiores odio', NULL, NULL, NULL, NULL, 'Cook Islands', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(19, 'et iusto', NULL, NULL, NULL, NULL, 'French Southern Territories', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(20, 'et soluta', NULL, NULL, NULL, NULL, 'Seychelles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(21, 'impedit eum', NULL, NULL, NULL, NULL, 'Dominica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(22, 'aut odio', NULL, NULL, NULL, NULL, 'Bahrain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(23, 'non quod', NULL, NULL, NULL, NULL, 'Antarctica (the territory South of 60 deg S)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(24, 'occaecati non', NULL, NULL, NULL, NULL, 'Austria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(25, 'fugit tempora', NULL, NULL, NULL, NULL, 'Brunei Darussalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(26, 'omnis delectus', NULL, NULL, NULL, NULL, 'United States Virgin Islands', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(27, 'est quam', NULL, NULL, NULL, NULL, 'Lao People\'s Democratic Republic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(28, 'quibusdam nostrum', NULL, NULL, NULL, NULL, 'Equatorial Guinea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(29, 'nulla voluptatem', NULL, NULL, NULL, NULL, 'Macedonia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(30, 'soluta facilis', NULL, NULL, NULL, NULL, 'Bouvet Island (Bouvetoya)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(31, 'eligendi neque', NULL, NULL, NULL, NULL, 'Israel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(32, 'rerum magni', NULL, NULL, NULL, NULL, 'Singapore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 32, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(33, 'temporibus perspiciatis', NULL, NULL, NULL, NULL, 'French Southern Territories', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(34, 'dicta explicabo', NULL, NULL, NULL, NULL, 'Poland', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(35, 'quia saepe', NULL, NULL, NULL, NULL, 'Poland', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 35, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(36, 'reprehenderit est', NULL, NULL, NULL, NULL, 'Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 36, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(37, 'quod in', NULL, NULL, NULL, NULL, 'Ecuador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 37, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(38, 'cupiditate amet', NULL, NULL, NULL, NULL, 'Fiji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(39, 'vero consectetur', NULL, NULL, NULL, NULL, 'Qatar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 39, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(40, 'itaque aliquid', NULL, NULL, NULL, NULL, 'Antarctica (the territory South of 60 deg S)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(41, 'maiores sit', NULL, NULL, NULL, NULL, 'Uruguay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(42, 'delectus iure', NULL, NULL, NULL, NULL, 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 42, '2024-01-11 21:01:49', '2024-01-11 21:01:49'),
(43, 'inventore aspernatur', NULL, NULL, NULL, NULL, 'Faroe Islands', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 43, '2024-01-11 21:01:49', '2024-01-11 21:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `validasis`
--

CREATE TABLE `validasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` bigint(20) UNSIGNED NOT NULL,
  `status_validasi` enum('Sudah Validasi','Belum Validasi') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `monitorings`
--
ALTER TABLE `monitorings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monitorings_site_id_foreign` (`site_id`);

--
-- Indexes for table `opds`
--
ALTER TABLE `opds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `opds_nama_opd_unique` (`nama_opd`),
  ADD UNIQUE KEY `opds_alias_opd_unique` (`alias_opd`),
  ADD UNIQUE KEY `opds_email_unique` (`email`),
  ADD UNIQUE KEY `opds_secondemail_unique` (`secondemail`);

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
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sites_domain_unique` (`domain`),
  ADD KEY `sites_opd_id_foreign` (`opd_id`),
  ADD KEY `sites_uptd_id_foreign` (`uptd_id`);

--
-- Indexes for table `uptds`
--
ALTER TABLE `uptds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uptds_nama_uptd_unique` (`nama_uptd`),
  ADD UNIQUE KEY `uptds_email_unique` (`email`),
  ADD UNIQUE KEY `uptds_secondemail_unique` (`secondemail`),
  ADD KEY `uptds_opd_id_foreign` (`opd_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `validasis`
--
ALTER TABLE `validasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `validasis_site_id_foreign` (`site_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `monitorings`
--
ALTER TABLE `monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opds`
--
ALTER TABLE `opds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uptds`
--
ALTER TABLE `uptds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `validasis`
--
ALTER TABLE `validasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `monitorings`
--
ALTER TABLE `monitorings`
  ADD CONSTRAINT `monitorings_site_id_foreign` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sites`
--
ALTER TABLE `sites`
  ADD CONSTRAINT `sites_opd_id_foreign` FOREIGN KEY (`opd_id`) REFERENCES `opds` (`id`),
  ADD CONSTRAINT `sites_uptd_id_foreign` FOREIGN KEY (`uptd_id`) REFERENCES `uptds` (`id`);

--
-- Constraints for table `uptds`
--
ALTER TABLE `uptds`
  ADD CONSTRAINT `uptds_opd_id_foreign` FOREIGN KEY (`opd_id`) REFERENCES `opds` (`id`);

--
-- Constraints for table `validasis`
--
ALTER TABLE `validasis`
  ADD CONSTRAINT `validasis_site_id_foreign` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
