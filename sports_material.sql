-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2022 at 04:51 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sports_material`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `quali` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `gender`, `age`, `email`, `phone`, `quali`, `address`, `psw`) VALUES
('1', 'admin', 'male', '24', 'vinothk1216@gmail.com', '9087408476', 'test', 'trichy', '111'),
('2', 'Guru', 'male', '34', 'guru@gmail.com', '8124436310', '12th', 'trichy', '123'),
('3', 'Sankar', 'male', '23', 'sanlar@gmail.com', '9087654321', '12th', 'trichy', '123');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `name`, `price`, `qty`, `img`, `desc`) VALUES
(1, 'test', '2000', '5', '2.jpg', 'test descrption'),
(2, 'Football', '350', '16', '400ball.webp', 'NIVIA Country Colour (England) Football - Size: 5 '),
(3, 'Sports shoe', '2000', '12', 'shoe.webp', 'The legacy of the most famous brand in sneakers');

-- --------------------------------------------------------

--
-- Table structure for table `paid`
--

CREATE TABLE `paid` (
  `uid` varchar(50) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `amnt` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid`
--

INSERT INTO `paid` (`uid`, `mid`, `amnt`, `status`) VALUES
('1', '1', '2000', '2'),
('2', '2', '350', '2'),
('3', '3', '2000', '2');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `age`, `email`, `phone`, `location`, `address`, `uname`, `psw`) VALUES
(1, 'admin', 'male', '21', 'test@gmail.com', '9087408476', 'trichy', 'trichy', 'admin', '111'),
(2, 'sam', 'male', '23', 'sam@gmail.com', '8124436310', '', 'trichy', 'sam', '123'),
(3, 'Jhon', 'male', '23', 'jhon@gmail.com', '8124436310', '', 'trichy', 'jhon', '123');
