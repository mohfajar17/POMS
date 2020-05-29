-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2018 at 03:06 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2511452_gantara`
--

-- --------------------------------------------------------

--
-- Table structure for table `atlet`
--

CREATE TABLE `atlet` (
  `id_atlet` varchar(12) NOT NULL,
  `id_psikolog` varchar(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `cabang_olahraga` varchar(255) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota_asal` varchar(255) NOT NULL,
  `no_telefon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` text NOT NULL,
  `photo_profile` varchar(255) NOT NULL,
  `intensitas_target` double NOT NULL,
  `label` int(5) NOT NULL,
  `status_verifikasi` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atlet`
--

INSERT INTO `atlet` (`id_atlet`, `id_psikolog`, `nama`, `cabang_olahraga`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kota_asal`, `no_telefon`, `email`, `password`, `token`, `photo_profile`, `intensitas_target`, `label`, `status_verifikasi`) VALUES
('18201405', '12345678', 'Ifan Anugrah Setiawan', 'Atletik 400m', 1, 'Sidoarjo', '2000-09-15', 'Ds.Buduran Kec.Buduran Kab.Sidoarjo', 'Sidoarjo', '-', 'ifan@gmail.com', 'pass', 'fI2PTRah1W4:APA91bGbMHLnFmqOHQycOcTRbrbT_UVHbjhPqqFv7TRMx8ByMTfKI5_BzRkWuxQR3MVySCXu61gM_-Shw3JvlUDeomijQwRYNoNOvM8Tdon3n4G1V1cRFPQGVuIo9AZVoAQurwCdHAHt', '18201405.png', 60, 77, 0),
('24600605', '12345678', 'Della Dinarsari', 'Loncat Indah', 0, 'Surabaya', '1990-10-20', 'Surabaya', 'Surabaya', '-', 'della@gmail.com', 'pass', 'cgdcyVPZd3U:APA91bFQWnrQnSI1aGQ85FpnaGcjeG36CR0djkpl4WMvrC2QlZfYY2byIrQ9vuOamcZgOFWCFMzv-ViDNPpKum3WfcNHIMrfR9mwwHsuwoM5Z1KFlQ3KEL8LJ63JxQCPfpFbCa9pYfCD', '24600605.png', 60, 86, 0);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id_form` int(255) NOT NULL,
  `nama` text NOT NULL,
  `cabang_olahraga` text NOT NULL,
  `id_atlet` varchar(255) NOT NULL,
  `id_psikolog` varchar(255) NOT NULL,
  `waktu_input` date NOT NULL,
  `sesi_latihan` int(5) NOT NULL,
  `antusiasme_pre_latih` double NOT NULL,
  `antusiasme_pos_latih` double NOT NULL,
  `fisik` double NOT NULL,
  `catatan_fisik` text NOT NULL,
  `stres` double NOT NULL,
  `konsentrasi` double NOT NULL,
  `keyakinan` double NOT NULL,
  `target` double NOT NULL,
  `lelah` double NOT NULL,
  `komunikasi` double NOT NULL,
  `intensitas` double NOT NULL,
  `hidrasi` double NOT NULL,
  `tidur` double NOT NULL,
  `nutrisi` double NOT NULL,
  `recovery` double NOT NULL,
  `recovery_lain` text NOT NULL,
  `mental_skill` double NOT NULL,
  `mental_skill_lain` text NOT NULL,
  `kendala_mental_skill` text NOT NULL,
  `saran_masalah` int(5) NOT NULL,
  `saran_masalah_lain` text NOT NULL,
  `hal_positif` text NOT NULL,
  `scoring_mental` double NOT NULL,
  `scoring_fisik` double NOT NULL,
  `intensitas_target` double NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_form`, `nama`, `cabang_olahraga`, `id_atlet`, `id_psikolog`, `waktu_input`, `sesi_latihan`, `antusiasme_pre_latih`, `antusiasme_pos_latih`, `fisik`, `catatan_fisik`, `stres`, `konsentrasi`, `keyakinan`, `target`, `lelah`, `komunikasi`, `intensitas`, `hidrasi`, `tidur`, `nutrisi`, `recovery`, `recovery_lain`, `mental_skill`, `mental_skill_lain`, `kendala_mental_skill`, `saran_masalah`, `saran_masalah_lain`, `hal_positif`, `scoring_mental`, `scoring_fisik`, `intensitas_target`, `status`) VALUES
(54, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 3, 80, 80, 80, '', 70, 80, 80, 90, 80, 90, 70, 60.000004, 60.000004, 0, 22.222223, '', 20, '', '', 2, '', '', 73.75, 47.058823, 60, 1),
(53, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-26', 3, 80, 90, 100, '', 80, 100, 100, 90, 80, 90, 70, 80, 100, 20, 33.333336, '', 40, '', '', 2, '', '', 83.75, 64.70589, 60, 1),
(52, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2017-12-27', 2, 80, 80, 100, '', 90, 100, 100, 100, 80, 100, 90, 100, 100, 20, 55.555557, '', 20, '', '', 2, '', '', 83.75, 73.52941, 60, 1),
(51, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2017-12-28', 1, 80, 90, 100, '', 80, 90, 90, 90, 80, 90, 90, 60.000004, 100, 20, 44.444447, '', 20, '', '', 2, '', '', 78.75, 64.70589, 60, 1),
(50, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-02', 1, 80, 80, 80, '', 80, 90, 80, 100, 90, 100, 90, 100, 80, 20, 55.555557, '', 20, '', '', 2, '', '', 78.75, 69.117645, 60, 1),
(49, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-03', 2, 70, 90, 80, '', 80, 90, 90, 100, 100, 90, 80, 80, 100, 0, 22.222223, '', 40, '', '', 2, '', '', 81.25, 58.823532, 60, 0),
(47, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-04', 2, 80, 80, 100, '', 70, 90, 90, 100, 80, 90, 70, 60.000004, 100, 20, 22.222223, '', 20, '', '', 1, '', '', 77.5, 58.823532, 60, 1),
(48, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-05', 1, 80, 80, 80, '', 70, 80, 80, 90, 80, 90, 70, 60.000004, 60.000004, 0, 22.222223, '', 20, '', '', 2, '', '', 73.75, 47.058823, 60, 1),
(45, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-06', 3, 70, 80, 100, '', 70, 90, 100, 100, 80, 80, 90, 80, 80, 20, 55.555557, '', 0, '', '', 2, '', '', 73.75, 67.64706, 60, 1),
(46, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-07', 2, 80, 90, 100, '', 90, 90, 100, 90, 90, 80, 80, 80, 100, 0, 22.222223, '', 20, '', '', 2, '', '', 80, 60.294117, 60, 1),
(43, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-08', 4, 80, 80, 80, '', 80, 80, 90, 90, 80, 100, 80, 80, 100, 0, 22.222223, '', 20, '', '', 2, '', '', 77.5, 55.88235, 60, 1),
(44, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-09', 3, 80, 90, 100, '', 80, 100, 80, 100, 80, 90, 70, 80, 80, 20, 55.555557, '', 40, '', '', 2, '', '', 82.5, 67.64706, 60, 1),
(42, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-10', 3, 70, 90, 80, '', 70, 100, 80, 90, 90, 100, 80, 80, 100, 20, 55.555557, '', 40, '', '', 1, '', '', 80, 69.117645, 60, 1),
(31, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-11', 1, 70, 80, 100, '', 80, 100, 90, 100, 80, 90, 70, 80, 80, 20, 33.333336, '', 20, '', '', 2, '', '', 78.75, 61.764706, 60, 1),
(32, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-12', 1, 80, 90, 100, '', 80, 90, 80, 90, 70, 100, 70, 80, 80, 0, 33.333336, '', 40, '', '', 2, '', '', 81.25, 55.88235, 60, 1),
(33, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-13', 3, 80, 80, 100, '', 90, 90, 70, 90, 90, 100, 60.000004, 60.000004, 60.000004, 20, 44.444447, '', 20, '', '', 2, '', '', 77.5, 60.294117, 60, 1),
(34, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-14', 3, 80, 80, 80, '', 80, 100, 100, 90, 90, 100, 70, 80, 80, 20, 33.333336, '', 20, '', '', 2, '', '', 81.25, 60.294117, 60, 1),
(35, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-15', 4, 70, 70, 100, '', 70, 80, 90, 100, 80, 100, 70, 80, 100, 20, 33.333336, '', 20, '', '', 2, '', '', 75, 64.70589, 60, 1),
(36, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-16', 3, 80, 90, 80, '', 90, 100, 90, 90, 80, 90, 80, 80, 100, 20, 11.111112, '', 20, '', '', 2, '', '', 81.25, 55.88235, 60, 0),
(37, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-17', 3, 70, 90, 100, '', 80, 90, 90, 100, 90, 90, 80, 80, 100, 20, 22.222223, '', 40, '', '', 2, '', '', 81.25, 63.235294, 60, 0),
(38, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-18', 1, 70, 70, 100, '', 70, 90, 90, 90, 80, 100, 80, 80, 100, 40, 0, '', 40, '', '', 2, '', '', 77.5, 58.823532, 60, 1),
(39, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-19', 1, 70, 80, 80, '', 90, 90, 100, 100, 80, 90, 70, 100, 100, 20, 33.333336, '', 20, '', '', 2, '', '', 80, 64.70589, 60, 1),
(40, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-20', 2, 70, 90, 100, '', 70, 100, 90, 90, 90, 90, 80, 100, 100, 20, 44.444447, '', 40, '', '', 2, '', '', 80, 72.05882, 60, 1),
(41, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-21', 1, 70, 90, 100, '', 90, 80, 90, 100, 90, 100, 80, 100, 100, 0, 0, '', 20, '', '', 2, '', '', 80, 51.47059, 60, 1),
(55, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 3, 70, 70, 100, '', 70, 90, 100, 100, 80, 80, 90, 80, 80, 20, 44.444447, '', 0, '', '', 2, '', '', 72.5, 64.70589, 60, 1),
(56, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 2, 70, 90, 100, '', 100, 90, 90, 70, 70, 80, 60.000004, 60.000004, 80, 40, 11.111112, '', 40, '', '', 2, '', '', 78.75, 54.411762, 60, 1),
(57, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 1, 70, 90, 100, '', 80, 80, 90, 90, 90, 100, 80, 80, 100, 0, 22.222223, '', 20, '', '', 2, '', '', 77.5, 60.294117, 60, 1),
(58, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 4, 80, 90, 100, '', 80, 90, 80, 90, 70, 100, 70, 80, 80, 0, 33.333336, '', 40, '', '', 1, '', '', 81.25, 57.352943, 60, 1),
(59, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 4, 80, 90, 80, '', 90, 90, 100, 90, 90, 80, 80, 80, 100, 0, 22.222223, '', 20, '', '', 2, '', '', 80, 57.352943, 60, 1),
(60, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 4, 70, 80, 100, '', 90, 90, 70, 90, 90, 100, 60.000004, 60.000004, 80, 20, 44.444447, '', 20, '', '', 2, '', '', 76.25, 63.235294, 60, 1),
(61, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 3, 70, 90, 100, '', 90, 80, 90, 90, 90, 70, 80, 60.000004, 80, 40, 11.111112, '', 40, '', '', 2, '', '', 77.5, 57.352943, 60, 1),
(62, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 3, 80, 80, 80, '', 70, 90, 90, 90, 80, 100, 80, 80, 100, 40, 0, '', 20, '', '', 3, '', '', 77.5, 55.88235, 60, 1),
(63, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 2, 80, 80, 80, '', 80, 100, 90, 100, 80, 90, 70, 80, 80, 20, 33.333336, '', 20, '', '', 2, '', '', 80, 58.823532, 60, 1),
(64, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 2, 80, 80, 100, '', 70, 80, 90, 100, 80, 100, 70, 80, 100, 20, 33.333336, '', 20, '', '', 2, '', '', 77.5, 64.70589, 60, 1),
(65, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 1, 70, 80, 80, '', 70, 100, 80, 90, 90, 100, 80, 80, 100, 20, 55.555557, '', 40, '', '', 1, '', '', 78.75, 69.117645, 60, 1),
(66, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 1, 80, 80, 100, '', 70, 100, 90, 90, 90, 100, 80, 100, 100, 20, 44.444447, '', 40, '', '', 2, '', '', 81.25, 72.05882, 60, 1),
(67, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 3, 70, 70, 100, '', 80, 80, 100, 100, 80, 90, 70, 80, 80, 20, 55.555557, '', 40, '', '', 2, '', '', 78.75, 67.64706, 60, 1),
(68, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 3, 80, 80, 80, '', 90, 100, 90, 90, 80, 90, 80, 80, 100, 20, 11.111112, '', 20, '', '', 2, '', '', 80, 55.88235, 60, 1),
(69, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 1, 70, 80, 100, '', 80, 90, 80, 100, 90, 100, 90, 100, 80, 20, 55.555557, '', 20, '', '', 1, '', '', 77.5, 72.05882, 60, 1),
(70, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 2, 80, 90, 100, '', 80, 100, 100, 90, 90, 100, 70, 80, 80, 20, 33.333336, '', 20, '', '', 1, '', '', 82.5, 63.235294, 60, 1),
(71, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 2, 70, 90, 80, '', 80, 90, 90, 100, 90, 90, 80, 80, 100, 20, 22.222223, '', 40, '', '', 2, '', '', 81.25, 60.294117, 60, 1),
(72, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 1, 80, 90, 80, '', 90, 90, 100, 100, 80, 90, 70, 100, 100, 20, 33.333336, '', 20, '', '', 2, '', '', 82.5, 64.70589, 60, 1),
(73, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 1, 70, 70, 100, '', 80, 100, 80, 100, 80, 90, 70, 80, 80, 20, 44.444447, '', 20, '', '', 2, '', '', 76.25, 64.70589, 60, 1),
(74, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 4, 80, 90, 100, '', 90, 80, 100, 80, 90, 100, 90, 100, 80, 20, 33.333336, '', 20, '', '', 2, '', '', 80, 66.17647, 60, 1),
(75, 'Della Dinarsari', 'Loncat Indah', '24600605', '12345678', '2017-08-12', 4, 90, 80, 100, '', 90, 80, 90, 100, 90, 100, 80, 100, 100, 0, 44.444447, '', 40, '', '', 1, '', '', 83.75, 69.117645, 60, 1),
(80, 'Ifan Anugrah Setiawan', 'Atletik 400m', '18201405', '12345678', '2018-01-22', 1, 100, 100, 60.000004, '', 90, 90, 90, 100, 100, 100, 100, 60.000004, 100, 20, 11.111112, '', 20, '', '', 1, '', 'sehat', 86.25, 52.941177, 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(15) NOT NULL,
  `id_pengirim` varchar(12) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `untuk` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `isi_info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `id_pengirim`, `judul`, `dari`, `untuk`, `waktu`, `isi_info`) VALUES
(70, '', 'TEST', 'a', 'b', '2018-01-24', 'test info di app gantara');

-- --------------------------------------------------------

--
-- Table structure for table `psikolog`
--

CREATE TABLE `psikolog` (
  `id_psikolog` varchar(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telefon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` text NOT NULL,
  `photo_profile` varchar(255) NOT NULL,
  `status_verifikasi` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psikolog`
--

INSERT INTO `psikolog` (`id_psikolog`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telefon`, `email`, `password`, `token`, `photo_profile`, `status_verifikasi`) VALUES
('12345678', 'Admin Gantara', 1, 'Surabaya', '1996-02-16', 'Keputih Gg.IIIC No.15A, Sukolilo, Surabaya', '081223514655', 'admin@gmail.com', 'admin', 'efvrO6o9gu8:APA91bH1XMJPplagCgcgrGXkUx472f9vig8YUafHj6wqk6jrLCS-aBXFoZ-4jZHX-CkcmV8H5R82Um_-wwHA3oLv1jzpNeaGZPzQ05neGQV0T5Aek67YZvR_CiQcPtG5dpRV7RZq0tKq', '12345678.png', 0),
('123456789', '-', 1, '-', '0000-00-00', '-', '-', '-', '123456789', '-', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rekam_medis` int(255) NOT NULL,
  `id_form` int(255) NOT NULL,
  `id_atlet` varchar(255) NOT NULL,
  `id_psikolog` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `cabang_olahraga` varchar(255) NOT NULL,
  `waktu_input` date NOT NULL,
  `sesi_latihan` int(5) NOT NULL,
  `catatan_fisik` text NOT NULL,
  `kendala_mental_skill` text NOT NULL,
  `hal_positif` text NOT NULL,
  `catatan_psikolog` text NOT NULL,
  `status_read` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atlet`
--
ALTER TABLE `atlet`
  ADD PRIMARY KEY (`id_atlet`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `id_atlet` (`id_atlet`),
  ADD KEY `id_psikolog` (`id_psikolog`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psikolog`
--
ALTER TABLE `psikolog`
  ADD PRIMARY KEY (`id_psikolog`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rekam_medis`),
  ADD KEY `id_atlet` (`id_atlet`),
  ADD KEY `id_psikolog` (`id_psikolog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_rekam_medis` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
