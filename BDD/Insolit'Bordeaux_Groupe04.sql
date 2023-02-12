-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 10 fév. 2023 à 22:57
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogart23`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `numArt` int NOT NULL AUTO_INCREMENT,
  `dtCreArt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `libTitrArt` varchar(100) DEFAULT NULL,
  `libChapoArt` text,
  `libAccrochArt` varchar(100) DEFAULT NULL,
  `parag1Art` text,
  `libSsTitr1Art` varchar(100) DEFAULT NULL,
  `parag2Art` text,
  `libSsTitr2Art` varchar(100) DEFAULT NULL,
  `parag3Art` text,
  `libConclArt` text,
  `urlPhotArt` varchar(70) DEFAULT NULL,
  `numThem` int NOT NULL,
  PRIMARY KEY (`numArt`),
  KEY `ARTICLE_FK` (`numArt`),
  KEY `FK_ASSOCIATION_1` (`numThem`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`numArt`, `dtCreArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`) VALUES
(10, '2023-02-10 15:33:00', 'LA SCIENCE À LA POURSUITE DU CRIME', '1874, la préfecture de police se dote d’un service photographique. Celui-ci s’occupe initialement d’élaborer des portraits de “criminels de marque”. C’est petit à petit qu’il commence à confectionner des photographies de tous les individus arrêtés, pourtant son activité s’avère rapidement être problématique en matière d’identification: les clichés réalisés manquent d’uniformité et s’inspirent encore (le plus souvent) de portraits d’artistes réalisés par des photographes professionnels.\r\n', 'Reconnu comme étant l’un des fondateurs de la police scientifique française, Alphonse Bertillon a be', 'Sous l’instance de la troisième république, la préfecture de police se dote d’un service d’anthropométrie, suivi d’un service photographique. Rentre en jeu le petit policier de bureau, Alphonse Bertillon, rédacteur de fiches signalant les arrêts de personnes à la préfecture de Paris. Promu chef du service photographique, il y développe le “système Bertillon”. \r\n\r\nLe procédé est simple, il suffit de prendre vos mesures. Pourquoi donc ? \r\nÀ l’époque où les portraits robots se devaient d’être décrits avec le plus de précision possible, détailler ne serait-ce qu’une oreille devait s’appuyer sur une nomenclature précise. \r\n\r\nLa méthode réalisée, 14 points du corps mesurés suffisent à décrire les particularités physiques et ainsi identifier l’individu. On les disposait sur une carte qui, accompagnée de deux photographies et de détails physiques supplémentaires (couleurs des yeux, des cheveux) établissait un unique dossier, classable, ainsi qu’un casier judiciaire récupérable.\r\nProcédé pointilleux lorsque l’on connaît les fonctionnalités actuelles de la police scientifique, et de leur utilisation des empreintes digitales.\r\n', 'Une méthode pointilleuse', 'Mis au point, les estimations renvoient une chance sur 286 millions pour retrouver les mêmes mesures chez un autre individu. Révolutionnaire pour l’époque. \r\n\r\nPourtant, le bertillonnage doit faire ses preuves. En décembre 1882, le préfet de l’époque lui donne trois mois pour tester la validité de sa méthode. Juste avant l’échéance, le 16 février 1883, il parvient à identifier un criminel récidiviste arrêté peu de temps auparavant pour vol et pris en flagrant délit lors d’un cambriolage. Dissimulé sous un faux nom, il est trahi par les mesures de son corps qui le conduisent aux aveux. Une victoire pour Alphonse Bertillon entérinée par la création d’un Bureau d’identité en 1883.\r\n\r\nMême si cette méthode était très précise, les mesures prises poussaient à la stigmatisation de certains critères physiques, et permettait libertés individuelles. De simples jumeaux, de très jeunes hommes, ou les femmes avec leurs longs cheveux pouvaient induire en erreur et fausser les résultats. \r\n\r\nLa méthode Bertillon portera tout de même ses fruits, en aidant au total à identifier 43 suspects en 1883, 241 en 1884, 1 187 en 1887, mais malgré ses résultats elle sera petit à petit remplacée par l’analyse d’empreintes digitales.\r\n', 'Portraits tirés', 'Peu à peu, le « bertillonnage » s’étoffe. En plus des mensurations, la méthode fait également appel à la photographie anthropométrique « face/profil », mais aussi au signalement descriptif appelé « portrait parlé ».\r\n\r\nDans toutes les grandes villes, des bureaux d’identification fonctionnent sur le même modèle que le service parisien et ils alimentent autant le fichier central que des fichiers locaux ou spécialisés.\r\n\r\nAprès la fondation, en 1893, du service de l’Identité judiciaire, qui regroupe notamment le Bureau d’identité et le service photographique, on ajoute les empreintes digitales à l’arsenal permettant l’identification des suspects. Réticent en premier lieu à la conversion des fichiers anthropologiques sur laquelle repose sa renommée internationale. À partir de 1902, il relève pour la première fois des empreintes digitales sur une scène de crime. Convaincu de l’efficacité du système, il intègre au sein de ses services en 1910 une section d’identification spécialement dédiée à la reconnaissance de ce type. C’est le début de sa carrière de détective.\r\n', 'Vous connaissez l’appareil, le personnage, on vous raconte maintenant où les retrouver. Pour suivre son parcours et découvrir toutes ses grandes enquêtes, on vous propose de le retrouver aux archives départementales de la Gironde, où se déroule du 12 Décembre 2022 au 03 Avril 2023 l’exposition “La science à la poursuite du crime”.\r\n\r\nSituée en plein Bordeaux, elle est accessible en famille et nous ouvre les portes des secrets criminels de l’époque. En y retrouvant notre cher Alphonse Bertillon, vous pourrez découvrir les répertoires de ses enquêtes les plus célèbres et plonger dans l’histoire de la criminologie française.\r\n', '/../src/images/uploads/63e6b2ad4b709utilisateur.png', 1),
(11, '2023-02-10 22:53:00', 'Un guide de Bordeaux insolite', 'Pour visiter Bordeaux, c’est simple. Vélo, bateau, auto, tous les moyens sont bons pour découvrir la ville. Si Bordeaux détient en son sein plus de 400 monuments, elle détient néanmoins quelques secrets historiques peu visibles. Et pour pouvoir les entrevoir, ce n’est pas de ces transports dont on aura besoin mais plutôt d’un guide. En effet, si l\'on veut  découvrir Bordeaux plus en profondeur, on peut avoir l’envie de découvrir ses secrets, ses mythes et ses légendes. Au détour d’une ruelle, vous pourrez certainement vous demander comment cette rue pouvait vivre à l’époque de Michel de Montaigne ou encore de l’occupation allemande.\r\n', 'Le guide capable de vous faire découvrir Bordeaux d’une façon unique et insolite, on l’a déniché et ', 'Olivier Deltheil, de son nom, est maître conférencier à l’office de tourisme de Bordeaux. Ayant vécu en Gironde, plus précisément à Périgueux, il porte sa région dans son cœur et passe sa vie dans cette région. Passionné d’histoire, il va en faculté et obtient l’équivalent d’un master 2 dans ce domaine mais ne voulant pas être professeur d’histoire, un avenir généralement tout tracé lorsque l’on suit cette formation, il fera un service militaire et exercera les métiers de gendarme et de policier. Quelques années plus tard, le voici dans le rôle d’un bibliothécaire avant de pouvoir intégrer l’office du tourisme. Olivier Deltheil aura vécu mille vies avant de nous partager son expérience et de devenir conférencier à Bordeaux. Il réside depuis juillet à Valeuil mais continue d’exercer à l’office de tourisme afin de partager son admiration et ses connaissances sur Bordeaux et son histoire. Dans son envie de transmettre et partager toujours plus, il se lança le défi de faire visiter Bordeaux autrement. Pour lui, le plus intéressant c’est surtout faire revivre les sentiments des petites gens de l’époque, s’imaginer à la place, pendant quelques instants, de cette boulangère s’inquiétant à propos d’un mystérieux Basilic dans la rue du Mirail… Entre mystères et intrigues, lieux et monuments historiques, l’ancienne Burdigala n’a plus de secrets pour notre conférencier. \r\n', 'La passion d’un homme ordinaire', 'Monsieur Deltheil a de nombreuses missions, comme celle d’organiser des conférences, mais sa spécialité qu’il nous transmet avec joie et qui fait de lui un guide unique en son genre, c’est la reconstitution des scènes qu’il narre pour les touristes. Mises en scène, costumes, un vrai théâtre en plein air et même parfois dans un cadre nocturne afin d’accompagner l’histoire au temps des rêves. Et cela, même sous les mécontentements des habitants de Bordeaux, se plaignant de la voix porteuse de notre guide.\r\nSes personnages historiques favoris à jouer, Jean Dubois, Fermier de la Ferme générale, qui lui a déjà permis de rentrer dans le Musée des Douanes, Jean Lopez, un médecin de peste, Jean Verdier, premier auteur d\'une dynastie à Bordeaux ou encore Sam le Louloute, bourreau de Bordeaux, qui raconte que des horreurs, pouvoir parler de morts, de ses mises à mort, des histoires de meurtres, et il n’a aucune restriction au niveau du vocabulaire…\r\n Mais ce n’est pas un métier facile et sans contraintes. Il rencontre parfois des difficultés d\'accès à certains lieux et des refus de visites auprès d\'institutions… Parfois mis à mal par certains touristes irrespectueux ou désagréables, il nous assure avec enthousiasme que ce ne sont que les risques du métier !\r\n', 'De fascinantes histoires !', 'Lors de notre interview, Olivier Deltheil nous a partagé quelques unes de ses histoires et mythes favoris à savoir sur la ville de Bordeaux. A savoir, le mythe du Basilic au 17ème siècle. Cette chimère au corps de coq et une queue de serpent géant aurait résidé dans un puits situé rue du Mirail. Causant une mort foudroyante à tous ceux qui croisaient son regard. Cependant, un jour, un homme décidé à faire cesser ces massacres serait descendu du puits avec un miroir dirigé vers le Basilic. Occis par son propre regard, le Basilic devint une légende. Ainsi, depuis, la Rue du Mirail tira son nom de cette sombre affaire, qui faisait référence au miroir qui tua le Basilic.\r\nEn parlant plus en détail de Bordeaux sous l’occupation allemande, l\'ont appris qu’elle fut l’un des plus grands fiefs de la résistance française, même si soumise régulièrement à des contrôles des passages fluviaux et terrestres.\r\nC’est par ce détour qu’il aborda le fort du Hâ, un des rares endroits de Bordeaux avec une forte concentration de mélange d\'époques différentes. En effet, il nous conta, que ce fort fut le témoin de nombreux faits historiques de Bordeaux, telle que la dernière exécution publique à Bordeaux, l’affaire Pierre Delafet ou encore une prison royale importante pendant le règne de Louis XIV, pouvant même défier La Bastille. \r\n\r\n', 'Ce mélange d’époques important questionna le conférencier sur les changements actuels de la ville de Bordeaux. En parlant notamment du projet Bordeaux-Euratlantiques qui détruirait d\'anciennes échoppes et quartiers chers à son cœur. Mais par son éternel optimisme, il continua de raconter quelques anecdotes sur Bordeaux en elle-même. Olivier Deltheil connaît sur le bout des doigts toute l’histoire relative à notre chère ville. Voulant transmettre sans relâche son amour pour le patrimoine, il continue ses visites aussi passionnantes les unes que les autres. On ne peut que vous conseiller de vivre une expérience aussi extraordinaire avec Olivier Deltheil, que ce soit en journée, pour découvrir les vestiges du fort du Hâ par exemple ou bien encore de nuit, pour revivre la terrifiante histoire du Basilic de la rue du Mirail…\r\n', '/../src/images/uploads/63e6cb5db6153utilisateur.png', 2);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `numCom` int NOT NULL AUTO_INCREMENT,
  `dtCreCom` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `libCom` text NOT NULL,
  `attModOK` tinyint(1) DEFAULT '0',
  `dtModCom` timestamp NULL DEFAULT NULL,
  `notifComKOAff` text,
  `delLogiq` tinyint(1) DEFAULT '0',
  `numArt` int NOT NULL,
  `numMemb` int NOT NULL,
  PRIMARY KEY (`numCom`),
  KEY `COMMENT_FK` (`numCom`),
  KEY `FK_ASSOCIATION_2` (`numArt`),
  KEY `FK_ASSOCIATION_3` (`numMemb`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `likeart`
--

DROP TABLE IF EXISTS `likeart`;
CREATE TABLE IF NOT EXISTS `likeart` (
  `numMemb` int NOT NULL,
  `numArt` int NOT NULL,
  `likeA` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`numMemb`,`numArt`),
  KEY `LIKEART_FK` (`numMemb`,`numArt`),
  KEY `FK_LIKEART1` (`numArt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `numMemb` int NOT NULL AUTO_INCREMENT,
  `prenomMemb` varchar(70) NOT NULL,
  `nomMemb` varchar(70) NOT NULL,
  `pseudoMemb` varchar(70) NOT NULL,
  `passMemb` varchar(70) NOT NULL,
  `eMailMemb` varchar(100) NOT NULL,
  `dtCreaMemb` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numStat` int NOT NULL,
  PRIMARY KEY (`numMemb`),
  KEY `MEMBRE_FK` (`numMemb`),
  KEY `FK_ASSOCIATION_4` (`numStat`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `numStat`) VALUES
(18, 'Martine', 'Bornerie', 'Mbornerie', 'Mbornerie', 'mbornerie@gmail.com', '2023-02-10 14:23:39', 1),
(19, 'Chloé', 'Faye', 'cfaye', 'cfayefaye', 'cfaye@gmail.com', '2023-02-10 14:24:37', 2),
(20, 'Natacha', 'Twyffels', 'ntwyffels', 'ntwyffels', 'natacha.twyffels@gmail.com', '2023-02-10 14:25:08', 3);

-- --------------------------------------------------------

--
-- Structure de la table `motcle`
--

DROP TABLE IF EXISTS `motcle`;
CREATE TABLE IF NOT EXISTS `motcle` (
  `numMotCle` int NOT NULL AUTO_INCREMENT,
  `libMotCle` varchar(60) NOT NULL,
  PRIMARY KEY (`numMotCle`),
  KEY `MOTCLE_FK` (`numMotCle`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `motcle`
--

INSERT INTO `motcle` (`numMotCle`, `libMotCle`) VALUES
(10, 'Guide'),
(11, 'Visite'),
(12, 'Bordeaux');

-- --------------------------------------------------------

--
-- Structure de la table `motclearticle`
--

DROP TABLE IF EXISTS `motclearticle`;
CREATE TABLE IF NOT EXISTS `motclearticle` (
  `numArt` int NOT NULL,
  `numMotCle` int NOT NULL,
  PRIMARY KEY (`numArt`,`numMotCle`),
  KEY `MOTCLEARTICLE_FK` (`numArt`),
  KEY `MOTCLEARTICLE2_FK` (`numMotCle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `numStat` int NOT NULL AUTO_INCREMENT,
  `libStat` varchar(25) NOT NULL,
  PRIMARY KEY (`numStat`),
  KEY `STATUT_FK` (`numStat`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`numStat`, `libStat`) VALUES
(1, 'Administateur'),
(2, 'Modérateur'),
(3, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `thematique`
--

DROP TABLE IF EXISTS `thematique`;
CREATE TABLE IF NOT EXISTS `thematique` (
  `numThem` int NOT NULL AUTO_INCREMENT,
  `libThem` varchar(60) NOT NULL,
  PRIMARY KEY (`numThem`),
  KEY `THEMATIQUE_FK` (`numThem`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `thematique`
--

INSERT INTO `thematique` (`numThem`, `libThem`) VALUES
(1, 'L\'événement'),
(2, 'L\'acteur-clé'),
(3, 'Le mouvement émergeant'),
(4, 'L\'insolite / le clin d\'oeil');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`numThem`) REFERENCES `thematique` (`numThem`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `likeart`
--
ALTER TABLE `likeart`
  ADD CONSTRAINT `FK_LIKEART1` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_LIKEART2` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`numStat`) REFERENCES `statut` (`numStat`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `motclearticle`
--
ALTER TABLE `motclearticle`
  ADD CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`numMotCle`) REFERENCES `motcle` (`numMotCle`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
