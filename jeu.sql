-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 09 mars 2021 à 14:51
-- Version du serveur :  10.1.47-MariaDB-0+deb9u1
-- Version de PHP : 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeu`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_ commentaire` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL,
  `Message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_ commentaire`, `id_user`, `id_jeu`, `Message`) VALUES
(18, 13, 1, 'test'),
(17, 13, 1, 'test'),
(16, 13, 1, 'super'),
(15, 10, 1, '2158');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_message` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prénom` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE `jeux` (
  `id_jeux` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Image` text NOT NULL,
  `Image2` text NOT NULL,
  `Image3` text NOT NULL,
  `Image4` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`id_jeux`, `Nom`, `Image`, `Image2`, `Image3`, `Image4`, `Description`) VALUES
(1, 'Rocket league', 'Rocket_League_coverart.jpg', 'Rocket-League-5.jpg', 'Rocket-League-Psyonix.jpg', 'baa1aba27ad3df2ec4cd47ed6bceea3a.jpg', 'Rocket League est un jeu vidéo de sport développé et édité par Psyonix3. Il sort en juillet 2015 sur Windows et sur PlayStation 4, en février 2016 sur Xbox One, en septembre 2016 sur Linux et Mac et en novembre 2017 sur Nintendo Switch.\r\n\r\nLe jeu est inspiré du football : deux équipes, composées de un à quatre joueurs conduisant des véhicules, s\'affrontent au cours d\'un match afin de frapper un ballon et de marquer dans le but adverse. Les voitures sont équipées de propulseurs (boost) et peuvent sauter, permettant de jouer le ballon dans les airs. Des mises à jour du jeu incluent également d\'autres modes de jeu, se rapprochant du basket-ball ou du hockey sur glace.'),
(2, 'Counter Strike', 'Counterstrike.png', 'csgo.jpg', 'quest-ce-que-le-bogue-du-spectateur-dans-csgo.webp', 'csgo-gameplay-ban-twitch-cheating.jpg', 'Counter-Strike: Global Offensive (abrégé CS:GO) est un jeu de tir à la première personne multijoueur en ligne basé sur le jeu d\'équipe développé par Valve Corporation. Il est sorti le 21 août 2012 sur PC et consoles (Xbox 360, PlayStation 3). En 2017, Microsoft annonce que le jeu sur Xbox 360 sera compatible avec la Xbox One. Depuis le 6 décembre 2018, le jeu est disponible gratuitement en free-to-play.\r\nIl s\'agit du mode original de Counter-Strike. Dans Global Offensive, il est composé lui-même de deux modes, qui sont l\'Occasionnel et le Compétitif.\r\n\r\nLe fonctionnement de base est identique aux autres versions de Counter-Strike : les joueurs sont divisés en deux équipes, les terroristes et les antiterroristes.'),
(4, 'Left 4 Dead 2', 'Left4Dead2.jpg', 'Play-Left-4-Dead-2-Step-26.jpg', '354055bde139310d66c7652433183.jpg', '3735139-screenshot2020-09-16at10.37.34am.jpg', 'Left 4 Dead 2 (littéralement « Laissés pour morts aussi »), abrégé L4D2, est un jeu de tir à la première personne développé par Valve et sorti en novembre 2009. Il met en scène une équipe de quatre survivants qui traversent un monde rempli de zombies appelés « infectés ».\r\n\r\nC\'est la suite de Left 4 Dead, sorti un an plus tôt. Le gameplay est similaire, mais enrichi de nouveaux types d\'infectés, de nouvelles armes et de nouveaux modes de jeu. Depuis la sortie de l\'extension Cold Stream en 2012, le jeu contient l\'ensemble des campagnes des deux opus.'),
(5, 'Payday 2', 'payday2.jpg', 'maxresdefault.jpg', 'payday-2-vr.jpg', 'payday-2-crimewave-edition-xbox-one-3.jpg', 'Payday 2 est un jeu vidéo en mode coopératif et solo de tir à la première personne développé par Overkill Software. C\'est la suite de Payday: The Heist (2011). Il est sorti en août 2013 sur Xbox 360 via Xbox Live Arcade, sur PlayStation 3 via PlayStation Network, sur Windows et sur Linux via Steam. Le jeu est également sorti sur support physique. Une version appelée Crimewave Edition est sortie le 12 juin 2015 sur PlayStation 4 et sur Xbox One. Une version Nintendo Switch est sortie en février 2018.'),
(6, 'Tom clancy\'s rainbow six siege', 'rainbow.png', 'image_cover.jpg', '12-1-2015_14_1_1.jpg', 'tom-clancys-rainbow-sixr-siege2017-10-16-16-16-9.jpg', 'Rainbow Six: Siege est un jeu de tir tactique où le joueur incarne différents agents de plusieurs unités de forces spéciales et de groupes d\'interventions qui constituent l’équipe Rainbow. Comme les autres titres de la série, il se concentre fortement sur le jeu en équipe et le \"réalisme\" des interventions. Cependant, il existe de grandes différences par rapport à d\'anciennes versions du jeu, avec un accent multijoueur important et des environnements entièrement destructibles. En tout, 10 cartes, le SWAT américain, le SAS anglais, le GSG 9 allemand, les Spetsnaz russes et le GIGN français sont disponibles lors de la sortie du jeu. Actuellement, 24 unités d\'interventions et 21 cartes sont disponibles dans Tom Clancy’s Rainbow Six: Siege.');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id_note` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `id_user`, `id_jeu`, `note`) VALUES
(4, 13, 1, 5),
(3, 10, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `Nom_user` varchar(30) NOT NULL,
  `Mdp` varchar(30) NOT NULL,
  `Admin` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `Nom_user`, `Mdp`, `Admin`) VALUES
(9, 'duval ', '123', 'FALSE'),
(10, 'admin ', '123', 'FALSE'),
(12, 'kylian ', '123', 'FALSE'),
(13, 'Louis ', 'motdepassesecure', 'FALSE'),
(14, 'test ', 'test', 'FALSE');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_ commentaire`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`id_jeux`);
ALTER TABLE `jeux` ADD FULLTEXT KEY `Description` (`Description`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_ commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `id_jeux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
