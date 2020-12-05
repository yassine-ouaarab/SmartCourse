--
-- Table structure for table `exercice`
--

CREATE TABLE `exercice` (
  `id_exercice` int(11) NOT NULL,
  `name_exercice` text NOT NULL,
  `state_exercice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercice`
--

INSERT INTO `exercice` (`id_exercice`, `name_exercice`, `state_exercice`) VALUES
(1, 'exo1', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id_quiz` int(11) NOT NULL,
  `name_quiz` text NOT NULL,
  `state_quiz` text NOT NULL,
  `note_quiz` int(11) NOT NULL,
  `pst_reussite_quiz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id_quiz`, `name_quiz`, `state_quiz`, `note_quiz`, `pst_reussite_quiz`) VALUES
(1, 'quiz1', 'true', 1, 30),
(2, 'quiz2', 'false', 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `course_chapter`
--

CREATE TABLE `course_chapter` (
  `id_course_chapter` int(11) NOT NULL,
  `name_course_chapter` text NOT NULL,
  `state_course_chapter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_chapter`
--

INSERT INTO `course_chapter` (`id_course_chapter`, `name_course_chapter`, `state_course_chapter`) VALUES
(1, 'aaaa', 'true'),
(2, 'bbbb', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `course_video`
--

CREATE TABLE `course_video` (
  `id_course_video` int(11) NOT NULL,
  `name_course_video` text NOT NULL,
  `state_course_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_video`
--

INSERT INTO `course_video` (`id_course_video`, `name_course_video`, `state_course_video`) VALUES
(1, 'cccc', 'true'),
(2, 'ffff', 'true');


-- --------------------------------------------------------

--
-- Table structure for table `apprenant`
--

CREATE TABLE `apprenant` (
  `id_apprenant` int(11) NOT NULL,
  `name_apprenant` text NOT NULL,
  `mail_apprenant` text NOT NULL,
  `password_apprenant` text NOT NULL,
  `addres_apprenant` text NOT NULL,
  `tel_apprenant` text NOT NULL,
  `img_apprenant` text NOT NULL,
  `id_course_chapter` int(11) NOT NULL,
  `id_course_video` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  `id_quiz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apprenant`
--

INSERT INTO `apprenant` (`id_apprenant`, `name_apprenant`, `mail_apprenant`, `password_apprenant`, `addres_apprenant`, `tel_apprenant`, `img_apprenant`, `id_course_chapter`, `id_course_video`, `id_exercice`, `id_quiz`) VALUES
(1, 'yassineouaarab', 'yaaa@gmail.com', '123456', 'hay nahda - kyoto - Tanzania', '063245612781', 'Sunset.jpg', 1, 1, 1, 1);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercice`
--
ALTER TABLE `exercice`
  ADD PRIMARY KEY (`id_exercice`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_quiz`);

--
-- Indexes for table `course_chapter`
--
ALTER TABLE `course_chapter`
  ADD PRIMARY KEY (`id_course_chapter`);

--
-- Indexes for table `course_video`
--
ALTER TABLE `course_video`
  ADD PRIMARY KEY (`id_course_video`);

--
-- Indexes for table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id_apprenant`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apprenant`
--
ALTER TABLE `apprenant`
  ADD CONSTRAINT `fkidexercice` FOREIGN KEY (`id_exercice`) REFERENCES `exercice` (`id_exercice`),
  ADD CONSTRAINT `fkidquiz` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_quiz`),
  ADD CONSTRAINT `fkidcoursechapter` FOREIGN KEY (`id_course_chapter`) REFERENCES `course_chapter` (`id_course_chapter`),
  ADD CONSTRAINT `fkidcoursevideo` FOREIGN KEY (`id_course_video`) REFERENCES `course_video` (`id_course_video`);

