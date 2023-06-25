-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 08:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quark_hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Pranav', 'abc@gmail.com', '12345'),
(2, 'Pranav', 'abc@gmail.com', '01cfcd4f6b8770febfb40cb906715822'),
(3, 'ABC', 'hc@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_desc` text NOT NULL,
  `design_one` varchar(255) NOT NULL,
  `design_person_one` varchar(255) NOT NULL,
  `design_person_one_sign` varchar(255) NOT NULL,
  `design_two` varchar(255) NOT NULL,
  `design_person_two` text NOT NULL,
  `design_person_two_sign` varchar(255) NOT NULL,
  `org_logo_png` varchar(255) NOT NULL,
  `validity_days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_desc`, `design_one`, `design_person_one`, `design_person_one_sign`, `design_two`, `design_person_two`, `design_person_two_sign`, `org_logo_png`, `validity_days`) VALUES
(1, 'FSOK', 'ASOdKAKOsk', 'AOSK', 'AOKDO', 'DesignationPersonOne/WIN_20230406_10_24_23_Pro.jpg', 'ASJA', 'ADJD', 'DesignationPersonTwo/WIN_20230406_10_24_23_Pro.jpg', 'OrgLogo/WIN_20230406_10_24_23_Pro.jpg', '12'),
(2, 'ASK', 'AKJN', 'kjnkn', 'KJnk', 'DesignationPersonOne/WIN_20230406_10_24_23_Pro.jpg', 'sdsd', 'ASDAS', 'DesignationPersonTwo/WIN_20230406_10_24_23_Pro.jpg', 'OrgLogo/WIN_20230406_10_24_23_Pro.jpg', '121'),
(3, 'Envision', 'AASSKKN ADK A AJSK A KASKJ KNiNUbf kae IIQij lwIAslD', 'D1', 'DP1', 'DesignationPersonOne/WIN_20230406_10_24_23_Pro.jpg', 'D2', 'DP2', 'DesignationPersonTwo/WIN_20230406_10_24_23_Pro.jpg', 'OrgLogo/WIN_20230406_10_24_23_Pro.jpg', '3'),
(4, 'GHSO', 'ksdmflsdkfm alkfkl dkasmdlasdkm askmdkasml mak maklsmd amkldm laskd', 'D1', 'D2', 'DesignationPersonOne/WIN_20230406_10_24_23_Pro.jpg', 'P!', 'P2', 'DesignationPersonTwo/WIN_20230406_10_24_23_Pro.jpg', 'certificate-generation/certificate-generation/WIN_20230406_10_24_23_Pro.jpg', '23'),
(5, 'slkda', 'qklslfq', 'klsdlkf', 'klfdslf', 'DesignationPersonOne/WIN_20230406_10_24_23_Pro.jpg', 'asdas', 'dsfs', 'DesignationPersonTwo/WIN_20230406_10_24_23_Pro.jpg', '', '231'),
(6, 'sfl', 'lskdfj', 'lkdsf', 'kljsf', 'DesignationPersonOne/WIN_20230406_10_24_23_Pro.jpg', 'dwe', 'dsf', 'DesignationPersonTwo/WIN_20230406_10_24_23_Pro.jpg', 'WIN_20230406_10_24_23_Pro.jpg', '24'),
(7, 'ADKs', 'zslsld', 'kjdfkl', 'sdklfjl', 'WIN_20230406_10_24_23_Pro.jpg', 'adsas', 'dasd', 'WIN_20230406_10_24_23_Pro.jpg', 'WIN_20230406_10_24_23_Pro.jpg', '3242'),
(8, 'PSDPW', 'Dpsp', 'zsfs', 'dfisj', 'WIN_20230406_10_24_23_Pro.jpg', 'sadas', 'sdf', 'WIN_20230406_10_24_23_Pro.jpg', 'WIN_20230406_10_24_23_Pro.jpg', '234');

-- --------------------------------------------------------

--
-- Table structure for table `issued_certificates`
--

CREATE TABLE `issued_certificates` (
  `id` int(11) NOT NULL,
  `candidate_name` varchar(255) NOT NULL,
  `candidate_public_id` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `issued_certificates`
--

INSERT INTO `issued_certificates` (`id`, `candidate_name`, `candidate_public_id`, `event_id`) VALUES
(1, 'sdf', 'asdsad', 0),
(2, 'ADWEX', 'ASAS', 1),
(3, 'aSAS', 'AASDASD', 2),
(4, '2qe', 'wre', 2),
(5, 'asd', 'asd', 1),
(6, 'asdsa', 'asd', 1),
(7, 'asd', 'asd', 1),
(8, 'asd', 'asd', 1),
(9, 'asd', 'asd', 1),
(10, 'asd', 'asd', 1),
(11, 'asd', 'asdasd', 1),
(12, 'asd', 'asdasd', 1),
(13, 'asd', 'asd', 1),
(14, 'asd', 'asd', 1),
(15, 'asd', 'asd', 1),
(16, 'asd', 'as', 1),
(17, 'asd', 'ads', 1),
(18, 'asd', 'ads', 1),
(19, 'asd', 'ads', 1),
(20, 'asd', 'ads', 1),
(21, 'asd', 'ads', 1),
(22, 'asd', 'ads', 1),
(23, 'asd', 'ads', 1),
(24, 'asd', 'ads', 1),
(25, 'asd', 'ads', 1),
(26, 'asd', 'ads', 1),
(27, 'asd', 'ads', 1),
(28, 'asd', 'ads', 1),
(29, 'asd', 'ads', 1),
(30, 'asd', 'ads', 1),
(31, 'asd', 'ads', 1),
(32, 'asd', 'ads', 1),
(33, 'asd', 'ads', 1),
(34, 'asd', 'ads', 1),
(35, 'asd', 'ads', 1),
(36, 'asd', 'ads', 1),
(37, 'asd', 'ads', 1),
(38, 'asd', 'ads', 1),
(39, 'asd', 'ads', 1),
(40, 'asd', 'ads', 1),
(41, 'asd', 'ads', 1),
(42, 'asd', 'ads', 1),
(43, 'asd', 'ads', 1),
(44, 'asd', 'ads', 1),
(45, 'asd', 'ads', 1),
(46, 'asd', 'ads', 1),
(47, 'asd', 'ads', 1),
(48, 'asd', 'ads', 1),
(49, 'asd', 'ads', 1),
(50, 'asd', 'ads', 1),
(51, 'asd', 'ads', 1),
(52, 'asd', 'ads', 1),
(53, 'asd', 'ads', 1),
(54, 'asd', 'ads', 1),
(55, 'asd', 'ads', 1),
(56, 'asd', 'ads', 1),
(57, 'asd', 'ads', 1),
(58, 'asd', 'ads', 1),
(59, 'asd', 'ads', 1),
(60, 'asd', 'ads', 1),
(61, 'asd', 'ads', 1),
(62, 'asd', 'ads', 1),
(63, 'asd', 'ads', 1),
(64, 'asd', 'ads', 1),
(65, 'asd', 'ads', 1),
(66, 'asd', 'ads', 1),
(67, 'asd', 'ads', 1),
(68, 'asd', 'ads', 1),
(69, 'asd', 'ads', 1),
(70, 'asd', 'ads', 1),
(71, 'asd', 'ads', 1),
(72, 'asd', 'ads', 1),
(73, 'asd', 'ads', 1),
(74, 'asd', 'ads', 1),
(75, 'asd', 'ads', 1),
(76, 'asd', 'ads', 1),
(77, 'asd', 'ads', 1),
(78, 'asasd', 'asd', 1),
(79, 'asasd', 'asd', 1),
(80, 'asasd', 'asd', 1),
(81, 'asasd', 'asd', 1),
(82, 'asasd', 'asd', 1),
(83, 'asasd', 'asd', 1),
(84, 'asasd', 'asd', 1),
(85, 'asasd', 'asd', 1),
(86, 'asasd', 'asd', 1),
(87, 'asasd', 'asd', 1),
(88, 'asasd', 'asd', 1),
(89, 'asasd', 'asd', 1),
(90, 'asasd', 'asd', 1),
(91, 'asasd', 'asd', 1),
(92, 'asasd', 'asd', 1),
(93, 'Nagesh', 'asd', 1),
(94, 'Parag', 'e32o8u8dse', 1),
(95, 'Varad', '293847932874', 1),
(96, 'Atharva', '23402349328', 1),
(97, 'Atharva', '328489234', 1),
(98, 'Atharva', '23498723984', 1),
(99, 'Pranav', 'JISD', 1),
(100, 'Aditya', '2344293', 1),
(101, 'Aditya', '2344293', 1),
(102, 'Aditya', '2344293', 1),
(103, 'Aditya', '2344293', 1),
(104, 'Aditya', '2344293', 1),
(105, 'Aditya', '2344293', 1),
(106, 'NG', 'AI23498', 1),
(107, 'NG', '3289an', 1),
(108, 'NG', '49872938', 1),
(109, 'NG', '328947', 1),
(110, 'NG', '4823982', 1),
(111, 'ADLJA', '4234', 1),
(112, 'ljla', 'LJjL', 1),
(113, 'LDISJS', 'LIDJIW', 3),
(114, 'slfijlie', 'zlifjls', 3),
(115, 'asd', 'sdfkmq', 3),
(116, 'NG', 'GGD23342', 3),
(117, 'NG', '4892304', 3),
(118, 'NG', '348972', 3),
(119, 'sas', 'sdsa', 3),
(120, '2384', 'ew84', 3),
(121, 'OBHAI', '2384329', 4),
(122, 'yut', 'dskfjlsldf', 4),
(123, 'UEO', 'AKALKD', 4),
(124, '32432', '32423', 5),
(125, 'AK', 'AKD', 6),
(126, 'WEQ', 'skfj23432', 6),
(127, 'OM', 'OM', 7),
(128, 'UKS', '93459', 7),
(129, 'TYQ', 'AISJ', 7),
(130, 'asds', 'asfa', 7),
(131, 'Hari', '238478923', 8),
(132, 'Hari', '238478923', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued_certificates`
--
ALTER TABLE `issued_certificates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issued_certificates`
--
ALTER TABLE `issued_certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
