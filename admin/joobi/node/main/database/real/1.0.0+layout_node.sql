CREATE TABLE IF NOT EXISTS `#__layout_node` (
 `yid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 `namekey` varchar(100) NOT NULL,
 `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `subtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `wid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `sid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `frontend` tinyint(4) NOT NULL DEFAULT '0',
 `menu` tinyint(4) NOT NULL DEFAULT '1',
 `wizard` tinyint(4) NOT NULL DEFAULT '0',
 `form` tinyint(4) NOT NULL DEFAULT '1',
 `dropdown` tinyint(4) NOT NULL DEFAULT '0',
 `pagination` tinyint(4) NOT NULL DEFAULT '0',
 `filters` tinyint(4) NOT NULL DEFAULT '0',
 `level` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `params` text NOT NULL,
 `core` tinyint(4) NOT NULL DEFAULT '1',
 `private` tinyint(4) NOT NULL DEFAULT '0',
 `icon` varchar(50) NOT NULL,
 `tmid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '1',
 `alias` varchar(255) NOT NULL,
 `fields` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `parent` varchar(100) NOT NULL,
 `reload` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `widgets` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `faicon` varchar(50) NOT NULL,
 `useredit` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `pnamekey` varchar(100) NOT NULL,
 `custom` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`yid`),
 UNIQUE KEY `UK_layout_node_namekey` (`namekey`),
 KEY `IX_layout_node_wid_type_publish_level_rolid` (`type`,`wid`,`publish`,`level`,`rolid`),
 KEY `IX_layout_node_sid` (`sid`),
 KEY `IX_layout_node_useredit_core` (`useredit`,`core`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;