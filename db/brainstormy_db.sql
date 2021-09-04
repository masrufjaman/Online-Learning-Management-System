-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 12:10 AM
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
(9, 'Shadia Kabir', 'Female', '1998-12-01', 'shadia.jpg', 1733462598, 'Khilgaon', 'NSU', 2018, 'BSC', 0, 0, 0, '2021-09-05', 15);

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
(15, 'shadia', 'shadia@gmail.com', 'student', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher_details`
--
ALTER TABLE `teacher_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
