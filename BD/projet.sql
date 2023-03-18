-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 mars 2023 à 20:43
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
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `ID_A` int(20) NOT NULL,
  `NOM_A` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `ID_C` int(20) NOT NULL,
  `ID_A` int(20) NOT NULL,
  `LOGIN` varchar(128) DEFAULT NULL,
  `MOTDEPASSE` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID_E` int(20) NOT NULL,
  `ID_A` int(20) NOT NULL,
  `ID_C` int(20) NOT NULL,
  `ID_F` int(20) NOT NULL,
  `ID_S` int(20) NOT NULL,
  `NOM_E` varchar(128) DEFAULT NULL,
  `Prénom` varchar(255) NOT NULL,
  `datedenaissance` date NOT NULL,
  `Lieu` varchar(255) NOT NULL,
  `Sexe` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `telephone` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `specialite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `ID_F` int(20) NOT NULL,
  `TITRE_F` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`ID_F`, `TITRE_F`) VALUES
(1, 'BUREAUTIQUE'),
(2, 'GESTION'),
(3, 'GRAPHISME'),
(4, 'GENIE INFORMATIQUE');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `ID_S` int(20) NOT NULL,
  `ID_F` int(20) NOT NULL,
  `NOM_S` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`ID_S`, `ID_F`, `NOM_S`) VALUES
(1, 1, 'Secrétariat bureautique'),
(2, 1, 'Secrétariat de direction'),
(3, 2, 'Comptabilité informatisée de gestion'),
(4, 3, 'Graphisme de production'),
(5, 4, 'Maintenance informatique'),
(6, 4, 'Maintenance des réseaux informatiques'),
(7, 4, 'WebMaster'),
(8, 4, 'Développement des applications web et mobile');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`ID_A`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`ID_C`),
  ADD KEY `I_FK_COMPTE_ADMINISTRATEUR` (`ID_A`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID_E`),
  ADD KEY `I_FK_ETUDIANT_ADMINISTRATEUR` (`ID_A`),
  ADD KEY `I_FK_ETUDIANT_COMPTE` (`ID_C`),
  ADD KEY `I_FK_ETUDIANT_FILIERE` (`ID_F`),
  ADD KEY `I_FK_ETUDIANT_SPECIALITE` (`ID_S`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`ID_F`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`ID_S`),
  ADD KEY `I_FK_SPECIALITE_FILIERE` (`ID_F`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `ID_A` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `ID_C` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `ID_E` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `ID_F` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `ID_S` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `FK_COMPTE_ADMINISTRATEUR` FOREIGN KEY (`ID_A`) REFERENCES `administrateur` (`ID_A`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_ETUDIANT_ADMINISTRATEUR` FOREIGN KEY (`ID_A`) REFERENCES `administrateur` (`ID_A`),
  ADD CONSTRAINT `FK_ETUDIANT_COMPTE` FOREIGN KEY (`ID_C`) REFERENCES `compte` (`ID_C`),
  ADD CONSTRAINT `FK_ETUDIANT_FILIERE` FOREIGN KEY (`ID_F`) REFERENCES `filiere` (`ID_F`),
  ADD CONSTRAINT `FK_ETUDIANT_SPECIALITE` FOREIGN KEY (`ID_S`) REFERENCES `specialite` (`ID_S`);

--
-- Contraintes pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD CONSTRAINT `FK_SPECIALITE_FILIERE` FOREIGN KEY (`ID_F`) REFERENCES `filiere` (`ID_F`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
