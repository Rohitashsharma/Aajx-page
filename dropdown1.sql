-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 03:06 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropdown1`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityid` int(11) NOT NULL,
  `cityname` varchar(255) NOT NULL,
  `stateid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(277, 'india'),
(278, 'pak'),
(280, 'hiiiiiiiiiiiiiiiiiiiiiiiii'),
(281, 'ssdsds');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `countryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `name`, `countryid`) VALUES
(130, 'raj', 278),
(131, 'raj', 277),
(132, 'raj', 277),
(133, 'raj', 277),
(134, 'raj', 277),
(135, 'raj', 277),
(136, 'gygy', 278),
(137, 'gygy', 278),
(138, 'kkk', 277),
(139, 'kkk', 277),
(140, 'qqq', 277),
(141, 'qqq', 277),
(142, 'sss', 277),
(143, 'sss', 277),
(144, 'wwwww', 277),
(145, 'wwwww', 277),
(146, 'sssdsd', 277),
(147, 'sssdsd', 277),
(148, 'uuu', 277),
(149, 'uuu', 277),
(150, 'aaaa', 277),
(151, 'aaaa', 277),
(152, 'kkkkkkk', 277),
(153, 'kkkkkkk', 277),
(154, 'narvvvvvvv', 277),
(155, 'narvvvvvvv', 277),
(156, 'ssdfffd', 277),
(157, 'ssdfffd', 277),
(158, 'aasasasasassdsdsd', 277),
(159, 'aasasasasassdsdsd', 277),
(160, 'sssfsdfdfdf', 277),
(161, 'sssfsdfdfdf', 277),
(162, 'sssdsddddddddddddd', 277),
(163, 'sssdsddddddddddddd', 277),
(164, 'kang', 277),
(165, 'kang', 277),
(166, 'kang', 277),
(167, 'kang', 277),
(168, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 277),
(169, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 277),
(170, 'eererer', 277),
(171, 'eererer', 277),
(172, 'dsfdf', 277),
(173, 'dsfdf', 277),
(174, 'sasasasas', 277),
(175, 'sasasasas', 277),
(176, 'sgfhhhhhh', 277),
(177, 'sgfhhhhhh', 277),
(178, 'yyyy', 277),
(179, 'yyyy', 277),
(180, 'rohit', 278),
(181, 'rohit', 278);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `FirstName` text,
  `LastName` text,
  `Email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Rohit', 'Rohit@gmail.com', '2d235ace000a3ad85f590e321c89bb99'),
(2, 'admin ', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee'),
(4, 'rohit', 'sharma@gmail.com', 'c044f0484feb80a50e2cb59dc967d2b3'),
(5, 'rohit', 'Rohitsharma09674@gmail.com', '2d235ace000a3ad85f590e321c89bb99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`),
  ADD KEY `stateid` (`stateid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `countryid` (`countryid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`stateid`) REFERENCES `states` (`state_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
