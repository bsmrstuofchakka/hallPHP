-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2020 at 03:34 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hallphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `amountable`
--

DROP TABLE IF EXISTS `amountable`;
CREATE TABLE IF NOT EXISTS `amountable` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `amstudent_id` varchar(255) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amountable`
--

INSERT INTO `amountable` (`id`, `amstudent_id`, `amount`, `time`) VALUES
(1, '16CSE23', 200, '2020-02-29 15:04:15'),
(2, '16CSE23', 200, '2020-02-29 15:04:15'),
(15, '16CSE26', 500, '2020-08-24 14:02:06'),
(12, '16CSE26', 560, '2020-03-02 21:06:17'),
(14, '16CSE24', 200, '2020-03-03 09:58:44'),
(8, '16CSE26', 1234, '2020-03-02 20:56:50'),
(11, '16CSE26', 560, '2020-03-02 21:06:17'),
(16, '16CSE26', 788, '2020-08-31 16:41:40'),
(17, '2015120103', 500, '2020-09-02 03:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `buy_meal`
--

DROP TABLE IF EXISTS `buy_meal`;
CREATE TABLE IF NOT EXISTS `buy_meal` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `bStudent_id` varchar(255) NOT NULL,
  `morning_meal_quantity` int(10) NOT NULL,
  `launch_meal_quantity` int(10) NOT NULL,
  `dinner_meal_quantity` int(10) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_meal`
--

INSERT INTO `buy_meal` (`id`, `bStudent_id`, `morning_meal_quantity`, `launch_meal_quantity`, `dinner_meal_quantity`, `time`) VALUES
(60, '16CSE26', 3, 1, 1, '2020-03-03'),
(65, '16CSE24', 1, 1, 1, '2020-03-03'),
(66, '16CSE26', 0, 2, 2, '2020-08-24'),
(67, '16CSE26', 3, 0, 2, '2020-08-29'),
(68, '16CSE26', 3, 4, 1, '2020-08-31'),
(69, '16CSE26', 1, 1, 1, '2020-09-01'),
(70, '2015120103', 1, 1, 1, '2020-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
CREATE TABLE IF NOT EXISTS `complain` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `cStudent_id` varchar(255) NOT NULL,
  `rtitle` varchar(255) NOT NULL,
  `rcontent` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `cStudent_id`, `rtitle`, `rcontent`, `time`) VALUES
(38, '6', 'food crises', '              rice      ', '2020-01-16 14:10:24'),
(40, '16CSE23', 'hi', 'helllo nana problem                    ', '2020-02-28 06:22:38'),
(41, '16CSE23', 'hihiii', 'helllo nana prohelllo nana problem                    helllo nana problem                    helllo nana problem                    helllo nana problem                    blem                    ', '2020-02-28 06:23:32'),
(51, '16CSE26', 'quarrle', '     iii               ', '2020-08-31 16:19:55'),
(52, '16CSE26', 'uyt', '         uyfty           ', '2020-08-31 16:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `mealcost`
--

DROP TABLE IF EXISTS `mealcost`;
CREATE TABLE IF NOT EXISTS `mealcost` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mtudent_id` varchar(255) NOT NULL,
  `cost` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealcost`
--

INSERT INTO `mealcost` (`id`, `mtudent_id`, `cost`) VALUES
(4, '16CSE23', 225),
(7, '16CSE24', 65),
(5, '16CSE26', 1036),
(8, '2015120103', 63);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `cnumber` varchar(255) NOT NULL,
  `gnumber` varchar(255) NOT NULL,
  `roomno` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `email`, `password`, `userType`, `name`, `fname`, `mname`, `address`, `department`, `cnumber`, `gnumber`, `roomno`, `blood_group`, `image`) VALUES
(8, '16CSE26', 'farhanca@gmail.com', '16CSE2316CSE26', 'User', 'à¦®à§‹à¦ƒ à¦«à¦°à¦¹à¦¾à¦¦ à¦¹à§‹à¦¸à§‡à¦¨', 'Farhan', 'farha', 'Faridpur', 'IT', '015667788999', '01892999292', '402', 'B+', 'pictures/rainy_day.jpg'),
(5, '20151201034', 'muradmd312@gmail.com', '20151201034', 'Admin', 'moon', 'Nurul Islam ', 'Yasmen Begum', 'Faridpur 324', 'CSE', '019882', '01710229869', '7', 'B+', 'pictures/nature-quotes-1557340276.jpg'),
(17, '2015120103', 'rafik@gmail.com', 'rafik@gmail.com', 'User', 'rafiik', 'rafikul islakm', 'rafika islakm', 'faridpur', 'cse', '01703986069', '01710229868', '123', 'A+', 'pictures/Natural-LOVE.jpg'),
(18, '2015120103', 'rafik@gmail.com', 'rafik@gmail.com', 'User', 'karima', 'rafikul islakm', 'rafika islakm', 'faridpur', 'cse', '01703986069', '01710229868', '12334', 'B+', 'pictures/Natural-LOVE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `update_meal`
--

DROP TABLE IF EXISTS `update_meal`;
CREATE TABLE IF NOT EXISTS `update_meal` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `morning_meal_cost` int(10) NOT NULL,
  `launch_meal_cost` int(10) NOT NULL,
  `dinner_meal_cost` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_meal`
--

INSERT INTO `update_meal` (`id`, `morning_meal_cost`, `launch_meal_cost`, `dinner_meal_cost`) VALUES
(1, 13, 25, 25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
