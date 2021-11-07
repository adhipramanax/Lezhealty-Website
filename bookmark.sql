-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 01:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_and_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`id`, `username`, `blog_name`, `status`) VALUES
(1, 'Fakhrie', 'teh-cocktail', 'OFF'),
(2, 'harukanakagawa', 'teh-cocktail', 'OFF'),
(4, 'harukanakagawa12', 'sayur-asem', 'OFF'),
(6, 'melody', 'bubur-edamame-telur-puyuh', 'OFF'),
(7, 'melody', 'ayam-krispy-bumbu-cabai', 'ON'),
(8, 'melody', 'tumis-udang-buncis', 'ON'),
(9, 'melody', 'tumis-kacang-panjang-dan-tempe', 'OFF'),
(10, 'akicha', 'sayur-asem', 'ON'),
(11, 'melody', 'sambal-goreng-tempe', 'ON'),
(12, 'melody', 'resep-kangkung-krispy', 'ON'),
(13, 'melody', 'kangkung-bumbu-tauco', 'ON'),
(14, 'melody', 'kangkung-bumbu-kemiri-pedas', 'ON');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
