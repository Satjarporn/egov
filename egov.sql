-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2014 at 10:55 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `egov`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`ID`, `question`, `answer`) VALUES
(1, 'qq1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.', 'qwewqeqweqw'),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'dev', 'Devloper User'),
(4, 'manager', 'Manager'),
(5, 'mentor', 'mentor');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'tset1', '1', 'hello1'),
(2, 'test2', '2', 'hello2'),
(3, '333333', '333333', 'newwwwww');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `desc` varchar(30) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `release_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `owner_ID` int(11) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(100) NOT NULL,
  `comment_stat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`ID`, `name`, `desc`, `create_date`, `release_date`, `last_update_date`, `owner_ID`, `owner_name`, `type`, `comment`, `comment_stat`) VALUES
(3, 'test 111', 'stt', '2014-12-01 06:02:53', '2014-12-14 18:41:04', '2014-12-14 18:41:04', 1, '', 1, '', 0),
(4, 'tst4', '0', '2014-12-01 06:03:04', '0000-00-00 00:00:00', '2014-12-01 14:03:04', 1, '', 2, 'test', 1),
(11, 'sadsadasd', 'dsadasdasd', '2014-12-01 09:16:47', '2014-12-01 09:16:47', '2014-12-01 09:16:47', 1, 'Admin istrator', 1, '', 0),
(12, 'tst3333333', '0', '2014-12-14 17:42:06', '2014-12-14 18:28:32', '2014-12-14 18:28:32', 1, 'Admin istrator', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1418715997, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'test', '$2y$08$k0oIRVg.TW1PL7cQkWVxK.Err62IyiiFX5unr98J0EEHKP12VzwEy', NULL, 'q@q.com', NULL, NULL, NULL, NULL, 1415983703, 1415985730, 1, 'test', 'test', 'test', '02131'),
(3, '::1', 'tsetg stestg', '$2y$08$Vf2FhOhn/qEal9cTBRYg7ejEi0NYDhVWWAuR8w9VOaAt0bkLIDyg6', NULL, 'g@g.com', NULL, NULL, NULL, NULL, 1418582759, 1418717845, 1, 'tsetg', 'stestg', '0', '0'),
(4, '::1', 'dev dev', '$2y$08$kBSoEZc6DCEF1Op5Ic5SQOihG.I4cJhhpwjFOe.pk9Ox4CI9BelyO', NULL, 'dev@dev.com', NULL, NULL, NULL, NULL, 1418583670, 1418717820, 1, 'dev', 'dev', '0', '0'),
(5, '::1', 'ascdadcacf fdzcfasfa', '$2y$08$7Abb98BWHpJHj83D0dNRH.ImyqXFDXRRZKgj6lpbZZHJTlCTKf4Yi', NULL, 'dd@dd.com', NULL, NULL, NULL, NULL, 1418608037, 1418608060, 1, 'ascdadcaCF', 'FDZCFASFA', '0', '0'),
(6, '::1', 'mentor mmmm', '$2y$08$mPj7xEoYzbBoQclWENAfVerkeL5g7W327f0bsTezVr7Q6zKG2dKiW', NULL, 'm@m.com', NULL, NULL, NULL, NULL, 1418715879, 1418720848, 1, 'mentor', 'mmmm', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 4),
(4, 3, 2),
(5, 4, 3),
(6, 5, 3),
(7, 6, 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
