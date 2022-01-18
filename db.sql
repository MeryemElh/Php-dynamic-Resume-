-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3305
-- Généré le :  ven. 25 sep. 2020 à 10:58
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `resume`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(10) NOT NULL,
  `Legende` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id`, `Legende`) VALUES
(1, ' Je suis Meryem El Halfa, j\'ai 21 ans et je suis actuellement en 1ere année du Cycle Ingénieur en Informatique, je me qualifierais comme une inconditionnelle passionnée par mon domaine sous toute ses différentes facettes. Toujours à la recherche d\'apprendre, d\'améliorer mon niveau dans les technologies que je maîtrise déjà, d’en découvrir et d’en apprendre des nouvelles.');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Lieu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `Name`, `Date`, `Lieu`) VALUES
(1, 'Cycle d’ingénieur d’Etat en génie informatique.', '2019 - 2020', 'Oujda, Maroc'),
(2, 'Classes préparatoires intégrées.', '2017 - 2019', 'Oujda, Maroc'),
(6, 'Baccalauréat science physique.', '2016-2017', 'Casablanca, Maroc');

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `lgname` varchar(255) NOT NULL,
  `lglevel` int(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `languages`
--

INSERT INTO `languages` (`lgname`, `lglevel`, `id`) VALUES
('Arabe', 100, 1),
('Français', 100, 2),
('Anglais', 85, 5),
('Espagnol', 50, 8);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `skillname` varchar(255) NOT NULL,
  `skilllevel` int(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`skillname`, `skilllevel`, `id`) VALUES
('JAVA/JEE', 80, 14),
('React/Angular', 75, 15),
('HTML/CSS/JS', 100, 13);

-- --------------------------------------------------------

--
-- Structure de la table `stages`
--

DROP TABLE IF EXISTS `stages`;
CREATE TABLE IF NOT EXISTS `stages` (
  `Name` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stages`
--

INSERT INTO `stages` (`Name`, `Date`, `Description`, `id`) VALUES
('Stage à la “Telaction” ,Toulouse, France', 'Aout - September, 2020', 'Développement front-end et back-end d’un site web en Hmtl, Css, Js, JQuerry, Sass pour le front, php pour le back et mysql comme base de données.', 1),
('Stage à la “BDSI” ,Casablanca, Maroc', 'Juillet - Aout, 2020', 'Testing du site web et de l’application mobile \"SmartFlous\".', 2),
('Stage à la “BMCI” ,Casablanca, Maroc', 'Juillet - Aout, 2018', '', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
