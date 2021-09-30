# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.01 (MySQL 5.7.35)
# Database: diana-collection
# Generation Time: 2021-09-30 10:09:26 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table steeldrums
# ------------------------------------------------------------

DROP TABLE IF EXISTS `steeldrums`;

CREATE TABLE `steeldrums` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `manufacturer` varchar(255) NOT NULL DEFAULT '',
  `inches` int(11) NOT NULL,
  `notes` int(4) NOT NULL,
  `color` varchar(255) NOT NULL DEFAULT '',
  `cost` decimal(11,2) NOT NULL,
  `img-url` varchar(225) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `steeldrums` WRITE;
/*!40000 ALTER TABLE `steeldrums` DISABLE KEYS */;

INSERT INTO `steeldrums` (`id`, `name`, `manufacturer`, `inches`, `notes`, `color`, `cost`, `img-url`)
VALUES
	(1,'Hang Drum','PanArt',20,8,'Blue/Black',15000.00,'PANART1.png'),
	(2,'Tongue Drum','DEECOZY',6,8,'Moss Blue',21.99,'TONGUE.png'),
	(3,'Romanian Hijaz','Meridian',21,10,'Brass',1165.00,'MERIDIAN.png'),
	(4,'Harmonic Handpan','Vevor',22,9,'Dark Brown',385.99,'VEVOR.png'),
	(5,'AS Handpan','CGDX',22,13,'Blue',5221.99,'ASHANDPAN.png'),
	(6,'Tank Drum','Bubbhatankdrums',8,10,'Heated Gold',117.92,'TANK.png');

/*!40000 ALTER TABLE `steeldrums` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
