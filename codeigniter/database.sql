--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
	`content` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO `blog` (`title`, `author`, `content`) VALUES ('Fighting the Ballrawg', 'Gandalf', 'I was on the bridge when the beast attacked.  I cast a magic spell at the monster and tumbled into the earth.'), ('Life in the Shire', 'Frodo Baggins', 'Its a simple life, we eat a lot.  Occasionally interesting people show and we throw them a party.'), ('Always after precious', 'Smiegel', 'I had it for thousands of years.  Deep in the mountain, I took it.  The goblin scum was terrible food, the fish was juicy sweet.');
