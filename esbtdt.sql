-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 mai 2021 à 14:27
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `esbtdt`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `nom_admin` varchar(255) NOT NULL,
  `mdp_admin` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `mdp_admin`) VALUES
(1, 'esbmeziere', '6c4dc8a08691dd4b92efb8cb4efc4399');

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

CREATE TABLE `competition` (
  `num_compet` int(3) NOT NULL,
  `desc_compet` varchar(150) NOT NULL,
  `id_photocompet` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competition`
--

INSERT INTO `competition` (`num_compet`, `desc_compet`, `id_photocompet`) VALUES
(1, 'SAISON 2020/2021', 1);

-- --------------------------------------------------------

--
-- Structure de la table `entrainement`
--

CREATE TABLE `entrainement` (
  `num_entrainement` int(3) NOT NULL,
  `nom_entrainement` varchar(100) NOT NULL,
  `role_entrainement` varchar(50) NOT NULL,
  `desc_entrainement` longtext NOT NULL,
  `id_photobureau` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entrainement`
--

INSERT INTO `entrainement` (`num_entrainement`, `nom_entrainement`, `role_entrainement`, `desc_entrainement`, `id_photobureau`) VALUES
(1, 'Christopher Marolleau', 'Entraîneur Mardi soir', '', 1),
(2, 'Maxime Guyon', 'Entraîneur Jeudi soir', '', 1),
(3, 'Yohann Gesbert', 'Entraîneur Loisir', 'Dîplome BPJEPS (APT) Emploi : Éducateur Sportif commune de Bonchamp', 1);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `num_equipe` int(3) NOT NULL,
  `desc_equipe` varchar(200) NOT NULL,
  `id_photoequipe` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`num_equipe`, `desc_equipe`, `id_photoequipe`) VALUES
(1, 'ÉQUIPE DE BONCHAMP 1 (D2)', 1),
(2, 'ÉQUIPE DE BONCHAMP 2 (D5)', 2);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `num_evenement` int(3) NOT NULL,
  `desc_evenement` varchar(250) NOT NULL,
  `id_photoevenement` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`num_evenement`, `desc_evenement`, `id_photoevenement`) VALUES
(1, 'Tournoi de Bonchamp le 09/04/2021 !', 1),
(2, '...', 2);

-- --------------------------------------------------------

--
-- Structure de la table `illustration`
--

CREATE TABLE `illustration` (
  `id_illustration` int(3) NOT NULL,
  `img_illustration` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `illustration`
--

INSERT INTO `illustration` (`id_illustration`, `img_illustration`) VALUES
(1, 'raquette.jpg'),
(2, 'sweatsansfermeture.jpg'),
(3, 'sweatavecfermeture.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `lasalle`
--

CREATE TABLE `lasalle` (
  `num_salle` int(3) NOT NULL,
  `titre_salle` varchar(50) NOT NULL,
  `desc_salle` longtext NOT NULL,
  `id_photosalle` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lasalle`
--

INSERT INTO `lasalle` (`num_salle`, `titre_salle`, `desc_salle`, `id_photosalle`) VALUES
(1, 'Le coin table', 'C\'est ici que les joueurs s\'entraînent et jouent les matchs de compétition', 1),
(2, 'Le coin buvette', 'C\'est ici que les joueurs s\'hydratent après leurs matchs. C\'est aussi l\'endroit préféré de certaines personnes..', 2);

-- --------------------------------------------------------

--
-- Structure de la table `lebureau`
--

CREATE TABLE `lebureau` (
  `num_bureau` int(3) NOT NULL,
  `nom_bureau` varchar(100) NOT NULL,
  `role_bureau` varchar(50) NOT NULL,
  `desc_bureau` longtext NOT NULL,
  `id_photobureau` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lebureau`
--

INSERT INTO `lebureau` (`num_bureau`, `nom_bureau`, `role_bureau`, `desc_bureau`, `id_photobureau`) VALUES
(1, 'Nicolas Begoin', 'Président', 'Le président a un rôle de direction générale et de gestion de l’association ainsi qu’un rôle de représentation de l’association. Par exemple, il peut être en charge des relations publiques et ainsi communiquer avec la presse au nom de l’association.', 2),
(2, 'Sandrine Maignan', 'Trésorière', 'Le trésorier détermine les dépenses à engager pour la réalisation du programme d’activités, établi le budget prévisionnel d’association approprié aux objectifs (court, moyen et long terme), avance des propositions sur la gestion de l’association.', 1),
(3, 'Thomas Douillet', 'Secrétaire', 'Le secrétaire traite tous les courriers, transmet à l’organe compétent les courriers qui nécessitent une concentration particulière, liste tous les adhérents (nom, prénoms, coordonnées…), rédige des notes d’information à destination des adhérents.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mediaa`
--

CREATE TABLE `mediaa` (
  `num_media` int(3) NOT NULL,
  `nom_media` varchar(250) NOT NULL,
  `id_photomedia` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mediaa`
--

INSERT INTO `mediaa` (`num_media`, `nom_media`, `id_photomedia`) VALUES
(1, 'Ouest France (21/01/15)', 1),
(2, 'Ouest France (16/06/15)', 2),
(3, 'Courrier de La Mayenne (04/02/16)', 3),
(4, 'CDM et OF (16/11/17)', 4);

-- --------------------------------------------------------

--
-- Structure de la table `photobureau`
--

CREATE TABLE `photobureau` (
  `id_photobureau` int(3) NOT NULL,
  `img_photobureau` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `photobureau`
--

INSERT INTO `photobureau` (`id_photobureau`, `img_photobureau`) VALUES
(1, 'photovierge.jpg'),
(2, 'nicolas.png');

-- --------------------------------------------------------

--
-- Structure de la table `photocompet`
--

CREATE TABLE `photocompet` (
  `id_photocompet` int(3) NOT NULL,
  `doc_photocompet` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `photocompet`
--

INSERT INTO `photocompet` (`id_photocompet`, `doc_photocompet`) VALUES
(1, 'saison 2019-2020.html');

-- --------------------------------------------------------

--
-- Structure de la table `photoequipe`
--

CREATE TABLE `photoequipe` (
  `id_photoequipe` int(3) NOT NULL,
  `img_photoequipe` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `photoequipe`
--

INSERT INTO `photoequipe` (`id_photoequipe`, `img_photoequipe`) VALUES
(1, 'photo_d2.jpg'),
(2, 'photo_d5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `photoevenement`
--

CREATE TABLE `photoevenement` (
  `id_photoevenement` int(3) NOT NULL,
  `img_photoevenement` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `photoevenement`
--

INSERT INTO `photoevenement` (`id_photoevenement`, `img_photoevenement`) VALUES
(1, 'affiche.jpg'),
(2, '');

-- --------------------------------------------------------

--
-- Structure de la table `photomedia`
--

CREATE TABLE `photomedia` (
  `id_photomedia` int(3) NOT NULL,
  `img_photomedia` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `photomedia`
--

INSERT INTO `photomedia` (`id_photomedia`, `img_photomedia`) VALUES
(1, 'presse1.jpg'),
(2, 'presse2.jpg'),
(3, 'presse3.jpg'),
(4, 'presse4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `photosalle`
--

CREATE TABLE `photosalle` (
  `id_photosalle` int(3) NOT NULL,
  `img_photosalle` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `photosalle`
--

INSERT INTO `photosalle` (`id_photosalle`, `img_photosalle`) VALUES
(1, 'table.jpg'),
(2, 'buvette.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `prixlicence`
--

CREATE TABLE `prixlicence` (
  `num_prixlicence` int(3) NOT NULL,
  `cat_prixlicence` varchar(150) NOT NULL,
  `prix_prixlicence` double(6,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prixlicence`
--

INSERT INTO `prixlicence` (`num_prixlicence`, `cat_prixlicence`, `prix_prixlicence`) VALUES
(1, 'Poussins/Benjamins : ', 90.00),
(2, 'Minimes/Cadets :', 90.00),
(3, 'Juniors/Seniors/Vétérans :', 100.00);

-- --------------------------------------------------------

--
-- Structure de la table `prochainmatch`
--

CREATE TABLE `prochainmatch` (
  `num_match` int(3) NOT NULL,
  `lib_match` varchar(100) NOT NULL,
  `content_match` longtext NOT NULL,
  `content2_match` longtext NOT NULL,
  `date_match` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prochainmatch`
--

INSERT INTO `prochainmatch` (`num_match`, `lib_match`, `content_match`, `content2_match`, `date_match`) VALUES
(1, 'D2 et D5', 'En D2 Bonchamp 1 joue à domicile contre Louverné 4 (RDV 20h15 dans la salle)', 'En D5 Bonchamp 2 joue à domicile contre Évron 6 (RDV 20h15 dans la salle)', 'Vendredi 13 mars 2020');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(3) NOT NULL,
  `lib_produit` varchar(50) NOT NULL,
  `desc_produit` text NOT NULL,
  `prix_produit` double(4,2) NOT NULL,
  `id_illustration` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `lib_produit`, `desc_produit`, `prix_produit`, `id_illustration`) VALUES
(1, 'Raquette', 'Idéal pour les débutants !', 30.00, 1),
(2, 'Sweat sans fermeture', 'Le sweat officiel du club (sans fermeture)', 30.00, 2),
(3, 'Sweat avec fermeture', 'Le sweat officiel du club (avec fermeture)', 35.00, 3);

-- --------------------------------------------------------

--
-- Structure de la table `resultatmatch`
--

CREATE TABLE `resultatmatch` (
  `num_resultat` int(3) NOT NULL,
  `lib_resultat` varchar(255) NOT NULL,
  `content_resultat` longtext NOT NULL,
  `content2_resultat` longtext NOT NULL,
  `date_resultat` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultatmatch`
--

INSERT INTO `resultatmatch` (`num_resultat`, `lib_resultat`, `content_resultat`, `content2_resultat`, `date_resultat`) VALUES
(1, 'D2 et D5', 'Victoire 18 - 2 de Bonchamp 1 (D2) contre Soulgé/Argentré 2', 'Victoire 15 - 3 de Bonchamp 2 (D5) contre Sacé/Martigné 6', 'Vendredi 07 février 2020');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`num_compet`),
  ADD KEY `id_photocompet` (`id_photocompet`);

--
-- Index pour la table `entrainement`
--
ALTER TABLE `entrainement`
  ADD PRIMARY KEY (`num_entrainement`),
  ADD KEY `photobureau` (`id_photobureau`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`num_equipe`),
  ADD KEY `id_photoequipe` (`id_photoequipe`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`num_evenement`),
  ADD KEY `id_photoevenement` (`id_photoevenement`);

--
-- Index pour la table `illustration`
--
ALTER TABLE `illustration`
  ADD PRIMARY KEY (`id_illustration`);

--
-- Index pour la table `lasalle`
--
ALTER TABLE `lasalle`
  ADD PRIMARY KEY (`num_salle`),
  ADD KEY `id_photosalle` (`id_photosalle`);

--
-- Index pour la table `lebureau`
--
ALTER TABLE `lebureau`
  ADD PRIMARY KEY (`num_bureau`),
  ADD KEY `photobureau` (`id_photobureau`);

--
-- Index pour la table `mediaa`
--
ALTER TABLE `mediaa`
  ADD PRIMARY KEY (`num_media`),
  ADD KEY `id_photomedia` (`id_photomedia`);

--
-- Index pour la table `photobureau`
--
ALTER TABLE `photobureau`
  ADD PRIMARY KEY (`id_photobureau`);

--
-- Index pour la table `photocompet`
--
ALTER TABLE `photocompet`
  ADD PRIMARY KEY (`id_photocompet`);

--
-- Index pour la table `photoequipe`
--
ALTER TABLE `photoequipe`
  ADD PRIMARY KEY (`id_photoequipe`);

--
-- Index pour la table `photoevenement`
--
ALTER TABLE `photoevenement`
  ADD PRIMARY KEY (`id_photoevenement`);

--
-- Index pour la table `photomedia`
--
ALTER TABLE `photomedia`
  ADD PRIMARY KEY (`id_photomedia`);

--
-- Index pour la table `photosalle`
--
ALTER TABLE `photosalle`
  ADD PRIMARY KEY (`id_photosalle`);

--
-- Index pour la table `prixlicence`
--
ALTER TABLE `prixlicence`
  ADD PRIMARY KEY (`num_prixlicence`);

--
-- Index pour la table `prochainmatch`
--
ALTER TABLE `prochainmatch`
  ADD PRIMARY KEY (`num_match`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `illustration` (`id_illustration`);

--
-- Index pour la table `resultatmatch`
--
ALTER TABLE `resultatmatch`
  ADD PRIMARY KEY (`num_resultat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `illustration`
--
ALTER TABLE `illustration`
  MODIFY `id_illustration` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `prochainmatch`
--
ALTER TABLE `prochainmatch`
  MODIFY `num_match` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `resultatmatch`
--
ALTER TABLE `resultatmatch`
  MODIFY `num_resultat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
