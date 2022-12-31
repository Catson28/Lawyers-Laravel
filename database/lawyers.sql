-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 31-Dez-2022 às 21:29
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lawyers`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_person` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `id_person`, `created_at`, `updated_at`) VALUES
(1, '13', 1, '2022-07-11 13:06:49', '2022-07-11 13:06:49'),
(2, '1345', 2, '2022-07-11 13:10:22', '2022-07-11 13:10:22'),
(3, '1345', 3, '2022-07-11 13:10:31', '2022-07-11 13:10:31'),
(4, '1345', 4, '2022-07-12 07:56:59', '2022-07-12 07:56:59'),
(5, '13', 5, '2022-07-12 09:46:46', '2022-07-12 09:46:46'),
(6, '1345', 6, '2022-07-13 11:04:23', '2022-07-13 11:04:23'),
(7, '1345', 7, '2022-07-13 11:04:37', '2022-07-13 11:04:37'),
(8, 'dfsgdgdfsgdf', 8, '2022-12-04 07:45:12', '2022-12-04 07:45:12'),
(9, 'dfsgdgdfsgdf', 9, '2022-12-04 07:45:17', '2022-12-04 07:45:17'),
(10, '924983488', 10, '2022-12-04 07:47:55', '2022-12-04 07:47:55'),
(11, '1', 1, '2022-12-24 11:07:07', '2022-12-24 11:07:07'),
(12, '924983488', 12, '2022-12-24 14:49:30', '2022-12-24 14:49:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ownr` int(10) UNSIGNED NOT NULL,
  `id_prsn_prtcp` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `docs`
--

CREATE TABLE `docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_fil` int(10) UNSIGNED NOT NULL,
  `id_prcss` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usr` int(10) UNSIGNED DEFAULT NULL,
  `id_person` int(10) UNSIGNED NOT NULL,
  `id_psition` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `employees`
--

INSERT INTO `employees` (`id`, `nif`, `id_usr`, `id_person`, `id_psition`, `created_at`, `updated_at`) VALUES
(1, '001541168BA034', 1, 1, 1, '2022-07-11 13:06:49', '2022-07-11 13:06:49'),
(2, '001541168BA034', 1, 4, 1, '2022-07-12 07:56:59', '2022-07-12 07:56:59'),
(3, 'adsf', 1, 6, 1, '2022-07-13 11:04:23', '2022-07-13 11:04:23'),
(4, 'adsf', 1, 7, 1, '2022-07-13 11:04:37', '2022-07-13 11:04:37'),
(5, 'aaaaa', 1, 12, 1, '2022-12-24 14:49:31', '2022-12-24 14:49:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_01_28_093345_create_people_table', 1),
(4, '2022_01_28_093346_create_contacts_table', 1),
(5, '2022_01_28_093350_create_positions_table', 1),
(6, '2022_01_28_093351_create_employees_table', 1),
(7, '2022_05_07_094811_create_participants_table', 1),
(8, '2022_05_07_095010_create_types_table', 1),
(9, '2022_05_07_095011_create_files_table', 1),
(10, '2022_05_07_113303_create_owners_table', 1),
(11, '2022_05_07_113316_create_schedules_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `owners`
--

CREATE TABLE `owners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prsn_prtcp` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `owners`
--

INSERT INTO `owners` (`id`, `name`, `description`, `id_prsn_prtcp`, `created_at`, `updated_at`) VALUES
(1, 'Soba Catumbela', 'Matar Roubar', 1, '2022-07-11 13:11:36', '2022-07-11 13:11:36'),
(2, 'Cuca', 'Empresa de Bebidas', 3, '2022-07-12 09:47:43', '2022-07-12 09:47:43'),
(3, 'jkkk', 'hghjghjgjhgjg', 5, '2022-12-04 13:13:45', '2022-12-04 13:13:45'),
(4, 'sdfdsf', 'sdfdf', 3, '2022-12-24 14:50:51', '2022-12-24 14:50:51'),
(5, 'sdfdsf', 'sdfdf', 3, '2022-12-24 14:51:06', '2022-12-24 14:51:06'),
(6, 'sdfdsf', 'Crime', 3, '2022-12-24 14:51:30', '2022-12-24 14:51:30'),
(7, '1', 'Crime', 3, '2022-12-24 14:51:38', '2022-12-24 14:51:38'),
(8, 'Soba Catumbela', 'Empresa de Bebidas', 2, '2022-12-24 19:02:35', '2022-12-24 19:02:35'),
(9, 'Soba Catumbela', 'Empresa de Bebidas', 3, '2022-12-24 19:03:55', '2022-12-24 19:03:55'),
(10, 'Soba Catumbela', 'Empresa de Bebidas', 4, '2022-12-24 19:04:01', '2022-12-24 19:04:01'),
(11, 'Soba Catumbela', 'Empresa de Bebidas', 1, '2022-12-24 19:04:09', '2022-12-24 19:04:09'),
(12, 'Soba Catumbela', 'Empresa de Bebidas', 2, '2022-12-24 19:04:14', '2022-12-24 19:04:14'),
(13, 'Soba Catumbela', 'Empresa de Bebidas', 3, '2022-12-24 19:04:19', '2022-12-24 19:04:19'),
(14, 'Soba Catumbela', 'Empresa de Bebidas', 5, '2022-12-24 19:04:24', '2022-12-24 19:04:24'),
(15, 'Soba Catumbela', 'Empresa de Bebidas', 6, '2022-12-24 19:04:36', '2022-12-24 19:04:36'),
(16, 'Soba Catumbela', 'Empresa de Bebidas', 1, '2022-12-24 19:08:09', '2022-12-24 19:08:09'),
(17, 'Soba Catumbela', 'Empresa de Bebidas', 1, '2022-12-24 19:08:11', '2022-12-24 19:08:11'),
(18, 'Soba Catumbela', 'Empresa de Bebidas', 1, '2022-12-24 19:08:14', '2022-12-24 19:08:14'),
(19, 'Kirima', 'Bum', 1, '2022-12-24 19:10:46', '2022-12-24 19:10:46'),
(20, 'Kirima', 'Bum', 1, '2022-12-24 19:10:49', '2022-12-24 19:10:49'),
(21, 'jkuygh', 'Bum', 4, '2022-12-24 19:13:23', '2022-12-24 19:13:23'),
(22, 'jkuygh', 'Bumiu', 4, '2022-12-24 19:16:38', '2022-12-24 19:16:38'),
(23, 'pliou', '3423', 2, '2022-12-24 19:18:38', '2022-12-24 19:18:38'),
(24, 'Soba Catuma', 'wwww', 3, '2022-12-24 19:21:32', '2022-12-24 19:21:32'),
(25, 'Soba Catuma', 'wwww', 3, '2022-12-24 19:55:28', '2022-12-24 19:55:28'),
(26, 'Soba Catuma', 'wwww', 3, '2022-12-24 19:55:30', '2022-12-24 19:55:30'),
(27, 'Soba Catuma', 'wwww', 3, '2022-12-24 19:56:31', '2022-12-24 19:56:31'),
(28, 'fdsfds', 'fsdfdsf', 3, '2022-12-24 21:15:36', '2022-12-24 21:15:36'),
(29, '1', '1', 2, '2022-12-24 21:16:10', '2022-12-24 21:16:10'),
(30, '1dsfd', '1fdf', 3, '2022-12-24 21:17:40', '2022-12-24 21:17:40'),
(31, 'rgtdfg', 'dfgdfg', 3, '2022-12-24 21:19:59', '2022-12-24 21:19:59'),
(32, 'rgtdfg', 'dfgdfg', 3, '2022-12-24 21:20:14', '2022-12-24 21:20:14'),
(33, 'rgtdfg', 'dfgdfg', 2, '2022-12-24 21:26:53', '2022-12-24 21:26:53'),
(34, 'rgtdfga', 'dfgdfgs', 3, '2022-12-24 21:30:10', '2022-12-24 21:30:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participants`
--

CREATE TABLE `participants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `participants`
--

INSERT INTO `participants` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Requerente', 'Que Solicita Os Cervico', '2022-07-11 13:08:28', '2022-07-11 13:08:28'),
(2, 'Boa', 'alin', '2022-12-04 07:43:52', '2022-12-04 07:43:52'),
(3, 'fffffff', 'wwww', '2022-12-24 14:50:05', '2022-12-24 14:50:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `people`
--

CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `people`
--

INSERT INTO `people` (`id`, `full_name`, `bi`, `sex`, `birth_date`, `created_at`, `updated_at`) VALUES
(1, 'Diniz', '007753502BA045', '1', '2022-07-27', '2022-07-11 13:06:49', '2022-07-11 13:06:49'),
(2, 'Brauliu', '007753502BA045', '1', '2022-07-14', '2022-07-11 13:10:22', '2022-07-11 13:10:22'),
(3, 'Brauliu', '007753502BA045', '1', '2022-07-14', '2022-07-11 13:10:31', '2022-07-11 13:10:31'),
(4, 'Mauro', '007753502BA045', '1', '2022-07-29', '2022-07-12 07:56:59', '2022-07-12 07:56:59'),
(5, 'Candieiro', '007753502BA045', '1', '2022-07-05', '2022-07-12 09:46:46', '2022-07-12 09:46:46'),
(6, 'Candieiro', '00775350BA045', '1', '2022-07-21', '2022-07-13 11:04:23', '2022-07-13 11:04:23'),
(7, 'Broumer', '00775350BA045', '1', '2022-07-21', '2022-07-13 11:04:37', '2022-07-13 11:04:37'),
(8, 'Boa', '354435254352453', 'Masculino', '2022-12-06', '2022-12-04 07:45:12', '2022-12-04 07:45:12'),
(9, 'Boa', '354435254352453', 'Masculino', '2022-12-06', '2022-12-04 07:45:17', '2022-12-04 07:45:17'),
(10, 'Boa', '354435254BA245', 'Masculino', '2022-12-06', '2022-12-04 07:47:55', '2022-12-04 07:47:55'),
(11, '1', '1', '1', '2022-06-15', '2022-12-24 11:07:07', '2022-12-24 11:07:07'),
(12, 'fffffff', '123456789', 'aaaa', '2022-12-13', '2022-12-24 14:49:30', '2022-12-24 14:49:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `persn_partcps`
--

CREATE TABLE `persn_partcps` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_peop` int(10) UNSIGNED NOT NULL,
  `id_partcp` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `persn_partcps`
--

INSERT INTO `persn_partcps` (`id`, `id_peop`, `id_partcp`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2022-07-11 13:10:23', '2022-07-11 13:10:23'),
(2, 3, 1, '2022-07-11 13:10:31', '2022-07-11 13:10:31'),
(3, 5, 1, '2022-07-12 09:46:46', '2022-07-12 09:46:46'),
(4, 8, 2, '2022-12-04 07:45:12', '2022-12-04 07:45:12'),
(5, 9, 2, '2022-12-04 07:45:17', '2022-12-04 07:45:17'),
(6, 10, 2, '2022-12-04 07:47:55', '2022-12-04 07:47:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ballot_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `positions`
--

INSERT INTO `positions` (`id`, `name`, `ballot_num`, `created_at`, `updated_at`) VALUES
(1, 'Advogado', '1', '2022-07-11 13:06:49', '2022-07-11 13:06:49'),
(2, '1', '1', '2022-12-24 11:07:07', '2022-12-24 11:07:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processes`
--

CREATE TABLE `processes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_typ` int(10) UNSIGNED NOT NULL,
  `id_ownr` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `processes`
--

INSERT INTO `processes` (`id`, `id_typ`, `id_ownr`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-07-11 13:13:04', '2022-07-11 13:13:04'),
(2, 1, 1, '2022-07-11 19:27:34', '2022-07-11 19:27:34'),
(3, 1, 1, '2022-07-11 19:28:23', '2022-07-11 19:28:23'),
(4, 1, 1, '2022-07-11 19:35:12', '2022-07-11 19:35:12'),
(5, 1, 1, '2022-07-11 19:39:04', '2022-07-11 19:39:04'),
(6, 2, 1, '2022-07-12 07:57:51', '2022-07-12 07:57:51'),
(7, 2, 2, '2022-07-12 09:48:18', '2022-07-12 09:48:18'),
(8, 1, 1, '2022-07-15 13:44:46', '2022-07-15 13:44:46'),
(9, 1, 1, '2022-11-04 10:03:47', '2022-11-04 10:03:47'),
(10, 1, 1, '2022-12-03 23:59:43', '2022-12-03 23:59:43'),
(11, 1, 1, '2022-12-24 00:43:32', '2022-12-24 00:43:32'),
(12, 5, 3, '2022-12-24 14:52:00', '2022-12-24 14:52:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `process_workers`
--

CREATE TABLE `process_workers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_employ` int(10) UNSIGNED NOT NULL,
  `id_prcss` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `process_workers`
--

INSERT INTO `process_workers` (`id`, `id_employ`, `id_prcss`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-07-11 13:13:04', '2022-07-11 13:13:04'),
(2, 1, 2, '2022-07-11 19:27:34', '2022-07-11 19:27:34'),
(3, 1, 3, '2022-07-11 19:28:24', '2022-07-11 19:28:24'),
(4, 1, 4, '2022-07-11 19:35:12', '2022-07-11 19:35:12'),
(5, 1, 5, '2022-07-11 19:39:04', '2022-07-11 19:39:04'),
(6, 2, 6, '2022-07-12 07:57:51', '2022-07-12 07:57:51'),
(7, 1, 7, '2022-07-12 09:48:19', '2022-07-12 09:48:19'),
(8, 1, 10, '2022-12-03 23:59:44', '2022-12-03 23:59:44'),
(9, 5, 12, '2022-12-24 14:52:00', '2022-12-24 14:52:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `time` date NOT NULL,
  `id_prcss` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `schedules`
--

INSERT INTO `schedules` (`id`, `time`, `id_prcss`, `created_at`, `updated_at`) VALUES
(1, '2022-07-28', 1, '2022-07-11 13:13:04', '2022-07-11 13:13:04'),
(2, '2022-07-24', 2, '2022-07-11 19:27:34', '2022-07-11 19:27:34'),
(3, '2022-07-24', 3, '2022-07-11 19:28:24', '2022-07-11 19:28:24'),
(4, '2022-07-24', 4, '2022-07-11 19:35:12', '2022-07-11 19:35:12'),
(5, '2022-08-01', 5, '2022-07-11 19:39:04', '2022-07-11 19:39:04'),
(6, '2023-01-06', 6, '2022-07-12 07:57:51', '2022-07-12 07:57:51'),
(7, '2022-07-29', 7, '2022-07-12 09:48:19', '2022-07-12 09:48:19'),
(8, '2022-11-30', 10, '2022-12-03 23:59:44', '2022-12-03 23:59:44'),
(9, '2022-12-13', 12, '2022-12-24 14:52:00', '2022-12-24 14:52:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Consulta', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `statu_processes`
--

CREATE TABLE `statu_processes` (
  `id` int(10) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `id_prcss` int(10) UNSIGNED NOT NULL,
  `id_stat` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `statu_processes`
--

INSERT INTO `statu_processes` (`id`, `data`, `id_prcss`, `id_stat`, `created_at`, `updated_at`) VALUES
(1, '2022-07-12', 1, 1, NULL, NULL),
(2, '2022-07-11', 4, 1, '2022-07-11 19:35:13', '2022-07-11 19:35:13'),
(3, '2022-07-11', 5, 1, '2022-07-11 19:39:05', '2022-07-11 19:39:05'),
(4, '2022-07-12', 6, 1, '2022-07-12 07:57:51', '2022-07-12 07:57:51'),
(5, '2022-07-12', 7, 1, '2022-07-12 09:48:19', '2022-07-12 09:48:19'),
(6, '2022-12-04', 10, 1, '2022-12-03 23:59:45', '2022-12-03 23:59:45'),
(7, '2022-12-24', 12, 1, '2022-12-24 14:52:00', '2022-12-24 14:52:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `types`
--

INSERT INTO `types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Crime', 'O acusado de Crime', '2022-07-11 13:04:16', '2022-07-11 13:04:16'),
(2, 'Civel', 'Conflito', '2022-07-12 07:55:43', '2022-07-12 07:55:43'),
(3, 'Bonde', '1111', '2022-12-04 10:58:28', '2022-12-04 10:58:28'),
(4, 'iop*/fhjgfhf', '/ytiu', '2022-12-04 13:03:00', '2022-12-04 13:03:00'),
(5, 'fffffff', 'Crime', '2022-12-24 14:47:56', '2022-12-24 14:47:56'),
(6, 'dfdfd', '212', '2022-12-25 00:56:20', '2022-12-25 00:56:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Brauliu', 'felicatson@hotmail.com', NULL, '$2y$10$BKdwpT4E4l3ppRN7Cdti1e1iYVnAAoOgGqdJq.iK1DxW/qrqQ5NSq', NULL, '2022-07-11 11:28:09', '2022-07-11 11:28:09');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_id_person_foreign` (`id_person`);

--
-- Índices para tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_id_ownr_foreign` (`id_ownr`),
  ADD KEY `customers_id_prsn_prtcp_foreign` (`id_prsn_prtcp`);

--
-- Índices para tabela `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `docs_id_fil_foreign` (`id_fil`),
  ADD KEY `docs_id_prcss_foreign` (`id_prcss`);

--
-- Índices para tabela `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_id_usr_foreign` (`id_usr`),
  ADD KEY `employees_id_person_foreign` (`id_person`),
  ADD KEY `employees_id_psition_foreign` (`id_psition`);

--
-- Índices para tabela `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owners_id_prsn_prtcp_foreign` (`id_prsn_prtcp`);

--
-- Índices para tabela `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `persn_partcps`
--
ALTER TABLE `persn_partcps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persn_partcps_id_peop_foreign` (`id_peop`),
  ADD KEY `persn_partcps_id_partcp_foreign` (`id_partcp`);

--
-- Índices para tabela `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `processes_id_typ_foreign` (`id_typ`),
  ADD KEY `processes_id_ownr_foreign` (`id_ownr`);

--
-- Índices para tabela `process_workers`
--
ALTER TABLE `process_workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `process_workers_id_employ_foreign` (`id_employ`),
  ADD KEY `process_workers_id_prcss_foreign` (`id_prcss`);

--
-- Índices para tabela `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_id_prcss_foreign` (`id_prcss`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `statu_processes`
--
ALTER TABLE `statu_processes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statu_processes_id_prcss_foreign` (`id_prcss`),
  ADD KEY `statu_processes_id_stat_foreign` (`id_stat`);

--
-- Índices para tabela `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `persn_partcps`
--
ALTER TABLE `persn_partcps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `processes`
--
ALTER TABLE `processes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `process_workers`
--
ALTER TABLE `process_workers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `statu_processes`
--
ALTER TABLE `statu_processes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_id_person_foreign` FOREIGN KEY (`id_person`) REFERENCES `people` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_id_ownr_foreign` FOREIGN KEY (`id_ownr`) REFERENCES `owners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customers_id_prsn_prtcp_foreign` FOREIGN KEY (`id_prsn_prtcp`) REFERENCES `persn_partcps` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `docs`
--
ALTER TABLE `docs`
  ADD CONSTRAINT `docs_id_fil_foreign` FOREIGN KEY (`id_fil`) REFERENCES `files` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `docs_id_prcss_foreign` FOREIGN KEY (`id_prcss`) REFERENCES `processes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_id_person_foreign` FOREIGN KEY (`id_person`) REFERENCES `people` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_id_psition_foreign` FOREIGN KEY (`id_psition`) REFERENCES `positions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_id_usr_foreign` FOREIGN KEY (`id_usr`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `owners`
--
ALTER TABLE `owners`
  ADD CONSTRAINT `owners_id_prsn_prtcp_foreign` FOREIGN KEY (`id_prsn_prtcp`) REFERENCES `persn_partcps` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `persn_partcps`
--
ALTER TABLE `persn_partcps`
  ADD CONSTRAINT `persn_partcps_id_partcp_foreign` FOREIGN KEY (`id_partcp`) REFERENCES `participants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `persn_partcps_id_peop_foreign` FOREIGN KEY (`id_peop`) REFERENCES `people` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `processes`
--
ALTER TABLE `processes`
  ADD CONSTRAINT `processes_id_ownr_foreign` FOREIGN KEY (`id_ownr`) REFERENCES `owners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `processes_id_typ_foreign` FOREIGN KEY (`id_typ`) REFERENCES `types` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `process_workers`
--
ALTER TABLE `process_workers`
  ADD CONSTRAINT `process_workers_id_employ_foreign` FOREIGN KEY (`id_employ`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `process_workers_id_prcss_foreign` FOREIGN KEY (`id_prcss`) REFERENCES `processes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_id_prcss_foreign` FOREIGN KEY (`id_prcss`) REFERENCES `processes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `statu_processes`
--
ALTER TABLE `statu_processes`
  ADD CONSTRAINT `statu_processes_id_prcss_foreign` FOREIGN KEY (`id_prcss`) REFERENCES `processes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `statu_processes_id_stat_foreign` FOREIGN KEY (`id_stat`) REFERENCES `status` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
