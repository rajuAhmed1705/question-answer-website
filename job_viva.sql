-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 08:29 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_viva`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `preface` varchar(1000) NOT NULL,
  `position` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `name`, `pro_pic`, `time`, `preface`, `position`, `location`, `company`) VALUES
(1, 'raju ahmed', 'invitation.JPG', 'July 21, 2019 ', 'hi\r\n', 'hi', 'i', 'i');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `comment_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  `comment_text` varchar(1000) NOT NULL,
  `post_no` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`comment_id`, `name`, `pro_pic`, `comment_text`, `post_no`) VALUES
(1, 'raju ahmed', 'invitation.JPG', 'hi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE `qa` (
  `qa_no` int(50) NOT NULL,
  `post_number` varchar(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`qa_no`, `post_number`, `question`, `answer`) VALUES
(1, '1', 'i', 'i'),
(2, '1', 'ok', 'jjo');

-- --------------------------------------------------------

--
-- Table structure for table `question_commnet`
--

CREATE TABLE `question_commnet` (
  `comment_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  `comment_text` varchar(1000) NOT NULL,
  `question_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_commnet`
--

INSERT INTO `question_commnet` (`comment_id`, `name`, `pro_pic`, `comment_text`, `question_id`) VALUES
(1, 'raju ahmed', 'invitation.JPG', 'ek', 1),
(2, 'raju ahmed', 'invitation.JPG', 'hi', 2),
(3, 'raju ahmed', 'invitation.JPG', 'ii', 1);

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `E_Institute` varchar(50) NOT NULL,
  `E_background` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `Picture` varchar(29) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `first_name`, `last_name`, `company_name`, `position`, `E_Institute`, `E_background`, `Email`, `Gender`, `Dob`, `Picture`, `password`) VALUES
(1, 'raju', 'ahmed', 'baiust', 'student', 'bsc', 'science', 'raju@gmail.com', 'Male', '02/03/2004', 'invitation.JPG', 'raju');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`qa_no`);

--
-- Indexes for table `question_commnet`
--
ALTER TABLE `question_commnet`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `comment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qa`
--
ALTER TABLE `qa`
  MODIFY `qa_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question_commnet`
--
ALTER TABLE `question_commnet`
  MODIFY `comment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
