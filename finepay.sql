-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 02:58 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

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
-- Table structure for table `ai-tahun`
--

CREATE TABLE `ai-tahun` (
  `id_tahun` varchar(20) NOT NULL,
  `top_tahun` year(4) NOT NULL,
  `bottom_tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`) VALUES
('BRG-1011479052Xiaomi', 'Xiaomi Redmi Note 8 (4gb/64gb)', '2299000'),
('BRG-1023517390Realme', 'Realme C2 Ram 3gb Rom 32gb Grsi Resmi 1thn', '1599000'),
('BRG-1217635846Iphone', 'Iphone 7 128Gb Second Original', '4250000'),
('BRG-1229270274Realme', 'Realme 5pro 8/128 Garansi Resmi Realme 1th', '3700000'),
('BRG-125009640Asus-X5', 'Asus X540na Gq017-Intel N3350-4gb Ram-Hdd 500gb-Sl', '3882700'),
('BRG-1250599343Iphone', 'Iphone 6 64gb', '2800000'),
('BRG-1280549768Ninten', 'Nintendo Switch Console Neon New Model Hac-001(-01', '4399000'),
('BRG-1450271115Xiaomi', 'Xiaomi Redmi Note 7 4/64 Ram 4gb Rom 64gb Garansi ', '2099000'),
('BRG-1472935343Alctro', 'Alctron U48 U 48 Soundcard 2 Channel Sound Card Au', '1449999'),
('BRG-1583552258Xiaomi', 'Xiaomi Redmi K20 Pro / K2pro Ram 6gb Rom 64gb - Me', '5299000'),
('BRG-1689383374Realme', 'Realme 5pro 4/128 Garansi Resmi 1th New Segel', '3000000'),
('BRG-1820170034Iphone', 'Iphone 6s+ 128gb New Refurbish', '4800000'),
('BRG-1856862737Canon-', 'Canon 650d Kit 18-55 Iii', '4250000'),
('BRG-1874766167Naka-M', 'Naka Mokka Sandals', '299000'),
('BRG-1883065413Oppo-A', 'Oppo A5s - Black - Ram 3gb -32gb', '1899000'),
('BRG-1916477574Amd-Ry', 'Amd Ryzen 5 2600 Gen 2 Pinnacle Ridge Wraith Coole', '2090000'),
('BRG-1917663599Iphone', 'Iphone 7 128gb', '4500000'),
('BRG-1946209917Iphone', 'Iphone 7 32gb Ex Internasional Silent Camera Secon', '3790000'),
('BRG-1981474627SAMSUN', 'SAMSUNG A50 4/64GB', '3200000'),
('BRG-2057436592Samsun', 'Samsung A50s 6/128 Grnsi Sein', '4899000'),
('BRG-2064828519Samsun', 'Samsung Galaxy A50 [4/64gb] - White', '3369000'),
('BRG-2081149019Xiaomi', 'Xiaomi Redmi Note 8 Ram 4 64 Garansi Resmi', '2475000'),
('BRG-2092745720Samsun', 'Samsung A30 Ram 4gb 64gb Garansi Resmi Sein Samsun', '2495000'),
('BRG-234913268Iphone-', 'Iphone 7 32gb Ex Internasional Silent Camera Secon', '3690000'),
('BRG-263500223Realme-', 'Realme 3 [Mediatek Helio P60 4230mah Battery', '1999000'),
('BRG-381999884Apple-I', 'Apple Iphone 11 64gb Original 64 Gb New', '11990000'),
('BRG-388221012Convers', 'Converse Chuck Taylor All Star - Ox - White - Conm', '559000'),
('BRG-416423740Xiaomi-', 'Xiaomi Redmi Note 5 64gb - Ram 4gb Memory 64 Gb', '1930000'),
('BRG-434869298Samsung', 'Samsung Ssd 860evo 1tb / 2.5\" Sata / 860 Evo Ssd /', '2699000'),
('BRG-44965238SAMSUNG-', 'SAMSUNG A50S 4/128GB', '4050000'),
('BRG-488087153Vivo-Y1', 'Vivo Y12 3/64 Triple Camera Grnsi Resmi 1thn', '2199000'),
('BRG-490115408Hp-Redm', 'Hp Redmi Note 7 Ram 4/64 Tam - Hitam', '2505000'),
('BRG-494644206Oppo-A5', 'Oppo A5 2020 3/64 Garansi Resmi Oppo 1th New Segel', '2399000'),
('BRG-546774578Laptop-', 'Laptop Hp Elitebook Folio 1040 Core I5', '3700000'),
('BRG-606028349Digital', 'Digital Alliance Meca Warrior Tkl Rgb Mechanical G', '419000'),
('BRG-6262794Iphone-6s', 'Iphone 6s 32gb Original Garansi Distributor', '2500000'),
('BRG-641730404Acer-Sw', 'Acer Swift 3 SF314-41 Athlon 300U 4GB 256GB', '13999000'),
('BRG-657942510Iphone-', 'Iphone 7 32gb Mate Black Mulus', '3181500'),
('BRG-67023091Sepatu-R', 'Sepatu Running - Adidas Duramo 9 Original Bb7066 B', '558000'),
('BRG-727354124Xiaomi-', 'Xiaomi Redmi Note 7 [4/64] Garansi Distributor - B', '2425000'),
('BRG-735380328Iphone-', 'Iphone Xr 256gb Second Original', '11480000'),
('BRG-777006793Iphone-', 'Iphone 8 Plus 64gb Second Original Mulus Perfect G', '7490000'),
('BRG-840514728Apple-I', 'Apple Iphone 6s, Fully Unlocked, 64gb Rose Gold 64', '2950000');

-- --------------------------------------------------------

--
-- Table structure for table `bunga`
--

CREATE TABLE `bunga` (
  `id_bunga` varchar(20) NOT NULL,
  `bunga_persen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bunga`
--

INSERT INTO `bunga` (`id_bunga`, `bunga_persen`) VALUES
('1', 20);

-- --------------------------------------------------------

--
-- Table structure for table `dompet`
--

CREATE TABLE `dompet` (
  `id_dompet` varchar(15) NOT NULL,
  `id_user` varchar(15) DEFAULT NULL,
  `jenis_dompet` varchar(20) DEFAULT NULL,
  `saldo` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dompet`
--

INSERT INTO `dompet` (`id_dompet`, `id_user`, `jenis_dompet`, `saldo`) VALUES
('1211', 'FNuser09122019-', NULL, 300289180),
('WL-231176919', 'ADM001', 'ANANG WAHYU PRADANA', 189900000);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id_download`, `nama`, `link`, `icon`, `warna`) VALUES
('DW-2092585892', 'Google Play', 'play.google.com', '', 'btn-white');

-- --------------------------------------------------------

--
-- Table structure for table `fitur`
--

CREATE TABLE `fitur` (
  `id_fitur` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `deksripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi_ai`
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

--
-- Dumping data for table `klasifikasi_ai`
--

INSERT INTO `klasifikasi_ai` (`id_klasifikasi`, `id_pesanan`, `harga`, `dp`, `jml_bulan`, `tahun`, `ket`) VALUES
('WL-136475358', 'ORD-143155', 'Besar', 'Tinggi', 'Normal', 'Tua', 'ACCEPTED'),
('WL-233297934', 'ORD-726978', 'Kecil', 'Tinggi', 'Normal', 'Tua', 'DECLINE'),
('WL-797249228', 'ORD-145677', 'Kecil', 'Tinggi', 'Normal', 'Muda', 'ACCEPTED');

-- --------------------------------------------------------

--
-- Table structure for table `log_topup`
--

CREATE TABLE `log_topup` (
  `id` varchar(20) NOT NULL,
  `tgl_diterima` datetime NOT NULL,
  `saldo_awal` bigint(20) NOT NULL,
  `saldo_akhir` bigint(20) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `id_topup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_topup`
--

INSERT INTO `log_topup` (`id`, `tgl_diterima`, `saldo_awal`, `saldo_akhir`, `id_user`, `id_topup`) VALUES
('LGTP-12893007412019-', '2019-12-25 00:34:22', 300099180, 300189180, 'ADM001', 'TP16396003312019-12-'),
('LGTP-15412431802019-', '2019-12-25 17:00:17', 300189180, 300289180, 'ADM001', 'TP3336824782019-12-2'),
('LGTP-18065916512019-', '2019-12-25 00:34:19', 300009180, 300099180, 'ADM001', 'TP9635388582019-12-2');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
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
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(10) NOT NULL,
  `id_user` varchar(15) DEFAULT NULL,
  `id_barang` varchar(20) DEFAULT 'NULL',
  `tgl_pesanan` datetime DEFAULT NULL,
  `ket_pesanan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `id_barang`, `tgl_pesanan`, `ket_pesanan`) VALUES
('ORD-108624', 'FNfatoni2612201', 'BRG-840514728Apple-I', '2019-12-29 18:03:30', 'On Proccess'),
('ORD-121081', 'FNhafizh2612201', 'BRG-1820170034Iphone', '2019-12-29 17:59:30', 'On Proccess'),
('ORD-123028', 'FNbastian261220', 'BRG-125009640Asus-X5', '2019-12-29 17:57:44', 'On Proccess'),
('ORD-133040', 'FNdian26122019-', 'BRG-1229270274Realme', '2019-12-29 18:00:25', 'On Proccess'),
('ORD-134720', 'FNswagery261220', 'BRG-381999884Apple-I', '2019-12-29 18:10:12', 'On Proccess'),
('ORD-135038', 'FNalvyno2612201', 'BRG-434869298Samsung', '2019-12-29 18:42:35', 'On Proccess'),
('ORD-135860', 'FNshano26122019', 'BRG-6262794Iphone-6s', '2019-12-29 18:05:11', 'On Proccess'),
('ORD-135980', 'FNaditya2612201', 'BRG-1450271115Xiaomi', '2019-12-29 18:08:10', 'On Proccess'),
('ORD-143155', 'FNrona123251220', 'BRG-641730404Acer-Sw', '2019-12-25 16:54:32', 'ACCEPTED'),
('ORD-145677', 'FNuser09122019-', 'BRG-44965238SAMSUNG-', '2019-12-25 13:38:31', 'ACCEPTED'),
('ORD-147115', 'FNfifah26122019', 'BRG-1874766167Naka-M', '2019-12-29 18:04:21', 'On Proccess'),
('ORD-148006', 'FNwigig26122019', 'BRG-2081149019Xiaomi', '2019-12-29 18:06:56', 'On Proccess'),
('ORD-159152', 'FNalfarizky2612', 'BRG-1583552258Xiaomi', '2019-12-29 17:33:20', 'On Proccess'),
('ORD-180661', 'FNwanharyandi26', 'BRG-1946209917Iphone', '2019-12-29 17:37:35', 'On Proccess'),
('ORD-184495', 'FNgilang2612201', 'BRG-1250599343Iphone', '2019-12-29 18:43:46', 'On Proccess'),
('ORD-192446', 'FNanisa26122019', 'BRG-735380328Iphone-', '2019-12-29 18:38:55', 'On Proccess'),
('ORD-202427', 'FNyudith2612201', 'BRG-1856862737Canon-', '2019-12-29 17:51:58', 'On Proccess'),
('ORD-202656', 'FNichsani261220', 'BRG-488087153Vivo-Y1', '2019-12-29 17:38:22', 'On Proccess'),
('ORD-202669', 'FNyogapratama26', 'BRG-490115408Hp-Redm', '2019-12-29 17:49:47', 'On Proccess'),
('ORD-206115', 'FNsavira2612201', 'BRG-1981474627SAMSUN', '2019-12-29 17:31:41', 'On Proccess'),
('ORD-209339', 'FNalthur2612201', 'BRG-67023091Sepatu-R', '2019-12-29 17:35:33', 'On Proccess'),
('ORD-209931', 'FNjihad26122019', 'BRG-1917663599Iphone', '2019-12-29 17:44:09', 'On Proccess'),
('ORD-229308', 'FNd rinanto2612', 'BRG-1916477574Amd-Ry', '2019-12-29 17:45:35', 'On Proccess'),
('ORD-241421', 'FNerlangga26122', 'BRG-263500223Realme-', '2019-12-29 18:43:15', 'On Proccess'),
('ORD-254770', 'FNayu26122019-1', 'BRG-416423740Xiaomi-', '2019-12-29 18:41:53', 'On Proccess'),
('ORD-278118', 'FNamru26122019-', 'BRG-1011479052Xiaomi', '2019-12-29 18:02:26', 'On Proccess'),
('ORD-280060', 'FNalvin26122019', 'BRG-546774578Laptop-', '2019-12-29 17:58:33', 'On Proccess'),
('ORD-357215', 'FNdonny26122019', 'BRG-1450271115Xiaomi', '2019-12-29 17:47:49', 'On Proccess'),
('ORD-396969', 'FNrivhaldy26122', 'BRG-388221012Convers', '2019-12-29 17:52:35', 'On Proccess'),
('ORD-404571', 'FNsandra2612201', 'BRG-494644206Oppo-A5', '2019-12-29 18:01:22', 'On Proccess'),
('ORD-413877', 'FNtaufiq2612201', 'BRG-657942510Iphone-', '2019-12-29 18:06:04', 'On Proccess'),
('ORD-421028', 'FNadi26122019-1', 'BRG-1280549768Ninten', '2019-12-29 18:08:40', 'On Proccess'),
('ORD-701504', 'FNihsangga26122', 'BRG-1689383374Realme', '2019-12-29 17:48:46', 'On Proccess'),
('ORD-726978', 'FNanangwp982512', 'BRG-1981474627SAMSUN', '2019-12-25 15:43:33', 'DECLINE'),
('ORD-738644', 'FNayudya2612201', 'BRG-1946209917Iphone', '2019-12-29 17:54:41', 'On Proccess'),
('ORD-791483', 'FNtaptazani2612', 'BRG-1883065413Oppo-A', '2019-12-29 18:09:22', 'On Proccess'),
('ORD-807583', 'FNsalma26122019', 'BRG-1217635846Iphone', '2019-12-29 17:53:48', 'On Proccess'),
('ORD-859511', 'FNalfian2612201', 'BRG-1023517390Realme', '2019-12-29 18:10:55', 'On Proccess'),
('ORD-876793', 'FNselli26122019', 'BRG-777006793Iphone-', '2019-12-29 18:39:41', 'On Proccess'),
('ORD-903976', 'FNiqbal26122019', 'BRG-2057436592Samsun', '2019-12-29 17:50:58', 'On Proccess'),
('ORD-920027', 'FNocean26122019', 'BRG-2092745720Samsun', '2019-12-29 18:41:06', 'On Proccess');

-- --------------------------------------------------------

--
-- Table structure for table `proses_barang`
--

CREATE TABLE `proses_barang` (
  `id_barang` varchar(20) NOT NULL,
  `harga_top_barang` bigint(20) NOT NULL,
  `harga_botom_barang` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses_barang`
--

INSERT INTO `proses_barang` (`id_barang`, `harga_top_barang`, `harga_botom_barang`) VALUES
('1', 10000000, 750000);

-- --------------------------------------------------------

--
-- Table structure for table `proses_tagihan`
--

CREATE TABLE `proses_tagihan` (
  `id_tagihan` varchar(20) NOT NULL,
  `top_tagihan` bigint(20) NOT NULL,
  `bottom_tagihan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses_tagihan`
--

INSERT INTO `proses_tagihan` (`id_tagihan`, `top_tagihan`, `bottom_tagihan`) VALUES
('1', 200000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `proses_tahun`
--

CREATE TABLE `proses_tahun` (
  `id_tahun` varchar(20) NOT NULL,
  `tahun_top` year(4) NOT NULL,
  `tahun_bottom` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses_tahun`
--

INSERT INTO `proses_tahun` (`id_tahun`, `tahun_top`, `tahun_bottom`) VALUES
('1', 2019, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `proses_uang_muka`
--

CREATE TABLE `proses_uang_muka` (
  `id_uang_muka` varchar(20) NOT NULL,
  `top_uang_muka` bigint(20) NOT NULL,
  `bottom_uang_muka` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses_uang_muka`
--

INSERT INTO `proses_uang_muka` (`id_uang_muka`, `top_uang_muka`, `bottom_uang_muka`) VALUES
('1', 7000000, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` varchar(10) NOT NULL,
  `id_pesanan` varchar(10) DEFAULT NULL,
  `jml_dp` bigint(20) DEFAULT NULL,
  `jml_tagihan` bigint(20) DEFAULT NULL,
  `tgl_jatuh_tempo` date DEFAULT NULL,
  `jml_bulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `id_pesanan`, `jml_dp`, `jml_tagihan`, `tgl_jatuh_tempo`, `jml_bulan`) VALUES
('TRX-100629', 'ORD-134720', 9400000, 6254000, NULL, 2),
('TRX-101706', 'ORD-143155', 10000000, 1233233, NULL, 12),
('TRX-109337', 'ORD-791483', 250000, 222880, NULL, 10),
('TRX-110332', 'ORD-202669', 375750, 146543, NULL, 20),
('TRX-113489', 'ORD-209339', 125000, 128920, NULL, 5),
('TRX-113567', 'ORD-920027', 400000, 323778, NULL, 9),
('TRX-115519', 'ORD-159152', 1100000, 409253, NULL, 15),
('TRX-129054', 'ORD-202427', 1950000, 471000, NULL, 10),
('TRX-132696', 'ORD-184495', 550000, 270833, NULL, 12),
('TRX-137741', 'ORD-148006', 247500, 324500, NULL, 9),
('TRX-143365', 'ORD-135980', 600000, 199900, NULL, 12),
('TRX-143963', 'ORD-229308', 830000, 195167, NULL, 12),
('TRX-149471', 'ORD-726978', 2000000, 344000, NULL, 10),
('TRX-160206', 'ORD-206115', 1000000, 303333, NULL, 12),
('TRX-175070', 'ORD-180661', 1000000, 434800, NULL, 10),
('TRX-191959', 'ORD-357215', 242500, 107404, NULL, 23),
('TRX-195528', 'ORD-147115', 100000, 112933, NULL, 3),
('TRX-197713', 'ORD-135860', 375000, 292500, NULL, 10),
('TRX-197915', 'ORD-123028', 583000, 378553, NULL, 12),
('TRX-207963', 'ORD-280060', 800000, 611429, NULL, 7),
('TRX-211471', 'ORD-738644', 1500000, 472000, NULL, 9),
('TRX-214740', 'ORD-241421', 300000, 194900, NULL, 12),
('TRX-234800', 'ORD-701504', 450000, 585000, NULL, 6),
('TRX-237969', 'ORD-404571', 200000, 315422, NULL, 9),
('TRX-243154', 'ORD-859511', 160000, 314467, NULL, 6),
('TRX-254349', 'ORD-421028', 2150000, 606100, NULL, 8),
('TRX-292845', 'ORD-133040', 560000, 240444, NULL, 18),
('TRX-314329', 'ORD-108624', 442500, 287625, NULL, 12),
('TRX-334368', 'ORD-145677', 1000000, 388333, NULL, 12),
('TRX-398970', 'ORD-807583', 2000000, 391667, NULL, 12),
('TRX-434050', 'ORD-278118', 320000, 224567, NULL, 12),
('TRX-472534', 'ORD-413877', 1500000, 195433, NULL, 18),
('TRX-473623', 'ORD-202656', 220000, 259480, NULL, 10),
('TRX-595770', 'ORD-121081', 720000, 468000, NULL, 12),
('TRX-621881', 'ORD-209931', 675000, 309706, NULL, 17),
('TRX-626333', 'ORD-135038', 900000, 611760, NULL, 5),
('TRX-754432', 'ORD-192446', 6000000, 1048000, NULL, 12),
('TRX-785190', 'ORD-903976', 750000, 477400, NULL, 12),
('TRX-806526', 'ORD-254770', 300000, 205091, NULL, 11),
('TRX-845347', 'ORD-396969', 56770, 109908, NULL, 6),
('TRX-880664', 'ORD-876793', 2900000, 700667, NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `id_topup` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `jumlah_topup` bigint(20) DEFAULT NULL,
  `keterangan_topup` text DEFAULT NULL,
  `tanggal_topup` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topup`
--

INSERT INTO `topup` (`id_topup`, `id_user`, `jumlah_topup`, `keterangan_topup`, `tanggal_topup`, `status`) VALUES
('TP16396003312019-12-', 'FNuser09122019-', 90000, 'test', '2019-12-25 00:26:08', 'SELESAI'),
('TP3336824782019-12-2', 'FNuser09122019-', 100000, 'DP', '2019-12-25 16:59:44', 'SELESAI'),
('TP9635388582019-12-2', 'FNuser09122019-', 90000, 'test', '2019-12-25 00:33:56', 'SELESAI');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
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
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `tglLahir`, `jk`, `angkatan`, `alamat`, `nomorTelp`, `level`) VALUES
('anang', 'anangwp', 'Anang Wahyu Pradana', 'anang@students.amikom.ac.id', '21232f297a57a5a743894a0e4a801fc3', '1998-12-20', 'L', 2017, '---', '0988', 'admin'),
('anangwp', 'anangwp', '', '', 'admin', NULL, '', 0000, NULL, NULL, 'admin'),
('FNadi26122019-1', 'adi', 'Adi Prasetyo Adji', 'adi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2015, '-', '-', 'user'),
('FNaditya2612201', 'aditya', 'Aditya Ramadhan', 'aditya@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2017, '-', '-', 'user'),
('FNalfarizky2612', 'alfarizky', 'Alfarizky Wibowo', 'Alfarizky@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2017, '-', '-', 'user'),
('FNalfian2612201', 'alfian', 'Alfian Muhammad Rojabi', 'alfian@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2015, '-', '-', 'user'),
('FNalthur2612201', 'althur', 'Muhammad Althur', 'Althur@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2017, '-', '-', 'user'),
('FNalvin26122019', 'alvin', 'Alvin Novian Perdana', 'alvinnovian@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2015, '-', '-', 'user'),
('FNalvyno2612201', 'alvyno', 'Alvyno Gian Maulana Pasha', 'alvyno@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2019, '-', '-', 'user'),
('FNamru26122019-', 'amru', 'Amru Rizal Fakhriansyah Susilo', 'amru@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2016, '-', '-', 'user'),
('FNanangwp982512', 'anangwp98', 'ANANG WAHYU PRADANA', 'anangwahyupradanaofficial@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '0000-00-00', 'L', 0000, 'PONOROGO', '082230381413', 'user'),
('FNanisa26122019', 'anisa', 'Anisa Pangestika', 'anisa@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'P', 2019, '-', '-', 'user'),
('FNayu26122019-1', 'ayu', 'Ayu Candra', 'ayu@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'P', 2016, '-', '-', 'user'),
('FNayudya2612201', 'ayudya', 'Ayudya Jati Pratitista', 'ayudya@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'P', 2016, '-', '-', 'user'),
('FNbastian261220', 'bastian', 'Adeodatus Bastian Letom', 'bastian@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2018, '-', '-', 'user'),
('FNd rinanto2612', 'd rinanto', 'Christian Jeconiah D Rinanto', 'DRinanto@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2017, '-', '-', 'user'),
('FNdian26122019-', 'dian', 'Dian Pratama', 'dina@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2018, '-', '-', 'user'),
('FNdonny26122019', 'donny', 'Donny Yoga Destian', 'donny@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2015, '-', '-', 'user'),
('FNerlangga26122', 'erlangga', 'Erlangga Feriansyah Kusuma', 'Erlangga@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2017, '-', '-', 'user'),
('FNfatoni2612201', 'fatoni', 'Shohibul Fatoni', 'fatoni@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2016, '-', '-', 'user'),
('FNfifah26122019', 'fifah', 'Khofifah Muttawakillah', 'fifah@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'P', 2017, '-', '-', 'user'),
('FNgilang2612201', 'gilang', 'Gilang Marwanta', 'Gilang@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2015, '-', '-', 'user'),
('FNhafizh2612201', 'hafizh', 'Muhammad Hafiz Ilmi', 'hafzh@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2018, '-', '-', 'user'),
('FNichsani261220', 'ichsani', 'Ichsani Matahari Ilham', 'Ichsani@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2019, '-', '-', 'user'),
('FNihsangga26122', 'ihsangga', 'Ihsangga Novan Atalla Rasyl', 'atalla@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2016, '-', '-', 'user'),
('FNiqbal26122019', 'iqbal', 'Muhammad Iqbal Pratama', 'MIPratama@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2018, '-', '-', 'user'),
('FNjihad26122019', 'jihad', 'Muhamad Jihad', 'Jihadmuhammad@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2019, '-', '-', 'user'),
('FNocean26122019', 'ocean', 'Ocean Oscar', 'ocean@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'P', 2019, '-', '-', 'user'),
('FNrivhaldy26122', 'rivhaldy', 'Anang Rivhaldy', 'anangrivhaldy@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2017, '-', '-', 'user'),
('FNrona123091220', 'rona123', 'M RONA SETYOWARDANI', 'rona.1125@students.amikom.ac.id', '689b6f533e39e77830b46315ab4cb501', '2019-12-01', 'L', 2019, 'Jl. Nusa Indah II no 57 Condong Catur, Sleman, Yogyakarta', '087758532425', 'admin'),
('FNrona123251220', 'rona123', 'M RONA SETYOWARDANI', 'rona.1125@students.amikom.ac.id', 'ee11cbb19052e40b07aac0ca060c23ee', '0000-00-00', 'L', 2014, 'MALUKU UTARA', '082230381413', 'user'),
('FNsalma26122019', 'salma', 'Salma Resi Maharani', 'salmaresi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'P', 2016, '-', '-', 'user'),
('FNsandra2612201', 'sandra', 'Sandra Arbi', 'sandra@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'P', 2017, '-', '--', 'user'),
('FNsavira2612201', 'savira', 'Savira Fatika', 'savirafatika@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'P', 2016, '-', '-', 'user'),
('FNselli26122019', 'selli', 'Selli Aprilia', 'selli@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'P', 2018, '-', '-', 'user'),
('FNshano26122019', 'shano', 'mei', 'shano@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2017, '-', '-', 'user'),
('FNswagery261220', 'swagery', 'Swagery Rama Dan Razy', 'Swagery@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2019, '-', '-', 'user'),
('FNtaptazani2612', 'taptazani', 'Muhammad Taptazani Adi', 'adii@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2016, '-', '-', 'user'),
('FNtaufiq2612201', 'taufiq', 'Muchammad Taufiq Kurniawan', 'taufiq@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2015, '-', '-', 'user'),
('FNwanharyandi26', 'wanharyandi', 'Wanharyandi', 'Wanharyandi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2018, '-', '-', 'user'),
('FNwigig26122019', 'wigig', 'Wigig Bimantara Putra', 'wigig@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2019, '-', '-', 'user'),
('FNyogapratama26', 'yogapratama', 'Yoga Pratama', 'yoga@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'L', 2018, '-', '-', 'user'),
('FNyudith2612201', 'yudith', 'Yudith Amelia Mentang', 'amel@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00', 'P', 2018, '-', '-', 'user'),
('nis', 'nis', 'Nur Anisah', 'nur.1184@students.amikom.ac.id', '21232f297a57a5a743894a0e4a801fc3', NULL, 'P', 2017, '--', '089604491329', 'admin'),
('nisah', 'nisah', 'Nur Anisah', 'nur.1184@students.amikom.ac.id', '7', '1999-09-07', 'P', 2017, '--', '08960449329', 'admin'),
('nnisah', 'nnisah', 'Nur Anisah', '', '8f14e45fceea167a5a36dedd4bea2543', NULL, 'P', 0000, NULL, NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id_website` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id_website`, `nama`, `deskripsi`) VALUES
('WB-597004950', 'AMIKOM YOGYAKARTA', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ai-tahun`
--
ALTER TABLE `ai-tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `bunga`
--
ALTER TABLE `bunga`
  ADD PRIMARY KEY (`id_bunga`);

--
-- Indexes for table `dompet`
--
ALTER TABLE `dompet`
  ADD PRIMARY KEY (`id_dompet`),
  ADD KEY `dompet` (`id_user`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id_fitur`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `klasifikasi_ai`
--
ALTER TABLE `klasifikasi_ai`
  ADD PRIMARY KEY (`id_klasifikasi`),
  ADD UNIQUE KEY `id_pesanan_2` (`id_pesanan`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `log_topup`
--
ALTER TABLE `log_topup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_topup` (`id_topup`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayaran` (`id_dompet`),
  ADD KEY `id_tagihan` (`id_tagihan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `proses_barang`
--
ALTER TABLE `proses_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `proses_tagihan`
--
ALTER TABLE `proses_tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `proses_tahun`
--
ALTER TABLE `proses_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `proses_uang_muka`
--
ALTER TABLE `proses_uang_muka`
  ADD PRIMARY KEY (`id_uang_muka`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`id_topup`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id_transfer`),
  ADD KEY `transfer` (`id_dompet`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id_website`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dompet`
--
ALTER TABLE `dompet`
  ADD CONSTRAINT `dompet` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `fitur`
--
ALTER TABLE `fitur`
  ADD CONSTRAINT `fitur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `klasifikasi_ai`
--
ALTER TABLE `klasifikasi_ai`
  ADD CONSTRAINT `klasifikasi_ai_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `log_topup`
--
ALTER TABLE `log_topup`
  ADD CONSTRAINT `log_topup_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `log_topup_ibfk_2` FOREIGN KEY (`id_topup`) REFERENCES `topup` (`id_topup`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran` FOREIGN KEY (`id_dompet`) REFERENCES `dompet` (`id_dompet`),
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_tagihan`) REFERENCES `tagihan` (`id_tagihan`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `id_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `id_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);

--
-- Constraints for table `topup`
--
ALTER TABLE `topup`
  ADD CONSTRAINT `topup_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `transfer` FOREIGN KEY (`id_dompet`) REFERENCES `dompet` (`id_dompet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
