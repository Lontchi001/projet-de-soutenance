-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 26 jan. 2023 à 20:06
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cycleformation`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `CODEENS` varchar(128) NOT NULL,
  `CODEMAT` varchar(128) NOT NULL,
  `NOMENS` char(255) DEFAULT NULL,
  `GRADEENS` char(255) DEFAULT NULL,
  `MOTDEPASSSE` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`CODEENS`, `CODEMAT`, `NOMENS`, `GRADEENS`, `MOTDEPASSSE`) VALUES
('ENS001', 'SL2IPI', 'Menez', 'Assistant', 'ME5421'),
('ENS002', 'SL2IAL', 'Lahire', 'Chargé de cours', '1223@é20'),
('ENS003', 'SL2IBD', 'Kounalis', 'Chargé de cours', '45M@00'),
('ENS004', 'SL2IPW', 'Latie', 'Professeur', 'Hj&12_é_14');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `CODEET` int(15) NOT NULL,
  `NOMET` varchar(128) DEFAULT NULL,
  `DATNET` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`CODEET`, `NOMET`, `DATNET`) VALUES
(1001, 'DONGO', '1992-10-12'),
(1002, 'TAKAM NDAM', '1997-04-08'),
(1003, 'KENFACK', '2001-02-20'),
(1004, 'Lontchi', '2001-08-14'),
(1006, 'TOTO', '2002-12-02');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `CODEMAT` varchar(128) NOT NULL,
  `NOMMAT` char(255) DEFAULT NULL,
  `COEFMAT` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`CODEMAT`, `NOMMAT`, `COEFMAT`) VALUES
('SL2IAL', 'Algorithmique', 3),
('SL2IBD', 'Base de donnée', 2),
('SL2IPI', 'Programmation orientée objet', 4),
('SL2IPW', 'Programmation évenementielle', 3);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `CODEET` int(15) NOT NULL,
  `CODEMAT` varchar(128) NOT NULL,
  `NOTE` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`CODEET`, `CODEMAT`, `NOTE`) VALUES
(1001, 'SL2IPW', '14.50'),
(1002, 'SL2IAL', '12.50'),
(1003, 'SL2IAL', '8.25'),
(1003, 'SL2IPW', '10.00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`CODEENS`),
  ADD KEY `I_FK_ENSEIGNANT_MATIERE` (`CODEMAT`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`CODEET`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`CODEMAT`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`CODEET`,`CODEMAT`),
  ADD KEY `I_FK_NOTE_ETUDIANT` (`CODEET`),
  ADD KEY `I_FK_NOTE_MATIERE` (`CODEMAT`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `FK_ENSEIGNANT_MATIERE` FOREIGN KEY (`CODEMAT`) REFERENCES `matiere` (`CODEMAT`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `FK_NOTE_ETUDIANT` FOREIGN KEY (`CODEET`) REFERENCES `etudiant` (`CODEET`),
  ADD CONSTRAINT `FK_NOTE_MATIERE` FOREIGN KEY (`CODEMAT`) REFERENCES `matiere` (`CODEMAT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
