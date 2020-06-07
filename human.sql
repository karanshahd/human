-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2020 at 11:34 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `human`
--
CREATE DATABASE IF NOT EXISTS `human` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `human`;

-- --------------------------------------------------------

--
-- Table structure for table `basicinfo`
--

DROP TABLE IF EXISTS `basicinfo`;
CREATE TABLE IF NOT EXISTS `basicinfo` (
  `uid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact` bigint(11) NOT NULL,
  `emailid` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `blood` varchar(10) DEFAULT NULL,
  `profilePicUrl` varchar(200) NOT NULL,
  UNIQUE KEY `username_2` (`uid`),
  KEY `username` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currentdisease`
--

DROP TABLE IF EXISTS `currentdisease`;
CREATE TABLE IF NOT EXISTS `currentdisease` (
  `uid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `diseasename` varchar(50) DEFAULT NULL,
  `datefrom` date DEFAULT NULL,
  `hospitalname` varchar(50) DEFAULT NULL,
  `medicines` varchar(50) DEFAULT NULL,
  `doctor` varchar(50) DEFAULT NULL,
  KEY `username` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctorsinfo`
--

DROP TABLE IF EXISTS `doctorsinfo`;
CREATE TABLE IF NOT EXISTS `doctorsinfo` (
  `uid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `practice` varchar(20) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

DROP TABLE IF EXISTS `family`;
CREATE TABLE IF NOT EXISTS `family` (
  `uid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `relativeUsername` varchar(16) NOT NULL,
  `relation` varchar(10) NOT NULL,
  UNIQUE KEY `uidx` (`uid`,`relativeUsername`),
  KEY `username` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `generallogin`
--

DROP TABLE IF EXISTS `generallogin`;
CREATE TABLE IF NOT EXISTS `generallogin` (
  `uid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `habits`
--

DROP TABLE IF EXISTS `habits`;
CREATE TABLE IF NOT EXISTS `habits` (
  `uid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `diet` varchar(50) DEFAULT NULL,
  `alcohol` varchar(10) DEFAULT NULL,
  `tobacco` varchar(10) DEFAULT NULL,
  `drugs` varchar(10) DEFAULT NULL,
  `allergy` varchar(50) DEFAULT NULL,
  KEY `habits` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

DROP TABLE IF EXISTS `insurance`;
CREATE TABLE IF NOT EXISTS `insurance` (
  `uid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `insuranceId` varchar(16) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `premium` int(11) DEFAULT NULL,
  `coverlimit` int(11) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  UNIQUE KEY `uidx` (`uid`,`insuranceId`),
  KEY `insurance` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pastdisease`
--

DROP TABLE IF EXISTS `pastdisease`;
CREATE TABLE IF NOT EXISTS `pastdisease` (
  `uid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `diseasename` varchar(50) DEFAULT NULL,
  `datefrom` date DEFAULT NULL,
  `dateto` date DEFAULT NULL,
  `hospitalname` varchar(50) DEFAULT NULL,
  `medicines` varchar(50) DEFAULT NULL,
  `doctor` varchar(50) DEFAULT NULL,
  UNIQUE KEY `uidx` (`uid`,`diseasename`,`datefrom`),
  KEY `username` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basicinfo`
--
ALTER TABLE `basicinfo`
  ADD CONSTRAINT `basicinfo_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `generallogin` (`uid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `currentdisease`
--
ALTER TABLE `currentdisease`
  ADD CONSTRAINT `currentdisease_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `basicinfo` (`uid`);

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `basicinfo` (`uid`);

--
-- Constraints for table `generallogin`
--
ALTER TABLE `generallogin`
  ADD CONSTRAINT `generallogin_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `doctorsinfo` (`uid`);

--
-- Constraints for table `habits`
--
ALTER TABLE `habits`
  ADD CONSTRAINT `habits_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `basicinfo` (`uid`);

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `insurance_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `basicinfo` (`uid`);

--
-- Constraints for table `pastdisease`
--
ALTER TABLE `pastdisease`
  ADD CONSTRAINT `pastdisease_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `basicinfo` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
