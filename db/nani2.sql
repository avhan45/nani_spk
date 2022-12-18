-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Nov 2022 pada 16.17
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nani2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crips`
--

CREATE TABLE `crips` (
  `id_crips` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `crips` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `crips`
--

INSERT INTO `crips` (`id_crips`, `id_kriteria`, `crips`, `nilai`) VALUES
(1, 1, 'Menyususn rencana pembelajaran dengan baik', '1'),
(2, 1, 'Melaksanakan pembelajaran dengan baik', '1'),
(3, 1, 'Menerapkan pembelajaran yang mendidik', '1'),
(4, 1, 'Mampu mengembangkan kurikulum dengan baik', '1'),
(5, 1, 'Melakukan penilaian dan mengevaluasi peserta didik', '1'),
(6, 2, 'Berperilaku sesuai dengan nilai dan norma', '1'),
(7, 2, 'Bertanggung jawab', '1'),
(8, 2, 'mempunyai jiwa kepemimpinan', '1'),
(9, 2, 'Mandiri dan bijaksana', '1'),
(10, 2, 'Mampu bekerja sama dalam tim', '1'),
(11, 4, 'Menguasai materi pelajaran dengan baik', '1'),
(12, 4, 'Menguasai standar kompetensi (SK), Kompetensi Dasar (KD),  dan tujuan pembelajaran dengan baik', '1'),
(13, 4, 'Mampu mengembangkan materi pelajaran dengan kreatif', '1'),
(14, 4, 'Mampu memanfaatkan teknologi informasi dan komunikasi dalam proses pembelajaran', '1'),
(15, 5, 'Mampu menjalin hubungan dengan teman sejawat dan atasan', '1'),
(16, 5, 'Mampu menjalin hubungan dengan peserta didik dan orang tua peserta didik', '1'),
(17, 5, 'Mampu berkomunikasi dengan efektif menggunakan bahasa yang santun', '1'),
(18, 6, 'Hadir tepat waktu disekolah', '1'),
(19, 6, 'Masuk mengajar tepat waktu', '1'),
(20, 6, 'Mengakhiri pembelajaran tepat waktu', '1'),
(21, 6, 'Rapi dalam berpenampilan', '1'),
(22, 5, 'Mampu menjalin hubungan dengan peserta didik dan orang tua peserta didik', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `nip`, `jabatan`) VALUES
(15, 'ANDRIANI, S.Pd', '4035768669230230', 'a'),
(16, 'BASNES', '2450589504004940', 'b'),
(17, 'DARLIA, S.Pd', '2747770671130090', 'c'),
(18, 'DAUD, S.Pd', '4927347283044480', 'd'),
(19, 'ERNI, S.Si', '1231231', 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kd_kriteria` varchar(50) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `attribut` varchar(50) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kd_kriteria`, `nama_kriteria`, `attribut`, `bobot`) VALUES
(1, 'C1', 'nilai keterampilan mengajar', 'benefit', 30),
(2, 'C2', 'nilai kepribadian', 'benefit', 25),
(4, 'C3', 'nilai profesional', 'benefit', 20),
(5, 'C4', 'nilai sosial', 'benefit', 15),
(6, 'C5', 'nilai kedisiplinan', 'benefit', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_guru`, `id_kriteria`, `nilai`) VALUES
(2, 15, 1, '5'),
(3, 15, 2, '4'),
(4, 15, 4, '3'),
(5, 15, 5, '3'),
(6, 15, 6, '2'),
(7, 16, 1, '4'),
(8, 16, 2, '3'),
(9, 16, 4, '3'),
(10, 16, 5, '3'),
(11, 16, 6, '2'),
(12, 17, 1, '5'),
(13, 17, 2, '4'),
(14, 17, 4, '3'),
(15, 17, 5, '4'),
(16, 17, 6, '3'),
(17, 18, 1, '4'),
(18, 18, 2, '4'),
(19, 18, 4, '2'),
(20, 18, 5, '3'),
(21, 18, 6, '2'),
(22, 19, 1, '4'),
(23, 19, 2, '5'),
(24, 19, 4, '3'),
(25, 19, 5, '3'),
(26, 19, 6, '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `normalisasi`
--

CREATE TABLE `normalisasi` (
  `id_normalisasi` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai_normalisasi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `normalisasi`
--

INSERT INTO `normalisasi` (`id_normalisasi`, `id_guru`, `id_kriteria`, `nilai_normalisasi`) VALUES
(157, 15, 1, '1.00'),
(158, 15, 2, '0.80'),
(159, 15, 4, '1.00'),
(160, 15, 5, '0.75'),
(161, 15, 6, '0.50'),
(162, 16, 1, '0.80'),
(163, 16, 2, '0.60'),
(164, 16, 4, '1.00'),
(165, 16, 5, '0.75'),
(166, 16, 6, '0.50'),
(167, 17, 1, '1.00'),
(168, 17, 2, '0.80'),
(169, 17, 4, '1.00'),
(170, 17, 5, '1.00'),
(171, 17, 6, '0.75'),
(172, 18, 1, '0.80'),
(173, 18, 2, '0.80'),
(174, 18, 4, '0.67'),
(175, 18, 5, '0.75'),
(176, 18, 6, '0.50'),
(177, 19, 1, '0.80'),
(178, 19, 2, '1.00'),
(179, 19, 4, '1.00'),
(180, 19, 5, '0.75'),
(181, 19, 6, '1.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id_perhitungan` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai_perhitungan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perhitungan`
--

INSERT INTO `perhitungan` (`id_perhitungan`, `id_guru`, `id_kriteria`, `nilai_perhitungan`) VALUES
(151, 15, 1, 0.3),
(152, 16, 1, 0.24),
(153, 17, 1, 0.3),
(154, 18, 1, 0.24),
(155, 19, 1, 0.24),
(156, 15, 2, 0.2),
(157, 16, 2, 0.15),
(158, 17, 2, 0.2),
(159, 18, 2, 0.2),
(160, 19, 2, 0.25),
(161, 15, 4, 0.2),
(162, 16, 4, 0.2),
(163, 17, 4, 0.2),
(164, 18, 4, 0.134),
(165, 19, 4, 0.2),
(166, 15, 5, 0.1125),
(167, 16, 5, 0.1125),
(168, 17, 5, 0.15),
(169, 18, 5, 0.1125),
(170, 19, 5, 0.1125),
(171, 15, 6, 0.05),
(172, 16, 6, 0.05),
(173, 17, 6, 0.075),
(174, 18, 6, 0.05),
(175, 19, 6, 0.1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rangking`
--

CREATE TABLE `rangking` (
  `id_rangking` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nilai_rangking` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rangking`
--

INSERT INTO `rangking` (`id_rangking`, `id_guru`, `nilai_rangking`) VALUES
(126, 0, ''),
(127, 15, '0.86250001'),
(128, 16, '0.75250000'),
(129, 17, '0.92500002'),
(130, 18, '0.73649999'),
(131, 19, '0.90249999');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crips`
--
ALTER TABLE `crips`
  ADD PRIMARY KEY (`id_crips`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD PRIMARY KEY (`id_normalisasi`);

--
-- Indeks untuk tabel `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id_perhitungan`);

--
-- Indeks untuk tabel `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`id_rangking`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `crips`
--
ALTER TABLE `crips`
  MODIFY `id_crips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `normalisasi`
--
ALTER TABLE `normalisasi`
  MODIFY `id_normalisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT untuk tabel `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id_perhitungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT untuk tabel `rangking`
--
ALTER TABLE `rangking`
  MODIFY `id_rangking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
