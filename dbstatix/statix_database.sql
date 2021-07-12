-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 12 juil. 2021 à 03:59
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `statix_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `statix_database`
--

CREATE TABLE `statix_database` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(150) COLLATE utf8_bin NOT NULL,
  `activite` varchar(50) COLLATE utf8_bin NOT NULL,
  `etablissement` varchar(50) COLLATE utf8_bin NOT NULL,
  `filiere` varchar(50) COLLATE utf8_bin NOT NULL,
  `niveau` varchar(25) COLLATE utf8_bin NOT NULL,
  `freq` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `statix_database`
--

INSERT INTO `statix_database` (`id`, `nom`, `prenom`, `activite`, `etablissement`, `filiere`, `niveau`, `freq`, `date`) VALUES
(72, 'Rakotonirina', 'Raja', 'Connexion', 'CNTEMAD', 'Informatique', 'L3BDGL', 7, '2021-07-11 18:36:36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `statix_database`
--
ALTER TABLE `statix_database`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `statix_database`
--
ALTER TABLE `statix_database`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
