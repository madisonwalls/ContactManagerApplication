-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 10, 2017 at 09:59 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `photo`, `first`, `last`, `title`, `address`, `city`, `state`, `zip`, `phone`, `notes`) VALUES
(1, 'avatar.jpg', 'Madison', 'Walls', 'Miss', '303 Main Street', 'Chapel Hill', 'NC', '27516', '704-607-7620', 'Your first contact'),
(5, '0707001933.jpg', 'Yorkshire', 'Walls', '', '123 Main Street', 'Charlotte', 'NC', '28105', '937-238-3723', 'Best dog ever'),
(47, 'jana.jpg', 'Jana', 'Walls', 'Dr', '602 Hampshire Hill Road', 'Matthews', 'NC', '28105', '704-287-7207', 'Fabulous at 50!'),
(48, 'jeff.jpg', 'Jeffrey', 'Walls', 'Dr', '602 Hampshire Hill Road', 'Matthews', 'NC', '28105', '704-287-8246', 'Father'),
(49, '', 'John', 'Doe', 'Mr', '123 Main Street', 'Sunnyville', 'NC', '27193', '784-293-1382', 'I am a fake man.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
