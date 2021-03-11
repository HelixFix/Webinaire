-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 11 mars 2021 à 09:29
-- Version du serveur :  8.0.22
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webinaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `mail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `numeroAutorisation` int NOT NULL,
  `mail_Utilisateur` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `droit_acces`
--

CREATE TABLE `droit_acces` (
  `numeroAutorisation` int NOT NULL,
  `NomDroitAcces` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

CREATE TABLE `participe` (
  `nomLive` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `mail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `motDePasse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `mail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Ville` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Emploie` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Telephone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Paiment` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `motDePasse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `webinar`
--

CREATE TABLE `webinar` (
  `nomLive` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `duree` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lienZoom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rseumer` longtext COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`mail`,`numeroAutorisation`,`mail_Utilisateur`),
  ADD KEY `Avoir_Droit_Acces0_FK` (`numeroAutorisation`),
  ADD KEY `Avoir_Utilisateur1_FK` (`mail_Utilisateur`);

--
-- Index pour la table `droit_acces`
--
ALTER TABLE `droit_acces`
  ADD PRIMARY KEY (`numeroAutorisation`);

--
-- Index pour la table `participe`
--
ALTER TABLE `participe`
  ADD PRIMARY KEY (`nomLive`,`mail`),
  ADD KEY `participe_Utilisateur0_FK` (`mail`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`nomLive`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `Avoir_Droit_Acces0_FK` FOREIGN KEY (`numeroAutorisation`) REFERENCES `droit_acces` (`numeroAutorisation`),
  ADD CONSTRAINT `Avoir_Personne_FK` FOREIGN KEY (`mail`) REFERENCES `personne` (`mail`),
  ADD CONSTRAINT `Avoir_Utilisateur1_FK` FOREIGN KEY (`mail_Utilisateur`) REFERENCES `utilisateur` (`mail`);

--
-- Contraintes pour la table `participe`
--
ALTER TABLE `participe`
  ADD CONSTRAINT `participe_Utilisateur0_FK` FOREIGN KEY (`mail`) REFERENCES `utilisateur` (`mail`),
  ADD CONSTRAINT `participe_Webinar_FK` FOREIGN KEY (`nomLive`) REFERENCES `webinar` (`nomLive`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `Utilisateur_Personne_FK` FOREIGN KEY (`mail`) REFERENCES `personne` (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
