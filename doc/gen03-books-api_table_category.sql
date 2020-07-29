
-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'policier'),
(2, 'historique'),
(3, 'temoignage'),
(4, 'science-fiction'),
(5, 'fantastique'),
(6, 'fantasy'),
(7, 'feel-good'),
(8, 'uchronie'),
(9, 'premiere lecture'),
(10, 'nouvelle');
