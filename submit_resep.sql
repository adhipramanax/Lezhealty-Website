-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 04:07 PM
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
-- Table structure for table `submit_resep`
--

CREATE TABLE `submit_resep` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_resep` varchar(1000) NOT NULL,
  `deskripsi_resep` varchar(1000) NOT NULL,
  `komposisi` varchar(2000) NOT NULL,
  `cara_buat` varchar(2000) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status_resep` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_resep`
--

INSERT INTO `submit_resep` (`id`, `username`, `nama_resep`, `deskripsi_resep`, `komposisi`, `cara_buat`, `gambar`, `status_resep`) VALUES
(4, 'shani_indira', 'Kentang Goreng Renyah Ala KFC', 'French fries atau kentang goreng seringkali dijadikan sebagai camilan saat waktu senggang. Apalagi kalau kentang goreng krispi dicampur dengan bumbu keju jadi makin enak. Kentang goreng bisa dibikin sendiri dengan tekstur yang garing di luar dan empuk di dalamnya.', '2 buah kentang ukuran besar\r\nGaram secukupnya\r\nAir secukupnya\r\nMinyak goreng', 'Cuci bersih kentang, Bunda bisa mengupasnya atau tidak. Lalu potong tipis kemudian baru potong panjang.\r\n\r\nRebus air hingga mendidih, dan tambahkan garam secukupnya supaya suhu stabil. Setelah mendidih, rebus kentang sebentar saja. Angkat dan letakkan dalam tray. Dinginkan baru setelah itu masukkan ke dalam freezer.\r\n\r\nPanaskan minyak hingga suhu 170 derajat Celcius. Keluarkan kentang dari freezer, lalu keringkan dengan tisu sebelum digoreng.\r\n\r\nMasukkan kentang jika minyak sudah panas. Goreng hingga kentang mengambang dan berwarna keemasan. Angkat dan tiriskan. Taburkan sedikit garam dan aduk hingga tercampur rata.\r\n\r\nSajikan dengan sambal cocol atau topping kesukaan', 'french-fries-ala-nigella-lawson-1_169.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submit_resep`
--
ALTER TABLE `submit_resep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submit_resep`
--
ALTER TABLE `submit_resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
