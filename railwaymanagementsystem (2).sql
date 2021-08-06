-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3304
-- Generation Time: Aug 03, 2021 at 07:24 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railwaymanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `p_name` varchar(501) NOT NULL,
  `p_age` int(10) NOT NULL,
  `p_no` varchar(10) NOT NULL,
  `p_gen` varchar(10) NOT NULL,
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `booked_by` varchar(50) NOT NULL,
  `time` varchar(10) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `departure` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `seat_type` varchar(50) NOT NULL,
  `seat_no` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`p_name`, `p_age`, `p_no`, `p_gen`, `p_id`, `booked_by`, `time`, `duration`, `departure`, `source`, `destination`, `t_name`, `seat_type`, `seat_no`) VALUES
('Prerana', 45, '9830877776', 'f', 85, 'oishiray ', '10:00', ' 30 hrs', ' 2021-05-22', 'Sealdah', ' Mumbai', 'Humsafar Express', 'Sleeper', 29),
('a', 2, '1', 'f', 87, 'oishiray ', '9:00', ' 12 hrs', ' 2021-05-27', 'Sealdah', ' Puri', 'Jagannath Express', 'First Class', 29),
('ab', 21, '100', 'm', 86, 'deblina', '16:00', ' 18 hrs', ' 2021-05-20', 'Sealdah', ' Delhi', 'Rajdhani Express', 'AC 2 Tier', 27),
('ishita', 21, '100', 'f', 56, 'oishiray ', '7:00', ' 10 hrs', ' 2021-05-20', 'Sealdah', ' Puri', 'Jagannath Express', 'AC 2 Tier', 30),
('ram', 25, '200', 'm', 62, 'oishiray ', '5:00', ' 14 hrs', ' 2021-05-25', 'Sealdah', ' Patna', 'Patna Passenger', 'AC 2 Tier', 29),
('joy', 11, '100', 'm', 63, 'oishiray ', '5:00', ' 14 hrs', ' 2021-05-26', 'Sealdah', ' Patna', 'Patna Passenger', 'AC 2 Tier', 30),
('ayoo', 21, '100', 'f', 75, 'oishiray ', '16:00', ' 18 hrs', ' 2021-05-04', 'Sealdah', ' Delhi', 'Rajdhani Express', 'AC 2 Tier', 29),
('addy', 22, '200', 'f', 76, 'oishiray ', '16:00', ' 18 hrs', ' 2021-05-04', 'Sealdah', ' Delhi', 'Rajdhani Express', 'AC 2 Tier', 28),
('oishi', 25, '200', 'f', 78, 'oishiray ', '', ' ', ' 2021-05-13', 'Sealdah', ' Patna', 'Patna Passenger', 'First Class', 20),
('b', 2, '1', 'f', 88, 'oishiray ', '9:00', ' 12 hrs', ' 2021-05-27', 'Sealdah', ' Puri', 'Jagannath Express', 'First Class', 28),
('deblina', 25, '100', 'f', 80, 'oishiray ', '', ' ', ' 2021-05-13', 'Sealdah', ' Patna', 'Patna Passenger', 'First Class', 20);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `message`) VALUES
('hhhh', 'hhhh@gmail.com', 'hi'),
('Oishi Ray', 'oishiray@gmail.com', 'hello'),
('deblina', 'deblina@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_name` varchar(50) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phn_no` varchar(10) NOT NULL,
  `date_joined` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_name`, `emp_id`, `address`, `gender`, `phn_no`, `date_joined`, `email`, `password`) VALUES
('Rohit Dey', 1, 'Park Street, Kolkata', 'M', '8335041396', '2005-05-10', 'rohitdey@gmail.com', 'rohit'),
('Maya Sen', 3, 'Krishna nagar,Nadia', 'F', '9830876764', '2003-10-20', 'mayasen@gmail.com', 'maya'),
('Kajal Das', 10, 'Chakundi, Burdwan', 'Others', '8430967543', '2000-09-05', 'kajaldas@gmail.com', 'kajal');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `c_password` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `user_name`, `email`, `ph_no`, `dob`, `password`, `c_password`, `gender`) VALUES
(8, 'Ram Paik', 'rampaik', 'rampaik@gmail.com', '9756124895', '1995-09-04', '$2y$10$TxMTTvHaRuYE.QPPJ5yFLOoRctTfBjOrik4YAcHxQIouj6HtAQIhi', '$2y$10$UJZOqlUVnc1IO0jLPMgN8.JcOxD7utWxjKCC2C9guIvGZI7ej1kbC', 'male'),
(9, 'Rina Raut', 'rinaraut', 'rinaraut@gmail.com', '9623514575', '1972-08-05', '$2y$10$jrTK2.ChjfdgAvJ4xTiPsOxS4yH62av0fm05.lr6xg.4EW1gzY9Ci', '$2y$10$2kvwERReqP9JPC4sEFg2zOIm0Eq04YLyShJz6b1UYqESE6JLBL2ky', 'female'),
(10, 'Debonita Chatterjee', 'debonitachatterjee', 'debonitachatterjee@gmail.com', '8420535305', '2000-05-09', '$2y$10$NVAcRIB8V3Iprwxs3E4ZYO/OdtYSFZeMYIWKQmPuYdiOLVn00DWWi', '$2y$10$fGwE6.T5R5.S63bhLipeJeiGRpCKLXDj4yxQXgkGw75hVVMJlCsH6', 'female'),
(7, 'Oishi Ray', 'oishiray ', 'oishiray@gmail.com ', '7654321809', '2001-01-16', '$2y$10$5yiTdudcNkyN/SQ.4gOzQ.VhVb3mu0Vg5m/OpLjUaX822vCtXQoHS', '$2y$10$HhK0y3r.emBh0GPI.TI1TOGevbcHAObkSIO0CFHbrUmYAZIrOOu9y', 'female'),
(11, 'Sandipa Roy', 'sandiparoy', 'sandiparoy@gmail.com', '9051160981', '1999-10-31', '$2y$10$CMbNSEwprnVvIgzbuCdGWuR3Ui/wQDf9L1aADwjAC0LrNTk0.uZ7.', '$2y$10$ckrOME35BtTCQlHv16l2RuhE1M4ZREppi8ECn2xTWULUrs.qLJ1nS', 'female'),
(12, 'Prerana Saha', 'preranasaha', 'preranasaha@gmail.com', '8354198987', '1995-10-11', '$2y$10$Y2IWkWYQqTRwzPczAAKDT.1QsaNIrUVV4blZpWzf2t35aw9c1EFhO', '$2y$10$vHo4Zm/FIpHWcibcL.GT9usBNlkcljZdrdIPjevzNxKfAaMSrMTWe', 'female'),
(13, 'Munmun Mukherjee', 'munmun', 'munmun@gmail.com', '9831042247', '1972-06-14', '$2y$10$2xXRXOIWeFQIx46nWVTcDOJWADSckVbrxlsr5VLU691nwP1DdnISi', '$2y$10$saXql2MS.OwsKn3tiajVouavEbJHtxUqNltAO0jwRykZ.Uls6cmse', 'female'),
(14, 'Ishita Mukherjee', 'ishita', 'ishita@gmail.com', '8335041396', '1999-12-22', '$2y$10$h0eQaz8/iOFygSjTSDBUSurfggjPwwhbgi7jbqqWtxxMNv78MfR82', '$2y$10$JK2syZptl0aM4OOjBfQLz.t1hW77wdh6psv/0cFDh5pyXJ9gCzuC.', 'female'),
(15, 'Deblina Sarkar', 'deblina', 'deblina@gmail.com ', '8930425123', '2001-11-11 ', '$2y$10$KMcwRI6zKzMnadSAKDjLx.EB5igcD646e2a1rHhXFwYuQ4njhIT4.', '$2y$10$wWC4ZASWPhr/MvCVc.Uoj.b80Ax8upABayOJr7S6wc3WDMJ4j2O9W', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

DROP TABLE IF EXISTS `train`;
CREATE TABLE IF NOT EXISTS `train` (
  `train_id` int(10) NOT NULL,
  `train_name` varchar(30) NOT NULL,
  `time` varchar(15) DEFAULT NULL,
  `duration` varchar(20) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `Sleeper` int(10) NOT NULL DEFAULT '30',
  `AC 2 Tier` int(10) NOT NULL DEFAULT '30',
  `First Class` int(10) NOT NULL DEFAULT '30',
  `pnr` int(10) DEFAULT NULL,
  PRIMARY KEY (`train_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_id`, `train_name`, `time`, `duration`, `source`, `destination`, `Sleeper`, `AC 2 Tier`, `First Class`, `pnr`) VALUES
(20, 'Rajdhani Express', '16:00', '18 hrs', 'Sealdah', 'Delhi', 28, 27, 19, 1245869502),
(17, 'Satabdi Express', '12:30', '9 hrs', 'Howrah', 'Puri', 30, 30, 30, 1320568556),
(14, 'Purba Express', '10:20', '29 hrs', 'Howrah', 'Mumbai', 30, 30, 30, 1475623258),
(12, 'Jansatabdi Express', '20:30', '12 hrs', 'Howrah', 'Patna', 30, 30, 30, 2134847554),
(1, 'Purbanchal Express', '9:30', '32 hrs', 'Howrah', 'Mumbai', 30, 30, 30, 1523657495),
(5, 'Jagannath Express', '9:00', '12 hrs', 'Sealdah', 'Puri', 30, 26, 28, 1632897542),
(7, 'Patna Passenger', '5:00', '15 hrs', 'Sealdah', 'Patna', 30, 30, 20, 1856427365),
(11, 'Humsafar Express', '10:00', '30 hrs', 'Sealdah', 'Mumbai', 29, 28, 30, 2145867936),
(19, 'Kalka Mail', '23:00', '16 hrs', 'Howrah', 'Delhi', 30, 30, 30, 2045867352);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
