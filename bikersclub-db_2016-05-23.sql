-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2016 at 02:38 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bikersclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
`Admin_id` int(3) NOT NULL,
  `Admin_name` varchar(30) NOT NULL,
  `Admin_address` varchar(30) NOT NULL,
  `Admin_phone` varchar(12) DEFAULT NULL,
  `Admin_username` varchar(30) NOT NULL,
  `Admin_password` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_name`, `Admin_address`, `Admin_phone`, `Admin_username`, `Admin_password`) VALUES
(1, 'sugen', 'lazimpat', '9812121212', 'sugen', 'f53d75aa450df78d6d86ac24f6178ee2');

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
`B_id` int(3) NOT NULL,
  `Bike_name` varchar(100) DEFAULT NULL,
  `Bike_price` int(100) NOT NULL,
  `Bike_gear` varchar(50) DEFAULT NULL,
  `Bike_suspension` varchar(50) DEFAULT NULL,
  `Bike_break` varchar(50) DEFAULT NULL,
  `Bike_framesize` varchar(20) DEFAULT NULL,
  `Bike_wheelsize` varchar(20) DEFAULT NULL,
  `Bike_image` varchar(50) DEFAULT NULL,
  `Bike_totalstock` int(50) NOT NULL,
  `Bike_availablestock` int(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`B_id`, `Bike_name`, `Bike_price`, `Bike_gear`, `Bike_suspension`, `Bike_break`, `Bike_framesize`, `Bike_wheelsize`, `Bike_image`, `Bike_totalstock`, `Bike_availablestock`) VALUES
(100, 'Giant', 500, 'shimano shifter', NULL, 'hydraulic disk break', '30" ', '29"', 'images/bikes/5.jpg', 5, 5),
(101, 'Kona', 600, 'shimano shifter', NULL, 'hydraulic disk break', '27"', '27"', 'images/bikes/9.jpg', 6, 6),
(102, 'Cube', 450, 'shimano shifter', NULL, 'hydraulic disk break', '27"', '30"', 'images/bikes/12.jpg', 4, 4),
(103, 'Trek', 600, 'shimano shifter', NULL, 'hydraulic disk break', '27"', '30"', 'images/bikes/10.jpg', 4, 4),
(104, 'Trinx', 450, 'shimano shifter', NULL, 'mechanical disk break', '27.5"', '29"', 'images/bikes/15.jpg', 5, 5),
(106, 'cannondale', 700, 'shimano gear shifter', '', 'hydraulic disk break', '30"', '30"', 'images/bikes/8.jpg', 5, 5),
(117, 'demo', 0, 'demo', 'demo', 'demo', 'demo', 'demo', 'images/bikes/14.jpg', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
`C_id` int(3) NOT NULL,
  `C_name` varchar(30) NOT NULL,
  `C_address` varchar(30) NOT NULL,
  `C_phone` varchar(15) NOT NULL,
  `citizenshipno` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_id`, `C_name`, `C_address`, `C_phone`, `citizenshipno`, `email`, `username`, `password`) VALUES
(14, 'ratish', 'dhalko', '9898989898', '10101010', '', 'ratish', '847d12950656744b457306a24db399a2'),
(12, 'sugen', 'lazimpat', '9813008838', '1234', 'sugentuladhar@gmail.com', 'sugen', 'f53d75aa450df78d6d86ac24f6178ee2'),
(13, 'prajwol', 'maru', '9812312312', '1919191', '', 'prajwol', 'd11b0e594756c95007b5e29b9a429640'),
(11, 'mukesh', 'asdf', '191919191', '19119', '', 'asd', '7815696ecbf1c96e6894b779456d330e'),
(15, 'hasta', 'nayabazar', '9819191919', '1100110', '', 'hasta', '8d7f121b5d77f48f8151152bd6ad9408'),
(16, 'subash', 'swyambhu', '9898989890', '11001111', '', 'subash', 'b4caefa3d450d0e36e183160d17aba24'),
(17, 'manish', 'maru', '9988998899', '11111100', '', 'manish', '59c95189ac895fcc1c6e1c38d067e244'),
(18, 'bhawa', 'Gongabu', '9999009900', '1010101011', '', 'bhawa', '6226b4b6872a0da62965ee146ff6f4b8');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
`Event_id` int(3) NOT NULL,
  `Event_name` varchar(50) NOT NULL,
  `Event_date` date NOT NULL,
  `Event_description` text NOT NULL,
  `Event_image` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_id`, `Event_name`, `Event_date`, `Event_description`, `Event_image`) VALUES
(1, 'Champadevi Trail', '2016-01-19', 'The event was started at 6 o''clock morning in the due date. This event has been sponsored by Panc Bike.', 'images/event/event-gallery1.jpg'),
(2, 'Namabudha Long Trail', '2016-01-15', 'This event was held with the aim to have the most advanturous cyling tour ever.', 'images/event/event-gallery2.jpg'),
(3, 'Godawari Fast Trail', '2015-12-10', 'This event was held just for the refreshment for the cyclists on traveling to a short distance journey', 'images/event/event-gallery3.jpg'),
(4, 'evening heritage cycling', '2016-01-30', 'This is a cycling event held to view the cultural heritage at night time', 'images/event/event-gallery4.jpg'),
(5, 'moon night heritage travel', '2017-02-09', 'This is the cycling event held to visit different cultural heritages in kathmandu', 'images/event/event-gallery6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
`Hire_id` int(3) NOT NULL,
  `Hire_time` int(10) NOT NULL,
  `Hire_date` date NOT NULL,
  `Hire_numberofbike` int(20) NOT NULL,
  `C_id` int(3) NOT NULL,
  `B_id` int(3) NOT NULL,
  `Hire_return` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=193 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`Hire_id`, `Hire_time`, `Hire_date`, `Hire_numberofbike`, `C_id`, `B_id`, `Hire_return`) VALUES
(169, 1, '2016-02-10', 1, 12, 100, 'yes'),
(170, 1, '2016-02-11', 1, 12, 100, 'yes'),
(171, 1, '2016-02-11', 1, 12, 100, 'yes'),
(172, 2, '2016-02-13', 2, 12, 101, 'yes'),
(177, 2, '2016-02-13', 5, 15, 100, 'yes'),
(178, 1, '2016-02-13', 1, 12, 100, 'yes'),
(179, 2, '2016-02-13', 1, 12, 100, 'yes'),
(180, 1, '2016-02-13', 1, 12, 100, 'yes'),
(181, 1, '2016-02-14', 1, 15, 100, 'yes'),
(182, 2, '2016-02-14', 2, 13, 101, 'yes'),
(183, 1, '2016-02-14', 1, 13, 101, 'yes'),
(184, 2, '2016-02-15', 2, 12, 101, 'yes'),
(185, 2, '2016-02-16', 1, 12, 100, 'yes'),
(186, 2, '2016-02-16', 1, 12, 100, 'yes'),
(187, 2, '2016-02-16', 1, 12, 100, 'yes'),
(188, 1, '2016-02-16', 2, 12, 100, 'yes'),
(189, 1, '2016-02-16', 3, 12, 100, 'yes'),
(190, 2, '2016-02-16', 2, 12, 100, 'yes'),
(191, 2, '2016-02-17', 1, 12, 101, 'yes'),
(192, 2, '2016-02-17', 2, 12, 100, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
`U_id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`U_id`, `username`, `password`) VALUES
(6, 'sugen', 'sugen'),
(7, 'ratish', 'ratish'),
(8, 'subash', 'subash'),
(9, 'sugen', 'sugen'),
(10, 'sugen', 'sugen'),
(11, 'sugen', 'sugen'),
(12, 'sugen', 'sugen'),
(13, 'ratish', 'ratish'),
(14, 'subash', 'subash'),
(15, 'sugen', 'sugen'),
(16, 'subash', 'subash'),
(17, 'ratish', 'ratish'),
(18, 'sugen', 'sugen'),
(19, 'subash', 'subash'),
(20, 'ratish', 'ratish'),
(21, 'sugen', 'sugen'),
(22, 'sugen', 'sugen'),
(23, 'sugen', 'sugen'),
(24, 'sugen', 'sugen'),
(25, 'sugen', 'sugen'),
(26, 'sugen', 'sugen'),
(27, 'sugen', 'sugen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Admin_id`), ADD UNIQUE KEY `Admin_username` (`Admin_username`,`Admin_password`), ADD UNIQUE KEY `A_phone` (`Admin_phone`);

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
 ADD PRIMARY KEY (`B_id`), ADD UNIQUE KEY `bikeimage` (`Bike_image`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`C_id`), ADD UNIQUE KEY `username_2` (`username`), ADD UNIQUE KEY `password` (`password`), ADD UNIQUE KEY `C_phone` (`C_phone`), ADD UNIQUE KEY `citizenshipno` (`citizenshipno`), ADD KEY `username` (`username`,`password`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
 ADD PRIMARY KEY (`Hire_id`), ADD KEY `C_id` (`C_id`), ADD KEY `B_id` (`B_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `Admin_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
MODIFY `B_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `C_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `Event_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
MODIFY `Hire_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `U_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
