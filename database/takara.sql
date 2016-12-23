-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2016 at 12:43 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `takara`
--
CREATE DATABASE IF NOT EXISTS `takara` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `takara`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `ProductTitle` varchar(100) COLLATE utf8_bin NOT NULL,
  `qty` int(10) NOT NULL,
  `ProductImage` varchar(200) COLLATE utf8_bin NOT NULL,
  `Price` int(20) NOT NULL,
  `Description` varchar(4000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) COLLATE utf8_bin NOT NULL,
  `Price` int(20) NOT NULL,
  `Image` varchar(200) COLLATE utf8_bin NOT NULL,
  `Description` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `TaiKhoan` varchar(25) COLLATE utf8_bin NOT NULL,
  `MatKhau` varchar(25) COLLATE utf8_bin NOT NULL,
  `Level` int(11) NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_bin NOT NULL,
  `SoDT` varchar(15) COLLATE utf8_bin NOT NULL,
  `DiaChi` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`TaiKhoan`, `MatKhau`, `Level`, `GioiTinh`, `SoDT`, `DiaChi`) VALUES
('admin', 'admin', 2, 'Nam', '0963203816', 0),
('admin', 'admin', 2, 'Nam', '0963203816', 0),
('admin', 'admin', 2, 'Nam', '0963203816', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
