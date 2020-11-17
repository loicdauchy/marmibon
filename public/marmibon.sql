-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 nov. 2020 à 15:09
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
-- Structure de la table `directive`
--

DROP TABLE IF EXISTS `directive`;
CREATE TABLE IF NOT EXISTS `directive` (
  `Id_recette_directive` bigint(255) NOT NULL,
  `dir1_directive` text DEFAULT NULL,
  `dir2_directive` text DEFAULT NULL,
  `dir3_directive` text DEFAULT NULL,
  `dir4_directive` text DEFAULT NULL,
  `dir5_directive` text DEFAULT NULL,
  `dir6_directive` text DEFAULT NULL,
  `dir7_directive` text DEFAULT NULL,
  `dir8_directive` text DEFAULT NULL,
  `dir9_directive` text DEFAULT NULL,
  `dir10_directive` text DEFAULT NULL,
  PRIMARY KEY (`Id_recette_directive`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `directive`
--

INSERT INTO `directive` (`Id_recette_directive`, `dir1_directive`, `dir2_directive`, `dir3_directive`, `dir4_directive`, `dir5_directive`, `dir6_directive`, `dir7_directive`, `dir8_directive`, `dir9_directive`, `dir10_directive`) VALUES
(1, '1 - Faite griller les pains sur les deux faces', '2 - Ensuite faite cuir les steaks', '3 - Assembler le tout en rajoutant les sauces', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '1 - Faite griller le pain', '2 - Faite cuir les saucisses', '3 - Assemblez le tout en rajoutant les sauces puis les oignons frit', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '1 - Faite cuir les pommes de terres\r\npuis coupez les', '2 - Disposez les rondelles de pomme de terres dans un plat', '3 - Ajoutez y le fromage et la crème', '4 - Faite cuir pendant 30 minutes à 220 degré', NULL, NULL, NULL, NULL, NULL, NULL),
(4, '1 - Disposez les lamelle de pâtes dans un plat adapté', '2 - incorporer la sauce tomates, la crème et la viande', '3 - Salé et faite cuir la préparation 45 min à 210 degré', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '1 - Faite Cuir les noodles', '2 - Faite cuir le poulet, ajoutez y la sauce', '3 - mélanger le tout et servez', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '1 - préparez votre pâtes', ' 2 - mettre votre sauce', '3 - disposez votre viande', '4 - faite cuir pendant 20 minutes à 220 degré', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id_recette_ingredient` bigint(255) NOT NULL,
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
  `ing11_ingredient` varchar(255) DEFAULT NULL,
  `ing12_ingredient` varchar(255) DEFAULT NULL,
  `ing13_ingredient` varchar(255) DEFAULT NULL,
  `ing14_ingredient` varchar(255) DEFAULT NULL,
  `ing15_ingredient` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_recette_ingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`id_recette_ingredient`, `ing1_ingredient`, `ing2_ingredient`, `ing3_ingredient`, `ing4_ingredient`, `ing5_ingredient`, `ing6_ingredient`, `ing7_ingredient`, `ing8_ingredient`, `ing9_ingredient`, `ing10_ingredient`, `ing11_ingredient`, `ing12_ingredient`, `ing13_ingredient`, `ing14_ingredient`, `ing15_ingredient`) VALUES
(1, 'Pain', 'Steak', 'Ketchup', 'Chedar', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Pain', 'Saucisse', 'Oignons frit', 'Ketchup', 'Moutarde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Pomme de terre', 'Fromage', 'Crème fraiche', 'sel', 'poivre', 'Beurre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Pâtes', 'Concentré de tomates', 'crème fraiche', 'Viande hachés', 'sel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Noodles', 'Poulet', 'Sauce teriyaki', 'poivrons', 'sel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Pâte à pain', 'Sauce tomates', 'Viande hachés', 'poivre', 'sel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `Id_recette` bigint(255) NOT NULL AUTO_INCREMENT,
  `Name_recette` varchar(255) DEFAULT NULL,
  `img_recette` varchar(255) DEFAULT NULL,
  `time_recette` varchar(255) DEFAULT NULL,
  `number_recette` bigint(255) DEFAULT NULL,
  `level_recette` varchar(255) DEFAULT NULL,
  `cost_recette` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_recette`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`Id_recette`, `Name_recette`, `img_recette`, `time_recette`, `number_recette`, `level_recette`, `cost_recette`) VALUES
(1, 'hamburger', 'public/img/bg-img/r1.jpg', '20 minutes', 2, 'Facile', '10.98 euros'),
(2, 'Hot-Dog', 'public/img/bg-img/r2.jpg', '15 minutes', 4, 'Facile', '7.92 euros'),
(3, 'Tartiflette', 'public/img/bg-img/r3.jpg', '50 minutes', 6, 'Moyen', '15.20 euros'),
(4, 'Lasagne', 'public/img/bg-img/r4.jpg', '40 minutes', 4, 'Moyen', '12.20 euros'),
(5, 'Poulet Teriyaki', 'public/img/bg-img/r5.jpg', '45 minutes', 2, 'Difficile', '17.10 euros'),
(6, 'Pizza', 'public/img/bg-img/r6.jpg', '30 minutes', 4, 'Facile', '8 euros');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
