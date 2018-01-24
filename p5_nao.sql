-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 04:22 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p5_nao`
--

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE `birds` (
  `id` int(11) NOT NULL,
  `race` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`id`, `race`) VALUES
(1, 'Accipitridae'),
(2, 'Cathartidae'),
(3, 'Pandionidae'),
(4, 'Anatidae'),
(5, 'Anhimidae'),
(6, 'Upupidae'),
(7, 'Aegothelidae'),
(8, 'Apodidae'),
(9, 'Caprimulgidae'),
(10, 'Nyctibiidae'),
(11, 'Steatornithidae'),
(12, 'Trochilidae'),
(13, 'Alcidae'),
(14, 'Burhinidae'),
(15, 'Charadriidae'),
(16, 'Chionidae'),
(17, 'Dromadidae'),
(18, 'Glareolidae'),
(19, 'Haematopodidae'),
(20, 'Jacanidae'),
(21, 'Laridae'),
(22, 'Pluvianidae'),
(23, 'Recurvirostridae'),
(24, 'Scolopacidae'),
(25, 'Stercorariidae'),
(26, 'Turnicidae'),
(27, 'Columbidae'),
(28, 'Alcedinidae'),
(29, 'Coraciidae'),
(30, 'Meropidae'),
(31, 'Momotidae'),
(32, 'Cuculidae'),
(33, 'Eurypygidae'),
(34, 'Rhynochetidae'),
(35, 'Falconidae'),
(36, 'Cracidae'),
(37, 'Megapodiidae'),
(38, 'Numididae'),
(39, 'Odontophoridae'),
(40, 'Phasianidae'),
(41, 'Sylviornithidae'),
(42, 'Gaviidae'),
(43, 'Aramidae'),
(44, 'Gruidae'),
(45, 'Heliornithidae'),
(46, 'Psophiidae'),
(47, 'Rallidae'),
(48, 'Leptosomidae'),
(49, 'Opisthocomidae'),
(50, 'Otididae'),
(51, 'Acanthizidae'),
(52, 'Acrocephalidae'),
(53, 'Aegithalidae'),
(54, 'Alaudidae'),
(55, 'Artamidae'),
(56, 'Bombycillidae'),
(57, 'Calcariidae'),
(58, 'Campephagidae'),
(59, 'Cardinalidae'),
(60, 'Certhiidae'),
(61, 'Cinclidae'),
(62, 'Cisticolidae'),
(63, 'Conopophagidae'),
(64, 'Corvidae'),
(65, 'Cotingidae'),
(66, 'Dicruridae'),
(67, 'Donacobiidae'),
(68, 'Emberizidae'),
(69, 'Estrildidae'),
(70, 'Formicariidae'),
(71, 'Fringillidae'),
(72, 'Furnariidae'),
(73, 'Grallariidae'),
(74, 'Hirundinidae'),
(75, 'Icteridae'),
(76, 'Laniidae'),
(77, 'Leiothrichidae'),
(78, 'Locustellidae'),
(79, 'Meliphagidae'),
(80, 'Mimidae'),
(81, 'Mitrospingidae'),
(82, 'Monarchidae'),
(83, 'Motacillidae'),
(84, 'Muscicapidae'),
(85, 'Nectariniidae'),
(86, 'Onychorhynchidae'),
(87, 'Oriolidae'),
(88, 'Oxyruncidae'),
(89, 'Pachycephalidae'),
(90, 'Panuridae'),
(91, 'Paridae'),
(92, 'Parulidae'),
(93, 'Passerellidae'),
(94, 'Passeridae'),
(95, 'Petroicidae'),
(96, 'Phylloscopidae'),
(97, 'Pipridae'),
(98, 'Ploceidae'),
(99, 'Polioptilidae'),
(100, 'Prunellidae'),
(101, 'Pycnonotidae'),
(102, 'Regulidae'),
(103, 'Remizidae'),
(104, 'Rhipiduridae'),
(105, 'Scotocercidae'),
(106, 'Sittidae'),
(107, 'Sturnidae'),
(108, 'Sylviidae'),
(109, 'Thamnophilidae'),
(110, 'Thraupidae'),
(111, 'Tityridae'),
(112, 'Troglodytidae'),
(113, 'Turdidae'),
(114, 'Tyrannidae'),
(115, 'Viduidae'),
(116, 'Vireonidae'),
(117, 'Zosteropidae'),
(118, 'Anhingidae'),
(119, 'Ardeidae'),
(120, 'Ciconiidae'),
(121, 'Fregatidae'),
(122, 'Pelecanidae'),
(123, 'Phalacrocoracidae'),
(124, 'Sulidae'),
(125, 'Threskiornithidae'),
(126, 'Phaethontidae'),
(127, 'Phoenicopteridae'),
(128, 'Podicipedidae'),
(129, 'Bucconidae'),
(130, 'Capitonidae'),
(131, 'Galbulidae'),
(132, 'Picidae'),
(133, 'Ramphastidae'),
(134, 'Diomedeidae'),
(135, 'Hydrobatidae'),
(136, 'Oceanitidae'),
(137, 'Procellariidae'),
(138, 'Cacatuidae'),
(139, 'Psittacidae'),
(140, 'Psittaculidae'),
(141, 'Pteroclidae'),
(142, 'Spheniscidae'),
(143, 'Strigidae'),
(144, 'Tytonidae'),
(145, 'Tinamidae'),
(146, 'Trogonidae');

-- --------------------------------------------------------

--
-- Table structure for table `observations`
--

CREATE TABLE `observations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bird_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `longitude` decimal(8,6) NOT NULL,
  `latitude` decimal(8,6) NOT NULL,
  `published_at` datetime NOT NULL,
  `reported` int(11) NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bird_race_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `observations`
--

INSERT INTO `observations` (`id`, `user_id`, `author`, `bird_name`, `content`, `longitude`, `latitude`, `published_at`, `reported`, `state`, `bird_race_id`) VALUES
(66, 23, 'Xtif', 'Oiseau 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '45.235625', '2.352653', '2018-01-23 00:00:00', 0, 'En attente', 14),
(67, 17, 'admin', 'Oiseau 2', NULL, '2.352652', '2.352653', '2018-01-23 00:00:00', 0, 'Publiée', 94);

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `observation_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `observation_id`, `name`, `file`) VALUES
(173, 66, 'Images/ObservationsPictures/xtif_Observation_66_Picture_1.jpeg', 'Images/ObservationsPictures/xtif_Observation_66_Picture_1.jpeg'),
(174, 66, 'Images/ObservationsPictures/xtif_Observation_66_Picture_2.jpeg', 'Images/ObservationsPictures/xtif_Observation_66_Picture_2.jpeg'),
(175, 66, 'Images/ObservationsPictures/xtif_Observation_66_Picture_3.jpeg', 'Images/ObservationsPictures/xtif_Observation_66_Picture_3.jpeg'),
(176, 67, 'Images/ObservationsPictures/admin_Observation_67_Picture_1.jpeg', 'Images/ObservationsPictures/admin_Observation_67_Picture_1.jpeg'),
(177, 67, 'Images/ObservationsPictures/admin_Observation_67_Picture_2.jpeg', 'Images/ObservationsPictures/admin_Observation_67_Picture_2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observations_published` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `firstname`, `lastname`, `adress`, `postal_code`, `city`, `phone`, `status`, `user_picture`, `observations_published`) VALUES
(17, 'admin', 'admin', 'michel.dujardin@nao.fr', 'michel.dujardin@nao.fr', 1, NULL, '$2y$13$BDDQBvOrIEbRQilh3wXIO.zQh0yMDFekfZSzzf0SSua8bPxnWLdKW', '2018-01-23 16:21:54', 'JAM9WNPKQIlqC28QtUJOsdVE4USCeLDAZaeG-5qDuUU', '2018-01-17 15:54:26', 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', 'Michel', 'Dujardin', '28 avenue des Pioupiou', 26460, 'Roucoulou', '0684523652', 'Super Administrateur', 'Images/UsersPictures/admin.jpeg', 4),
(23, 'Xtif', 'xtif', 'thibault.fiacre@gmail.com', 'thibault.fiacre@gmail.com', 1, NULL, '$2y$13$HB.WvX6HXM1z5fhHbtty5uJCpTNrQLDsYtT3UrmlwC1L8smtGjbH6', '2018-01-23 16:04:09', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_PARTICULIER\";}', 'Thibault', 'Fiacre', '28 avenue Victor Hugo', 26000, 'Valence', '0634251563', 'Particulier', 'Images/UsersPictures/Xtif.jpeg', 1),
(28, 'Hélène', 'helene', 'helene@gmail.com', 'helene@gmail.com', 1, NULL, '$2y$13$lGvzhpiiPUlGGv63KglDeOsEH0LKCt6C80xePc9lQHb.sSDIhYEZ6', '2018-01-23 15:06:28', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_PARTICULIER\";}', NULL, NULL, NULL, NULL, NULL, NULL, 'Particulier', 'Images/UsersPictures/Avatar.jpeg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `observations`
--
ALTER TABLE `observations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_BBC15BA81825F351` (`bird_race_id`),
  ADD KEY `IDX_BBC15BA8A76ED395` (`user_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8F7C2FC01409DD88` (`observation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_1483A5E9A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_1483A5E9C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `observations`
--
ALTER TABLE `observations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `observations`
--
ALTER TABLE `observations`
  ADD CONSTRAINT `FK_BBC15BA81825F351` FOREIGN KEY (`bird_race_id`) REFERENCES `birds` (`id`),
  ADD CONSTRAINT `FK_BBC15BA8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `FK_8F7C2FC01409DD88` FOREIGN KEY (`observation_id`) REFERENCES `observations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
