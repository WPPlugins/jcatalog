CREATE TABLE IF NOT EXISTS `#__product_type` (
 `prodtypid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
 `namekey` varchar(100) NOT NULL,
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `author` int(10) unsigned NOT NULL DEFAULT '0',
 `vendid` int(10) unsigned NOT NULL DEFAULT '0',
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '1',
 `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `ordering` int(10) unsigned NOT NULL DEFAULT '0',
 `modifiedby` int(10) unsigned NOT NULL DEFAULT '0',
 `core` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `params` text NOT NULL,
 `rolid_edit` smallint(5) unsigned NOT NULL DEFAULT '1',
 `searchable` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `catid` int(10) unsigned NOT NULL DEFAULT '0',
 `filid` int(10) unsigned NOT NULL DEFAULT '0',
 `payid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `predefined` text NOT NULL,
 PRIMARY KEY (`prodtypid`),
 UNIQUE KEY `UK_product_type_namekey` (`namekey`),
 KEY `IX_product_type_type_publish_ordering` (`type`,`publish`,`ordering`),
 KEY `IX_product_type_searchable_rolid` (`searchable`,`rolid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;