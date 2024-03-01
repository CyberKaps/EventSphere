-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 03:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventsphere`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventmaster`
--

CREATE TABLE `eventmaster` (
  `eventname` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `venue` varchar(255) NOT NULL,
  `attendence` bigint(20) NOT NULL,
  `commiteename` varchar(255) NOT NULL,
  `contactperson` varchar(255) NOT NULL,
  `contactemail` varchar(255) NOT NULL,
  `contactphone` bigint(20) NOT NULL,
  `eventdetails` varchar(255) NOT NULL,
  `budget` double NOT NULL,
  `fundingsources` varchar(255) NOT NULL,
  `promotionplan` varchar(255) NOT NULL,
  `targetaudience` varchar(255) NOT NULL,
  `approver` varchar(255) NOT NULL,
  `detailfile` blob NOT NULL,
  `flag` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventmaster`
--

INSERT INTO `eventmaster` (`eventname`, `datetime`, `venue`, `attendence`, `commiteename`, `contactperson`, `contactemail`, `contactphone`, `eventdetails`, `budget`, `fundingsources`, `promotionplan`, `targetaudience`, `approver`, `detailfile`, `flag`) VALUES
('Drama', '2024-03-02 10:30:00', 'Main Ground', 300, 'studentsCouncil', 'Aishwarya Dhangar', 'aish@gmail.com', 87678987656, 'A drama includes a script that provides the details of the plot, characters, setting, and stage directions. The plot of a play consists of an exposition, rising action, climax, falling action, and resolution.', 10000, 'Students and faculty', 'The plot of a play consists of an exposition, rising action, climax, falling action, and resolution. A plot must include the conflict, but the structure does not have the cast of characters.', 'The plot of a play consists of an exposition, rising action, climax, falling action, and resolution. A plot must include the conflict, but the structure does not have the cast of characters.', 'hod', '', 'Pending'),
('Rock Night', '2024-03-15 21:30:00', 'Seminar Hall(Main Building)', 1000, 'ecell', 'Aishwarya Dhangar', 'aish@gmail.com', 1234567890, 'Rock nights often take place at bars, clubs, music venues, or even outdoor festivals.', 10000, 'Students and faculty', 'Rock nights often take place at bars, clubs, music venues, or even outdoor festivals.', 'Rock nights often take place at bars, clubs, music venues, or even outdoor festivals.', 'director', '', 'Pending'),
('Technorion', '2024-02-20 07:57:00', 'Seminar Hall(Management Building)', 1000, 'sportsCommittee', 'Aishwarya Dhangar', 'aish@gmail.com', 1234567890, 'Technorion Details TechnorionT Details echnorion Details', 10000, 'Students and faculty', 'Technorion Details TechnorionT Details echnorion Details', 'Rock nights often take place at bars, clubs, music venues, or even outdoor festivals.', 'dean', '', 'Pending');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
