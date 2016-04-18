-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 09:15 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jona`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `country_code` char(2) COLLATE latin1_general_ci NOT NULL,
  `country_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`country_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_code`, `country_name`) VALUES
('PH', 'Philippines'),
('US', 'United States of America'),
('CA', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_code` char(2) COLLATE latin1_general_ci NOT NULL,
  `first_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `last_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `delete_flag` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'n',
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `country_code`, `first_name`, `last_name`, `email`, `phone`, `password`, `delete_flag`) VALUES
(1, 'PH', 'Jose', 'Rizal', 'jose@rizal.com', '8881234', 'default1', 'n'),
(2, 'PH', 'Andres', 'Bonifacio', 'andres@bonifacio.com', '8881235', 'default1', 'n'),
(3, 'PH', 'Apolinario', 'Mabini', 'apolinario@mabini.com', '', 'default1', 'n'),
(4, 'PH', 'Juan', 'Tamad', '', '', 'default1', 'n'),
(5, 'US', 'George', 'Washington', 'george@washington.com', '5556789', 'default1', 'n'),
(6, 'US', 'Abraham', 'Lincoln', 'abraham@lincoln.com', '5556790', 'default1', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `job_date` date NOT NULL,
  `due_date` date NOT NULL,
  `subtotal_amount` double NOT NULL,
  `tax_amount` double NOT NULL,
  `total_amount` double NOT NULL,
  `delete_flag` char(1) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `customer_id`, `job_date`, `due_date`, `subtotal_amount`, `tax_amount`, `total_amount`, `delete_flag`) VALUES
(1, 1, '2007-01-01', '2007-01-03', 1400, 115.5, 1515.5, 'n'),
(2, 2, '2007-01-01', '2007-01-02', 250, 20.63, 270.63, 'n'),
(3, 1, '2007-01-02', '2007-01-05', 50, 4.13, 54.13, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `job_items`
--

CREATE TABLE IF NOT EXISTS `job_items` (
  `job_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double NOT NULL,
  `delete_flag` char(1) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`job_item_id`,`job_id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `job_items`
--

INSERT INTO `job_items` (`job_item_id`, `job_id`, `product_id`, `quantity`, `amount`, `delete_flag`) VALUES
(1, 1, 1, 100, 400, 'n'),
(2, 1, 2, 500, 1000, 'n'),
(3, 2, 1, 2000, 100, 'n'),
(4, 2, 4, 1000, 150, 'n'),
(5, 3, 2, 1000, 50, 'n'),
(6, 3, 3, 123, 456, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `delete_flag` char(1) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `delete_flag`) VALUES
(1, 'Business Cards', 'n'),
(2, 'Brochures', 'n'),
(3, 'Posters', 'n'),
(4, 'Postcards', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  `datetime_posted` datetime NOT NULL,
  `rating` smallint(5) unsigned NOT NULL,
  `review_title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `review` text COLLATE latin1_general_ci NOT NULL,
  `delete_flag` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'n',
  PRIMARY KEY (`review_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `product_id`, `customer_id`, `datetime_posted`, `rating`, `review_title`, `review`, `delete_flag`) VALUES
(1, 1, 1, '2010-01-01 00:00:00', 1, 'Stupid!', 'This is the most stupid website!', 'n'),
(2, 1, 2, '2010-01-31 07:30:00', 5, 'Magnifico!', 'Magnifico!', 'n'),
(3, 3, 1, '2010-02-14 09:30:00', 3, '?', 'What''s this about?', 'n'),
(4, 2, 1, '2010-03-15 15:00:00', 5, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, his id soluta efficiendi. His aliquip interesset eu, ignota equidem torquatos pro an, cu sit accusata platonem. Nulla contentiones et vis, vero probatus reprimique ut eos. No nonumes civibus reprimique est, vide delenit qui an. Consequat reformidans repudiandae mei ei.\r\n\r\nIntellegat constituto quo cu. Ea laudem volumus necessitatibus duo, sea stet salutandi adolescens ei, mea velit adolescens no. Cu habeo legere duo. Dolorum maluisset mel ex, sit brute insolens cu. Ne modus malorum per, diam appetere postulant sit in.\r\n\r\nIn viris regione atomorum mei, sed ea soleat dolores assueverit, vix justo verear periculis at. Eam te utamur aliquam senserit, ei nonumy splendide definiebas cum. Est te utinam integre interpretaris, eu sed paulo commodo. Ius cu postulant mediocritatem. Ut sed choro periculis, justo prodesset sententiae sea ei.', 'n'),
(5, 4, 2, '2010-05-02 00:00:00', 5, 'Lol', '"Kahanga-hanga!"', 'n'),
(6, 3, 3, '2016-04-18 00:00:00', 1, 'nice', 'vzvzxczxvxzv', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `trainees`
--

CREATE TABLE IF NOT EXISTS `trainees` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trainees`
--

INSERT INTO `trainees` (`id`, `first_name`, `last_name`) VALUES
(1, 'Ross Antonio', 'Alcazar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
