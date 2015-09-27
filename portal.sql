-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2015 at 07:52 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` varchar(13) NOT NULL,
  `password` varchar(13) DEFAULT NULL,
  `verify` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`, `verify`) VALUES
('1031310418', 'siddhant', 'aaaaaa'),
('ra11123', 'zxxcxc', '1223'),
('ra123', 'zxxcxcxc', '122323'),
('ra12345', 'zxczxc', '1223');

-- --------------------------------------------------------

--
-- Table structure for table `recruit`
--

CREATE TABLE IF NOT EXISTS `recruit` (
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `reg_no` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT NULL,
  `mobile_no` bigint(10) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL,
  `year` int(3) DEFAULT NULL,
  `applyfor` varchar(30) DEFAULT NULL,
  `knowweb` varchar(120) DEFAULT NULL,
  `joinweb` varchar(120) DEFAULT NULL,
  `exceptweb` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruit`
--

INSERT INTO `recruit` (`fname`, `lname`, `reg_no`, `email`, `mobile_no`, `gender`, `department`, `year`, `applyfor`, `knowweb`, `joinweb`, `exceptweb`) VALUES
('siddhant', 'sharma', '1031310418', 'siddhants29@gmail.com', 7845537395, 'male', 'cse', 2, 'developerwdesignerapp', 'through my friend ', 'to make my skill more effective', 'nothing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `recruit`
--
ALTER TABLE `recruit`
 ADD PRIMARY KEY (`reg_no`), ADD UNIQUE KEY `mobile_no` (`mobile_no`), ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
