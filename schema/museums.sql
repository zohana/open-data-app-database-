-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2012 at 08:25 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gite0002`
--

-- --------------------------------------------------------

--
-- Table structure for table `museums`
--

DROP TABLE IF EXISTS `museums`;
CREATE TABLE IF NOT EXISTS `museums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `rate_count` int(12) NOT NULL,
  `rate_total` int(12) NOT NULL,
  `adr` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `museums`
--

INSERT INTO `museums` (`id`, `name`, `longitude`, `latitude`, `rate_count`, `rate_total`, `adr`) VALUES
(3, 'Cumberland Heritage Village Museum', -75.3903524268591, 45.5164637694132, 1, 1, ''),
(4, 'Diefenbunker: Canada''s Cold War Museum', -76.0477363805347, 45.351653839198, 0, 0, ''),
(5, 'Goulbourn Museum', -75.9059743325697, 45.2345487721525, 0, 0, ''),
(6, 'MusÃ©oparc Vanier Museopark', -75.6596309695265, 45.4438907889497, 0, 0, ''),
(7, 'Nepean Museum', -75.7414738970196, 45.3491336771731, 0, 0, ''),
(8, 'Osgoode Township Historical Society and Museum', -75.4624889953521, 45.159965768618, 0, 0, ''),
(9, 'Ottawa Jewish Archives', -75.7519873345627, 45.3761498300788, 0, 0, ''),
(10, 'Ottawa Room', -75.6955319434698, 45.4202457646201, 0, 0, ''),
(11, 'Pinhey''s Point Historic Site', -75.953270548815, 45.4404227729787, 0, 0, ''),
(12, 'Watson''s Mill', -75.6828052084775, 45.2269992476022, 0, 0, '');
