-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 15 mars 2021 à 15:21
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
-- Structure de la table `webinar`
--

CREATE TABLE `webinar` (
  `id` int NOT NULL,
  `nomLive` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `duree` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lienZoom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `resumer` longtext COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `webinar`
--

INSERT INTO `webinar` (`id`, `nomLive`, `date`, `photo`, `duree`, `lienZoom`, `resumer`) VALUES
(2, 'Pas de nom', '2021-03-12', '', '60', 'https://www.crazy-stuff.net/fr/articles/lolcat-les-videos-de-chats-les-plus-marrantes', 'Les chats sont les rois d\'internet et sont en bonne voie pour conquérir le monde et prendre le pouvoir sur les humains. Enfin, plus tard, car là c\'est l\'heure de la sieste.'),
(4, 'Pas de nom', '2021-03-16', '', '60', 'https://www.crazy-stuff.net/fr/articles/lolcat-les-videos-de-chats-les-plus-marrantes', 'Les chats sont les rois d\'internet et sont en bonne voie pour conquérir le monde et prendre le pouvoir sur les humains. Enfin, plus tard, car là c\'est l\'heure de la sieste.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `webinar`
--
ALTER TABLE `webinar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
