-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 02 sep. 2024 à 03:42
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `2a`
--

-- --------------------------------------------------------

--
-- Structure de la table `dossiers_medicals`
--

CREATE TABLE `dossiers_medicals` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `historique` text NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dossiers_medicals`
--

INSERT INTO `dossiers_medicals` (`id`, `patient_id`, `historique`, `date_creation`) VALUES
(6, 2, '  patient 2                                    ', '2024-09-01 11:25:32'),
(7, 1, '  il est malade\r\n                                     non?', '2024-09-01 11:25:58');

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `medecin_id` int(11) NOT NULL,
  `date_heure` datetime NOT NULL,
  `statut` enum('programmé','annulé','terminé') DEFAULT 'programmé',
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id`, `patient_id`, `medecin_id`, `date_heure`, `statut`, `created_at`, `description`) VALUES
(3, 2, 1, '2001-01-01 04:05:00', 'annulé', '2024-08-31', NULL),
(5, 3, 1, '1512-01-20 15:15:00', 'terminé', '2024-09-01', NULL),
(6, 2, 1, '2024-09-10 16:13:00', 'programmé', '2024-09-01', NULL),
(7, 2, 1, '2024-09-19 07:03:00', 'programmé', '2024-09-01', NULL),
(8, 2, 1, '2024-09-13 19:03:00', 'programmé', '2024-09-01', NULL),
(9, 2, 1, '2024-07-18 16:04:00', 'programmé', '2024-09-01', NULL),
(10, 2, 1, '2024-07-18 18:07:00', 'programmé', '2024-09-01', NULL),
(11, 2, 1, '2024-07-18 18:08:00', 'programmé', '2024-09-01', NULL),
(12, 2, 1, '2024-08-08 18:08:00', 'programmé', '2024-09-01', NULL),
(13, 2, 1, '2024-08-15 19:08:00', 'programmé', '2024-09-01', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` enum('admin','medecin','patient') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `mot_de_passe`, `role`) VALUES
(1, 'test', 'test', 'test', 'medecin'),
(2, 'patientn1', 'patientn1', '123', 'patient'),
(3, 'patientn3', 'azdaz', 'dzada', 'patient');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dossiers_medicals`
--
ALTER TABLE `dossiers_medicals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `medecin_id` (`medecin_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dossiers_medicals`
--
ALTER TABLE `dossiers_medicals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dossiers_medicals`
--
ALTER TABLE `dossiers_medicals`
  ADD CONSTRAINT `dossiers_medicals_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `rendez_vous_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rendez_vous_ibfk_2` FOREIGN KEY (`medecin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
