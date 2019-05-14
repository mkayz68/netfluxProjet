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
(19, 'Hasbro Lance Un Donjons Et Dragons Version Stranger Things', 'C\'est une nouvelle qui devrait réjouir les fans de la première heure de Stranger Things. Hasbro va lancer une nouvelle version de Donjons et Dragons à l’effigie des personnages d’une des séries phares de Netflix. Le jeu est déjà disponible en précommande chez Amazon.\r\n\r\nSi vous avez regardé Stranger Things, le jeu Donjons et Dragons ne peut pas vous être inconnu. Vous rêviez d’en faire une partie sauce Stranger Things ? Cela va bientôt être possible. En effet, Hasbro a dévoilé à la foire du jouet de New York qu’une version à l’effigie de la série allait prochainement voir le jour.\r\n\r\nUn jeu qui fait écho à une scène mythique\r\nDans la première scène de la série, quatre jeunes garçons sont assis autour d’une table en train de jouer à Donjons et Dragons. Ces premières minutes sont essentielles puisqu’elles annoncent toute la tonalité de l’arc narratif de la première saison. Le nouveau jeu Hasbro fera évidemment écho à cette scène légendaire.\r\n\r\nLe jeu devrait se jouer de la même manière que la version d’origine. L’ancêtre des jeux de rôles se met à la page et revêt les allures de la célèbre série Netflix. La boîte comportera un dé à 10 faces, les fiches détaillées pour chaque joueur et la règle du jeu. Petit bonus : deux figurines de Demogorgon seront livrées avec ! Choisissez votre personnage et restez sur vos gardes : « Préparez-vous à n’importe quoi » peut-on lire sur la notice. Le jeu devrait sortir le 22 avril prochain selon Hasbro et est déjà disponible en précommande sur Amazon.\r\n\r\nDe quoi patienter jusqu’à juillet\r\nHasbro aurait également annoncé qu’une version années 80 de Trivial Pursuit était en préparation. Il comportera diverses questions comme sur les personnalités célèbres, la culture pop, les événements, les tendances et oui, vous ne rêvez pas, Stranger Things. À la même date, une mini console d’arcade devrait également voir le jour avec 16 titres sur le thème de Stranger Things.\r\n\r\nAlors même si le 4 juillet n’arrivera jamais assez vite, Hasbro va vous donner de quoi vous divertir et détournez votre attention de l’attente interminable.\r\n', 'Inès M.', '2019-05-09', 42),
(20, 'En Attendant La Saison 3, Un Roman Sur Jim Hopper Va Paraître', 'Le succès de la saga Stranger Things a fait des petits. Et ceux qui n’arrivent pas à attendre la suite vont pouvoir patienter grâce aux romans.\r\n\r\nEn à peine trois ans, la série Stranger Things a réussi à regrouper un impressionnant nombre de fans, et à créer une attente très forte. En attendant la troisième saison, prévue pour le 4 juillet 2019, ces derniers peuvent découvrir les romans inspirés de la saga. Des ouvrages qui permettent de sortir des sentiers battus pour se focaliser sur des personnages en particulier.\r\n\r\nNetflix vient d’annoncer la sortie récente de « Suspicious Mind », qui se penchait sur l’histoire de Terry Ives, la mère d’Eleven. Le livre sera disponible en français le 7 mars prochain. Ce « prequel » sera suivi par la sortie de « Darkness on the Edge of Town », qui sera lui disponible dès le 4 juin, soit un mois avant la sortie de la nouvelle saison.\r\n\r\nCe roman devrait attiser la curiosité des fans puisqu’il évoque l’histoire de Jim Hopper lorsqu’il était encore détective dans la brigade criminelle de New York, en 1977. Ici encore, il s’agira de se familiariser avec des faits survenus avant l’histoire officielle. Idéal avant de replonger dans le grand bain.\r\n\r\n\r\n', 'Inès M.', '2019-05-09', 42),
(22, 'Malgré Son Annulation, La Série Pourrait Avoir Une Suite', 'La saison 7 d\'Orange is the new black pourrait ne pas marquer la fin définitive de la série. Ses producteurs réfléchiraient déjà depuis quelque temps à une suite.\r\n\r\nLes portes du pénitencier de Litchfield pourraient finalement ne pas se refermer. Le couperet était tombé en octobre dernier pour Orange is the new black, la série carcérale de Netflix. La saison 7 devait être la dernière pour le show, qui avait démarré durant l\'été 2013 sur la chaîne de streaming. Mais comme le révèle The Hollywood Reporter, son producteur Lionsgate Television réfléchit à un moyen de la prolonger au-delà de cette échéance.\r\n\r\nExtrêmement fiers de la longévité de Orange is the new black, son producteur rappelle qu\'il s\'agit toujours de l\'une des séries les plus regardées sur Netflix. S\'il ambitionne de terminer en beauté, il révèle surtout qu\'il est déjà en discussion depuis un moment avec Jenji Kohan, la créatrice de la série, sur une suite éventuelle à lui donner. Si rien n\'est dans les tuyaux pour le moment, plusieurs projets ont déjà été envisagés.\r\n\r\nEt les pistes sont nombreuses et variées. Il pourrait s\'agir d\'une spectacle à Broadway, ou d\'un spin-off centré autour des personnages de Larry Bloom (Jason Biggs) et Polly Harper (Maria Dizzia) ou de Cal Chapman (Michael Chernus), le frère de Piper, et Carol Chapman (Deborah Rush), sa mère. Mais quoiqu\'il arrive, aucun de ses projets ne devrait être annoncé avant la fin de la série. En attendant, l\'ultime saison de Orange is the new black devrait arriver sur Netflix en 2019.', 'Inès M.', '2019-05-09', 48),
(23, 'Le Nombre De Suicides Des Mineurs A-t-il Augmenté Avec La Série ?', 'ÉCLAIRAGE - Un pic de suicides a été enregistré chez les Américains âgés de 10 à 17 ans après la diffusion de la série sur Netflix en mars 2017. Le géant du streaming a indiqué être &quot;en train d\'analyser l\'étude&quot; publiée dans une revue spécialisée.\r\n\r\na série 13 Reasons Why retrace l\'histoire d\'une adolescente mettant fin à ses jours. Diffusée sur Netflix en 2017, nombreux sont ceux qui s\'inquiétaient alors de l\'impact sur les jeunes spectateurs. Une étude, publiée dans une revue spécialisée américaine, vient justement alimenter la polémique en montrant une hausse &quot;significative&quot; des suicides chez les mineurs aux États-Unis dans les mois qui ont suivi la diffusion de la série. \r\n\r\nLes auteurs de l\'étude estiment ainsi à &quot;195 le nombre de morts supplémentaires par suicide chez les jeunes âgés de 10 à 17 ans entre le 1er avril et le 31 décembre 2017, dans la foulée de la diffusion de la série&quot;, soit une hausse de près de 29%. Contrairement à leur hypothèse de départ, cette surmortalité aurait essentiellement touché les garçons.\r\n\r\nPour parvenir à ces chiffres, Jeffrey Bridge et son équipe du Nationwide Children\'s Hospital de l\'Ohio ont analysé les statistiques officielles des suicides entre le 1er janvier 2013 et le 31 décembre 2017, soit 180.655 morts au total. Selon leurs calculs, ce pic de suicides a été enregistré chez les Américains âgé de 10 à 17 ans dès la diffusion de la série par Netflix en mars 2017. Y\'a t-il alors un lien de cause à effet ? Rien n\'est moins sûr. ', 'Inès M.', '2019-05-09', 44),
(26, 'Le “Professor” De “La Casa De Papel” Est Un Copié-collé Du Héros D’un Film Italien !', 'Le personnage joué par Alvaro Morte, dans la série d’Alex Pina, est inspiré de celui qu’incarnait en 1963 Marcello Mastroianni dans “Les Camarades”. Ce film de Mario Monicelli, qui revient sur grand écran, n’est qu’un exemple des nombreuses influences italiennes qui traversent cette série espagnole. \r\n\r\nLes Camarades de Mario Monicelli (1963) ressort en salles dans une belle version restaurée. A Turin, à la fin du XIXe siècle, les ouvriers d’une manufacture de tissus essayent de revendiquer quelques maigres droits : travailler 13 heures au lieu de 14 et toucher une indemnité en cas d’accident. Encouragés par un homme débarqué d’un train un soir, qui se fait appeler « le Professeur » (Marcello Mastroianni), ils entament une grève.\r\n\r\nMais pourquoi cet homme nous est-il familier, même si on n’a jamais vu Les Camarades ? Ses petites lunettes rondes, sa courte barbe, son costume bon marché, sa façon de se tenir un peu voûté et de regarder par en-dessous… Mais oui, bien sûr, c’est « El Professor » de La Casa de papel ! Même silhouette, mêmes accesoires, même surnom : Mastroianni ressemble comme deux gouttes d’eau à Alvaro Morte, le comédien de la série espagnole d’Alex Pina – sorte de Ocean’s Eleven en sitcom – qui a cartonné sur Netflix la saison dernière. Ou plutôt l’inverse : le personnage de La Casa… est un copié-collé du syndicaliste italien venu défendre la cause des travailleurs turinois.\r\n\r\n', 'Inès M.', '2019-05-12', 52),
(27, '“La Suite De ‘La Casa De Papel’ Va Creuser Cette Version Moderne De David Contre Goliath”', 'Après deux saisons et un gros buzz sur Netflix, on pensait que la boucle de ce surprenant thriller espagnol était bouclée. Mais la plateforme SVOD a commandé un troisième round des aventures du Professeur. Créateur de la série, Álex Pina revient sur les raisons de son succès et révèle les grandes lignes d’une suite très attendue.\r\n\r\nAttention spoiler ! Si vous n’avez pas vu les deux premières parties de La Casa de papel, ne lisez pas cette interview.\r\nLa Casa de papel, thriller espagnol diffusé par Netflix à l’international, est devenu l’une des séries les plus populaires de ce début d’année. Cette histoire de braquage rocambolesque, pleine de rebondissements et de romances, et riche d’un sous-texte sociétal dans l’air du temps, a profité d’un buzz impressionnant. Au point que la plateforme de SVOD a commandé une suite à son intrigue… pourtant bouclée ! Son créateur, Álex Pina, invité du Festival Séries Mania, à Lille, revient sur ce succès surprise, et sur le risque de vouloir en profiter encore un peu…', 'Inès M.', '2019-05-12', 52),
(28, 'La Série Culte « Breaking Bad » Va être Adaptée Au Cinéma', 'La série culte Breaking Bad va être déclinée en un long-métrage. C’est ce qu’a annoncé, mercredi 7 novembre, l’acteur Bryan Cranston, qui incarnait son héros, Walter White. Diffusée de 2008 à 2013 sur la chaîne câblée AMC, Breaking Bad est considérée comme l’une des meilleures séries de l’histoire de la télévision américaine. En cinq saisons, elle a remporté seize Emmy Awards, ainsi que deux Golden Globes.\r\n\r\n« Honnêtement, je n’ai pas lu le script », a expliqué Bryan Cranston, 62 ans, lors d’un passage dans l’émission de radio The Dan Patrick Show. « Donc la question se pose de savoir si Walter White sera ou non dans ce film. »\r\n\r\nMais il a ajouté qu’il serait « absolument » partant pour reprendre le rôle du professeur de chimie devenu fabricant de drogue si le créateur de la série et réalisateur du film, Vince Gilligan, le lui proposait.\r\n\r\n« Ça a été la plus grande période de ma vie professionnelle. Et je suis impatient de revoir ces gens, même si ce n’est que pour une visite. »\r\n\r\n', 'Inès M.', '2019-05-12', 50),
(29, 'Le Van “Breaking Bad” S\'arrête à Paris Pour Boire à La Santé De Walter White', 'Ce laboratoire à cocktails d’un nouveau genre n’en finit plus d’attirer les foules partout où il passe. Présentation du bar éphémère le plus insolite de l’été.\r\n\r\nIl a déjà été cuisiné à toutes les sauces : en coque d\'iPhone, en jeu vidéo, en Lego voire même en brûloir à encens. Le camping-car infernal de la série Breaking Bad (traduisez « pétage de plomb » en VF ) a même repris du service à Albuquerque, Nouveau-Mexique, dans le cadre d’un « Bad Tour » facturé 70 billets pour toucher du doigt les lieux cultes du tournage, dont la maison de Walter White sur Piermont Drive. Est-il besoin de préciser que la série, devenue culte, raconte en 5 saisons et 62 épisodes l’histoire de ce prof de chimie atteint d’un cancer, qui décide de se reconvertir dans la fabrication et la vente de méthamphétamine, au point de prendre goût à ce jeu dangereux…\r\n\r\nLaboratoire ambulant\r\nLes nostalgiques de la fiction, bouclée en 2013, peuvent se rappeler au bons souvenirs de leurs idoles autour d’un verre, dans une réplique plus vraie que nature du camping-car bouillonnant. Pour être précis, un Fleetwood Bounder de 1986 long de plus de 10 mètres (et en état de rouler). Le 20 juillet, le laboratoire ambulant posera donc sa batterie de fioles et de pipettes à Paris, non pas pour reprendre du service comme « meth lab » (même pas en rêve, vous avez vu comment le parquet de Paris dérouille les patrons de coffee-shop tentés d’écouler leur dérivé pantouflard du cannabis !), mais pour proposer de se lancer dans la confection de cocktails moléculaires façon Heisenberg.', 'Inès M.', '2019-05-12', 50),
(30, 'Gomez, L\'agent Des Stups Dans “Breaking Bad”, Se Lance Dans La Politique', 'Steven Michael Quezada, acteur dans la série “Breaking Bad” est candidat au siège de la commission du comté d\'Albuquerque. Une future carrière à la Schwarzie ou à la Ronald Reagan ?\r\nLes acteurs peuvent-ils aussi jouer aux politiciens ? Parmi les exemples célèbres, il y eut évidemment Ronald Reagan, le quarantième président des Etats-Unis de 1981 à 1989. Acteur de seconde zone dans les années 30, il se fait vraiment connaître avec Crimes sans châtiment en 1942. Il s\'engage en politique dans les années 50, abandonnant sa carrière cinématographique et devient gouverneur de Californie en 1966.\r\n\r\nCitons aussi bien sûr Arnold Schwarzenegger, bodybuilder autrichien qui devient successful à Hollywood avant d\'être gouverneur républicain de Californie de 2003 à 2011. S\'il remporte cinq fois le concours de Mister Univers et joue dans des grosses productions hollywoodiennes (Terminator, Predator, Total Recall, etc), son palmarès politique est plus maigre. De ses trois mandats, il ressort très critiqué pour avoir fait augmenter la dette de l\'Etat mais reste l\'un des rares à s\'être attaqué à la réforme des prisons surpeuplées. En tant que défenseur des animaux, il aussi fait passer une loi qui interdit la production et la vente de foie gras en Californie à compter de 2012 et qui sera finalement retirée en 2015.\r\n\r\nLa carrière politique de Clint Eastwood est en tous cas plus modeste : il fut maire de 1986 à 1988 de la petite ville de Carmel-by-the-Sea en Californie où il possède une de ses résidences principales, un bar et où il monte ses films. S\'il se lance, c\'est pour des raisons perso : il est en conflit avec la mairie qui l\'empêche de construire un bâtiment en ville. Résultat, il écrase son concurrent en remportant 72 % des voix. Son bilan ? En deux années de mandat, Clint a fait construire une balade le long de la plage et autorisé la vente de glaces, auparavant bannies à cause d\'une loi restreignant la vente de nourriture fast-food...\r\n\r\nMardi 21 juillet, un autre acteur s\'est rajouté à la liste. Steven Michael Quezada, alias Gomez dans Breaking Bad, a annoncé sa candidature à la tête du comté de Bernalillo, dont Albuquerque est la ville principale, et qui est aussi le lieu de tournage de la série. Il va tenter de remporter le siège qui sera vacant en 2016.\r\n\r\nLe coéquipier d\'Hank dans la série d\'AMC est dans la vie encarté au parti démocrate depuis 2014, et siège au conseil des écoles publiques d\'Albuquerque. Il peut bien sûr compter sur sa célébrité, mais aussi sur ses origines latino. Car il a au moins pour lui d\'être un vrai local : né et éduqué à Albuquerque et à l\'université du Nouveau-Mexique à Portales, il est issu d\'une famille installée dans la région depuis des générations. Cela peut faire mouche dans le comté de Bernalillo, où un habitant sur deux est hispanique, une frange de l\'électorat qui opte souvent pour un vote communautaire. Quezada est d\'ailleurs omniprésent dans des comédies latinos qui font recette auprès de la communauté, comme Que Locos.\r\n\r\nEt quand Donald Trump, candidat à la primaire républicaine, a qualifié les Mexicains de « criminels et de violeurs », il monte au créneau, qualifiant ces propos « d\'injustes, qui n\'auraient jamais dû être prononcés », et surnommant le milliardaire « Donald Chump » soit « Donald le crétin ».\r\n\r\n \r\n\r\nQuezada dit vouloir militer pour plus d\'élus Hispano-Américains et la protection des quartiers latinos d\'Albuquerque, convoités par des sociétés de construction. On verra, s\'il est élu, s\'il arrive à faire plus que favoriser les marchands de glaces...', 'Inès M.', '2019-05-12', 50);

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
(44, 1),
(48, 1),
(50, 1),
(51, 1),
(52, 1),
(58, 1),
(48, 2),
(42, 3),
(44, 3),
(52, 3),
(58, 3),
(50, 4),
(42, 6),
(51, 7);

-- --------------------------------------------------------

--
-- Structure de la table `Image`
--

CREATE TABLE `Image` (
  `idImage` int(11) NOT NULL,
  `Image` text,
  `idSerie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Image`
--

INSERT INTO `Image` (`idImage`, `Image`, `idSerie`) VALUES
(19, '10722918515cd419a1c11166.81154412.jpg', 42),
(21, '12462760325cd41d86163d47.91311838.jpg', 44),
(23, '5887031185cd424d8bd30e4.85968209.jpg', 42),
(26, '1932372365cd4623c0fab55.83165624.jpg', 48),
(28, '9779254915cd4688c75b642.58108405.jpg', 48),
(29, '17598800795cd47404023b52.17879502.jpg', 44),
(31, '9949184555cd6cde4b7f730.09991097.jpeg', 50),
(32, '11262397955cd6cf3faefa40.71803659.jpg', 51),
(33, '997204575cd6d3a255c612.36971682.jpg', 52),
(39, '20252005545cd832a7db89f5.69615162.jpg', 58),
(40, '3471649565cd848017650f1.52710889.jpg', 52),
(41, '12822389285cd84d9a0b63e6.37498516.jpeg', 50);

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
(42, 'Stranger Things', '2016-07-15', NULL, 3, 'A Hawkins, en 1983 dans l\'Indiana. Lorsque Will Byers disparaît de son domicile, ses amis se lancent dans une recherche semée d’embûches pour le retrouver. Dans leur quête de réponses, les garçons rencontrent une étrange jeune fille en fuite. Les garçons se lient d\'amitié avec la demoiselle tatouée du chiffre &quot;11&quot; sur son poignet et au crâne rasé et découvrent petit à petit les détails sur son inquiétante situation. Elle est peut-être la clé de tous les mystères qui se cachent dans cette petite ville en apparence tranquille…\r\n\r\n'),
(44, '13 Reasons Why', '2017-03-31', NULL, 3, 'Inspirée des best-sellers de Jay Asher, 13 Reasons Why suit Clay Jensen, un adolescent qui découvre sous son porche au retour du lycée une mystérieuse boîte portant son nom. À l\'intérieur, des cassettes enregistrées par Hannah Baker, une camarade de classe qui s\'est tragiquement suicidée deux semaines auparavant. Les enregistrements révèlent que la jeune fille, dont il était amoureux, a décidé de mettre fin à ses jours pour treize raisons. Clay est-il l\'une de ces raisons ?\r\n'),
(48, 'Orange Is The New Black', '2013-07-11', NULL, 7, 'Entre les murs de la prison pour femmes de Litchfield, la vie n’est pas rose tous les jours. Rattrapées par le passé, des détenues venues d’horizons divers cohabitent dans cette société en vase clos. Si coups bas et tensions sont monnaie courante, l’amour, la solidarité mais surtout l’humour subsistent dans le quotidien des inoubliables prisonnières.'),
(50, 'Breaking Bad', '2008-01-20', '2013-09-29', 5, 'Walter White, 50 ans, est professeur de chimie dans un lycée du Nouveau-Mexique. Pour subvenir aux besoins de Skyler, sa femme enceinte, et de Walt Junior, son fils handicapé, il est obligé de travailler doublement. Son quotidien déjà morose devient carrément noir lorsqu\'il apprend qu\'il est atteint d\'un incurable cancer des poumons. Les médecins ne lui donnent pas plus de deux ans à vivre. Pour réunir rapidement beaucoup d\'argent afin de mettre sa famille à l\'abri, Walter ne voit plus qu\'une solution : mettre ses connaissances en chimie à profit pour fabriquer et vendre du crystal meth, une drogue de synthèse qui rapporte beaucoup. Il propose à Jesse, un de ses anciens élèves devenu un petit dealer de seconde zone, de faire équipe avec lui. Le duo improvisé met en place un labo itinérant dans un vieux camping-car. Cette association inattendue va les entraîner dans une série de péripéties tant comiques que pathétiques.\r\n\r\n'),
(51, 'The Walking Dead', '2010-10-31', NULL, 10, 'Après une apocalypse ayant transformé la quasi-totalité de la population en zombies, un groupe d\'hommes et de femmes mené par l\'officier Rick Grimes tente de survivre... Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde devenu méconnaissable, à travers leur périple dans le Sud profond des États-Unis.'),
(52, 'La Casa De Papel', '2017-05-02', NULL, 3, 'Huit voleurs font une prise d\'otages dans la Maison royale de la Monnaie d\'Espagne, tandis qu\'un génie du crime manipule la police pour mettre son plan à exécution.'),
(58, 'Riverdale', '2017-01-26', NULL, 3, 'Sous ses airs de petite ville tranquille, Riverdale cache en réalité de sombres secrets. Alors qu\'une nouvelle année scolaire débute, le jeune Archie Andrews et ses amis Betty, Jughead, et Kevin voient leur quotidien bouleversé par la mort mystérieuse de Jason Blossom, un de leurs camarades de lycée. Alors que les secrets des uns et des autres menacent de remonter à la surface, et que la belle Veronica, fraîchement débarquée de New York, fait une arrivée remarquée en ville, plus rien ne sera jamais comme avant à Riverdale...');

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
  ADD PRIMARY KEY (`idSerie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Article`
--
ALTER TABLE `Article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `categoriserSerie`
--
ALTER TABLE `categoriserSerie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `Image`
--
ALTER TABLE `Image`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `Serie`
--
ALTER TABLE `Serie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Article`
--
ALTER TABLE `Article`
  ADD CONSTRAINT `FK_Article_idSerie` FOREIGN KEY (`idSerie`) REFERENCES `Serie` (`idSerie`);

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
