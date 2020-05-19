# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: ecrm_database
# Generation Time: 2020-05-19 15:57:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reference` varchar(20) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `statut` tinyint(4) DEFAULT '1',
  `user_creation` int(11) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `ip_creation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;

INSERT INTO `clients` (`id`, `reference`, `client`, `telephone`, `mail`, `statut`, `user_creation`, `date_creation`, `ip_creation`)
VALUES
	(1,'CLI20200507203552','AKILI4DEV','08550777','diomandekevin@yahoo.fr',0,1,'2020-05-07 20:35:52','127.0.0.1'),
	(2,NULL,'TEST',NULL,NULL,1,NULL,NULL,NULL);

/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table clients_formules
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients_formules`;

CREATE TABLE `clients_formules` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reference` varchar(20) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_formule` int(11) DEFAULT NULL,
  `statut` tinyint(4) DEFAULT '0',
  `mode` varchar(5) DEFAULT 'APP',
  `date_creation` datetime DEFAULT NULL,
  `user_creation` int(11) DEFAULT NULL,
  `ip_creation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `clients_formules` WRITE;
/*!40000 ALTER TABLE `clients_formules` DISABLE KEYS */;

INSERT INTO `clients_formules` (`id`, `reference`, `id_client`, `id_formule`, `statut`, `mode`, `date_creation`, `user_creation`, `ip_creation`)
VALUES
	(1,'REG20200507203647',1,2,0,'APP','2020-05-07 20:36:47',1,'127.0.0.1');

/*!40000 ALTER TABLE `clients_formules` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table formules
# ------------------------------------------------------------

DROP TABLE IF EXISTS `formules`;

CREATE TABLE `formules` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `formule` varchar(50) DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
