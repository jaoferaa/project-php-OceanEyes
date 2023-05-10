-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 10 Mai 2023 à 20:52
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `oceaneyes`
--
CREATE DATABASE IF NOT EXISTS `oceaneyes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `oceaneyes`;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PSEUDO` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `PASS` text CHARACTER SET utf8mb4 NOT NULL,
  `NAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `LASTNAME` varchar(80) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`ID`, `PSEUDO`, `PASS`, `NAME`, `LASTNAME`) VALUES
(1, 'jonkeni', 'ken', 'john', 'keni'),
(3, 'jokeni', '1234', 'keni', 'jo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
