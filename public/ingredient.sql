-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  Dim 29 nov. 2020 à 15:15
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
-- Base de données :  `marmibon`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `Id_recette_ingredient` bigint(255) NOT NULL,
  `ing1_ingredient` varchar(255) DEFAULT NULL,
  `ing2_ingredient` varchar(255) DEFAULT NULL,
  `ing3_ingredient` varchar(255) DEFAULT NULL,
  `ing4_ingredient` varchar(255) DEFAULT NULL,
  `ing5_ingredient` varchar(255) DEFAULT NULL,
  `ing6_ingredient` varchar(255) DEFAULT NULL,
  `ing7_ingredient` varchar(255) DEFAULT NULL,
  `ing8_ingredient` varchar(255) DEFAULT NULL,
  `ing9_ingredient` varchar(255) DEFAULT NULL,
  `ing10_ingredient` varchar(255) DEFAULT NULL,
  `qty1` int(100) DEFAULT NULL,
  `qty2` int(100) DEFAULT NULL,
  `qty3` int(100) DEFAULT NULL,
  `qty4` int(100) DEFAULT NULL,
  `qty5` int(100) DEFAULT NULL,
  `qty6` int(100) DEFAULT NULL,
  PRIMARY KEY (`Id_recette_ingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`Id_recette_ingredient`, `ing1_ingredient`, `ing2_ingredient`, `ing3_ingredient`, `ing4_ingredient`, `ing5_ingredient`, `ing6_ingredient`, `ing7_ingredient`, `ing8_ingredient`, `ing9_ingredient`, `ing10_ingredient`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`) VALUES
(1, 'g de fromage à raclette', 'Poire', 'Cornichon', 'tortillas de 15cm de diamètre', '', '', NULL, NULL, NULL, NULL, 100, 1, 1, 2, NULL, NULL),
(2, 'pommes de terre à chair ferme', 'tranches de fromage à raclette', 'tranches de jambon blanc', 'tranches de jambon fumé', 'cornichons', 'g de beurre', NULL, NULL, NULL, NULL, 3, 18, 3, 3, 6, 30),
(3, 'quartier de potiron', 'oignon', 'brique de crème fraîche liquide', 'pincé de poivre', 'pincé de sel', 'pincé de muscade en poudre', NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1),
(4, 'g de viande hachée', 'g de purée', 'oignons', 'gousses d\'ail', 'tomates fraîches', 'g de parmesan', NULL, NULL, NULL, NULL, 400, 300, 2, 2, 2, 30),
(5, 'g de pâtes', 'cl de crème fraîche', 'jaunes d\'oeuf', 'pincée de sel', 'g de lardons', 'oignons', NULL, NULL, NULL, NULL, 500, 50, 3, 1, 250, 1),
(6, 'g de rôti de porc lardé', 'g de beurre', 'cl d\'eau', 'pincée de sel', 'pincée de poivre', '', NULL, NULL, NULL, NULL, 600, 25, 5, 1, 1, NULL),
(7, 'g de pralinoise', 'g de beurre ramolli', 'g de sucre en poudre\r\n', 'g de farine', 'oeufs', NULL, NULL, NULL, NULL, NULL, 200, 150, 150, 50, 3, NULL),
(8, 'Pain pour hamburger', 'Viande hachée', 'tranches de cheddar', 'rondelle de tomate', 'feuilles de salades', 'dose de ketchup/moutarde', NULL, NULL, NULL, NULL, 4, 4, 4, 4, 4, 4),
(9, 'tranches de pain de mie', 'g de beurre mou', 'tranches de jambon', 'tranches de fromage à croque', 'g de gruyère râpé', 'cuillères à soupe de lait', NULL, NULL, NULL, NULL, 8, 50, 4, 8, 100, 4),
(10, 'panais', 'noix de beurre', 'feuilles de persil', 'gouttes de tamari', 'cuillères à soupe de soja', 'pincée de sel/poivre', NULL, NULL, NULL, NULL, 6, 1, 1, 4, 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
