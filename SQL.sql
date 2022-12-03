-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 06:07 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach_of`
--

CREATE TABLE `coach_of` (
  `team_name` varchar(50) DEFAULT NULL,
  `coach_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_of`
--

INSERT INTO `coach_of` (`team_name`, `coach_id`) VALUES
('UIU_Fractal', 'MMaR');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `designation` varchar(15) DEFAULT NULL,
  `id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `mail`, `phone`, `designation`, `id`) VALUES
('KHAIRUL MOTTAKIN', 'mottakin@cse.uiu.ac.bd', NULL, 'Lecturer', 'KhM'),
('MD. ABDULLAH AL MARUF', ' abdullah@cse.uiu.ac.bd', NULL, 'Lecturer', 'MdAAM'),
('MD. MOFIJUL ISLAM', 'mofijul@cse.uiu.ac.bd', NULL, 'Lecturer', 'MdMI'),
('MD. JAMSHED QUAIUM KHAN', 'jamshed@cse.uiu.ac.bd', NULL, 'Lecturer', 'MJQK'),
('MD. MAHMUDUR RAHMAN', 'mahmudur@cse.uiu.ac.bd', NULL, 'Lecturer', 'MMaR'),
('MUHAMMAD TASNIM MOHIUDDIN', 'tasnim@cse.uiu.ac.bd', NULL, 'Lecturer', 'MTM'),
('SANJAY SAHA', 'sanjay@cse.uiu.ac.bd', NULL, 'Lecturer', 'SyS'),
('TAMJID AL RAHAT', 'tamjid@cse.uiu.ac.bd', NULL, 'Lecturer', 'TdAR');

-- --------------------------------------------------------

--
-- Table structure for table `individual_info`
--

CREATE TABLE `individual_info` (
  `name` varchar(50) DEFAULT NULL,
  `uiu_id` varchar(10) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individual_info`
--

INSERT INTO `individual_info` (`name`, `uiu_id`, `mail`, `phone`) VALUES
('Kabir Hasan', '011131112', 'kabirhasan2514@gmail.com', NULL),
('Imran Hossain Saimun', '011132074', 'saimun2025@gmail.com', NULL),
('Kazi Israt Tori', '011132098', 'torikazi007@gmail.com', NULL),
('Fahim Shahriar', '011141091', 'fahim.cross@gmail.com', NULL),
('Md.Mushfiqur Rahman', '011142084', 'mushfiqur696@gmail.com', NULL),
('Rakibul Hossain', '011142104', 'gbriyad@gmail.com', NULL),
('Shadman Shadab', '011143043', 'oneshadab@gmail.com', NULL),
('Bimurta Bismoy Sanchi', '011151285', 'bismoy.Sanchi@gmail.com', NULL),
('Saif Khan', '011152065', 'saifkhan007420@gmail.com', NULL),
('Nazmus Saif', '011152214', 'nazmussaif@gmail.com', NULL),
('Shofiqul Islam', '011161079', 'sislam161079@bscse.uiu.ac.bd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`) VALUES
('011132074', '1234'),
('011142084', '1234'),
('011143043', '1234'),
('admin', 'admin'),
('MdMI', 'MdMI'),
('MMaR', 'MMaR'),
('UIU_Fractal', '123');

-- --------------------------------------------------------

--
-- Table structure for table `mentor_of`
--

CREATE TABLE `mentor_of` (
  `student_id` varchar(10) DEFAULT NULL,
  `mentor_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor_of`
--

INSERT INTO `mentor_of` (`student_id`, `mentor_id`) VALUES
('011152214', 'SyS'),
('011131112', 'TdAR');

-- --------------------------------------------------------

--
-- Table structure for table `oj_individual`
--

CREATE TABLE `oj_individual` (
  `weblink` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` float(15,5) DEFAULT NULL,
  `perticipant_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oj_individual`
--

INSERT INTO `oj_individual` (`weblink`, `user_id`, `rating`, `perticipant_id`) VALUES
('vjudge.net/contest/145670', 'fahimcross', 176.66667, '011141091'),
('vjudge.net/contest/145670', 'rakibul011142104', 343.33334, '011142104'),
('vjudge.net/contest/145670', 'saifdjp', 235.00000, '011161079'),
('vjudge.net/contest/145670', 'Sanchi285', 160.00000, '011151285'),
('vjudge.net/contest/145670', 'shadab011143043', 510.00000, '011143043'),
('vjudge.net/contest/145670', 'Torikazi', 310.00000, '011132098'),
('vjudge.net/contest/145670', 'unseen', 176.66667, '011142084'),
('vjudge.net/contest/146131', 'fahimcross', 385.00000, '011141091'),
('vjudge.net/contest/146131', 'rakibul011142104', 385.00000, '011142104'),
('vjudge.net/contest/146131', 'saimun2025', 260.00000, '011132074'),
('vjudge.net/contest/146131', 'shadab011143043', 510.00000, '011143043'),
('vjudge.net/contest/146131', 'unseen', 385.00000, '011142084'),
('vjudge.net/contest/148488', 'rakibul011142104', 260.00000, '011142104'),
('vjudge.net/contest/148488', 'saimun2025', 385.00000, '011132074'),
('vjudge.net/contest/148488', 'shadab011143043', 510.00000, '011143043'),
('vjudge.net/contest/148488', 'Torikazi', 322.50000, '011132098'),
('vjudge.net/contest/148488', 'unseen', 385.00000, '011142084');

-- --------------------------------------------------------

--
-- Table structure for table `oj_team`
--

CREATE TABLE `oj_team` (
  `weblink` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` float(15,5) DEFAULT NULL,
  `perticipant_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `onsite_individual`
--

CREATE TABLE `onsite_individual` (
  `weblink` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `contest_id` varchar(50) DEFAULT NULL,
  `rating` float(15,5) DEFAULT NULL,
  `user_id` varchar(20) NOT NULL,
  `perticipant_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onsite_individual`
--

INSERT INTO `onsite_individual` (`weblink`, `date`, `time`, `contest_id`, `rating`, `user_id`, `perticipant_id`) VALUES
('vjudge.net/contest/145670', '2017-03-17', '05:00:00', '1', 176.66667, 'fahimcross', '011141091'),
('vjudge.net/contest/145670', '2017-03-17', '05:00:00', '1', 343.33334, 'rakibul011142104', '011142104'),
('vjudge.net/contest/145670', '2017-03-17', '05:00:00', '1', 235.00000, 'saifdjp', '011161079'),
('vjudge.net/contest/145670', '2017-03-17', '05:00:00', '1', 0.00000, 'saimun2025', '011132074'),
('vjudge.net/contest/145670', '2017-03-17', '05:00:00', '1', 160.00000, 'Sanchi285', '011151285'),
('vjudge.net/contest/145670', '2017-03-17', '05:00:00', '1', 510.00000, 'shadab011143043', '011143043'),
('vjudge.net/contest/145670', '2017-03-17', '05:00:00', '1', 310.00000, 'Torikazi', '011132098'),
('vjudge.net/contest/145670', '2017-03-17', '05:00:00', '1', 176.66667, 'unseen', '011142084'),
('vjudge.net/contest/146131', '2017-04-06', '05:00:00', '2', 385.00000, 'fahimcross', '011141091'),
('vjudge.net/contest/146131', '2017-04-06', '05:00:00', '2', 385.00000, 'rakibul011142104', '011142104'),
('vjudge.net/contest/146131', '2017-04-06', '05:00:00', '2', 260.00000, 'saimun2025', '011132074'),
('vjudge.net/contest/146131', '2017-04-06', '05:00:00', '2', 510.00000, 'shadab011143043', '011143043'),
('vjudge.net/contest/146131', '2017-04-06', '05:00:00', '2', 385.00000, 'unseen', '011142084'),
('vjudge.net/contest/148488', '2017-04-14', '05:00:00', '3', 260.00000, 'rakibul011142104', '011142104'),
('vjudge.net/contest/148488', '2017-04-14', '05:00:00', '3', 385.00000, 'saimun2025', '011132074'),
('vjudge.net/contest/148488', '2017-04-14', '05:00:00', '3', 510.00000, 'shadab011143043', '011143043'),
('vjudge.net/contest/148488', '2017-04-14', '05:00:00', '3', 322.50000, 'Torikazi', '011132098'),
('vjudge.net/contest/148488', '2017-04-14', '05:00:00', '3', 385.00000, 'unseen', '011142084');

-- --------------------------------------------------------

--
-- Table structure for table `onsite_team`
--

CREATE TABLE `onsite_team` (
  `weblink` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `contest_id` varchar(50) DEFAULT NULL,
  `rating` float(5,3) DEFAULT NULL,
  `user_id` varchar(20) NOT NULL,
  `perticipant_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onsite_team`
--

INSERT INTO `onsite_team` (`weblink`, `date`, `time`, `contest_id`, `rating`, `user_id`, `perticipant_id`) VALUES
('vjudge.net/contest/149070', '2017-01-28', NULL, 'UIU Team Selection Contest IV 28-01-2017', 99.999, 'plastic_tree', 'UIU_Plastic Tree'),
('vjudge.net/contest/149070', '2017-01-28', NULL, 'UIU Team Selection Contest IV 28-01-2017', 99.999, 'UIU_Fractal', 'UIU_Fractal'),
('vjudge.net/contest/149070', '2017-01-28', NULL, 'UIU Team Selection Contest IV 28-01-2017', 99.999, 'UIU_Runners', 'UIU_Runners'),
('vjudge.net/contest/149436', '2017-02-02', NULL, 'UIU Team Selection Contest V 02-02-2017', 99.999, 'plastic_tree', 'UIU_Plastic Tree'),
('vjudge.net/contest/149436', '2017-02-02', NULL, 'UIU Team Selection Contest V 02-02-2017', 99.999, 'UIU_Runners', 'UIU_Runners'),
('vjudge.net/contest/149593', '2017-02-04', NULL, 'UIU Team Selection Contest VI 04-02-2017', 99.999, 'plastic_tree', 'UIU_Plastic Tree'),
('vjudge.net/contest/149593', '2017-02-04', NULL, 'UIU Team Selection Contest VI 04-02-2017', 99.999, 'UIU_Fractal', 'UIU_Fractal'),
('vjudge.net/contest/149593', '2017-02-04', NULL, 'UIU Team Selection Contest VI 04-02-2017', 99.999, 'UIU_Runners', 'UIU_Runners');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `weblink` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`weblink`, `date`, `time`, `name`) VALUES
('http://codeforces.com/contests/798', '2017-04-21', '17:35:00', 'Codeforces Round #410 (Div. 2)'),
('vjudge.net/contest/145670', '2017-03-17', '05:00:00', NULL),
('vjudge.net/contest/145690', '2017-04-25', '06:00:00', NULL),
('www.codechef.com/IOPC2017', '2017-04-20', '21:00:00', 'IOPC 2017');

-- --------------------------------------------------------

--
-- Table structure for table `team_info`
--

CREATE TABLE `team_info` (
  `team_name` varchar(50) NOT NULL,
  `creation_date` date DEFAULT NULL,
  `member_1_id` varchar(10) DEFAULT NULL,
  `member_2_id` varchar(10) DEFAULT NULL,
  `member_3_id` varchar(10) DEFAULT NULL,
  `coach_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_info`
--

INSERT INTO `team_info` (`team_name`, `creation_date`, `member_1_id`, `member_2_id`, `member_3_id`, `coach_id`) VALUES
('UIU_Fractal', NULL, '011141091', '011143043', '011142084', NULL),
('UIU_Plastic Tree', NULL, '011152214', '011151285', '011152065', NULL),
('UIU_Runners', NULL, '011132074', '011132098', '011142104', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach_of`
--
ALTER TABLE `coach_of`
  ADD KEY `team_name` (`team_name`),
  ADD KEY `coach_id` (`coach_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_info`
--
ALTER TABLE `individual_info`
  ADD PRIMARY KEY (`uiu_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `mentor_of`
--
ALTER TABLE `mentor_of`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `mentor_id` (`mentor_id`);

--
-- Indexes for table `oj_individual`
--
ALTER TABLE `oj_individual`
  ADD PRIMARY KEY (`weblink`,`user_id`),
  ADD KEY `perticipant_id` (`perticipant_id`);

--
-- Indexes for table `oj_team`
--
ALTER TABLE `oj_team`
  ADD PRIMARY KEY (`weblink`,`user_id`),
  ADD KEY `perticipant_id` (`perticipant_id`);

--
-- Indexes for table `onsite_individual`
--
ALTER TABLE `onsite_individual`
  ADD PRIMARY KEY (`weblink`,`user_id`),
  ADD KEY `perticipant_id` (`perticipant_id`);

--
-- Indexes for table `onsite_team`
--
ALTER TABLE `onsite_team`
  ADD PRIMARY KEY (`weblink`,`user_id`),
  ADD KEY `perticipant_id` (`perticipant_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`weblink`);

--
-- Indexes for table `team_info`
--
ALTER TABLE `team_info`
  ADD PRIMARY KEY (`team_name`),
  ADD KEY `member_id` (`member_1_id`),
  ADD KEY `team_info_ibfk_2` (`coach_id`),
  ADD KEY `member_2_id` (`member_2_id`),
  ADD KEY `member_3_id` (`member_3_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coach_of`
--
ALTER TABLE `coach_of`
  ADD CONSTRAINT `coach_of_ibfk_1` FOREIGN KEY (`team_name`) REFERENCES `team_info` (`team_name`),
  ADD CONSTRAINT `coach_of_ibfk_2` FOREIGN KEY (`coach_id`) REFERENCES `faculty` (`id`);

--
-- Constraints for table `mentor_of`
--
ALTER TABLE `mentor_of`
  ADD CONSTRAINT `mentor_of_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `individual_info` (`uiu_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `mentor_of_ibfk_2` FOREIGN KEY (`mentor_id`) REFERENCES `faculty` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `oj_individual`
--
ALTER TABLE `oj_individual`
  ADD CONSTRAINT `oj_individual_ibfk_1` FOREIGN KEY (`perticipant_id`) REFERENCES `individual_info` (`uiu_id`) ON DELETE SET NULL;

--
-- Constraints for table `oj_team`
--
ALTER TABLE `oj_team`
  ADD CONSTRAINT `oj_team_ibfk_1` FOREIGN KEY (`perticipant_id`) REFERENCES `team_info` (`team_name`) ON DELETE SET NULL;

--
-- Constraints for table `onsite_individual`
--
ALTER TABLE `onsite_individual`
  ADD CONSTRAINT `onsite_individual_ibfk_1` FOREIGN KEY (`perticipant_id`) REFERENCES `individual_info` (`uiu_id`) ON DELETE SET NULL;

--
-- Constraints for table `onsite_team`
--
ALTER TABLE `onsite_team`
  ADD CONSTRAINT `onsite_team_ibfk_1` FOREIGN KEY (`perticipant_id`) REFERENCES `team_info` (`team_name`) ON DELETE SET NULL;

--
-- Constraints for table `team_info`
--
ALTER TABLE `team_info`
  ADD CONSTRAINT `team_info_ibfk_1` FOREIGN KEY (`member_1_id`) REFERENCES `individual_info` (`uiu_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `team_info_ibfk_2` FOREIGN KEY (`coach_id`) REFERENCES `mentor_of` (`mentor_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `team_info_ibfk_3` FOREIGN KEY (`member_2_id`) REFERENCES `individual_info` (`uiu_id`),
  ADD CONSTRAINT `team_info_ibfk_4` FOREIGN KEY (`member_3_id`) REFERENCES `individual_info` (`uiu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
