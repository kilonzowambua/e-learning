-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2019 at 04:16 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(100) NOT NULL,
  `coursename` varchar(200) DEFAULT NULL,
  `courseduration` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursename`, `courseduration`) VALUES
(1, 'it', '3r35'),
(3, 'fds', '2019-05-28'),
(5, 'computer science', '3');

-- --------------------------------------------------------

--
-- Table structure for table `lec`
--

CREATE TABLE `lec` (
  `id` int(20) NOT NULL,
  `fname` varchar(20000) NOT NULL,
  `mname` varchar(2000) NOT NULL,
  `lname` varchar(2000) NOT NULL,
  `national_id` varchar(2000) NOT NULL,
  `gender` varchar(2000) NOT NULL,
  `lec_no` varchar(2000) NOT NULL,
  `phoneno` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `course` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lec`
--

INSERT INTO `lec` (`id`, `fname`, `mname`, `lname`, `national_id`, `gender`, `lec_no`, `phoneno`, `email`, `password`, `bio`, `pic`, `course`) VALUES
(1, 'vgbfb', 'vfdbb', 'dfnefdn', 'xvdfzv', 'sdvdsv', 'Demo Lec No', 'bfdx', 'dsfhthrsdx@gd.com', 'shbgn', 'Developer, Web Artisan, Graphic Designer', 'Screenshot-20190608221640-1365x766.png', 'it');

-- --------------------------------------------------------

--
-- Table structure for table `qns`
--

CREATE TABLE `qns` (
  `id` int(200) NOT NULL,
  `upload_date` varchar(200) NOT NULL,
  `s_date` varchar(200) NOT NULL,
  `questions` varchar(200) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `coursename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qns`
--

INSERT INTO `qns` (`id`, `upload_date`, `s_date`, `questions`, `type`, `coursename`) VALUES
(1, 'Thu Jun 2019', '2019-06-29', 'attachment.docx', NULL, NULL),
(2, 'Thu Jun 2019', '2019-06-24', 'MAIN.docx', 'Exam paper', 'computer science'),
(3, 'Thu Jun 2019', '', 'MAIN.docx', 'Exam paper', 'computer science');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stdid` int(10) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `middlename` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(10) DEFAULT 'student',
  `course` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `admissiondate` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5),
  `ans` varchar(200) NOT NULL,
  `results` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdid`, `firstname`, `middlename`, `lastname`, `email`, `password`, `course`, `image`, `phone`, `admissiondate`, `ans`, `results`) VALUES
(1, 'Demo Student3', 'Demo Studen', 'Demo Stud', 'std3@mail.com', 'student', 'it', '1.jpg', '234567', '2019-06-13 20:44:09.04598', 'answ.docx', 'Pre-bootcamp Challenge Preparation.pdf'),
(4, '1234', NULL, NULL, NULL, 'student', 'demo@test.com', 'bg-1.jpg', 'demo', '2019-06-13 20:39:46.61437', 'answ.docx', ''),
(5, '123', NULL, NULL, NULL, 'student', 'demo@test.com', 'pc-1.jpg', 'demo', '2019-06-12 14:18:33.18594', '', ''),
(6, 'hethtet', NULL, NULL, NULL, 'student', 'tehth', 'pc-1.jpg', 'htht', '2019-06-12 14:45:29.32738', '', ''),
(7, 'hdgj', 'yj', 'yjyk', 'ukukc@', 'student', 'jyy', 't3.jpg', 'gtht', '2019-06-12 14:49:36.92925', '', ''),
(8, 'fehgre', 'rehth', 'eht', 'qt43uy65i', 'student', 'ioo8oo', 't4.jpg', 'yh5u5u', '2019-06-13 07:07:02.56932', '', ''),
(9, 'r1', 'r2', 'r3', 'r@r.co', 'student', 'fbfgn', 't2.jpg', '2e53546', '2019-06-13 08:58:35.93016', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(100) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`, `name`, `image`) VALUES
(5, 'test@test.com', 'test', 'Kapur', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lec`
--
ALTER TABLE `lec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qns`
--
ALTER TABLE `qns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stdid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lec`
--
ALTER TABLE `lec`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qns`
--
ALTER TABLE `qns`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stdid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
