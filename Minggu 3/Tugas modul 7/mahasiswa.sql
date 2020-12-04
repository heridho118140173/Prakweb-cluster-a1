-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2020 pada 17.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `ID_Jur` varchar(10) NOT NULL,
  `Nama Jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`ID_Jur`, `Nama Jurusan`) VALUES
('ELI03', 'Elin'),
('ELK02', 'Elka'),
('IT04', 'IT'),
('TEL01', 'Telekomunikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NRP` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Foto` varchar(25) NOT NULL,
  `ID_Jur` varchar(10) NOT NULL,
  `Nama Jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NRP`, `Nama`, `Alamat`, `Foto`, `ID_Jur`, `Nama Jurusan`) VALUES
('118140000', 'Tony stark', 'losangels', 'hadadlt.jpg', 'ELK02', 'Elka'),
('118140173', 'Heridho', 'Balam', 'herido.jpg', 'IT04', 'IT'),
('118140999', 'tor', 'gg.cedikiawan', 'afat7.jpg', 'TEL01', 'Telekomunikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`ID_Jur`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NRP`),
  ADD KEY `ID_Jur` (`ID_Jur`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `ID_Jur` FOREIGN KEY (`ID_Jur`) REFERENCES `jurusan` (`ID_Jur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
