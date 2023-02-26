-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : exodialperso.mysql.db
-- Généré le : dim. 26 fév. 2023 à 19:09
-- Version du serveur : 5.7.41-log
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exodialperso`
--

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `vie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`id`, `pseudo`, `vie`) VALUES
(1, 'eXo aKa l\'As', 100),
(3, 'faufau', 100),
(4, 'DVL_DAMS', 100),
(5, 'BlunnaX', 100);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
