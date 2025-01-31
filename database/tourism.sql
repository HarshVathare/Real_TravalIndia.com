-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3380
-- Generation Time: Jan 31, 2025 at 05:25 AM
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
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(20) NOT NULL,
  `register_Id` int(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `Package_Name` varchar(50) NOT NULL,
  `no_of_person` varchar(30) NOT NULL,
  `Phon_No` varchar(20) NOT NULL,
  `Traval_Resourse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `register_Id`, `first_name`, `last_name`, `email`, `start`, `end`, `Package_Name`, `no_of_person`, `Phon_No`, `Traval_Resourse`) VALUES
(1, 3, 'os', 'pattekari', 'os@gmail.com', '2024-02-06', '2024-02-25', 'Pre-Primium_Mumbai.pkg : 16,950 Rs', '5', '6756784586', 'Bus'),
(2, 4, 'Sanket', 'Kumbhar', 'sanket@gmail.com', '2024-03-05', '2024-03-20', 'Pro-Primium_Delhi.pkg : 26,500 Rs', '6', '0674567894', 'Bus');

-- --------------------------------------------------------

--
-- Table structure for table `contact_me`
--

CREATE TABLE `contact_me` (
  `Id` int(3) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email_id` varchar(30) NOT NULL,
  `Massages` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_me`
--

INSERT INTO `contact_me` (`Id`, `Name`, `Email_id`, `Massages`) VALUES
(1, 'Rahul Patil', 'rahul@gmail.com', 'This the best website for travel in India.'),
(2, 'rushi nikam', 'rushi@gmail.com', 'welcome our tourism website..!'),
(3, 'Sachin Patil', 'sachin@gmail.com', 'this the best website..!'),
(4, 'swapnil shedsale', 'shedsale@gmail.com', 'this UI IX is very nise & attractive..!'),
(5, 'Rahul Patil', 'rahul@gmail.com', 'this tourism website is so attractive..!'),
(6, 'Rahul varute', 'varute@gmail.com', 'this website is very userfriendly and very attractive..!'),
(7, 'rajvardhan', 'rajavathare@gmail.com', 'hi harsha'),
(8, 'swity', 'swity@gmail.com', 'hiiiiii'),
(9, 'Rahul Patil', 'vatharenandkumar@gmail.com', 'fyjfjrftx');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(3) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email_Id` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Re_Password` varchar(10) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `First_Name`, `Last_Name`, `Email_Id`, `Password`, `Re_Password`, `user_type`) VALUES
(1, 'harsh', 'vathare', 'harsh@gmail.com', '9595', '9595', 'User'),
(2, 'Traval', 'India', 'admin@gmail.com', 'admin', 'admin', 'Admin'),
(3, 'Soham', 'Mohite', 'soham@gmail.com', '2323', '2323', 'User'),
(4, 'Sanket', 'Kumbhar', 'sanket@gmail.com', '1414', '1414', 'User'),
(5, 'Nagesh', 'Alase', 'nagesh@gmail.com', '8585', '8585', 'User'),
(6, 'Rajesh', 'Patil', 'rajesh@gmail.com', '9090', '9090', 'User'),
(7, 'Rahul', 'Patil', 'rahul1@gmail.com', '774105', '774105', 'User'),
(8, 'rajvardhan', 'Raju', 'dhairyshil@gmail.com', '3421', '3421', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `register_Id` (`register_Id`);

--
-- Indexes for table `contact_me`
--
ALTER TABLE `contact_me`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_me`
--
ALTER TABLE `contact_me`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`register_Id`) REFERENCES `register` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
