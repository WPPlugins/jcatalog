CREATE TABLE IF NOT EXISTS `#__credentials_node` (
 `crdid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `namekey` varchar(150) NOT NULL,
 `alias` varchar(150) NOT NULL,
 `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `directory` varchar(255) NOT NULL,
 `username` varchar(200) NOT NULL,
 `passcode` varchar(200) NOT NULL,
 `url` varchar(250) NOT NULL,
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '1',
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `modifiedby` int(10) unsigned NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `params` text NOT NULL,
 `ordering` int(10) unsigned NOT NULL DEFAULT '1',
 `crdidtype` smallint(5) unsigned NOT NULL DEFAULT '0',
 `premium` tinyint(4) NOT NULL DEFAULT '0',
 `apisecret` varchar(254) NOT NULL,
 PRIMARY KEY (`crdid`),
 UNIQUE KEY `UK_credentials_node_namekey` (`namekey`),
 KEY `IX_credentials_node_premium_publish_ordering` (`premium`,`publish`,`ordering`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;