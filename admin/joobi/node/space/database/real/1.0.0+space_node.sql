CREATE TABLE IF NOT EXISTS `#__space_node` (
 `wsid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `namekey` varchar(50) NOT NULL,
 `alias` varchar(150) NOT NULL,
 `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '1',
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `tmid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `menu` varchar(100) NOT NULL,
 `yid` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `core` tinyint(4) NOT NULL DEFAULT '0',
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `catid` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `theme` varchar(50) NOT NULL,
 `controller` varchar(150) NOT NULL,
 `restrictuser` tinyint(4) NOT NULL DEFAULT '0',
 `frameworktheme` tinyint(4) NOT NULL DEFAULT '0',
 PRIMARY KEY (`wsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;