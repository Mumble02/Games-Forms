--
-- Database: `games`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_admins_email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `favgame` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`user_id`, `first_name`, `last_name`, `genre`, `location`, `email`, `age`, `favgame`) VALUES
(10, 'Mumble', 'Jumble', 'Action', 'Barrie.ON', 'Mumble@mumble.com', 18, 'Little Nightmares II'),
(8, 'Aaron', 'MacMartin', 'Adventure', 'Barrie, ON', 'aaronmac@gmail.com', 18, 'Overwatch'),
(9, 'Teagan', 'Singleton', 'Adventure', 'Athens, Greece', 'teagansing@gmail.com', 19, 'Minecraft'),
(6, 'Stephanie', 'Caliwag', 'Action', 'Barrie, ON', '200462383@student.georgianc.on.ca', 18, 'Among us');

-- --------------------------------------------------------

--
-- Table structure for table `game_names`
--

DROP TABLE IF EXISTS `game_names`;
CREATE TABLE IF NOT EXISTS `game_names` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` mediumtext,
  `company` varchar(30) DEFAULT NULL,
  `date_release` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`game_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_names`
--

INSERT INTO `game_names` (`game_id`, `title`, `description`, `company`, `date_release`) VALUES
(1, 'Valorant', 'Valorant is a free-to-play multiplayer tactical first-person hero shooter developed and published by Riot Games, for Microsoft Windows.', 'Riot Games', '0000-00-00 00:00:00'),
(2, 'Among us', 'Among Us is an online multiplayer social deduction game developed and published by American game studio Innersloth.', 'InnerSloth LLC', '0000-00-00 00:00:00'),
(3, 'Overwatch', 'Overwatch is a team-based multiplayer first-person shooter developed and published by Blizzard Entertainment.', 'Blizzard Entertainment, Iron G', '0000-00-00 00:00:00'),
(4, 'Call of Duty: Modern Warfare', 'Call of Duty: Modern Warfare is a 2019 first-person shooter video game developed by Infinity Ward and published by Activision.', 'Activision, Activision Blizzar', '0000-00-00 00:00:00'),
(5, 'Minecraft', 'Minecraft is a sandbox video game developed by Mojang. The game was created by Markus \"Notch\" Persson in the Java programming language.', 'Majong', '0000-00-00 00:00:00'),
(6, 'Roblox', 'Roblox is an online game platform and game creation system developed by Roblox Corporation.', 'Roblox Corporation', '0000-00-00 00:00:00'),
(7, 'Little Nightmares II', 'Little Nightmares II is a puzzle-platformer horror adventure game developed by Tarsier Studios and published by Bandai Namco Entertainment.', ' Bandai Namco Entertainment', '0000-00-00 00:00:00'),
(8, 'Fortnite', 'Fortnite is an online video game developed by Epic Games and released in 2017.', 'Epic Games', '0000-00-00 00:00:00'),
(9, 'Apex Legends', 'Apex Legends is a free-to-play first-person hero shooter battle royale game developed by Respawn Entertainment for Microsoft Windows, PlayStation 4, and Xbox One, with the Nintendo Switch version being developed by Panic Button.', 'Respawn Entertainment, Panic B', '0000-00-00 00:00:00'),
(10, 'Dead by Daylight', 'Dead by Daylight is an asymmetric survival horror video game developed by Behaviour Interactive.', ' Behaviour Interactive', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_users_email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Mumble', 'LightningMcQueen', 'mumble.mcqueen@gmail.com', '$2y$10$fLLjVTwge9CpBdHSke8qIeXX07qmmWcTi3E3Kmne11/9UCe7w9Xui'),
(2, 'Mumble', 'ddfsdf', 'mumble@mumble.com', '$2y$10$axKSRehbPSJYlwmFxP3u3O5BtwZThx5UaZVvlUrdYvsGkXBDS4s7O');
COMMIT;

