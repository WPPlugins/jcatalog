CREATE TABLE IF NOT EXISTS `#__rule_dictionary` (
 `dctid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
 `words` varchar(254) NOT NULL,
 `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `core` tinyint(4) NOT NULL DEFAULT '0',
 `searchin` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `ordering` smallint(5) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`dctid`),
 UNIQUE KEY `UK_for_rule_dictionary` (`type`,`searchin`,`words`(100))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;