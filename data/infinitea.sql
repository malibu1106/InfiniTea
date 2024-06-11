-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 11 juin 2024 à 20:19
-- Version du serveur : 8.0.37
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `infinitea`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'thé noir'),
(2, 'thé vert'),
(3, 'thé blanc'),
(4, 'thé oolong'),
(5, 'rooibos'),
(6, 'infusions'),
(7, 'coffrets'),
(8, 'accessoires');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `composition` varchar(255) NOT NULL,
  `price_before_reduction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `image_filename` varchar(255) NOT NULL,
  `temperature` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `temps` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `added_by` int NOT NULL,
  `highlight` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `composition`, `price_before_reduction`, `price`, `weight`, `image_filename`, `temperature`, `temps`, `added_by`, `highlight`) VALUES
(1, 'Thé noir à la rose', 'thé noir', 'Elégant cru de thé noir de Chine aux pétales de rose où se côtoient et s\'entremêlent les notes boisées et cuir du thé noir rehaussées et arrondies par le parfum de la rose.', '', '220€ /kg', '179€ /kg', '220gr', 'the_noir_rose.png', '90°', '3 minutes', 5, 1),
(2, 'Test changement nom', 'thé blanc', 'gre', 'gre', 'gre', 'gre', 'gre', '../images/produits/gqTd9vwVXNxltukxDxSx.png', 'gre', 'gre', 5, 0),
(3, 'Test changement avec image', 'thé blanc', 'gre', 'gre', 'gre', 'gre', 'gre', '../images/produits/0yKUmVj9vTpPWZDZFvaa.png', 'gre', 'gre', 6, 1),
(4, 'gre', 'thé blanc', 'the blanc test edit', 'the blanc test compo', '73€', '65€', '320g', '../images/produits/y2RDueszpWmSUJgTXPtA.png', '90°', '3m', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `date_of_registration` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rights` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `date_of_registration`, `email`, `password`, `rights`) VALUES
(4, 'super', 'user', '', NULL, NULL, 'superuser@infinitea.com', '$2y$10$k2QgjJHq5lkBc74k8esgUuprTQVz11F9vwIWmqqcCytc0Gi09zQ96', 'full'),
(5, 'Mathilde', 'Jourden', '', NULL, NULL, 'mathilde@infinitea.com', '$2y$10$ft6XjbvMZfi2c2LDbzOPD.Lgqs7stmm5j.u5LqWYFPriQYk3OFIq2', 'self'),
(6, 'Roberto', 'De Sousa', '', NULL, NULL, 'roberto@infinitea.com', '$2y$10$riE4fdj3x0RNji6WfvLTNe/dD3/QF9OllkGCACcdjHbdtmMeTYsyu', 'self'),
(7, 'Roberto', 'De Sousa', '', '1992-11-06', '2024-06-11', 'malibu1106@gmail.com', '$2y$10$g7JHNCPIngqqNToWDkrj0Og7DKx6LJDPzXggotgx9N8ojiIFj9Bra', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
