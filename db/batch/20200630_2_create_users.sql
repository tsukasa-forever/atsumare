CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `team_id` varchar(50) DEFAULT NULL,
  `image_url` text,
  PRIMARY KEY (`id`)
);
