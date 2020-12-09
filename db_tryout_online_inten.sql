-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 11:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tryout_online_inten`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id_group` varchar(50) NOT NULL,
  `nama_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id_group`, `nama_group`) VALUES
('INTEN_01', 'IPA'),
('INTEN_02', 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `group_user`
--

CREATE TABLE `group_user` (
  `id_group_user` int(128) NOT NULL,
  `id_group` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 3),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 3),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 3),
(7, '2016_06_01_000004_create_oauth_clients_table', 3),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 3),
(9, '2020_10_04_201433_create_tasks_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'aX3su6WWQlb2rjPAkSM4zlV3Kq4TZvE6MtkWrYZ0', NULL, 'http://localhost', 1, 0, 0, '2020-08-21 01:21:09', '2020-08-21 01:21:09'),
(2, NULL, 'Laravel Password Grant Client', 'XvOL7uiTq95E4JDZJsgZcR4ArAlBAQBVpNZUaPGQ', 'users', 'http://localhost', 0, 1, 0, '2020-08-21 01:21:09', '2020-08-21 01:21:09'),
(3, NULL, 'Laravel Personal Access Client', '3eDo6R5u3DYm6hRNAL8iQ0M85n23Itwu1fjrxVId', NULL, 'http://localhost', 1, 0, 0, '2020-08-21 01:22:56', '2020-08-21 01:22:56'),
(4, NULL, 'Laravel Password Grant Client', 'e8dDeFUWelrn5YPhBbO1KB3B856TraBhWOXVOHlR', 'users', 'http://localhost', 0, 1, 0, '2020-08-21 01:22:56', '2020-08-21 01:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-08-21 01:21:09', '2020-08-21 01:21:09'),
(2, 3, '2020-08-21 01:22:56', '2020-08-21 01:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pilihan_jawaban`
--

CREATE TABLE `pilihan_jawaban` (
  `id_pilihan_jawaban` int(50) NOT NULL,
  `id_soal` int(50) NOT NULL,
  `isi_pilihan_jawaban` text NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question_attempt1`
--

CREATE TABLE `question_attempt1` (
  `id_question_attempt` int(128) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_pilihan_jawaban` int(128) NOT NULL,
  `id_tryout` varchar(50) NOT NULL,
  `waktu_pengerjaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question_attempt2`
--

CREATE TABLE `question_attempt2` (
  `id_question_attempt2` int(128) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_tryout` varchar(50) NOT NULL,
  `id_section` int(128) NOT NULL,
  `nilai` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` varchar(50) NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
('ADMIN', 'Administrator'),
('PESERTA', 'Peserta'),
('SISWA', 'Siswa'),
('TEACHER', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id_role_user` int(128) NOT NULL,
  `id_role` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id_section` int(128) NOT NULL,
  `nama_section` varchar(50) NOT NULL,
  `batas_waktu` datetime NOT NULL,
  `urutan_section` int(128) NOT NULL,
  `id_tryout` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(50) NOT NULL,
  `id_section` int(50) NOT NULL,
  `urutan_soal` int(50) NOT NULL,
  `isi_soal` text NOT NULL,
  `bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tryout`
--

CREATE TABLE `tryout` (
  `id_tryout` varchar(50) NOT NULL,
  `nama_tryout` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_akhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tryout`
--

INSERT INTO `tryout` (`id_tryout`, `nama_tryout`, `deskripsi`, `tanggal_mulai`, `tanggal_akhir`) VALUES
('TO_01', 'tryout_01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus sapien a mauris eleifend tincidunt. Suspendisse pharetra elit id risus sagittis mollis. Donec eget efficitur neque, efficitur cursus quam. Pellentesque volutpat nisi felis, vitae lacinia sem consequat ut. Phasellus mollis mauris eu velit pretium, non blandit sapien pretium. Mauris vehicula erat justo, ut bibendum enim commodo quis. Suspendisse potenti.', '2020-12-25 00:00:00', '2020-12-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `nomor_telepon`, `email`, `password`) VALUES
('USER_01', 'Danny', '0286023682306', 'user01@gmail.com', '123456'),
('USER_03', 'Danny Ambarita', '0895605932088', 'danny.ambarita130@gmail.com', '123456'),
('USER_04', 'Hello World', '123456789', 'email', '123'),
('USER_05', 'hello world 2', '1234567890', 'dannyambarita', '123123123'),
('USER_07', 'Danny Ambarita', '08123456789', 'danny@gmail.com', '23f89b');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Danny', 'danny.ambarita130@gmail.com', NULL, '$2y$10$KweapZG7YKxtG4T7r587b.ZWmndOnfIzSBMZ5pkqgnOsh/FhQNkim', 'LIFhOHfhiRNst4NrwWGbObmckso58IUtCr6ffRz5oI7PlYIoGdvexQ9P8kep', '2020-08-20 16:58:29', '2020-08-20 16:58:29'),
(2, 'Christio Danny Gratia Ambarita', 'danny.ambarita153@gmail.com', NULL, '$2y$10$z9VoJ.CUI.ITcZtwjuPwwuPkPgg96dt1ZMnGUIerU1kDNd0OGirxO', NULL, '2020-08-20 16:59:38', '2020-08-20 16:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_tryout`
--

CREATE TABLE `user_tryout` (
  `id_user_tryout` int(128) NOT NULL,
  `id_tryout` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `group_user`
--
ALTER TABLE `group_user`
  ADD PRIMARY KEY (`id_group_user`),
  ADD KEY `id_group` (`id_group`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  ADD PRIMARY KEY (`id_pilihan_jawaban`),
  ADD KEY `id_soal` (`id_soal`);

--
-- Indexes for table `question_attempt1`
--
ALTER TABLE `question_attempt1`
  ADD PRIMARY KEY (`id_question_attempt`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tryout` (`id_tryout`),
  ADD KEY `id_pilihan_jawaban` (`id_pilihan_jawaban`);

--
-- Indexes for table `question_attempt2`
--
ALTER TABLE `question_attempt2`
  ADD PRIMARY KEY (`id_question_attempt2`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tryout` (`id_tryout`),
  ADD KEY `id_section` (`id_section`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id_role_user`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id_section`),
  ADD KEY `id_tryout` (`id_tryout`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_section` (`id_section`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tryout`
--
ALTER TABLE `tryout`
  ADD PRIMARY KEY (`id_tryout`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_tryout`
--
ALTER TABLE `user_tryout`
  ADD PRIMARY KEY (`id_user_tryout`),
  ADD KEY `id_tryout` (`id_tryout`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_user`
--
ALTER TABLE `group_user`
  MODIFY `id_group_user` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  MODIFY `id_pilihan_jawaban` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_attempt1`
--
ALTER TABLE `question_attempt1`
  MODIFY `id_question_attempt` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_attempt2`
--
ALTER TABLE `question_attempt2`
  MODIFY `id_question_attempt2` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id_role_user` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id_section` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_tryout`
--
ALTER TABLE `user_tryout`
  MODIFY `id_user_tryout` int(128) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  ADD CONSTRAINT `pilihan_jawaban_ibfk_1` FOREIGN KEY (`id_soal`) REFERENCES `soal` (`id_soal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_attempt1`
--
ALTER TABLE `question_attempt1`
  ADD CONSTRAINT `question_attempt1_ibfk_1` FOREIGN KEY (`id_tryout`) REFERENCES `tryout` (`id_tryout`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question_attempt1_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question_attempt1_ibfk_3` FOREIGN KEY (`id_pilihan_jawaban`) REFERENCES `pilihan_jawaban` (`id_pilihan_jawaban`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_attempt2`
--
ALTER TABLE `question_attempt2`
  ADD CONSTRAINT `question_attempt2_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question_attempt2_ibfk_2` FOREIGN KEY (`id_tryout`) REFERENCES `tryout` (`id_tryout`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question_attempt2_ibfk_3` FOREIGN KEY (`id_section`) REFERENCES `section` (`id_section`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `role_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`id_tryout`) REFERENCES `tryout` (`id_tryout`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_section`) REFERENCES `section` (`id_section`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_tryout`
--
ALTER TABLE `user_tryout`
  ADD CONSTRAINT `user_tryout_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_tryout_ibfk_2` FOREIGN KEY (`id_tryout`) REFERENCES `tryout` (`id_tryout`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
