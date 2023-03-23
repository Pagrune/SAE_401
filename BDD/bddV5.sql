-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 23 mars 2023 à 11:42
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.27

drop database if exists sae_401;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE database sae_401;
use sae_401;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae_401`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `resa_id` int(11) NOT NULL,
  `resa_horaire` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `resa_idgame` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `carte_cadeau`
--

CREATE TABLE `carte_cadeau` (
  `carte_id` int(11) NOT NULL,
  `carte_client_id` int(11) NOT NULL,
  `carte_value` float NOT NULL,
  `carte_code` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `carte_cadeau`
--

INSERT INTO `carte_cadeau` (`carte_id`, `carte_client_id`, `carte_value`, `carte_code`) VALUES
(1, 1, 1, ''),
(6, 1, 22, '1'),
(7, 1, 24, 'vIyzBEkICqoN'),
(8, 1, 24, '7v999o5poNlW');

-- --------------------------------------------------------

--
-- Structure de la table `faq_sujet`
--

CREATE TABLE `faq_sujet` (
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

CREATE TABLE `game` (
  `game_id` int(11) NOT NULL,
  `game_genre` enum('drame','fantastique','suspens') DEFAULT NULL,
  `game_duree` int(11) DEFAULT NULL,
  `game_lieu` varchar(50) DEFAULT NULL,
  `game_id_pack` int(11) DEFAULT NULL,
  `game_categorie` enum('novice','amateur','expert') DEFAULT NULL,
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
  `game_longitude` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`game_id`, `game_genre`, `game_duree`, `game_lieu`, `game_id_pack`, `game_categorie`, `game_nbjoueur`, `game_environnement`, `game_nom`, `game_nomeng`, `game_description`, `game_decriptioneng`, `game_prix`, `game_parcours`, `game_nbenigme`, `game_latitude`, `game_longitude`) VALUES
(1, '', 1, 'mulhouse ville', NULL, 'expert', 2, 'ville', 'test Anthony n°1', 'Test ANthony ANG n°1', 'en gros je teste pour voir si ca marche ', 'same, i am testing the DB', 2.5, 3.8, 2, '', ''),
(2, 'suspens', 1, 'azerty', NULL, 'novice', 2, 'azerty', 'azerty', 'azerty', 'azerty', 'azerty', 2, 2.5, 1, '', ''),
(2, 'suspens', 1, 'azerty', NULL, 'novice', 2, 'azerty', 'azerty', 'azerty', 'azerty', 'azerty', 2, 2.5, 1, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `pack`
--

CREATE TABLE `pack` (
  `pack_id` int(11) NOT NULL,
  `pack_description` text,
  `pack_descriptioneng` text,
  `pack_nom` text,
  `pack_nbgame` int(11) DEFAULT NULL,
  `pack_prix` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_id_game` int(11) DEFAULT NULL,
  `review_message` text,
  `review_note` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nom` varchar(50) DEFAULT NULL,
  `user_pays` varchar(20) NOT NULL,
  `user_adresse` varchar(50) NOT NULL,
  `user_telephone` varchar(16) NOT NULL,
  `user_ville` varchar(16) NOT NULL,
  `user_codepostal` int(5) NOT NULL,
  `user_prenom` varchar(20) NOT NULL,
  `user_mdp` varchar(100) DEFAULT NULL,
  `user_mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_nom`, `user_pays`, `user_adresse`, `user_telephone`, `user_ville`, `user_codepostal`, `user_prenom`, `user_mdp`, `user_mail`) VALUES
(1, 'test', '', '', '', '', 0, 'test', 'test_mdp', 'test@mail.test'),
(2, 'test2', '', '', '', '', 0, 'test2', 'test2_mdp', 'test2@mail.test2'),
(3, 't', 't', 't', '1', 't', 1, 't', 't', 't@email.test'),
(4, 't', 't', 't', 't', 't', 21, 't', 'test', 'test@test.test'),
(5, 't', 't', 't', 't', 't', 21, 't', 'test', 'test@test.test'),
(6, 'T', 't', 't', 't', 't', 12, 't', 'test', 'test@test.test'),
(7, 'a', 'a', 'a', 'a', 'a', 123, 'a', 'a', 'a@a.a');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carte_cadeau`
--
ALTER TABLE `carte_cadeau`
  ADD PRIMARY KEY (`carte_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carte_cadeau`
--
ALTER TABLE `carte_cadeau`
  MODIFY `carte_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
