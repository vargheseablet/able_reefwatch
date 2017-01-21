-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2017 at 09:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reefwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `comment`) VALUES
(1, 'Able', 'vargheseablet@gmail.com', 'hey', 'hi'),
(2, 'Able', 'vargheseablet@gmail.com', 'hey', 'ho!!!!'),
(3, 'Noble Varghese', 'lmnavarghese@gmail.com', 'awesome ', 'good job!!'),
(4, 'Abel', 'vat@gmail.com', 'hi', 'ho!!!');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `category`) VALUES
(1, 'reeflogo.png', 'homelogo'),
(2, 'p1.jpg', 'about_us'),
(3, 'p21.jpg', 'what_we_do'),
(4, 'p22.jpg', 'what_we_do'),
(5, 'p23.jpg', 'what_we_do'),
(6, 'p24.jpg', 'what_we_do'),
(7, 'p25.jpg', 'what_we_do'),
(8, 'p26.jpg', 'what_we_do'),
(9, 'p27.jpg', 'what_we_do'),
(10, 'p3.jpg', 'initiatives'),
(11, 'p41.jpg', 'you_can_help'),
(12, 'p42.jpg', 'you_can_help'),
(13, 'p43.jpg', 'you_can_help'),
(14, 'p44.jpg', 'you_can_help'),
(15, 'p45.jpg', 'you_can_help'),
(16, 'p46.jpg', 'you_can_help'),
(17, 'p47.jpg', 'you_can_help'),
(18, 'reefbg.gif', 'background');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
