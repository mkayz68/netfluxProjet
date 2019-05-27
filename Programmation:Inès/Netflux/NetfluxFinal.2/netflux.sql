-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 26 mai 2019 à 18:19
-- Version du serveur :  5.5.60-MariaDB
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `netflux`
--

-- --------------------------------------------------------

--
-- Structure de la table `Article`
--

CREATE TABLE `Article` (
  `idArticle` int(11) NOT NULL,
  `nomArticle` varchar(255) DEFAULT NULL,
  `articleSerie` text,
  `auteurArticle` varchar(50) DEFAULT NULL,
  `dateArticle` date DEFAULT NULL,
  `idSerie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Article`
--

INSERT INTO `Article` (`idArticle`, `nomArticle`, `articleSerie`, `auteurArticle`, `dateArticle`, `idSerie`) VALUES
(5, 'MalgrÃ© Son Annulation, La SÃ©rie Pourrait Avoir Une Suite', 'La saison 7 d\'Orange is the new black pourrait ne pas marquer la fin dÃ©finitive de la sÃ©rie. Ses producteurs rÃ©flÃ©chiraient dÃ©jÃ  depuis quelque temps Ã  une suite. Les portes du pÃ©nitencier de Litchfield pourraient finalement ne pas se refermer. Le couperet Ã©tait tombÃ© en octobre dernier pour Orange is the new black, la sÃ©rie carcÃ©rale de Netflix. La saison 7 devait Ãªtre la derniÃ¨re pour le show, qui avait dÃ©marrÃ© durant l\'Ã©tÃ© 2013 sur la chaÃ®ne de streaming. Mais comme le rÃ©vÃ¨le The Hollywood Reporter, son producteur Lionsgate Television rÃ©flÃ©chit Ã  un moyen de la prolonger au-delÃ  de cette Ã©chÃ©ance. ExtrÃªmement fiers de la longÃ©vitÃ© de Orange is the new black, son producteur rappelle qu\'il s\'agit toujours de l\'une des sÃ©ries les plus regardÃ©es sur Netflix. S\'il ambitionne de terminer en beautÃ©, il rÃ©vÃ¨le surtout qu\'il est dÃ©jÃ  en discussion depuis un moment avec Jenji Kohan, la crÃ©atrice de la sÃ©rie, sur une suite Ã©ventuelle Ã  lui donner. Si rien n\'est dans les tuyaux pour le moment, plusieurs projets ont dÃ©jÃ  Ã©tÃ© envisagÃ©s. Et les pistes sont nombreuses et variÃ©es. Il pourrait s\'agir d\'une spectacle Ã  Broadway, ou d\'un spin-off centrÃ© autour des personnages de Larry Bloom (Jason Biggs) et Polly Harper (Maria Dizzia) ou de Cal Chapman (Michael Chernus), le frÃ¨re de Piper, et Carol Chapman (Deborah Rush), sa mÃ¨re. Mais quoiqu\'il arrive, aucun de ses projets ne devrait Ãªtre annoncÃ© avant la fin de la sÃ©rie. En attendant, l\'ultime saison de Orange is the new black devrait arriver sur Netflix en 2019.\r\n\r\n\r\n', 'InÃ¨s', '2019-05-16', 2),
(6, 'Le Nombre De Suicides Des Mineurs A-t-il AugmentÃ© Avec La SÃ©rie ?', 'Ã‰CLAIRAGE - Un pic de suicides a Ã©tÃ© enregistrÃ© chez les AmÃ©ricains Ã¢gÃ©s de 10 Ã  17 ans aprÃ¨s la diffusion de la sÃ©rie sur Netflix en mars 2017. Le gÃ©ant du streaming a indiquÃ© Ãªtre &quot;en train d\'analyser l\'Ã©tude&quot; publiÃ©e dans une revue spÃ©cialisÃ©e. a sÃ©rie 13 Reasons Why retrace l\'histoire d\'une adolescente mettant fin Ã  ses jours. DiffusÃ©e sur Netflix en 2017, nombreux sont ceux qui s\'inquiÃ©taient alors de l\'impact sur les jeunes spectateurs. Une Ã©tude, publiÃ©e dans une revue spÃ©cialisÃ©e amÃ©ricaine, vient justement alimenter la polÃ©mique en montrant une hausse &quot;significative&quot; des suicides chez les mineurs aux Ã‰tats-Unis dans les mois qui ont suivi la diffusion de la sÃ©rie. Les auteurs de l\'Ã©tude estiment ainsi Ã  &quot;195 le nombre de morts supplÃ©mentaires par suicide chez les jeunes Ã¢gÃ©s de 10 Ã  17 ans entre le 1er avril et le 31 dÃ©cembre 2017, dans la foulÃ©e de la diffusion de la sÃ©rie&quot;, soit une hausse de prÃ¨s de 29%. Contrairement Ã  leur hypothÃ¨se de dÃ©part, cette surmortalitÃ© aurait essentiellement touchÃ© les garÃ§ons. Pour parvenir Ã  ces chiffres, Jeffrey Bridge et son Ã©quipe du Nationwide Children\'s Hospital de l\'Ohio ont analysÃ© les statistiques officielles des suicides entre le 1er janvier 2013 et le 31 dÃ©cembre 2017, soit 180.655 morts au total. Selon leurs calculs, ce pic de suicides a Ã©tÃ© enregistrÃ© chez les AmÃ©ricains Ã¢gÃ© de 10 Ã  17 ans dÃ¨s la diffusion de la sÃ©rie par Netflix en mars 2017. Y\'a t-il alors un lien de cause Ã  effet ? Rien n\'est moins sÃ»r.\r\n\r\n\r\n', 'InÃ¨s', '2019-05-16', 3),
(7, 'Gomez, L\'agent Des Stups Dans â€œBreaking Badâ€, Se Lance Dans La Politique', 'Steven Michael Quezada, acteur dans la sÃ©rie â€œBreaking Badâ€ est candidat au siÃ¨ge de la commission du comtÃ© d\'Albuquerque. Une future carriÃ¨re Ã  la Schwarzie ou Ã  la Ronald Reagan ? Les acteurs peuvent-ils aussi jouer aux politiciens ? Parmi les exemples cÃ©lÃ¨bres, il y eut Ã©videmment Ronald Reagan, le quarantiÃ¨me prÃ©sident des Etats-Unis de 1981 Ã  1989. Acteur de seconde zone dans les annÃ©es 30, il se fait vraiment connaÃ®tre avec Crimes sans chÃ¢timent en 1942. Il s\'engage en politique dans les annÃ©es 50, abandonnant sa carriÃ¨re cinÃ©matographique et devient gouverneur de Californie en 1966. Citons aussi bien sÃ»r Arnold Schwarzenegger, bodybuilder autrichien qui devient successful Ã  Hollywood avant d\'Ãªtre gouverneur rÃ©publicain de Californie de 2003 Ã  2011. S\'il remporte cinq fois le concours de Mister Univers et joue dans des grosses productions hollywoodiennes (Terminator, Predator, Total Recall, etc), son palmarÃ¨s politique est plus maigre. De ses trois mandats, il ressort trÃ¨s critiquÃ© pour avoir fait augmenter la dette de l\'Etat mais reste l\'un des rares Ã  s\'Ãªtre attaquÃ© Ã  la rÃ©forme des prisons surpeuplÃ©es. En tant que dÃ©fenseur des animaux, il aussi fait passer une loi qui interdit la production et la vente de foie gras en Californie Ã  compter de 2012 et qui sera finalement retirÃ©e en 2015. La carriÃ¨re politique de Clint Eastwood est en tous cas plus modeste : il fut maire de 1986 Ã  1988 de la petite ville de Carmel-by-the-Sea en Californie oÃ¹ il possÃ¨de une de ses rÃ©sidences principales, un bar et oÃ¹ il monte ses films. S\'il se lance, c\'est pour des raisons perso : il est en conflit avec la mairie qui l\'empÃªche de construire un bÃ¢timent en ville. RÃ©sultat, il Ã©crase son concurrent en remportant 72 % des voix. Son bilan ? En deux annÃ©es de mandat, Clint a fait construire une balade le long de la plage et autorisÃ© la vente de glaces, auparavant bannies Ã  cause d\'une loi restreignant la vente de nourriture fast-food... Mardi 21 juillet, un autre acteur s\'est rajoutÃ© Ã  la liste. Steven Michael Quezada, alias Gomez dans Breaking Bad, a annoncÃ© sa candidature Ã  la tÃªte du comtÃ© de Bernalillo, dont Albuquerque est la ville principale, et qui est aussi le lieu de tournage de la sÃ©rie. Il va tenter de remporter le siÃ¨ge qui sera vacant en 2016. Le coÃ©quipier d\'Hank dans la sÃ©rie d\'AMC est dans la vie encartÃ© au parti dÃ©mocrate depuis 2014, et siÃ¨ge au conseil des Ã©coles publiques d\'Albuquerque. Il peut bien sÃ»r compter sur sa cÃ©lÃ©britÃ©, mais aussi sur ses origines latino. Car il a au moins pour lui d\'Ãªtre un vrai local : nÃ© et Ã©duquÃ© Ã  Albuquerque et Ã  l\'universitÃ© du Nouveau-Mexique Ã  Portales, il est issu d\'une famille installÃ©e dans la rÃ©gion depuis des gÃ©nÃ©rations. Cela peut faire mouche dans le comtÃ© de Bernalillo, oÃ¹ un habitant sur deux est hispanique, une frange de l\'Ã©lectorat qui opte souvent pour un vote communautaire. Quezada est d\'ailleurs omniprÃ©sent dans des comÃ©dies latinos qui font recette auprÃ¨s de la communautÃ©, comme Que Locos. Et quand Donald Trump, candidat Ã  la primaire rÃ©publicaine, a qualifiÃ© les Mexicains de Â« criminels et de violeurs Â», il monte au crÃ©neau, qualifiant ces propos Â« d\'injustes, qui n\'auraient jamais dÃ» Ãªtre prononcÃ©s Â», et surnommant le milliardaire Â« Donald Chump Â» soit Â« Donald le crÃ©tin Â». Quezada dit vouloir militer pour plus d\'Ã©lus Hispano-AmÃ©ricains et la protection des quartiers latinos d\'Albuquerque, convoitÃ©s par des sociÃ©tÃ©s de construction. On verra, s\'il est Ã©lu, s\'il arrive Ã  faire plus que favoriser les marchands de glaces...', 'InÃ¨s', '2019-05-16', 4),
(8, 'La SÃ©rie Culte Â« Breaking Bad Â» Va Ãªtre AdaptÃ©e Au CinÃ©ma', 'La sÃ©rie culte Breaking Bad va Ãªtre dÃ©clinÃ©e en un long-mÃ©trage. Câ€™est ce quâ€™a annoncÃ©, mercredi 7 novembre, lâ€™acteur Bryan Cranston, qui incarnait son hÃ©ros, Walter White. DiffusÃ©e de 2008 Ã  2013 sur la chaÃ®ne cÃ¢blÃ©e AMC, Breaking Bad est considÃ©rÃ©e comme lâ€™une des meilleures sÃ©ries de lâ€™histoire de la tÃ©lÃ©vision amÃ©ricaine. En cinq saisons, elle a remportÃ© seize Emmy Awards, ainsi que deux Golden Globes. Â« HonnÃªtement, je nâ€™ai pas lu le script Â», a expliquÃ© Bryan Cranston, 62 ans, lors dâ€™un passage dans lâ€™Ã©mission de radio The Dan Patrick Show. Â« Donc la question se pose de savoir si Walter White sera ou non dans ce film. Â» Mais il a ajoutÃ© quâ€™il serait Â« absolument Â» partant pour reprendre le rÃ´le du professeur de chimie devenu fabricant de drogue si le crÃ©ateur de la sÃ©rie et rÃ©alisateur du film, Vince Gilligan, le lui proposait. Â« Ã‡a a Ã©tÃ© la plus grande pÃ©riode de ma vie professionnelle. Et je suis impatient de revoir ces gens, mÃªme si ce nâ€™est que pour une visite. Â»', 'InÃ¨s', '2019-05-16', 4),
(9, 'En Attendant La Saison 3, Un Roman Sur Jim Hopper Va ParaÃ®tre', 'Le succÃ¨s de la saga Stranger Things a fait des petits. Et ceux qui nâ€™arrivent pas Ã  attendre la suite vont pouvoir patienter grÃ¢ce aux romans. En Ã  peine trois ans, la sÃ©rie Stranger Things a rÃ©ussi Ã  regrouper un impressionnant nombre de fans, et Ã  crÃ©er une attente trÃ¨s forte. En attendant la troisiÃ¨me saison, prÃ©vue pour le 4 juillet 2019, ces derniers peuvent dÃ©couvrir les romans inspirÃ©s de la saga. Des ouvrages qui permettent de sortir des sentiers battus pour se focaliser sur des personnages en particulier. Netflix vient dâ€™annoncer la sortie rÃ©cente de Â« Suspicious Mind Â», qui se penchait sur lâ€™histoire de Terry Ives, la mÃ¨re dâ€™Eleven. Le livre sera disponible en franÃ§ais le 7 mars prochain. Ce Â« prequel Â» sera suivi par la sortie de Â« Darkness on the Edge of Town Â», qui sera lui disponible dÃ¨s le 4 juin, soit un mois avant la sortie de la nouvelle saison. Ce roman devrait attiser la curiositÃ© des fans puisquâ€™il Ã©voque lâ€™histoire de Jim Hopper lorsquâ€™il Ã©tait encore dÃ©tective dans la brigade criminelle de New York, en 1977. Ici encore, il sâ€™agira de se familiariser avec des faits survenus avant lâ€™histoire officielle. IdÃ©al avant de replonger dans le grand bain.', 'InÃ¨s', '2019-05-16', 5),
(10, 'Hasbro Lance Un Donjons Et Dragons Version Stranger Things', 'C\'est une nouvelle qui devrait rÃ©jouir les fans de la premiÃ¨re heure de Stranger Things. Hasbro va lancer une nouvelle version de Donjons et Dragons Ã  lâ€™effigie des personnages dâ€™une des sÃ©ries phares de Netflix. Le jeu est dÃ©jÃ  disponible en prÃ©commande chez Amazon. Si vous avez regardÃ© Stranger Things, le jeu Donjons et Dragons ne peut pas vous Ãªtre inconnu. Vous rÃªviez dâ€™en faire une partie sauce Stranger Things ? Cela va bientÃ´t Ãªtre possible. En effet, Hasbro a dÃ©voilÃ© Ã  la foire du jouet de New York quâ€™une version Ã  lâ€™effigie de la sÃ©rie allait prochainement voir le jour. Un jeu qui fait Ã©cho Ã  une scÃ¨ne mythique Dans la premiÃ¨re scÃ¨ne de la sÃ©rie, quatre jeunes garÃ§ons sont assis autour dâ€™une table en train de jouer Ã  Donjons et Dragons. Ces premiÃ¨res minutes sont essentielles puisquâ€™elles annoncent toute la tonalitÃ© de lâ€™arc narratif de la premiÃ¨re saison. Le nouveau jeu Hasbro fera Ã©videmment Ã©cho Ã  cette scÃ¨ne lÃ©gendaire. Le jeu devrait se jouer de la mÃªme maniÃ¨re que la version dâ€™origine. Lâ€™ancÃªtre des jeux de rÃ´les se met Ã  la page et revÃªt les allures de la cÃ©lÃ¨bre sÃ©rie Netflix. La boÃ®te comportera un dÃ© Ã  10 faces, les fiches dÃ©taillÃ©es pour chaque joueur et la rÃ¨gle du jeu. Petit bonus : deux figurines de Demogorgon seront livrÃ©es avec ! Choisissez votre personnage et restez sur vos gardes : Â« PrÃ©parez-vous Ã  nâ€™importe quoi Â» peut-on lire sur la notice. Le jeu devrait sortir le 22 avril prochain selon Hasbro et est dÃ©jÃ  disponible en prÃ©commande sur Amazon. De quoi patienter jusquâ€™Ã  juillet Hasbro aurait Ã©galement annoncÃ© quâ€™une version annÃ©es 80 de Trivial Pursuit Ã©tait en prÃ©paration. Il comportera diverses questions comme sur les personnalitÃ©s cÃ©lÃ¨bres, la culture pop, les Ã©vÃ©nements, les tendances et oui, vous ne rÃªvez pas, Stranger Things. Ã€ la mÃªme date, une mini console dâ€™arcade devrait Ã©galement voir le jour avec 16 titres sur le thÃ¨me de Stranger Things. Alors mÃªme si le 4 juillet nâ€™arrivera jamais assez vite, Hasbro va vous donner de quoi vous divertir et dÃ©tournez votre attention de lâ€™attente interminable.', 'InÃ¨s', '2019-05-16', 5),
(11, 'Comment â€œThe Walking Deadâ€ A DynamitÃ© Le MarchÃ© Du Comics En France', 'Longtemps, les comics amÃ©ricains ont Ã©tÃ© rÃ©duits en France aux histoires de super-hÃ©ros. DÃ©sormais, entre histoires de zombies, polar ou fantasy, ils y ont fait leur trou. RÃ©cit dâ€™un succÃ¨s qui se chiffre en millions dâ€™exemplaires, Ã  lâ€™heure du Free Comic Book Day.\r\n\r\nAux Etats-Unis, la bande dessinÃ©e se consomme principalement sous la forme de comic books, soit des fascicules souples dâ€™une trentaine de pages au format bien plus petit que celui des BD franÃ§aises traditionnelles. Petit Ã  petit, ces comics ont rÃ©ussi Ã  sâ€™installer dans les librairies franÃ§aises, notamment grÃ¢ce Ã  la sÃ©rie dâ€™horreur The Walking Dead. Ils occupent mÃªme une place de plus en plus importante. Alors que ce week-end les Ã©diteurs franÃ§ais honorent le rendez-vous du Free Comic Book Day, plongÃ©e dans un marchÃ© en pleine Ã©bullition.\r\nÂ« Avant, quand tu disais lire des comics, les gens te regardaient comme un alien. Â» Investi dans la cause de la bande dessinÃ©e amÃ©ricaine depuis une vingtaine dâ€™annÃ©es, responsable Ã©ditorial aux Ã©ditions Delcourt depuis 2004, Thierry Mornet constate, ravi, combien le regard de la France a Ã©voluÃ©. Â« On nâ€™a jamais eu une offre aussi plÃ©thorique et de qualitÃ©. Â» Il suffit dâ€™entrer dans une librairie de bande dessinÃ©e, voire dans certaines librairies gÃ©nÃ©ralistes ou mÃªme des grandes surfaces, pour sâ€™en rendre compte. Â« Depuis que je suis en charge du rayon comics Ã  la librairie BDnet Nation, jâ€™ai dÃ» agrandir lâ€™espace deux ou trois fois et le chiffre dâ€™affaires a connu la mÃªme progression Â», constate Christopher Maloine. Selon le dernier rapport Ã©tabli par le journaliste Gilles Ratier concernant la production de BD en 2016, 494 comics ont Ã©tÃ© Ã©ditÃ©s en langue franÃ§aise alors quâ€™en 2000 on nâ€™en comptait que 116 !\r\n\r\nLa multiplication des acteurs\r\nCette annÃ©e, le nombre de sorties risque dâ€™atteindre des records, vu la multiplication des acteurs. Historiquement liÃ©e aux sÃ©ries franco-belges et aux romans graphiques, la maison dâ€™Ã©dition Casterman se lance dans les comics et inaugure le label Paperback avec les robots gÃ©ants de Mech Academy et les dinosaures de lâ€™album Au temps des reptiles. Il y a quelques mois, Bragelonne, maison dâ€™Ã©dition tournÃ©e vers lâ€™imaginaire et la fantasy, a crÃ©Ã© la collection Â« Hi Comics Â», portÃ©e par de nouvelles aventures des Tortues Ninja ou la trilogie Black Summer, No Hero, Supergod, Ã©crite par Warren Ellis. La librairie marseillaise Lâ€™Antre de Snorgleux sâ€™est aussi aventurÃ©e dans lâ€™Ã©dition depuis lâ€™annÃ©e derniÃ¨re avec notamment Animosityâ€¦ Basile BÃ©guerie, responsable de Paperback, estime que Â« lâ€™offre franÃ§aise reflÃ¨te ce qui se passe actuellement aux Etats-Unis. Les lignes y bougent pas mal grÃ¢ce Ã  un bouillonnement crÃ©atif sans prÃ©cÃ©dent Â».\r\n\r\nLa rÃ©volution â€œWalking deadâ€\r\nPendant longtemps, les lecteurs franÃ§ais associaient comics et super-hÃ©ros. Cela reflÃ©tait une rÃ©alitÃ© : le marchÃ© de la BD amÃ©ricaine Ã©tait Ã©crasÃ© par les justiciers de Marvel et de DC. Si ceux-ci sont toujours trÃ¨s prÃ©sents dans les rayons grÃ¢ce aux Ã©ditions Panini (le catalogue Marvel, soit Spiderman, Miss Marvel, Black Panther, etc.) et Urban Comics (les hÃ©ros DC soit Batman, Justice League, Superman, etc.), dâ€™autres types de sÃ©ries ont changÃ© la donne.\r\n\r\nDepuis 2003, lâ€™horrifique Walking Dead raconte ainsi comment des humains tentent de survivre sur une planÃ¨te occupÃ©e par des zombies. ScÃ©narisÃ© par Robert Kirkman, dessinÃ© par Tony Moore puis par Charlie Adlard, ce hit des comics a Ã©tÃ© Ã  lâ€™origine dâ€™une rÃ©volution. Â« Certes, une visibilitÃ© importante est toujours donnÃ©e aux super-hÃ©ros, mais lâ€™Ã©piphÃ©nomÃ¨ne qui a tout dÃ©clenchÃ© câ€™est The Walking Dead, rÃ©sume Thierry Mornet, qui lâ€™Ã©dite chez Delcourt depuis 2007. Aujourdâ€™hui, on est prÃ¨s des 4,5 millions dâ€™exemplaires vendus dont 400 000 pour le seul premier tome. Cela a ouvert lâ€™appÃ©tit des autres Ã©diteurs. Â» \r\n\r\nBatman et Justice League\r\nFranÃ§ois HercouÃ«t, directeur Ã©ditorial dâ€™Urban Comics, confirme : Â« On a assistÃ© Ã  un changement de paradigme. Avant, pour un auteur amÃ©ricain, le sommet de carriÃ¨re consistait Ã  reprendre Superman ou Spiderman. Maintenant, passer par DC ou Marvel nâ€™est quâ€™une Ã©tape pour se faire connaÃ®tre avant dâ€™emmener son lectorat vers une crÃ©ation dont il dÃ©tiendra tous les droits. Â» Niveau ventes, les locomotives dâ€™Urban sont en France le Batman de Scott Snyder et Greg Capullo (plus de 300 000 exemplaires pour 9 volumes) et Justice League (200 000 exemplaires pour 9 volumes). Mais, au troisiÃ¨me rang, on trouve Saga, la prenante sÃ©rie de fantasy space opera crÃ©Ã©e par Brian K. Vaughan et Fiona Staples avec 150 000 exemplaires pour 8 tomes.\r\n\r\nâ€œPersonne nâ€™aurait pu prÃ©voir que Ã§a cartonne Ã  ce pointâ€\r\nOlivier Jalabert, directeur Ã©ditorial de GlÃ©nat Comics depuis 2014, directeur de la librairie parisienne Album Comics pendant plus dâ€™une dÃ©cennie, explique : Â« Mon idÃ©e derriÃ¨re GlÃ©nat Comics Ã©tait de surfer sur lâ€™Ã©lan de la BD amÃ©ricaine et de proposer de la crÃ©ation dans des genres diffÃ©rents (lâ€™horreur, le western, la comÃ©die) racontÃ©s en format comics. AprÃ¨s, The Walking Dead, câ€™est lâ€™exemple qui tue, mais il est trÃ¨s rare. Personne nâ€™aurait pu prÃ©voir que Ã§a cartonne Ã  ce point. Câ€™est toujours difficile de se demander de quoi les gens ont envie. Â» Dâ€™ailleurs, si GlÃ©nat Comics compte Ã  son catalogue dâ€™autres sÃ©ries passionnantes comme Lazarus et sa science-fiction glaÃ§ante, câ€™est Lady Mechanika, de Joe Benitez, avec son ambiance rÃ©trofuturiste, qui cartonne (prÃ¨s de 20 000 exemplaires pour le 1er tome). Thierry Mornet, de Delcourt, se fÃ©licite, lui, du carton de Fondu au noir, polar dâ€™Ed Brubaker et de Sean Philips sorti en dÃ©cembre dernier et Ã©coulÃ© Ã  prÃ¨s de 10 000 exemplaires.\r\n\r\nÂ« Le marchÃ© se porte bien, estime Christopher Maloine de BDnet Nation, parce que, hors des super-hÃ©ros DC-Marvel, on a des titres qui fonctionnent sur des clients nâ€™ayant jamais touchÃ© aux comics. Les lecteurs de polar ou de science-fiction franco-belge, on les a fait dÃ©vier de leur chemin habituel dans la librairie. Il nâ€™y a pas dâ€™opposition de leur part mais de la curiositÃ©. On peut dire Ã  nâ€™importe quel client de moins de 50 ans : â€œLisez Saga ou The Walking Dead.â€ Dâ€™abord, ils seront perturbÃ©s par le format, plus petit, mais comme lâ€™histoire est bien Ã©crite, ils sâ€™y retrouveront. Â» Christopher Ã©voque aussi les consommateurs de comics Â« Ã©rudits Â», Ã  lâ€™origine de la petite success story de Bliss. Ce petit Ã©diteur dÃ©tient les droits des crÃ©ations Valiant, qui, comme celles de Marvel ou DC, se partagent le mÃªme univers. Ainsi la science-fiction de Divinity voisine avec la super-hÃ©roÃ¯ne bien dans sa peau Faith ou les rÃ©cits dâ€™espionnage de Ninjak. Â« Depuis dÃ©but 2018, je mets toutes ces sÃ©ries au mÃªme endroit et, comme les livres sont bien faits, ceux que jâ€™appelle les Ã©rudits sâ€™y sont intÃ©ressÃ©s. Cela reflÃ¨te un phÃ©nomÃ¨ne plus gÃ©nÃ©ral : comme je le vois sur les salons ou les conventions, cet Ã©diteur est souvent en rupture de stock. Â»\r\n\r\nUne vÃ©ritable surenchÃ¨re\r\nSâ€™il a le vent en poupe, le comics peut-il sâ€™implanter encore davantage ? Â« Câ€™est le secteur le plus dynamique de la BDâ€¦ mais on est parti de 2, 3 % pour atteindre les 10 % Â», rÃ©pond FranÃ§ois HercouÃ«t, dâ€™Urban Comics. Thierry Mornet, de Delcourt, confirme : Â« Il sâ€™agit dâ€™un marchÃ© non nÃ©gligeable, mais pas dâ€™un raz de marÃ©e qui va remplacer la BD franco-belge. Â» \r\n\r\nPourtant, lâ€™achat des droits de publication des sÃ©ries amÃ©ricaines a donnÃ© lieu ces derniÃ¨res annÃ©es Ã  une vÃ©ritable surenchÃ¨re. Â« Bien sÃ»r, il y a des ouvrages publiÃ©s par dâ€™autres dont jâ€™aurais aimÃ© mâ€™occuper, constate Thierry Mornet. Mais quand tout devient dÃ©raisonnable en termes dâ€™achat, je ne peux pas avoir de regret. Je ne suis pas lÃ  pour acheter des ouvrages Ã  des prix surÃ©valuÃ©s sous prÃ©texte que la concurrence les veut Ã  des prix impossibles. Â» Olivier Jalabert, de GlÃ©nat, commente : Â« Evidemment, on a contribuÃ© Ã  cette bulle spÃ©culative quand on est arrivÃ© : Ã§a a donnÃ© envie aux AmÃ©ricains de nous vendre les choses plus chÃ¨res. Mais je pense que câ€™est en train de se calmer. Aujourdâ€™hui, il faut plus anticiper quâ€™avant, flairer les coups. Â» FranÃ§ois HercouÃ«t prÃ©cise : Â« DÃ¨s la sortie du premier numÃ©ro dâ€™une sÃ©rie, parfois mÃªme dÃ¨s lâ€™annonce, les agents des auteurs amÃ©ricains font le tour et relÃ¨vent les premiÃ¨res enchÃ¨res. Il faut se dÃ©cider sur une intuition. Â» \r\n\r\nBasile BÃ©guerie, nouvel acteur avec Paperback, a dÃ©jÃ  du recul : Â« Voir le comics comme un eldorado ? Il vaut mieux se mÃ©fier. Comme tous les marchÃ©s culturels, le secteur doit sa croissance Ã  des locomotives qui Ã©clipsent le reste. Avec Casterman, on ne fait pas du comics pour que lâ€™argent rentre facilement. On va prendre le temps de construire. Â» Suite aux prochains Ã©pisodesâ€¦\r\n', 'InÃ¨s', '2019-05-16', 7),
(12, 'Â«Black MirrorÂ» Ou Lâ€™anthologie De La Pente Fatale', 'Les rÃ©cits dâ€™anticipation disposent dâ€™une capacitÃ© particuliÃ¨re Ã  nous prÃ©senter les consÃ©quences potentielles des recherches scientifiques et techniques en dÃ©veloppement (nanotechnologies, gÃ©nÃ©tique, intelligence artificielle). La sÃ©rie anthologique Black Mirror, crÃ©Ã©e par Charlie Brooker, excelle dans cette mise en perspective des dÃ©rives potentielles de nos technologies favorites.\r\nDiverses Ã©tudes philosophiques et littÃ©raires sâ€™accordent Ã  dire que les rÃ©cits de fiction ont une proximitÃ© relative avec le rÃ©el. Si un biopic doit coller au mieux avec lâ€™histoire dâ€™un personnage rÃ©el (pouvoir rÃ©fÃ©rentiel de la fiction), dâ€™autres rÃ©cits vont sâ€™Ã©loigner davantage de la rÃ©alitÃ©, mais permettront nÃ©anmoins Ã  leur public de tirer des consÃ©quences sur le rÃ©el par infÃ©rence (pouvoir infÃ©rentiel de la fiction). Cette variabilitÃ© de la relation au rÃ©el peut confÃ©rer un statut ambigu aux effets de la fiction sur son public et nous conduit de facto Ã  une conception Ã©thique de cette derniÃ¨re.\r\nLes rÃ©cits de science-fiction disposent de ce pouvoir infÃ©rentiel lorsquâ€™ils prÃ©sentent une certaine image de la science, des scientifiques ou des technologies. On retrouve notamment une sÃ©rie dâ€™arguments rÃ©currents dans les mises en rÃ©cits comme celui de la prÃ©cipitation du scientifique Ã  atteindre sa dÃ©couverte, le dÃ©sir de connaissance au-delÃ  de la raison ou de lâ€™Ã©thique, lâ€™effet pervers non-anticipÃ© dâ€™une dÃ©couverte scientifique ou dâ€™une technologie. Ces arguments ont une utilitÃ© pour la fiction elle-mÃªme, car ils sont souvent Ã  lâ€™origine de lâ€™intrigue principale. Ils ont aussi un lien avec le rÃ©el car ils sont souvent inspirÃ©s de la science en train de se faire ou dâ€™une technologie qui fait peur, justement, au moment de leur Ã©criture.', 'InÃ¨s', '2019-05-16', 6),
(13, '13 Reasons Why : La Saison 3 RepoussÃ©e Tard Dans L\'annÃ©e', 'Vous attendez avec impatience la saison 3 inÃ©dite de 13 Reasons Why ? Pas de chance, celle-ci ne devrait pas arriver sur Netflix avant trÃ¨s longtemps. La vie est injuste, mÃªme si Dylan Minnette a un cadeau pour vous afin de vous consoler.\r\nRetour repoussÃ© pour 13 Reasons Why\r\nMauvaise nouvelle pour les fans de 13 Reasons Why, il faudra se montrer patient avant de dÃ©couvrir sa saison 3. Habituellement mise en ligne au printemps par Netflix avec une saison 1 programmÃ©e le 31 mars 2017 et une saison 2 programmÃ©e le 18 mai 2018, la plateforme souhaiterait cette fois-ci proposer la sÃ©rie un peu plus tard dans l\'annÃ©e.\r\n13 Reasons Why : la saison 3 repoussÃ©e tard dans l\'annÃ©e\r\n13 Reasons Why : la saison 3 repoussÃ©e tard dans l\'annÃ©e\r\nVous attendez avec impatience la saison 3 inÃ©dite de 13 Reasons Why ? Pas de chance, celle-ci ne devrait pas arriver sur Netflix avant trÃ¨s longtemps. La vie est injuste, mÃªme si Dylan Minnette a un cadeau pour vous afin de vous consoler.\r\nRetour repoussÃ© pour 13 Reasons Why\r\nMauvaise nouvelle pour les fans de 13 Reasons Why, il faudra se montrer patient avant de dÃ©couvrir sa saison 3. Habituellement mise en ligne au printemps par Netflix avec une saison 1 programmÃ©e le 31 mars 2017 et une saison 2 programmÃ©e le 18 mai 2018, la plateforme souhaiterait cette fois-ci proposer la sÃ©rie un peu plus tard dans l\'annÃ©e.\r\n\r\nÃ‡A VA  TE PLAIRE\r\n13 Reasons Why saison 3 : Hannah de retour ? Bryce absent ? Le vrai ou faux de Justin Prentice 26/06\r\n13 Reasons Why saison 3 : Hannah de retour ? Bryce absent ? Le vrai ou faux de Justin Prentice\r\n 13 Reasons Why saison 3 : on sait quand dÃ©butera le tournage 9/08\r\n13 Reasons Why saison 3 : on sait quand dÃ©butera le tournage\r\n 13 Reasons Why saison 3 : une grosse augmentation pour les acteurs ? DÃ©couvrez leurs salaires 9/08\r\n13 Reasons Why saison 3 : une grosse augmentation pour les acteurs ? DÃ©couvrez leurs salaires\r\nA l\'occasion d\'une lettre envoyÃ©e aux actionnaires le 16 avril dernier, Netflix a notamment dÃ©clarÃ© : &quot;On avance vers une programmation trÃ¨s forte pour la seconde partie de l\'annÃ©e, qui inclura des nouvelles saisons de certaines de nos plus grosses sÃ©ries comme Stranger Things (4 juillet), 13 Reasons Why, Orange is the New Black, The Crown et La Casa de Papel&quot;. Traduction, il faudra au minimum attendre cet Ã©tÃ© pour la dÃ©couvrir - voire possiblement la rentrÃ©e, ce qui collerait plutÃ´t bien avec l\'ambiance scolaire de l\'histoire.\r\n\r\n13 Reasons Why : la saison 3 repoussÃ©e tard dans l\'annÃ©e\r\n13 Reasons Why : la saison 3 repoussÃ©e tard dans l\'annÃ©e\r\nVous attendez avec impatience la saison 3 inÃ©dite de 13 Reasons Why ? Pas de chance, celle-ci ne devrait pas arriver sur Netflix avant trÃ¨s longtemps. La vie est injuste, mÃªme si Dylan Minnette a un cadeau pour vous afin de vous consoler.\r\nRetour repoussÃ© pour 13 Reasons Why\r\nMauvaise nouvelle pour les fans de 13 Reasons Why, il faudra se montrer patient avant de dÃ©couvrir sa saison 3. Habituellement mise en ligne au printemps par Netflix avec une saison 1 programmÃ©e le 31 mars 2017 et une saison 2 programmÃ©e le 18 mai 2018, la plateforme souhaiterait cette fois-ci proposer la sÃ©rie un peu plus tard dans l\'annÃ©e.\r\n\r\nÃ‡A VA  TE PLAIRE\r\n13 Reasons Why saison 3 : Hannah de retour ? Bryce absent ? Le vrai ou faux de Justin Prentice 26/06\r\n13 Reasons Why saison 3 : Hannah de retour ? Bryce absent ? Le vrai ou faux de Justin Prentice\r\n 13 Reasons Why saison 3 : on sait quand dÃ©butera le tournage 9/08\r\n13 Reasons Why saison 3 : on sait quand dÃ©butera le tournage\r\n 13 Reasons Why saison 3 : une grosse augmentation pour les acteurs ? DÃ©couvrez leurs salaires 9/08\r\n13 Reasons Why saison 3 : une grosse augmentation pour les acteurs ? DÃ©couvrez leurs salaires\r\nA l\'occasion d\'une lettre envoyÃ©e aux actionnaires le 16 avril dernier, Netflix a notamment dÃ©clarÃ© : &quot;On avance vers une programmation trÃ¨s forte pour la seconde partie de l\'annÃ©e, qui inclura des nouvelles saisons de certaines de nos plus grosses sÃ©ries comme Stranger Things (4 juillet), 13 Reasons Why, Orange is the New Black, The Crown et La Casa de Papel&quot;. Traduction, il faudra au minimum attendre cet Ã©tÃ© pour la dÃ©couvrir - voire possiblement la rentrÃ©e, ce qui collerait plutÃ´t bien avec l\'ambiance scolaire de l\'histoire.\r\n\r\n\r\nLe nouveau projet de Dylan Minnette.\r\nUne attente interminable ? Oui, mais logique puisque le tournage vient tout juste de prendre fin. NÃ©anmoins, si vous avez peur de vous ennuyer d\'ici l\'arrivÃ©e des nouveaux Ã©pisodes, on vous a dÃ©nichÃ© un bon plan afin de vous aider Ã  passer le temps de la meilleure des faÃ§ons.\r\n\r\nPour ceux qui ne le savent peut-Ãªtre pas encore, Dylan Minnette - l\'interprÃ¨te de Clay Jensen, n\'est pas seulement un acteur, c\'est Ã©galement un musicien. Et avec son groupe baptisÃ© Wallows, il vient tout juste de sortir &quot;Nothing Happens&quot;, son premier album pop dont le titre \'Scrawny\' (voir ci-dessous) est extrait. Et nos oreilles valident dÃ©jÃ . AprÃ¨s le binge-watching, place au binge-listening.', 'InÃ¨s', '2019-05-16', 3),
(14, 'Â«La Casa De PapelÂ» Brouille Les Pistes', 'Les spÃ©culations vont bon train autour de la saison 3 de la sÃ©rie espagnole de Netflix. Nous avons fait le point avec lâ€™Ã©quipe crÃ©ative.\r\nA lâ€™origine de Â« La Casa de Papel Â». Dâ€™abord diffusÃ©e en Espagne sur la chaÃ®ne Antena 3, la sÃ©rie a connu un succÃ¨s mondial depuis sa mise ligne sur Netflix, fin 2017. Elle est devenue la sÃ©rie non-anglophone la plus regardÃ©e de la plateforme. Lâ€™annonce dâ€™une saison 3 a Ã©tÃ© officialisÃ©e le 18 avril. Le crÃ©ateur Alex Pina, la scÃ©nariste Esther Martinez Lobato et lâ€™acteur Pedro Alonso, qui joue Berlin, nous en ont parlÃ© au festival de Monte-Carlo.\r\n\r\nÂ« Berlin ! Berlin ! Â» Lors de ce festival, qui sâ€™est tenu du 15 au 19 juin, lâ€™acteur Pedro Alonso faisait partie des stars les plus sollicitÃ©es par le public pour des autographes ou des selfies. La popularitÃ© de lâ€™interprÃ¨te de Berlin dans Â« La Casa de Papel Â» illustre une nouvelle fois le succÃ¨s de la sÃ©rie espagnole diffusÃ©e mondialement sur Netflix.\r\n\r\n\r\n\r\nAprÃ¨s deux premiÃ¨res saisons qui mettaient en scÃ¨ne le braquage de la Maison de la Monnaie Ã  Madrid, les fans ont hÃ¢te de savoir ce que les scÃ©naristes rÃ©servent pour la suite. Et surtout quels personnages seront de retour. Â« Je ne peux rien rÃ©vÃ©ler Ã  ce niveau-lÃ  Â», a assÃ©nÃ© Alex Pina, le crÃ©ateur de la sÃ©rie, aux journalistes prÃ©sents Ã  Monaco. Pedro Alonso, lui-mÃªme, ne se prononce pas sur son personnage qui pourrait revenir dans le cadre de flash-back.\r\n\r\nÂ« Nous nous octroyons une grande libertÃ© avec le temps dans lâ€™intrigue Â», a toutefois confirmÃ© Alex Pina, ce qui promet de nouveaux allers-retours entre prÃ©sent et passÃ©. Â« Les fans ont envie de retrouver les hÃ©ros de la premiÃ¨re saison, mais nâ€™oublions pas que ces personnages sont devenus multimillionnaires, ils ne sont plus les mÃªmes, on change donc dâ€™univers Â», souligne de son cÃ´tÃ© la scÃ©nariste Esther Martinez Lobato.\r\n', 'InÃ¨s M.', '2019-05-18', 9),
(15, 'Clive Standen, De &quot;Vikings&quot; : &quot;Rollo Ã  DÃ©cidÃ© De DÃ©fier Les Dieux&quot;', 'Canal+ SÃ©ries diffuse ce soir, &quot;Ã  l\'heure amÃ©ricaine&quot;, la saison 4 de la sÃ©rie de Michael Hirst (&quot;Les Tudors&quot;). Rencontre avec l\'Anglais Clive Standen, qui incarne le guerrier Rollo.\r\nAu rayon &quot;sÃ©ries historiques&quot;, Vikings est un cas Ã  part, une histoire voulue rigoureuse mais qui, grÃ¢ce Ã  son caractÃ¨re en partie lÃ©gendaire, se permet de mÃªler le romanesque Ã  l\'observation minutieuse d\'une civilisation mal connue. En son coeur, un mÃ©lange d\'action et de soap, oÃ¹ le puissant roi Ragnar Lodbrok s\'oppose (entre autres) Ã  son frÃ¨re mal aimÃ©, Rollo. Un &quot;traitre&quot; passÃ© pour de bon chez l\'ennemi Franc, dÃ©sormais membre maladroit de la cour parisienne, et qui devrait, dans cette saison 4, livrer une guerre sans pitiÃ© Ã  ses anciens amis. Nous avons pu discuter de la sÃ©rie et du personnage avec son interprÃ¨te Clive Standen, invitÃ© du dernier Festival de TÃ©lÃ©vision de Monte Carlo.\r\n\r\n \r\n\r\n\r\nRagnar Lodbrok est le personnage central, le hÃ©ros de Vikings. Rollo le trahit rÃ©guliÃ¨rement, devient son ennemi. Est-ce donc le Â« mÃ©chant Â» de cette histoire ?\r\n\r\nIl n\'y a pas de personnages totalement malÃ©fiques ou de saints dans Vikings. Nous naviguons en zone grise. Je me souviendrai toujours d\'une phrase de Johan Renck, le rÃ©alisateur des premiers Ã©pisodes de la sÃ©rie, un proverbe suÃ©dois : Â« tout le monde veut Ãªtre aimÃ©. Si l\'on ne peut Ãªtre aimÃ©, on veut Ãªtre admirÃ©. Si l\'on ne peut Ãªtre admirÃ©, on veut Ãªtre craint. Et si l\'on ne peut Ãªtre craint, on veut Ãªtre haÃ¯ Â». Rollo, comme tous les vikings Ã  l\'Ã©poque, veut se dÃ©tacher de la masse, veut qu\'on se souvienne de lui. Il veut Ãªtre cÃ©lÃ¨bre, pas comme les Kardashian, mais pour que les dieux le remarquent, pour qu\'ils lui ouvrent les portes du Walhalla le jour venuâ€¦\r\n\r\n \r\n\r\nC\'est une figure classique, celle de l\'Ã©ternel secondâ€¦ mais qui refuse son statut ?\r\n\r\nC\'est une rÃ©currence historique â€“ Vikings est inspirÃ©e de faits rÃ©els, si vous voulez vous faire spoiler, allez lire les livres d\'histoire. Les gentils finissent souvent derniers. Ceux qui ont changÃ© le monde, les hÃ©ros, mÃ©ritent leur place, mais ils en sont souvent arrivÃ©s lÃ  en faisant preuve d\'un sens aigu du machiavÃ©lisme. Rollo a sans doute empruntÃ© des voies dÃ©tournÃ©es, mais il va arriver Ã  faire quelque chose de sa vie, Ã  marquer l\'histoire. C\'est un homme qui accomplit plus en un jour que d\'autres en une vie entiÃ¨re. A chaque fois qu\'il fait une erreur, qu\'il chute, il en tire une leÃ§on. Ragnar, Ã  l\'inverse, est totalement absorbÃ© dans son propre Ã©go. Il oublie tout, ses racines, sa culture, sa foiâ€¦', 'InÃ¨s M.', '2019-05-19', 10),
(16, 'â€œSense8â€, Vies Et Mort Dâ€™une SÃ©rie Hors Norme', 'â€œSense8â€, on aime ou on dÃ©teste. Alors on va pouvoir se prendre la tÃªte une derniÃ¨re fois. Lâ€™ultime Ã©pisode de la sÃ©rie des sÅ“urs Wachowski sera disponible ce vendredi sur Netflix. Lâ€™occasion de revenir sur la vie mouvementÃ©e dâ€™une sÃ©rie Ã  part.\r\n\r\nJusquâ€™Ã  son dernier souffle, Sense8 aura cultivÃ© sa diffÃ©rence. La sÃ©rie des Wachowski (Matrix, Cloud Atlas) pour Netflix fera ses adieux vendredi 8 juin, au terme dâ€™un Ã©pisode final (1) rallongÃ© (2 h 30 !) Ã  lâ€™image de ce que fut toute la sÃ©rie : ample, plurielle, engagÃ©e, optimiste, inÃ©gale, parfois poussive, mais toujours dâ€™une irrÃ©sistible gÃ©nÃ©rositÃ©.\r\n\r\nRÃ©cit choral, mÃ©lange de science-fiction, dâ€™action, de rÃ©flexion sociÃ©tale et de romance, Sense8 a racontÃ© durant vingt-quatre Ã©pisodes le destin de huit Â« sensates Â», des jeunes gens de tous les continents dÃ©couvrant quâ€™ils ne sont pas de simples Homo sapiens, comme nous, mais des Homo sensorium, capables de se connecter Ã  distance. Un don qui leur vaut dâ€™Ãªtre traquÃ©s par le BPO (Biologic Preservation Organization), une obscure organisation intergouvernementaleâ€¦', 'InÃ¨s M.', '2019-05-19', 11),
(17, 'The Umbrella Academy Aura Officiellement Une Saison 2', 'Sans grande surprise, la fine Ã©quipe sera de retour pour un deuxiÃ¨me round. La production dÃ©butera cet Ã©tÃ©, mais aucune date de sortie nâ€™a encore Ã©tÃ© annoncÃ©e.\r\nCâ€™est sur Twitter que la plateforme de streaming a annoncÃ© le retour de The Umbrella Academy. La sÃ©rie adaptÃ©e des comics de Gerard Way et Gabriel BÃ  aura bien le droit Ã  une saison 2, mÃªme si on sâ€™en doutait un peu. DÃ©voilÃ©e le 15 fÃ©vrier dernier, The Umbrella Academy avait suscitÃ© lâ€™engouement de nombreux fans sur les rÃ©seaux sociaux. La production est annoncÃ©e pour cet Ã©tÃ©, mais aucune date de diffusion nâ€™a Ã©tÃ© communiquÃ©e. La plateforme se dÃ©fend mÃªme en ajoutant â€œon ne lâ€™a pas encore.â€\r\n\r\nPetit rappel des faits : 43 enfants sont nÃ©s le mÃªme jour dâ€™une immaculÃ©e conception. Le richissime Sir Reginald Hargreeves a lâ€™ambition de former un collectif de super-hÃ©ros, et va donc adopter 7 enfants dotÃ©s de capacitÃ©s particuliÃ¨res. AprÃ¨s avoir combattu de le crime pendant plusieurs annÃ©es, la joyeuse bande se sÃ©pare et ce nâ€™est quâ€™Ã  la mort de leur pÃ¨re quâ€™ils vont se retrouver. Des retrouvailles de courtes durÃ©es puisquâ€™une menace Ã©trange plane sur la Terre.\r\n\r\n\r\n', 'InÃ¨s M.', '2019-05-19', 12),
(18, 'Un Â« Escape Game Â» Contre Les Zombies Blancs', 'Winter is coming (Â« Lâ€™hiver vient Â») est non seulement le titre du premier Ã©pisode de la saison 1 de GOT, mais Ã©galement la devise dâ€™une des familles de la sÃ©rie, la maison Stark.Câ€™est aussi, depuis novembre 2018, le thÃ¨me dâ€™une salle dâ€™Â« escape game Â» proposÃ©e par Game Over, Ã  Lyon. Les joueurs engagÃ©s dans cette mission disposent dâ€™une heure pour contrer lâ€™avancÃ©e des Marcheurs blancs, de glaÃ§ants morts-vivants aux yeux bleus, qui menacent dâ€™envahir Westeros. Ce qui est bien moins que le temps imparti Ã  Jon Snow, Daenerys Targaryen et Cersei Lannister,eux aussi lancÃ©s contre ces crÃ©atures Ã  la fin de la saison 7.', 'InÃ¨s', '2019-05-19', 13),
(19, 'Une Tapisserie Ã  Lâ€™Ulster Museum De Belfast', 'Lâ€™Irlande du Nord est, avec lâ€™Espagne, la Croatie ou encore lâ€™Islande, lâ€™un des pays oÃ¹ a Ã©tÃ© tournÃ©e la sÃ©rie. Depuis juillet 2017, lâ€™Ulster Museum de Belfast expose une tapisserie de 80 mÃ¨tres de long, tissÃ©e sur le modÃ¨le de celle de Bayeux, qui retrace sur lin lâ€™intÃ©gralitÃ© des sept premiÃ¨res saisons. Elle sera complÃ©tÃ©e par les Â« tableaux Â» des ultimes Ã©pisodes avant de rejoindre Bayeux, oÃ¹ elle sera exposÃ©e Ã  lâ€™hÃ´tel du Doyen, entre septembre et dÃ©cembre. Par ailleurs, Belfast accueille dâ€™avril Ã  aoÃ»t lâ€™exposition itinÃ©rante mondiale Â« GOT, the Touring Exhibition Â». Accesssoires, dÃ©cors et costumes de lâ€™Ã©popÃ©e Ã  portÃ©e de main.', 'InÃ¨s', '2019-05-19', 13),
(20, 'Quel Serait Lâ€™impact Ã©cologique Des Dragons De Â«Game Of ThronesÂ»?', 'Il y a quelques jours, une petite fille nommÃ©e Victoria a tentÃ© de soudoyer la PremiÃ¨re ministre de Nouvelle-ZÃ©lande, Jacinda Ardern, pour que celle-ci lance un programme de recherche gouvernemental sur les dragons. Jacinda Ardern a poliment refusÃ©, mais la petite Victoria pourra sans doute se consoler avec les recherches de Matthew Kolodner, Clarissa Xia et Lauren Zhou.\r\n\r\nCes trois Ã©tudiantÂ·es du lycÃ©e Richard Montgomery de Rockville, dans le Maryland aux Ã‰tats-Unis, ont participÃ© au concours national du Consortium for mathematics and its applications, une compÃ©tition qui rÃ©compense les Ã©quipes capables de rÃ©soudre des problÃ¨mes de logistiques ou de prospective selon des scÃ©narios donnÃ©s.\r\n\r\nLe trio de jeunes scientifiques â€“ce sont les seuls Ã©lÃ¨ves de lycÃ©e Ã  avoir Ã©tÃ© rÃ©compensÃ©sâ€“ sâ€™est attaquÃ© au scÃ©nario le plus fantaisiste de cette Ã©dition, Ã  savoir calculer lâ€™impact environnemental de Drogon, Rhaegal et Viserion, les trois dragons de Daenerys Targaryen. Les deux autres dÃ©fis de la compÃ©tition traitaient une urgence rÃ©elle, l\'un demandait aux Ã©quipes de configurer et dÃ©ployer une flotte de drones pour complÃ©ter les chaÃ®nes d\'approvisionnement mÃ©dical de secours Ã  Porto Rico, l\'autre de construire un modÃ¨le qui pourrait prÃ©dire la gravitÃ© de l\'Ã©pidÃ©mie dâ€™opioÃ¯des aux Ã‰tats-Unis si elle ne diminuait pas.', 'InÃ¨s M.', '2019-05-19', 13),
(21, 'Un Appel Au RÃ©veil Des Consciences', '&quot;Ce n\'est pas une sÃ©rie dÃ©pourvue d\'espoir, confirme Bruce Miller dans une interview Ã  â€œVarietyâ€. Il y a une pornographie du dÃ©sespoir dans certaines sÃ©ries qui ne m\'intÃ©resse pas.&quot; Autrement dit, &quot;The Handmaid\'s Tale&quot; n\'est pas la nihiliste &quot;The Walking Dead&quot;, mais bien un pamphlet fÃ©ministe qui appelle au rÃ©veil des consciences. Comment ne pas entendre le cruel avertissement de son hÃ©roÃ¯ne qui se souvient du coup d\'Etat : \r\n\r\n&quot;Quand ils ont massacrÃ© le CongrÃ¨s, on ne s\'est pas rÃ©veillÃ©s, quand ils ont mis Ã§a sur le dos des terroristes et suspendu la Constitution, on ne s\'est pas rÃ©veillÃ©s non plus.&quot;\r\nAu fil des Ã©pisodes, celle-ci entre en rÃ©sistance et le scÃ©nario s\'attache Ã  capter les ferments de la rÃ©volte. Tout commence par cette imprÃ©cation latine dÃ©tournÃ©e, gravÃ©e dans un coin de sa chambre par la servante qui l\'a prÃ©cÃ©dÃ©e : &quot;Nolite te salopardes exterminorum&quot; (&quot;Ne laisse pas ces salopards te tyranniser&quot;).\r\n\r\nUn passage de flambeau dans les tÃ©nÃ¨bres qui se poursuit aujourd\'huiâ€¦ jusque dans le rÃ©el ! Aux quatre coins du pays, des manifestantes ont adoptÃ© la tenue iconique des servantes pour dÃ©noncer, au SÃ©nat ou devant la Chambre des reprÃ©sentants de l\'Ohio, des mesures anti-avortement. Les femmes d\'AmÃ©rique ne laisseront pas &quot;The Handmaid\'s Tale&quot; Ãªtre leur futur.', 'InÃ¨s M.', '2019-05-20', 14),
(22, 'Jackson DisparaÃ®t Dans La Brume', 'Enfin, rien ne va plus entre Maggie (Kelly McCreary) et Jackson (Jesse Williams) qui, alors qu\'ils tentent de quitter la forÃªt et de rejoindre la ville, ont une dispute au cours de laquelle ils se disent leurs quatre vÃ©ritÃ©s. Maggie rÃ©alise en effet que mÃªme si Jackson l\'aime, il n\'aime pas vraiment qui elle est et cherche constamment Ã  la faire changer. Et Jackson, quant Ã  lui, comprend que Maggie ne le respecte pas vraiment. Bref, leur couple semble plus que jamais au bord de la rupture, et ce n\'est pas le seul obstacle qu\'ils doivent affronter lors de ce final. En effet, alors qu\'ils ont rÃ©ussi Ã  regagner leur vÃ©hicule et qu\'ils sont en route vers Seattle, ils sont obligÃ©s de s\'arrÃªter Ã  cause de la brume, qui les empÃªche de voir oÃ¹ ils vont, et Jackson dÃ©cide s\'aventurer hors du vÃ©hicule, lampe de poche Ã  la main, afin de voir ce qui se passe autour. Mais malheureusement, les minutes passent et Jackson ne revient toujours pas. ForÃ§ant Maggie Ã  s\'inquiÃ©ter et Ã  sortir Ã  son tour pour l\'appeler, en vain. Qu\'est-il arrivÃ© Ã  Jackson ? Doit-on craindre pour sa vie ? C\'est sur ce cliffhanger angoissant que se termine la saison 15 de Grey\'s Anatomy.', 'InÃ¨s M.', '2019-05-20', 15),
(23, 'Une Des Morts Qui Nous A Le Plus TraumatisÃ©s...', 'Chaque sÃ©rie a Ã©tÃ© marquÃ©e par la mort d\'au moins un personnage majeur. Vous savez, ce genre de mort qui prend par surprise, et dont on ne se remet jamais vraiment... LÃ©a Bodin (@LealyBodin), de la RÃ©dac\' AlloCinÃ©, vous propose de revenir sur les disparitions les plus fortes / folles / douloureuses / inoubliables / traumatisantes du petit Ã©cran : mais attention, ces vidÃ©os vous exposent Ã  de puissants spoilers.\r\n\r\nPour ce deuxiÃ¨me Ã©pisode, Et paf, il est mort revient sur la mort complÃ¨tement inattendue de George O\'Malley Ã  la toute fin de la saison 5 de Grey\'s Anatomy. Vous vous souvenez ? C\'Ã©tait l\'un des moments les plus choquants de la sÃ©rie.', 'InÃ¨s', '2019-05-21', 15);

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE `Categorie` (
  `idCategorie` int(11) NOT NULL,
  `typeCategorie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Categorie`
--

INSERT INTO `Categorie` (`idCategorie`, `typeCategorie`) VALUES
(1, 'Drame'),
(2, 'Comedie'),
(3, 'Fantastique'),
(4, 'Horreur'),
(5, 'Thriller'),
(6, 'Action'),
(7, 'Aventure');

-- --------------------------------------------------------

--
-- Structure de la table `CategoriserSerie`
--

CREATE TABLE `CategoriserSerie` (
  `idSerie` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `CategoriserSerie`
--

INSERT INTO `CategoriserSerie` (`idSerie`, `idCategorie`) VALUES
(2, 1),
(2, 2),
(3, 1),
(3, 5),
(4, 1),
(4, 6),
(5, 1),
(5, 3),
(6, 1),
(6, 5),
(7, 1),
(7, 4),
(9, 1),
(9, 5),
(10, 1),
(10, 7),
(11, 1),
(11, 3),
(12, 3),
(12, 6),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(15, 2);

-- --------------------------------------------------------

--
-- Structure de la table `Image`
--

CREATE TABLE `Image` (
  `idImage` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `idSerie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Image`
--

INSERT INTO `Image` (`idImage`, `image`, `idSerie`) VALUES
(4, '5299820525cdd645ae5e3d7.85982614.jpg', 2),
(5, '20267535515cdd64b26cbd50.75716142.jpg', 3),
(6, '17020388645ceacfcd2ac043.33800063.jpg', 4),
(7, '20055065cdd656618fe54.40956938.jpg', 5),
(8, '5414586945cdd664979b8b6.49855091.jpeg', 6),
(9, '9964164295cdd6764ee0df3.71728897.jpg', 7),
(13, '2651616815cdfdc3089bf05.04175049.jpeg', 2),
(14, '6764191535cdd7241e41560.67660550.jpg', 3),
(15, '9277872075cdd726fe89de6.83065215.jpeg', 4),
(16, '8319703195cdd7565764080.30048246.jpg', 5),
(17, '10663151095cdd768fdde537.74808269.jpg', 7),
(18, '5378567195cdd774510d8f5.45364638.jpeg', 6),
(19, '14671744725cdfdd36c83b50.81204184.jpg', 9),
(20, '19372726285cead1aa2abb17.77178745.jpg', 9),
(21, '15338616185ce151ecc514f5.84183347.jpg', 10),
(22, '4731081905ceac900117305.91308571.jpg', 10),
(23, '21143073305ceacf5ccebcb4.06069567.jpg', 11),
(24, '14405117675ce1542fd042d7.64089671.jpeg', 11),
(25, '16294296715ce155717b3d49.47987600.jpeg', 12),
(26, '1197649855ce1560c326ec0.02965489.jpeg', 12),
(27, '8160024465ce158cf3ae503.76465727.jpeg', 13),
(28, '7248883645ce1594837d8a6.74684082.jpg', 13),
(29, '6515303635ce29af9985423.95236279.jpg', 14),
(30, '19352372115ce29b5db99b25.32710585.jpg', 14),
(31, '17076826585ceacee008b190.89714197.jpg', 15),
(32, '591377265ce2ad7835fee8.05631351.jpg', 15);

-- --------------------------------------------------------

--
-- Structure de la table `Serie`
--

CREATE TABLE `Serie` (
  `idSerie` int(11) NOT NULL,
  `nomSerie` varchar(100) DEFAULT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `nbrSaisons` int(11) DEFAULT NULL,
  `synopSerie` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Serie`
--

INSERT INTO `Serie` (`idSerie`, `nomSerie`, `dateDebut`, `dateFin`, `nbrSaisons`, `synopSerie`) VALUES
(2, 'Orange Is The New Black', '2013-07-11', NULL, 7, 'Entre les murs de la prison pour femmes de Litchfield, la vie nâ€™est pas rose tous les jours. RattrapÃ©es par le passÃ©, des dÃ©tenues venues dâ€™horizons divers cohabitent dans cette sociÃ©tÃ© en vase clos. Si coups bas et tensions sont monnaie courante, lâ€™amour, la solidaritÃ© mais surtout lâ€™humour subsistent dans le quotidien des inoubliables prisonniÃ¨res.'),
(3, '13 Reasons Why', '2017-03-31', NULL, 1, 'InspirÃ©e des best-sellers de Jay Asher, 13 Reasons Why suit Clay Jensen, un adolescent qui dÃ©couvre sous son porche au retour du lycÃ©e une mystÃ©rieuse boÃ®te portant son nom. Ã€ l\'intÃ©rieur, des cassettes enregistrÃ©es par Hannah Baker, une camarade de classe qui s\'est tragiquement suicidÃ©e deux semaines auparavant. Les enregistrements rÃ©vÃ¨lent que la jeune fille, dont il Ã©tait amoureux, a dÃ©cidÃ© de mettre fin Ã  ses jours pour treize raisons. Clay est-il l\'une de ces raisons ?'),
(4, 'Breaking Bad', '2018-01-20', '2013-09-29', 5, 'Walter White, 50 ans, est professeur de chimie dans un lycÃ©e du Nouveau-Mexique. Pour subvenir aux besoins de Skyler, sa femme enceinte, et de Walt Junior, son fils handicapÃ©, il est obligÃ© de travailler doublement. Son quotidien dÃ©jÃ  morose devient carrÃ©ment noir lorsqu\'il apprend qu\'il est atteint d\'un incurable cancer des poumons. Les mÃ©decins ne lui donnent pas plus de deux ans Ã  vivre. Pour rÃ©unir rapidement beaucoup d\'argent afin de mettre sa famille Ã  l\'abri, Walter ne voit plus qu\'une solution : mettre ses connaissances en chimie Ã  profit pour fabriquer et vendre du crystal meth, une drogue de synthÃ¨se qui rapporte beaucoup. Il propose Ã  Jesse, un de ses anciens Ã©lÃ¨ves devenu un petit dealer de seconde zone, de faire Ã©quipe avec lui. Le duo improvisÃ© met en place un labo itinÃ©rant dans un vieux camping-car. Cette association inattendue va les entraÃ®ner dans une sÃ©rie de pÃ©ripÃ©ties tant comiques que pathÃ©tiques.'),
(5, 'Stranger Things', '2013-07-15', NULL, 3, 'A Hawkins, en 1983 dans l\'Indiana. Lorsque Will Byers disparaÃ®t de son domicile, ses amis se lancent dans une recherche semÃ©e dâ€™embÃ»ches pour le retrouver. Dans leur quÃªte de rÃ©ponses, les garÃ§ons rencontrent une Ã©trange jeune fille en fuite. Les garÃ§ons se lient d\'amitiÃ© avec la demoiselle tatouÃ©e du chiffre &quot;11&quot; sur son poignet et au crÃ¢ne rasÃ© et dÃ©couvrent petit Ã  petit les dÃ©tails sur son inquiÃ©tante situation. Elle est peut-Ãªtre la clÃ© de tous les mystÃ¨res qui se cachent dans cette petite ville en apparence tranquilleâ€¦'),
(6, 'Black Mirror', '2011-12-04', NULL, 5, 'Chaque Ã©pisode de cette anthologie montre la dÃ©pendance des hommes vis-Ã -vis de tout ce qui a un Ã©cran...'),
(7, 'The Walking Dead', '2010-10-31', NULL, 10, 'AprÃ¨s une apocalypse ayant transformÃ© la quasi-totalitÃ© de la population en zombies, un groupe d\'hommes et de femmes menÃ© par l\'officier Rick Grimes tente de survivre... Ensemble, ils vont devoir tant bien que mal faire face Ã  ce nouveau monde devenu mÃ©connaissable, Ã  travers leur pÃ©riple dans le Sud profond des Ã‰tats-Unis.'),
(9, 'La Casa De Papel', '2017-05-02', NULL, 3, 'Huit voleurs font une prise d\'otages dans la Maison royale de la Monnaie d\'Espagne, tandis qu\'un gÃ©nie du crime manipule la police pour mettre son plan Ã  exÃ©cution.'),
(10, 'Vikings', '2013-03-03', NULL, 6, 'Scandinavie, Ã  la fin du 8Ã¨me siÃ¨cle. Ragnar Lodbrok, un jeune guerrier viking, est avide d\'aventures et de nouvelles conquÃªtes. LassÃ© des pillages sur les terres de l\'Est, il se met en tÃªte d\'explorer l\'Ouest par la mer. MalgrÃ© la rÃ©probation de son chef, Haraldson, il se fie aux signes et Ã  la volontÃ© des dieux, en construisant une nouvelle gÃ©nÃ©ration de vaisseaux, plus lÃ©gers et plus rapides...'),
(11, 'Sense8', '2015-06-05', '2018-06-08', 2, 'Huit individus Ã©parpillÃ©s aux quatre coins du monde sont connectÃ©s par une soudaine et violente vision. DÃ©sormais liÃ©s, ils se retrouvent capables du jour au lendemain de se voir, de se sentir, de s\'entendre et de se parler comme s\'ils Ã©taient au mÃªme endroit, et ainsi accÃ©der aux plus sombres secrets des uns et des autres. Les huit doivent dÃ¨s lors s\'adapter Ã  ce nouveau don, mais aussi comprendre le pourquoi du comment. Fuyant une organisation qui veut les capturer, les tuer ou faire d\'eux des cobayes, ils cherchent quelles consÃ©quences ce bouleversement pourrait avoir sur l\'humanitÃ©.'),
(12, 'Umbrella Academy', '2019-02-15', NULL, 2, 'En 1989, le mÃªme jour, quarante-trois bÃ©bÃ©s sont inexplicablement nÃ©s de femmes qui n\'Ã©taient pas enceintes et que rien ne relie. Sir Reginald Hargreeves, un industriel milliardaire, adopte sept de ces enfants et crÃ©e The Umbrella Academy pour les prÃ©parer Ã  sauver le monde. Mais tout ne se dÃ©roule pas comme prÃ©vu. Les enfants devenus adolescents, la famille se dÃ©sagrÃ¨ge et l\'Ã©quipe est dispersÃ©e. Les six membres toujours en vie, dÃ©sormais trentenaires, se retrouvent Ã  l\'occasion de la mort de Hargreeves. Luther, Diego, Allison, Klaus, Vanya et NumÃ©ro Cinq travaillent ensemble pour rÃ©soudre le mystÃ¨re qui entoure la mort de leur pÃ¨re. La famille dÃ©sunie se sÃ©pare cependant de nouveau, incapable de gÃ©rer des personnalitÃ©s et des pouvoirs trop diffÃ©rents, sans mÃªme parler de l\'apocalypse qui menace...'),
(13, 'Game Of Thrones', '2011-04-17', '2019-05-19', 8, 'Il y a trÃ¨s longtemps, Ã  une Ã©poque oubliÃ©e, une force a dÃ©truit l\'Ã©quilibre des saisons. Dans un pays oÃ¹ l\'Ã©tÃ© peut durer plusieurs annÃ©es et l\'hiver toute une vie, des forces sinistres et surnaturelles se pressent aux portes du Royaume des Sept Couronnes. La confrÃ©rie de la Garde de Nuit, protÃ©geant le Royaume de toute crÃ©ature pouvant provenir d\'au-delÃ  du Mur protecteur, n\'a plus les ressources nÃ©cessaires pour assurer la sÃ©curitÃ© de tous. AprÃ¨s un Ã©tÃ© de dix annÃ©es, un hiver rigoureux s\'abat sur le Royaume avec la promesse d\'un avenir des plus sombres. Pendant ce temps, complots et rivalitÃ©s se jouent sur le continent pour s\'emparer du TrÃ´ne de Fer, le symbole du pouvoir absolu.'),
(14, 'The Handmaid\'s Tale', '2017-04-27', NULL, 2, 'Dans une sociÃ©tÃ© dystopique et totalitaire au trÃ¨s bas taux de natalitÃ©, les femmes sont divisÃ©es en trois catÃ©gories : les Epouses, qui dominent la maison, les Marthas, qui l\'entretiennent, et les Servantes, dont le rÃ´le est la reproduction.'),
(15, 'Grey\'s Anatomy', '2005-03-27', NULL, 15, 'Meredith Grey, fille d\'un chirurgien trÃ¨s rÃ©putÃ©, commence son internat de premiÃ¨re annÃ©e en mÃ©decine chirurgicale dans un hÃ´pital de Seattle. La jeune femme s\'efforce de maintenir de bonnes relations avec ses camarades internes, mais dans ce mÃ©tier difficile la compÃ©tition fait rage...');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`idArticle`),
  ADD KEY `FK_Article_idSerie` (`idSerie`);

--
-- Index pour la table `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `CategoriserSerie`
--
ALTER TABLE `CategoriserSerie`
  ADD PRIMARY KEY (`idSerie`,`idCategorie`),
  ADD KEY `FK_CategoriserSerie_idCategorie` (`idCategorie`);

--
-- Index pour la table `Image`
--
ALTER TABLE `Image`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `FK_Image_idSerie` (`idSerie`);

--
-- Index pour la table `Serie`
--
ALTER TABLE `Serie`
  ADD PRIMARY KEY (`idSerie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Article`
--
ALTER TABLE `Article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `CategoriserSerie`
--
ALTER TABLE `CategoriserSerie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `Image`
--
ALTER TABLE `Image`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `Serie`
--
ALTER TABLE `Serie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Article`
--
ALTER TABLE `Article`
  ADD CONSTRAINT `FK_Article_idSerie` FOREIGN KEY (`idSerie`) REFERENCES `Serie` (`idSerie`);

--
-- Contraintes pour la table `CategoriserSerie`
--
ALTER TABLE `CategoriserSerie`
  ADD CONSTRAINT `FK_CategoriserSerie_idCategorie` FOREIGN KEY (`idCategorie`) REFERENCES `Categorie` (`idCategorie`),
  ADD CONSTRAINT `FK_CategoriserSerie_idSerie` FOREIGN KEY (`idSerie`) REFERENCES `Serie` (`idSerie`);

--
-- Contraintes pour la table `Image`
--
ALTER TABLE `Image`
  ADD CONSTRAINT `FK_Image_idSerie` FOREIGN KEY (`idSerie`) REFERENCES `Serie` (`idSerie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
