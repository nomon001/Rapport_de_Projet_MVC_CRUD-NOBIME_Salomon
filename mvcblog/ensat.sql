-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 12 juin 2022 à 14:38
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensat`
--

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `user_id` int(11) NOT NULL,
  `CNE` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Adresse` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Ville` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`user_id`, `CNE`, `Nom`, `Prenom`, `Adresse`, `Ville`, `Email`) VALUES
(1, 'junior2022', 'John', 'junior', 'ValFleuri', 'Tanger', 'junior@test.com'),
(1, 'merveille2022', 'Nobime', 'merveile', 'Boukhalef', 'Tanger', 'merveile@test.com'),
(1, 'mohamed2022', 'John', 'mohamed', 'iberia', 'tanger', 'mohamed@test.com'),
(1, 'Oppe2022', 'Nobime', 'Oppe', 'Branes', 'Tanger', 'oppe@test2.com'),
(1, 'Robert2022', 'John', 'Robert', 'boukhalef', 'tanger', 'robert@test.com'),
(1, 'salomon2022', 'NOBIME', 'Salomon', 'boukhalef', 'Tanger', 'salomon@test.com'),
(1, 'stecy2022', 'John', 'Stecy', 'Boukhalef', 'Tanger', 'Stecy@test.com'),
(1, 'yasser2022', 'John', 'yasser', 'Branes', 'Tanger', 'yasser@test.com'),
(1, 'Yassine', 'John', 'Yassine', 'mesnana', 'tanger', 'yassine@test.com');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'oppe', 'oppe@test.com', '$2y$10$cXTDjQrszc6k4vlkN8nWUuwIsl0957kLwuc6NLQ1U2UQQwPhTQ4ue'),
(2, 'admin', 'admin@test.com', '$2y$10$5jxXbmJd4Eu8eeo7.tx15.9P8/USoRBhxPJ9spgoiTELuZH8rGpNG'),
(3, 'admin2', 'admin2@test.com', '$2y$10$HKR1KrQbnwcCuanESKbh1OdAEC0v6dnnhVYKSJBX.u9skxGX8Cl.e'),
(4, 'admin3', 'admin3@test.com', '$2y$10$91K2O3bHdNhGiindD5qcw.xFyoH2TaIF8ar/AwPgdIho.fXHU4JUK'),
(5, 'admin4', 'admin4@test.com', '$2y$10$.CwA21jwxLRTQBJc8JUrce4SYW1oLo4z6yps2wVktzrdF/kaQxLFO');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`CNE`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
