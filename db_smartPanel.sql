-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 25 jan. 2018 à 20:53
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `smartpanel`
--
DROP DATABASE IF EXISTS `smartpanel`;
CREATE DATABASE IF NOT EXISTS `smartpanel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `smartpanel`;

-- --------------------------------------------------------

--
-- Structure de la table `appartment`
--

DROP TABLE IF EXISTS `appartment`;
CREATE TABLE IF NOT EXISTS `appartment` (
  `Name` varchar(20) NOT NULL,
  `ApptId` int(11) NOT NULL AUTO_INCREMENT,
  `Address` varchar(255) NOT NULL,
  `NumberRooms` tinyint(4) NOT NULL,
  `User_Id` varchar(13) NOT NULL,
  PRIMARY KEY (`ApptId`),
  KEY `fk_UserID` (`User_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21655 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartment`
--

INSERT INTO `appartment` (`Name`, `ApptId`, `Address`, `NumberRooms`, `User_Id`) VALUES
('Apt de michel', 1, '1 rue de Paris', 3, '123456789'),
('Apt de john', 2, '2 rue des Pins', 4, '2'),
('Résidence secondaire', 3, '1 rue du pinous', 4, '2'),
('maison de michel', 21653, '17 rue des pins', 5, '123456789'),
('alusko\'s apt', 21654, '17 rue des pins', 2, '5a5fbef90f483');

-- --------------------------------------------------------

--
-- Structure de la table `numSerie`
--

DROP TABLE IF EXISTS `numSerie`;
CREATE TABLE IF NOT EXISTS `numSerie` (
  `cemac` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `numSerie`
--

INSERT INTO `numSerie` (`cemac`) VALUES
('FB12-A9B7-9764-1471-ECA7'),
('F248-6441-75F3-4B60-B504'),
('682D-2967-73C3-0227-AD7B');

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `RoomID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `ApartmentID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`RoomID`),
  KEY `fk_ApartmentID` (`ApartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`RoomID`, `ApartmentID`, `Name`) VALUES
(1, 2, 'The room'),
(2, 2, 'Another Room'),
(3, 2, 'A third room'),
(4, 2, 'The last room'),
(8, 3, 'La pièce'),
(31, 21654, 'testaptalusko'),
(32, 21654, 'test2'),
(33, 21654, 'test3');

-- --------------------------------------------------------

--
-- Structure de la table `sensor`
--

DROP TABLE IF EXISTS `sensor`;
CREATE TABLE IF NOT EXISTS `sensor` (
  `SensorID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Type` int(11) NOT NULL,
  `Value` varchar(20) NOT NULL,
  `RoomID` tinyint(4) NOT NULL,
  PRIMARY KEY (`SensorID`),
  KEY `fk_RoomID` (`RoomID`),
  KEY `fk_sensor` (`Type`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sensor`
--

INSERT INTO `sensor` (`SensorID`, `Type`, `Value`, `RoomID`) VALUES
(0, 1, '3', 2),
(16, 1, '20', 31),
(17, 1, '20', 31),
(18, 1, '20', 31),
(19, 1, '20', 32),
(20, 1, '20', 32),
(21, 1, '20', 33),
(22, 1, '20', 33),
(23, 1, '20', 33),
(24, 4, '20', 33),
(25, 1, '20', 33),
(26, 1, '20', 33),
(27, 4, '20', 33),
(28, 1, '20', 33);

-- --------------------------------------------------------

--
-- Structure de la table `sensortype`
--

DROP TABLE IF EXISTS `sensortype`;
CREATE TABLE IF NOT EXISTS `sensortype` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `IsActuator` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sensortype`
--

INSERT INTO `sensortype` (`ID`, `Name`, `IsActuator`) VALUES
(1, 'Thermomètre', 0),
(4, 'test', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `User_Id` varchar(13) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`User_Id`, `Username`, `Password`, `FullName`, `IsAdmin`) VALUES
('123456789', 'Jean-mich', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'Jean-Michel', 1),
('2', 'jony', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'John Doe', 0),
('5a5fbef90f483', 'alexis', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'Alexis', 0),
('5a5fbf4087257', 'testy', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'test mc test', 0),
('5a6096e58d039', 'dedzdzedz', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'Test model', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartment`
--
ALTER TABLE `appartment`
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `fk_ApartmentID` FOREIGN KEY (`ApartmentID`) REFERENCES `appartment` (`ApptId`) ON DELETE CASCADE;

--
-- Contraintes pour la table `sensor`
--
ALTER TABLE `sensor`
  ADD CONSTRAINT `fk_RoomID` FOREIGN KEY (`RoomID`) REFERENCES `room` (`RoomID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_sensor` FOREIGN KEY (`Type`) REFERENCES `sensortype` (`ID`) ON DELETE CASCADE;
