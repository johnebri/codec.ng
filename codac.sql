-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 11:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `firstname`, `lastname`, `email`, `password`, `role`, `datetime`, `code`) VALUES
(13, 'John', 'Ebri', 'johnebri18@gmail.com', '$2y$10$OKVdaUj1YriBhiDD3.P.kOECqco1eMlO9NJvTQqImV/sP.A25sY.m', 'ROLE_SUPER_ADMIN', '2020-06-02 10:06:35', NULL),
(16, 'John', 'Ebri', 'john.ebri@yahoo.com', '$2y$10$NlpUf8xGB02pLwzohYiEPOXeEOFAiNxLJIWEYVh1nsE5SYcyF7WS.', 'ROLE_ADMIN', '2020-07-22 07:47:21', 'qMlQ3dpCGni6asbBU1Rw1595403602');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `course_description` text NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `video_url`, `course_title`, `course_description`, `trainer_id`, `date_time`) VALUES
(1, 'https://youtu.be/1x7GuaOL_XM', 'Variables in PHP', 'Basics of working with variables in PHP,\r\n', 14, '2020-05-14 16:40:55'),
(2, 'https://youtu.be/1x7GuaOL_XM', 'Soft skills', 'In this course, you will learn how to ....', 14, '2020-05-24 23:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_comments`
--

CREATE TABLE `course_comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_time` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_comments`
--

INSERT INTO `course_comments` (`comment_id`, `user_id`, `course_id`, `comment`, `date_time`, `status`) VALUES
(0, 1, 1, 'Nice Couse', '2020-05-14 16:54:58', 0),
(0, 1, 2, 'This is lovely', '2020-05-24 23:05:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tutors_application`
--

CREATE TABLE `tutors_application` (
  `id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `cv_link` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors_application`
--

INSERT INTO `tutors_application` (`id`, `tutor_id`, `linkedin_link`, `cv_link`, `datetime`) VALUES
(1, 14, 'http://test', 'http://test', '0000-00-00 00:00:00'),
(2, 14, 'http://test', 'http://test', '2020-05-24 06:32:10'),
(3, 14, 'http://test', 'http://test', '2020-05-24 06:35:34'),
(4, 14, 'http://test', 'http://test', '2020-05-24 06:48:58'),
(5, 14, 'http://test', 'http://test', '2020-05-24 23:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `subscribe_to_mails` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `activation_code` varchar(100) NOT NULL,
  `activated` int(11) NOT NULL DEFAULT '0',
  `date_time` datetime NOT NULL,
  `personal_profile` text,
  `country` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tutor_approved` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `subscribe_to_mails`, `role`, `activation_code`, `activated`, `date_time`, `personal_profile`, `country`, `nationality`, `date_of_birth`, `gender`, `image`, `tutor_approved`) VALUES
(1, 'kelvin', 'bayo4moon@gmail.com', '$2y$10$yWs6A.ODtOHwzywS7cELrO2ItV17D0SQ5kiU/Edkz.AjVzVfEPAAW', 'yes', 'student', 'cklPK1DCZbd4HGXx07YRtvLjF1588604713', 1, '2020-05-04 16:05:13', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 'kudos', 'pillarcomweb@gmail.com', '$2y$10$.JclzomhCpuZNl4S9QM6seeagyhupATm2N.ARFlC3zCC2dkAYUoB2', 'yes', 'student', 'sA8IRudwtFvJ79xWhHzX5EjqG1588608700', 1, '2020-05-04 17:11:40', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, 'John Boss', 'john.ebri@yahoo.com', '$2y$10$zzMRtHCi5Lsy1qcaF2bzie1qQ44O6k/xUy5B.rb4hHJEQW61jG9eW', 'no', 'student', 'pKESPGzQn6cf5uqLvT8sFoebU1588665014', 1, '2020-05-05 08:50:14', 'Senior Developer', '  ', '', '0000-00-00', '', 'johnebrinew1.JPG', 0),
(13, 'Lilian Ovrawah ', 'lilianovrawah@gmail.com', '$2y$10$6nF6k5vSwZoJK5NEFHQkJeITTF.Ka2LENMmgyeAxj4OWKI/CQhjP2', 'yes', 'student', 'rQvgCwn8lL1aNFMz0Tu5KmkUD1588700586', 1, '2020-05-05 18:43:06', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(14, 'John Ebri', 'johnebri18@gmail.com', '$2y$10$AKNLBO2TNVgOgRotwlKJi.WRgifW4RqVAamiOQs928zUp.4hn7.5W', 'no', 'teacher', 'C5NjHtmJehVoYxQsIlAyUMwpa1589467645', 1, '2020-05-14 15:47:25', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(15, 'Johnson Abel', 'boyoskill@yahoo.com', '$2y$10$5X7UGYDsJwopLtU/jHdUqOh8zC4vGIYK43vb.yMu5srWUHXR3Wsx6', 'yes', 'teacher', 'FsQGY3ytBzj0OW6IHhX2LZSpo1590417065', 0, '2020-05-25 15:31:06', NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tutors_application`
--
ALTER TABLE `tutors_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutors_application`
--
ALTER TABLE `tutors_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
