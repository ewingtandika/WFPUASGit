-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 08:03 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wfpewinguas`
--
CREATE DATABASE IF NOT EXISTS `wfpewinguas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wfpewinguas`;

-- --------------------------------------------------------

--
-- Table structure for table `administrasis`
--

DROP TABLE IF EXISTS `administrasis`;
CREATE TABLE `administrasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `npk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrasis`
--

INSERT INTO `administrasis` (`id`, `npk`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '110011', NULL, NULL, 26),
(2, '220022', NULL, NULL, 27),
(3, '330033', NULL, NULL, 28),
(4, '440044', NULL, NULL, 29),
(5, '550055', NULL, NULL, 30),
(6, '660066', NULL, NULL, 31),
(7, '770077', NULL, NULL, 32),
(8, '880088', NULL, NULL, 33),
(9, '990099', NULL, NULL, 34),
(10, '100010', NULL, NULL, 35);

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

DROP TABLE IF EXISTS `dosens`;
CREATE TABLE `dosens` (
  `id` int(10) UNSIGNED NOT NULL,
  `npk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `npk`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '119911', NULL, NULL, 16),
(2, '228822', NULL, NULL, 17),
(3, '337733', NULL, NULL, 18),
(4, '446644', NULL, NULL, 19),
(5, '555555', NULL, NULL, 20),
(6, '664466', NULL, NULL, 21),
(7, '773377', NULL, NULL, 22),
(8, '882288', NULL, NULL, 23),
(9, '991199', NULL, NULL, 24),
(10, '109910', NULL, NULL, 25);

-- --------------------------------------------------------

--
-- Table structure for table `inputmatakuliahs`
--

DROP TABLE IF EXISTS `inputmatakuliahs`;
CREATE TABLE `inputmatakuliahs` (
  `mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `kelasparalel_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inputperwalian_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inputmatakuliahs`
--

INSERT INTO `inputmatakuliahs` (`mahasiswa_id`, `kelasparalel_id`, `status`, `inputperwalian_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pending', 1, NULL, NULL),
(1, 2, 'Pending', 1, NULL, NULL),
(1, 3, 'Pending', 1, NULL, NULL),
(1, 4, 'Pending', 2, NULL, NULL),
(2, 1, 'Pending', 1, NULL, NULL),
(2, 2, 'Pending', 1, NULL, NULL),
(2, 3, 'Pending', 1, NULL, NULL),
(2, 4, 'Pending', 2, NULL, NULL),
(3, 1, 'Pending', 1, NULL, NULL),
(3, 2, 'Pending', 1, NULL, NULL),
(3, 4, 'Pending', 2, NULL, NULL),
(4, 1, 'Pending', 1, NULL, NULL),
(4, 2, 'Pending', 1, NULL, NULL),
(4, 3, 'Pending', 1, NULL, NULL),
(4, 4, 'Pending', 2, NULL, NULL),
(5, 1, 'Pending', 1, NULL, NULL),
(5, 2, 'Pending', 1, NULL, NULL),
(5, 3, 'Pending', 1, NULL, NULL),
(5, 4, 'Pending', 2, NULL, NULL),
(6, 1, 'Pending', 1, NULL, NULL),
(6, 2, 'Pending', 1, NULL, NULL),
(6, 3, 'Pending', 1, NULL, NULL),
(6, 4, 'Pending', 2, NULL, NULL),
(7, 1, 'Pending', 1, NULL, NULL),
(7, 2, 'Pending', 1, NULL, NULL),
(7, 3, 'Pending', 1, NULL, NULL),
(7, 4, 'Pending', 2, NULL, NULL),
(8, 1, 'Pending', 1, NULL, NULL),
(8, 2, 'Pending', 1, NULL, NULL),
(8, 3, 'Pending', 1, NULL, NULL),
(8, 4, 'Pending', 2, NULL, NULL),
(9, 1, 'Pending', 1, NULL, NULL),
(9, 2, 'Pending', 1, NULL, NULL),
(9, 3, 'Pending', 1, NULL, NULL),
(9, 4, 'Pending', 2, NULL, NULL),
(10, 1, 'Pending', 1, NULL, NULL),
(10, 2, 'Pending', 1, NULL, NULL),
(10, 3, 'Pending', 1, NULL, NULL),
(10, 4, 'Pending', 2, NULL, NULL),
(11, 1, 'Pending', 1, NULL, NULL),
(11, 2, 'Pending', 1, NULL, NULL),
(11, 3, 'Pending', 1, NULL, NULL),
(11, 4, 'Pending', 2, NULL, NULL),
(12, 1, 'Pending', 1, NULL, NULL),
(12, 2, 'Pending', 1, NULL, NULL),
(12, 3, 'Pending', 1, NULL, NULL),
(12, 4, 'Pending', 2, NULL, NULL),
(13, 1, 'Pending', 1, NULL, NULL),
(13, 2, 'Pending', 1, NULL, NULL),
(13, 3, 'Pending', 1, NULL, NULL),
(13, 4, 'Pending', 2, NULL, NULL),
(14, 1, 'Pending', 1, NULL, NULL),
(14, 2, 'Pending', 1, NULL, NULL),
(14, 3, 'Pending', 1, NULL, NULL),
(14, 4, 'Pending', 2, NULL, NULL),
(15, 1, 'Pending', 1, NULL, NULL),
(15, 2, 'Pending', 1, NULL, NULL),
(15, 3, 'Pending', 1, NULL, NULL),
(15, 4, 'Pending', 2, NULL, NULL),
(16, 1, 'Pending', 1, NULL, NULL),
(16, 2, 'Pending', 1, NULL, NULL),
(16, 3, 'Pending', 1, NULL, NULL),
(16, 4, 'Pending', 2, NULL, NULL),
(17, 1, 'Pending', 1, NULL, NULL),
(17, 2, 'Pending', 1, NULL, NULL),
(17, 3, 'Pending', 1, NULL, NULL),
(17, 4, 'Pending', 2, NULL, NULL),
(18, 1, 'Pending', 1, NULL, NULL),
(18, 2, 'Pending', 1, NULL, NULL),
(18, 3, 'Pending', 1, NULL, NULL),
(18, 4, 'Pending', 2, NULL, NULL),
(19, 1, 'Pending', 1, NULL, NULL),
(19, 2, 'Pending', 1, NULL, NULL),
(19, 3, 'Pending', 1, NULL, NULL),
(19, 4, 'Pending', 2, NULL, NULL),
(20, 1, 'Pending', 1, NULL, NULL),
(20, 2, 'Pending', 1, NULL, NULL),
(20, 3, 'Pending', 1, NULL, NULL),
(20, 4, 'Pending', 2, NULL, NULL),
(21, 1, 'Pending', 1, NULL, NULL),
(21, 2, 'Pending', 1, NULL, NULL),
(21, 3, 'Pending', 1, NULL, NULL),
(21, 4, 'Pending', 2, NULL, NULL),
(22, 1, 'Pending', 1, NULL, NULL),
(22, 2, 'Pending', 1, NULL, NULL),
(22, 3, 'Pending', 1, NULL, NULL),
(22, 4, 'Pending', 2, NULL, NULL),
(23, 1, 'Pending', 1, NULL, NULL),
(23, 2, 'Pending', 1, NULL, NULL),
(23, 3, 'Pending', 1, NULL, NULL),
(23, 4, 'Pending', 2, NULL, NULL),
(24, 1, 'Pending', 1, NULL, NULL),
(24, 2, 'Pending', 1, NULL, NULL),
(24, 3, 'Pending', 1, NULL, NULL),
(24, 4, 'Pending', 2, NULL, NULL),
(25, 1, 'Pending', 1, NULL, NULL),
(25, 2, 'Pending', 1, NULL, NULL),
(25, 3, 'Pending', 1, NULL, NULL),
(25, 4, 'Pending', 2, NULL, NULL),
(26, 1, 'Pending', 1, NULL, NULL),
(26, 2, 'Pending', 1, NULL, NULL),
(26, 3, 'Pending', 1, NULL, NULL),
(26, 4, 'Pending', 2, NULL, NULL),
(27, 1, 'Pending', 1, NULL, NULL),
(27, 2, 'Pending', 1, NULL, NULL),
(27, 3, 'Pending', 1, NULL, NULL),
(27, 4, 'Pending', 2, NULL, NULL),
(28, 1, 'Pending', 1, NULL, NULL),
(28, 2, 'Pending', 1, NULL, NULL),
(28, 3, 'Pending', 1, NULL, NULL),
(28, 4, 'Pending', 2, NULL, NULL),
(29, 1, 'Pending', 1, NULL, NULL),
(29, 2, 'Pending', 1, NULL, NULL),
(29, 3, 'Pending', 1, NULL, NULL),
(29, 4, 'Pending', 2, NULL, NULL),
(30, 1, 'Pending', 1, NULL, NULL),
(30, 2, 'Pending', 1, NULL, NULL),
(30, 3, 'Pending', 1, NULL, NULL),
(30, 4, 'Pending', 2, NULL, NULL),
(31, 1, 'Pending', 1, NULL, NULL),
(31, 2, 'Pending', 1, NULL, NULL),
(31, 3, 'Pending', 1, NULL, NULL),
(31, 4, 'Pending', 2, NULL, NULL),
(32, 1, 'Pending', 1, NULL, NULL),
(32, 2, 'Pending', 1, NULL, NULL),
(32, 3, 'Pending', 1, NULL, NULL),
(32, 4, 'Pending', 2, NULL, NULL),
(33, 1, 'Pending', 1, NULL, NULL),
(33, 2, 'Pending', 1, NULL, NULL),
(33, 3, 'Pending', 1, NULL, NULL),
(33, 4, 'Pending', 2, NULL, NULL),
(34, 1, 'Pending', 1, NULL, NULL),
(34, 2, 'Pending', 1, NULL, NULL),
(34, 3, 'Pending', 1, NULL, NULL),
(34, 4, 'Pending', 2, NULL, NULL),
(35, 1, 'Pending', 1, NULL, NULL),
(35, 2, 'Pending', 1, NULL, NULL),
(35, 3, 'Pending', 1, NULL, NULL),
(35, 4, 'Pending', 2, NULL, NULL),
(36, 1, 'Pending', 1, NULL, NULL),
(36, 2, 'Pending', 1, NULL, NULL),
(36, 3, 'Pending', 1, NULL, NULL),
(36, 4, 'Pending', 2, NULL, NULL),
(37, 1, 'Pending', 1, NULL, NULL),
(37, 2, 'Pending', 1, NULL, NULL),
(37, 3, 'Pending', 1, NULL, NULL),
(37, 4, 'Pending', 2, NULL, NULL),
(38, 1, 'Pending', 1, NULL, NULL),
(38, 2, 'Pending', 1, NULL, NULL),
(38, 3, 'Pending', 1, NULL, NULL),
(38, 4, 'Pending', 2, NULL, NULL),
(39, 1, 'Pending', 1, NULL, NULL),
(39, 2, 'Pending', 1, NULL, NULL),
(39, 3, 'Pending', 1, NULL, NULL),
(39, 4, 'Pending', 2, NULL, NULL),
(40, 1, 'Pending', 1, NULL, NULL),
(40, 2, 'Pending', 1, NULL, NULL),
(40, 3, 'Pending', 1, NULL, NULL),
(40, 4, 'Pending', 2, NULL, NULL),
(41, 1, 'Pending', 1, NULL, NULL),
(41, 2, 'Pending', 1, NULL, NULL),
(41, 3, 'Pending', 1, NULL, NULL),
(41, 4, 'Pending', 2, NULL, NULL),
(42, 1, 'Pending', 1, NULL, NULL),
(42, 2, 'Pending', 1, NULL, NULL),
(42, 3, 'Pending', 1, NULL, NULL),
(42, 4, 'Pending', 2, NULL, NULL),
(43, 1, 'Pending', 1, NULL, NULL),
(43, 2, 'Pending', 1, NULL, NULL),
(43, 3, 'Pending', 1, NULL, NULL),
(43, 4, 'Pending', 2, NULL, NULL),
(44, 1, 'Pending', 1, NULL, NULL),
(44, 2, 'Pending', 1, NULL, NULL),
(44, 3, 'Pending', 1, NULL, NULL),
(44, 4, 'Pending', 2, NULL, NULL),
(45, 1, 'Pending', 1, NULL, NULL),
(45, 2, 'Pending', 1, NULL, NULL),
(45, 3, 'Pending', 1, NULL, NULL),
(45, 4, 'Pending', 2, NULL, NULL),
(46, 1, 'Pending', 1, NULL, NULL),
(46, 2, 'Pending', 1, NULL, NULL),
(46, 3, 'Pending', 1, NULL, NULL),
(46, 4, 'Pending', 2, NULL, NULL),
(47, 1, 'Pending', 1, NULL, NULL),
(47, 2, 'Pending', 1, NULL, NULL),
(47, 3, 'Pending', 1, NULL, NULL),
(47, 4, 'Pending', 2, NULL, NULL),
(48, 1, 'Pending', 1, NULL, NULL),
(48, 2, 'Pending', 1, NULL, NULL),
(48, 3, 'Pending', 1, NULL, NULL),
(48, 4, 'Pending', 2, NULL, NULL),
(49, 1, 'Pending', 1, NULL, NULL),
(49, 2, 'Pending', 1, NULL, NULL),
(49, 3, 'Pending', 1, NULL, NULL),
(49, 4, 'Pending', 2, NULL, NULL),
(50, 1, 'Pending', 1, NULL, NULL),
(50, 2, 'Pending', 1, NULL, NULL),
(50, 3, 'Pending', 1, NULL, NULL),
(50, 4, 'Pending', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inputperwalians`
--

DROP TABLE IF EXISTS `inputperwalians`;
CREATE TABLE `inputperwalians` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inputperwalians`
--

INSERT INTO `inputperwalians` (`id`, `nama`, `tanggal_mulai`, `tanggal_selesai`, `status`, `created_at`, `updated_at`) VALUES
(1, 'FPP1', '2017-12-04 00:00:00', '2017-12-13 00:00:00', 'Belum', NULL, NULL),
(2, 'FPP2', '2017-12-15 00:00:00', '2017-12-16 00:00:00', 'Belum', NULL, NULL),
(3, 'Kasus Khusus', '2017-12-18 00:00:00', '2017-12-19 00:00:00', 'Belum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwalmatakuliahs`
--

DROP TABLE IF EXISTS `jadwalmatakuliahs`;
CREATE TABLE `jadwalmatakuliahs` (
  `id` int(10) UNSIGNED NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `kelasparalel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwalmatakuliahs`
--

INSERT INTO `jadwalmatakuliahs` (`id`, `hari`, `waktu_mulai`, `waktu_selesai`, `kelasparalel_id`, `created_at`, `updated_at`) VALUES
(1, 'Senin', '01:02:03', '01:02:03', 1, NULL, NULL),
(2, 'Senin', '01:02:03', '01:02:03', 2, NULL, NULL),
(3, 'Senin', '01:02:03', '01:02:03', 3, NULL, NULL),
(4, 'Selasa', '01:02:03', '01:02:03', 4, NULL, NULL),
(5, 'Selasa', '01:02:03', '01:02:03', 5, NULL, NULL),
(6, 'Selasa', '01:02:03', '01:02:03', 6, NULL, NULL),
(7, 'Rabu', '01:02:03', '01:02:03', 7, NULL, NULL),
(8, 'Rabu', '01:02:03', '01:02:03', 8, NULL, NULL),
(9, 'Rabu', '01:02:03', '01:02:03', 9, NULL, NULL),
(10, 'Kamis', '01:02:03', '01:02:03', 10, NULL, NULL),
(11, 'Kamis', '01:02:03', '01:02:03', 5, NULL, NULL),
(12, 'Kamis', '01:02:03', '01:02:03', 4, NULL, NULL),
(13, 'Jumat', '01:02:03', '01:02:03', 3, NULL, NULL),
(14, 'Jumat', '01:02:03', '01:02:03', 2, NULL, NULL),
(15, 'Jumat', '01:02:03', '01:02:03', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelasparalels`
--

DROP TABLE IF EXISTS `kelasparalels`;
CREATE TABLE `kelasparalels` (
  `id` int(10) UNSIGNED NOT NULL,
  `kp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `matakuliah_id` int(10) UNSIGNED NOT NULL,
  `dosen_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelasparalels`
--

INSERT INTO `kelasparalels` (`id`, `kp`, `kapasitas`, `matakuliah_id`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, 'A', 30, 1, 1, NULL, NULL),
(2, '-', 25, 2, 2, NULL, NULL),
(3, 'B', 10, 3, 3, NULL, NULL),
(4, 'C', 50, 4, 4, NULL, NULL),
(5, 'D', 23, 5, 5, NULL, NULL),
(6, 'A', 27, 6, 6, NULL, NULL),
(7, 'C', 35, 7, 7, NULL, NULL),
(8, '-', 50, 8, 8, NULL, NULL),
(9, 'A', 55, 9, 9, NULL, NULL),
(10, 'B', 25, 10, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

DROP TABLE IF EXISTS `mahasiswas`;
CREATE TABLE `mahasiswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nrp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` double NOT NULL,
  `ips` double NOT NULL,
  `sks` int(11) NOT NULL,
  `asdos` tinyint(1) NOT NULL,
  `semester` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nrp`, `ipk`, `ips`, `sks`, `asdos`, `semester`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '160415036', 3.37, 2.23, 18, 0, 10, NULL, NULL, 88),
(2, '160415028', 2.68, 3.74, 22, 1, 5, NULL, NULL, 85),
(3, '160415003', 2.59, 2.13, 18, 0, 3, NULL, NULL, 11),
(4, '160415141', 2.12, 3.78, 18, 0, 2, NULL, NULL, 8),
(5, '160415177', 1.96, 3.88, 21, 0, 4, NULL, NULL, 80),
(6, '160415069', 3.73, 3.34, 22, 1, 2, NULL, NULL, 137),
(7, '160415064', 3.74, 2.83, 20, 1, 9, NULL, NULL, 77),
(8, '160415031', 2.26, 3.06, 21, 0, 10, NULL, NULL, 47),
(9, '160415142', 1.8, 2.73, 22, 0, 9, NULL, NULL, 59),
(10, '160415169', 1.75, 3.69, 21, 1, 5, NULL, NULL, 104),
(11, '160415007', 2.9, 3.64, 22, 1, 10, NULL, NULL, 79),
(12, '160415001', 2.25, 2.5, 21, 0, 10, NULL, NULL, 84),
(13, '160415096', 2.76, 3.48, 19, 0, 10, NULL, NULL, 14),
(14, '160415197', 3.01, 1.98, 23, 1, 3, NULL, NULL, 118),
(15, '160415030', 1.87, 2.77, 23, 1, 5, NULL, NULL, 4),
(16, '160415158', 1.79, 3.09, 22, 0, 10, NULL, NULL, 22),
(17, '160415160', 3.41, 2.48, 24, 1, 2, NULL, NULL, 25),
(18, '160415198', 2.92, 3.4, 23, 0, 6, NULL, NULL, 64),
(19, '160415066', 2.38, 2.28, 20, 1, 3, NULL, NULL, 33),
(20, '160415185', 1.81, 3.44, 20, 1, 3, NULL, NULL, 94),
(21, '160415013', 1.88, 3.83, 21, 0, 3, NULL, NULL, 30),
(22, '160415145', 2.34, 2.82, 22, 1, 4, NULL, NULL, 45),
(23, '160415193', 2.31, 2.55, 20, 0, 4, NULL, NULL, 71),
(24, '160415101', 2.83, 3.34, 19, 1, 3, NULL, NULL, 37),
(25, '160415058', 2.8, 2.13, 20, 0, 2, NULL, NULL, 61),
(26, '160415047', 3.08, 2.09, 22, 1, 7, NULL, NULL, 38),
(27, '160415053', 2.15, 3.29, 19, 1, 10, NULL, NULL, 12),
(28, '160415190', 2.88, 2.64, 23, 0, 7, NULL, NULL, 75),
(29, '160415078', 2.71, 3.13, 20, 1, 3, NULL, NULL, 34),
(30, '160415042', 2.87, 3.2, 22, 0, 2, NULL, NULL, 10),
(31, '160415008', 2.87, 3.56, 20, 0, 4, NULL, NULL, 23),
(32, '160415050', 2.56, 3.25, 24, 0, 3, NULL, NULL, 31),
(33, '160415005', 3.54, 2.03, 24, 0, 6, NULL, NULL, 106),
(34, '160415041', 3.33, 3.15, 20, 1, 9, NULL, NULL, 41),
(35, '160415176', 2.96, 3.85, 24, 0, 6, NULL, NULL, 66),
(36, '160415083', 2.53, 2.96, 24, 1, 3, NULL, NULL, 89),
(37, '160415138', 2.21, 2.57, 18, 0, 7, NULL, NULL, 109),
(38, '160415025', 1.99, 2.14, 21, 0, 5, NULL, NULL, 127),
(39, '160415170', 1.78, 3.38, 24, 1, 6, NULL, NULL, 17),
(40, '160415151', 3.75, 3.58, 23, 1, 10, NULL, NULL, 54),
(41, '160415128', 2.55, 3.16, 24, 0, 9, NULL, NULL, 65),
(42, '160415126', 3.05, 2.63, 22, 1, 8, NULL, NULL, 55),
(43, '160415002', 2.99, 2.25, 19, 0, 9, NULL, NULL, 9),
(44, '160415046', 3.38, 2.96, 18, 1, 4, NULL, NULL, 119),
(45, '160415038', 2.66, 2.13, 24, 1, 7, NULL, NULL, 28),
(46, '160415084', 1.79, 2.05, 19, 1, 2, NULL, NULL, 100),
(47, '160415060', 2.36, 1.98, 23, 1, 2, NULL, NULL, 101),
(48, '160415112', 2.88, 2.41, 23, 1, 10, NULL, NULL, 29),
(49, '160415102', 3.78, 3.8, 22, 0, 10, NULL, NULL, 51),
(50, '160415132', 2.2, 3.64, 23, 0, 6, NULL, NULL, 15);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliahs`
--

DROP TABLE IF EXISTS `matakuliahs`;
CREATE TABLE `matakuliahs` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matakuliahs`
--

INSERT INTO `matakuliahs` (`id`, `kode_matkul`, `nama`, `jumlah_sks`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Statistika', 4, 5, NULL, NULL),
(2, 'B01', 'Matematika', 3, 1, NULL, NULL),
(3, 'C01', 'Algortma dan Pemrograman', 6, 1, NULL, NULL),
(4, 'A02', 'Pemrograman Berorientasi Objek', 6, 2, NULL, NULL),
(5, 'B02', 'Manajemen Sains', 3, 4, NULL, NULL),
(6, 'C02', 'Desain Web', 2, 3, NULL, NULL),
(7, 'A03', 'Pemrograman Web', 3, 4, NULL, NULL),
(8, 'B03', 'Pemrograman Nirkabel', 4, 5, NULL, NULL),
(9, 'C03', 'Jaringan Komputer', 3, 3, NULL, NULL),
(10, 'A04', 'Konsep Sistem Informasi', 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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
(3, '2017_11_02_130233_create_mahasiswas_table', 1),
(4, '2017_11_02_130239_create_matakuliahs_table', 1),
(5, '2017_11_02_130736_create_dosens_table', 1),
(6, '2017_11_02_130811_create_administrasis_table', 1),
(7, '2017_11_02_131425_create_kelasparalels_table', 1),
(8, '2017_11_02_131447_create_jadwalmatakuliahs_table', 1),
(9, '2017_11_02_131646_create_inputperwalians_table', 1),
(10, '2017_11_02_131716_create_inputmatakuliahs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomorinduk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `nomorinduk`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hobart Effertz DVM', 'treilly@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'wJ6yAA05P3', '2017-12-04 11:15:44', '2017-12-04 11:15:44'),
(2, 'Prof. Clint Dibbert', 'jorge.kub@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '3NZLm1U1wj', '2017-12-04 11:15:44', '2017-12-04 11:15:44'),
(3, 'Prof. Bobby Nader', 'adelia33@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'HqelRlfR9r', '2017-12-04 11:15:44', '2017-12-04 11:15:44'),
(4, 'Dr. Adonis Wintheiser I', 'aoreilly@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415030', 'Ij16HhI87A', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(5, 'Rusty Mosciski', 'keeling.juana@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'FVmuwEcHtN', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(6, 'Carmela Rippin', 'qfay@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'OALEGSvRH1', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(7, 'Missouri Dietrich', 'junior89@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'aI7By80GYS', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(8, 'Everardo Mertz', 'little.patsy@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415141', 'RxF9bDASln', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(9, 'Mr. Jensen Frami', 'danial95@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415002', 'zgixzdORV5O2JURQejA0jm1VsLUIELReDgr3BOwkAhVnebjvx8mVE5eropw8', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(10, 'Mr. Trenton Russel PhD', 'rwyman@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415042', '9JhZjJgcA4', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(11, 'Miss Ariane Kovacek II', 'albin38@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415003', '2c2Nvr70a00MFh23an8YOxdvPzG1yXveYtuVKB0ZVZL4AnvI1R660BGDaFey', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(12, 'Jamarcus Blanda III', 'cleta.dare@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415053', 'tgmeWm91qb', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(13, 'Dulce Huels', 'shaun.williamson@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'ozSerFwbb1', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(14, 'Brielle Romaguera', 'schoen.dominique@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415096', 'vz6lAw6kSz', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(15, 'Jessica Johnston', 'dorthy12@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415132', 'eBXBmdyEI8', '2017-12-04 11:15:45', '2017-12-04 11:15:45'),
(16, 'Rowena Howell', 'reilly.ara@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '119911', '2DDtuGMTD6iqVDVN7TxHGhZaUvsTjWUmNWG4TffQ8APLO9ZvTgbL2DQDQhgz', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(17, 'Prof. Doris Koch', 'bridie14@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '228822', 'a4M2u7tsTT', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(18, 'Prof. Crystel Nienow', 'dominique85@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '337733', 'mDNnl9Zweu', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(19, 'Wyman Hills', 'rey.dach@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '446644', 'XVSXpAaFGK', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(20, 'Dr. Sister Wolff', 'jhessel@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '555555', 'kGnU9wX5hB', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(21, 'Aniya Turner DDS', 'sabina.bergnaum@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '664466', 'o5ZOdCgQVZ', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(22, 'Kirstin Reichert III', 'haley.alicia@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '773377', 'wq4Qt36wv4', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(23, 'Bertrand Bartoletti', 'mcdermott.russell@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '882288', 'kj33hRmDl2', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(24, 'Mrs. Alisa Thiel', 'swift.cordie@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '991199', '6lFXF0YFlL', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(25, 'Mariana Cole', 'skautzer@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '109910', 'XzEeY4dBGX', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(26, 'Tracey Ward', 'demond27@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '110011', 'ak19h0L1gysPWAgKJHSczkOtyHfAIc0ShnWFg1WPgG0N8RyGOjuvIfmslYM9', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(27, 'Mrs. Judy Gleason', 'crystel.yost@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '220022', 'VRgGeKIkOS', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(28, 'Anita Block I', 'swaniawski.itzel@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '330033', '1M1ACmhB9K', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(29, 'Nannie Hessel', 'bernhard.mary@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '440044', 'jakrO5OW7U', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(30, 'Suzanne Nader', 'matteo66@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '550055', 'iRbx2nt529', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(31, 'Clair Wintheiser', 'alene.botsford@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '660066', 'rgE9YFlZh2', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(32, 'Felix Frami', 'torp.alvah@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '770077', '18zKtA3dtZ', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(33, 'Eloy Lehner', 'evalyn.jacobi@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '880088', 'ZAoNh1HvS9', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(34, 'Antonetta Keeling', 'ogusikowski@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '990099', '0oytkTysNA', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(35, 'Mr. Claude Weber III', 'mavis.swift@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '100010', 'Qfwi54rAv5', '2017-12-04 11:15:46', '2017-12-04 11:15:46'),
(36, 'Catherine Effertz', 'ewunsch@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'mBllXrFhgv', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(37, 'Candice Swaniawski', 'jaren92@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415101', '7FpeG2myK5', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(38, 'Prof. Luella Fadel', 'mhickle@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415047', 'jyjtpwKaJk', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(39, 'Eric Moen I', 'ozboncak@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '0zV7xYbJu3', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(40, 'Omer O''Connell', 'tevin.lubowitz@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'yuwG0Gfnqs', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(41, 'Ms. Shirley Ward', 'myles62@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415041', 'KiPYpRxbjn', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(42, 'Dasia Gerlach', 'thalia.mcclure@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'VSUgP5sI66', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(43, 'Bria Luettgen DDS', 'carol.weimann@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'Uskt1bExr3', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(44, 'Brain Marvin', 'whowe@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'PmH9eynGEt', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(45, 'Prof. Dante Kohler', 'fdare@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415145', 'QobnAUY20Q', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(46, 'Owen Nader', 'ghand@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'JX9k5wypJK', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(47, 'Pedro Hills III', 'yesenia44@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415031', 'ugDjuL7ZFy', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(48, 'Mr. Blaise Langosh', 'ziemann.anne@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'qm5flwICNP', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(49, 'Dr. Sim Heidenreich', 'christiansen.elena@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'ptTEpicJgm', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(50, 'Louie O''Connell', 'carissa08@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'gIzio96x0g', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(51, 'Laurence Kautzer', 'huels.amalia@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415102', 'PiMBBcfE1H', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(52, 'Dr. Marlin Barton', 'gussie.hermiston@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'GVc4l4j1c2', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(53, 'Liana McLaughlin III', 'aniya.boehm@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'Zfyy0JpeW8', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(54, 'Hollis Grimes', 'elian.baumbach@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415151', 'ZzWhNhJh6X', '2017-12-04 11:15:47', '2017-12-04 11:15:47'),
(55, 'Dorothea Lesch', 'nola.jakubowski@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415126', 'SovA6TYZWH', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(56, 'Prof. Lera Renner MD', 'tgrady@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '9zlpjSxmXT', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(57, 'Murray Hayes', 'louie.lueilwitz@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'c3hsj2yuos', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(58, 'Katherine Wintheiser', 'nhoppe@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'RU5ScBzuvR', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(59, 'Fernando D''Amore IV', 'ransom.okon@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415142', 'Whptm658tQ', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(60, 'Holden Hand', 'clesch@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'IrJI6OA41i', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(61, 'Karianne Auer IV', 'homenick.imogene@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415058', 'h6zdhegp9F', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(62, 'Prof. Avery Bode', 'jamie64@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'VsPRJpFfjc', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(63, 'Eleanore Cassin', 'klein.genevieve@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'NS4c1ZX4rR', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(64, 'Tatum Ritchie', 'nannie.kuhn@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415198', 'pjpHuVHWiY', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(65, 'Dr. Adelle Leuschke III', 'vrobel@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415128', 'ur7aQIB2hX', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(66, 'Sister Beier I', 'florine.johnston@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415176', 'H4Rpzeewry', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(67, 'Mr. Buster Wehner PhD', 'oaufderhar@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'vIZvn8VNLE', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(68, 'Daphney Conroy II', 'leon68@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'MkxvCLz1j0', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(69, 'Natalia Lindgren', 'alena94@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'YejOQUFCKO', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(70, 'Ellis Haley', 'einar.koepp@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'fC8GJ8SxKh', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(71, 'Andreane Gleichner', 'otis.funk@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415193', 'm3OEKMUEHH', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(72, 'Ollie Bernier', 'sherwood.lehner@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'gaJgUy7r6z', '2017-12-04 11:15:48', '2017-12-04 11:15:48'),
(73, 'Darrel Gleichner', 'mohammad05@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '9NuZB9qoje', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(74, 'Dr. Jaylin Renner', 'wyman.murphy@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '7OE6TZ41xC', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(75, 'Milford Lind', 'clemens88@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415190', 'lEmlB6mFCm', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(76, 'Guiseppe Dach III', 'candelario.spinka@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'puPPG1iPa1', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(77, 'Hollis Huel', 'gutkowski.lenna@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415064', 'YQJCp7JBNh', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(78, 'Mr. Bud Rau V', 'leif01@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'dL4zsIEkjC', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(79, 'Aletha Schultz', 'hmckenzie@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415007', 'ljFmtq9yTt', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(80, 'Stefanie Koch DVM', 'mlesch@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415177', 'YUizuSl97q', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(81, 'Maud Brakus', 'pouros.aliya@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'nTbnCi2Ywr', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(82, 'Macey Macejkovic', 'rcarroll@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'LUZdAY40XU', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(83, 'Miss Marina O''Kon I', 'bbaumbach@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'srEcySSdiw', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(84, 'Ashton Thiel', 'nschmitt@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415001', 'sbNJQiw1uR', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(85, 'Athena McLaughlin', 'xbecker@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415028', 'yIxZPhK9HI', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(86, 'Verla Boyle', 'wilhelmine.wyman@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'CxCzker4HR', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(87, 'Mrs. Katrina Durgan V', 'walton.feeney@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'kgllnKuUzh', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(88, 'Jannie Yundt', 'noah00@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415036', '3IwB5Cd8zc', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(89, 'Aaron Hyatt', 'hayes.corene@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415083', 'QY7yFBzmbD', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(90, 'Ramiro Gibson Sr.', 'damore.jeramy@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'wOV89Sqn4w', '2017-12-04 11:15:49', '2017-12-04 11:15:49'),
(91, 'Quinn Bode', 'oarmstrong@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'wubuqayvcr', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(92, 'Prof. Katlynn Rowe II', 'sschamberger@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'z24d2BuRhx', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(93, 'Janelle Buckridge', 'chance.hintz@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'Esn8MuPMsu', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(94, 'Eda O''Connell DVM', 'daniel.dean@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415185', 'r3yUctFSFW', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(95, 'Ms. Rubye Hoppe MD', 'mary83@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'wLyNgutHUQ', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(96, 'Jaden Ernser', 'nkris@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'FpMKGnCiSt', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(97, 'Omer Ruecker III', 'gladys.lind@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '7PLQGYsmlt', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(98, 'Santina Abbott II', 'lila99@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'fVeLcMKgBu', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(99, 'Demarco Murphy', 'gutkowski.mayra@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'ZJfhWV10WV', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(100, 'Dorris Kautzer', 'crooks.orrin@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415084', 'pHuWIhnN4F', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(101, 'Prof. Dorian Kertzmann', 'collin.mertz@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415060', 'EWwe2kXS7n', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(102, 'Muriel Hermiston', 'schmidt.cornell@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'hvAqigDknh', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(103, 'Mr. Tony Watsica V', 'will.brisa@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'BmmDSnPDOo', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(104, 'Ariane Jenkins', 'arnulfo64@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415169', 'oHC5J9Gkpj', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(105, 'Leonie Gleason', 'timmy.kub@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '8OkrSM0qAT', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(106, 'Maybelle Howell', 'macejkovic.sydnee@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415005', '2idMDndacW', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(107, 'Prof. Kenyon Fahey', 'hauck.madisen@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'RsIXuplAUn', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(108, 'Sheldon Langworth', 'xwilliamson@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'LyeEitSq8s', '2017-12-04 11:15:50', '2017-12-04 11:15:50'),
(109, 'Caesar Rowe', 'uprice@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415138', 'ELUB598csH', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(110, 'Rick Ritchie', 'lesch.easton@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'sRsbqPzNyl', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(111, 'Prof. Garrick Lang', 'larkin.sidney@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'SJqtsnuHkV', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(112, 'Estrella Renner', 'zrice@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'ZOvT7NNmNC', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(113, 'Dr. Providenci Dach', 'ymedhurst@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'oxgAOqJcVy', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(114, 'Alan Fritsch', 'wiley.littel@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'VhXalps7wn', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(115, 'Mr. Will Kuhlman I', 'serena.ullrich@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'cNZPBX43Vg', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(116, 'Tatyana Kub', 'doug.ledner@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'UcbkXi4x2n', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(117, 'Vita Weimann', 'maureen.ernser@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'IDHBfZFKAb', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(118, 'Lavonne Jacobson', 'mills.norma@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415197', 'tpPYycIIyH', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(119, 'Chelsea Lynch', 'fisher.ashlee@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415046', '4kfh2EM1IA', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(120, 'Vincenza Daugherty', 'mccullough.simeon@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'T237XAZVvV', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(121, 'Frederique Orn', 'emiliano.christiansen@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'vhrOOykAxw', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(122, 'Mr. Kurt Kulas IV', 'gerard06@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'h345ev02Ye', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(123, 'Jettie Brakus', 'lolita55@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '9WpDKYpDwK', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(124, 'Justice Cronin', 'ekeebler@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '3YAtz7Avbr', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(125, 'Aryanna Erdman', 'jennifer.mayer@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'kH7h6iilJs', '2017-12-04 11:15:51', '2017-12-04 11:15:51'),
(126, 'Elsie Eichmann V', 'jjacobson@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'CLCgLhnuyt', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(127, 'Miss Loren Feest DDS', 'cayla.waters@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415025', '3hnh768DQb', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(128, 'Ms. Martina Murphy', 'connelly.marcella@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '6REC5TwoCi', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(129, 'Connor Stiedemann', 'jennings09@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'Lbjx8ona3v', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(130, 'Prof. Verlie Stiedemann', 'khuels@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'F8YHkrEwbk', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(131, 'Stewart Konopelski Jr.', 'fdaugherty@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'aL4BOqqj3j', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(132, 'Bo Keebler', 'napoleon10@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'FLjHLTlPeT', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(133, 'Verna McClure', 'brian89@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'AiS99Upc3d', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(134, 'Mrs. Aniyah Jast', 'loyce.johns@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'cAB8rR5EOZ', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(135, 'Elisha Volkman', 'aurelia.donnelly@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'q7RUoI6coQ', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(136, 'Dr. Jackeline Swaniawski I', 'kristopher60@example.net', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'DWSadp2hpz', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(137, 'Magdalena Lockman', 'solon60@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', '160415069', 'ZUMmfU29aM', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(138, 'Isabella Sporer', 'wisozk.bonita@example.com', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, 'XKJUMfF45X', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(139, 'Ashleigh Schoen', 'madie34@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '3tP1ToW4Kr', '2017-12-04 11:15:52', '2017-12-04 11:15:52'),
(140, 'Georgette Labadie', 'hane.erika@example.org', '$2y$10$moRTD7fvvo.rU7cK0ppXveAN8covSFGHFjK5wadvS09Q5ipJi2HUC', NULL, '5EvVIoFhmp', '2017-12-04 11:15:52', '2017-12-04 11:15:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasis`
--
ALTER TABLE `administrasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `administrasis_user_id_foreign` (`user_id`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosens_user_id_foreign` (`user_id`);

--
-- Indexes for table `inputmatakuliahs`
--
ALTER TABLE `inputmatakuliahs`
  ADD KEY `inputmatakuliahs_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `inputmatakuliahs_kelasparalel_id_foreign` (`kelasparalel_id`),
  ADD KEY `inputmatakuliahs_inputperwalian_id_foreign` (`inputperwalian_id`);

--
-- Indexes for table `inputperwalians`
--
ALTER TABLE `inputperwalians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwalmatakuliahs`
--
ALTER TABLE `jadwalmatakuliahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwalmatakuliahs_kelasparalel_id_foreign` (`kelasparalel_id`);

--
-- Indexes for table `kelasparalels`
--
ALTER TABLE `kelasparalels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelasparalels_matakuliah_id_foreign` (`matakuliah_id`),
  ADD KEY `kelasparalels_dosen_id_foreign` (`dosen_id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswas_user_id_foreign` (`user_id`);

--
-- Indexes for table `matakuliahs`
--
ALTER TABLE `matakuliahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasis`
--
ALTER TABLE `administrasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `inputperwalians`
--
ALTER TABLE `inputperwalians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jadwalmatakuliahs`
--
ALTER TABLE `jadwalmatakuliahs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kelasparalels`
--
ALTER TABLE `kelasparalels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `matakuliahs`
--
ALTER TABLE `matakuliahs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrasis`
--
ALTER TABLE `administrasis`
  ADD CONSTRAINT `administrasis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `dosens`
--
ALTER TABLE `dosens`
  ADD CONSTRAINT `dosens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `inputmatakuliahs`
--
ALTER TABLE `inputmatakuliahs`
  ADD CONSTRAINT `inputmatakuliahs_inputperwalian_id_foreign` FOREIGN KEY (`inputperwalian_id`) REFERENCES `inputperwalians` (`id`),
  ADD CONSTRAINT `inputmatakuliahs_kelasparalel_id_foreign` FOREIGN KEY (`kelasparalel_id`) REFERENCES `kelasparalels` (`id`),
  ADD CONSTRAINT `inputmatakuliahs_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswas` (`id`);

--
-- Constraints for table `jadwalmatakuliahs`
--
ALTER TABLE `jadwalmatakuliahs`
  ADD CONSTRAINT `jadwalmatakuliahs_kelasparalel_id_foreign` FOREIGN KEY (`kelasparalel_id`) REFERENCES `kelasparalels` (`id`);

--
-- Constraints for table `kelasparalels`
--
ALTER TABLE `kelasparalels`
  ADD CONSTRAINT `kelasparalels_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosens` (`id`),
  ADD CONSTRAINT `kelasparalels_matakuliah_id_foreign` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliahs` (`id`);

--
-- Constraints for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD CONSTRAINT `mahasiswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
