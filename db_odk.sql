-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 06 juil. 2023 à 04:33
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_odk`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE `administrateurs` (
  `id_adm` int(11) NOT NULL,
  `nom_adm` varchar(40) NOT NULL,
  `prenom_adm` varchar(40) NOT NULL,
  `email_adm` varchar(60) NOT NULL,
  `mot_passe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id_adm`, `nom_adm`, `prenom_adm`, `email_adm`, `mot_passe`) VALUES
(3, 'che', 'hhhh', 'kkkkkk@nnn.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(4, 'Toure', 'Ousmane', 'dtdtdg@jjjj.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(5, 'che', 'hhhh', 'kkkkkk@nnn.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(6, 'Traore', 'Drissa', 'kkkkkk@nnn.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

CREATE TABLE `apprenants` (
  `id_app` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `matricule` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `date_naiss` date NOT NULL,
  `id_pro` int(11) NOT NULL,
  `id_adm` int(11) NOT NULL,
  `photo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`id_app`, `nom`, `prenom`, `matricule`, `email`, `telephone`, `age`, `date_naiss`, `id_pro`, `id_adm`, `photo`) VALUES
(4, 'Coulibaly', 'saran', '', 'kkkkkk@nnn.com', 77778889, 19, '2023-06-29', 1, 1, 'femme_ordi-removebg-preview.png'),
(7, 'Toure', 'mariam', '', 'dtdtdg@jjjj.com', 77778889, 23, '2023-07-06', 1, 3, 'sssss.png'),
(8, 'Diakite', 'Izack', '', 'kkkkkk@nnn.com', 77778889, 20, '2023-06-26', 1, 3, 'ouss.png'),
(9, 'Traore', 'Drissa', '', 'kkkkkk@nnn.com', 77778889, 45, '2023-06-27', 1, 3, 'ouss.png'),
(10, '', '', '', '', 0, 0, '0000-00-00', 1, 3, '');

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

CREATE TABLE `promotions` (
  `id_pro` int(11) NOT NULL,
  `nom_pro` varchar(100) NOT NULL,
  `date_debut` date NOT NULL DEFAULT current_timestamp(),
  `date_sortie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `promotions`
--

INSERT INTO `promotions` (`id_pro`, `nom_pro`, `date_debut`, `date_sortie`) VALUES
(1, 'ODK1', '2023-07-04', '0000-00-00'),
(2, 'ODK2', '2023-07-04', '2021-03-02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD PRIMARY KEY (`id_adm`);

--
-- Index pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD PRIMARY KEY (`id_app`),
  ADD KEY `apprenant_fkey1` (`id_adm`),
  ADD KEY `apprenant_fkey2` (`id_pro`);

--
-- Index pour la table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id_pro`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `apprenants`
--
ALTER TABLE `apprenants`
  MODIFY `id_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD CONSTRAINT `apprenant_fkey1` FOREIGN KEY (`id_adm`) REFERENCES `administrateurs` (`id_adm`),
  ADD CONSTRAINT `apprenant_fkey2` FOREIGN KEY (`id_pro`) REFERENCES `promotions` (`id_pro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
