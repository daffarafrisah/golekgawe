-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 06:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golekgawe`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `nama`, `email`, `password`) VALUES
(3, 'daffarafrisah', 'Fabian Daffa Rafrisah', 'rafrisahdaffa@gmail.com', '$2y$10$HK6swonx8yNlNXMePgUR0.nSis22yaI6nbC30hbIz1fi1MF6zcjJu'),
(4, 'admin', 'admin', 'admin@gmail.com', '$2y$10$NQskpN2HzxLOYlUfiRagcu0Dk3SVo3uMc3328bkZPpwk8X6q1cStq'),
(5, 'peserta', 'peserta', 'peserta@gmail.com', '$2y$10$t2wqlvuX4l2KHc.iVgIMW.rkXcgXGwcPwwq99aaQWgPN.TysyDAWC');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('Laki Laki','Perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `kontribusi` varchar(255) NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `ijazah` enum('Sekolah','Diploma','Sarjana','Magister','Lainnya') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `gender`, `alamat`, `email`, `no_hp`, `instansi`, `posisi`, `kontribusi`, `institusi`, `ijazah`) VALUES
(22, 'daffarafrisah', 'Fabian Daffa Rafrisah', 'Laki Laki', 'Jl. Baratajaya XI/No.21', 'rafrisahdaffa@gmail.com', '087854597449', 'Tamansari Prospero Apartment', 'Human Resources', 'Membuat rancang bangun pencatatan calon karyawan baru', 'Universitas Dinamika', 'Sarjana'),
(23, 'lostfipper', 'Fabian Daffa', 'Perempuan', 'Jl. Baratajaya IX/No.58', '18410100202@dinamika.ac.id', '087854597449', 'Undika', 'Mahasiswa', 'Pengabdi kampus selama 4 tahun', 'STIKOM', 'Sarjana'),
(24, 'admin', 'admin', 'Laki Laki', 'admin', 'admin@gmail.com', '087854597449', 'admin', 'admin', 'admin', 'admin', 'Diploma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
