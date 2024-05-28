-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: May 29, 2024 at 03:25 AM
-- Server version: 10.6.12-MariaDB-1:10.6.12+maria~ubu2004-log
-- PHP Version: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghina`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE `bio` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` varchar(15) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `age` varchar(5) NOT NULL,
  `interest` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`id`, `name`, `position`, `phone`, `address`, `city`, `age`, `interest`, `mail`, `about`) VALUES
(1, 'Ghina Nur Agsya', 'Student', '+6281215616512', 'Perum Griya Gaharu Mas Blok C10 No 12A', 'Sukabumi', '21', 'Graphic Design', 'gnuragsya@gmail.com', 'I am a creative and enthusiastic individual in the field of graphic design. I am always inspired by the visual power to convey strong messages. From art to digital design, I find joy in creating beautiful and meaningful things. With technical skills and aesthetic sensitivity, I believe that design has great potential to change the world. I am eager to continue learning and growing in this industry, and hope to contribute to creating memorable design experiences for users.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bio`
--
ALTER TABLE `bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
