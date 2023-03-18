-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 mars 2023 à 20:44
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
-- Base de données : `projet1`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(10) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Motdepasse` varchar(255) NOT NULL,
  `passconf` varchar(255) NOT NULL,
  `dis` int(11) NOT NULL DEFAULT 1,
  `tof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `Nom`, `Email`, `Motdepasse`, `passconf`, `dis`, `tof`) VALUES
(6, 'LontDchi', '+23768S0195186@GMAIL.COM', '011c945f30ce2cbafc452f39840f025693339c42', '', 1, ''),
(7, 'Lontchi p', 'lontchipythagore97@gmail.com', '011c945f30ce2cbafc452f39840f025693339c42', '', 1, ''),
(13, 'toto', 'ttoo@gmail.com', '1111', '1111', 1, ''),
(14, 'tooti', 'ttooo@gmail.com', '011c945f30ce2cbafc452f39840f025693339c42', '', 1, ''),
(15, 'pythagore', 'lontchitchinda@gmail.com', '011c945f30ce2cbafc452f39840f025693339c42', '', 1, '5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id` int(20) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mot de passe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(10) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prénom` varchar(30) NOT NULL,
  `datedenaissance` date NOT NULL,
  `Lieu` varchar(255) NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `nomP` varchar(255) NOT NULL,
  `numP` int(9) NOT NULL,
  `villeP` varchar(255) NOT NULL,
  `telephone` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Formation` varchar(255) NOT NULL,
  `Diplome` varchar(255) NOT NULL,
  `Annee` varchar(255) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `motdepasse` varchar(100) NOT NULL,
  `tof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `Nom`, `Prénom`, `datedenaissance`, `Lieu`, `Sexe`, `pays`, `Ville`, `nomP`, `numP`, `villeP`, `telephone`, `email`, `Formation`, `Diplome`, `Annee`, `pseudo`, `motdepasse`, `tof`) VALUES
(1, 'Lontchi Tchinda', 'Pythagore', '2001-08-14', 'Dschang', 'Masculin', 'Cameroun', 'Dschang', 'Tsiatsop T Lidwine', 675683039, 'Babadjou', 652069603, 'lontchi.tchinda.pythagore@gmail.com', 'web Developpeur/WebMaster', 'BACCALAUREAT/GCE A LEVEL', '2021', 'Pythagore', '011c945f30ce2cbafc452f39840f025693339c42', 'IMG_20211206_173220_313.jpg'),
(2, 'Kenfack', 'Junior', '2002-03-23', 'BALENG', 'Masculin', 'Cameroun', 'Dschang', 'Donmo Paul', 675677776, 'Douala', 676654455, 'Junior@gmail.com', 'Comptabilité informatisée de gestion(CIG)', 'BACCALAUREAT/GCE A LEVEL', '2022', 'Junior', '011c945f30ce2cbafc452f39840f025693339c42', 'Capture.JPG'),
(3, 'Ndongmo', 'Leonel', '2000-03-24', 'Bafoussam', 'Masculin', 'Cameroun', 'Dschang', 'Momo Jean', 678789900, 'Yaounde', 678735566, 'ndongmo@gmail.com', 'Graphisme de production (GP)', 'PROBATOIRE', '2018', 'Leo', '011c945f30ce2cbafc452f39840f025693339c42', 'Capture.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id` int(20) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `id` int(20) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
