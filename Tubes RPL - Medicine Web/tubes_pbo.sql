-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 11:36 AM
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
-- Database: `tubes_pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'rajawali@admin.com', 'rajawali');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `password`) VALUES
(19, 'aku aja', 'anggipm09@gmail.com', '$2y$10$.tJ6mSO0C/kARrDshrYOJuf.qIR3LvFCfhfTNLNWJm3KqfDEN57gS'),
(21, 'virra raaa', 'virrisesilver@gmail.com', '$2y$10$jSTi.TdhVPJKJuBfgkJhvePipyRHE03u7kbl3ABZWIuSh9Tkk6wUS'),
(22, 'han jisung', 'allrounderhanjs@gmail.com', '$2y$10$evebv.wHgnsD6n9xWQkRbejgrNxxuTCFIqsfNTZm3xNauLrfU3aom'),
(23, ' ', 'virra1315elfsj@gmail.com', '$2y$10$.Nrw0D8V/m9FWqfIndblzOlEvUi6O68z7Hmv0cD5nkeGkiyXH4hjq'),
(24, 'apa yaa', 'apa@gmail.com', '$2y$10$PylIIBDcsWLj0WwRutiWcex/5gydJb92KUy6nKgSMmMV/CkcLyx1m'),
(25, 'jamal lee', 'jamaljaehyun@gmail.com', '$2y$10$gJbBgxqPXZ4PidQalRCeOOqEcQp3xM8aSMquXy2LjqqqDdcIvbtXK');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `chat`) VALUES
(0, 'Hai,  silahkan hubungi kami jika ada yang ditanyakan'),
(1, 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `chataku`
--

CREATE TABLE `chataku` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chataku`
--

INSERT INTO `chataku` (`id`, `chat`) VALUES
(0, 'Hai, aku silahkan hubungi kami jika ada yang ditanyakan');

-- --------------------------------------------------------

--
-- Table structure for table `chatanas`
--

CREATE TABLE `chatanas` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatanas`
--

INSERT INTO `chatanas` (`id`, `chat`) VALUES
(0, 'Hai, anas silahkan hubungi kami jika ada yang ditanyakan'),
(1, 'Bebel sia th ahhh vaksin vaksin w... Korona na g ges lengit');

-- --------------------------------------------------------

--
-- Table structure for table `chathan`
--

CREATE TABLE `chathan` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chathan`
--

INSERT INTO `chathan` (`id`, `chat`) VALUES
(0, 'Hai, han silahkan hubungi kami jika ada yang ditanyakan'),
(1, 'hello'),
(3, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `chathilmi`
--

CREATE TABLE `chathilmi` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chathilmi`
--

INSERT INTO `chathilmi` (`id`, `chat`) VALUES
(0, 'Hai, hilmi silahkan hubungi kami jika ada yang ditanyakan'),
(1, 'hai?');

-- --------------------------------------------------------

--
-- Table structure for table `chatindra`
--

CREATE TABLE `chatindra` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatindra`
--

INSERT INTO `chatindra` (`id`, `chat`) VALUES
(0, 'Hai, indra silahkan hubungi kami jika ada yang ditanyakan'),
(1, 'Halo'),
(3, 'Hai');

-- --------------------------------------------------------

--
-- Table structure for table `chatmuhammad`
--

CREATE TABLE `chatmuhammad` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatmuhammad`
--

INSERT INTO `chatmuhammad` (`id`, `chat`) VALUES
(0, 'Hai, muhammad silahkan hubungi kami jika ada yang ditanyakan'),
(1, 'kapan saya bisa vaksin?');

-- --------------------------------------------------------

--
-- Table structure for table `chatrajawali`
--

CREATE TABLE `chatrajawali` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatrajawali`
--

INSERT INTO `chatrajawali` (`id`, `chat`) VALUES
(0, 'Hai, rajawali silahkan hubungi kami jika ada yang ditanyakan'),
(1, 'contoh');

-- --------------------------------------------------------

--
-- Table structure for table `chatreza`
--

CREATE TABLE `chatreza` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatreza`
--

INSERT INTO `chatreza` (`id`, `chat`) VALUES
(0, 'Hai, reza silahkan hubungi kami jika ada yang ditanyakan'),
(1, 'P'),
(3, 'Dimana? ');

-- --------------------------------------------------------

--
-- Table structure for table `chatrizki`
--

CREATE TABLE `chatrizki` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatrizki`
--

INSERT INTO `chatrizki` (`id`, `chat`) VALUES
(0, 'Hai, rizki silahkan hubungi kami jika ada yang ditanyakan'),
(1, 'Oy babi');

-- --------------------------------------------------------

--
-- Table structure for table `chatvirra`
--

CREATE TABLE `chatvirra` (
  `id` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatvirra`
--

INSERT INTO `chatvirra` (`id`, `chat`) VALUES
(0, 'Hai, virra silahkan hubungi kami jika ada yang ditanyakan'),
(1, 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dataaay`
--

CREATE TABLE `dataaay` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataaay`
--

INSERT INTO `dataaay` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'Sinopharm', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2021-05-23<br>Vaksinasi Selanjutnya Pada 13-06-2021', 'Reaksi Alergi', 'Anda Sebaiknya Menghubungi Dokter');

-- --------------------------------------------------------

--
-- Table structure for table `dataaku`
--

CREATE TABLE `dataaku` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataaku`
--

INSERT INTO `dataaku` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dataanas`
--

CREATE TABLE `dataanas` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataanas`
--

INSERT INTO `dataanas` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'Sinopharm', 'Anda Telah Vaksinasi Tahap 2', 'Vaksin Tahap 1 = 2021-05-22<br>Vaksinasi Selanjutnya Pada 12-06-2021', 'Reaksi Alergi', 'Anda Sebaiknya Menghubungi Dokter');

-- --------------------------------------------------------

--
-- Table structure for table `dataapa`
--

CREATE TABLE `dataapa` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataapa`
--

INSERT INTO `dataapa` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'AstraZeneca', 'Anda Telah Vaksinasi Tahap 2', '', 'Diare', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `databambang`
--

CREATE TABLE `databambang` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databambang`
--

INSERT INTO `databambang` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'Novavax', 'Anda Telah Vaksinasi Tahap 2', 'Vaksin Tahap 1 = 2021-05-04<br>Vaksinasi Selanjutnya Pada 25-05-2021', 'Tangan pegal dan nyeri', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `databasuki`
--

CREATE TABLE `databasuki` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databasuki`
--

INSERT INTO `databasuki` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `datahan`
--

CREATE TABLE `datahan` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datahan`
--

INSERT INTO `datahan` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `datahilmi`
--

CREATE TABLE `datahilmi` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datahilmi`
--

INSERT INTO `datahilmi` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'Moderna', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dataindra`
--

CREATE TABLE `dataindra` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataindra`
--

INSERT INTO `dataindra` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'AstraZeneca', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2021-05-04<br>Vaksinasi Selanjutnya Pada 03-06-2021 Sampai 27-07-2021', 'Mengigil', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `datajamal`
--

CREATE TABLE `datajamal` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datajamal`
--

INSERT INTO `datajamal` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'AstraZeneca', 'Anda Telah Vaksinasi Tahap 1', '', 'Demam', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `datamuhammad`
--

CREATE TABLE `datamuhammad` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamuhammad`
--

INSERT INTO `datamuhammad` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `datanazla`
--

CREATE TABLE `datanazla` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datanazla`
--

INSERT INTO `datanazla` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'AstraZeneca', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2200-11-10<br>Vaksinasi Selanjutnya Pada 10-12-2200 Sampai 02-02-2201', 'Tidak Enak Badan', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `datarajawali`
--

CREATE TABLE `datarajawali` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datarajawali`
--

INSERT INTO `datarajawali` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'Sinovac', 'Anda Telah Vaksinasi Tahap 2', 'Vaksin Tahap 1 = 2021-07-29<br>Vaksinasi Selanjutnya Pada 12-08-2021', 'Demam ringan', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `datareza`
--

CREATE TABLE `datareza` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datareza`
--

INSERT INTO `datareza` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `datarizki`
--

CREATE TABLE `datarizki` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datarizki`
--

INSERT INTO `datarizki` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'AstraZeneca', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2021-05-25<br>Vaksinasi Selanjutnya Pada 24-06-2021 Sampai 17-08-2021', 'Mengigil', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `datavirra`
--

CREATE TABLE `datavirra` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datavirra`
--

INSERT INTO `datavirra` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, 'AstraZeneca', 'Anda Telah Vaksinasi Tahap 2', 'Vaksin Tahap 1 = 2021-12-02<br>Vaksinasi Selanjutnya Pada 01-01-2022 Sampai 24-02-2022', 'Sakit Kepala', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `datazahra`
--

CREATE TABLE `datazahra` (
  `id` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datazahra`
--

INSERT INTO `datazahra` (`id`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_provinsi`
--

CREATE TABLE `data_provinsi` (
  `id` int(10) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `positif` int(100) NOT NULL,
  `sembuh` int(100) NOT NULL,
  `meninggal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_provinsi`
--

INSERT INTO `data_provinsi` (`id`, `provinsi`, `positif`, `sembuh`, `meninggal`) VALUES
(1, 'DKI Jakarta', 406205, 393166, 6625),
(2, 'Jawa Barat', 277553, 243650, 3678),
(3, 'Jawa Tengah', 183027, 162823, 8001),
(4, 'Jawa Timur', 146808, 134525, 10600),
(5, 'Kalimantan Timur', 68136, 64718, 1631),
(6, 'Sulawesi Selatan', 61419, 60164, 931),
(7, 'Banten', 47101, 43892, 1200),
(8, 'Bali', 44236, 41608, 1317),
(9, 'Riau', 42698, 37374, 1050),
(10, 'Daerah Istimewa Yogyakarta', 38703, 33636, 948),
(11, 'Sumatera Barat', 36268, 33058, 783),
(12, 'Kalimantan Selatan', 32612, 29518, 937),
(13, 'Sumatera Utara', 29198, 25952, 965),
(14, 'Papua', 20308, 11223, 207),
(15, 'Sumatera Selatan', 20068, 17712, 979),
(16, 'Kalimantan Tengah', 19780, 16577, 442),
(17, 'Sulawesi Utara', 15638, 12961, 504),
(18, 'Nusa Tenggara Timur', 14200, 12468, 366),
(19, 'Bangka Belitung', 12822, 11272, 201),
(20, 'Sulawesi Tengah', 12125, 11109, 325),
(21, 'Kalimantan Utara', 11702, 10978, 186),
(22, 'Lampung', 10838, 9581, 253),
(23, 'Aceh', 10814, 9367, 432),
(24, 'Sulawesi Tenggara', 10396, 9818, 209),
(25, 'Nusa Tenggara Barat', 10291, 7750, 373),
(26, 'Kepulauan Riau', 9381, 8801, 230),
(27, 'Papua Barat', 8879, 8371, 147),
(28, 'Maluku', 7515, 7056, 116),
(29, 'Kalimantan Barat', 7503, 6548, 43),
(30, 'Jambi', 7407, 5987, 108),
(31, 'Bengkulu', 6630, 5743, 172),
(32, 'Sulawesi Barat', 5443, 5251, 118),
(33, 'Gorontalo', 5355, 4990, 161),
(34, 'Maluku Utara', 4414, 4117, 120);

-- --------------------------------------------------------

--
-- Table structure for table `data_rs`
--

CREATE TABLE `data_rs` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `telfon` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_rs`
--

INSERT INTO `data_rs` (`id`, `nama`, `alamat`, `kota`, `telfon`, `provinsi`) VALUES
(1, 'RS UMUM DAERAH  DR. ZAINOEL ABIDIN', 'JL. TGK DAUD BEUREUEH, NO. 108 B. ACEH', 'KOTA BANDA ACEH, ACEH', '(0651) 34565', 'Aceh'),
(2, 'RS UMUM DAERAH CUT MEUTIA KAB. ACEH UTARA', 'JL. BANDA ACEH-MEDAN KM.6 BUKET RATA LHOKSEUMAWE', 'KOTA LHOKSEUMAWE, ACEH', '(0645) 46334', 'Aceh'),
(3, 'RSUP SANGLAH', 'JL. DIPONEGORO DENPASAR BALI', 'KOTA DENPASAR, BALI', '(0361) 227912', 'Bali'),
(4, 'RS UMUM DAERAH KAB. BULELENG', 'JL. NGURAH RAI 30 SINGARAJA', 'BULELENG, BALI', '(0362) 22046', 'Bali'),
(5, 'RS UMUM DAERAH SANJIWANI GIANYAR', 'JL. CIUNG WENARA NO.2 GIANYAR', 'GIANYAR, BALI', '(0361) 943049', 'Bali'),
(6, 'RS UMUM DAERAH TABANAN', 'JL. PAHLAWAN NO. 14 TABANAN', 'TABANAN, BALI', '(0361) 811027', 'Bali'),
(7, 'RS UMUM DAERAH KABUPATEN TANGERANG', 'JL. A YANI NO. 9 TANGERANG, KOTA TANGERANG', 'TANGERANG, BANTEN', '(021) 5523507 / (021)  5512948 / (021) 5513709', 'Banten'),
(8, 'RS UMUM DAERAH DR. DRAJAT PRAWIRANEGARA', 'JL. TGK DAUD BEUREUEH, NO. 108 B. ACEH', 'TANGERANG, BANTEN', '', 'Banten'),
(9, 'RS UMUM DAERAH DR. M. YUNUS BENGKULU', 'JL. BHAYANGKARA, SIDOMULYO, KEC. GADING CEMP., KOTA BENGKULU, BENGKULU 38211', 'KOTA BENGKULU, BENGKULU', '(0736) 52004', 'Bengkulu'),
(10, 'RS UMUM DAERAH ARGA MAKMUR', 'JL. SITI KHODIJAH NO.8, KALI, ARMA JAYA, KABUPATEN BENGKULU UTARA, BENGKULU 38611', 'BENGKULU UTARA, BENGKULU', '(0737) 521118', 'Bengkulu'),
(11, 'RS UMUM DAERAH HASANUDDIN DAMRAH MANNA', 'JL. RAYA PADANG PANJANG, PAGAR DEWA, KOTA MANNA, KABUPATEN BENGKULU SELATAN, BENGKULU 38515', 'BENGKULU SELATAN, BENGKULU', '0853-8163-7684', 'Bengkulu'),
(12, 'RS UMUM DAERAH PANEMBAHAN SENOPATI', 'JL DR. WAHIDIN SUDIRO HUSODO BANTUL', 'BANTUL, DAERAH ISTIMEWA YOGYAKARTA', '(0274) 367381', 'DI Yogyakarta'),
(13, 'RS UMUM DAERAH WATES', 'JL TENTARA PELAJAR KM.1 NO.5 WATES KULON PROGO', 'KULON PROGO, DAERAH ISTIMEWA YOGYAKARTA', '(0274) 773169', 'DI Yogyakarta'),
(14, 'RS UMUM DAERAH KOTA YOGYAKARTA', 'JL. KI AGENG PEMANAHAN NO.1, SOROSUTAN, KEC. UMBULHARJO, KOTA YOGYAKARTA, DAERAH ISTIMEWA YOGYAKARTA 55162', 'KOTA YOGYAKARTA, DAERAH ISTIMEWA YOGYAKARTA', '(0274) 371195', 'DI Yogyakarta'),
(15, 'RSUP DR. SARDJITO', 'JL KESEHATAN NO.1 SEKIP YOGYAKARTA', 'SLEMAN, DAERAH ISTIMEWA YOGYAKARTA', '(0274) 631190', 'DI Yogyakarta'),
(16, 'RS UMUM AL DR MINTOHARJO', 'JL. BENDUNGAN HILIR 17 JAKPUS', 'JAKARTA PUSAT, DKI JAKARTA', '(021) 5703081', 'DKI Jakarta'),
(17, 'RS UMUM PAD GATOT SOEBROTO', 'JL. DR. ABDUL  RAHMAN SALEH NO. 24  JAKARTA PUSAT', 'JAKARTA PUSAT, DKI JAKARTA', '(021) 3441008', 'DKI Jakarta'),
(18, 'RS UMUM BHAYANGKARA TK. I R.SAID SUKANTO', 'JL. RAYA BOGOR KRAMAT JATI,JAKARTA TIMUR', 'JAKARTA TIMUR, DKI JAKARTA', '(021) 8093288', 'DKI Jakarta'),
(19, 'RSUP PERSAHABATAN', 'JL. PERSAHABATAN RAYA NO. 1,JAKTIM', 'JAKARTA TIMUR, DKI JAKARTA', '(021) 4891708', 'DKI Jakarta'),
(20, 'RS PENYAKIT INFEKSI PROF. DR. SULIANTI SAROSO', 'JL. BARU SUNTER PERMAI RAYA JAKARTA UTARA', 'JAKARTA UTARA, DKI JAKARTA', '(021) 6506559', 'DKI Jakarta'),
(21, 'RSUP FATMAWATI', 'JL. RS FATMAWATI CILANDAK,JAKSEL', 'JAKARTA SELATAN, DKI JAKARTA', '(021) 7501524', 'DKI Jakarta'),
(22, 'RS UMUM DAERAH PASAR MINGGU', 'JL. TB. SIMATUPANG NO. 1 KELURAHAN RAGUNAN, KECAMATAN PASAR MINGGU - JAKARTA SELATAN', 'JAKARTA SELATAN, DKI JAKARTA', '(021) 29059999', 'DKI Jakarta'),
(23, 'RS UMUM DAERAH CENGKARENG', 'JL.KAMAL RAYA BUMI CENGKARENG INDAH CENGKARENG TIMUR', 'JAKARTA BARAT, DKI JAKARTA', '', 'DKI Jakarta'),
(24, 'RS UMUM DAERAH PROF DR. H. ALOEI SABOE', 'JL. PROFESOR DR. H. ALOEI SABOE, WONGKADITI, KOTA UTARA, KOTA GORONTALO, GORONTALO 96115', 'GORONTALO, GORONTALO', '0435 821924', 'Gorontalo'),
(25, 'RS UMUM DAERAH RADEN MATTAHER JAMBI', 'JL. LETJEN SUPRAPTO NO.31, TELANAIPURA, KEC. TELANAIPURA, KOTA JAMBI, JAMBI 36361', 'MUARO JAMBI, JAMBI', '(0741) 61692', 'Jambi'),
(26, 'RS PARU DR. H. A. ROTINSULU', 'JL. BUKIT JARIAN NO. 40 BANDUNG', 'BANDUNG, JAWA BARAT', '', 'Jawa Barat'),
(27, 'RS UMUM PUSAT DR. HASAN SADIKIN', 'JL. PASTEUR NO. 38 BANDUNG', 'BANDUNG, JAWA BARAT', '', 'Jawa Barat'),
(28, 'RS UMUM DAERAH DR. SLAMET GARUT', 'JL. RUMAH SAKIT NO.12 GARUT', 'GARUT, JAWA BARAT', '(0262) 232720', 'Jawa Barat'),
(29, 'RS UMUM TK II DUSTIRA', 'JL. DR. DUSTIRA NO.1 KEL. BAROS KEC. CIMAHI TENGAH', 'KOTA CIMAHI, JAWA BARAT', '(022) 6652207', 'Jawa Barat'),
(30, 'RS PARU DR. M. GOENAWAN PARTOWIDIGDO', 'JL. RAYA PUNCAK KM.83, PO BOX 28 CISARUA BOGOR 16750', 'BOGOR, JAWA BARAT', '0251-8253630', 'Jawa Barat'),
(31, 'RS UMUM DAERAH  R SYAMSUDIN SH', 'JL. RUMAH SAKIT NO. 1 KOTA SUKABUMI', 'SUKABUMI, JAWA BARAT', '', 'Jawa Barat'),
(32, 'RS UMUM DAERAH GUNUNG JATI', 'JL. KESAMBI NO.56 CIREBON - 45134', 'CIREBON, JAWA BARAT', '', 'Jawa Barat'),
(33, 'RS UMUM DAERAH KAB. INDRAMAYU', 'JL. MURAH NARA NO. 7 SINDANG INDRAMAYU', 'INDRAMAYU, JAWA BARAT', '(0234) 272655', 'Jawa Barat'),
(34, 'RS UMUM DAERAH K.R.M.T WONGSONEGORO', 'JL. FATMAWATI RAYA NO.1', 'SEMARANG, JAWA TENGAH', '(024) 6711500', 'Jawa Tengah'),
(35, 'RS UMUM PUSAT DR. KARIADI', 'JL. DR. SOETOMO NO.16,SEMARANG', 'SEMARANG, JAWA TENGAH', '', 'Jawa Tengah'),
(36, 'RS UMUM DAERAH KARDINAH', 'JALAN AIP JL. KS. TUBUN NO.2, KEJAMBON, KEC. TEGAL TIM., KOTA TEGAL, JAWA TENGAH 52124', 'TEGAL, JAWA TENGAH', '(0283) 350477', 'Jawa Tengah'),
(37, 'RS UMUM PUSAT DR. SOERADJI TIRTONEGORO', 'JL. KRT. SURAJI TIRTONEGORO NO.1, KLATEN', 'KLATEN, JAWA TENGAH', '', 'Jawa Tengah'),
(38, 'RS UMUM DAERAH DR. LOEKMONO HADI', 'JL. DR. LUKMONOHADI NO.19,KUDUS', 'KUDUS, JAWA TENGAH', '', 'Jawa Tengah'),
(39, 'RS UMUM DAERAH DR. SOESELO SLAWI KABUPATEN TEGAL', 'JL. DR. SOETOMO NO.63, SLAWI KULON, KEC. SLAWI, TEGAL, JAWA TENGAH 52419', 'TEGAL, JAWA TENGAH', '(0283) 491016', 'Jawa Tengah'),
(40, 'RS UMUM DAERAH KRATON KAB. PEKALONGAN', 'JL. DR SUTOMO NO. 42 BATANG', 'PEKALONGAN, JAWA TENGAH', '', 'Jawa Tengah'),
(41, 'RS UMUM DAERAH  DR. H. SOEWONDO KENDAL', 'JL. LAUT NO. 21, KENDAL', 'KENDAL, JAWA TENGAH', '', 'Jawa Tengah'),
(42, 'RS UMUM DAERAH DR. MOEWARDI SURAKARTA', 'JL. KOL SUTARTO 132,SURAKARTA', 'KOTA SURAKARTA, JAWA TENGAH', '', 'Jawa Tengah'),
(43, 'RS UMUM DAERAH TIDAR', 'JL. TIDAR NO.30 A, KOTA MAGELANG', 'MAGELANG, JAWA TENGAH', '', 'Jawa Tengah'),
(44, 'RSUD BANYUMAS', 'JL. RUMAH SAKIT NO.1 BANYUMAS', 'BANYUMAS, JAWA TENGAH', '', 'Jawa Tengah'),
(45, 'RS PARU DR. ARIO WIRAWAN', 'JL. HASANUDIN NO.806,SALATIGA', 'KOTA SALATIGA, JAWA TENGAH', '', 'Jawa Tengah'),
(46, 'RS UMUM DAERAH PROF DR. MARGONO SOEKARJO PURWOKER', 'JL. DR GUMBREG NO. 1 PURWOKERTO', 'BANYUMAS, JAWA TENGAH', '', 'Jawa Tengah'),
(47, 'RS UNIVERSITAS AIRLANGGA', 'KAMPUS C UNIVERSITAS AIRLANGGA, MULYOREJO, SURABAYA', 'KOTA SURABAYA, JAWA TIMUR', '0813-3235-5540', 'Jawa Timur'),
(48, 'RS UMUM DAERAH DR. SOETOMO', 'JL. MAYJEND. PROF. DR. MOESTOPO NO. 6 - 8 SURABAYA, JAWA TIMUR', 'KOTA SURABAYA, JAWA TIMUR', '(031) 5501078', 'Jawa Timur'),
(49, 'RS UMUM DAERAH DR. SOEDONO MADIUN', 'JL. DR. SOETOMO 59, MADIUN', 'KOTA MADIUN, JAWA TIMUR', '(0351) 454657', 'Jawa Timur'),
(50, 'RS UMUM DAERAH DR. SAIFUL ANWAR', 'JL. JAKSA AGUNG SUPRAPTO NO.2 MALANG', 'MALANG, JAWA TIMUR', '(0341) 362101', 'Jawa Timur'),
(51, 'RS UMUM DAERAH DR. R. KOESMA TUBAN', 'JL. DR. WAHIDIN SUDIRO HUSODO NO. 800', 'TUBAN, JAWA TIMUR', '(0356) 321010', 'Jawa Timur'),
(52, 'RS UMUM DAERAH DR. ISKAK TULUNGAGUNG', 'JL. DR. WAHIDIN SUDIRO HUSODO TULUNGAGUNG', 'TULUNGAGUNG, JAWA TIMUR', '(0355) 322609', 'Jawa Timur'),
(53, 'RS UMUM DAERAH SIDOARJO', 'JALAN MOJOPAHIT NO. 667 SIDOARJO', 'SIDOARJO, JAWA TIMUR', '(031) 8961649', 'Jawa Timur'),
(54, 'RS UMUM DAERAH BLAMBANGAN', 'JL. LETKOL ISTIQLAH NO. 49 BANYUWANGI', 'BANYUWANGI, JAWA TIMUR', '(0333) 421118', 'Jawa Timur'),
(55, 'RS UMUM DAERAH DR. SOEBANDI', 'JL. DR. SOEBANDI NO.124, JEMBER', 'JEMBER, JAWA TIMUR', '(0331) 487441', 'Jawa Timur'),
(56, 'RS UMUM DAERAH KABUPATEN KEDIRI', 'JL. PAHLAWAN KUSUMA BANGSA NO. 1 PARE', 'KEDIRI, JAWA TIMUR', '(0354) 391718', 'Jawa Timur'),
(57, 'RS UMUM DAERAH DR. R. SOSODORO DJATIKOESOEMO', 'JL. VETERAN NO 36, BOJONEGORO', 'BOJONEGORO, JAWA TIMUR', '(0353) 3412133', 'Jawa Timur'),
(58, 'RS UMUM DAERAH DR. SOEDARSO PONTIANAK', 'JL. DR. SOEDARSO NO.1 PONTIANAK', 'KOTA PONTIANAK, KALIMANTAN BARAT', '(0561) 737701', 'Kalimantan Barat'),
(59, 'RS UMUM DAERAH ADE MUHAMMAD DJOEN SINTANG', 'JL. PATIMURA DAN JL.YC OEVANG OERAY SINTANG', 'SINTANG, KALIMANTAN BARAT', '(0565) 21002', 'Kalimantan Barat'),
(60, 'RS UMUM DAERAH DR. AGOESDJAM KETAPANG', 'JL. PANJAITAN NO.51 KETAPANG', 'KETAPANG, KALIMANTAN BARAT', '(0534) 3037239', 'Kalimantan Barat'),
(61, 'RS UMUM DAERAH DR. ABDUL AZIZ SINGKAWANG', 'JL. DR SOETOMO NO. 28, SINGKAWANG', 'KOTA SINGKAWANG, KALIMANTAN BARAT', '', 'Kalimantan Barat'),
(62, 'RS UMUM DAERAH ULIN BANJARMASIN', 'JL. JEN A YANI NO.43, BANJARMASIN KALIMANTAN SELATAN', 'KOTA BANJARMASIN, KALIMANTAN SELATAN', '(0511) 3252180', 'Kalimantan Selatan'),
(63, 'RS UMUM DAERAH H. BOEJASIN PELAIHARI', 'JL. HADJI BOEJASIN NO.68 KAB. TANAH LAUT', 'TANAH LAUT, KALIMANTAN SELATAN', '(0512) 21083', 'Kalimantan Selatan'),
(64, 'RS UMUM DAERAH DR DORIS SYLVANUS PALANGKA RAYA', 'JL. TAMBUN BUNGAI NO.4 PALANGKARAYA', 'MURUNG RAYA, KALIMANTAN TENGAH', '(0536) 3224695', 'Kalimantan Tengah'),
(65, 'RS UMUM DAERAH SULTAN IMANUDDIN', 'JL. SUTAN SYAHRIR NO 17 PANGKALAN BUN', 'KOTAWARINGIN BARAT, KALIMANTAN TENGAH', '(0532) 21404', 'Kalimantan Tengah'),
(66, 'RS UMUM DAERAH DR MURJANI SAMPIT', 'JL. H M ARSYAD NO. 65 SAMPIT', 'BARITO TIMUR, KALIMANTAN TENGAH', '(0531) 21010', 'Kalimantan Tengah'),
(67, 'RS UMUM DAERAH ABDUL WAHAB SJAHRANIE', 'JL. PALANG MERAH NO.1, SIDODADI, KEC. SAMARINDA ULU, KOTA SAMARINDA, KALIMANTAN TIMUR 75123', 'KOTA SAMARINDA, KALIMANTAN TIMUR', '(0541) 738118', 'Kalimantan Timur'),
(68, 'RS UMUM DAERAH TAMAN HUSADA', 'JL. LETJEN S. PARMAN NO.1, BELIMBING, BONTANG BAR., KOTA BONTANG, KALIMANTAN TIMUR 75331', 'KOTA BONTANG, KALIMANTAN TIMUR', '(0548) 23000', 'Kalimantan Timur'),
(69, 'RS UMUM DAERAH DR. KANUJOSO DJATIWIBOWO', 'JL. M.T. HARYONO RING ROAD BALIKPAPAN NO.656', 'KOTA BALIKPAPAN, KALIMANTAN TIMUR', '(0542) 873901', 'Kalimantan Timur'),
(70, 'RS UMUM DAERAH AJI MUHAMMAD PARIKESIT', 'JL. RATU AGUNG NO. 1 TENGGARONG SEBERANG', 'KUTAI KARTANEGARA, KALIMANTAN TIMUR', '(0541) 661015', 'Kalimantan Timur'),
(71, 'RS UMUM DAERAH PANGLIMA SEBAYA', 'JL. KUSUMA BANGSA KM.5 TANAH GROGOT', 'PASER, KALIMANTAN TIMUR', '0852-4743-3000', 'Kalimantan Timur'),
(72, 'RS UMUM DAERAH TANJUNG SELOR', 'JL CENDRAWASIH KEL TANJUNG SELOR HILIR, KEC TANJUNG SELOR KAB BULUNGAN', 'BULUNGAN, KALIMANTAN UTARA', '(0552) 21118', 'Kalimantan Utara'),
(73, 'RS UMUM KOTA TARAKAN', 'JL. AKI BABU RT 01 KELURAHAN KARANG HARAPAN KECAMATAN TARAKAN BARAT KOTA TARAKAN PROVINSI KALIMANTAN', 'KOTA TARAKAN, KALIMANTAN UTARA', '(0551) 21166', 'Kalimantan Utara'),
(74, 'RS UMUM DAERAH DEPATI HAMZAH', 'JL. SOEKARNO HATTA, BUKITBESAR, KEC. GIRIMAYA, KOTA PANGKAL PINANG, KEPULAUAN BANGKA BELITUNG 33684', 'KOTA PANGKALPINANG, KEPULAUAN BANGKA BELITUNG', '(0717) 438660', 'Kep. Bangka Belitung'),
(75, 'RS UMUM DAERAH DR. H. MARSIDI JUDONO', 'JL. JEND. SUDIRMAN KM.5,5, AIK RAYAK, TJ. PANDAN, KABUPATEN BELITUNG, KEPULAUAN BANGKA BELITUNG 33411', 'BELITUNG, KEPULAUAN BANGKA BELITUNG', '(0719) 22190', 'Kep. Bangka Belitung'),
(76, 'RS UMUM DAERAH PROVINSI KEPULAUAN RIAU TANJUNGPINA', 'JL. W.R SUPRATMAN NO. 100 KM. 8 TANJUNGPINANG KEPULAUAN RIAU', 'KOTA TANJUNGPINANG, KEPULAUAN RIAU', '', 'Kep. Riau'),
(77, 'RS BADAN PENGUSAHAAN BATAM', 'JL. DR. CIPTO MANGUNKUSUMO NO.1,  SEKUPANG,BATAM', 'KOTA BATAM, KEPULAUAN RIAU', '(0778) 322121', 'Kep. Riau'),
(78, 'RS UMUM DAERAH EMBUNG FATIMAH KOTA BATAM', 'JL. LETJEND SUPRAPTO NO.1-9, BUKIT TEMPAYAN, KEC. BATU AJI, KOTA BATAM, KEPULAUAN RIAU 29425', 'KOTA BATAM, KEPULAUAN RIAU', '(0778) 364446', 'Kep. Riau'),
(79, 'RS UMUM DAERAH MUHAMMAD SANI KABUPATEN KARIMUN', 'JALAN POROS NO.1, HARJOSARI, TEBING, KABUPATEN KARIMUN, KEPULAUAN RIAU 29663', 'KARIMUN, KEPULAUAN RIAU', '(0777) 327808', 'Kep. Riau'),
(80, 'RS UMUM DAERAH DR H ABDUL MOELOEK', 'JL. DR. RIVAI NO.6, PENENGAHAN, KEC. TJ. KARANG PUSAT, KOTA BANDAR LAMPUNG, LAMPUNG 35112', 'KOTA BANDAR LAMPUNG, LAMPUNG', '(0721) 703312', 'Lampung'),
(81, 'RS UMUM DAERAH AHMAD YANI METRO', 'JL.JEND. A.YANI NO.13 KOTA METRO', 'KOTA METRO, LAMPUNG', '', 'Lampung'),
(82, 'RS UMUM DAERAH MAY JEN HM RYACUDU', 'JL. JEND. SUDIRMAN NO.2, KOTA GAPURA, KOTABUMI, KABUPATEN LAMPUNG UTARA, LAMPUNG 34511', 'LAMPUNG UTARA, LAMPUNG', '(0724) 22095', 'Lampung'),
(83, 'RS UMUM DAERAH DR. H. BOB BAZAR, SKM', 'JL. LETTU ROHANI NO.14 B, KEDATON, KEC. KALIANDA, KABUPATEN LAMPUNG SELATAN, LAMPUNG 35551', 'LAMPUNG SELATAN, LAMPUNG', '(0727) 322159', 'Lampung'),
(84, 'RS UMUM PUSAT DR. J. LEIMENA', 'JALAN R. SUPRAPTO NO.123, RUMAH TIGA, TLK. AMBON, KOTA AMBON, MALUKU', 'KOTA AMBON, MALUKU', '', 'Maluku'),
(85, 'RS UMUM DR. M. HAULUSSY AMBON', 'JL. DR. KAYADOE, BENTENG, NUSANIWE, KEL BENTENG, NUSANIWE, KOTA AMBON, MALUKU', 'KOTA AMBON, MALUKU', '(0911) 344871', 'Maluku'),
(86, 'RS UMUM DAERAH DR. P. P. MAGRETTI SAUMLAKI', 'JL. MR. LATUHARHARI - SAUMLAKI', 'MALUKU TENGGARA BARAT, MALUKU', '', 'Maluku'),
(87, 'RS UMUM DAERAH DR. H. CHASAN BOESOIRIE TERNATE', 'JL. CEMPAKA, TANAH TINGGI BAR., TERNATE SEL., KOTA TERNATE, MALUKU UTARA', 'KOTA TERNATE, MALUKU UTARA', '(0921) 3121281', 'Maluku Utara'),
(88, 'RS UMUM DAERAH NTB', 'JL. PRABU RANGKASARI DASAN CERMEN', 'KOTA MATARAM, NUSA TENGGARA BARAT', '(0370) 7502424', 'Nusa Tenggara Barat'),
(89, 'RS UMUM DAERAH DR. R. SOEDJONO SELONG', 'JL. PROF M. YAMIN, SH. NO. 55 SELONG', 'LOMBOK TIMUR, NUSA TENGGARA BARAT', '0376 21415', 'Nusa Tenggara Barat'),
(90, 'RS UMUM BIMA', 'JL. LANGSAT NO. 1 RABA KOTA BIMA', 'BIMA, NUSA TENGGARA BARAT', '(0374-43142)', 'Nusa Tenggara Barat'),
(91, 'RS H. L. MANAMBAI ABDULKADIR', 'JL. LINTAS SUMBAWA-BIMA KM 5, SEKETENG, KEC. SUMBAWA, KABUPATEN SUMBAWA, NUSA TENGGARA BAR. 84316', 'SUMBAWA, NUSA TENGGARA BARAT', '(0371) 2628078', 'Nusa Tenggara Barat'),
(92, 'RS UMUM PROF DR WZ JOHANES', 'JL. DR MOCH HATTA NO. 19 KUPANG', 'KUPANG, NUSA TENGGARA TIMUR', '(0380) 820331', 'Nusa Tenggara Timur'),
(93, 'RS UMUM DAERAH DR TC HILLERS MAUMERE', 'JL WAIRKLAU, NO. 1, 86113, KOTA BARU, ALOK TIM., KABUPATEN SIKKA, NUSA TENGGARA TIM.', 'SIKKA, NUSA TENGGARA TIMUR', '0812-6115-3944 / 0380 - 21617', 'Nusa Tenggara Timur'),
(94, 'RS UMUM DAERAH KOMODO', 'DESA GOLO BILAS, KECAMATAN KOMODO, KABUPATEN MANGGARAI BARAT, NTT', 'MANGGARAI BARAT, NUSA TENGGARA TIMUR', '0813-3705-5250', 'Nusa Tenggara Timur'),
(95, 'RS UMUM JAYAPURA', 'JL. KESEHATAN NO.1, DOK II, BAYANGKARA, JAYAPURA UTARA, KOTA JAYAPURA, PAPUA', 'JAYAPURA, PAPUA', '(0967) 533616 EXT. 533781', 'Papua'),
(96, 'RS UMUM MERAUKE', 'JL. SOEKARJO WIRYOPRANOTO NO.1, MARO, KEC. MERAUKE, KABUPATEN MERAUKE, PAPUA 99613', 'MERAUKE, PAPUA', '(0971) 321124 EXT. 321125', 'Papua'),
(97, 'RS UMUM NABIRE', 'JL. R.E. MARTADINATA, SIRIWINI, KEC. NABIRE, KABUPATEN NABIRE, PAPUA 98816', 'NABIRE, PAPUA', '(0984) 21845', 'Papua'),
(98, 'RS UMUM DAERAH MANOKWARI', 'JL. SILIWANGI NO.1, MANOKWARI BAR., KABUPATEN MANOKWARI, PAPUA BAR. 98312', 'MANOKWARI, PAPUA BARAT', '(0986) 215133', 'Papua Barat'),
(99, 'RS UMUM DAERAH KABUPATEN SORONG', 'JL. KESEHATAN NO. 36 SORONG', 'SORONG, PAPUA BARAT', '(0951) 321850', 'Papua Barat'),
(100, 'RS UMUM DAERAH  ARIFIN ACHMAD', 'JL. DIPONEGORO NO.2, SUMAHILANG, KEC. PEKANBARU KOTA, KOTA PEKANBARU, RIAU 28156', 'KOTA PEKANBARU, RIAU', '(0761) 21618', 'Riau'),
(101, 'RS UMUM DAERAH  KOTA DUMAI', 'JL. TJ. JATI NO.4, BULUH KASAP, DUMAI TIM., KOTA DUMAI, RIAU 28812', 'KOTA DUMAI, RIAU', '(0765) 440992', 'Riau'),
(102, 'RS UMUM DAERAH  PURI HUSADA TEMBILAHAN', 'JL. VETERAN NO.52, TEMBILAHAN HILIR, TEMBILAHAN, KABUPATEN INDRAGIRI HILIR, RIAU 29281', 'INDRAGIRI HILIR, RIAU', '(0768) 22118', 'Riau'),
(103, 'RS UMUM DAERAH PROVINSI SULAWESI BARAT', 'JL. RE MARTADINATA, SIMBORO, KEC. SIMBORO DAN KEPULAUAN, KABUPATEN MAMUJU, SULAWESI BARAT 91512', 'MAMUJU, SULAWESI BARAT', '(0426) 2703260', 'Sulawesi Barat'),
(104, 'RSUP DR. WAHIDIN SUDIROHUSODO', 'JL. PERINTIS KEMERDEKAAN KM.11 MAKASAR', 'KOTA MAKASSAR, SULAWESI SELATAN', '(0411) 584677', 'Sulawesi Selatan'),
(105, 'RS DR. TADJUDDIN CHALID, MPH', 'JL. PACCERAKKANG NO.67 / PAJJAIANG DAYA MAKASSAR', 'KOTA MAKASSAR, SULAWESI SELATAN', '(0411) 513795', 'Sulawesi Selatan'),
(106, 'RS UMUM DAERAH LABUANG BAJI', 'JL. DR. RATULANGI NO.81 MAKASSAR', 'KOTA MAKASSAR, SULAWESI SELATAN', '(0411) 873482', 'Sulawesi Selatan'),
(107, 'RS TK.II PELAMONIA', 'JL. JEND SUDIRMAN NO.27,MAKASSAR', 'KOTA MAKASSAR, SULAWESI SELATAN', '0811-1782-399', 'Sulawesi Selatan'),
(108, 'RS UMUM DAERAH LAKIPADADA', 'JL. PONGTIKU MANDETEK TANA TORAJA', 'TANA TORAJA, SULAWESI SELATAN', '(0423) 22264', 'Sulawesi Selatan'),
(109, 'RS UMUM DAERAH KABUPATEN SINJAI', 'JL. JEND SUDIRMAN NO. 47 SINJAI, SULAWESI SELATAN', 'SINJAI, SULAWESI SELATAN', '(0482) 21132', 'Sulawesi Selatan'),
(110, 'RS UMUM DAERAH ANDI MAKKASAU PAREPARE', 'JL. NURUSSAMAWATI NO.9 KOTA PAREPARE', 'KOTA PARE PARE, SULAWESI SELATAN', '(0401) 27643', 'Sulawesi Selatan'),
(111, 'RS UMUM DAERAH UNDATA PALU', 'JALAN TRANS SULAWESI TONDO, TALISE, MANTIKULORE, KOTA PALU, SULAWESI TENGAH 94119', 'KOTA PALU, SULAWESI TENGAH', '(0451) 4908020', 'Sulawesi Tengah'),
(112, 'RS UMUM ANUTAPURA PALU', 'JL. KANGKUNG NO. 1 PALU', 'KOTA PALU, SULAWESI TENGAH', '(0451) 460570', 'Sulawesi Tengah'),
(113, 'RS UMUM  MOKOPIDO TOLI-TOLI', 'JL. LANONI NO.37 KEL BARU KEC BAOLAN KAB TOLI-TOLI, SULTENG', 'TOLITOLI, SULAWESI TENGAH', '(0453) 21301', 'Sulawesi Tengah'),
(114, 'RS UMUM DAERAH KOLONEDALE', 'JL. W MONGINSIDI 2 KOLONEDALE', 'MOROWALI UTARA, SULAWESI TENGAH', '(0465) 21010', 'Sulawesi Tengah'),
(115, 'RS UMUM DAERAH KABUPATEN BANGGAI', 'JL. IMAM BONJOL KM 3 NO. 14 LUWUK', 'BANGGAI, SULAWESI TENGAH', '(0461) 21820', 'Sulawesi Tengah'),
(116, 'RS BAHTERAMAS PROVINSI SULTRA', 'JL. KAPTEN PIERE TENDEAN NO 50 KEC BARUGA', 'KOTA KENDARI, SULAWESI TENGGARA', '(0401) 3195611', 'Sulawesi Tenggara'),
(117, 'RSUP PROF. DR. R. D. KANDOU', 'JL. RAYA TANAWANGKO NO.56, MANADO', 'KOTA MANADO, SULAWESI UTARA', '(0431) 8383058', 'Sulawesi Utara'),
(118, 'RS UMUM DR.SAM RATULANGI', 'JL. R. SUPRAPTO NO.123, LUAAN, TONDANO TIM., KABUPATEN MINAHASA, SULAWESI UTARA', 'MINAHASA, SULAWESI UTARA', '(0431) 321171', 'Sulawesi Utara'),
(119, 'RSU RATATOTOK - BUYAT', 'JL. J.W. LASUT RATATOTOK II KECAMATAN RATATOTOK', 'MINAHASA TENGGARA, SULAWESI UTARA', '', 'Sulawesi Utara'),
(120, 'RS UMUM DAERAH KOTA KOTAMOBAGU', 'KELURAHAN POBUNDAYAN KECAMATAN KOTAMOBAGU SELATAN', 'KOTA KOTAMOBAGU, SULAWESI UTARA', '', 'Sulawesi Utara'),
(121, 'RSUP DR. M. DJAMIL', 'JL. PERINTIS KEMERDEKAAN PADANG', 'KOTA PADANG, SUMATERA BARAT', '', 'Sumatera Barat'),
(122, 'RS UMUM DAERAH DR. ACHMAD MOCHTAR', 'JL. DR. ABDUL RIVAI NO.1, BUKIT APIT PUHUN, KEC. GUGUK PANJANG, KOTA BUKITTINGGI, SUMATERA BARAT 26122', 'KOTA BUKITTINGGI, SUMATERA BARAT', '(0752) 21720', 'Sumatera Barat'),
(123, 'RS UMUM DAERAH SITI FATIMAH PROVINSI SUMATERA SELATAN', 'JL. KOL. H. BURLIAN KM 6', 'KOTA PALEMBANG, SUMATERA SELATAN', '(0711) 5718883', 'Sumatera Selatan'),
(124, 'RS UMUM PUSAT DR. MOHAMMAD HOESIN PALEMBANG', 'JL. JEND. SUDIRMAN NO.KM.3,5, SEKIP JAYA, KEC. KEMUNING, KOTA PALEMBANG, SUMATERA SELATAN 30126', 'KOTA PALEMBANG, SUMATERA SELATAN', '(0711) 354088', 'Sumatera Selatan'),
(125, 'RS UMUM DAERAH LAHAT', 'JL. LETJEND HARUN SOHAR NO.28', 'LAHAT, SUMATERA SELATAN', '', 'Sumatera Selatan'),
(126, 'RS DR. RIVAI ABDULLAH', 'JL. SUNGAI KUNDUR KELURAHAN MARIANA KEC. BANYUASIN I', 'BANYUASIN, SUMATERA SELATAN', '', 'Sumatera Selatan'),
(127, 'RS UMUM DAERAH KAYUAGUNG', 'JL. LINTAS TIMUR LAMPUNG - PALEMBANG, JUA JUA, KEC. KAYU AGUNG, KABUPATEN OGAN KOMERING ILIR, SUMATERA SELATAN 30867', 'OGAN KOMERING ILIR, SUMATERA SELATAN', '(0712) 323889', 'Sumatera Selatan'),
(128, 'RSUP H. ADAM MALIK', 'JL. BUNGA LAU NO.17, KEMENANGAN TANI, KEC. MEDAN TUNTUNGAN, KOTA MEDAN, SUMATERA UTARA 20136', 'KOTA MEDAN, SUMATERA UTARA', '', 'Sumatera Utara'),
(129, 'RS UMUM DAERAH DR. DJASAMEN SARAGIH', 'JL SUTOMO NO. 230, PEMATANGSIANTAR', 'KOTA PEMATANGSIANTAR, SUMATERA UTARA', '(0622) 22959', 'Sumatera Utara'),
(130, 'RS UMUM DAERAH KABANJAHE', 'JL KAPTEN SELAMAT KETAREN NO. 08 KABANJAHE', 'KARO, SUMATERA UTARA', '0628-20012', 'Sumatera Utara'),
(131, 'RS UMUM DAERAH PADANG SIDEMPUAN', 'JL DR. F.L. TOBING NO. 10,PADANGSIDIMPUAN', 'KOTA PADANG SIDIMPUAN, SUMATERA UTARA', '(0634) 21251', 'Sumatera Utara'),
(132, 'RS UMUM DAERAH TARUTUNG', 'JL AGUS SALIM NO. 1 TARUTUNG', 'TAPANULI UTARA, SUMATERA UTARA', '0633 - 21303', 'Sumatera Utara');

-- --------------------------------------------------------

--
-- Table structure for table `historyaay`
--

CREATE TABLE `historyaay` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historyaay`
--

INSERT INTO `historyaay` (`id`, `tanggal`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '23-05-2021', 'Sinopharm', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2021-05-23<br>Vaksinasi Selanjutnya Pada 13-06-2021', 'Reaksi Alergi', 'Anda Sebaiknya Menghubungi Dokter');

-- --------------------------------------------------------

--
-- Table structure for table `historyanas`
--

CREATE TABLE `historyanas` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historyanas`
--

INSERT INTO `historyanas` (`id`, `tanggal`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '21-05-2021', 'Sinopharm', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2021-05-22<br>Vaksinasi Selanjutnya Pada 12-06-2021', 'Nyeri, hangat, gatal, atau memar di area suntikan', 'Tidak Perlu Khawatir Gejala Anda Umum'),
(1, '23-05-2021', 'Sinopharm', 'Anda Telah Vaksinasi Tahap 2', 'Vaksin Tahap 1 = 2021-05-22<br>Vaksinasi Selanjutnya Pada 12-06-2021', 'Reaksi Alergi', 'Anda Sebaiknya Menghubungi Dokter');

-- --------------------------------------------------------

--
-- Table structure for table `historybambang`
--

CREATE TABLE `historybambang` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historybambang`
--

INSERT INTO `historybambang` (`id`, `tanggal`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '14-05-2021', 'Novavax', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2021-05-04<br>Vaksinasi Selanjutnya Pada 25-05-2021', 'Reaksi Alergi', 'Anda Sebaiknya Menghubungi Dokter'),
(1, '14-05-2021', 'Novavax', 'Anda Telah Vaksinasi Tahap 2', 'Vaksin Tahap 1 = 2021-05-04<br>Vaksinasi Selanjutnya Pada 25-05-2021', 'Tangan pegal dan nyeri', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `historyindra`
--

CREATE TABLE `historyindra` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historyindra`
--

INSERT INTO `historyindra` (`id`, `tanggal`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(132, '31-05-2021', 'AstraZeneca', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2021-05-04<br>Vaksinasi Selanjutnya Pada 03-06-2021 Sampai 27-07-2021', 'Mengigil', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `historyrajawali`
--

CREATE TABLE `historyrajawali` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historyrajawali`
--

INSERT INTO `historyrajawali` (`id`, `tanggal`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(132, '29-07-2021', 'Sinovac', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2021-07-29<br>Vaksinasi Selanjutnya Pada 12-08-2021', 'Demam ringan', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `historyrizki`
--

CREATE TABLE `historyrizki` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historyrizki`
--

INSERT INTO `historyrizki` (`id`, `tanggal`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '18-05-2021', 'AstraZeneca', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2021-05-25<br>Vaksinasi Selanjutnya Pada 24-06-2021 Sampai 17-08-2021', 'Mengigil', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `historyvirra`
--

CREATE TABLE `historyvirra` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `penjadwalan` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historyvirra`
--

INSERT INTO `historyvirra` (`id`, `tanggal`, `jenis_vaksin`, `ket`, `penjadwalan`, `gejala`, `tindakan`) VALUES
(0, '03-12-2021', 'AstraZeneca', 'Anda Telah Vaksinasi Tahap 1', 'Vaksin Tahap 1 = 2021-12-02<br>Vaksinasi Selanjutnya Pada 01-01-2022 Sampai 24-02-2022', 'Muntah', 'Tidak Perlu Khawatir Gejala Anda Umum'),
(1, '03-12-2021', 'AstraZeneca', 'Anda Telah Vaksinasi Tahap 2', 'Vaksin Tahap 1 = 2021-12-02<br>Vaksinasi Selanjutnya Pada 01-01-2022 Sampai 24-02-2022', 'Sakit Kepala', 'Tidak Perlu Khawatir Gejala Anda Umum');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chataku`
--
ALTER TABLE `chataku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatanas`
--
ALTER TABLE `chatanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chathan`
--
ALTER TABLE `chathan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chathilmi`
--
ALTER TABLE `chathilmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatindra`
--
ALTER TABLE `chatindra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatmuhammad`
--
ALTER TABLE `chatmuhammad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatrajawali`
--
ALTER TABLE `chatrajawali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatreza`
--
ALTER TABLE `chatreza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatrizki`
--
ALTER TABLE `chatrizki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatvirra`
--
ALTER TABLE `chatvirra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataaay`
--
ALTER TABLE `dataaay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataaku`
--
ALTER TABLE `dataaku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataanas`
--
ALTER TABLE `dataanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataapa`
--
ALTER TABLE `dataapa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databambang`
--
ALTER TABLE `databambang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databasuki`
--
ALTER TABLE `databasuki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datahan`
--
ALTER TABLE `datahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datahilmi`
--
ALTER TABLE `datahilmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataindra`
--
ALTER TABLE `dataindra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datajamal`
--
ALTER TABLE `datajamal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datamuhammad`
--
ALTER TABLE `datamuhammad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datanazla`
--
ALTER TABLE `datanazla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datarajawali`
--
ALTER TABLE `datarajawali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datareza`
--
ALTER TABLE `datareza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datarizki`
--
ALTER TABLE `datarizki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datavirra`
--
ALTER TABLE `datavirra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datazahra`
--
ALTER TABLE `datazahra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_provinsi`
--
ALTER TABLE `data_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rs`
--
ALTER TABLE `data_rs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historyaay`
--
ALTER TABLE `historyaay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historyanas`
--
ALTER TABLE `historyanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historybambang`
--
ALTER TABLE `historybambang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historyindra`
--
ALTER TABLE `historyindra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historyrajawali`
--
ALTER TABLE `historyrajawali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historyrizki`
--
ALTER TABLE `historyrizki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historyvirra`
--
ALTER TABLE `historyvirra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_provinsi`
--
ALTER TABLE `data_provinsi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `data_rs`
--
ALTER TABLE `data_rs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
