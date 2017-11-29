-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 29, 2017 at 03:57 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `smartPanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appartment`
--

CREATE TABLE `Appartment` (
  `ApptId` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `NumberRooms` tinyint(4) NOT NULL,
  `User_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE `Room` (
  `RoomID` tinyint(4) NOT NULL,
  `ApartmentID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Sensor`
--

CREATE TABLE `Sensor` (
  `SensorID` tinyint(4) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Value` varchar(20) NOT NULL,
  `RoomID` tinyint(4) NOT NULL,
  `IsActuator` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `User_Id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`User_Id`, `Username`, `Password`, `FullName`, `IsAdmin`) VALUES
(123456789, 'Jean-mich', 'root', 'Jean-Michel', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appartment`
--
ALTER TABLE `Appartment`
  ADD PRIMARY KEY (`ApptId`),
  ADD KEY `fk_UserID` (`User_Id`);

--
-- Indexes for table `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`RoomID`),
  ADD KEY `fk_ApartmentID` (`ApartmentID`);

--
-- Indexes for table `Sensor`
--
ALTER TABLE `Sensor`
  ADD PRIMARY KEY (`SensorID`),
  ADD KEY `fk_RoomID` (`RoomID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`User_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appartment`
--
ALTER TABLE `Appartment`
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`User_Id`) REFERENCES `User` (`User_Id`);

--
-- Constraints for table `Room`
--
ALTER TABLE `Room`
  ADD CONSTRAINT `fk_ApartmentID` FOREIGN KEY (`ApartmentID`) REFERENCES `Appartment` (`ApptId`);

--
-- Constraints for table `Sensor`
--
ALTER TABLE `Sensor`
  ADD CONSTRAINT `fk_RoomID` FOREIGN KEY (`RoomID`) REFERENCES `Room` (`RoomID`);
