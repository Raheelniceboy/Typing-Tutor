-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 05:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `typingtutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_game`
--

CREATE TABLE `log_game` (
  `log_id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `game_name` varchar(30) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_game`
--

INSERT INTO `log_game` (`log_id`, `user_id`, `user_name`, `game_name`, `point`) VALUES
(4, '1804792313100351', 'Trường Giang', 'Random', 4),
(5, '1804792313100351', 'Trường Giang', 'Random', 6),
(6, '1804792313100351', 'Trường Giang', 'Random', 3),
(7, '1804792313100351', 'Trường Giang', 'Random', 3),
(8, '1804792313100351', 'Trường Giang', 'Random', 5),
(9, '1804792313100351', 'Trường Giang', 'Random', 1),
(10, '1804792313100351', 'Trường Giang', 'Bubbles', 10),
(11, '1804792313100351', 'Trường Giang', 'Bubbles', 10),
(12, '1804792313100351', 'Trường Giang', 'Bubbles', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_game`
--
ALTER TABLE `log_game`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_game`
--
ALTER TABLE `log_game`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
