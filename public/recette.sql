-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 nov. 2020 à 08:58
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `marmibon`
--

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `Id_recette` bigint(10) NOT NULL AUTO_INCREMENT,
  `description_recette` text NOT NULL,
  `ing_un` varchar(30) NOT NULL,
  `ing_deux` varchar(30) NOT NULL,
  `ing_trois` varchar(30) NOT NULL,
  `ing_quatre` varchar(30) NOT NULL,
  `ing_cinq` varchar(30) NOT NULL,
  `ing_six` varchar(30) NOT NULL,
  `ing_sept` varchar(30) NOT NULL,
  `ing_huit` varchar(30) NOT NULL,
  `ing_neuf` varchar(30) NOT NULL,
  `ing_dix` varchar(30) NOT NULL,
  `Name_recette` varchar(250) NOT NULL,
  `img_recette` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_recette`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`Id_recette`, `description_recette`, `ing_un`, `ing_deux`, `ing_trois`, `ing_quatre`, `ing_cinq`, `ing_six`, `ing_sept`, `ing_huit`, `ing_neuf`, `ing_dix`, `Name_recette`, `img_recette`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', 'Tacos mexicains', 'public/img/bg-img/r1.jpg'),
(2, '', '', '', '', '', '', '', '', '', '', '', 'Hamburger', 'public/img/bg-img/r2.jpg'),
(3, '', '', '', '', '', '', '', '', '', '', '', 'Recette 3', 'public/img/bg-img/r3.jpg'),
(4, '', '', '', '', '', '', '', '', '', '', '', 'Recette 4', 'public/img/bg-img/r4.jpg'),
(5, '', '', '', '', '', '', '', '', '', '', '', 'Recette 5', 'public/img/bg-img/r5.jpg'),
(6, '', '', '', '', '', '', '', '', '', '', '', 'Recette 6', 'public/img/bg-img/r6.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
