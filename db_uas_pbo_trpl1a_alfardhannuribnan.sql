-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2026 at 02:41 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pbo_trpl1a_alfardhannuribnan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `semester` int NOT NULL,
  `tarif_ukt_nominal` decimal(12,2) NOT NULL,
  `jenis_pembiayaan` enum('Mandiri','Bidikasi','Prestasi') NOT NULL,
  `golongan_ukt` varchar(10) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nomor_kip_kuliah` varchar(30) DEFAULT NULL,
  `dana_saku_subsidi` decimal(12,2) DEFAULT NULL,
  `nama_instansi_beasiswa` varchar(100) DEFAULT NULL,
  `minimal_ipk_syarat` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `semester`, `tarif_ukt_nominal`, `jenis_pembiayaan`, `golongan_ukt`, `nama_wali`, `nomor_kip_kuliah`, `dana_saku_subsidi`, `nama_instansi_beasiswa`, `minimal_ipk_syarat`) VALUES
(1, 'Andi Saputra', '231001', 2, 3500000.00, 'Mandiri', 'UKT 3', 'Budi Saputra', NULL, NULL, NULL, NULL),
(2, 'Rina Lestari', '231002', 4, 4500000.00, 'Mandiri', 'UKT 5', 'Agus Lestari', NULL, NULL, NULL, NULL),
(3, 'Dimas Pratama', '231003', 6, 5500000.00, 'Mandiri', 'UKT 6', 'Slamet', NULL, NULL, NULL, NULL),
(4, 'Nadia Putri', '231004', 2, 3000000.00, 'Mandiri', 'UKT 2', 'Yanto', NULL, NULL, NULL, NULL),
(5, 'Asep Wijaya', '231005', 4, 4000000.00, 'Mandiri', 'UKT 4', 'Bambang', NULL, NULL, NULL, NULL),
(6, 'Putri Ayu', '231006', 6, 5000000.00, 'Mandiri', 'UKT 5', 'Rahmat', NULL, NULL, NULL, NULL),
(7, 'Yoga Prakoso', '231007', 8, 6000000.00, 'Mandiri', 'UKT 7', 'Teguh', NULL, NULL, NULL, NULL),
(8, 'Siti Nurhaliza', '231008', 2, 0.00, 'Bidikasi', NULL, NULL, 'KIP001', 700000.00, NULL, NULL),
(9, 'Rizky Ramadhan', '231009', 4, 0.00, 'Bidikasi', NULL, NULL, 'KIP002', 750000.00, NULL, NULL),
(10, 'Dewi Anggraini', '231010', 6, 0.00, 'Bidikasi', NULL, NULL, 'KIP003', 800000.00, NULL, NULL),
(11, 'Fajar Nugroho', '231011', 2, 0.00, 'Bidikasi', NULL, NULL, 'KIP004', 700000.00, NULL, NULL),
(12, 'Lina Marlina', '231012', 4, 0.00, 'Bidikasi', NULL, NULL, 'KIP005', 750000.00, NULL, NULL),
(13, 'Bayu Kurniawan', '231013', 6, 0.00, 'Bidikasi', NULL, NULL, 'KIP006', 800000.00, NULL, NULL),
(14, 'Rara Amelia', '231014', 8, 0.00, 'Bidikasi', NULL, NULL, 'KIP007', 850000.00, NULL, NULL),
(15, 'Kevin Maulana', '231015', 2, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'Bank Indonesia', 3.50),
(16, 'Nabila Salsabila', '231016', 4, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'Pertamina', 3.60),
(17, 'Ilham Akbar', '231017', 6, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'PLN', 3.40),
(18, 'Tasya Aulia', '231018', 2, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'BRI', 3.75),
(19, 'Fikri Hidayat', '231019', 4, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'Kampus Merdeka', 3.50),
(20, 'Aulia Rahma', '231020', 8, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'Bank Syariah Indonesia', 3.60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
