-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2024 pada 03.38
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
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `DetailID` int(11) NOT NULL,
  `PenjualanID` int(11) NOT NULL,
  `ProdukID` int(11) NOT NULL,
  `JumlahProduk` int(11) NOT NULL,
  `Subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`DetailID`, `PenjualanID`, `ProdukID`, `JumlahProduk`, `Subtotal`) VALUES
(1, 2, 4, 4, 20000.00),
(2, 3, 2, 3, 45000.00),
(2, 4, 5, 1, 99999999.00),
(3, 5, 4, 3, 20000.00),
(5, 7, 2, 2, 45000.00),
(5, 8, 3, 4, 30000.00),
(5, 9, 4, 2, 20000.00),
(5, 10, 7, 2, 1000000.00),
(6, 12, 2, 2, 45000.00),
(6, 13, 3, 4, 30000.00),
(6, 14, 4, 2, 20000.00),
(6, 15, 7, 2, 1000000.00),
(7, 17, 2, 2, 45000.00),
(7, 18, 3, 4, 30000.00),
(7, 19, 4, 2, 20000.00),
(7, 20, 7, 2, 1000000.00),
(8, 22, 2, 2, 45000.00),
(8, 23, 3, 4, 30000.00),
(8, 24, 4, 2, 20000.00),
(8, 25, 7, 2, 1000000.00),
(8, 26, 0, 0, 0.00),
(9, 27, 2, 2, 45000.00),
(9, 28, 3, 4, 30000.00),
(9, 29, 4, 2, 20000.00),
(9, 30, 7, 2, 1000000.00),
(9, 31, 0, 0, 0.00),
(10, 32, 2, 2, 45000.00),
(11, 33, 2, 2, 45000.00),
(11, 34, 4, 2, 20000.00),
(12, 35, 2, 2, 45000.00),
(12, 36, 4, 2, 20000.00),
(12, 37, 4, 3, 20000.00),
(13, 38, 2, 1, 45000.00),
(13, 39, 3, 3, 30000.00),
(13, 40, 4, 2, 20000.00),
(13, 41, 7, 1, 1000000.00),
(14, 42, 5, 4, 99999999.00),
(15, 43, 2, 50, 45000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `PelangganID` int(11) NOT NULL,
  `NamaPelanggan` varchar(255) NOT NULL,
  `NoMeja` int(11) NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`PelangganID`, `NamaPelanggan`, `NoMeja`, `NomorTelepon`) VALUES
(1, 'ichsan', 99, ''),
(2, 'aziz', 1, ''),
(3, 'ra', 34, ''),
(4, 'ra', 34, ''),
(5, 'AZIZ JULIANSYAH', 12, ''),
(6, 'AZIZ JULIANSYAH', 12, ''),
(7, 'AZIZ JULIANSYAH', 12, ''),
(8, 'AZIZ JULIANSYAH', 12, ''),
(9, 'AZIZ JULIANSYAH', 12, ''),
(10, 'AZIZ JULIANSYAH', 12, ''),
(11, 'kontol', 3, ''),
(12, 'kontol', 3, ''),
(13, 'AZIZ JULIANSYAH', 2, ''),
(14, 'a', 1, ''),
(15, 'AZIZ JULIANSYAH', 2, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `PenjualanID` int(11) NOT NULL,
  `TanggalPenjualan` date NOT NULL,
  `TotalHarga` decimal(10,2) DEFAULT NULL,
  `PelangganID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`PenjualanID`, `TanggalPenjualan`, `TotalHarga`, `PelangganID`) VALUES
(1, '2024-02-01', NULL, NULL),
(2, '2024-02-03', NULL, NULL),
(3, '2024-02-06', NULL, NULL),
(4, '2024-02-06', NULL, NULL),
(5, '2024-02-07', NULL, NULL),
(6, '2024-02-07', NULL, NULL),
(7, '2024-02-07', NULL, NULL),
(8, '2024-02-07', NULL, NULL),
(9, '2024-02-07', NULL, NULL),
(10, '2024-02-07', NULL, NULL),
(11, '2024-02-07', NULL, NULL),
(12, '2024-02-07', NULL, NULL),
(13, '2024-02-07', NULL, NULL),
(14, '2024-02-13', NULL, NULL),
(15, '2024-02-13', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `ProdukID` int(11) NOT NULL,
  `NamaProduk` varchar(255) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  `Stok` int(11) NOT NULL,
  `Terjual` int(11) NOT NULL,
  `Foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`ProdukID`, `NamaProduk`, `Harga`, `Stok`, `Terjual`, `Foto`) VALUES
(2, 'Big Burger Double Cheese', 45000.00, 79, 70, '30012024074534.jpeg'),
(3, 'Spicy Chicken Wings', 30000.00, 641, 25, '30012024074622.jpg'),
(4, 'Americano Double Shoot', 20000.00, 66, 26, '30012024074656.jpeg'),
(5, 'Alok Limited Edition (Elite)', 99999999.00, 2, 5, '30012024074818.jpeg'),
(7, 'Es Teh Premium Deluxe', 1000000.00, 899, 11, '05022024071653.jfif'),
(8, 'Pudding', 30000.00, 90, 0, '07022024053550.jpe'),
(9, 'Spaghetti', 90000.00, 1000, 0, '07022024053635.jfif'),
(10, 'Shotgun One Punch Man Limited Edition', 99999999.99, 1, 0, '15022024025818.jfif'),
(11, 'Beat Street Beler', 19800000.00, 1, 0, '15022024030034.jfif'),
(12, 'AK Flaming Draco', 2000000.00, 99, 0, '15022024032039.jfif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` enum('Administrator','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Password`, `Level`) VALUES
(2, 'petugas', '202cb962ac59075b964b07152d234b70', 'Petugas'),
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `PenjualanID` (`PenjualanID`),
  ADD KEY `DetailID` (`DetailID`),
  ADD KEY `ProdukID` (`ProdukID`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`PelangganID`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `PelangganID` (`PelangganID`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ProdukID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  MODIFY `PenjualanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `PelangganID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `PenjualanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `ProdukID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`PelangganID`) REFERENCES `penjualan` (`PenjualanID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
