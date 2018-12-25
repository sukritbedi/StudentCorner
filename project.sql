-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 06:54 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codepark`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `title` varchar(100) DEFAULT NULL,
  `introduction` varchar(250) DEFAULT NULL,
  `requirements` varchar(250) DEFAULT NULL,
  `filename` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`title`, `introduction`, `requirements`, `filename`) VALUES
('Line follower bot', 'In this project we have created a line follower bot.It is an automated guided vehicle, which follows a visual line embedded on the floor or ceiling. Usually, the visual line is the path in which the line follower robot goes and it will be a black lin', 'â€¢	Arduino UNO (or Arduino Nano) â€¢	L293D Motor Driver IC â€¢	Geared Motors x 2 â€¢	Robot Chassis â€¢	IR Sensor Module x 2 â€¢	Black Tape (Electrical Insulation Tape) â€¢	Connecting Wires â€¢	Power supply', '5c21643488b963.24163112.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
