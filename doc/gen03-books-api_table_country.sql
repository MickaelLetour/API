
-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'France'),
(2, 'Belgique'),
(3, 'Canada'),
(4, 'Suisse'),
(5, 'Luxembourg'),
(6, 'Monaco'),
(7, 'Cambodge'),
(8, 'Benin'),
(9, 'Haiti'),
(10, 'Maroc');
