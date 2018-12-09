-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 06:34 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlthuvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `giaotrinh`
--

CREATE TABLE `giaotrinh` (
  `GiaoTrinhID` int(50) NOT NULL,
  `TenGiaoTrinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NhaXuatBan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NamXuatBan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giaotrinh`
--

INSERT INTO `giaotrinh` (`GiaoTrinhID`, `TenGiaoTrinh`, `NhaXuatBan`, `NamXuatBan`) VALUES
(1, 'Hệ Quản Trị CSDL', 'Đại Học Quốc Gia Hà Nội', '2017'),
(2, 'Lập Trình Web', 'Đại Học Quốc Gia Thành Phố Hồ Chí Minh', '2016'),
(3, 'Lập Trình Di Động ', 'Thành Phố Huế', '2017'),
(4, 'Ngôn Ngữ Lập Trình Nâng Cao', 'Đại Học Bách Khoa ', '2013'),
(5, 'Giải Tích 1 Biến', 'Đại Học Sư Phạm Một Hà Nội', '2013'),
(6, 'Tin Đại Cương ', 'Đại Học Khoa Học Tự Nhiên Hà Nội', '2017'),
(7, 'Mạng Máy Tính', 'Nhà xuất Bản Giáo Dục', '1998'),
(8, 'Kỹ Thuật Xử Lý Tài Nguyên Nước ', 'Cục Xử Lý Tài Nguyên Và Môi Trưởng', '1993');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'Tran Thi Hong Hai', '123123', 'daihocthuyloi98@gmail.com'),
(2, 'Luu Thi Quynh', '123456', 'quynh12@gmail.com'),
(3, 'Nguyen Van Hau', '123678', 'hau123gmail.com'),
(4, 'Tran Van Kien', '345678', 'trankiengmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giaotrinh`
--
ALTER TABLE `giaotrinh`
  ADD KEY `GiaoTrinhID` (`GiaoTrinhID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
