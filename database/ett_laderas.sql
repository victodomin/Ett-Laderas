-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 02:10 PM
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

--
-- Dumping data for table `joboffers`
--

INSERT INTO `joboffers` (`idoffer`, `idclient`, `sector`, `duration`, `salary`, `description`) VALUES
('7788', '0000', 'IT', 65, 2400, 'Hi programmers needed to hack nsa'),
('7777', '0000', 'TEC', 31, 1400, 'It engineers needed for developing a new app');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joboffers`
--
ALTER TABLE `joboffers`
  ADD PRIMARY KEY (`idclient`,`sector`),
  ADD UNIQUE KEY `idoffer` (`idoffer`),
  ADD KEY `sector` (`sector`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `joboffers`
--
ALTER TABLE `joboffers`
  ADD CONSTRAINT `joboffers_ibfk_1` FOREIGN KEY (`idclient`) REFERENCES `clients` (`idclient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `joboffers_ibfk_2` FOREIGN KEY (`sector`) REFERENCES `clients` (`sector`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
