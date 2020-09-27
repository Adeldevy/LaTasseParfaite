-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 27 sep. 2020 à 20:30
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tasseparfaite`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mdp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'toto', 'ti', 'dtr@h.com', '$2y$12$8gXnaST7O5OsEFIpLEf4IuEXOpwLS1jJHHe2YCpNVxZMwvbY7i91q'),
(2, 'BELKHIRI', 'adel', 'adel@g.fr', '$2y$12$1uVfcgjp12FDvhTToe.D7uEAZuhD8cGf35Ok3wCnqMAh6VjSfAbyC'),
(3, 'tata', 'toto', 'a@gmail.com', '$2y$12$y0FM7VUrHO4Q9JEjJ.YlDutCZrFq2Mtb9.BXYEg1G1rQiNaFAqrOm'),
(4, 'toto', 'tata', 'br@gmail.fr', '$2y$12$9pjT2OxxKbG.0TnZNHFA.Os23WX.kR7BZtAqVtzJowRYeOAK44IaC'),
(5, 'jean', 'adcel', 'adrt@gmail.com', '$2y$12$78JrIT8LoHozyVgz87RR3uNfOzYN94bMNco/tyQzg1l04i664NQ5i');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
