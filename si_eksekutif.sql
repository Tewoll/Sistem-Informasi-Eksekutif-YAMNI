-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:26 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_eksekutif`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(5) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenkel_guru` enum('Laki-Laki','Perempuan') NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_pendidikan` int(5) NOT NULL,
  `id_jabatan` int(5) NOT NULL,
  `tgl_mulai` year(4) NOT NULL,
  `pns_nonpns` enum('PNS','NON PNS') NOT NULL,
  `id_tingkat` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama_guru`, `jenkel_guru`, `tmpt_lahir`, `tgl_lahir`, `id_pendidikan`, `id_jabatan`, `tgl_mulai`, `pns_nonpns`, `id_tingkat`, `alamat`, `foto`) VALUES
(1, 'Ahmad Zohri, S.Pd.I', 'Laki-Laki', 'Lahat', '1976-03-21', 3, 1, 2008, 'PNS', 1, 'Plaju', ''),
(2, 'Asmairyani, S.Pd.I, M.Si', 'Perempuan', 'Prabumulih', '1988-06-01', 4, 2, 2009, 'PNS', 1, 'Plaju', ''),
(3, 'Dra. Ermawati', 'Perempuan', 'Kebumen', '1990-09-21', 3, 3, 2015, 'PNS', 1, 'Bukit Lama', ''),
(4, 'Dra. Sy. Khadijah', 'Perempuan', 'Palembang', '1978-09-22', 3, 4, 2012, 'PNS', 1, 'Kalidoni', ''),
(5, 'Lidya Okshiana, S.Pd.I', 'Perempuan', 'Palembang', '1983-01-18', 3, 7, 2015, 'NON PNS', 1, 'Perumnas', ''),
(6, 'Ayu Fadila, S.Ag', 'Perempuan', 'Dempo', '1987-02-11', 3, 8, 2016, 'NON PNS', 1, 'Bukit Sangkal', ''),
(7, 'Eka Pratiwi Pangestiningtyas, S.Pd', 'Perempuan', 'Yogyakarta', '1982-05-26', 3, 6, 2010, 'NON PNS', 1, 'Plaju', ''),
(8, 'Kartini, S.Pd', 'Perempuan', 'Sleman', '1992-01-29', 3, 11, 2017, 'NON PNS', 1, 'Plaju', ''),
(9, 'Fitriani, S.Pd', 'Perempuan', 'Sulawesi', '1993-03-01', 3, 11, 2019, 'NON PNS', 1, 'Plaju', ''),
(10, 'Intan, S.Pd', 'Perempuan', 'Palembang', '1975-11-17', 3, 11, 2019, 'PNS', 1, 'Kertapati', ''),
(11, 'Diah Lestari, S.Pd', 'Perempuan', 'Palembang', '1986-09-14', 3, 11, 2016, 'NON PNS', 1, 'Jakabaring', ''),
(12, 'Fitri Yunita, S.Pd', 'Perempuan', 'Lampung', '1977-09-11', 3, 11, 2015, 'NON PNS', 1, 'Jakabaring', ''),
(13, 'Muhammad Yanto, S.Pd', 'Laki-Laki', 'Indralaya', '1988-10-10', 3, 11, 2014, 'NON PNS', 1, 'Kemuning', ''),
(14, 'Lindawati, S.Ag', 'Perempuan', 'Silaberanti', '1987-06-14', 3, 11, 2013, 'NON PNS', 1, 'Silaberanti', ''),
(15, 'Dwi Ananda Yulinar, S.Pd', 'Perempuan', 'Plaju', '1973-07-03', 4, 11, 2011, 'PNS', 1, 'Jaya indah', ''),
(16, 'Ahmad Zohri, S.Pd.I', 'Laki-Laki', 'Ogan Ilir', '1976-10-01', 3, 11, 2012, 'NON PNS', 1, 'Plaju', ''),
(17, 'Nurbaiti, S.Pd', 'Perempuan', 'Banyuasin', '1995-11-11', 3, 11, 2020, 'NON PNS', 1, 'Plaju', ''),
(18, 'POMI HARIWIJAYA.AB,S.Pd.I', 'Laki-Laki', 'PALEMBANG', '1971-08-22', 3, 1, 2003, 'NON PNS', 3, 'Plaju', ''),
(19, 'YULIANA,S.Pd.I', 'Perempuan', 'PALEMBANG', '1976-07-20', 3, 2, 2011, 'NON PNS', 3, 'Plaju', ''),
(20, 'DRA.ERMAWATI', 'Perempuan', 'TANJUNG BATU', '1965-12-25', 3, 5, 1994, 'NON PNS', 3, 'Bukit Lama', ''),
(21, 'SELAMET YULIANPO P,SH', 'Laki-Laki', 'PALEMBANG', '1995-06-19', 3, 7, 2015, 'NON PNS', 3, 'Kalidoni', ''),
(22, 'DRA.SY.KHADIJAH', 'Perempuan', 'PALEMBANG', '1967-08-14', 3, 10, 1994, 'NON PNS', 3, 'Perumnas', ''),
(23, 'FITRIANI,S.Pd', 'Perempuan', 'LAMPUNG', '1976-12-28', 3, 9, 2001, 'NON PNS', 3, 'Bukit Sangkal', ''),
(24, 'LINDAWATI,S.Ag', 'Perempuan', 'LUMPATAN', '1969-10-25', 3, 11, 2003, 'PNS', 3, 'Plaju', ''),
(25, 'DRA.ERYANI', 'Perempuan', 'MUSI BANYU ASIN', '1968-04-14', 3, 11, 2005, 'PNS', 3, 'Plaju', ''),
(26, 'YULIANA HANDAYANI,S,Ag', 'Perempuan', 'PALEMBANG', '1972-07-18', 3, 11, 2005, 'PNS', 3, 'Plaju', ''),
(27, 'EKA PREMUDYA,S.Pd', 'Perempuan', 'PALEMBANG', '1983-08-31', 3, 11, 2015, 'NON PNS', 3, 'Kertapati', ''),
(28, 'DIGER,S.Pd', 'Laki-Laki', 'TALANG RIMBA', '1993-04-05', 3, 11, 2017, 'NON PNS', 3, 'Jakabaring', ''),
(29, 'IIN LESTARI,S.Pd', 'Perempuan', 'PALEMBANG', '1995-05-11', 3, 11, 2018, 'NON PNS', 3, 'Jakabaring', ''),
(30, 'RAHAYU LESTARI,S.Pd', 'Perempuan', 'JAMBI', '1997-08-22', 3, 11, 2018, 'NON PNS', 3, 'Kemuning', ''),
(31, 'FITRI YUNITA,S.Pd', 'Perempuan', 'PALEMBANG', '1994-03-03', 3, 11, 2018, 'NON PNS', 3, 'Silaberanti', ''),
(32, 'SITI MUNAWAROH,S.Pd', 'Perempuan', 'CIREBON', '1995-06-03', 3, 11, 2019, 'NON PNS', 3, 'Jaya indah', ''),
(33, 'VIVIN SUMARNI,SH', 'Perempuan', 'PALEMBANG', '1979-05-30', 3, 12, 2011, 'NON PNS', 3, 'Plaju', '');

-- --------------------------------------------------------

--
-- Table structure for table `lib_jabatan`
--

CREATE TABLE `lib_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib_jabatan`
--

INSERT INTO `lib_jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Kepala Madrasah'),
(2, 'Wakil Kepala Madrasah'),
(3, 'Wakil Kepala Bagian Kurikulum'),
(4, 'Wakil Kepala Bagian Humas'),
(5, 'Wakil Kepala Bagian Kesiswaan'),
(6, 'Wakil Kepala Bagian Sarana dan Prasarana'),
(7, 'Bendahara'),
(8, 'Kepala Tata Usaha (TU)'),
(9, 'Kepala Perpustakaan'),
(10, 'Al-Quran Hadits'),
(11, 'Guru Mapel'),
(12, 'Operator / TU');

-- --------------------------------------------------------

--
-- Table structure for table `lib_pendidikan_terakhir`
--

CREATE TABLE `lib_pendidikan_terakhir` (
  `id_pendidikan` int(5) NOT NULL,
  `pendidikan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib_pendidikan_terakhir`
--

INSERT INTO `lib_pendidikan_terakhir` (`id_pendidikan`, `pendidikan`) VALUES
(1, 'SLTA / SEDERAJAT'),
(2, 'DIPLOMA I / II'),
(3, 'DIPLOMA IV / STRATA I'),
(4, 'STRATA II'),
(5, 'STRATA III');

-- --------------------------------------------------------

--
-- Table structure for table `lib_prasarana`
--

CREATE TABLE `lib_prasarana` (
  `id_jenis_prasarana` int(5) NOT NULL,
  `jenis_prasarana` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib_prasarana`
--

INSERT INTO `lib_prasarana` (`id_jenis_prasarana`, `jenis_prasarana`) VALUES
(1, 'Ruang');

-- --------------------------------------------------------

--
-- Table structure for table `lib_sarana`
--

CREATE TABLE `lib_sarana` (
  `id_jenis_sarana` int(5) NOT NULL,
  `jenis_sarana` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib_sarana`
--

INSERT INTO `lib_sarana` (`id_jenis_sarana`, `jenis_sarana`) VALUES
(1, 'Peralatan Kantor');

-- --------------------------------------------------------

--
-- Table structure for table `lib_tajaran`
--

CREATE TABLE `lib_tajaran` (
  `id_tajaran` int(5) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `status` enum('Aktif','Tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib_tajaran`
--

INSERT INTO `lib_tajaran` (`id_tajaran`, `tahun_ajaran`, `status`) VALUES
(1, '2020/2021', 'Aktif'),
(2, '2021/2022', 'Tidak aktif');

-- --------------------------------------------------------

--
-- Table structure for table `lib_tingkat`
--

CREATE TABLE `lib_tingkat` (
  `id_tingkat` int(5) NOT NULL,
  `tingkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib_tingkat`
--

INSERT INTO `lib_tingkat` (`id_tingkat`, `tingkat`) VALUES
(1, 'Madrasah Aliyah (MA)'),
(2, 'Madrasah Tsanawiyah (MTs)'),
(3, 'Madrasah Ibtidaiah (MI)'),
(4, 'Taman Kanak-Kanak (TK)'),
(5, 'Tidak Ada'),
(6, 'Sekolah Dasar (SD)'),
(7, 'Seklah Menengah Pertama (SMP)'),
(8, 'Sekolah Menengah Atas (SMA)'),
(9, 'Raudhatul Athfal (RA)');

-- --------------------------------------------------------

--
-- Table structure for table `prasarana`
--

CREATE TABLE `prasarana` (
  `id_prasarana` int(5) NOT NULL,
  `id_jenis_prasarana` int(5) NOT NULL,
  `nama_prasarana` varchar(50) NOT NULL,
  `panjang` varchar(20) NOT NULL,
  `lebar` varchar(20) NOT NULL,
  `luas` varchar(25) NOT NULL,
  `id_tingkat` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prasarana`
--

INSERT INTO `prasarana` (`id_prasarana`, `id_jenis_prasarana`, `nama_prasarana`, `panjang`, `lebar`, `luas`, `id_tingkat`, `foto`, `ket`) VALUES
(1, 1, 'Kelas', '4', '4', '16', 2, '9f1ddca3880debbcc5296d7e99fefe17.jpg', 'ssdas');

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `id_sarana` int(5) NOT NULL,
  `id_jenis_sarana` int(5) NOT NULL,
  `nama_sarana` varchar(50) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `kondisi` enum('Baik','Kurang Baik') NOT NULL,
  `id_tingkat` int(5) NOT NULL,
  `jumlah` varchar(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarana`
--

INSERT INTO `sarana` (`id_sarana`, `id_jenis_sarana`, `nama_sarana`, `keperluan`, `kondisi`, `id_tingkat`, `jumlah`, `foto`, `ket`) VALUES
(1, 1, 'dsgsd', 'daktau', 'Baik', 3, '1', '3cc8333d3bbaa69cd2ab63a7e6e7a61e.jpg', 'sfasfew'),
(3, 1, 'Laptop', 'Ngetik', 'Kurang Baik', 2, '2', '9e0f3ad386bb9d783e398332f32e2d4b.jpg', 'gfh');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(5) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenkel` enum('Laki-Laki','Perempuan') NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ortu` char(50) NOT NULL,
  `id_tingkat` int(5) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(25) NOT NULL,
  `id_asal_tingkat_sekolah` int(5) NOT NULL,
  `nama_asal_sekolah` varchar(50) NOT NULL,
  `status_ekonomi` enum('Mampu','Kurang Mampu') NOT NULL,
  `id_tajaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama_siswa`, `jenkel`, `tmpt_lahir`, `tgl_lahir`, `nama_ortu`, `id_tingkat`, `kelas`, `alamat`, `kota`, `id_asal_tingkat_sekolah`, `nama_asal_sekolah`, `status_ekonomi`, `id_tajaran`) VALUES
(1, 'Meysa Riyanti', 'Perempuan', 'Palembang', '2014-05-07', 'Axel', 3, 'I', 'Jl.  KH.  Azhari Lr. sukalillah no 562', 'Palembang', 4, 'TK AISYIYAH 02 PALEMBANG', 'Mampu', 2),
(2, 'Herdi', 'Laki-Laki', 'Palembang', '2013-04-06', 'Boby Apriadi', 3, 'I', 'Jl.  KH.  Azhari Lr. perbatasan', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(3, 'Karin Apriliani', 'Perempuan', 'Palembang', '2014-04-04', 'Donny Dozen', 3, 'I', 'Jl.  KH.  Azhari  ni 532, RT 10', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(4, 'Citra Yarika Azhara', 'Perempuan', 'Palembang', '2014-04-20', 'Dufan', 3, 'I', 'Jl.  A Yani Lr. a Rohim RT 001', 'Palembang', 9, 'RA Nasyril Islam', 'Kurang Mampu', 2),
(5, 'Safira', 'Perempuan', 'Palembang', '2014-06-11', 'Frendy Antonius', 3, 'I', 'Jl.  kopral Paiman Lr. bidiman RT 08 Kel baguskuning', 'Palembang', 5, '-', 'Mampu', 2),
(6, 'Anggita Putti', 'Perempuan', 'Palembang', '2014-10-19', 'Hansen', 3, 'I', 'Jl.  KH.  Azhari Lr. Pulo RT 017 no 204', 'Palembang', 5, '-', 'Mampu', 2),
(7, 'Syahril Zian Setiawan', 'Laki-Laki', 'Palembang', '2014-04-10', 'Henry Malianto', 3, 'I', 'Jl.   KH.  Azhari Lr. pulo', 'Palembang', 4, 'TK BINAWATI', 'Mampu', 2),
(8, 'Gilang Ramadhan', 'Laki-Laki', 'Palembang', '2013-07-05', 'Julius', 3, 'I', 'Jl.  KH.  Azhari Lr. Pratumusa', 'Palembang', 4, 'TK PATRA MANDIRI PALEMBANG', 'Mampu', 2),
(9, 'Rizky Pratama Wibowo', 'Laki-Laki', 'Palembang', '2014-02-22', 'Kevin Permana', 3, 'I', 'Jl.  KH.  Azhari Lr. keluarga 2', 'Palembang', 4, 'TK AISYIYAH 02 PALEMBANG', 'Mampu', 2),
(10, 'M. Nizam', 'Laki-Laki', 'Palembang', '2014-02-11', 'Michael Wijaya', 3, 'I', 'Jl.  KH.  Azhari  Lr. taman bacaan no 329', 'Palembang', 4, 'TK AISYIYAH 02 PALEMBANG', 'Mampu', 2),
(11, 'M. Himam', 'Laki-Laki', 'Palembang', '2014-09-30', 'Pangeran Yoel H.Simorangkir', 3, 'I', 'Jl. KH.  Azhari, Lr. merdeka', 'Palembang', 4, 'TK AISYIYAH 02 PALEMBANG', 'Mampu', 2),
(12, 'Sakti Ramadhan', 'Laki-Laki', 'Palembang', '2014-07-22', 'Richi Amricson', 3, 'I', 'Jl.  A Yani Lr. a Rohim RT 001', 'Palembang', 5, '-', 'Mampu', 2),
(13, 'M Dapis  Septriansyah', 'Laki-Laki', 'Palembang', '2014-09-18', 'Ruyandi', 3, 'I', 'Jl.  KH.  Azhari lr amal RT 09', 'Palembang', 5, '-', 'Kurang Mampu', 2),
(14, 'Hauriesa Akmal', 'Perempuan', 'Palembang', '2014-08-17', 'Shen Kuang', 3, 'I', 'Jl.  KH.  Azhari, Lr panglong Jakpat RT 19', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(15, 'Azizah Putri Ramadhini', 'Perempuan', 'Palembang', '2014-07-26', 'Steven', 3, 'I', 'Jl.  KH.  Azhari Lr. Nurul Huda RT 09', 'Palembang', 4, 'TK BINAWATI', 'Mampu', 2),
(16, 'Mika Nindira', 'Perempuan', 'Palembang', '2013-02-14', 'Yulianto', 3, 'I', 'Lr. agung 1, no 307', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(17, 'Raziq Meizery', 'Laki-Laki', 'Palembang', '2014-05-18', 'Andreas Trimurni', 3, 'I', 'Jl.  KH.  Azhari Lr. Pratumusa no 537', 'Palembang', 4, 'TK PATRA MANDIRI PALEMBANG', 'Mampu', 2),
(18, 'M.Nizam', 'Laki-Laki', 'Palembang', '2013-05-17', 'Chen Andi', 3, 'I', 'Jl.  KH.  Azhari Lr. perbatasan rt05', 'Palembang', 4, 'TK ANANDA', 'Mampu', 2),
(19, 'Friska Anggi Huljannah', 'Perempuan', 'Palembang', '2013-11-14', 'Christian', 3, 'I', 'Jl.  KH.  Azhari . RT 14 tangga takat', 'Palembang', 5, '-', 'Kurang Mampu', 2),
(20, 'M. Aji Akbar', 'Laki-Laki', 'Palembang', '2014-10-05', 'Daniel', 3, 'I', 'Jl. KH.  Azhari Lr. merdeka RT 13', 'Palembang', 4, 'RA Nasyril Islam', 'Mampu', 2),
(21, 'Muhammad Nurlin Purnama', 'Laki-Laki', 'Palembang', '2014-03-02', 'Erickson Nguilanda', 3, 'I', 'Jl.  A Yani Lr. a rohim', 'Palembang', 5, '-', 'Mampu', 2),
(22, 'Fitri amelia', 'Perempuan', 'Palembang', '2012-07-18', 'Erwin Fernando', 3, 'II', 'Lr. taman bacaan', 'Palembang', 4, 'TK Puri', 'Mampu', 2),
(23, 'Dwi Haryati', 'Perempuan', 'Palembang', '2013-12-12', 'Harjius', 3, 'II', 'Jl. KH. Azhari Lr. Merdeka', 'Palembang', 4, 'TK ANANDA', 'Mampu', 2),
(24, 'Kiswa Al Arasy', 'Laki-Laki', 'Palembang', '2013-03-25', 'Julius Oscar', 3, 'II', 'Jl. Jaya 7 Komplek Green Plaju Blok 6.7', 'Palembang', 5, '-', 'Mampu', 2),
(25, 'M.Rayhan Al-Farizi', 'Laki-Laki', 'Palembang', '2013-05-08', 'Kevin Fam', 3, 'II', 'Jl. Di.Penjaitan Lr. Nusa Eka No.1668', 'Palembang', 5, '-', 'Mampu', 2),
(26, 'Muhammad Bagas Ardila', 'Laki-Laki', 'Palembang', '2014-02-24', 'Leonardo', 3, 'II', 'Jl. KH. Azhari Lr. taman Bacaan No.328', 'Palembang', 4, 'TK PATRA MANDIRI PALEMBANG', 'Mampu', 2),
(27, 'Muhammad Noven', 'Laki-Laki', 'Palembang', '2013-11-26', 'Michael Wong', 3, 'II', 'Jl. A.Yani Lr. Arohim', 'Palembang', 5, '-', 'Mampu', 2),
(28, 'Noval Al-Muharh', '', 'Palembang', '2013-11-14', 'Mico  Wijaya', 3, 'II', 'Jl. KH. Azhari Lr. Nurul Huda', 'Palembang', 5, '-', 'Mampu', 2),
(29, 'RM.Bramantio Mathatma Prasetya', 'Laki-Laki', 'Palembang', '2013-09-10', 'Oktavianus', 3, 'II', 'Jl. KH. Azhari Lr. Nurul Huda', 'Palembang', 4, 'TK AISYIYAH 02 PALEMBANG', 'Mampu', 2),
(30, 'Siti Adiba', 'Perempuan', 'Palembang', '2013-10-12', 'Reynold Andika', 3, 'II', 'Jl. KH. Azhari Lr. Sentosa', 'Palembang', 5, '-', 'Mampu', 2),
(31, 'Uswatum Hasanah', 'Perempuan', 'Palembang', '2013-09-09', 'Ricky Chang', 3, 'II', 'Jl. Di. Penjaitan Lr.Gaya Baru', 'Palembang', 5, '-', 'Mampu', 2),
(32, 'Yogi Tri Abbas', 'Perempuan', 'Palembang', '2013-09-10', 'Steven Sutanto', 3, 'II', 'Jl. KH. Azhari Lr. Tenan Menanti', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(33, 'Ahmad syairillah abibaba', 'Laki-Laki', 'Palembang', '2013-12-12', 'Tjhai Po Phen', 3, 'II', 'Lr. taman bacaan', 'Palembang', 4, 'TK PATRA MANDIRI PALEMBANG', 'Mampu', 2),
(34, 'aji saputra', 'Laki-Laki', 'Palembang', '2013-10-15', 'Vallian Jiuvan', 3, 'II', 'Lr. taman bacaan', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(35, 'Nadhira Kania azalea', 'Perempuan', 'Palembang', '2013-05-20', 'Agregorius Agung', 3, 'II', 'Lr. melati', 'Palembang', 5, '-', 'Mampu', 2),
(36, 'Muhammad raehan', 'Laki-Laki', 'Palembang', '2013-11-07', 'Alfon', 3, 'II', 'Lr. tenang menati', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(37, 'gina febtriana sari', 'Perempuan', 'Palembang', '2012-02-21', 'Aries', 3, 'II', 'tangga takat laut', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(38, 'Dendi Pranata', 'Laki-Laki', 'Palembang', '2011-04-15', 'Belva Christopher', 3, 'II', 'Jl. Simpangf Tangga Takat', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(39, 'M.RIZKI', 'Laki-Laki', 'Palembang', '2008-06-11', 'Chandra Gunawan', 3, 'III', 'Jl. KH. Azhari Lr. Perbatasan 16 Ulu Tangga Takat', 'Palembang', 9, 'RA Nasyril Islam', 'Kurang Mampu', 2),
(40, 'Muhammad Farel Saputera', 'Laki-Laki', 'Palembang', '2012-02-17', 'Cung Lim Kong', 3, 'III', 'Lr. Sukalillah', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(41, 'Muhammad Haidir', 'Laki-Laki', 'Palembang', '2010-04-23', 'Deddy', 3, 'III', 'Jl. KH. Azhari. Lr. Sejahtera RT.30.', 'Palembang', 5, '-', 'Mampu', 2),
(42, 'Muhammad Rangga Saputera', 'Laki-Laki', 'Palembang', '2011-09-19', 'Henky Tornado', 3, 'III', 'Lr. Tangga Takat Laut', 'Palembang', 5, '-', 'Mampu', 2),
(43, 'Muhammad Rizky', 'Laki-Laki', 'Palembang', '2011-12-27', 'Jandri', 3, 'III', 'Lr.Taman Bacaan', 'Palembang', 5, '-', 'Mampu', 2),
(44, 'Ridho', 'Laki-Laki', 'Palembang', '2012-05-06', 'Kevin', 3, 'III', 'Lr. Tenang Menanti', 'Palembang', 4, 'TK Mini', 'Mampu', 2),
(45, 'Devina Akmal', 'Perempuan', 'Palembang', '2013-02-22', 'Kimsen Juliadi', 3, 'III', 'Jl. KH. Azhari Lr. Panglong Jakpar', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(46, 'Dewi Bintari', 'Perempuan', 'Palembang', '2012-08-11', 'Martinus Tupe', 3, 'III', 'Jl. Arohim Tangga Takat 16 Ulu Palembang', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(47, 'Dora', 'Perempuan', 'Palembang', '2009-12-04', 'Maxie Liunardi', 3, 'III', 'Jl. KH. Azhari Lr. Amilin Nop.973', 'Palembang', 9, 'RA Nasyril Islam', 'Kurang Mampu', 2),
(48, 'Ersayuki', 'Laki-Laki', 'Palembang', '2013-01-23', 'Ryan Reynaldi', 3, 'III', 'Jl. Rukun.RT.33 14 Ulu', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(49, 'Fihalika Ryisyah', 'Perempuan', 'Palembang', '2012-05-26', 'Steven', 3, 'III', 'Jl. KH. Azhari Lr. Perbatasan RT.05 Tangga Takat', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(50, 'Fiqih Anugrah Pratama', 'Laki-Laki', 'SERI KEMBANG', '2012-01-10', 'Vincent', 3, 'III', 'Jl. KH. Azhari Lr. Pratumusa', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(51, 'M.Alamsyah', 'Laki-Laki', 'Palembang', '2012-10-22', 'Wendy', 3, 'III', 'Jl. KH. Azhari Lr. Perbatasan RT.05 Tangga Takat', 'Palembang', 5, '-', 'Mampu', 2),
(52, 'M.Alif', 'Laki-Laki', 'Palembang', '2009-04-21', 'Agung William', 3, 'III', 'Jl. KH. Azhari. Lr. Sejahtera RT.30.', 'Palembang', 5, '-', 'Mampu', 2),
(53, 'M.Alif', 'Laki-Laki', 'Palembang', '2012-10-07', 'Agus Yuveli', 3, 'III', 'Jl. KH. Azhari Lr. taman Bacaan', 'Palembang', 4, 'TK Mini', 'Mampu', 2),
(54, 'M.Andika Pratama', 'Laki-Laki', 'Palembang', '2011-01-12', 'Albert Leonardo', 3, 'III', 'Jl. KH. Azhari Lr. Perbatasan RT.05 Tangga Takat', 'Palembang', 4, 'TK IT  Nadsya', 'Mampu', 2),
(55, 'M.Ridho Rizqullah', 'Laki-Laki', 'Palembang', '2012-05-25', 'Andi Pheng', 3, 'III', 'Jl. KH. Azhari Lr. H.Halim No.05. Tangga Takat', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(56, 'M.Rizky Apriansyah', 'Laki-Laki', 'Palembang', '2009-02-23', 'Chandra Bun Jaya', 3, 'III', 'Lr. Sehati 16 Ulu', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(57, 'Naila Novianti', 'Perempuan', 'Palembang', '2009-11-22', 'Christian Pratama', 3, 'III', 'Jl. KH. Azhari Lr. Abadi RT.18', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(58, 'Nur Sakinah Azharah', 'Perempuan', 'Palembang', '2013-03-08', 'Colly Thomas', 3, 'III', 'Jl. KH. Azhari Lr. Rawo-Rawo', 'Palembang', 5, '-', 'Mampu', 2),
(59, 'Okta Rinanda', 'Perempuan', 'Palembang', '2006-12-24', 'Effendy Leonardo', 3, 'III', 'Jl. A.Yani Lr. Arohim 16 Ulu', 'Palembang', 5, '-', 'Kurang Mampu', 2),
(60, 'Rizki Ramadhan', 'Laki-Laki', 'Palembang', '2011-08-09', 'Ervin Chandra', 3, 'III', 'Jl. Rukun.RT.33 14 Ulu', 'Palembang', 4, 'TK Puri', 'Mampu', 2),
(61, 'Salsabila Oktariani', 'Perempuan', 'Palembang', '2012-10-10', 'Harco Nugraha', 3, 'III', 'Jl. KH. Azhari Lr. Abadi RT.18', 'Palembang', 4, 'TK Mini', 'Mampu', 2),
(62, 'Ulfa Azzahra', 'Perempuan', 'Palembang', '2013-02-13', 'Kevin Tanuputra', 3, 'III', 'Jl. KH. Azhari Lr. Bersama', 'Palembang', 5, '-', 'Mampu', 2),
(63, 'Afrizal Faiz Wansyah', 'Laki-Laki', 'Jawa Barat', '2013-04-28', 'Luke Rahadiyan', 3, 'III', 'Lr.Abadi Tangga Takat', 'Palembang', 5, '-', 'Mampu', 2),
(64, 'Ahmad Al-Habbi', 'Laki-Laki', 'Palembang', '2012-06-07', 'Pangginaldo Xaverius', 3, 'III', 'Jl. Di.Panjaitan Lr.Keramat RT.36.N0.69', 'Palembang', 5, '-', 'Mampu', 2),
(65, 'Ahmad Fadel', 'Laki-Laki', 'Palembang', '2013-05-05', 'Rayner Juniardo', 3, 'III', 'Jl. KH. Azhari Lr. Pratumusa', 'Palembang', 5, '-', 'Mampu', 2),
(66, 'Ahmad Syairillah Abi Bana Alwi', 'Laki-Laki', 'Palembang', '2013-12-12', 'Sendy Steven Phiong', 3, 'III', 'Jl. KH. Azhari Lr. taman Bacaan No.328', 'Palembang', 4, 'TK Mini', 'Mampu', 2),
(67, 'Aisyahrani Erliana Putri', 'Perempuan', 'Palembang', '2012-10-29', 'Trio Junio', 3, 'III', 'Jl. KH. Azhari Lr. taman Bacaan', 'Palembang', 4, 'TK Mini', 'Kurang Mampu', 2),
(68, 'Aska Sangputra', 'Laki-Laki', 'Palembang', '2012-06-01', 'William', 3, 'III', 'Jl. KH. Azhari Lr. Sukalillah.Kel.Tangga Takat', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(69, 'Elta Dwi Ningsih', 'Perempuan', 'Palembang', '2010-04-30', 'Yulian Nugraha Dewata', 3, 'IV', 'Lr. Taman Bacaan', 'Palembang', 4, 'TK Kartika XI-12', 'Mampu', 2),
(70, 'Ferdiansyah', 'Laki-Laki', 'Palembang', '2010-06-21', 'Andi Sugiarto', 3, 'IV', 'Jl. KH. Azhari. Lr. Tenang Menanti RT.09.No.120', 'Palembang', 4, 'TK radatul jannah', 'Mampu', 2),
(71, 'Hasya Dwi Rizky', 'Perempuan', 'Palembang', '2010-04-30', 'Billy', 3, 'IV', 'Lr. Tenang Menanti', 'Palembang', 4, 'TK / TP Al - Quran Unit 426 Husnul Khotimah', 'Mampu', 2),
(72, 'Keysa Azura Gaini', 'Perempuan', 'Palembang', '2011-05-21', 'Chandra Wijaya', 3, 'IV', 'Lr. Tenang Menanti', 'Palembang', 4, 'Tk.Mis Jaya', 'Mampu', 2),
(73, 'Kurnia Ayu Rahma Wijaya', 'Perempuan', 'Palembang', '2011-06-23', 'Elmer', 3, 'IV', 'Lr. Tridinanti', 'Palembang', 5, '-', 'Mampu', 2),
(74, 'Muhammad Arino Saputera', 'Laki-Laki', 'Palembang', '2011-12-22', 'Erwin Fu', 3, 'IV', 'Lr. Rukun 2', 'Palembang', 4, 'TK IT Al Khoir Palembani', 'Mampu', 2),
(75, 'Muhammad Arman Romadhon', 'Laki-Laki', 'Palembang', '2011-08-28', 'Erwin Paulus', 3, 'IV', 'Lr. Bersama', 'Palembang', 5, '-', 'Mampu', 2),
(76, 'Muhammad Farzhan Karwinata', 'Laki-Laki', 'Palembang', '2011-10-15', 'Fen fen', 3, 'IV', 'Lr. Tenang Menanti', 'Palembang', 5, '-', 'Mampu', 2),
(77, 'Muhammad Hadi Irawan', 'Laki-Laki', 'Palembang', '2009-12-05', 'Ferdy', 3, 'IV', 'Lr. Perbatasan', 'Palembang', 4, 'Tk Chika Smart', 'Mampu', 2),
(78, 'Muhammad Rizki Aditya', 'Laki-Laki', 'Palembang', '2012-12-20', 'Joseph', 3, 'IV', 'Lr. Abadi', 'Palembang', 4, 'TK Kartika XI-12', 'Mampu', 2),
(79, 'Muhammad Valentery', 'Laki-Laki', 'Palembang', '2011-02-16', 'Justinus', 3, 'IV', 'Lr. Semeru 2', 'Palembang', 4, 'TK IT Al Khoir Palembani', 'Mampu', 2),
(80, 'Nurhija Ariyani', 'Perempuan', 'Palembang', '2011-10-29', 'Kevin Dugery', 3, 'IV', 'Jl. Telaga Swidak', 'Palembang', 4, 'TK IT  Nadsya', 'Mampu', 2),
(81, 'Raditya Akbar', 'Laki-Laki', 'Palembang', '2011-06-26', 'Kevin Samuel Prasetyo', 3, 'IV', 'Jl. Ayani Lr. Arohim', 'Palembang', 4, 'TK Indra Plaju', 'Kurang Mampu', 2),
(82, 'Ramzi Ubaydillah', 'Laki-Laki', 'Palembang', '2011-11-21', 'Sandy Frederickson', 3, 'IV', 'Lr. Mastafa', 'Palembang', 5, '-', 'Mampu', 2),
(83, 'Reni', 'Perempuan', 'Palembang', '2010-12-16', 'Surya Dinata Jap', 3, 'IV', 'Lr. Perbatasan', 'Palembang', 5, '-', 'Mampu', 2),
(84, 'Samuel Ibrahim', 'Laki-Laki', 'Palembang', '2011-10-19', 'Vincentius Florensio', 3, 'IV', 'Lr. Setia 1', 'Palembang', 4, 'TK IT  Nadsya', 'Mampu', 2),
(85, 'Siti Meidina Arief', 'Perempuan', 'Palembang', '2012-05-03', 'Willyam', 3, 'IV', 'Lr. Tangga Takat Laut', 'Palembang', 5, '-', 'Mampu', 2),
(86, 'Sri Herlnila', 'Perempuan', 'Palembang', '2008-05-12', 'David Antonius', 3, 'IV', 'Lr. Taman Bacaan', 'Palembang', 5, '-', 'Mampu', 2),
(87, 'Sukanta', 'Laki-Laki', 'Palembang', '2012-03-17', 'David Raharja', 3, 'IV', 'Lr. Bersama', 'Palembang', 4, 'Tk Chika Smart', 'Mampu', 2),
(88, 'Yuliana', 'Perempuan', 'Palembang', '2012-01-06', 'Feby Agung Hartawan', 3, 'IV', 'Lr. Taman Bacaan', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(89, 'Septi haswari', 'Perempuan', 'Palembang', '2010-09-05', 'Glenn Yohanes', 3, 'IV', 'Jl.  telagaswidak', 'Palembang', 4, 'TK Indra Plaju', 'Mampu', 2),
(90, 'Ayu Ditha Satria', 'Perempuan', 'Palembang', '2012-09-12', 'Hansen Caselie', 3, 'IV', 'Lr. Tangga Takat Laut', 'Palembang', 5, '-', 'Mampu', 2),
(91, 'Chelsy Olivia', 'Perempuan', 'Palembang', '2010-01-23', 'Henson Darmawan', 3, 'IV', 'Lr. Taman Bacaan', 'Palembang', 5, '-', 'Mampu', 2),
(92, 'Ria', 'Perempuan', 'Palembang', '2011-07-20', 'Jordy Fernando', 3, 'V', 'Lr. perbatasan', 'Palembang', 5, '-', 'Mampu', 2),
(93, 'Dinah Efvrinah', 'Perempuan', 'Palembang', '2009-09-12', 'Julianto', 3, 'V', 'Jl. A.Yani No.40 B.RT.22 RW.007. 16 Ulu', 'Palembang', 5, '-', 'Mampu', 2),
(94, 'King Abdul Aziz', 'Laki-Laki', 'Palembang', '2010-04-24', 'Kelvin Yo', 3, 'V', 'Jl. KH. Azhari Lr. Pratumusa', 'Palembang', 4, 'TK Islam Sarsabila', 'Mampu', 2),
(95, 'Meysa Safana', 'Perempuan', 'Palembang', '2011-02-01', 'Kevin', 3, 'V', 'Jl. Kopral Paiman Lr. Budiman', 'Palembang', 5, '-', 'Mampu', 2),
(96, 'Miftah Nazwa', 'Perempuan', 'Palembang', '2011-03-10', 'Lubby Gennady', 3, 'V', 'Jl. KH. Azhari Lr. Merdeka', 'Palembang', 5, '-', 'Mampu', 2),
(97, 'Nur Ramadhani', 'Perempuan', 'Palembang', '2010-08-14', 'Riccko', 3, 'V', 'Jl. KH. Azhari Lr. Perbatasan', 'Palembang', 4, 'TK Islam Sarsabila', 'Mampu', 2),
(98, 'Roy Kendy', 'Laki-Laki', 'Palembang', '2010-02-06', 'Richie Darmawan', 3, 'V', 'Jl. A.Yani Lr. Arohim', 'Palembang', 4, 'TK Islam Sarsabila', 'Mampu', 2),
(99, 'Tiara Jonita', 'Perempuan', 'Palembang', '2011-04-11', 'Stephen Sanjaya', 3, 'V', 'Lr. Rukun 7', 'Palembang', 4, 'TK Islam Sarsabila', 'Mampu', 2),
(100, 'm. Zacky anzurah', 'Laki-Laki', 'Musi Banyuasin', '2010-08-06', 'Thian Hanson', 3, 'V', 'Jl.  KH.  Azhari Lr. Pratumusa', 'Palembang', 4, 'TK Islam Sarsabila', 'Mampu', 2),
(101, 'Nurmashun', 'Perempuan', 'Palembang', '2010-08-31', 'Toni', 3, 'V', 'Jl.  KH.  Azhari Lr. sukalillah', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(102, 'm mukromin', 'Laki-Laki', 'Palembang', '2010-08-31', 'Dicky Antoni', 3, 'V', 'Jl.  KH.  Azhari Lr. sukalillah', 'Palembang', 5, '-', 'Kurang Mampu', 2),
(103, 'Dedi irawan', 'Laki-Laki', 'Palembang', '2010-07-05', 'Gideon Anugrah', 3, 'V', 'Tangga Takat Laut', 'Palembang', 5, '-', 'Mampu', 2),
(104, 'Robin wiliam', 'Laki-Laki', 'Palembang', '2010-05-02', 'Hendriks Gunawan', 3, 'V', 'Lr. Kramat', 'Palembang', 5, '-', 'Mampu', 2),
(105, 'm Rizki apriansyah', 'Laki-Laki', 'Palembang', '2009-02-23', 'Hengki', 3, 'V', 'Lr. Sehati', 'Palembang', 5, '-', 'Mampu', 2),
(106, 'Kasih Jelita', 'Perempuan', 'Palembang', '2009-11-21', 'John Jovial', 3, 'V', 'Taman Bacaan', 'Palembang', 5, '-', 'Mampu', 2),
(107, 'April hidayat', 'Laki-Laki', 'Sungai Kong', '2008-04-26', 'Joniarto', 3, 'V', 'Lr. Hamidin', 'Palembang', 5, '-', 'Mampu', 2),
(108, 'MUSLINA', 'Perempuan', 'Palembang', '2007-09-28', 'Kevin', 3, 'VI', 'Lr. BASYAIB, RT.025/RW.002', 'Palembang', 4, '-', 'Mampu', 2),
(109, 'Yunatia', 'Perempuan', 'Palembang', '2007-02-08', 'Kim Liung Tagamas', 3, 'VI', 'Plaju darat', 'Palembang', 9, 'RA Nasyril Islam', 'Kurang Mampu', 2),
(110, 'DEWI ANJANI', 'Perempuan', 'Palembang', '2009-01-12', 'Michael Liung', 3, 'VI', 'Jl. KH. Azhari Lr. Abadi RT.18.RW.06. Tangga Takat', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(111, 'Farid Al Hapsi', 'Laki-Laki', 'Palembang', '2009-08-21', 'Nicolas Fauzi', 3, 'VI', 'Lr. Taman Bacaan No.328.RT.035/RW.003', 'Palembang', 4, 'TK Islam Sarsabila', 'Mampu', 2),
(112, 'Ify Agustin Lidya Putri', 'Perempuan', 'Palembang', '2008-08-01', 'Niki', 3, 'VI', 'Jl. KH. Azhari. No.766.RT.018/RW.006', 'Palembang', 5, '-', 'Mampu', 2),
(113, 'Irfansyah', 'Laki-Laki', 'Palembang', '2008-12-01', 'Reynold Andika', 3, 'VI', 'Lr. Perbatasan. RT.005/RW.004', 'Palembang', 5, '-', 'Mampu', 2),
(114, 'KH. arisma Nurhayati', 'Perempuan', 'Palembang', '2009-03-05', 'Rivangga Kristiadi', 3, 'VI', 'Jl. KH. Azhari Lr. Abadi', 'Palembang', 5, '-', 'Mampu', 2),
(115, 'M.Fahri', 'Laki-Laki', 'Palembang', '2010-07-21', 'Algin Dwi Raffi Awan', 3, 'VI', 'Lr. Perbatasan', 'Palembang', 5, '-', 'Kurang Mampu', 2),
(116, 'M.Fardan Sahreza', 'Laki-Laki', 'Palembang', '2010-05-15', 'Anggie  Rivaldy', 3, 'VI', 'Jl. KH. Azhari Lr. Merdeka No.63.RT.027.RW.05', 'Palembang', 5, '-', 'Mampu', 2),
(117, 'M.Raihan', 'Laki-Laki', 'Palembang', '2009-06-25', 'Billy Kalo', 3, 'VI', 'Tangga Takat', 'Palembang', 5, '-', 'Mampu', 2),
(118, 'M.Rehan', 'Laki-Laki', 'Palembang', '2009-06-26', 'Darwin Raharja', 3, 'VI', 'Jl. Tangga Takat Laut.No.796', 'Palembang', 5, '-', 'Mampu', 2),
(119, 'M.Riski Riduan', 'Perempuan', 'Palembang', '2011-06-11', 'Devin Angelius', 3, 'VI', 'Lr. Perbatasan', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(120, 'Muhammad Akbar', 'Laki-Laki', 'Palembang', '2009-09-08', 'Erwin  Tan', 3, 'VI', 'Lr. Perbatasan No.237.RT.005/RW.004', 'Palembang', 9, 'RA Nasyril Islam', 'Kurang Mampu', 2),
(121, 'Muhammad Rafi', 'Laki-Laki', 'Palembang', '2010-03-02', 'Evin Wijaya', 3, 'VI', 'Jl. KH. Azhari Lr. Merdeka', 'Palembang', 4, 'TK YP Indra', 'Mampu', 2),
(122, 'Putri Amelia', 'Perempuan', 'Palembang', '2010-05-30', 'Frandy Paulus', 3, 'VI', 'Lr. Sadar Jaya.RT.013/RW.005 Tangga Takat', 'Palembang', 5, '-', 'Mampu', 2),
(123, 'Rahmad Wahyu Romadhan', 'Laki-Laki', 'Palembang', '2010-08-18', 'Hendrata  Salim', 3, 'VI', 'Jl. KH. Azhari Lr. Pratumusa No.11.RT.026/RW.004', 'Palembang', 5, '-', 'Mampu', 2),
(124, 'Rahmah', 'Perempuan', 'Palembang', '2009-01-12', 'Justin Fiolim', 3, 'VI', 'Jl. KH. Azhari Lr. Pratumusa No.11.RT.026/RW.004', 'Palembang', 5, '-', 'Mampu', 2),
(125, 'Riski', 'Laki-Laki', 'Palembang', '2007-04-26', 'Michael Asang', 3, 'VI', 'Jl. KH. Azhari. No. 532.RT.010/RW.004', 'Palembang', 4, 'TK Binawati', 'Mampu', 2),
(126, 'Shellia', 'Perempuan', 'Palembang', '2010-04-06', 'Miki Franlie', 3, 'VI', 'Jl. A.Yani Lr. A.Rohim', 'Palembang', 5, '-', 'Mampu', 2),
(127, 'Siren Anggreini', 'Perempuan', 'Palembang', '2009-02-08', 'Richardson', 3, 'VI', 'Plaju darat', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(128, 'Suastri', 'Laki-Laki', 'Palembang', '2009-09-02', 'Ricky Raven', 3, 'VI', 'Jl. KH. Azhari Lr. Merdeka No.63.RT.027.RW.05', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(129, 'Syirin Azahra', 'Perempuan', 'Palembang', '2006-12-30', 'Rio Renaldy', 3, 'VI', 'Jl. KH. Azhari Lr. Basyaib.RT.025/RW.002', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(130, 'Yukri Muliata', 'Laki-Laki', 'Palembang', '2010-03-16', 'Steven Wijaya', 3, 'VI', 'Jl. KH. Azhari Lr. Pratumusa No.11.RT.026/RW.004', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(131, 'ADELLA MUTIA', 'Perempuan', 'Palembang', '2004-08-28', 'Victor', 3, 'VI', 'Jl. KH. Azhari Lr.Tangga Takat', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(132, 'Afizah Dwi Anggraini', 'Perempuan', 'Palembang', '2010-12-16', 'Willy Sutanto', 3, 'VI', 'Jl. KH. Azhari Lr. Amal Setia RT.012/RW.003', 'Palembang', 9, 'RA Nasyril Islam', 'Mampu', 2),
(133, 'Andini Aurellya', 'Perempuan', 'Palembang', '2010-04-19', 'Yanto', 3, 'VI', 'Lr. Melati.RT.11/RW.005', 'Palembang', 5, '-', 'Kurang Mampu', 2),
(134, 'Abdi Kesuma', 'Laki-Laki', 'Palembang', '2004-10-31', 'Mulyani', 1, 'XII', 'Lrg. Arim Rt. 001 Rw. 001', 'Palembang', 5, 'SMP NU Palembang', 'Mampu', 2),
(135, 'Ahmad Julianto', 'Laki-Laki', 'Palembang', '2002-07-12', 'Abdul Manan', 1, 'XII', 'Lrg. Sadar Jaya Rt. 13 Rw. 05', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(136, 'Ariah Badarudin', 'Laki-Laki', 'Palembang', '2003-10-24', 'Sawalludin', 1, 'XII', 'Lrg. Keluarga Rt. 33 Rw. 03', 'Palembang', 5, 'SMP NU Palembang', 'Kurang Mampu', 2),
(137, 'Bela Sapira', 'Perempuan', 'Suka Cinta', '2004-09-08', 'Robinson', 1, 'XII', 'Dusun II Rt. 04 Kel. Suka Jadi', 'Ogan Ilir', 5, 'SMP Negeri 2 Muara Kuang', 'Mampu', 2),
(138, 'Dela Oktariani', 'Perempuan', 'Palembang', '2003-10-25', 'Amir Hamzah', 1, 'XII', 'Lrg. Sentosa Jaya RT/RW 018/007', 'Palembang', 5, 'SMP Sriguna', 'Mampu', 2),
(139, 'Dwi Lestari', 'Perempuan', 'Palembang', '2004-04-02', 'Ladianto', 1, 'XII', 'Jln. DI. Panjaitan Lrg. Bakti', 'Palembang', 5, 'SMP Negeri 30 Palembang', 'Mampu', 2),
(140, 'Elda Asnilawati', 'Perempuan', 'Suka Cinta', '2004-07-03', 'Andre Alen', 1, 'XII', 'Suka Cinta', 'Ogan Ilir', 5, 'SMP Negeri 2 Muara Kuang', 'Mampu', 2),
(141, 'M. Danil Chandra Reza', 'Laki-Laki', 'Palembang', '2003-12-24', 'Isnadi', 1, 'XII', 'Jln. Telaga Swidak', 'Palembang', 2, 'MTs Negeri 1 Palembang', 'Mampu', 2),
(142, 'M. Junaidi', 'Laki-Laki', 'palembang', '2002-06-22', 'Nanang', 1, 'XII', 'Lrg. Keluarga Rt. 03 Rw. 02', 'Palembang', 5, 'SMP NU Palembang', 'Kurang Mampu', 2),
(143, 'R. Arfi Putra Akmal', 'Laki-Laki', 'Palembang', '2003-11-16', 'Haris Akmal', 1, 'XII', 'Lrg. Panglong Jakpar Lebuk Rt.19', 'Palembang', 5, 'SMP NU Palembang', 'Kurang Mampu', 2),
(144, 'Regi Prayoga', 'Laki-Laki', 'palembang', '2004-07-08', 'Firli', 1, 'XII', 'Lrg. Rawo-Rawo Rt. 26 Rw. 04', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(145, 'Relli Apri Hidayat', 'Laki-Laki', 'palembang', '2005-03-19', 'Apri Mandana', 1, 'XII', 'Lrg. Perbatasan No. 21 Rt. 05 Rw. 04', 'Palembang', 5, 'SMP Daarul Aitam', 'Mampu', 2),
(146, 'Sri Hariyati', 'Perempuan', 'Palembang', '2002-12-18', 'Wahab', 1, 'XII', 'Lrg. Sentosa Jaya RT/RW 016/007', 'Palembang', 5, 'SMP Azhariyah', 'Mampu', 2),
(147, 'Yanti  ', 'Perempuan', 'Palembang', '2002-09-16', 'Syarkowi', 1, 'XII', 'Lrg. Perbatasan No. 237 Rt.05 Rw.04 Kel. Tangga Takat', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(148, 'Ahmad Ridho Pratama', 'Laki-Laki', 'Palembang', '2004-09-26', 'Zulkainain', 1, 'XI', 'Lrg. Manggis Ujung No.49 RT.18 RW.04', 'Palembang', 2, 'PP Salafiyah Al Firdaus', 'Mampu', 2),
(149, 'Amrina Rosyada', 'Perempuan', 'Sungai Pasir', '1970-01-01', 'H Akhsan', 1, 'XI', 'Jln. Jend. Sudirman No. 1246 Rt.26 Rw.04 Kel.8 Ulu', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(150, 'Anisa', 'Perempuan', 'Palembang', '2001-02-03', 'Zainal Arifin', 1, 'XI', 'Lrg. Merdeka Kel. 14 Ulu', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(151, 'Dila Sari', 'Perempuan', 'Suka Cinta', '1970-01-01', 'Sarkati', 1, 'XI', 'Des.Suka Jadi Kel. Suka Jadi', 'Ogan Ilir', 5, 'SMP Negeri 2 Muara Kuang', 'Mampu', 2),
(152, 'Frengky Saputra', 'Laki-Laki', 'Bukit Batu', '2002-11-09', 'Fero', 1, 'XI', 'Dusun I Desa Bukit Baru', 'OKI', 2, 'PP Salafiyah Al Firdaus', 'Mampu', 2),
(153, 'Gery Anugrah', 'Laki-Laki', 'Jambi', '2005-04-18', 'Darius', 1, 'XI', 'Jalan Fakhrudin ', 'Prabumulih', 7, 'SMP Azhariyah', 'Kurang Mampu', 2),
(154, 'Hilda', 'Perempuan', 'Palembang', '1970-01-01', 'Hendra Lesmana (Wali)', 1, 'XI', 'Lrg. Pratu Musa Kel. 14 Ulu', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(155, 'Julaiha', 'Perempuan', 'Palembang', '2003-02-02', 'Jamaluddin', 1, 'XI', 'Lr. Keramat No. 49', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(156, 'M. Doni', 'Laki-Laki', 'Palembang', '2004-09-09', 'Jamad', 1, 'XI', 'Lrg. Sepakat Jaya No. 13 Rt. 15 Rw. 05 Kel. Tangga Takat', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(157, 'M. Fizan Riandi', 'Laki-Laki', 'Palembang', '2003-03-03', 'Darwinto', 1, 'XI', 'Lrg. Merdeka Rt.13 Rw.03 Kel. 14 Ulu', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(158, 'Muhammad Iqbal Saputra', 'Laki-Laki', 'Palembang', '2005-07-06', 'Umar Wijaya', 1, 'XI', 'Lrg. Pedatuan Darat Kel. 12 Ulu', 'Palembang', 7, 'SMP Negeri 7 Palembang', 'Mampu', 2),
(159, 'Marina Zulita', 'Perempuan', 'Palembang', '2002-05-18', 'Zulkainain', 1, 'XI', 'Lrg. Manggis Ujung Kel. Silaberanti ', 'Palembang', 2, 'PP Salafiyah Al Firdaus', 'Mampu', 2),
(160, 'Meilansi', 'Perempuan', 'Suka Cinta', '1970-01-01', 'Supardi', 1, 'XI', 'Des. Suka Jadi Rt.04 Kel. Suka Jadi ', 'Ogan Ilir', 7, 'SMP Negeri 2 Muara Kuang', 'Mampu', 2),
(161, 'Muhammad Aria', 'Laki-Laki', 'Palembang', '2005-06-07', 'Gusdiantoro', 1, 'XI', 'Lrg. Hamidin No. 222 Rt.04 Rw.02 Kel. Tangga Takat', 'Palembang', 7, 'SMP Daarul Aitam', 'Kurang Mampu', 2),
(162, 'Nico Juliansyah', 'Laki-Laki', 'Palembang', '2000-07-06', 'M. Rasyid (Alm)', 1, 'XI', 'Lrg. Sentosa Jaya RT/RW 029/007', 'Palembang', 2, 'PP Salafiyah Al Firdaus', 'Mampu', 2),
(163, 'Nini Septiani', 'Perempuan', 'Palembang', '2004-04-09', 'Sugianto', 1, 'XI', 'Lr. Taman Bacaan Rt. 35 Rw.003', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(164, 'Rapita Sari', 'Perempuan', 'Suka Cinta', '2005-06-04', 'Idris', 1, 'XI', 'Desa Rama Kasih', 'Ogan Ilir', 7, 'SMP Negeri 2 Muara Kuang', 'Mampu', 2),
(165, 'Ratna Yulita', 'Perempuan', 'Suka Cinta', '2005-04-08', 'Basarudin', 1, 'XI', 'Des. Ramah Kasih Kel. Ramah Kasih ', 'Ogan Ilir', 7, 'SMP Negeri 2 Muara Kuang', 'Mampu', 2),
(166, 'Shinta Devi', 'Perempuan', 'Palembang', '2004-06-14', 'Antoni', 1, 'XI', 'Jl. Kh. Azhari No. 27 Kel. 14 Ulu', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(167, 'Sri Haryani', 'Perempuan', 'Palembang', '2004-04-05', 'Wahab', 1, 'XI', 'Lrg. Sentosa Jaya RT/RW 016/007', 'Palembang', 7, 'SMP Alifah ', 'Mampu', 2),
(168, 'Syaharani', 'Perempuan', 'Palembang', '2004-10-09', 'Irwansyah', 1, 'XI', 'Lrg. Perbatasan Rt.05 Rw.01 Kel. Tangga Takat', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Kurang Mampu', 2),
(169, 'Vera Yunita', 'Perempuan', 'Suka Cinta', '2004-09-05', 'Sahidin (Alm)', 1, 'XI', 'Des. Suka Jadi Kel. Suka Jadi', 'Ogan Ilir', 7, 'SMP Negeri 2 Muara Kuang', 'Mampu', 2),
(170, 'Widodo', 'Laki-Laki', 'Nagasari', '2004-03-23', 'Tabain', 1, 'XI', 'Dusun I Nagasari Rt 01 Kel. Nagasari', 'Ogan Ilir', 7, 'SMP Negeri 3 Palembang', 'Mampu', 2),
(171, 'Albertho Vernando', 'Laki-Laki', 'Palembang', '2005-08-12', 'M. Rizal (Alm)', 1, 'X', 'Kel. Sako Rt.12 Rw. 09', 'Palembang', 7, 'SMP Negeri 53', 'Mampu', 2),
(172, 'Ayu Wandira', 'Perempuan', 'Palembang', '2006-07-29', 'M. Sopian', 1, 'X', 'Lrg. Pangi No. 1054 Kel. Tangga Takat', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(173, 'Dia Aprlia', 'Perempuan', 'Suka Cinta', '2005-04-14', 'Basumi (Alm)', 1, 'X', 'Ds. Suka Jadi', 'Ogan Ilir', 7, 'SMP Negeri 2 Muara Kuang', 'Mampu', 2),
(174, 'Fitriyani', 'Perempuan', 'Pagar Alam', '2004-06-21', 'Rusli', 1, 'X', 'Lrg. Perbatasan Kel. Tangga Takat', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(175, 'Indiani', 'Perempuan', 'Palembang', '2006-02-17', 'Thamrin Usman', 1, 'X', 'Lrg. Sentosa Jaya Kel. Tangga Takat', 'Palembang', 7, 'SMP Setia Darma Palembang', 'Kurang Mampu', 2),
(176, 'Karipita', 'Perempuan', 'Suka Cinta', '2005-04-21', 'Iskandar', 1, 'X', 'Ds. Suka Jadi', 'Ogan Ilir', 7, 'SMP Negeri 2 Muara Kuang', 'Mampu', 2),
(177, 'Mari Ulfa Sapitri', 'Perempuan', 'Palembang', '2005-11-05', 'Bismar (Alm)', 1, 'X', 'Lrg. Rukun II Kel. 14 Ulu', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(178, 'Nela Wati', 'Perempuan', 'Seri Kembang', '2006-12-13', 'Nasrowi', 1, 'X', 'Ds. Seri Kembang', 'Ogan Ilir', 7, 'SMP Negeri 1 Muara Kuang', 'Mampu', 2),
(179, 'Nyayu Nabila Zahirah', 'Perempuan', 'Palembang', '2006-07-23', 'Kgs. Abdurrohim', 1, 'X', 'Jl. DI. Panjaitan GG. Kaleng', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(180, 'Salsabilul Hasanah', 'Perempuan', 'Kuala Sungai Pasir', '2007-02-25', 'H. Akhsan', 1, 'X', 'Jl. Pondok gede', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(181, 'Sella Rama Dani', 'Perempuan', 'Seri Kembang', '2006-09-27', 'Hairul', 1, 'X', 'Ds. Seri Kembang', 'Ogan Ilir', 7, 'SMP Negeri 1 Muara Kuang', 'Mampu', 2),
(182, 'Syaleha', 'Perempuan', 'Palembang', '2006-07-31', 'Irwansyah', 1, 'X', 'Lrg. Perbatasan Kel. Tangga Takat', 'Palembang', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(183, 'Tika', 'Perempuan', 'Palembang', '2006-06-01', 'Taupik', 1, 'X', 'Lrg. Pedatuab Darat Kel. 12 Ulu', 'Palembang', 7, 'SMP Azhariyah', 'Mampu', 2),
(184, 'Ulan Sundari', 'Perempuan', 'Suka Cinta', '2005-11-10', 'Suparman', 1, 'X', 'Ds. Suka Jadi', 'Ogan Ilir', 2, 'MTs Nasyril Islamiyah', 'Mampu', 2),
(185, 'Ahmad Fahri', 'Laki-Laki', 'Palembang', '2009-07-25', 'Apriadi', 2, 'VII', ' Jl. KH.Azhari Lr. perbatasan RT. 005 RW. 004 no 38-265 Kec. SU.II ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(186, 'Alief', 'Laki-Laki', 'Palembang', '2009-05-16', 'Muhammad Husin', 2, 'VII', 'Jl. KH.Azhari Lr. Merdeka RT. 27  Rw 005 14 Ulu', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(187, 'A.Rizki Berlian', 'Laki-Laki', 'Palembang', '2009-02-15', 'Muhammad Sani', 2, 'VII', 'Jl. KH.Azhari Lr. Pedatuan Darat RT. 12 RW. 03 No. 400 Kec.  SU.II', 'Palembang', 6, 'SD MUHAMMADIYAH 03 PALEMBANG', 'Mampu', 2),
(188, 'Aisyah Rahmawati', 'Perempuan', 'Palembang', '2008-11-02', 'Irwansyah', 2, 'VII', 'Jl.  Tangga takat Lr. Maspala RT. 08 RW. 05 No. 36 Kec.  SU.II', 'Palembang', 6, 'SD Islam Terpadu Auladi Palembang', 'Kurang Mampu', 2),
(189, 'Christina', 'Perempuan', 'Palembang', '2008-04-20', 'Roni', 2, 'VII', 'Jl. KH.Azhari Lr. Perbatasan RT. 038 RW. 004 Kec.  SU.II', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(190, 'Dardalena Ginapa', 'Perempuan', 'Palembang', '2009-02-19', 'Benni Irawan', 2, 'VII', 'Jl. KH.Azhari Lr. Merdeka RT. 16 RW. 003 No. 662 Kec.  SU.II Palembang', 'Palembang', 3, 'MIS Nasyril Islam', 'Kurang Mampu', 2),
(191, 'Della', 'Perempuan', 'Palembang', '2004-08-28', 'Irwan', 2, 'VII', 'Jl. Tangga Takat laut RT. 14 RW. 06 Kec. SU II Kel.  Tangga takat ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(192, 'Dewi Anjani', 'Perempuan', 'Palembang', '2009-01-12', 'Usman', 2, 'VII', 'Jl. KH.Azhari Lr. Sentosa jaya RT. 018 RW. 006 Kec. SU.II', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(193, 'Julia Anastasya', 'Perempuan', 'Palembang', '2008-07-02', 'Susanto', 2, 'VII', 'Jl. D.I.Panjaitan Lr. sinar ladang 2 No. 34 RT. 049 RW. 015 Kec. SU II', 'Palembang', 6, 'SD Muhammadiyah 18 Palembang', 'Mampu', 2),
(194, 'Keisya Maharani Humairoh', 'Perempuan', 'Indralaya', '2009-02-09', 'Haidir', 2, 'VII', 'Jl. Azhari Lr. kamasan no 241 RT. 009 RW. 002 Kec. SU.II', 'Palembang', 3, 'MIS nurul yaqin', 'Mampu', 2),
(195, 'M.Furqon Hanafi Habibi', 'Laki-Laki', 'Palembang', '2008-10-09', 'M.Arifandi', 2, 'VII', 'Jl. KH.Azhari Lr. Tuan kapar RT. 012 RW. 004 Kec. SU.II', 'Palembang', 6, 'SD Kemala Bhayangkari 1 Palembang', 'Mampu', 2),
(196, 'M.Habibi', 'Laki-Laki', 'Palembang', '2009-10-03', 'Irwan', 2, 'VII', 'Jl. KH.Azhari Lr. Perbatasan RT. 034 RW. 004 Kec.  SU.II Palembang', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(197, 'M.Jaikanda', 'Laki-Laki', 'Palembang', '2009-01-24', 'Darman', 2, 'VII', 'Jl. KH.Azhari Lr. Pedatuan Darat RT. 11 RW. 002 Kec.  SU.II ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(198, 'M.Reyhan Hidayatullah ', 'Laki-Laki', 'Palembang', '2009-11-11', 'Imam Rusli', 2, 'VII', 'Jl. KH.Azhari lrg taman bacaan RT. 07 RW. 04 Kec. SU.II ', 'Palembang', 6, 'SD Muhammadiyah 5 Palembang', 'Mampu', 2),
(199, 'M.Ridwan ', 'Laki-Laki', 'Palembang', '2008-06-26', 'Herman', 2, 'VII', 'Jl. KH.Azhari Lr. pulo RT. 17 RW. 004 Kec. SU.II Palembang', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(200, 'M.Riski Ridwan', 'Laki-Laki', 'Palembang', '2009-08-11', 'Lukman Nul Hakim', 2, 'VII', 'Jl. KH.Azhari Lr. Perbatasan RT. 034 RW. 004 Kec.  SU.II Palembang', 'Palembang', 3, 'MIS Nasyril Islam', 'Kurang Mampu', 2),
(201, 'M.Nabhan Setiawan', 'Laki-Laki', 'Palembang', '2009-09-14', 'Ruli Setiawan', 2, 'VII', 'Jl. D.I.Panjaitan Lr. Bakti No. 09 RT. 24 RW. 09 Kec. SU II Palembang', 'Palembang', 6, 'SD negeri 05 Palembang', 'Mampu', 2),
(202, 'Muslinawati', 'Perempuan', 'Palembang', '2008-08-28', 'Mustar', 2, 'VII', 'Jl. KH.Azhari Lr. Basyaib RT. 025 RW. 002 Kec. SU II Palembang', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(203, 'Naycika Syailah', 'Perempuan', 'Palembang', '2007-07-24', 'Samsul Bahri', 2, 'VII', 'Jl. D.I.Panjaitan Lr. Keramat RT. 035 RW. 008 Kec. SU II Palembang', 'Palembang', 6, 'SD Muhammadiyah 1 Palembang', 'Mampu', 2),
(204, 'Nur Kaila Sari', 'Perempuan', 'Palembang', '2009-01-06', 'M.Soleh', 2, 'VII', 'Jl. KH.Azhari Lr. rawo-rawo No. 558 RT. 026 RW. 004 Kec. SU II Palembang', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(205, 'Nurmia Rahmadhani', 'Perempuan', 'Palembang', '2007-09-26', 'Syamsi', 2, 'VII', 'Jl. D.I.panjaitan Lr.  Keramat RT. 36 RW. 008 Kec. SU II Palembang', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(206, 'Parid Al Habsi', 'Laki-Laki', 'Palembang', '2009-08-21', 'Muslim', 2, 'VII', 'Jl. KH.Azhari Lr. Taman bacaan No. 328 RT. 035 RW. 003 Kec. SU II Palembang', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(207, 'Rahmad Wahyu Romadhan', 'Laki-Laki', 'Palembang', '2009-08-18', 'Alm.Ayen Ali B', 2, 'VII', 'Jl. KH.Azhari lrg Pratumusa No. 11 RT. 026 RW. 004 Kec. SU II Palembang', 'Palembang', 6, 'SD Negeri 071 palembang', 'Mampu', 2),
(208, 'Shireen Aulia Rahmadhani ', 'Perempuan', 'Palembang', '2009-08-12', 'M.Erwin', 2, 'VII', 'Jl. D.I.Panjaitan lrg bakti RT. 24 RW. 09 Kec. SU II Palembang', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(209, 'Syirin Azahra', 'Perempuan', 'Palembang', '2008-12-30', 'Mustar', 2, 'VII', 'Jl. KH.Azhari Lr. Basyaib RT. 025 RW. 002 Kec. SU II Palembang', 'Palembang', 6, 'SD Negeri 071 palembang', 'Mampu', 2),
(210, 'Siti Syalwa Amalia', 'Perempuan', 'Palembang', '2009-10-12', 'Afrizal Ade putra', 2, 'VII', 'Jl. KH.Azhari Lr. Amal Setia 11 Ulu No. 377 RT. 12 RW. 003', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(211, 'Melati Cantika', 'Perempuan', 'Palembang', '2009-01-21', 'Bambang Ruliyansah', 2, 'VII', 'Jl. KH.Azhari Lr. Amal Setia 11 Ulu No. 36 RT. 12 RW. 003', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(212, 'Naila Lukmana', 'Perempuan', 'Palembang', '2008-04-24', 'Lukman', 2, 'VII', 'Jl. KH.Azhari Lr. Amal Setia 11 Ulu No. 400RT. 12 RW. 003', 'Palembang', 3, 'MIS Nasyril Islam', 'Kurang Mampu', 2),
(213, 'M.Marvel Aditya', 'Laki-Laki', 'Palembang', '2008-11-12', 'Muhammad Sani', 2, 'VII', 'Komp Puri Gading Mas Blok X5  Pangkalan Benteng Talang Kelapa', 'Banyuasin', 6, 'SD Negeri 1 Banyuasin', 'Mampu', 2),
(214, 'Muhammad Deni Prawijaya', 'Laki-Laki', 'Palembang', '2009-02-05', 'Achmad Aliudin', 2, 'VII', 'Jl. Simpang jaya 7 No. 195 16 Ulu', 'Palembang', 6, 'SD MUHAMMADIYAH 03 PALEMBANG', 'Kurang Mampu', 2),
(215, 'Muhammad Reza Fahlevi', 'Laki-Laki', 'Palembang', '2010-01-02', 'Erlangga', 2, 'VII', 'Jln. KH. Azhari Lr.  Harapan,SEBERANG ULU II', 'Palembang', 6, 'SD Negeri 079 palembang', 'Mampu', 2),
(216, 'Agung Firmansyah', 'Laki-Laki', 'Palembang', '2007-07-08', 'M. Sulaiman', 2, 'VII', 'Jl.  Dipanjaitan, lorong samarinda No.  134 RT/RW . 004/001 ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(217, 'Alvia Rahma Sari', 'Perempuan', 'Palembang', '2008-04-08', 'Abdul Rokib', 2, 'VII', 'Lr.  Perbatasan RT/RW .  034/004 Tangga Takat Seberang Ulu II ', 'Palembang', 6, 'SD Negeri 079 palembang', 'Mampu', 2),
(218, 'Hendrik', 'Laki-Laki', 'Palembang', '2008-11-26', 'Santani', 2, 'VII', 'Jl.  Kh. Azhari Lr. Pedatuan darat RT/RW  .011/003 Kel.  12 Ulu ', 'Palembang', 6, 'SD Negeri 1 Palembang ', 'Mampu', 2),
(219, 'Miranda Oktavia', 'Perempuan', 'Palembang', '2007-08-12', 'Ahmad Syaban', 2, 'VII', 'Jl.  Kh. Azhari Lr.  Taman Bacaan RT/RW .  007/004 Kel.  Tanggatakat ', 'Palembang', 6, 'SD MUHAMMADIYAH 01 PALEMBANG', 'Mampu', 2),
(220, 'M. Ilham', 'Laki-Laki', 'Palembang', '2007-09-12', 'Hendratno', 2, 'VII', 'Lr. Pahlawan III No.  108 RT/RW .  020/007 Kel.  Plaju Ulu Kec.  Plaju ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(221, 'Muhammad Adjie Adhiaksa', 'Laki-Laki', 'Palembang', '2008-06-29', 'Najmudin', 2, 'VII', 'Jl.  Dipanjaitan Lr.  Gaya Baru No.  08 RT/RW .  001/001 Kel.  Sentosa ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(222, 'Muhammad Ar Ridho Haryanto', 'Laki-Laki', 'Palembang', '2009-05-31', 'Ari Apriyansyah', 2, 'VII', 'Jl. kh. Azhari lr,amal No. 290, RT/RW . 009/001 Kel. 14 ulu ', 'Palembang', 6, 'SD Negeri 099 palembang', 'Kurang Mampu', 2),
(223, 'Muhammad Aprizal', 'Laki-Laki', 'Palembang', '2007-04-26', 'Agus Sri Gandi', 2, 'VII', 'Lr.  Semeru I No. 14-70, Rw/RT.  002/002, Tangga Takat', 'Palembang', 6, 'SD Negeri 079 palembang', 'Mampu', 2),
(224, 'Muhammad Ilham', 'Laki-Laki', 'Palembang', '2009-05-20', 'M.Djauhari', 2, 'VIII', 'Jl.  Politehnik RT/RW .  042/013 Kel. bukit lama Kec.  ilir barat I', 'Palembang', 6, 'SD Negeri 98 Palembang', 'Mampu', 2),
(225, 'Muhammad Rizky Ariyanto', 'Laki-Laki', 'Palembang', '2004-11-11', 'Mat Hadi', 2, 'VIII', 'Jl.  Silaberanti Lr.  Aurgading RT/RW .  024/006 Kel.  Silaberanti ', 'Palembang', 6, 'SD Negeri 77 Palembang', 'Mampu', 2),
(226, 'Muhammad Tanzilal', 'Laki-Laki', 'Palembang', '2008-01-10', 'Usli', 2, 'VIII', 'Lr.  Sekolah RT/RW . 029/008 Kel. Talang Putri Kec.  Plaju ', 'Palembang', 6, ' SD Negeri 085 palembang', 'Mampu', 2),
(227, 'Muhammad Nevan Saputra', 'Laki-Laki', 'Palembang', '2006-09-17', 'Ferianzah', 2, 'VIII', 'Jl.  Kh. Azhari Lr.  Cangga II No.  95 RT/RW . 02/01 Kel.  14 Ulu ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(228, 'Muhammad Rido Pratama', 'Laki-Laki', 'Palembang', '2005-11-09', 'Lukman Nul Hakim', 2, 'VIII', 'Jl. Kh. Azhari Lr.  Perbatasan RT/RW . 034/004 Kel.  Tangga Takat Kec.  Seberang Ulu II', 'Palembang', 6, 'SD negeri 05 Palembang', 'Mampu', 2),
(229, 'Fira Damayanti', 'Perempuan', 'Palembang', '2009-03-11', 'Candra Gunawan', 2, 'VIII', 'Jl.  Kh. Azhari Lr. Merdeka No. 40 RT/RW .  011/003 Kel.  14 Ulu ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(230, 'Rahmadan', 'Laki-Laki', 'Palembang', '2006-07-07', 'Agustan', 2, 'VIII', 'Jl.  Kh. Azhari Lr.  Perbatasan No. 63 RT/RW .  05/04 Kel.  Tangga takat ', 'Palembang', 6, 'SD Negeri 54 Palembang', 'Mampu', 2),
(231, 'Septia Rahmadihina', 'Perempuan', 'Palembang', '2009-08-04', 'Fikriadi', 2, 'VIII', 'Jl. Kh. Azhari Lr.  Rawa-rawa No.  586A RT/RW .  026/004', 'Palembang', 6, 'SD Negeri 099 palembang', 'Mampu', 2),
(232, 'Siti Keyla Wulandari', 'Perempuan', 'Palembang', '2010-03-21', 'Hendri', 2, 'VIII', 'Jl.  Kh. Azhari Lr.  Merdeka RT/RW .  027/005 Kel.  14 Ulu ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(233, 'Sonia', 'Perempuan', 'Palembang', '2008-11-14', 'Jian', 2, 'VIII', 'Jl.  Kh. Azhari Lr.  Pedatuan Darat RT/RW .  011/002 Kel.  12 Ulu ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(234, 'Akhir Dino', 'Laki-Laki', 'Palembang', '2006-07-07', 'AGUSTAN', 2, 'IX', 'Jl.  KH. Azhari Gg.perbatasan RT. 05 RW.  04', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(235, 'Alika Putri Azura', 'Perempuan', 'Palembang', '2007-11-17', 'M. YUNUS', 2, 'IX', 'Jl.  KH. Azhari RT. 13 RW.  03 Lr.  Merdeka No. 442', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(236, 'Bari Harianto', 'Laki-Laki', 'Palembang', '2005-08-04', 'JOHANI', 2, 'IX', 'Jl.  KH. Azhari Lr.  A.rohim RT. 001 RW. 001', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(237, 'Bayu Andika', 'Laki-Laki', 'Palembang', '2006-03-02', 'ZULKIFLI', 2, 'IX', 'Jl.  KH. Azhari Lr.  Tenang Menanti RT. 9 RW.  5 Tangga Takat 16 Ulu', 'Palembang', 6, 'SD Negeri 101 palembang', 'Mampu', 2),
(238, 'Bilqis Seina Carlin', 'Perempuan', 'Palembang', '2009-01-05', 'SUKARDIN', 2, 'IX', 'Jl.  KH. Azhari RT. 18 RW. 6 No. 769 ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(239, 'Kemas M. Zhafran Mansur', 'Laki-Laki', 'Palembang', '2007-11-06', 'ZULKARNAIN', 2, 'IX', 'Jl.  Kh Azhari Lr.  Sentosa Jaya RT. 18 RW. 7', 'Palembang', 6, 'SD Negeri 101 palembang', 'Mampu', 2),
(240, 'Edo Pratama', 'Laki-Laki', 'Palembang', '2005-04-22', 'M. AMIN', 2, 'IX', 'Jl.  Jaya Indah Lr.  Rukun II RT. 21 RW. 07', 'Palembang', 3, 'MIS Nasyril Islam', 'Kurang Mampu', 2),
(241, 'M.Maikil Pratama', 'Laki-Laki', 'Palembang', '2004-12-08', 'IRWANSYAH', 2, 'IX', 'Jl.  Kh. Azhari Lr. Pratumusa ', 'Palembang', 6, 'SD Negeri 093 palembang', 'Mampu', 2),
(242, 'KGS. M. Abyan Al Hakim', 'Laki-Laki', 'Palembang', '2007-08-10', 'KGS ABDURROHIM', 2, 'IX', 'Jl.  DI Panjaitan gg.kaleng No. 148 RT. 11 RW. 6 Plaju', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(243, 'Lutfiah Rahmadani', 'Laki-Laki', 'Palembang', '2005-11-09', 'BENNI', 2, 'IX', 'Jl.  Jaya Indah Lr.  Rukun II RT. 21 RW. 07', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(244, 'M. Deftha Pratama', 'Laki-Laki', 'Palembang', '2004-12-05', 'M. AMIN', 2, 'IX', 'Jl.  Kh. Azhari Lr. Pratumusa ', 'Palembang', 6, 'SD Negeri 087 palembang', 'Mampu', 2),
(245, 'M. Fahri Yansyah', 'Laki-Laki', 'Palembang', '2008-02-23', 'IRWANSYAH', 2, 'IX', 'Jl.  KH. Azhari Lr.  Perbatasan RT. 5 RW. 1 ', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(246, 'M. Polipo Inzaghi', 'Laki-Laki', 'Palembang', '2006-03-03', 'A. DAIRI', 2, 'IX', 'Jl.  KH.Azhari lr Abadi RT. 29 RW. 7', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(247, 'M. Rifky Akbar', 'Laki-Laki', 'Palembang', '2006-06-25', 'BASTARI', 2, 'IX', 'Jl.  KH. Azhari No. 14 Lr.  Perbatasan RT. 34 RW. 4', 'Palembang', 6, 'SD Muhammadiyah 01 Palembang', 'Mampu', 2),
(248, 'M. Rizal Sawaludin', 'Laki-Laki', 'Palembang', '2003-08-24', 'HAMIDAH', 2, 'IX', 'Jl.  KH Azhari Lr.  Tridinanti No. 1200 RT. 19 RW. 6', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(249, 'M. Wahyu Arifin', 'Laki-Laki', 'Palembang', '2005-03-16', 'SYAHIRUDIN', 2, 'IX', 'Jl.  KH. Azhari Lr.  Keluarga RT. 33 RW. 2 No. 110', 'Palembang', 6, 'SD Negeri 45 Palembang', 'Mampu', 2),
(250, 'Marlina', 'Perempuan', 'Palembang', '2006-12-07', 'RONI', 2, 'IX', 'Jl. KH Azhari Lr.  Pratumusa RT. 3 RW. 7', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(251, 'Krisma', 'Perempuan', 'Palembang', '2008-02-17', 'ROZALI', 2, 'IX', 'Jl.  A. Yani Lr.  Arrohim  ', 'Palembang', 6, 'SD Negeri 87 Palembang', 'Mampu', 2),
(252, 'Putri Nabila', 'Perempuan', 'Palembang', '2007-04-04', 'ABDULLAH', 2, 'IX', 'Jl.  KH Azhari Lr. kedemangan RT. 33 RW. 9 No. 275', 'Palembang', 3, 'MIS Nasyril Islam', 'Kurang Mampu', 2),
(253, 'Aidir Jefriansyah', 'Laki-Laki', 'Palembang', '2006-06-10', 'AMIRUDIN', 2, 'IX', 'Jl. Pertahanan Ujung Seberang Ulu I', 'Palembang', 6, 'SD Negeri 074 palembang', 'Mampu', 2),
(254, 'Rahmania Azhari', 'Perempuan', 'Palembang', '2007-06-20', 'EDI IMRON', 2, 'IX', 'Jl.  KH Azhari Lr. merdeka RT. 15 RW. 5', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(255, 'Riano Rajjabi', 'Laki-Laki', 'Palembang', '2007-08-01', 'ADI EKA PUTRA', 2, 'IX', 'Jl.  Kh Azhari Lr. rawo rawo RT. 26 RW. 4', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(256, 'Serli Safitri', 'Perempuan', 'Palembang', '2005-09-25', 'HERIYANTO', 2, 'IX', 'Jl.  KH Azhari Lr.  Tenang menanti', 'Palembang', 6, 'SD Negeri 98 Palembang', 'Kurang Mampu', 2),
(257, 'Suci Maharani', 'Perempuan', 'Palembang', '2007-03-15', 'ROHILAH', 2, 'IX', 'Jl.  Jaya Indah Lr.  Rukun II RT. 21 RW. 06', 'Palembang', 3, 'MIS Nasyril Islam', 'Mampu', 2),
(258, 'Suhartoni Triwijaya', 'Laki-Laki', 'Palembang', '2007-09-08', 'POMI HARIWIJAYA', 2, 'IX', 'Jl.  KH Azhari Lr. Pratumusa RT. 15 Tw.5', 'Palembang', 6, 'SD Negeri 076 palembang', 'Mampu', 2),
(259, 'Tri Bimo Arzein', 'Laki-Laki', 'Palembang', '2007-07-18', 'SUHERMAN', 2, 'IX', 'Lr.  Perguruan TALANG BUBUK, PLAJU', 'Palembang', 3, 'SD Negeri 076 palembang', 'Mampu', 2),
(260, 'putri', 'Perempuan', 'muara enim', '2006-03-23', 'suyanto', 3, 'II', 'baseng', 'palembang', 5, '-', 'Kurang Mampu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `level` varchar(30) NOT NULL,
  `sessions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `pass`, `level`, `sessions`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'anablknnf5f26ub51di8e2enbq'),
(2, 'eksekutif', 'fe615c6d5e9e7552152a270a28e8b27a5aa276b0', 'eksekutif', '29ss0eo05u1al24ira3crjs7ti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lib_jabatan`
--
ALTER TABLE `lib_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `lib_pendidikan_terakhir`
--
ALTER TABLE `lib_pendidikan_terakhir`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `lib_prasarana`
--
ALTER TABLE `lib_prasarana`
  ADD PRIMARY KEY (`id_jenis_prasarana`);

--
-- Indexes for table `lib_sarana`
--
ALTER TABLE `lib_sarana`
  ADD PRIMARY KEY (`id_jenis_sarana`);

--
-- Indexes for table `lib_tajaran`
--
ALTER TABLE `lib_tajaran`
  ADD PRIMARY KEY (`id_tajaran`);

--
-- Indexes for table `lib_tingkat`
--
ALTER TABLE `lib_tingkat`
  ADD PRIMARY KEY (`id_tingkat`);

--
-- Indexes for table `prasarana`
--
ALTER TABLE `prasarana`
  ADD PRIMARY KEY (`id_prasarana`);

--
-- Indexes for table `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`id_sarana`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `lib_jabatan`
--
ALTER TABLE `lib_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lib_pendidikan_terakhir`
--
ALTER TABLE `lib_pendidikan_terakhir`
  MODIFY `id_pendidikan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lib_prasarana`
--
ALTER TABLE `lib_prasarana`
  MODIFY `id_jenis_prasarana` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lib_sarana`
--
ALTER TABLE `lib_sarana`
  MODIFY `id_jenis_sarana` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lib_tajaran`
--
ALTER TABLE `lib_tajaran`
  MODIFY `id_tajaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lib_tingkat`
--
ALTER TABLE `lib_tingkat`
  MODIFY `id_tingkat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prasarana`
--
ALTER TABLE `prasarana`
  MODIFY `id_prasarana` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sarana`
--
ALTER TABLE `sarana`
  MODIFY `id_sarana` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
