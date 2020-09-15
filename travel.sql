-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 30 août 2020 à 20:12
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `travel_1`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('salah', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `username` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`username`, `fname`, `lname`, `email`, `pass`, `tel`) VALUES
('Salah-10', 'salah', 'ezz', 'ezzahisalah5@gmail.com', '12345', 614200838),
('zaze', 'vb', 'bv', 'jnion@JBB.com', '1234', 67);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('nb', 'kk@kk.cc', 'hqfgsfgshdfsjvhdscksmsdc'),
('nb', 'kkk@jj.com', 'jdfjskhfdskjfhds'),
('nb', 'jflkfd0De@zjkdnez.cbhe', 'jfdsfhdskfhskjfhks'),
('khayzo', 'hhfdsjk@jj.cc', 'wa bch7al khayzo'),
('EZZAHI', 'ezzahisalah5@gmail.com', 'ji'),
('EZZAHI', 'ezzahisalah5@gmail.com', 'ji');

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `nom_h` varchar(255) DEFAULT NULL,
  `room` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`id`, `nom_h`, `room`) VALUES
(1, 'nejma', -11),
(2, 're', -10),
(3, 'za', 5),
(4, 'rere', 79),
(5, 'reza', 2),
(6, 'nejma lil', -9),
(7, 'chams', 2),
(8, 'layali', 11),
(9, 'la', 3);

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `id_o` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `transport` varchar(255) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `depart` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `hotel` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id_o`, `nom`, `description`, `photo`, `transport`, `prix`, `depart`, `destination`, `date_debut`, `date_fin`, `hotel`) VALUES
(21, 'BELGHAIHcldzkcm', 'jldskljclsd', '8501.jpeg', 'car', 142, 'Marrakech', 'Laayoun', '2020-08-06', '2020-08-19', 2),
(20, 'BELGHAIH kdklll', 'jsvkjsvksjlvs', '6803.jpg', 'avion', 123, 'Marrakech', 'Laayoun', '2020-08-04', '2020-08-11', 2),
(17, 'BELGHAIHcldzkcm', 'jdfsfn;sns', '2463.jpg', 'avion', 12131, 'safi', 'casa', '2020-07-30', '2020-08-06', 1),
(22, 'jkfksks', 'jefs;ncs;,cs', '9900.jpg', 'car', 1414, 'safi', 'dakhla', '2020-08-04', '2020-08-12', 4),
(23, '', '', '7551.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(24, '', '', '4076.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(25, '', '', '2186.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(26, '', '', '4807.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(27, '', '', '5398.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(28, '', '', '3577.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(29, '', '', '5533.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(30, '', '', '7145.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(31, '', '', '6335.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(32, '', '', '1438.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(33, '', '', '3419.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(34, '', '', '4740.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(35, '', '', '6833.', '', 0, '', '', '0000-00-00', '0000-00-00', 1),
(36, '', '', '7197.', '', 0, '', '', '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_r` int(11) NOT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `offre_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `persons` int(11) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_r`, `hotel_id`, `offre_id`, `email`, `persons`, `f_name`, `l_name`, `tel`) VALUES
(1, 4, 22, 'mohammedguitariste@gmail.com', 12, 'jh', 'dsq', 124643),
(2, 4, 22, 'zoz@vlog.cc', 22, 'zoz', 'vlog', 2131421),
(3, 4, 22, 'zoz@vlog.cc', 22, 'zoz', 'vlog', 2131421),
(4, 3, 17, 'mm@jj.cc', 10, 'hamid', 'botbo9alt', 123555),
(5, 3, 22, 'mm@jj.cc', 16, 'hamid', 'botbo9alt', 123555),
(6, 3, 22, 'za@dd.cc', 16, 'zed', 'wld', 123322),
(7, 4, 22, 'bvs@fd.vv', 10, 'hh', 'shdqj', 123213);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id_o`),
  ADD KEY `hotel` (`hotel`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_r`,`offre_id`,`email`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `offre_id` (`offre_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `id_o` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
