-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 29 avr. 2019 à 08:02
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `NetfluxProjet2`
--

-- --------------------------------------------------------

--
-- Structure de la table `Article`
--

CREATE TABLE `Article` (
  `idArticle` int(11) NOT NULL,
  `nomArticle` varchar(255) NOT NULL,
  `articleSerie` text,
  `auteurArticle` varchar(50) NOT NULL,
  `dateArticle` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Article`
--

INSERT INTO `Article` (`idArticle`, `nomArticle`, `articleSerie`, `auteurArticle`, `dateArticle`) VALUES
(1, 'La fin de «Game of Thrones» marque aussi la fin d\'une époque!', 'Le 19 mai 2019, la chaîne HBO diffusera le tout dernier épisode de Game of Thrones, mettant fin à une saga qui dure depuis huit saisons à la télé. Lorsque la série a débarqué sur nos écrans, en avril 2011, l’expression «Peak TV» (qui fait référence au nombre démentiel de séries produites actuellement) n’existait pas encore, et il aura même fallu attendre plusieurs années avant qu’elle ne soit prononcée.\r\n\r\nDepuis, l’écosystème des séries, de la télévision, des réseaux sociaux et même des spoilers, a énormément changé. Et ces changements se sont aussi reflétés dans Game of Thrones: on le voit dans sa réalisation de plus en plus cinématographique, son budget devenu exorbitant, ou son attention désormais plus poussée aux questions de représentation. Avec un pied dans le passé et l’autre dans le futur, la série de D.B Weiss et David Benioff représente la transition entre deux ères télévisuelles radicalement différentes.\r\n\r\n«Watercooler moment»\r\nEn tuant Ned Stark, son héros apparent, à la fin de sa première saison, Game of Thrones a pris un risque qu’aucun autre programme télé ne se serait permis, transformant la série en un véritable phénomène culturel. Deux ans plus tard, lorsque les Noces Pourpres ont décimé une grande partie des personnages principaux, nous avons été des millions à crier de surprise et pleurer le sort de nos héros scotchés à notre écran, dans une forme de communion internationale.\r\n\r\n\r\nLe choc était tel que des vidéos virales ont commencé à circuler sur internet, montrant la réaction abasourdie des téléspectateurs. Il s’agissait là d’un véritable «watercooler moment», une expression employée pour décrire les moments de télé tellement forts que tout le monde en parle à la machine à café le lendemain.\r\n\r\n«Tout le monde est prêt à bouleverser ses habitudes pour voir l’épisode quand il sort et pouvoir faire partie de la conversation.»\r\n\r\nAndrew Goldman, professeur à l’Université de New York (NYU) et ancien cadre à HBO\r\n\r\n«Pour la fin de Seinfeld dans les années 1990, et celles de Friends et des Sopranos, tout le monde devait être devant son écran», explique ainsi Andrew Goldman, professeur à l’Université de New York (NYU) et ancien cadre à HBO. «On retrouve ça aujourd’hui avec Game of Thrones: tout le monde est prêt à bouleverser ses habitudes pour voir l’épisode quand il sort et pouvoir faire partie de la conversation.»\r\n\r\nDes moments comme ceux-là, il semble y en avoir de moins en moins. Pas par manque de scènes mémorables ou renversantes dans les séries actuelles, mais parce que plus personne ne regarde les mêmes choses au même moment. Nous sommes désormais dans cette ère de la Peak TV, où les séries produites, de plus en plus nombreuses, deviennent aussi de plus en plus de niches et l’audience est de plus en plus fracturée. Alors qu’il était avant possible d’arriver en soirée et de parler du rebondissement de notre programme favori, il est désormais difficile de trouver quelqu’un qui a vu le même épisode de la même série au même moment que nous: certains commencent à peine aujourd’hui à découvrir Breaking Bad, quand d’autres ont déjà fini tout Vernon Subutex.\r\n\r\nMais selon Hélène Breda, maîtresse de conférences à l\'Université Paris-XIII, ces watercooler moments n’ont pas totalement disparu, ils se sont juste déplacés sur internet: «On a un effet Netflix, où quand Netflix sort une nouvelle production, tout le monde en parle sur les réseaux sociaux. Il y a un mois sur Twitter on ne parlait que de Marie Kondo, donc on suit le calendrier Netflix. On n’est plus au rythme des diffusions télévisuelles mais des mises en ligne sur les plateformes, et vu qu’on peut tout regarder d’un coup, il y a peut-être un effet d’inflation des réactions.» Car nous sommes désormais dans l’ère du streaming légal, avec la multiplication des plateformes, Amazon, Netflix, Hulu, Apple, OCS, MyCanal...', 'Inès MAURER', '2019-04-29'),
(2, 'La Casa de Papel” : mais qu’est-ce que c’est que ce buzz ?', 'Ce thriller espagnol aux effluves révolutionnaires, diffusé par Netflix en France, est devenu la série dont tout le monde parle. Décryptage d’un succès sans accroc, alors que les derniers épisodes arrivent.\r\n\r\nLa Casa de Papel, thriller de la chaîne espagnole Antena 3 disponible sur Netflix, s’est imposé comme le succès surprise de ce début d’année 2018. Comment expliquer qu’une série venue d’un pays à la production peu suivie chez nous s’impose comme le phénomène sériel populaire du moment? Cette histoire de braquage à rebondissements semble la recette idéale pour attirer les curieux et créer « le buzz », entre suspense, bons sentiments et esprit contestataire. Un divertissement malin, intrigant mais inégal, dont les ultimes épisodes arrivent sur la plateforme de SVOD ce vendredi 6 avril.\r\n\r\nUn concept accrocheur :\r\nLa Casa de papel suit un groupe de huit braqueurs, qui pénètrent dans la Fabrique nationale de la monnaie et du timbre, à Madrid, pour imprimer leurs propres billets. Enfermés avec soixante-sept otages, ils comptent faire tourner les rotatives dix à douze jours, pour amasser un butin de 2,4 milliards d’euros. Leur leader charismatique, surnommé le Professeur, dirige les opérations de l’extérieur, depuis un hangar désaffecté. Une flic, Raquel Murillo, est chargée de mener les négociations. Cousine d’Ocean’s Eleven aux airs de Prison Break à l’envers, La Casa de papel repose sur ce point de départ simple et efficace. Le Professeur, génial marionnettiste, semble avoir tout prévu, même les situations les plus improbables.\r\n\r\nEt c’est justement ce qui arrive : plus on avance, moins La Casa de papel est crédible. Pour le meilleur dans les premiers épisodes, où l’on prend plaisir à se faire balader. Et pour le pire quand on commence à se dire qu’Alex Pina, son créateur, pousse un peu trop loin le bouchon – notamment quand le sort du Professeur repose entre les mains de la mère de Murillo… qui perd la mémoire. Pour tenir la distance (23 épisodes d’une quarantaine de minutes), la série s’étire, multiplie les digressions et les imprévus.\r\n\r\nDes personnages charismatiques :\r\nPour garder secrète leur identité, les braqueurs ont adopté des noms de villes : Tokyo, Berlin, Moscou, Denver, Nairobi, Helsinki et Oslo. Ces héros aux compétences, personnalités et physiques complémentaires – un mélange efficace et potentiellement explosif — semblent tout droit sortis d’une BD ou d’un jeu vidéo. La Casa de papel les présente d’abord comme des pions, avant de revenir, dans des flashbacks inégaux, sur leur passé et les raisons de leur présence dans la Fabrique nationale de la monnaie et du timbre. La série doit beaucoup à ces personnages de truands a priori pacifiques, qui facilitent la digestion des couleuvres que le scénario nous impose.\r\n\r\nLe Professeur, faux timide planqué derrière ses lunettes, a les épaules assez larges pour porter cette histoire rocambolesque. Il se lance dans un jeu du chat et de la souris avec Raquel Murillo, flic fragile, malmenée par l’enquête mais déterminée. Une danse un temps efficace… avant de devenir fatigante. Côté braqueurs, si la relation entre le bienveillant Moscou et son idiot de fils Denver surprend et touche, on se lasse de la voix off de la rebelle Tokyo, dispensable, et surtout des humeurs de Berlin, sadique mégalomane. On regrette aussi d’en apprendre si peu sur Oslo et Helsinki, mercenaires pourtant attachants.\r\n\r\nUne symbolique contestataire :\r\nLe Professeur et sa bande de braqueurs se présentent moins comme des voleurs que des rebelles, qui font chauffer la planche à billets mais ne s’en prennent pas aux économies du peuple. Ils sont, certes, chacun à leur manière, des laissés-pour-compte, des marginaux, des criminels, mais bien moins « coupables » que les banquiers et dirigeants des banques centrales. Ils s’habillent avec une combinaison rouge qui rappelle celle des prisonniers de Guantanamo et portent un masque inspiré de l’effigie de Dalí… qui fait furieusement penser à celui des Anonymous. La Puerta del Sol et les Indignés sont directement cités par le Professeur, qui explique être lui-même petit-fils de partisans italiens et finit par entonner leur chant, Bella ciao – séquence accompagnée d’images d’archives sur les crises financières du passé. La somme astronomique visée par les braqueurs (2,4 milliards d’euros) est volontairement exagérée, pour dénoncer la folie de la spéculation financière.\r\n\r\nDéjà utilisée par l’américaine Mr Robot, cette symbolique ne fait pas pour autant de La Casa de papel un brûlot politique. Elle lui offre une réjouissante aura contestataire, mais revient vite à des considérations plus terre à terre – ses héros rêvent plus de s’offrir une vie luxueuse, de profiter au maximum de leurs millions, que de modifier en profondeur la société espagnole. Par ailleurs, l’impact d’un tel casse sur les finances du pays – donc, par ricochet, sur la population n’est jamais discuté.\r\n\r\nUne série exotique :\r\nOn s’est habitué aux séries en anglais, et même à celles en danois et en hébreu. Alors un bon divertissement en espagnol, où les « puta » « joder » et « coño » épicent les dialogues, c’est un peu d’air frais. La Casa de papel exploite habilement certains décors madrilène et choisit même parmi ses symboles une Seat Ibiza de 1992 – l’équivalent ibérique de la Renault 11. Elle change aussi nos habitudes en mêlant un savoir-faire qui rappelle l’efficacité américaine (notamment dans sa mise en scène soignée, souvent musclée, et sa photo impeccable) aux codes appréciés du public espagnol. A commencer par une bonne dose de soap.\r\n\r\nC’est une des principales faiblesses de la série, qui attribue à chacun de ses personnages une histoire de cœur. Ce sentimentalisme devient un élément-clé du suspense, puisque c’est lui qui fait dérailler le plan du Professeur. Mais ce côté soap, souvent naïf, ralentit artificiellement l’intrigue et peine à nous émouvoir.\r\n\r\nUn « buzz » d’enfer :\r\nDifficile de savoir si La Casa de papel aurait été un tel phénomène sans Netflix. Mais son succès est certainement significatif de l’impact de la plateforme, capable de transformer en carton une œuvre efficace mais pas franchement… révolutionnaire. Le bouche à oreille a été impressionnant, peut-être encouragé par un savant usage des algorithmes de la plateforme et par une mise en avant de la série une fois le buzz lancé. En se concentrant (avec un peu de mauvaise foi) sur le verre à moitié vide, on peut regretter que des œuvres plus fortes  par exemple Rick & Morty  n’aient pas pu profiter d’un tel appel d’air. En contemplant le verre à moitié plein, on peut se réjouir de constater qu’une série européenne, venue d’un pays longtemps has been pour les sériephiles, se soit ainsi imposée.', 'Inès MAURER', '2019-04-29'),
(3, 'Faut-il laisser tomber “The Walking Dead” ou lui donner sa chance ?', '“The Walking Dead” revient ce dimanche 22 octobre pour une huitième saison, à suivre sur OCS Choc. Capable du meilleur comme du pire, la série de zombies divise, entre ceux qui s’accrochent et ceux qui ne la regarderont plus.\r\n\r\nMais où va The Walking Dead ? Même les fans de la première heure se posent la question, tant les défauts de la série de zombies, hier anecdotiques, ont explosé au grand jour la saison passée. En baisse dans les audiences, The Walking Dead reste un des plus gros succès sériels du moment, et semble devoir durer. Alors, faut-il faire confiance aux scénaristes et espérer qu’ils trouveront de quoi rendre les aventures de Rick Grimes et consorts à nouveau passionnantes… ou abandonner une série moribonde ?\r\n\r\nNous avons posé la question sur Twitter. Le résultat du sondage, auquel ont participé plus de cinq cents internautes, témoigne d’une division quasi paritaire entre ceux qui veulent continuer, et ceux qui vont tourner la page. A Télérama aussi, les avis sont partagés. Voici ceux, opposés et complémentaires, de deux journalistes qui ont suivi The Walking Dead depuis le premier jour, mais dont les routes vont se séparer avec cette saison 8.\r\n\r\nIl faut continuer!\r\nPar Sébastien Mauge\r\n\r\nIl est toujours difficile de quitter une série au long cours, jadis adorée. Notre niveau d’implication, à la fois dans le récit et l’évolution du destin des personnages, nous installe dans une routine confortable et empêche souvent de relever des défauts émergeants qui, dans le cas d’une œuvre balbutiante, auraient été immédiatement rédhibitoires. Parfois, néanmoins, la prise de conscience est brutale et la rupture inévitable. Ce fut le cas pour Urgences, avec la mort programmée de Mark Green (qui, contrairement à Doug Ross Clooney, n’a pas eu droit à une retraite paisible dans sa cabane au bord d’un lac) ou X-Files, lors du début du mi-temps de David Duchovny, remplacé par l’intermittent T-1000 Robert Patrick.\r\n\r\nLe premier épisode de la saison 7 de The Walking Dead, boucherie insoutenable déjà largement commentée dans nos colonnes, aurait pu être un de ces éléments déclencheurs. Il l’a été pour de nombreux téléspectateurs. Pourtant, les coups de batte de Negan, négation terroriste de l’identité humaine au profit du pouvoir, lancés au hasard un soir d’octobre 2016, dans une atmosphère nocturne oppressante et apocalyptique, se faisaient a posteriori l’écho intriguant et inconscient (?) d’une Amérique masochiste capable d’élire un président délirant pour lequel elle n’a majoritairement pas voté.\r\n\r\nInégale, la suite de la saison n’en a pas moins développé cette question désormais cruciale, aux Etats-Unis et ailleurs, du choix des leaders. Jamais autant de possibilités de « gouvernements » n’avaient été offertes à notre groupe de survivants. La tentation extrémiste Negan, l’utopie bisounours (ou plutôt Tigrou !) d’Ezekiel, la « collaboration » de Gregory, l’opportunisme froid de Jadis… Et Rick dans tout ça ? Pour la première fois, comme un témoin passif shooté au chloroforme, le chef de la bande n’avait plus prise sur l’histoire et assistait impuissant à la catastrophe annoncée. Et nous, que faisons-nous quand l’Histoire déraille ? Comment devenir acteur du changement nécessaire ? Comment se soulever, se relever (« Rise up » annonçait la promo de la seconde moitié de saison) ? Ces questions se posent de plus en plus dans notre monde « réel ».\r\n\r\nVoilà pourquoi on continue à regarder The Walking Dead. Pour assister à un espoir. Au réveil de Rick et d’une communauté rebelle, amorcé en fin de saison dernière. Son regard, désormais incisif et non plus perdu, a changé. L’unité, l’ingéniosité et le courage prévalent maintenant face à la violence pure, annihilante et gratuite. Oubliés les questionnements métaphysiques passionnants des premières saisons ? C’est vrai, et on peut légitimement le regretter. Place à un pragmatisme salvateur qui peut être, néanmoins, tout aussi intéressant.\r\n\r\nL’heure de la revanche a sonné et on aurait tort de ne pas y assister. Après tout, nous n’aurions manqué pour rien au monde les chutes des affreux Joffrey et Ramsey Bolton dans Game of thrones. Même si le chemin est douloureux, l’issue fait du bien ! Il y a peut-être aussi une part de masochisme dans cet entêtement ! Sera-t-il payant ? On le souhaite, sans en mettre toutefois sa tête à couper…\r\n\r\nIl faut laisser tomber!\r\nPar Pierre Langlais\r\n\r\nJ\'ai aimé The Walking Dead. Depuis son lancement en 2010, j\'ai suivi attentivement chacune de ses saisons. Je l\'ai encouragée après ses débuts prometteurs, applaudie quand elle s\'est libérée, soutenue quand, pensais-je, elle traversait une mauvaise passe. J\'ai constaté ses hauts captivants et ses bas soporifiques, d\'abord bienveillant puis de plus en plus crispé. J\'ai vu se multiplier ses cliffhangers poussifs, ses longueurs, ses dialogues répétitifs, son scénario cyclique – un refuge, un espoir, une menace, un combat, un refuge, un espoir…\r\n\r\nThe Walking Dead avait cette capacité à, malgré tout, me faire revenir d\'une saison à l\'autre. Parce que je m\'étais attaché à certains de ses personnages et que ses meilleurs moments compensaient ses pires faiblesses. Je sentais qu\'on m\'arnaquait, mais l\'entourloupe était belle. J\'avançais en essayant de ne pas me poser trop de questions. Et, de plus en plus souvent, je me disais que, cette fois, ce serait la dernière.\r\n\r\nThe Walking Dead était jusqu\'ici une de ces rares séries qu\'il « faut » voir. Elle profitait d\'une pression sociale qui, sans être aussi forte que celle qui porte Game of Thrones, poussait certains sceptiques à ne pas lâcher prise. Sa consternante septième saison a rompu le charme. J\'ai assisté, déconfit, agacé et finalement hilare, à une dégringolade sidérante : scénario égaré, personnages vides, dialogues guignolesques, tension inexistante, mise en scène d\'une rare laideur – une biche numérique immédiatement entrée dans l\'histoire des séries.\r\n\r\nSon premier épisode, polémique, avait au moins le mérite de nous révolter, de questionner la façon dont les scénaristes instrumentalisent nos émotions, de provoquer un débat sur le sens et les limites de la violence. Mais le reste de la saison témoignait d\'une œuvre qui n\'a plus rien à dire, se perd dans des apartés inutiles, invente de nouveaux personnages pour les laisser sur le bas-côté – Ezekiel, roi comédien pas inintéressant. Tourne en rond, bavarde, se cherche, en vain.\r\n\r\nOn peut tromper une fois mille personnes, mais on ne peut pas tromper mille fois une personne, comme essayait de dire l\'autre. The Walking Dead m\'a trop déçu. Sept ans durant, je lui ai été fidèle, entretenant l\'espoir de voir un jour son histoire se terminer. Mais rien ne dit, aujourd\'hui, qu\'elle ne s\'étalera pas sur dix ou douze saisons. Les audiences, en baisse outre-Atlantique, restent excellentes. La communication autour de la série, rodée, nous annonce que chaque saison sera plus renversante que la précédente. Je ne l\'écoute plus. Je n\'ai que faire de son argument « coup de poing » : il va y avoir des morts. Une série, ce n\'est pas un chamboule-tout.\r\n\r\nThe Walking Dead ne sait plus où elle va, donc elle racole. Elle ne pense qu\'à nous choquer, à faire le buzz, à remplir des saisons sans parvenir à se renouveler, à retendre son récit, à trouver des choses neuves à nous dire sur ses personnages. Je l\'écris sans joie : je ne suivrai pas cette saison 8. Ni les suivantes. Je laisse ceux qui n\'ont rien de mieux à voir me tenir au courant, dans trois, cinq ou dix ans, de comment cette série qui hier me plaisait tant a terminé sa course…', 'Inès MAURER', '2019-04-29');

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
(2, 'Comédie'),
(3, 'Thriller'),
(4, 'Action'),
(5, 'Aventure'),
(6, 'Fantastique'),
(7, 'Horreur'),
(8, 'Romance');

-- --------------------------------------------------------

--
-- Structure de la table `categoriserSerie`
--

CREATE TABLE `categoriserSerie` (
  `idSerie` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categoriserSerie`
--

INSERT INTO `categoriserSerie` (`idSerie`, `idCategorie`) VALUES
(4, 1),
(5, 1),
(6, 1),
(5, 3),
(4, 6),
(6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `Image`
--

CREATE TABLE `Image` (
  `idImage` int(11) NOT NULL,
  `urlImage` varchar(255) DEFAULT NULL,
  `idSerie` int(11) DEFAULT NULL
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

--
-- Déchargement des données de la table `Serie`
--

INSERT INTO `Serie` (`idSerie`, `nomSerie`, `dateDébut`, `dateFin`, `nbrSaisons`, `idArticle`, `idSynopsis`) VALUES
(4, 'Game Of Thrones', '2011-04-17', NULL, 8, 1, 1),
(5, 'La Casa De Papel', '2017-05-02', NULL, 3, 2, 2),
(6, 'The Walking Dead', '2010-11-30', NULL, 9, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `Synopsis`
--

CREATE TABLE `Synopsis` (
  `idSynopsis` int(11) NOT NULL,
  `synopSerie` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Synopsis`
--

INSERT INTO `Synopsis` (`idSynopsis`, `synopSerie`) VALUES
(1, 'L\'histoire de la série, située sur les continents fictifs de Westeros et Essos à la fin d\'un été d\'une dizaine d\'années, entrelace trois grandes intrigues. La première intrigue raconte l\'histoire de Jon Snow et de la future menace croissante de l\'hiver approchant, des créatures mythiques et légendaires venues du Nord du Mur de Westeros qui sépare le Royaume des Sept Couronnes de la menace situées au-delà. La deuxième intrigue relate la démarche de Daenerys Targaryen au sud d\'Essos, la dernière représentante en exil de la dynastie déchue en vue de reprendre le Trône de Fer, symbole du pouvoir absolu. La troisième intrigue conte l\'histoire des membres de plusieurs familles nobles, dans une guerre civile pour conquérir le Trône de Fer du royaume des Sept Couronnes. À travers ces personnages « moralement ambigus », la série explore les sujets liés au pouvoir politique, à la hiérarchie sociale, la religion, la guerre civile, la sexualité et à la violence en général.'),
(2, 'Un homme mystérieux, surnommé le Professeur1 (El Profesor), planifie le meilleur braquage jamais réalisé. Pour exécuter son plan, il recrute huit des meilleurs malfaiteurs du pays qui n\'ont rien à perdre.\r\n\r\nLe but est d\'infiltrer la Fabrique nationale de la monnaie et du timbre afin d\'imprimer 2,4 milliards d\'euros, en petites coupures de 50 € et cela en moins de onze jours, sans verser une goutte de sang malgré la présence de 67 otages, dont la fille de l\'ambassadeur du Royaume-Uni.'),
(3, 'L\'histoire suit le personnage de Rick Grimes (interprété par Andrew Lincoln), adjoint du shérif du comté de Kings (en Géorgie) qui se réveille d\'un coma de plusieurs semaines pour découvrir que la population a été ravagée par une épidémie post-apocalyptique inconnue qui transforme les êtres humains en morts-vivants, appelés « rôdeurs ». Après avoir retrouvé sa famille, il devient très vite le leader d\'un groupe de rescapés d\'Atlanta. Ils seront amenés à devoir survivre dans un monde post-apocalyptique face à des rôdeurs et d\'autres groupes de survivants, pour certains plus dangereux encore que les rôdeurs eux-mêmes. Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde devenu méconnaissable, à travers leur périple dans le Sud profond des États-Unis.\r\n\r\n');

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
-- Index pour la table `Image`
--
ALTER TABLE `Image`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `FK_Image_idSerie` (`idSerie`);

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
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `categoriserSerie`
--
ALTER TABLE `categoriserSerie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Image`
--
ALTER TABLE `Image`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Serie`
--
ALTER TABLE `Serie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Synopsis`
--
ALTER TABLE `Synopsis`
  MODIFY `idSynopsis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Contraintes pour la table `Image`
--
ALTER TABLE `Image`
  ADD CONSTRAINT `FK_Image_idSerie` FOREIGN KEY (`idSerie`) REFERENCES `Serie` (`idSerie`);

--
-- Contraintes pour la table `Serie`
--
ALTER TABLE `Serie`
  ADD CONSTRAINT `FK_Serie_idArticle` FOREIGN KEY (`idArticle`) REFERENCES `Article` (`idArticle`),
  ADD CONSTRAINT `FK_Serie_idSynopsis` FOREIGN KEY (`idSynopsis`) REFERENCES `Synopsis` (`idSynopsis`);
