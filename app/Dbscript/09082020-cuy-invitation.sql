-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 09 Agu 2020 pada 08.37
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuy-invitation`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id` int(10) UNSIGNED NOT NULL,
  `links` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif_flag` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id`, `links`, `email`, `telepon`, `alamat`, `banner_1`, `banner_2`, `banner_3`, `deskripsi_banner`, `aktif_flag`, `created_at`, `updated_at`) VALUES
(1, 'http', 'cuyInfo@gmail.com', '081369212122', 'Jakarta', '', '', '', '', 'Y', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_gallery`
--

CREATE TABLE `foto_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `template_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `foto_gallery`
--

INSERT INTO `foto_gallery` (`id`, `user_id`, `template_id`, `path_foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 2, '1', 'template_customer_gallery/ETBXLOheqNOPY95N8AAr8H8oN6krsoc4YpJBaXVt.jpeg', NULL, '2020-08-08 22:50:31', '2020-08-08 22:50:31'),
(2, 2, '1', 'template_customer_gallery/r0CNDH0iEYrR3T4zZzctGY9DipLVOvwMQ7GaCeLr.jpeg', NULL, '2020-08-08 22:50:31', '2020-08-08 22:50:31'),
(3, 2, '1', 'template_customer_gallery/JF3yZ1osxrbFAGK6N3isOSZOxKGgBrGY51x6Gt5M.jpeg', NULL, '2020-08-08 22:50:31', '2020-08-08 22:50:31'),
(4, 2, '1', 'template_customer_gallery/KTJb2zxHtEpdlhlU8WrTBINwb5QahRYP3DtFrWVK.jpeg', NULL, '2020-08-08 22:50:31', '2020-08-08 22:50:31'),
(5, 2, '1', 'template_customer_gallery/TK9sLwWQOVIqFbDhBWM9rqxy8eq4hzUZD4rd9pPh.jpeg', NULL, '2020-08-08 22:50:31', '2020-08-08 22:50:31'),
(6, 2, '1', 'template_customer_gallery/d6L8SA9ZXPWrbQ1EBo4FjYdqiffx5NfIGwy3uoyZ.jpeg', NULL, '2020-08-08 22:50:31', '2020-08-08 22:50:31'),
(7, 2, '1', 'template_customer_gallery/fypanSLhkXrN9aA2nruFI9kFsi4QdXmGzXZV3tUo.jpeg', NULL, '2020-08-08 22:50:31', '2020-08-08 22:50:31'),
(8, 2, '1', 'template_customer_gallery/RaWTvyVTMadVTka1M1WCx9BnfumK2883N1AleCcM.jpeg', NULL, '2020-08-08 22:50:31', '2020-08-08 22:50:31'),
(9, 2, '1', 'template_customer_gallery/cDsPBCUqcbNymEhRKdvX09JUyBbIdmzihUjy7Zyd.jpeg', NULL, '2020-08-08 22:50:31', '2020-08-08 22:50:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif_flag` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(152, '2020_08_05_065850_create_template_table', 3),
(191, '2014_10_12_000000_create_users_table', 4),
(192, '2014_10_12_100000_create_password_resets_table', 4),
(193, '2020_05_14_070200_create_user_attribut_table', 4),
(194, '2020_05_14_071615_create_company_table', 4),
(195, '2020_05_14_072154_create_template_company_table', 4),
(196, '2020_05_14_072248_create_template_customer_table', 4),
(197, '2020_05_14_072430_create_foto_gallery_table', 4),
(198, '2020_05_14_073134_create_transaksi_table', 4),
(199, '2020_05_14_073756_create_role_table', 4),
(200, '2020_07_24_093638_create_komentar_table', 4),
(201, '2020_07_24_094434_create_testimoni_table', 4),
(202, '2020_08_05_011912_create_add_coloum_template_customers_table', 4),
(203, '2020_08_05_065850_create_template_design_table', 4),
(204, '2020_08_05_072023_create_template_type_table', 4),
(205, '2020_08_06_124904_create_notifications_table', 4),
(206, '2020_08_09_032742_create_social_facebook_accounts_table', 4),
(207, '2020_08_09_053303_create_add_coloum_template_company_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `kode_role` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`user_id`, `kode_role`, `created_at`, `updated_at`) VALUES
(1, 'SA', '2020-08-08 22:21:56', '2020-08-08 22:21:56'),
(2, 'CSR', '2020-08-08 22:47:46', '2020-08-08 22:47:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_facebook_accounts`
--

CREATE TABLE `social_facebook_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_company`
--

CREATE TABLE `template_company` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_template` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_type_template` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_template_design` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_template` int(11) DEFAULT NULL,
  `deskripsi_template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `template_company_kode` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `template_company`
--

INSERT INTO `template_company` (`id`, `nama_template`, `kode_type_template`, `kode_template_design`, `url_gambar`, `harga_template`, `deskripsi_template`, `link`, `created_at`, `updated_at`, `template_company_kode`) VALUES
(1, 'DESIGN C01', 'WDDNG', 'MDRN', 'template_company/8dFpWMnJQUx76ys9V3WAKzR2YNjDEqvrHH603VlZ.jpeg', 250000, 'Murah', 'design_C01', '2020-08-08 22:22:49', '2020-08-08 22:39:39', 'C01'),
(2, 'DESIGN C02', 'WDDNG', 'MDRN', 'template_company/3R42Ctem4WLP6b2miGmILTpolxPLtMIBFyGdgXQ4.jpeg', 250000, 'A', 'A', '2020-08-08 22:45:57', '2020-08-08 22:55:11', 'C02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_customer`
--

CREATE TABLE `template_customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `kode_template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `links` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mempelai_pria` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_panggilan_pria` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mempelai_wanita` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_panggilan_wanita` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_orang_tua_pria_bapak` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_orang_tua_pria_ibu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_orang_tua_wanita_bapak` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_orang_tua_wanita_ibu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_akad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_akad` datetime DEFAULT NULL,
  `tgl_resepsi` datetime DEFAULT NULL,
  `path_foto_pria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_foto_wanita` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `latitude` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif_flag` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `template_customer`
--

INSERT INTO `template_customer` (`id`, `user_id`, `kode_template`, `banner`, `links`, `nama_mempelai_pria`, `nama_panggilan_pria`, `nama_mempelai_wanita`, `nama_panggilan_wanita`, `nama_orang_tua_pria_bapak`, `nama_orang_tua_pria_ibu`, `nama_orang_tua_wanita_bapak`, `nama_orang_tua_wanita_ibu`, `lokasi_akad`, `tgl_akad`, `tgl_resepsi`, `path_foto_pria`, `path_foto_wanita`, `path_video`, `deskripsi`, `created_at`, `updated_at`, `latitude`, `longitude`, `aktif_flag`) VALUES
(1, 2, 'C02', 'foto_banner_cust/kYdqX3FWFr6MiFmmtDuBOyAycZshiAEfgDPzUK1l.jpeg', 'http://127.0.0.1:8000/design_C02/tomi-Princes', 'tomi erfanda', 'tomi', 'Princessss', 'Princes', 'topik', 'gina', 'akak', 's', NULL, '2020-08-29 12:48:00', '2020-08-29 12:48:00', 'foto_mempelai_pria/0VHTDgo4p1M9k6gYclNDOHLBHmNGzPvBQAIfNm56.jpeg', 'foto_mempelai_wanita/aNR1Iwixw50VIgQiYVYytnCreox9UfmDnefgqNRl.jpeg', NULL, '<p>TESTERRR</p>', '2020-08-08 22:50:31', '2020-08-08 22:55:29', '-6.2884687', '106.9900736', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_design`
--

CREATE TABLE `template_design` (
  `kode_template_design` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `template_design`
--

INSERT INTO `template_design` (`kode_template_design`, `deskripsi`, `created_at`, `updated_at`) VALUES
('MDRN', 'Modern', NULL, NULL),
('ISLM', 'Islami', NULL, NULL),
('TRDSNL', 'Tradisional', NULL, NULL),
('OTHR', 'Other', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_type`
--

CREATE TABLE `template_type` (
  `kode_type_template` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `template_type`
--

INSERT INTO `template_type` (`kode_type_template`, `deskripsi`, `created_at`, `updated_at`) VALUES
('WDDNG', 'Wedding', NULL, NULL),
('ENGMNT', 'Engangement', NULL, NULL),
('BRDY', 'Birthday', NULL, NULL),
('OTHR', 'Other', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `template_id` int(11) DEFAULT NULL,
  `path_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` mediumint(9) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `kode_transaksi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tomi erfanda', 'tomierfanda007@gmail.com', '$2y$10$CcD0dWcwqju6sH3etdMm0uqztgw/b/EbAUZTQzzsx.h7nbOeCJ2cO', NULL, '2020-08-08 22:21:56', '2020-08-08 22:21:56'),
(2, 'customer', 'customer@gmail.com', '$2y$10$LgXVJXSrAaPH3e6NqIurBO/enyQLdRPe2Sx07EsFdrpIR2TjbxD0G', NULL, '2020-08-08 22:47:46', '2020-08-08 22:47:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_attribut`
--

CREATE TABLE `user_attribut` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_attribut`
--

INSERT INTO `user_attribut` (`user_id`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`, `path_foto`, `created_at`, `updated_at`) VALUES
(1, 'tomi erfanda', '', '081368922122', '', '', '2020-08-08 22:21:56', '2020-08-08 22:21:56'),
(2, 'customer', '', '081368922122', '', '', '2020-08-08 22:47:46', '2020-08-08 22:47:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto_gallery`
--
ALTER TABLE `foto_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `template_company`
--
ALTER TABLE `template_company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `template_company_template_company_kode_unique` (`template_company_kode`);

--
-- Indeks untuk tabel `template_customer`
--
ALTER TABLE `template_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `template_design`
--
ALTER TABLE `template_design`
  ADD UNIQUE KEY `template_design_kode_template_design_unique` (`kode_template_design`);

--
-- Indeks untuk tabel `template_type`
--
ALTER TABLE `template_type`
  ADD UNIQUE KEY `template_type_kode_type_template_unique` (`kode_type_template`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_attribut`
--
ALTER TABLE `user_attribut`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `foto_gallery`
--
ALTER TABLE `foto_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `template_company`
--
ALTER TABLE `template_company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `template_customer`
--
ALTER TABLE `template_customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_attribut`
--
ALTER TABLE `user_attribut`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
