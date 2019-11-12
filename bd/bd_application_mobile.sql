-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1:3306
-- Généré le :  Mar 15 Octobre 2019 à 22:20
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_application_mobile_5b7`
--

-- --------------------------------------------------------

--
-- Structure de la table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `prix` decimal(5,2) NOT NULL,
  `evaluation` int(2) DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `applications`
--

INSERT INTO `applications` (`id`, `name`, `description`, `prix`, `evaluation`, `file_id`, `created`, `modified`) VALUES
(2, 'Minecraft - Pocket Edition', '', '9.99', 0, NULL, '2019-09-16 16:28:18', '2019-09-16 16:28:18'),
(6, 'YouTube Music', 'Permet d\'écouter de la musique même avec le téléphone en mode veille.', '13.99', 0, NULL, '2019-10-09 18:08:27', '2019-10-09 18:08:27'),
(7, 'Dictionnaire Larousse - Edition Complete', 'Le dictionnaire Larousse digital avec dictionnaire de grammaire, synonyme et encyclopédie inclus.', '19.99', 5, NULL, '2019-10-09 18:11:54', '2019-10-09 18:11:54');

-- --------------------------------------------------------

--
-- Structure de la table `applications_users`
--

CREATE TABLE `applications_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

CREATE TABLE `evaluations` (
  `id` int(11) NOT NULL,
  `commentaires` varchar(255) DEFAULT NULL,
  `note` int(2) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `evaluations`
--

INSERT INTO `evaluations` (`id`, `commentaires`, `note`, `created`, `modified`) VALUES
(3, '446346', 5, '2019-10-07 16:13:56', '2019-10-07 16:13:56');

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `i18n`
--

CREATE TABLE `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `type_paiement_id` int(2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `numero_carte` char(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `paiements`
--

INSERT INTO `paiements` (`id`, `application_id`, `type_paiement_id`, `user_id`, `numero_carte`, `created`, `modified`) VALUES
(1, 2, 1, 1, '23408959082356', '2019-09-16 16:31:06', '2019-10-07 16:15:36'),
(4, 2, 1, 3, '23408959082356', '2019-10-09 17:48:12', '2019-10-09 17:48:12'),
(10, 2, 1, 1, '23408959082356', '2019-10-15 19:37:06', '2019-10-15 19:37:06');

-- --------------------------------------------------------

--
-- Structure de la table `types_paiements`
--

CREATE TABLE `types_paiements` (
  `id` int(2) NOT NULL,
  `typePaiement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `types_paiements`
--

INSERT INTO `types_paiements` (`id`, `typePaiement`) VALUES
(1, 'Débit'),
(2, 'Crédit'),
(3, 'Carte Cadeau');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `permissions` tinyint(4) NOT NULL DEFAULT '0',
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `permissions`, `username`, `password`, `email`, `created`, `modified`) VALUES
(1, 0, 'TestBoy3', '$2y$10$MGo9XleC3wdrBfneDo/05..U.EPZ3zACQq5z7AVQNcUsVH/P/DT1G', 'testboy@gmail.com', '0000-00-00 00:00:00', '2019-10-08 23:34:40'),
(3, 1, 'TestBoy2', '$2y$10$VQuAcCGe0YPTJ3.xJNvrBOwPAnfPX/daEurKG8qEPGMHqg2jNSZy6', 'testboy2@gmail.com', '2019-09-10 16:15:33', '2019-10-08 23:34:54'),
(5, 2, 'testboy4', '$2y$10$.Car0o1tRVoww2d5nRmX0uaM/7Um/SuTE2D5xE/BwjQ5jp1FqSGDe', 'testboy4@gmail.com', '2019-09-16 16:29:06', '2019-10-08 23:35:14');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_file_id` (`file_id`);

--
-- Index pour la table `applications_users`
--
ALTER TABLE `applications_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_application_id_applications_users` (`application_id`);

--
-- Index pour la table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_application_id_paiements` (`application_id`),
  ADD KEY `fk_type_paiement_id` (`type_paiement_id`),
  ADD KEY `fk_paiements_user_id` (`user_id`);

--
-- Index pour la table `types_paiements`
--
ALTER TABLE `types_paiements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `types_paiements`
--
ALTER TABLE `types_paiements`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `fk_file_id` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`);

--
-- Contraintes pour la table `applications_users`
--
ALTER TABLE `applications_users`
  ADD CONSTRAINT `fk_application_id_applications_users` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD CONSTRAINT `fk_application_id_paiements` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`),
  ADD CONSTRAINT `fk_paiements_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_type_paiement_id` FOREIGN KEY (`type_paiement_id`) REFERENCES `types_paiements` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
