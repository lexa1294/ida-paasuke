/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_mec_events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `repeat` tinyint(4) NOT NULL DEFAULT '0',
  `rinterval` varchar(10) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `year` varchar(80) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `month` varchar(80) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `day` varchar(80) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `week` varchar(80) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `weekday` varchar(80) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `weekdays` varchar(80) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `days` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `not_in_days` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `time_start` int(10) NOT NULL DEFAULT '0',
  `time_end` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ID` (`id`),
  UNIQUE KEY `post_id` (`post_id`),
  KEY `start` (`start`,`end`,`repeat`,`rinterval`,`year`,`month`,`day`,`week`,`weekday`,`weekdays`,`time_start`,`time_end`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
