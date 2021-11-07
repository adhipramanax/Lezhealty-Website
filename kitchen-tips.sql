-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 03:16 PM
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
-- Table structure for table `kitchen-tips`
--

CREATE TABLE `kitchen-tips` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitchen-tips`
--

INSERT INTO `kitchen-tips` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(2, 'Membilas Sayur dengan Garam', 'Saat mencuci kangkung, arnong/selada air atau genjer serta tanaman air lainnya jangan lupa saat bilasan pertama bubuhkan sesendok garam lalu diamkan sejenak agar binatang-binatan kecil yang mungkin hidup dibatang dan daunnya mati. Biasanya yang hobi nongkrong disitu lintah, keong, ulat dan cacing air. Brokoli dan kembang kol juga sering ada ulatnya, jadi jangan lupa pula menggunakan cara ini.', 'membilas-sayur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kitchen-tips`
--
ALTER TABLE `kitchen-tips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kitchen-tips`
--
ALTER TABLE `kitchen-tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
