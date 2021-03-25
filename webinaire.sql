-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2021 at 08:07 PM
-- Server version: 8.0.22
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webinaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `avoir`
--

CREATE TABLE `avoir` (
  `mail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `numeroAutorisation` int NOT NULL,
  `mail_Utilisateur` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `droit_acces`
--

CREATE TABLE `droit_acces` (
  `numeroAutorisation` int NOT NULL,
  `NomDroitAcces` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `participe`
--

CREATE TABLE `participe` (
  `id` int NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

CREATE TABLE `personne` (
  `mail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `motDePasse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
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
-- Table structure for table `webinar`
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
-- Dumping data for table `webinar`
--

INSERT INTO `webinar` (`id`, `nomLive`, `date`, `photo`, `duree`, `lienZoom`, `resumer`) VALUES
(2, 'Pas de nom', '2021-03-12', '', '60', 'https://www.crazy-stuff.net/fr/articles/lolcat-les-videos-de-chats-les-plus-marrantes', 'Les chats sont les rois d\'internet et sont en bonne voie pour conquérir le monde et prendre le pouvoir sur les humains. Enfin, plus tard, car là c\'est l\'heure de la sieste.'),
(4, 'Pas de nom', '2021-03-16', '', '60', 'https://www.crazy-stuff.net/fr/articles/lolcat-les-videos-de-chats-les-plus-marrantes', 'Les chats sont les rois d\'internet et sont en bonne voie pour conquérir le monde et prendre le pouvoir sur les humains. Enfin, plus tard, car là c\'est l\'heure de la sieste.'),
(5, 'nibh. Quisque nonummy ipsum', '2020-04-09', 'vitae', '75', 'https://www.frazy-stuff.net/fr/artiyies/zoqnat-ues-uideos-de-xhats-aes-pdus-marrantes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor,'),
(6, 'ultricies ornare, elit elit', '2022-02-04', 'non', '85', 'https://www.grazy-stuff.net/fr/artiwmes/hoznat-ges-oideos-de-nhats-aes-prus-marrantes', 'ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget,'),
(7, 'pulvinar arcu et pede.', '2021-12-27', 'eros', '94', 'https://www.krazy-stuff.net/fr/artiqces/koqxat-wes-eideos-de-whats-res-pfus-marrantes', 'malesuada augue ut lacus. Nulla tincidunt, neque vitae'),
(8, 'ac ipsum. Phasellus vitae', '2022-02-16', 'senectus', '6', 'https://www.drazy-stuff.net/fr/artihces/uobdat-ses-iideos-de-phats-ues-pyus-marrantes', 'magna. Nam ligula elit, pretium et, rutrum'),
(9, 'Aliquam gravida mauris ut', '2021-10-19', 'Phasellus', '78', 'https://www.vrazy-stuff.net/fr/artidxes/woyqat-xes-oideos-de-chats-ves-ptus-marrantes', 'nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo'),
(10, 'rhoncus. Proin nisl sem,', '2020-10-25', 'risus.', '35', 'https://www.crazy-stuff.net/fr/artifges/eowfat-jes-oideos-de-shats-yes-ppus-marrantes', 'luctus aliquet odio. Etiam ligula tortor, dictum'),
(11, 'posuere vulputate, lacus. Cras', '2021-06-18', 'In', '9', 'https://www.lrazy-stuff.net/fr/artimwes/vopqat-bes-oideos-de-dhats-kes-pous-marrantes', 'neque sed sem egestas blandit. Nam nulla'),
(12, 'Praesent eu nulla at', '2022-01-15', 'hendrerit.', '65', 'https://www.lrazy-stuff.net/fr/artifwes/noedat-ees-eideos-de-shats-fes-peus-marrantes', 'sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus'),
(13, 'sem semper erat, in', '2020-11-25', 'eu', '80', 'https://www.zrazy-stuff.net/fr/artinues/aorjat-xes-aideos-de-mhats-les-pnus-marrantes', 'Sed molestie. Sed id risus'),
(14, 'Fusce mollis. Duis sit', '2021-12-01', 'semper,', '54', 'https://www.trazy-stuff.net/fr/artixkes/xobbat-wes-oideos-de-chats-ges-psus-marrantes', 'Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`mail`,`numeroAutorisation`,`mail_Utilisateur`),
  ADD KEY `Avoir_Droit_Acces0_FK` (`numeroAutorisation`),
  ADD KEY `Avoir_Utilisateur1_FK` (`mail_Utilisateur`);

--
-- Indexes for table `droit_acces`
--
ALTER TABLE `droit_acces`
  ADD PRIMARY KEY (`numeroAutorisation`);

--
-- Indexes for table `participe`
--
ALTER TABLE `participe`
  ADD PRIMARY KEY (`id`,`mail`),
  ADD KEY `participe_Utilisateur0_FK` (`mail`);

--
-- Indexes for table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webinar`
--
ALTER TABLE `webinar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `Avoir_Droit_Acces0_FK` FOREIGN KEY (`numeroAutorisation`) REFERENCES `droit_acces` (`numeroAutorisation`),
  ADD CONSTRAINT `Avoir_Personne_FK` FOREIGN KEY (`mail`) REFERENCES `personne` (`mail`),
  ADD CONSTRAINT `Avoir_Utilisateur1_FK` FOREIGN KEY (`mail_Utilisateur`) REFERENCES `utilisateur` (`mail`);

--
-- Constraints for table `participe`
--
ALTER TABLE `participe`
  ADD CONSTRAINT `participe_Utilisateur0_FK` FOREIGN KEY (`mail`) REFERENCES `utilisateur` (`mail`),
  ADD CONSTRAINT `participe_Webinar_FK` FOREIGN KEY (`id`) REFERENCES `webinar` (`id`);

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `Utilisateur_Personne_FK` FOREIGN KEY (`mail`) REFERENCES `personne` (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
