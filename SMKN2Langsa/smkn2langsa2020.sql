-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3036
-- Waktu pembuatan: 19 Mar 2021 pada 00.58
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn2langsa2020`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teks` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teks_singkat` varchar(65) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_b` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasmks`
--

CREATE TABLE `datasmks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `npsn` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kepsek` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpfax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datasmks`
--

INSERT INTO `datasmks` (`id`, `npsn`, `nama_sekolah`, `nama_kepsek`, `alamat`, `telpfax`, `email`, `instagram`, `youtube`, `twitter`, `facebook`, `created_at`, `updated_at`) VALUES
(1, '10105724', 'SMK NEGERI 2 LANGSA', 'Juari', 'Jl. Jend. A. Yani Paya Bujok Seulemak Kec. Langsa Baro, Kab. Kota Langsa', '-', 'smkn2langsa@gmail.com', '-', '-', '-', '-', '2021-02-27 03:18:17', '2021-02-27 03:18:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `descmajors`
--

CREATE TABLE `descmajors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_id` bigint(20) UNSIGNED NOT NULL,
  `teks` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `headmasterswords`
--

CREATE TABLE `headmasterswords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teks` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teks` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `histories`
--

INSERT INTO `histories` (`id`, `teks`, `created_at`, `updated_at`) VALUES
(4, '<!--StartFragment--><p>Sekolah ini didirikan pada tahun 1971 sebelumnya masih berstatus dibawah yayasan pemerintah Kabupaten Aceh Timur yang dipimpin oleh kepala sekolah Bapak Idris, kemudian status sekolah tersebut pada tahun 1975 berubah status menjadi sekolah Teknologi Menengah Filial Banda Aceh dibawah pimpinan Bapak Machran Rangkuti. BEC, di tahun 1976 status Filial ditingkatkan menjadi STM Negeri Langsa yang berlokasi di Jln. Ade Irma suryani hingga tahun 1978.</p><p>Pada tahun 1979 sekolah tersebut pindah lokasi di Jln. Ahmad Yani, Paya Bujok Seulemak, Langsa yang diresmikan oleh mentri Pendidikan dan Kebudayaan Prof.Dr. Syarif Thajeb, sekolah tersebut diberi nama STM 80.</p><p></p><ul><li>Bapak Ir. Sofian menjadi kepala sekolah dari tahun 1978 s/d 1992 dibawah pimpinan beliau sekolah tersebut mendapat peringkat 5 Nasional.</li><li>Bapak Drs. Abd. Razak menjadi kepala sekolah dari tahun 1992 hingga tahun 1997.</li><li>Drs. Ahmad As’adi dari tahun 1997 s/d tahun 2000.</li><li>Bapak Makmur L. S.Pd pada tahun 2000 sampai dengan tahun 2013, selama kepemimpinannya terdiri 5 bidang keahlian dengan 10 program keahlian sebelumnya, terjadi peningkatan dari tahun ke tahun menjadi 9 bidang keahlian dengan 20 program keahlian serta mengukir prestasi dari peringkat 5 Nasional sebelum kepemimpinannya menjadi peringkat 4 pada tahun 2002 hingga bertahan sampai tahun 2004.</li></ul><p></p><p>Selanjutnya di tahun 2005-2006 SMK Negeri 2 Langsa mengukir prestasi di LKS tingkat Nasional menjadi peringakat 1 Nasional dan telah berhasil menembus tingkat Internasional untuk skala Asia Tenggara dan Eropa (jepang dan jerman) dalam hal di rekrutnya siswa yang berperstasi untuk mengikuti pendidikan dari hasil LKS tingkat Nasional, untuk tingakt Provinsi masih tetap menjadi juara umum.</p><p>Dari kepemimpinan beliau SMK Negeri 2 Langsa laju perkembangan dan didukung oleh personal hingga sekolah tersebut menjadi sekolah program besar dengan mengadopsi prinsip-prinsip manajemen mutu ISO 9001:2000 untuk tingkat Nanggroe Aceh Darussalam.</p><p>Saat ini Negeri 2 Langsa di lanjutkan kepemimpinanya oleh Bapak Juari</p><!--EndFragment-->\r\n\r\n<br>', '2021-02-28 20:03:41', '2021-03-16 23:09:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `majors`
--

CREATE TABLE `majors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kaprodi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teks` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `majors`
--

INSERT INTO `majors` (`id`, `nama_jurusan`, `kaprodi`, `foto`, `teks`, `created_at`, `updated_at`) VALUES
(2, 'Rekayasa Perangkat Lunak', 'Ardinur Mahyuzar, S.ST', 'tefa2.png-1614409457.png', '<!--EndFragment-->\r\n\r\n<!--EndFragment-->\r\n\r\n <!--EndFragment-->', '2021-02-27 00:04:17', '2021-02-28 16:41:10'),
(3, 'Teknik Pemesinan', '-', 'mp1.png-1614410382.png', 'aaa<!--EndFragment-->', '2021-02-27 00:19:43', '2021-02-28 16:57:34'),
(4, 'Bisnis Konstruksi dan Properti', '-', 'kbb.png-1614420697.png', 'Jurusan&nbsp;Bisnis Konstruksi dan Properti<br><br><br>', '2021-02-27 03:11:37', '2021-02-28 16:57:03'),
(5, 'Teknik Desain Permodelan dan Informasi Bangunan', '-', 'gb.png-1614420758.png', '<!--StartFragment--><span style=\"color: rgb(0, 0, 0); font-size: medium;\">Teknik Desain Permodelan dan Informasi Bangunan&nbsp;</span><br>', '2021-02-27 03:12:38', '2021-02-28 20:43:51'),
(6, 'Teknik Audio Video', '-', 'av.png-1614420818.png', '<!--StartFragment--><span style=\"color: rgb(0, 0, 0); font-size: medium;\">Teknik Audio Video&nbsp;</span>', '2021-02-27 03:13:38', '2021-02-28 20:44:23'),
(7, 'Teknik Elektronika Industri', '-', 'elin.png-1614420886.png', 'Jurusan Teknik Elektronika Industri<!--EndFragment-->', '2021-02-27 03:14:46', '2021-02-28 20:44:55'),
(8, 'Teknik Instalasi Tenaga Listrik', '-', 'tl2.png-1614420936.png', 'Teknik Instalasi Tenaga Listrik<!--EndFragment-->', '2021-02-27 03:15:36', '2021-02-28 20:45:24'),
(9, 'Teknik Pendingin dan Tata Udara', '-', 'tp.png-1614421005.png', 'Teknik Pendingin dan Tata Udara', '2021-02-27 03:16:45', '2021-02-28 20:45:48'),
(10, 'Teknik Pengelasan', '-', 'las.png-1614421102.png', 'Teknik Pengelasan', '2021-02-27 03:18:22', '2021-02-28 20:46:25'),
(11, 'Teknik Kendaraan Ringan', '-', 'b_repair.png-1614421214.png', 'Teknik Kendaraan Ringan', '2021-02-27 03:20:14', '2021-02-28 20:46:58'),
(12, 'Teknik dan Bisnis Sepeda Motor', '-', 'tsm2.png-1614424145.png', 'Teknik dan Bisnis Sepeda Motor&nbsp;<br>', '2021-02-27 04:09:05', '2021-02-28 20:43:23'),
(14, 'Desain Interior dan Teknik Furnitur', '-', 'furnitur.png-1614470775.png', 'Desain Interior dan Teknik Furnitur', '2021-02-27 17:06:15', '2021-02-28 20:47:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2021_02_06_023717_create_teachers_table', 1),
(14, '2021_02_10_053548_create_missions_table', 1),
(15, '2021_02_17_075022_create_visions_table', 1),
(16, '2021_02_23_001153_add_column_to_users_table', 1),
(17, '2021_02_23_094921_create_histories_table', 1),
(18, '2021_02_25_075645_create_headmasterswords_table', 1),
(19, '2021_02_25_111556_create_majors_table', 1),
(20, '2021_02_26_012222_create_descmajors_table', 1),
(21, '2021_02_26_160835_create_galleries_table', 1),
(22, '2021_02_27_030218_create_datasmks_table', 2),
(23, '2021_02_28_011639_create_articles_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` char(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ADMIN', 'smknlan2', 'smkn2langsa@gmail.com', NULL, '$2y$10$LkYJB01kk0Mtg5XClGc6NOHbHuXGQmofrSXJxDI.3hXWBkVMrj2Sq', '1xjGIm7qcpZbsph14VjUL7TFI9OOCR98r6PKBGZqkuPNplO0nb9BvTOOPWtV', '2021-02-28 18:42:01', '2021-02-28 18:42:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visions`
--

CREATE TABLE `visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teks` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datasmks`
--
ALTER TABLE `datasmks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `descmajors`
--
ALTER TABLE `descmajors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `descmajors_major_id_foreign` (`major_id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `headmasterswords`
--
ALTER TABLE `headmasterswords`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datasmks`
--
ALTER TABLE `datasmks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `descmajors`
--
ALTER TABLE `descmajors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `headmasterswords`
--
ALTER TABLE `headmasterswords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `majors`
--
ALTER TABLE `majors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `visions`
--
ALTER TABLE `visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `descmajors`
--
ALTER TABLE `descmajors`
  ADD CONSTRAINT `descmajors_major_id_foreign` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
