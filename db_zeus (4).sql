-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 10:03 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zeus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bahan`
--

CREATE TABLE `tb_bahan` (
  `id_bahan` varchar(10) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_supplier` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bahan`
--

INSERT INTO `tb_bahan` (`id_bahan`, `nama_bahan`, `jenis`, `stok`, `satuan`, `harga`, `id_supplier`) VALUES
('B0001', 'Kopi Vietnam', 'minuman', 12, 'bungkus', 5000, 'S0001'),
('B0002', 'Kopi americano', 'minuman', 12, 'bungkus', 7000, 'S0002'),
('B0003', 'Kopi V60', 'minuman', 12, 'bungkus', 10000, 'S0002'),
('B0004', 'Kopi Original', 'minuman', 0, 'bungkus', 3000, 'S0002'),
('B0005', 'Gula', 'makanan', 0, 'kg', 12500, 'S0001'),
('B0006', 'Garam', 'makanan', 0, 'bungkus', 1000, 'S0001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pembelian`
--

CREATE TABLE `tb_detail_pembelian` (
  `id_detail_pembelian` int(11) NOT NULL,
  `no_nota_pembelian` varchar(15) NOT NULL,
  `id_bahan` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pembelian`
--

INSERT INTO `tb_detail_pembelian` (`id_detail_pembelian`, `no_nota_pembelian`, `id_bahan`, `jumlah`) VALUES
(9, 'PB2019070001', 'B0002', 2),
(10, 'PB2019070001', 'B0003', 3),
(11, 'PB2019070002', 'B0002', 2),
(12, 'PB2019070003', 'B0003', 2),
(13, 'PB2019070004', 'B0005', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_penjualan`
--

CREATE TABLE `tb_detail_penjualan` (
  `id_detail_penjualan` int(10) NOT NULL,
  `no_nota_penjualan` varchar(25) NOT NULL,
  `id_menu` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_penjualan`
--

INSERT INTO `tb_detail_penjualan` (`id_detail_penjualan`, `no_nota_penjualan`, `id_menu`, `jumlah`) VALUES
(5, 'PJ2019060001', 'M0004', 2),
(6, 'PJ2019060001', 'M0002', 1),
(8, 'PJ2019060002', 'M0002', 1),
(9, 'PJ2019060003', 'M0003', 2),
(10, 'PJ2019070001', 'M0004', 1),
(11, 'PJ2019070001', 'M0002', 1),
(12, 'PJ2019070002', 'M0002', 3),
(13, 'PJ2019070003', 'M0004', 2),
(14, 'PJ2019070003', 'M0002', 1),
(17, 'PJ2019070004', 'M0004', 2),
(18, 'PJ2019070004', 'M0001', 1),
(19, 'PJ2019070006', 'M0004', 2),
(20, 'PJ2019070006', 'M0001', 2),
(21, 'PJ2019070007', 'M0005', 2),
(22, 'PJ2019070007', 'M0001', 1),
(23, 'PJ2019070008', 'M0004', 2),
(24, 'PJ2019070008', 'M0002', 2),
(25, 'PJ2019070008', 'M0005', 3),
(26, 'PJ2019070009', 'M0004', 2),
(27, 'PJ2019070009', 'M0001', 2),
(28, 'PJ2019070010', 'M0003', 2),
(29, 'PJ2019070010', 'M0005', 1),
(30, 'PJ2019070012', 'M0004', 1),
(31, 'PJ2019070012', 'M0003', 2),
(32, 'PJ2019070013', 'M0002', 1),
(33, 'PJ2019070013', 'M0003', 2),
(34, 'PJ2019070014', 'M0004', 1),
(35, 'PJ2019070014', 'M0002', 2),
(36, 'PJ2019070015', 'M0004', 2),
(37, 'PJ2019070015', 'M0001', 1),
(38, 'PJ2019070016', 'M0004', 1),
(39, 'PJ2019070017', 'M0003', 1),
(40, 'PJ2019070017', 'M0001', 2),
(41, 'PJ2019070018', 'M0004', 1),
(42, 'PJ2019070019', 'M0004', 1),
(43, 'PJ2019070020', 'M0004', 1),
(44, 'PJ2019070021', 'M0005', 1),
(45, 'PJ2019070022', 'M0002', 1),
(46, 'PJ2019070023', 'M0004', 1),
(47, 'PJ2019070024', 'M0002', 1),
(48, 'PJ2019070025', 'M0003', 2),
(49, 'PJ2019070026', 'M0002', 2),
(50, 'PJ2019070027', 'M0002', 1),
(51, 'PJ2019070028', 'M0003', 1),
(52, 'PJ2019070029', 'M0004', 1),
(53, 'PJ2019070030', 'M0002', 1),
(54, 'PJ2019070031', 'M0004', 1),
(55, 'PJ2019070032', 'M0004', 1),
(56, 'PJ2019070033', 'M0004', 1),
(57, 'PJ2019070034', 'M0004', 1),
(58, 'PJ2019070035', 'M0004', 1),
(59, 'PJ2019070036', 'M0004', 1),
(60, 'PJ2019070037', 'M0004', 4),
(61, 'PJ2019070037', 'M0002', 3),
(62, 'PJ2019070037', 'M0003', 1),
(63, 'PJ2019070038', 'M0005', 1),
(64, 'PJ2019070038', 'M0001', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` varchar(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `satuan` varchar(5) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `kategori`, `satuan`, `harga`) VALUES
('M0001', 'Coffee Tubruk', 'minuman', 'gelas', 5000),
('M0002', 'Coffe Vietnam Drip', 'minuman', 'gelas', 11000),
('M0003', 'Coffe V60', 'minuman', 'gelas', 10000),
('M0004', 'Coffe Americano', 'minuman', 'gelas', 14000),
('M0005', 'Kopi Luwak', 'minuman', 'gelas', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telepon`) VALUES
('P0001', 'arif', '081333648042'),
('P0002', 'Erina', '085255555561'),
('P0003', 'Maimunah', '082348999912'),
('P0004', 'Andi', '081200055512'),
('P0005', 'Fahruddin', '085258820874'),
('P0006', 'Joni', '081200055512'),
('P0007', 'Anton', '081200055512'),
('P0008', 'Banu', '081200055512'),
('P0009', 'Andi Budi', '081200055512'),
('P0010', 'Brandon', '082082082082'),
('P0011', 'Baru', '085580085580'),
('P0012', 'Lagi', '082123412341'),
('P0013', 'Dani', '081200055512'),
('P0014', 'Ahmad', '081200055512'),
('P0015', 'Deni', '081200055512'),
('P0016', 'Irma', '081200055512'),
('P0017', 'Alifah', '081200055512'),
('P0018', 'Danu', '081200055512'),
('P0019', 'Bagus', '081200055512'),
('P0020', 'Rahmat', '081200055512'),
('P0021', 'Ririn', '081200055512'),
('P0022', 'Teguh', '081200055512'),
('P0023', 'Heri', '081200055512'),
('P0024', 'Fafa', '081200055512'),
('P0025', 'Sinta', '081200055512'),
('P0026', 'Jojo', '081200055512'),
('P0027', 'Kevin', '081200055512'),
('P0028', 'Johan', '081200055512'),
('P0029', 'Ardi', '081200055512'),
('P0030', 'Agus', '081200055512'),
('P0031', 'Teguh', '081200055512'),
('P0032', 'Lingkan', '081200055512'),
('P0033', 'Tari', '081200055512'),
('P0034', 'Ika', '082552255225');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `no_nota_pembelian` varchar(15) NOT NULL,
  `tgl_nota_pembelian` date NOT NULL,
  `waktu_nota_pembelian` time NOT NULL,
  `id_supplier` varchar(10) NOT NULL,
  `total_bahan` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`no_nota_pembelian`, `tgl_nota_pembelian`, `waktu_nota_pembelian`, `id_supplier`, `total_bahan`, `total_harga`, `id_user`) VALUES
('PB2019070001', '2019-07-06', '21:11:22', 'S0001', 5, 44000, 'U0003'),
('PB2019070002', '2019-07-06', '21:16:58', 'S0002', 2, 14000, 'U0003'),
('PB2019070003', '2019-07-07', '05:30:07', 'S0002', 2, 20000, 'U0003'),
('PB2019070004', '2019-07-07', '13:29:21', 'S0001', 3, 37500, 'U0003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penggunaan`
--

CREATE TABLE `tb_penggunaan` (
  `id_penggunaan` varchar(25) NOT NULL,
  `tanggal_penggunaan` date NOT NULL,
  `waktu_penggunaan` time NOT NULL,
  `id_bahan` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_user` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penggunaan`
--

INSERT INTO `tb_penggunaan` (`id_penggunaan`, `tanggal_penggunaan`, `waktu_penggunaan`, `id_bahan`, `jumlah`, `id_user`) VALUES
('PB2019070001', '2019-07-07', '16:27:45', 'B0002', 2, 'U0003'),
('PB2019070002', '2019-07-10', '19:54:27', 'B0005', 1, 'U0003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `no_nota_penjualan` varchar(20) NOT NULL,
  `tgl_nota_penjualan` date NOT NULL,
  `waktu_nota_penjualan` time NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `total_menu` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`no_nota_penjualan`, `tgl_nota_penjualan`, `waktu_nota_penjualan`, `id_pelanggan`, `total_menu`, `total_harga`, `id_user`) VALUES
('PJ2019060001', '2019-06-13', '15:21:36', 'P0001', 3, 39000, 'U0001'),
('PJ2019060002', '2019-06-13', '15:43:29', 'P0003', 1, 11000, 'U0001'),
('PJ2019060003', '2019-06-13', '20:44:56', 'P0002', 2, 20000, 'U0001'),
('PJ2019070001', '2019-07-06', '04:40:42', 'P0001', 2, 25000, 'U0001'),
('PJ2019070002', '2019-07-06', '04:46:43', 'P0003', 3, 33000, 'U0001'),
('PJ2019070003', '2019-07-07', '13:25:02', 'P0004', 3, 39000, 'U0001'),
('PJ2019070004', '2019-07-07', '13:27:47', 'P0001', 3, 33000, 'U0001'),
('PJ2019070006', '2019-07-09', '06:20:04', 'P0001', 4, 38000, 'U0001'),
('PJ2019070007', '2019-07-09', '20:59:39', 'P0003', 3, 55000, 'U0001'),
('PJ2019070008', '2019-07-10', '17:20:55', 'P0001', 7, 125000, 'U0001'),
('PJ2019070009', '2019-07-10', '19:48:53', 'P0005', 4, 38000, 'U0001'),
('PJ2019070010', '2019-07-10', '19:51:00', 'P0006', 3, 45000, 'U0001'),
('PJ2019070011', '2019-07-14', '22:04:32', 'P0007', 0, 0, 'U0001'),
('PJ2019070012', '2019-07-15', '00:43:58', 'P0008', 0, 0, 'U0001'),
('PJ2019070013', '2019-07-15', '00:45:52', 'P0009', 3, 31000, 'U0001'),
('PJ2019070014', '2019-07-15', '00:48:56', 'P0010', 3, 36000, 'U0001'),
('PJ2019070015', '2019-07-15', '00:56:09', 'P0011', 3, 33000, 'U0001'),
('PJ2019070016', '2019-07-15', '00:59:35', 'P0012', 1, 14000, 'U0001'),
('PJ2019070017', '2019-07-15', '01:02:07', 'P0013', 3, 20000, 'U0001'),
('PJ2019070018', '2019-07-15', '01:06:28', 'P0014', 1, 14000, 'U0001'),
('PJ2019070019', '2019-07-15', '01:23:16', 'P0015', 1, 14000, 'U0003'),
('PJ2019070020', '2019-07-15', '01:31:11', 'P0016', 1, 14000, 'U0003'),
('PJ2019070021', '2019-07-15', '01:37:31', 'P0017', 1, 25000, 'U0001'),
('PJ2019070022', '2019-07-15', '01:39:46', 'P0018', 1, 11000, 'U0001'),
('PJ2019070023', '2019-07-15', '01:40:57', 'P0019', 1, 14000, 'U0001'),
('PJ2019070024', '2019-07-15', '01:43:28', 'P0020', 1, 11000, 'U0001'),
('PJ2019070025', '2019-07-15', '01:44:28', 'P0021', 2, 20000, 'U0001'),
('PJ2019070026', '2019-07-15', '01:47:18', 'P0022', 2, 22000, 'U0001'),
('PJ2019070027', '2019-07-15', '01:50:15', 'P0023', 1, 11000, 'U0001'),
('PJ2019070028', '2019-07-15', '01:53:45', 'P0024', 1, 10000, 'U0001'),
('PJ2019070029', '2019-07-15', '01:59:20', 'P0025', 1, 14000, 'U0001'),
('PJ2019070030', '2019-07-15', '02:01:31', 'P0026', 1, 11000, 'U0001'),
('PJ2019070031', '2019-07-15', '02:03:20', 'P0027', 1, 14000, 'U0001'),
('PJ2019070032', '2019-07-15', '02:10:03', 'P0028', 1, 14000, 'U0001'),
('PJ2019070033', '2019-07-15', '02:14:20', 'P0029', 1, 14000, 'U0001'),
('PJ2019070034', '2019-07-15', '02:16:26', 'P0030', 1, 14000, 'U0001'),
('PJ2019070035', '2019-07-15', '02:19:11', 'P0031', 1, 14000, 'U0001'),
('PJ2019070036', '2019-07-15', '02:21:24', 'P0032', 1, 14000, 'U0001'),
('PJ2019070037', '2019-07-15', '02:47:45', 'P0033', 8, 99000, 'U0001'),
('PJ2019070038', '2019-07-15', '03:01:37', 'P0034', 3, 35000, 'U0001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` varchar(10) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama_supplier`, `no_telepon`, `alamat`) VALUES
('S0001', 'didit', '089777878231', 'jl. ikan piranha'),
('S0002', 'Doni', '081200055513', 'Jl. Sutami');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `jk`, `alamat`, `level`, `foto`) VALUES
('U0001', 'Kasir01', 'kasir01', 'safira', 'perempuan', 'perum. villa bukit tidar', 'kasir', 'girl.png'),
('U0002', 'Kasir02', 'kasir02', 'faris', 'laki-laki', 'jl.blimbing no 38', 'kasir', 'boy.png'),
('U0003', 'Admin01', 'admin01', 'rifqi', 'laki-laki', 'perum villa bukit tidar 303', 'admin', 'boy.png'),
('U0004', 'Admin02', 'admin02', 'uzi', 'laki-laki', 'jl. ikan piranha', 'admin', 'boy.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bahan`
--
ALTER TABLE `tb_bahan`
  ADD PRIMARY KEY (`id_bahan`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `tb_detail_pembelian`
--
ALTER TABLE `tb_detail_pembelian`
  ADD PRIMARY KEY (`id_detail_pembelian`),
  ADD KEY `no_nota_pembelian` (`no_nota_pembelian`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- Indexes for table `tb_detail_penjualan`
--
ALTER TABLE `tb_detail_penjualan`
  ADD PRIMARY KEY (`id_detail_penjualan`),
  ADD KEY `no_nota` (`no_nota_penjualan`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`no_nota_pembelian`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_penggunaan`
--
ALTER TABLE `tb_penggunaan`
  ADD PRIMARY KEY (`id_penggunaan`),
  ADD KEY `id_menu` (`id_bahan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`no_nota_penjualan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_pembelian`
--
ALTER TABLE `tb_detail_pembelian`
  MODIFY `id_detail_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_detail_penjualan`
--
ALTER TABLE `tb_detail_penjualan`
  MODIFY `id_detail_penjualan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_pembelian`
--
ALTER TABLE `tb_detail_pembelian`
  ADD CONSTRAINT `tb_detail_pembelian_ibfk_1` FOREIGN KEY (`no_nota_pembelian`) REFERENCES `tb_pembelian` (`no_nota_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_pembelian_ibfk_2` FOREIGN KEY (`id_bahan`) REFERENCES `tb_bahan` (`id_bahan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_penjualan`
--
ALTER TABLE `tb_detail_penjualan`
  ADD CONSTRAINT `tb_detail_penjualan_ibfk_1` FOREIGN KEY (`no_nota_penjualan`) REFERENCES `tb_penjualan` (`no_nota_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_penjualan_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD CONSTRAINT `tb_pembelian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pembelian_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `tb_supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penjualan_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
