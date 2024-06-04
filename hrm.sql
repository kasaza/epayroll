-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 01:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

CREATE TABLE `allowances` (
  `all_id` int(11) NOT NULL,
  `medical` int(6) NOT NULL,
  `transport` int(6) NOT NULL,
  `risk` int(6) NOT NULL,
  `house` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`all_id`, `medical`, `transport`, `risk`, `house`) VALUES
(1, 7000, 4000, 8000, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bnk_id` int(11) NOT NULL,
  `bank` varchar(15) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `bnk_email` varchar(30) NOT NULL,
  `bnk_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bnk_id`, `bank`, `branch`, `bnk_email`, `bnk_phone`) VALUES
(3, 'National', 'Mwembe', 'q', 'q'),
(5, 'KCB ', 'Mwembe', 'q@gmail.com', 'q'),
(6, 'Barclays     ', 'Mwembe', 'k@s.com', '555555555');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `startdate` varchar(48) NOT NULL,
  `enddate` varchar(48) NOT NULL,
  `allDay` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `startdate`, `enddate`, `allDay`) VALUES
(1, 'Meeting', '2017-11-27T00:00:00+05:30', '2017-11-27T00:00:00+05:30', 'false'),
(2, 'New Event', '2018-01-25T06:00:00', '2018-01-25T07:30:00', 'false'),
(3, 'Annual General Meeting', '2017-11-29T00:00:00+05:30', '2017-11-29T00:00:00+05:30', 'false'),
(4, 'Conference', '2017-12-04T00:00:00+05:30', '2017-12-04T00:00:00+05:30', 'false'),
(8, 'Dinner', '2017-11-30T00:00:00+05:30', '2017-11-30T00:00:00+05:30', 'false'),
(9, 'Dinner', '2017-12-01T00:00:00+05:30', '2017-12-01T00:00:00+05:30', 'false'),
(10, 'Christmas Holiday', '2017-12-04T00:00:00', '2017-12-04T00:00:00', 'false'),
(11, 'Dinner', '2017-12-04T00:00:00', '2017-12-04T00:00:00', 'false'),
(13, 'Lunch', '2017-11-30T00:00:00+05:30', '2017-11-30T00:00:00+05:30', 'false'),
(15, 'My Event 5', '2017-12-08T00:00:00+05:30', '2017-12-08T00:00:00+05:30', 'false'),
(16, 'Board Meeting', '2018-01-15T00:00:00', '2018-01-15T00:00:00', 'false'),
(17, 'My Event 4', '2018-01-29T00:00:00', '2018-01-29T00:00:00', 'false'),
(18, 'Dinner', '2018-01-16T00:00:00+05:30', '2018-01-16T00:00:00+05:30', 'false'),
(19, 'General Meeting', '2018-01-01T00:00:00+05:30', '2018-01-01T00:00:00+05:30', 'false'),
(20, 'General Meeting', '2018-01-08T00:00:00', '2018-01-08T00:00:00', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `ded_id` int(11) NOT NULL,
  `deduction` varchar(20) NOT NULL,
  `amount` int(8) NOT NULL,
  `max_amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`ded_id`, `deduction`, `amount`, `max_amount`) VALUES
(5, 'NHIF ', 5000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department` varchar(30) NOT NULL,
  `sub` text NOT NULL,
  `head` varchar(20) NOT NULL,
  `id_no` int(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `assistant` varchar(20) NOT NULL,
  `id_no2` int(10) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `staff` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `sub`, `head`, `id_no`, `phone`, `assistant`, `id_no2`, `phone2`, `staff`) VALUES
(1, 'Administration', '1, Security', 'Dr. Sylvester Kasaza', 33135768, '0729079940', 'Mr. Jeff Kasaza', 99999999, '0728138207', 400),
(2, 'Human Resource', '1. Payroll\r\n2. Leave', 'Jeff', 33456789, '0796290505', 'Paul', 33456789, '0728138207', 100);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `desg_id` int(11) NOT NULL,
  `desg_name` varchar(20) NOT NULL,
  `desg_amount` int(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`desg_id`, `desg_name`, `desg_amount`) VALUES
(8, 'CEO', 10000),
(13, 'HR', 33000),
(14, 'Director ICT', 7000),
(15, 'Director Finance', 8000),
(16, 'None', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `jobgroup`
--

CREATE TABLE `jobgroup` (
  `jgrp_id` int(11) NOT NULL,
  `jgrp_name` varchar(20) NOT NULL,
  `jgrp_amount` int(6) NOT NULL DEFAULT '0',
  `house` int(6) NOT NULL,
  `commuter` int(6) NOT NULL,
  `gross` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobgroup`
--

INSERT INTO `jobgroup` (`jgrp_id`, `jgrp_name`, `jgrp_amount`, `house`, `commuter`, `gross`) VALUES
(8, 'A', 9960, 3000, 3000, 15960),
(9, 'C', 10380, 3000, 3000, 16380),
(10, 'D', 11370, 3300, 3000, 17670),
(11, 'E', 13140, 3500, 3000, 19640),
(13, 'F', 16050, 3500, 3000, 22550),
(14, 'G', 21304, 5000, 4000, 30304),
(15, 'H', 24662, 5000, 4000, 33662),
(16, 'J', 29918, 6000, 4000, 39918),
(17, 'K', 41590, 10000, 5000, 56590),
(18, 'L', 45880, 20000, 6000, 71880),
(19, 'M', 55840, 20000, 8000, 83840),
(20, 'N', 65290, 24000, 8000, 97290),
(21, 'P', 77527, 40000, 12000, 129527),
(22, 'Q', 89748, 40000, 14000, 143748),
(23, 'R', 109089, 40000, 16000, 165089),
(24, 'S', 120270, 60000, 20000, 200270),
(25, 'T', 152060, 80000, 24000, 256060),
(26, 'None', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jsptest`
--

CREATE TABLE `jsptest` (
  `bnk_id` int(11) NOT NULL,
  `bank` varchar(11) NOT NULL,
  `phone` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jsptest`
--

INSERT INTO `jsptest` (`bnk_id`, `bank`, `phone`) VALUES
(4, 'Equity', '0729079940'),
(5, 'bank', 'phone'),
(6, 'bank', 'phone'),
(7, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `p_id` int(11) NOT NULL,
  `id_no` int(8) NOT NULL,
  `name` char(30) NOT NULL,
  `date` date NOT NULL,
  `bonus` int(6) NOT NULL DEFAULT '0',
  `totalAll` int(6) NOT NULL DEFAULT '0',
  `totalDed` int(10) NOT NULL DEFAULT '0',
  `sal_rate` int(6) NOT NULL,
  `inc_amount` int(6) NOT NULL,
  `basic` int(10) NOT NULL DEFAULT '0',
  `gross` int(6) NOT NULL DEFAULT '0',
  `net` int(10) NOT NULL DEFAULT '0',
  `account` text NOT NULL,
  `bank` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `jobgroup` varchar(10) NOT NULL,
  `medical` int(6) NOT NULL,
  `transport` int(6) NOT NULL,
  `risk` int(6) NOT NULL,
  `house` int(6) NOT NULL,
  `commuter` int(6) NOT NULL,
  `nhif` int(6) NOT NULL,
  `helb` int(6) NOT NULL,
  `nssf` int(6) NOT NULL,
  `elimu` int(6) NOT NULL,
  `mwalimu` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`p_id`, `id_no`, `name`, `date`, `bonus`, `totalAll`, `totalDed`, `sal_rate`, `inc_amount`, `basic`, `gross`, `net`, `account`, `bank`, `designation`, `jobgroup`, `medical`, `transport`, `risk`, `house`, `commuter`, `nhif`, `helb`, `nssf`, `elimu`, `mwalimu`) VALUES
(51, 33135768, 'Jeff', '2018-06-14', 60000, 20000, 7776, 0, 0, 49590, 54590, 106814, ' 12345678 ', ' KCB ', '8000', '41590', 5000, 0, 0, 10000, 5000, 0, 7776, 0, 0, 0),
(53, 22222222, 'Patrick Kasasa', '2018-06-14', 0, 6000, 0, 0, 0, 20380, 20380, 20380, ' 67786755555554 ', ' KCB  ', '10000', '10380', 0, 0, 0, 3000, 3000, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `rpt_id` int(11) NOT NULL,
  `cDate` date NOT NULL,
  `totalEmp` int(5) NOT NULL,
  `cMonth` varchar(15) NOT NULL,
  `totalBon` int(6) NOT NULL,
  `totalInc` int(6) NOT NULL,
  `totalAll` int(6) NOT NULL,
  `totalDed` int(6) NOT NULL,
  `totalBasic` int(6) NOT NULL,
  `totalGross` int(6) NOT NULL,
  `totalNet` int(6) NOT NULL,
  `gTotal` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`rpt_id`, `cDate`, `totalEmp`, `cMonth`, `totalBon`, `totalInc`, `totalAll`, `totalDed`, `totalBasic`, `totalGross`, `totalNet`, `gTotal`) VALUES
(1, '2018-02-13', 8, '1', 505, 6200, 7000, 14500, 70000, 50000, 62000, 150000),
(2, '2018-03-13', 8, '2', 800, 3400, 2000, 15200, 40000, 36000, 40000, 138000),
(3, '2018-04-13', 8, '3', 200, 8000, 9000, 11000, 10000, 9000, 12000, 80000),
(4, '2018-05-13', 8, '4', 400, 2000, 5000, 18000, 50000, 20000, 39000, 100000),
(23, '2018-06-06', 3, '6', 5, 1, 137, 10, 141, 281, 275, 853);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `id_no` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `account` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `id_no`, `name`, `gender`, `phone`, `email`, `date`, `type`, `department`, `bank`, `account`) VALUES
(275, 22222222, 'Patrick Kasasa', 'Male', '0728138207', 'jeffkasaza@gmail.com', '2018-06-07', 'Job Order', 'Human Resource', 'KCB ', '67786755555554'),
(278, 33135768, 'Jeff Kasaza', 'Male', '0729079940', 'jeffmwn@gmail.com', '2018-06-17', 'Job Order', 'Administration', 'KCB ', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `id_no` int(8) NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `role` varchar(10) CHARACTER SET latin1 DEFAULT 'user',
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `uname`, `id_no`, `email`, `password`, `phone`, `role`, `image`) VALUES
(52, 'Kasaza Sylvester', 11111111, 'admin@gmail.com', '11111111', '0729079940', 'admin', ''),
(56, 'Patrick Kasaza', 22222222, 'jeffkasaza@gmail.com', '22222222', '0729079940', 'user', ''),
(57, 'Mark', 33135768, 'mark@gmail.com', '33135768', '0729079940', 'officer', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD PRIMARY KEY (`all_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bnk_id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`ded_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`desg_id`);

--
-- Indexes for table `jobgroup`
--
ALTER TABLE `jobgroup`
  ADD PRIMARY KEY (`jgrp_id`);

--
-- Indexes for table `jsptest`
--
ALTER TABLE `jsptest`
  ADD PRIMARY KEY (`bnk_id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`rpt_id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bnk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `ded_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `desg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobgroup`
--
ALTER TABLE `jobgroup`
  MODIFY `jgrp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jsptest`
--
ALTER TABLE `jsptest`
  MODIFY `bnk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `rpt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
