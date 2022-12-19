-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2022 pada 04.33
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

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
  `keterangan` varchar(10) NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `crips`
--

INSERT INTO `crips` (`id_crips`, `id_kriteria`, `crips`, `keterangan`, `nilai`) VALUES
(2, 1, 'Menyusun dan membuat rencana pembelajaran', 'A', '35'),
(3, 1, 'Melakukan penilaian dan mengevaluasi peserta didik', 'B', '25'),
(4, 1, 'mengembangkan kurikulum dengan baik', 'C', '20'),
(5, 1, 'Menerapkan pembelajaran yang mendidik', 'D', '10'),
(6, 1, 'Melaksanakan pembelajaran dengan baik', 'E', '10'),
(8, 2, 'Berperilaku sesuai dengan nilai dan norma', 'A', '30'),
(9, 2, 'Tegas dan Bertanggung jawab', 'B', '20'),
(10, 2, 'Mampu bekerja sama dalam tim', 'C', '20'),
(11, 2, 'mempunyai jiwa kepemimpinan', 'D', '20'),
(12, 2, 'Mandiri dan bijaksana', 'E', '10'),
(13, 4, 'Menguasai materi pelajaran dengan baik', 'A', '40'),
(14, 4, 'Menguasai standar kompetensi (SK), Kompetensi Dasar (KD),  dan tujuan pembelajaran dengan baik', 'B', '30'),
(15, 4, 'Mampu mengembangkan materi pelajaran dengan kreatif', 'C', '20'),
(16, 4, 'Mampu memanfaatkan teknologi informasi dan komunikasi dalam proses pembelajaran', 'D', '10'),
(17, 5, 'Mampu berkomunikasi dan bergaul secara efektif dengan sesama pendidik, tenaga kependidikan dan atasa', 'A', '40'),
(18, 5, 'Mampu bergaul dan berkomunikasi secara efektif dengan peserta didik, orang tua peserta didik dan mas', 'B', '30'),
(19, 5, 'Mampu berkomunikasi dengan baik secara lisan, tulisan dan isyarat. ', 'C', '20'),
(20, 5, 'mampu dalam mengambil keputusan dengan baik', 'D', '10'),
(21, 6, 'melaksanakan tata tertib sekolah dengan baik', 'A', '40'),
(22, 6, 'tepat waktu dalam mengajar', 'B', '30'),
(23, 6, 'Mengakhiri pembelajaran tepat waktu', 'C', '20'),
(24, 6, 'Rapi dalam berpenampilan', 'D', '10');

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
(4, 'C3', 'nilai profesional', 'benefit', 15),
(5, 'C4', 'nilai sosial', 'benefit', 20),
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
(4, 15, 4, '4'),
(5, 15, 5, '4'),
(6, 15, 6, '5'),
(7, 16, 1, '4'),
(8, 16, 2, '3'),
(9, 16, 4, '3'),
(10, 16, 5, '3'),
(11, 16, 6, '2'),
(12, 17, 1, '5'),
(13, 17, 2, '3'),
(14, 17, 4, '4'),
(15, 17, 5, '3'),
(16, 17, 6, '5'),
(18, 18, 1, '4'),
(19, 18, 2, '3'),
(20, 18, 4, '2'),
(21, 18, 5, '3'),
(22, 18, 6, '2'),
(23, 19, 1, '4'),
(24, 19, 2, '3'),
(25, 19, 4, '3'),
(26, 19, 5, '3'),
(27, 19, 6, '3');

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
(1, 15, 1, '1.00'),
(2, 15, 2, '1.00'),
(3, 15, 4, '1.00'),
(4, 15, 5, '1.00'),
(5, 15, 6, '1.00'),
(6, 16, 1, '0.80'),
(7, 16, 2, '0.75'),
(8, 16, 4, '0.75'),
(9, 16, 5, '0.75'),
(10, 16, 6, '0.40'),
(11, 17, 1, '1.00'),
(12, 17, 2, '0.75'),
(13, 17, 4, '1.00'),
(14, 17, 5, '0.75'),
(15, 17, 6, '1.00'),
(16, 18, 1, '0.80'),
(17, 18, 2, '0.75'),
(18, 18, 4, '0.50'),
(19, 18, 5, '0.75'),
(20, 18, 6, '0.40'),
(21, 19, 1, '0.80'),
(22, 19, 2, '0.75'),
(23, 19, 4, '0.75'),
(24, 19, 5, '0.75'),
(25, 19, 6, '0.60');

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
(1, 15, 1, 0.3),
(2, 16, 1, 0.24),
(3, 17, 1, 0.3),
(4, 18, 1, 0.24),
(5, 19, 1, 0.24),
(6, 15, 2, 0.25),
(7, 16, 2, 0.1875),
(8, 17, 2, 0.1875),
(9, 18, 2, 0.1875),
(10, 19, 2, 0.1875),
(11, 15, 4, 0.2),
(12, 16, 4, 0.15),
(13, 17, 4, 0.2),
(14, 18, 4, 0.1),
(15, 19, 4, 0.15),
(16, 15, 5, 0.15),
(17, 16, 5, 0.1125),
(18, 17, 5, 0.1125),
(19, 18, 5, 0.1125),
(20, 19, 5, 0.1125),
(21, 15, 6, 0.1),
(22, 16, 6, 0.04),
(23, 17, 6, 0.1),
(24, 18, 6, 0.04),
(25, 19, 6, 0.06);

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
(1, 0, ''),
(2, 15, '1.00000002'),
(3, 16, '0.72999999'),
(4, 17, '0.90000001'),
(5, 18, '0.67999999'),
(6, 19, '0.74999999');

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
  MODIFY `id_crips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `normalisasi`
--
ALTER TABLE `normalisasi`
  MODIFY `id_normalisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id_perhitungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `rangking`
--
ALTER TABLE `rangking`
  MODIFY `id_rangking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
