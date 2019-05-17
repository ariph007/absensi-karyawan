-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 06:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(7) NOT NULL,
  `nik` int(7) NOT NULL,
  `id_lokasi` int(7) NOT NULL,
  `id_shift` int(7) NOT NULL,
  `alasan` text NOT NULL,
  `foto_lokasi` varchar(50) NOT NULL,
  `waktu_absen` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absen`, `nik`, `id_lokasi`, `id_shift`, `alasan`, `foto_lokasi`, `waktu_absen`, `status`) VALUES
(4, 1000003, 4, 2, 'Masuk', 'DCIM999999.jpg', '2019-04-22 16:56:21', 'Masuk'),
(5, 1000003, 4, 2, 'Makan Malam', 'DCIM111111.jpg', '2019-04-22 20:10:02', 'Keluar'),
(6, 1000003, 4, 2, 'Pulang', 'DCIM222222.jpg', '2019-04-22 23:59:08', 'Pulang'),
(7, 1000010, 1, 1, 'Masuk', 'DCIM123127.jpg', '2019-04-24 08:59:00', 'Masuk'),
(8, 1000009, 5, 1, 'Masuk', 'DCIM321234.jpg', '2019-04-24 09:01:00', 'Masuk'),
(9, 1000005, 6, 1, 'Masuk', 'DCIM1111231.jpg', '2019-04-24 09:02:02', 'Masuk'),
(10, 1000004, 6, 1, 'Masuk', 'DCIM90234.jpg', '2019-04-24 09:04:00', 'Masuk'),
(11, 1000007, 6, 1, 'Masuk', 'DCIM012324.jpg', '2019-04-24 09:10:02', 'Masuk'),
(34, 1000003, 3, 1, 'Masuk', 'DCIM321234.jpg', '2019-04-27 10:00:00', 'Masuk'),
(47, 1000004, 1, 1, '', 'event2.jpg', '2019-04-28 13:06:37', 'Masuk'),
(48, 1000004, 1, 1, '', 'alumni_class.jpg', '2019-04-28 13:12:05', 'Masuk'),
(49, 1000004, 1, 1, '', 'chaleaf.png', '2019-04-28 13:16:10', 'Masuk'),
(89, 1000008, 2, 1, 'Masuk', 'DCIMASD.jpg', '2019-03-07 00:00:00', 'Masuk'),
(90, 1000003, 1, 1, '', 'foto_1557198071.jpg', '2019-05-07 10:01:04', 'Masuk'),
(91, 1000003, 1, 1, '', 'foto_1557198077.png', '2019-05-07 10:01:11', 'Masuk'),
(92, 1000003, 1, 1, '', 'foto_1557201553.jpg', '2019-05-07 10:59:09', 'Masuk');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_department` int(7) NOT NULL,
  `nama_department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_department`, `nama_department`) VALUES
(1, 'HRD'),
(2, 'IT'),
(3, 'Humas'),
(4, 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` int(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `join_date` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_department` int(7) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `jenis_kelamin`, `join_date`, `tempat_lahir`, `tanggal_lahir`, `id_department`, `alamat`, `jabatan`, `level`, `password`) VALUES
(1000002, 'admin', 'Laki-Laki', '2011-06-04', 'Batam', '1996-05-10', 1, 'Jl. Kekanan', 'admin', 'admin', 'admin123'),
(1000003, 'Dacin Harto Salahudin M.TI.', 'Laki-Laki', '2011-10-04', 'Jakarta', '1986-05-10', 4, 'Psr. Jaksa No. 849, Salatiga 23102, NTB', 'Kepala Keuangan', 'staff', 'dacin123'),
(1000004, 'Silvia Nasyidah S.Sos', 'Laki-Laki', '2015-04-15', 'Bandung', '1982-04-16', 1, 'Ds. Ters. Buah Batu No. 48, Prabumulih 50748, DKI', 'Kepala Humas', 'staff', 'silvia123'),
(1000005, 'Shakila Laksmiwati', 'Perempuan', '2017-06-04', 'Semarang', '1999-05-10', 2, 'Jr. Batako No. 425, Pontianak 22720, KalUt', 'Staff', 'staff', 'shakila123'),
(1000006, 'Irma Sudiati', 'Perempuan', '2016-04-15', 'Padang', '1989-04-16', 3, 'Ki. Baja No. 305, Banda Aceh 40127, SulBar', 'Staff', 'staff', 'irma123'),
(1000007, 'Queen Lailasari M.Kom', 'Laki-Laki', '2011-10-04', 'Batam', '1993-05-10', 1, 'Gg. Baranang Siang No. 543, Gorontalo 91738, DIY', 'Staff', 'staff', 'queen123'),
(1000008, 'Karen Mutia Pratiwi S.H.', 'Laki-Laki', '2018-04-15', 'Bandung', '1983-04-16', 1, 'Gg. Moch. Ramdan No. 583, Sibolga 11226, Bali', 'Staff', 'staff', 'karen123'),
(1000009, 'Wakiman Habibi', 'Laki-Laki', '2017-06-04', 'Batam', '1996-05-10', 2, 'Gg. Yap Tjwan Bing No. 253, Bau-Bau 87744, KalTim', 'Staff', 'staff', 'wakiman123'),
(1000010, 'Hartaka Bakiadi Pranowo S.E.', 'Laki-Laki', '2019-01-15', 'Bali', '1982-10-16', 3, 'Ki. Yohanes No. 925, Prabumulih 66371, KalUt', 'Staff', 'staff', 'hartaka123'),
(1000011, 'Usman Maheswara', 'Laki-Laki', '2018-07-12', 'Banten', '1982-01-08', 4, 'Ki. Abdul Rahmat No. 51, Magelang 36148, Bengkulu', 'Staff', 'staff', 'usman123'),
(1000012, 'Titi Usada', 'Perempuan', '2013-04-13', 'Jakarta', '1993-04-15', 4, 'Gg. Karel S. Tubun No. 130, Sabang 43198, SulBar', 'Staff', 'staff', 'titi123'),
(1000013, 'Himawan Prayoga', 'Laki-Laki', '2019-04-09', 'Bali', '1995-04-08', 2, 'Jr. Ki Hajar Dewantara No. 405, Batu 79539, SulSel', 'Staff', 'staff', 'himawan123'),
(1000014, 'Gasti Wulandari', 'Perempuan', '2019-04-03', 'Jakarta', '1990-04-03', 4, 'Gg. Arifin No. 402, Tanjungbalai 67946, SulSel', 'Staff', 'staff', 'gasti123'),
(1000015, 'Aswani Jati Iswahyudi', 'Laki-Laki', '2019-04-16', 'Bandung', '1992-04-09', 1, 'Gg. Arifin No. 402, Tanjungbalai 67946, SulSel', 'Staff', 'staff', 'aswani123');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(7) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(1, 'Branch Sukajadi'),
(2, 'Branch Baloi'),
(3, 'Branch Batam Center'),
(4, 'Branch Batu Aji'),
(5, 'Branch Tiban'),
(6, 'Branch Batu Ampar');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` int(7) NOT NULL,
  `nama_shift` varchar(50) NOT NULL,
  `waktu_shift` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `nama_shift`, `waktu_shift`) VALUES
(1, 'Pagi', '09:00:00'),
(2, 'Sore', '17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `nik` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000016;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
