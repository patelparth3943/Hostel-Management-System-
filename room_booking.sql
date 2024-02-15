-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2020 at 04:53 AM
-- Server version: 5.5.28-log
-- PHP Version: 5.4.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `room_booking`
--

CREATE TABLE IF NOT EXISTS `room_booking` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `college` varchar(80) NOT NULL,
  `department` varchar(80) NOT NULL,
  `semester` int(2) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact1` int(12) NOT NULL,
  `contact2` int(12) NOT NULL,
  `contact3` int(12) NOT NULL,
  `hostelname` varchar(80) NOT NULL,
  `roomnumber` int(5) NOT NULL,
  `paymenttype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_booking`
--

INSERT INTO `room_booking` (`name`, `gender`, `dob`, `college`, `department`, `semester`, `blood`, `address`, `email`, `contact1`, `contact2`, `contact3`, `hostelname`, `roomnumber`, `paymenttype`) VALUES
('gdp', 'Male', '2020-02-05', 'B S Patel Polytechnic', 'Computer', 1, 'A', 'kherva', '123@gail.com', 45, 23, 23, 'old uma', 2, 'offline');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
