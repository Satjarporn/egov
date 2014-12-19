-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 19, 2014 at 06:09 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `egov`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
`id` int(11) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `desc` text NOT NULL,
  `release_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
`ID` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

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
`id` int(11) NOT NULL,
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
  `googleplus` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
`id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
`ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `desc` varchar(30) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `release_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `owner_ID` int(11) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(100) NOT NULL,
  `comment_stat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`ID`, `name`, `desc`, `create_date`, `release_date`, `last_update_date`, `owner_ID`, `owner_name`, `type`, `comment`, `comment_stat`) VALUES
(3, 'test 111', 'stt', '2014-12-01 06:02:53', '2014-12-14 18:41:04', '2014-12-14 18:41:04', 1, '', 1, '', 0),
(4, 'tst4', '0', '2014-12-01 06:03:04', '0000-00-00 00:00:00', '2014-12-01 14:03:04', 1, '', 2, 'test', 1),
(11, 'sadsadasd', 'dsadasdasd', '2014-12-01 09:16:47', '2014-12-01 09:16:47', '2014-12-01 09:16:47', 1, 'Admin istrator', 0, '', 0),
(12, 'tst3333333', '0', '2014-12-14 17:42:06', '2014-12-14 18:28:32', '2014-12-14 18:28:32', 1, 'Admin istrator', 0, '', 0),
(17, '0', 'bbbb\n', '2014-12-17 02:14:36', '2014-12-17 02:14:36', '2014-12-17 02:14:36', 7, 'super manager test', 0, '', 0),
(18, '0', 'fjgjgjj', '2014-12-17 02:14:44', '2014-12-17 02:14:44', '2014-12-17 02:14:44', 7, 'super manager test', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) unsigned NOT NULL,
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
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1418903250, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'test', '$2y$08$k0oIRVg.TW1PL7cQkWVxK.Err62IyiiFX5unr98J0EEHKP12VzwEy', NULL, 'q@q.com', NULL, NULL, NULL, NULL, 1415983703, 1415985730, 1, 'test', 'test', 'test', '02131'),
(3, '::1', 'tsetg stestg', '$2y$08$Vf2FhOhn/qEal9cTBRYg7ejEi0NYDhVWWAuR8w9VOaAt0bkLIDyg6', NULL, 'g@g.com', NULL, NULL, NULL, NULL, 1418582759, 1418730760, 1, 'tsetg', 'stestg', '0', '0'),
(4, '::1', 'dev dev', '$2y$08$kBSoEZc6DCEF1Op5Ic5SQOihG.I4cJhhpwjFOe.pk9Ox4CI9BelyO', NULL, 'dev@dev.com', NULL, NULL, NULL, NULL, 1418583670, 1418717820, 1, 'dev', 'dev', '0', '0'),
(5, '::1', 'ascdadcacf fdzcfasfa', '$2y$08$7Abb98BWHpJHj83D0dNRH.ImyqXFDXRRZKgj6lpbZZHJTlCTKf4Yi', NULL, 'dd@dd.com', NULL, NULL, NULL, NULL, 1418608037, 1418608060, 1, 'ascdadcaCF', 'FDZCFASFA', '0', '0'),
(6, '::1', 'mentor mmmm', '$2y$08$mPj7xEoYzbBoQclWENAfVerkeL5g7W327f0bsTezVr7Q6zKG2dKiW', NULL, 'm@m.com', NULL, NULL, NULL, NULL, 1418715879, 1418885839, 1, 'mentor', 'mmmm', '0', '0'),
(7, '::1', 'super manager test', '$2y$08$ZDRkh0CfDQF5JtduPU87juXW6LRJXaqpZo1MNAJ3fvPoRlAov3mR2', NULL, 'super@super.com', NULL, NULL, NULL, NULL, 1418729545, 1418871489, 1, 'super manager', 'test', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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
(7, 6, 5),
(8, 7, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`), ADD KEY `slug` (`slug`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
