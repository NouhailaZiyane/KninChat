-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 15 mars 2021 à 20:18
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `centreint`
--

CREATE TABLE `centreint` (
  `id_int` int(100) NOT NULL,
  `id_utilisateur` int(100) NOT NULL,
  `lib_sujet` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `centreint`
--

INSERT INTO `centreint` (`id_int`, `id_utilisateur`, `lib_sujet`) VALUES
(1, 1, 'Journalistes'),
(2, 1, 'Business news'),
(3, 1, 'Sports Locaux'),
(4, 2, 'Journalistes'),
(5, 2, 'Arts and culture'),
(7, 2, 'Actualites General'),
(8, 2, 'Drawing and illustration'),
(9, 3, 'Journalistes'),
(10, 3, 'Politique'),
(11, 3, 'Politiciens'),
(14, 4, 'Actualites General'),
(15, 4, 'Architecture'),
(16, 4, 'Politiciens'),
(17, 4, 'Politique'),
(21, 5, 'Music events'),
(27, 5, 'Actualites Internationale'),
(28, 5, 'Drawing and illustration'),
(29, 5, 'Animation studios'),
(30, 6, 'Animation studios'),
(31, 6, 'Drawing and illustration');

-- --------------------------------------------------------

--
-- Structure de la table `follow`
--

CREATE TABLE `follow` (
  `id_follow` int(100) NOT NULL,
  `id_utilisateur` int(100) NOT NULL,
  `following` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `follow`
--

INSERT INTO `follow` (`id_follow`, `id_utilisateur`, `following`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 3, 2),
(4, 4, 3),
(8, 1, 2),
(9, 1, 3),
(10, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id_message` int(100) NOT NULL,
  `id_utilisateur` int(100) NOT NULL,
  `friend` int(100) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_msg` int(100) NOT NULL,
  `id_utilisateur` int(100) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_msg`, `id_utilisateur`, `message`) VALUES
(1, 3, 'When  @POTUS  was elected, he said help was on the wayâ€”and he delivered. The American Rescue Plan is landmark legislation that will ring through generations, lifting up families and beating back this pandemic. '),
(2, 1, 'hello'),
(3, 1, 'On participe ce soir Ã  la T2RCUP. Un tournoi caritatif sur le mode club pro diffusÃ© sur eSportFA'),
(4, 5, 'Congrats Best Song Written For Visual Media winner - \'NO TIME TO DIE [FROM NO TIME TO DIE]\'  @billieeilish   and  @finneas  Ã‰tincelles #GRAMMYs '),
(5, 6, 'WEâ€™RE GOOD video is OUT NOW!!! Thank you to everyone who worked so hard to bring this video to life. HomardHomardHomardHomard #WereGood'),
(6, 6, 'FUTURE NOSTALGIA IS PLATINUM IN THE US!!! ++ DONâ€™T START NOW 4X PLATINUM & LEVITATING WENT PLATINUM TOOOOOO!! THANK YOU'),
(7, 6, 'STUDIO 2054 IS BACKÃ‰tincellesSymbole pleine lune  Stream #Studio2054 available from tomorrow on  @livenowglobal  + get access to a never-before-seen documentary taking you behind the scenes FusÃ©e  early bird price today only on http://dualipa.com');

-- --------------------------------------------------------

--
-- Structure de la table `retweeter`
--

CREATE TABLE `retweeter` (
  `id_ret` int(100) NOT NULL,
  `id_utilisateur` int(100) NOT NULL,
  `nomf` varchar(50) NOT NULL,
  `photo` varchar(60) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `lib_sujet` varchar(60) NOT NULL,
  `categorie_sujet` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sujet`
--

INSERT INTO `sujet` (`lib_sujet`, `categorie_sujet`) VALUES
('2D animation', 'Arts & culture'),
('3D animation', 'Arts & culture'),
('Accounting', 'Careers'),
('Actualites General', 'Actualites'),
('Actualites Internationale', 'Actualites '),
('Adventure travel', 'Travel'),
('Advertising', 'Careers'),
('animals', 'outdoors'),
('Animated films', 'Arts & culture'),
('Animation studios', 'Arts & culture'),
('Architecture', 'Careers'),
('art and culture news', 'news'),
('Arts and culture', 'Arts & culture'),
('Astronauts', 'Careers'),
('beauty', 'fashion and beauty'),
('Business and finance', 'Business & finance'),
('Business media', 'Business & finance'),
('Business news', 'Business & finance'),
('Careers', 'Careers'),
('Celebrities ', 'Entertainment'),
('College life', 'Careers'),
('Comedy', 'Entertainment'),
('Computer programming', 'technology'),
('Construction', 'Careers'),
('Cooking', 'Food'),
('Cryptocurrencies', 'technology'),
('Cuisines ', 'Food'),
('data science', 'technology'),
('Destinations', 'Travel'),
('Drawing and illustration', 'Arts & culture'),
('Education', 'Careers'),
('Entertainment events', 'Entertainment '),
('events Movies and TV ', 'Entertainment '),
('events Music events', 'Entertainment '),
('Fitness', 'Fashion & beauty'),
('Football', 'Sports'),
('Game development', 'Gaming'),
('Gaming', 'Gaming'),
('Gaming consoles', 'Gaming'),
('Gaming influencers', 'Gaming'),
('gaming news', 'news'),
('Graduate school', 'Careers'),
('health news', 'news'),
('Home & family', 'Home & family'),
('Homeschooling', 'Careers'),
('Information security', 'technology'),
('Job searching & networking', 'Careers'),
('Journalistes', 'Actualites '),
('Language learning', 'Careers'),
('Marketing', 'Careers'),
('Music events', 'Entertainment'),
('music news', 'news'),
('Online education', 'Careers'),
('operating system', 'technology'),
('Podcasts & radio', 'Entertainment'),
('Politiciens', 'Gouvernement & Politique'),
('Politique', 'Gouvernement & Politique'),
('Smart technology', 'technology'),
('Sports Locaux', 'Sports'),
('Tech personalities', 'technology'),
('Transportation', 'Travel');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `tele` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_naissance` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `bio` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `tele`, `email`, `date_naissance`, `password`, `photo`, `bio`) VALUES
(1, 'Joe Biden', 0, 'joebiden@gmail.com', '20Nov.1942', 'joebiden1942', 'Joe Biden20Nov.jpg', 'Husband to @DrBiden, proud father and grandfather. Ready to build back better for all Americans. Official account is @POTUS.'),
(2, 'Ariana Grande', 0, 'ArianaGrande@gmail.com', '26Jui.1993', 'ArianaGrande1993', 'Ariana Grande26Jui.jpg', 'positions'),
(3, 'Barack Obama', 0, 'BarackObama@gmail.com', '4Aout.1961', 'BarackObama1961', 'Barack Obama4Aout.jpg', 'Dad, husband, President, citizen.\r\n'),
(4, 'Emmanuel Macron', 0, 'EmmanuelMacron@gmail.com', '21DÃ©c.1977', 'EmmanuelMacron1977', 'Emmanuel Macron21Dec.jpg', 'PrÃ©sident de la RÃ©publique franÃ§aise.'),
(5, 'Billie Eilish', 0, 'BillieEilish@gmail.com', '18Dec.2001', 'BillieEilish2001', 'Billie Eilish18Dec.jpg', 'WHEN WE ALL FALL ASLEEP, WHERE DO WE GO? https://smarturl.it/BILLIEALBUM | â€œTherefore I Amâ€ https://smarturl.it/ThereforeIAm'),
(6, 'DUA LIPA', 0, 'DUALIPA@gmail.com', '22Aout.1995', 'DUALIPA1995', 'DUA LIPA22Aout.jpg', 'FUTURE NOSTALGIA');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `centreint`
--
ALTER TABLE `centreint`
  ADD PRIMARY KEY (`id_int`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_utilisateur_2` (`id_utilisateur`),
  ADD KEY `lib_sujet` (`lib_sujet`) USING BTREE;

--
-- Index pour la table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id_follow`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_msg`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `retweeter`
--
ALTER TABLE `retweeter`
  ADD PRIMARY KEY (`id_ret`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`lib_sujet`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `centreint`
--
ALTER TABLE `centreint`
  MODIFY `id_int` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `follow`
--
ALTER TABLE `follow`
  MODIFY `id_follow` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_msg` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `retweeter`
--
ALTER TABLE `retweeter`
  MODIFY `id_ret` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `centreint`
--
ALTER TABLE `centreint`
  ADD CONSTRAINT `centreint_ibfk_2` FOREIGN KEY (`lib_sujet`) REFERENCES `sujet` (`lib_sujet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `centreint_ibfk_3` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `retweeter`
--
ALTER TABLE `retweeter`
  ADD CONSTRAINT `retweeter_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
