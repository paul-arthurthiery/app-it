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
  `User_Id` varchar(13) NOT NULL,
  PRIMARY KEY (`ApptId`),
  KEY `fk_UserID` (`User_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21657 DEFAULT CHARSET=utf8;

INSERT INTO `appartment` (`Name`, `ApptId`, `Address`, `NumberRooms`, `User_Id`) VALUES
('Maison', 21655, '15 rue des Peupliers', 4, '5a6c8ecd291ea'),
('Résidence secondaire', 21656, '30 rue des Princes', 2, '5a6c8ecd291ea');

DROP TABLE IF EXISTS `numserie`;
CREATE TABLE IF NOT EXISTS `numserie` (
  `cemac` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `numserie` (`cemac`) VALUES
('FB12-A9B7-9764-1471-ECA7'),
('F248-6441-75F3-4B60-B504'),
('682D-2967-73C3-0227-AD7B');

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `RoomID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `ApartmentID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`RoomID`),
  KEY `fk_ApartmentID` (`ApartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

INSERT INTO `room` (`RoomID`, `ApartmentID`, `Name`) VALUES
(34, 21655, 'Salon'),
(35, 21656, 'Salle de bain'),
(36, 21655, 'Chambre');

DROP TABLE IF EXISTS `sensor`;
CREATE TABLE IF NOT EXISTS `sensor` (
  `SensorID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Type` int(11) NOT NULL,
  `Value` varchar(20) NOT NULL,
  `RoomID` tinyint(4) NOT NULL,
  PRIMARY KEY (`SensorID`),
  KEY `fk_RoomID` (`RoomID`),
  KEY `fk_sensor` (`Type`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

INSERT INTO `sensor` (`SensorID`, `Type`, `Value`, `RoomID`) VALUES
(29, 1, '15', 34),
(30, 2, '16', 34),
(31, 3, '17', 34),
(32, 1, '20', 35),
(33, 1, '20', 35),
(34, 1, '20', 36),
(35, 1, '20', 34);

DROP TABLE IF EXISTS `sensortype`;
CREATE TABLE IF NOT EXISTS `sensortype` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `IsActuator` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `sensortype` (`ID`, `Name`, `IsActuator`) VALUES
(1, 'Thermomètre', 0),
(2, 'Luminosité', 0),
(3, 'Baromètre', 0);

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `User_Id` varchar(13) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`User_Id`, `Username`, `Password`, `FullName`, `IsAdmin`) VALUES
('5a6c8ade297af', 'admin', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'Administrateur', 1),
('5a6c8ecd291ea', 'amenantaud', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'Alexis Menantaud', 0),
('5a6c8f67a6787', 'jlaurent', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'Jérémy Laurent', 0),
('5a6c92e25d357', 'pthiery', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'Paul-Arthur Thiéry', 0),
('5a6c92f34a055', 'zli', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'Zhaojia Li', 0);


ALTER TABLE `appartment`
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`) ON DELETE CASCADE;

ALTER TABLE `room`
  ADD CONSTRAINT `fk_ApartmentID` FOREIGN KEY (`ApartmentID`) REFERENCES `appartment` (`ApptId`) ON DELETE CASCADE;

ALTER TABLE `sensor`
  ADD CONSTRAINT `fk_RoomID` FOREIGN KEY (`RoomID`) REFERENCES `room` (`RoomID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_sensor` FOREIGN KEY (`Type`) REFERENCES `sensortype` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
