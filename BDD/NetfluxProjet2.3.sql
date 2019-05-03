-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 03 mai 2019 à 13:43
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
(1, 'La fin de «Game of Thrones» marque aussi la fin d\'une époque', 'Le 19 mai 2019, la chaîne HBO diffusera le tout dernier épisode de Game of Thrones, mettant fin à une saga qui dure depuis huit saisons à la télé. Lorsque la série a débarqué sur nos écrans, en avril 2011, l’expression «Peak TV» (qui fait référence au nombre démentiel de séries produites actuellement) n’existait pas encore, et il aura même fallu attendre plusieurs années avant qu’elle ne soit prononcée.\r\n\r\nDepuis, l’écosystème des séries, de la télévision, des réseaux sociaux et même des spoilers, a énormément changé. Et ces changements se sont aussi reflétés dans Game of Thrones: on le voit dans sa réalisation de plus en plus cinématographique, son budget devenu exorbitant, ou son attention désormais plus poussée aux questions de représentation. Avec un pied dans le passé et l’autre dans le futur, la série de D.B Weiss et David Benioff représente la transition entre deux ères télévisuelles radicalement différentes.\r\n\r\n«Watercooler moment» :\r\nEn tuant Ned Stark, son héros apparent, à la fin de sa première saison, Game of Thrones a pris un risque qu’aucun autre programme télé ne se serait permis, transformant la série en un véritable phénomène culturel. Deux ans plus tard, lorsque les Noces Pourpres ont décimé une grande partie des personnages principaux, nous avons été des millions à crier de surprise et pleurer le sort de nos héros scotchés à notre écran, dans une forme de communion internationale.\r\n\r\nLe choc était tel que des vidéos virales ont commencé à circuler sur internet, montrant la réaction abasourdie des téléspectateurs. Il s’agissait là d’un véritable «watercooler moment», une expression employée pour décrire les moments de télé tellement forts que tout le monde en parle à la machine à café le lendemain.\r\n\r\n«Tout le monde est prêt à bouleverser ses habitudes pour voir l’épisode quand il sort et pouvoir faire partie de la conversation.»\r\n\r\nAndrew Goldman, professeur à l’Université de New York (NYU) et ancien cadre à HBO\r\n\r\n«Pour la fin de Seinfeld dans les années 1990, et celles de Friends et des Sopranos, tout le monde devait être devant son écran», explique ainsi Andrew Goldman, professeur à l’Université de New York (NYU) et ancien cadre à HBO. «On retrouve ça aujourd’hui avec Game of Thrones: tout le monde est prêt à bouleverser ses habitudes pour voir l’épisode quand il sort et pouvoir faire partie de la conversation.»\r\n\r\nDes moments comme ceux-là, il semble y en avoir de moins en moins. Pas par manque de scènes mémorables ou renversantes dans les séries actuelles, mais parce que plus personne ne regarde les mêmes choses au même moment. Nous sommes désormais dans cette ère de la Peak TV, où les séries produites, de plus en plus nombreuses, deviennent aussi de plus en plus de niches et l’audience est de plus en plus fracturée. Alors qu’il était avant possible d’arriver en soirée et de parler du rebondissement de notre programme favori, il est désormais difficile de trouver quelqu’un qui a vu le même épisode de la même série au même moment que nous: certains commencent à peine aujourd’hui à découvrir Breaking Bad, quand d’autres ont déjà fini tout Vernon Subutex.\r\n\r\nMais selon Hélène Breda, maîtresse de conférences à l\'Université Paris-XIII, ces watercooler moments n’ont pas totalement disparu, ils se sont juste déplacés sur internet: «On a un effet Netflix, où quand Netflix sort une nouvelle production, tout le monde en parle sur les réseaux sociaux. Il y a un mois sur Twitter on ne parlait que de Marie Kondo, donc on suit le calendrier Netflix. On n’est plus au rythme des diffusions télévisuelles mais des mises en ligne sur les plateformes, et vu qu’on peut tout regarder d’un coup, il y a peut-être un effet d’inflation des réactions.» Car nous sommes désormais dans l’ère du streaming légal, avec la multiplication des plateformes, Amazon, Netflix, Hulu, Apple, OCS, MyCanal...\r\n\r\nSans rendez-vous :\r\nCe passage de la télé «rendez-vous» à la télé partout, tout le temps, force les chaînes traditionnelles, notamment HBO, à repenser leur approche. Quand Game of Thrones a vu le jour, en 2011, Netflix venait tout juste de commander son premier programme original, House of Cards, sorti en 2013. Aujourd’hui la plateforme est devenue omniprésente dans l’univers des séries grâce à un rythme de production effréné. Une approche à l’opposé de la philosophie originelle de HBO: le network a toujours préféré donner son temps aux créateurs pour privilégier la qualité. Dans les années 2000, la télé dite de prestige, ou «l’âge d’or de la télévision», a d’ailleurs été impulsée par la chaîne américaine, qui a produit et diffusé la majorité des séries phares de cette période (Les Sopranos, The Wire, Sex and The City, Six Feet Under, Oz…).\r\n\r\nCélébrée pour ses prises de risques, HBO s’est encore plus éloignée de sa zone de confort en lançant Game of Thrones, une série très coûteuse (avec le pilote le plus cher de l’histoire de la chaîne à l’époque), doté d\'un casting d’ensemble peu connu et dans un genre très peu exploré à la télé jusqu’alors: la fantasy. Un pari risqué mais réussi. Huit ans après ses débuts, Game of Thrones est devenue «la plus grande success story de l’histoire de la télé premium,» selon Andrew Goldman.\r\n\r\nAvec la fin de la série, une page se tourne pour HBO. La chaîne entame ainsi un nouveau chapitre de son existence, avec le départ de son CEO Richard Pepler en début 2019. C’était lui qui avait donné sa chance à la série de Weiss et Benioff et qui a soutenu les créateurs tout au long des huit saisons. Il quitte aujourd’hui la chaîne alors qu’elle vient d’être rachetée par AT&T.\r\n\r\nCe géant de la téléphonie américaine aurait prévu d’augmenter considérablement le rythme de productions de séries par HBO, pour pouvoir rivaliser avec Netflix, Amazon, et désormais Apple. Dans ce nouvel environnement ultra compétitif, la chaîne emblématique de la télé prestige n’a donc plus le luxe de prendre son temps. On a du mal, aujourd’hui, à l’imaginer donner sa chance à des projets aussi risqués que Game of Thrones à ses débuts.\r\n\r\nAlerte au spoiler :\r\nMais ce changement de temporalité dans notre consommation des séries a aussi vu se développer un autre phénomène : la culture anti-spoilers. L’aversion que l’on a à l’idée de se faire spoiler un rebondissement dans un film, livre ou série ne date pas d’hier. Personne, à la sortie du Retour du Jedi en 1983, n’aurait eu envie de découvrir le lien de parenté entre Luke et Leia de la bouche d’un ami plutôt qu’en regardant le film. Mais le terme de «spoiler alert» ne s’est vraiment répandu dans la pop culture que dans les années 2000, avant d’exploser au début des années 2010.\r\n\r\n\r\nLa popularisation du concept coïncide avec plusieurs avancées technologiques qui ont révolutionné la façon dont on consomme les séries. Les services d’enregistrement de programmes télé, apparus au tout début des années 2000, ont d\'abord permis de visionner une série ou une émission en différé. Puis l’arrivée des plateformes de streaming ont encore plus encouragé plus le visionnage en différé. Quand une partie des fans est à jour mais pas l’autre, le risque de révélations inopportunes augmente. Ce phénomène est amplifié à l’extrême par les réseaux sociaux: on ne doit ainsi plus seulement craindre l’indiscrétion d’un ami, mais aussi celle de millions d’inconnues décidées à parler de tel ou tel épisode juste après sa diffusion.\r\n\r\nGame of Thrones est aussi un cas d’école pour les spoilers parce que ses cinq premières saisons étaient basées sur des livres que des millions de fans avaient déjà lus. Une grande partie de l’audience attendait donc les Noces Pourpres avec impatience, tandis que l’autre croyait encore aux chances de Robb Stark dans la guerre pour le trône de fer. Ce déséquilibre d’information a vite entraîné une certaine paranoïa.\r\n\r\nMais même après l’épuisement des intrigues des livres, Game of Thrones est restée particulièrement sujette aux spoilers... Parce que c’est la série la plus populaire du moment (et donc une des plus discutées en ligne), qu’elle est regardée dans de nombreux fuseaux horaires, et qu’elle a été victime par le passé de fuites de scénarios et d’épisodes réservés à la presse. Du coup, pour éviter d’être spoilés, des nombres records de téléspectateurs se retrouvent devant leur écran tous les dimanches soirs (ou lundi matin en France) pour voir le programme en direct et découvrir les dernières révélations en même temps que tout le monde, faisant de Game of Thrones la dernière grande série «rendez-vous».\r\n\r\nD\'autres, comme The Walking Dead ou Westworld, ont fait l’objet d’un engouement similaire avant de s\'essouffler, d’abord parce qu\'elles sont moins bien écrites, ensuite parce qu\'elles n\'ont pas réussi à s\'adapter à tous ces changements culturels aussi bien que Game of Thrones. Westworld, a un temps tenté de se positionner comme le successeur de Game of Thrones en basant toute sa première saison autour de rebondissements un peu choc. Mais la série manquait de cohérence et de profondeur émotionnelle et n\'avait rien à offrir une fois que le moment «spoiler» était passé. Les morts choquantes de Game of Thrones, elles, sont ancrées dans l\'émotion et font partie intégrante de l\'intrigue, et elles fonctionnent tout aussi bien quand on sait qu\'elles vont avoir lieu. N\'est pas Game of Thrones qui veut.\r\n\r\nPrises de conscience :\r\nD’autant plus que les séries doivent désormais aussi composer avec l’essor des analyses centrées sur les questions de représentation. Aujourd’hui, il est impossible pour une série de ne pas réfléchir un minimum à ces thématiques et celles qui ne le font pas sont généralement vite critiquées. L’explosion de l\'utilisation des réseaux sociaux a aussi permis à certains publics de se faire désormais entendre et aux chaînes de réaliser qu’il y avait dans ces publics un marché lucratif: en quelques années, la représentation des femmes, des personnes racisées, queer ou en situation de handicap a évolué à l’écran. «Il est évident qu’il y a eu des évolutions sur tout ce qui est prise de conscience de problématiques sociales, confirme Hélène Breda. La culture internet y contribue, parce que ça permet au public de s’exprimer, et aussi de visionner et de commenter et de réagir en simultané et en groupe.»\r\n\r\nPeu à peu, on a commencé à parler de «cancel culture», c’est-à-dire le backlash contre les œuvres ou personnalités considérées comme offensantes\r\n\r\nSi les critiques sur le manque de représentativité d’une série existent depuis longtemps, elles n’ont jamais connu une telle régularité ni une telle ampleur. La série Girls est souvent identifiée comme le point de bascule de ce phénomène : en 2012, la série a été ciblée pour son absence de personnages racisés, poussant la créatrice Lena Dunham à réagir en intégrant un personnage noir dans sa deuxième saison (une tentative de rattrapage assez superficielle, qui n’a pas forcément rassuré les voix critiques).\r\n\r\nÀ cette époque, Game of Thrones en était déjà à sa deuxième saison et n’était pas encore tout à fait le phénomène planétaire que l’on connaît aujourd’hui. Puis en 2014 le terme «woke» (expression synonyme de «conscientisé», ou progressiste), qui était auparavant employé par des militants antiracistes américains, est rentré dans le langage courant. Peu à peu, on a commencé à parler de «cancel culture», c’est-à-dire le backlash de plus en plus répandu contre les œuvres ou personnalités considérées comme offensantes par une partie de la population. Or, à ce moment-là, Game of Thrones entamait sa saison 4 et connaissait un bond d’audiences à la suite du choc des Noces Pourpres. C’est aussi à partir de cette période que la série a connu ses premiers véritables blacklashs.\r\n\r\nLe temps des backlashs :\r\nLes premières saisons de la série sont caractérisées par de nombreuses scènes de nudité et/ou de sexe, la marque de fabrique de la plupart des productions HBO –les chaînes du câble américain n’ont pas à se soucier de la censure. Game of Thrones a poussé cette pratique à l’extrême, si bien qu’un terme, «sexposition», a même été inventé pour décrire les scènes de la série dans lesquelles des personnages exposaient des points clés de l’intrigue en pleine scène de sexe.\r\n\r\nMais pour mieux illustrer la brutalité de l’univers patriarcal et médiéval de Game of Thrones, les créateurs ont aussi eu recours à pas mal de violence sexuelle, dès la première saison. Alors que la «woke culture» commençait à s’installer, ces scènes souvent gratuites et répétitives ont commencé à ne plus passer. La première grosse polémique éclate lors de la quatrième saison, avec le viol de Cersei par Jaime. Une deuxième a suivi l’année d’après, avec la scène du viol de Sansa, filmée de la perspective d’un homme (Théon) et non de celle de la victime elle-même. Ces scènes sont souvent considérées comme les plus traumatisantes de la série, mais en revoyant les premières saisons, on en compte beaucoup d’autres, aussi très violentes, mais passées inaperçues à l’époque.\r\n\r\nEn quelques années, la série s’est retrouvée en première ligne des évolutions culturelles.\r\n\r\nComme pour mieux refléter le changement de culture opéré ces dernières années, Game of Thrones a depuis corrigé le tir tant bien que mal avec la vengeance jouissive de Sansa et le rappel par Daenerys, au détour d’un dialogue, des viols qu’elle avait subis dans la première saison.\r\n\r\nAutre signe que les temps ont changé: cette scène dans un épisode de la saison 6, avec un gros plan sur un pénis, en réponse aux critiques qui estimaient que la série montrait beaucoup plus de sexes féminins que masculins. De nombreux médias s\'en sont fait les relais, parlant de «premier pénis» de la série. Pourtant, Game of Thrones avait déjà filmé beaucoup de membres masculins et ce dès sa première saison –on ne l’avait juste pas noté à l’époque. En quelques années, la série s’est donc retrouvée en première ligne de ces évolutions culturelles. Aujourd’hui, il y a fort à parier que peu de séries se permettraient les scènes de violence sexuelle désinvoltes que Game of Thrones a pu se permettre au début.\r\n\r\nUne question de timing :\r\nSi la série de Weiss et Benioff a été à la fois le témoin et l’illustration de tous ces changements, c’est aussi parce qu’elle a duré huit ans –une longévité de plus en plus rare à la télé. Car si les séries se multiplient, elles sont aussi plus courtes. Les séries d’anthologie et mini-séries, en particulier, pullulent, leur brièveté séduisant particulièrement des stars de cinéma qui ne veulent pas s’engager sur le long terme. Game of Thrones, avec ses intrigues longues et complexes et ses personnages que l’on suit depuis huit ans déjà, fait désormais figure d’exception.\r\n\r\nParadoxalement, la série la plus épique de la télé a aussi marqué le début de l’ère des saisons beaucoup plus courtes. Avant Game of Thrones, les productions du câble américain (comme Mad Men, Les Sopranos, The Wire...) tenaient sur des saisons de treize épisodes, tandis que celles des chaînes hertziennes en comptaient plus de vingt. Ces saisons raccourcies permettaient aux séries d’HBO et AMC de mettre l’accent sur la qualité de l’écriture plutôt que sur la quantité de production. Avec l’arrivée de Game of Thrones, ce nombre a encore baissé, puisque ses six premières saisons ont compté dix épisodes chacune, et les deux dernières encore moins.\r\n\r\nUne nombre réduit qui est depuis devenu la nouvelle norme tant sur une chaîne comme HBO (Westworld et Succession comptent chacune dix épisodes par saison) que sur les plateformes de streaming (The Crown et Ozark sur Netflix ou Homecoming sur Amazon en ont aussi dix, certaines comme Poupée Russe seulement huit). Dans le cas de Game of Thrones, la baisse du nombre d’épisodes s’explique avant tout par l’échelle inédite de sa production, chaque saison représentant un investissement humain et matériel considérable. Parce que la série a aussi été la première à adopter un niveau de production digne d’un film hollywoodien à la télé.\r\n\r\nAgent de liaison :\r\nGame of Thrones représente une période transitoire entre l’âge d’or des séries à l’écriture très fine mais à la réalisation très télévisuelle et l’ère actuelle de la Peak TV, où le monde du cinéma s’incruste à la télé. Une grande partie des séries actuelles proposent une image extrêmement léchée, nombre d’entre elles étant réalisées par des auteurs venus du cinéma (Jean-Marc Vallée avec Sharp Objects, Steven Soderbergh avec The Knick)... Mais ces séries sont souvent très courtes et aussi époustouflantes sur la forme que limitées sur le fond.\r\n\r\nÀ cheval sur ces deux tendances, et aidée par un des plus gros budget télé de l’histoire, Game of Thrones a su s’adapter en alliant cette écriture à base de caractérisation très fine à une réalisation toujours plus cinématographique, offrant des scènes d’action enchaînant les records et des propositions de mise-en-scène élaborées. C’est justement le fait d’avoir réussi ce mélange entre prestige adoubé par la critique et grand spectacle qui attire les foules et en a fait la plus grosse série produite à l’heure actuelle.\r\n\r\nCes séries ont porté à elles seules le chiffre d’affaires d’une chaîne pendant de nombreuses années.\r\n\r\nArrivée à la fin de l’âge d’or des séries et au début de l’essor de la Peak TV, Game of Thrones aura donc connu deux ères très différentes, et agi comme une liaison entre elles. Pour décrire cette période charnière, Maureen Ryan parle de «tentpole TV» et fait le lien entre trois énormes événements culturels de la décennie : Game of Thrones, The Walking Dead, et les films Marvel.\r\n\r\nGame of Thrones et The Walking Dead sont des séries blockbusters, qui ont battu des records d\'audience et que tout le monde a regardé et commenté en même temps (même si la seconde s’est essoufflée depuis). Ces séries ont porté à elles toutes seules le chiffre d’affaires d’une chaîne pendant de nombreuses années et ont initié de nombreux spin-offs et projets parallèles. Elles représentent aussi l’explosion dans la pop culture des genres de la fantasy, de la science-fiction et de l’horreur, avant considérés comme niches.\r\n\r\nLa franchise Marvel reflète les mêmes caractéristiques, au cinéma. Ce n’est d’ailleurs pas anodin si le phénomène Game of Thrones et la série des Avengers, qui ont démarré quasiment en même temps, prendront fin de manière presque simultanée au printemps 2019. Difficile de savoir ce qui viendra remplacer ces deux oeuvres, chacune à sa manière représentant la fin d’un chapitre dans l’histoire de la pop culture.', 'Inès M.', '2019-04-29', 1),
(2, '“La Casa de papel” : mais qu’est-ce que c’est que ce buzz ?', 'Ce thriller espagnol aux effluves révolutionnaires, diffusé par Netflix en France, est devenu la série dont tout le monde parle. Décryptage d’un succès sans accroc, alors que les derniers épisodes arrivent.\r\n\r\nLa Casa de papel, thriller de la chaîne espagnole Antena 3 disponible sur Netflix, s’est imposé comme le succès surprise de ce début d’année 2018. Comment expliquer qu’une série venue d’un pays à la production peu suivie chez nous (1) s’impose comme le phénomène sériel populaire du moment ? Cette histoire de braquage à rebondissements semble la recette idéale pour attirer les curieux et créer « le buzz », entre suspense, bons sentiments et esprit contestataire. Un divertissement malin, intrigant mais inégal, dont les ultimes épisodes arrivent sur la plateforme de SVOD ce vendredi 6 avril.\r\n\r\nUn concept accrocheur :\r\nLa Casa de papel suit un groupe de huit braqueurs, qui pénètrent dans la Fabrique nationale de la monnaie et du timbre, à Madrid, pour imprimer leurs propres billets. Enfermés avec soixante-sept otages, ils comptent faire tourner les rotatives dix à douze jours, pour amasser un butin de 2,4 milliards d’euros. Leur leader charismatique, surnommé le Professeur, dirige les opérations de l’extérieur, depuis un hangar désaffecté. Une flic, Raquel Murillo, est chargée de mener les négociations. Cousine d’Ocean’s Eleven aux airs de Prison Break à l’envers, La Casa de papel repose sur ce point de départ simple et efficace. Le Professeur, génial marionnettiste, semble avoir tout prévu, même les situations les plus improbables.\r\n\r\nEt c’est justement ce qui arrive : plus on avance, moins La Casa de papel est crédible. Pour le meilleur dans les premiers épisodes, où l’on prend plaisir à se faire balader. Et pour le pire quand on commence à se dire qu’Alex Pina, son créateur, pousse un peu trop loin le bouchon – notamment quand le sort du Professeur repose entre les mains de la mère de Murillo… qui perd la mémoire. Pour tenir la distance (23 épisodes d’une quarantaine de minutes), la série s’étire, multiplie les digressions et les imprévus.\r\n\r\nDes personnages charismatiques :\r\nPour garder secrète leur identité, les braqueurs ont adopté des noms de villes : Tokyo, Berlin, Moscou, Denver, Nairobi, Helsinki et Oslo. Ces héros aux compétences, personnalités et physiques complémentaires – un mélange efficace et potentiellement explosif — semblent tout droit sortis d’une BD ou d’un jeu vidéo. La Casa de papel les présente d’abord comme des pions, avant de revenir, dans des flashbacks inégaux, sur leur passé et les raisons de leur présence dans la Fabrique nationale de la monnaie et du timbre. La série doit beaucoup à ces personnages de truands a priori pacifiques, qui facilitent la digestion des couleuvres que le scénario nous impose.\r\n\r\nLe Professeur, faux timide planqué derrière ses lunettes, a les épaules assez larges pour porter cette histoire rocambolesque. Il se lance dans un jeu du chat et de la souris avec Raquel Murillo, flic fragile, malmenée par l’enquête mais déterminée. Une danse un temps efficace… avant de devenir fatigante. Côté braqueurs, si la relation entre le bienveillant Moscou et son idiot de fils Denver surprend et touche, on se lasse de la voix off de la rebelle Tokyo, dispensable, et surtout des humeurs de Berlin, sadique mégalomane. On regrette aussi d’en apprendre si peu sur Oslo et Helsinki, mercenaires pourtant attachants.\r\n\r\nUne symbolique contestataire :\r\nLe Professeur et sa bande de braqueurs se présentent moins comme des voleurs que des rebelles, qui font chauffer la planche à billets mais ne s’en prennent pas aux économies du peuple. Ils sont, certes, chacun à leur manière, des laissés-pour-compte, des marginaux, des criminels, mais bien moins « coupables » que les banquiers et dirigeants des banques centrales. Ils s’habillent avec une combinaison rouge qui rappelle celle des prisonniers de Guantanamo et portent un masque inspiré de l’effigie de Dalí… qui fait furieusement penser à celui des Anonymous. La Puerta del Sol et les Indignés sont directement cités par le Professeur, qui explique être lui-même petit-fils de partisans italiens et finit par entonner leur chant, Bella ciao – séquence accompagnée d’images d’archives sur les crises financières du passé. La somme astronomique visée par les braqueurs (2,4 milliards d’euros) est volontairement exagérée, pour dénoncer la folie de la spéculation financière.\r\n\r\nDéjà utilisée par l’américaine Mr Robot, cette symbolique ne fait pas pour autant de La Casa de papel un brûlot politique. Elle lui offre une réjouissante aura contestataire, mais revient vite à des considérations plus terre à terre – ses héros rêvent plus de s’offrir une vie luxueuse, de profiter au maximum de leurs millions, que de modifier en profondeur la société espagnole. Par ailleurs, l’impact d’un tel casse sur les finances du pays – donc, par ricochet, sur la population – n’est jamais discuté.\r\n\r\nUne série exotique : \r\nOn s’est habitué aux séries en anglais, et même à celles en danois et en hébreu. Alors un bon divertissement en espagnol, où les « puta » « joder » et « coño » épicent les dialogues, c’est un peu d’air frais. La Casa de papel exploite habilement certains décors madrilène et choisit même parmi ses symboles une Seat Ibiza de 1992 – l’équivalent ibérique de la Renault 11. Elle change aussi nos habitudes en mêlant un savoir-faire qui rappelle l’efficacité américaine (notamment dans sa mise en scène soignée, souvent musclée, et sa photo impeccable) aux codes appréciés du public espagnol. A commencer par une bonne dose de soap.\r\n\r\nC’est une des principales faiblesses de la série, qui attribue à chacun de ses personnages une histoire de cœur. Ce sentimentalisme devient un élément-clé du suspense, puisque c’est lui qui fait dérailler le plan du Professeur. Mais ce côté soap, souvent naïf, ralentit artificiellement l’intrigue et peine à nous émouvoir.\r\n\r\nUn « buzz » d’enfer :\r\nDifficile de savoir si La Casa de papel aurait été un tel phénomène sans Netflix. Mais son succès est certainement significatif de l’impact de la plateforme, capable de transformer en carton une œuvre efficace mais pas franchement… révolutionnaire. Le bouche à oreille a été impressionnant, peut-être encouragé par un savant usage des algorithmes de la plateforme et par une mise en avant de la série une fois le buzz lancé. En se concentrant (avec un peu de mauvaise foi) sur le verre à moitié vide, on peut regretter que des œuvres plus fortes par exemple Rick & Morty n’aient pas pu profiter d’un tel appel d’air. En contemplant le verre à moitié plein, on peut se réjouir de constater qu’une série européenne, venue d’un pays longtemps has been pour les sériephiles, se soit ainsi imposée.', 'Inès M.', '2019-04-29', 2),
(3, 'Faut-il laisser tomber “The Walking Dead” ou lui donner sa chance ?', '“The Walking Dead” revient ce dimanche 22 octobre pour une huitième saison, à suivre sur OCS Choc. Capable du meilleur comme du pire, la série de zombies divise, entre ceux qui s’accrochent et ceux qui ne la regarderont plus.\r\n\r\nMais où va The Walking Dead ? Même les fans de la première heure se posent la question, tant les défauts de la série de zombies, hier anecdotiques, ont explosé au grand jour la saison passée. En baisse dans les audiences, The Walking Dead reste un des plus gros succès sériels du moment, et semble devoir durer. Alors, faut-il faire confiance aux scénaristes et espérer qu’ils trouveront de quoi rendre les aventures de Rick Grimes et consorts à nouveau passionnantes… ou abandonner une série moribonde ?\r\n\r\nNous avons posé la question sur Twitter. Le résultat du sondage, auquel ont participé plus de cinq cents internautes, témoigne d’une division quasi paritaire entre ceux qui veulent continuer, et ceux qui vont tourner la page. A Télérama aussi, les avis sont partagés. Voici ceux, opposés et complémentaires, de deux journalistes qui ont suivi The Walking Dead depuis le premier jour, mais dont les routes vont se séparer avec cette saison 8.\r\n\r\n\r\nSUR LE MÊME THÈME\r\n\r\nCinquante nuances de zombies\r\n“The Walking Dead”, saison 7 : c\'était vraiment la mort\r\n“The Walking Dead” est-elle encore une bonne série ?\r\n“The Walking Dead” revient ce dimanche 22 octobre pour une huitième saison, à suivre sur OCS Choc. Capable du meilleur comme du pire, la série de zombies divise, entre ceux qui s’accrochent et ceux qui ne la regarderont plus.\r\n\r\nMais où va The Walking Dead ? Même les fans de la première heure se posent la question, tant les défauts de la série de zombies, hier anecdotiques, ont explosé au grand jour la saison passée. En baisse dans les audiences, The Walking Dead reste un des plus gros succès sériels du moment, et semble devoir durer. Alors, faut-il faire confiance aux scénaristes et espérer qu’ils trouveront de quoi rendre les aventures de Rick Grimes et consorts à nouveau passionnantes… ou abandonner une série moribonde ?\r\n\r\nNous avons posé la question sur Twitter. Le résultat du sondage, auquel ont participé plus de cinq cents internautes, témoigne d’une division quasi paritaire entre ceux qui veulent continuer, et ceux qui vont tourner la page. A Télérama aussi, les avis sont partagés. Voici ceux, opposés et complémentaires, de deux journalistes qui ont suivi The Walking Dead depuis le premier jour, mais dont les routes vont se séparer avec cette saison 8.\r\n\r\n\r\nIl faut continuer!\r\nPar Sébastien Mauge\r\n\r\nIl est toujours difficile de quitter une série au long cours, jadis adorée. Notre niveau d’implication, à la fois dans le récit et l’évolution du destin des personnages, nous installe dans une routine confortable et empêche souvent de relever des défauts émergeants qui, dans le cas d’une œuvre balbutiante, auraient été immédiatement rédhibitoires. Parfois, néanmoins, la prise de conscience est brutale et la rupture inévitable. Ce fut le cas pour Urgences, avec la mort programmée de Mark Green (qui, contrairement à Doug Ross Clooney, n’a pas eu droit à une retraite paisible dans sa cabane au bord d’un lac) ou X-Files, lors du début du mi-temps de David Duchovny, remplacé par l’intermittent T-1000 Robert Patrick.\r\n\r\nLe premier épisode de la saison 7 de The Walking Dead, boucherie insoutenable déjà largement commentée dans nos colonnes, aurait pu être un de ces éléments déclencheurs. Il l’a été pour de nombreux téléspectateurs. Pourtant, les coups de batte de Negan, négation terroriste de l’identité humaine au profit du pouvoir, lancés au hasard un soir d’octobre 2016, dans une atmosphère nocturne oppressante et apocalyptique, se faisaient a posteriori l’écho intriguant et inconscient (?) d’une Amérique masochiste capable d’élire un président délirant pour lequel elle n’a majoritairement pas voté.\r\n\r\nInégale, la suite de la saison n’en a pas moins développé cette question désormais cruciale, aux Etats-Unis et ailleurs, du choix des leaders. Jamais autant de possibilités de « gouvernements » n’avaient été offertes à notre groupe de survivants. La tentation extrémiste Negan, l’utopie bisounours (ou plutôt Tigrou !) d’Ezekiel, la « collaboration » de Gregory, l’opportunisme froid de Jadis… Et Rick dans tout ça ? Pour la première fois, comme un témoin passif shooté au chloroforme, le chef de la bande n’avait plus prise sur l’histoire et assistait impuissant à la catastrophe annoncée. Et nous, que faisons-nous quand l’Histoire déraille ? Comment devenir acteur du changement nécessaire ? Comment se soulever, se relever (« Rise up » annonçait la promo de la seconde moitié de saison) ? Ces questions se posent de plus en plus dans notre monde « réel ».\r\n\r\nVoilà pourquoi on continue à regarder The Walking Dead. Pour assister à un espoir. Au réveil de Rick et d’une communauté rebelle, amorcé en fin de saison dernière. Son regard, désormais incisif et non plus perdu, a changé. L’unité, l’ingéniosité et le courage prévalent maintenant face à la violence pure, annihilante et gratuite. Oubliés les questionnements métaphysiques passionnants des premières saisons ? C’est vrai, et on peut légitimement le regretter. Place à un pragmatisme salvateur qui peut être, néanmoins, tout aussi intéressant.\r\n\r\nL’heure de la revanche a sonné et on aurait tort de ne pas y assister. Après tout, nous n’aurions manqué pour rien au monde les chutes des affreux Joffrey et Ramsey Bolton dans Game of thrones. Même si le chemin est douloureux, l’issue fait du bien ! Il y a peut-être aussi une part de masochisme dans cet entêtement ! Sera-t-il payant ? On le souhaite, sans en mettre toutefois sa tête à couper…\r\n\r\nIl faut laisser tomber!\r\nPar Pierre Langlais\r\n\r\nJ\'ai aimé The Walking Dead. Depuis son lancement en 2010, j\'ai suivi attentivement chacune de ses saisons. Je l\'ai encouragée après ses débuts prometteurs, applaudie quand elle s\'est libérée, soutenue quand, pensais-je, elle traversait une mauvaise passe. J\'ai constaté ses hauts captivants et ses bas soporifiques, d\'abord bienveillant puis de plus en plus crispé. J\'ai vu se multiplier ses cliffhangers poussifs, ses longueurs, ses dialogues répétitifs, son scénario cyclique – un refuge, un espoir, une menace, un combat, un refuge, un espoir…\r\n\r\nThe Walking Dead avait cette capacité à, malgré tout, me faire revenir d\'une saison à l\'autre. Parce que je m\'étais attaché à certains de ses personnages et que ses meilleurs moments compensaient ses pires faiblesses. Je sentais qu\'on m\'arnaquait, mais l\'entourloupe était belle. J\'avançais en essayant de ne pas me poser trop de questions. Et, de plus en plus souvent, je me disais que, cette fois, ce serait la dernière.\r\n\r\nThe Walking Dead était jusqu\'ici une de ces rares séries qu\'il « faut » voir. Elle profitait d\'une pression sociale qui, sans être aussi forte que celle qui porte Game of Thrones, poussait certains sceptiques à ne pas lâcher prise. Sa consternante septième saison a rompu le charme. J\'ai assisté, déconfit, agacé et finalement hilare, à une dégringolade sidérante : scénario égaré, personnages vides, dialogues guignolesques, tension inexistante, mise en scène d\'une rare laideur – une biche numérique immédiatement entrée dans l\'histoire des séries.\r\n\r\nSon premier épisode, polémique, avait au moins le mérite de nous révolter, de questionner la façon dont les scénaristes instrumentalisent nos émotions, de provoquer un débat sur le sens et les limites de la violence. Mais le reste de la saison témoignait d\'une œuvre qui n\'a plus rien à dire, se perd dans des apartés inutiles, invente de nouveaux personnages pour les laisser sur le bas-côté – Ezekiel, roi comédien pas inintéressant. Tourne en rond, bavarde, se cherche, en vain.\r\n\r\nOn peut tromper une fois mille personnes, mais on ne peut pas tromper mille fois une personne, comme essayait de dire l\'autre. The Walking Dead m\'a trop déçu. Sept ans durant, je lui ai été fidèle, entretenant l\'espoir de voir un jour son histoire se terminer. Mais rien ne dit, aujourd\'hui, qu\'elle ne s\'étalera pas sur dix ou douze saisons. Les audiences, en baisse outre-Atlantique, restent excellentes. La communication autour de la série, rodée, nous annonce que chaque saison sera plus renversante que la précédente. Je ne l\'écoute plus. Je n\'ai que faire de son argument « coup de poing » : il va y avoir des morts. Une série, ce n\'est pas un chamboule-tout.\r\n\r\nThe Walking Dead ne sait plus où elle va, donc elle racole. Elle ne pense qu\'à nous choquer, à faire le buzz, à remplir des saisons sans parvenir à se renouveler, à retendre son récit, à trouver des choses neuves à nous dire sur ses personnages. Je l\'écris sans joie : je ne suivrai pas cette saison 8. Ni les suivantes. Je laisse ceux qui n\'ont rien de mieux à voir me tenir au courant, dans trois, cinq ou dix ans, de comment cette série qui hier me plaisait tant a terminé sa course…', 'Inès M.', '2019-04-29', 3);

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
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(2, 3),
(4, 3),
(1, 6),
(4, 6),
(3, 7);

-- --------------------------------------------------------

--
-- Structure de la table `Image`
--

CREATE TABLE `Image` (
  `idImage` int(11) NOT NULL,
  `urlSynop` varchar(255) DEFAULT NULL,
  `urlArticle` varchar(255) NOT NULL,
  `idSerie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Image`
--

INSERT INTO `Image` (`idImage`, `urlSynop`, `urlArticle`, `idSerie`) VALUES
(1, 'images/GameOfThronesSynop.jpg', '', 1),
(2, 'images/LaCasaDePapelSynop.jpg', '', 2),
(3, 'images/TheWalkingDeadSynop.jpg', '', 3),
(4, 'images/StrangerThingsSynop.jpg', '', 4);

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
  `synopSerie` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Serie`
--

INSERT INTO `Serie` (`idSerie`, `nomSerie`, `dateDébut`, `dateFin`, `nbrSaisons`, `synopSerie`) VALUES
(1, 'Game Of Thrones', '2011-04-17', NULL, 8, 'Il y a très longtemps, à une époque oubliée, une force a détruit l\'équilibre des saisons. Dans un pays où l\'été peut durer plusieurs années et l\'hiver toute une vie, des forces sinistres et surnaturelles se pressent aux portes du Royaume des Sept Couronnes. La confrérie de la Garde de Nuit, protégeant le Royaume de toute créature pouvant provenir d\'au-delà du Mur protecteur, n\'a plus les ressources nécessaires pour assurer la sécurité de tous. Après un été de dix années, un hiver rigoureux s\'abat sur le Royaume avec la promesse d\'un avenir des plus sombres. Pendant ce temps, complots et rivalités se jouent sur le continent pour s\'emparer du Trône de Fer, le symbole du pouvoir absolu.\r\n\r\n\r\n\r\n'),
(2, 'La Casa De Papel', '2017-05-02', NULL, 3, 'Un homme mystérieux, surnommé le Professeur1 (El Profesor), planifie le meilleur braquage jamais réalisé. Pour exécuter son plan, il recrute huit des meilleurs malfaiteurs du pays qui n\'ont rien à perdre.\r\n\r\nLe but est d\'infiltrer la Fabrique nationale de la monnaie et du timbre afin d\'imprimer 2,4 milliards d\'euros, en petites coupures de 50 € et cela en moins de onze jours, sans verser une goutte de sang – malgré la présence de 67 otages, dont la fille de l\'ambassadeur du Royaume-Uni.'),
(3, 'The Walking Dead', '2010-10-31', NULL, 9, 'L\'histoire suit le personnage de Rick Grimes (interprété par Andrew Lincoln), adjoint du shérif du comté de Kings (en Géorgie) qui se réveille d\'un coma de plusieurs semaines pour découvrir que la population a été ravagée par une épidémie post-apocalyptique inconnue qui transforme les êtres humains en morts-vivants, appelés « rôdeurs ». Après avoir retrouvé sa famille, il devient très vite le leader d\'un groupe de rescapés d\'Atlanta. Ils seront amenés à devoir survivre dans un monde post-apocalyptique face à des rôdeurs et d\'autres groupes de survivants, pour certains plus dangereux encore que les rôdeurs eux-mêmes. Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde devenu méconnaissable, à travers leur périple dans le Sud profond des États-Unis.\r\n\r\n'),
(4, 'Stranger Things', '2026-07-15', NULL, 3, 'A Hawkins, en 1983 dans l\'Indiana. Lorsque Will Byers disparaît de son domicile, ses amis se lancent dans une recherche semée d’embûches pour le retrouver. Dans leur quête de réponses, les garçons rencontrent une étrange jeune fille en fuite. Les garçons se lient d\'amitié avec la demoiselle tatouée du chiffre \"11\" sur son poignet et au crâne rasé et découvrent petit à petit les détails sur son inquiétante situation. Elle est peut-être la clé de tous les mystères qui se cachent dans cette petite ville en apparence tranquille…');

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
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Image`
--
ALTER TABLE `Image`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Serie`
--
ALTER TABLE `Serie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
