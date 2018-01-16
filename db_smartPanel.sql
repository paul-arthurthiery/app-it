-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 16 jan. 2018 à 21:25
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `smartpanel`
--
CREATE DATABASE IF NOT EXISTS `smartpanel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `smartpanel`;

-- --------------------------------------------------------

--
-- Structure de la table `appartment`
--

DROP TABLE IF EXISTS `appartment`;
CREATE TABLE `appartment` (
  `Name` varchar(20) NOT NULL,
  `ApptId` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `NumberRooms` tinyint(4) NOT NULL,
  `User_Id` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartment`
--

INSERT INTO `appartment` (`Name`, `ApptId`, `Address`, `NumberRooms`, `User_Id`) VALUES
('Apt de michel', 1, '1 rue de Paris', 3, '123456789'),
('Apt de john', 2, '2 rue des Pins', 4, '2'),
('Résidence secondaire', 3, '1 rue du pinous', 4, '2'),
('maison de michel', 21653, '17 rue des pins', 5, '123456789'),
('test1', 21654, 'test2', 3, '3'),
('test', 21655, 'rue des test', 3, '5a5e5ef6e4702');

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `RoomID` tinyint(4) NOT NULL,
  `ApartmentID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`RoomID`, `ApartmentID`, `Name`) VALUES
(1, 2, 'The room'),
(2, 2, 'Another Room'),
(3, 2, 'A third room'),
(4, 2, 'The last room'),
(8, 3, 'La pièce');

-- --------------------------------------------------------

--
-- Structure de la table `sensor`
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
-- Structure de la table `sensortype`
--

DROP TABLE IF EXISTS `sensortype`;
CREATE TABLE `sensortype` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `IsActuator` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sensortype`
--

INSERT INTO `sensortype` (`ID`, `Name`, `IsActuator`) VALUES
(1, 'Thermomètre', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `User_Id` varchar(13) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`User_Id`, `Username`, `Password`, `FullName`, `IsAdmin`) VALUES
('123456789', 'Jean-mich', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'Jean-Michel', 1),
('2', 'jony', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'John Doe', 0),
('3', 'alexis', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'Alexis', 0),
('5a5e5ef6e4702', 'test', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'test', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartment`
--
ALTER TABLE `appartment`
  ADD PRIMARY KEY (`ApptId`),
  ADD KEY `fk_UserID` (`User_Id`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomID`),
  ADD KEY `fk_ApartmentID` (`ApartmentID`);

--
-- Index pour la table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`SensorID`),
  ADD KEY `fk_RoomID` (`RoomID`),
  ADD KEY `fk_sensor` (`Type`);

--
-- Index pour la table `sensortype`
--
ALTER TABLE `sensortype`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartment`
--
ALTER TABLE `appartment`
  MODIFY `ApptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21656;
--
-- AUTO_INCREMENT pour la table `sensortype`
--
ALTER TABLE `sensortype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartment`
--
ALTER TABLE `appartment`
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`);

--
-- Contraintes pour la table `sensor`
--
ALTER TABLE `sensor`
  ADD CONSTRAINT `fk_RoomID` FOREIGN KEY (`RoomID`) REFERENCES `room` (`RoomID`),
  ADD CONSTRAINT `fk_sensor` FOREIGN KEY (`Type`) REFERENCES `sensortype` (`ID`);
