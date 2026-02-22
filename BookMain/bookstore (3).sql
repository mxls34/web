-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2026 at 04:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookID` varchar(5) NOT NULL,
  `BookName` varchar(50) DEFAULT NULL,
  `TypeID` char(3) DEFAULT NULL,
  `StatusID` char(2) DEFAULT NULL,
  `Publish` varchar(20) DEFAULT NULL,
  `UnitPrice` int(4) DEFAULT NULL,
  `UnitRent` int(2) DEFAULT NULL,
  `DayAmount` int(2) DEFAULT NULL,
  `Picture` varchar(30) DEFAULT NULL,
  `Bookdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookID`, `BookName`, `TypeID`, `StatusID`, `Publish`, `UnitPrice`, `UnitRent`, `DayAmount`, `Picture`, `Bookdate`) VALUES
('00001', 'Doraemon', '002', '02', 'Kpn', 15, 0, 0, '-', '2554-02-01'),
('00002', 'เก็บตะวัน', '002', '03', 'WRP', 250, 5, 3, '-', '2554-03-20'),
('00003', 'สิ่งมีชีวิต', '002', '01', 'YPR', 185, 3, 3, '-', '2553-03-25'),
('00004', 'คู่สร้างคู่สม', '003', '01', 'DDR', 20, 1, 2, '-', '2552-01-15'),
('00005', 'Konan', '001', '02', 'Kpn', 80, 2, 2, '-', '2554-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` varchar(4) NOT NULL,
  `customerName` varchar(30) DEFAULT NULL,
  `CustomerSurname` varchar(30) DEFAULT NULL,
  `CustomerAddr` varchar(60) DEFAULT 'Yes',
  `CustomerPhone` varchar(10) DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `customerName`, `CustomerSurname`, `CustomerAddr`, `CustomerPhone`) VALUES
('0001', 'สมชัย', 'เชียงพงศ์พันธุ์', 'ปราจีนบุรี', '037213219'),
('0002', 'jone', 'Smith', 'กรุงเทพ', '027341293');

-- --------------------------------------------------------

--
-- Table structure for table `statusbook`
--

CREATE TABLE `statusbook` (
  `StatusID` char(2) NOT NULL,
  `StatustName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statusbook`
--

INSERT INTO `statusbook` (`StatusID`, `StatustName`) VALUES
('01', 'ปกติ'),
('02', 'ชำรุด'),
('03', 'ส่งซ่อม');

-- --------------------------------------------------------

--
-- Table structure for table `typebook`
--

CREATE TABLE `typebook` (
  `TypeID` char(3) NOT NULL,
  `TypeName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typebook`
--

INSERT INTO `typebook` (`TypeID`, `TypeName`) VALUES
('001', 'การ์ตูน'),
('002', 'นิยาย'),
('003', 'นิตยสาร');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `statusbook`
--
ALTER TABLE `statusbook`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `typebook`
--
ALTER TABLE `typebook`
  ADD PRIMARY KEY (`TypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
