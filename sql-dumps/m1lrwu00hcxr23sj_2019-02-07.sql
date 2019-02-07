# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: gi6kn64hu98hy0b6.chr7pe7iynqr.eu-west-1.rds.amazonaws.com (MySQL 5.7.23-log)
# Datenbank: m1lrwu00hcxr23sj
# Erstellt am: 2019-02-07 05:22:44 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle bodyparts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bodyparts`;

CREATE TABLE `bodyparts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

LOCK TABLES `bodyparts` WRITE;
/*!40000 ALTER TABLE `bodyparts` DISABLE KEYS */;

INSERT INTO `bodyparts` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`)
VALUES
	(1,'ears','2018-12-27 16:55:03',1,'2019-02-04 17:32:58',1),
	(2,'eyes','2018-12-27 16:55:03',NULL,NULL,NULL),
	(3,'nose','2018-12-27 16:55:03',NULL,NULL,NULL),
	(4,'mouth','2018-12-27 16:55:03',NULL,NULL,NULL),
	(5,'tail','2018-12-27 16:55:03',NULL,NULL,NULL),
	(6,'shoes','2018-12-27 16:55:03',1,'2019-02-03 17:31:33',1);

/*!40000 ALTER TABLE `bodyparts` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle bricks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bricks`;

CREATE TABLE `bricks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bodyparts_id` int(11) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `file` mediumblob,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bricks_bodyparts` (`bodyparts_id`),
  CONSTRAINT `fk_bricks_bodyparts` FOREIGN KEY (`bodyparts_id`) REFERENCES `bodyparts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

LOCK TABLES `bricks` WRITE;
/*!40000 ALTER TABLE `bricks` DISABLE KEYS */;

INSERT INTO `bricks` (`id`, `bodyparts_id`, `name`, `file`, `created_at`, `created_by`, `updated_at`, `updated_by`)
VALUES
	(1,6,'standard',X'75706C6F6164732F4542586F71574246304C683354416B656E5A3463585332457979644630325A6262463862466745352E706E67','2018-12-28 08:47:53',3,'2019-02-06 12:28:34',1),
	(2,2,'standard',X'75706C6F6164732F4D45537A4130476F726836736C377663374E7745767A3356774F697171556752556A35544F704E6A2E706E67','2018-12-29 09:21:53',1,'2019-02-05 08:34:43',1),
	(3,3,'standard',X'75706C6F6164732F6F674D686A6A56754865385463564F7454527469397A63374B62326C6148374474635732546B63572E706E67','2018-12-29 09:23:43',NULL,'2019-02-05 11:15:13',1),
	(6,4,'standard',X'75706C6F6164732F376C6C7449506430526A6F5159654B6F736575633852753454795954713479754A6A6E47764934382E706E67','2018-12-31 08:46:05',NULL,'2019-02-05 11:15:26',1),
	(7,1,'standard',X'75706C6F6164732F61774F38794F30575A653347576B63565755776D3656316941426E4C594558704B3234614F4F53722E706E67','2019-01-02 09:39:47',NULL,'2019-01-02 09:39:47',1),
	(8,5,'standard',X'75706C6F6164732F6936364B6B375335756C6E627A4D4A3576346533713151395A37747865777568594B7765365558382E706E67','2019-01-02 09:41:27',NULL,'2019-02-05 11:15:42',1),
	(11,2,'glasses',X'75706C6F6164732F63714E6846624835436A6D6E4C644E426F6D3970734F69686A573665436C4E51586D4E6230764B502E706E67','2019-01-09 06:18:37',NULL,'2019-02-05 08:46:35',1),
	(13,1,'flipped',X'75706C6F6164732F61774F38794F30575A653347576B63565755776D3656316941426E4C594558704B3234614F4F53722E706E67','2019-01-24 17:29:07',NULL,'2019-02-06 09:40:12',1),
	(14,3,'clown',X'75706C6F6164732F71756B594B424E554839554464634B596A54673469495370676F79496B5435487164794F437138592E706E67','2019-01-24 17:38:44',NULL,'2019-02-05 11:15:55',1),
	(15,4,'tongue',X'75706C6F6164732F6A443871764D6C4643353873584D626B395359474C34366F5A5853306C444A31504448496D3030322E706E67','2019-01-24 18:08:03',NULL,'2019-02-05 11:16:17',1),
	(16,5,'dragon',X'75706C6F6164732F3944646B384D454D675634424957395A7864484D476C363669366C4351664158756D476C4B784B682E706E67','2019-01-24 18:08:16',NULL,'2019-02-05 11:16:28',1),
	(17,6,'special',X'75706C6F6164732F6E736B4F586C3047746568316957435935716C5968484E665839494D5A4D46364E595862543144472E706E67','2019-01-24 18:08:29',NULL,'2019-02-05 11:16:45',1),
	(18,1,'bunny',X'75706C6F6164732F736579674976654765783541335176337831425A3864547970354C5965376F63326A6F344B4B42372E706E67','2019-01-26 08:08:26',2,'2019-02-05 08:12:59',1),
	(19,2,'pirat',X'75706C6F6164732F47354E4D4F316D5932495752376536424F49375A73414462516A55744F4E4549644330444B4650412E706E67','2019-01-26 10:07:31',2,'2019-02-05 08:47:53',1),
	(20,2,'funky',X'75706C6F6164732F63714E6846624835436A6D6E4C644E426F6D3970734F69686A573665436C4E51586D4E6230764B502E706E67','2019-01-26 10:10:32',2,'2019-02-05 08:48:39',1),
	(21,4,'vampire',X'75706C6F6164732F71504A33394C52735235394155647073766A71443374656D4449537957544E33393248784E4162592E706E67','2019-01-28 08:58:15',NULL,'2019-02-05 11:17:08',1),
	(22,6,'spikes',X'75706C6F6164732F597534454135366252634257484144306B4D5A473172504D7073385A72584A4158516B4B58686F542E706E67','2019-01-28 09:52:38',NULL,'2019-02-05 11:17:24',1),
	(23,3,'pig',X'75706C6F6164732F4C47425663464C4A48376F503257476D5446696E46557269306378544858414F49304B4A6C6857342E706E67','2019-01-28 10:28:01',NULL,'2019-02-05 11:17:39',1),
	(24,5,'pig',X'75706C6F6164732F4E6551707A4D634748676971715A464F546E69644E6B7371674B7069433642435446557A7938786F2E706E67','2019-01-28 10:49:00',NULL,'2019-02-05 11:17:52',1),
	(25,3,'elephant',X'75706C6F6164732F624B36574E304F6B634B303343717335387545326F7A50626E6E63434934313162324438706E39342E706E67','2019-01-28 14:46:09',NULL,'2019-02-05 11:18:32',1),
	(26,6,'black',X'75706C6F6164732F395A3932735947394C39597041647063494E31517162614C5832496B6938305945774F39414D70432E706E67','2019-01-29 14:59:36',1,'2019-02-05 11:18:53',1);

/*!40000 ALTER TABLE `bricks` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle eyes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `eyes`;

CREATE TABLE `eyes` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Export von Tabelle migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle mouths
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mouths`;

CREATE TABLE `mouths` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Export von Tabelle noses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `noses`;

CREATE TABLE `noses` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Export von Tabelle orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) unsigned NOT NULL,
  `ears_id` int(11) unsigned NOT NULL,
  `eyes_id` int(11) unsigned NOT NULL,
  `noses_id` int(11) unsigned NOT NULL,
  `mouths_id` int(11) unsigned NOT NULL,
  `tails_id` int(11) unsigned NOT NULL,
  `shoes_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_users` (`users_id`),
  CONSTRAINT `fk_orders_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;

INSERT INTO `orders` (`id`, `users_id`, `ears_id`, `eyes_id`, `noses_id`, `mouths_id`, `tails_id`, `shoes_id`, `created_at`, `created_by`, `updated_at`, `updated_by`)
VALUES
	(1,1,18,11,25,21,16,17,'2019-02-01 17:29:29',1,'2019-02-04 17:32:43',1),
	(2,3,13,11,14,21,16,22,'2019-02-01 17:32:00',1,'2019-02-04 17:34:41',1),
	(3,2,7,19,14,15,24,17,'2019-02-03 17:33:19',1,'2019-02-03 17:33:19',2),
	(4,1,7,2,14,6,8,1,'2019-02-06 22:17:46',NULL,'2019-02-06 22:17:46',NULL),
	(5,2,7,20,14,21,16,26,'2019-02-07 04:24:41',NULL,'2019-02-07 04:24:41',NULL),
	(6,3,7,2,3,6,8,1,'2019-02-07 05:07:46',NULL,'2019-02-07 05:07:46',NULL);

/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Export von Tabelle shoes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shoes`;

CREATE TABLE `shoes` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Export von Tabelle tails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tails`;

CREATE TABLE `tails` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Export von Tabelle users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `number` int(11) NOT NULL,
  `zip` int(11) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_group` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `street`, `number`, `zip`, `city`, `country`, `user_group`)
VALUES
	(1,'niklas','niklas@sae.at',NULL,'$2y$10$DVjH.A9jqNLu975IoCyzSOTvFA9Tj8qw3I3vCLtMa89ymAv7SvZOW','ovudqXWs1eoUnGDoSk9hLsi0KEWknst4XoNgxKsOPlL66FFkEeTHj9US2y0H','2018-12-15 16:18:02','2019-02-06 12:30:05','manulstreet',14,1030,'wien','austria',1),
	(2,'niki','niki@sae.at',NULL,'$2y$10$4yOxyYVpKzqvi0LF5LAwIemEdTNzmmGmQ2L2fjLegDot8U3hv7n7u','mU3CcJhUiIAlF6hnFcWNq6S0jrgX9xhw0CpfiCITnF4iKnlX1imD34vf5Wgh','2018-12-18 09:36:43','2019-02-07 04:24:22','Rennweg',57,1030,'Wien','Austria',NULL),
	(3,'Otocolobus','manul@email.com',NULL,'$2y$10$uaU.fksZWtrYAOjApyTRzOJho2GKGXjOiShHeZuGGapmgVGUN86.a','qBiFg9aCSFlNlSKmk8PRd9w4Q4Nowq3JbpxYXEr74HQaDrsrLYICxWAfk3AV','2018-12-18 10:39:29','2019-02-07 05:07:42','Manulstreet',14,5204,'Otocolocity','Austria',NULL),
	(4,'root','root@root.at',NULL,'$2y$10$M2MAMwRofK2TIXVr6FWT1.Ha6Qq3cv1DqQC216OqRh7VC9jyAM3yC','VLp9hIAtujSDdD1MrHn2tA3sytmAFq9T5ovogaQL7jQ3O97boDH51czRmxdB','2018-12-20 16:13:20','2018-12-20 16:13:20','',0,0,'','',NULL),
	(10,'niki','niki.maurer@sae.at',NULL,'$2y$10$XYhT84frXDWpy8dc5h5ON.fVZjhrTCNLzHtBG9w12HYxRZsH.xoN6',NULL,'2019-02-01 13:02:54','2019-02-01 13:02:54','test',0,0,'test','test',NULL),
	(14,'niki','test@sae.at',NULL,'$2y$10$iiZYaMjOs19v1QbMGwfl4.e4RFxIC6FLKF.FnVmhwZOfOUhQwhOxq',NULL,'2019-02-01 13:06:36','2019-02-01 13:06:36','test',0,0,'test','test',NULL),
	(15,'Niklas Maurer','ma123x@max.at',NULL,'$2y$10$/oIJ/K74P75ScYpUMif5kuGmNPAUIb7AexrjCn3Y5a8EJGlEG389S',NULL,'2019-02-01 13:12:12','2019-02-01 13:12:12','Rennweg, 57',0,1030,'Wien','Österreich',NULL),
	(16,'benutzer','benutzer@email.at',NULL,'$2y$10$pOXNhhbK1tmRoQ9lOoWn4ucA4Vtp1VoXSQEsC9qeX052JN1zG28qm','aus2QI2g9qjetypPTyJlmJNIoWI76VA8gSZPRYPKVIHSxwrndlvuiZfR6IAU','2019-02-06 09:03:25','2019-02-06 09:04:33','street',14,5204,'city','austria',NULL),
	(17,'Sarah Mühleder','sarah@frecipe.com',NULL,'$2y$10$ZbX1JSdDJjCzxaRzEpJLS.ICXBQYjBoTG0dFgIT.zfCFH2C3Io.9i',NULL,'2019-02-06 18:11:07','2019-02-06 18:11:07','Schimmelgasse',12,1030,'Wien','Austria',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
