-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mar 17 Septembre 2013 à 19:45
-- Version du serveur: 5.0.51
-- Version de PHP: 5.2.6-1+lenny13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(255) NOT NULL,
  `rubrique` varchar(255) NOT NULL,
  `sous_rubrique` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_modification` datetime NOT NULL,
  `contenu` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `rubrique`, `sous_rubrique`, `date_creation`, `date_modification`, `contenu`, `image`) VALUES
(1, 'Reunion de parents', 'Reunions', '', '2012-10-09 09:53:41', '0000-00-00 00:00:00', 'Mardi 11 septembre a 17 heures (présentation des instances, conseils de classe, conseil d\\''administration…)', '../include/image/photo/'),
(2, 'Elections des delegues parents d\\''eleves 1° reunion parents - professeurs', 'Elections', '', '2012-10-09 09:54:26', '0000-00-00 00:00:00', 'Elections des délégués de parents d’élèves :\r\nvendredi 12 octobre de 17h a 21h\r\n\r\nRéunion parents - professeurs :\r\nvendredi 12 octobre, a partir de 17h40', '../include/image/photo/'),
(4, 'Reunion parents-professeurs', 'Reunions', '', '2012-10-09 09:55:47', '0000-00-00 00:00:00', '6eme, 4eme : du 13 au 18 juin 2013\r\n5ème : 20-21 juin 2013 mardi 25 juin 2013\r\n*en fonction du calendrier de l''orientation', '../include/image/photo/'),
(5, 'Les vacances scolaires', 'Vacances', '', '2012-10-09 09:56:33', '0000-00-00 00:00:00', '27 octobre au 11 novembre , 22 décembre au 6 janvier, 16 février au 3 mars, 13 au 28 avril.', '../include/image/photo/'),
(6, 'Comité de pilotage du projet educatif global départemental', 'Pegd', 'Comité de pilotage', '2012-10-09 14:19:49', '0000-00-00 00:00:00', 'Le premier comité de pilotage du pegd (projet educatif global départemental s\\''est tenu le 8 octobre. une quinzaine de partenaires et de membres de la communauté éducative ont réfléchi ensemble aux axes à mettre en avant pour l\\''expérimentation 2012/2013. le choix : la réussite scolaire (axe 1) et l\\''autonomie et l\\''ouverture culturelle sur le monde (axe 3). déjà quatre projets sont en cours de rédaction.', '../include/image/photo/'),
(11, 'Le cross du college ', '', '', '2012-10-24 19:55:03', '0000-00-00 00:00:00', ' jeudi 26 octobre 2012 de 13h à 16h au stade driss berkani', '../include/image/photo/'),
(13, 'Le brevet des collèges  2011-2012', 'Le brevet des collèges  2011-2012', '', '2012-10-25 18:51:40', '0000-00-00 00:00:00', 'Remise des dictionnaires et du diplôme national du brevet au collège louise michel aux anciens élèves de 3ème du collège louise michel, promotion 2011-2012\r\nun petit article nous est dédié sur \\"le blog de lille sud\\" :\r\n<a href="http://lille-sud.blog.fr/2012/10/20/remise-des-diplomes-du-brevet-au-college-louise-michel-15087391/" target=_blank>ici</a>', '../include/image/photo/12102301remisedicoclgLouiseMichel.jpg'),
(15, 'Réunion parents/professeurs 18 décembre', '', '', '2012-12-18 14:58:35', '0000-00-00 00:00:00', 'Remise des distinctions aux élèves méritants à 16h30 au restaurant scolaire.\r\n\r\nLors de la réunion parents-professeurs, le bulletin du 1° trimestre sera remis aux parents.\r\n\r\nA partir de 17h15, vous serez accueillis dans le hall du collège par des assistants d’éducation qui vous remettront la liste des professeurs de vos enfants et les numéros des salles comme lors de la réunion du 12 octobre.', '../include/image/photo/'),
(18, 'Courir pour l’association e.l.a.', '', '', '2013-03-07 15:56:22', '0000-00-00 00:00:00', 'Pour la 3ème année consécutive, les élèves du collège Louise MICHEL ont chaussé leurs baskets pour participer à un événement important de la vie du collège : le CROSS ! Si les plus compétitifs espèraient se qualifier au cross UNSS, l’ensemble de ces ados citoyens étaient surtout venus défendre les couleurs de l’association ELA et ainsi participer à un acte de solidarité qui leur tenait à coeur.\r\nLes semaines précédentes, les élèves avaient été sensibilisés au fonctionnement de l’association par l’équipe d’E.P.S., aux besoins de la recherche scientifique pour aider les malades atteints de la leucodystrophie et à la manière dont ils pourraient, à leur échelle, aider ELA en récoltant de l’argent dans le quartier. C’est donc avec enthousiasme que les élèves ont couru ce jour-là !\r\nLe vendredi 18 janvier 2013 après les cours, les élèves et l’équipe éducative se sont réunis dans la salle de sport du collège pour récompenser les meilleurs coureurs et surtout pour remettre à Monsieur LUKASZKA , membre de l’association et parent d’enfants malades, la récolte de dons qui s’élève cette année à 404,90 euros !\r\nLes élèves ont écouté attentivement le témoignage de ce courageux père de famille, puis Monsieur CALONNE, le principal du collège, a invité l’assemblée à prendre un goûter bien mérité.\r\nEncore une année sous le signe de la citoyenneté, une valeur à laquelle les enseignants sont très attachés !\r\n\r\n<i>Pour l\\''équipe EPS, Mme COUROUBLE</i>', '../include/image/photo/5895ela.jpg'),
(20, 'Conseils de classes ', '', '', '2013-03-07 16:04:07', '0000-00-00 00:00:00', '<font color=\\"grey\\">Planning des conseils de classes 2ème trimestre</font>\r\n\r\n<b>3ème1</b> : le jeudi 14 mars 2013 à 17h30\r\n<b>3ème2 </b>: le jeudi 14 mars 2013 à 16h30\r\n<b>3ème3</b> : le lundi 18 mars 2013 à 17h30\r\n<b>3ème4</b> : le jeudi 21 mars 2013 à 17h30\r\n\r\n<b>4ème1</b> : le jeudi 21 mars 2013 à 17h30\r\n<b>4ème2</b> : le vendredi 15 mars 2013 à 17h30\r\n<b>4ème3</b> : le lundi 18 mars 2013 à 17h30\r\n<b>4ème4</b> : le jeudi 14 mars 2013 à 17h30\r\n\r\n<b>5ème1</b> : le mardi 19 mars 2013 à 17h30\r\n<b>5ème2</b> : le Jeudi 21 mars 2013 à 16h30\r\n<b>5ème3</b> : le jeudi 14 mars 2013 à 16h30\r\n<b>5ème4</b> : le mardi 19 mars 2013 à 16h30\r\n<b>5ème5</b> : le lundi 18 mars 2013 à 16h30\r\n\r\n<b>6ème1</b> : le jeudi 21 mars 2013 à 16h30\r\n<b>6ème2</b> : le mardi 19 mars 2013 à 16h30\r\n<b>6ème3</b> : le jeudi 14 mars 2013 à 15h30\r\n<b>6ème4</b> : le mardi 19 mars 2013 à 17h30\r\n<b>6ème5</b> : le vendredi 15 mars 2013 à 16h30', '../include/image/photo/5191arton634.jpg'),
(21, 'Réunion parents professeurs', '', '', '2013-03-22 15:56:43', '0000-00-00 00:00:00', '<u>Réunion parents/professeurs le jeudi 28 mars 2013</u>\r\n\r\n- Remise des distinctions aux élèves méritants à 16h30 au restaurant scolaire\r\n\r\n- Lors de la réunion parents-professeurs, le bulletin du 2° trimestre sera remis aux parents.\r\n\r\nA partir de 17h15, vous serez accueillis dans le hall du collège par des assistants d’éducation qui vous remettront la liste des professeurs de vos enfants et les numéros des salles comme lors des réunions du 12 octobre et 18 décembre.\r\n\r\n.', '../include/image/photo/4966réunioparentsprofs.jpg'),
(22, 'Brevet blanc 4ème 3ème', '', '', '2013-04-05 16:27:24', '0000-00-00 00:00:00', '	<b> Calendrier et horaires </b>\r\n\r\n<u> Mercredi 10 avril 2013 </u>\r\n\r\n	10h00 – 12h00 : Histoire Géographie\r\n\r\n<u> Jeudi  11 avril 2013 </u>\r\n\r\n	8h00 - 11h40 : Français\r\n	\r\n	13h30 - 15h30 : Mathématiques\r\n\r\n\r\n* les élèves de 3èmes passeront l\\''épreuve orale HDA aux horaires indiqués sur leur convocation,\r\n', '../include/image/photo/'),
(23, 'Résultats Brevet Blanc 4ème / 3ème', '', '', '2013-05-13 14:17:46', '0000-00-00 00:00:00', 'Les résultats globaux du brevet blanc du second trimestre vont être distribués aux élèves de 4ème et de 3ème dans la semaine du 13 au 17 mai 2013.\r\n\r\nMerci aux parents d\\''en prendre connaissance.', '../include/image/photo/'),
(24, 'Voyage en Espagne', '', '', '2013-05-14 09:25:31', '0000-00-00 00:00:00', 'Buenos dias,\r\nNous sommes bien arrivés et le soleil se lève sur la belle Barcelone qui n\\''aura bientôt plus de secret pour nos élèves. Bonne journée à tous. Cordialement.\r\nM. Delatouche y sus colegas\r\n', '../include/image/photo/1290espagne.gif'),
(28, 'Voyage en Espagne - 2', '', '', '2013-05-16 16:41:45', '0000-00-00 00:00:00', 'Parc de la ciudadela hier matin après un tour en bus dans la ville avec Emilio notre chauffeur.\r\nDéjà quelques couleurs car une fin de matinée à la plage par grand soleil.\r\nPique nique à l\\''ombre sur une placette du quartier de la barceloneta : premiers vrais échanges avec les habitants.\r\nPuis rallye ville dans le vieux quartier gothique (grosse fatigue mais une occasion de voir des petits détails amusants grâce aux photos).\r\nDéfilé des joueurs du barca dans la ville en fin d\\''après-midi ! (grande émotion et surprise pour beaucoup d\\''élèves).\r\nArrivée en famille dans joli pueblo face à la mer : accueil chaleureux et sourires ! en attente des premiers commentaires !\r\nExcellents retours des familles d\\''accueil. Grand confort, quartier résidentiel, beaucoup d\\''attention. Les élèves sont ravis.', '../include/image/photo/2608sansphoto.jpg'),
(29, 'Voyage en Espagne - 3', '', '', '2013-05-16 16:42:22', '0000-00-00 00:00:00', 'Pause sur les hauteurs de Barcelone, vue imprenable depuis le Montjuic.\r\nVisite du Pueblo espanol ce matin. Nous sommes passés entre les gouttes et passons à la crème solaire...\r\nInstallations olympiques et la visite tant attendues cette après-midi (stade).\r\nLes élèves sont toujours ravis de l\\''accueil malgré quelques trocs de \\"bocadillos\\".', '../include/image/photo/3828sansphoto.jpg'),
(30, 'Voyage en Espagne - 4', '', '', '2013-05-16 16:42:44', '0000-00-00 00:00:00', 'Dernière pause à la plage avant le départ vers Lille : soleil et glaces.\r\nCiel gris ce matin pour une balade en bateau dans le port.', '../include/image/photo/6851sansphoto.jpg'),
(32, 'Métiers d\\''hier - Babel d\\''aujourd\\''hui', '', '', '2013-05-21 14:40:21', '0000-00-00 00:00:00', 'Exposition du mardi 21 au vendredi 24 mai 2013\r\n10h-12h / 14h-16h\r\nJardin de mode / 58-60 Fg des Modes à Lille\r\n\r\nphotos dans \\"le collège en images\\" : <a href=\\"http://195.146.240.74/site/rubrique/clgEnImages.php\\">cliquer ici</a>\r\narticle et photos sur le blog de Lille sud : <a href=\\"http://lille-sud.blog.fr/2013/05/19/le-college-louise-michel-expose-a-la-maison-de-modes-16021790/\\">cliquer ici</a>', '../include/image/photo/5345expo.jpg'),
(33, 'Voyage à Barcelone', '', '', '2013-05-27 13:48:00', '0000-00-00 00:00:00', 'Nous voilà de retour après cinq jours à Barcelone au cours desquels 24 élèves (de 4ème et 3ème) du collège ont eu l\\''occasion de visiter la Sagrada Familia et le Parc Güell, découvrir les œuvres de Pablo Picasso, se tremper les pieds sur la plage de la Barceloneta et de se promener à bord d\\''une Golondrina dans le port. Ils ont aussi déambulé dans le Quartier Gothique et, surprise ultime, ont pu assister au défilé de l\\''équipe de football Championne d\\''Espagne 2013 : le Barça ! De retour à Lille l\\''ensemble des participants garde un souvenir impérissable de ce séjour en immersion et de l\\''accueil chaleureux des familles. \r\nLes accompagnants : Mme Villeuneuve, M. Notot et M. Delatouche ', '../include/image/photo/4500'),
(34, 'Conseils de classes', '', '', '2013-06-10 09:32:58', '0000-00-00 00:00:00', '<font color=\\"grey\\">Planning des conseils de classes du 3ème trimestre</font>\r\n\r\n<b>3ème1</b> : lundi 10 juin 2013 à 16h30\r\n<b>3ème2</b> : lundi 10 juin 2013 à 17h30\r\n<b>3ème3</b> : mardi 11 juin 2013 à 16h30\r\n<b>3ème4</b> : mardi 11 juin 2013 à 17h30\r\n\r\n<b>4ème1</b> : vendredi 14 juin 2013 à 16h30\r\n<b>4ème2 </b> : lundi 17 juin 2013 à 17h30\r\n<b>4ème3</b> : vendredi 14 juin 2013 à 17h30\r\n<b>4ème4</b> : mardi 18 juin 2013 à 17h30\r\n\r\n<b>5ème1</b> : mardi 18 juin 2013 à 16h30\r\n<b>5ème2</b> : lundi 24 juin 2013 à 16h30\r\n<b>5ème3</b> : vendredi 21 juin 2013 à 15h30\r\n<b>5ème4</b> : jeudi 20 juin 2013 à 17h30\r\n<b>5ème5</b> : lundi 17 juin 2013 à 16h30\r\n\r\n<b>6ème1</b> : jeudi 13 juin 2013 à 16h30\r\n<b>6ème2</b> : lundi 17 juin 2013 à 15h30\r\n<b>6ème3</b> : vendredi 14 juin 2013 à 15h30\r\n<b>6ème4</b> : lundi 17 juin 2013 à 16h30\r\n<b>6ème5</b> : mardi 18 juin 2013 à 15h30', '../include/image/photo/953réunion.jpg'),
(35, 'Brevet blanc 3ème', '', '', '2013-06-11 16:39:16', '0000-00-00 00:00:00', '\r\n<i>Calendrier et horaires</i>\r\n\r\n<u>Jeudi 13 juin 2013</u>\r\n\r\n13h25 – 15h30 : Histoire Géographie\r\n\r\n<u>Vendredi 14 juin 2013</u>\r\n\r\n8h00 - 11h40 : Français\r\n\r\n13h25 - 15h30 : Mathématiques\r\n', '../include/image/photo/'),
(36, 'inscriptions en 6eme', '', '', '2013-06-14 13:58:41', '0000-00-00 00:00:00', 'Les dossiers d\\''inscription ont été distribués aux élèves de CM2 par les écoles.\r\n\r\nLes inscriptions auront lieu le <b>mercredi 19 juin 2013 de 8h45 à 11h30</b> au collège.\r\n\r\nSeuls les dossiers complets seront acceptés.', '../include/image/photo/5605dossierinscription.jpeg'),
(37, '\\"Les élèves ont des talents\\" - Programme du mardi 25 juin après-midi', '', '', '2013-06-21 11:30:49', '0000-00-00 00:00:00', 'De 13h30 aux environs de 16h, le collège accueillera élèves et parents pour présenter diverses activités réalisées en cours d’année. \r\nCette demi-journée se terminera avec la remise des distinctions aux élèves méritants et des prix du concours HDA à 16h30, suivie de la remise des bulletins aux parents par les Professeurs Principaux vers 17h15.\r\n\r\nVoici le programme :\r\n\r\nSalle des sports et extérieur :\r\n-	13h30-14h : Roller\r\n-	Hip Hop\r\n-	Activités UNSS\r\n-	15h15 : Percussions brésiliennes\r\n\r\nHall face au jardin intérieur : \r\nEchecs avec la fédération des Echecs\r\n\r\nHall côté baie vitrée :\r\n-	Club presse avec le dernier numéro de Zaptontel + campagne de recrutement pour l’an prochain\r\n-	Grand jeu HDA avec la présentation des œuvres choisies par les membres du personnel… enfin dévoilés.\r\n\r\nHall mur face à l’entrée :\r\nExposition du club « cartes et décos du nouvel an »\r\n\r\nSalles d’espagnol 2 et 3 :\r\n-	Présentation de la bilangue espagnol et lectures de textes pour les maternelles avec Mme VILLENEUVE\r\n-	Présentation d’un montage photo en musique du voyage à Barcelone\r\n-	Présentation de la section euro espagnol de 3°\r\n\r\nSalles 111 et 113 :\r\n-	Film réalisé par les 3°1 avec Koan\r\n-	Film sur l’impro théâtrale et sa finale avec Djamel DEBBOUZE\r\n-	Film sur la visite à l’Assemblée Nationale\r\n-	Reportage sur le travail photographique réalisé par les 5°5 au festival de Jazz de Tourcoing\r\n\r\nSalle 107 :\r\n-	Cristaux réalisation et résultats avec des 5° et Madame BODZIAK\r\n\r\nCDI :\r\n-	Lectures de textes réalisés par des 5° avec Monsieur DESPLANQUES\r\n-	Lecture de textes par des élèves de 6° préparés pour les maternelles avec Mme ESPERANCE\r\n\r\nSalle Polyvalente :\r\n-	Exposition Métiers d’hier, Babel d’aujourd’hui\r\n-	Découvrir les haîkus avec des 6°5 et Madame VIART\r\n\r\n', '../include/image/photo/'),
(38, 'Ré-inscriptions en 6ème (redoublement) 5ème - 4ème -3ème', '', '', '2013-06-27 10:11:49', '0000-00-00 00:00:00', 'Le dossier d\\''inscription complet sera à rendre par votre enfant avec ses livres le lundi 1er juillet 2013 en salles de permanence selon le planning établi ci-dessous.\r\nMerci d’insister auprès de vos enfants sur l’importance à respecter le planning afin d’éviter tout retard ou attente inutile.\r\n\r\n<b>Planning ramassage des livres et inscriptions</b>\r\n<u>Classe</u> -> <u>Heure</u>\r\n6ème1 -> 8h00\r\n6ème2 -> 8h30\r\n6ème3 -> 9h00\r\n6ème4 -> 9h30\r\n6ème5 -> 10h00\r\n\r\n5ème1 -> 10h30\r\n5ème2 -> 11h00\r\n5ème3 -> 11h30\r\n5ème4 -> 13h30\r\n5ème5 -> 14h00\r\n\r\n4ème1 -> 14h30\r\n4ème2 -> 15h00\r\n4ème3 -> 15h30\r\n4ème4 -> 16h00\r\n\r\n', '../include/image/photo/1212dossierinscription.jpeg'),
(39, 'liste des fournitures 2013/2014', '', '', '2013-08-26 09:40:22', '0000-00-00 00:00:00', 'La liste des fournitures est disponible <a href=\\"http://195.146.240.74/site/rubrique/revueDePresse.php#\\">ici</a>', '../include/image/photo/3771pasphoto.jpg'),
(40, 'Rentrée des classes', '', '', '2013-08-26 09:44:52', '0000-00-00 00:00:00', '<i>RENTRÉE DES ÉLÈVES AVEC UN CARTABLE, UNE TROUSSE ET QUELQUES FEUILLES</i>\r\n\r\nLe mardi 3 septembre, le restaurant scolaire sera ouvert pour les 6èmes.\r\n\r\n<b>6ème</b> : mardi 3 septembre 2013	de 9h à 12h et 13h30 à 15h00.\r\n\r\n<b>5ème</b> : mardi 3 septembre 2013 de 13h30 à environ 15h.\r\n\r\n<b>4ème</b> : mardi 3 septembre	2013 de 14h30 à environ 16h. \r\n\r\n<b>3ème</b> : mardi 3 septembre	2013 de 15h30 à environ 17h.\r\n\r\n<u>Démarrage des cours mercredi 4 septembre 2013.</u>\r\n\r\n\r\n. \r\n', '../include/image/photo/');

-- --------------------------------------------------------

--
-- Structure de la table `articleProf`
--

CREATE TABLE IF NOT EXISTS `articleProf` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(255) character set utf8 NOT NULL,
  `rubrique` varchar(255) character set utf8 NOT NULL,
  `sous_rubrique` varchar(255) character set utf8 NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_modification` datetime NOT NULL,
  `contenu` text character set utf8 NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `articleProf`
--

INSERT INTO `articleProf` (`id`, `titre`, `rubrique`, `sous_rubrique`, `date_creation`, `date_modification`, `contenu`, `image`) VALUES
(16, 'Présentation de l\\''espace professeur', '', '', '2012-12-06 12:33:11', '0000-00-00 00:00:00', 'Bonjour à tous,\r\n\r\nL\\''espace professeur ouvre ses portes, vous avez donc maintenant un espace pour discuter entre vous.\r\n\r\nCet espace dispose de <b>deux parties</b> (article et chatbox):\r\n-> <b>l\\''article</b> pour une information importante, elle restera <b>sans limite de temps</b> sur le site.\r\n-> <b>la chatbox</b> pour discuter de tout mais aussi de rien, il y aura de temps en temps <b>des purges</b> pour y voir plus clair.\r\n\r\nSi vous voulez <b>partager des fichiers entre vous</b> (sur votre mobile ou ordinateur) il existe une plateforme prévu à cet effet: <b>dropbox</b>.\r\n\r\nPour pouvoir utiliser dropbox il faut installer le client qui se trouve <a href=\\"https://www.dropbox.com/downloading\\">ICI</a>. Je vous incite à suivre les différentes étapes  et si vous avez des questions n\\''hésitez pas à nous contacter.\r\n\r\nLes <b>identifiants dropbox</b> sont les suivants: \r\n<b>Adresse mail</b>: louisemichel.dropbox@gmail.com \r\n<b>Mot de passe</b>: louisemicheldropbox\r\n\r\nSi jamais vous souhaitez <b>nous contacter</b> il existe un lien en <b>bas de la page</b>, nous vous répondrons le plus rapidement possible si vous avez une question ou un problème que ce soit pour le site ou pour vos classes.', '../include/image/photo/');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL auto_increment,
  `titre` text NOT NULL,
  `commentaire` text NOT NULL,
  `image` text NOT NULL,
  `rubrique` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=218 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id`, `titre`, `commentaire`, `image`, `rubrique`) VALUES
(56, '18 déc 2012 : remise des distinctions', '', '../include/image/photo/9695121218remiserecomp8717.JPG', ''),
(55, '18 déc 2012 : remise des distinctions', '', '../include/image/photo/1903121218remiserecomp8716.JPG', ''),
(47, 'décembre 2012 : nouvelle entrée au collège', '', '../include/image/photo/7307121210montagenouvelleentrée.jpg', ''),
(46, '23 oct 2012 : remise des dictionnaires 6ème', '', '../include/image/photo/30712102303remisedicoclgLouiseMichel.jpg', ''),
(45, '23 oct 2012 : remise des dictionnaires 6ème', '', '../include/image/photo/309912102302remisedicoclgLouiseMichel.jpg', ''),
(44, '23 oct 2012 : remise des dictionnaires 6ème', '', '../include/image/photo/225912102301remisedicoclgLouiseMichel.jpg', ''),
(43, '28 sept 2012 : parcours orientation 6ème CE2', '', '../include/image/photo/8268120928parcoursorientation4.jpg', ''),
(41, '28 sept 2012 : parcours orientation 6ème CE2', '', '../include/image/photo/2272120928parcoursorientation6.jpg', ''),
(42, '28 sept 2012 : parcours orientation 6ème CE2', '', '../include/image/photo/6941120928parcoursorientation1.jpg', ''),
(54, '18 déc 2012 : remise des distinctions', '', '../include/image/photo/4371121218remiserecomp8718.JPG', ''),
(57, '20 déc 2012 : C.D.I. hors des murs', '', '../include/image/photo/6152121220CDIhorsdesmurs8725.JPG', ''),
(58, '20 déc 2012 : C.D.I. hors des murs', '', '../include/image/photo/4345121220CDIhorsdesmurs8722.JPG', ''),
(59, '20 déc 2012 : C.D.I. hors des murs', '', '../include/image/photo/9195121220CDIhorsdesmurs8721.JPG', ''),
(60, '18 jan 2013 : remise des dons pour l\\''association ELA', '', '../include/image/photo/9540130118ela15.jpg', ''),
(61, '18 jan 2013 : remise des dons pour l\\''association ELA', '', '../include/image/photo/1287130118ela13.jpg', ''),
(62, '18 jan 2013 : remise des dons pour l\\''association ELA', '', '../include/image/photo/5251130118ela12.jpg', ''),
(63, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/7878DSC_0001.JPG', ''),
(64, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/3276DSC_0005.JPG', ''),
(65, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/5807DSC_0009.JPG', ''),
(66, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/699DSC_0019.JPG', ''),
(68, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/6010DSC_0026.JPG', ''),
(69, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/3295DSC_0027.JPG', ''),
(70, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/1245DSC_0035.JPG', ''),
(85, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/967expo.jpg', ''),
(72, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/7628DSC_0041.JPG', ''),
(73, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/4310DSC_0042.JPG', ''),
(74, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/4506DSC_0047.JPG', ''),
(75, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/6873DSC_0055.JPG', ''),
(76, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/9527DSC_0059.JPG', ''),
(77, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/5697DSC_0063.JPG', ''),
(78, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/9631DSC_0065.JPG', ''),
(79, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/5716DSC_0068.JPG', ''),
(80, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/2853DSC_0073.JPG', ''),
(81, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/6056DSC_0076.JPG', ''),
(82, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/1087DSC_0077.JPG', ''),
(83, '7 mai 2013 : match d\\''improvisation', '', '../include/image/photo/2417DSC_0084.JPG', ''),
(86, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/3089expo1.jpg', ''),
(87, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/105expo2.jpg', ''),
(88, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6237expo3.jpg', ''),
(89, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/5445expo4.jpg', ''),
(90, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7266expo5.jpg', ''),
(91, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/47expo6.jpg', ''),
(92, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2195expo7.jpg', ''),
(93, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2659expo8.jpg', ''),
(94, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/4094expo9.jpg', ''),
(95, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7139expo10.jpg', ''),
(96, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9929expo11.jpg', ''),
(97, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6612expo12.jpg', ''),
(98, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7549expo13.jpg', ''),
(99, '17 mai 2013 : vernissage de l\\''exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/5430expo14.jpg', ''),
(101, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/5926photosencoursdetransfert.jpg', ''),
(209, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/9956CIMG0869.jpg', ''),
(210, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/8691CIMG0879.jpg', ''),
(103, 'mai 2013 : match d\\''improvisation à Paris', '', '../include/image/photo/4318photosencoursdetransfert.jpg', ''),
(104, 'mai 2013 : match d\\''improvisation à Paris', '', '../include/image/photo/7634', ''),
(105, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/6433espagne1.jpg', ''),
(106, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/9477espagne2.jpg', ''),
(107, 'mai 2013 : match d\\''improvisation à Paris', '', '../include/image/photo/9551DSC04589.jpg', ''),
(108, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7597expo001.jpg', ''),
(109, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2485expo002.jpg', ''),
(110, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9912expo003.jpg', ''),
(111, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2360expo004.jpg', ''),
(112, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/8471expo005.jpg', ''),
(113, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/8827expo006.jpg', ''),
(114, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/4357expo007.jpg', ''),
(115, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6284expo008.jpg', ''),
(116, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/8489expo009.jpg', ''),
(117, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6414expo010.jpg', ''),
(118, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7953expo011.jpg', ''),
(119, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2490expo012.jpg', ''),
(120, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9209expo013.jpg', ''),
(121, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/179expo014.jpg', ''),
(122, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/5968expo015.jpg', ''),
(123, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/5396expo016.jpg', ''),
(124, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6169expo017.jpg', ''),
(125, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2781expo018.jpg', ''),
(126, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6943expo019.jpg', ''),
(127, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9427expo020.jpg', ''),
(128, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1066expo021.jpg', ''),
(129, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9466expo022.jpg', ''),
(130, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/5002expo023.jpg', ''),
(131, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2520expo024.jpg', ''),
(132, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/4871expo025.jpg', ''),
(133, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7771expo026.jpg', ''),
(134, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1443expo027.jpg', ''),
(135, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1762expo028.jpg', ''),
(136, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2855expo029.jpg', ''),
(137, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/689expo030.jpg', ''),
(138, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/3881expo031.jpg', ''),
(139, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7902expo032.jpg', ''),
(140, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/608expo033.jpg', ''),
(141, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7159expo034.jpg', ''),
(142, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7627expo035.jpg', ''),
(143, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6274expo036.jpg', ''),
(144, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2830expo037.jpg', ''),
(145, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/8194expo038.jpg', ''),
(146, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6189expo040.jpg', ''),
(147, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/8250expo041.jpg', ''),
(148, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9073expo042.jpg', ''),
(149, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1939expo043.jpg', ''),
(150, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9284expo044.jpg', ''),
(151, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/22expo045.jpg', ''),
(152, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6111expo046.jpg', ''),
(153, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/4573expo047.jpg', ''),
(154, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/4069expo048.jpg', ''),
(155, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/582expo049.jpg', ''),
(156, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2299expo050.jpg', ''),
(157, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9112expo051.jpg', ''),
(158, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1772expo052.jpg', ''),
(159, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1166expo053.jpg', ''),
(160, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/3410expo054.jpg', ''),
(161, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/891expo055.jpg', ''),
(162, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2809expo056.jpg', ''),
(163, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1710expo057.jpg', ''),
(164, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1808expo058.jpg', ''),
(165, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/5817expo059.jpg', ''),
(166, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2924expo060.jpg', ''),
(167, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1173expo061.jpg', ''),
(168, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7153expo062.jpg', ''),
(169, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/4071expo063.jpg', ''),
(170, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7297expo064.jpg', ''),
(171, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9311expo065.jpg', ''),
(172, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7745expo066.jpg', ''),
(173, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7328expo067.jpg', ''),
(174, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/8968expo068.jpg', ''),
(175, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/3623expo069.jpg', ''),
(176, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/8962expo070.jpg', ''),
(177, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7542expo071.jpg', ''),
(178, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1185expo072.jpg', ''),
(179, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1519expo073.jpg', ''),
(180, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1876expo074.jpg', ''),
(181, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6243expo075.jpg', ''),
(182, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7086expo076.jpg', ''),
(183, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/5836expo077.jpg', ''),
(184, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2310expo078.jpg', ''),
(185, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9209expo079.jpg', ''),
(186, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/4375expo080.jpg', ''),
(187, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6348expo081.jpg', ''),
(188, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/483expo082.jpg', ''),
(189, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/3852expo083.jpg', ''),
(190, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/4064expo084.jpg', ''),
(191, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7524expo085.jpg', ''),
(192, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/4847expo086.jpg', ''),
(193, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2335expo087.jpg', ''),
(194, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6106expo088.jpg', ''),
(195, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6963expo089.jpg', ''),
(196, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/891expo090.jpg', ''),
(197, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/4167expo091.jpg', ''),
(198, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/5571expo092.jpg', ''),
(199, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7106expo093.jpg', ''),
(200, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/7045expo094.jpg', ''),
(201, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/9175expo095.jpg', ''),
(202, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/6421expo096.jpg', ''),
(203, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1791expo097.jpg', ''),
(204, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/1966expo098.jpg', ''),
(205, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/8971expo099.jpg', ''),
(206, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/3449expo100.jpg', ''),
(207, 'mai 2013 : exposition \\"Métiers d\\''hier - Babel d\\''aujourd\\''hui\\"', '', '../include/image/photo/2105expo101.jpg', ''),
(211, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/1725CIMG0881.jpg', ''),
(212, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/7185CIMG0883.jpg', ''),
(213, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/7457CIMG0899.jpg', ''),
(214, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/9162CIMG0930.jpg', ''),
(215, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/595CIMG0976.jpg', ''),
(216, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/1493066.JPG', ''),
(217, 'mai 2013 : voyage en Espagne', '', '../include/image/photo/9329067.JPG', '');

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE IF NOT EXISTS `minichat` (
  `id` int(11) NOT NULL auto_increment,
  `pseudo` varchar(15) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `minichat`
--


-- --------------------------------------------------------

--
-- Structure de la table `revueDePresse`
--

CREATE TABLE IF NOT EXISTS `revueDePresse` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(50) NOT NULL,
  `source` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `revueDePresse`
--

INSERT INTO `revueDePresse` (`id`, `titre`, `source`) VALUES
(6, 'Lettre aux parents décembre', '../include/pdf/lettreauxparentsdecembre2012.pdf'),
(10, 'Lettre aux parents mars 2013', '../include/pdf/lettreauxparentsmars2013.pdf'),
(13, 'liste des fournitures 2013/2014', '../include/pdf/ClgLouiseMichellistefournitures2013_2014.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL auto_increment,
  `nom_utilisateur` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cahierDeText` text NOT NULL,
  `GRR` text NOT NULL,
  `pKwartz` text NOT NULL,
  `webClasseur` text NOT NULL,
  `adminLevel` int(11) NOT NULL default '1' COMMENT '1 default user 2 eleve 3 prof 4 admin 5 superadmin',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `nom_utilisateur` (`nom_utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=120 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom_utilisateur`, `password`, `cahierDeText`, `GRR`, `pKwartz`, `webClasseur`, `adminLevel`) VALUES
(1, 'administrateur', 'Sitelm1515', 'resp2;resplm009', 'a;a', 'z;z', 'e;e', 5),
(2, 'test', 'test1515', ';', ';', ';', ';', 2),
(3, 'S13054', 'cd2009', '', '', '', '', 4),
(4, 'prof', 'prof2012', ';', '', '', '', 3),
(5, 'secretariat', 'vaouvrir', ';', ';', ';', ';', 4),
(77, 'ALLENDER', 'pallender2012', '', '', '', '', 3),
(78, 'BECQUET', 'A4FJXM', '', '', '', '', 3),
(79, 'BILLAUD', 'bmlm2012', ';', ';', ';', ';', 3),
(80, 'BODZIAK', 'bklm2012', '', '', '', '', 3),
(81, 'BOIDIER', 'aclm2012', '', '', '', '', 3),
(82, 'RENIER', 'bplm2012', '', '', '', '', 3),
(83, 'CHOVE', 'cvlm2012', '', '', '', '', 3),
(84, 'COUROUBLE', 'ccourouble2012', '', '', '', '', 3),
(85, 'DEBEYRE', 'jmdlm008', 'jm.debeyre;jmd007', 'jm.debeyre;jmd007', ';', ';', 3),
(86, 'GOMBERT', 'dplm2012', '', '', '', '', 3),
(87, 'DELEU', '#deleu2012', '', '', '', '', 3),
(88, 'DESPLANQUES', 'dglm2012', '', '', '', '', 3),
(89, 'DRUAERT', 'ddlm2012', '', '', '', '', 3),
(90, 'DZIACKO', 'dvlm2012', '', '', '', '', 3),
(91, 'ELAGLI', 'eklm2012', '', '', '', '', 3),
(92, 'ENNEBECK', 'ENQCR4', '', '', '', '', 3),
(93, 'ESPERANCE', 'eclm2012', '', '', '', '', 3),
(94, 'GUICHET', 'gylm2012', '', '', '', '', 3),
(95, 'HIPHOP', 'BK7N2M', '', '', '', '', 3),
(96, 'KELLER', 'akeller59', '', '', '', '', 3),
(97, 'MAKOUALA', 'melm2012', '', '', '', '', 3),
(98, 'MALARA', 'amlm2012', '', '', '', '', 3),
(99, 'MLAGIU', 'mclm2012', '', '', '', '', 3),
(100, 'NASCIMBENE', 'nllm2012', '', '', '', '', 3),
(101, 'NOTOT', 'nslm2012', '', '', '', '', 3),
(102, 'OLIVER', 'oalm2012', '', '', '', '', 3),
(103, 'TUREK', 'oclm2012', '', '', '', '', 3),
(104, 'RAUXL', 'rllm2012', '', '', '', '', 3),
(105, 'RIGAULT', 'ralm2012', '', '', '', '', 3),
(106, 'ROLLER', 'rolm2012', '', '', '', '', 3),
(107, 'DULAC', '@dulac', '', '', '', '', 3),
(108, 'SECQD', 'sdlm2012', '', '', '', '', 3),
(109, 'SEN GUPTA', 'sgglm2012', '', '', '', '', 3),
(110, 'THEATRE', 'A4FJXM', '', '', '', '', 3),
(111, 'TONNEAU', 'tplm2012', '', '', '', '', 3),
(112, 'VAN WAES', 'vdlm2012', '', '', '', '', 3),
(113, 'VASSAL', 'vclm2012', '', '', '', '', 3),
(114, 'VERHOEVEN WALKOWIAK', 'valm2012', '', '', '', '', 3),
(115, 'VIART', 'vjlm2012', '', '', '', '', 3),
(116, 'VILLENEUVE', 'velm2012', '', '', '', '', 3),
(117, 'tttt', 'tttt', '', '', '', '', 5),
(119, 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 0);
