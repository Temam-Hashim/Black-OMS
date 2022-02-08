-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 10:18 AM
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
-- Database: `black_office`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `at_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `departments` (
  `dpt_id` int(11) NOT NULL,
  `dpt_name` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `leave_request` (
  `lv_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(100) DEFAULT 'NULL',
  `position` varchar(100) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `leave_from` date DEFAULT NULL,
  `leave_to` date DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unapproved',
  `description` varchar(500) DEFAULT NULL,
  `applied_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `payment` (
  `py_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_mobile` varchar(15) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `payment_reason` varchar(50) NOT NULL,
  `total_payment` varchar(50) NOT NULL,
  `paid_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `registration` (
  `c_id` int(11) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `m_name` varchar(50) DEFAULT 'NULL',
  `l_name` varchar(50) DEFAULT 'NULL',
  `c_email` varchar(50) DEFAULT NULL,
  `c_mobile` varchar(15) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` date NOT NULL,
  `age` int(11) DEFAULT NULL,
  `birth_place` text NOT NULL,
  `martial_status` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `employment_type` varchar(50) DEFAULT 'NULL',
  `nationality` varchar(50) NOT NULL,
  `current_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `education_background` varchar(50) NOT NULL,
  `education_level` varchar(50) DEFAULT 'NULL',
  `salary_range` varchar(50) NOT NULL,
  `exprience_level` varchar(100) DEFAULT NULL,
  `exprience_year` varchar(11) DEFAULT NULL,
  `emergency_contact` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `analized` varchar(50) NOT NULL DEFAULT 'yes',
  `ready_for_training` varchar(50) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`c_id`, `f_name`, `m_name`, `l_name`, `c_email`, `c_mobile`, `gender`, `dob`, `age`, `birth_place`, `martial_status`, `occupation`, `employment_type`, `nationality`, `current_address`, `permanent_address`, `education_background`, `education_level`, `salary_range`, `exprience_level`, `exprience_year`, `emergency_contact`, `created`, `analized`, `ready_for_training`) VALUES
(3, 'Temam', 'Hashim', 'Ahimed', 'temamhashim3@gmail.com', '098521676', 'male', '1998-01-20', 18, 'Bambassi', 'single', 'Employed', 'Private Company', 'Ethiopia', 'Assosa,  Bambassi,  Bambassi,  02,  099,  1000', 'Assosa,  Bambassi,  Bambassi,  02,  099,  1000', 'Educated', 'BA/BSc Degree', 'Above 5000', 'existing', '2', 'Mohammed Abdella,  0912664476,  mabdell97@gmail.com,  Desse,  Bati,  Bati,  02,  099,  011', '2022-01-31 07:02:29', 'yes', 'yes'),
(4, 'Marishet', NULL, NULL, 'ourgroupemail2018@gmail.com', '0987653784', 'male', '0000-00-00', 20, '', '', '', NULL, '', '', '', '', NULL, '', 'special', '20', NULL, '2022-01-31 07:47:07', 'yes', 'yes'),
(5, 'kemal', NULL, NULL, 'hashimtemam98@gmail.com', '098785673', 'male', '0000-00-00', 23, '', '', '', NULL, '', '', '', '', NULL, '', 'startup', '0', NULL, '2022-01-31 09:10:25', 'yes', 'yes'),
(6, 'Abdu', NULL, NULL, 'temamhashim3@gmail.com', '0987653462', 'male', '0000-00-00', 25, '', '', '', NULL, '', '', '', '', NULL, '', 'existing', '10', NULL, '2022-02-03 09:25:07', 'yes', 'yes'),
(7, 'abeba', NULL, NULL, 'ab@gmail.com', '098765435', 'male', '0000-00-00', 34, '', '', '', NULL, '', '', '', '', NULL, '', 'existing', '7', NULL, '2022-02-03 13:01:12', 'yes', 'no'),
(19, 'a', NULL, NULL, 'a@gmail.com', '390093', 'male', '0000-00-00', 20, '', '', '', NULL, '', '', '', '', NULL, '', 'special', '0', NULL, '2022-02-04 07:42:19', 'no', 'no'),
(24, 'Seid', 'Ahimed', 'Kemal', 'seid@gmail.com', '0976543234', 'male', '1990-05-08', 26, 'addis ababa', 'single', 'Employed', '', 'Ethiopia', 'addis ababa, bole, 09, 02, EB20, 1000', ', , , , , ', '', '', '3001-5000', 'startup', '', NULL, '2022-02-07 12:51:08', 'no', 'no'),
(25, 'zzz', 'zzz', 'zzz', 'z@gmail.com', '0986372626', 'male', '2022-02-08', 18, 'decjnkdjnkdw', 'single', 'UnEmployed', '', 'Armenia', 'assosa,    bambassi,  Bamb,      02,  0999,      1000', 'assosa,    bambassi,  Bamb,      02,  0999,      1000', 'Educated', 'certificate(Grade 9-12)', '<1000', 'special', 'Deliquence(', ' Temam,      0985789654,      t@gmail.com,      assosa,      bambassi,     09 ,      02,  0999,      po', '2022-02-07 13:04:44', 'no', 'no'),
(27, 'bbb', 'bbb', 'bbb', 'bbb@gmail.com', '093i03o5', 'male', '2022-02-08', 18, '1010101', 'single', 'UnEmployed', '', 'Austria', 'efjk, dicdhfuk, crfkj, dnekdj, crifkj, ekfirjc', 'efjk, dicdhfuk, crfkj, dnekdj, crifkj, ekfirjc', 'Uneducated', 'certificate(Grade 1-8)', '<1000', 'startup', '0', 'xnjkdk, cjkkjfv, cjnkjf@gmail.com, cjfkjnk, cjfkkv, cdjfjk, cfnjnkv, crifkj, cnjnkfd', '2022-02-07 13:31:07', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `salary` (
  `sl_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `basic_salary` int(11) DEFAULT NULL,
  `allowance` int(11) DEFAULT NULL,
  `paid_on` date NOT NULL DEFAULT current_timestamp(),
  `total_date` varchar(10) DEFAULT '1',
  `payment_method` varchar(100) DEFAULT 'cash',
  `address` varchar(100) DEFAULT NULL,
  `tax` varchar(10) DEFAULT '0',
  `salary_status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`sl_id`, `name`, `mobile`, `email`, `department`, `pic`, `basic_salary`, `allowance`, `paid_on`, `total_date`, `payment_method`, `address`, `tax`, `salary_status`) VALUES
(19, 'Temam', '0985130393', 'temamhashim3@gmail.com', 'IT', 'imgonline-com-ua-convertOUqMa0XaEnMD.jpg', 10000, 1000, '2022-02-05', '38', NULL, '<p', '35', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `st_id` int(11) NOT NULL,
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
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created`, `modified`) VALUES
(13, 'beti', 'beti@gmail.com', 'beti', 'finance', '2022-02-06 12:23:24', '2022-02-06 12:23:24'),
(14, 'Kemal', 'hashimtemam98@gmail.com', '$2y$10$AM7ddU2y2ZnVqkh5KGRiU.jLiVg48.dmpYttj041sjVo.M6Osd6bO', 'special analyst', '2022-02-06 12:40:11', '2022-02-06 12:40:11'),
(11, 'Sara', 'ourgroupemail2018@gmail.com', '$2y$10$fye2Cl/0BRQkD7B2BiHOuO84OZnj4gbHwCLQUEJ5zo96E2nc/VC52', 'finance', '2022-02-06 11:02:10', '2022-02-06 11:02:10'),
(12, 'selam', 'selam@gmail.com', 'selam', 'promotion', '2022-02-06 12:22:44', '2022-02-06 12:22:44'),
(10, 'Temam', 'temamhashim3@gmail.com', '$2y$10$ZofcQscqw2cTd./.DJouMepTRWum3i/44aL/F672OqREs7PMr2hMO', 'admin', '2022-02-06 11:00:25', '2022-02-06 11:00:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dpt_id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`lv_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`py_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dpt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `lv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `py_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
