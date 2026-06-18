-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2026 at 06:54 AM
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
-- Database: `db_simulasi_pbo_ti1d_fawwazfadhlurrahmanayyasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(10,2) NOT NULL,
  `jalur_pendaftaran` enum('reguler','prestasi','kedinasan') NOT NULL,
  `pilihan_prodi` varchar(50) DEFAULT NULL,
  `lokasi_kampus` varchar(50) DEFAULT NULL,
  `jenis_prestasi` varchar(50) DEFAULT NULL,
  `tingkat_prestasi` varchar(30) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(50) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Ahmad Fauzi', 'SMAN 1 Jakarta', '85.50', '250000.00', 'reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Rina Lestari', 'SMKN 2 Bandung', '78.00', '250000.00', 'reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(3, 'Dewi Sartika', 'SMA Kristen Yusuf', '92.25', '250000.00', 'reguler', 'Teknik Informatika', 'Kampus Kota', NULL, NULL, NULL, NULL),
(4, 'Budi Darmawan', 'SMAN 3 Yogyakarta', '80.10', '250000.00', 'reguler', 'Teknik Elektro', 'Kampus Utama', NULL, NULL, NULL, NULL),
(5, 'Fajar Nusantara', 'SMKN 1 Cilacap', '88.40', '250000.00', 'reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(6, 'Siti Aminah', 'SMA Al-Azhar', '83.75', '250000.00', 'reguler', 'Akuntansi', 'Kampus Kota', NULL, NULL, NULL, NULL),
(7, 'Hendra Wijaya', 'SMAN 5 Surabaya', '79.90', '250000.00', 'reguler', 'Sistem Informasi', 'Kampus Kota', NULL, NULL, NULL, NULL),
(8, 'Rizky Ramadhan', 'SMAN 70 Jakarta', '95.00', '150000.00', 'prestasi', 'Teknik Informatika', NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(9, 'Amalia Putri', 'SMA Taruna Nusantara', '91.50', '150000.00', 'prestasi', 'Teknik Elektro', NULL, 'Futsal', 'Provinsi', NULL, NULL),
(10, 'Gilang Permana', 'SMAN 1 Sulsel', '89.00', '150000.00', 'prestasi', 'Sistem Informasi', NULL, 'Karya Ilmiah Remaja', 'Nasional', NULL, NULL),
(11, 'Nadia Utami', 'SMA 1 Surakarta', '94.20', '150000.00', 'prestasi', 'Akuntansi', NULL, 'Debat Bahasa Inggris', 'Internasional', NULL, NULL),
(12, 'Dika Pratama', 'SMKN 2 Surabaya', '87.60', '150000.00', 'prestasi', 'Teknik Informatika', NULL, 'Lomba Kompetensi Siswa', 'Nasional', NULL, NULL),
(13, 'Putri Rahayu', 'SMAN 8 Yogyakarta', '93.00', '150000.00', 'prestasi', 'Sistem Informasi', NULL, 'Pemain Biola Terbaik', 'Provinsi', NULL, NULL),
(14, 'Eko Prasetyo', 'SMAN 1 Purwokerto', '86.00', '300000.00', 'kedinasan', NULL, NULL, NULL, NULL, 'SK-990/KD/2026', 'Kementerian Perhubungan'),
(15, 'Fitriani', 'SMAN 2 Semarang', '88.50', '300000.00', 'kedinasan', NULL, NULL, NULL, NULL, 'SK-112/KD/2026', 'Badan Siber dan Sandi Negara'),
(16, 'Andika Yudha', 'SMA Krida Nusantara', '84.10', '300000.00', 'kedinasan', NULL, NULL, NULL, NULL, 'SK-405/KD/2026', 'Kementerian Dalam Negeri'),
(17, 'Sari Wijayanti', 'SMAN 1 Cilacap', '90.00', '300000.00', 'kedinasan', NULL, NULL, NULL, NULL, 'SK-204/KD/2026', 'Badan Pusat Statistik'),
(18, 'Rian Hidayat', 'SMKN 1 Balikpapan', '82.30', '300000.00', 'kedinasan', NULL, NULL, NULL, NULL, 'SK-771/KD/2026', 'Kementerian ESDM'),
(19, 'Mega Utami', 'SMAN 3 Medan', '87.90', '300000.00', 'kedinasan', NULL, NULL, NULL, NULL, 'SK-302/KD/2026', 'Lembaga Ketahanan Nasional'),
(20, 'Aditya Nugraha', 'SMAN 11 Bandung', '89.15', '300000.00', 'kedinasan', NULL, NULL, NULL, NULL, 'SK-884/KD/2026', 'Kementerian Keuangan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
