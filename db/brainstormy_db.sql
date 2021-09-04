-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 06:46 PM
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
  `ParentsContact` varchar(40) DEFAULT NULL,
  `Address` varchar(40) NOT NULL,
  `Institution` int(11) NOT NULL,
  `AcademicYear` int(11) NOT NULL,
  `Standerd` int(11) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `TotalFees` int(11) NOT NULL,
  `AdvanceFees` int(11) NOT NULL,
  `RegNo` varchar(40) NOT NULL,
  `DOJ` date NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `FullName`, `Gender`, `DOB`, `Photo`, `ParentsContact`, `Address`, `Institution`, `AcademicYear`, `Standerd`, `RollNo`, `TotalFees`, `AdvanceFees`, `RegNo`, `DOJ`, `uid`) VALUES
(2, 'Wahid Bin', 'Male', '2021-09-02', NULL, '017653432', 'Sakku', 10, 2021, 5, 0, 0, 0, '', '0000-00-00', 7),
(3, 'Moinul Partho', '', '2021-09-06', NULL, '01747479246', 'Alokar Mor', 15, 2018, 5, 0, 0, 0, '', '0000-00-00', 8);

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
(4, 'shadia', 'shadia@gmail.com', 'student', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'shoaib', 'shoaib@gmail.com', 'teacher', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'wahid', 'wahid@gmail.com', 'student', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'partho', 'partho@gmail.com', 'student', '81dc9bdb52d04dc20036dbd8313ed055');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
