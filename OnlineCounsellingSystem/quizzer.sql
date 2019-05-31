-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2018 at 07:46 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

DROP TABLE IF EXISTS `choices`;
CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `choice` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(1, 1, 0, 'Not at all'),
(2, 1, 1, 'Somewhat'),
(3, 1, 2, 'moderately'),
(4, 1, 3, 'Very much'),
(5, 2, 0, 'Not at all'),
(6, 2, 1, 'Moderately'),
(7, 2, 3, 'very much'),
(8, 3, 0, 'not at all'),
(9, 3, 1, 'somewhat '),
(10, 3, 2, 'moderately '),
(11, 3, 3, 'Very much'),
(12, 4, 0, 'not at all'),
(13, 4, 1, 'somewhat'),
(14, 4, 2, 'moderately'),
(15, 4, 3, 'very much'),
(16, 5, 0, 'not at all'),
(17, 5, 1, 'somewhat'),
(18, 5, 2, 'moderately'),
(19, 5, 3, 'very much'),
(20, 6, 0, 'not at all'),
(21, 6, 1, 'somewhat'),
(22, 6, 2, 'moderately'),
(23, 6, 3, 'very much'),
(24, 7, 0, 'Not at all'),
(25, 7, 1, 'somewhat'),
(26, 7, 2, 'moderately'),
(27, 7, 3, 'very much'),
(28, 8, 0, 'not at all'),
(29, 8, 1, 'somewhat'),
(30, 8, 2, 'Moderately'),
(31, 8, 3, 'very much'),
(32, 9, 0, 'not at all'),
(33, 9, 1, 'somewhat'),
(34, 9, 2, 'Moderately'),
(35, 9, 3, 'Very much'),
(36, 10, 0, 'Never'),
(37, 10, 2, 'moderately'),
(38, 10, 3, 'very much');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question`) VALUES
(1, 'I am concerned about a behavior,feeling,or something I am doing.'),
(2, 'This behavior or feeling has been getting worse in the past few weeks.'),
(3, 'I have tried stopping or reducing this behavior or feeling on my own.'),
(4, 'My attempts at stopping or reducing this behavior or feeling have been successful.'),
(5, 'I rely on my friends or family to help me with my current troubles.'),
(6, 'I am finding it more difficult to cope with things than usual.'),
(7, 'I am having concentrating at work or school.'),
(8, 'I like to think things through or talk about things that bother me.'),
(9, 'I have read books or went on the internet to discover more about the behavior or feeling that it is troubling me'),
(10, 'I have been in therapy before and its helped me.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
