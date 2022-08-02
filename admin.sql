-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 02, 2022 at 09:00 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_db`
--

CREATE TABLE `post_db` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_db`
--

INSERT INTO `post_db` (`id`, `title`, `content`, `photo`, `user_name`) VALUES
(2, 'mysql', 'phpda malumotlarni qoshish va mysqlga saqlash ', 'salom privet', 'Salohiddin'),
(3, 'css', 'web dizayner', 'salom', 'Salohiddin'),
(6, 'ona tili adabiyot', 'fel soz turkumi va Alpomush', 'hello', 'Salohiddin'),
(7, 'fizika va matematika', 'dinamika va kvadrat tenglama', 'salom', 'Shoxruz'),
(8, 'kampyuter savodxonligi', 'word, excel, power poitda ishlash', 'hello', 'Samandar'),
(10, 'Malumotlar bazasi', 'INSER INTO', 'salom', 'Salohiddin'),
(11, 'salom', 'salom', 'salom', 'salom'),
(12, 'python', 'pythonda satr bilan ishlash', 'salom', 'Salohiddin'),
(19, 'kompyuter', 'word va excel bilan ishlash', 'file/1659463110_my_picc.jpg', 'Salohiddin');

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`id`, `email`, `password`, `name`) VALUES
(1, 'nuriddinovsalohiddin@gmail.com', 'asdfghjkxcvbnm123456', 'salohiddin'),
(2, 'nuridinovsalohiddin02@gmail.com', 'efwfwrfrf5465145s1', 'Salohiddin'),
(4, 'nuridinovsalohiddin02@gmail.com', 'salohiddin12345', 'Salohiddin'),
(5, 'odilovmuhammad@gmail.com', 'muhammad', 'Muhammad'),
(6, 'odilovmuhammad@gmail.com', 'muhammad', 'Muhammad'),
(10, 'salohiddin@gmail.com', 'salohiddin', 'salohiddin'),
(11, 'rustam@gmail.com', 'rustam', 'rustam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_db`
--
ALTER TABLE `post_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_db`
--
ALTER TABLE `post_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
