-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 mars 2021 à 14:30
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inscription`
--

-- --------------------------------------------------------

--
-- Structure de la table `bac`
--

CREATE TABLE `bac` (
  `code_bac` int(10) UNSIGNED NOT NULL,
  `lib_bac` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bac`
--

INSERT INTO `bac` (`code_bac`, `lib_bac`) VALUES
(0, 'Sans Bac'),
(1, 'Agriculture'),
(2, 'Architecture'),
(3, 'Arts et Industrie Graphique'),
(4, 'Arts Plastiques'),
(5, 'Bac C'),
(6, 'Bac D'),
(7, 'Bac E'),
(8, 'Bac F'),
(9, 'Bac G'),
(10, 'Bac Mission'),
(11, 'Batiments et Travaux Publiques'),
(12, 'Capacit'),
(13, 'Chimie'),
(14, 'Chimie Industrielle'),
(15, 'Comptabilit'),
(16, 'Economie nouvelle'),
(17, 'Electrochimie'),
(18, 'Electronique'),
(19, 'Electrotechnique'),
(20, 'Fabrication M'),
(21, 'Fonderie'),
(22, 'Froid et Climatisation'),
(23, 'Hotoli'),
(24, 'Lettres'),
(25, 'Lettres Modernes Bilingues'),
(26, 'Lettres Originelles'),
(27, 'Lettres Originelles Arabis'),
(28, 'Math'),
(29, 'M'),
(30, 'M'),
(31, 'Micro-M'),
(32, 'Sciences Agronomiques'),
(33, 'Sciences de la Nature'),
(34, 'Sciences Economiques'),
(35, 'Sciences Exp'),
(36, 'Sciences Exp'),
(37, 'Sciences Math'),
(38, 'Sciences Techniques'),
(39, 'Secr'),
(40, 'Section Anglaise'),
(41, 'Section Espagnole'),
(42, 'Techniques Commerciales'),
(43, 'Techniques Industrielles'),
(44, 'Techniques Quantitatives de Gestion'),
(45, 'Autres'),
(46, 'Construction M'),
(47, 'Bac S'),
(48, 'Bac A'),
(49, 'Bac Technique'),
(50, 'Techniques de Gestion Administrative'),
(51, 'Techniques de Gestion Comptable'),
(52, 'Techniques Organisation Administrative'),
(53, 'Techniques Organisation Comptable'),
(54, 'G'),
(55, 'G'),
(56, 'G'),
(57, 'Informatique'),
(58, 'Gestion Bureau'),
(59, 'Beaux Arts'),
(98, 'S'),
(99, 'Bac Etranger'),
(100, 'Charia'),
(101, 'Lettres Modernes Arabis'),
(102, 'G'),
(103, 'Lettres Sp'),
(104, 'Education physique'),
(105, 'Sciences'),
(106, 'Techniques'),
(107, 'Lettres Modernes'),
(109, 'Conception et batiment'),
(110, 'Lettres Modernes Sp'),
(111, 'Lettres Modernes Sp'),
(112, 'Sciences Exp'),
(113, 'Sciences Exp'),
(114, 'Sciences Exp'),
(115, 'Sciences Exp'),
(116, 'Sciences Exp'),
(117, 'Sciences Math'),
(118, 'Sciences Math'),
(119, 'Sciences Math'),
(120, 'Lettres Modernes Sp'),
(121, 'Lettres Modernes Sp'),
(201, 'Sciences et T'),
(202, 'Physique Chimie'),
(203, 'Sciences de gestion Comp'),
(204, 'Sciences de la Vie et de la Terre'),
(205, 'Langue Arabe'),
(206, 'Lettres Et SC Humaines'),
(207, 'Sciences Humaines'),
(208, 'Sc. Eco. Et Gestion'),
(209, 'Sc. Et Techno. Electri');

-- --------------------------------------------------------

--
-- Structure de la table `bac_etudiant`
--

CREATE TABLE `bac_etudiant` (
  `code_etudiant` int(10) UNSIGNED NOT NULL,
  `code_bac` int(10) UNSIGNED NOT NULL,
  `code_men` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `annee_obt_bac` int(10) UNSIGNED NOT NULL,
  `code_etb` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE `etablissement` (
  `code_etb` int(10) UNSIGNED NOT NULL,
  `lib_etb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`code_etb`, `lib_etb`) VALUES
(1, 'LYCEE ETRANGER'),
(2, 'LYCEE LIBRE DE L\'ACADEMIE OUED EDDHAB'),
(3, 'LYCEE LIBRE DE L\'ACADEMIE LAAYOUNE'),
(4, 'LYCEE LIBRE DE L\'ACADEMIE GUELMIM'),
(5, 'LYCEE LIBRE DE L\'ACADEMIE SOUSS'),
(6, 'LYCEE LIBRE DE L\'ACADEMIE DU GHARB'),
(7, 'LYCEE LIBRE DE L\'ACADEMIE CHAOUIA'),
(8, 'LYCEE LIBRE DE L\'ACADEMIE MARRAKECH'),
(9, 'LYCEE LIBRE DE L\'ACADEMIE OUJDA'),
(10, 'LYCEE LIBRE DE L\'ACADEMIE DU CASA'),
(11, 'LYCEE LIBRE DE L\'ACADEMIERABAT'),
(12, 'LYCEE LIBRE ACADEMIE DOUKALA-ABDA'),
(13, 'LYCEE LIBRE ACADEMIE TADLA-AZILAL'),
(14, 'LYCEE LIBRE DE L\'ACADEMIE MEKNES'),
(15, 'LYCEE LIBRE ACADEMIE FES-BOULMANE'),
(16, 'LYCEE LIBRE ACADEMIE AL HOUCEIMA'),
(17, 'LYCEE LIBRE DE L\'ACADEMIE TANGER'),
(18, 'LYCEE MILITAIRE'),
(19, 'LYCEE MISSION'),
(20, 'LYCEE PUBLIC DE L\'ACADEMIE OUED EDDHAB'),
(21, 'LYCEE PUBLIC DE L\'ACADEMIE LAAYOUNE'),
(22, 'LYCEE PUBLIC DE L\'ACADEMIE GUELMIM'),
(23, 'LYCEE PUBLIC DE L\'ACADEMIE SOUSS'),
(24, 'LYCEE PUBLIC DE L\'ACADEMIE DU GHARB'),
(25, 'LYCEE PUBLIC DE L\'ACADEMIE CHAOUIA'),
(26, 'LYCEE PUBLIC DE L\'ACADEMIE MARRAKECH'),
(27, 'LYCEE PUBLIC DE L\'ACADEMIE OUJDA'),
(28, 'LYCEE PUBLIC DE L\'ACADEMIE DU CASA'),
(29, 'LYCEE PUBLIC DE L\'ACADEMIE RABAT'),
(30, 'LYCEE PUBLIC DE L\'ACADEMIE DOUKALA-ABDA'),
(31, 'LYCEE PUBLIC DE L\'ACADEMIE TADLA-AZILAL'),
(32, 'LYCEE PUBLIC DE L\'ACADEMIE MEKNES'),
(33, 'LYCEE PUBLIC ACADEMIE FES-BOULMANE'),
(34, 'LYCEE PUBLIC DE L\'ACADEMIE AL HOUCEIMA'),
(35, 'LYCEE PUBLIC DE L\'ACADEMIE TANGER'),
(36, 'LYCEE PRIVE DE L\'ACADEMIE OUED EDDHAB'),
(37, 'LYCEE PRIVE DE L\'ACADEMIE LAAYOUNE'),
(38, 'LYCEE PRIVE DE L\'ACADEMIE GUELMIM'),
(39, 'LYCEE PRIVE DE L\'ACADEMIE SOUSS'),
(40, 'LYCEE PRIVE DE L\'ACADEMIE DU GHAR'),
(41, 'LYCEE PRIVE DE L\'ACADEMIE CHAOUIA'),
(42, 'LYCEE PRIVE DE L\'ACADEMIE MARRAKECH'),
(43, 'LYCEE PRIVE DE L\'ACADEMIE OUJDA'),
(44, 'LYCEE PRIVE DE L\'ACADEMIE DU CASA'),
(45, 'LYCEE PRIVE DE L\'ACADEMIE RABAT'),
(46, 'LYCEE PRIVE DE L\'ACADEMIE DOUKALA-ABDA'),
(47, 'LYCEE PRIVE ACADEMIE TADLA-AZILAL'),
(48, 'LYCEE PRIVE DE L\'ACADEMIE MEKNES'),
(49, 'LYCEE PRIVE ACADEMIE FES-BOULMANE'),
(50, 'LYCEE PRIVE DE L\'ACADEMIE AL HOUCEIMA'),
(51, 'LYCEE PRIVE DE L\'ACADEMIE TANGER');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `code_etudiant` int(10) UNSIGNED NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `date_naissance` datetime DEFAULT NULL,
  `ville_naissance` varchar(45) DEFAULT NULL,
  `situation_familliale` varchar(15) DEFAULT NULL,
  `cne` int(10) UNSIGNED NOT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `code_pro` int(3) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`code_etudiant`, `nom`, `prenom`, `sexe`, `date_naissance`, `ville_naissance`, `situation_familliale`, `cne`, `adresse`, `code_pro`, `tel`, `photo`) VALUES
(5, 'ACHAHBOUN', 'EL-MEHDI', NULL, NULL, '', NULL, 1487455438, NULL, NULL, NULL, NULL),
(7, 'ADA', 'HICHAM', NULL, NULL, '', NULL, 1487455440, NULL, NULL, NULL, NULL),
(8, 'AGHMANE', 'AZEDDINE', NULL, NULL, '', NULL, 1487455441, NULL, NULL, NULL, NULL),
(9, 'AGUEZZAR', 'IMANE', NULL, NULL, '', NULL, 1487455442, NULL, NULL, NULL, NULL),
(10, 'AIT CHAIB', 'WALID', NULL, NULL, '', NULL, 1487455443, NULL, NULL, NULL, NULL),
(11, 'AIT EL MAATI', 'NADYA', NULL, NULL, '', NULL, 1487455444, NULL, NULL, NULL, NULL),
(12, 'ALMOUHAK', 'KAOUTAR', NULL, NULL, '', NULL, 1487455445, NULL, NULL, NULL, NULL),
(13, 'AMARA', 'FATIMA ZAHRAE', NULL, NULL, '', NULL, 1487455446, NULL, NULL, NULL, NULL),
(14, 'AMEZYANE', 'ZINEB', NULL, NULL, '', NULL, 1487455447, NULL, NULL, NULL, NULL),
(15, 'AMMINOU', 'MAHA', NULL, NULL, '', NULL, 1487455448, NULL, NULL, NULL, NULL),
(16, 'AQIQ', 'MARYAME', NULL, NULL, '', NULL, 1487455449, NULL, NULL, NULL, NULL),
(17, 'ARKIZA', 'MARIAM', NULL, NULL, '', NULL, 1487455450, NULL, NULL, NULL, NULL),
(18, 'AROUADA', 'YASSIR', NULL, NULL, '', NULL, 1487455451, NULL, NULL, NULL, NULL),
(19, 'ASSASSI', 'HOUDA', NULL, NULL, '', NULL, 1487455452, NULL, NULL, NULL, NULL),
(20, 'ASSIMI', 'CHAIMAA', NULL, NULL, '', NULL, 1487455453, NULL, NULL, NULL, NULL),
(21, 'ATAR', 'WIAME', NULL, NULL, '', NULL, 1487455454, NULL, NULL, NULL, NULL),
(22, 'ATIR', 'LAILA', NULL, NULL, '', NULL, 1487455455, NULL, NULL, NULL, NULL),
(23, 'AYYAD', 'MOHAMMED AMINE', NULL, NULL, '', NULL, 1487455456, NULL, NULL, NULL, NULL),
(24, 'AZREG', 'AYMAN', NULL, NULL, '', NULL, 1487455457, NULL, NULL, NULL, NULL),
(25, 'BAHBABI', 'ZAKARIA', NULL, NULL, '', NULL, 1487455458, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `mention`
--

CREATE TABLE `mention` (
  `cod_men` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lib_men` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mention`
--

INSERT INTO `mention` (`cod_men`, `lib_men`) VALUES
('1', 'Assez Bien'),
('2', 'Bien'),
('3', 'Honorable'),
('4', 'Passable'),
('5', 'Trés Bien'),
('6', 'Trés Honorable');

-- --------------------------------------------------------

--
-- Structure de la table `province`
--

CREATE TABLE `province` (
  `code_pro` int(3) NOT NULL,
  `lib_pro` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `province`
--

INSERT INTO `province` (`code_pro`, `lib_pro`) VALUES
(1, 'AGADIR IDDA OUTANANE'),
(2, 'OUARZAZATE'),
(3, 'TIZNIT'),
(4, 'EL KELAA DES SRAGHNA'),
(5, 'ESSAOUIRA'),
(6, 'MARRAKECH'),
(7, 'SAFI'),
(8, 'BENI MELLAL'),
(10, 'MOHAMMEDIA'),
(11, 'EL JADIDA'),
(13, 'KHOURIBGA'),
(16, 'SETTAT'),
(17, 'BEN SLIMANE'),
(18, 'KHEMISSET'),
(20, 'KENITRA'),
(21, 'SIDI KACEM'),
(26, 'RABAT'),
(27, 'TANGER'),
(28, 'TETOUAN'),
(29, 'CHEFCHAOUEN'),
(30, 'LARACHE'),
(32, 'FES'),
(33, 'SEFROU'),
(34, 'AL HOCEIMA'),
(35, 'TAOUNATE'),
(37, 'ERRACHIDIA'),
(38, 'ZAGOURA'),
(39, 'KHENIFRA'),
(40, 'EL FAHS ANJRA'),
(41, 'MEKNES'),
(42, 'EL-HAJEB (MEKNES)'),
(43, 'EL MADIEQ'),
(44, 'OUJDA ANGADE'),
(45, 'BERKANE'),
(46, 'NADOR'),
(47, 'TAZA'),
(48, 'NOUASSER'),
(49, 'TAROUDANNT'),
(50, 'AZILAL'),
(53, 'IFRANE'),
(57, 'CHTOUKA AIT BAHA (AGADIR)'),
(58, 'INEZGANE AIT MELLOUL(AGADIR)'),
(59, 'MY RCHID'),
(61, 'BOULEMANE'),
(62, 'HAY HASSANI'),
(63, 'MEDIOUNA'),
(64, 'CASABLANCA ANFA'),
(65, 'BEN M\'SICK'),
(66, 'AIN SEBAA HAY MOHAMMEDI (CASA)'),
(67, 'AIN CHOCK'),
(68, 'ES-SEMARA'),
(69, 'BOUJDOUR'),
(70, 'OUED ED DAHAB'),
(71, 'LAAYOUNE'),
(72, 'FIGUIG'),
(73, 'GUELMIM'),
(74, 'TAN-TAN'),
(75, 'TATA'),
(76, 'SALE'),
(77, 'SKHIRATE-TEMARA'),
(83, 'TAOURIRT (OUJDA)'),
(84, 'JERRADA (OUJDA)'),
(87, 'AL FIDA DERB SULTAN (CASA)'),
(90, 'MOULAY-YACOUB (FES)'),
(91, 'SIDI BERNOUSSI ZENATA'),
(92, 'AL HAOUZ (MARRAKECH)'),
(95, 'CHICHAOUA'),
(96, 'ASSA-ZAG');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bac`
--
ALTER TABLE `bac`
  ADD PRIMARY KEY (`code_bac`);

--
-- Index pour la table `bac_etudiant`
--
ALTER TABLE `bac_etudiant`
  ADD PRIMARY KEY (`code_etudiant`,`code_bac`,`code_etb`),
  ADD KEY `code_bac` (`code_bac`),
  ADD KEY `code_etb` (`code_etb`),
  ADD KEY `code_men` (`code_men`);

--
-- Index pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`code_etb`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`code_etudiant`),
  ADD KEY `code_pro` (`code_pro`);

--
-- Index pour la table `mention`
--
ALTER TABLE `mention`
  ADD PRIMARY KEY (`cod_men`);

--
-- Index pour la table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`code_pro`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `code_etudiant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bac_etudiant`
--
ALTER TABLE `bac_etudiant`
  ADD CONSTRAINT `bac_etudiant_ibfk_1` FOREIGN KEY (`code_etudiant`) REFERENCES `etudiants` (`code_etudiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bac_etudiant_ibfk_2` FOREIGN KEY (`code_bac`) REFERENCES `bac` (`code_bac`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bac_etudiant_ibfk_3` FOREIGN KEY (`code_etb`) REFERENCES `etablissement` (`code_etb`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bac_etudiant_ibfk_4` FOREIGN KEY (`code_men`) REFERENCES `mention` (`cod_men`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_ibfk_1` FOREIGN KEY (`code_pro`) REFERENCES `province` (`code_pro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
