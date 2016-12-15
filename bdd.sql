-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Décembre 2016 à 21:21
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `festivall`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE IF NOT EXISTS `artiste` (
`id` int(11) NOT NULL,
  `festival_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=365 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`id`, `festival_id`, `nom`) VALUES
(51, 43, 'Antigone'),
(52, 43, 'Birth Of Frequency'),
(53, 43, 'Donato Dozzy'),
(54, 43, 'Josh Wink'),
(55, 43, 'Kosme'),
(56, 43, 'Laurent Garnier'),
(57, 43, 'Marcel Dettmann'),
(58, 43, 'Marcelus'),
(59, 43, 'Peter Van Hoesen'),
(60, 43, 'Russ Gabriel'),
(61, 43, 'Voiski'),
(62, 43, 'Zadig'),
(63, 44, 'Birdy Nam Nam'),
(64, 44, 'Captain Hook'),
(65, 44, 'Clft Militia'),
(66, 44, 'Comah'),
(67, 44, 'Dj Loud'),
(68, 44, 'Dj Samite Aka Noisebuilder'),
(69, 44, 'Electrobugz Aka Beuns'),
(70, 44, 'Gaudium'),
(71, 44, 'Marc Houle'),
(72, 44, 'Minimum Syndicat'),
(73, 44, 'Nout'),
(74, 44, 'Paul Ritch'),
(75, 44, 'Petit Biscuit'),
(76, 44, 'Rakoon'),
(77, 44, 'Signal Electrique'),
(78, 44, 'Split'),
(79, 44, 'Umek'),
(80, 45, 'Chinese Man'),
(81, 45, 'Douchka'),
(82, 45, 'Panda Dub'),
(83, 45, 'Salut C''est Cool'),
(84, 45, 'Comah'),
(85, 45, 'Naive New Beaters'),
(86, 45, 'Oxia'),
(87, 45, 'Synapson'),
(88, 46, 'Avenge Sevenfold'),
(89, 46, 'Sum 41'),
(90, 46, 'Blink182'),
(91, 46, 'GunsNRoses'),
(92, 46, 'Nirvana'),
(93, 46, 'Matmatah'),
(94, 46, 'Chinese Man'),
(95, 46, 'Rag n Bone Man'),
(96, 46, 'Caravan Palace'),
(97, 47, 'Fanny Polly'),
(98, 47, 'Lautrec Medouze'),
(99, 47, 'I Will'),
(100, 47, 'Sake'),
(101, 47, 'Pejmax'),
(102, 47, 'Nefaste'),
(103, 47, 'Ol''zico'),
(104, 47, 'Jeff Le Nerf'),
(105, 47, 'Bastard Prod'),
(106, 47, 'Guizmo'),
(107, 47, 'Dj Deenasty'),
(108, 47, 'Don Choa'),
(109, 47, 'Specta'),
(110, 47, 'Mac Tyler'),
(111, 47, 'Jeru The Damaja'),
(113, 48, 'Green Day'),
(114, 48, 'System Of A Down'),
(115, 48, 'Five Finger Death Punch'),
(116, 48, 'Slayer'),
(117, 48, 'Lonely The Brave'),
(118, 48, 'Linkin Park'),
(119, 48, 'Blink182'),
(120, 48, 'Skinny Puppy'),
(121, 48, 'Pierce The Veil'),
(122, 48, 'Dagoba'),
(123, 48, 'Rancid'),
(124, 48, 'Suicidal Tendencies'),
(125, 48, 'Architects'),
(126, 48, 'Kontrust'),
(127, 48, 'Wakrat'),
(129, 49, 'Deep Purple'),
(130, 49, 'Slayer'),
(131, 49, 'Linkin Park'),
(132, 49, 'Rob Zombie'),
(133, 49, 'Steel Panther'),
(134, 49, 'Airbourne'),
(135, 49, 'Sabaton'),
(136, 49, 'Alter Bridge'),
(137, 49, 'Primus'),
(138, 49, 'Rancid'),
(139, 49, 'Behemoth'),
(140, 49, 'Primus'),
(141, 49, 'Prophets Of Rage'),
(142, 49, 'Trust'),
(143, 49, 'Coroner'),
(144, 49, 'Helmet'),
(145, 49, 'Clutch'),
(146, 49, 'Slo Burn'),
(147, 49, 'Red Fang'),
(148, 49, 'Comeback Kid'),
(149, 49, 'Bright Curse'),
(150, 49, 'Trap Them'),
(152, 50, 'Boss Hog'),
(153, 50, 'The Sore'),
(154, 50, 'Losers et Guadalupe'),
(155, 50, 'Plata'),
(156, 50, 'Luke Winslow-King'),
(157, 50, 'Theo'),
(158, 50, 'Lawrence & The Hearts'),
(159, 50, 'King Biscuit'),
(161, 51, 'Andy Emler'),
(162, 51, 'Hasse Poulsen'),
(163, 51, 'Helene Labarriere'),
(164, 51, 'Claude Barthelemy'),
(165, 51, 'Jazz Ensemble De Tulle'),
(166, 51, 'L''occidentale De Fanfare'),
(167, 51, 'Plaistow'),
(168, 51, 'Antiloops'),
(169, 51, 'Camel Zekri'),
(170, 51, 'Dj Topic'),
(171, 51, 'Pixvae'),
(172, 51, 'Tribeqa'),
(173, 52, 'Canned Heat'),
(174, 52, 'Gaël Faye'),
(175, 52, 'Jules'),
(176, 52, 'Ten Years After'),
(177, 52, 'Tété'),
(178, 52, 'Claudio Capéo'),
(179, 52, 'Jabberwocky'),
(180, 52, 'Møme'),
(181, 52, 'Etienne de Crécy Dj set'),
(182, 52, 'Imany'),
(183, 52, 'Caroline Savoie'),
(184, 52, 'Emile Bilodeau'),
(185, 53, 'Die Antwoord'),
(186, 53, 'Phoenix'),
(187, 53, 'Archive'),
(188, 53, 'Sting'),
(189, 53, 'Vianney'),
(190, 53, 'Justice'),
(191, 53, 'The Lumineers'),
(193, 54, 'Alltta'),
(194, 54, 'Deluxe'),
(195, 54, 'Feder'),
(196, 54, 'Justice'),
(197, 54, 'Manu Chao'),
(198, 54, 'La Ventura'),
(199, 54, 'Rocky'),
(200, 54, 'Die Antwoord'),
(201, 54, 'Dropkick Murphys'),
(202, 54, 'Faada Freddy'),
(203, 54, 'Kungs'),
(204, 54, 'MHD'),
(205, 54, 'Phoenix'),
(206, 54, 'Renaud'),
(207, 54, 'Songe'),
(208, 54, 'Arcade Fire'),
(209, 54, 'Clement Bazin'),
(210, 54, 'Colorado'),
(211, 54, 'Jean Michel Jarre'),
(212, 54, 'Mome'),
(213, 54, 'Acid Arab'),
(214, 54, 'Dj Snake'),
(215, 54, 'Killason'),
(216, 54, 'Macklemore&Ryan Lewis'),
(217, 54, 'Matmatah'),
(218, 54, 'Octave Noire'),
(219, 54, 'Radio Elvis'),
(221, 55, 'Dope Out'),
(222, 55, 'Solace'),
(223, 55, 'Lazy Flow'),
(224, 55, 'Naive New Beaters'),
(225, 55, 'Rover'),
(226, 55, 'Humph'),
(227, 55, 'Vincha'),
(228, 55, 'Yepa'),
(229, 55, 'Catfish'),
(230, 55, 'Jinx Fish Pool'),
(231, 55, 'No Money Kids'),
(232, 55, 'Las Aves'),
(233, 55, 'Mouss & Hakim'),
(234, 55, 'Frog & Beef'),
(235, 55, 'Killason'),
(236, 55, 'Jahneration'),
(237, 55, 'Pablo Moses'),
(238, 56, 'Manu Dibango'),
(239, 56, 'Arshid Azarine'),
(240, 56, 'Manushan'),
(241, 56, 'Akale Wube'),
(242, 56, 'Amzik'),
(243, 56, 'Girma Beyene'),
(245, 57, 'Giedre'),
(246, 57, 'Mouse Dtc'),
(247, 57, 'Paprika'),
(248, 58, 'Borgore'),
(249, 58, 'James Zabiela'),
(250, 58, 'Belga'),
(251, 58, 'Necc Party'),
(252, 58, 'Punnany Massif'),
(253, 58, 'Edo Denova'),
(254, 58, 'Kis Grofo'),
(255, 58, 'Jumodaddy'),
(256, 58, 'Lotfi Begi'),
(257, 58, 'Stereo Palm'),
(258, 58, 'Twins'),
(259, 58, 'Drop The Cheese'),
(260, 58, 'ESD'),
(261, 58, 'Marchello'),
(262, 58, 'Roberto Rios'),
(263, 58, 'DJL'),
(264, 58, 'Andre'),
(265, 58, 'James Grow'),
(266, 58, 'Yvel And Tristan'),
(268, 59, 'Basement Jaxx'),
(269, 59, 'Wilkinson'),
(270, 59, 'Hannah Wants'),
(271, 59, 'High Contrast'),
(272, 59, 'Abode'),
(273, 59, 'A Skillz'),
(274, 59, 'Bicep'),
(275, 59, 'Carnival Magnifico'),
(276, 59, 'Chinese Man'),
(277, 59, 'Dj Luck & MC Neat'),
(278, 59, 'Jax Jones'),
(279, 59, 'LFM & Mali'),
(280, 59, 'Karen Harding'),
(281, 59, 'Karma Kid'),
(282, 59, 'Norman Jay Mbe'),
(283, 59, 'Sweet Female Attitude'),
(284, 59, 'The Heat Wave'),
(285, 59, 'TQD'),
(286, 59, 'Yousef'),
(287, 59, 'Charlie Tee'),
(288, 59, 'Jack Swift'),
(289, 59, 'Fk Panda'),
(290, 59, 'Shapes'),
(291, 59, 'Sloth Boogie'),
(293, 60, 'Major Lazer'),
(294, 60, 'System Of a Down'),
(295, 60, 'RadioHead'),
(296, 60, 'Behemoth'),
(297, 60, 'VerbT'),
(298, 60, 'Four Owls'),
(299, 60, 'Fliptrix'),
(300, 60, 'BVA'),
(301, 60, 'Split Prophets'),
(302, 60, 'Mystic'),
(303, 60, 'BoneNThugs'),
(304, 60, 'Snak The Ripper'),
(305, 60, ''),
(306, 61, 'Justice'),
(307, 61, 'Mo'),
(308, 61, 'Phoenix'),
(309, 61, 'M.I.A'),
(310, 61, 'FOALS'),
(311, 61, 'Kungs'),
(312, 61, 'FFF'),
(313, 61, 'Vitalic'),
(314, 61, 'Mac Miller'),
(315, 62, 'Seth Troxler'),
(316, 62, 'Kano'),
(317, 62, 'Artwork'),
(318, 62, 'Bondax'),
(319, 62, 'Channel One'),
(320, 62, 'Dub Phizix & Strategy'),
(321, 62, 'Fred V & Grafix'),
(322, 62, 'Jackmaster'),
(323, 62, 'Metrik'),
(324, 62, 'Midland'),
(325, 62, 'My Nu Leng'),
(326, 62, 'Richy Ahmed'),
(327, 62, 'Toyboy & Robin'),
(328, 62, 'Artful Dodger'),
(329, 62, 'Bas Ibellini'),
(330, 62, 'Dynamite MC'),
(331, 62, 'MC Fava'),
(332, 62, 'Logistics'),
(333, 62, 'NU:TONE');

-- --------------------------------------------------------

--
-- Structure de la table `festival`
--

CREATE TABLE IF NOT EXISTS `festival` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_stop` datetime NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `lien` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `festival`
--

INSERT INTO `festival` (`id`, `nom`, `lieu`, `date_start`, `date_stop`, `prix`, `description`, `lien`, `password`, `img`) VALUES
(43, 'Weather Winter', 'paris', '2016-12-17 20:00:00', '2016-12-18 20:00:00', 35, 'Le Weather Festival est un événement dédié à la musique électronique dans toutes ses composantes (techno, house, etc.)', 'http://www.weatherfestival.fr/fr', '795d3fe130df3a2b2e88946435d0aff66ebd52dc', 'winter.jpg'),
(44, 'Dantesk!', 'lyon', '2016-12-17 21:30:00', '2016-12-18 05:30:00', 25, 'Pour la grande cérémonie des musiques électroniques, le collectif vous immergera dans un univers parallèle...', 'http://dantesk.fr/', 'd73b3dfda827256235d5fbedd6a9f4f7b25708ba', 'dantesk.jpg'),
(45, 'Garosnow', 'les angles', '2017-01-06 15:30:00', '2017-03-11 05:30:00', 40, 'variée allant du reggae à l''électro en passant par des sonorités pop ou encore hip-hop.', 'http://www.lesangles.com/fr/garosnow-2017', 'e11f57b302327389b0977ccea0c860b29beeea22', 'garosnow.jpg'),
(46, 'Rock the pistes', 'châtel', '2017-03-19 20:30:00', '2017-03-25 23:59:00', 73, 'Une semaine de musique qui offre aux skieurs de pures sensations de glisse et de son !', 'http://en.rockthepistes.com/', 'f112096355249e38136888dc61e1dee3c51d8d92', 'rockpistes.jpg'),
(47, 'Scred Festival', 'paris', '2017-01-14 19:00:00', '2017-01-15 23:00:00', 25, 'Jamais dans la tendance mais toujours dans la bonne direction...', 'https://scredconnexion.com/news/', '236917a8bd4ae0b2ea21e5081ae50f1ed3e80403', 'scred.jpg'),
(48, 'Download Festival Paris', 'paris', '2017-06-09 12:00:00', '2017-06-11 05:00:00', 69, 'Bonne nouvelle pour tous les amateurs de rock, métal, heavy ou encore hard puisque le Download Festival revient à Paris en 2017.', 'http://www.downloadfestival.fr/', 'fdabef25879875de5865c770cc08dc0ee6a95350', 'download.jpg'),
(49, 'Hellfest', 'clisson', '2017-06-16 15:00:00', '2017-06-18 00:00:00', 324, 'Le Hellfest, également appelé Hellfest Summer Open Air, est un festival de musique français ', 'http://www.hellfest.fr/', 'd87c8ac81339d3131c297e3f3dc0f2ea8a599808', 'hellfest.jpg'),
(50, 'Les Nuits de l''Alligator', 'paris', '2017-02-09 00:00:00', '2017-02-10 00:00:00', 45, 'Comme chaque année en février, des effluves remontent du bayou, les lentilles d’eau ondulent, la brume est traversée par quelques rais de lune.', 'https://www.nuitsdelalligator.com/', 'eda2dbe607e4838255bb1832630c46f13b78689d', 'alligator.jpg'),
(51, 'Festival Du Bleu en hiver', 'tulles', '2017-01-19 20:00:00', '2017-01-21 23:59:00', 35, 'Pour sa douzième saison hivernale le festival de Jazz''s Du Bleu vous propose, comme lors des précédentes éditions, une programmation de grande qualité.', 'http://dubleuenhiver.com/', '3af0a94f6ade903d85fe49625d5946dd0abeae35', 'bleuhiver.jpg'),
(52, 'Les Ptits Bouchons', 'gaillac', '2017-03-30 15:30:00', '2013-04-02 22:00:00', 25, 'Tout le programme et les infos du Festival Les Ptis Bouchons du 30 Mars au 02 Avril ', 'http://www.lesptitsbouchons.net/', '0485d74aa4612c6db6088c296340325b6a744713', 'bouchons.jpg'),
(53, 'Musilac', 'aix-les-bains', '2017-07-13 15:00:00', '2017-07-16 00:00:00', 189, 'Pour fêter nos 15 ans, nous vous rappelons que le festival durera exceptionnellement 4 jours les 13, 14, 15 et 16  juillet 2017.', 'http://www.musilac.com/', '9eee6ab833d56e088afb36667492646f4298fb1e', 'musilac.jpg'),
(54, 'Festival Des Vieilles Charrues', 'carhaix-plouguer', '2017-07-14 16:00:00', '2017-07-16 23:00:00', 44, 'Le festival est organisé par l''association Les Vieilles Charrues, structure qui reverse une partie des bénéfices pour le développement du tissu associatif et culturel du centre Bretagne.', 'http://lesvieillescharrues.fr/', 'fa3b710a04fb71320612579325556c78a4a6c349', 'charrues.png'),
(55, 'Festival Träce', 'saint-cloud', '2017-01-06 20:30:00', '2017-02-05 00:00:00', 35, 'Le Festival Träce est de retour pour une 17e édition ! Comme chaque année, il met à l’honneur une sélection de découvertes musicales du 92 qui se produisent en première partie de têtes d’affiches.', 'http://festivaltrace.com/', '8d0319fec581885a4c7699664da1ee54d559799c', 'trace.jpg'),
(56, 'Festival Au Fil des Voix', 'paris', '2017-01-16 20:30:00', '2017-01-19 00:00:00', 25, 'Le Festival "Au fil des Voix", célèbre sa dixième édition. Dix ans de rencontres, de partage et de dialogue, de révélations étonnantes et d''inspirations multiples entre des cultures issus de tous les horizons.', 'http://www.aufildesvoix.com/', 'cde3aa25e0a3a631bc03da7f6b0e07ae887c91c8', 'fildesvoix.png'),
(57, 'Les Rockeurs Ont du Coeur', 'alsace', '2016-12-17 20:00:00', '2016-12-18 00:00:00', 0, 'Véritable institution à la Grange à Musique en partenariat avec le Secours Populaire Français, les Rockeurs Ont Du Cœur est LE rendez-vous incontournable pour fêter la fin de l’année de la meilleure manière qu’il soit. Depuis sa création, le principe reste inchangé : pour entrer il suffit d’amener un jouet neuf au père Noël vert du Secours Populaire', 'http://www.lesrockeurs.com/', 'e50271c83cff9adc7de48ebe6faa10b3e9c2604b', 'rockeurcoeur.jpg'),
(58, 'Snowattack 2017', 'les orres', '2017-01-28 19:00:00', '2017-02-05 00:00:00', 89, 'Notre société, Meex, a été fondée en 2005 suite à une discussion commencée dans un dortoir universitaire. Durant les dix dernières années, nous avons accueilli de nouveaux collègues et agrandit la liste de nos événements qui ont commencé par une simple fête d’entreprise au ski. L’intégration de Meex au Sziget 2012 nous a poussé à réfléchir et à offrir de nouveaux programmes et expériences pour les jeunes festivaliers. Parmi nos partenaires, nous avons la chance de pouvoir compter Microsoft, Vodafone, Asus et beaucoup d’autres entreprises internationales.', 'http://snowattack.com/fr', 'b9308a3c72d5d564c2ace085acc646b43e2f84b7', 'snowattack.png'),
(59, 'Snowboxx', 'avoriaz', '2017-03-18 20:00:00', '2017-03-26 00:00:00', 70, 'Snowboxx Festival 2017 is set to be the greatest festival the alps has to offer! A full week of massive music headliners in the Snowboxx Festival Village.', 'http://www.snowboxx.com/', '16009cdce872bfa8168bae05630497457a1a14d7', 'snowboxx.jpg'),
(60, 'Main Square Festival', 'arras', '2017-06-30 20:00:00', '2017-07-03 05:00:00', 54, 'L''un des plus beaux festivals en Europe qui se déroule ... à nouveau avec le Main Square Festival et a le plaisir de vous présenter en exclusivité ... Live Nation France Festivals contact@mainsquarefestival.fr.', 'http://mainsquarefestival.fr/', '70ed573678102e0af3cd9d25af10e31bb7627a0c', 'mainsquare.jpg'),
(61, 'GAROROCK 21', 'marmande', '2017-06-30 20:00:00', '2016-07-02 00:00:00', 110, 'Du 30 juin au 2 juillet 2017, rendez-vous à Marmande pour la 21ème édition du festival Garorock. Cet évènement culturel est le plus grand rendez-vous rock.', 'http://www.garorock.com/', '018621ce83f2a80ecb7015c5fd9fecfe5b08e79a', 'garorock.jpg'),
(62, 'Rise Festival', 'les 2 alpes', '2016-12-10 18:00:00', '2016-12-17 22:00:00', 230, 'Rise festival : Les 2 Alpes, L'' aventure vous attend : une semaine de neige et musique dans les Alpes françaises.', 'http://risefestival.com/', '29e33ad8028c0a84d1c8fd6140b7707e7a81cadc', 'rise.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `festyle`
--

CREATE TABLE IF NOT EXISTS `festyle` (
`id` int(11) NOT NULL,
  `festival_id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `festyle`
--

INSERT INTO `festyle` (`id`, `festival_id`, `style_id`) VALUES
(38, 43, 23),
(39, 43, 31),
(40, 44, 21),
(41, 44, 31),
(42, 45, 21),
(43, 45, 28),
(44, 46, 29),
(45, 47, 22),
(46, 47, 27),
(47, 47, 30),
(48, 48, 25),
(49, 49, 25),
(50, 49, 29),
(51, 50, 18),
(52, 50, 24),
(53, 50, 25),
(54, 50, 28),
(55, 50, 29),
(56, 51, 22),
(57, 51, 24),
(58, 52, 22),
(59, 52, 30),
(60, 53, 26),
(61, 53, 29),
(62, 53, 31),
(63, 54, 21),
(64, 54, 26),
(65, 54, 27),
(66, 54, 29),
(67, 54, 31),
(68, 55, 26),
(69, 55, 27),
(70, 55, 29),
(71, 55, 30),
(72, 56, 24),
(73, 56, 26),
(74, 56, 29),
(75, 56, 30),
(76, 57, 29),
(77, 58, 20),
(78, 58, 21),
(79, 58, 23),
(80, 58, 28),
(81, 58, 31),
(82, 59, 21),
(83, 59, 23),
(84, 59, 27),
(85, 59, 31),
(86, 60, 20),
(87, 60, 21),
(88, 60, 25),
(89, 60, 27),
(90, 61, 21),
(91, 61, 27),
(92, 61, 29),
(93, 61, 31),
(94, 62, 20),
(95, 62, 21),
(96, 62, 22),
(97, 62, 26),
(98, 62, 27),
(99, 62, 30);

-- --------------------------------------------------------

--
-- Structure de la table `style`
--

CREATE TABLE IF NOT EXISTS `style` (
`id` int(11) NOT NULL,
  `nom` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `style`
--

INSERT INTO `style` (`id`, `nom`) VALUES
(18, 'blues'),
(19, 'disco'),
(20, 'dub'),
(21, 'electro'),
(22, 'funk'),
(23, 'house'),
(24, 'jazz'),
(25, 'metal'),
(26, 'pop'),
(27, 'rap'),
(28, 'reggae'),
(29, 'rock'),
(30, 'soul'),
(31, 'techno');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `festival`
--
ALTER TABLE `festival`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `festyle`
--
ALTER TABLE `festyle`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `style`
--
ALTER TABLE `style`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `artiste`
--
ALTER TABLE `artiste`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=365;
--
-- AUTO_INCREMENT pour la table `festival`
--
ALTER TABLE `festival`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT pour la table `festyle`
--
ALTER TABLE `festyle`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT pour la table `style`
--
ALTER TABLE `style`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
