-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2014 at 10:23 AM
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
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(250) NOT NULL,
  `desc` text NOT NULL,
  `release_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `topic`, `desc`, `release_date`, `owner_id`, `owner_name`) VALUES
(2, 'test 4', 'test an announcement\nsentence 1\nsentence 2\nsentence 3', '2014-12-17 04:59:13', 7, 'super manager test'),
(3, 'test 5', 'test\nnew s1\nnew s2\nnew s3\n<p>paragraph</p>\n', '2014-12-17 19:15:09', 7, 'super manager test'),
(4, 'test 6', 'test backslash\n\\nsentence1', '2014-12-17 19:16:01', 7, 'super manager test'),
(5, 'test 7 test link', 'test link\n<a href="https://www.google.co.kr/">this link go to google</a>', '2014-12-17 19:17:11', 7, 'super manager test');

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
(1, 'qq1eba', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'dev', 'Devloper User'),
(4, 'manager', 'Manager'),
(5, 'mentor', 'Mentor'),
(6, 'super', 'Super Manager');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` varchar(200) NOT NULL,
  `task` varchar(100) NOT NULL,
  `send` varchar(100) NOT NULL,
  `progress` varchar(100) NOT NULL,
  `abtHead1` varchar(100) NOT NULL,
  `abtDesc1` varchar(300) NOT NULL,
  `abtHead2` varchar(100) NOT NULL,
  `abtDesc2` varchar(300) NOT NULL,
  `abtHead3` varchar(100) NOT NULL,
  `abtDesc3` varchar(300) NOT NULL,
  `abtHead4` varchar(100) NOT NULL,
  `abtDesc4` varchar(300) NOT NULL,
  `abtHead5` varchar(100) NOT NULL,
  `abtDesc5` varchar(300) NOT NULL,
  `abtHead6` varchar(100) NOT NULL,
  `abtDesc6` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `googleplus` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `head`, `task`, `send`, `progress`, `abtHead1`, `abtDesc1`, `abtHead2`, `abtDesc2`, `abtHead3`, `abtDesc3`, `abtHead4`, `abtDesc4`, `abtHead5`, `abtDesc5`, `abtHead6`, `abtDesc6`, `address`, `phone`, `email`, `facebook`, `twitter`, `googleplus`) VALUES
(1, 'JGYGJGfdsdsf', 'List for doing work, you can find the proper work from here.', 'Uploading work to us just a click.', 'How will you know that your work is done ,Click it!.', 'Creative Mind 1', '0', 'Creative Heart 1', '0', 'Creative Idea 1', '0', 'Creative Mind 2', '0', 'Creative Heart 2', '0', 'Creative Idea 2', '0', 'Kookmin University, Seoul, Korea', '+82 10-3043-xxxx', 'emailme@gmail.com', '0', '0', '0');

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
  `dev_ID` int(11) NOT NULL DEFAULT '0',
  `reject` varchar(500) NOT NULL,
  `mentor_ID` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`ID`, `name`, `desc`, `create_date`, `release_date`, `last_update_date`, `owner_ID`, `owner_name`, `type`, `comment`, `comment_stat`, `dev_ID`, `reject`, `mentor_ID`) VALUES
(3, 'test 111', 'stt', '2014-12-01 06:02:53', '2014-12-14 18:41:04', '2014-12-14 18:41:04', 1, '', 1, '', 0, 0, '', 0),
(4, 'tst4', '0', '2014-12-01 06:03:04', '0000-00-00 00:00:00', '2014-12-01 14:03:04', 1, '', 2, 'test', 1, 0, '', 6),
(11, 'sadsadasd', 'dsadasdasd', '2014-12-01 09:16:47', '2014-12-01 09:16:47', '2014-12-01 09:16:47', 1, 'Admin istrator', 0, '', 0, 4, '', 0),
(12, 'tst3333333', '0', '2014-12-14 17:42:06', '2014-12-14 18:28:32', '2014-12-14 18:28:32', 1, 'Admin istrator', 0, '', 2, 4, '', 6),
(17, '0', 'bbbb\n', '2014-12-17 02:14:36', '2014-12-17 02:14:36', '2014-12-17 02:14:36', 7, 'super manager test', 3, '', 0, 4, '', 0),
(18, '0', 'fjgjgjj', '2014-12-17 02:14:44', '2014-12-17 02:14:44', '2014-12-17 02:14:44', 7, 'super manager test', 4, '', 0, 4, 'test', 0),
(19, 'gg', 'ggg', '2014-12-21 00:37:27', '2014-12-21 00:37:27', '2014-12-21 00:37:27', 3, 'tsetg stestg', 4, '', 0, 4, '', 0),
(20, 'suprt ', 'asdasdasdasd', '2014-12-21 00:56:15', '2014-12-21 00:56:15', '2014-12-21 00:56:15', 7, 'super manager test', 1, '', 0, 0, '', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1418903250, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'test', '$2y$08$k0oIRVg.TW1PL7cQkWVxK.Err62IyiiFX5unr98J0EEHKP12VzwEy', NULL, 'q@q.com', NULL, NULL, NULL, NULL, 1415983703, 1415985730, 1, 'test', 'test', 'test', '02131'),
(3, '::1', 'tsetg stestg', '$2y$08$Vf2FhOhn/qEal9cTBRYg7ejEi0NYDhVWWAuR8w9VOaAt0bkLIDyg6', NULL, 'g@g.com', NULL, NULL, NULL, NULL, 1418582759, 1419153452, 1, 'tsetg', 'stestg', '0', '0'),
(4, '::1', 'dev dev', '$2y$08$kBSoEZc6DCEF1Op5Ic5SQOihG.I4cJhhpwjFOe.pk9Ox4CI9BelyO', NULL, 'dev@dev.com', NULL, NULL, NULL, NULL, 1418583670, 1419153672, 1, 'dev', 'dev', '0', '0'),
(5, '::1', 'ascdadcacf fdzcfasfa', '$2y$08$7Abb98BWHpJHj83D0dNRH.ImyqXFDXRRZKgj6lpbZZHJTlCTKf4Yi', NULL, 'dd@dd.com', NULL, NULL, NULL, NULL, 1418608037, 1418608060, 1, 'ascdadcaCF', 'FDZCFASFA', '0', '0'),
(6, '::1', 'mentor mmmm', '$2y$08$mPj7xEoYzbBoQclWENAfVerkeL5g7W327f0bsTezVr7Q6zKG2dKiW', NULL, 'm@m.com', NULL, NULL, NULL, NULL, 1418715879, 1419151459, 1, 'mentor', 'mmmm', '0', '0'),
(7, '::1', 'super manager test', '$2y$08$ZDRkh0CfDQF5JtduPU87juXW6LRJXaqpZo1MNAJ3fvPoRlAov3mR2', NULL, 'super@super.com', NULL, NULL, NULL, NULL, 1418729545, 1419153468, 1, 'super manager', 'test', '0', '0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(3, 2, 4),
(4, 3, 4),
(5, 4, 3),
(6, 5, 5),
(7, 6, 5),
(8, 7, 6);

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
