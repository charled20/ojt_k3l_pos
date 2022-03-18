-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 02:15 PM
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
-- Database: `reyrosedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `refproject`
--

CREATE TABLE `refproject` (
  `ProjectKOD` int(255) NOT NULL,
  `PRojectNAME` varchar(255) NOT NULL,
  `LOCATION` varchar(255) NOT NULL,
  `Duration` int(255) NOT NULL,
  `ProJECTCOST` int(255) NOT NULL,
  `ProjectStartDate` datetime NOT NULL,
  `UserIdProj` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcollection`
--

CREATE TABLE `tblcollection` (
  `ID` int(255) NOT NULL,
  `ORCode` varchar(255) NOT NULL,
  `ORdate` datetime NOT NULL,
  `Amount` int(255) NOT NULL,
  `CheckNumber` varchar(255) NOT NULL,
  `ProjectCode` int(255) NOT NULL,
  `InvoiceNum` varchar(255) NOT NULL,
  `Particulars` varchar(255) NOT NULL,
  `ORID` int(255) NOT NULL,
  `ORDateNum` int(255) NOT NULL,
  `UserID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbldeliverydetails`
--

CREATE TABLE `tbldeliverydetails` (
  `Ndex` int(255) NOT NULL,
  `INvoiceNum` varchar(255) NOT NULL,
  `ProductID` varchar(255) NOT NULL,
  `QTY` int(255) NOT NULL,
  `SellingPrice` int(255) NOT NULL,
  `UnitCost` int(255) NOT NULL,
  `UNIT` varchar(255) NOT NULL,
  `Discount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `ProductID` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `RetailUnitprice` int(255) NOT NULL,
  `RetailItemUnit` varchar(255) NOT NULL,
  `Expdate` datetime NOT NULL,
  `MfdDate` datetime NOT NULL,
  `Unitcost` int(255) NOT NULL,
  `CategoryID` int(255) NOT NULL,
  `SupplierID` int(255) NOT NULL,
  `ReOrderLevel` int(255) NOT NULL,
  `ReorderUnit` varchar(255) NOT NULL,
  `Discontinued` tinyint(1) NOT NULL,
  `TaxCatgoryID` int(11) NOT NULL
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
  ADD PRIMARY KEY (`ProjectKOD`);

--
-- Indexes for table `tblcollection`
--
ALTER TABLE `tblcollection`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldeliverydetails`
--
ALTER TABLE `tbldeliverydetails`
  ADD PRIMARY KEY (`Ndex`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`ProductID`);

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbldeliverydetails`
--
ALTER TABLE `tbldeliverydetails`
  MODIFY `Ndex` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
