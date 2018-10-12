-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.36
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_desi`
--

CREATE TABLE `t_desi` (
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `hobi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_desi`
--

INSERT INTO `t_desi` (`nim`, `kelas`, `jenis`, `hobi`, `fakultas`, `alamat`, `nama`) VALUES
('2147483647', '', 'Perempuan', 'B', 'FIT', 'Gang pga', ''),
('2147483647', 'kelas', 'Perempuan', 'A', 'FIK', 'bojongsoang', ''),
('2147483647', 'kelas', 'Laki-Laki', 'Naik Sepeda', 'FKB', 'bali', ''),
('2147483647', 'kelas', 'Perempuan', 'Membaca', 'FIT', 'vasdgjsc fj', ''),
('123456789', 'kelas', 'Perempuan', 'Berenang', 'FKB', 'vgfbckSBVJZvfhkh', ''),
('1234567889', 'D3MI-41-02', 'Perempuan', 'Bernyanyi', 'FIT', 'bandung', ''),
('2147483647', 'D3MI-41-01', 'Laki-Laki', 'Dengar Musik', 'FIK', 'medan', ''),
('2147483647', 'D3MI-41-01', 'Laki-Laki', 'Berenang', 'FIK', 'medan', ''),
('123456', 'D3MI-41-01', 'Laki-Laki', 'Membaca', 'FIK', 'bojongsoang', ''),
('6701174545', 'D3MI-41-01', 'Perempuan', 'Berenang', 'FEB', 'bali', ''),
('6701174545', 'D3MI-41-01', 'Perempuan', 'Berenang', 'FEB', 'bali', ''),
('6701174545', 'D3MI-41-01', 'Perempuan', 'Berenang', 'FEB', 'bali', ''),
('6701175678', 'D3MI-41-02', 'Laki-Laki', 'Berenang', 'FIK', 'padang', ''),
('6701178990', 'D3MI-41-02', 'Laki-Laki', 'Dengar Musik', 'FIK', 'bukit tinggi', ''),
('6701174141', 'D3MI-41-02', 'Perempuan', 'Membaca', 'FIT', 'gang pga', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
