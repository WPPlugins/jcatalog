CREATE TABLE IF NOT EXISTS `#__layout_mlinks` (
 `mid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 `yid` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `namekey` varchar(100) NOT NULL,
 `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `action` varchar(150) NOT NULL,
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `core` tinyint(4) NOT NULL DEFAULT '1',
 `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `ordering` tinyint(3) unsigned NOT NULL DEFAULT '99',
 `level` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `params` text NOT NULL,
 `private` tinyint(4) NOT NULL DEFAULT '0',
 `position` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `icon` varchar(50) NOT NULL,
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '1',
 `faicon` varchar(50) NOT NULL,
 `color` varchar(15) NOT NULL,
 `xsvisible` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `xshidden` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `devicevisible` varchar(100) NOT NULL,
 `devicehidden` varchar(100) NOT NULL,
 PRIMARY KEY (`mid`),
 UNIQUE KEY `UK_layout_menus_namekey` (`namekey`),
 KEY `layout_mlinks_index_yid_publish_level_rolid_ordering` (`yid`,`level`,`publish`,`ordering`,`rolid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;