-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2025 at 10:44 PM
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
-- Database: `ecolect`
--

-- --------------------------------------------------------

--
-- Table structure for table `ewaste`
--

CREATE TABLE `ewaste` (
  `Sr.No` int(10) NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `EName` varchar(30) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Latitude` float NOT NULL,
  `Longitude` float NOT NULL,
  `Address` longtext NOT NULL,
  `Datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ewaste`
--

INSERT INTO `ewaste` (`Sr.No`, `Fullname`, `Type`, `EName`, `Quantity`, `Latitude`, `Longitude`, `Address`, `Datetime`) VALUES
(1, 'Neel Savsani', 'IT and Telecommunications Equipment', 'Mobile Phone', 1, 23.0523, 72.5811, '957/2, SECTOR-13B, BEHIND UMIYA PARLOUR, GANDHINAGAR - 382013', '2025-04-13 00:47:34'),
(2, 'Neel Savsani', 'Large Household Appliances', 'Refrigerator', 11, 23.0523, 72.5811, '957/2, SECTOR-13B, BEHIND UMIYA PARLOUR, GANDHINAGAR - 382013', '2025-04-13 00:49:28'),
(3, 'Kush Dedania', 'Small Household Appliances', 'Toaster', 5, 23.1926, 72.6164, 'Shop No. 01,02,101 Pramukh Tangent, Sargasan Cross Rd, Gandhinagar, Gujarat 382421', '2025-04-13 01:30:21'),
(4, 'Sudani preet', 'IT and Telecommunications Equipment', 'Laptop', 8, 23.1926, 72.6164, 'Khetla Aapa Tea Stall, Ground Floor, Atria Complex, Sargasan, Gandhinagar, Gujarat 382421', '2025-04-13 01:34:37'),
(5, 'Priyank Ankola', 'Medical Devices', 'MRI Machine', 2000, 23.0392, 72.591, '957/2, SECTOR-13B, BEHIND UMIYA PARLOUR, GANDHINAGAR - 382013', '2025-04-14 22:32:03'),
(6, 'Savsani 1003', 'IT and Telecommunications Equipment', 'Laptop', 3, 23.2253, 72.6296, '957/2, SECTOR-13B, BEHIND UMIYA PARLOUR, GANDHINAGAR, GUJARAT', '2025-04-15 01:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `ftable`
--

CREATE TABLE `ftable` (
  `Sr. No.` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Rating` varchar(20) NOT NULL,
  `Feedback` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

CREATE TABLE `login_credentials` (
  `Sr.NO` int(10) NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Address` longtext NOT NULL,
  `Pincode` int(6) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_credentials`
--

INSERT INTO `login_credentials` (`Sr.NO`, `Fullname`, `Email`, `Phone`, `Password`, `Address`, `Pincode`, `DateTime`) VALUES
(1, 'Neel Savsani', 'neelsavsani7@gmail.com', 9712192640, 'Neel@1234', 'C/1003, Saffron Luxuria, Shyamdham Mandir To Tapi Road, Sarthana Jakat Naka, Surat, Gujarat', 395006, '2025-03-29 19:50:10'),
(2, 'Abhishek Sangani', 'abhisheksangani5@gmail.com', 9712130204, 'Abhishek@123', '65, Shubhash park soc. Sarthana Jakatnaka, Surat', 395006, '2025-03-29 19:53:06'),
(3, 'Pal Donda', 'donda951072@gmail.com', 9510723893, 'Pal@123', 'D1/503, VRAJ VATIKA, VRAJ CHOWK, SARTHANA JAKATNAKA, SURAT', 395006, '2025-03-30 12:44:45'),
(5, 'Krish Dadhaniya', 'patel22bhai@gmail.com', 9725744085, 'krish@123', '', 0, '2025-03-30 20:16:16'),
(6, 'Nehanshi Sanghani', 'nehanshisanghani261@gmail.com', 9054731076, 'Test123', '', 0, '2025-03-30 21:45:19'),
(7, 'Anjan Aghera', 'anjanpatel077@gmail.com', 9925819151, 'Anjan123', '', 0, '2025-03-31 11:21:29'),
(8, 'kaushal', 'kaushal_me@ldrp.ac.in', 8401715633, '123456', '', 0, '2025-04-01 12:40:14'),
(10, 'Neel Bipinbhai Savsani', 'neelsavsani1@gmail.com', 9712192640, 'Neel@123', 'A3/502, Vraj Raj Residency, Vraj Chowk, Sarthana Jakatnaka, Simada, Surat', 395006, '2025-04-06 10:11:34'),
(11, 'Abc', 'savsanineel7@gmail.com', 9712192640, 'abc@123', '', 0, '2025-04-06 11:04:03'),
(12, 'Vasu Ladani', 'vasupatel12345qw@gmail.com', 7874104423, 'vasu@123', 'Jaiwhauaoansbsj sjaoanab', 362227, '2025-04-10 18:51:48'),
(13, 'Sudani preet', 'Preetsudani17@gmail.com', 8849216742, 'Preet@00', '', 0, '2025-04-10 20:52:53'),
(14, 'Kush Dedania', 'dedaniakush123@gmail.com', 7436055475, 'KushD@', '', 0, '2025-04-13 01:26:39'),
(15, 'Disha Thanki', 'dishathanki2005@gmail.com', 9726724781, 'Disha@_19', '', 0, '2025-04-13 15:25:12'),
(17, 'Keshvi Jarsania', 'keshvijarsania198@gmail.com', 9328816413, 'Test123', '', 0, '2025-04-13 22:39:40'),
(18, 'Priyank Ankola', 'priyankakola79@gmail.com', 7016653478, 'Priyank79', '', 0, '2025-04-14 22:27:52'),
(19, 'Savsani 1003', 'savsani.1003@gmail.com', 9712192640, 'Savsani@1003', '', 0, '2025-04-15 01:54:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ewaste`
--
ALTER TABLE `ewaste`
  ADD PRIMARY KEY (`Sr.No`);

--
-- Indexes for table `ftable`
--
ALTER TABLE `ftable`
  ADD PRIMARY KEY (`Sr. No.`);

--
-- Indexes for table `login_credentials`
--
ALTER TABLE `login_credentials`
  ADD PRIMARY KEY (`Sr.NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ewaste`
--
ALTER TABLE `ewaste`
  MODIFY `Sr.No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ftable`
--
ALTER TABLE `ftable`
  MODIFY `Sr. No.` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_credentials`
--
ALTER TABLE `login_credentials`
  MODIFY `Sr.NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
