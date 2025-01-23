-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2025 at 06:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel (2)`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkinout`
--

CREATE TABLE `checkinout` (
  `id` int(11) NOT NULL,
  `id_checkinout` varchar(50) DEFAULT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date DEFAULT NULL,
  `status` enum('checkin','checkout') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkinout`
--

INSERT INTO `checkinout` (`id`, `id_checkinout`, `id_pemesanan`, `tanggal_checkin`, `tanggal_checkout`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, '2025-01-02', '2025-01-09', 'checkout', '2025-01-01 11:13:18', '2025-01-23 04:56:12'),
(3, NULL, 5, '2025-01-14', '2025-01-09', 'checkout', '2025-01-01 11:14:14', '2025-01-23 04:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` enum('baik','rusak','diganti') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_barang`, `nama_barang`, `jumlah`, `kondisi`) VALUES
(1234, 'Sabun', 200, 'baik'),
(2341, 'Handuk', 100, 'baik'),
(3412, 'Shampo', 150, 'baik'),
(3456, 'Nama Barang', 10, 'baik'),
(4123, 'Sikat Gigi', 120, 'rusak');

-- --------------------------------------------------------

--
-- Table structure for table `manajemenkeuangan`
--

CREATE TABLE `manajemenkeuangan` (
  `id_transaksi` int(11) NOT NULL,
  `id_pemesanan` int(11) DEFAULT NULL,
  `id_barang` int(11) NOT NULL,
  `total_biaya` decimal(10,2) NOT NULL,
  `metode_pembayaran` enum('Tunai','Kartu Kredit','Transfer') NOT NULL,
  `tanggal_transaksi` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manajemenkeuangan`
--

INSERT INTO `manajemenkeuangan` (`id_transaksi`, `id_pemesanan`, `id_barang`, `total_biaya`, `metode_pembayaran`, `tanggal_transaksi`) VALUES
(3, 2, 1234, 250000.00, 'Kartu Kredit', '2025-01-02 14:05:00'),
(125, 5, 2341, 50000.00, 'Tunai', '2025-01-02 13:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `telepon`, `alamat`) VALUES
(1, 'abin', 'abin@gmail.com', '0987647', 'klaten'),
(2, 'woozi', 'woozi@gmail.com', '787878', 'korsel'),
(3, 'dewi', 'dewi@gmail.com', '6475748', 'klaten'),
(4, 'san', 'san@gmail.com', '9875673', 'korsel'),
(5, 'yoongi', 'yoongi@gmail.com', '0878546727', 'malang'),
(6, 'mitha', 'mitha@gmail.com', '9738676467', 'yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanankamar`
--

CREATE TABLE `pemesanankamar` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `status` enum('Dipesan','Dibatalkan','Selesai') DEFAULT 'Dipesan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanankamar`
--

INSERT INTO `pemesanankamar` (`id_pemesanan`, `id_pelanggan`, `id_kamar`, `tanggal_pemesanan`, `tanggal_checkin`, `tanggal_checkout`, `status`) VALUES
(2, 1, 1023, '2023-10-02', '2023-10-06', '2023-10-09', 'Selesai'),
(5, 2, 104, '2024-10-03', '2024-10-07', '2025-10-12', 'Dibatalkan');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `telepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `id_pelanggan`, `nama_tamu`, `telepon`) VALUES
(1, 1, 'abin', '08674'),
(2, 5, 'yonngi', '0987647'),
(3, 4, 'san', '9875673'),
(4, 2, 'woozi', '787878'),
(5, 6, 'mitha', '9738676467');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `status`) VALUES
('admin', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkinout`
--
ALTER TABLE `checkinout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_checkinout` (`id_checkinout`,`id_pemesanan`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `manajemenkeuangan`
--
ALTER TABLE `manajemenkeuangan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_inventaris` (`id_barang`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pemesanankamar`
--
ALTER TABLE `pemesanankamar`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkinout`
--
ALTER TABLE `checkinout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4125;

--
-- AUTO_INCREMENT for table `manajemenkeuangan`
--
ALTER TABLE `manajemenkeuangan`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanankamar`
--
ALTER TABLE `pemesanankamar`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkinout`
--
ALTER TABLE `checkinout`
  ADD CONSTRAINT `checkinout_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanankamar` (`id_pemesanan`);

--
-- Constraints for table `manajemenkeuangan`
--
ALTER TABLE `manajemenkeuangan`
  ADD CONSTRAINT `manajemenkeuangan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `inventaris` (`id_barang`),
  ADD CONSTRAINT `manajemenkeuangan_ibfk_2` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanankamar` (`id_pemesanan`);

--
-- Constraints for table `pemesanankamar`
--
ALTER TABLE `pemesanankamar`
  ADD CONSTRAINT `pemesanankamar_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Constraints for table `tamu`
--
ALTER TABLE `tamu`
  ADD CONSTRAINT `tamu_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
