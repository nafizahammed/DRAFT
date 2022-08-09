-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 06:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Age` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stuff_member`
--

CREATE TABLE `stuff_member` (
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Age` varchar(3) NOT NULL,
  `DateofBirth` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `MobileNo` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tuition_request`
--

CREATE TABLE `tuition_request` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `district` varchar(15) NOT NULL,
  `area` varchar(15) NOT NULL,
  `medium` varchar(15) NOT NULL,
  `class` varchar(15) NOT NULL,
  `subject` varchar(14) NOT NULL,
  `contact` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuition_request`
--

INSERT INTO `tuition_request` (`username`, `fname`, `district`, `area`, `medium`, `class`, `subject`, `contact`) VALUES
('tao123', 'Taosif Bin Murtaza', 'Dhaka', 'Saheb Bajar', 'bangla', '9-10', 'english', 'etetetet'),
('tao16', 'Taosif Bin Murtaza', 'Rajshahi', 'Jhautola', 'english', '9-10', 'english', 'Rajshahi,jhautola');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobileno` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`username`, `password`, `fname`, `email`, `gender`, `mobileno`, `dob`, `address`) VALUES
('anik1', '98765', 'anik rahman', 'anik@gmail.com', 'male', '569994', '2009-06-16', 'Dhaka,Mirpur'),
('tamzid16', '12345', 'Tamzid Murtaza', 'tamzid67@gmail.com', 'male', '66655521', '2018-09-28', 'Nazipur,Patnitola,Naogoan'),
('tao16', 'tao123', 'Taosif Bin Murtaza', 'taosif@gmail.com', 'male', '01998876131', '2007-06-20', 'Rajshahi,jhautola'),
('taohid21', '12345', 'Taohid Murtaza', 'taohid@gmail.com', 'male', '01998-456456', '1990-09-28', 'Mirpur,Dhaka'),
('taosif16', '123456', 'Taosif Bin Murtaza', 'taosif0@gmail.com', 'male', '2000-12-16', '01998876131', '2000-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_request`
--

CREATE TABLE `tutor_request` (
  `fullname` varchar(20) NOT NULL,
  `district` varchar(15) NOT NULL,
  `area` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_request`
--

INSERT INTO `tutor_request` (`fullname`, `district`, `area`, `medium`, `class`, `subject`, `contact`) VALUES
('Abdur', 'Rajshahi', 'Saheb Bazar', 'Bangla', '9-10', 'English', 'abcd house'),
('Rahman', 'Dhaka', 'Mirpur', 'English', '5,6', 'Math', 'abcd house'),
('Murtaza', 'Rajshahi', 'bazar', 'Bangla', '9', 'Bngla', 'ababs@gmail.com'),
('Eliyas', 'Rajshahi', 'Jhautola', 'English', '8', 'Bangla', 'ele@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tuition_request`
--
ALTER TABLE `tuition_request`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
