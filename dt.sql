-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 09:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dt`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` float(7,2) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `price`, `author`, `Date`, `class`, `quantity`) VALUES
(15, 'c', 123.50, 'chandan', '2017-12-15', 'tyit', 5),
(16, 'python', 123.50, 'deepakttt', '2017-12-15', 'tyit', 78),
(17, 'java', 125.00, 'deepak tiwari', '2017-12-15', 'syit', 2),
(18, 'python', 343.00, 'syit', '2017-12-12', 'syit', 5);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `rid` int(10) NOT NULL,
  `rtype` varchar(10) NOT NULL,
  `rcharges` varchar(100) NOT NULL,
  `rcust` varchar(100) NOT NULL,
  `rmob` varchar(10) NOT NULL,
  `rstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`rid`, `rtype`, `rcharges`, `rcust`, `rmob`, `rstatus`) VALUES
(1, 'Delux', '5000', 'deepak', '12345678', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `sid` int(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sclass` varchar(20) DEFAULT NULL,
  `book` varchar(20) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`sid`, `sname`, `sclass`, `book`, `Date`) VALUES
(11, 'deepak', 'syit', NULL, NULL),
(12, 'deepak', 'syit', NULL, NULL),
(13, 'chandan', 'tyit', 'data', NULL),
(171111, 'deepak tiwari', 'syit', 'embedded system', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
