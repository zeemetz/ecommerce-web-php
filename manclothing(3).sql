-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2015 at 12:42 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `manclothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `qtyM` int(11) NOT NULL,
  `qtyL` int(11) NOT NULL,
  `qtyXL` int(11) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `username`, `kode`, `qtyM`, `qtyL`, `qtyXL`, `date`) VALUES
(7, 'yodyhariadi@gmail.com', 'KM001', 2, 1, 3, '10 June 2015'),
(8, 'yodyhariadi@gmail.com', 'KM001', 1, 1, 1, '10 June 2015');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `detailid` int(11) NOT NULL,
  `headerid` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `qtym` int(11) NOT NULL,
  `qtyl` int(11) NOT NULL,
  `qtyxl` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`detailid`, `headerid`, `kode`, `qtym`, `qtyl`, `qtyxl`) VALUES
(5, '557687f853dc9', 'KM001', 1, 2, 3),
(6, '55769d9340ec5', 'KM001', 0, 1, 0),
(7, '55769d9340ec5', 'KM001', 0, 0, 1),
(8, '55769dd7347af', 'KM001', 1, 1, 2),
(9, '5577fb209d5c5', 'KM001', 0, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
  `headerid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `destinationcity` varchar(100) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `resi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`headerid`, `username`, `date`, `address`, `Status`, `destinationcity`, `ongkir`, `total`, `phone`, `resi`) VALUES
('557687f853dc9', 'yodyhariadi@gmail.com', '9 June 201', 'KH Syahdan', 'in JNE', 'Banggai Kepulauan - Sulawesi Tengah (Kabupaten)', 61000, 570000, '089635527273', 'testong'),
('55769d9340ec5', 'yodyhariadi@gmail.com', '9 June 201', 'villa dago tol c8 no 16', 'pending', 'Tangerang - Banten (Kabupaten)', 9000, 190000, '02191552496', '-'),
('55769dd7347af', 'yodyhariadi@gmail.com', '9 June 201', 'Testong', 'pending', 'Ambon - Maluku (Kota)', 58000, 380000, '1972498124', '-'),
('5577fb209d5c5', 'yodyhariadi@gmail.com', '10 June 20', 'Kemana Aja boleh', 'in JNE', 'Ambon - Maluku (Kota)', 58000, 380000, '080989991231', 'testong'),
('5577fb341b0c3', 'yodyhariadi@gmail.com', '10 June 20', 'Kemana Aja boleh', 'pending', 'Ambon - Maluku (Kota)', 58000, 380000, '080989991231', '-');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `paymentid` int(11) NOT NULL,
  `headerid` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `rekening` varchar(100) NOT NULL,
  `an` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `rekeningpenerima` varchar(100) NOT NULL,
  `anpenerima` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `headerid`, `status`, `rekening`, `an`, `amount`, `rekeningpenerima`, `anpenerima`, `note`) VALUES
(1, '5577fb209d5c5', 'done', '1231231231', 'yody hariadi', 10000000, '3213123211', 'Aprilia chayadi', ''),
(2, '5577fb341b0c3', 'failed', '1212121212', 'james', 205000, '3213123121', 'Aprilia chayadi', 'kurang duit\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `kode` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `stockM` int(11) NOT NULL,
  `stockL` int(11) NOT NULL,
  `stockXL` int(11) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `berat` float NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`kode`, `nama`, `tipe`, `harga`, `stockM`, `stockL`, `stockXL`, `deskripsi`, `berat`, `image`) VALUES
('KM001', 'White Plain Long Shirt', 'kemeja', 95000, 2, 0, 3, 'no-Slim Fit, Cotton', 0.2, 'DSCN0417.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `Address`, `phone`, `role`) VALUES
('admin@admin.admin', 'admin', 'admin', 'admin', 'admin'),
('yodyhariadi@gmail.com', '1234', '', '089635527273', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`), ADD KEY `kode` (`kode`), ADD KEY `username` (`username`), ADD KEY `username_2` (`username`), ADD KEY `kode_2` (`kode`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`detailid`), ADD KEY `headerid` (`headerid`), ADD KEY `kode` (`kode`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`headerid`), ADD KEY `username` (`username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`), ADD KEY `headerid` (`headerid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `detailid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`kode`) REFERENCES `product` (`kode`);

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`headerid`) REFERENCES `header` (`headerid`),
ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`kode`) REFERENCES `product` (`kode`);

--
-- Constraints for table `header`
--
ALTER TABLE `header`
ADD CONSTRAINT `header_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`headerid`) REFERENCES `header` (`headerid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
