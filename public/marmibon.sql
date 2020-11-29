-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  Dim 29 nov. 2020 à 15:23
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
-- Structure de la table `directive`
--

DROP TABLE IF EXISTS `directive`;
CREATE TABLE IF NOT EXISTS `directive` (
  `Id_recette_directive` bigint(255) NOT NULL,
  `dir1_directive` text,
  `dir2_directive` text,
  `dir3_directive` text,
  `dir4_directive` text,
  `dir5_directive` text,
  `dir6_directive` text,
  `dir7_directive` text,
  `dir8_directive` text,
  `dir9_directive` text,
  `dir10_directive` text,
  PRIMARY KEY (`Id_recette_directive`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `directive`
--

INSERT INTO `directive` (`Id_recette_directive`, `dir1_directive`, `dir2_directive`, `dir3_directive`, `dir4_directive`, `dir5_directive`, `dir6_directive`, `dir7_directive`, `dir8_directive`, `dir9_directive`, `dir10_directive`) VALUES
(1, '1 - Éplucher et couper la poire en morceaux.', '2 - Couper les cornichons en rondelles.', '3 - Placer une tortilla dans une poêle, déposer les morceaux de fromage, les quartiers de poires et les rondelles de cornichons.', '4 - Déposer une seconde tortilla sur le tout. Retourner la tortilla à l\'aide d\'une spatule en bois.', '5 - A consommer bien chaud.', '', '', '', '', ''),
(2, '1 - Préchauffez le four à 200°C (thermostat 6-7).', '2 - Détaillez les pommes de terre en tranches très fines à l\'aide d\'une mandoline. Faites fondre le beurre. Badigeonnez au fur et à mesure les tranches de pommes de terre en en recouvrant le fond de moules à muffins en faisant bien attention à ce que les tranches se superposent les unes les autres. Salez, poivrez.', '3 - Placez au four 15 minutes.', '4 - Découpez des ronds de charcuterie et de raclette de la taille de la cups puis alternez-les dans la cup : fromage - charcuterie - cornichon coupé en 2 -fromage - charcuterie et fromage.', '5 - Replacez au four 5 minutes le temps que la raclette fonde.', '', '', '', '', ''),
(3, '1 - Couper la chair du potiron en gros dés', '2 - Couper l\'oignon en lamelles et le faire revenir dans une cocotte avec un peu d\'huile.', '3 - Ajouter les dés de courge dans la cocotte et recouvrir d\'eau (juste au niveau de la courge, pas plus). Laisser bouillir environ 45 min à 1 h.', '4 - Ajouter la crème liquide, saler, poivrer et ajouter de la muscade selon votre goût. Mixer.', '5 - Au moment de servir, parsemer de persil ciselé.', '', '', '', '', ''),
(4, '1 - Hacher l\'oignon et l\'ail. Les faire revenir dans le beurre jusqu\'à ce qu\'ils soient tendres.', '2 - Ajouter les tomates coupées en dés, la viande hachée, la farine, du sel, du poivre et les herbes de Provence.', '3 - Quand tout est cuit, couper le feu et ajouter le jaune d\'oeuf et un peu de parmesan. Bien mélanger.', '4 - Préchauffer le four à 200°C (thermostat 6-7). Etaler au fond du plat à gratin. Préparer la purée. L\'étaler au dessus de la viande. Saupoudrer de fromage râpé et faire gratiner.', '', '', '', '', '', ''),
(5, '1 - Cuire les pâtes dans un grand volume d\'eau bouillante salée.', '2 - Emincer les oignons et les faire revenir à la poêle. Dès qu\'ils ont bien dorés, y ajouter les lardons.', '3 - Préparer dans un saladier la crème fraîche, les oeufs, le sel, le poivre et mélanger.', '4 - Retirer les lardons du feu dès qu\'ils sont dorés et les ajouter à la crème.', '5 - Une fois les pâtes cuite al dente, les égoutter et y incorporer la crème. Remettre sur le feu si le plat a refroidi.', '6 - Servir et bon appétit ! Vous pouvez également agrémenter votre plat avec des champignons.', '', '', '', ''),
(6, '1 - Préchauffer le four à 210°C (thermostat 7) pendant 10 min.', '2 - Pendant ce temps, mettre le rôti lardé par votre boucher dans un plat à four à bord haut. Verser l\'huile, mettre le beurre en noisette sur la viande et mettre l\'eau et l\'ail sur le côté de la viande. Saler et poivrer.', '3 - Mettre au four pendant 45 min environ. Au bout de 25 à 30 min, et régulièrement, sortir le rôti du four pour le mouiller avec le jus de cuisson et ajouter un peu d\'eau le cas échéant. Au bout de 45 min votre rôti doit être bien cuit à cœur, doré sur le dessus et très tendre.', '', '', '', '', '', '', ''),
(7, '1 - Préchaffer le four à feu doux (150°C- thermostat 5).', '2 - Beurrer et sucrer un moule rectangle.', '3 - Faire fondre la pralinoise au bain-marie.', '4 - Battre ensemble le beurre et le sucre jusqu\'à ce que le mélange blanchisse.', '5 - Ajouter les oeufs un par un et la farine en 3 fois (après chaque oeuf).', '6 - Ajouter la pralinoise fondue, bien mélanger l\'ensemble.', '7 - Verser la préparation dans un moule, lisser à la spatule.', '8 - Laisser cuire 20 min environ : le gâteau doit être très moelleux. Ne pas hésiter à le sortir même si le couteau ne ressort pas sec.', '9 - Laisser refroidir avant de démouler et de découper en carrés réguliers.', NULL),
(8, '1 - Faites revenir les oignons à feux doux.', '2 - Ajouter les steaks.', '3 - Une fois saisi, poser une tranche de cheddar sur le steak et laisser fondre.', '4 - Une fois cuit, déposer le steak et le fromage sur une des tranches du pain que vous aurez auparavant tartinée d\'un mélange de ketchup et de moutarde.', '5 - Ajouter la salade et de petites rondelles de tomates.', '6 - Vous pouvez maintenant recouvrir la préparation de l\'autre tranche (avec ketchup et moutarde)', '', '', '', ''),
(9, '1 - Beurrez les 8 tranches de pain de mie sur une seule face. Posez 1 tranche de fromage sur chaque tranche de pain de mie. Posez 1 tranche de jambon plié en deux sur 4 tranches de pain de mie. Recouvrez avec les autres tartines (face non beurrée au dessus).', '2 - Dans un bol mélanger le fromage râpé avec le lait, le sel, le poivre et la muscade.', '3 - Répartissez le mélange sur les croque-monsieur.', '4 - Placez sur une plaque au four sous le grill pendant 10 mn.', '', '', '', '', '', ''),
(10, '1 - Bien laver les panais (les brosser vigoureusement sous l\'eau) car on ne pas va pas les éplucher (j\'ai trouvé que ça donnait une chouette consistance sous la dent). Les détailler en tranches fines (+/- 2mm), y compris le bout effilé de la racine.', '2 - Mettre une noix de beurre et une cuillère à soupe d\'eau (voire deux si les panais vous paraissent secs) dans une poêle, faire chauffer à feu doux. Y mettre les tranches de panais et quelques feuilles de persil, saler et poivrer légèrement (il ne faut pas cacher le goût légèrement sucré que vont prendre les panais)', '3 - Quand les panais ont pris une jolie couleur noisette, ajouter une cuillère à soupe d\'huile de noix, ajouter 1 cuillère à soupe de soja cuisine (ou + si affinités, mais il faut juste enrober \"généreusement\" les tranches de panais, sans les noyer). Mélanger pendant 20 secondes, puis ajouter 3 ou 4 gouttes (pas plus !!!) de tamari (sauce soja). Remuer encore 20 secondes.', '4 - ARRETEZ TOUT et A TABLE. Ca prend un petit goût de patate douce caramélisée, mmmmmmmmhhhhhhh...', '', '', '', '', '', '');

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

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `Id_recette` bigint(255) NOT NULL AUTO_INCREMENT,
  `Name_recette` varchar(255) DEFAULT NULL,
  `img_recette` varchar(255) NOT NULL,
  `time_recette` varchar(255) DEFAULT NULL,
  `number_recette` bigint(255) DEFAULT NULL,
  `level_recette` varchar(255) DEFAULT NULL,
  `cost_recette` varchar(255) DEFAULT NULL,
  `description_recette` text NOT NULL,
  `Id_Ingredient` bigint(255) NOT NULL,
  `likes` int(255) NOT NULL,
  `dislikes` int(255) NOT NULL,
  PRIMARY KEY (`Id_recette`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`Id_recette`, `Name_recette`, `img_recette`, `time_recette`, `number_recette`, `level_recette`, `cost_recette`, `description_recette`, `Id_Ingredient`, `likes`, `dislikes`) VALUES
(1, 'Quesadillas poire raclette', 'public/img/bg-img/r1.jpg', '25 min', 2, 'Facile', '8 euros', 'Découvrez cette recette qui mélange sucré salé.. ', 1, 1, 1),
(2, 'Cups raclette', 'public/img/bg-img/r2.jpg', '55 min', 6, 'Moyen', '10 euros', 'Cette recette est parfaite pour vos soirée d\'hiver..', 2, 1, 1),
(3, 'Velouté de potiron', 'public/img/bg-img/r3.jpg', '1h15', 4, 'Facile', '5 euros', 'Envie de manger léger ? cette recette facile à préparer et faite pour vous..', 3, 1, 1),
(4, 'Hachis Parmentier', 'public/img/bg-img/r4.jpg', '45 min', 4, 'Facile', '7 euros', 'Repas parfait pour un déjeuner en famille..', 4, 1, 1),
(5, 'Pâtes à la \"carbonara\" à la française', 'public/img/bg-img/r5.jpg', '20 min', 4, 'Facile', '5 euros', 'Pas envie de vous prendre la tête ? cette recette est simple et rapide à préparer..', 5, 1, 1),
(6, 'Rôti de porc', 'public/img/bg-img/r6.jpg', '50 min', 4, 'Facile', '9 euros', 'Rôti de porc facile à préparer..', 6, 1, 1),
(7, 'Brownie fondant praliné', 'public/img/bg-img/r7.jpg', '50 minutes', 6, 'Facile', '5 euros', 'Selon nos informations, cette recette est compatible avec le régime suivant : végétarien', 7, 0, 0),
(8, 'Hamburger maison', 'public/img/bg-img/r8.jpg', '10 min', 4, 'Facile', '4 euros', 'Burger maison rapide et facile..', 8, 1, 1),
(9, 'Croque-monsieur', 'public/img/bg-img/r9.jpg', '15 min', 4, 'Facile', '5 euros', 'recette de croque-monsieur facile à réaliser', 9, 2, 1),
(10, 'Poêlée de panais', 'public/img/bg-img/r10.jpg', '15 min', 2, 'Moyen', '10 euros', 'Poêlée de panais qui va illuminer votre déjeuner..', 10, 3, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
