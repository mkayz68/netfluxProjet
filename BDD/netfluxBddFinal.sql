-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 26 avr. 2019 à 13:40
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `netfluxFinal`
--

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `ajoutserie`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `ajoutserie` (
`nomSerie` varchar(100)
,`dateDébut` date
,`dateFin` date
,`nbrSaisons` int(11)
,`articleSerie` text
,`urlImageArticle` varchar(255)
,`synopSerie` text
,`urlImageSynop` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure de la table `Article`
--

CREATE TABLE `Article` (
  `idArticle` int(11) NOT NULL,
  `articleSerie` text,
  `urlImageArticle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE `Categorie` (
  `idCategorie` int(11) NOT NULL,
  `typeCategorie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categoriserSerie`
--

CREATE TABLE `categoriserSerie` (
  `idSerie` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Serie`
--

CREATE TABLE `Serie` (
  `idSerie` int(11) NOT NULL,
  `nomSerie` varchar(100) DEFAULT NULL,
  `dateDébut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `nbrSaisons` int(11) DEFAULT NULL,
  `idArticle` int(11) DEFAULT NULL,
  `idSynopsis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Synopsis`
--

CREATE TABLE `Synopsis` (
  `idSynopsis` int(11) NOT NULL,
  `synopSerie` text,
  `urlImageSynop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la vue `ajoutserie`
--
DROP TABLE IF EXISTS `ajoutserie`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `netfluxfinal`.`ajoutserie`  AS  select `netfluxfinal`.`serie`.`nomSerie` AS `nomSerie`,`netfluxfinal`.`serie`.`dateDébut` AS `dateDébut`,`netfluxfinal`.`serie`.`dateFin` AS `dateFin`,`netfluxfinal`.`serie`.`nbrSaisons` AS `nbrSaisons`,`netfluxfinal`.`article`.`articleSerie` AS `articleSerie`,`netfluxfinal`.`article`.`urlImageArticle` AS `urlImageArticle`,`netfluxfinal`.`synopsis`.`synopSerie` AS `synopSerie`,`netfluxfinal`.`synopsis`.`urlImageSynop` AS `urlImageSynop` from ((`netfluxfinal`.`synopsis` join `netfluxfinal`.`serie` on((`netfluxfinal`.`synopsis`.`idSynopsis` = `netfluxfinal`.`serie`.`idSynopsis`))) join `netfluxfinal`.`article` on((`netfluxfinal`.`serie`.`idArticle` = `netfluxfinal`.`article`.`idArticle`))) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`idArticle`);

--
-- Index pour la table `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `categoriserSerie`
--
ALTER TABLE `categoriserSerie`
  ADD PRIMARY KEY (`idSerie`,`idCategorie`),
  ADD KEY `FK_categoriserSerie_idCategorie` (`idCategorie`);

--
-- Index pour la table `Serie`
--
ALTER TABLE `Serie`
  ADD PRIMARY KEY (`idSerie`),
  ADD KEY `FK_Serie_idArticle` (`idArticle`),
  ADD KEY `FK_Serie_idSynopsis` (`idSynopsis`);

--
-- Index pour la table `Synopsis`
--
ALTER TABLE `Synopsis`
  ADD PRIMARY KEY (`idSynopsis`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Article`
--
ALTER TABLE `Article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categoriserSerie`
--
ALTER TABLE `categoriserSerie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Serie`
--
ALTER TABLE `Serie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Synopsis`
--
ALTER TABLE `Synopsis`
  MODIFY `idSynopsis` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categoriserSerie`
--
ALTER TABLE `categoriserSerie`
  ADD CONSTRAINT `FK_categoriserSerie_idCategorie` FOREIGN KEY (`idCategorie`) REFERENCES `Categorie` (`idCategorie`),
  ADD CONSTRAINT `FK_categoriserSerie_idSerie` FOREIGN KEY (`idSerie`) REFERENCES `Serie` (`idSerie`);

--
-- Contraintes pour la table `Serie`
--
ALTER TABLE `Serie`
  ADD CONSTRAINT `FK_Serie_idArticle` FOREIGN KEY (`idArticle`) REFERENCES `Article` (`idArticle`),
  ADD CONSTRAINT `FK_Serie_idSynopsis` FOREIGN KEY (`idSynopsis`) REFERENCES `Synopsis` (`idSynopsis`);
