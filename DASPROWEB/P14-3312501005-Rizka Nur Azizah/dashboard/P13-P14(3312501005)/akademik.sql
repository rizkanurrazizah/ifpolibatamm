-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2025 pada 09.31
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `file_pendukung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`nis`, `nama`, `jk`, `telepon`, `alamat`, `foto`, `file_pendukung`) VALUES
('3312501005', 'RIZKA NUR AZIZAH ', 'Perempuan', '0812 7690 3211', 'Perum Taman Teratai', 'pas foto rizka.jpg', 'P13. Mengolah File.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama`, `alamat`, `jabatan`) VALUES
('125331', 'Cyntia Lasmi Andesti, S.Kom., ', 'Anggrek Sari', 'Dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `angkatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `angkatan`) VALUES
('3312250113', 'Ririn Anisa', 'Teknik Informatika', '2025'),
('3312501003', 'Lulu', 'Manajemen Bisnis', '2025'),
('3312250100', 'Rizka Nur Azizah', 'Teknik Informatika', '2025');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nik` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bagian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nik`, `nama`, `bagian`) VALUES
('224345', 'Rhanna Mawira, S.E', 'Tata Usaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
('001', 'admin', '$2y$10$ByhNHy86IqvELXKzfPEQEeK.ZbGVKSgOhtgmI/uYp2JC6xTOqvKKa', 'admin'),
('002', 'rizkanur', '$2y$10$1xFEXCvXFallTDXYVoHUTe8oIWpxCwS4p04b2aEehGEx6Gg.CT5ki', 'mahasiswa'),
('003', 'Riza', '$2y$10$pY/6EtVxgrAI6xO0z5zJ3OdDGkDT6n3oBhTHvo5wKAscuByaYpeQm', 'dosen'),
('004', 'Miftahul', '$2y$10$7B.ZiUa4gnOND5fnP70rk.k1tzlzDlH7Fp/7k5dAg0BKRfkk4B4fe', 'pegawai'),
('006', 'lala', '$2y$10$MrwGNLI5aHzP73jrN7PQqO8SuypUqHSya1l2l02M16fnqhxs83aBq', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
