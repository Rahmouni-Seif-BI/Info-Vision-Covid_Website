-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2021 at 03:12 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin` varchar(50) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`admin`),
  UNIQUE KEY `admin` (`admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `mdp`) VALUES
('seif', '007'),
('mohamed', '102030');

-- --------------------------------------------------------

--
-- Table structure for table `inscritvous`
--

DROP TABLE IF EXISTS `inscritvous`;
CREATE TABLE IF NOT EXISTS `inscritvous` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `cin` varchar(8) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `etablissement` varchar(100) NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  `test` varchar(20) NOT NULL,
  `resultat` varchar(20) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inscritvous`
--

INSERT INTO `inscritvous` (`nom`, `prenom`, `cin`, `ville`, `etablissement`, `motdepasse`, `test`, `resultat`) VALUES
('Mejri', 'amin', '00700711', 'Mahdia', 'Universite de Gabes', 'amin', 'non', ''),
('Mouhamed', 'ali', '00700800', 'Ben Arous', 'Universite de Sousse', '9999', 'oui', 'normal'),
('alimani', 'ahmed', '00712345', 'Le Kef', 'Universite de Sfax', 'azerty', '', ''),
('windy', 'game', '01587652', 'Ariana', 'Universite de Tunis', '147258369', '', ''),
('rahmouni', 'seif', '12345678', 'Ariana', 'Universite de Tunis', 'rahmouni007', 'oui', 'grave'),
('alouini', 'hamza', '50505050', 'Monastir', 'Universite de Carthage', 'aliwini11', 'non', ''),
('salma', 'ouni', '65465465', 'Ariana', 'Universite Virtuelle de Tunis', '1234', 'non', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
