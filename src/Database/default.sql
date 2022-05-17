CREATE DATABASE `epic_story`;
CREATE TABLE `logs` (
                        `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                        `class` varchar(255) NOT NULL,
                        `action` varchar(255) NOT NULL,
                        `value` text NOT NULL,
                        PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
