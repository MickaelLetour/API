
-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `country_id` mediumint(8) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `lname`, `fname`, `country_id`) VALUES
(1, 'Roche', 'Alexis', 8),
(2, 'Daniel', 'Timéo', 8),
(3, 'Perez', 'Jade', 1),
(4, 'Philippe', 'Félix', 10),
(5, 'Carpentier', 'Tristan', 3),
(6, 'Guerin', 'Guillemette', 4),
(7, 'Durand', 'Lorenzo', 8),
(8, 'Laurent', 'Léonie', 2),
(9, 'Boucher', 'Robin', 5),
(10, 'Perrot', 'Alexandre', 7),
(11, 'Gillet', 'Anthony', 5),
(12, 'Boulanger', 'Florentin', 3),
(13, 'Roy', 'Nolan', 4),
(14, 'Robin', 'Gilbert', 10),
(15, 'Rousseau', 'Maéva', 5),
(16, 'Pierre', 'Adrien', 7),
(17, 'Gaillard', 'Lutécia', 7),
(18, 'Collin', 'Kyllian', 4),
(19, 'Guyot', 'Amandine', 10),
(20, 'Herve', 'Luna', 5),
(21, 'Clement', 'Clément', 1),
(22, 'Bailly', 'Dimitri', 10),
(23, 'Dufour', 'Anthony', 4),
(24, 'Legrand', 'Lucas', 7),
(25, 'Marchal', 'Noah', 1),
(26, 'Picard', 'Emma', 3),
(27, 'Gaillard', 'Kilian', 7),
(28, 'Humbert', 'Maxence', 8),
(29, 'Brun', 'Guillemette', 8),
(30, 'Philippe', 'Anna', 1),
(31, 'Benoit', 'Amandine', 5),
(32, 'Leclerc', 'Emma', 3),
(33, 'Mallet', 'Renaud', 2),
(34, 'Jean', 'Catherine', 4),
(35, 'Mercier', 'Alicia', 4),
(36, 'Vincent', 'Julie', 3),
(37, 'Denis', 'Gabriel', 3),
(38, 'Prevost', 'Kylian', 8),
(39, 'Le gall', 'Maéva', 4),
(40, 'Weber', 'Tom', 9),
(41, 'Sanchez', 'Maryam', 5),
(42, 'Marchal', 'Tatiana', 8),
(43, 'Noel', 'Mathéo', 5),
(44, 'Dupont', 'Julie', 8),
(45, 'Perrot', 'Jade', 1),
(46, 'Cousin', 'Mathéo', 8),
(47, 'Boyer', 'Maéva', 5),
(48, 'Mallet', 'Salomé', 10),
(49, 'Etienne', 'Lauriane', 8),
(50, 'Paul', 'Dorian', 5),
(51, 'Leroy', 'Lutécia', 3),
(52, 'Lemaire', 'Maxence', 6),
(53, 'Henry', 'Agathe', 5),
(54, 'Albert', 'Guillaume', 3),
(55, 'Renault', 'Noë', 2),
(56, 'Lambert', 'Elsa', 4),
(57, 'Lacroix', 'Noah', 1),
(58, 'Clement', 'Louis', 5),
(59, 'Durand', 'Angelina', 6),
(60, 'Philippe', 'Thibault', 8),
(61, 'Gaillard', 'Théo', 2),
(62, 'Blanchard', 'Léonie', 9),
(63, 'Jean', 'Kevin', 10),
(64, 'Guyot', 'Margot', 5),
(65, 'Rousseau', 'Roméo', 3),
(66, 'Richard', 'Alicia', 9),
(67, 'Marie', 'Grégory', 9),
(68, 'Herve', 'Jérémy', 6),
(69, 'Baron', 'Evan', 9),
(70, 'Moulin', 'Lana', 2),
(71, 'Renard', 'Léonie', 7),
(72, 'Mathieu', 'Léa', 7),
(73, 'Chevalier', 'Antonin', 6),
(74, 'Leclerc', 'Maxence', 8),
(75, 'Olivier', 'Laura', 10),
(76, 'Bouvier', 'Yasmine', 6),
(77, 'Dumas', 'Jasmine', 5),
(78, 'Albert', 'Margot', 9),
(79, 'Perez', 'Yohan', 1),
(80, 'Le gall', 'Samuel', 8),
(81, 'Petit', 'Manon', 3),
(82, 'Rodriguez', 'Gabin', 3),
(83, 'Blanchard', 'Dorian', 2),
(84, 'Fabre', 'Lamia', 7),
(85, 'Cousin', 'Kimberley', 5),
(86, 'Roger', 'Quentin', 9),
(87, 'Lecomte', 'Jordan', 8),
(88, 'Boyer', 'Catherine', 2),
(89, 'Roche', 'Gabriel', 5),
(90, 'Meyer', 'Kylian', 2),
(91, 'Masson', 'Marie', 6),
(92, 'Jacquet', 'Théo', 7),
(93, 'Morel', 'Mattéo', 6),
(94, 'Riviere', 'Clotilde', 5),
(95, 'Dupuis', 'Guillemette', 8),
(96, 'Sanchez', 'Mohamed', 3),
(97, 'Faure', 'Victor', 9),
(98, 'Baron', 'Bruno', 2),
(99, 'Renaud', 'Loevan', 3),
(100, 'Blanc', 'Mathis', 1);