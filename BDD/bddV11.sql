-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 07 avr. 2023 à 17:55
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
CREATE DATABASE IF NOT EXISTS `sae_401` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sae_401`;

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

DROP TABLE IF EXISTS `booking`;
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

DROP TABLE IF EXISTS `carte_cadeau`;
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
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_titre` text NOT NULL,
  `faq_rep` text NOT NULL,
  `faq_titre_eng` text NOT NULL,
  `faq_rep_eng` text NOT NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_titre`, `faq_rep`, `faq_titre_eng`, `faq_rep_eng`) VALUES
(1, 'Pouvons-nous amener notre chien ?', 'Bien sûr. Il est tout à fait possible de venir faire nos aventures avec vos compagnons à quatre pattes. Toutes nos aventures se déroulent sur des sentiers publics dans la nature. Passer 2 à 3 heures dans les vignes ou dans la forêt est un plaisir pour tous les quadrupèdes. Veuillez simplement suivre la règle de tenir votre animal en laisse, comme prescrit par l\'office forestier.', 'Can we bring our dog?', 'Of course. It is perfectly possible to come and do our adventures with your four-legged companions. All of our adventures take place on public trails in nature. Spending 2 to 3 hours in the vineyards or in the forest is a pleasure for all quadrupeds. Please simply follow the rule of keeping your animal on a leash, as prescribed by the forestry office.'),
(2, 'Est-ce que les enfants coûtent un supplément ?', 'Jusqu\'à 13 ans, les enfants peuvent participer gratuitement à la visite. À partir de 14 ans, les adolescents paient le plein tarif. (Sauf pour l\'aventure \"Le livre des 7 sceaux\", veuillez lire ci-dessous)', 'Do children cost extra?', 'Children up to 13 years old can participate in the tour for free. From 14 years old, teenagers pay the full price. (Except for the adventure \"Book of 7 Seals\", please read below)'),
(3, 'Que se passe-t-il quand il pleut ?', 'En cas de fortes pluies, vous pouvez reporter gratuitement l\'aventure à une date ultérieure disponible. Il suffit de nous contacter par téléphone ou par e-mail pour nous informer de la date souhaitée.', 'What happens if it rains?', 'In case of heavy rain, you can reschedule the adventure to another available date free of charge. Simply call or email us to let us know the desired date.');

-- --------------------------------------------------------

--
-- Structure de la table `faq_sujet`
--

DROP TABLE IF EXISTS `faq_sujet`;
CREATE TABLE IF NOT EXISTS `faq_sujet` (
  `faqsj_idsujet` int(11) NOT NULL,
  `faqsj_titre` text,
  `Faqsj_rep` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `game_id` int(11) NOT NULL,
  `game_genre` enum('drame','fantastique','suspens') DEFAULT NULL,
  `game_duree` int(11) DEFAULT NULL,
  `game_lieu` varchar(50) DEFAULT NULL,
  `game_id_pack` int(11) DEFAULT NULL,
  `game_categorie` enum('familial','novice','amateur','expert') DEFAULT NULL,
  `game_nbjoueur` int(11) DEFAULT NULL,
  `game_environnement` varchar(50) DEFAULT NULL,
  `game_environnementeng` varchar(50) NOT NULL,
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

INSERT INTO `game` (`game_id`, `game_genre`, `game_duree`, `game_lieu`, `game_id_pack`, `game_categorie`, `game_nbjoueur`, `game_environnement`, `game_environnementeng`, `game_nom`, `game_nomeng`, `game_description`, `game_decriptioneng`, `game_prix`, `game_parcours`, `game_nbenigme`, `game_latitude`, `game_longitude`, `game_prix_3`, `game_prix_4`, `game_prix_5`, `game_prix_6`, `game_prix_7`, `game_prix_8`, `game_prix_9`, `game_prix_10`, `game_prix_11`, `game_prix_12`, `game_prix_groupe`) VALUES
(1, 'fantastique', 2, 'Brocéliande', NULL, 'familial', 2, 'Forêt', 'Forest', 'La quête du Graal', 'The Quest for the Holy Grail', 'Bienvenue dans l\'escape game en extérieur \"La Quête du Graal\" situé dans la magnifique forêt de Brocéliande. Vous êtes plongés dans un univers fantastique où vous incarnez des chevaliers de la table ronde. Votre mission : retrouver le Graal et sauver le royaume.\r\n\r\nLe jeu se déroule en extérieur, au cœur de la forêt légendaire de Brocéliande. Vous serez immergés dans un univers magique, rempli de mystères et d\'énigmes à résoudre. Vous devrez être prêts à faire face à toutes sortes de défis et d\'obstacles pour atteindre votre but.\r\n\r\nLa quête du Graal est une aventure palpitante qui vous emmènera à travers les paysages époustouflants de la forêt de Brocéliande. Vous devrez faire preuve de courage, de ruse et de perspicacité pour triompher des épreuves qui se dresseront sur votre chemin.\r\n\r\nLes énigmes magiques que vous devrez résoudre seront en lien avec les légendes et les histoires de la forêt de Brocéliande, ainsi qu\'avec les chevaliers de la table ronde. Vous devrez également faire appel à votre sens de l\'observation pour trouver des indices cachés dans le décor naturel.\r\n\r\nVous serez équipés d\'une carte et d\'un livret contenant les indices nécessaires pour avancer dans votre quête. Mais attention, le temps presse ! Vous n\'aurez que quelques heures pour retrouver le Graal avant que le royaume ne sombre dans le chaos.\r\n\r\nLa Quête du Graal est une expérience immersive inoubliable, qui plaira à tous les amateurs d\'aventure, de mystère et de magie. Alors, êtes-vous prêts à vous lancer dans cette quête légendaire ? Venez vivre l\'aventure de votre vie dans la forêt de Brocéliande !', 'Welcome to the outdoor escape game \"The Quest for the Holy Grail\" located in the magnificent forest of Brocéliande. You are immersed in a fantastic universe where you play as knights of the Round Table. Your mission: to find the Holy Grail and save the kingdom.\r\n\r\nThe game takes place outdoors, in the heart of the legendary forest of Brocéliande. You will be immersed in a magical universe, filled with mysteries and puzzles to solve. You will need to be ready to face all kinds of challenges and obstacles to reach your goal.\r\n\r\nThe Quest for the Holy Grail is an exciting adventure that will take you through the stunning landscapes of the forest of Brocéliande. You will need to be brave, cunning, and insightful to overcome the trials that stand in your way.\r\n\r\nThe magical puzzles you will need to solve will be related to the legends and stories of the forest of Brocéliande, as well as to the Knights of the Round Table. You will also need to rely on your powers of observation to find clues hidden in the natural scenery.\r\n\r\nYou will be equipped with a map and a booklet containing the necessary clues to advance in your quest. But beware, time is running out! You will only have a few hours to find the Holy Grail before the kingdom falls into chaos.\r\n\r\nThe Quest for the Holy Grail is an unforgettable immersive experience that will appeal to all adventure, mystery, and magic lovers. So are you ready to embark on this legendary quest? Come and live the adventure of your life in the forest of Brocéliande!', 2.5, 5.2, 1, '48.014214', '-2.184391', 69, 91, 114, 135, 158, 178, 219, 240, 261, 299, 0),
(2, 'drame', 3, 'Rangen', NULL, 'novice', 6, 'Vignoble', 'Vineyard', 'Vinum Crimen', 'Vinum Crimen', 'Bienvenue dans l\'escape game \"Vinum Crimen\" situé dans les magnifiques vignes alsaciennes. Vous êtes transportés dans l\'Antiquité, à une époque où les Romains produisaient du vin dans cette région.\r\n\r\nVotre mission sera de résoudre le meurtre mystérieux du centurion romain, qui a été retrouvé mort dans les vignes. Vous devrez fouiller les lieux du crime, interroger des suspects et rassembler des indices pour découvrir l\'identité du meurtrier.\r\n\r\nL\'escape game vous plongera dans un univers historique fascinant, où vous pourrez en apprendre davantage sur la vie des Romains en Alsace, ainsi que sur les techniques de production de vin de l\'époque. Vous devrez être prêts à faire face à toutes sortes de défis et d\'obstacles pour atteindre votre but.\r\n\r\nVous serez équipés d\'une carte et d\'un livret contenant les indices nécessaires pour avancer dans votre quête. Mais attention, le temps presse ! Vous n\'aurez que quelques heures pour résoudre le meurtre avant que le coupable ne s\'échappe.\r\n\r\nL\'escape game est une expérience immersive inoubliable, qui plaira à tous les amateurs d\'enquête et de suspense. Vous pourrez même déguster quelques-uns des meilleurs vins alsaciens à la fin de votre aventure, tout en discutant de la résolution de l\'affaire.\r\n\r\nAlors, êtes-vous prêts à vivre une aventure unique dans les vignes alsaciennes de l\'Antiquité ? Venez résoudre le meurtre mystérieux du centurion romain dans l\'escape game \"Vinum Crimen\" !', 'Welcome to \"Vinum Crimen\" escape game located in the beautiful Alsace vineyards. You\'ll be transported back in time to when the Romans produced wine in this region.\r\n\r\nYour mission is to solve the mysterious murder of a Roman centurion who was found dead in the vineyards. You\'ll need to search the crime scene, interrogate suspects, and gather clues to uncover the identity of the killer.\r\n\r\nThe escape game will immerse you in a fascinating historical world where you can learn about the lives of Romans in Alsace and the wine production techniques of that time. You\'ll need to be ready to face all kinds of challenges and obstacles to achieve your goal.\r\n\r\nYou\'ll be provided with a map and booklet containing the clues you need to progress through the game. But beware, time is running out! You\'ll only have a few hours to solve the murder before the culprit escapes.\r\n\r\nThe escape game is an unforgettable immersive experience that will appeal to all fans of mystery and suspense. You can even taste some of the best Alsace wines at the end of your adventure while discussing the case resolution.\r\n\r\nSo, are you ready for a unique adventure in the ancient Alsace vineyards? Come and solve the mysterious murder of the Roman centurion in the \"Vinum Crimen\" escape game!', 5.765, 4, 3, '47.812', '7.109', 75, 99, 122, 145, 168, 190, 211, 232, 253, 274, 295),
(3, 'suspens', 1, 'Buchberg', NULL, 'expert', 6, 'Forêt', 'Forest', 'La Forêt des Ombres', 'The Forest of Shadows', 'Bienvenue dans \"La Forêt des Ombres\", l\'escape game en extérieur qui va vous faire vivre une expérience angoissante et palpitante. Vous serez plongés dans une forêt abandonnée, remplie de secrets et de mystères qui ne demandent qu\'à être découverts.\r\n\r\nVotre mission sera de résoudre les énigmes et les épreuves que vous rencontrerez sur votre chemin pour sortir de la forêt. Mais attention, l\'obscurité et les ombres vous guettent, et les bruits étranges qui vous entourent ne feront qu\'augmenter votre angoisse.\r\n\r\nVous vous retrouverez dans des décors effrayants et abandonnés, où la nature a repris ses droits. Des indices vous permettront de progresser dans votre quête, mais vous devrez être perspicaces et observateurs pour les trouver.\r\n\r\nLe jeu vous réservera de nombreuses surprises et des retournements de situation inattendus qui vous feront douter de tout ce que vous avez vu jusqu\'à présent. Vous devrez garder la tête froide et faire preuve d\'esprit d\'équipe pour sortir de cette forêt sains et saufs.\r\n\r\n\"La Forêt des Ombres\" est un escape game en extérieur unique en son genre, qui plaira à tous ceux qui recherchent une expérience palpitante et angoissante. Le nom de l\'escape game vous donne une idée de ce qui vous attend : des ombres qui vous traqueront et des secrets qui ne demandent qu\'à être révélés.\r\n\r\nÊtes-vous prêts à affronter vos peurs et à découvrir les secrets de \"La Forêt des Ombres\" ? Venez tenter l\'aventure et repoussez vos limites dans cet escape game en extérieur à suspens !', 'Welcome to \"The Forest of Shadows,\" the outdoor escape game that will give you a thrilling and suspenseful experience. You will be plunged into an abandoned forest, filled with secrets and mysteries just waiting to be discovered.\r\n\r\nYour mission will be to solve the puzzles and challenges that you encounter along the way to escape the forest. But beware, the darkness and shadows are watching, and the strange noises that surround you will only increase your anxiety.\r\n\r\nYou will find yourself in frightening and abandoned settings where nature has taken over. Clues will help you progress in your quest, but you will need to be sharp and observant to find them.\r\n\r\nThe game will surprise you with unexpected twists and turns that will make you doubt everything you have seen so far. You will need to keep a cool head and work as a team to escape the forest safely.\r\n\r\n\"The Forest of Shadows\" is a unique outdoor escape game that will appeal to anyone looking for a thrilling and suspenseful experience. The name of the escape game gives you an idea of what to expect: shadows that will stalk you and secrets waiting to be revealed.\r\n\r\nAre you ready to face your fears and discover the secrets of \"The Forest of Shadows\"? Come and try the adventure and push your limits in this suspenseful outdoor escape game!', 2.3445, 4, 1, '47.57', '8.56', 89, 114, 138, 163, 187, 210, 234, 257, 280, 303, 303);

-- --------------------------------------------------------

--
-- Structure de la table `pack`
--

DROP TABLE IF EXISTS `pack`;
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

DROP TABLE IF EXISTS `panier`;
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

DROP TABLE IF EXISTS `review`;
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

DROP TABLE IF EXISTS `user`;
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
