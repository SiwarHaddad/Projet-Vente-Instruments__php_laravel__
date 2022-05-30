-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 19 mai 2022 à 14:08
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `music_store`
--
CREATE DATABASE IF NOT EXISTS `music_store` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `music_store`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idCategorie` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelleCategorie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageCategorie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idCategorie`, `libelleCategorie`, `imageCategorie`, `created_at`, `updated_at`) VALUES
(1, 'Pianos', 'cat_piano.jpg', '2022-05-18 19:19:16', '2022-05-18 19:19:16'),
(2, 'Guitares', 'cat_guitare.jpg', '2022-05-18 19:19:44', '2022-05-18 19:19:44'),
(3, 'Cordes', 'cat_violon.jpg', '2022-05-18 19:20:04', '2022-05-18 19:20:04'),
(4, 'Percussions', 'cat_percussion.jpg', '2022-05-18 19:20:16', '2022-05-18 19:20:16'),
(5, 'Vents', 'cat_vent.jpg', '2022-05-18 19:20:29', '2022-05-18 19:20:29'),
(6, 'Orientals', 'cat_oriental.jpg', '2022-05-18 19:20:41', '2022-05-18 19:20:41');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `numCommande` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `acteurCommande` int(10) UNSIGNED NOT NULL,
  `dateCommande` datetime NOT NULL,
  `totalPrix` decimal(9,3) NOT NULL,
  `statusCommande` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`numCommande`),
  KEY `fk_CommandeClient` (`acteurCommande`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`numCommande`, `acteurCommande`, `dateCommande`, `totalPrix`, `statusCommande`, `created_at`, `updated_at`) VALUES
(8, 4, '2022-05-19 11:29:20', '39999.000', 'En cours', '2022-05-19 09:29:20', '2022-05-19 09:29:20'),
(9, 4, '2022-05-19 13:36:36', '39999.000', 'En cours', '2022-05-19 11:36:36', '2022-05-19 11:36:36'),
(10, 4, '2022-05-19 13:57:39', '450.000', 'En cours', '2022-05-19 11:57:39', '2022-05-19 11:57:39');

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

DROP TABLE IF EXISTS `factures`;
CREATE TABLE IF NOT EXISTS `factures` (
  `numCommande` int(10) UNSIGNED NOT NULL,
  `facture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`numCommande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `factures`
--

INSERT INTO `factures` (`numCommande`, `facture`, `created_at`, `updated_at`) VALUES
(8, 'facture8.pdf', '2022-05-19 09:35:10', '2022-05-19 09:35:10'),
(9, 'facture9.pdf', '2022-05-19 11:36:58', '2022-05-19 11:36:58'),
(10, 'facture10.pdf', '2022-05-19 11:57:58', '2022-05-19 11:57:58');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `instruments`
--

DROP TABLE IF EXISTS `instruments`;
CREATE TABLE IF NOT EXISTS `instruments` (
  `idInstrument` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelleInstrument` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionInstrument` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorieInstrument` int(10) UNSIGNED NOT NULL,
  `marqueInstrument` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageInstrument` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantiteDispoInstrument` int(11) NOT NULL,
  `prixInstrument` decimal(8,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idInstrument`),
  KEY `fk_InstrumentCategorie` (`categorieInstrument`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `instruments`
--

INSERT INTO `instruments` (`idInstrument`, `libelleInstrument`, `descriptionInstrument`, `categorieInstrument`, `marqueInstrument`, `imageInstrument`, `quantiteDispoInstrument`, `prixInstrument`, `created_at`, `updated_at`) VALUES
(1, 'grand-piano-151-cm-yamaha-blanc-verni-avec-banquette', 'grand-piano-151-cm-yamaha-blanc-verni-avec-banquette', 1, 'YAMAHA', 'grand-piano-151-cm-yamaha-blanc-verni-avec-banquette.jpg', 2, '39999.000', '2022-05-18 19:21:34', '2022-05-18 19:21:34'),
(2, 'grand-piano-151-cm-yamaha-noir-verni-avec-banquette', 'grand-piano-151-cm-yamaha-noir-verni-avec-banquette', 1, 'YAMAHA', 'grand-piano-151-cm-yamaha-noir-verni-avec-banquette.jpg', 3, '39999.000', '2022-05-18 19:22:07', '2022-05-18 19:22:07'),
(3, 'guitare-electrique-sterling-cutlass-ct30-sss-daphne-blue', 'guitare-electrique-sterling-cutlass-ct30-sss-daphne-blue', 2, 'DAPHNE', 'guitare-electrique-sterling-cutlass-ct30-sss-daphne-blue.jpg', 5, '450.000', '2022-05-18 19:22:36', '2022-05-18 19:23:34'),
(4, 'guitare-elctro-classique-yamaha-cgx122mcc', 'guitare-elctro-classique-yamaha-cgx122mcc', 2, 'YAMAHA', 'guitare-elctro-classique-yamaha-cgx122mcc.jpg', 3, '550.000', '2022-05-18 19:23:17', '2022-05-18 19:23:17');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commandes`
--

DROP TABLE IF EXISTS `ligne_commandes`;
CREATE TABLE IF NOT EXISTS `ligne_commandes` (
  `numCommandeL` int(10) UNSIGNED NOT NULL,
  `idInstrumentL` int(10) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`numCommandeL`,`idInstrumentL`),
  KEY `fk_LigneCommandeInstrument` (`idInstrumentL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ligne_commandes`
--

INSERT INTO `ligne_commandes` (`numCommandeL`, `idInstrumentL`, `quantite`, `created_at`, `updated_at`) VALUES
(8, 1, 1, '2022-05-19 09:29:20', '2022-05-19 09:29:20'),
(9, 1, 1, '2022-05-19 11:36:37', '2022-05-19 11:36:37'),
(10, 3, 1, '2022-05-19 11:57:39', '2022-05-19 11:57:39');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(50, '2014_10_12_000000_create_users_table', 7),
(42, '2014_10_12_100000_create_password_resets_table', 5),
(43, '2019_08_19_000000_create_failed_jobs_table', 5),
(44, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(17, '2022_05_16_171028_create_instruments_table', 2),
(45, '2022_05_16_132044_create_categories_table', 5),
(46, '2022_05_16_190307_create_instruments_table', 5),
(47, '2022_05_18_193116_create_commandes_table', 5),
(33, '2022_05_18_210420_create_ligne_commandes_table', 4),
(48, '2022_05_18_210711_create_ligne_commandes_table', 5),
(49, '2022_05_19_021133_create_factures_table', 6),
(51, '2022_05_19_130014_create_etudiants_table', 8);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomUser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telUser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresseUser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `nomUser`, `prenomUser`, `email`, `telUser`, `email_verified_at`, `password`, `adresseUser`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'user1', 'user1', 'user1@user', '1111111', NULL, '$2y$10$V1v0SrrbDUWbkPRpjNHcKeUj1Z7q8yd5LvwNCCKfSZCMkzg8G.K.q', 'adresseUser1', 0, NULL, '2022-05-19 05:59:12', '2022-05-19 05:59:12'),
(4, 'adminaa', 'admin', 'admin@admin', '00000000', NULL, '$2y$10$gZ2aYpWeIKpB0AIYsys66ecHb6KhgK6bWGveEV6BgMsDdwDwQAF86', 'adresseAdmin', 1, NULL, '2022-05-19 07:00:57', '2022-05-19 11:59:02');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `fk_CommandeClient` FOREIGN KEY (`acteurCommande`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `fk_CommandeFacture` FOREIGN KEY (`numCommande`) REFERENCES `commandes` (`numCommande`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `instruments`
--
ALTER TABLE `instruments`
  ADD CONSTRAINT `fk_InstrumentCategorie` FOREIGN KEY (`categorieInstrument`) REFERENCES `categories` (`idCategorie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ligne_commandes`
--
ALTER TABLE `ligne_commandes`
  ADD CONSTRAINT `fk_CommandeLigneCommande` FOREIGN KEY (`numCommandeL`) REFERENCES `commandes` (`numCommande`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_LigneCommandeInstrument` FOREIGN KEY (`idInstrumentL`) REFERENCES `instruments` (`idInstrument`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
