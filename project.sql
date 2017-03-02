-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2016 at 04:10 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashu`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `EmailID` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `leaves` int(10) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `Name`, `Surname`, `EmailID`, `Password`, `leaves`) VALUES
(1, 'aslesha', 'gaikar', 'asleshagaikar@gmail.com', 'aslesha123', 5),
(2, 'yug', 'thombare', 'yugthombare@gmail.com', 'yugandhar123', 5),
(3, 'nikita', 'gawde', 'nikitagawde@gmail.com', 'nikita123', 5),
(4, 'aniket', 'gaikar', 'aniketgaikar@gmail.com', 'aniket123', 5),
(5, 'piyush', 'dwivedi', 'piyushdwivedi@gmail.com', 'piyush123', 5),
(6, 'shivani', 'jadhav', 'shivanijadhav@gmail.com', 'shivani123', 5),
(7, 'shraddha', 'metkar', 'shraddha@gmail.com', 'shraddha123', 5),
(8, 'Bhuvana', 'Iyer', 'bhuvanaiyer11@gmail.com', 'bhuvi123', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
