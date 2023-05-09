-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 juin 2022 à 11:41
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vns`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `idachat` int(11) NOT NULL,
  `prenom_nom` varchar(255) NOT NULL,
  `idpiece` int(11) NOT NULL,
  `id_piece_no` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `date_nai` date NOT NULL,
  `date_achat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`idachat`, `prenom_nom`, `idpiece`, `id_piece_no`, `tel`, `mail`, `date_nai`, `date_achat`) VALUES
(10, 'ui', 2, 'rt8', '0789009888', 'gh@j.v', '2000-10-01', '2022-06-22'),
(15, 'klkkk', 1, 'rt89999999', '0748135717', 'kernel0748@gmail.com', '2022-06-16', '2022-06-22'),
(16, 'assamou kouadio', 4, 'P012345678', '0799880987', 'yazi@gmail.com', '2000-06-09', '2022-06-24'),
(17, 'kone idriss', 1, '097456744', '0789900096', 'kjg@gn.ck', '1999-10-01', '2022-06-27');

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

CREATE TABLE `depot` (
  `id_depot_type_id` int(11) NOT NULL,
  `id_depot_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `depot`
--

INSERT INTO `depot` (`id_depot_type_id`, `id_depot_type`) VALUES
(1, 'Orange'),
(2, 'Mtn'),
(3, 'Moov'),
(4, 'Wave');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `idpiece` int(11) NOT NULL,
  `piece` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`idpiece`, `piece`) VALUES
(1, 'CNI'),
(2, 'Passeport'),
(3, 'Attestation d\'identité'),
(4, 'Permis de conduite');

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE `poste` (
  `idposte` int(11) NOT NULL,
  `poste` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `poste`
--

INSERT INTO `poste` (`idposte`, `poste`) VALUES
(1, 'Administrateur'),
(2, 'Gestionnaire');

-- --------------------------------------------------------

--
-- Structure de la table `rechargement`
--

CREATE TABLE `rechargement` (
  `idrechargement` int(11) NOT NULL,
  `num_cart` varchar(255) NOT NULL,
  `prenom_nom` varchar(255) NOT NULL,
  `quatres_chiffres` varchar(255) NOT NULL,
  `montant` varchar(255) NOT NULL,
  `id_depot_type_id` int(11) NOT NULL,
  `preuve` varchar(255) NOT NULL,
  `date_rech` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rechargement`
--

INSERT INTO `rechargement` (`idrechargement`, `num_cart`, `prenom_nom`, `quatres_chiffres`, `montant`, `id_depot_type_id`, `preuve`, `date_rech`) VALUES
(1, '90000', '070997655', '7895', '15000', 1, 'logo.png', '2022-06-22'),
(2, '90000', '070997655', '7895', '15000', 1, 'logo.png', '2022-06-22'),
(3, '90000', '070997655', '7895', '15000', 1, 'logo.png', '2022-06-22');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `idTRANSACTION` int(11) NOT NULL,
  `id_depot_type_id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `date` date NOT NULL,
  `montant_debut` varchar(255) NOT NULL,
  `montant_fin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`idTRANSACTION`, `id_depot_type_id`, `iduser`, `date`, `montant_debut`, `montant_fin`) VALUES
(1, 1, 2, '2022-06-23', '100000', '150000'),
(2, 4, 1, '2022-06-23', '200000', '190000');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `idposte` int(11) NOT NULL,
  `nomprenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `idposte`, `nomprenom`, `pseudo`, `mail`, `password`) VALUES
(1, 1, 'konate mamadou', 'kernel', 'kernel0748@gmail.com', '0000'),
(2, 2, 'kouame nicaise kouame', 'jurnior', 'knk@gmail.com', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`idachat`),
  ADD UNIQUE KEY `id_piece_no_UNIQUE` (`id_piece_no`),
  ADD KEY `fk_achat_piece1_idx` (`idpiece`);

--
-- Index pour la table `depot`
--
ALTER TABLE `depot`
  ADD PRIMARY KEY (`id_depot_type_id`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`idpiece`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`idposte`);

--
-- Index pour la table `rechargement`
--
ALTER TABLE `rechargement`
  ADD PRIMARY KEY (`idrechargement`),
  ADD KEY `fk_rechargement_depot1_idx` (`id_depot_type_id`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`idTRANSACTION`),
  ADD KEY `fk_TRANSACTION_user1_idx` (`iduser`),
  ADD KEY `fk_TRANSACTION_depot1_idx` (`id_depot_type_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `mail_UNIQUE` (`mail`),
  ADD KEY `fk_user_poste1_idx` (`idposte`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `idachat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `depot`
--
ALTER TABLE `depot`
  MODIFY `id_depot_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `idpiece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `poste`
--
ALTER TABLE `poste`
  MODIFY `idposte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `rechargement`
--
ALTER TABLE `rechargement`
  MODIFY `idrechargement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `idTRANSACTION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `fk_achat_piece1` FOREIGN KEY (`idpiece`) REFERENCES `piece` (`idpiece`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `rechargement`
--
ALTER TABLE `rechargement`
  ADD CONSTRAINT `fk_rechargement_depot1` FOREIGN KEY (`id_depot_type_id`) REFERENCES `depot` (`id_depot_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_TRANSACTION_depot1` FOREIGN KEY (`id_depot_type_id`) REFERENCES `depot` (`id_depot_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TRANSACTION_user1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_poste1` FOREIGN KEY (`idposte`) REFERENCES `poste` (`idposte`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
vnsrechargementrechargement