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
-- Table structure for table `userblog`
--

CREATE TABLE IF NOT EXISTS `userblog` (
  `blogid` int(100) NOT NULL AUTO_INCREMENT,
  `blogtitle` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `commentid` int(100) NOT NULL,
  PRIMARY KEY (`blogid`),
  UNIQUE KEY `text` (`text`,`commentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `userblog`
--

INSERT INTO `userblog` (`blogid`, `blogtitle`, `text`, `commentid`) VALUES
(10, 'Narayana Naho', 'Narayana Namo', 0),
(9, '', '', 0),
(4, 'Shrikumar', 'Hello how are you doing??', 0),
(5, 'Shri', 'I am doing fine', 0),
(6, 'Raghavendra', 'Poojyaya raghavendraya!! ', 0),
(8, 'Narayana', 'Hello how are you???', 0),
(11, 'Hare Shrinivasa', 'Hare Shrinivasa', 0);
