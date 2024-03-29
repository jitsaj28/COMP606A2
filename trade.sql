-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 08:51 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trade`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customerdetails`
--

CREATE TABLE `tbl_customerdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `upass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customerdetails`
--

INSERT INTO `tbl_customerdetails` (`id`, `name`, `address`, `emailid`, `mobileno`, `status`, `uname`, `upass`) VALUES
(1, 'user1', 'chennai', 'user1@gmail.com', '97896187', 1, 'user1', '123'),
(3, 'Jeeva', 'chennai', 'E@gmail.com', '9089781', 1, 'jeeva', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobdesc`
--

CREATE TABLE `tbl_jobdesc` (
  `id` int(11) NOT NULL,
  `jtitle` varchar(30) NOT NULL,
  `jdesc` varchar(200) NOT NULL,
  `jcost` varchar(20) NOT NULL,
  `jadate` varchar(30) NOT NULL,
  `jddate` varchar(30) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `tid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jobdesc`
--

INSERT INTO `tbl_jobdesc` (`id`, `jtitle`, `jdesc`, `jcost`, `jadate`, `jddate`, `cid`, `tid`) VALUES
(1, 'Main door repair', 'repair the door', '200', '12-may-2019', '15-june-2019', '1', '0'),
(2, 'toilet repair', 'toilet repair', '100', '20-Oct-19', '2019-10-23', '1', '0'),
(3, 'toilet repair Main', 'toilet repair', '100', '20-Oct-2019', '2019-10-23', '1', '0'),
(7, 'Plumbing', 'Plunbeih', '100', '20-Oct-2019', '2019-10-31', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trade`
--

CREATE TABLE `tbl_trade` (
  `id` int(11) NOT NULL,
  `tid` varchar(10) NOT NULL,
  `jid` varchar(10) NOT NULL,
  `lcost` varchar(10) NOT NULL,
  `mcost` varchar(10) NOT NULL,
  `edate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trade`
--

INSERT INTO `tbl_trade` (`id`, `tid`, `jid`, `lcost`, `mcost`, `edate`) VALUES
(1, '1', '1', '11', '11', '2019-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tradesmandetails`
--

CREATE TABLE `tbl_tradesmandetails` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tradesmandetails`
--

INSERT INTO `tbl_tradesmandetails` (`id`, `name`, `address`, `mobileno`, `uname`, `upass`, `status`) VALUES
(1, 'trademan1', 'chennai', '978449611', 'trade1', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customerdetails`
--
ALTER TABLE `tbl_customerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jobdesc`
--
ALTER TABLE `tbl_jobdesc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_trade`
--
ALTER TABLE `tbl_trade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tradesmandetails`
--
ALTER TABLE `tbl_tradesmandetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customerdetails`
--
ALTER TABLE `tbl_customerdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jobdesc`
--
ALTER TABLE `tbl_jobdesc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_trade`
--
ALTER TABLE `tbl_trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_tradesmandetails`
--
ALTER TABLE `tbl_tradesmandetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
