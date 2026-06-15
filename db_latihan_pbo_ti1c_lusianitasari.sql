-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2026 at 06:24 AM
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
-- Database: `db_latihan_pbo_ti1c_lusianitasari`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` int NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('regular','IMAX','velvet') NOT NULL,
  `tipe_audio` varchar(30) DEFAULT NULL,
  `lokasi_baris` char(2) DEFAULT NULL,
  `kacamata_3d_id` varchar(20) DEFAULT NULL,
  `efek_gerak_fitur` varchar(50) DEFAULT NULL,
  `bantal_selimut_pack` varchar(30) DEFAULT NULL,
  `layanan_butler` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
(1, 'Avatar 3', '2026-07-01 13:00:00', 2, '50000.00', 'regular', 'Dolby Digital 5.1', 'G', NULL, NULL, NULL, NULL),
(2, 'Avatar 3', '2026-07-01 16:00:00', 4, '50000.00', 'regular', 'Dolby Digital 5.1', 'F', NULL, NULL, NULL, NULL),
(3, 'The Avengers Next', '2026-07-02 14:15:00', 1, '45000.00', 'regular', 'Standard Stereo', 'H', NULL, NULL, NULL, NULL),
(4, 'The Avengers Next', '2026-07-02 19:30:00', 2, '55000.00', 'regular', 'Dolby Atmos', 'E', NULL, NULL, NULL, NULL),
(5, 'Detektif Conan', '2026-07-03 11:00:00', 3, '40000.00', 'regular', 'Standard Stereo', 'J', NULL, NULL, NULL, NULL),
(6, 'Detektif Conan', '2026-07-03 15:20:00', 2, '40000.00', 'regular', 'Dolby Digital 5.1', 'K', NULL, NULL, NULL, NULL),
(7, 'Horor Indonesia', '2026-07-04 21:00:00', 5, '55000.00', 'regular', 'Dolby Atmos', 'D', NULL, NULL, NULL, NULL),
(8, 'Avatar 3', '2026-07-01 14:00:00', 2, '100000.00', 'IMAX', 'IMAX 12-Channel', NULL, '3D-GOGGLE-01', 'Getaran Kursi & Angin', NULL, NULL),
(9, 'Avatar 3', '2026-07-01 20:00:00', 2, '120000.00', 'IMAX', 'IMAX 12-Channel', NULL, '3D-GOGGLE-02', 'Getaran Kursi & Angin', NULL, NULL),
(10, 'The Avengers Next', '2026-07-02 13:00:00', 4, '95000.00', 'IMAX', 'Dolby Atmos IMAX', NULL, '3D-GOGGLE-03', 'Tanpa Efek Gerak', NULL, NULL),
(11, 'The Avengers Next', '2026-07-02 17:45:00', 1, '110000.00', 'IMAX', 'IMAX 12-Channel', NULL, '3D-GOGGLE-04', 'Getaran Kursi', NULL, NULL),
(12, 'Interstellar Re-Release', '2026-07-05 10:00:00', 2, '90000.00', 'IMAX', 'IMAX 6-Channel', NULL, 'NONE-2D', 'Tanpa Efek Gerak', NULL, NULL),
(13, 'Interstellar Re-Release', '2026-07-05 16:30:00', 3, '110000.00', 'IMAX', 'IMAX 12-Channel', NULL, 'NONE-2D', 'Getaran Kursi', NULL, NULL),
(14, 'Sci-Fi Odyssey', '2026-07-06 19:00:00', 2, '120000.00', 'IMAX', 'IMAX 12-Channel', NULL, '3D-GOGGLE-05', 'Efek Air & Angin', NULL, NULL),
(15, 'Love in Paris', '2026-07-01 15:00:00', 2, '250000.00', 'velvet', NULL, NULL, NULL, NULL, 'Premium Pack A (Sutra)', 'Personal Butler - Makan Siang'),
(16, 'Love in Paris', '2026-07-01 18:30:00', 2, '300000.00', 'velvet', NULL, NULL, NULL, NULL, 'Premium Pack A (Sutra)', 'Personal Butler - Makan Malam'),
(17, 'The Avengers Next', '2026-07-02 21:00:00', 2, '350000.00', 'velvet', NULL, NULL, NULL, NULL, 'Standard Pack (Katun)', 'Call Button Only'),
(18, 'Drama Klasik', '2026-07-07 13:00:00', 2, '250000.00', 'velvet', NULL, NULL, NULL, NULL, 'Standard Pack (Katun)', 'Personal Butler - Welcome Drink'),
(19, 'Drama Klasik', '2026-07-07 17:00:00', 2, '250000.00', 'velvet', NULL, NULL, NULL, NULL, 'Premium Pack B (Wol)', 'Personal Butler - Snack Malam'),
(20, 'Horor Indonesia', '2026-07-04 23:30:00', 2, '300000.00', 'velvet', NULL, NULL, NULL, NULL, 'Premium Pack A (Sutra)', 'Call Button Only');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
