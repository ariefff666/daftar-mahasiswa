-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2023 pada 04.55
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `domisili_kampus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `nim`, `nama_mahasiswa`, `jenis_kelamin`, `fakultas`, `jurusan`, `alamat`, `domisili_kampus`) VALUES
(1, '09021182328020', 'Muhammad Arief Pratama', 'Laki-laki', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 'Komplek Permata Baru Blok F7 No.5, Indralaya Utara, Ogan Ilir, Sumatera Selatan', 'Indralaya'),
(2, '09021182328015', 'Muhammad Ilham Syafik', 'Laki-laki', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 'Palembang', 'Indralaya'),
(3, '09021182328014', 'Muhammad Zakaa Shahzada', 'Laki-laki', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 'Banyuasin', 'Indralaya'),
(4, '09021182328013', 'R.A Nur Afifah Widyadhana', 'Perempuan', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 'Muara Enim', 'Indralaya'),
(5, '09021282328069', 'Putri Alimah Azizah', 'Perempuan', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 'Palembang', 'Indralaya'),
(25, '09021182328021', 'Syakira Febriani', 'Perempuan', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 'Palembang', 'Indralaya'),
(26, '090211823280', 'A', 'Laki-laki', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 'Palembang', 'Indralaya'),
(27, '090211823280', 'Bima', 'Laki-laki', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 'Lubuk Linggau', 'Indralaya'),
(28, '090211823280', 'C', 'Laki-laki', 'Fakultas Ilmu Komputer', 'Teknik Informatika', 'Palembang', 'Indralaya'),
(29, 'qw', 'qd', 'Laki-laki', 'zc', 'zcd', 'zc', 'Indralaya'),
(31, '090211823280', 'Hilda', 'Perempuan', 'fasilkom', 'informatika', 'BANDung', 'Palembang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
