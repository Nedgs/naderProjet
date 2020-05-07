-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 mai 2020 à 13:25
-- Version du serveur :  10.5.0-MariaDB
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
-- Base de données :  `articles`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_time_publication` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date_time_publication`) VALUES
(115, 'chocho', 'arezr', '2020-05-06 15:12:07'),
(123, 'chocho', 'arezr', '2020-05-06 15:14:31'),
(124, 'raez', 'rr', '2020-05-06 15:15:12'),
(125, 'raezraezr', 'rr', '2020-05-06 16:24:56'),
(126, 'margaux', 'c un beau chaton the best\r\n', '2020-05-06 15:50:45'),
(128, 'nader', 'ytutyu', '2020-05-06 16:28:53'),
(129, 'nader', 'ytutyu', '2020-05-06 16:29:32'),
(130, 'nader', 'ytutyu', '2020-05-06 16:29:36'),
(131, 'nader', 'ytutyu', '2020-05-06 16:29:46'),
(132, 'nader', 'ytutyu', '2020-05-06 16:29:57'),
(133, 'haha', 'hah', '2020-05-06 16:32:02'),
(134, 'eazr', 'raezr', '2020-05-07 14:48:25'),
(135, 'eazr', 'raezr', '2020-05-07 14:58:00'),
(136, 'eazr', 'raezr', '2020-05-07 14:59:04'),
(137, '3azaaa', 'azddza', '2020-05-07 14:59:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
