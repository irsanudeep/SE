-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 10:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

CREATE TABLE `employeedetails` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `mobilenum` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `eeusername` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`fname`, `lname`, `mobilenum`, `email`, `eeusername`, `password`) VALUES
('hemanth', 'kumar', '9502053280', 'hemanth@gmail.com', 'hemanth', '2173'),
('aditya', 'sai', '9874563210', 'aditya@gmail.com', 'aditya', '2173'),
('phanesh', 'ravva', '9874563210', 'ravva@gmail.com', 'ravva', '2173');

-- --------------------------------------------------------

--
-- Table structure for table `employeeinterests`
--

CREATE TABLE `employeeinterests` (
  `eeusername` varchar(25) NOT NULL,
  `interest1` varchar(25) NOT NULL,
  `interest2` varchar(25) NOT NULL,
  `interest3` varchar(25) NOT NULL,
  `interest4` varchar(25) NOT NULL,
  `interest5` varchar(25) NOT NULL,
  `about` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employeeinterests`
--

INSERT INTO `employeeinterests` (`eeusername`, `interest1`, `interest2`, `interest3`, `interest4`, `interest5`, `about`) VALUES
('hemanth', 'sports', 'drawing', 'coding', 'academics', 'writing', ''),
('aditya', 'drawing', 'dancing', 'acting', 'writing', 'coding', ''),
('ravva', 'academics', 'writing', 'acting', 'sports', 'drawing', '');

-- --------------------------------------------------------

--
-- Table structure for table `employerdetails`
--

CREATE TABLE `employerdetails` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `mobilenum` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `erusername` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employerdetails`
--

INSERT INTO `employerdetails` (`fname`, `lname`, `mobilenum`, `email`, `erusername`, `password`) VALUES
('rohit', 'chenna', '1234567890', 'rc@g.com', 'rohit', '2173'),
('vishnu', 'naik', '1234567890', 'vishnu@gmail.com', 'vishnu', '2173'),
('vineeth', 'lambu', '9876543210', 'vin@gmail.com', 'vineeth', '2173');

-- --------------------------------------------------------

--
-- Table structure for table `employerprojects`
--

CREATE TABLE `employerprojects` (
  `projectname` varchar(50) NOT NULL,
  `eeusername` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employerprojects`
--

INSERT INTO `employerprojects` (`projectname`, `eeusername`) VALUES
('Dance Tutor', 'hemanth'),
('Dance Tutor', 'aditya'),
('Code', 'aditya'),
('Code', 'ravva'),
('Codenation', 'ravva');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectname` varchar(50) NOT NULL,
  `domain` varchar(25) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `budget` float NOT NULL,
  `details` varchar(250) NOT NULL,
  `erusername` varchar(25) NOT NULL,
  `status` int(1) NOT NULL,
  `eeusername` varchar(25) NOT NULL,
  `review` varchar(250) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectname`, `domain`, `duration`, `budget`, `details`, `erusername`, `status`, `eeusername`, `review`, `rating`) VALUES
('Dance Tutor', 'dancing', '2 months', 1500, 'ca', '', 1, '', '', 0),
('Dance Tutor', 'dancing', '2 months', 2000, 'bdf b', 'rohit', 3, 'hemanth', '', 0),
('Code', 'coding', '1 month', 2500, 'vdva', 'rohit', 3, 'aditya', '', 0),
('Codenation', 'coding', '1 month', 2000, 'coding android', 'vishnu', 3, 'ravva', 'good', 5),
('Code', 'coding', '1 month', 2000, 'coding', 'vishnu', 1, '', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
