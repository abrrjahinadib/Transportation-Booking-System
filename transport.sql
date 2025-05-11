SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `admin` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Number` text NOT NULL,
  `Password` varchar NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
INSERT INTO `admin` (`Name`, `Email`, `Number`, `Password`) VALUES
('Adib', 'adib@gmail.com', '01234567891', 'browniepoints'),
('Jim', 'jim@gmail.com', '01234567890', 'browniepoints');
CREATE TABLE `bookedlist` (
  `Name` text NOT NULL,
  `Number` text NOT NULL,
  `Booking_ID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
INSERT INTO `bookedlist` (`Name`, `Number`, `Booking_ID`) VALUES
('Raquib', '01911111111', '01'),
('Safin', '01922222222', '03'),
('Adreed', '01933333333', ' 01'),
('Muaz', '01944444444', ' 01'),
('Faria', '01955555555', ' 01');
CREATE TABLE `bookinglist` (
  `Booking_ID` text NOT NULL,
  `Schedule` text NOT NULL,
  `Route` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
INSERT INTO `bookinglist` (`Booking_ID`, `Schedule`, `Route`, `Price`) VALUES
('01', '1.00AM-3.00PM', 'Dhaka-Chittagong', 1500),
('02', '1.00AM-9.00AM', 'Dhaka-Teknaf', 1500),
('03', '12.00AM-5.00AM', 'Dhaka-Khulna', 700),
('04', '1.00AM-8.00AM', 'Sylhet - Dhaka', 700),
('05', '10.00AM-2.00PM', 'Rajshahi-Khulna', 400),
('06', '1.00AM-9.00AM', 'Rashshahi-Bagerhat', 900);
CREATE TABLE `driver` (
  `Name` text NOT NULL,
  `Number` text NOT NULL,
  `Email` text NOT NULL,
  `Reg_vehicle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
INSERT INTO `driver` (`Name`, `Number`, `Email`, `Reg_vehicle`) VALUES
('Rhythm', '01800000000', 'rhythm@gmail.com', 'A5'),
('Rafid', '01811111111', 'rafid@gmail.com', 'B5'),
('Faiyaz', '01822222222', 'faiyaz@gmail.com', 'C5'),
('Limon', '01833333333', 'limon@gmail.com', 'D5');
CREATE TABLE `summary` (
  `Total_earning` int(11) NOT NULL,
  `No_of_tickets_sold` int(11) NOT NULL,
  `Total_cost` int(11) NOT NULL,
  `Profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
INSERT INTO `summary` (`Total_earning`, `No_of_tickets_sold`, `Total_cost`, `Profit`) VALUES
(5000, 10, 3000, 2000),
(3000, 50, 50, 500);
CREATE TABLE `vehicle` (
  `Registration_Number` text NOT NULL,
  `Admin_Name` text NOT NULL,
  `Admin_Number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
INSERT INTO `vehicle` (`Registration_Number`, `Admin_Name`, `Admin_Number`) VALUES
('1254697', 'Adib', '01234567891'),
('2546978', 'Jim', '01234567890');
COMMIT;