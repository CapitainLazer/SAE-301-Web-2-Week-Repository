-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 déc. 2024 à 09:04
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mumo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `mail`, `mdp`) VALUES
(1, 'mumo2.lucie@gmail.com', 'AdminMumo1');

-- --------------------------------------------------------

--
-- Structure de la table `archive`
--

CREATE TABLE `archive` (
  `id_archive` int(11) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `lien` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `archive`
--

INSERT INTO `archive` (`id_archive`, `description`, `lien`) VALUES
(1, '', 'https://youtu.be/SFd3VuDmUCg'),
(2, ' ', 'https://youtu.be/IKBTd2hFF50'),
(3, ' ', 'https://youtu.be/ljSe7mfJY6Y'),
(4, ' ', 'https://youtu.be/xswz60N0vdw'),
(5, ' ', 'https://vimeo.com/110291562'),
(6, ' ', 'https://vimeo.com/108561754'),
(7, ' ', 'https://youtu.be/77PtRD0AqQo'),
(8, ' ', 'https://youtu.be/xU6099lcsMU');

-- --------------------------------------------------------

--
-- Structure de la table `camion`
--

CREATE TABLE `camion` (
  `id_camion` int(11) NOT NULL,
  `nom_camion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `camion`
--

INSERT INTO `camion` (`id_camion`, `nom_camion`) VALUES
(1, 'Premier Camion'),
(2, 'Camion x Cnap et Frac'),
(3, 'Camion x Centre Pompidou');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id_compte` int(11) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id_compte`, `mail`, `mdp`, `nom`, `prenom`, `telephone`) VALUES
(1, 'zoe.coutant.basket.56@gmail.com', 'CoutantZ56', 'COUTANT', 'Zoé', '06 12 34 56 78'),
(2, 'Romaric.cathalifaud@gmail.com', 'CathalifaudR10', 'CATHALIFAUD', 'Romaric', '07 98 76 54 32'),
(3, 'Anysia.fanguin007@gmail.com', 'FanguinA007', 'FANGUIN', 'Anysia', '06 87 65 43 21'),
(4, 'virginien.bacher@gmail.com', 'BacherV43', 'BACHER', 'Virginien', '07 23 45 67 89'),
(5, 'antoineplane2@gmail.com', 'PlaneA002', 'PLANE', 'Antoine', '06 54 32 10 98');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `messages` varchar(8000) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `object` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id_eve` int(11) NOT NULL,
  `nom_evenements` varchar(50) DEFAULT NULL,
  `dates_debut` date DEFAULT NULL,
  `description_evenements` varchar(8000) DEFAULT NULL,
  `id_loc` int(11) NOT NULL,
  `id_camion` int(11) NOT NULL,
  `dates_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id_eve`, `nom_evenements`, `dates_debut`, `description_evenements`, `id_loc`, `id_camion`, `dates_fin`) VALUES
(1, 'Le dessin dans tous ses états', '2024-12-02', 'Portes ouvertes mardi 3 décembre de 16h45 à 18h', 1, 2, '2024-12-04'),
(2, 'Le dessin dans tous ses états', '2024-12-09', 'Portes ouvertes lundi 9 décembre de 16h45 à 18h', 2, 2, '2024-12-09'),
(3, 'Le dessin dans tous ses états', '2024-12-10', 'Portes ouvertes mercredi 11 décembre de 16h à 18h', 3, 2, '2024-12-11'),
(4, 'Le dessin dans tous ses états', '2024-12-12', 'Portes ouvertes le vendredi 13, le lundi 16 décembre de 15h30 à 17h00 et le mercredi 18 décembre de 15h30 à 18h', 4, 2, '2024-12-18'),
(5, 'Le dessin dans tous ses états', '2024-12-19', 'Portes ouvertes le samedi 21 décembre de 10h30 à 12h puis de 14h à 17h30', 5, 2, '2024-12-24'),
(6, 'Le dessin dans tous ses états', '2024-12-26', 'Portes ouvertes le jeudi 26 et vendredi 27 décembre de 10h à 12h puis de 14h à 17h', 6, 2, '2024-12-27'),
(7, 'Le dessin dans tous ses états', '2024-12-30', 'Portes ouvertes le lundi 30, le mardi 31 décembre de 16h à 18h, le mercredi 1er janvier de 10h à 12h puis de 14h à 17h, le jeudi 2 janvier de 15h à 17h et le vendredi 3 janvier de 16h à 18h', 7, 2, '2025-01-03');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_likes` int(11) NOT NULL,
  `id_compte` int(11) NOT NULL,
  `id_eve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE `localisation` (
  `id_loc` int(11) NOT NULL,
  `lieu` varchar(50) DEFAULT NULL,
  `departement` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`id_loc`, `lieu`, `departement`, `ville`) VALUES
(1, 'Devant l\'ancienne caserme de pompiers - Au bout du', '47 - Lot et Garonne', 'Miramont de Guyenne'),
(2, 'Place du Champs de Foire', '87 - Haute Vienne', 'Saint-Bonnet-de-Bellac'),
(3, 'Place François Mitterrand', '87 - Haute Vienne', 'Le Dorat'),
(4, 'Place Beaubreuil - A côté de la Maison des ARts et', '87 - Haute Vienne', 'Limoges'),
(5, 'Devant la salle municipale du Vigenal - 5 rue Geor', '87 - Haute Vienne', 'Limoges'),
(6, 'Devant le BFM du Val de l\'Aurence', '87 - Haute Vienne', 'Limoges'),
(7, 'Quai du Gravier', '47 - Lot et Garonne', 'Agen');

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

CREATE TABLE `sponsors` (
  `id_sponsors` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `lien` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sponsors`
--

INSERT INTO `sponsors` (`id_sponsors`, `nom`, `lien`, `description`, `categorie`) VALUES
(1, 'Bolloré', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', 'Créé en 1822, le Groupe Bolloré figure aujourd\'hui', 'Mécènes'),
(2, 'Fondation Daniel & Nina Carasso', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', 'La Fondation Daniel et Nina Carasso a été créée dé', 'Mécènes'),
(3, 'Fondation d\'entreprise TOTAL', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', 'La Fondation Total est partenaire de grandes insti', 'Mécènes'),
(4, 'Fondation PSA PEUGEOT CITROËN', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', 'La Fondation PSA Peugeot Citroën, lancée en 2011, ', 'Mécènes'),
(5, 'Ministère de la culture et de la communication', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', '', 'Partenaires'),
(6, 'Ministère de l\'Éducation Nationale, de l\'Enseignem', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', '', 'Partenaires'),
(7, 'UNESCO', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', ' ', 'Partenaires'),
(8, 'ASHOKA', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', ' ', 'Partenaires'),
(9, 'Préfet de la Région Île-de-France', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', ' ', 'Partenaires'),
(10, 'Association Nationale des Conseillers Pédagogiques', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', ' ', 'Partenaires'),
(11, 'FRAC LORRAINE', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', ' ', 'Partenaires'),
(12, 'ATD Quart Monde', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', ' ', 'Partenaires'),
(13, 'PLATFORM', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', ' ', 'Partenaires'),
(14, 'Ministère de la Jeunesse, des Sports et de la Vie ', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', ' ', 'Partenaires'),
(15, 'La France s\'Engage', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', 'Le MuMo lauréat de La France s\'engage! Le MuMo com', 'Partenaires'),
(16, 'Centre national des arts plastiques', 'C:UsersuserOneDriveDocumentsMMI2eme AnnéeSAE_301sp', ' ', 'Partenaires');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id_type` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id_type`, `nom`) VALUES
(1, 'Exposition'),
(2, 'Atelier');

-- --------------------------------------------------------

--
-- Structure de la table `type_evenement`
--

CREATE TABLE `type_evenement` (
  `id_type_evenement` int(11) NOT NULL,
  `id_eve` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type_evenement`
--

INSERT INTO `type_evenement` (`id_type_evenement`, `id_eve`, `id_type`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 1),
(5, 4, 1),
(6, 4, 2),
(7, 5, 1),
(8, 5, 2),
(9, 6, 1),
(10, 7, 1),
(11, 7, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id_archive`);

--
-- Index pour la table `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`id_camion`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id_compte`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id_eve`),
  ADD KEY `id_loc` (`id_loc`),
  ADD KEY `id_camion` (`id_camion`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_likes`),
  ADD KEY `id_compte` (`id_compte`),
  ADD KEY `id_eve` (`id_eve`);

--
-- Index pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD PRIMARY KEY (`id_loc`);

--
-- Index pour la table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id_sponsors`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `type_evenement`
--
ALTER TABLE `type_evenement`
  ADD PRIMARY KEY (`id_type_evenement`),
  ADD KEY `id_eve` (`id_eve`),
  ADD KEY `id_type` (`id_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `archive`
--
ALTER TABLE `archive`
  MODIFY `id_archive` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `camion`
--
ALTER TABLE `camion`
  MODIFY `id_camion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id_compte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id_eve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_likes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `localisation`
--
ALTER TABLE `localisation`
  MODIFY `id_loc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id_sponsors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_evenement`
--
ALTER TABLE `type_evenement`
  MODIFY `id_type_evenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD CONSTRAINT `evenements_ibfk_1` FOREIGN KEY (`id_loc`) REFERENCES `localisation` (`id_loc`),
  ADD CONSTRAINT `evenements_ibfk_2` FOREIGN KEY (`id_camion`) REFERENCES `camion` (`id_camion`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id_compte`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_eve`) REFERENCES `evenements` (`id_eve`);

--
-- Contraintes pour la table `type_evenement`
--
ALTER TABLE `type_evenement`
  ADD CONSTRAINT `type_evenement_ibfk_1` FOREIGN KEY (`id_eve`) REFERENCES `evenements` (`id_eve`),
  ADD CONSTRAINT `type_evenement_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `types` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
