-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 02:09 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anggota`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `level`, `username`, `password`) VALUES
(1, 1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nik` text NOT NULL,
  `no_kk` text NOT NULL,
  `nama_lengkap` text NOT NULL,
  `ttl` text NOT NULL,
  `alamat` text NOT NULL,
  `rt/rw` text NOT NULL,
  `kecamatan` text NOT NULL,
  `jumlah_anak` text NOT NULL,
  `email` text NOT NULL,
  `status` text NOT NULL,
  `no_hp` text NOT NULL,
  `media_sosial` text NOT NULL,
  `pendidikan_formal` text NOT NULL,
  `pendidikan_nonformal` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `pengalaman_kerja` text NOT NULL,
  `pengalaman_organisasi` text NOT NULL,
  `bidang_usaha` text NOT NULL,
  `afiliasi_politik` text NOT NULL,
  `keanggotaan` text NOT NULL,
  `jenjang_kaderisasi` text NOT NULL,
  `jabatan_struktural` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nik`, `no_kk`, `nama_lengkap`, `ttl`, `alamat`, `rt/rw`, `kecamatan`, `jumlah_anak`, `email`, `status`, `no_hp`, `media_sosial`, `pendidikan_formal`, `pendidikan_nonformal`, `pekerjaan`, `pengalaman_kerja`, `pengalaman_organisasi`, `bidang_usaha`, `afiliasi_politik`, `keanggotaan`, `jenjang_kaderisasi`, `jabatan_struktural`) VALUES
(1, '5465', '464', '646', '46', '46', '464', '4', '64', '6', '4343', '43534', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
