-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 oct. 2020 à 14:59
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `runware`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCat` int NOT NULL AUTO_INCREMENT,
  `nomCateg` varchar(100) NOT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCat`, `nomCateg`) VALUES
(1, 'Processeur'),
(2, 'Carte Graphique'),
(4, 'OS'),
(5, 'Clavier'),
(6, 'Souris'),
(7, 'Mémoire'),
(8, 'Carte Mère'),
(9, 'Alimentation'),
(10, 'Affichage'),
(11, 'Connectique'),
(12, 'Stockage HDD'),
(13, 'Stockage SSD');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommnd` int NOT NULL AUTO_INCREMENT,
  `idProd` int NOT NULL,
  `dateCommnd` date NOT NULL,
  PRIMARY KEY (`idCommnd`),
  KEY `idProd` (`idProd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idCont` int NOT NULL AUTO_INCREMENT,
  `idUtil` int NOT NULL,
  `msgCont` varchar(75) NOT NULL,
  PRIMARY KEY (`idCont`),
  KEY `idUtil` (`idUtil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProd` int NOT NULL AUTO_INCREMENT,
  `idCat` int NOT NULL,
  `nomProd` varchar(50) NOT NULL,
  `prixProd` float NOT NULL,
  `descProd` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imgProd` varchar(50) NOT NULL,
  PRIMARY KEY (`idProd`),
  KEY `idCat` (`idCat`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProd`, `idCat`, `nomProd`, `prixProd`, `descProd`, `imgProd`) VALUES
(1, 1, 'AMD Athlon 240GE (3.5 GHz)', 76.99, 'AMD décline sa série de processeur AMD Athlon avec coeur graphique Radeon Vega avec le MAD Athlon 240GE. Ce processeur d\'entrée de gamme propose des performances avancées, une grande réactivité ainsi que des coeurs graphiques : l\'essentiel pour vous monter une configuration polyvalente !', '../photos/AMDAthlon240GE(3.5GHz).jpg'),
(2, 2, 'Gigabyte GeForce GTX 1650 D6 WINDFORCE OC', 179.96, ' La carte graphique Gigabyte GeForce GTX 1650 D6 WINDFORCE OC dotée de l\'architecture Turing se place comme remplaçante idéale de votre ancienne carte graphique. Derrière cette dénomination, profitez des performances de la nouvelle architecture de Nvidia ainsi que du passage à la mémoire GDDR6. La GTX 1650 sera votre meilleure alliée si vous cherchez à renouveler votre matériel gaming ou même à vous acheter votre première carte dédiée aux jeux vidéos.', '../photos/geforcegtx1650.jpg'),
(3, 8, 'MSI A320M A-PRO MAX', 60.94, 'Les cartes mères MSI de série PRO sont pensées pour intégrer tous les PC. Elles sont conçues pour accueillir les processeurs AMD Ryzen et AMD Athlon sur socket AMD AM4 et pour offrir des performances fiables et des solutions professionnelles intelligentes qui vous rendront le travail plus facile. Grâce à ce modèle MAX, plus besoin de s\'inquiéter des questions de compatibilité ou de mise à jour de BIOS, elles sont directement compatibles pour toutes les générations de processeurs Ryzen y compris ', '../photos/msi_a320m.jpg'),
(4, 8, 'Asus PRIME H410M-A', 91.94, 'Les cartes mères de la série Prime 400 sont une base solide pour votre premier montage PC. De plus, leur flexibilité grandira avec vos ambitions ! L\'équipe d\'ingénieurs d\'Asus a combiné tous les points forts des derniers processeurs Intel Core de 10ème génération, avec le design et la signature ASUS : profitez des meilleures technologies du marché dont l\'utilitaire de réglages automatiques, les contrôles complets du refroidissement et l\'audio immersif intégré. Montez votre PC en toute simplicité', '../photos/AsusH410M-A.jpg'),
(5, 4, 'Microsoft Windows 10 Home 32/64 bits - Version clé', 162.95, 'Microsoft revient avec une mise à jour de son OS phare avec plus de fonctionnalités, une plus grande personnalisation et de nouvelles applications, le tout pour améliorer l\'expérience Windows ! Windows 10 apporte toute la simplicité d\'utilisation qu\'on lui souhaitait avec un menu Démarrer de retour et amélioré.', '../photos/win10.jpg'),
(6, 12, 'Seagate BarraCuda - 2 To - 256 Mo', 69.96, 'Tirez le meilleur profit de votre stockage avec les disques durs BarraCuda de Seagate. Que vous souhaitiez conserver vos innombrables photos et souvenirs ou augmenter la capacité de votre PC de jeu, les disques BarraCuda évoluent avec vous.', '../photos/hdd2to.jpg'),
(7, 12, 'Western Digital WD Blue - 1 To - 64 Mo', 47.95, 'Avec le Western Digital WD Blue choisissez la capacité vous permettant d\'organiser et gérer vos données. Stockez y votre bibliothèque de jeux vidéo ou vos fichiers multimédias et vidéos ultra haute définition 4K. Avec le logiciel Acronis True Image WD Edition et la technologie NoTouch, le WD Blue est idéal pour les utilisateurs à la recherche du bon rapport qualité/prix.', '../photos/hdd1to.jpg'),
(8, 13, 'Kingston A400 - 240 Go', 43.95, 'Le disque SSD A400 Kingston améliore considérablement la réactivité de votre système actuel avec des vitesses de démarrage, de chargement et de transfert par rapport aux disques durs mécaniques. Animé par un contrôleur de la dernière génération offrant des vitesses de lecture et d\'écriture allant jusqu\'à 500 Mo/s et 350 Mo/s, ce SSD est dix fois plus rapide qu\'un disque dur1 traditionnel et offre des performances plus élevées, un multi-tasking ultra réactif, et accélère l\'ensemble du système.', '../photos/ssd240.jpg'),
(9, 13, 'Crucial BX500 - 480 Go', 69.95, 'Le Disque SSD Crucial BX500 incarne parfaitement tout le savoir-faire de Crucial. La version 480 Go (CT480BX500SSD1) sera le compagnon idéal de votre ordinateur en recherche de stockage rapide, pour augmenter la vitesse de démarrage de votre ordinateur ou de vos jeux et applications préférées. Il optimisera l\'autonomie de la batterie grâce à une efficacité énergétique 45 fois supérieure à celle d\'un disque dur classique tout en améliorant la réactivité globale du système.', '../photos/ssd480.jpg'),
(10, 9, 'Aerocool LUX 550', 44.94, 'Aerocool étend son offre sur les composants avec de nouveaux blocs d\'alimentation de 550 à 750W LUX RGB : des alimentations pour PC performantes au format ATX pour votre configuration gaming. Aeroccol décroche le label 80 PLUS Bronze avec cette série d\'alimentations semi-modulaires ce qui vous assure un taux de charge efficient de 82%.', '../photos/aerocoolLUX550.jpg'),
(11, 9, 'Corsair AX850 - 850W Titanium', 286.98, 'Corsair fait évoluer sa gamme d\'alimentations références vers de nouvelles puissances. Les blocs Corsair AX développent un rendement encore meilleur, dans une qualité de fabrication et une modularité maximale. Une performance éco-énergétique haut de gamme dédiée aux configurations avancées à une puissance exceptionnelle.', '../photos/corsairAX850.jpg'),
(12, 2, 'EVGA GeForce GTX 1660 Super SC Ultra', 248.51, 'Préparez votre configuration PC gamer à accueillir la carte graphique EVGA GeForce GTX 1660 Super SC Ultra (06G-P4-1068-KR) ! Misant sur des performances en hausse par rapport à la 1660 grâce à 6 Go de mémoire GDDR6, elle compte également sur la nouvelle architecture NVIDIA et ses shaders Turing pour proposer une expérience de jeu Full HD / 1080p des plus confortable et à prix accessible.', '../photos/gtx1660.jpg'),
(13, 1, 'Intel Core i5 10400F', 184.94, 'Intel introduit ses processeurs 10ème génération avec le Core i5 10400F, destiné aux usages multimedia et au jeu vidéo avec comme principales caractéristiques : un boost de fréquence et du nombre de coeurs (6 coeurs/ 12 threads) ainsi que le retour de l\'Hyper- Threading. Que vous soyez gamer ou créateur de contenu multimedia, la performance et au rendez-vous !', '../photos/corei5.jpg'),
(14, 7, 'G.Skill Aegis DDR4 2 x 8 Go 3200 MHz CAS 16', 78.95, 'G.Skill s\'est taillé une réputation qui n\'a rien à envier à celle de Corsair, Kingston ou Crucial. Marque renommée dans l\'univers du gaming, G.SKILL a développée des modules DDR4 Aegis d\'une fiabilité incroyable, avec une garantie à vie, et qui offrent des performances de haute volée - en vitesse et en consommation - supérieures à la DDR3. Pour tirer le meilleur parti de votre processeur, rejoignez les adeptes de la marque G.Skill.', '../photos/gskillDDR4.jpg'),
(15, 7, 'Corsair Vengeance LPX Black DDR4 2 x 16 Go 3200 MH', 156.95, 'Corsair ne s\'est pas fait attendre avant de sortir ses premiers kits de mémoire DDR4 ! Découvrez la série Vengeance LPX qui vous offre plus de réactivité que la DDR3 ainsi que des performances excellentes sur le long terme, grâce notamment à une conception qui favorise le refroidissement du PCB.', '../photos/corsairvengeance.jpg'),
(16, 5, 'Cherry Strait 3.0 - Argent', 32.96, 'Offrez-vous un véritable \"bijou de bureau\", avec le Strait Corded Keyboard, clavier filaire aux lignes épurées, soulignées par le jeu de couleurs entre l\'armature argentée et ses touches blanches. Ce design ultra-plat lui assure une frappe à \"effet de chuchotement\", ultra silencieuse, qui vous permet de l\'utiliser dans tous les environnements. Parmi ses touches offrant une résistance accrue aux éclaboussures, vous pourrez, enfin, compter 5 raccourcis dédiées à la commande de Mediaplayer.', '../photos/cherrystrait.jpg'),
(17, 5, 'Logitech K360', 40.45, 'Comme son nom l\'indique, le Compact Keyboard K360 est compact ! Grâce à sa petite taille et sa ligne ultra fine, vous pouvez l\'emmener partout avec vous... Il se glisse parfaitement dans une sacoche d\'ordinateur portable par exemple ! Compact oui, mais il ne laisse pas le confort de côté, il dispose en effet d\'un pavé numérique ainsi que de touches de taille normale, silencieuses par ailleurs grâce à leur format ultra-plat. Avec 6 touches de raccourci et 12 touches de fonctions programmables pou', '../photos/logitechssfil.jpg'),
(18, 5, 'Cooler Master CK550 - Gateron Red', 70.95, 'Le clavier Cooler Master CK550 est de type mécanique avec une finition en aluminium et un rétro-éclairage RGB. Ses options de personnalisation et l\'intégration d\'interrupteurs Red de la marque Gateron sont des arguments de poids !', '../photos/coolermasterCK550.jpg'),
(19, 6, 'Microsoft Bluetooth Mouse - Noir', 21.98, 'La souris Microsoft Bluetooth Mouse est une souris de bureautique transportable partout avec vous, intégrant le confort du sans-fil grâce à sa connexion en Bluetooth. Son capteur vous apportera un suivi fluide sur la plupart des surfaces, pour un gain de productivité non-négligeable !', '../photos/microsoftmouse.jpg'),
(20, 6, 'Logitech MX Master 3 - Graphite', 98.94, 'Fleuron de la gamme bureautique de souris Logitech, la MX Master 3 est une souris sans-fil étudiée spécifiquement pour le confort au travail ainsi que la productivité. En témoigne sa forme ergonomique ainsi que la présence de deux molettes de défilement !', '../photos/logitechmxmaster.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtil` int NOT NULL AUTO_INCREMENT,
  `idCommnd` int NOT NULL,
  `civiliteUtil` char(1) NOT NULL,
  `pseudUtil` varchar(30) NOT NULL,
  `mdpUtil` varchar(30) NOT NULL,
  `nomUtil` varchar(25) NOT NULL,
  `pnomUtil` varchar(25) NOT NULL,
  `naissUtil` date NOT NULL,
  `mailUtil` varchar(30) NOT NULL,
  `numUtil` int NOT NULL,
  `addrFactUtil` varchar(30) NOT NULL,
  `addrLivrUtil` varchar(30) NOT NULL,
  PRIMARY KEY (`idUtil`),
  KEY `idCommnd` (`idCommnd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `produit` (`idProd`);

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`idUtil`) REFERENCES `utilisateur` (`idUtil`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `categorie` (`idCat`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`idCommnd`) REFERENCES `commande` (`idCommnd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
