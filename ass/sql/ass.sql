-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2015 at 11:08 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ass`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `id_cthd` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_cthd`, `soluong`, `id_sp`, `id_hd`, `status`) VALUES
(1, 10, 1, 1, 0),
(2, 20, 2, 2, 0),
(3, 30, 3, 3, 0),
(4, 40, 4, 4, 0),
(5, 50, 5, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `id_hd` int(11) NOT NULL,
  `ngaymua` date NOT NULL,
  `id_kh` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `ngaymua`, `id_kh`, `status`) VALUES
(1, '2015-07-15', 1, 1),
(2, '2015-07-14', 2, 1),
(3, '2015-07-13', 3, 1),
(4, '2015-07-12', 4, 1),
(5, '2015-07-11', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `id_kh` int(11) NOT NULL,
  `kh_ten` varchar(50) NOT NULL,
  `kh_sdt` varchar(12) NOT NULL,
  `kh_diachi` char(200) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `kh_ten`, `kh_sdt`, `kh_diachi`, `status`) VALUES
(1, 'Phạm Văn A', '0123456789', 'Số 1, Hàm Nghi', 1),
(2, 'Phạm Văn B', '0123456789', 'Số 2, Hàm Nghi', 1),
(3, 'Phạm Văn C', '0123456789', 'Số 3, Hàm Nghi', 1),
(4, 'Phạm Văn D', '0123456789', 'Số 4, Hàm Nghi', 1),
(5, 'Phạm Văn E', '0123456789', 'Số 5, Hàm Nghi', 1),
(6, 'Anh ABC', '0123123123', 'Số 1, Hàm Nghi, My Đình', 1),
(7, 'Anh B', '0321232132', 'Số 3, Cầu Diễm', 0),
(8, 'ưewqe', 'ưqewqewq', 'eqweqweqweqw', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `id_lsp` int(11) NOT NULL,
  `lsp_ten` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`id_lsp`, `lsp_ten`, `status`) VALUES
(1, 'Áo', 0),
(2, 'Quần', 0),
(3, 'Váy', 0),
(4, 'Đầm', 0),
(5, 'Mũ', 0),
(6, 'Quần 1', 1),
(7, 'ưqewqe', 0),
(8, 'Áo 1', 0),
(9, 'Áo 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `id_sp` int(11) NOT NULL,
  `sp_ten` varchar(150) NOT NULL,
  `sp_gia` int(11) NOT NULL,
  `sp_mota` text NOT NULL,
  `id_lsp` int(11) NOT NULL,
  `sp_anh` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `sp_ten`, `sp_gia`, `sp_mota`, `id_lsp`, `sp_anh`, `status`) VALUES
(1, 'Áo ngắn tay 1', 1000, 'Mô tả áo ngắn tay 1', 1, 'images/1.jpg', 0),
(2, 'Áo ngắn tay 2', 1000, 'Mô tả áo ngắn tay 1', 1, 'images/2.jpg', 0),
(3, 'Áo ngắn tay 3', 1000, 'Mô tả áo ngắn tay 1', 1, 'images/3.jpg', 0),
(4, 'Áo ngắn tay 4', 1000, 'Mô tả áo ngắn tay 1', 1, 'images/4.jpg', 0),
(5, 'Áo ngắn tay 5', 1000, 'Mô tả áo ngắn tay 1', 1, 'images/5.jpg', 0),
(6, 'Áo sơ mi 1', 1000, 'áo sm1', 8, '', 0),
(7, 'áo 1', 1000, 'áo 1', 8, '', 0),
(8, 'áo 1', 1000, 'áo 1', 8, '', 0),
(9, 'quần sơ mi 1', 1000, 'sm1', 6, '', 0),
(10, 'áo nam nam', 10001, 'an11', 9, '@web/uploads/sp_10_1439368770.jpg', 1),
(11, 'Quần nam 1', 100001, 'qn1', 6, '@web/uploads/loaisanpham_11_1439369419.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_cthd`), ADD KEY `ChiTietHoaDon_HoaDon` (`id_hd`), ADD KEY `ChiTietHoaDon_SanPham` (`id_sp`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`), ADD KEY `HoaDon_KhachHang` (`id_kh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id_lsp`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`), ADD UNIQUE KEY `SanPham_ak_1` (`id_sp`), ADD KEY `SanPham_LoaiSanPham` (`id_lsp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_cthd` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id_lsp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
