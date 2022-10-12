-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 01:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisil_lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `no_surat`, `kategori`, `judul`, `file`, `created_at`, `updated_at`) VALUES
(6, '816487', 'Pemberitahuan', 'Pemberitahuan1', 'files1665305132.pdf', '2022-10-09 01:45:32', '2022-10-09 01:45:32'),
(10, '89173', 'Pemberitahuan', 'Surat Pemberitahuan', 'files1665463767.pdf', '2022-10-10 21:49:27', '2022-10-10 21:49:27'),
(11, '72642', 'Undangan', 'Unsangan Acara Peresmian', 'files1665463801.pdf', '2022-10-10 21:50:01', '2022-10-10 21:50:01'),
(13, 'ty567236', 'Undangan', 'Undangan12', 'files1665563596.pdf', '2022-10-12 01:33:16', '2022-10-12 01:33:16'),
(15, 'fr45434', 'Pengumuman', 'Pengumuman Kenaikan', 'files1665570460.pdf', '2022-10-12 03:27:40', '2022-10-12 03:27:40'),
(16, 'ay45265', 'Pengumuman', 'Surat Pengumuman Pemilihan', 'files1665572326.pdf', '2022-10-12 03:58:46', '2022-10-12 03:58:46'),
(17, 'ftr5443', 'Pengumuman', 'Pengumuman Pemilihan Ketua', 'files1665572464.pdf', '2022-10-12 04:01:04', '2022-10-12 04:01:04'),
(18, 'as343', 'Nota Dinas', 'Nota Dinas Terbaru', 'files1665572762.pdf', '2022-10-12 04:06:02', '2022-10-12 04:06:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
