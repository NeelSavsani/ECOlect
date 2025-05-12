-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 06:01 PM
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
(6, 'Savsani 1003', 'IT and Telecommunications Equipment', 'Laptop', 3, 23.2253, 72.6296, '957/2, SECTOR-13B, BEHIND UMIYA PARLOUR, GANDHINAGAR, GUJARAT', '2025-04-15 01:56:22'),
(7, 'Sumit Prajapati', 'Large Household Appliances', 'Airconditioner', 45, 23.2386, 72.6402, 'LDRP-ITR, sector-15, near KH-5 circle, Gandhinagar', '2025-05-02 13:37:07'),
(8, 'Nehanshi Sanghani', 'Small Household Appliances', 'Mobile phone', 2, 23.0437, 72.637, 'Harshad colony-1,India colony,Thakkarbapanagar,Ahmedabad', '2025-05-02 13:50:49'),
(9, 'Keshvi Jarsania', 'Large Household Appliances', 'Refrigerator', 1, 23.0466, 72.6799, 'Keasr Harmony,near SP Ring Road,Nikol Ahmedabad', '2025-05-02 14:20:55'),
(10, 'Krunal Aghera', 'Large Household Appliances', 'Washing Machine', 30, 23.2247, 72.6182, 'G7, Kirtidham, Vavol, Gandhinagar, 382016', '2025-05-02 15:24:41'),
(11, 'Fyuzan', 'Medical Devices', '66677777777gggvv', 2147483647, 22.2966, 73.1257, 'Yes', '2025-05-03 21:01:55'),
(12, 'Nandan Savsani', 'Cables and Wires', 'HDMI and vga cable', 1, 23.1288, 72.5505, 'S2-402,adani pratham , tragad road , Ahmedabad (behind Nirma University)-382481', '2025-05-03 21:02:38'),
(13, 'Nisarg Patel', 'IT and Telecommunications Equipment', 'battery', 4, 23.0243, 72.5302, 'vavol', '2025-05-03 21:04:43'),
(14, 'Khushi Pithadia', 'Cables and Wires', 'Power cable and USB cable', 2, 23.0532, 72.6767, 'Merriott Paradise, Opp Patel Vadi ,Nikol Ahmedabad', '2025-05-03 21:33:07'),
(15, 'Pal Donda', 'IT and Telecommunications Equipment', 'Mobile phone', 1, 23.2245, 72.6183, 'G-7 kirtidham society vavol 382016', '2025-05-03 21:33:39'),
(16, 'Nishtha parsania', 'Large Household Appliances', 'Large household appliances', 100, 21.7566, 70.2704, 'R P bhalodiya mahila college,Kolki road, upleta', '2025-05-03 21:34:45'),
(17, 'Daksh Makadiya', 'IT and Telecommunications Equipment', 'Mobile phones', 1, 23.2245, 72.6182, 'G-7 kirtidham society vavol 382016', '2025-05-03 21:41:54'),
(18, 'Het savsani', 'Gaming and Virtual Reality Devices', 'Video game', 1, 21.2238, 72.9042, 'A-3/502, vraj raj, vraj chowk, sarthana Jakatnaka, surat', '2025-05-03 21:48:41'),
(19, 'Savsani Bipin', 'Lighting Equipment', 'LED q', 1, 21.2535, 70.2272, 'To. Kevdra\nTa. keshod\nDi. junagadh\nStet. Gujarat', '2025-05-03 22:00:17'),
(20, 'Anjan Aghera', 'Toys, Leisure, and Sports Equipment', 'Remote Control  Car', 1, 23.0851, 72.5418, 'G7, Kirtidham Society, Vavol, Gandhinagar', '2025-05-03 22:04:58'),
(21, 'Jeel patel', 'IT and Telecommunications Equipment', 'Mobile phone', 1, 23.2093, 72.626, 'Sector 4d gandhinagar', '2025-05-03 22:09:21'),
(22, 'Savsani Dimple', 'Large Household Appliances', 'Washing Machine', 32, 21.2537, 70.2258, 'Kevadra, Keshod, Junagadh', '2025-05-03 22:14:07'),
(23, 'Vibhu', 'Lighting Equipment', 'Lights , LED bulb', 10, 21.269, 72.9454, 'Alidhra char rasta , Alidhra \nTa. Mendarda\nDis. Junagadh', '2025-05-03 22:18:36'),
(24, 'Gami Dhruvin', 'Gaming and Virtual Reality Devices', 'Gaming controllers', 1, 23.0372, 72.6764, 'Bhagwat elysium, near amar jawan circle ,nikol,ahmedabad', '2025-05-03 22:24:35'),
(25, 'Jitubhai Ladani', 'IT and Telecommunications Equipment', 'Mobile phone', 1, 21.2537, 70.2258, 'Kevadra, Keshod, Junagadh', '2025-05-03 22:35:00'),
(26, 'Narendra Kansagra', 'Large Household Appliances', 'Washing Machine', 32, 21.2555, 70.2261, 'Kevadra, Keshod, Junagadh', '2025-05-03 22:40:08'),
(27, 'Abhishek Sangani', 'Consumer Electronics', 'Sony TV', 5, 23.215, 72.6479, 'Croma, sector-11, cricket ground, Gandhinagar', '2025-05-04 11:28:53'),
(28, 'Neel Savsani', 'Consumer Electronics', 'boAt music player', 8, 23.215, 72.6479, 'Croma, cricket ground, Sector-11, Gandhinagar', '2025-05-04 11:33:02'),
(29, 'Abhishek Sangani', 'Consumer Electronics', 'WIFI extender', 1, 23.215, 72.6479, 'LDRP-ITR, sector-15, near KH-5 circle, Gandhinagar', '2025-05-04 11:34:51'),
(30, 'Abhishek Sangani', 'IT and Telecommunications Equipment', 'Mobile', 6, 23.215, 72.6479, 'Croma, sector-11, cricket ground, Gandhinagar', '2025-05-04 11:37:16'),
(31, 'Jarsania Keshvi Prakash', 'IT and Telecommunications Equipment', 'Scanner', 1, 23.0497, 72.6705, 'Priti Diamond and gold ,Raspan cross road,\r\nnikol, Ahmedabad', '2025-05-04 15:19:05'),
(32, 'Saloni', 'Large Household Appliances', 'TV', 1, 23.1684, 72.6401, 'A-201 Texas Garden Home.Nr,raysan petrol pump,Gandhinagar,Gujarat', '2025-05-04 19:21:54'),
(33, 'Dolly', 'Gaming and Virtual Reality Devices', 'X-box', 1, 23.1684, 72.64, '21,Sarvoday society,Talod,Sabarkantha,Gujarat', '2025-05-04 19:47:52'),
(34, 'jay', 'IT and Telecommunications Equipment', 'computer', 2, 23.1682, 72.6397, 'A-201,texas garden home,nr.raysan petrol pump opp.rao world,gandhinagar,gujarat', '2025-05-04 19:57:58'),
(35, 'Sathwara Heer Harsidhdha', 'Small Household Appliances', 'Microwave , TV , Washing Machi', 85, 23.2052, 72.6287, 'Plot no:- 1361/2,Sector-3/B,Near SSV  Campus ,Gandhinagar , Gujarat- 382006', '2025-05-04 20:01:12'),
(36, 'Kishan', 'Electrical and Electronic Tools', 'Tv', 10, 23.1844, 72.6436, 'Balmukund height', '2025-05-04 20:04:51'),
(37, 'Mahek Jarsaniya', 'Small Household Appliances', 'Toaster', 1, 23.0475, 72.6784, 'Aries heights nikol ahmedabad', '2025-05-05 19:17:03'),
(38, 'Keshvi Jarsania', 'Small Household Appliances', 'Iron', 1, 23.053, 72.6813, 'Bhakti enklev ,bhakti circle,nikol , ahmedabad', '2025-05-05 19:55:27'),
(39, 'Keshvi Jarsania', 'Consumer Electronics', 'Music system', 1, 23.0485, 72.6767, 'Shantanam bunglows mg road nikol ahmedabad', '2025-05-05 20:16:16');

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

--
-- Dumping data for table `ftable`
--

INSERT INTO `ftable` (`Sr. No.`, `Name`, `Email`, `Rating`, `Feedback`) VALUES
(1, 'Sumit Prajapati ', 'sumitprajapati4456@gmail.com', 'Excellent', 'Very good and excellent job by all of you.'),
(2, 'Nehanshi Ashwinbhai Sanghani', 'nehanshisanghani261@gmail.com', 'Excellent', 'Excellent work! really useful and well-designed!!'),
(3, 'Jarsania Keshvi ', 'keshvijarsania198@gmail.com', 'Excellent', 'Allover good experience . Usefull and environment friendly application.'),
(4, 'Neel Savsani', 'neelsavsani7@gmail.com', 'Excellent', 'Excellent job!');

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

CREATE TABLE `login_credentials` (
  `Sr.NO` int(10) NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
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
(1, 'Neel Savsani', 'neelsavsani7@gmail.com', 9712192640, 'Neel@1234', 'C/1003, Saffron Luxuria, Shyamdham Mandir to Tapi Road, Sarthana Jakat Naka, Surat, Gujarat', 395006, '2025-03-29 19:50:10'),
(2, 'Abhishek Sangani', 'abhisheksangani5@gmail.com', 9712130204, 'Abhishek@123', '76, Shubhash park soc. Sarthana Jakatnaka, Surat', 395006, '2025-03-29 19:53:06'),
(3, 'Pal Donda', 'donda951072@gmail.com', 9510723893, 'Pal@123', 'D1/503, VRAJ VATIKA, VRAJ CHOWK, SARTHANA JAKATNAKA, SURAT', 395006, '2025-03-30 12:44:45'),
(5, 'Krish Dadhaniya', 'patel22bhai@gmail.com', 9725744085, 'krish@123', '', 0, '2025-03-30 20:16:16'),
(6, 'Nehanshi Sanghani', 'nehanshisanghani261@gmail.com', 9054731076, 'Test123', 'Harshad colony,India colony,Thakkarbapanagar,Ahmedabad', 382350, '2025-03-30 21:45:19'),
(7, 'Anjan Aghera', 'anjanpatel077@gmail.com', 9925819151, 'Anjan123', '', 0, '2025-03-31 11:21:29'),
(8, 'kaushal', 'kaushal_me@ldrp.ac.in', 8401715633, '123456', '', 0, '2025-04-01 12:40:14'),
(10, 'Neel Bipinbhai Savsani', 'neelsavsani1@gmail.com', 9712192640, 'Neel@123', 'A3/502, Vraj Raj Residency, Vraj Chowk, Sarthana Jakatnaka, Simada, Surat', 395006, '2025-04-06 10:11:34'),
(11, 'Abc', 'savsanineel7@gmail.com', 9712192640, 'abc@123', '', 0, '2025-04-06 11:04:03'),
(12, 'Vasu Ladani', 'vasupatel12345qw@gmail.com', 7874104423, 'vasu@123', 'Jaiwhauaoansbsj sjaoanab', 362227, '2025-04-10 18:51:48'),
(13, 'Sudani preet', 'Preetsudani17@gmail.com', 8849216742, 'Preet@00', '', 0, '2025-04-10 20:52:53'),
(14, 'Kush Dedania', 'dedaniakush123@gmail.com', 7436055475, 'KushD@', '', 0, '2025-04-13 01:26:39'),
(15, 'Disha Thanki', 'dishathanki2005@gmail.com', 9726724781, 'Disha@_123', '', 0, '2025-04-13 15:25:12'),
(17, 'Keshvi Jarsania', 'keshvijarsania198@gmail.com', 9328816413, 'keshvi123', 'Kesar Harmony ,near SP Ring Road ,Nikol Ahmedabad', 382350, '2025-04-13 22:39:40'),
(18, 'Priyank Ankola', 'priyankakola79@gmail.com', 7016653478, 'Priyank79', '', 0, '2025-04-14 22:27:52'),
(19, 'Savsani 1003', 'savsani.1003@gmail.com', 9712192640, 'Savsani@1003', '', 0, '2025-04-15 01:54:54'),
(20, 'Sumit Prajapati', 'sumitprajapati4456@gmail.com', 9875023644, 'Sumit@123', '', 0, '2025-05-02 13:28:24'),
(22, 'Krunal Aghera', 'krunalaghera15@gmail.com', 9664898004, 'Krunal@123', 'G7, KirtiDham, Vavol, Gandhinagar', 382016, '2025-05-02 15:19:52'),
(23, 'Ghumaliya Zalak j', 'ghumaliyazalak@gmail.com', 9586080810, 'zalak123', '', 0, '2025-05-02 19:52:40'),
(24, 'Jenish kalariya', 'Jenish1555@gmail.com', 9558599477, 'Jenish@1555N', '', 0, '2025-05-02 20:00:28'),
(25, 'Jenish kalariya', 'Jenishkalariya1555@gmail.com', 9558599477, 'jenish@1555N', '', 0, '2025-05-02 20:01:41'),
(26, 'Fyuzan', 'fyuzan@yopmail.com', 2345567889, 'Test@123', '', 0, '2025-05-03 20:54:04'),
(27, 'Nandan Savsani', 'nandansavsani@gmail.com', 8320443382, '123@India', '', 0, '2025-05-03 20:58:46'),
(28, 'Nisarg Patel', 'nisargkpatel4803@gmail.com', 6354415647, 'nisarg2103#', '', 0, '2025-05-03 21:01:06'),
(29, 'Khushi Pithadia', 'khushipithadiya@gmail.com', 7283847847, 'khushi.p88', 'Merriott Paradise, Opp Patel Vadi ,Nikol Ahmedabad', 382350, '2025-05-03 21:12:42'),
(30, 'Nishtha parsania', 'pnishtha797@gmail.com', 9023154526, '@siya_273', '', 0, '2025-05-03 21:17:44'),
(31, 'Daksh Makadiya', 'dakshpatel5025@gmail.com', 9265294208, 'Daksh@987', '', 0, '2025-05-03 21:39:26'),
(32, 'Het savsani', 'hetsavsani456@gmail.com', 8758566322, 'hetsavsani', '', 0, '2025-05-03 21:40:42'),
(33, 'Savsani Bipin', 'eaglegenset@gmail.com', 9825640560, 'savsani@0609', '', 0, '2025-05-03 21:54:51'),
(34, 'Jeel patel', 'Vekariyajeel0@gmail.com', 9726230239, 'Jeel#₹2006', '', 0, '2025-05-03 22:01:36'),
(35, 'Savsani Dimple', 'dimplesavsani94@gmail.com', 9428440322, 'savsani@1805', '', 0, '2025-05-03 22:07:14'),
(36, 'Gami Dhruvin', 'dhruvingami1356@gmail.com', 8401143850, 'Email@1234', 'Bhagwat Elysium ,near amar jawan circle,nikol,ahmedabad', 382350, '2025-05-03 22:09:27'),
(37, 'Vibhu', 'vibhupatel511@gmail.com', 8200983212, '123456', '', 0, '2025-05-03 22:15:53'),
(39, 'Jitubhai Ladani', 'jitubhailadanijitubhailadani@gmail.com', 9974665702, 'jitubhai', '', 0, '2025-05-03 22:33:05'),
(40, 'Narendra Kansagra', 'nkkansagara1974@gmail.com', 9913888262, 'Narendra', '', 0, '2025-05-03 22:38:42'),
(41, 'Saloni', 'pabrejasaloni01@gmail.com', 8320686670, 'saloni2180', '', 0, '2025-05-04 00:22:33'),
(42, 'Abhishek Sangani', 'abhisheksanghani5@gmail.com', 9712130204, 'Abhishek@123', '', 0, '2025-05-04 11:30:30'),
(43, 'Jarsania Keshvi Prakash', 'jarsaniakeshvi@gmail.com', 9328816431, 'keshvi123', '', 0, '2025-05-04 15:06:53'),
(44, 'Jignasha Jarsania', 'jignasha.jarsania@gmail.com', 9274579913, 'demo123', '', 0, '2025-05-04 17:43:48'),
(45, 'Yogita Makhija', 'yogita.makhija2003@gmail.com', 7600261313, 'yogita_71221313', '', 0, '2025-05-04 19:34:19'),
(46, 'Kishan', 'kishanssorathiya@gmail.com', 9428028602, 'Kishan@123', '', 0, '2025-05-04 19:38:08'),
(47, 'Dolly', 'dollypabreja22@gmail.com', 7574094506, 'dollypabreja123', '', 0, '2025-05-04 19:45:56'),
(48, 'Sathwara Heer Harsidhdha', 'sathwaraheer@gmail.com', 8849896117, 'JAYSHREERAM', '', 0, '2025-05-04 19:50:37'),
(49, 'jay', 'jaypabreja@gmail.com', 8320686670, 'salonii', '', 0, '2025-05-04 19:54:52'),
(50, 'Mahek Jarsaniya', 'mahekjarsania@gmail.com', 9328816431, 'mahek123', '', 0, '2025-05-04 23:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `quiztb`
--

CREATE TABLE `quiztb` (
  `SrNo` int(10) NOT NULL,
  `Name` longtext NOT NULL,
  `Score` int(2) NOT NULL,
  `Email` longtext NOT NULL,
  `Datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `quiztb`
--
ALTER TABLE `quiztb`
  ADD PRIMARY KEY (`SrNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ewaste`
--
ALTER TABLE `ewaste`
  MODIFY `Sr.No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `ftable`
--
ALTER TABLE `ftable`
  MODIFY `Sr. No.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_credentials`
--
ALTER TABLE `login_credentials`
  MODIFY `Sr.NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `quiztb`
--
ALTER TABLE `quiztb`
  MODIFY `SrNo` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
