-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 08 avr. 2020 à 11:53
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeuxvideo`
--
CREATE DATABASE IF NOT EXISTS `jeuxvideo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `jeuxvideo`;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `Genre_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Genre_Titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Genre_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`Genre_Id`, `Genre_Titre`, `Genre_Description`) VALUES
(1, 'MMO', 'Description d\'un MMO'),
(2, 'FPS', 'Description d\'un FPS'),
(3, 'RPG', 'Description d\'un RPG'),
(4, 'SPORT', 'Description d\'un jeu de sport'),
(5, 'ACTION', 'Description d\'un jeu d\'action');

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
CREATE TABLE IF NOT EXISTS `jeux` (
  `Jeux_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Jeux_Titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jeux_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jeux_Prix` float NOT NULL,
  `Jeux_DateSortie` date NOT NULL,
  `Jeux_PaysOrigine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jeux_Connexion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jeux_Mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre_Id` int(11) NOT NULL,
  PRIMARY KEY (`Jeux_Id`),
  KEY `genre` (`Genre_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`Jeux_Id`, `Jeux_Titre`, `Jeux_Description`, `Jeux_Prix`, `Jeux_DateSortie`, `Jeux_PaysOrigine`, `Jeux_Connexion`, `Jeux_Mode`, `Genre_Id`) VALUES
(1, 'Final Fantasy XV', 'Final Fantasy XV c\'est pourri', 79, '2016-04-28', 'Japon', 'Oui', 'singles', 3),
(2, 'Far Cry 5', 'Far Cry 5', 59.99, '2018-04-18', 'USA', 'Online', 'Solo', 2),
(3, 'Sea of Thieves', 'Sea of Thieves', 52.99, '2017-11-28', 'USA', 'Online', 'Multi-en-ligne', 1),
(4, 'Monster Hunter World', 'Monster Hunter World', 69.99, '2017-06-21', 'Japon', 'Online', 'Solo', 3),
(5, 'Dragon Ball FighterZ', 'Dragon Ball FighterZ', 49.99, '2017-05-19', 'Japon', 'Online', 'Solo', 4),
(6, 'A Way Out', 'A Way Out', 29.99, '2017-12-08', 'USA', 'Online', 'Multi-en-ligne', 4),
(7, 'Call of Duty WWII', 'Call of Duty WWII', 49.99, '2018-02-02', 'USA', 'Online', 'Solo', 2),
(8, 'Extinction', 'Extinction', 59.99, '2018-05-18', 'USA', 'Online', 'Solo', 4),
(9, 'Warhammer Vermintide 2', 'Warhammer Vermintide 2', 23.99, '2017-03-18', 'USA', 'Online', 'Solo', 2),
(10, 'Star Wars : Battlefront II', 'Star Wars : Battlefront II', 35, '2017-06-17', 'Europe', 'Online', 'Solo', 2),
(11, 'Jeux test;', 'jfhcshflb', 54664, '2020-04-01', 'Wakanda', 'Ou pas', 'si je veux', 5),
(12, 'Jeux test;', 'jfhcshflb', 54664, '2020-04-01', 'Wakanda', 'Ou pas', 'si je veux', 5);

-- --------------------------------------------------------

--
-- Structure de la table `jeuxplateforme`
--

DROP TABLE IF EXISTS `jeuxplateforme`;
CREATE TABLE IF NOT EXISTS `jeuxplateforme` (
  `Jeux_Id` int(11) NOT NULL,
  `Plateforme_Id` int(11) NOT NULL,
  PRIMARY KEY (`Jeux_Id`,`Plateforme_Id`),
  KEY `plateforme` (`Plateforme_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jeuxplateforme`
--

INSERT INTO `jeuxplateforme` (`Jeux_Id`, `Plateforme_Id`) VALUES
(2, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(2, 2),
(5, 2),
(7, 2),
(8, 2),
(5, 3),
(7, 3),
(8, 3),
(8, 4),
(10, 4);

-- --------------------------------------------------------

--
-- Structure de la table `plateforme`
--

DROP TABLE IF EXISTS `plateforme`;
CREATE TABLE IF NOT EXISTS `plateforme` (
  `Plateforme_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Plateforme_Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Plateforme_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Plateforme_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plateforme`
--

INSERT INTO `plateforme` (`Plateforme_Id`, `Plateforme_Nom`, `Plateforme_Description`) VALUES
(1, 'PC', 'je fais un changement en direct'),
(2, 'PS4', 'ghdfghdfgh'),
(3, 'ONE', 'La Xbox one c\'est super !!!!!'),
(4, 'Switch', 'gdsgdfgd');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD CONSTRAINT `genre` FOREIGN KEY (`Genre_Id`) REFERENCES `genre` (`Genre_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `jeuxplateforme`
--
ALTER TABLE `jeuxplateforme`
  ADD CONSTRAINT `jeux` FOREIGN KEY (`Jeux_Id`) REFERENCES `jeux` (`Jeux_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `plateforme` FOREIGN KEY (`Plateforme_Id`) REFERENCES `plateforme` (`Plateforme_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
