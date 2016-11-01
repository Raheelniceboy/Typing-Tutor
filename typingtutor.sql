-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2016 at 05:01 AM
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
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `src`) VALUES
(1, 'text/lesson/home_row/fj.txt'),
(2, 'text/lesson/home_row/dk.txt'),
(3, 'text/lesson/home_row/sl.txt'),
(4, 'text/lesson/home_row/a;.txt'),
(5, 'text/lesson/home_row/gh.txt'),
(6, 'text/lesson/home_row/home_row_keys.txt'),
(7, 'text/lesson/top_row/ru.txt'),
(8, 'text/lesson/top_row/ei.txt'),
(9, 'text/lesson/top_row/wo.txt'),
(10, 'text/lesson/top_row/qp.txt'),
(11, 'text/lesson/top_row/ty.txt'),
(12, 'text/lesson/top_row/top_row.txt'),
(13, 'text/lesson/bottom_row/vm.txt'),
(14, 'text/lesson/bottom_row/c,.txt'),
(15, 'text/lesson/bottom_row/x..txt'),
(16, 'text/lesson/bottom_row/z/.txt'),
(17, 'text/lesson/bottom_row/bn.txt'),
(18, 'text/lesson/bottom_row/bottom_row.txt'),
(19, 'text/lesson/number_row/47.txt'),
(20, 'text/lesson/number_row/38.txt'),
(21, 'text/lesson/number_row/29.txt'),
(22, 'text/lesson/number_row/10.txt'),
(23, 'text/lesson/number_row/56.txt'),
(24, 'text/lesson/number_row/number_row.txt'),
(25, 'text/lesson/shift/home_row.txt'),
(26, 'text/lesson/shift/top_row.txt'),
(27, 'text/lesson/shift/bottom_row.txt'),
(28, 'text/lesson/other/punctuations.txt');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `text_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`) VALUES
('hahaha'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com'),
('nguyentruonggiang71096@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`text_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `text_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
