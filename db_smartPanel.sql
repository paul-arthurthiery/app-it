SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP DATABASE IF EXISTS `smartpanel`;
CREATE DATABASE IF NOT EXISTS `smartpanel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `smartpanel`;

DROP TABLE IF EXISTS `appartment`;
CREATE TABLE IF NOT EXISTS `appartment` (
  `Name` varchar(20) NOT NULL,
  `ApptId` int(11) NOT NULL AUTO_INCREMENT,
  `Address` varchar(255) NOT NULL,
  `NumberRooms` tinyint(4) NOT NULL,
  `User_Id` int(11) NOT NULL,
  PRIMARY KEY (`ApptId`),
  KEY `fk_UserID` (`User_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `appartment` (`Name`, `ApptId`, `Address`, `NumberRooms`, `User_Id`) VALUES
('Apt de michel', 1, '1 rue de Paris', 3, 123456789),
('Apt de john', 2, '2 rue des Pins', 4, 2);

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `RoomID` tinyint(4) NOT NULL,
  `ApartmentID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`RoomID`),
  KEY `fk_ApartmentID` (`ApartmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `sensor`;
CREATE TABLE IF NOT EXISTS `sensor` (
  `SensorID` tinyint(4) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Value` varchar(20) NOT NULL,
  `RoomID` tinyint(4) NOT NULL,
  `IsActuator` tinyint(1) NOT NULL,
  PRIMARY KEY (`SensorID`),
  KEY `fk_RoomID` (`RoomID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `User_Id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`User_Id`, `Username`, `Password`, `FullName`, `IsAdmin`) VALUES
(2, 'jony', '63a9f0ea7bb98050796b649e85481845', 'John Doe', 0),
(3, 'alexis', '63a9f0ea7bb98050796b649e85481845', 'Alexis', 0),
(123456789, 'Jean-mich', '63a9f0ea7bb98050796b649e85481845', 'Jean-Michel', 1);


ALTER TABLE `appartment`
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`);

ALTER TABLE `sensor`
  ADD CONSTRAINT `fk_RoomID` FOREIGN KEY (`RoomID`) REFERENCES `room` (`RoomID`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
