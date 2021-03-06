-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2022 at 09:11 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

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
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(50) NOT NULL,
  `at_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=342 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`st_id`, `st_name`, `at_date`, `status`) VALUES
(321, 'Temam', '2022-02-03', 'P'),
(322, 'Sara', '2022-02-03', 'P'),
(323, 'Kemal', '2022-02-03', 'P'),
(330, 'Temam', '2022-02-04', 'P'),
(331, 'Sara', '2022-02-04', 'P'),
(332, 'Kemal', '2022-02-04', 'P'),
(333, '', '0000-00-00', ''),
(334, 'Temam', '2022-02-05', 'P'),
(335, 'Sara', '2022-02-05', 'P'),
(336, 'Kemal', '2022-02-05', 'P'),
(337, '', '0000-00-00', ''),
(338, 'Temam', '2022-02-06', 'P'),
(339, 'Sara', '2022-02-06', 'P'),
(340, 'Kemal', '2022-02-06', 'P'),
(341, 'Rahel', '2022-02-06', 'P');

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dpt_id`, `dpt_name`, `created`, `modified`) VALUES
(1, 'HRM', '2022-01-19 11:13:59', '2022-01-19 11:13:59'),
(2, 'Relational', '2022-01-19 11:13:59', '2022-01-19 11:13:59'),
(3, 'Finance', '2022-01-19 11:14:49', '2022-01-19 11:14:49'),
(4, 'Promotion', '2022-01-19 11:15:07', '2022-01-19 11:15:07'),
(5, 'IT', '2022-01-19 11:15:33', '2022-01-19 11:15:33'),
(13, 'Innovation', '2022-01-24 09:10:27', '2022-01-24 09:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

DROP TABLE IF EXISTS `leave_request`;
CREATE TABLE IF NOT EXISTS `leave_request` (
  `lv_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `dept` varchar(100) DEFAULT 'NULL',
  `position` varchar(100) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `leave_from` date DEFAULT NULL,
  `leave_to` date DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unapproved',
  `description` varchar(500) DEFAULT NULL,
  `applied_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`lv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`lv_id`, `name`, `dept`, `position`, `reason`, `leave_from`, `leave_to`, `status`, `description`, `applied_on`) VALUES
(2, 'Temam', 'Software', 'Software developer', 'Seekness', '2022-01-27', '2022-01-30', 'approved', 'bad condition', '2022-01-27 12:35:31'),
(4, 'Marishet', 'Software', 'Software Developer', 'Headech', '2022-01-27', '2022-01-30', 'unapproved', 'seekness', '2022-01-27 13:09:40'),
(5, 'sara', 'Finance', 'Accountant', 'Family case', '2022-01-29', '2022-02-04', 'approved', 'weeding of family', '2022-01-29 18:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `py_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_mobile` varchar(15) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `payment_reason` varchar(50) NOT NULL,
  `total_payment` varchar(50) NOT NULL,
  `paid_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_status` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`py_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`py_id`, `customer_name`, `customer_email`, `customer_mobile`, `customer_address`, `payment_reason`, `total_payment`, `paid_on`, `payment_status`) VALUES
(1, 'Kemal', 'kemal@gmail.com', '0983662', 'addis ababa', 'Training', '22000', '2022-02-05 15:53:18', 'completed'),
(2, 'Temam', 'temam@gmail.com', '09874738', 'addis ababa', 'Education', '2000', '2022-02-05 15:55:14', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) DEFAULT NULL,
  `m_name` varchar(50) DEFAULT 'NULL',
  `l_name` varchar(50) DEFAULT 'NULL',
  `c_email` varchar(50) DEFAULT NULL,
  `c_mobile` varchar(15) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `birth_place` text,
  `martial_status` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `current_address` varchar(255) NOT NULL DEFAULT ', , , , , , , , ,',
  `permanent_address` varchar(255) NOT NULL DEFAULT ' , , , , , , , , ,',
  `education_background` varchar(50) DEFAULT NULL,
  `education_level` varchar(50) DEFAULT 'NULL',
  `occupation` varchar(50) DEFAULT NULL,
  `employment_type` varchar(50) DEFAULT 'NULL',
  `salary_range` varchar(50) DEFAULT NULL,
  `exprience_level` varchar(100) DEFAULT NULL,
  `exprience_year` varchar(11) DEFAULT NULL,
  `emergency_contact` varchar(255) DEFAULT ', , , , , , , , ,',
  `mother_name` varchar(50) DEFAULT ' , , ,',
  `father_occupation` varchar(50) DEFAULT ', ,',
  `mother_occupation` varchar(50) DEFAULT ', ,',
  `family_relation` varchar(50) DEFAULT NULL,
  `sibbling_detail` varchar(100) DEFAULT ', , , , , , ,',
  `religion` varchar(50) DEFAULT NULL,
  `language` varchar(50) DEFAULT ',,,',
  `job_seeker_id` varchar(50) DEFAULT NULL,
  `analized` varchar(50) NOT NULL DEFAULT 'yes',
  `ready_for_training` varchar(50) NOT NULL DEFAULT 'no',
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `registered_by` varchar(25) DEFAULT NULL,
  `payment` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`c_id`, `f_name`, `m_name`, `l_name`, `c_email`, `c_mobile`, `gender`, `dob`, `age`, `birth_place`, `martial_status`, `nationality`, `current_address`, `permanent_address`, `education_background`, `education_level`, `occupation`, `employment_type`, `salary_range`, `exprience_level`, `exprience_year`, `emergency_contact`, `mother_name`, `father_occupation`, `mother_occupation`, `family_relation`, `sibbling_detail`, `religion`, `language`, `job_seeker_id`, `analized`, `ready_for_training`, `created`, `registered_by`, `payment`) VALUES
(3, 'Temam', 'Hashim', 'Ahimed', 'temamhashim3@gmail.com', '098521676', 'male', '1998-01-20', '', 'Bambassi', 'single', 'Ethiopia', ', , , , , , , , ,', ' , , , , , , , , ,', 'Educated', 'BA/BSc Degree', 'Employed', 'Private Company', 'Above 5000', 'existing', '2', 'Mohammed Abdella,  0912664476,  mabdell97@gmail.com,  Desse,  Bati,  Bati,  02,  099,  011', ',,,', ',,', ',,', NULL, ',,,,,,,', NULL, ',,,', '', 'yes', 'no', '2022-01-31 07:02:29', '', 'pending'),
(5, 'kemal', NULL, NULL, 'hashimtemam98@gmail.com', '098785673', 'male', '0000-00-00', '', '', '', '', ', , , , , , , , ,', ' , , , , , , , , ,', '', NULL, '', NULL, '', 'startup', '0', NULL, ',,,', ',,', ',,', NULL, ',,,,,,,', NULL, ',,,', '', 'yes', 'yes', '2022-01-31 09:10:25', '', 'pending'),
(6, 'Abdu', NULL, NULL, 'temamhashim3@gmail.com', '0987653462', 'male', '0000-00-00', '', '', '', '', ', , , , , , , , ,', ' , , , , , , , , ,', '', NULL, '', NULL, '', 'existing', '10', ',,,,,,,,,', ',,,', ',,', ',,', NULL, ',,,,,,,', NULL, ',,,', '', 'yes', 'yes', '2022-02-03 09:25:07', '', 'pending'),
(7, 'abeba', NULL, NULL, 'ab@gmail.com', '098765435', 'male', '0000-00-00', '', '', '', '', ', , , , , , , , ,', ' , , , , , , , , ,', '', NULL, '', ',,', '', 'existing', '7', ',,,,,,,,,', ',,,', ',,', ',,', NULL, ',,,,,,,', NULL, ',,', '', 'yes', 'no', '2022-02-03 13:01:12', '', 'pending'),
(24, 'Seid', 'Ahimed', 'Kemal', 'seid@gmail.com', '0976543234', 'male', '1990-05-08', '', 'addis ababa', 'single', 'Ethiopia', ', , , , , , , , ,', ' , , , , , , , , ,', '', '', 'Employed', '', '3001-5000', 'startup', '', ',,,,,,,,,', ',,,', ',,', ',,', NULL, ',,,,,,,', NULL, ',,,', '', 'no', 'no', '2022-02-07 12:51:08', '', 'pending'),
(29, 'Mohammed', 'Abdella', 'Arebu', 'mabdella1995@gmail.com', '0910976644', 'male', '1995-06-23', '18-25', 'Bati', 'single', 'Ethiopia', ', , , , , , , , ,', ' , , , , , , , , ,', 'Educated', 'BA/BSc Degree', 'Employed', 'Self Employee', '<1000', 'startup', '0', 'Temam Hashim,    0985130393,    temam@gmail.com,    Addis Ababa,    Megangna,    09,    09,    Bati,    1000', 'Ruham,    Umer,    Seid', 'Self Employee,    Farmer', 'Self Employee,    Farmer', 'Good Relationship', 'yes,    2,    2,    Married,    Self Employee,    Married,    Self Employee', 'Musilim', 'Afaan Oromo,Amharic,English', '1653888948', 'yes', 'no', '2022-05-30 05:35:48', NULL, 'pending'),
(30, 'Kemal', 'Kemal', 'Kemal', 'kemal@gmail.com', '0987543728', 'male', NULL, '18-25', NULL, 'single', NULL, 'Addis Ababa,   Megangna, 09  ,   09,   2838,   1000', ' , , , , , , , , ,', NULL, 'NULL', 'Self Employee', 'NULL', NULL, NULL, NULL, ' , , , , , , , , ,', ' , , ,', ', ,', ', ,', NULL, ', , , , , , ,', NULL, ',,,', '1653987793', 'yes', 'no', '2022-05-31 09:03:13', NULL, 'pending'),
(31, '  Bambassi', '  Bambassi', '  02', '  099', '  1000\"	\"Assosa', '  Bambassi', '1998-01-20', '  02', '  099', '  02', '  0912664476', '  mabdell97@gmail.com', '  Desse', '  Bati', '  Bati', '  02', '  099', '  011\"	\"', '', '', '	', '', '	', '', '		', '', '', '', '', '', '', '2022-01-31 07:02:29', '', ''),
(32, 'Temam', 'Hashim', 'Ahimed', 'temamhashim3@gmail.com', '98521676', 'male', '1995-06-23', '', 'Bambassi', '', 'Ethiopia', 'Assosa,  Bambassi,  Bambassi,  02,  099,  1000', 'Assosa,  Bambassi,  Bambassi,  02,  099,  1000', 'Educated', 'BA/BSc Degree', 'Employed', 'Private Company', 'Above 5000', 'existing', '2', 'Mohammed Abdella,  0912664476,  mabdell97@gmail.com,  Desse,  Bati,  Bati,  02,  099,  011', ',,,', ',,', ',,', '', ',,,,,,,', '', ',,,', '', 'yes', 'yes', '2022-01-30 21:00:00', '', 'pending'),
(33, 'kemal', '', '', 'hashimtemam98@gmail.com', '98785673', 'male', '1995-06-24', '', '', '', '', '', '', '', '', '', '', '', 'startup', '0', '', ',,,', ',,', ',,', '', ',,,,,,,', '', ',,,', '', 'yes', 'yes', '2022-01-30 21:00:00', '', 'pending'),
(34, 'Abdu', '', '', 'temamhashim3@gmail.com', '987653462', 'male', '1995-06-25', '', '', '', '', ',,,,,,,,,', ',,,,,,,,,', '', '', '', '', '', 'existing', '10', ',,,,,,,,,', ',,,', ',,', ',,', '', ',,,,,,,', '', ',,,', '', 'yes', 'yes', '2022-02-02 21:00:00', '', 'pending'),
(35, 'abeba', '', '', 'ab@gmail.com', '98765435', 'male', '1995-06-26', '', '', '', '', ',,,,,,,,,', ',,,,,,,,,', '', '', '', ',,', '', 'existing', '7', ',,,,,,,,,', ',,,', ',,', ',,', '', ',,,,,,,', '', ',,', '', 'yes', 'no', '2022-02-02 21:00:00', '', 'pending'),
(36, 'Seid', 'Ahimed', 'Kemal', 'seid@gmail.com', '976543234', 'male', '1995-06-27', '', 'addis ababa', '', 'Ethiopia', 'addis ababa, bole, 09, 02, EB20, 1000', ', , , , , , , , , ,,', '', '', 'Employed', '', '3001-5000', 'startup', '', ',,,,,,,,,', ',,,', ',,', ',,', '', ',,,,,,,', '', ',,,', '', 'no', 'no', '2022-02-06 21:00:00', '', 'pending'),
(37, 'Mohammed', 'Abdella', 'Arebu', 'mabdella1995@gmail.com', '910976644', 'male', '1995-06-28', '18-25', 'Bati', '18-25', 'Ethiopia', 'Bati,    02,    Bati,    2367,    Bati,    5432', 'Bati,    02,    Bati,    2367,    Bati,    5432', 'Educated', 'BA/BSc Degree', 'Employed', 'Self Employee', '<1000', 'startup', '0', 'Temam Hashim,    0985130393,    temam@gmail.com,    Addis Ababa,    Megangna,    09,    09,    Bati,    1000', 'Ruham,    Umer,    Seid', 'Self Employee,    Farmer', 'Self Employee,    Farmer', 'Good Relationship', 'yes,    2,    2,    Married,    Self Employee,    Married,    Self Employee', 'Musilim', 'Afaan Oromo,Amharic,English', '1653888948', 'yes', 'no', '2022-05-29 21:00:00', '', 'pending'),
(38, 'aaa', 'aaa', 'aaa', 'aa@gmail.com', '9477595', 'male', NULL, '26-35', NULL, 'single', NULL, 'nnrkjkfrjk, , , , , ', ' , , , , , , , , ,', NULL, 'NULL', 'UnEmployed', 'NULL', NULL, NULL, NULL, ', , , , , , , , ,', ' , , ,', ', ,', ', ,', NULL, ', , , , , , ,', NULL, ',,,', '1654085126', 'yes', 'no', '2022-06-01 12:05:26', NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'reception'),
(3, 'relation'),
(4, 'attendance'),
(5, 'analyst'),
(6, 'finance'),
(7, 'startup relation'),
(8, 'existing relation'),
(9, 'special relation'),
(10, 'startup analyst'),
(11, 'existing analyst'),
(12, 'special analyst'),
(13, 'promotion'),
(14, 'secretary');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `sl_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `basic_salary` int(11) DEFAULT NULL,
  `allowance` int(11) DEFAULT NULL,
  `paid_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `total_date` varchar(10) DEFAULT '1',
  `payment_method` varchar(100) DEFAULT 'cash',
  `address` varchar(100) DEFAULT NULL,
  `tax` varchar(10) DEFAULT '0',
  `salary_status` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`sl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`sl_id`, `name`, `mobile`, `email`, `department`, `pic`, `basic_salary`, `allowance`, `paid_on`, `total_date`, `payment_method`, `address`, `tax`, `salary_status`) VALUES
(19, 'Temam', '0985130393', 'temamhashim3@gmail.com', 'IT', 'imgonline-com-ua-convertOUqMa0XaEnMD.jpg', 10000, 1000, '2022-02-04 21:00:00', '38', NULL, '<p', '35', 'pending');

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
  `position` varchar(50) DEFAULT 'NULL',
  `qualification` varchar(50) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL,
  `contract` varchar(50) DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `acount_no` varchar(20) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'approved',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`st_id`, `st_name`, `st_pic`, `st_mobile`, `st_email`, `st_gender`, `st_dob`, `address`, `martial_status`, `date_of_joining`, `dept`, `position`, `qualification`, `salary`, `contract`, `bank_name`, `acount_no`, `status`, `created`, `modified`) VALUES
(1, 'Temam', 'imgonline-com-ua-convertOUqMa0XaEnMD.jpg', '0985130393', 'temamhashim3@gmail.com', 'Male', '1998-01-20', '<p>Addis Ababa, Ethiopia.</p>\r\n', 'Single', '2022-01-15', 'IT', 'Software Developer', 'Bsc, Computer Engineering', '100000', 'Permanent', 'ETB', '10106163778', 'Approved', '2022-01-20 09:41:24', '2022-01-20 09:41:24'),
(2, 'Sara', 'blank.png', '0985130393', 'sara3@gmail.com', 'Male', '1998-01-20', '<p>Addis Ababa Ethiopia</p>\r\n', 'Single', '2022-01-18', 'Finance', 'acountant', 'BA, Accounting', '9000', 'Permanent', 'ETB', '10106271789', 'Approved', '2022-01-20 09:43:03', '2022-01-20 09:43:03'),
(4, 'Kemal', 'algo.png', '0987654352', 'kemal@gmail.com', 'Male', '1998-01-14', '<p><strong>Addis Ababa Ethiopia</strong></p>\r\n', 'Single', '2022-01-28', 'Development', 'department Head', 'Bsc.', '10000', 'Permanent', 'Awash', '10100010194883', 'Approved', '2022-01-24 09:12:44', '2022-01-24 09:12:44'),
(6, 'Rahel', 'blank.png', '0911068913', 'rahel@gmail.com', 'Female', '1997-01-01', '<p>Addis Ababa, Ethiopia</p>\r\n', 'Single', '2022-02-06', 'Finance', 'Finance', 'Bsc in Constraction', '10000', 'Permanent', 'CBE', '10001020345678', 'Approved', '2022-02-06 11:05:53', '2022-02-06 11:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created`, `modified`) VALUES
(13, 'analyst', 'beti@gmail.com', '$2y$10$HDO0TGwa0YMnm0PwMeKNBeBoKMci9DBEV0mCC1iKnSnCpd9MAL54G', 'analyst', '2022-02-06 12:23:24', '2022-02-06 12:23:24'),
(14, 'relation', 'hashimtemam98@gmail.com', '$2y$10$UAoFbI57eGUUdVkmQQ7b6OdKeVRvJ5klW7V4dXTkR2ioWNuP.ZmfO', 'relation', '2022-02-06 12:40:11', '2022-02-06 12:40:11'),
(11, 'reception', 'ourgroupemail2018@gmail.com', '$2y$10$gTsoCLsGGThdrz.ohj2poeAzOaR4xQCXfuSyUmoYLf4dLaS0S024S', 'reception', '2022-02-06 11:02:10', '2022-02-06 11:02:10'),
(12, 'promotion', 'selam@gmail.com', '$2y$10$I46S.QMrdT5MJ14OVmPoLetV8BeYu.wib8Rmqjn3RBIFPOaPN7Apq', 'promotion', '2022-02-06 12:22:44', '2022-02-06 12:22:44'),
(10, 'Admin', 'temamhashim3@gmail.com', '$2y$10$8n3I9dRj1GofjHMpWA8qJOjClDqG6uwWPoaqrUDQj0BiWs8oAsk5m', 'admin', '2022-02-06 11:00:25', '2022-02-06 11:00:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
