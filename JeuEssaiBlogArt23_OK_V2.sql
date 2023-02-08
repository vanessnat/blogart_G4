/**********************************************************************/
/* Blog des articles (BD MySQL) du cours M2203
//
// Jeu d'essai SQL
//
// @Martine Bornerie		Le 17/01/23 12:27:00
//
// nom script : JeuEssaiBlogArt23_OK.sql
//
//
//			--  Sans & et \ sur les car. français  --
//      --  Ecriture normale  --
*/
/**********************************************************************/

--
-- Base de données: BLOGART
--
USE BLOGART23;

-- --------------------------------------------------------------------
/*
-- Respectant les CIR
*/
-- --------------------------------------------------------------------


-- --------------------------------------------------------------------
/*
-- Table STATUT
*/
--
INSERT INTO STATUT
	(numStat, libStat)
VALUES
	(1, 'Administrateur'),
	(2, 'Modérateur'),
	(3, 'Membre');
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
-- Table MEMBRE
*/
--
INSERT INTO MEMBRE (numMemb, prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, numStat)
VALUES
  (1, "Phil", "Collins", 'Phil09', "Ut!D5?h0", "Phil09@gmail.com", '2020-01-09 10:13:43', 1);

INSERT INTO MEMBRE (numMemb, prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, numStat)
VALUES
  (2, "Julie", "La Rousse", 'juju1989', "G54;Q22mi5", "julie@gmail.com", '2020-03-15 14:33:23', 2);

INSERT INTO MEMBRE (numMemb, prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, numStat)
VALUES
  (3, "David", "Bowie", 'dav33B', "kp09,1K4!", "david.bowie@gmail.com", '2020-07-19 13:13:13', 3);
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
-- Table THEMATIQUE
*/
--
-- FRAN01
INSERT INTO THEMATIQUE (numThem, libThem)
VALUES
		(01, "L'événement");
INSERT INTO THEMATIQUE (numThem, libThem)
VALUES
		(02, "L'acteur-clé");
INSERT INTO THEMATIQUE (numThem, libThem)
VALUES
		(03, "Le mouvement émergeant");
INSERT INTO THEMATIQUE (numThem, libThem)
VALUES
		(04, "L'insolite / le clin d'oeil");
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
-- Table MOTCLE
*/
--
-- FRAN01
INSERT INTO MOTCLE (numMotCle, libMotCle)
VALUES
	(01, "Bordeaux");
INSERT INTO MOTCLE (numMotCle, libMotCle)
VALUES
	(02, "CHU");
INSERT INTO MOTCLE (numMotCle, libMotCle)
VALUES
	(03, "chirurgiens");
INSERT INTO MOTCLE (numMotCle, libMotCle)
VALUES
	(04, "Hôpital");
INSERT INTO MOTCLE (numMotCle, libMotCle)
VALUES
	(05, "soignants");
INSERT INTO MOTCLE (numMotCle, libMotCle)
VALUES
	(06, "bleu");
INSERT INTO MOTCLE (numMotCle, libMotCle)
VALUES
  (07, "Mars Bleu");
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
-- Table ARTICLE
*/
--
INSERT INTO ARTICLE (numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art,
   libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt,
   numThem)
VALUES
  (01, '2019-02-24 16:08:30', 'La surprenante reconversion de la base sous-marine',
    'Un bâtiment unique chargé d\'histoire qui a survécu à l\'emprise des Allemands en 1943, et qui est aujourd\'hui l\'un des symboles d\'art de notre ville bordelaise.',
    'La grande immergée du port de la Lune, éclairée de son immense néon bleu “something strange happened here” n’as pas toujours été celle que l’on connaît aujourd’hui.',
    'Oui, notre base sous-marine est notre héritage nazi. En 1943, le bloc de béton, que nous connaissons tous, voit le jour après 22 mois de travaux forcés par des prisonniers.',
    'Quel avenir pour cet amas de béton ?',
    'Après la destruction et le sabotage du matériel nazis par les Alliés en août 1944. Il a fallu se demander que deviendrait ce bâtiment.',
    'Peau neuve, colorée et numérique pour la base bordelaise.',
    'Aujourd\'hui la base sous marine occupe une place incontournable dans le paysage culturel bordelais.',
    'Pour le mot de la fin : Bruno Monnier, président de Culturespace, affirme que ses équipes et lui ont travaillé d’arrache pied pour imaginer et concevoir la nouvelle base sous marine.',
    'imgArt19.jpg',
    01);
--
INSERT INTO ARTICLE (numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art,
   libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt,
   numThem)
VALUES
	(02, '2019-03-13 20:14:10', 'Le CHU de bordeaux se met-il au bleu ?',
    'Le bleu, une couleur si commune, qui provoque tranquillité, sécurité et confiance.',
    'Le CHU de Bordeaux, est un lieu au service de tous, il tient un rôle important dans la vie des Bordelais, et pourtant nous ne le connaissons pas !',
    'Tout d’abord, un logo, que vous avez vu et revu, mais auquel vous n\'avez jamais, vraiment prêté attention. ',
    'Savez-vous pourquoi les blouses des chirurgiens sont-elles bleues ?',
    'Voici une question que vous ne vous êtes peut-être jamais posée. Pourquoi les différents hôpitaux, ont-ils choisi, pour leurs opérations la couleur bleue, ou même vert clair ?',
    'Connaissez vous les fées du CHU de Bordeaux ?',
    'Les Fées Bleues sont une association créée par le personnel soignant du CHU, qui a pour but d’apporter de la couleur et du confort, dans le monde aseptisé du soin des prématurés ou bien pour les enfants en réanimation.',
    'Et voilà vous savez maintenant tout sur le CHU de Bordeaux ! Quoi que … Savez-vous qu’il participe à l\'opération de sensibilisation Mars Bleu ?',
    'imgArt18.jpg',
    03);
--
INSERT INTO ARTICLE (numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art,
   libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt,
   numThem)
VALUES
	(03, '2019-11-09 10:34:20', 'Le Lion bleu de Bordeaux, star des réseaux sociaux',
    'Surplombant la place Stalingrad, anciennement place du Pont, et faisant fièrement face au pont de Pierre, le Lion bleu de Xavier Veilhan fait depuis 2005 l’objet de toutes les convoitises.',
    'En France, depuis 1951 et l’arrêté des "1% artistique", toute construction d’un bâtiment public ayant pour but d\'accueillir du monde doit prévoir 1% de son budget total pour financer des oeuvres d\'art aux abords du bâtiment.',
    'En construisant les lignes de tramway, la ville de Bordeaux et sa métropole ont donc mis en place le programme "L\'art dans la ville".',
    'Un symbole de la rive droite',
    'On n\'imagine pas la place Stalingrad sans cet imposant félin coloré. Ce lion bleu est devenu l\'emblème de cette place et, pour les habitants de la rive gauche, c\'est le symbole de "l\'autre rive", c\'est la première chose que l\'on voit en traversant la Garonne depuis le quartier de Saint-Michel.',
    'Un tremplin pour Xavier Veilhan',
    'L\'artiste plasticien à l\'origine du Lion bleu, diplômé de l\'EnsAD-Paris (École Nationale Supérieure des Arts Décoratifs) et officier de l\'Ordre des Arts et des Lettres, n\'a pas choisi une figure animalière pour rien. La place Stalingrad est un hommage à la victoire de l\'armée soviétique durant la Seconde Guerre Mondiale.',
    'Espérons que cet élan de créativité se poursuive et que, par la suite, Xavier Veilhan réutilise cette couleur qui nous est si chère, le bleu.',
    'imgArt23.jpg',
    04);
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
-- Table COMMENT
*/
--
INSERT INTO COMMENT (numCom, dtCreCom, libCom, attModOK, dtModCom, notifComKOAff, delLogiq, numArt, numMemb)
VALUES
	(01, '2020-11-09 10:13:43', "Trop cool comme article", true, '2020-11-09 17:49:29', null, false, 01, 01);
INSERT INTO COMMENT (numCom, dtCreCom, libCom, attModOK, dtModCom, notifComKOAff, delLogiq, numArt, numMemb)
VALUES
	(02, '2020-11-02 13:18:42', "Trop cool comme article", true, '2020-11-03 08:23:19', null, false, 01, 02);
INSERT INTO COMMENT (numCom, dtCreCom, libCom, attModOK, dtModCom, notifComKOAff, delLogiq, numArt, numMemb)
VALUES
	(03, '2020-11-04 16:21:12', "Trop cool comme article", true, '2020-11-05 10:42:42', null, false, 01, 03);
INSERT INTO COMMENT (numCom, dtCreCom, libCom, attModOK, dtModCom, notifComKOAff, delLogiq, numArt, numMemb)
VALUES
	(04, '2020-11-05 03:15:38', "Trop cool comme article", true, '2020-11-05 23:50:13', null, false, 01, 01);
INSERT INTO COMMENT (numCom, dtCreCom, libCom, attModOK, dtModCom, notifComKOAff, delLogiq, numArt, numMemb)
VALUES
	(05, '2020-11-06 21:16:36', "Trop cool comme article", true, '2020-11-10 11:39:03', null, false, 01, 02);
INSERT INTO COMMENT (numCom, dtCreCom, libCom, attModOK, dtModCom, notifComKOAff, delLogiq, numArt, numMemb)
VALUES
	(06, '2020-11-06 11:20:31', "Trop cool comme article", true, '2020-11-06 18:41:54', null, false, 01, 03);
INSERT INTO COMMENT (numCom, dtCreCom, libCom, attModOK, dtModCom, notifComKOAff, delLogiq, numArt, numMemb)
VALUES
	(07, '2020-11-08 08:41:12', "Trop cool comme article", true, '2020-11-10 20:53:32', null, false, 01, 03);
INSERT INTO COMMENT (numCom, dtCreCom, libCom, attModOK, dtModCom, notifComKOAff, delLogiq, numArt, numMemb)
VALUES
  (08, '2020-11-18 08:41:12', "De la daube cet article", false, '2020-11-19 14:51:26', "Trop insultant", false, 01, 03);
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
-- Table LIKEART (TJ)
*/
--
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (01, 01, true);
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (01, 02, true);
--
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (02, 01, false);
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (02, 03, true);
--
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (03, 01, true);
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (03, 02, true);
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (03, 03, true);
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
-- Table MOTCLEARTICLE (TJ)
*/
--
-- Art 01
-- 01 : Bordeaux
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (01, 01);
-- 06 : bleu
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (01, 06);
--
-- Art 02
-- 01 : Bordeaux
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 01);
-- 02 : CHU
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 02);
-- 03 : chirurgiens
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 03);
-- 04 : Hôpital
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 04);
-- 05 : soignants
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 05);
-- 06 : bleu
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 06);
-- 07 : Mars Bleu
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 07);
--
-- Art 03
-- 01 : Bordeaux
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (03, 01);
-- 06 : bleu
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (03, 06);
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
-- --------------------------------------------------------------------

