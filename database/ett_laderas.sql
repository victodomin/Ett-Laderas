-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 02:15 AM
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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `idclient` varchar(8) NOT NULL,
  `name` varchar(8) NOT NULL,
  `location` varchar(15) NOT NULL,
  `sector` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `email` varchar(8) NOT NULL,
  `residence` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hiredemployees`
--

CREATE TABLE `hiredemployees` (
  `dni` varchar(7) NOT NULL,
  `idclient` varchar(8) NOT NULL,
  `idoffer` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `joboffers`
--

CREATE TABLE `joboffers` (
  `idoffer` varchar(8) NOT NULL,
  `idclient` varchar(8) NOT NULL,
  `sector` varchar(8) NOT NULL,
  `duration` int(120) NOT NULL,
  `salary` int(120) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idpayment` varchar(8) NOT NULL,
  `dni` varchar(7) NOT NULL,
  `idclient` varchar(8) NOT NULL,
  `cuantity` int(6) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trained`
--

CREATE TABLE `trained` (
  `dni` varchar(7) NOT NULL,
  `sector` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` varchar(8) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`sector`),
  ADD UNIQUE KEY `idclient` (`idclient`);

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
  ADD PRIMARY KEY (`idclient`,`idoffer`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `dni_2` (`dni`),
  ADD KEY `idoffer` (`idoffer`);

--
-- Indexes for table `joboffers`
--
ALTER TABLE `joboffers`
  ADD PRIMARY KEY (`idclient`,`sector`),
  ADD UNIQUE KEY `idoffer` (`idoffer`),
  ADD KEY `sector` (`sector`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`dni`,`idclient`),
  ADD UNIQUE KEY `idpayment` (`idpayment`),
  ADD KEY `payment_ibfk_2` (`idclient`);

--
-- Indexes for table `trained`
--
ALTER TABLE `trained`
  ADD PRIMARY KEY (`sector`),
  ADD UNIQUE KEY `dni` (`dni`);

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
  ADD CONSTRAINT `hiredemployees_ibfk_2` FOREIGN KEY (`idclient`) REFERENCES `clients` (`idclient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hiredemployees_ibfk_3` FOREIGN KEY (`idoffer`) REFERENCES `joboffers` (`idoffer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `joboffers`
--
ALTER TABLE `joboffers`
  ADD CONSTRAINT `joboffers_ibfk_1` FOREIGN KEY (`idclient`) REFERENCES `clients` (`idclient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `joboffers_ibfk_2` FOREIGN KEY (`sector`) REFERENCES `clients` (`sector`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `employees` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`idclient`) REFERENCES `joboffers` (`idclient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trained`
--
ALTER TABLE `trained`
  ADD CONSTRAINT `trained_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `employees` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trained_ibfk_2` FOREIGN KEY (`sector`) REFERENCES `clients` (`sector`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
