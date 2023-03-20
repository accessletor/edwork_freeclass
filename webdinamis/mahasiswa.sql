-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 10:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id_buku` int(11) NOT NULL,
  `juduk_buku` varchar(200) NOT NULL,
  `penulis` varchar(150) NOT NULL,
  `nim` int(9) NOT NULL,
  `nama_peminjam` varchar(150) NOT NULL,
  `tanggal_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `nim` int(9) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`nim`, `nama`, `email`, `alamat`) VALUES
(41190056, 'asep saefuddin', 'latihanasep@gmail.com', 'konoha');

-- --------------------------------------------------------

--
-- Table structure for table `unit_kegiatan_mahasiswa`
--

CREATE TABLE `unit_kegiatan_mahasiswa` (
  `nama_organisasi` varchar(225) NOT NULL,
  `nama_anggota` varchar(225) NOT NULL,
  `ketua_ukm` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_kegiatan_mahasiswa`
--

INSERT INTO `unit_kegiatan_mahasiswa` (`nama_organisasi`, `nama_anggota`, `ketua_ukm`) VALUES
('robotic', 'asep saefuddin,adi munawar,agung ', 'asep saefuddin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
