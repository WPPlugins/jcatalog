CREATE TABLE IF NOT EXISTS `#__members_node` (
 `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `id` int(10) NOT NULL DEFAULT '0',
 `name` varchar(200) NOT NULL,
 `username` varchar(80) NOT NULL,
 `openid` varchar(255) NOT NULL,
 `email` varchar(100) NOT NULL,
 `password` varchar(200) NOT NULL,
 `blocked` tinyint(3) NOT NULL DEFAULT '0',
 `activation` varchar(100) NOT NULL,
 `timezone` smallint(6) NOT NULL DEFAULT '999',
 `confirmed` tinyint(3) NOT NULL DEFAULT '0',
 `registerdate` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `lgid` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `html` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `registered` tinyint(4) NOT NULL DEFAULT '1',
 `unsub` tinyint(4) NOT NULL DEFAULT '0',
 `login` int(10) unsigned NOT NULL DEFAULT '0',
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '1',
 `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `visibility` tinyint(3) unsigned NOT NULL DEFAULT '231',
 `curid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `ip` double unsigned NOT NULL DEFAULT '0',
 `ctyid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `mobile` varchar(20) NOT NULL,
 `filid` int(10) unsigned NOT NULL DEFAULT '0',
 `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `utypid` smallint(5) unsigned NOT NULL DEFAULT '1',
 PRIMARY KEY (`uid`),
 UNIQUE KEY `UK_members_node_email` (`email`),
 UNIQUE KEY `UK_members_node_username` (`username`),
 KEY `IX_members_node_name` (`name`),
 KEY `IX_members_node_login_registerdate` (`login`,`registerdate`),
 KEY `IX_members_node_timezone` (`timezone`),
 KEY `IX_members_node_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;