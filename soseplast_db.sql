-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 02 oct. 2025 à 14:23
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
-- Base de données : `soseplast_db`
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
  `for_sale` tinyint(1) DEFAULT 0,
  `price` varchar(20) DEFAULT NULL,
  `image_url` varchar(200) DEFAULT NULL,
  `image_1` varchar(200) DEFAULT NULL,
  `image_2` varchar(200) DEFAULT NULL,
  `image_3` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `name`, `description`, `quantity`, `category_id`, `location`, `is_enabled`, `for_sale`, `price`, `image_url`, `image_1`, `image_2`, `image_3`, `created_at`, `deleted_at`) VALUES
(1, 'Ordinateur Macbook pro 2020', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 200, 9, '', 1, 1, '200.000', './public/images/2.jpg', './public/images/2-10.jpg', './public/images/mac.jpg', './public/images/mac.jpg', '0000-00-00 00:00:00', NULL),
(2, 'Cable Rj 45', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 1, 9, NULL, 0, 0, NULL, './public/images/person_66ec37419d7fd.png', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL),
(4, 'Citroen C3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 3, 3, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL),
(29, 'Voiture lamborghini', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 3, 3, 'Casier 3', 1, 1, '300.000', './public/images/maxresdefault.jpg', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL),
(30, 'Ecran plat smart tv', 'Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes, de mots ou de listes. Vous obtenez alors un texte aléatoire ...', 13, NULL, 'Casier 1', 1, 0, '200', './public/images/6_6705091fd4732.jpg', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL),
(37, 'Ecran plat smart tv', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 0, 2, '', 1, 0, NULL, './public/images/7_670404a9672a9.jpg', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL),
(38, 'Ecran plat semi smart tv ', '<i></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!<br>', 11, 2, 'Casier 1', 1, 1, '900.000', './public/images/6.jpg', './public/images/7_6708f10579e83.jpg', './public/images/6_6708f156b052d.jpg', './public/images/7_6708f156b6a34.jpg', '0000-00-00 00:00:00', NULL),
(39, 'Ecran plat smart tv', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 8, 6, 'Casier 1', 1, 0, '', './public/images/7.jpg', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL),
(40, 'Renault', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 2, 3, 'Parking ', 1, 1, '100.000', './public/images/5.jpg', './public/images/images (1).jfif', './public/images/images (3).jfif', './public/images/images (2).jfif', '0000-00-00 00:00:00', NULL),
(42, 'Mackbook pro 2019', 'Le MacBook Pro est doté de l’autonomie la plus longue sur un Mac : jusqu’à 22 heures. C’est ça, l’efficacité énergétique des puces Apple. Et qu’ils soient branchés ou non, tous les modèles sont aussi rapides. Dès que l’inspiration surgit ou que le devoir vous appelle, vous pouvez foncer, votre portable vous suit.', 10, 9, 'Casier 1', 1, 0, '900000', './public/images/2_6706720b399b4.jpg', './public/images/2_6706adc40adb3.jpg', './public/images/2_6706adc40c54c.jpg', './public/images/7_6707a5c33a3d9.jpg', '0000-00-00 00:00:00', NULL),
(45, 'Fontaine', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 3, 2, 'Casier 3', 1, 1, '100000', './public/images/fontaine.png', './public/images/unnamed.jpg', './public/images/fontaine.png', './public/images/unnamed.jpg', '0000-00-00 00:00:00', NULL),
(46, 'Fontaine petit model', 'ééé éLorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sapiente ducimus dolorem praesentium repellat odit vero, ut harum quibusdam eveniet soluta sit? Aliquid tenetur suscipit sapiente voluptatem eaque tempore!', 1, 6, 'Casier 1', 1, 1, '40.000', './public/images/fontaine.png', './public/images/fontaine-ea-eau-tanex-t-6alv-canaletas-2515035001.jpg', './public/images/fontaine-ea-eau-tanex-t-6alv-canaletas-2515035001.jpg', './public/images/fontaine-ea-eau-tanex-t-6alv-canaletas-2515035001.jpg', '0000-00-00 00:00:00', NULL),
(47, 'Ordinateur portable HP', 'Tout d\'abord, il faut dire que HP est une marque de renom dans le monde des ordinateurs portables. Elle offre en effet une gamme variée de produits adaptés à différents besoins et budgets. Deux de ses séries phares, l\'EliteBook et le ProBook, se distinguent particulièrement.', 9, 9, 'Casier 1', 1, 0, '90000', './public/images/c08225693_390x286.jpg', './public/images/6400.png', './public/images/laptop_17-HP-ordinateur-portable-vendu-au-benin.jpg', './public/images/vie-immobile-appareil-table_23-2150994379.avif', '0000-00-00 00:00:00', NULL),
(49, 'Ordinateur Macbook pro 2018', 'Tout d\'abord, il faut dire que HP est une marque de renom dans le monde des ordinateurs portables. Elle offre en effet une gamme variée de produits adaptés à différents besoins et budgets. Deux de ses séries phares, l\'EliteBook et le ProBook, se distinguent particulièrement.', 2, 2, 'Casier 1', 1, 0, '900000', './public/images/mac.png', './public/images/ordinateur-portable-lenovo-idea-pad-15--core-i3-8gb-256gb-ssd-1115g4_682f1e9ee7bbd.jpg', './public/images/ordinateur-portable-lenovo-idea-pad-15--core-i3-8gb-256gb-ssd-1115g4.jpg', './public/images/ordinateur-portable-lenovo-idea-pad-15--core-i3-8gb-256gb-ssd-1115g4.jpg', '0000-00-00 00:00:00', NULL),
(50, 'Table bureau', 'Plateau, cache jambes et parois en bois mélaminé\r\n02 passe-câbles et 04 patins antidérapants\r\n03 dimensions disponibles :\r\nBureau (L x l x H) : 140 x 80 x 75 cm\r\nBureau (L x l x H) : 160 x 80 x 75 cm\r\nBureau (L x l x H) : 180 x 80 x 75 cm\r\nCaisson mobile à 03 tiroirs verrouillage centralisé\r\nmuni de poignées et d’un jeu de clés', 4, 2, 'Magasin 12', 1, 1, '200.000', './public/images/1_67123765bb787.jpg', './public/images/4.jpg', './public/images/1.jpg', './public/images/4.jpg', '0000-00-00 00:00:00', NULL),
(51, 'WS-C2960-24PC-L', '', 0, 11, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(52, 'cisco ISR4321/K9 ', '<b>N° identification</b>:&nbsp;&nbsp;<span>\n  <span>RSG02<br></span></span><b>N° série</b>:&nbsp;<span>\n  <span>FDO214103CV<br></span></span><b>Config recup</b>:&nbsp;<span>\n  <span>OK<br></span></span><b>Reinit</b>:&nbsp;<span>\n  <span>OK<br></span></span><b>Site</b>:&nbsp;&nbsp;&nbsp;&nbsp;<span>\n  <span>SALY<br></span></span><b>Societe</b>:&nbsp; &nbsp; SG', 1, 12, '', 1, 0, '', './public/images/cisco-isr4321-k9-cisco-isr-4321-2ge-2nim-4g-flash-4g-dram-ipb-10111695-CTs3.jpg', './public/images/cisco-isr4321-k9-cisco-isr-4321-2ge-2nim-4g-flash-4g-dram-ipb-10111695-CTs3.jpg', './public/images/cisco-isr4321-k9-cisco-isr-4321-2ge-2nim-4g-flash-4g-dram-ipb-10111695-CTs3.jpg', './public/images/cisco-isr4321-k9-cisco-isr-4321-2ge-2nim-4g-flash-4g-dram-ipb-10111695-CTs3.jpg', '0000-00-00 00:00:00', NULL),
(53, 'Cisco 1921', '', 0, 12, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(54, 'Cisco 4221', '', 0, 12, '', 1, 0, '', '', '', '', '', '0000-00-00 00:00:00', NULL),
(55, 'LIVEBOX', '', 0, 10, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(56, 'LIVEBOX', '', 0, 10, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(57, 'WS-C2960X-24PS-L', '<b>N° identification</b>:&nbsp;&nbsp;<span>\n  <span>SSG02<br></span></span><b>N° série</b>:&nbsp;<span>\n  <span>FOC2515L8W8<br></span></span><b>Config recup</b>:&nbsp;<span>\n  <span>OK<br></span></span><b>Reinit</b>:&nbsp;<span>\n  <span>OK<br></span></span><b>Site</b>:&nbsp;&nbsp;&nbsp;<span>\n  <span>MBOUR<br></span></span><b>Societe</b>:&nbsp;&nbsp;&nbsp;&nbsp;SG', 1, 11, '', 1, 0, '', './public/images/switches-catalyst-2960x-24ts-ll-switch_copy.jpg', './public/images/switches-catalyst-2960x-24ts-ll-switch_copy.jpg', '', '', '0000-00-00 00:00:00', NULL),
(58, 'Keymile', '<b>N° identification:&nbsp;</b>KEYMILE SALY<br><span><b>N° série:&nbsp;</b><span><b>&nbsp;</b><br></span><b>Config recup:&nbsp;</b><span><b>&nbsp;</b><br></span><b>Reinit:&nbsp;</b><span><b>&nbsp;</b><br></span><b>Site:&nbsp;</b></span><span>\n  <span>SALY<br></span></span><b>Societe:&nbsp;</b>\n  ORANGE', 0, 10, '', 1, 0, '', '', '', '', '', '0000-00-00 00:00:00', NULL),
(59, 'Fortigate 60E', '', 0, 13, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(60, 'LA210', '', 0, 10, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(61, 'LIVEBOX', 'N° identification:&nbsp;<span>LIVEBOX SALY<br></span>\n  N° série:&nbsp;<span>LK1705DP140528<br></span><span>\n  <span>Config recup:&nbsp;<br></span></span><span>\n  <span>Reinit:&nbsp;<br></span></span>\n  Site:<span>&nbsp;&nbsp;<span>SALY<br></span></span>\n  Societe:&nbsp;&nbsp;\n  ORANGE', 1, 10, '', 1, 0, '', '', '', '', '', '0000-00-00 00:00:00', NULL),
(62, 'Cisco 1921', '<b>N° identification</b>:&nbsp;<span>\n  <span>TH2009_B2B_CPE_SGBS_SALY_INTERCO<br></span></span><b>N° série</b>:&nbsp;<br><b>Config recup</b>:&nbsp;<br><b>Reinit</b>:&nbsp;<br><b>Site</b>:&nbsp;&nbsp;<span>\n  <span>SALY<br></span></span><b>Societe</b>:&nbsp;&nbsp;&nbsp;\n  FREE', 0, 12, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(63, 'WS-C2960X-24PS-L', '<b>N° identification</b>:&nbsp;&nbsp;<span>\n  <span>SSG03<br></span></span><b>N° série</b>:&nbsp;<span>\n  <span>FOC2308T2SU<br></span></span><b>Config recup</b>:&nbsp;<span>\n  <span>OK<br></span></span><b>Reinit</b>:&nbsp;<span>\n  <span>OK<br></span></span><b>Site</b>:&nbsp;&nbsp;&nbsp;<span>\n  <span>SALY<br></span></span><b>Societe</b>:&nbsp;&nbsp;&nbsp;&nbsp;\n  SG', 1, 11, '', 1, 0, '', '', '', '', '', '0000-00-00 00:00:00', NULL),
(64, 'LIVEBOX', '<b>N° identification</b>:&nbsp;&nbsp;<span>\n  <span>LIVEBOX\n  PIKINE<br></span></span><b>N° série</b>:&nbsp;<span>\n  <span>LK18033DP340201<br></span></span><b>Config recup</b>:&nbsp;<br><b>Reinit</b>:&nbsp;<br><b>Site</b>:&nbsp;&nbsp;&nbsp;<span>\n  <span>PIKINE<br></span></span><b>Societe</b>:&nbsp;&nbsp;&nbsp;&nbsp;Orange', 1, 10, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(65, 'LA210', '<b>N° identification</b>:&nbsp;&nbsp;<span>\n  <span>LA210\n  PIKINE<br></span></span><b>N° série</b>:&nbsp;<br><b>Config recup</b>:&nbsp;<br><b>Reinit</b>:&nbsp;<br><b>Site</b>:&nbsp;&nbsp;&nbsp;Pikine<br><b>Societe</b>:&nbsp;&nbsp;&nbsp;&nbsp;Orange', 1, 10, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(66, 'CISCO2911/K9', '<b>N° identification</b>:&nbsp;&nbsp;<span>\n  <span>RSG03<br></span></span><b>N° série</b>:&nbsp;<span>\n  <span>FCZ154970X5<br></span></span><b>Config recup</b>:&nbsp;<span>\n  <span>OK<br></span></span><b>Reinit</b>:&nbsp;<span>\n  <span>OK<br></span></span><b>Site</b>:&nbsp;&nbsp;&nbsp;<span>\n  <span>PIKINE<br></span></span><b>Societe</b>:&nbsp;&nbsp;&nbsp;&nbsp;SG', 1, 12, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(67, 'Cisco 4321', '<b>N° identification</b>:&nbsp;&nbsp;<span>\n  <span>B2B_CPE_SGBS_PIKINE_INTERCO<br></span></span><b>N° série</b>:&nbsp;<br><b>Config recup</b>:&nbsp;<br><b>Reinit</b>:&nbsp;<br><b>Site</b>:&nbsp;&nbsp;&nbsp;<span>\n  <span>PIKINE<br></span></span><b>Societe</b>:&nbsp;&nbsp;&nbsp;&nbsp;<span>\n  <span>FREE<br><br></span></span>', 1, 12, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(68, 'Neant', 'FSG02', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(69, 'LA210', 'LA210 GMEDINE', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(70, 'LIVEBOX', 'LIVEBOX GMEDINE', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(71, 'WS-C2960X-24PS-L ', 'SSG04', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(72, 'CISCO2911/K9', 'RSG04', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(73, 'WS-C2960-24PC-L ', 'SSG05', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(74, 'CISCO2811/K9', 'RSG05', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(75, 'WS-C2960-24PC-L', 'SSG06', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(76, 'WS-C2960-24PC-L', 'SSG07', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(77, 'Keymile', 'KEYMILE CAPPEL', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(78, 'Keymile', 'KEYMILE CAPPEL', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(79, 'Fortigate 60E', 'FSG03', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(80, 'LA210', 'LA210 LG', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(81, 'Keymile', 'KEYMILE LG', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(82, 'LIVEBOX', 'LIVEBOX LG', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(83, 'WS-C2960-24PC-L', 'SSG08', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(84, 'WS-C2960+24PC-L', 'SSG09', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(85, 'WS-C2960+24PC-L', 'HS CAPPEL', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(86, 'CISCO2911/K9', 'HS LG', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(87, 'cisco ISR4321/K9 ', 'HS LG', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(88, 'LA210', 'LA210 VDN', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(89, 'LA210', 'LA210 VDN', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(90, 'LIVEBOX', 'LIVEBOX CASTOR', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(91, 'ASMI-54L', 'ASMI-54L CASTOR', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(92, 'Cisco 4321', 'DK1064_B2B_SGBS_VDN_INTERNET', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(93, ' WS-C2960X-24PS-L ', 'SSG10', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(94, ' WS-C2960X-24PS-L ', 'HS VDN', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(95, 'Cisco 4321', 'DK1001_B2B_CPE_SGBS_VDN_INTERCO ', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(96, 'LA210', 'LA210 CENTENAIRE', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(97, 'LA210', 'LA210 CENTENAIRE', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(98, 'LIVEBOX', 'LIVEBOX CENTENAIRE', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(99, 'Fortigate 60E', 'FSG04', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(100, 'cisco ISR4321/K9 ', 'RSG06', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(101, 'cisco ISR4321/K9 ', 'HS CASTOR', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(102, 'Cisco 4221', 'DK1003_B2B_CPE_SGBS_CENTENAIRE_INTERCO', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(103, 'cisco ISR4321/K9', 'RSG07', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(104, 'WS-C2960-48PST-L ', 'SSG11', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(105, 'WS-C2960+24PC-L', 'SSG12', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(106, 'WS-C2960-24PC-L ', 'SSG13', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(107, 'WS-C2960X-24PS-L ', 'SSG14', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(108, 'WS-C3750-24P', 'SSG15', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(109, 'WS-C2960X-24PS-L', 'SSG16', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(110, 'WS-C2960-24PC-L', 'SSG17', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(111, 'WS-C2960-48PST-L', 'SSG18', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(112, 'WS-C2960-24PC-L', 'SSG19', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(113, 'WS-C2960X-24PS-L', 'SSG20', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(114, ' WS-C2960-24PC-L', 'SSG21', 1, 2, '', 1, 0, '', './public/images/5-port-switch.jpg', '', '', '', '0000-00-00 00:00:00', NULL),
(115, 'WS-C2960X-24PS-L', 'SSG22', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(116, 'WS-C2960-24PC-L', 'SSG23', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(117, ' WS-C2960+48PST-L', '<b>SSG24</b>', 1, 2, '', 1, 0, '0', './public/images/5-port-switch_682f1a91764fb.jpg', './public/images/5-port-switch_682f1a917655d.jpg', './public/images/5-port-switch_682f1a9176590.jpg', './public/images/5-port-switch_682f1a91765b9.jpg', '0000-00-00 00:00:00', NULL),
(118, 'WS-C2960X-24PS-L', 'SSG25', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(119, ' WS-C2960X-24PS-L', 'SSG26', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(120, 'WS-C2960-48PST-L', 'SSG27', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(121, ' WS-C2960-24TC-L', 'SSG28', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(122, ' WS-C2960X-24PS-L', 'SSG29', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(123, 'WS-C2960+24PC-L', 'SSG30', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(124, 'cisco ISR4321/K9 ', 'RSG08', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(125, 'cisco 4321', 'DK1003_B2B_CPE_SGBS_MALICK_SY_INTERCO', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(126, 'cisco ISR4321/K9 ', 'RSG09', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(127, 'cisco 4321', 'DK1034_B2B_CPE_SGBS_BOURGUIBA_INTERCO', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(128, 'cisco ISR4321/K9 ', 'RSG10', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(129, 'cisco ISR4321/K9 ', 'RSG11', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(130, 'cisco ISR4321/K9 ', 'RSG12', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(131, 'cisco ISR4321/K9 ', 'RSG13', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(132, 'cisco ISR4321/K9 ', 'RSG14', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(133, 'cisco ISR4321/K9 ', 'RSG15', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(134, 'cisco ISR4321/K9 ', 'RSG16', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(135, 'cisco ISR4321/K9', 'RSG17', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(136, 'cisco 4321', 'DK1096_B2B_CPE_SGBS_ALMADIES_INTERCO', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(137, 'cisco ISR4321/K9', 'RSG18', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(138, 'cisco ISR4321/K9', 'RSG19', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(139, 'cisco 4321', 'B2B_CPE_SGBS_KEUR_MASSAR_INTERCO', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(140, 'cisco ISR4321/K9', 'RSG20', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(141, 'cisco 4321', 'DK1646_B2B_CPE_SGBS_SACRE_COEUR', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(142, 'cisco ISR4321/K9', 'RSG21', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(143, 'cisco 4221', 'B2B_CPE_DK1034_BB_CPE_SGBS_MERMOZ_INTERCO', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(144, 'cisco 1921', 'SL3405_B2B_CPE_SGBS_SAINT_LOUIS', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(145, 'cisco 1941', 'RSG22', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(146, 'cisco 1941', 'TH2024_B2B_CPE_B2B_SGBS_TIVAOUANE_INTERCO', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(147, 'cisco 4221', 'NTIP0906_SGSN_KMR', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(148, 'cisco 1841', 'KD5715_B2B_CPE_SGBS_KOLDA_INTERCO', 1, NULL, '', 1, 0, NULL, '', '', '', '', '0000-00-00 00:00:00', NULL),
(149, 'LIVEBOX', 'Description', 12, 10, 'Casier 12', 1, 0, NULL, '5-port-switch.jpg', '5-port-switch.jpg', '5-port-switch.jpg', '5-port-switch.jpg', '2025-05-22 10:32:39', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `deleted_at`) VALUES
(2, 'Bureautique', '2024-09-02 11:39:43', NULL),
(3, 'Voiture', '2024-09-02 11:39:56', NULL),
(6, 'Electroménager', '2024-09-19 09:34:50', NULL),
(9, 'Informatique', '2024-10-09 14:18:32', NULL),
(10, 'Modem', '2025-02-10 15:53:41', NULL),
(11, 'Switch', '2025-02-10 15:53:41', NULL),
(12, 'Routeur', '2025-02-10 15:54:14', NULL),
(13, 'Firewall', '2025-02-10 15:54:14', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cession`
--

CREATE TABLE `cession` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `article_id` bigint(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `is_sold` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cession`
--

INSERT INTO `cession` (`id`, `user_id`, `article_id`, `quantity`, `price`, `is_sold`, `created_at`, `deleted_at`, `client_id`) VALUES
(4, 17, NULL, 20, 123000, NULL, NULL, NULL, NULL),
(5, 32, NULL, 12, 10000, NULL, NULL, NULL, NULL),
(6, 22, NULL, 1, 200000, NULL, NULL, NULL, NULL),
(8, NULL, NULL, 8, 33, NULL, NULL, NULL, NULL),
(9, NULL, NULL, 223, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `article_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `is_validated` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `command`
--

INSERT INTO `command` (`id`, `name`, `email`, `address`, `phone`, `article_id`, `user_id`, `quantity`, `is_validated`, `created_at`, `deleted_at`) VALUES
(18, NULL, NULL, NULL, NULL, 45, 33, 0, 1, '2025-03-27 15:46:56', NULL),
(26, NULL, NULL, NULL, NULL, 50, 35, NULL, NULL, '2025-09-12 09:57:40', NULL),
(37, NULL, NULL, NULL, NULL, 40, 33, NULL, NULL, '2025-09-16 13:14:38', NULL),
(40, NULL, NULL, NULL, NULL, 50, 33, NULL, NULL, '2025-09-18 12:00:19', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `don`
--

CREATE TABLE `don` (
  `id` bigint(20) NOT NULL,
  `beneficiaire_id` bigint(20) DEFAULT NULL,
  `demande_id` bigint(20) DEFAULT NULL,
  `article_id` bigint(20) NOT NULL,
  `is_delivered` tinyint(1) DEFAULT 0,
  `value` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `delete_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `file`
--

CREATE TABLE `file` (
  `id` bigint(20) NOT NULL,
  `url` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `quantity`, `category_id`, `location`, `is_enabled`, `created_at`, `deleted_at`) VALUES
(1, 'Ordinateur Portable HP', 'Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes, de mots ou de listes. Vous obtenez alors un texte aléatoire ...', 20, NULL, 'emplacement 1', NULL, '2024-09-02 11:01:16', NULL),
(2, 'Cable Rj 45', 'Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes, de mots ou de listes. Vous obtenez alors un texte aléatoire ...', 39, NULL, 'emplacement 2', NULL, '2024-09-02 11:01:16', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `uuid` varchar(100) DEFAULT NULL,
  `text_1` text DEFAULT NULL,
  `text_2` text DEFAULT NULL,
  `text_3` text DEFAULT NULL,
  `fichier` varchar(100) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `is_validated` tinyint(1) DEFAULT NULL,
  `status_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `request`
--

INSERT INTO `request` (`id`, `uuid`, `text_1`, `text_2`, `text_3`, `fichier`, `user_id`, `status`, `is_validated`, `status_date`, `created_at`, `deleted_at`, `status_id`) VALUES
(1, 'dsfssxr099ly', 'Demande de sponsoring pour un projet éducatif', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\n', '200.000', NULL, 17, 1, 0, NULL, '2024-09-10 09:47:30', NULL, NULL),
(2, 'kjhsxr099ly', 'Demande d\'accompagnement pour notre nuit de l\'excellence', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\n', '200.000', NULL, 22, 0, 0, NULL, '2024-09-10 09:49:11', NULL, NULL),
(3, '234sxr099ly', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\n', '200.000', NULL, 17, NULL, 0, NULL, '2024-09-10 09:49:11', NULL, NULL),
(4, '09r099ly', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\n', '200.000', 'FastPHP.pdf', 33, NULL, NULL, NULL, '2025-03-10 16:23:35', NULL, NULL),
(7, 'sxr07mcw', 'Demande de sponsoring pour un projet éducatif', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\n', '20000 Demande de sponsoring pour un projet Ã©ducatif', '1444x920_amazon-remise-sur-l-ordinateur-portable-mac-book-air-2022-13-6-pouces-apple.webp', 33, NULL, NULL, NULL, '2025-06-12 14:57:22', NULL, NULL),
(8, 'sxr099ly', 'Demande de sponsoring pour un projet éducatif', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\n', '20000 Demande de sponsoring pour un projet Ã©ducatif', './public/fichiers/fontaine-ea-eau-tanex-t-6alv-canaletas-2515035001_684aeb0d6939c.jpg', 33, NULL, NULL, NULL, '2025-06-12 14:58:21', NULL, NULL),
(9, 'sxr0a8k8', 'Demande d\'accompagnement pour notre nuit de l\'excellence', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ...\r\n', '5-port-switch.jpg', 33, NULL, NULL, NULL, '2025-06-12 14:58:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `deleted_at`) VALUES
(1, 'Administrateur', '2024-09-02 10:54:19', NULL),
(2, 'Utilisateur', '2024-09-02 10:54:19', NULL),
(3, 'Collaborateur', '2024-09-18 15:01:17', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `phone` varchar(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_enabled` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `profil_id`, `created_at`, `phone`, `deleted_at`, `is_enabled`) VALUES
(17, 'Association les amis du livre', 'massar.sow77@gmail.com', '$2y$10$jb0n/DhJg5W2rCDGVBFCbu8XdQ28b9Hg0ETJ747pNps2yA72ncihy', 1, NULL, '2024-09-05 14:17:12', '77 17177171', NULL, 1),
(20, 'Massar Sow', 'massar.sow77@gmail.com', '$2y$10$HF54fHiGQHJg1Q3T9GTo5.qxdvW4zkZGxmu2oCiVnUM.Uu9qPfyMm', 1, NULL, '2024-09-05 14:26:43', NULL, NULL, 0),
(21, 'Massar Sow', 'massar.sow77@gmail.com', '$2y$10$tfpB2GirxlHUg.IIoOzB8eYxy993jCzT/85ZQcNItlPfW8YFjZqgO', 1, NULL, '2024-09-05 14:27:26', NULL, NULL, 1),
(22, 'Raphael Ndong', 'naelamadou@gmail.com', '$2y$10$Eghc2XAvXo6DKO931G7T4uGBTxiuGdICKeCc9I3W9KPcgT5XtsL4m', 2, NULL, '2024-09-05 14:28:05', NULL, NULL, 1),
(32, 'Pape', 'pape-massar.sow-prest@socgen.com', '$2y$10$ZSzEj00l9hpveyqkiwOVV.hV5aK71bNEDEIPt1p6N7GMRRhlkZ5JS', 3, NULL, '2024-10-07 12:06:59', NULL, NULL, 1),
(33, 'Massar Pape', 'admin@admin.com', '$2y$10$ULCUAtXHr40WM8r.8sTAU.XzcZPMaiqmp/b3H15bVWXZoIvJ9TNyq', 1, NULL, '2024-10-14 10:55:56', '2232245', NULL, 1),
(34, 'test', 'test@admin.com', '$2y$10$XmpBkjEbUHNkAFYWyrNEHOGhUf.TDzx0LYe.2vl0rt7.xaRqC89W.', 3, NULL, '2025-06-05 13:06:49', NULL, NULL, 1),
(35, 'Pape Sow', 'admin9@admin.com', '$2y$10$QUCbLCPQBFQxUErwyBNTeOnYFyoh1EW/Gnxlwhze6lgtSzMd0f.Xe', 3, NULL, '2025-09-11 16:58:49', NULL, NULL, 1),
(36, 'jfjdfk', 'khlhj', '$2y$10$ykvr/iZ5.n.aV4Y5H8eEyublFuJhSqmEVuqGaQcv8mXlsqaByvzdy', 3, NULL, '2025-09-18 10:58:27', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_category`
--

CREATE TABLE `user_category` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Index pour la table `cession`
--
ALTER TABLE `cession`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`,`deleted_at`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Index pour la table `don`
--
ALTER TABLE `don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demande_id` (`demande_id`);

--
-- Index pour la table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `cession`
--
ALTER TABLE `cession`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `command`
--
ALTER TABLE `command`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `don`
--
ALTER TABLE `don`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `file`
--
ALTER TABLE `file`
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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `status_request`
--
ALTER TABLE `status_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `user_category`
--
ALTER TABLE `user_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Contraintes pour la table `cession`
--
ALTER TABLE `cession`
  ADD CONSTRAINT `cession_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `cession_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `cession_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `command`
--
ALTER TABLE `command`
  ADD CONSTRAINT `command_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,
  ADD CONSTRAINT `command_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE SET NULL;

--
-- Contraintes pour la table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `delivery_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `don`
--
ALTER TABLE `don`
  ADD CONSTRAINT `don_ibfk_1` FOREIGN KEY (`demande_id`) REFERENCES `request` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

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
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
