-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2016 at 08:22 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `role`) VALUES
(1, 'esfdg', 'sdfgh', 'edfghj@rt.cghv', 'gar', 'qwe', 'doctor'),
(2, 'jf``', 'bn', 'hbjn@dfg.fg', 'hbjn', 'null', ''),
(3, 'ghj', 'ghjk', 'yguhjk@dfg.bn', 'yghjk', 'null', ''),
(4, 'qwe', 'qwe', 'we@jjhh.bjh', 'qwe', 'null', ''),
(5, 'qwer', 'svb', 'cvbn@n.hju', 'qwer', 'qwer', 'patient'),
(6, 'garvit', 'khamesra', 'gads@vch.dse', 'garvit', 'khamesra', 'patient'),
(7, 'fghbn`fghjkl', 'fhgjkj', 'hgjjkm@gfvbn.cvb', 'sdfghb', 'sdfghj', 'patient'),
(8, 'nbm,', 'gfhnm,', 'hgjk@uyjk.nj', 'dfghj', 'gfhhg', 'admin'),
(9, 'ythjbk', 'gjhjknl', 'hkjlhjk@ffgbnm.vy', 'asd', 'asd', 'doctor'),
(10, 'fghj', 'gjhkl.', 'jhkl@65tyjh.vbn', 'hgmn', 'jhmn,', 'patient'),
(11, 'fhgm', 'fghgm', 'fhbmn@rfgh.vbj', 'qwerty', 'qwerty', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
