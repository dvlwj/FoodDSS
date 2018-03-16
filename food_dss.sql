-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 09:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_kriteria` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` char(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kd_kriteria`, `nama`) VALUES
(1, 'C01', 'Protein'),
(2, 'C02', 'Lemak'),
(3, 'C03', 'Karbohidrat'),
(4, 'C04', 'Serat');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_makanan` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_makanan1` int(11) NOT NULL,
  `nilai_makanan2` int(11) NOT NULL,
  `nilai_makanan3` int(11) NOT NULL,
  `nilai_makanan4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `kd_makanan`, `nama`, `nilai_makanan1`, `nilai_makanan2`, `nilai_makanan3`, `nilai_makanan4`) VALUES
(1, 'A01', 'Ikan Kakap', 3, 1, 1, 1),
(2, 'A02', 'Tahu', 3, 1, 1, 2),
(3, 'A03', 'Ayam dengan Kulit', 3, 3, 1, 1),
(4, 'A04', 'Daging Sapi', 3, 2, 1, 1),
(6, 'A05', 'Kacang Hijau', 2, 1, 1, 3);

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
(2, '2018_01_29_152945_create_food_table', 1),
(3, '2018_01_29_153128_create_criteria_table', 1),
(4, '2018_01_29_153442_create_sub_criteria_table', 1),
(5, '2018_01_29_153526_create_criteria_value_table', 1),
(6, '2018_01_29_153707_create_sub_criteria_1_table', 1),
(7, '2018_01_29_153707_create_sub_criteria_2_table', 1),
(8, '2018_01_29_153707_create_sub_criteria_3_table', 1),
(9, '2018_01_29_153707_create_sub_criteria_4_table', 1),
(10, '2018_01_29_153846_create_food_value_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilaikrit`
--

CREATE TABLE `nilaikrit` (
  `id` int(10) UNSIGNED NOT NULL,
  `lem_pro` int(11) NOT NULL,
  `kar_pro` int(11) NOT NULL,
  `kar_lem` int(11) NOT NULL,
  `ser_pro` int(11) NOT NULL,
  `ser_lem` int(11) NOT NULL,
  `ser_kar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaikrit`
--

INSERT INTO `nilaikrit` (`id`, `lem_pro`, `kar_pro`, `kar_lem`, `ser_pro`, `ser_lem`, `ser_kar`) VALUES
(1, 2, 2, 2, 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilaimakanan`
--

CREATE TABLE `nilaimakanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nilai_makanan1` double(8,2) NOT NULL,
  `nilai_makanan2` double(8,2) NOT NULL,
  `nilai_makanan3` double(8,2) NOT NULL,
  `nilai_makanan4` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nilaisub1`
--

CREATE TABLE `nilaisub1` (
  `id` int(10) UNSIGNED NOT NULL,
  `ba1` int(11) NOT NULL,
  `ca1` int(11) NOT NULL,
  `cb1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaisub1`
--

INSERT INTO `nilaisub1` (`id`, `ba1`, `ca1`, `cb1`) VALUES
(1, 2, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilaisub2`
--

CREATE TABLE `nilaisub2` (
  `id` int(10) UNSIGNED NOT NULL,
  `ba2` int(11) NOT NULL,
  `ca2` int(11) NOT NULL,
  `cb2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaisub2`
--

INSERT INTO `nilaisub2` (`id`, `ba2`, `ca2`, `cb2`) VALUES
(1, 2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilaisub3`
--

CREATE TABLE `nilaisub3` (
  `id` int(10) UNSIGNED NOT NULL,
  `ba3` int(11) NOT NULL,
  `ca3` int(11) NOT NULL,
  `cb3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaisub3`
--

INSERT INTO `nilaisub3` (`id`, `ba3`, `ca3`, `cb3`) VALUES
(1, 3, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilaisub4`
--

CREATE TABLE `nilaisub4` (
  `id` int(10) UNSIGNED NOT NULL,
  `ba4` int(11) NOT NULL,
  `ca4` int(11) NOT NULL,
  `cb4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaisub4`
--

INSERT INTO `nilaisub4` (`id`, `ba4`, `ca4`, `cb4`) VALUES
(1, 2, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_subkriteria` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` char(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `kd_subkriteria`, `nama`) VALUES
(1, 'S01', 'Rendah'),
(2, 'S02', 'Sedang'),
(3, 'S03', 'Tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_by`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'SYSTEM', NULL, NULL, '2018-03-09 08:23:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kriteria_kd_kriteria_unique` (`kd_kriteria`),
  ADD UNIQUE KEY `kriteria_nama_unique` (`nama`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `6` (`kd_makanan`),
  ADD UNIQUE KEY `makanan_nama_unique` (`nama`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaikrit`
--
ALTER TABLE `nilaikrit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaimakanan`
--
ALTER TABLE `nilaimakanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaisub1`
--
ALTER TABLE `nilaisub1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaisub2`
--
ALTER TABLE `nilaisub2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaisub3`
--
ALTER TABLE `nilaisub3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaisub4`
--
ALTER TABLE `nilaisub4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nilaikrit`
--
ALTER TABLE `nilaikrit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nilaimakanan`
--
ALTER TABLE `nilaimakanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilaisub1`
--
ALTER TABLE `nilaisub1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nilaisub2`
--
ALTER TABLE `nilaisub2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nilaisub3`
--
ALTER TABLE `nilaisub3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nilaisub4`
--
ALTER TABLE `nilaisub4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
