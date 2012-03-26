-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2012 at 06:46 PM
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'zohana28@yahoo.com', '$2a$12$l0ZsQkaPyjm1t5pXhOhQveQdqfIsR0JqdYWulCwN/pei2OKbCqmmG'),
(2, 'zohana28@yahoo.com', '$2a$12$E14kDeSGvbYPxduv.wj8QeEfvDHWYHONfvQnvDWxVwcjRKRXXzU/2'),
(3, 'zohana28@yahoo.com', '$2a$12$bGQFmbkLy1mu3iHOP8iDWOGWtl8dhMjNOPOFoOZVH9cSbywVs8lsi'),
(4, 'zohana28@yahoo.com', '$2a$12$.lZBBpE4nPVXe6W9h4exX.pXffSfjy8UTXFlCWqTi3t0eZddBGwCe'),
(5, 'bradlet@algonquincollege.com', '$2a$12$vUynOUtgIEHz5oT6RB7NeO4aStsb857tpNI88GH.cebO.i4pdeSI6'),
(6, 'bradlet@algonquincollege.com', '$2a$12$kcL.ocXKyLWy24l06YHUG.ulN9h1Tf/3BPpCeygbEdxa.ro9gJ/Ea'),
(7, 'bradlet@algonquincollege.com', '$2a$12$h4YbYSbnPSOBwbbN1rlzo.GjK2Xv.v78OhN0mrR7.zQcDkyBOnUCe'),
(8, 'bradlet@algonquincollege.com', '$2a$12$8vtEl0Z4y.JJ1.KLaH1zFO.rcs1Lxr4GpMsEKtvQuJReKJrHExPPS'),
(9, 'bradlet@algonquincollege.com', '$2a$12$EC5qjqZjtgfPe0I7yHPt4OyTVuFSVkpYy//FFnfj3YTm9VYKHNDny');
