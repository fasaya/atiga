-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2020 pada 11.51
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_allweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `back_info`
--

CREATE TABLE `back_info` (
  `id_info` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nilai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `back_info`
--

INSERT INTO `back_info` (`id_info`, `kode`, `nama`, `nilai`) VALUES
(1, 'nama_web', 'nama website', 'PT Atiga Karya Berjaya'),
(2, 'alamat', 'alamat', 'Jalan .... No. X Blok X'),
(3, 'email', 'Email', 'contoh@email.com'),
(4, 'email_cs', 'Email CS', 'contoh@email.com'),
(5, 'no_tlp', 'Nomor Telepon', '081234567890'),
(6, 'no_wa', 'Nomor Whatsapp', '081234567890');

-- --------------------------------------------------------

--
-- Struktur dari tabel `back_isi`
--

CREATE TABLE `back_isi` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nilai` longtext NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `back_isi`
--

INSERT INTO `back_isi` (`id`, `id_menu`, `kode`, `nama`, `nilai`, `status`) VALUES
(1, 1, 'banner_1_text_atas', 'Banner 1: Text atas', 'PT ATIGA', '1'),
(2, 1, 'banner_1_text_bawah', 'Banner 1: Text bawah', 'KARYA BERJAYA', '1'),
(3, 1, 'banner_1_text_kecil', 'Banner 1: Text kecil', 'Suspendisse et justo. Praesent mattis commodo.', '1'),
(4, 1, 'banner_2_text_atas', 'Banner 2: Text atas', 'PT ATIGA', '1'),
(5, 1, 'banner_2_text_bawah', 'Banner 2: Text bawah', 'KARYA BERJAYA', '1'),
(6, 1, 'banner_2_text_kecil', 'Banner 2: Text kecil', 'Suspendisse et justo. Praesent mattis commodo.', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `back_login`
--

CREATE TABLE `back_login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `keterangan` enum('admin') NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `back_login`
--

INSERT INTO `back_login` (`id_user`, `username`, `password`, `keterangan`, `email`) VALUES
(1, 'admin', '$2y$10$uU3FUHwq6JDhTAUqx39FIeHEQJDe2y5v3vBtndkTS.MbzorWTZQDW', 'admin', 'adminweb@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `back_menu`
--

CREATE TABLE `back_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `back_menu`
--

INSERT INTO `back_menu` (`id_menu`, `nama_menu`) VALUES
(1, 'Menu'),
(2, 'About'),
(3, 'Contact Us'),
(4, 'Gallery');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `id_tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `judul`, `keterangan`, `file_name`, `id_tipe`) VALUES
(5, 'Judul', '', 'gly_5e563d037e8ca3_32578446.png', 2),
(6, 'asass1', 'ss11', 'gly_5e563df889ec91_58026888.jpeg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery_tipe`
--

CREATE TABLE `tb_gallery_tipe` (
  `id_tipe` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gallery_tipe`
--

INSERT INTO `tb_gallery_tipe` (`id_tipe`, `tipe`) VALUES
(1, 'Other'),
(2, 'Tipe 1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `back_info`
--
ALTER TABLE `back_info`
  ADD PRIMARY KEY (`id_info`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indeks untuk tabel `back_isi`
--
ALTER TABLE `back_isi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indeks untuk tabel `back_login`
--
ALTER TABLE `back_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `back_menu`
--
ALTER TABLE `back_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`),
  ADD KEY `tipe` (`id_tipe`);

--
-- Indeks untuk tabel `tb_gallery_tipe`
--
ALTER TABLE `tb_gallery_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `back_info`
--
ALTER TABLE `back_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `back_isi`
--
ALTER TABLE `back_isi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `back_login`
--
ALTER TABLE `back_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `back_menu`
--
ALTER TABLE `back_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_gallery_tipe`
--
ALTER TABLE `tb_gallery_tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `back_isi`
--
ALTER TABLE `back_isi`
  ADD CONSTRAINT `back_isi_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `back_menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD CONSTRAINT `tb_gallery_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tb_gallery_tipe` (`id_tipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
