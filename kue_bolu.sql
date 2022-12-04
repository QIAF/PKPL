-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 02:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kue_bolu`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `id_kue` int(15) NOT NULL,
  `nama_kue` varchar(30) NOT NULL,
  `jenis_kue` enum('Klemben','Kemojo','Suri','Peca','Koja') NOT NULL,
  `harga_kue` int(20) NOT NULL,
  `stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`id_kue`, `nama_kue`, `jenis_kue`, `harga_kue`, `stock`) VALUES
(2, 'awqwe', 'Koja', 12, 123),
(3, 'awe', 'Peca', 12321, 232),
(1231, 'sdfsdf', 'Suri', 212121, 2),
(1414, 'sfasf', 'Klemben', 2342343, 3),
(123123, 'wewqeqw', 'Kemojo', 12312, 2);

--
-- Triggers `data_produk`
--
DELIMITER $$
CREATE TRIGGER `after_delete_data_produk` AFTER DELETE ON `data_produk` FOR EACH ROW BEGIN
INSERT INTO log_data
SET perubahan = 'Produk Sudah Dihapus', waktu = now();
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_data_produk` AFTER INSERT ON `data_produk` FOR EACH ROW BEGIN
INSERT INTO log_data
SET perubahan = 'Produk Sudah Masuk', waktu = now();
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_data_produk` AFTER UPDATE ON `data_produk` FOR EACH ROW BEGIN
INSERT INTO log_data
SET perubahan = 'Produk Sudah Update', waktu = now();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`) VALUES
(6, 'klembem.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_penjualan`
--

CREATE TABLE `laporan_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `banyak_terjual` int(11) NOT NULL,
  `hasil_keuntungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_penjualan`
--

INSERT INTO `laporan_penjualan` (`id_penjualan`, `waktu`, `banyak_terjual`, `hasil_keuntungan`) VALUES
(1802, '2022-03', 30, 300000),
(1901, '2021-02', 20, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `log_data`
--

CREATE TABLE `log_data` (
  `id_log` int(11) NOT NULL,
  `perubahan` varchar(20) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_data`
--

INSERT INTO `log_data` (`id_log`, `perubahan`, `waktu`) VALUES
(1, 'Produk Sudah Masuk', '2022-01-09 14:28:25'),
(15, 'Produk Sudah Masuk', '2022-01-09 15:12:41'),
(16, 'Produk Sudah Masuk', '2022-01-09 15:12:52'),
(17, 'Produk Sudah Masuk', '2022-01-09 15:13:04'),
(18, 'Produk Sudah Masuk', '2022-01-09 15:13:21'),
(19, 'Produk Sudah Masuk', '2022-01-09 15:13:45'),
(20, 'Produk Sudah Masuk', '2022-01-09 16:41:46'),
(21, 'Produk Sudah Dihapus', '2022-01-09 16:42:08'),
(22, 'Produk Sudah Dihapus', '2022-01-09 16:42:08'),
(23, 'Produk Sudah Dihapus', '2022-01-09 16:42:09'),
(24, 'Produk Sudah Dihapus', '2022-01-09 16:42:09'),
(25, 'Produk Sudah Dihapus', '2022-01-09 16:42:10'),
(26, 'Produk Sudah Dihapus', '2022-01-09 16:42:10'),
(27, 'Produk Sudah Dihapus', '2022-01-09 16:42:10'),
(28, 'Produk Sudah Masuk', '2022-01-09 16:42:22'),
(29, 'Produk Sudah Masuk', '2022-01-09 16:42:39'),
(30, 'Produk Sudah Masuk', '2022-01-09 16:42:50'),
(32, 'Produk Sudah Masuk', '2022-01-09 16:44:05'),
(33, 'Produk Sudah Masuk', '2022-01-09 16:44:46'),
(34, 'Produk Sudah Masuk', '2022-01-09 16:56:10'),
(35, 'Produk Sudah Masuk', '2022-01-09 16:58:06'),
(36, 'Produk Sudah Dihapus', '2022-01-09 16:58:10'),
(37, 'Produk Sudah Dihapus', '2022-01-09 16:58:11'),
(38, 'Produk Sudah Dihapus', '2022-01-09 16:58:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id_kue`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `laporan_penjualan`
--
ALTER TABLE `laporan_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `log_data`
--
ALTER TABLE `log_data`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id_kue` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laporan_penjualan`
--
ALTER TABLE `laporan_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `log_data`
--
ALTER TABLE `log_data`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
