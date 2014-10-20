-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2014 at 02:21 AM
-- Server version: 5.1.40
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `curok`
--

-- --------------------------------------------------------

--
-- Table structure for table `cusers`
--

CREATE TABLE IF NOT EXISTS `cusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `lastip` varchar(15) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activationid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cusers`
--

INSERT INTO `cusers` (`id`, `uid`, `username`, `password`, `mail`, `name`, `surname`, `token`, `ip`, `lastip`, `active`, `activationid`) VALUES
(1, '12345678910', 'admin', 'ZmNkNDI4NWYzOGVhZTBiMzBkMDc3Njc2YmRiMTc0OWFlNzNhYzZmYQ==', 'casino@nulled.cc', 'Nulled', 'CCovski', 'f3aa1f5c48d2b6901a9dd6da539a9b67', '127.0.0.1', '127.0.0.1', 1, '');
