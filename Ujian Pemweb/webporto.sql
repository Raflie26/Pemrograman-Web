-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2021 at 12:22 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webporto`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `konten` text NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`konten`, `deskripsi`, `link`, `gambar`) VALUES
('Tentang Saya', 'Perkenalkan, nama saya Raflie. Saya berumur 20 tahun, dan tinggal di daerah Jakarta Selatan. Saya memiliki ketertarikan kepada Game dan IT.', './contact.php', './images/raflie.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `konten` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`konten`, `deskripsi`, `gambar`) VALUES
('Outro Esports Season 2 PUBGM Tournament', 'Berhasil masuk 16 besar dari 74 tim.', './images/pubg_1.jpg'),
('DAC League Tournament', 'Berhasil masuk ke babak final.', './images/pubg_2.jpg'),
('Mini Gemu Tournament', 'Berhasil menjadi Runner-Up', './images/pubg_3.jpg'),
('Casanova Toxic Tournament Season 1', '1st Place.', './images/pubg_4.jpg'),
('PMJC Online Tournament Season 9', 'Posisi 2', './images/pubg_5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `nama` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`nama`, `deskripsi`) VALUES
('Raflie Firmansyah H.', 'Seorang Mahasiswa, jurusan Informatika.');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `konten` text NOT NULL,
  `deskripsi` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`konten`, `deskripsi`, `email`) VALUES
('Hubungi Saya', 'Untuk lebih detail mengenai saya atau partnership dapat langsung menghubungi saya melalui e-mail dibawah ini.', 'rfh098@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`icon`) VALUES
('fab fa-html5'),
('fab fa-css3-alt'),
('fab fa-python'),
('fab fa-java'),
('fab fa-php');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
