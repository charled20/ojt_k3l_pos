-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 03:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojtdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `refproject`
--

CREATE TABLE `refproject` (
  `projectkod` int(11) NOT NULL,
  `projectname` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `projectcost` int(11) DEFAULT NULL,
  `projectstartdate` datetime DEFAULT NULL,
  `useridproj` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcollection`
--

CREATE TABLE `tblcollection` (
  `ID` int(11) NOT NULL,
  `orcode` varchar(255) NOT NULL,
  `ordate` datetime DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `checknumber` varchar(255) DEFAULT NULL,
  `projectcode` int(11) DEFAULT NULL,
  `invoicenum` varchar(255) DEFAULT NULL,
  `particulars` varchar(255) DEFAULT NULL,
  `orid` int(11) DEFAULT NULL,
  `ordatenum` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbldelivery`
--

CREATE TABLE `tbldelivery` (
  `invoicenumber` varchar(255) NOT NULL,
  `transactiondatenum` int(11) DEFAULT NULL,
  `datencoded` datetime DEFAULT NULL,
  `projectcode` int(11) DEFAULT NULL,
  `ndex` int(11) NOT NULL,
  `usercod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbldeliverydetails`
--

CREATE TABLE `tbldeliverydetails` (
  `ndex` int(11) NOT NULL,
  `invoicenum` varchar(255) DEFAULT NULL,
  `productid` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sellingprice` int(11) DEFAULT NULL,
  `unitcost` int(11) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `productid` varchar(255) NOT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `retailunitprice` int(11) DEFAULT NULL,
  `retailitemunit` varchar(255) DEFAULT NULL,
  `expdate` datetime DEFAULT NULL,
  `mfddate` datetime DEFAULT NULL,
  `unitcost` int(11) DEFAULT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `supplierid` int(11) DEFAULT NULL,
  `reorderlevel` int(11) DEFAULT NULL,
  `reorderunit` varchar(255) DEFAULT NULL,
  `discontinued` int(11) DEFAULT NULL,
  `taxcatgoryid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `UserCODE` int(2) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserType` varchar(255) NOT NULL,
  `SecurityLevel` int(2) NOT NULL,
  `PROCES1` tinyint(1) NOT NULL,
  `PROCES2` tinyint(1) NOT NULL,
  `PROCES3` tinyint(1) NOT NULL,
  `PROCES4` tinyint(1) NOT NULL,
  `PROCES5` tinyint(1) NOT NULL,
  `PROCES6` tinyint(1) NOT NULL,
  `ALIAS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `refproject`
--
ALTER TABLE `refproject`
  ADD PRIMARY KEY (`projectkod`);

--
-- Indexes for table `tblcollection`
--
ALTER TABLE `tblcollection`
  ADD PRIMARY KEY (`orcode`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `projectcode` (`projectcode`);

--
-- Indexes for table `tbldelivery`
--
ALTER TABLE `tbldelivery`
  ADD PRIMARY KEY (`invoicenumber`),
  ADD UNIQUE KEY `ndex` (`ndex`),
  ADD KEY `projectcode` (`projectcode`);

--
-- Indexes for table `tbldeliverydetails`
--
ALTER TABLE `tbldeliverydetails`
  ADD UNIQUE KEY `ndex` (`ndex`),
  ADD KEY `invoicenum` (`invoicenum`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`UserCODE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcollection`
--
ALTER TABLE `tblcollection`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbldelivery`
--
ALTER TABLE `tbldelivery`
  MODIFY `ndex` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbldeliverydetails`
--
ALTER TABLE `tbldeliverydetails`
  MODIFY `ndex` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcollection`
--
ALTER TABLE `tblcollection`
  ADD CONSTRAINT `tblcollection_ibfk_1` FOREIGN KEY (`projectcode`) REFERENCES `refproject` (`ProjectKOD`);

--
-- Constraints for table `tbldelivery`
--
ALTER TABLE `tbldelivery`
  ADD CONSTRAINT `tbldelivery_ibfk_1` FOREIGN KEY (`projectcode`) REFERENCES `refproject` (`ProjectKOD`);

--
-- Constraints for table `tbldeliverydetails`
--
ALTER TABLE `tbldeliverydetails`
  ADD CONSTRAINT `tbldeliverydetails_ibfk_1` FOREIGN KEY (`invoicenum`) REFERENCES `tbldelivery` (`invoicenumber`),
  ADD CONSTRAINT `tbldeliverydetails_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `tblproduct` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
