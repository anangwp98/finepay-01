-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2020 pada 17.17
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finepay`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ai-tahun`
--

CREATE TABLE `ai-tahun` (
  `id_tahun` varchar(20) NOT NULL,
  `top_tahun` year(4) NOT NULL,
  `bottom_tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`) VALUES
('BRG-1981474627SAMSUN', 'SAMSUNG A50 4/64GB', '3200000'),
('BRG-44965238SAMSUNG-', 'SAMSUNG A50S 4/128GB', '4050000'),
('BRG-641730404Acer-Sw', 'Acer Swift 3 SF314-41 Athlon 300U 4GB 256GB', '13999000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bunga`
--

CREATE TABLE `bunga` (
  `id_bunga` varchar(20) NOT NULL,
  `bunga_persen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bunga`
--

INSERT INTO `bunga` (`id_bunga`, `bunga_persen`) VALUES
('1', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dompet`
--

CREATE TABLE `dompet` (
  `id_dompet` varchar(15) NOT NULL,
  `id_user` varchar(15) DEFAULT NULL,
  `jenis_dompet` varchar(20) DEFAULT NULL,
  `saldo` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id_download` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id_download`, `nama`, `link`, `icon`, `warna`) VALUES
('DW-1855200447', 'Github', 'github.com', '<i class=\"fa fa-github\"></i>', 'btn-primary');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur`
--

CREATE TABLE `fitur` (
  `id_fitur` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `deksripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi_ai`
--

CREATE TABLE `klasifikasi_ai` (
  `id_klasifikasi` varchar(20) NOT NULL,
  `id_pesanan` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `dp` varchar(20) NOT NULL,
  `jml_bulan` varchar(11) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_topup`
--

CREATE TABLE `log_topup` (
  `id` varchar(20) NOT NULL,
  `tgl_diterima` datetime NOT NULL,
  `saldo_awal` bigint(20) NOT NULL,
  `saldo_akhir` bigint(20) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `id_topup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(10) NOT NULL,
  `id_dompet` varchar(10) DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `id_tagihan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_identity`
--

CREATE TABLE `personal_identity` (
  `id_personal_identity` varchar(20) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `ktm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `personal_identity`
--

INSERT INTO `personal_identity` (`id_personal_identity`, `id_user`, `ktp`, `ktm`) VALUES
('796791381', 'FNuser09122019-', '20200108_213036.jpg', '20200108_213001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(10) NOT NULL,
  `id_user` varchar(15) DEFAULT NULL,
  `id_barang` varchar(20) DEFAULT 'NULL',
  `tgl_pesanan` datetime DEFAULT NULL,
  `ket_pesanan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_img`
--

CREATE TABLE `profil_img` (
  `id_profil` varchar(15) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_img`
--

INSERT INTO `profil_img` (`id_profil`, `id_user`, `status`) VALUES
('1039287470', 'ADM001', '5e14393d1f4e24.52976601.png'),
('1394978707', 'FNuser09122019-', '5e14bd5a03a0c7.15088838.jpg'),
('2043718063', 'FNusr06012020-1', '5e137514d0b246.80588203.png'),
('545890484', 'FNrona123091220', '5e14396ba35e48.89262645.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_barang`
--

CREATE TABLE `proses_barang` (
  `id_barang` varchar(20) NOT NULL,
  `harga_top_barang` bigint(20) NOT NULL,
  `harga_botom_barang` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proses_barang`
--

INSERT INTO `proses_barang` (`id_barang`, `harga_top_barang`, `harga_botom_barang`) VALUES
('1', 10000000, 750000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_tagihan`
--

CREATE TABLE `proses_tagihan` (
  `id_tagihan` varchar(20) NOT NULL,
  `top_tagihan` bigint(20) NOT NULL,
  `bottom_tagihan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proses_tagihan`
--

INSERT INTO `proses_tagihan` (`id_tagihan`, `top_tagihan`, `bottom_tagihan`) VALUES
('1', 200000, 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_tahun`
--

CREATE TABLE `proses_tahun` (
  `id_tahun` varchar(20) NOT NULL,
  `tahun_top` year(4) NOT NULL,
  `tahun_bottom` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proses_tahun`
--

INSERT INTO `proses_tahun` (`id_tahun`, `tahun_top`, `tahun_bottom`) VALUES
('1', 2019, 2015);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_uang_muka`
--

CREATE TABLE `proses_uang_muka` (
  `id_uang_muka` varchar(20) NOT NULL,
  `top_uang_muka` bigint(20) NOT NULL,
  `bottom_uang_muka` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proses_uang_muka`
--

INSERT INTO `proses_uang_muka` (`id_uang_muka`, `top_uang_muka`, `bottom_uang_muka`) VALUES
('1', 7000000, 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` varchar(10) NOT NULL,
  `id_pesanan` varchar(10) DEFAULT NULL,
  `jml_dp` bigint(20) DEFAULT NULL,
  `jml_tagihan` bigint(20) DEFAULT NULL,
  `tgl_jatuh_tempo` date DEFAULT NULL,
  `jml_bulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `topup`
--

CREATE TABLE `topup` (
  `id_topup` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `jumlah_topup` bigint(20) DEFAULT NULL,
  `keterangan_topup` text DEFAULT NULL,
  `tanggal_topup` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transfer`
--

CREATE TABLE `transfer` (
  `id_transfer` varchar(10) NOT NULL,
  `id_dompet` varchar(10) DEFAULT NULL,
  `tgl_transfer` date DEFAULT NULL,
  `jumlah_transfer` bigint(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tglLahir` date DEFAULT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `angkatan` year(4) NOT NULL,
  `alamat` text DEFAULT NULL,
  `nomorTelp` varchar(12) DEFAULT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `tglLahir`, `jk`, `angkatan`, `alamat`, `nomorTelp`, `level`) VALUES
('ADM001', 'anangwp', 'ANANG WAHYU PRADANA', 'anangwahyupradanaofficial@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1998-01-01', 'P', 0000, 'AMBYAARRRRRASRARSARSJABSKAJBSAK', NULL, 'admin'),
('FNaditya2512201', 'aditya', 'Aditya Ramadhan', 'aditya@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '0000-00-00', 'L', 2017, 'Gunung Kidul', '082230381413', 'user'),
('FNanang12310601', 'anang1231', 'ANANG WAHYU PRADANA', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'L', 0000, NULL, NULL, 'user'),
('FNanangwp982512', 'anangwp98', 'ANANG WAHYU PRADANA', 'anangwahyupradanaofficial@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '0000-00-00', 'L', 0000, 'PONOROGO', '082230381413', 'user'),
('FNekanov0601202', 'ekanov', 'Eka Novitasari', 'eka@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'P', 2018, 'Yogyakarta', '082230381413', 'user'),
('FNfita06012020-', 'fita', 'Fita Dinasty', 'fita.dinasty@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'P', 2017, 'Cilacap', '082230381413', 'user'),
('FNrona123091220', 'rona123', 'M RONA SETYOWARDANI', 'rona.1125@students.amikom.ac.id', '689b6f533e39e77830b46315ab4cb501', '2019-12-01', 'L', 2019, 'Jl. Nusa Indah II no 57 Condong Catur, Sleman, Yogyakarta', '087758532425', 'admin'),
('FNrona123251220', 'rona123', 'M RONA SETYOWARDANI', 'rona.1125@students.amikom.ac.id', 'ee11cbb19052e40b07aac0ca060c23ee', '0000-00-00', 'L', 2014, 'MALUKU UTARA', '082230381413', 'user'),
('FNuser06012020-', 'user', 'Google Play', 'user@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00', 'L', 0000, NULL, NULL, 'user'),
('FNuser09122019-', 'user', 'USER TEST', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '2020-01-28', 'P', 2019, 'TEST ALAMAT', '', 'user'),
('FNusr06012020-1', 'usr', 'USER TEST', 'a@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '2020-01-11', 'P', 0000, 'TEST', NULL, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `website`
--

CREATE TABLE `website` (
  `id_website` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ai-tahun`
--
ALTER TABLE `ai-tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `bunga`
--
ALTER TABLE `bunga`
  ADD PRIMARY KEY (`id_bunga`);

--
-- Indeks untuk tabel `dompet`
--
ALTER TABLE `dompet`
  ADD PRIMARY KEY (`id_dompet`),
  ADD KEY `dompet` (`id_user`);

--
-- Indeks untuk tabel `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indeks untuk tabel `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id_fitur`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `klasifikasi_ai`
--
ALTER TABLE `klasifikasi_ai`
  ADD PRIMARY KEY (`id_klasifikasi`),
  ADD UNIQUE KEY `id_pesanan_2` (`id_pesanan`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indeks untuk tabel `log_topup`
--
ALTER TABLE `log_topup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_topup` (`id_topup`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayaran` (`id_dompet`),
  ADD KEY `id_tagihan` (`id_tagihan`);

--
-- Indeks untuk tabel `personal_identity`
--
ALTER TABLE `personal_identity`
  ADD PRIMARY KEY (`id_personal_identity`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `profil_img`
--
ALTER TABLE `profil_img`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `proses_barang`
--
ALTER TABLE `proses_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `proses_tagihan`
--
ALTER TABLE `proses_tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indeks untuk tabel `proses_tahun`
--
ALTER TABLE `proses_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `proses_uang_muka`
--
ALTER TABLE `proses_uang_muka`
  ADD PRIMARY KEY (`id_uang_muka`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indeks untuk tabel `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`id_topup`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id_transfer`),
  ADD KEY `transfer` (`id_dompet`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id_website`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dompet`
--
ALTER TABLE `dompet`
  ADD CONSTRAINT `dompet` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `fitur`
--
ALTER TABLE `fitur`
  ADD CONSTRAINT `fitur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `klasifikasi_ai`
--
ALTER TABLE `klasifikasi_ai`
  ADD CONSTRAINT `klasifikasi_ai_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `log_topup`
--
ALTER TABLE `log_topup`
  ADD CONSTRAINT `log_topup_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `log_topup_ibfk_2` FOREIGN KEY (`id_topup`) REFERENCES `topup` (`id_topup`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran` FOREIGN KEY (`id_dompet`) REFERENCES `dompet` (`id_dompet`),
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_tagihan`) REFERENCES `tagihan` (`id_tagihan`);

--
-- Ketidakleluasaan untuk tabel `personal_identity`
--
ALTER TABLE `personal_identity`
  ADD CONSTRAINT `personal_identity_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `id_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `profil_img`
--
ALTER TABLE `profil_img`
  ADD CONSTRAINT `profil_img_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `id_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);

--
-- Ketidakleluasaan untuk tabel `topup`
--
ALTER TABLE `topup`
  ADD CONSTRAINT `topup_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `transfer` FOREIGN KEY (`id_dompet`) REFERENCES `dompet` (`id_dompet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
