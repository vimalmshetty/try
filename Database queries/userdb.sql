-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2012 at 01:34 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE IF NOT EXISTS `userdb` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `dateofbirth` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `loginid` int(11) NOT NULL,
  PRIMARY KEY (`loginid`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`firstname`, `lastname`, `emailid`, `dateofbirth`, `password`, `loginid`) VALUES
('Shrikumar', 'Benkal', 'sbenkal@gmail.com', '17091987', 'benkal', 0);
