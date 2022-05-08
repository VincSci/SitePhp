-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : jeu. 28 avr. 2022 à 06:44
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tpcashcash`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

DROP TABLE IF EXISTS `agence`;
CREATE TABLE IF NOT EXISTS `agence` (
  `NumeroAgence` int(11) NOT NULL,
  `NomAgence` varchar(15) NOT NULL,
  `AdresseAgence` varchar(30) NOT NULL,
  `TelephoneAgence` varchar(30) NOT NULL,
  PRIMARY KEY (`NumeroAgence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`NumeroAgence`, `NomAgence`, `AdresseAgence`, `TelephoneAgence`) VALUES
(1, 'Agence 1', '15 Rue Dici', '0320423612'),
(2, 'Agence 2', '124 Rue Dailleurs', '0320421263'),
(3, 'Agence 3', '77 Rue Parla', '0320427528');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `NumeroClient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(15) NOT NULL,
  `RaisonSociale` varchar(15) NOT NULL,
  `Siren` varchar(15) NOT NULL,
  `CodeAPE` varchar(15) NOT NULL,
  `Adresse` varchar(30) NOT NULL,
  `TelephoneClient` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `DureeDeplacement` time NOT NULL,
  `DistanceKm` int(11) NOT NULL,
  `NumeroAgence` int(11) NOT NULL,
  PRIMARY KEY (`NumeroClient`),
  KEY `Client_Agence_FK` (`NumeroAgence`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`NumeroClient`, `NomClient`, `RaisonSociale`, `Siren`, `CodeAPE`, `Adresse`, `TelephoneClient`, `Email`, `DureeDeplacement`, `DistanceKm`, `NumeroAgence`) VALUES
(1, 'Auchan', 'SARL', '123456789', 'Commerce', '12 Rue DeNulPart', '0320010101', 'auchan@truc.fr', '00:00:02', 50, 1),
(2, 'Leclerc', 'SAS', '987654321', 'Commerce', '15 Rue Dailleurs', '0320020202', 'leclerc@truc.fr', '00:00:01', 40, 2),
(3, 'Carrefour', 'SARL', '024686420', 'Commerce', '151 Rue Boullevard', '0320030303', 'carrefour@truc.fr', '00:00:03', 60, 3),
(4, 'Lidle', 'SAS', '135797531', 'Commerce', '13 Rue Chance', '0320040404', 'lidle@truc.fr', '00:00:01', 40, 1),
(5, 'Cora', 'SARL', '456012793', 'Commerce', '7 Rue Chiffre', '0320050505', 'cora@truc.fr', '00:00:02', 50, 2);

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(15) NOT NULL,
  `motdepasse` varchar(15) NOT NULL,
  `poste` varchar(15) NOT NULL,
  `Matricule` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Matricule` (`Matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `identifiant`, `motdepasse`, `poste`, `Matricule`) VALUES
(1, 'dupontj', 'truc', 'gest', 1),
(2, 'dupondj', 'truc', 'gest', 2),
(3, 'michelj', 'truc', 'tech', 3),
(4, 'paulj', 'truc', 'tech', 4),
(5, 'lucj', 'truc', 'tech', 5),
(6, 'pierrej', 'truc', 'tech', 6);

-- --------------------------------------------------------

--
-- Structure de la table `contratdemaintenance`
--

DROP TABLE IF EXISTS `contratdemaintenance`;
CREATE TABLE IF NOT EXISTS `contratdemaintenance` (
  `NumeroDeContrat` int(11) NOT NULL,
  `DateSignature` date NOT NULL,
  `DateEcheance` date NOT NULL,
  `NumeroClient` int(11) NOT NULL,
  `RefTypeContrat` varchar(10) NOT NULL,
  PRIMARY KEY (`NumeroDeContrat`),
  UNIQUE KEY `ContratDeMaintenance_Client_AK` (`NumeroClient`),
  KEY `ContratDeMaintenance_TypeContrat0_FK` (`RefTypeContrat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contratdemaintenance`
--

INSERT INTO `contratdemaintenance` (`NumeroDeContrat`, `DateSignature`, `DateEcheance`, `NumeroClient`, `RefTypeContrat`) VALUES
(1, '2018-11-20', '2020-11-20', 1, 'Type A'),
(2, '2018-10-18', '2020-10-18', 2, 'Type B'),
(3, '2018-09-16', '2020-09-16', 3, 'Type A'),
(4, '2018-08-14', '2020-08-14', 4, 'Type B'),
(5, '2018-07-12', '2020-07-12', 5, 'Type A');

-- --------------------------------------------------------

--
-- Structure de la table `controler`
--

DROP TABLE IF EXISTS `controler`;
CREATE TABLE IF NOT EXISTS `controler` (
  `NumeroIntervention` int(11) NOT NULL,
  `NumeroDeSerie` int(11) NOT NULL,
  `Commentaire` varchar(30) NOT NULL,
  PRIMARY KEY (`NumeroIntervention`,`NumeroDeSerie`),
  KEY `Controler_Materiel0_FK` (`NumeroDeSerie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `controler`
--

INSERT INTO `controler` (`NumeroIntervention`, `NumeroDeSerie`, `Commentaire`) VALUES
(1, 111, ' '),
(2, 212, ' '),
(3, 113, ' '),
(4, 314, ' '),
(5, 215, ' '),
(6, 311, ' '),
(7, 212, ' '),
(8, 313, ' '),
(9, 314, ' '),
(10, 315, ' '),
(11, 111, ' Aucun');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `Matricule` int(10) NOT NULL AUTO_INCREMENT,
  `NomEmploye` varchar(15) NOT NULL,
  `PrenomEmploye` varchar(15) NOT NULL,
  `AdresseEmploye` varchar(30) NOT NULL,
  `DateEmbauche` text NOT NULL,
  PRIMARY KEY (`Matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`Matricule`, `NomEmploye`, `PrenomEmploye`, `AdresseEmploye`, `DateEmbauche`) VALUES
(1, 'Dupont', 'Jean', '17 Rue QuelquePart', '10-01-2016'),
(2, 'Dupond', 'Jean', '141 Rue Parlaba', '20-02-2016'),
(3, 'Michel', 'Jean', '18 Rue Pasici', '11-01-2017'),
(4, 'Paul', 'Jean', '146 Rue Lointain', '22-02-2017'),
(5, 'Luc', 'Jean', '77 Rue Acoter', '13-03-2017'),
(6, 'Pierre', 'Jean', '23 Rue Patroploin', '24-04-2017');

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

DROP TABLE IF EXISTS `intervention`;
CREATE TABLE IF NOT EXISTS `intervention` (
  `NumeroIntervention` int(11) NOT NULL AUTO_INCREMENT,
  `DateVisite` text NOT NULL,
  `HeureDebVisite` time NOT NULL,
  `HeureFinVisite` time NOT NULL,
  `Etat` varchar(20) NOT NULL,
  `NumeroClient` int(11) NOT NULL,
  `Matricule` int(10) NOT NULL,
  PRIMARY KEY (`NumeroIntervention`),
  KEY `Intervention_Client_FK` (`NumeroClient`),
  KEY `Intervention_Technicien0_FK` (`Matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `intervention`
--

INSERT INTO `intervention` (`NumeroIntervention`, `DateVisite`, `HeureDebVisite`, `HeureFinVisite`, `Etat`, `NumeroClient`, `Matricule`) VALUES
(1, '02-04-2019', '09:35:00', '09:55:00', 'Realiser', 1, 3),
(2, '17-04-2019', '14:00:00', '14:15:00', 'Realiser', 2, 4),
(3, '18-05-2019', '14:30:00', '15:00:00', 'Realiser', 3, 5),
(4, '19-05-2019', '10:15:00', '10:40:00', 'Realiser', 4, 6),
(5, '21-06-2019', '11:45:00', '11:55:00', 'Realiser', 5, 3),
(6, '10-07-2019', '08:15:00', '08:35:00', 'Realiser', 1, 4),
(7, '12-07-2019', '14:30:00', '15:05:00', 'Realiser', 2, 5),
(8, '17-08-2019', '10:45:00', '11:10:00', 'Realiser', 3, 6),
(9, '18-08-2019', '10:15:00', '10:45:00', 'Realiser', 4, 3),
(10, '19-08-2019', '17:30:00', '18:15:00', 'Realiser', 5, 4),
(11, '07-04-2021', '14:25:00', '14:45:00', 'Realiser', 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `NumeroDeSerie` int(11) NOT NULL,
  `DateDeVente` date NOT NULL,
  `Dateinstallation` date NOT NULL,
  `prixDeVente` float NOT NULL,
  `Emplacement` varchar(25) NOT NULL,
  `SousContrat` int(11) NOT NULL,
  `ReferenceInterne` varchar(10) NOT NULL,
  `NumeroDeContrat` int(11) DEFAULT NULL,
  `NumeroClient` int(11) NOT NULL,
  PRIMARY KEY (`NumeroDeSerie`),
  KEY `Materiel_TypeMateriel_FK` (`ReferenceInterne`),
  KEY `Materiel_ContratDeMaintenance0_FK` (`NumeroDeContrat`),
  KEY `Materiel_Client1_FK` (`NumeroClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`NumeroDeSerie`, `DateDeVente`, `Dateinstallation`, `prixDeVente`, `Emplacement`, `SousContrat`, `ReferenceInterne`, `NumeroDeContrat`, `NumeroClient`) VALUES
(111, '2019-01-14', '2019-01-15', 25, 'Bureau Comptable', 0, 'B1265', 1, 1),
(112, '2019-02-17', '2019-02-18', 25, 'Bureau Comptable', 0, 'B1265', 2, 2),
(113, '2019-03-20', '2019-03-21', 25, 'Bureau Comptable', 0, 'B1265', 3, 3),
(114, '2019-04-23', '2019-04-24', 25, 'Bureau Comptable', 0, 'B1265', 4, 4),
(115, '2019-05-26', '2019-05-27', 25, 'Bureau Comptable', 0, 'B1265', 5, 5),
(211, '2019-01-14', '2019-01-15', 95, 'Bureau Comptable', 0, 'C2156', 1, 1),
(212, '2019-02-17', '2019-02-18', 95, 'Bureau Comptable', 0, 'C2156', 2, 2),
(213, '2019-03-20', '2019-03-21', 95, 'Bureau Comptable', 0, 'C2156', 3, 3),
(214, '2019-04-23', '2019-04-24', 95, 'Bureau Comptable', 0, 'C2156', 4, 4),
(215, '2019-05-26', '2019-05-27', 95, 'Bureau Comptable', 0, 'C2156', 5, 5),
(311, '2019-01-14', '2019-01-15', 150, 'Bureau Comptable', 0, 'A3478', 1, 1),
(312, '2019-02-17', '2019-02-18', 150, 'Bureau Comptable', 0, 'A3478', 2, 2),
(313, '2019-03-20', '2019-03-21', 150, 'Bureau Comptable', 0, 'A3478', 3, 3),
(314, '2019-04-23', '2019-04-24', 150, 'Bureau Comptable', 0, 'A3478', 4, 4),
(315, '2019-05-26', '2019-05-27', 150, 'Bureau Comptable', 0, 'A3478', 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `Matricule` int(10) NOT NULL,
  `TelephoneMobile` varchar(10) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `DateObtention` text NOT NULL,
  `NomEmploye` varchar(15) NOT NULL,
  `PrenomEmploye` varchar(15) NOT NULL,
  `AdresseEmploye` varchar(30) NOT NULL,
  `DateEmbauche` text NOT NULL,
  `NumeroAgence` int(11) NOT NULL,
  PRIMARY KEY (`Matricule`),
  KEY `Technicien_Agence0_FK` (`NumeroAgence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `technicien`
--

INSERT INTO `technicien` (`Matricule`, `TelephoneMobile`, `Qualification`, `DateObtention`, `NomEmploye`, `PrenomEmploye`, `AdresseEmploye`, `DateEmbauche`, `NumeroAgence`) VALUES
(3, '0618784321', 'Technicien', '11-12-2016', 'Michel', 'Jean', '18 Rue Pasici', '11-01-2017', 1),
(4, '0621749641', 'Technicien', '22-01-2017', 'Paul', 'Jean', '146 Rue Lointain', '22-02-2017', 1),
(5, '0624892345', 'Technicien', '13-02-2017', 'Luc', 'Jean', '77 Rue Acoter', '13-03-2017', 2),
(6, '0675214899', 'Technicien', '24-03-2017', 'Pierre', 'Jean', '23 Rue Patroploin', '24-04-2017', 3);

-- --------------------------------------------------------

--
-- Structure de la table `typecontrat`
--

DROP TABLE IF EXISTS `typecontrat`;
CREATE TABLE IF NOT EXISTS `typecontrat` (
  `RefTypeContrat` varchar(10) NOT NULL,
  `DelaiIntervention` varchar(10) NOT NULL,
  `TauxApplicable` float NOT NULL,
  PRIMARY KEY (`RefTypeContrat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typecontrat`
--

INSERT INTO `typecontrat` (`RefTypeContrat`, `DelaiIntervention`, `TauxApplicable`) VALUES
('Type A', '14', 0.5),
('Type B', '7', 1);

-- --------------------------------------------------------

--
-- Structure de la table `typemateriel`
--

DROP TABLE IF EXISTS `typemateriel`;
CREATE TABLE IF NOT EXISTS `typemateriel` (
  `ReferenceInterne` varchar(10) NOT NULL,
  `LibelleTypeMateriel` varchar(15) NOT NULL,
  PRIMARY KEY (`ReferenceInterne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typemateriel`
--

INSERT INTO `typemateriel` (`ReferenceInterne`, `LibelleTypeMateriel`) VALUES
('A3478', 'Ecran'),
('B1265', 'Souris'),
('C2156', 'Clavier');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `Client_Agence_FK` FOREIGN KEY (`NumeroAgence`) REFERENCES `agence` (`NumeroAgence`);

--
-- Contraintes pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD CONSTRAINT `connexion_ibfk_1` FOREIGN KEY (`Matricule`) REFERENCES `employe` (`Matricule`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `contratdemaintenance`
--
ALTER TABLE `contratdemaintenance`
  ADD CONSTRAINT `ContratDeMaintenance_Client_FK` FOREIGN KEY (`NumeroClient`) REFERENCES `client` (`NumeroClient`),
  ADD CONSTRAINT `ContratDeMaintenance_TypeContrat0_FK` FOREIGN KEY (`RefTypeContrat`) REFERENCES `typecontrat` (`RefTypeContrat`);

--
-- Contraintes pour la table `controler`
--
ALTER TABLE `controler`
  ADD CONSTRAINT `Controler_Intervention_FK` FOREIGN KEY (`NumeroIntervention`) REFERENCES `intervention` (`NumeroIntervention`),
  ADD CONSTRAINT `Controler_Materiel0_FK` FOREIGN KEY (`NumeroDeSerie`) REFERENCES `materiel` (`NumeroDeSerie`);

--
-- Contraintes pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD CONSTRAINT `Intervention_Client_FK` FOREIGN KEY (`NumeroClient`) REFERENCES `client` (`NumeroClient`),
  ADD CONSTRAINT `Intervention_Technicien0_FK` FOREIGN KEY (`Matricule`) REFERENCES `technicien` (`Matricule`);

--
-- Contraintes pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD CONSTRAINT `Materiel_Client1_FK` FOREIGN KEY (`NumeroClient`) REFERENCES `client` (`NumeroClient`),
  ADD CONSTRAINT `Materiel_ContratDeMaintenance0_FK` FOREIGN KEY (`NumeroDeContrat`) REFERENCES `contratdemaintenance` (`NumeroDeContrat`),
  ADD CONSTRAINT `Materiel_TypeMateriel_FK` FOREIGN KEY (`ReferenceInterne`) REFERENCES `typemateriel` (`ReferenceInterne`);

--
-- Contraintes pour la table `technicien`
--
ALTER TABLE `technicien`
  ADD CONSTRAINT `Technicien_Agence0_FK` FOREIGN KEY (`NumeroAgence`) REFERENCES `agence` (`NumeroAgence`),
  ADD CONSTRAINT `Technicien_Employe_FK` FOREIGN KEY (`Matricule`) REFERENCES `employe` (`Matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
