-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 06:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `cover` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `url`, `cover`, `date`) VALUES
(1, 'Artikel Pertama Saya', '<p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'artikel-pertama-saya', 0, '2020-02-17 17:39:15'),
(2, 'Artikel Kedua', '<p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'artikel-kedua', 0, '2020-02-18 05:02:02'),
(3, 'Artikel Pembaharuan', '<p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'artikel-pembaharuan', 0, '2020-02-18 05:02:58'),
(4, 'Artikel Keempat', 'asjokdoaks saiojdaiskd iasijdilka iosajd', '', 0, '2020-02-18 03:32:59'),
(5, 'Artikel Kelima', 'dsfyh erdf tjgh sedfhyg', '', 0, '2020-02-18 03:42:43'),
(6, 'Artikel Kelima', 'dsfyh erdf tjgh sedfhyg', '', 0, '2020-02-18 03:50:01'),
(7, 'Artikel Kelima', 'dsfyh erdf tjgh sedfhyg', '', 0, '2020-02-18 03:50:46'),
(8, 'Artikel Kelima', 'dsfyh erdf tjgh sedfhyg', '', 0, '2020-02-18 03:50:49'),
(9, '', '', '', 0, '2020-02-18 03:51:08'),
(13, 'Artikel Ketujuh', 'olkjsdjkh sahoidh dc oisahoidh a  oasihdoiahois', '', 0, '2020-02-18 04:09:19'),
(14, 'Artikel Terakhir', 'esrdfgytgh ujhnrfd rtfgcv aesrduhf esdfg', 'artikel-terakhir', 0, '2020-02-18 04:24:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
