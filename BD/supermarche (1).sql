-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 mars 2023 à 20:48
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
-- Base de données : `supermarche`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `NUMARTICLE` varchar(128) NOT NULL,
  `LIBELLE` varchar(128) NOT NULL,
  `QUANTITESTOCK` int(8) NOT NULL,
  `PRIXDEVENTE` decimal(13,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`NUMARTICLE`, `LIBELLE`, `QUANTITESTOCK`, `PRIXDEVENTE`) VALUES
('12ZZ', 'TTT', 3, '2999.00'),
('22', 'TOMATE', 20, '2000.00'),
('40', 'BonBons', 20, '2000.00'),
('ART001', 'Huile de Soja', 35, '3000.00'),
('ART002', 'Lait NIDO 26g', 125, '14500.00'),
('ART003', 'Spaghetti 500g', 56, '450.00'),
('ART004', 'Riz 50kg', 140, '14500.00');

-- --------------------------------------------------------

--
-- Structure de la table `comptes_utilisateur`
--

CREATE TABLE `comptes_utilisateur` (
  `ID` int(128) NOT NULL,
  `NUMEROIDENT` varchar(128) NOT NULL,
  `LOGIN` varchar(128) DEFAULT NULL,
  `PASSWORD` varchar(128) DEFAULT NULL,
  `ROLE` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comptes_utilisateur`
--

INSERT INTO `comptes_utilisateur` (`ID`, `NUMEROIDENT`, `LOGIN`, `PASSWORD`, `ROLE`) VALUES
(1, 'CA001', 'TA001', '19Val12', 'Administrateur'),
(2, 'CA002', 'JulieA', 'softKonect@10', 'caissier'),
(143, 'CA003', 'ALEX', '1111', 'Caissier'),
(148, 'CA003', 'ALEX0', '1111', 'Caissier'),
(149, 'CA003', 'Jean', '2222', 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `NUMEROIDENT` varchar(128) NOT NULL,
  `NOM` varchar(128) DEFAULT NULL,
  `PRENOM` varchar(128) DEFAULT NULL,
  `DATENAISSANCE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`NUMEROIDENT`, `NOM`, `PRENOM`, `DATENAISSANCE`) VALUES
('CA001', 'TAKO', 'Valere', '1998-12-01'),
('CA002', 'ATIO', 'Julie', '1996-05-14'),
('CA003', 'SAKIE', 'Ashley', '1988-02-05');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `NUMEROIDENT` varchar(128) NOT NULL,
  `NUMARTICLE` varchar(128) NOT NULL,
  `QUANTITE` decimal(10,2) DEFAULT NULL,
  `TOTAL` int(2) DEFAULT NULL,
  `DATEVENTE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`NUMEROIDENT`, `NUMARTICLE`, `QUANTITE`, `TOTAL`, `DATEVENTE`) VALUES
('CA002', 'ART003', '10.00', 4500, '2018-03-13'),
('CA003', 'ART001', '4.00', 12000, '2018-03-14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`NUMARTICLE`);

--
-- Index pour la table `comptes_utilisateur`
--
ALTER TABLE `comptes_utilisateur`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `I_FK_COMPTES_UTILISATEUR_EMPLOYE` (`NUMEROIDENT`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`NUMEROIDENT`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`NUMEROIDENT`,`NUMARTICLE`),
  ADD KEY `I_FK_VENTE_EMPLOYE` (`NUMEROIDENT`),
  ADD KEY `I_FK_VENTE_ARTICLE` (`NUMARTICLE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comptes_utilisateur`
--
ALTER TABLE `comptes_utilisateur`
  MODIFY `ID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comptes_utilisateur`
--
ALTER TABLE `comptes_utilisateur`
  ADD CONSTRAINT `FK_COMPTES_UTILISATEUR_EMPLOYE` FOREIGN KEY (`NUMEROIDENT`) REFERENCES `employe` (`NUMEROIDENT`);

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `FK_VENTE_ARTICLE` FOREIGN KEY (`NUMARTICLE`) REFERENCES `article` (`NUMARTICLE`),
  ADD CONSTRAINT `FK_VENTE_EMPLOYE` FOREIGN KEY (`NUMEROIDENT`) REFERENCES `employe` (`NUMEROIDENT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
