-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 10:43 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music2`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(10) UNSIGNED NOT NULL,
  `nama_album` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urutan_lagu` int(11) NOT NULL,
  `id_rekaman` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `id_bahasa` int(10) UNSIGNED NOT NULL,
  `bahasa` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gendre`
--

CREATE TABLE `gendre` (
  `id_gendre` int(10) UNSIGNED NOT NULL,
  `gendre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE `lagu` (
  `id_lagu` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `durasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_release` int(11) NOT NULL,
  `id_bahasa` int(10) UNSIGNED NOT NULL,
  `id_gendre` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id_list` int(10) UNSIGNED NOT NULL,
  `id_lagu` int(10) UNSIGNED NOT NULL,
  `id_album` int(10) UNSIGNED NOT NULL,
  `id_penyanyi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_pengguna`
--

CREATE TABLE `list_pengguna` (
  `id_list_pengguna` int(10) UNSIGNED NOT NULL,
  `id_pengguna` int(10) UNSIGNED NOT NULL,
  `id_list` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_05_18_082224_table_akun', 1),
('2017_05_18_103651_table_pengguna', 1),
('2017_05_18_105750_table_bahasa', 1),
('2017_05_18_105800_table_gendre', 1),
('2017_05_18_105804_table_lagu', 1),
('2017_05_18_105828_table_penyanyi', 1),
('2017_05_18_105905_table_rekaman', 1),
('2017_05_18_105940_table_album', 1),
('2017_05_18_105943_table_list', 1),
('2017_05_18_112848_table_list_pengguna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `id_akun` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyanyi`
--

CREATE TABLE `penyanyi` (
  `id_penyanyi` int(10) UNSIGNED NOT NULL,
  `nama_penyanyi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekaman`
--

CREATE TABLE `rekaman` (
  `id_rekaman` int(10) UNSIGNED NOT NULL,
  `nama_rekaman` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `album_id_rekaman_foreign` (`id_rekaman`);

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indexes for table `gendre`
--
ALTER TABLE `gendre`
  ADD PRIMARY KEY (`id_gendre`);

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`id_lagu`),
  ADD KEY `lagu_id_bahasa_foreign` (`id_bahasa`),
  ADD KEY `lagu_id_gendre_foreign` (`id_gendre`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id_list`),
  ADD KEY `list_id_lagu_foreign` (`id_lagu`),
  ADD KEY `list_id_album_foreign` (`id_album`),
  ADD KEY `list_id_penyanyi_foreign` (`id_penyanyi`);

--
-- Indexes for table `list_pengguna`
--
ALTER TABLE `list_pengguna`
  ADD PRIMARY KEY (`id_list_pengguna`),
  ADD KEY `list_pengguna_id_pengguna_foreign` (`id_pengguna`),
  ADD KEY `list_pengguna_id_list_foreign` (`id_list`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `pengguna_id_akun_foreign` (`id_akun`);

--
-- Indexes for table `penyanyi`
--
ALTER TABLE `penyanyi`
  ADD PRIMARY KEY (`id_penyanyi`);

--
-- Indexes for table `rekaman`
--
ALTER TABLE `rekaman`
  ADD PRIMARY KEY (`id_rekaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gendre`
--
ALTER TABLE `gendre`
  MODIFY `id_gendre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `id_lagu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id_list` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_pengguna`
--
ALTER TABLE `list_pengguna`
  MODIFY `id_list_pengguna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penyanyi`
--
ALTER TABLE `penyanyi`
  MODIFY `id_penyanyi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rekaman`
--
ALTER TABLE `rekaman`
  MODIFY `id_rekaman` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_id_rekaman_foreign` FOREIGN KEY (`id_rekaman`) REFERENCES `rekaman` (`id_rekaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lagu`
--
ALTER TABLE `lagu`
  ADD CONSTRAINT `lagu_id_bahasa_foreign` FOREIGN KEY (`id_bahasa`) REFERENCES `bahasa` (`id_bahasa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lagu_id_gendre_foreign` FOREIGN KEY (`id_gendre`) REFERENCES `gendre` (`id_gendre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_id_album_foreign` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `list_id_lagu_foreign` FOREIGN KEY (`id_lagu`) REFERENCES `lagu` (`id_lagu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `list_id_penyanyi_foreign` FOREIGN KEY (`id_penyanyi`) REFERENCES `penyanyi` (`id_penyanyi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `list_pengguna`
--
ALTER TABLE `list_pengguna`
  ADD CONSTRAINT `list_pengguna_id_list_foreign` FOREIGN KEY (`id_list`) REFERENCES `list` (`id_list`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `list_pengguna_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
