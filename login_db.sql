-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 07:29 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dictionary`
--

CREATE TABLE `dictionary` (
  `word` varchar(100) NOT NULL,
  `meaning` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dictionary`
--

INSERT INTO `dictionary` (`word`, `meaning`) VALUES
('Baffled', 'lasjdflkaf'),
('Book', 'বই'),
('Brother', 'ভাই'),
('Come', ' আসো'),
('Crowd', 'ভিড়'),
('District', ' জেলা'),
('Division', 'বিভাগ'),
('Find', 'অনুসন্ধান'),
('Get', 'পাওয়া'),
('Go', 'যাওয়া'),
('Gold', 'সোনা'),
('Hello', 'হ্যালো'),
('Let', 'দিন'),
('Lie', 'মিথ্যা'),
('My', 'আমার'),
('Never', 'কখনই না'),
('Nice', 'ভালো'),
('One', 'এক'),
('Somebody', 'কেউ'),
('Translation', 'অনুবাদ'),
('Travel', 'ভ্রমণ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_id`, `username`, `password`, `score`) VALUES
(5, 'Bolla', 40928486005248, 'samio', 'samio', 4),
(6, 'Ibrahim Shakib', 557148585467048314, 'sakib', 'sakib', 3),
(7, 'Khondokar Fahad Mohammed', 497, 'fahad', 'fahad', 1),
(8, 'Mohammed Rakib', 5256322326096926693, 'rakib', 'rakib', 3),
(9, 'Riajul Kabir', 83482354443460, 'riaj', 'riaj', 2),
(12, 'Nazmul Huda Ahmed', 43178140038, 'huda', 'huda', 0),
(13, 'Abdur Rahman', 6429012173, 'abdur', 'abdur', 0),
(14, 'Humaid As Syeed ', 4918397645153, 'sayeed', '1234', 9),
(15, 'fasf', 4257210298357240638, 'fsf', 'fa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dictionary`
--
ALTER TABLE `dictionary`
  ADD PRIMARY KEY (`word`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
