-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 08:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galtech_membership_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationdetails`
--

CREATE TABLE `registrationdetails` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `ConfirmPassword` varchar(50) DEFAULT NULL,
  `File Uploads` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrationdetails`
--

INSERT INTO `registrationdetails` (`ID`, `Name`, `Email`, `Password`, `ConfirmPassword`, `File Uploads`) VALUES
(1, 'Jessy', 'j@gmail.com', 'd9f97225642ff75aea5c5dc370975abc', 'd9f97225642ff75aea5c5dc370975abc', 'cat_pic.jpg'),
(2, 'Rosmol', 'roseleotony@gmail.com', 'f80edd739d1751ebf80ef9cdc4c268ef', 'f80edd739d1751ebf80ef9cdc4c268ef', 'cat_love.jpg'),
(4, 'Leo', 'leo@gmail.com', '4cd9cb6932a52a1067b2b177069e59da', '4cd9cb6932a52a1067b2b177069e59da', 'elephants.jpg'),
(22, 'Jerome', 'jan@gmail.com', '69e6307465482ab8d3b5f12a6c6d684f', '69e6307465482ab8d3b5f12a6c6d684f', 'dog.jpg'),
(23, 'Janet', 'ja@gmail.com', '290c331c56670e3526ec5ff4789d483e', '290c331c56670e3526ec5ff4789d483e', 'dog_love.jpg'),
(25, 'Ron', 'ron@gmail.com', 'e44c14e1ce679a5b22d8c4120ff8061f', 'e44c14e1ce679a5b22d8c4120ff8061f', 'dog_love2.jpg'),
(26, 'Agness', 'a@gmail.com', '55c721eb431ec166c61eb8d9df5926b5', '55c721eb431ec166c61eb8d9df5926b5', 'background_dog_love.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrationdetails`
--
ALTER TABLE `registrationdetails`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrationdetails`
--
ALTER TABLE `registrationdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
