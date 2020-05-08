-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2020 at 02:37 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ka_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar_hutang`
--

CREATE TABLE IF NOT EXISTS `bayar_hutang` (
  `nomor_bayar` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_bayar` date NOT NULL,
  `kode_supplier` int(11) NOT NULL,
  `kode_petugas` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  PRIMARY KEY (`nomor_bayar`),
  UNIQUE KEY `kode_supplier` (`kode_supplier`,`kode_petugas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bayar_hutang`
--


-- --------------------------------------------------------

--
-- Table structure for table `bayar_piutang`
--

CREATE TABLE IF NOT EXISTS `bayar_piutang` (
  `nomor_bayar` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_bayar` date NOT NULL,
  `kode_petugas` int(11) NOT NULL,
  `kode_pelanggan` int(11) NOT NULL,
  `total_bayar` double NOT NULL,
  PRIMARY KEY (`nomor_bayar`),
  UNIQUE KEY `kode_petugas` (`kode_petugas`,`kode_pelanggan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bayar_piutang`
--


-- --------------------------------------------------------

--
-- Table structure for table `detail_beli`
--

CREATE TABLE IF NOT EXISTS `detail_beli` (
  `nomor_beli` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_beli` date NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `qty_beli` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `diskon` double NOT NULL,
  `stock_akhir` int(11) NOT NULL,
  PRIMARY KEY (`nomor_beli`),
  UNIQUE KEY `kode_barang` (`kode_barang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `detail_beli`
--


-- --------------------------------------------------------

--
-- Table structure for table `detail_jual`
--

CREATE TABLE IF NOT EXISTS `detail_jual` (
  `nomor_faktur` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_jual` date NOT NULL,
  `nomor_beli` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `qty_jual` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `diskon` double NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `laba` double NOT NULL,
  PRIMARY KEY (`nomor_faktur`),
  UNIQUE KEY `kode_barang` (`kode_barang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `detail_jual`
--


-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE IF NOT EXISTS `faktur` (
  `no_faktur_jual` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_jual` date NOT NULL,
  `kode_pelanggan` int(11) NOT NULL,
  `total_jual` double NOT NULL,
  `total_diskon` double NOT NULL,
  `total_bayar` double NOT NULL,
  `piutang` double NOT NULL,
  `total_laba` double NOT NULL,
  `jumlah_uang` double NOT NULL,
  `kembalian` double NOT NULL,
  PRIMARY KEY (`no_faktur_jual`),
  UNIQUE KEY `kode_pelanggan` (`kode_pelanggan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faktur`
--

INSERT INTO `faktur` (`no_faktur_jual`, `tgl_jual`, `kode_pelanggan`, `total_jual`, `total_diskon`, `total_bayar`, `piutang`, `total_laba`, `jumlah_uang`, `kembalian`) VALUES
(1, '2020-04-30', 1, 200000, 5000, 195000, 0, 0, 200000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `kode_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `saldo` int(11) NOT NULL,
  PRIMARY KEY (`kode_pelanggan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`kode_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `alamat`, `no_hp`, `saldo`) VALUES
(1, 'Karsem1', 'Laki-laki', 'Jatiwangi Asih', '1234567', 20000),
(5, 'Juminten', 'Perempuan', 'Petamburan', '123456789', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `nomor_beli` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_beli` date NOT NULL,
  `total_beli` int(11) NOT NULL,
  `total_diskon` double NOT NULL,
  `total_bayar` double NOT NULL,
  `hutang` double NOT NULL,
  `kode_supplier` int(11) NOT NULL,
  PRIMARY KEY (`nomor_beli`),
  KEY `kode_supplier` (`kode_supplier`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`nomor_beli`, `tgl_beli`, `total_beli`, `total_diskon`, `total_bayar`, `hutang`, `kode_supplier`) VALUES
(22, '2020-05-07', 50000, 5000, 45000, 0, 7),
(21, '2020-05-08', 300000, 5000, 195000, 100000, 8),
(24, '2020-05-07', 300000, 10000, 290000, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `no_faktur_jual` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_jual` date NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `qty_jual` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `diskon` double NOT NULL,
  `laba` double NOT NULL,
  PRIMARY KEY (`no_faktur_jual`),
  KEY `kode_barang` (`kode_barang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`no_faktur_jual`, `tgl_jual`, `kode_barang`, `qty_jual`, `total_harga`, `diskon`, `laba`) VALUES
(1, '2020-05-06', 1, 2, 200000, 10, 10000),
(5, '2020-05-07', 1, 2, 0, 0, 0),
(6, '2020-05-07', 6, 10, 0, 0, 0),
(7, '2020-05-08', 4, 20, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `kode_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(50) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Admin','Marketing') NOT NULL,
  PRIMARY KEY (`kode_petugas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`kode_petugas`, `nama_petugas`, `jabatan`, `username`, `password`, `level`) VALUES
(1, 'Dinar', 'Admin', 'admin1', 'dinar', 'Admin'),
(8, 'Mimin', 'Admin', 'admin2', '13d2c27d75f43e084f96904768e10fee', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `kode_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(50) NOT NULL,
  `nama_kontak` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(14) NOT NULL,
  `saldo` double NOT NULL,
  PRIMARY KEY (`kode_supplier`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `nama_kontak`, `alamat`, `hp`, `saldo`) VALUES
(8, 'PT. Bahagia', 'Anwar', 'Jl. Pasteur', '025145678', 320000),
(5, 'CV. Dongkrak Antik', 'Kasino', 'Petamburan', '0002293', 200000),
(7, 'Toko Kembang', 'Bunga', 'Perum', '023145678', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_barang`
--

CREATE TABLE IF NOT EXISTS `tabel_barang` (
  `kode_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `stock` int(4) NOT NULL,
  `stockmin` int(4) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_beli` double NOT NULL,
  `disk` int(4) NOT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`kode_barang`, `nama_barang`, `stock`, `stockmin`, `harga_jual`, `harga_beli`, `disk`) VALUES
(1, 'HVS', 20, 3, 100000, 75000, 2),
(5, 'Penghapus', 20, 2, 1500, 500, 0),
(4, 'Pensil 2B', 10, 2, 3500, 1500, 0),
(6, 'Rautan', 10, 1, 500, 350, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
