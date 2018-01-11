-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2018 at 04:43 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `smartpanel`
--
CREATE DATABASE IF NOT EXISTS `smartpanel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `smartpanel`;

-- --------------------------------------------------------

--
-- Table structure for table `appartment`
--

DROP TABLE IF EXISTS `appartment`;
CREATE TABLE `appartment` (
  `Name` varchar(20) NOT NULL,
  `ApptId` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `NumberRooms` tinyint(4) NOT NULL,
  `User_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appartment`
--

INSERT INTO `appartment` (`Name`, `ApptId`, `Address`, `NumberRooms`, `User_Id`) VALUES
('Apt de michel', 1, '1 rue de Paris', 3, 123456789),
('Apt de john', 2, '2 rue des Pins', 4, 2),
('Résidence secondaire', 3, '1 rue du pinous', 4, 2),
('maison de michel', 21653, '17 rue des pins', 5, 123456789),
('test1', 21654, 'test2', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `RoomID` tinyint(4) NOT NULL,
  `ApartmentID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomID`, `ApartmentID`, `Name`) VALUES
(1, 2, 'The room'),
(2, 2, 'Another Room'),
(3, 2, 'A third room'),
(4, 2, 'The last room'),
(8, 3, 'La pièce');

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

DROP TABLE IF EXISTS `sensor`;
CREATE TABLE `sensor` (
  `SensorID` tinyint(4) NOT NULL,
  `Type` int(11) NOT NULL,
  `Value` varchar(20) NOT NULL,
  `RoomID` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sensortype`
--

DROP TABLE IF EXISTS `sensortype`;
CREATE TABLE `sensortype` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `IsActuator` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sensortype`
--

INSERT INTO `sensortype` (`ID`, `Name`, `IsActuator`) VALUES
(1, 'Thermomètre', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `User_Id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_Id`, `Username`, `Password`, `FullName`, `IsAdmin`) VALUES
(2, 'jony', '63a9f0ea7bb98050796b649e85481845', 'John Doe', 0),
(3, 'alexis', '63a9f0ea7bb98050796b649e85481845', 'Alexis', 0),
(123456789, 'Jean-mich', '63a9f0ea7bb98050796b649e85481845', 'Jean-Michel', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appartment`
--
ALTER TABLE `appartment`
  ADD PRIMARY KEY (`ApptId`),
  ADD KEY `fk_UserID` (`User_Id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomID`),
  ADD KEY `fk_ApartmentID` (`ApartmentID`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`SensorID`),
  ADD KEY `fk_RoomID` (`RoomID`),
  ADD KEY `fk_sensor` (`Type`);

--
-- Indexes for table `sensortype`
--
ALTER TABLE `sensortype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appartment`
--
ALTER TABLE `appartment`
  MODIFY `ApptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21655;
--
-- AUTO_INCREMENT for table `sensortype`
--
ALTER TABLE `sensortype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appartment`
--
ALTER TABLE `appartment`
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`);

--
-- Constraints for table `sensor`
--
ALTER TABLE `sensor`
  ADD CONSTRAINT `fk_RoomID` FOREIGN KEY (`RoomID`) REFERENCES `room` (`RoomID`),
  ADD CONSTRAINT `fk_sensor` FOREIGN KEY (`Type`) REFERENCES `sensortype` (`ID`);
