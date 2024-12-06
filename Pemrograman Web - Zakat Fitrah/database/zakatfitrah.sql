-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 03:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakatfitrah`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayarzakat`
--

CREATE TABLE `bayarzakat` (
  `id_zakat` int(11) NOT NULL,
  `nama_KK` varchar(100) NOT NULL,
  `jumlah_tanggungan` int(10) NOT NULL,
  `jenis_bayar` enum('Beras','Uang') NOT NULL,
  `jumlah_tanggunganyangdibayar` varchar(100) NOT NULL,
  `bayar_beras` float NOT NULL,
  `bayar_uang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bayarzakat`
--

INSERT INTO `bayarzakat` (`id_zakat`, `nama_KK`, `jumlah_tanggungan`, `jenis_bayar`, `jumlah_tanggunganyangdibayar`, `bayar_beras`, `bayar_uang`) VALUES
(11, 'Dimas Eko', 3, 'Beras', '7.5 Kg', 7.5, 0),
(12, 'Chris Bang', 3, 'Beras', 'Rp.120.000', 0, 120000),
(13, 'Dimas Eko', 2, 'Uang', 'Rp.80000', 0, 80000),
(14, 'Kadir ', 2, 'Uang', 'Rp.80.000', 0, 80000),
(15, 'Ayen L', 3, 'Uang', '120000', 0, 120000),
(17, 'Pir', 1, 'Uang', '40000', 0, 40000),
(20, 'Daniel John Greenway', 2, 'Beras', '5 Kg', 5, 0),
(21, 'Lino', 6, 'Beras', '15 Kg', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_mustahik`
--

CREATE TABLE `kategori_mustahik` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `jumlah_hak` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_mustahik`
--

INSERT INTO `kategori_mustahik` (`id_kategori`, `nama_kategori`, `jumlah_hak`) VALUES
(2, 'Amil', '10 Kg'),
(12, 'Fakir', '21 Kg'),
(13, 'Fakir II', '16 Kg'),
(14, 'Miskin I', '8 Kg'),
(15, 'Miskin II', '6 Kg'),
(16, 'Fisabilillah (Ustad)', '3 Kg'),
(17, 'Fisabilillah (Santri)', '3 Kg'),
(18, 'Mampu', '4 Kg'),
(19, 'Lainnya', '4 Kg');

-- --------------------------------------------------------

--
-- Table structure for table `mustahik_lainnya`
--

CREATE TABLE `mustahik_lainnya` (
  `id_mustahiklainnya` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` enum('Amilin','Fisabilillah','Mualaf','Ibnu Sabil') NOT NULL,
  `hak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mustahik_lainnya`
--

INSERT INTO `mustahik_lainnya` (`id_mustahiklainnya`, `nama`, `kategori`, `hak`) VALUES
(1, 'Virrara', 'Fisabilillah', '6'),
(3, 'Pir', 'Ibnu Sabil', '6'),
(4, 'Ayen', 'Amilin', '4'),
(5, 'Chris', 'Fisabilillah', '6'),
(6, 'Eko', 'Fisabilillah', '3'),
(7, 'Han Jisung', 'Mualaf', '4');

-- --------------------------------------------------------

--
-- Table structure for table `mustahik_warga`
--

CREATE TABLE `mustahik_warga` (
  `id_mustahikwarga` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` enum('Fakir','Miskin','Mampu') NOT NULL,
  `hak` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mustahik_warga`
--

INSERT INTO `mustahik_warga` (`id_mustahikwarga`, `nama`, `kategori`, `hak`) VALUES
(1, 'Pir', 'Mampu', 4),
(3, 'Virra', 'Miskin', 6),
(7, 'Lino', 'Fakir', 16),
(8, 'Chris', 'Mampu', 4),
(9, 'Dimas', 'Fakir', 16);

-- --------------------------------------------------------

--
-- Table structure for table `muzakki`
--

CREATE TABLE `muzakki` (
  `id_muzakki` int(11) NOT NULL,
  `nama_muzakki` varchar(100) NOT NULL,
  `jumlah_tanggungan` int(12) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muzakki`
--

INSERT INTO `muzakki` (`id_muzakki`, `nama_muzakki`, `jumlah_tanggungan`, `keterangan`) VALUES
(4, 'Markeu Lee', 1, 'Belum Membayar Zakat Fitrah'),
(11, 'Mayyadah Ramiz Mahmood', 1, 'Belum Membayar Zakat Fitrah'),
(13, 'Daniel John Greenway', 4, 'Belum Membayar Zakat Fitrah'),
(16, 'Praveen S Challagidad', 4, 'Belum Membayar Zakat Fitrah'),
(22, 'Virra Retnowati A\'izzah', 1, 'Belum Membayar Zakat Fitrah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'virrara', 'virrara!'),
(2, 'pir', 'pir'),
(3, 'pweb', 'pweb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayarzakat`
--
ALTER TABLE `bayarzakat`
  ADD PRIMARY KEY (`id_zakat`);

--
-- Indexes for table `kategori_mustahik`
--
ALTER TABLE `kategori_mustahik`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `mustahik_lainnya`
--
ALTER TABLE `mustahik_lainnya`
  ADD PRIMARY KEY (`id_mustahiklainnya`);

--
-- Indexes for table `mustahik_warga`
--
ALTER TABLE `mustahik_warga`
  ADD PRIMARY KEY (`id_mustahikwarga`);

--
-- Indexes for table `muzakki`
--
ALTER TABLE `muzakki`
  ADD PRIMARY KEY (`id_muzakki`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayarzakat`
--
ALTER TABLE `bayarzakat`
  MODIFY `id_zakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kategori_mustahik`
--
ALTER TABLE `kategori_mustahik`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mustahik_lainnya`
--
ALTER TABLE `mustahik_lainnya`
  MODIFY `id_mustahiklainnya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mustahik_warga`
--
ALTER TABLE `mustahik_warga`
  MODIFY `id_mustahikwarga` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `muzakki`
--
ALTER TABLE `muzakki`
  MODIFY `id_muzakki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
