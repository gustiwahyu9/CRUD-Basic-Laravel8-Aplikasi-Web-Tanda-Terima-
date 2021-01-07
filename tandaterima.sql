-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 05.25
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tandaterima`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerima`
--

CREATE TABLE `penerima` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tanggal_penyerahan` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `satker` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `lpj_bulan` varchar(15) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerima`
--

INSERT INTO `penerima` (`id`, `nama_lengkap`, `tanggal_penyerahan`, `jenis_kelamin`, `satker`, `petugas`, `lpj_bulan`, `tahun`, `image`, `created_at`, `updated_at`) VALUES
(25, 'gusti', '2020-09-03', 'L', 'UPT PERPUSTAKAAN', 'dhimas', 'JANUARI', '2019', 'img103 (3).jpg', '2020-09-14 20:56:21', '2020-09-14 20:56:21'),
(43, 'dhimas', '2020-11-06', 'L', 'UPT BAHASA', 'dhimas', 'FEBRUARI', '2020', 'img057 (2).jpg', '2020-11-05 19:06:55', '2020-11-05 19:06:55'),
(45, 'adiat aprirazi', '2020-11-09', 'L', 'UPT LAB TERPADU', 'dhimas', 'JUNI', '2020', 'transkrip 2.jpg', '2020-11-08 21:47:08', '2020-11-08 21:47:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', NULL, 'default.jpg', '$2y$10$G2r5c7jIjnUU12oVb1uaX.ENMzWg4BQtHgU7HsLRuw6IAypoXY.oW', 'fsvfCd7iECacTuNDkQqATowjZyEpF88vx6LZKG2qh0ZKqMVDfNBHUh5tbyw9', '2020-09-09 23:33:57', '2020-09-09 23:33:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penerima`
--
ALTER TABLE `penerima`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
