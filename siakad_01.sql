-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2025 at 04:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(15) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `divisi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `namalengkap`, `divisi`) VALUES
('admin01', 'Admin Akademik', '001');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `jeniskelamin` enum('L','P') NOT NULL,
  `programstudi` varchar(5) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `namalengkap`, `jeniskelamin`, `programstudi`, `alamat`, `foto`) VALUES
('111', 'Wardani M', 'L', 'TK', 'Jl. Kemandirian KM 4', ''),
('113', 'Murah Rejeki', 'P', 'RPLA', 'Jl. pemrograman', 'file-632cc38abf43c-removebg-preview.png'),
('6130031293', 'Muhamad Wardani', 'L', 'SI', 'Jl. Merdeka Sejahtera Bersama', '');

-- --------------------------------------------------------

--
-- Table structure for table `programstudi`
--

CREATE TABLE `programstudi` (
  `kodeprodi` varchar(5) NOT NULL,
  `namaprodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programstudi`
--

INSERT INTO `programstudi` (`kodeprodi`, `namaprodi`) VALUES
('MP', 'D3 Manajemen Pemasaran'),
('PH', 'D3 Perhotelan'),
('RPLA', 'D3 Rekayasa Perangkat Lunak Aplikasi'),
('SI', 'D3 Sistem Informasi'),
('SIA', 'D3 Sistem Informasi Akuntansi'),
('SIKC', 'S1 Terapan Sistem Informasi Kota Cerdas'),
('TK', 'D3 Teknologi Komputer'),
('TRM', 'S1 Terapan Teknologi Rekayasa Multimedia'),
('TT', 'D3 Teknik Telkomunikasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`) VALUES
('admin01', '18c6d818ae35a3e8279b5330eda01498', 'admin'),
('113', '0d6f250ebfb31f66f2264b592d455f48', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `fkprodi_mahasiswa` (`programstudi`);

--
-- Indexes for table `programstudi`
--
ALTER TABLE `programstudi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD KEY `fkuseradmin` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fkprodi_mahasiswa` FOREIGN KEY (`programstudi`) REFERENCES `programstudi` (`kodeprodi`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fkuseradmin` FOREIGN KEY (`username`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `fkusermahasiswa` FOREIGN KEY (`username`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
