-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2026 at 03:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tebing_lonceng`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `nama`, `kesan`, `created_at`) VALUES
(1, 1, 'Ratri Indraswari', '2x kesini waktu tahun baru, pernah juga sih pas ga tahun baru. Tapi menurutku ini spot terbaik buat lihat kembang api pas Tahun baruan.', '2026-04-12 02:15:42'),
(2, 2, 'Angelina Sthefhany', 'Kesini bagusnya pada pagi hari atau sore hari, dari atas kita disuguhi pemandangan padatnya kota Samarinda dan lalu lintas sungai yg padat.', '2026-04-12 02:15:42'),
(3, 1, 'Arunayza', 'Enak tempatnya, adem angin sepoi-sepoi, cocok buat santai menikmati pemandangan kota Samarinda dan sungai mahakam.', '2026-04-12 02:15:42'),
(4, 2, 'Anastasia Dita Yustina', 'Bayar parkir 3k bayar masuk 10k. Suka suasannya tenang. Sedikit capek karna harus naik gunung dan jalan kecil. Tapi pas udah nyampe bukitnya kamu bisa liat view kota samarinda.', '2026-04-12 02:15:42'),
(5, 1, 'Mita Hady', 'Tempatnya cukup bagus, pemandangan dan spot fotonya sangat ciamik dilihat dari kejauhan. Dari sini kita bisa lihat kota Samarinda dari atas, terutama jembatan mahkota.', '2026-04-12 02:15:42'),
(6, 3, 'Fikrismd12', 'bisa bisa bagus bagus', '2026-04-14 21:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `PASSWORD`, `created_at`) VALUES
(1, 'Ratri Indraswari', 'ratri@email.com', '$2y$10$abcdefghijklmnopqrstuuVGZQwXyZ1234567890abcdefghijklm', '2026-04-12 02:15:42'),
(2, 'Angelina Sthefhany', 'angel@email.com', '$2y$10$abcdefghijklmnopqrstuuVGZQwXyZ1234567890abcdefghijklm', '2026-04-12 02:15:42'),
(3, 'Fikrismd12', 'fikrismd12@gmail.com', '$2y$10$CnuhyBYDhTawJxpxumjILud/FAoNmzUVaMSTr3i18TO6ufH7wgu.6', '2026-04-12 05:27:38'),
(4, 'Fikrikuohhhhh', 'fikrikuohhhhh@gmail.com', '$2y$10$1z964ZiZ2DGaqzsGj.PhJ.ebLbvQJxra7JyeqfFC3R8uLPYzLJRai', '2026-04-12 06:06:31'),
(5, 'Halo', 'halo@gmail.com', '$2y$10$3unB.LSPJ79/CC48n.SS1eJQDlLBCFtvNyqKcWBehS49aqj9qfdKi', '2026-04-12 07:11:01'),
(6, 'Natan', 'natan@gmail.com', '$2y$10$XBV86A/pkz3HDbRCLjanS.nhyDFf1ZkOwNdv/WjuvZd3vsNtUxfG6', '2026-04-12 11:25:44'),
(7, 'Fikri', 'fikri@gmail.com', '$2y$10$ykjI8EDkjyOrbnDTzUb9L.m9IxtldnESiEE064jy3G4Jn7R/b3qVC', '2026-04-14 14:35:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
