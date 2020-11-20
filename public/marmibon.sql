-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 nov. 2020 à 16:21
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
  `Id_recette_ingredient` bigint(255) NOT NULL,
  `srv` bigint(255) NOT NULL,
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
  `qty1` int(100) NOT NULL,
  `qty2` int(100) NOT NULL,
  `qty3` int(100) NOT NULL,
  `qty4` int(100) NOT NULL,
  `qty5` int(100) NOT NULL,
  `qty6` int(100) NOT NULL,
  `tqty1` int(100) NOT NULL,
  `tqty2` int(100) NOT NULL,
  `tqty3` int(100) NOT NULL,
  `tqty4` int(100) NOT NULL,
  `tqty5` int(100) NOT NULL,
  `tqty6` int(100) NOT NULL,
  PRIMARY KEY (`Id_recette_ingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`Id_recette_ingredient`, `srv`, `ing1_ingredient`, `ing2_ingredient`, `ing3_ingredient`, `ing4_ingredient`, `ing5_ingredient`, `ing6_ingredient`, `ing7_ingredient`, `ing8_ingredient`, `ing9_ingredient`, `ing10_ingredient`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `tqty1`, `tqty2`, `tqty3`, `tqty4`, `tqty5`, `tqty6`) VALUES
(1, 3, 'Pain', 'Steak', 'Ketchup', 'Chedar', '', NULL, NULL, NULL, NULL, NULL, 1, 6, 1, 6, 6, 5, 3, 18, 3, 18, 18, 15),
(2, 4, 'Pain', 'Saucisse', 'Oignons frit', 'Ketchup', 'Moutarde', NULL, NULL, NULL, NULL, NULL, 2, 5, 2, 5, 5, 3, 8, 20, 8, 20, 20, 12),
(3, 2, 'Pomme de terre', 'Fromage', 'Crème fraiche', 'sel', 'poivre', 'Beurre', NULL, NULL, NULL, NULL, 3, 4, 3, 4, 4, 5, 0, 0, 0, 0, 0, 0),
(4, 2, 'Pâtes', 'Concentré de tomates', 'crème fraiche', 'Viande hachés', 'sel', NULL, NULL, NULL, NULL, NULL, 4, 3, 4, 3, 3, 4, 0, 0, 0, 0, 0, 0),
(5, 3, 'Noodles', 'Poulet', 'Sauce teriyaki', 'poivrons', 'sel', NULL, NULL, NULL, NULL, NULL, 5, 2, 5, 2, 2, 8, 15, 6, 15, 6, 6, 24),
(6, 4, 'Pâte à pain', 'Sauce tomates', 'Viande hachés', 'poivre', 'sel', NULL, NULL, NULL, NULL, NULL, 6, 1, 6, 1, 1, 1, 24, 4, 24, 4, 4, 4);

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
  `description_recette` text NOT NULL,
  `Id_Ingredient` bigint(255) NOT NULL,
  PRIMARY KEY (`Id_recette`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`Id_recette`, `Name_recette`, `img_recette`, `time_recette`, `number_recette`, `level_recette`, `cost_recette`, `description_recette`, `Id_Ingredient`) VALUES
(1, 'hamburger', 'public/img/bg-img/r1.jpg', '20 minutes', 2, 'Facile', '10.98 euros', 'Un hamburger est un sandwich composé de pain, de viande hachée cuite, de crudités et de sauce. ... Aujourd\'hui, en anglais (du moins en anglais américain)', 1),
(2, 'Hot-Dog', 'public/img/bg-img/r2.jpg', '15 minutes', 4, 'Facile', '7.92 euros', 'Un hot-dog, hotdog ou hot dog, est un type de sandwich composé d\'un pain allongé (souvent brioché) fourré d\'une saucisse cuite.', 2),
(3, 'Tartiflette', 'public/img/bg-img/r3.jpg', '50 minutes', 6, 'Moyen', '15.20 euros', 'La tartiflette est un plat d\'origine savoyarde qui se déguste généralement en hiver. Ses ingrédients principaux sont les pommes de terre et le reblochon, mais on peut aussi y ajouter des lardons et de la crème.', 3),
(4, 'Lasagne', 'public/img/bg-img/r4.jpg', '40 minutes', 4, 'Moyen', '12.20 euros', 'Les lasagnes sont des pâtes alimentaires en forme de larges plaques. Il s\'agit également de la ... Voyez les conditions d\'utilisation pour plus de détails, ainsi que les crédits graphiques.', 4),
(5, 'Poulet Teriyaki', 'public/img/bg-img/r5.jpg', '45 minutes', 2, 'Difficile', '17.10 euros', 'Le poulet teriyaki consiste à mariner et cuire du poulet dans de la sauce teriyaki, ce qui lui donne sa saveur, mais aussi un extérieur coloré.', 5),
(6, 'Pizza', 'public/img/bg-img/r6.jpg', '30 minutes', 4, 'Facile', '8 euros', 'La pizza est une recette de cuisine traditionnelle de la cuisine italienne, originaire de Naples en Italie (cuisine napolitaine)', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
