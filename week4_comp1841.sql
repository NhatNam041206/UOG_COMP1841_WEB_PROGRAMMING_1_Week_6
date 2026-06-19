-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2026 at 03:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `week4_comp1841`
--

-- --------------------------------------------------------

--
-- Table structure for table `joke`
--

CREATE TABLE `joke` (
  `id` int(11) NOT NULL,
  `joketext` text DEFAULT NULL,
  `jokedate` date NOT NULL,
  `jokeimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `joke`
--

INSERT INTO `joke` (`id`, `joketext`, `jokedate`, `jokeimage`) VALUES
(1, 'Why did the chicken cross the road? To get to the other\r\n➥ side!', '2024-04-01', 'chicken.jpg'),
(2, 'Why did the chicken cross the road? To get to the other side!', '2024-04-01', '1.jpg'),
(3, 'Why did the chicken cross the road? To get to the other\r\n➥ side!', '2024-04-01', '2.jpg'),
(4, 'Knock-knock! Who\'s there? Boo! \"Boo\" who? Don\'t cry; it\'s only a\r\n➥ joke!', '2024-04-01', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joke`
--
ALTER TABLE `joke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joke`
--
ALTER TABLE `joke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
