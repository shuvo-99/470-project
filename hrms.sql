-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 06:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_sl` bigint(20) UNSIGNED NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `dept_head` varchar(100) NOT NULL,
  `dept_task` varchar(100) NOT NULL,
  `no_of_members` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_sl`, `dept_name`, `dept_head`, `dept_task`, `no_of_members`) VALUES
(1, 'CSE', 'Nirjhor', 'CSE471 Project', 3),
(2, 'MNS', 'Shuvo', 'ABCD', 4),
(3, 'BBA', 'RFU', 'ECO101', 30),
(4, 'CS', 'ABC', 'Unknown Task', 5);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_sl` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `birth_year` date NOT NULL,
  `emp_position` varchar(100) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `joining_year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_sl`, `username`, `emp_name`, `mobile_no`, `birth_year`, `emp_position`, `dept_name`, `gender`, `salary`, `joining_year`) VALUES
(1, 'shagoto_t14', 'Shagoto', '1234556778', '2023-04-01', 'Executive', 'CSE', 'Male', 12345, '2023-04-10'),
(2, 'akhlak_t00', 'Akhlak', '137135013', '2023-04-23', 'ST', 'MNS', 'Male', 7500, '2023-04-30'),
(3, 'ami_ar_st_na', 'Hasib', '234242', '2016-01-05', 'Non ST', 'CSE', 'Male', 31513, '2023-04-26'),
(4, 'dr_mih', 'MIH', '135151', '1982-06-01', 'Faculty', 'CSE', 'Male', 1000000, '2023-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `leave_report`
--

CREATE TABLE `leave_report` (
  `emp_sl` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `leave_taken` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `emp_sl` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `no_of_days_requested` int(11) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`emp_sl`, `emp_name`, `no_of_days_requested`, `reason`, `status`) VALUES
(1, 'Shagoto', 3, 'CSE471 Project', NULL),
(2, 'Akhlak', 100, 'Marriage', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_sl` bigint(20) UNSIGNED NOT NULL,
  `proj_name` varchar(100) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `proj_leader` varchar(100) NOT NULL,
  `proj_task` varchar(100) NOT NULL,
  `no_of_members` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_sl`, `proj_name`, `dept_name`, `proj_leader`, `proj_task`, `no_of_members`) VALUES
(1, 'CSE471', 'CSE', 'MIH', 'Syllabus design', 3),
(2, 'CSE423 Project', 'MNS', 'Akhlak', 'Many', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '12345'),
('akhlak_t00', '45678'),
('ami_ar_st_na', '09876'),
('dr_mih', '75685'),
('shagoto_t14', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD UNIQUE KEY `dept_sl` (`dept_sl`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `emp_sl` (`emp_sl`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD UNIQUE KEY `project_sl` (`project_sl`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_sl` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_sl` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_sl` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
