-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 07 juil. 2022 à 11:20
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbsocim`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `civilite` varchar(6) NOT NULL,
  `datecopt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `password`, `civilite`, `datecopt`) VALUES
('benedicte', '123456loi', 'Mlle', '2004-07-22'),
('junior', '12345loiu', 'Mr', '2004-07-22'),
('prof', '123456mon', 'Mr', '2006-07-22');

-- --------------------------------------------------------

--
-- Structure de la table `Appartement`
--

CREATE TABLE `Appartement` (
  `numAppart` int(11) NOT NULL,
  `numEtage` int(11) NOT NULL,
  `superficie` float NOT NULL,
  `nbreChambre` int(11) NOT NULL,
  `prixPrev` float NOT NULL,
  `nomI` varchar(50) NOT NULL,
  `numerP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Appartement`
--

INSERT INTO `Appartement` (`numAppart`, `numEtage`, `superficie`, `nbreChambre`, `prixPrev`, `nomI`, `numerP`) VALUES
(5, 2, 5000, 4, 100000, 'Atakpa ', 25),
(7, 4, 5000, 5, 75000, 'Atakpa ', 47),
(8, 1, 12000, 7, 250000, 'Ghalhi ', 108),
(10, 4, 5000, 6, 80000, 'Atakpa ', 410),
(12, 3, 3, 14, 500000, 'Batchi ', 312),
(13, 4, 6, 12, 250500, 'Batchi ', 413),
(14, 5, 24, 11, 251500, 'Batchi ', 514),
(22, 3, 8000, 4, 200000, 'Ghalhi ', 322),
(23, 4, 5000, 7, 75000, 'Batchi ', 423),
(25, 3, 4000, 6, 55000, 'Atakpa ', 325),
(56, 4, 10000, 8, 150000, 'Blitchi ', 456),
(61, 5, 10000, 8, 200000, 'Blitchi ', 561),
(65, 2, 6000, 6, 155000, 'Blitchi ', 265),
(97, 2, 5000, 3, 90000, 'Ghalhi ', 297);

-- --------------------------------------------------------

--
-- Structure de la table `Avocat`
--

CREATE TABLE `Avocat` (
  `numAuto` int(11) NOT NULL,
  `nomA` varchar(50) NOT NULL,
  `prenomsA` varchar(50) NOT NULL,
  `adresseA` varchar(50) NOT NULL,
  `telephoneA` varchar(50) NOT NULL,
  `nomC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Avocat`
--

INSERT INTO `Avocat` (`numAuto`, `nomA`, `prenomsA`, `adresseA`, `telephoneA`, `nomC`) VALUES
(517, 'didi', 'jul', 'lome', '98745612', 'Afi'),
(780, 'popo', 'momo', 'lome', '96524876', 'Afi'),
(1236, 'popo', 'momo', 'lome', '98457621', 'Afi'),
(4445, 'lolo', 'hub', 'lome togo 2000', '96547812', 'hyan'),
(4512, 'koffi', 'kodjo', 'lome', '96218831', 'sem'),
(7456, 'bobo', 'nul', 'lome', '96547812', 'hub'),
(12354, 'fifi', 'junior', 'lome', '98745612', 'hyan'),
(78415, 'loiu', 'popo', 'lome', '98745612', 'ami');

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `numCIN` int(11) NOT NULL,
  `nomC` varchar(50) NOT NULL,
  `prenomsC` varchar(50) NOT NULL,
  `adresseC` varchar(50) NOT NULL,
  `telephoneC` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Client`
--

INSERT INTO `Client` (`numCIN`, `nomC`, `prenomsC`, `adresseC`, `telephoneC`, `profession`) VALUES
(123, 'full', 'fulbert', 'lome', '90157846', 'medecin'),
(154, 'hyan', 'junior', 'attiegou', '96218831', 'commerçant'),
(410, 'Afi', 'bene', 'kougbon', '90165827', 'autres'),
(455, 'junior', 'hyan', 'lome', '96218830', 'commerçant'),
(795, 'jun', 'koffi', 'lome', '96218831', 'professeur'),
(852, 'Abra', 'lili', 'lome', '96218835', 'autres'),
(874, 'kokou', 'koffi', 'lome togo 2000', '96218831', 'medecin'),
(888, 'kiss', 'junior', 'lome', '96218831', 'autres'),
(1234, 'sem', 'junior', 'lome togo 2000', '96218831', 'autres'),
(1258, 'sem', 'juniors', 'lome togo 2000', '70022853', 'autres'),
(4152, 'ami', 'zen', 'lome togo 2000', '98745612', 'commerçant'),
(7451, 'hub', 'junior', 'lome togo 2000', '96218831', 'chauffeur'),
(7894, 'jeco', 'juju', 'lome togo 2000', '96218831', 'professeur');

-- --------------------------------------------------------

--
-- Structure de la table `Contrat`
--

CREATE TABLE `Contrat` (
  `id` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `prixVente` float NOT NULL,
  `typePay` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `numV` int(11) NOT NULL,
  `numAuto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Contrat`
--

INSERT INTO `Contrat` (`id`, `description`, `prixVente`, `typePay`, `date`, `numV`, `numAuto`) VALUES
(76076, 'superfie=6000 m2  numero_Porte=265', 182900, 'Moov Money', '2022-07-22', 76339, 4445);

-- --------------------------------------------------------

--
-- Structure de la table `Desistement`
--

CREATE TABLE `Desistement` (
  `numD` int(11) NOT NULL,
  `dateD` date NOT NULL,
  `nomC` varchar(30) NOT NULL,
  `cause` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Desistement`
--

INSERT INTO `Desistement` (`numD`, `dateD`, `nomC`, `cause`) VALUES
(74110, '2022-07-07', 'hyan', 'pas trop interessé a cause du peix'),
(95210, '2022-07-07', 'Afi', 'paffff');

-- --------------------------------------------------------

--
-- Structure de la table `etre_present`
--

CREATE TABLE `etre_present` (
  `id` int(11) NOT NULL,
  `numAuto` int(11) NOT NULL,
  `numD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etre_present`
--

INSERT INTO `etre_present` (`id`, `numAuto`, `numD`) VALUES
(74103, 12354, 74110),
(95201, 1236, 95210);

-- --------------------------------------------------------

--
-- Structure de la table `Immeuble`
--

CREATE TABLE `Immeuble` (
  `nomI` varchar(50) NOT NULL,
  `adresseI` varchar(50) NOT NULL,
  `nbrEtage` int(11) NOT NULL,
  `nbreAppart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Immeuble`
--

INSERT INTO `Immeuble` (`nomI`, `adresseI`, `nbrEtage`, `nbreAppart`) VALUES
('Atakpa', 'tsevie', 6, 10),
('Batchi', 'lome togo 2000', 8, 10),
('Blitchi', 'lome', 6, 12),
('Ghalhi', 'aneho', 5, 8),
('Godbless', 'lome', 5, 10),
('zodji', 'aneho', 6, 10);

-- --------------------------------------------------------

--
-- Structure de la table `Promesse`
--

CREATE TABLE `Promesse` (
  `id` int(11) NOT NULL,
  `nomC` varchar(30) NOT NULL,
  `prixHT` float NOT NULL,
  `prixTTC` float NOT NULL,
  `avance` float NOT NULL,
  `dateP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Promesse`
--

INSERT INTO `Promesse` (`id`, `nomC`, `prixHT`, `prixTTC`, `avance`, `dateP`) VALUES
(549428137, 'hyan', 155000, 182900, 40000, '2022-07-15'),
(672707264, 'hyan', 155000, 182900, 40000, '2022-07-22');

-- --------------------------------------------------------

--
-- Structure de la table `Vente`
--

CREATE TABLE `Vente` (
  `numV` int(11) NOT NULL,
  `infoV` varchar(300) NOT NULL,
  `nomC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Vente`
--

INSERT INTO `Vente` (`numV`, `infoV`, `nomC`) VALUES
(76339, '65 ', 'hyan');

-- --------------------------------------------------------

--
-- Structure de la table `Visite`
--

CREATE TABLE `Visite` (
  `numAppart` int(11) NOT NULL,
  `numCIN` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `dateVis` date NOT NULL,
  `remarque` varchar(300) NOT NULL,
  `decision` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Visite`
--

INSERT INTO `Visite` (`numAppart`, `numCIN`, `id`, `dateVis`, `remarque`, `decision`) VALUES
(7, 410, 115592887, '2022-07-06', 'super', 'desiré'),
(7, 852, 380909584, '2022-07-07', 'fffffff', 'desiré'),
(13, 410, 355425717, '2022-07-06', 'dddd', 'non desiré'),
(13, 410, 2069581037, '2022-07-06', 'rrrr', 'desiré'),
(14, 410, 590012127, '2022-07-07', 'aaaaa', 'desiré'),
(14, 874, 297668853, '2022-07-06', 'pas interessant', 'non desiré'),
(14, 874, 322338237, '2022-07-06', 'super', 'desiré'),
(56, 154, 187632953, '2022-07-07', 'nul', 'non desiré'),
(56, 7451, 930261108, '2022-07-07', 'merci', 'desiré'),
(61, 154, 710134684, '2022-07-07', 'super', 'desiré'),
(61, 1258, 1085294274, '2022-07-06', 'merci', 'desiré'),
(65, 154, 485732387, '2022-07-07', 'interessé', 'desiré');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `Appartement`
--
ALTER TABLE `Appartement`
  ADD PRIMARY KEY (`numAppart`),
  ADD KEY `Appartement_Immeuble0_FK` (`nomI`);

--
-- Index pour la table `Avocat`
--
ALTER TABLE `Avocat`
  ADD PRIMARY KEY (`numAuto`);

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`numCIN`);

--
-- Index pour la table `Contrat`
--
ALTER TABLE `Contrat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Desistement`
--
ALTER TABLE `Desistement`
  ADD PRIMARY KEY (`numD`);

--
-- Index pour la table `etre_present`
--
ALTER TABLE `etre_present`
  ADD PRIMARY KEY (`id`,`numAuto`,`numD`);

--
-- Index pour la table `Immeuble`
--
ALTER TABLE `Immeuble`
  ADD PRIMARY KEY (`nomI`);

--
-- Index pour la table `Promesse`
--
ALTER TABLE `Promesse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Vente`
--
ALTER TABLE `Vente`
  ADD PRIMARY KEY (`numV`);

--
-- Index pour la table `Visite`
--
ALTER TABLE `Visite`
  ADD PRIMARY KEY (`numAppart`,`numCIN`,`id`),
  ADD KEY `Visite_Client1_FK` (`numCIN`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Appartement`
--
ALTER TABLE `Appartement`
  ADD CONSTRAINT `Appartement_Immeuble0_FK` FOREIGN KEY (`nomI`) REFERENCES `Immeuble` (`nomI`);

--
-- Contraintes pour la table `Visite`
--
ALTER TABLE `Visite`
  ADD CONSTRAINT `Visite_Appartement0_FK` FOREIGN KEY (`numAppart`) REFERENCES `Appartement` (`numAppart`),
  ADD CONSTRAINT `Visite_Client1_FK` FOREIGN KEY (`numCIN`) REFERENCES `Client` (`numCIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
