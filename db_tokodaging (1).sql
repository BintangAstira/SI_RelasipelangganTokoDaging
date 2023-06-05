-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 16.56
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokodaging`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dagings`
--

CREATE TABLE `dagings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_daging` varchar(255) NOT NULL,
  `id_pegawai` varchar(255) NOT NULL,
  `kode_daging` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dagings`
--

INSERT INTO `dagings` (`id`, `id_daging`, `id_pegawai`, `kode_daging`, `harga`, `merk`, `total`, `tanggal`, `created_at`, `updated_at`) VALUES
(2, 'DG002', 'PG002', 'W0002', '550.000', 'AstiraFood', '100 Gram', '27-04-2023', '2023-06-05 04:31:54', '2023-06-05 04:31:54'),
(3, 'W003', 'PG001', 'RB', '550.000', 'AstiraFood', '550.000', '28-05-2023', '2023-06-05 07:18:17', '2023-06-05 07:18:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `distributors`
--

CREATE TABLE `distributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_Dis` varchar(255) NOT NULL,
  `No_Telp` varchar(255) NOT NULL,
  `Jumlah_Stok` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `distributors`
--

INSERT INTO `distributors` (`id`, `Nama_Dis`, `No_Telp`, `Jumlah_Stok`, `Email`, `created_at`, `updated_at`) VALUES
(1, 'Bintang', '1234', '100 KG', 'bintang@gmail.com', '2023-06-05 05:14:15', '2023-06-05 07:15:08'),
(2, 'Agus', '123', '100 KG', 'agus@gmail.com', '2023-06-05 07:14:52', '2023-06-05 07:14:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `konsumens`
--

CREATE TABLE `konsumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konsumens`
--

INSERT INTO `konsumens` (`id`, `nama`, `no_telp`, `alamat`, `created_at`, `updated_at`) VALUES
(2, 'Bintang', 123, 'Surabaya', '2023-06-05 04:46:34', '2023-06-05 04:46:34'),
(3, 'Budi', 1234, 'Surabaya', '2023-06-05 06:05:17', '2023-06-05 06:05:17'),
(4, 'Alif', 1234, 'Malang', '2023-06-05 06:55:30', '2023-06-05 06:55:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik_sarans`
--

CREATE TABLE `kritik_sarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sarankritik` varchar(255) NOT NULL,
  `id_pelanggan` varchar(255) NOT NULL,
  `id_konsumen` varchar(255) NOT NULL,
  `kritik` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_27_085738_create_suppliers_table', 1),
(6, '2023_05_27_092709_create_distributors_table', 1),
(7, '2023_05_27_095307_create_konsumens_table', 1),
(8, '2023_05_28_112438_create_pelanggans_table', 1),
(9, '2023_06_01_140223_create_pegawais_table', 1),
(10, '2023_06_04_082953_create_poins_table', 1),
(11, '2023_06_04_112112_create_penukaran_poins_table', 1),
(12, '2023_06_04_123202_create_dagings_table', 1),
(13, '2023_06_04_135246_create_kritik_sarans_table', 1),
(14, '2023_06_05_060213_create_transaksis_table', 1),
(15, '2023_06_05_075426_create_riwayat_transaksis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_Pegawai` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_Telp` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawais`
--

INSERT INTO `pegawais` (`id`, `Nama_Pegawai`, `Alamat`, `No_Telp`, `Email`, `created_at`, `updated_at`) VALUES
(1, 'Betarina', 'Probolinggo', 123, 'beta@gmail.com', '2023-06-05 06:15:08', '2023-06-05 06:15:08'),
(2, 'Bintang', 'Malang', 123, 'bintang@gmail.com', '2023-06-05 06:15:23', '2023-06-05 06:15:23'),
(3, 'Budi', 'Jakarta', 123, 'Budi@gmail.com', '2023-06-05 06:16:42', '2023-06-05 06:16:42'),
(4, 'Rehan', 'Malang', 123, 'Rehan@gmail.com', '2023-06-05 07:03:06', '2023-06-05 07:03:06'),
(5, 'Betarina', 'Probolinggo', 12345, 'beta@gmail.com', '2023-06-05 07:11:40', '2023-06-05 07:11:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'Alif', 'Malang', 123, '2023-06-05 04:57:56', '2023-06-05 04:57:56'),
(2, 'Bintang', 'Malang', 1234, '2023-06-05 04:58:12', '2023-06-05 04:58:12'),
(4, 'Beta', 'Probolinggo', 123, '2023-06-05 06:04:35', '2023-06-05 06:04:52'),
(5, 'Rehan', 'Singosari', 123, '2023-06-05 06:54:44', '2023-06-05 06:54:44'),
(6, 'Bintang', 'Malang', 123, '2023-06-05 06:57:53', '2023-06-05 06:57:53'),
(8, 'Reza', 'Surabaya', 123, '2023-06-05 07:05:26', '2023-06-05 07:05:26'),
(9, 'Kun', 'Surabaya', 12345, '2023-06-05 07:10:53', '2023-06-05 07:10:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penukaran_poins`
--

CREATE TABLE `penukaran_poins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penukaranpoin` varchar(255) NOT NULL,
  `id_poin` varchar(255) NOT NULL,
  `id_pelanggan` varchar(255) NOT NULL,
  `id_konsumen` varchar(255) NOT NULL,
  `Jumlah_Transaksi` varchar(255) NOT NULL,
  `Total_Poin` int(11) NOT NULL,
  `Hadiah` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penukaran_poins`
--

INSERT INTO `penukaran_poins` (`id`, `id_penukaranpoin`, `id_poin`, `id_pelanggan`, `id_konsumen`, `Jumlah_Transaksi`, `Total_Poin`, `Hadiah`, `created_at`, `updated_at`) VALUES
(1, 'PP001', 'PN001', 'P001', 'K001', '1.200.000', 20, 'Samsung Galaxy', '2023-06-05 07:09:51', '2023-06-05 07:09:51'),
(2, 'PP003', 'PN002', 'P002', 'K003', '500.000', 5, 'Botol Minum', '2023-06-05 07:14:17', '2023-06-05 07:14:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poins`
--

CREATE TABLE `poins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(255) NOT NULL,
  `id_konsumen` varchar(255) NOT NULL,
  `Jumlah_Transaksi` varchar(255) NOT NULL,
  `Total_Poin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `poins`
--

INSERT INTO `poins` (`id`, `id_pelanggan`, `id_konsumen`, `Jumlah_Transaksi`, `Total_Poin`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'K001', '1.000.000', 15, '2023-06-05 07:07:20', '2023-06-05 07:07:20'),
(2, 'P002', 'K002', '300.000', 5, '2023-06-05 07:07:37', '2023-06-05 07:07:37'),
(3, 'P003', 'K004', '1.200.000', 20, '2023-06-05 07:13:29', '2023-06-05 07:13:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_transaksis`
--

CREATE TABLE `riwayat_transaksis` (
  `id_riwayattransaksi` varchar(10) NOT NULL,
  `id_pelanggan` varchar(255) NOT NULL,
  `id_konsumen` varchar(255) NOT NULL,
  `jumlah_barang` varchar(255) NOT NULL,
  `tanggal_transaksi` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `Metode_bayar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `riwayat_transaksis`
--

INSERT INTO `riwayat_transaksis` (`id_riwayattransaksi`, `id_pelanggan`, `id_konsumen`, `jumlah_barang`, `tanggal_transaksi`, `total`, `Metode_bayar`, `created_at`, `updated_at`) VALUES
('RT001', 'P001', 'K001', '100 Gram', '21-04-2023', '550.000', 'Cash', '2023-06-05 02:53:58', '2023-06-05 02:53:58'),
('RT002', 'P002', 'K002', '100 Gram', '21-04-2023', '550.000', 'Cash', '2023-06-05 03:02:35', '2023-06-05 03:02:35'),
('RT003', 'P002', 'K003', '250 Gram', '21-05-2023', '650.000', 'Online', '2023-06-05 05:54:22', '2023-06-05 05:54:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_Supplier` varchar(255) NOT NULL,
  `No_Telp` varchar(255) NOT NULL,
  `Perusahaan` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `Nama_Supplier`, `No_Telp`, `Perusahaan`, `Alamat`, `created_at`, `updated_at`) VALUES
(1, 'Bintang', '123', 'PT ASTIRA TBK', 'Malang', '2023-06-05 05:19:36', '2023-06-05 05:19:36'),
(2, 'Betarina', '12345', 'PT Betarina TBK', 'Probolinggo', '2023-06-05 05:19:58', '2023-06-05 05:19:58'),
(3, 'Betarina', '123', 'PT MaxFood TBK', 'Malang', '2023-06-05 07:15:47', '2023-06-05 07:15:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id_transaksip` varchar(255) NOT NULL,
  `id_riwayattransaksi` varchar(255) NOT NULL,
  `id_daging` varchar(255) NOT NULL,
  `Jumlah_Transaksi` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id_transaksip`, `id_riwayattransaksi`, `id_daging`, `Jumlah_Transaksi`, `tanggal`, `created_at`, `updated_at`) VALUES
('TP001', 'RT001', 'DG001', '200.000', '26-04-2023', '2023-06-05 03:19:06', '2023-06-05 03:19:06'),
('TP002', 'RT002', 'DG002', '300.000', '28-04-2023', '2023-06-05 06:18:31', '2023-06-05 06:18:31'),
('TP003', 'RT004', 'DG004', '500.000', '05-06-2023', '2023-06-05 06:59:32', '2023-06-05 06:59:32'),
('TP004', 'RT005', 'DG005', '1.000.00', '05-04-2023', '2023-06-05 07:03:59', '2023-06-05 07:03:59'),
('TP005', 'RT006', 'W001', '1.200.000', '28-05-2023', '2023-06-05 07:06:42', '2023-06-05 07:06:42'),
('TP006', 'RT007', 'W002', '1.000.00', '28-05-2023', '2023-06-05 07:12:33', '2023-06-05 07:12:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dagings`
--
ALTER TABLE `dagings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `konsumens`
--
ALTER TABLE `konsumens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kritik_sarans`
--
ALTER TABLE `kritik_sarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penukaran_poins`
--
ALTER TABLE `penukaran_poins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `poins`
--
ALTER TABLE `poins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_transaksis`
--
ALTER TABLE `riwayat_transaksis`
  ADD PRIMARY KEY (`id_riwayattransaksi`);

--
-- Indeks untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id_transaksip`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dagings`
--
ALTER TABLE `dagings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konsumens`
--
ALTER TABLE `konsumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kritik_sarans`
--
ALTER TABLE `kritik_sarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penukaran_poins`
--
ALTER TABLE `penukaran_poins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `poins`
--
ALTER TABLE `poins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
