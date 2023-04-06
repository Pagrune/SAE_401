-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 06 avr. 2023 à 15:57
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae_401`
--
drop DATABASE if exists sae_401;
CREATE DATABASE IF NOT EXISTS `sae_401` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sae_401`;

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `resa_id` int(11) NOT NULL AUTO_INCREMENT,
  `resa_horaire` longblob,
  `id_user` int(11) DEFAULT NULL,
  `resa_idgame` int(11) DEFAULT NULL,
  `resa_nbpersonne` tinyint(4) NOT NULL,
  `resa_date` varchar(15) NOT NULL,
  PRIMARY KEY (`resa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `carte_cadeau`
--

CREATE TABLE IF NOT EXISTS `carte_cadeau` (
  `carte_id` int(11) NOT NULL AUTO_INCREMENT,
  `carte_client_id` int(11) NOT NULL,
  `carte_value` float NOT NULL,
  `carte_code` varchar(12) NOT NULL,
  PRIMARY KEY (`carte_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `carte_cadeau`
--

INSERT INTO `carte_cadeau` (`carte_id`, `carte_client_id`, `carte_value`, `carte_code`) VALUES
(1, 1, 1, ''),
(6, 1, 22, '1'),
(7, 1, 24, 'vIyzBEkICqoN'),
(8, 1, 24, '7v999o5poNlW'),
(9, 1, 20, 'rymeaCjflswU');

-- --------------------------------------------------------

--
-- Structure de la table `faq_sujet`
--

CREATE TABLE IF NOT EXISTS `faq_sujet` (
  `faqsj_idsujet` int(11) NOT NULL,
  `faqsj_sujet` text,
  `faqsj_titre` text,
  `faqsj_description` text,
  `Faqsj_rep` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `game_id` int(11) NOT NULL,
  `game_genre` enum('drame','fantastique','suspens') DEFAULT NULL,
  `game_duree` int(11) DEFAULT NULL,
  `game_lieu` varchar(50) DEFAULT NULL,
  `game_id_pack` int(11) DEFAULT NULL,
  `game_categorie` enum('familial','novice','amateur','expert') DEFAULT NULL,
  `game_nbjoueur` int(11) DEFAULT NULL,
  `game_environnement` varchar(50) DEFAULT NULL,
  `game_nom` varchar(50) DEFAULT NULL,
  `game_nomeng` varchar(50) DEFAULT NULL,
  `game_description` text,
  `game_decriptioneng` text,
  `game_prix` float DEFAULT NULL,
  `game_parcours` float DEFAULT NULL,
  `game_nbenigme` tinyint(4) DEFAULT NULL,
  `game_latitude` varchar(10) NOT NULL,
  `game_longitude` varchar(10) NOT NULL,
  `game_prix_3` float NOT NULL,
  `game_prix_4` float NOT NULL,
  `game_prix_5` float NOT NULL,
  `game_prix_6` float NOT NULL,
  `game_prix_7` float NOT NULL,
  `game_prix_8` float NOT NULL,
  `game_prix_9` float NOT NULL,
  `game_prix_10` float NOT NULL,
  `game_prix_11` float NOT NULL,
  `game_prix_12` float NOT NULL,
  `game_prix_groupe` float NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`game_id`, `game_genre`, `game_duree`, `game_lieu`, `game_id_pack`, `game_categorie`, `game_nbjoueur`, `game_environnement`, `game_nom`, `game_nomeng`, `game_description`, `game_decriptioneng`, `game_prix`, `game_parcours`, `game_nbenigme`, `game_latitude`, `game_longitude`, `game_prix_3`, `game_prix_4`, `game_prix_5`, `game_prix_6`, `game_prix_7`, `game_prix_8`, `game_prix_9`, `game_prix_10`, `game_prix_11`, `game_prix_12`, `game_prix_groupe`) VALUES
(1, '', 1, 'mulhouse ville', NULL, 'familial', 2, 'ville', 'test Anthony n°1', 'Test ANthony ANG n°1', 'en gros je teste pour voir si ca marche ', 'same, i am testing the DB', 2.5, 3.8, 2, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'fantastique', 1, 'azerty', NULL, 'novice', 6, 'azerty', 'azerty', 'azerty', 'azerty', 'azerty', 5.765, 754.7, 5, '54', '86.23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'drame', 1, 'ytreza', NULL, 'expert', 6, 'azertyytreza', 'ytreza', 'ytreza', 'ytreza', 'ytreza', 2.3445, 2.54572, 1, '12345678', '32.76', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pack`
--

CREATE TABLE IF NOT EXISTS `pack` (
  `pack_id` int(11) NOT NULL,
  `pack_description` text,
  `pack_descriptioneng` text,
  `pack_nom` text,
  `pack_nbgame` int(11) DEFAULT NULL,
  `pack_prix` int(11) DEFAULT NULL,
  PRIMARY KEY (`pack_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `panier_elt` int(11) NOT NULL AUTO_INCREMENT,
  `panier_idgame` int(11) NOT NULL,
  `panier_date` varchar(15) NOT NULL,
  `panier_heure` int(11) NOT NULL,
  `panier_prix` float NOT NULL,
  `panier_nbpersonne` varchar(50) NOT NULL,
  `panier_id_client` int(11) DEFAULT NULL,
  `panier_session_client` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`panier_elt`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`panier_elt`, `panier_idgame`, `panier_date`, `panier_heure`, `panier_prix`, `panier_nbpersonne`, `panier_id_client`, `panier_session_client`) VALUES
(1, 1, '10/09/2023', 13, 12.9, '2', NULL, 'ufgufutytyttytfrtr'),
(2, 1, '08/04/2023', 10, 0, '6', 1, 'j2io1f8rphsfvkkh3vk43jdl21'),
(3, 1, '22/04/2023', 14, 0, '8', 1, 'j2io1f8rphsfvkkh3vk43jdl21'),
(4, 1, '01/04/2023', 10, 0, '2-3', NULL, 'p7fd87c4hr0jdtl40k0rkii56f'),
(5, 1, '14/04/2023', 14, 0, '6', NULL, 'p7fd87c4hr0jdtl40k0rkii56f'),
(6, 2, '12/04/2023', 12, 0, 'game_prix_9', NULL, 'p7fd87c4hr0jdtl40k0rkii56f');

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL,
  `review_id_game` int(11) DEFAULT NULL,
  `review_message` text,
  `review_note` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nom` varchar(50) DEFAULT NULL,
  `user_pays` varchar(20) NOT NULL,
  `user_adresse` varchar(50) NOT NULL,
  `user_telephone` varchar(16) NOT NULL,
  `user_ville` varchar(16) NOT NULL,
  `user_codepostal` int(5) NOT NULL,
  `user_prenom` varchar(20) NOT NULL,
  `user_mdp` varchar(100) DEFAULT NULL,
  `user_mail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_nom`, `user_pays`, `user_adresse`, `user_telephone`, `user_ville`, `user_codepostal`, `user_prenom`, `user_mdp`, `user_mail`) VALUES
(1, 'test', '', '', '', '', 0, 'test', 'test_mdp', 'test@mail.test'),
(2, 'test2', '', '', '', '', 0, 'test2', 'test2_mdp', 'test2@mail.test2'),
(3, 't', 't', 't', '1', 't', 1, 't', 't', 't@email.test'),
(4, 't', 't', 't', 't', 't', 21, 't', 'test', 'test@test.testaaaaaaa'),
(5, 't', 't', 't', 't', 't', 21, 't', 'test', 'test@test.testaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(6, 'T', 't', 't', 't', 't', 12, 't', 'test', 'test@test.testbbbbbb'),
(7, 'a', 'a', 'a', 'a', 'a', 123, 'a', 'a', 'a@a.a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
