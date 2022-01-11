-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-kylian-duval.alwaysdata.net
-- Generation Time: Jan 11, 2022 at 11:26 AM
-- Server version: 10.5.11-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kylian-duval_jeu`
--

-- --------------------------------------------------------

--
-- Table structure for table `jeux`
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
-- Dumping data for table `jeux`
--

INSERT INTO `jeux` (`id_jeux`, `Nom`, `Image`, `Image2`, `Image3`, `Image4`, `Description`) VALUES
(1, 'Rocket league', 'Rocket_League_coverart.jpg', 'Rocket-League-5.jpg', 'Rocket-League-Psyonix.jpg', 'baa1aba27ad3df2ec4cd47ed6bceea3a.jpg', 'Rocket League est un jeu vidéo de sport développé et édité par Psyonix3. Il sort en juillet 2015 sur Windows et sur PlayStation 4, en février 2016 sur Xbox One, en septembre 2016 sur Linux et Mac et en novembre 2017 sur Nintendo Switch.\r\n\r\nLe jeu est inspiré du football : deux équipes, composées de un à quatre joueurs conduisant des véhicules, s\'affrontent au cours d\'un match afin de frapper un ballon et de marquer dans le but adverse. Les voitures sont équipées de propulseurs (boost) et peuvent sauter, permettant de jouer le ballon dans les airs. Des mises à jour du jeu incluent également d\'autres modes de jeu, se rapprochant du basket-ball ou du hockey sur glace.'),
(2, 'Counter Strike', 'Counterstrike.png', 'csgo.jpg', 'quest-ce-que-le-bogue-du-spectateur-dans-csgo.webp', 'csgo-gameplay-ban-twitch-cheating.jpg', 'Counter-Strike: Global Offensive (abrégé CS:GO) est un jeu de tir à la première personne multijoueur en ligne basé sur le jeu d\'équipe développé par Valve Corporation. Il est sorti le 21 août 2012 sur PC et consoles (Xbox 360, PlayStation 3). En 2017, Microsoft annonce que le jeu sur Xbox 360 sera compatible avec la Xbox One. Depuis le 6 décembre 2018, le jeu est disponible gratuitement en free-to-play.\r\nIl s\'agit du mode original de Counter-Strike. Dans Global Offensive, il est composé lui-même de deux modes, qui sont l\'Occasionnel et le Compétitif.\r\n\r\nLe fonctionnement de base est identique aux autres versions de Counter-Strike : les joueurs sont divisés en deux équipes, les terroristes et les antiterroristes.'),
(4, 'Left 4 Dead 2', 'Left4Dead2.jpg', 'Play-Left-4-Dead-2-Step-26.jpg', '354055bde139310d66c7652433183.jpg', '3735139-screenshot2020-09-16at10.37.34am.jpg', 'Left 4 Dead 2 (littéralement « Laissés pour morts aussi »), abrégé L4D2, est un jeu de tir à la première personne développé par Valve et sorti en novembre 2009. Il met en scène une équipe de quatre survivants qui traversent un monde rempli de zombies appelés « infectés ».\r\n\r\nC\'est la suite de Left 4 Dead, sorti un an plus tôt. Le gameplay est similaire, mais enrichi de nouveaux types d\'infectés, de nouvelles armes et de nouveaux modes de jeu. Depuis la sortie de l\'extension Cold Stream en 2012, le jeu contient l\'ensemble des campagnes des deux opus.'),
(5, 'Payday 2', 'payday2.jpg', 'maxresdefault.jpg', 'payday-2-vr.jpg', 'payday-2-crimewave-edition-xbox-one-3.jpg', 'Payday 2 est un jeu vidéo en mode coopératif et solo de tir à la première personne développé par Overkill Software. C\'est la suite de Payday: The Heist (2011). Il est sorti en août 2013 sur Xbox 360 via Xbox Live Arcade, sur PlayStation 3 via PlayStation Network, sur Windows et sur Linux via Steam. Le jeu est également sorti sur support physique. Une version appelée Crimewave Edition est sortie le 12 juin 2015 sur PlayStation 4 et sur Xbox One. Une version Nintendo Switch est sortie en février 2018.'),
(6, 'Tom clancy\'s rainbow six siege', 'rainbow.png', 'image_cover.jpg', '12-1-2015_14_1_1.jpg', 'tom-clancys-rainbow-sixr-siege2017-10-16-16-16-9.jpg', 'Rainbow Six: Siege est un jeu de tir tactique où le joueur incarne différents agents de plusieurs unités de forces spéciales et de groupes d\'interventions qui constituent l’équipe Rainbow. Comme les autres titres de la série, il se concentre fortement sur le jeu en équipe et le \"réalisme\" des interventions. Cependant, il existe de grandes différences par rapport à d\'anciennes versions du jeu, avec un accent multijoueur important et des environnements entièrement destructibles. En tout, 10 cartes, le SWAT américain, le SAS anglais, le GSG 9 allemand, les Spetsnaz russes et le GIGN français sont disponibles lors de la sortie du jeu. Actuellement, 24 unités d\'interventions et 21 cartes sont disponibles dans Tom Clancy’s Rainbow Six: Siege.'),
(7, 'Grand Theft Auto V', 'gta.png', 'GTA-V-big-890x501.jpg', '801x410_d56be-593356900.jpg', '200.gif', 'Grand Theft Auto V (plus communément abrégé GTA V) est un jeu vidéo d\'action-aventure, développé par Rockstar North et édité par Rockstar Games. Il est sorti en 2013 sur PlayStation 3 et Xbox 360, en 2014 sur PlayStation 4 et Xbox One puis en 2015 sur PC. Le jeu fait partie de la série vidéoludique Grand Theft Auto.\r\n\r\nCet épisode se déroule dans l\'État fictif de San Andreas en Californie du Sud. L\'histoire solo suit trois protagonistes?: le braqueur de banque à la retraite Michael De Santa, le gangster Franklin Clinton et le trafiquant de drogue et d\'armes Trevor Philips, et leurs braquages sous la pression d\'une agence gouvernementale corrompue et de puissants criminels. Le jeu en monde ouvert permet aux joueurs de parcourir librement la campagne ouverte de San Andreas et la ville fictive de Los Santos, basée sur Los Angeles.'),
(9, 'hitman 3', 'hitman3.png', 'B9725927528Z.1_20210125174318_000+G6HHFM919.2-0.jpg', 'Landscape-2560x1440-bd7696342eacc951048c0765a204f371.jpg', '1597741042-9381-card.jpg', 'Hitman 3 est un jeu vidéo d\'action-aventure et d\'infiltration développé et édité par IO Interactive, sorti le 20 janvier 2021 sur PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series. Le jeu est également jouable sur Stadia et Nintendo Switch via le cloud gaming.\r\n\r\nTroisième et dernière partie de la trilogie World of Assassination, il fait suite aux jeux Hitman (2016) et Hitman 2 (2018). Les développeurs ont déclaré que le jeu sera « beaucoup plus mature, sérieux et sombre » que les précédents épisodes de la trilogie.'),
(10, 'Cyberpunk 2077', 'CYBERPUNK-2077.png', 'raw.jpg', 'cyberpunk2077.jpg', 'Cyberpunk_2077_website_1617083795450.jpg.jpeg', 'Cyberpunk 2077 est un jeu vidéo d\'action-RPG en vue à la première personne développé par CD Projekt RED, inspiré du jeu de rôle sur table Cyberpunk 2020 conçue par Mike Pondsmith. Le jeu présente un monde futuriste dystopique de type cyberpunk dans lequel la technologie coexiste avec une société humaine dégénérée');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`id_jeux`);
ALTER TABLE `jeux` ADD FULLTEXT KEY `Description` (`Description`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `id_jeux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
