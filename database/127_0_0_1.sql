-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 06:21 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--
CREATE DATABASE IF NOT EXISTS `admin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `admin`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`name`, `password`) VALUES
('admin', 'admin'),
('Gurdeep', 'ronaldo');
--
-- Database: `shield`
--
CREATE DATABASE IF NOT EXISTS `shield` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shield`;

-- --------------------------------------------------------

--
-- Table structure for table `cse_attendance`
--

CREATE TABLE `cse_attendance` (
  `date` varchar(30) NOT NULL,
  `gurdeep` varchar(1) NOT NULL,
  `ajay` varchar(1) NOT NULL,
  `lionel` varchar(1) NOT NULL,
  `aman` varchar(1) NOT NULL,
  `gareth` varchar(1) NOT NULL,
  `cristiano` varchar(1) NOT NULL,
  `james` varchar(1) NOT NULL,
  `keylor` varchar(1) NOT NULL,
  `ter` varchar(1) NOT NULL,
  `neymar` varchar(1) NOT NULL,
  `louis` varchar(1) NOT NULL,
  `sergio` varchar(1) NOT NULL,
  `xalton` varchar(1) NOT NULL,
  `wayne` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse_attendance`
--

INSERT INTO `cse_attendance` (`date`, `gurdeep`, `ajay`, `lionel`, `aman`, `gareth`, `cristiano`, `james`, `keylor`, `ter`, `neymar`, `louis`, `sergio`, `xalton`, `wayne`) VALUES
('1-1-2017', 'p', 'p', 'p', 'p', 'p', 'a', 'p', 'p', 'a', 'p', 'a', 'p', 'p', 'p'),
('2-1-2017', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'a', 'p', 'p', 'p', 'p'),
('3-1-207', 'a', 'p', 'p', 'p', 'p', 'p', 'p', 'a', 'p', 'p', 'p', 'p', 'a', 'p'),
('5-1-2017', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'a', 'p', 'p', 'a', 'p', 'p'),
('1-2-2017', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
('2-2-2017', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'a', 'p', 'p', 'p', 'a', 'p'),
('3-2-2017', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'a', 'p', 'p', 'p', 'a', 'p'),
('4-2-2017', 'p', 'p', 'p', 'p', 'p', 'a', 'p', 'p', 'a', 'p', 'p', 'a', 'p', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `roll_no` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `email`, `gender`, `course`, `branch`, `roll_no`, `password`) VALUES
(1, 'Gurdeep', 'Singh', 'gurdeepmundi10@gmail.com', 'm', 'diploma', 'CSE', '151649562495', '1463ccd2104eeb36769180b8a0c86bb6'),
(3, 'Ajay', 'Singh', 'ajay@shield.com', 'm', 'diploma', 'CSE', '151649562482', '1463ccd2104eeb36769180b8a0c86bb6'),
(10, 'lionel', 'messi', 'messi@shield.com', 'm', 'mtech', 'CSE', '1234', '1463ccd2104eeb36769180b8a0c86bb6'),
(11, 'Aman', 'Singh', 'aman@shield.com', 'm', 'diploma', 'CSE', '151649562485', '1463ccd2104eeb36769180b8a0c86bb6'),
(14, 'Gareth', 'Bale', 'bale@shield.com', 'm', 'diploma', 'CSE', '151649562489', '1463ccd2104eeb36769180b8a0c86bb6'),
(15, 'Critiano', 'Ronaldo', 'ronaldo@shield.com', 'm', 'diploma', 'CSE', '151649562501', '1463ccd2104eeb36769180b8a0c86bb6'),
(16, 'James', 'Rodriguez', 'james@shield.com', 'm', 'diploma', 'CSE', '151649562502', '1463ccd2104eeb36769180b8a0c86bb6'),
(17, 'Keylor', 'Navas', 'navas@shield.com', 'm', 'diploma', 'CSE', '151649562503', '1463ccd2104eeb36769180b8a0c86bb6'),
(18, 'Ter', 'Stegen', 'tstegen@shield.com', 'm', 'diploma', 'CSE', '151649562505', '1463ccd2104eeb36769180b8a0c86bb6'),
(19, 'Neymar', 'Di Silva', 'neymar@shield.com', 'm', 'diploma', 'CSE', '151649562507', '1463ccd2104eeb36769180b8a0c86bb6'),
(20, 'Louis', 'Suarez', 'suarez@shield.com', 'm', 'diploma', 'CSE', '151649562508', '1463ccd2104eeb36769180b8a0c86bb6'),
(21, 'Sergio', 'Aguero', 'aguero@shield.com', 'm', 'diploma', 'CSE', '151649562509', '1463ccd2104eeb36769180b8a0c86bb6'),
(22, 'Xalton', 'Ibrahimovic', 'ibrahimovic@shield.com', 'm', 'diploma', 'CSE', '151649562510', '1463ccd2104eeb36769180b8a0c86bb6'),
(23, 'Wayne', 'Rooney', 'rooney@shield.com', 'm', 'diploma', 'CSE', '151649562511', '1463ccd2104eeb36769180b8a0c86bb6');

-- --------------------------------------------------------

--
-- Table structure for table `testname`
--

CREATE TABLE `testname` (
  `first` varchar(11) NOT NULL,
  `second` char(11) NOT NULL,
  `third` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testname`
--

INSERT INTO `testname` (`first`, `second`, `third`) VALUES
('gurdeep', 'b', 3),
('helo', 'a', 5),
('halo', 'a', 5),
('beckham', 'gh', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
