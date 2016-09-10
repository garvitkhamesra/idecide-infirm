-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2016 at 08:24 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `firstname`, `lastname`, `bday`, `occupation`, `gender`, `username`, `password`, `image`) VALUES
(1, ' garvit', 'Khamesra', '2016-06-07', 'Student', 'Male', 'n ', 'bn ', ''),
(2, ' garvit', 'Khamesra', '2016-06-07', 'Student', 'Male', 'n ', 'bn ', ''),
(3, ' garvit', 'Khamesra', '2016-06-07', 'Student', 'Male', 'garvit', '123456', ''),
(4, ' garvit', 'Khamesra', '1996-09-24', 'Student', 'Male', 'garvit', '123456', ''),
(5, ' garvit', 'Khamesra', '2016-06-07', 'Student', 'Male', 'user', 'user', ''),
(6, ' garvit', 'Khamesra', '2016-06-07', 'Student', 'Male', 'n sdv', 'sdv', ''),
(7, ' garvit', 'wew', '2016-06-07', 'Student', 'Male', 'savvxDV', 'egdsDGV', ''),
(8, ' garvit', 'Khamesra', '2016-06-07', 'Student', 'Male', 'gark', '123456', ''),
(9, ' garvit', 'Khamesra', '2016-06-07', 'Student', 'Male', 'garkum', '123456', ''),
(10, ' garvit', 'Khamesra', '2016-06-07', 'Student', 'Male', 'aX', 'ax', ''),
(11, ' garvit', 'Khamesra', '2016-06-07', 'Student', 'Male', 'kjhbvc', 'mnbv ', ''),
(12, ' garvit', 'lkhhjvgv', '2016-06-07', 'Student', 'Male', 'n kjhgvc', 'bn jkhg', ''),
(13, 'vnjgjhgjhg', 'jhjgmjhg', '2016-06-06', 'Student', 'Male', 'usern', '123456789', ''),
(14, ' garvit', 'Khamesra', '2016-06-07', 'Private ', 'Male', 'kha', 'mes', ''),
(15, 'Garvit ', 'khamesra', '2016-06-07', 'Student', 'Male', 'qwerty', 'qwerty', ''),
(16, 'admin', 'admin', '2000-09-10', 'Student', 'Male', 'admin', 'admin123456', ''),
(21, 'garvit', 'khamesra', '1996-09-24', 'Private ', 'Male', 'garkum', '122222222', ''),
(22, 'garvit', 'khamesra', '0045-06-05', 'Student', 'Male', 'garkumpo', '122222222222222', ''),
(23, 'vnbm,', 'vbmn,m', '0088-07-08', 'Student', 'Male', 'akljhgcf', 'kjlkjhgcfx', ''),
(24, 'vnbm,', 'vbmn,m', '0088-07-08', 'Student', 'Male', 'akljhgcf', 'likjghfd', ''),
(25, 'kljkhghf', 'kjhjgnfbvc', '0054-04-05', 'Student', 'Male', 'kjhgfgdv', 'jl,hmgnfb', ''),
(26, 'oiuyhgfd', 'kljhgfd', '0042-04-05', 'Student', 'Male', 'hjvngvbc', ';lk,jmnhgbfvd', ''),
(27, 'kljkhcv', 'o;likjhg', '0553-08-06', 'Student', 'Male', 'yhgbjlnkml', 'fxcgvbmn, m.,/.', 'image/a.jpg'),
(28, 'fsdcz', 'l;kjhgv', '0022-08-05', 'Student', 'Male', 'kljhgv', 'jkhvbjbbn,m', 'image/a.jpg'),
(29, 'hzcxvbnm', 'vbnm,.', '0042-07-05', 'Student', 'Male', 'iohjg', '6532.68532.', 'image/a.jpg'),
(30, 'Garvit', 'Khamesra', '1996-09-24', 'Student', 'Male', 'adad', '123456789', 'image/john.jpg'),
(31, ' garvit', 'admin', '2016-06-15', 'Student', 'Male', 'adad', '123456789', 'image/john.jpg'),
(32, 'xfcbvn bm', 'fcvnbmn,m', '2016-06-15', 'Student', 'Male', 'erdtfgjkjlj', 'erdtfgjh', 'image/a.jpg'),
(33, 'fghgbjn', 'jbnm,', '2016-06-15', 'Student', 'Male', 'adad', '123456789', 'image/a.jpg'),
(34, 'lkjhg', 'ljkhgf', '2016-06-15', 'Student', 'Male', 'nmbvccxljkhgf', 'cvbnm,.//.m', 'image/a.jpg'),
(35, 'garvit', 'khamesra', '1996-02-04', 'Student', 'Male', 'qwerty', 'qwerty123456789', 'image/game_of_thrones_houses_x_px_dragons_house_targaryen_wallpaper.jpg'),
(36, 'sdv', 'eadz', '3210-05-04', 'Student', 'Male', 'ghbnm,', 'bnm,hbjbmn,', 'myblog/image/game_of_thrones_houses_x_px_dragons_house_targaryen_wallpaper.jpg'),
(37, 'sdv', 'eadz', '3210-05-04', 'Student', 'Male', 'ghbnm,sacc', 'asvasvasas', 'myblog/image/will-game-of-thrones-season-6-finally-introduce-us-to-lady-stoneheart-595318.jpg');

-- --------------------------------------------------------
