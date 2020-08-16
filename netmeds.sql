-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2020 at 01:58 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `itemId` varchar(255) DEFAULT NULL,
  `itemName` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `best_seller` varchar(255) DEFAULT NULL,
  `testCount` int(10) DEFAULT NULL,
  `included_test` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `minPrice` int(10) DEFAULT NULL,
  `labName` varchar(255) DEFAULT NULL,
  `fasting` tinyint(1) DEFAULT NULL,
  `availableAt` tinyint(1) DEFAULT NULL,
  `popular` tinyint(1) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `objectID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemId`, `itemName`, `type`, `best_seller`, `testCount`, `included_test`, `url`, `minPrice`, `labName`, `fasting`, `availableAt`, `popular`, `category`, `objectID`) VALUES
(1, 'DIANM11', 'COVID-19 Test', 'Test', '', 1, '', 'covid-19-test', 4500, 'Metropolis', 0, 1, 0, 'path', 6045500),
(2, 'DIA2044', 'Eye Test- Vision Express', 'Test', '', 1, '', 'eye_test', 49, 'Vision Express', 0, 1, 0, 'path', 4562),
(3, 'DIAR894', 'Yttrium Therapy', 'Test', '', 1, '', 'Yttrium-Therapy-test-cost', 17500, '', 0, 2, 0, 'radio', 4461302),
(4, 'DIAR893', 'X Ray Wrist Lateral View', 'Test', '', 1, '', 'X-Ray-Wrist-Lateral-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461292),
(5, 'DIAR892', 'X Ray Wrist AP View', 'Test', '', 1, '', 'X-Ray-Wrist-AP-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461282),
(6, 'DIAR891', 'X Ray Wrist AP and Lateral View', 'Test', '', 1, '', 'X-Ray-Wrist-AP-and-Lateral-View-test-cost', 240, '', 0, 2, 0, 'radio', 4461272),
(7, 'DIAR890', 'X Ray Whole Spine Lateral View', 'Test', '', 1, '', 'X-Ray-Whole-Spine-Lateral-View-test-cost', 320, '', 0, 2, 0, 'radio', 4461262),
(8, 'DIAR889', 'X Ray Whole Spine Lateral and AP View', 'Test', '', 1, '', 'X-Ray-Whole-Spine-Lateral-and-AP-View-test-cost', 560, '', 0, 2, 0, 'radio', 4461252),
(9, 'DIAR888', 'X Ray Whole Spine AP View', 'Test', '', 1, '', 'X-Ray-Whole-Spine-AP-View-test-cost', 320, '', 0, 2, 0, 'radio', 4461242),
(10, 'DIAR887', 'X Ray Water View', 'Test', '', 1, '', 'X-Ray-Water-View-test-cost', 145, '', 0, 2, 0, 'radio', 4461232),
(11, 'DIAR886', 'X Ray Tm Joint Lateral View', 'Test', '', 1, '', 'X-Ray-Tm-Joint-Lateral-View-test-cost', 162, '', 0, 2, 0, 'radio', 4461222),
(12, 'DIAR885', 'X Ray Tm Joint AP View', 'Test', '', 1, '', 'X-Ray-Tm-Joint-AP-View-test-cost', 162, '', 0, 2, 0, 'radio', 4461212),
(13, 'DIAR884', 'X Ray Tm Joint AP and Lateral View', 'Test', '', 1, '', 'X-Ray-Tm-Joint-AP-and-Lateral-View-test-cost', 280, '', 0, 2, 0, 'radio', 4461202),
(14, 'DIAR883', 'X Ray Thumb Lateral View', 'Test', '', 1, '', 'X-Ray-Thumb-Lateral-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461192),
(15, 'DIAR882', 'X Ray Thumb Lateral and AP View', 'Test', '', 1, '', 'X-Ray-Thumb-Lateral-and-AP-View-test-cost', 240, '', 0, 2, 0, 'radio', 4461182),
(16, 'DIAR881', 'X Ray Thumb AP View', 'Package', '', 1, '', 'X-Ray-Thumb-AP-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461172),
(17, 'DIAR880', 'X Ray Thigh Lateral View', 'Test', '', 1, '', 'X-Ray-Thigh-Lateral-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461162),
(18, 'DIAR879', 'X Ray Thigh AP View', 'Test', '', 1, '', 'X-Ray-Thigh-AP-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461152),
(19, 'DIAR878', 'X Ray Thigh AP and Lateral View', 'Test', '', 1, '', 'X-Ray-Thigh-AP-and-Lateral-View-test-cost', 240, '', 0, 2, 0, 'radio', 4461142),
(20, 'DIAR877', 'X ray Temp', 'Test', '', 1, '', 'X-ray-Temp-test-cost', 0, '', 0, 2, 0, 'radio', 4461132),
(21, 'DIAR877', 'X ray Temp', 'Test', '', 1, '', 'X-ray-Temp-test-cost', 0, '', 0, 2, 0, 'radio', 4461132),
(22, 'DIAR877', 'X ray Temp', 'Test', '', 1, '', 'X-ray-Temp-test-cost', 0, '', 0, 2, 0, 'radio', 4461132),
(23, 'DIAR877', 'X ray Temp', 'Test', '', 1, '', 'X-ray-Temp-test-cost', 0, '', 0, 2, 0, 'radio', 4461132),
(24, 'DIAR877', 'X ray Temp', 'Test', '', 1, '', 'X-ray-Temp-test-cost', 0, '', 0, 2, 0, 'radio', 4461132);

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `item_id` int(10) NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `item_id`, `keyword`) VALUES
(1, 1, 'covid-19-test'),
(2, 2, 'eye'),
(3, 2, 'test'),
(4, 3, 'Yttrium'),
(5, 3, 'Therapy'),
(6, 4, 'X'),
(7, 4, 'Ray'),
(8, 4, 'Wrist'),
(9, 4, 'Lateral'),
(10, 4, 'View'),
(11, 5, 'X'),
(12, 5, 'Ray'),
(13, 5, 'Wrist'),
(14, 5, 'AP'),
(15, 5, 'View'),
(16, 6, 'X'),
(17, 6, 'Ray'),
(18, 6, 'Wrist'),
(19, 6, 'AP'),
(20, 6, 'and'),
(21, 7, 'X'),
(22, 7, 'Ray'),
(23, 7, 'Whole'),
(24, 7, 'Spine'),
(25, 7, 'Lateral'),
(26, 8, 'X'),
(27, 8, 'Ray'),
(28, 8, 'Whole'),
(29, 8, 'Spine'),
(30, 8, 'Lateral'),
(31, 9, 'X'),
(32, 9, 'Ray'),
(33, 9, 'Whole'),
(34, 9, 'Spine'),
(35, 9, 'AP'),
(36, 10, 'X'),
(37, 10, 'Ray'),
(38, 10, 'Water'),
(39, 10, 'View'),
(40, 10, ''),
(41, 11, 'X'),
(42, 11, 'Ray'),
(43, 11, 'Tm'),
(44, 11, 'Joint'),
(45, 11, 'Lateral'),
(46, 12, 'X'),
(47, 12, 'Ray'),
(48, 12, 'Tm'),
(49, 12, 'Joint'),
(50, 12, 'AP'),
(51, 13, 'X'),
(52, 13, 'Ray'),
(53, 13, 'Tm'),
(54, 13, 'Joint'),
(55, 13, 'AP'),
(56, 14, 'X'),
(57, 14, 'Ray'),
(58, 14, 'Thumb'),
(59, 14, 'Lateral'),
(60, 14, 'View'),
(61, 15, 'X'),
(62, 15, 'Ray'),
(63, 15, 'Thumb'),
(64, 15, 'Lateral'),
(65, 15, 'and'),
(66, 16, 'X'),
(67, 16, 'Ray'),
(68, 16, 'Thumb'),
(69, 16, 'AP'),
(70, 16, 'View'),
(71, 17, 'X'),
(72, 17, 'Ray'),
(73, 17, 'Thigh'),
(74, 17, 'Lateral'),
(75, 17, 'View'),
(76, 18, 'X'),
(77, 18, 'Ray'),
(78, 18, 'Thigh'),
(79, 18, 'AP'),
(80, 18, 'View'),
(81, 19, 'X'),
(82, 19, 'Ray'),
(83, 19, 'Thigh'),
(84, 19, 'AP'),
(85, 19, 'and'),
(86, 20, 'X'),
(87, 20, 'ray'),
(88, 20, 'Temp'),
(89, 21, 'X'),
(90, 21, 'ray'),
(91, 21, 'Temp'),
(92, 22, 'X'),
(93, 22, 'ray'),
(94, 22, 'Temp'),
(95, 23, 'X'),
(96, 23, 'ray'),
(97, 23, 'Temp'),
(98, 24, 'X'),
(99, 24, 'ray'),
(100, 24, 'Temp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Prateek Gupta', 'prateekg123@gmail.com', 'wX45aWtu54ITigt5uA9DvKMRuFprHQ9Mryo10reVr/kHryROs/+1UuPhxHpBKATnPz4Wwu1/CpF0ho4K9cFN5w=='),
(2, 'Netmeds', 'netmeds@gmail.com', '8hicprSY6ct6uPaOxyRxaXI7GoKxYlB8C19mkakHOk5OLHuToOC8X2SEVmJ3CUXFEAh2bZ1fd2zBpYgxvFQ58w==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `common_id` (`common_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `keyword` (`keyword`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
