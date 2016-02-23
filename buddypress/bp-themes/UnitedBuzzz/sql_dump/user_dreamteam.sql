-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2011 at 12:10 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unitedbuzz`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_dreamteam`
--

CREATE TABLE IF NOT EXISTS `user_dreamteam` (
  `user_id` int(10) NOT NULL,
  `dt_formation` varchar(50) NOT NULL,
  `dt_players` varchar(500) NOT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_dreamteam`
--

INSERT INTO `user_dreamteam` (`user_id`, `dt_formation`, `dt_players`) VALUES
(1, '532', 'a:11:{s:5:"p1-r1";s:3:"267";s:5:"p2-r1";s:3:"267";s:5:"p3-r1";s:3:"267";s:5:"p4-r1";s:3:"267";s:5:"p5-r1";s:3:"267";s:5:"p1-r2";s:3:"267";s:5:"p2-r2";s:3:"267";s:5:"p3-r2";s:3:"267";s:5:"p1-r3";s:3:"267";s:5:"p2-r3";s:3:"267";s:2:"gk";s:2:"76";}');
