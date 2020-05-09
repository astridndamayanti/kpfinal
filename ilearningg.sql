-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2020 pada 03.54
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilearningg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `user_id`, `nip`, `nama`, `jk`, `no_telp`, `created_at`, `updated_at`) VALUES
(9, 24, '1', 'Ria Rosia', 'P', '08123456789', '2019-12-16 17:52:12', '2019-12-16 17:52:12'),
(10, 25, '2', 'Catur Budi', 'L', '08987654321', '2019-12-16 17:52:44', '2019-12-16 17:52:44'),
(11, 26, '3', 'Rahmi wahyuni', 'P', '08976453421', '2019-12-16 17:53:35', '2019-12-16 17:53:35'),
(12, 27, '4', 'Nawawi', 'L', '0897865326', '2019-12-16 17:54:23', '2019-12-16 17:54:23'),
(13, 28, '5', 'Mimin Muhaemin', 'L', '08123456782', '2019-12-16 17:54:49', '2019-12-16 17:55:10'),
(14, 29, '6', 'Nunuk Mujianti', 'P', '08978346380', '2019-12-16 17:56:41', '2019-12-16 17:56:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kirim_tugas`
--

CREATE TABLE `kirim_tugas` (
  `id` int(11) UNSIGNED NOT NULL,
  `tugas_id` int(11) UNSIGNED NOT NULL,
  `siswa_id` int(11) UNSIGNED NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kirim_tugas`
--

INSERT INTO `kirim_tugas` (`id`, `tugas_id`, `siswa_id`, `catatan`, `file`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'asd', '1588932539_1588705155_TEKPER YAYAS (1).xlsx', 75, '2020-05-08 03:08:59', '2020-05-08 15:56:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen_materi`
--

CREATE TABLE `komen_materi` (
  `id` int(11) UNSIGNED NOT NULL,
  `materi_id` int(11) UNSIGNED NOT NULL,
  `post` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen_tugas`
--

CREATE TABLE `komen_tugas` (
  `id` int(11) UNSIGNED NOT NULL,
  `tugas_id` int(11) UNSIGNED NOT NULL,
  `post` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) UNSIGNED NOT NULL,
  `guru_id` int(20) UNSIGNED NOT NULL,
  `rombel_id` int(20) UNSIGNED NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `guru_id`, `rombel_id`, `mapel`, `slug`, `created_at`, `updated_at`) VALUES
(4, 11, 138, 'Bahasa Inggris', 'bahasa-inggris', '2020-05-05 09:44:38', '2020-05-05 09:44:38'),
(5, 9, 138, 'Bahasa Indonesia', 'bahasa-indonesia', '2020-05-05 09:46:19', '2020-05-05 09:46:19'),
(7, 9, 139, 'Bahasa Indonesia', 'bahasa-indonesia', '2020-05-05 11:05:49', '2020-05-05 11:05:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) UNSIGNED NOT NULL,
  `mapel_id` int(11) UNSIGNED NOT NULL,
  `rombel_id` int(100) UNSIGNED NOT NULL,
  `catatan` varchar(225) NOT NULL,
  `file` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `mapel_id`, `rombel_id`, `catatan`, `file`, `created_at`, `updated_at`) VALUES
(4, 5, 138, 'sdjklsaj', '1588697475_ones.docx', '2020-05-05 09:51:15', '2020-05-05 09:51:15'),
(5, 4, 138, 'lagi', '1588698178_TEKPER YAYAS.xlsx', '2020-05-05 10:02:58', '2020-05-05 10:02:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) UNSIGNED NOT NULL,
  `siswa_id` int(20) UNSIGNED NOT NULL,
  `tugas_id` int(20) UNSIGNED NOT NULL,
  `kkm` int(2) NOT NULL,
  `nilai` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rayon`
--

CREATE TABLE `rayon` (
  `id` int(11) UNSIGNED NOT NULL,
  `rayon` varchar(100) NOT NULL,
  `pembimbing` varchar(100) NOT NULL,
  `thn_ajaran` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rayon`
--

INSERT INTO `rayon` (`id`, `rayon`, `pembimbing`, `thn_ajaran`, `created_at`, `updated_at`) VALUES
(8, 'Ciawi 1', 'Juliana Mansyur', '2019', '2019-11-22 00:07:39', '2019-11-22 00:07:39'),
(9, 'Ciawi 2', 'Rina Finanti', '2019', '2019-12-01 23:30:47', '2019-12-01 23:30:47'),
(10, 'Ciawi 3', 'Cecep Rahmat', '2019', '2019-12-01 23:31:31', '2019-12-01 23:31:31'),
(11, 'Ciawi 4', 'Elvia Rosaa', '2019', '2020-01-27 19:52:29', '2020-01-27 19:52:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rombel`
--

CREATE TABLE `rombel` (
  `id` int(11) UNSIGNED NOT NULL,
  `rombel` varchar(20) NOT NULL,
  `thn_ajaran` varchar(30) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rombel`
--

INSERT INTO `rombel` (`id`, `rombel`, `thn_ajaran`, `slug`, `created_at`, `updated_at`) VALUES
(120, 'OTKP X-1', '2019-2020', 'otkp-x-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(121, 'OTKP X-2', '2019-2020', 'otkp-x-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(122, 'OTKP XI-1', '2019-2020', 'otkp-xi-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(123, 'OTKP XI-2', '2019-2020', 'otkp-xi-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(124, 'OTKP XII-1', '2019-2020', 'otkp-xii-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(125, 'OTKP XII-2', '2019-2020', 'otkp-xii-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(126, 'RPL X-1', '2019-2020', 'rpl-x-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(127, 'RPL X-2', '2019-2020', 'rpl-x-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(128, 'RPL X-3', '2019-2020', 'rpl-x-3', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(129, 'RPL X-4', '2019-2020', 'rpl-x-4', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(130, 'RPL XI-1', '2019-2020', 'rpl-xi-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(131, 'RPL XI-2', '2019-2020', 'rpl-xi-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(132, 'RPL XI-3', '2019-2020', 'rpl-xi-3', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(133, 'RPL XI-4', '2019-2020', 'rpl-xi-4', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(134, 'RPL XII-1', '2019-2020', 'rpl-xii-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(135, 'RPL XII-2', '2019-2020', 'rpl-xii-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(136, 'RPL XII-3', '2019-2020', 'rpl-xii-3', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(137, 'RPL XII-4', '2019-2020', 'rpl-xii-4', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(138, 'BDP X-1', '2019-2020', 'bdp-x-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(139, 'BDP X-2', '2019-2020', 'bdp-x-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(140, 'BDP XI-1', '2019-2020', 'bdp-xi-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(141, 'BDP XI-2', '2019-2020', 'bdp-xi-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(142, 'BDP XII-1', '2019-2020', 'bdp-xii-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(143, 'BDP XII-2', '2019-2020', 'bdp-xii-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(144, 'MMD X-1', '2019-2020', 'mmd-x-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(145, 'MMD X-2', '2019-2020', 'mmd-x-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(146, 'MMD XI-1', '2019-2020', 'mmd xi-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(147, 'MMD XI-2', '2019-2020', 'mmd xi-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(148, 'MMD XII-1', '2019-2020', 'mmd-xii-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(149, 'MMD XII-2', '2019-2020', 'mmd-xii-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(150, 'TBG X-1', '2019-2020', 'tbg-x-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(151, 'TBG X-2', '2019-2020', 'tbg-x-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(152, 'TBG XI-1', '2019-2020', 'tbg-xi-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(153, 'TBG XII-1', '2019-2020', 'tbg-xii-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(154, 'HTL X-1', '2019-2020', 'htl-x-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(155, 'HTL X-2', '2019-2020', 'htl-x-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(156, 'HTL XI-1', '2019-2020', 'htl-xi-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(157, 'HTL XII-1', '2019-2020', 'htl-xii-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(158, 'TKJ X-1', '2019-2020', 'tkj-x-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(159, 'TKJ X-2', '2019-2020', 'tkj-x-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(160, 'TKJ X-3', '2019-2020', 'tkj-x-3', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(161, 'TKJ X-4', '2019-2020', 'tkj-x-4', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(162, 'TKJ XI-1', '2019-2020', 'tkj-xi-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(163, 'TKJ XI-2', '2019-2020', 'tkj-xi-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(164, 'TKJ XI-3', '2019-2020', 'tkj-xi-3', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(165, 'TKJ XI-4', '2019-2020', 'tkj-xi-4', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(166, 'TKJ XII-1', '2019-2020', 'tkj-xii-1', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(167, 'TKJ XII-2', '2019-2020', 'tkj-xii-2', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(168, 'TKJ XII-3', '2019-2020', 'tkj-xii-3', '2020-04-05 17:18:34', '2020-04-05 17:18:34'),
(169, 'TKJ XII-4', '2019-2020', 'tkj-xii-4', '2020-04-05 17:18:34', '2020-04-05 17:18:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(20) UNSIGNED NOT NULL,
  `nis` varchar(100) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `rayon_id` int(20) UNSIGNED NOT NULL,
  `rombel_id` int(11) UNSIGNED NOT NULL,
  `jk` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `user_id`, `nama`, `rayon_id`, `rombel_id`, `jk`, `created_at`, `updated_at`) VALUES
(1, '11705993', 38, 'Azromi Ammar', 8, 138, 'L', '2020-04-07 15:48:15', '2020-04-07 15:48:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) UNSIGNED NOT NULL,
  `mapel_id` int(11) UNSIGNED NOT NULL,
  `rombel_id` int(100) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `catatan` varchar(500) NOT NULL,
  `file` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `mapel_id`, `rombel_id`, `judul`, `catatan`, `file`, `deadline`, `created_at`, `updated_at`) VALUES
(2, 5, 138, 'ayo', 'fsjldalkjfajkls', '1588698212_ones.docx', '2020-05-07', '2020-05-05 10:03:33', '2020-05-05 10:03:33'),
(3, 4, 138, 'Kerjakan', 'dengan bismillah', '1588705155_TEKPER YAYAS.xlsx', '2020-05-07', '2020-05-05 11:59:15', '2020-05-05 11:59:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'amar', 'aazromi@gmail.com', NULL, '$2y$10$380oP/i1zEWcxNfNvDzdxONao3ZGM5raDk2NpENfcbekGDR1I2J0C', NULL, '2019-11-18 05:21:10', '2019-11-18 05:21:10'),
(24, 'guru', 'Ria Rosia', 'Ria@gmail.com', NULL, '$2y$10$Uqg5A9.ZDrkNDoSspj2/DOw.jB83cRjxTqZE6zvx4AtWZsXeX7t5a', NULL, '2019-12-16 17:52:12', '2019-12-16 17:52:12'),
(25, 'guru', 'Catur Budi', 'Catur@gmail.com', NULL, '$2y$10$uMUFaptu6sT4w9WSRrl0hudsheqNaqggy5/Wi/XUnI3mBRf2zz.Bu', NULL, '2019-12-16 17:52:44', '2019-12-16 17:52:44'),
(26, 'guru', 'Rahmi wahyuni', 'Rahmi@gmail.com', NULL, '$2y$10$03lDg8SzCMCZqMSztryQn.vI6KGkQFNuhtI0Pp1iYliNrSprQQfUm', NULL, '2019-12-16 17:53:35', '2019-12-16 17:53:35'),
(27, 'guru', 'Nawawi', 'Nawawi@gmail.com', NULL, '$2y$10$7X2kfmN.PhLVjwBGK5HUked4q95FwJxasYkYyOJ32jJ3pZhO3HRri', NULL, '2019-12-16 17:54:23', '2019-12-16 17:54:23'),
(28, 'guru', 'Mimin Muhaemin', 'Mimin@gmail.com', NULL, '$2y$10$n.UwNLSyvLp8TyL0w/QKjOnU32WWrwlqUrEouh/xBEjOp0SEphLyu', NULL, '2019-12-16 17:54:49', '2019-12-16 17:54:49'),
(29, 'guru', 'Nunuk Mujianti', 'nunuk@gmail.com', NULL, '$2y$10$/XlKVpMeVMwm9/TZ2nxkAeYoJC4kaynZirzVv4tEOr542gIneDckm', NULL, '2019-12-16 17:56:41', '2019-12-16 17:56:41'),
(31, 'siswa', 'Muhammad Ridho Irgiansyah', 'ridho@gmail.com', NULL, '$2y$10$/DWmXmC4Yv8WQf0blIQJDeB8DQTgTZEUchA4PcmaN0gvZHN3W9TyC', NULL, '2019-12-16 19:41:31', '2019-12-16 19:41:31'),
(32, 'siswa', 'Muhammad Febrian Arrasyd', 'boy@gmail.com', NULL, '$2y$10$uviaNl7qf0sL/fSgdEbFBuiVPReaLfbPnCPX07pNjTN2rsl8bBtM.', NULL, '2019-12-16 19:45:35', '2019-12-16 19:45:35'),
(33, 'siswa', 'Muhammad Ridho Irgiansyah', 'irgi@gmail.com', NULL, '$2y$10$4jR.wub4g6c3ErLuqfhQkuzXc7OgINTWke7DOxD5g6ANsKbPYSgiC', NULL, '2019-12-16 23:23:23', '2019-12-16 23:23:23'),
(34, 'siswa', 'Astrid Novika', 'astrid@gmail.com', NULL, '$2y$10$/qMqlyDkioDinW9Vb4ejXOrGUWDxRCxSrKbb/RHkq.h63PEpplun6', NULL, '2020-01-27 18:41:40', '2020-01-27 18:41:40'),
(35, 'siswa', 'Azromi Ammar', 'ammar_ade@yahoo.co.id', NULL, '$2y$10$JkTkbKLqOyXHl5eJzorXneH/Bm0gnWIyPl1TLi2qDE5qM3sg.zQLm', NULL, '2020-01-27 19:51:24', '2020-01-27 19:51:24'),
(36, 'guru', 'zahra', 'zahra@gmail.com', NULL, '$2y$10$o9NbsSFI9brD2OQrrFA9z.3qviAKunJ316xGRwLobZhm1CAbDT/4m', NULL, '2020-01-27 20:24:38', '2020-01-27 20:24:38'),
(37, 'siswa', 'fsdfdas', 'coba@gmail.com', NULL, 'coba', NULL, NULL, NULL),
(38, 'siswa', 'Azromi Ammar', 'siswa@gmail.com', NULL, '$2y$10$B83J8jhbbHPN2PrmVutble.icJo8vPQ9n/RLguvz2kV1zLkikoV1C', NULL, '2020-04-07 15:48:15', '2020-04-07 15:48:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `kirim_tugas`
--
ALTER TABLE `kirim_tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_id` (`tugas_id`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- Indeks untuk tabel `komen_materi`
--
ALTER TABLE `komen_materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_id` (`materi_id`);

--
-- Indeks untuk tabel `komen_tugas`
--
ALTER TABLE `komen_tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tugas_id` (`tugas_id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru_id` (`guru_id`),
  ADD KEY `rombel_id` (`rombel_id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_id` (`mapel_id`),
  ADD KEY `rombel_id` (`rombel_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_id` (`siswa_id`),
  ADD KEY `tugas_id` (`tugas_id`);

--
-- Indeks untuk tabel `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rayon_id` (`rayon_id`),
  ADD KEY `rombel_id` (`rombel_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_id` (`mapel_id`),
  ADD KEY `rombel_id` (`rombel_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kirim_tugas`
--
ALTER TABLE `kirim_tugas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `komen_materi`
--
ALTER TABLE `komen_materi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komen_tugas`
--
ALTER TABLE `komen_tugas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rayon`
--
ALTER TABLE `rayon`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `rombel`
--
ALTER TABLE `rombel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `komen_materi`
--
ALTER TABLE `komen_materi`
  ADD CONSTRAINT `komen_materi_ibfk_1` FOREIGN KEY (`materi_id`) REFERENCES `materi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komen_tugas`
--
ALTER TABLE `komen_tugas`
  ADD CONSTRAINT `komen_tugas_ibfk_1` FOREIGN KEY (`tugas_id`) REFERENCES `tugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `mapel_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mapel_ibfk_2` FOREIGN KEY (`rombel_id`) REFERENCES `rombel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_ibfk_2` FOREIGN KEY (`rombel_id`) REFERENCES `rombel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`tugas_id`) REFERENCES `tugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`rombel_id`) REFERENCES `rombel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`rayon_id`) REFERENCES `rayon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tugas_ibfk_2` FOREIGN KEY (`rombel_id`) REFERENCES `rombel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
