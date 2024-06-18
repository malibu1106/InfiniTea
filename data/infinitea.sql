-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 18 juin 2024 à 10:32
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
-- Structure de la table `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `weight` int NOT NULL,
  `quantity` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `product_name`, `product_image`, `weight`, `quantity`, `user_id`) VALUES
(7, 5, 'Éclipse', '../images/produits/infusions.png', 200, 5, 9),
(10, 6, 'Voie Lactée', '../images/produits/noir.png', 100, 3, 9),
(14, 4, 'Thé n°3', '../images/produits/vert.png', 300, 5, 6),
(16, 4, 'Thé n°3', '../images/produits/vert.png', 300, 5, 6),
(19, 6, 'Voie Lactée', '../images/produits/noir.png', 200, 1, 11),
(20, 6, 'Voie Lactée', '../images/produits/noir.png', 100, 1, 4),
(21, 6, 'Voie Lactée', '../images/produits/noir.png', 100, 1, 4);

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
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `message`, `gender`, `user_id`) VALUES
(1, 'Prénomgre', 'Nom', 'malibu1106@gmail.com', 'gregre', 'Femme', 4),
(2, 'Prénom', 'Nom', 'gg@gg.com', 'gfdgfd', 'Femme', 0);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `content` text NOT NULL,
  `price` int NOT NULL,
  `date` date DEFAULT NULL,
  `paid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `processed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `address`, `content`, `price`, `date`, `paid`, `processed`, `user_id`) VALUES
(1, 'jean', 'jeanaa', 'jean@jean.com', NULL, '<div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 3</p></div>', 186, NULL, NULL, NULL, 9),
(2, 'jean', 'jeanaa', 'jean@jean.com', NULL, '<div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 3</p></div>', 186, NULL, NULL, NULL, 9),
(3, 'jean', 'jeanaa', 'jean@jean.com', NULL, '<div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 3</p></div>', 186, NULL, NULL, NULL, 9),
(4, 'jean', 'jeanaa', 'jean@jean.com', NULL, '<div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 3</p></div>', 186, NULL, NULL, NULL, 9),
(5, 'jean', 'jeanaa', 'jean@jean.com', NULL, '<div class=\"product\"><p>Product ID: 5</p><p>Product Name: Éclipse</p><p>Weight: 200 g</p><p>Quantity: 5</p></div><div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 3</p></div>', 186, NULL, NULL, NULL, 9),
(6, 'jean', 'jeanaa', 'jean@jean.com', NULL, '<div class=\"product\"><p>Product ID: 5</p><p>Product Name: Éclipse</p><p>Weight: 200 g</p><p>Quantity: 5</p></div><div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 3</p></div>', 186, NULL, NULL, NULL, 9),
(7, 'jean', 'jeanaa', 'jean@jean.com', NULL, '<div class=\"product\"><p>Product ID: 5</p><p>Product Name: Éclipse</p><p>Weight: 200 g</p><p>Quantity: 5</p></div><div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 3</p></div>', 186, NULL, NULL, NULL, 9),
(8, 'jean', 'jeanaa', 'jean@jean.com', '10 rue des morillons', '<div class=\"product\"><p>Product ID: 5</p><p>Product Name: Éclipse</p><p>Weight: 200 g</p><p>Quantity: 5</p></div><div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 3</p></div>', 186, NULL, 'true', NULL, 9),
(9, 'Jetest@jetest.com', 'Jetest@jetest.com', 'Jetest@jetest.com', '10 rue des cacahuetes', '<div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 200 g</p><p>Quantity: 1</p></div>', 44, NULL, 'true', NULL, 11),
(10, 'Jetest@jetest.com', 'Jetest@jetest.com', 'Jetest@jetest.com', '10 rue des cacahuetes', '<div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 200 g</p><p>Quantity: 1</p></div>', 44, NULL, 'true', NULL, 11),
(11, 'super', 'user', 'superuser@infinitea.com', '10 rue des cacahuetes', '<div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 1</p></div>', 22, '2024-06-18', 'true', 'true', 4),
(12, 'super', 'user', 'superuser@infinitea.com', '10 rue des cacahuetes', '<div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 1</p></div></br><div class=\"product\"><p>Product ID: 6</p><p>Product Name: Voie Lactée</p><p>Weight: 100 g</p><p>Quantity: 1</p></div></br>', 44, '2024-06-18', 'true', NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description_courte` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `composition` varchar(255) NOT NULL,
  `price_kg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` int NOT NULL,
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

INSERT INTO `products` (`id`, `name`, `category`, `description_courte`, `description`, `composition`, `price_kg`, `price`, `weight`, `image_filename`, `temperature`, `temps`, `added_by`, `highlight`) VALUES
(2, 'Éclipse', 'thé noir', 'Notes de cacao et de vanille', '', '+ tard', '+ tard', 8, '255g', '../images/produits/infusions.png', '90°', '2m', 5, 0),
(3, 'Voie Lactée', 'thé blanc', 'Touches de noix de coco et d\'amande', '+tard', '+tard', '+tard', 12, '+tard', '../images/produits/noir.png', '+tard', '+tard', 6, 1),
(4, 'Thé n°3', 'thé vert', '', 'the blanc test edit', 'the blanc test compo', '73€', 14, '320g', '../images/produits/vert.png', '90°', '3m', 6, 1),
(5, 'Éclipse', 'thé oolong', 'Notes de cacao et de vanille', '', '+ tard', '+ tard', 12, '255g', '../images/produits/infusions.png', '90°', '2m', 5, 0),
(6, 'Voie Lactée', 'thé rooibos', 'Touches de noix de coco et d\'amande', '+tard', '+tard', '+tard', 22, '+tard', '../images/produits/noir.png', '+tard', '+tard', 6, 1),
(7, 'Thé n°3', 'infusions', '', 'the blanc test edit', 'the blanc test compo', '73€', 17, '320g', '../images/produits/vert.png', '90°', '3m', 6, 1),
(8, 'Coffret test', 'coffrets', '', 'the blanc test edit', 'the blanc test compo', '73€', 14, '320g', '../images/produits/vert.png', '90°', '3m', 6, 1),
(9, 'Accessoire test', 'accessoires', '', 'the blanc test edit', 'the blanc test compo', '73€', 14, '320g', '../images/produits/vert.png', '90°', '3m', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `zipcode` int DEFAULT NULL,
  `ville` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `first_name`, `last_name`, `adresse`, `zipcode`, `ville`, `gender`, `date_of_birth`, `date_of_registration`, `email`, `password`, `rights`) VALUES
(4, 'super', 'user', '', 0, '', '', NULL, NULL, 'superuser@infinitea.com', '$2y$10$k2QgjJHq5lkBc74k8esgUuprTQVz11F9vwIWmqqcCytc0Gi09zQ96', 'full'),
(5, 'Mathilde', 'Jourden', '', 0, '', '', NULL, NULL, 'mathilde@infinitea.com', '$2y$10$ft6XjbvMZfi2c2LDbzOPD.Lgqs7stmm5j.u5LqWYFPriQYk3OFIq2', 'self'),
(6, 'Roberto', 'De Sousa', '', 0, '', '', NULL, NULL, 'roberto@infinitea.com', '$2y$10$riE4fdj3x0RNji6WfvLTNe/dD3/QF9OllkGCACcdjHbdtmMeTYsyu', 'self'),
(9, 'jean', 'jeanaa', '10 rue des morillons', 52145, 'Nevers', 'Non Binaire', '1987-12-06', '2024-06-13', 'jean@jean.com', '$2y$10$9ir/aRNsZN1TBU05RXEJyeML5tVM/3xdpfjSzr98RQ07ZjYRaDHFu', ''),
(10, 'azz', 'azz', '', 0, '', '', '2024-06-13', '2024-06-13', 'fezfezfez@lo.mo', '$2y$10$Q6b7/JV76cHmtlmRow4coOtFQL6I.llaX96JNPk.K/I7/uIYNraFK', NULL),
(11, 'Jetest@jetest.com', 'Jetest@jetest.com', NULL, NULL, NULL, '', '2024-06-18', '2024-06-18', 'Jetest@jetest.com', '$2y$10$FOqjHgaNCvBvjhWsAcfMVu9qMH3Dl6fIdR2zh/4B28XUMyy08ACu2', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT pour la table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
