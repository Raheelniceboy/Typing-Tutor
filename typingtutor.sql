-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 08:01 PM
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
  `name` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `name`, `src`) VALUES
(1, 'F and J', 'text/lesson/home_row/fj.txt'),
(2, 'D and K', 'text/lesson/home_row/dk.txt'),
(3, 'S and L', 'text/lesson/home_row/sl.txt'),
(4, 'A and ;', 'text/lesson/home_row/a;.txt'),
(5, 'G and H', 'text/lesson/home_row/gh.txt'),
(6, 'Home Row', 'text/lesson/home_row/home_row_keys.txt'),
(7, 'R and U', 'text/lesson/top_row/ru.txt'),
(8, 'E and I', 'text/lesson/top_row/ei.txt'),
(9, 'W and O', 'text/lesson/top_row/wo.txt'),
(10, 'Q and P', 'text/lesson/top_row/qp.txt'),
(11, 'T and Y', 'text/lesson/top_row/ty.txt'),
(12, 'Top Row', 'text/lesson/top_row/top_row.txt'),
(13, 'V and M', 'text/lesson/bottom_row/vm.txt'),
(14, 'C and ,', 'text/lesson/bottom_row/c,.txt'),
(15, 'X and .', 'text/lesson/bottom_row/x..txt'),
(16, 'Z and /', 'text/lesson/bottom_row/z/.txt'),
(17, 'B and N', 'text/lesson/bottom_row/bn.txt'),
(18, 'Bottom Row', 'text/lesson/bottom_row/bottom_row.txt'),
(19, '4 and 7', 'text/lesson/number_row/47.txt'),
(20, '3 and 8', 'text/lesson/number_row/38.txt'),
(21, '2 and 9', 'text/lesson/number_row/29.txt'),
(22, '1 and 0', 'text/lesson/number_row/10.txt'),
(23, '5 and 6', 'text/lesson/number_row/56.txt'),
(24, 'Number Row', 'text/lesson/number_row/number_row.txt'),
(25, 'Home Row', 'text/lesson/shift/home_row.txt'),
(26, '', 'text/lesson/shift/top_row.txt'),
(27, '', 'text/lesson/shift/bottom_row.txt'),
(28, '', 'text/lesson/other/punctuations.txt');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `title_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `cpm` int(11) NOT NULL,
  `accuracy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `user_id`, `type`, `title`, `title_id`, `date`, `time`, `cpm`, `accuracy`) VALUES
(1, '1', '1', '1', 1, '2016-11-05', '1', 1, 1),
(2, '1', '1', '1', 1, '2016-11-05', '1', 1, 1),
(3, '1234234', '1', '1', 1, '2016-11-05', '1', 1, 1),
(4, '1234234', 'lesson', 'a j', 1, '2016-11-05', '1', 1, 1),
(5, '1234234', 'lesson', 'a j', 1, '2016-11-05', '1', 1, 1),
(6, '1', 'lesson', 'D and K', 2, '0000-00-00', '00:00', 0, 100),
(7, '2147483647', 'lesson', 'D and K', 2, '0000-00-00', '00:00', 0, 100),
(8, '2147483647', 'practice', '100 words', 100, '0000-00-00', '00:01', 599, 100),
(9, '2147483647', 'practice', '200 words', 200, '2016-11-06', '00:05', 120, 100),
(10, '2147483647', 'practice', '150 words', 150, '2016-11-06', '00:03', 200, 90),
(11, '2147483647', 'practice', '200 words', 200, '2016-11-06', '00:03', 200, 100),
(12, '1804792313100351', 'lesson', 'D and K', 2, '2016-11-06', '00:01', 300, 100),
(13, '1804792313100351', 'lesson', 'S and L', 3, '2016-11-06', '00:00', 0, 80),
(14, '1804792313100351', 'lesson', 'D and K', 2, '2016-11-06', '00:00', 0, 100),
(15, '1804792313100351', 'practice', '150 words', 150, '2016-11-06', '00:01', 599, 100),
(16, '1804792313100351', 'practice', '200 words', 200, '2016-11-06', '00:02', 300, 100),
(17, '1804792313100351', 'practice', '150 words', 150, '2016-11-06', '00:02', 300, 90);

-- --------------------------------------------------------

--
-- Table structure for table `paragraph`
--

CREATE TABLE `paragraph` (
  `length` int(11) NOT NULL,
  `src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paragraph`
--

INSERT INTO `paragraph` (`length`, `src`) VALUES
(100, 'text/lesson/paragraphs/100.txt'),
(150, 'text/lesson/paragraphs/150.txt'),
(200, 'text/lesson/paragraphs/200.txt');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`) VALUES
('11111'),
('1804792313100351');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `paragraph`
--
ALTER TABLE `paragraph`
  ADD PRIMARY KEY (`length`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
