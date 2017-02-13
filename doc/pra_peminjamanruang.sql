-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2017 at 03:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pra_peminjamanruang`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('SuperAdmin', '1', 1486521488),
('User', '3', 1486528847);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1486521202, 1486521202),
('/admin/*', 2, NULL, NULL, NULL, 1486521228, 1486521228),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1486521223, 1486521223),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1486521223, 1486521223),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1486521223, 1486521223),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1486521223, 1486521223),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1486521223, 1486521223),
('/admin/default/*', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/default/index', 2, NULL, NULL, NULL, 1486521223, 1486521223),
('/admin/menu/*', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/menu/create', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/menu/index', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/menu/update', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/menu/view', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/permission/*', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/permission/create', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/permission/index', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/permission/update', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/permission/view', 2, NULL, NULL, NULL, 1486521224, 1486521224),
('/admin/role/*', 2, NULL, NULL, NULL, 1486521226, 1486521226),
('/admin/role/assign', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/role/create', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/role/delete', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/role/index', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/role/remove', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/role/update', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/role/view', 2, NULL, NULL, NULL, 1486521225, 1486521225),
('/admin/route/*', 2, NULL, NULL, NULL, 1486521226, 1486521226),
('/admin/route/assign', 2, NULL, NULL, NULL, 1486521226, 1486521226),
('/admin/route/create', 2, NULL, NULL, NULL, 1486521226, 1486521226),
('/admin/route/index', 2, NULL, NULL, NULL, 1486521226, 1486521226),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1486521226, 1486521226),
('/admin/route/remove', 2, NULL, NULL, NULL, 1486521226, 1486521226),
('/admin/rule/*', 2, NULL, NULL, NULL, 1486521227, 1486521227),
('/admin/rule/create', 2, NULL, NULL, NULL, 1486521227, 1486521227),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1486521227, 1486521227),
('/admin/rule/index', 2, NULL, NULL, NULL, 1486521226, 1486521226),
('/admin/rule/update', 2, NULL, NULL, NULL, 1486521227, 1486521227),
('/admin/rule/view', 2, NULL, NULL, NULL, 1486521226, 1486521226),
('/admin/user/*', 2, NULL, NULL, NULL, 1486521228, 1486521228),
('/admin/user/activate', 2, NULL, NULL, NULL, 1486521228, 1486521228),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1486521228, 1486521228),
('/admin/user/delete', 2, NULL, NULL, NULL, 1486521227, 1486521227),
('/admin/user/index', 2, NULL, NULL, NULL, 1486521227, 1486521227),
('/admin/user/login', 2, NULL, NULL, NULL, 1486521228, 1486521228),
('/admin/user/logout', 2, NULL, NULL, NULL, 1486521228, 1486521228),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1486521228, 1486521228),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1486521228, 1486521228),
('/admin/user/signup', 2, NULL, NULL, NULL, 1486521228, 1486521228),
('/admin/user/view', 2, NULL, NULL, NULL, 1486521227, 1486521227),
('/debug/*', 2, NULL, NULL, NULL, 1486521230, 1486521230),
('/debug/default/*', 2, NULL, NULL, NULL, 1486521229, 1486521229),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1486521229, 1486521229),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1486521229, 1486521229),
('/debug/default/index', 2, NULL, NULL, NULL, 1486521229, 1486521229),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1486521229, 1486521229),
('/debug/default/view', 2, NULL, NULL, NULL, 1486521229, 1486521229),
('/gii/*', 2, NULL, NULL, NULL, 1486521230, 1486521230),
('/gii/default/*', 2, NULL, NULL, NULL, 1486521230, 1486521230),
('/gii/default/action', 2, NULL, NULL, NULL, 1486521230, 1486521230),
('/gii/default/diff', 2, NULL, NULL, NULL, 1486521230, 1486521230),
('/gii/default/index', 2, NULL, NULL, NULL, 1486521230, 1486521230),
('/gii/default/preview', 2, NULL, NULL, NULL, 1486521230, 1486521230),
('/gii/default/view', 2, NULL, NULL, NULL, 1486521230, 1486521230),
('/khusus/*', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/khusus/agen', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/khusus/captcha', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/khusus/daftar', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/khusus/error', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/khusus/index', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/khusus/lihat', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/khusus/tambah', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/nyoba/*', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/about', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/captcha', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/contact', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/error', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/index', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/jsoncalendar', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/login', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/logout', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/masonry', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/slidebars', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/nyoba/sly', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/pesanan/*', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/pesanan/create', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/pesanan/delete', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/pesanan/index', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/pesanan/update', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/pesanan/view', 2, NULL, NULL, NULL, 1486521231, 1486521231),
('/site/*', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/site/agen', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/site/captcha', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/site/daftar-agenda', 2, NULL, NULL, NULL, 1486818914, 1486818914),
('/site/error', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/site/index', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/site/login', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/site/logout', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/site/request-password-reset', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/site/reset-password', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/site/signup', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/site/time-table', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/user/*', 2, NULL, NULL, NULL, 1486521233, 1486521233),
('/user/index', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('/user/tambah-pesanan', 2, NULL, NULL, NULL, 1486521232, 1486521232),
('SuperAdmin', 1, 'Dapat mengakses semua halaman.', NULL, NULL, 1486521313, 1486707896),
('User', 1, 'Hanya mengakses link user/*', NULL, NULL, 1486528820, 1486707910);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('SuperAdmin', '/*'),
('User', '/user/*');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES
(1, 'Beranda', NULL, '/site/index', 1, NULL),
(2, 'Login', NULL, '/site/login', 1, NULL),
(3, 'Logout', NULL, '/site/logout', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1486344409),
('m140506_102106_rbac_init', 1486356054),
('m140602_111327_create_menu_table', 1486344418),
('m160312_050000_create_user', 1486344418);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nim` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `id_ruang` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `no_surat` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_verifikasi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `kapasitas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `nama`, `kapasitas`) VALUES
('VICON1', 'VIDEO CONFERENCE LT. 1', 35),
('VICON2', 'VIDEO CONFERENCE LT. 2', 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `nim` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nim`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '', '', 'ssimg', 'yAG-kNi8pqkfL_2QSSmjC8XTua2rtFfG', '$2y$13$vksBAr5epijb2iIjYoH.xO8xFOUdzV1JIIyHQ4Fsr7JxD0s50TiBW', NULL, 'sugeng.sulistiyawan@gmail.com', 10, 1486286924, 1486286924);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim_mahasiswa` (`nim`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_ruang_2` (`id_ruang`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `email_2` (`email`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
