-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Agu 2023 pada 13.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@email.com', 'admin', '2023-08-20 04:12:40', '$2y$10$KBWpTuc3fE0w3uUeeujhdee0vl3/Hvh8phfK/JGX.UCpPy7Cc9Lj.', 'IFqGyI5RIxsZOmrDitFJUeygdjFJ1M8vqvfNcC1atodVSa3dcbThJmvbEMLa', '2023-08-20 04:12:40', '2023-08-20 04:16:13'),
(2, 'Josiane Herman', 'bailey.araceli@example.net', 'user', '2023-08-20 04:12:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 't3MqyOXktx', '2023-08-20 04:12:40', '2023-08-20 04:12:40'),
(3, 'Mr. Javier Hayes', 'ernie27@example.org', 'user', '2023-08-20 04:12:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nf4kan0JKA', '2023-08-20 04:12:40', '2023-08-20 04:12:40'),
(4, 'Rhett Beier', 'constantin.effertz@example.org', 'user', '2023-08-20 04:12:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2ZWarZxG8y', '2023-08-20 04:12:40', '2023-08-20 04:12:40'),
(5, 'Andres Walsh', 'vella79@example.com', 'user', '2023-08-20 04:12:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wscWshyvnV', '2023-08-20 04:12:40', '2023-08-20 04:12:40'),
(6, 'Annamae Metz', 'chackett@example.net', 'user', '2023-08-20 04:12:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u0Zrq0Elax', '2023-08-20 04:12:40', '2023-08-20 04:12:40'),
(7, 'Derick Bergstrom', 'shana.jast@example.com', 'user', '2023-08-20 04:12:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CnR5idkPgr', '2023-08-20 04:12:40', '2023-08-20 04:12:40'),
(8, 'Lenna Bernhard', 'dwight59@example.net', 'user', '2023-08-20 04:12:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zmbfOL43U1', '2023-08-20 04:12:40', '2023-08-20 04:12:40'),
(9, 'Dr. Emory Jacobson', 'lelah19@example.org', 'user', '2023-08-20 04:12:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZemsGo2pyy', '2023-08-20 04:12:40', '2023-08-20 04:12:40'),
(10, 'Lacy Gleichner Jr.', 'kuphal.edward@example.org', 'user', '2023-08-20 04:12:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jPe0em6dDA', '2023-08-20 04:12:40', '2023-08-20 04:12:40');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
