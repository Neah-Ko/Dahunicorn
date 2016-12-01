-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 01 Décembre 2016 à 21:41
-- Version du serveur: 5.5.53-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `c9`
--

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE IF NOT EXISTS `lieu` (
  `idlieu` int(11) NOT NULL AUTO_INCREMENT,
  `lieu_nom` varchar(50) DEFAULT NULL,
  `lieu_description` varchar(200) DEFAULT NULL,
  `lieu_periode` varchar(50) DEFAULT NULL,
  `lieu_rue` varchar(50) DEFAULT NULL,
  `lieu_complement` varchar(50) DEFAULT NULL,
  `lieu_cp` varchar(10) DEFAULT NULL,
  `lieu_ville` varchar(50) DEFAULT NULL,
  `lieu_latitude` decimal(8,0) DEFAULT NULL,
  `lieu_longitude` decimal(8,0) DEFAULT NULL,
  PRIMARY KEY (`idlieu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `idtype` int(11) NOT NULL AUTO_INCREMENT,
  `type_libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idtype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `typelieu`
--

CREATE TABLE IF NOT EXISTS `typelieu` (
  `idtype` int(4) NOT NULL DEFAULT '0',
  `idlieu` int(4) NOT NULL DEFAULT '0',
  `typelieu_quantite` int(4) DEFAULT NULL,
  `typelieu_quantite_estimee` int(4) DEFAULT NULL,
  PRIMARY KEY (`idtype`,`idlieu`),
  KEY `idlieu` (`idlieu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS POUR LA TABLE `typelieu`:
--   `idlieu`
--       `lieu` -> `idlieu`
--   `idtype`
--       `type` -> `idtype`
--

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `typelieu`
--
ALTER TABLE `typelieu`
  ADD CONSTRAINT `typelieu_ibfk_2` FOREIGN KEY (`idlieu`) REFERENCES `lieu` (`idlieu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `typelieu_ibfk_1` FOREIGN KEY (`idtype`) REFERENCES `type` (`idtype`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
