-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 12:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff_duty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$zRe8Ii/45irUzBIVXAefDeNOthtdMHsyk8IxPeAYzPEzm9HzGLUKa', '2019-08-18 17:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `non_teaching_tbl`
--

CREATE TABLE `non_teaching_tbl` (
  `id` int(11) NOT NULL,
  `registrationDate` text NOT NULL,
  `registrationId` varchar(20) NOT NULL,
  `surnameOfStaff` text NOT NULL,
  `otherNameOfStaff` text NOT NULL,
  `dutyAssigned` text NOT NULL,
  `academicYear` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_teaching_tbl`
--

INSERT INTO `non_teaching_tbl` (`id`, `registrationDate`, `registrationId`, `surnameOfStaff`, `otherNameOfStaff`, `dutyAssigned`, `academicYear`) VALUES
(1, '08/09/2019', '9895', 'John', 'Etim', 'Clean JSS-SSS', '2019/2020'),
(2, '08/09/2019', '8681', 'Johnny', 'Etime', 'Clean Pre-nursery', '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_tbl`
--

CREATE TABLE `teaching_tbl` (
  `id` int(11) NOT NULL,
  `registrationDate` text NOT NULL,
  `registrationId` varchar(20) NOT NULL,
  `surnameOfStaff` text NOT NULL,
  `otherNameOfStaff` text NOT NULL,
  `classAssigned` text NOT NULL,
  `term` text NOT NULL,
  `subjectAssigned` text NOT NULL,
  `academicYear` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaching_tbl`
--

INSERT INTO `teaching_tbl` (`id`, `registrationDate`, `registrationId`, `surnameOfStaff`, `otherNameOfStaff`, `classAssigned`, `term`, `subjectAssigned`, `academicYear`) VALUES
(1, '08/09/2019', '8596', 'John', 'Etimm', 'Etimm', 'First Term', 'Maths', '2019/2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_teaching_tbl`
--
ALTER TABLE `non_teaching_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_tbl`
--
ALTER TABLE `teaching_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `non_teaching_tbl`
--
ALTER TABLE `non_teaching_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teaching_tbl`
--
ALTER TABLE `teaching_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
