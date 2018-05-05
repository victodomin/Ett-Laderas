-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 10:53 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ett_laderas`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `dni` varchar(7) NOT NULL,
  `socialsecurity` int(8) NOT NULL,
  `numberaccount` varchar(15) NOT NULL,
  `name` varchar(8) NOT NULL,
  `surname` varchar(8) NOT NULL,
  `email` varchar(18) NOT NULL,
  `residence` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`dni`, `socialsecurity`, `numberaccount`, `name`, `surname`, `email`, `residence`) VALUES
('2354252', 28999993, 'ES392832', 'eduardo', 'gonzalez', 'edugon@ucm.es', 'mostoles'),
('2435342', 28145132, 'ES134233124', 'cristian', 'maldivia', 'maldi@gmail.com', 'madrid'),
('3243523', 283422342, 'ES3423523', 'victor', 'eduardo', 'victodom@ucm.es', 'murcia');

-- --------------------------------------------------------

--
-- Table structure for table `hiredemployees`
--

CREATE TABLE `hiredemployees` (
  `dni` varchar(7) NOT NULL,
  `idoffer` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hiredemployees`
--

INSERT INTO `hiredemployees` (`dni`, `idoffer`) VALUES
('2354252', '8888'),
('3243523', '9999');

-- --------------------------------------------------------

--
-- Table structure for table `joboffers`
--

CREATE TABLE `joboffers` (
  `idoffer` varchar(8) NOT NULL,
  `sector` varchar(8) NOT NULL,
  `duration` int(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joboffers`
--

INSERT INTO `joboffers` (`idoffer`, `sector`, `duration`, `salary`, `description`) VALUES
('8888', 'TEC', 30, 1300, 'web designer for tec company'),
('9999', 'IT', 120, 7000, 'coder for engeniring lab at complutense');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idpayment` int(11) NOT NULL,
  `dni` varchar(7) NOT NULL,
  `cuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`idpayment`, `dni`, `cuantity`) VALUES
(226, '3243523', 200),
(457, '3243523', 500),
(494, '3243523', 240),
(671, '2354252', 1200),
(851, '3243523', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` varchar(8) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `password`) VALUES
('carlos', 'holita'),
('victodom', '19001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`dni`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indexes for table `hiredemployees`
--
ALTER TABLE `hiredemployees`
  ADD PRIMARY KEY (`dni`,`idoffer`),
  ADD KEY `idoffer` (`idoffer`);

--
-- Indexes for table `joboffers`
--
ALTER TABLE `joboffers`
  ADD PRIMARY KEY (`idoffer`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idpayment`,`dni`),
  ADD KEY `dni` (`dni`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `iduser` (`iduser`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hiredemployees`
--
ALTER TABLE `hiredemployees`
  ADD CONSTRAINT `hiredemployees_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `employees` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hiredemployees_ibfk_2` FOREIGN KEY (`idoffer`) REFERENCES `joboffers` (`idoffer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `employees` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
