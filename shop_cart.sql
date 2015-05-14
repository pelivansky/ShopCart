-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2015 at 10:26 AM
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
  `adress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `adress`, `email`, `phone`, `amount`) VALUES
(1, 'fifi lepen', '0', 'fifi@fifi.com', '123123312111', 0),
(2, 'bascula', '0', 'bascul@basc.com', '123456789009', 129),
(3, 'vin diesel', '11424 n class,oho', 'vin@vin.com', '122255312111', 129),
(4, 'chiorel', '8899 s west st,chi', 'cucuriku@cuuc.com', '76576576544', 38),
(5, 'cucucurul', '1199 s west st,chi', 'faludgrshi@gaga.com', '1223135333', 126),
(6, 'danana', '1111 fv ', 'ariel21@yahoo.com', '0723333221', 50),
(7, 'bascula', '1111 fv', 'demail@daaa.com', '123123312111', 50),
(8, 'bascula', '1111 fv', 'demail@daaa.com', '123123312111', 0),
(9, 'bascula', '1111 fv', 'demail@daaa.com', '123123312111', 0),
(10, 'bascula', '1111 fv', 'demail@daaa.com', '123123312111', 0),
(11, 'dferwq', '1111 dfbhv', 'faludgrshi@gaga.com', '02110455476', 134),
(12, 'basculappdd', '11424 n class,ontario', 'dsfsfsdf@sdfaf.rf', '02110455476', 60),
(13, '3erqwwe', '5 n clark,duejs', 'emailul@email.ro', '112431345325', 67),
(14, '3erqwwe', '5 n clark,duejs', 'emailul@email.ro', '112431345325', 8),
(15, 'editator44', '5 n clark,duejs', 'falushi@gaga.com', '12312777777', 52),
(16, 'beleee', '11424 n class,oho', 'julama@jula.com', '77312312343', 106),
(17, 'fifilepene', '5 n clark,duejs', 'fdsfgdfb@sdafsf.com', '343466275434', 87),
(18, 'jancacat', '11424 n class,ontario', 'awefrrce@ergcr.com', '123126612111', 49);

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
