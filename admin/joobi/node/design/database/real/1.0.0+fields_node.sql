CREATE TABLE IF NOT EXISTS `#__fields_node` (
 `fieldid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
 `namekey` varchar(150) NOT NULL,
 `alias` varchar(150) NOT NULL,
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '1',
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `core` tinyint(4) NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `wid` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `params` text NOT NULL,
 `listing` varchar(250) NOT NULL,
 `form` varchar(250) NOT NULL,
 `real` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `ordering` mediumint(8) unsigned NOT NULL DEFAULT '69',
 `category` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `visible` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `translate` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`fieldid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;