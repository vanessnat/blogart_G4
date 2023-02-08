/**********************************************************************/
/** Blog des articles (BD MySQL) du cours M2203
//
// Création du script de la base de données BLOGART
//
// @Martine Bornerie    Le 17/01/23 12:27:00
//
// nom script : CreateDbBlogArt23_OK.sql
*/
/**********************************************************************/
/*====================================================================*/
/*
** Format d'un article (détail tuple) :

	ILLUSTRATION / PHOTO ⇒ URL

	TITRE :			  100 caractères

	CHAPEAU :		  500 caractères

   ACCROCHE :       100 caractères

	PARAGRAPHE 1 :
     SOUS-TITRE 1 : 100 caractères
	  DÉTAIL :       1200 caractères

   PARAGRAPHE 2 :
     SOUS-TITRE 2 : 100 caractères
	  DÉTAIL :       1200 caractères

   PARAGRAPHE 3 :
	  DÉTAIL :	     1200 caractères

	CONCLUSION :	  800 caractères

	MOTS-CLÉS :		  60 caractères
**
*/
/*====================================================================*/

-- First we create the database

CREATE DATABASE BLOGART23
DEFAULT CHARACTER SET UTF8			  -- Tous les formats de caractères
DEFAULT COLLATE utf8_general_ci ;  --

-- SHOW VARIABLES;					  -- Voir les paramètres de la BD

-- Then we add a user to the database


-- Flush / Init all privileges
FLUSH PRIVILEGES;

-- Now we create the Database

-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 13 mars 2020 à 17:17
-- Version du serveur: 5.5.33
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: BLOGART
--
USE BLOGART23;


-- --------------------------------------------------------------------
--
-- Structure de la table THEMATIQUE
--
/*====================================================================*/
/* Table : THEMATIQUE                                                 */
/*====================================================================*/
create table THEMATIQUE
(
   numThem int(10) not null auto_increment, -- PK numéro thématique
   libThem varchar(60) not null, -- nom thèmatique
   primary key (numThem)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : THEMATIQUE_FK                                              */
/*====================================================================*/
create index THEMATIQUE_FK on THEMATIQUE
(
   numThem
);


-- --------------------------------------------------------------------
--
-- Structure de la table MEMBRE
--
/*====================================================================*/
/* Table : MEMBRE                                                     */
/*====================================================================*/
create table MEMBRE
(
   numMemb int(10) not null auto_increment, -- PK
   prenomMemb varchar(70) not null,
   nomMemb varchar(70) not null,
   pseudoMemb varchar(70) not null,
   passMemb varchar(70) not null,
   eMailMemb varchar(100) not null,
   dtCreaMemb timestamp default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   numStat int(5) not null,                  -- FK
   primary key (numMemb)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : MEMBRE_FK                                                  */
/*====================================================================*/
create index MEMBRE_FK on MEMBRE
(
   numMemb
);


-- --------------------------------------------------------------------
--
-- Structure de la table ARTICLE
--
/*====================================================================*/
/* Table : ARTICLE                                              	    */
/*====================================================================*/
create table ARTICLE
(
   numArt int(8) not null auto_increment,   -- PK numéro article
   dtCreArt timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,	-- Date création article
   libTitrArt varchar(100),	   -- Titre article
   libChapoArt text(500),			-- Titre chapeau
   libAccrochArt varchar(100),	-- Accroche paragraphe 1
   parag1Art text(1200),			-- Paragraphe 1 chapeau
   libSsTitr1Art varchar(100),	-- Titre sous-titre 1
   parag2Art text(1200),			-- Paragraphe 2 sous-titre 2
   libSsTitr2Art varchar(100),	-- Titre sous-titre 2
   parag3Art text(1200),			-- Paragraphe 3
   libConclArt text(800),			-- Conclusion : Paragraphe conclusion
   urlPhotArt varchar(70),			-- url photo article
   numThem int(10) not null,	   -- FK numéro thématique
   primary key (numArt)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : ARTICLE_FK                                     			    */
/*====================================================================*/
create index ARTICLE_FK on ARTICLE
(
   numArt
);


-- --------------------------------------------------------------------
--
-- Structure de la table STATUT
--
/*====================================================================*/
/* Table : STATUT                                                 	 */
/*====================================================================*/
create table STATUT
(
   numStat int(5) not null auto_increment,   -- PK
   libStat varchar(25) not null,
   primary key (numStat)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : STATUT_FK                                     				 */
/*====================================================================*/
create index STATUT_FK on STATUT
(
   numStat
);


-- --------------------------------------------------------------------
--
-- Structure de la table MOTCLE
--
/*====================================================================*/
/* Table : MOTCLE                                                     */
/*====================================================================*/
create table MOTCLE
(
   numMotCle int(8) not null auto_increment,   -- PK
   libMotCle varchar(60) not null,
   primary key (numMotCle)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : MOTCLE_FK                                                  */
/*====================================================================*/
create index MOTCLE_FK on MOTCLE
(
   numMotCle
);


-- --------------------------------------------------------------------
--
-- Structure de la table COMMENT
--
/*====================================================================*/
/* Table : COMMENT                                                    */
/*====================================================================*/
create table COMMENT
(
   numCom int(10) not null auto_increment,       -- PK
   dtCreCom timestamp DEFAULT CURRENT_TIMESTAMP, -- Date jour à la création comment
   libCom text(600) not null,     -- Au moins un caractère :-)
   attModOK bool default false,   -- Attente visa modération (Visible si true)
   dtModCom timestamp,   -- Date jour modif après modération (Visible ou pas)
   notifComKOAff text(300) default null, -- comment admin si reste Visible après modération
   delLogiq bool default false,   -- del logique comment => TRUE : Pas Affich
   numArt int(8) not null,        -- PK, FK
   numMemb int(10) not null,      -- PK, FK
   primary key (numCom)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : COMMENT_FK                                                 */
/*====================================================================*/
create index COMMENT_FK on COMMENT
(
   numCom
);


-- --------------------------------------------------------------------
--
-- Structure de la table MOTCLEARTICLE   (TJ)
--
/*====================================================================*/
/* Table : MOTCLEARTICLE                                              */
/*====================================================================*/
create table MOTCLEARTICLE
(
   numArt int(8) not null,    -- PK, FK
   numMotCle int(8) not null, -- PK, FK
   primary key (numArt, numMotCle)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : MOTCLEARTICLE_FK                                           */
/*====================================================================*/
create index MOTCLEARTICLE_FK on MOTCLEARTICLE
(
   numArt
);

/*====================================================================*/
/* Index : MOTCLEARTICLE2_FK                                          */
/*====================================================================*/
create index MOTCLEARTICLE2_FK on MOTCLEARTICLE
(
   numMotCle
);


-- --------------------------------------------------------------------
--
-- Structure de la table LIKEART   (TJ)
--
/*====================================================================*/
/* Table : LIKEART                                                    */
/*====================================================================*/
create table LIKEART
(
   numMemb int(10) not null, -- PK, FK
   numArt int(8) not null,   -- PK, FK
   likeA bool DEFAULT TRUE,
   primary key (numMemb, numArt)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : LIKEART_FK                                                 */
/*====================================================================*/
create index LIKEART_FK on LIKEART
(
   numMemb,
   numArt
);

-- --------------------------------------------------------------------


-- --------------------------------------------------------------------
-- --------------------------------------------------------------------
--
-- CIR : contraintes pour les tables exportées (ON RESTRICT)
--
-- --------------------------------------------------------------------
-- --------------------------------------------------------------------


-- --------------------------------------------------------------------

alter table ARTICLE add constraint FK_ASSOCIATION_1 foreign key (numThem)
      references THEMATIQUE (numThem) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table COMMENT add constraint FK_ASSOCIATION_2 foreign key (numArt)
      references ARTICLE (numArt) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table COMMENT add constraint FK_ASSOCIATION_3 foreign key (numMemb)
      references MEMBRE (numMemb) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table MEMBRE add constraint FK_ASSOCIATION_4 foreign key (numStat)
      references STATUT (numStat) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table MOTCLEARTICLE add constraint FK_MotCleArt1 foreign key (numMotCle)
      references MOTCLE (numMotCle) on delete restrict on update restrict;

alter table MOTCLEARTICLE add constraint FK_MotCleArt2 foreign key (numArt)
      references ARTICLE (numArt) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table LIKEART add constraint FK_LIKEART1 foreign key (numArt)
      references ARTICLE (numArt) on delete restrict on update restrict;

alter table LIKEART add constraint FK_LIKEART2 foreign key (numMemb)
      references MEMBRE (numMemb) on delete restrict on update restrict;

-- --------------------------------------------------------------------

-- Fin CIR
-- --------------------------------------------------------------------
-- --------------------------------------------------------------------
