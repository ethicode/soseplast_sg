-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 08 oct. 2024 à 16:50
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `soseplast_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `is_enabled` tinyint(1) DEFAULT 1,
  `image_url` varchar(200) DEFAULT NULL,
  `image_1` varchar(200) DEFAULT NULL,
  `image_2` varchar(200) DEFAULT NULL,
  `image_3` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `name`, `description`, `quantity`, `category_id`, `location`, `is_enabled`, `image_url`, `image_1`, `image_2`, `image_3`, `created_at`, `deleted_at`) VALUES
(1, 'Ordinateur Macbook pro 2020', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 20, 1, '', 1, './public/images/2.jpg', NULL, NULL, NULL, '2024-09-04 15:49:30', NULL),
(2, 'Cable Rj 45', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 1, 1, NULL, 0, './public/images/person_66ec37419d7fd.png', NULL, NULL, NULL, '2024-09-04 15:49:30', NULL),
(4, 'Citroen C3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 3, 3, NULL, 1, NULL, NULL, NULL, NULL, '2024-09-06 09:57:53', NULL),
(29, 'Voiture lamborghini', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 3, 3, 'Casier 3', 1, './public/images/maxresdefault.jpg', NULL, NULL, NULL, '2024-09-11 09:24:37', NULL),
(30, 'Ecran plat smart tv', 'Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes, de mots ou de listes. Vous obtenez alors un texte aléatoire ...', 13, 1, 'Casier 1', 1, './public/images/6_6705091fd4732.jpg', NULL, NULL, NULL, '2024-09-11 09:25:50', NULL),
(37, 'Ecran plat smart tv', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 0, 2, '', 1, './public/images/7_670404a9672a9.jpg', NULL, NULL, NULL, '2024-09-11 10:09:23', NULL),
(38, 'Ecran plat semi smart tv ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 10, 1, 'Casier 1', 1, './public/images/6.jpg', NULL, NULL, NULL, '2024-09-19 14:37:53', NULL),
(39, 'Ecran plat smart tv', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 8, 1, 'Casier 1', 1, './public/images/7.jpg', NULL, NULL, NULL, '2024-09-24 16:42:55', NULL),
(40, 'Massar Sow', 'dddddddd', 223, 6, 'zzzzzzzzzzzzzzzzzzzzzzzzzzz', 1, './public/images/5.jpg', NULL, NULL, NULL, '2024-10-08 14:20:44', NULL),
(41, '10.238.55.203', '', 222, 6, 'Casier 1', 1, './public/images/2_670543647be7c.jpg', NULL, NULL, NULL, '2024-10-08 14:36:20', NULL),
(42, 'Massar Sow', '', 0, 2, '', 1, './public/images/images_670543a924881.', NULL, NULL, NULL, '2024-10-08 14:37:29', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `is_validated` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `deleted_at`) VALUES
(1, 'Informatique', '2024-09-02 11:39:43', NULL),
(2, 'Bureautique', '2024-09-02 11:39:43', NULL),
(3, 'Voiture', '2024-09-02 11:39:56', NULL),
(6, 'Electroménager', '2024-09-19 09:34:50', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `id` bigint(20) NOT NULL,
  `article_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `is_validated` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `command`
--

INSERT INTO `command` (`id`, `article_id`, `client_id`, `quantity`, `is_validated`, `created_at`, `deleted_at`) VALUES
(1, 4, 22, 1, 0, NULL, NULL),
(2, 1, 22, 3, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `delivery`
--

CREATE TABLE `delivery` (
  `id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `is_recovered` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `is_enabled` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `quantity`, `category_id`, `location`, `is_enabled`, `created_at`, `deleted_at`) VALUES
(1, 'Ordinateur Portable HP', 'Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes, de mots ou de listes. Vous obtenez alors un texte aléatoire ...', 20, 1, 'emplacement 1', NULL, '2024-09-02 11:01:16', NULL),
(2, 'Cable Rj 45', 'Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes, de mots ou de listes. Vous obtenez alors un texte aléatoire ...', 39, 1, 'emplacement 2', NULL, '2024-09-02 11:01:16', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id`, `name`, `created_at`, `deleted_at`) VALUES
(1, 'Association', '2024-09-03 16:27:39', NULL),
(2, 'Ecole publique', '2024-09-03 16:27:39', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `request`
--

CREATE TABLE `request` (
  `id` bigint(20) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `status_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `request`
--

INSERT INTO `request` (`id`, `title`, `description`, `user_id`, `status_date`, `created_at`, `deleted_at`, `status_id`) VALUES
(1, 'Demande de sponsoring', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\r\n', 17, NULL, '2024-09-10 09:47:30', NULL, NULL),
(2, 'Demande d\'accompagnement pour notre nuit de l\'excellence', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\r\n', 22, NULL, '2024-09-10 09:49:11', NULL, NULL),
(3, 'Demande d\'ordinateur', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\r\n', 17, NULL, '2024-09-10 09:49:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `deleted_at`) VALUES
(1, 'Administrateur', '2024-09-02 10:54:19', NULL),
(2, 'Utilisateur', '2024-09-02 10:54:19', NULL),
(3, 'Collaborateur', '2024-09-18 15:01:17', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sell`
--

CREATE TABLE `sell` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `article_id` bigint(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `is_sold` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sell`
--

INSERT INTO `sell` (`id`, `user_id`, `article_id`, `quantity`, `price`, `is_sold`, `created_at`, `deleted_at`, `client_id`) VALUES
(4, 17, 37, 20, 123000, NULL, NULL, NULL, NULL),
(5, NULL, 1, 12, 10000, NULL, NULL, NULL, NULL),
(6, 22, 29, 1, 200000, NULL, NULL, NULL, NULL),
(8, NULL, 39, 8, 33, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `status_request`
--

CREATE TABLE `status_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `request_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `status_request`
--

INSERT INTO `status_request` (`id`, `name`, `request_id`, `created_at`, `deleted_at`) VALUES
(1, 'Mise en attente', 0, '2024-09-03 16:15:55', NULL),
(2, 'Acceptée', 0, '2024-09-03 16:15:55', NULL),
(3, 'Rejetée', 0, '2024-09-03 16:16:08', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `profil_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_enabled` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `profil_id`, `created_at`, `deleted_at`, `is_enabled`) VALUES
(17, 'Massar Sow', 'massar.sow77@gmail.com', '$2y$10$jb0n/DhJg5W2rCDGVBFCbu8XdQ28b9Hg0ETJ747pNps2yA72ncihy', 1, NULL, '2024-09-05 14:17:12', NULL, 1),
(20, 'Massar Sow', 'massar.sow77@gmail.com', '$2y$10$HF54fHiGQHJg1Q3T9GTo5.qxdvW4zkZGxmu2oCiVnUM.Uu9qPfyMm', 1, NULL, '2024-09-05 14:26:43', NULL, 0),
(21, 'Massar Sow', 'massar.sow77@gmail.com', '$2y$10$tfpB2GirxlHUg.IIoOzB8eYxy993jCzT/85ZQcNItlPfW8YFjZqgO', 1, NULL, '2024-09-05 14:27:26', NULL, 1),
(22, 'Raphael Ndong', 'naelamadou@gmail.com', '$2y$10$Eghc2XAvXo6DKO931G7T4uGBTxiuGdICKeCc9I3W9KPcgT5XtsL4m', 2, NULL, '2024-09-05 14:28:05', NULL, 1),
(32, 'GTPS', 'pape-massar.sow-prest@socgen.com', '$2y$10$ZSzEj00l9hpveyqkiwOVV.hV5aK71bNEDEIPt1p6N7GMRRhlkZ5JS', 3, NULL, '2024-10-07 12:06:59', NULL, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Index pour la table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`,`deleted_at`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `status_request`
--
ALTER TABLE `status_request`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `profil_id` (`profil_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `command`
--
ALTER TABLE `command`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `request`
--
ALTER TABLE `request`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `status_request`
--
ALTER TABLE `status_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `command`
--
ALTER TABLE `command`
  ADD CONSTRAINT `command_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,
  ADD CONSTRAINT `command_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `delivery_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status_request` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `sell`
--
ALTER TABLE `sell`
  ADD CONSTRAINT `sell_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `sell_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `sell_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
