-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 24 avr. 2022 à 23:43
-- Version du serveur :  8.0.17
-- Version de PHP :  7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `emploi`
--

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE `emploi` (
  `id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `date_ex` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_filiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`id`, `intitule`, `date_ex`, `id_user`, `id_filiere`) VALUES
(1, 'GINF 3', '2022-04-19', 2, 2),
(3, 'GI5', '2023-12-22', 2, 2),
(4, 'this', '2022-06-12', 2, 2),
(5, 'eettte', '2022-06-12', 2, 2),
(6, 'eettte', '2022-06-12', 2, 2),
(7, 'eettte', '2022-06-12', 2, 2),
(8, 'eettte', '2022-06-12', 2, 2),
(9, 'eettte', '2022-06-12', 2, 2),
(10, 'eettte', '2022-06-12', 2, 2),
(11, 'eettte', '2022-06-12', 2, 2),
(12, 'GE4', '2022-06-12', 2, 2),
(13, 'GE4', '2032-05-24', 2, 2),
(14, 'GE4', '2032-05-24', 3, 2),
(15, 'GE4', '2032-05-24', 3, 2),
(17, 'GE6', '2042-09-27', 5, 1),
(18, 'GEINHO', '0000-00-00', 3, 2),
(19, 'GEINHO', '0000-00-00', 3, 2),
(23, 'GE6', '2092-09-27', 5, 1),
(26, 'Geneviève', '2002-09-27', 5, 1),
(27, 'Hillow', '2002-09-27', 5, 1),
(28, 'GIOHN', '0000-00-00', 3, 2),
(29, 'Genie_Info2', '2022-04-22', 2, 3),
(30, 'Genie_Info2', '2022-04-22', 2, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `emploi`
--
ALTER TABLE `emploi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fil` (`id_filiere`),
  ADD KEY `fk_user` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `emploi`
--
ALTER TABLE `emploi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emploi`
--
ALTER TABLE `emploi`
  ADD CONSTRAINT `fk_fil` FOREIGN KEY (`id_filiere`) REFERENCES `filiere` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
