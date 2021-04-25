-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 11:35 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--
CREATE DATABASE `my_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `my_db`;

-- --------------------------------------------------------

--
-- Table structure for table `actype`
--

CREATE TABLE IF NOT EXISTS `actype` (
  `AcType` varchar(50) NOT NULL,
  PRIMARY KEY (`AcType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actype`
--

INSERT INTO `actype` (`AcType`) VALUES
('Asset'),
('Capital'),
('Expense'),
('Liability'),
('Revenue');

-- --------------------------------------------------------

--
-- Table structure for table `glaccount`
--

CREATE TABLE IF NOT EXISTS `glaccount` (
  `AcName` varchar(80) NOT NULL,
  `AcType` varchar(50) NOT NULL,
  PRIMARY KEY (`AcName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glaccount`
--

INSERT INTO `glaccount` (`AcName`, `AcType`) VALUES
('Capital', 'Capital'),
('Cash', 'Asset'),
('Land and Buildings', 'Asset'),
('Petrol and Oil', 'Expense'),
('Purchases', 'Expense'),
('Rent Expenses', 'Expense'),
('Repairing', 'Expense'),
('Salary', 'Expense'),
('Sales', 'Revenue'),
('Stationary', 'Expense'),
('Utility Bills', 'Expense'),
('Vehicle', 'Asset');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `FirstName` char(30) DEFAULT NULL,
  `LastName` char(30) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`ID`, `FirstName`, `LastName`, `Age`) VALUES
(1, 'Shafique', 'Uddin', 46),
(2, 'Mofiz', 'Uddin', 52),
(3, 'Jamil', 'Uddin', 39),
(4, 'Rafique', 'Uddin', 44),
(5, 'Sala', 'Uddin', 50),
(6, 'Tomiz', 'Uddin', 49),
(7, 'Romiz', 'Uddin', 40),
(8, 'Fokhor', 'Uddin', 75),
(9, 'Yeaz', 'Uddin', 78);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE IF NOT EXISTS `voucher` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `PDate` date NOT NULL,
  `DName` varchar(80) CHARACTER SET utf8 NOT NULL,
  `Debit` decimal(20,0) NOT NULL,
  `CName` varchar(80) NOT NULL,
  `Credit` decimal(20,0) NOT NULL,
  `Narration` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `PDate`, `DName`, `Debit`, `CName`, `Credit`, `Narration`) VALUES
(2, '2019-07-01', 'Cash', '20000', 'Sales', '20000', 'Mother Board Sales to ABC Company'),
(3, '2019-07-02', 'Salary', '20000', 'Cash', '20000', 'Salary Paid to Manager'),
(4, '2019-07-02', 'Cash', '50000', 'Capital', '50000', 'Invested by Owner'),
(5, '2019-07-03', 'Vehicle', '500000', 'Cash', '500000', 'Toyota Car Purchase'),
(25, '2019-07-03', ' Petrol and Oil', '5000', ' Cash', '5000', 'Octane for Toyota'),
(26, '2019-07-03', ' Purchases', '50000', ' Cash', '50000', 'IT Accessories'),
(27, '2019-07-04', ' Stationary', '20000', ' Cash', '20000', 'Paper and Office Accessories'),
(28, '2019-07-04', ' Rent Expenses', '8000', ' Cash', '8000', 'Office Rent'),
(29, '2019-07-04', ' Cash', '25000', ' Sales', '25000', 'Hard Disk Sales to ABC Company'),
(30, '2019-07-05', ' Petrol and Oil', '5000', ' Cash', '5000', 'Octane for Toyota'),
(31, '2019-07-05', 'Cash', '30000', 'Sales', '30000', 'Graphics Card Sales to XYZ Company'),
(32, '2019-07-05', ' Purchases', '50000', ' Cash', '50000', 'IT Accessories'),
(33, '2019-07-05', ' Cash', '40000', ' Sales', '40000', 'Processor Sales to ABC Company'),
(34, '2019-07-06', ' Cash', '50000', ' Sales', '50000', 'Mouse & Keyboard Sales to XYZ Company');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
