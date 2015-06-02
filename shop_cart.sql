-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2015 at 09:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `email`, `phone`, `amount`, `date`, `time`) VALUES
(1, 'gigi', '123 n main', 'gigi@gigi.com', '123456789', 32, '2015-06-02', '20:53:51'),
(3, 'cici', '112 splai', 'email@email.ro', '1773525548', 32, '2015-06-02', '21:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `price` varchar(32) NOT NULL,
  `image` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'apples', '10', 'apples.jpg'),
(2, 'pears', '9', 'pears.jpg'),
(3, 'strawberries', '12', 'strawb.jpg'),
(4, 'kiwis', '15', 'kiwi.jpg'),
(5, 'passion fruit', '19', 'pfruit.jpg'),
(6, 'bananas', '8', 'bananas.jpg'),
(7, 'guavas', '11', 'guava.jpg'),
(8, 'lychee', '13', 'lychee.jpg'),
(9, 'ananas', '9', 'ananas.jpg\r\n'),
(10, 'grapes', '10', 'grapes.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
