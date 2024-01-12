-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2024 at 11:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_akun`
--

CREATE TABLE `tabel_akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `Nomor` int(11) NOT NULL,
  `NISN` int(11) NOT NULL,
  `Nama Siswa` varchar(100) NOT NULL,
  `Tingkatan` int(11) NOT NULL,
  `Konsentrasi Keahlian` varchar(50) NOT NULL,
  `Wali Kelas` varchar(100) NOT NULL,
  `Alamat Siswa` text NOT NULL,
  `No. Telp Siswa` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nama Orangtua` varchar(100) NOT NULL,
  `No. Telp Orangtua` varchar(20) NOT NULL,
  `Pekerjaan Orangtua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`Nomor`, `NISN`, `Nama Siswa`, `Tingkatan`, `Konsentrasi Keahlian`, `Wali Kelas`, `Alamat Siswa`, `No. Telp Siswa`, `Email`, `Nama Orangtua`, `No. Telp Orangtua`, `Pekerjaan Orangtua`) VALUES
(1, 342324, 'Ahmad Jabar', 2, 'RPL', 'Pou', 'Jl. Batu ke-1', '0838374627381', 'ahmad@jamil.com', 'Hebo Jabar', '0832476274123', 'Bertani'),
(2, 3453434, 'Deda Jabar', 2, 'OTKP', 'Pou', 'Jl. Batu ke-1', '0838374627381', 'deda@jamil.com', 'Hebo Jabar', '0832476274123', 'Bertani'),
(3, 234123, 'Defalt Fat', 2, 'RPL', 'Pal', 'Jl. Batu ke-2', '0832767437223', 'fat@jamil.com', 'Mud Fat', '0834332453454', 'Bertani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_akun`
--
ALTER TABLE `tabel_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`Nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_akun`
--
ALTER TABLE `tabel_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `Nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
