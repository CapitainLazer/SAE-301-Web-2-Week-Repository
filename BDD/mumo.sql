-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 déc. 2024 à 09:43
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
(1, 'mumo2.lucie@gmail.com', '59d30d55eb0b68eb583122015d8eedef975555f7');

-- --------------------------------------------------------

--
-- Structure de la table `archive`
--

CREATE TABLE `archive` (
  `id_archive` int(11) NOT NULL,
  `descriptions` varchar(50) DEFAULT NULL,
  `lien` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `archive`
--

INSERT INTO `archive` (`id_archive`, `descriptions`, `lien`) VALUES
(1, '', 'https://www.youtube.com/embed/SFd3VuDmUCg?si=e0Nju'),
(2, ' ', 'https://www.youtube.com/embed/IKBTd2hFF50?si=4dcoy'),
(3, ' ', 'https://www.youtube.com/embed/ljSe7mfJY6Y?si=umIt6'),
(4, ' ', 'https://www.youtube.com/embed/xswz60N0vdw?si=qSQgc'),
(5, ' ', 'https://www.youtube.com/embed/77PtRD0AqQo?si=G7MyD'),
(6, ' ', 'https://www.youtube.com/embed/xU6099lcsMU?si=Tt_Jr'),
(7, '', 'https://www.youtube.com/embed/HrQnkFuUmbg?si=peKT5');

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
(1, 'zoe.coutant.basket.56@gmail.com', 'df4656f4f66e27d7761fd833961468d5b950c3e4', 'KERAVAL', 'Zoé', '06 12 34 56 78'),
(2, 'Romaric.cathalifaud@gmail.com', '0f1f8bbc2fc70633e7cfe19c7bf2b24589f2adb4', 'CATHALIFAUD', 'Romaric', '07 98 76 54 32'),
(3, 'Anysia.fanguin007@gmail.com', '9101e15db1d6e45a677ccb43e67430f2a1a9c278', 'FANGUIN', 'Anysia', '06 87 65 43 21'),
(4, 'virginien.bacher@gmail.com', 'fb9211205e47d1e136331128167dbc37121b7f42', 'BACHER', 'Virginien', '07 23 45 67 89'),
(5, 'antoineplane2@gmail.com', '916b85af636311a54306271d492405e231c88689', 'PLANE', 'Antoine', '06 54 32 10 98'),
(6, 'info@musee-mobile.fr', '8cb2237d0679ca88db6464eac60da96345513964', 'COUTANT', 'Sophie', '0235689741');

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
  `telephone` varchar(50) DEFAULT NULL,
  `statu` varchar(50) NOT NULL DEFAULT 'Non Traité'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `mail`, `nom`, `messages`, `dates`, `object`, `telephone`, `statu`) VALUES
(1, 'test@mail.com', 'Coutant', 'test lien poo et bdd', '2024-12-02', 'test', '0610034287', 'Traité'),
(2, 'testredirection@mail.com', 'Coutant', 'pourquoi ça marche pas ', '2024-12-16', 'test redirection', '0652442223', 'Non Traité'),
(3, 'keraval.gwenael@mail.com', 'Keraval', 'contact pour une intervention dans la ville de Pontivy ', '2024-12-16', 'Demande de venu dans la ville de Pontivy', '0786947585', 'Non Traité'),
(5, 'test@mail.com', 'test', 'test', '2024-12-13', 'test', '0615050406', 'Non Traité'),
(6, 'test@mail.com', 'test', 'test', '2024-12-16', 'test', '2503689475', 'Traité'),
(9, 'zoe.coutant@icloud.com', 'COUTANT Zoé', 'Est-ce que nous allons réussir à faire toutes les versions prévue de la SAE ?', '2024-12-17', 'SAE', '0236589475', 'Non Traité'),
(10, 'zoe.coutant@icloud.com', 'COUTANT Zoé', 'test', '2024-12-17', 'test', '0236589475', 'Traité'),
(11, 'marie-therese@orange.fr', 'Marie-Thérèse KERAVAL', 'test', '2024-12-20', 'Demande de venu sur SCAËR', '0235689475', 'Traité');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id_eve` int(11) NOT NULL,
  `nom_evenements` varchar(50) DEFAULT NULL,
  `dates_debut` datetime DEFAULT NULL,
  `description_evenements` varchar(8000) DEFAULT NULL,
  `id_loc` int(11) NOT NULL,
  `id_camion` int(11) NOT NULL,
  `dates_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id_eve`, `nom_evenements`, `dates_debut`, `description_evenements`, `id_loc`, `id_camion`, `dates_fin`) VALUES
(1, 'Le dessin dans tous ses états Miramont de Guyenne', '2024-12-02 00:00:00', 'Portes ouvertes mardi 3 décembre de 16h45 à 18h', 1, 2, '2024-12-04 23:59:00'),
(2, 'Le dessin dans tous ses états Saint-Bonnet-de-Bell', '2024-12-09 00:00:00', 'Portes ouvertes lundi 9 décembre de 16h45 à 18h', 2, 2, '2024-12-09 23:59:00'),
(3, 'Le dessin dans tous ses états Le Dorat', '2024-12-10 00:00:00', 'Portes ouvertes mercredi 11 décembre de 16h à 18h', 3, 2, '2024-12-11 23:59:00'),
(4, 'Le dessin dans tous ses états Limoges', '2024-12-12 00:00:00', 'Portes ouvertes le vendredi 13, le lundi 16 décembre de 15h30 à 17h00 et le mercredi 18 décembre de 15h30 à 18h', 4, 2, '2024-12-18 23:59:00'),
(5, 'Le dessin dans tous ses états Limoges', '2024-12-19 00:00:00', 'Portes ouvertes le samedi 21 décembre de 10h30 à 12h puis de 14h à 17h30', 5, 2, '2024-12-24 23:59:00'),
(6, 'Le dessin dans tous ses états Limoges', '2024-12-26 00:00:00', 'Portes ouvertes le jeudi 26 et vendredi 27 décembre de 10h à 12h puis de 14h à 17h', 6, 2, '2024-12-27 23:59:00'),
(7, 'Le dessin dans tous ses états Agen', '2024-12-30 00:00:00', 'Portes ouvertes le lundi 30, le mardi 31 décembre de 16h à 18h, le mercredi 1er janvier de 10h à 12h puis de 14h à 17h, le jeudi 2 janvier de 15h à 17h et le vendredi 3 janvier de 16h à 18h', 7, 2, '2025-01-03 23:59:00'),
(11, 'C\'est tout un art', '2025-01-20 00:00:00', 'test modif', 5, 2, '2025-01-31 23:59:00'),
(13, 'Horloge poireau', '2024-12-18 00:00:00', 'Pourquoi se contenter d\'une horloge quand on peut avoir une œuvre d\'art qui donne l\'heure ?', 7, 3, '2024-12-18 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_likes` int(11) NOT NULL,
  `id_compte` int(11) NOT NULL,
  `id_eve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id_likes`, `id_compte`, `id_eve`) VALUES
(1, 1, 3),
(9, 1, 5),
(3, 1, 6),
(2, 1, 11),
(4, 2, 1),
(10, 2, 5),
(5, 3, 2),
(6, 4, 4),
(11, 4, 5),
(8, 5, 3),
(7, 5, 7),
(16, 6, 1),
(17, 6, 2),
(18, 6, 6),
(15, 6, 7),
(12, 6, 13);

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
  `lien` varchar(255) DEFAULT NULL,
  `descriptions` varchar(50) DEFAULT NULL,
  `categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sponsors`
--

INSERT INTO `sponsors` (`id_sponsors`, `nom`, `lien`, `descriptions`, `categorie`) VALUES
(1, 'Bolloré', './images/Sponsors/bolloré.webp', 'Créé en 1822, le Groupe Bolloré figure aujourd\'hui', 'Mécènes'),
(2, 'Fondation Daniel & Nina Carasso', './images/Sponsors/daniel&ninacarasso.webp', 'La Fondation Daniel et Nina Carasso a été créée dé', 'Mécènes'),
(3, 'Fondation d\'entreprise TOTAL', './images/Sponsors/fondation_total.webp', 'La Fondation Total est partenaire de grandes insti', 'Mécènes'),
(4, 'Fondation PSA PEUGEOT CITROËN', './images/Sponsors/fondation_PSA.webp', 'La Fondation PSA Peugeot Citroën, lancée en 2011, ', 'Mécènes'),
(5, 'Ministère de la culture et de la communication', './images/Sponsors/ministere_culture_comm.webp', '', 'Partenaires'),
(6, 'Ministère de l\'Éducation Nationale, de l\'Enseignem', './images/Sponsors/ministere_educ_nation_et_enseignement_sup_et_recherche.webp', '', 'Partenaires'),
(7, 'UNESCO', './images/Sponsors/unesco.webp', ' ', 'Partenaires'),
(8, 'ASHOKA', './images/Sponsors/ashoka.webp', ' ', 'Partenaires'),
(9, 'Préfet de la Région Île-de-France', './images/Sponsors/prefet_region-ile-de-france.webp', ' ', 'Partenaires'),
(10, 'Association Nationale des Conseillers Pédagogiques', './images/Sponsors/asso-nation-conseil-pedago.webp', ' ', 'Partenaires'),
(11, 'FRAC LORRAINE', './images/Sponsors/FRAC_lorraine.webp', ' ', 'Partenaires'),
(12, 'ATD Quart Monde', './images/Sponsors/ATD-quart-monde.webp', ' ', 'Partenaires'),
(13, 'PLATFORM', './images/Sponsors/platform.webp', ' ', 'Partenaires'),
(14, 'Ministère de la Jeunesse, des Sports et de la Vie ', './images/Sponsors/ministère-jeune-sport-vie-asso.webp', ' ', 'Partenaires'),
(15, 'La France s\'Engage', './images/Sponsors/france-engage.webp', 'Le MuMo lauréat de La France s\'engage! Le MuMo com', 'Partenaires'),
(16, 'Centre national des arts plastiques', './images/Sponsors/amp.webp', ' ', 'Partenaires');

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
(2, 'Atelier'),
(3, 'Vernissage');

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
(11, 7, 2),
(14, 11, 2);

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
  ADD UNIQUE KEY `unique_like` (`id_compte`,`id_eve`),
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
  MODIFY `id_camion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id_compte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id_eve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_likes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_evenement`
--
ALTER TABLE `type_evenement`
  MODIFY `id_type_evenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
