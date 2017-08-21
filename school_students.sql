-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 09:18 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_students`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(4) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_school` text NOT NULL,
  `roll_no` int(20) NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `s_name`, `s_school`, `roll_no`, `result`) VALUES
(10, 'fghjk', 'werty', 0, '89'),
(11, 'Muhammad SHan', 'GLasgow', 4321, 'Pass'),
(12, 'asdg', 'fdsa', 3452, 'fail'),
(14, 'asdg', 'fdsa', 3452, 'fail'),
(15, 'mian', 'lgs', 6854, 'Pass'),
(16, 'mian', 'lgs', 6854, 'Pass'),
(17, 'mian', 'lgs', 6854, 'Pass'),
(18, 'ali', 'lwa', 765, 'f'),
(55, '', '', 0, ''),
(56, '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
