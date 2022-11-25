-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2022 pada 12.12
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_masuk`
--

CREATE TABLE `siswa_masuk` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa_masuk`
--

INSERT INTO `siswa_masuk` (`nis`, `nama`, `alamat`, `tgl_masuk`) VALUES
('10110470110', 'Ade Zenudin Bimashita', 'Tegal', '2022-04-01'),
('10110470111', 'Ani Lestari', 'Jakarta', '2022-04-02'),
('10110470112', 'Imam Maulana', 'Bandung', '2022-04-03'),
('10110470113', 'Siska Melina Rachman', 'Bandung', '2022-04-01'),
('10110470114', 'Diki Somantri', 'Padang', '2022-04-02'),
('10110470115', 'Shanty', 'Purwakarta', '2022-04-03'),
('10110470116', 'Rinrin Rosilawati', 'Banten', '2022-04-01'),
('10110470117', 'Anas Saepul', 'Jakarta', '2022-04-02'),
('10110470118', 'Firman Ramdhan', 'Solo', '2022-04-03'),
('10110470119', 'Nadya Nur Syahbandi', 'Garut', '2022-04-01'),
('10110470120', 'Yayat', 'Garut', '2022-04-02'),
('10110470121', 'Anjas Yuwar Mahesa', 'Tangerang', '2022-04-03'),
('10110470122', 'Yusup Nur Permadi', 'Bandung', '2022-04-01'),
('10110470123', 'Mawar Izzati', 'Yogyakarta', '2022-04-02'),
('10110470125', 'Ayuni Anggraeni', 'Solo', '2022-04-01'),
('10110470126', 'Anika Rizka', 'Lombok', '2022-04-03'),
('10110470127', 'Rijalul', 'Padang', '2022-04-02'),
('10110470128', 'Dwi Angga', 'Bandung', '2022-04-01'),
('10110470129', 'Rizaldi Maulidia Achmad', 'Sumedang', '2022-04-03'),
('10110470130', 'Siti Nurjanah', 'Bogor', '2022-04-03'),
('10110470131', 'Rinrin Rosilawati', 'Sumedang', '2022-04-02'),
('10110470132', 'Nabhan', 'Ciamis', '2022-04-03'),
('10110470133', 'Samba Ilham', 'Bandung', '2022-04-01'),
('10110470134', 'Asep Dadan', 'Garut', '2022-04-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_nabung`
--

CREATE TABLE `siswa_nabung` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tabungan` int(10) NOT NULL,
  `tgl_nabung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa_nabung`
--

INSERT INTO `siswa_nabung` (`nis`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `tabungan`, `tgl_nabung`) VALUES
('10110470110', 'Ade Zenudin Bimashita', '1', '08199288272', 'Tegal', 5000000, '2022-04-01'),
('10110470111', 'Ani Lestari', '2', '089228827727', 'Jakarta', 750000, '2022-04-02'),
('10110470112', 'Imam Maulana', '1', '08561777166', 'Bandung', 600000, '2022-04-03'),
('10110470113', 'Siska Melina Rachman', '2', '0828817717', 'Bandung', 800000, '2022-04-01'),
('10110470114', 'Diki Somantri', '1', '081662662771', 'Padang', 650000, '2022-04-02'),
('10110470115', 'Shanty', '2', '08552662771', 'Purwakarta', 450000, '2022-04-03'),
('10110470116', 'Rinrin Rosilawati', '2', '082661551551', 'Banten', 350000, '2022-04-01'),
('10110470117', 'Anas Saepul', '1', '089988181717', 'Jakarta', 800000, '2022-04-02'),
('10110470118', 'Firman Ramdhan', '1', '089918827635', 'Solo', 750000, '2022-04-03'),
('10110470119', 'Nadya Nur Syahbandi', '2', '085661557281', 'Garut', 800000, '2022-04-01'),
('10110470120', 'Yayat', '1', '089928827151', 'Garut', 750000, '2022-04-02'),
('10110470121', 'Anjas Yuwar Mahesa', '1', '089166255151', 'Tangerang', 750000, '2022-04-03'),
('10110470122', 'Yusup Nur Permadi', '1', '081172652441', 'Bandung', 800000, '2022-04-01'),
('10110470123', 'Mawar Izzati', '2', '088726166122', 'Yogyakarta', 650000, '2022-04-02'),
('10110470125', 'Ayuni Anggraeni', '2', '085516616611', 'Solo', 750000, '2022-04-01'),
('10110470126', 'Anika Rizka', '2', '082635534778', 'Lombok', 800000, '2022-04-03'),
('10110470127', 'Rijalul', '1', '089918826535', 'Padang', 750000, '2022-04-02'),
('10110470128', 'Dwi Angga', '1', '081552171888', 'Bandung', 800000, '2022-04-01'),
('10110470129', 'Rizaldi Maulidia Achmad', '1', '089283773622', 'Sumedang', 650000, '2022-04-03'),
('10110470130', 'Siti Nurjanah', '2', '0898271728171', 'Bogor', 470000, '2022-04-03'),
('10110470131', 'Rinrin Rosilawati', '2', '0852514245181', 'Sumedang', 800000, '2022-04-02'),
('10110470132', 'Nabhan', '1', '0817261661273', 'Ciamis', 650000, '2022-04-03'),
('10110470133', 'Samba Ilham', '1', '081662772525', 'Bandung', 800000, '2022-04-01'),
('10110470134', 'Asep Dadan', '1', '08977266252', 'Garut', 650000, '2022-04-02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa_nabung`
--
ALTER TABLE `siswa_nabung`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
