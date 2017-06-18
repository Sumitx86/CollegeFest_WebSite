-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2016 at 07:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `rollno` int(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `event` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `fname`, `lname`, `branch`, `year`, `mobile`, `email`, `event`, `password`) VALUES
(1, 'A', 'B', 'C.S.E.', 'first', 123, 'am@gmail.com', 'Robot', ''),
(1, 'A', 'B', 'C.S.E.', 'first', 123, 'am@gmail.com', 'Coding', ''),
(1, 'A', 'B', 'C.S.E.', 'first', 123, 'am@gmail.com', 'Web Development', ''),
(1, 'A', 'B', 'C.S.E.', 'first', 123, 'am@gmail.com', 'Trasure Hunt', ''),
(1, 'A', 'B', 'C.S.E.', 'first', 123, 'am@gmail.com', 'Augmented Gaming', ''),
(1, 'A', 'B', 'C.S.E.', 'first', 123, 'am@gmail.com', 'Debate', ''),
(1, 'A', 'B', 'C.S.E.', 'first', 123, 'am@gmail.com', 'Photo Editing', ''),
(13, 'a', 'a', 'a', 'a', 87, 'sumitkumarx86@gmail.com', 'Robot', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
