-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2025 at 10:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Number` text NOT NULL,
  `Password` varchar NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Number`, `Password`) VALUES
('Adib', 'adib@gmail.com', '01234567891', 'browniepoints'),
('Jim', 'jim@gmail.com', '01234567890', 'browniepoints');

-- --------------------------------------------------------

--
-- Table structure for table `bookedlist`
--

CREATE TABLE `bookedlist` (
  `Name` text NOT NULL,
  `Number` text NOT NULL,
  `Booking_ID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bookedlist`
--

INSERT INTO `bookedlist` (`Name`, `Number`, `Booking_ID`) VALUES
('Raquib', '01911111111', '01'),
('Safin', '01922222222', '03'),
('Adreed', '01933333333', ' 01'),
('Muaz', '01944444444', ' 01'),
('Faria', '01955555555', ' 01');

-- --------------------------------------------------------

--
-- Table structure for table `bookinglist`
--

CREATE TABLE `bookinglist` (
  `Booking_ID` text NOT NULL,
  `Schedule` text NOT NULL,
  `Route` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bookinglist`
--

INSERT INTO `bookinglist` (`Booking_ID`, `Schedule`, `Route`, `Price`) VALUES
('01', '1.00AM-3.00PM', 'Dhaka-Chittagong', 1500),
('02', '1.00AM-9.00AM', 'Dhaka-Teknaf', 1500),
('03', '12.00AM-5.00AM', 'Dhaka-Khulna', 700),
('04', '1.00AM-8.00AM', 'Sylhet - Dhaka', 700),
('05', '10.00AM-2.00PM', 'Rajshahi-Khulna', 400),
('06', '1.00AM-9.00AM', 'Rashshahi-Bagerhat', 900);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Name` text NOT NULL,
  `Number` text NOT NULL,
  `Email` text NOT NULL,
  `Reg_vehicle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Name`, `Number`, `Email`, `Reg_vehicle`) VALUES
('Rhythm', '01800000000', 'rhythm@gmail.com', 'A5'),
('Rafid', '01811111111', 'rafid@gmail.com', 'B5'),
('Faiyaz', '01822222222', 'faiyaz@gmail.com', 'C5'),
('Limon', '01833333333', 'limon@gmail.com', 'D5');

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `Total_earning` int(11) NOT NULL,
  `No_of_tickets_sold` int(11) NOT NULL,
  `Total_cost` int(11) NOT NULL,
  `Profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`Total_earning`, `No_of_tickets_sold`, `Total_cost`, `Profit`) VALUES
(5000, 10, 3000, 2000),
(3000, 50, 50, 500);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `Registration_Number` text NOT NULL,
  `Admin_Name` text NOT NULL,
  `Admin_Number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`Registration_Number`, `Admin_Name`, `Admin_Number`) VALUES
('1254697', 'Adib', '01234567891'),
('2546978', 'Jim', '01234567890');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
