-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 07:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instiute`
--

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(11) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `sem_name` varchar(300) NOT NULL,
  `shift` varchar(11) NOT NULL,
  `section` varchar(32) NOT NULL,
  `day` varchar(32) NOT NULL,
  `period1` varchar(32) NOT NULL,
  `period2` varchar(32) NOT NULL,
  `period3` varchar(32) NOT NULL,
  `period4` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`id`, `dep_name`, `sem_name`, `shift`, `section`, `day`, `period1`, `period2`, `period3`, `period4`) VALUES
(1, '2', '1', '1', '1', 'Satarday', '(09-12)Bangla', '(09-12)Bangla', '(09-12)Bangla', '(09-12)Bangla');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `dep_name` varchar(11) NOT NULL,
  `teacher_name` varchar(32) NOT NULL,
  `designation` varchar(32) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `dep_name`, `teacher_name`, `designation`, `mobile`) VALUES
(1, '1', 'shurmin', 'Accountant Cum Computer Operator', '01234567890'),
(2, '2', 'mehenaz alam', 'udc', '01731492527'),
(3, '3', 'mehenaz alam cse test', 'asset.professor', '01723053859'),
(4, '3', 'mehenaz alam cse test', 'asset.professor', '01723053859'),
(5, '4', 'mehenaz alam cse test', 'asset.professor', '01723053859'),
(6, '5', 'mehenaz alam cse test', 'asset.professor', '01723053859'),
(7, '6', 'mehenaz alam cse test', 'asset.professor', '01723053859');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `dep_name` varchar(300) NOT NULL,
  `sem_name` varchar(32) NOT NULL,
  `shift` varchar(32) NOT NULL,
  `stu_name` varchar(32) NOT NULL,
  `mobile` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `guardian` varchar(32) NOT NULL,
  `guardian_no` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `dep_name`, `sem_name`, `shift`, `stu_name`, `mobile`, `address`, `guardian`, `guardian_no`) VALUES
(1, '1', '1', '1', 'rtttr', '7689798767', '29/5,BABOR ROAD,MOHAMMADPUR', 'ffdff', '34567890-'),
(2, '2', '2', '1', 'mehenaz', '76897987674', '29/5,BABOR ROAD,MOHAMMADPUR', 'ffdff', '34567890-'),
(3, '2', '2', '2', 'mehenaz', '76897987674', '29/5,BABOR ROAD,MOHAMMADPUR', 'ffdff', '34567890-'),
(4, '2', '2', '1', 'mehenaz', '76897987674', '29/5,BABOR ROAD,MOHAMMADPUR', 'ffdff', '34567890-'),
(5, '1', '2', '1', 'mehenaz', '76897987674', '29/5,BABOR ROAD,MOHAMMADPUR', 'ffdff', '34567890-'),
(6, '1', '2', '2', 'mehenaz', '76897987674', '29/5,BABOR ROAD,MOHAMMADPUR', 'ffdff', '34567890-'),
(7, '3', '4', '1', 'mehenaz alam', '7689798767', '29/5,BABOR ROAD,MOHAMMADPUR', 'ffdff', '34567890-'),
(8, '4', '4', '1', 'mehenaz alam', '7689798767', '29/5,BABOR ROAD,MOHAMMADPUR', 'ffdff', '34567890-'),
(9, '5', '4', '1', 'mehenaz alam', '7689798767', '29/5,BABOR ROAD,MOHAMMADPUR', 'ffdff', '34567890-'),
(10, '6', '4', '1', 'mehenaz alam', '7689798767', '29/5,BABOR ROAD,MOHAMMADPUR', 'ffdff', '34567890-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
