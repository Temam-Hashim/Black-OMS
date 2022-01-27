-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2022 at 06:15 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `black_office`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `dpt_id` int(11) NOT NULL AUTO_INCREMENT,
  `dpt_name` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`dpt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dpt_id`, `dpt_name`, `created`, `modified`) VALUES
(1, 'HRM', '2022-01-19 11:13:59', '2022-01-19 11:13:59'),
(2, 'Development', '2022-01-19 11:13:59', '2022-01-19 11:13:59'),
(3, 'Finance', '2022-01-19 11:14:49', '2022-01-19 11:14:49'),
(4, 'Design', '2022-01-19 11:15:07', '2022-01-19 11:15:07'),
(5, 'Software', '2022-01-19 11:15:33', '2022-01-19 11:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(20) NOT NULL,
  `st_pic` varchar(50) DEFAULT NULL,
  `st_mobile` varchar(15) DEFAULT NULL,
  `st_email` varchar(50) DEFAULT NULL,
  `st_gender` varchar(10) DEFAULT NULL,
  `st_dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `martial_status` varchar(20) NOT NULL,
  `date_of_joining` date DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL,
  `contract` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `acount_no` varchar(20) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'approved',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`st_id`, `st_name`, `st_pic`, `st_mobile`, `st_email`, `st_gender`, `st_dob`, `address`, `martial_status`, `date_of_joining`, `dept`, `salary`, `contract`, `position`, `bank_name`, `acount_no`, `status`, `created`, `modified`) VALUES
(1, 'Temam', 'temam.jpg', '0985130393', 'temamhashim3@gmail.com', 'Male', '1998-01-20', NULL, 'single', '2022-01-20', 'Software', '10,000', 'permanent', 'Software Developer', 'ETB', '10106163778', 'approved', '2022-01-20 09:41:24', '2022-01-20 09:41:24'),
(2, 'Sara', 'temam.jpg', '0985130393', 'sara3@gmail.com', 'Female', '1998-01-20', NULL, 'single', '2022-01-20', 'Finance', '8,000', 'permanent', 'Accountant', 'ETB', '10106271789', 'approved', '2022-01-20 09:43:03', '2022-01-20 09:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'Admin', 'admin123', 'admin', '2022-01-13 06:21:51', '2022-01-13 06:21:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
