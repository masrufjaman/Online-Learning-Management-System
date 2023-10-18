-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 10:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainstormy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `doc` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `price`, `payment`, `status`, `doc`) VALUES
(2, 'CSE482', '', 1120, '', 'launched', '2021-09-05'),
(3, 'CSE323', '', 998, '', 'pending', '2021-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `FullName` varchar(40) NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Photo` text DEFAULT NULL,
  `ParentsContact` int(11) DEFAULT NULL,
  `Address` varchar(40) NOT NULL,
  `Institution` varchar(255) NOT NULL,
  `AcademicYear` int(11) NOT NULL,
  `Standerd` varchar(255) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `TotalFees` int(11) NOT NULL,
  `AdvanceFees` int(11) NOT NULL,
  `DOJ` date NOT NULL DEFAULT current_timestamp(),
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `FullName`, `Gender`, `DOB`, `Photo`, `ParentsContact`, `Address`, `Institution`, `AcademicYear`, `Standerd`, `RollNo`, `TotalFees`, `AdvanceFees`, `DOJ`, `uid`) VALUES
(9, 'Shadia Kabir', 'Female', '1998-12-01', 'shadia.jpg', 1733462598, 'Khilgaon', 'NSU', 2018, 'BSC', 0, 0, 0, '2021-09-05', 15),
(10, 'Raida', '', '0000-00-00', NULL, NULL, '', '', 0, '', 0, 0, 0, '2021-09-05', 18),
(11, 'rimi', '', '0000-00-00', NULL, NULL, '', '', 0, '', 0, 0, 0, '2021-09-05', 20),
(12, 'sakki', '', '0000-00-00', NULL, NULL, '', '', 0, '', 0, 0, 0, '2021-09-05', 21),
(13, 'sdaf', '', '0000-00-00', NULL, NULL, '', '', 0, '', 0, 0, 0, '2021-09-05', 25);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `photo` text NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `doj` date NOT NULL DEFAULT current_timestamp(),
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`id`, `full_name`, `gender`, `dob`, `photo`, `phone_no`, `address`, `doj`, `tid`) VALUES
(3, 'sts1', '', '0000-00-00', '', 0, '', '2021-09-05', 19),
(4, 'mah1', '', '0000-00-00', '', 0, '', '2021-09-05', 22),
(5, 'rmz1', '', '0000-00-00', '', 0, '', '2021-09-05', 23),
(6, 'ssh', '', '0000-00-00', '', 0, '', '2021-09-05', 24),
(7, 'ridsf', '', '0000-00-00', '', 0, '', '2021-09-05', 26);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('student','teacher','admin') NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`) VALUES
(3, 'masruf', 'masrufjamanr@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'shoaib', 'shoaib@gmail.com', 'teacher', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'shadia', 'shadia@gmail.com', 'student', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'Raida', 'raida@gmail.com', 'student', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'sts1', 'sahneela@gmail.com', 'teacher', '81dc9bdb52d04dc20036dbd8313ed055'),
(20, 'rimi', 'rimi@gmail.com', 'student', '81dc9bdb52d04dc20036dbd8313ed055'),
(21, 'sakki', 'sakii@gmail.com', 'student', '7d432d842dea3e9994eed68a6dd8df79'),
(22, 'mah1', 'mahe@gmail.com', 'teacher', '81dc9bdb52d04dc20036dbd8313ed055'),
(23, 'rmz1', 'rmz@gmail.com', 'teacher', '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'ssh', 'ssh@gmail.com', 'teacher', '81dc9bdb52d04dc20036dbd8313ed055'),
(25, 'sdaf', 'sdaf@gmail.com', 'student', '37e0c86903875b5673b5cd4b03fe8082'),
(26, 'ridsf', 'ridsf@gmail.com', 'teacher', '667a4af374347aaebc6d04d8572fbb85');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tid` (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teacher_details`
--
ALTER TABLE `teacher_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD CONSTRAINT `Test` FOREIGN KEY (`tid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
