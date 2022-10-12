-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2022 at 05:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cec`
--

-- --------------------------------------------------------

--
-- Table structure for table `cec2023`
--

CREATE TABLE `cec2023` (
  `eroll` varchar(50) NOT NULL,
  `erank` int(11) DEFAULT NULL,
  `branch` varchar(15) DEFAULT NULL,
  `stdName` varchar(150) DEFAULT NULL,
  `expName` varchar(150) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `relCast` varchar(50) DEFAULT NULL,
  `stdAddress` varchar(200) DEFAULT NULL,
  `stdMob` int(11) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `aadhar` int(20) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `allotCat` varchar(10) DEFAULT NULL,
  `memo` varchar(255) DEFAULT NULL,
  `feeRemittance` varchar(255) DEFAULT NULL,
  `entranceExamAdmit` varchar(255) DEFAULT NULL,
  `entranceExamMarkSheet` varchar(255) DEFAULT NULL,
  `sslc` varchar(255) DEFAULT NULL,
  `twelveth` varchar(255) DEFAULT NULL,
  `migrationCert` varchar(255) DEFAULT NULL,
  `tc` varchar(255) DEFAULT NULL,
  `conductCert` varchar(255) DEFAULT NULL,
  `eligibilityCert` varchar(255) DEFAULT NULL,
  `communityCert` varchar(255) DEFAULT NULL,
  `passPhoto` varchar(255) DEFAULT NULL,
  `aadharCard` varchar(255) DEFAULT NULL,
  `sslcReg` int(11) DEFAULT NULL,
  `sslcPassingYear` int(11) DEFAULT NULL,
  `sslcBoard` varchar(25) DEFAULT NULL,
  `hscRegNo` int(11) DEFAULT NULL,
  `hscYear` int(11) DEFAULT NULL,
  `hscBoard` varchar(25) DEFAULT NULL,
  `phy` int(11) DEFAULT NULL,
  `maxPhy` int(11) DEFAULT NULL,
  `che` int(11) DEFAULT NULL,
  `maxChe` int(11) DEFAULT NULL,
  `math` int(11) DEFAULT NULL,
  `maxMath` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `maxTotal` int(11) DEFAULT NULL,
  `fatherName` varchar(150) DEFAULT NULL,
  `fatherOffice` varchar(200) DEFAULT NULL,
  `fatherPhone` int(11) DEFAULT NULL,
  `fatherEmail` varchar(150) DEFAULT NULL,
  `momName` varchar(150) DEFAULT NULL,
  `momOffice` varchar(200) DEFAULT NULL,
  `momPhone` int(11) DEFAULT NULL,
  `momEmail` varchar(150) DEFAULT NULL,
  `guardianName` varchar(150) DEFAULT NULL,
  `relationship` varchar(200) DEFAULT NULL,
  `guardianAddress` varchar(200) DEFAULT NULL,
  `guardianPhone` int(11) DEFAULT NULL,
  `guardianEmail` varchar(200) DEFAULT NULL,
  `pin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cec2023`
--
ALTER TABLE `cec2023`
  ADD PRIMARY KEY (`eroll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
