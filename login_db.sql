-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 05:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `id_news` int(50) NOT NULL,
  `images_news` varchar(255) NOT NULL,
  `title_news` varchar(255) NOT NULL,
  `details_news` varchar(255) NOT NULL,
  `details_newstotal` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`id_news`, `images_news`, `title_news`, `details_news`, `details_newstotal`, `time`) VALUES
(1, '1924139337.jpg', 'wannapha keangkhamll', 'After a database and a table have been created, we can start adding data in', 'โตโยต้าแก่นนครตัวแทนจำหน่ายรถยนต์โตโยต้าในจังหวัดขอนแก่นที่ดีที่สุด มีบริการต่างๆมากมายครบครัน สิ่งอำนวยความสะดวกสำหรับลูกค้าที่เข้ามาใช้บริการ.โตโยต้าแก่นนครตัวแทนจำหน่ายรถยนต์โตโยต้าในจังหวัดขอนแก่นที่ดีที่สุด มีบริการต่างๆมากมายครบครัน สิ่งอำนวยความสะด', '2023-12-27 03:06:39'),
(2, '2109540382.jpg', 'ตัวแทนจำหน่ายรถยนต์โตโยต้า จังหวัดขอนแก่น', 'ตลาดรักษ์แก่น กรีนมาร์เก็ต by โตโยต้าแก่นนคร สาขาบ้านดอน ครั้งที่ 3', 'โตโยต้าแก่นนครตัวแทนจำหน่ายรถยนต์โตโยต้าในจังหวัดขอนแก่นที่ดีที่สุด มีบริการต่างๆมากมายครบครัน สิ่งอำนวยความสะดวกสำหรับลูกค้าที่เข้ามาใช้บริการ.โตโยต้าแก่นนครตัวแทนจำหน่ายรถยนต์โตโยต้าในจังหวัดขอนแก่นที่ดีที่สุด มีบริการต่างๆมากมายครบครัน สิ่งอำนวยความสะด', '2023-12-27 03:06:39'),
(8, '998481030.jpg', 'ตัวแทนจำหน่ายรถยนต์โตโยต้า จังหวัดขอนแก่น', 'ตลาดรักษ์แก่น กรีนมาร์เก็ต by โตโยต้าแก่นนคร สาขาบ้านดอน ครั้งที่ 3', ' โตโยต้าแก่นนครตัวแทนจำหน่ายรถยนต์โตโยต้าในจังหวัดขอนแก่นที่ดีที่สุด มีบริการต่างๆมากมายครบครัน สิ่งอำนวยความสะดวกสำหรับลูกค้าที่เข้ามาใช้บริการ.', '2023-12-27 03:06:39'),
(10, '1912340680.jpg', 'ตัวแทนจำหน่ายรถยนต์โตโยต้า จังหวัดขอนแก่น', 'ตลาดรักษ์แก่น กรีนมาร์เก็ต by โตโยต้าแก่นนคร สาขาบ้านดอน ครั้งที่ 3 ', ' เมื่อวันที่ 7 เม.ย. 62 บริษัท โตโยต้าแก่นนคร จำกัด นำโดยคุณโชคชัย คุณวาสี กรรมการผู้จักการ ได้จัดกิจกรรมทำบุญตักบาตร หลวงพ่อสายทอง เตชะธัมโม ขึ้นที่บริษัทโตโยต้าแก่นนคร สำนักงานใหญ่ เนื่องในโอกาสวันปีใหม่ไทย หรือวันสงกรานต์       ถือว่าเป็นการสร้างบุญสร้', '2023-12-27 03:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employeenews`
--

CREATE TABLE `tbl_employeenews` (
  `id` int(50) NOT NULL,
  `id_employee` int(20) NOT NULL,
  `img_employeenews` varchar(255) NOT NULL,
  `title_employeenews` varchar(255) NOT NULL,
  `details_employeenews` varchar(255) NOT NULL,
  `position_employeenews` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_employeenews`
--

INSERT INTO `tbl_employeenews` (`id`, `id_employee`, `img_employeenews`, `title_employeenews`, `details_employeenews`, `position_employeenews`, `time`) VALUES
(12, 6362145, '182580060.jpg', 'วรรณภา แก้งคำ', 'ชื่อเล่น เอ็ม', 'เจ้าหน้าที่ทรัยพยากรมนุษย์ สำนักงานใหญ่', '2023-12-21 04:40:53'),
(13, 1, '1793599922.png', 'wannapha Keangkham', 'ชื่อเล่น เอ็ม', 'หัวหน้าช่างแผนก GS', '2023-12-24 04:18:53'),
(14, 12345, '726183947.jpg', 'วรรณภา แก้งคำ', 'ชื่อเล่น', 'เจ้าหน้าที่ทรัยพยากรมนุษย์ สำนักงานใหญ่', '2023-12-25 04:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employeeresign`
--

CREATE TABLE `tbl_employeeresign` (
  `id` int(50) NOT NULL,
  `id_employeeresign` int(20) NOT NULL,
  `img_employeeresign` varchar(255) NOT NULL,
  `title_employeeresign` varchar(255) NOT NULL,
  `details_employeeresign` varchar(255) NOT NULL,
  `position_employeeresign` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_employeeresign`
--

INSERT INTO `tbl_employeeresign` (`id`, `id_employeeresign`, `img_employeeresign`, `title_employeeresign`, `details_employeeresign`, `position_employeeresign`, `time`) VALUES
(2, 1, '666245037.jpg', 'วรรณภา แก้งคำ', 'ชื่อเล่น แก้ว', 'เจ้าหน้าที่ทรัพยากรมนุษย์ สำนักงานใหญ่', '2023-12-19 04:43:27'),
(3, 286352, '1101804264.jpg', 'วรรณภา แก้งคำ', '0o', 'ช่าง BP', '2023-12-19 04:43:27'),
(5, 2, '1390201442.jpg', 'คณารักษ์ อรรคพงษ์', '\r\n\r\ns', 'IT SUPPORT', '2023-12-20 08:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_calender`
--

CREATE TABLE `tbl_event_calender` (
  `id_calender` int(50) NOT NULL,
  `date_calender` varchar(255) NOT NULL,
  `event_calender` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_event_calender`
--

INSERT INTO `tbl_event_calender` (`id_calender`, `date_calender`, `event_calender`, `time`) VALUES
(6, '01 มกราคม 2566', 'กิจกรรมวันแม่', '2023-12-20 02:21:43'),
(7, '30 - 2 ธันวาคม 2566', 'วันหยุดปีใหม่', '2023-12-23 07:50:13'),
(8, '2023-12-30', 'รับเงินเดือน ประจำเดือน ธันวาคม', '2023-12-23 08:29:36'),
(9, '2023-11-28', 'กิจกรรมฟุตซอลประเพณี โตโยต้าแก่นนคร ครั้งที่9', '2023-12-24 04:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `password`, `role`, `time`) VALUES
(1, 'wannapha', 'keangkham', 'emmy9878', '$2y$10$uRt0s979RenLK7MuPfoPpeKR0a7SPM4R.SR270D/x8neK4vMzfjuy', 'Admin', '2023-12-19 04:44:06'),
(2, 'wannapha', 'kkkk', 'for123', '$2y$10$hY6yFCZ/8wgzBMZ6.CXHh.MNEUZadbn0iZBtF8xUlvKf8i3qvTAii', 'User', '2023-12-19 04:44:06'),
(5, 'วรรณภา', 'แก้วคำ', 'sd3', '$2y$10$BbCAKAEjQPGvABashudsjOrEekpvsMTuPmRBIsg1OQomOtWbdZLdC', 'Admin', '2023-12-19 04:44:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `tbl_employeenews`
--
ALTER TABLE `tbl_employeenews`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_employeeresign`
--
ALTER TABLE `tbl_employeeresign`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_event_calender`
--
ALTER TABLE `tbl_event_calender`
  ADD PRIMARY KEY (`id_calender`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `id_news` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_employeenews`
--
ALTER TABLE `tbl_employeenews`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_employeeresign`
--
ALTER TABLE `tbl_employeeresign`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_event_calender`
--
ALTER TABLE `tbl_event_calender`
  MODIFY `id_calender` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
