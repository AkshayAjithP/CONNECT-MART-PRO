-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 08:45 AM
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
-- Database: `martpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpackage`
--

CREATE TABLE `bpackage` (
  `bk_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `amt` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `fdate` date NOT NULL,
  `tdate` date NOT NULL,
  `photo` text NOT NULL,
  `descrp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bpackage`
--

INSERT INTO `bpackage` (`bk_id`, `name`, `bname`, `amt`, `location`, `fdate`, `tdate`, `photo`, `descrp`) VALUES
(1, 'Onam Package', 'Mart Connect Pro Palakkad', '50000', 'Varkala', '2024-06-19', '2024-06-21', '3m.jpg', 'If you purchase for 5000 you can go to varkala');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `fdbk_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `cntno` text NOT NULL,
  `subj` text NOT NULL,
  `sdate` text NOT NULL,
  `reply` text NOT NULL,
  `rdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`fdbk_id`, `Log_Id`, `name`, `cntno`, `subj`, `sdate`, `reply`, `rdate`) VALUES
(1, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'the product you given in yesterday is \r\noutdated', '2024-06-05', 'come to store we will fix it', '2024-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `not_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `cntno` text NOT NULL,
  `subj` text NOT NULL,
  `sdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`not_id`, `Log_Id`, `name`, `cntno`, `subj`, `sdate`) VALUES
(2, 'LOG81876615123', 'Offer close', '9876543876', 'The offers in mannarkkad clos e sooj', '2024-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `bk_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `amt` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `fdate` date NOT NULL,
  `tdate` date NOT NULL,
  `photo` text NOT NULL,
  `descrp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppoints`
--

CREATE TABLE `ppoints` (
  `ord_id` int(11) NOT NULL,
  `BLog_Id` text DEFAULT NULL,
  `cname` text DEFAULT NULL,
  `ccontact_no` text DEFAULT NULL,
  `clocation` text DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `tot` double DEFAULT NULL,
  `branch` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ppoints`
--

INSERT INTO `ppoints` (`ord_id`, `BLog_Id`, `cname`, `ccontact_no`, `clocation`, `dat`, `tot`, `branch`) VALUES
(25, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 144, 'Mart Connect Pro Palakkad'),
(26, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 356.4, 'Mart Connect Pro Palakkad'),
(27, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 50.4, 'Mart Connect Pro Palakkad'),
(28, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 345, 'Mart Connect Pro Ottapalam'),
(29, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 54, 'Mart Connect Pro Palakkad'),
(30, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 18, 'Mart Connect Pro Palakkad'),
(31, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 36, 'Mart Connect Pro Palakkad'),
(32, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 360, 'Mart Connect Pro Palakkad'),
(33, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 54, 'Mart Connect Pro Palakkad'),
(34, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 360, 'Mart Connect Pro Palakkad'),
(35, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 72, 'Mart Connect Pro Palakkad'),
(36, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 360, 'Mart Connect Pro Palakkad'),
(37, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 34.5, 'Mart Connect Pro Ottapalam'),
(38, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 345, 'Mart Connect Pro Ottapalam'),
(39, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 34.5, 'Mart Connect Pro Ottapalam'),
(40, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 60, 'Mart Connect Pro Ottapalam'),
(41, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 67.5, 'Mart Connect Pro Palakkad'),
(42, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 27, 'Mart Connect Pro Palakkad'),
(43, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 27, 'Mart Connect Pro Palakkad'),
(44, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 345, 'Mart Connect Pro Ottapalam'),
(45, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 51.75, 'Mart Connect Pro Ottapalam'),
(46, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 345, 'Mart Connect Pro Ottapalam'),
(47, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 135, 'Mart Connect Pro Palakkad'),
(48, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 55.35, 'Mart Connect Pro Palakkad'),
(49, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 1.35, 'Mart Connect Pro Palakkad'),
(50, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 13.5, 'Mart Connect Pro Palakkad'),
(51, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 12, 'Mart Connect Pro Ottapalam'),
(52, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 27, 'Mart Connect Pro Palakkad'),
(53, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-03', 27, 'Mart Connect Pro Palakkad'),
(54, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-04', 43.2, 'Mart Connect Pro Palakkad'),
(55, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-05', 225, 'Mart Connect Pro Palakkad'),
(56, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-05', 43.2, 'Mart Connect Pro Palakkad'),
(57, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-05', 41.4, 'Mart Connect Pro Ottapalam'),
(58, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-05', 34.5, 'Mart Connect Pro Ottapalam'),
(59, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-05', 72, 'Mart Connect Pro Palakkad'),
(60, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-05', 36, 'Mart Connect Pro Palakkad'),
(61, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-05', 360, 'Mart Connect Pro Palakkad'),
(62, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-05', 36, 'Mart Connect Pro Palakkad'),
(63, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-08', 43.2, 'Mart Connect Pro Palakkad'),
(64, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-08', 36, 'Mart Connect Pro Palakkad'),
(65, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-08', 36, 'Mart Connect Pro Palakkad'),
(66, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-08', 6.9, 'Mart Connect Pro Ottapalam'),
(67, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-08', 36, 'Mart Connect Pro Palakkad'),
(68, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-08', 34.5, 'Mart Connect Pro Ottapalam'),
(69, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-08', 75, 'Mart Connect Pro Mannarkkad'),
(70, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-08', 54, 'Mart Connect Pro Palakkad'),
(71, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-08', 37.95, 'Mart Connect Pro Ottapalam'),
(72, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', '2024-06-08', 37.5, 'Mart Connect Pro Mannarkkad');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prd_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `qty` double NOT NULL,
  `price` double NOT NULL,
  `tax` double NOT NULL,
  `location` text NOT NULL,
  `photo` text NOT NULL,
  `desp` text NOT NULL,
  `branch` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `dmstat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prd_id`, `Log_Id`, `name`, `qty`, `price`, `tax`, `location`, `photo`, `desp`, `branch`, `date`, `dmstat`) VALUES
(16, 'LOG81876615123', 'Rice (Basmati)', 85, 120, 0, 'Palakkad', 'Rice (Basmati) - Daawat.jpg', 'Rice (Basmati) - Daawat', 'Mart Connect Pro Palakkad', '2024-06-03', ''),
(17, 'LOG81876615123', 'Rice (Basmati)', 97, 115, 0, 'Ottapalam', 'Rice (Basmati) - Daawat.jpg', 'Rice (Basmati) - Daawat', 'Mart Connect Pro Ottapalam', '2024-06-03', ''),
(18, 'LOG81876615123', 'Rice (Basmati)', 100, 125, 0, 'Mannarkkad', 'Rice (Basmati) - Daawat.jpg', 'Rice (Basmati) - Daawat', 'Mart Connect Pro Mannarkkad', '2024-06-03', ''),
(19, 'LOG81876615123', 'Wheat Flour (Atta)', 140, 45, 0, 'Palakkad', 'Wheat Flour (Atta) - Aashirvaad.jpg', 'Wheat Flour (Atta) - Aashirvaad', 'Mart Connect Pro Palakkad', '2024-06-03', ''),
(20, 'LOG81876615123', 'Wheat Flour (Atta)', 150, 40, 0, 'Ottapalam', 'Wheat Flour (Atta) - Aashirvaad.jpg', 'Wheat Flour (Atta) - Aashirvaad', 'Mart Connect Pro Ottapalam', '2024-06-03', ''),
(22, 'LOG81876615123', 'Wheat Flour (Atta)', 160, 55, 0, 'Mannarkkad', 'Wheat Flour (Atta) - Aashirvaad.jpg', 'Wheat Flour (Atta) - Aashirvaad', 'Mart Connect Pro Mannarkkad', '2024-06-03', ''),
(23, 'LOG81876615123', 'Pulses(Tool Dal)', 50, 150, 10, 'Palakkad', 'Pulses (Toor Dal) - Tata Sampann.jpg', 'Pulses(Tool Dal)', 'Mart Connect Pro Palakkad', '2024-06-05', ''),
(24, 'LOG81876615123', 'Pulses(Tool Dal)', 120, 130, 10, 'Ottapalam', 'Pulses (Toor Dal) - Tata Sampann.jpg', 'Pulses(Tool Dal)', 'Mart Connect Pro Ottapalam', '2024-06-05', ''),
(25, 'LOG81876615123', 'Pulses(Tool Dal)', 100, 85, 10, 'Mannarkkad', 'Pulses (Toor Dal) - Tata Sampann.jpg', 'Pulses(Tool Dal)', 'Mart Connect Pro Mannarkkad', '2024-06-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE `productorder` (
  `ord_id` int(11) NOT NULL,
  `BLog_Id` text DEFAULT NULL,
  `SLog_Id` text DEFAULT NULL,
  `cname` text DEFAULT NULL,
  `ccontact_no` text DEFAULT NULL,
  `clocation` text DEFAULT NULL,
  `pname` text DEFAULT NULL,
  `qty` text DEFAULT NULL,
  `price` double DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `tot` double DEFAULT NULL,
  `stat` text DEFAULT NULL,
  `tax` double NOT NULL,
  `taxa` double NOT NULL,
  `branch` varchar(200) NOT NULL,
  `Od_Id` varchar(200) NOT NULL,
  `pstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `productorder`
--

INSERT INTO `productorder` (`ord_id`, `BLog_Id`, `SLog_Id`, `cname`, `ccontact_no`, `clocation`, `pname`, `qty`, `price`, `dat`, `photo`, `tot`, `stat`, `tax`, `taxa`, `branch`, `Od_Id`, `pstatus`) VALUES
(54, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Rice (Basmati)', '12', 120, '2024-06-04', 'Rice (Basmati) - Daawat.jpg', 1440, 'Accept', 0, 0, 'Mart Connect Pro Palakkad', '4349438', 'confirm'),
(55, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Pulses(Tool Dal)', '50', 150, '2024-06-05', 'Pulses (Toor Dal) - Tata Sampann.jpg', 7500, 'Accept', 10, 750, 'Mart Connect Pro Palakkad', '3910788', 'confirm'),
(56, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Rice (Basmati)', '12', 120, '2024-06-05', 'Rice (Basmati) - Daawat.jpg', 1440, 'Accept', 0, 0, 'Mart Connect Pro Palakkad', '1907971', 'confirm'),
(57, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Rice (Basmati)', '12', 115, '2024-06-05', 'Rice (Basmati) - Daawat.jpg', 1380, 'Accept', 0, 0, 'Mart Connect Pro Ottapalam', '698485', 'confirm'),
(58, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Rice (Basmati)', '10', 115, '2024-06-05', 'Rice (Basmati) - Daawat.jpg', 1150, 'Accept', 0, 0, 'Mart Connect Pro Ottapalam', '1562501', 'confirm'),
(60, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Rice (Basmati)', '10', 120, '2024-06-05', 'Rice (Basmati) - Daawat.jpg', 1200, 'Accept', 0, 0, 'Mart Connect Pro Palakkad', '12566', 'confirm'),
(61, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Rice (Basmati)', '100', 120, '2024-06-05', 'Rice (Basmati) - Daawat.jpg', 12000, 'Accept', 0, 0, 'Mart Connect Pro Palakkad', '2608985', 'confirm'),
(63, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Rice (Basmati)', '12', 120, '2024-06-08', 'Rice (Basmati) - Daawat.jpg', 1440, 'Accept', 0, 0, 'Mart Connect Pro Palakkad', '4086345', 'confirm'),
(70, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Rice (Basmati)', '15', 120, '2024-06-08', 'Rice (Basmati) - Daawat.jpg', 1800, 'Pending', 0, 0, 'Mart Connect Pro Palakkad', '2540874', 'confirm'),
(71, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Rice (Basmati)', '11', 115, '2024-06-08', 'Rice (Basmati) - Daawat.jpg', 1265, 'Pending', 0, 0, 'Mart Connect Pro Ottapalam', '2869988', 'confirm'),
(72, 'MRTP502812890', 'LOG81876615123', 'Akshay Ajith', '8795324879', 'Ayodhya House Munnurcode', 'Rice (Basmati)', '10', 125, '2024-06-08', 'Rice (Basmati) - Daawat.jpg', 1250, 'Pending', 0, 0, 'Mart Connect Pro Mannarkkad', '4207123', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `wrk_id` int(11) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `cntno` text NOT NULL,
  `wtype` text NOT NULL,
  `location` text NOT NULL,
  `srvce` text NOT NULL,
  `date` date NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `contact_no` text NOT NULL,
  `email` text NOT NULL,
  `location` text NOT NULL,
  `password` text NOT NULL,
  `utype` text NOT NULL,
  `stat` text NOT NULL,
  `liceno` text DEFAULT NULL,
  `adharno` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `date` date NOT NULL,
  `age` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `qual` varchar(200) NOT NULL,
  `expr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Log_Id`, `name`, `contact_no`, `email`, `location`, `password`, `utype`, `stat`, `liceno`, `adharno`, `photo`, `date`, `age`, `sex`, `qual`, `expr`) VALUES
(4, 'LOG81876615123', 'Administrator', '9979756467', 'MartConnectPro@gmail.com', 'Mannarkkad', 'MartConnectPro', 'Admin', 'Active', '', '', 'b.jpg', '2021-12-11', '', '', '', ''),
(32, 'MRTP417246127', 'Mart Connect Pro Palakkad', '7034868078', 'MCPPKD@gmail.com', 'Palakkad', '12345', 'Manager', 'Active', 'Manager_PKD', 'Near Victoria College', 'Palakkad.jpg', '2024-06-03', '', '', '', ''),
(33, 'MRTP294654747', 'Mart Connect Pro Ottapalam', '8084846885', 'MCPOTP@gmail.com', 'Ottapalam', '12345', 'Manager', 'Active', 'Manager-OTP', 'Near Ashwini Hospital', 'Ottapalam.jpg', '2024-06-03', '', '', '', ''),
(34, 'MRTP158090451', 'Mart Connect Pro Mannarkkad', '7845658992', 'MCPMKD@gmail.com', 'Mannarkkad', '12345', 'Manager', 'Active', 'Manager-Mannarkkad', 'Near Mes college', 'Mannarkad.jpg', '2024-06-03', '', '', '', ''),
(35, 'MRTP319055335', 'Hafil', '9548265268', 'hafilpkd@gmail.com', 'Kalladikode', '12345', 'Employee', 'Active', 'Mart Connect Pro Palakkad', NULL, '1m.jpg', '2024-06-03', '22', 'Male', 'MCA', '2'),
(36, 'MRTP298171694', 'Habeeb', '9587645212', 'habeebpkd@gmail.com', 'Thootha', '12345', 'Employee', 'Active', 'Mart Connect Pro Palakkad', NULL, '2m.jpg', '2024-06-03', '23', 'Male', 'mca', '3'),
(37, 'MRTP354036644', 'Sudhin', '7894561551', 'habeebpkd@gmail.com', 'Perithalmanna', '12345', 'Employee', 'Active', 'Mart Connect Pro Palakkad', NULL, '3m.jpg', '2024-06-03', '21', 'Male', 'MCA', '1'),
(38, 'MRTP413098565', 'Abhijith', '9578546325', 'abhithotp@gmail.com', 'Kadamazipuram', '12345', 'Employee', 'Active', 'Mart Connect Pro Ottapalam', NULL, '4m.jpg', '2024-06-03', '23', 'Male', 'bsc maths', '5'),
(39, 'MRTP422432149', 'Ajay Raj', '7897654284', 'ajayotp@gmail.com', 'Cherupulassery', '12345', 'Employee', 'Active', 'Mart Connect Pro Ottapalam', NULL, '5m.jpg', '2024-06-03', '20', 'Male', 'bca', '1'),
(40, 'MRTP116108108', 'Anand', '9823567532', 'anandotp@gmail.com', 'Pulapatta', '12345', 'Employee', 'Active', 'Mart Connect Pro Palakkad', NULL, '6m.jpg', '2024-06-03', '24', 'Male', 'plus two', '6'),
(41, 'MRTP468645985', 'Ajay Das', '9312547856', 'ajaymkd@gmail.com', 'Pulapatta', '12345', 'Employee', 'Active', 'Mart Connect Pro Mannarkkad', NULL, '7m.jpg', '2024-06-03', '23', 'Male', 'MCA', '4'),
(42, 'MRTP224225878', 'Ranjith K R', '6530251113', 'ranjithmkd@gmail.com', 'Njettrakadavu', '12345', 'Employee', 'Active', 'Mart Connect Pro Mannarkkad', NULL, '8m.jpg', '2024-06-03', '25', 'Male', 'bsc', '3'),
(43, 'MRTP55663346', 'Syam VG', '9652857596', 'syammkd@gmail.com', 'Mangalam Kunnu', '12345', 'Employee', 'Active', 'Mart Connect Pro Mannarkkad', NULL, '9m.jpg', '2024-06-03', '27', 'Male', 'bsc', '4'),
(44, 'MRTP502812890', 'Akshay Ajith', '8795324879', 'akshay@gmail.com', 'Ayodhya House Munnurcode', '12345', 'User', 'Active', 'Mart Connect Pro Mannarkkad', NULL, '10m.jpg', '2024-06-03', '22', 'Male', '', ''),
(45, 'MRTP347612196', 'Akash', '9527458528', 'akash@gmail.com', 'Ayodhya House Munnurcode', '12345', 'User', 'Active', 'Mart Connect Pro Palakkad', NULL, '11m.jpg', '2024-06-05', '22', 'Male', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpackage`
--
ALTER TABLE `bpackage`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`fdbk_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`not_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `ppoints`
--
ALTER TABLE `ppoints`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indexes for table `productorder`
--
ALTER TABLE `productorder`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`wrk_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpackage`
--
ALTER TABLE `bpackage`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `fdbk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `not_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppoints`
--
ALTER TABLE `ppoints`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `productorder`
--
ALTER TABLE `productorder`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `wrk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
