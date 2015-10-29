--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, 'Gandalf', 'iamwhite!'), (NULL, 'Bilbo', 'bagginses!'), (NULL, 'Gollum', 'precious'), (NULL, 'arwen', 'tolodannangalad');

