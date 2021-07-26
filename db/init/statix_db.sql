-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 23 juil. 2021 à 08:29
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
-- Base de données : `statix_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `activityName` varchar(100) COLLATE utf8_bin NOT NULL,
  `activityFreq` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `etab`
--

CREATE TABLE `etab` (
  `id` int(11) NOT NULL,
  `etabName` varchar(100) COLLATE utf8_bin NOT NULL,
  `etabFreq` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id` int(11) NOT NULL,
  `filiereName` varchar(100) COLLATE utf8_bin NOT NULL,
  `filiereFreq` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `levelName` varchar(100) COLLATE utf8_bin NOT NULL,
  `levelFreq` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contact` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `etabEtu` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `filiereEtu` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `levelEtu` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `freqEtu` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etab`
--
ALTER TABLE `etab`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `etab`
--
ALTER TABLE `etab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
