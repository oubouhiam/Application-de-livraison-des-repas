-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 nov. 2020 à 14:03
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `foodontime`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Adress` text DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `Fname`, `Prenom`, `Phone`, `Adress`, `Message`, `Nom`) VALUES
(17, 'jbdjvhb', 'mkjbvmj', 0, 'jbjbjh', 'jbjnbjhbjh', 'Kitchen'),
(18, 'hgjhvh', 'jhgh,gf', 0, 'khgvhgagcg', 'gvhyfy', 'Kitchen'),
(19, ',nbjnbvh', 'hvhnv', 0, 'gfcgfc', 'hgcfhcg', 'Kitchen'),
(20, 'jbkdcjbdjk', 'n jdsbvj', 0, 'jhbvjhbv', 'jhbvjhdbv', 'Tacos'),
(21, 'nbjbjch', 'JBJHBCJH', 0, 'JHBJHBJ', 'JHBJHBJHBJ', 'Kitchen'),
(22, 'BJDVHBJ', 'BJHBJ', 0, 'JHBJHBJ', 'JHBJHBJ', 'Kitchen'),
(23, 'OUBOUHIA', 'MOHAMED', 678446374, 'SAFI', 'THANK YOU', 'Kitchen'),
(24, 'kjkvhbd', 'kjhvidsjh', 0, 'ikuhdivkd', 'kjvbkdj', 'Kitchen'),
(25, 'kjfjvhb', 'khbvjhdb', 0, 'khbcjhdb', 'hbjhbjh', 'Kitchen'),
(26, 'bkjvbj', 'jbjfvhb', 0, 'jhbjhbvj', 'jhvjhv', 'Kitchen'),
(27, '', '', 0, '', '', 'Kitchen'),
(28, '', '', 0, '', '', 'Kitchen'),
(29, '', '', 0, '', '', 'Kitchen'),
(30, '', '', 0, '', '', 'Kitchen'),
(31, '', '', 0, '', '', 'Kitchen'),
(32, '', '', 0, '', '', 'Kitchen'),
(33, '', '', 0, '', '', 'Kitchen'),
(34, '', '', 0, '', '', 'Tacos'),
(35, '', '', 0, '', '', 'Tacos'),
(36, '', '', 0, '', '', 'Tacos'),
(37, 'dsvcdsv', 'dhcbjsdh', 0, 'jhvbjhvj', 'jhvjhv', ''),
(38, 'med', 'med', 0, 'med', 'med', ''),
(39, 'bn b ', 'jhvjhv', 0, 'hgvhgvh', 'hgchlgvhl', 'Kitchen'),
(40, 'Miriam Compton', 'Sed non est esse ut', 1, 'Proident laborum D', 'Suscipit dolorem ali', 'Kitchen');

-- --------------------------------------------------------

--
-- Structure de la table `plate`
--

CREATE TABLE `plate` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Jour` date NOT NULL,
  `Image` text NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plate`
--

INSERT INTO `plate` (`Id`, `Nom`, `Price`, `Description`, `Jour`, `Image`, `Type`) VALUES
(1, 'Kitchen', 20, 'Kitchen msloo9 m9lii', '2020-11-23', 'kitchen.jpg', 'Special'),
(2, 'Tacos', 20, 'Tacos Moyen Dinde', '2020-11-23', 'Tacos.jpg', 'Secandary');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plate`
--
ALTER TABLE `plate`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `plate`
--
ALTER TABLE `plate`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
