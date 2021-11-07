-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 03:02 PM
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
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tag1` varchar(20) NOT NULL,
  `tag2` varchar(20) NOT NULL,
  `tag3` varchar(20) NOT NULL,
  `tag4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id`, `sumber`, `judul`, `deskripsi`, `tag1`, `tag2`, `tag3`, `tag4`) VALUES
(1, 'rica-rica', 'Ayam Rica-Rica', 'Rica-rica merupakan salah satu bumbu bercita rasa pedas yang berasal dari Manado, Sulawesi Utara. Bumbu rica-rica cocok dimasak dengan ikan, daging sapi, atau ayam. Kali ini, kamu bisa mencoba olahan ayam dengan bumbu rica-rica yang pedas manis', 'Pedas', 'Lauk', 'Goreng', ''),
(3, 'teriyaki-tahu', 'Tahu Teriyaki', 'Ingin menikmati saus teriyaki tanpa daging sapi? Bisa kok. Dengan menggunakan tahu sebagai alternatif daging tentunya akan menghadirkan masakan yang lebih sehat. Cita rasa yang yang disajikan juga tidak kalah enak dengan teriyaki yang menggunakan daging sapi sebagai komposisi utamanya.', 'Camilan', '', '', ''),
(4, 'mie-ayam-jakarta', 'Mie Ayam Jakarta Spesial', 'Mie ayam memang menjadi salah satu makanan favori banyak orang, rasanya yang enak dan mengenyangkan bisa menjadi pilihan untuk makan siang, karena sudah terdapat karbohidrat, sayuran dan protein. Kali ini, kita akan berbagi resep mie ayam Jakarta spesial, ini terbuat dari mie basah, toping ayam dan tambahan sayuran dengan bumbu yang meresap dan nikmat.', 'Makanan Basah', 'Rebus', '', ''),
(5, 'soto-vegan', 'Soto Bening Vegetarian', 'Sedang mencari ide resep soto bening vegetarian yang unik? Cara membuatnya memang susah-susah gampang. Jika salah mengolah maka hasilnya akan hambar dan bahkan tidak sedap. Padahal soto bening vegetarian yang enak seharusnya punya aroma dan rasa yang bisa memancing selera kita.', 'Rebus', 'Makanan Basah', 'Sayur', ''),
(6, 'es-buah', 'Es Buah Kekinian', 'Eksistensi dari es buah memang selalu terjaga sampai saat ini, meski kemunculannya sudah sejak lama. Minuman ini masih menjadi satu sajian yang melegakan dahaga ketika panas terik. Dengan berbagai modifikasi bahan, es buah kekinian pun hadir dan menjadi minuman andalan.\r\n', 'Minuman', '', '', ''),
(7, 'omelet', 'Telur Omelet ala Hotel', 'Telur dadar atau omelet adalah variasi hidangan telur goreng yang disiapkan dengan cara mengocok telur dan menggorengnya dengan minyak goreng atau mentega panas di sebuah wajan. omelette terkenal sebagai makanan yang sering ada di prasmanan hotel saat sarapan. Ciri khas omelet hotel biasanya berisi paprika dan harum mentega. ', 'Breakfast', 'Goreng', '', ''),
(8, 'semur-ayam-saus-tiram', 'Semur Ayam Saus Tiram Jamur Kancing', 'Semur adalah masakan asimilasi dari Eropa yang menjadi masakan rumahan populer di keluarga Indonesia. Berbagai protein hewani dan nabati bisa menjadi bintang utamanya, tidak terkecuali ayam. Sedangkan untuk pelengkapnya, semur sering ditambahkan potongan kentang dan tomat.', 'Makanan Basah', 'Lauk', '', ''),
(9, 'sambal-matah', 'Sambal Matah', 'Sambal matah adalah salah satu sambal khas Indonesia yang berasal dari Bali. Sambal ini tidak mengalami proses masak dengan api. Hanya iris-mengiris semua bahan lalu campur dan beri sedikit minyak kelapa serta di bumbui dengan sedikit garam dan di beri perasan jeruk nipis.', 'Pedas', 'Sambal', '', ''),
(10, 'telur-ceplok-masak-santan', 'Telur Ceplok Masak Santan', 'Sajikan dan nikmati enak dan sedapnya olahan telur ceplok yang disajikan dengan variasi bumbu berbeda yang lezat. Sajian kali ini akan dapat dihidangka bersama dengan sepiring nasi hangat yang enak dan sedap.', 'Makanan Basah', 'Lauk', 'Goreng', ''),
(11, 'tahu-cabai-garam-praktis', 'Tahu Cabai Garam Praktis', 'Resep tahu cabai garam cukup mudah dipraktikkan di rumah. Bahan-bahan yang digunakan pun hampir selalu ada di tiap dapur.  Tahu cabai garam biasa disajikan di restoran chinese food. Teksturnya yang kering dan rasanya yang gurih membuat tahu cabai garam cocok dijadikan sebagai camilan atau lauk makan.', 'Camilan', 'Goreng', 'Lauk', ''),
(12, 'teh-cocktail', 'Teh Cocktail', 'Cocktail buah atau koktil adalah makanan yang terbuat dari potongan buah dan sirup serta disajikan dalam keadaan dingin. Meskipun namanya mirip dengan minuman beralkohol yang disebut “koktail”, koktail buah sama sekali tidak dicampur atau mengandung alkohol. Cocktail buah dapat dikreasikan menjadi aneka resep yang menggugah selera.', 'Minuman', '', '', ''),
(13, 'ayam-krispy-bumbu-cabai', 'Ayam Krispy Bumbu Cabai', 'Ayam bisa diolah menjadi berbagai macam menu makanan. Bahkan saat ini, ayam yang sudah digoreng dengan tepung diberi sedikit sensasi hancur dengan cara digeprek.\r\n\r\nMemangnya, apa saja kandungan gizi di dalam daging ayam segar? Berdasarkan Data Komposisi Pangan Indonesia, 100 gram daging ayam memiliki kandungan gizi', 'Lauk', 'Pedas', 'Goreng', ''),
(14, 'bubur-edamame-telur-puyuh', 'Bubur Edamame Telur Puyuh', 'Edamame merupakan sumber protein nabati untuk membangun otot dan sel-sel tubuh. Edamame juga mengandung serat yang baik untuk pencernaan anak.', 'Makanan Basah', 'Rebus', '', ''),
(15, 'kangkung-bumbu-kemiri-pedas', 'Kangkung Bumbu Kemiri Pedas', 'Kangkung bumbu kemiri pedas. Kangkung merupakan salah satu tanaman yang banyak ditemui di negara-negara Asia, khususnya di Indonesia.', 'Sayur', 'Pedas', '', ''),
(16, 'kangkung-bumbu-tauco', 'Kangkung Bumbu Tauco', 'Kangkung bumbu tauco. kangkung Tak jauh berbeda dengan jenis sayuran lainnya, sayuran yang punya nama latin Ipomoea aquatica ini mengandung sejumlah nutrisi yang baik bagi tubuh.', 'Sayur', 'Makanan Basah', '', ''),
(17, 'resep-kangkung-krispy', 'Resep Kangkung Krispy', 'Kangkung merupakan salah satu tanaman yang banyak ditemui di negara-negara Asia, khususnya di Indonesia. Dikutip dari situs Data Komposisi Pangan Indonesia, berikut ini adalah kandungan gizi yang terdapat pada 100 gram (g) kangkung segar', 'Sayur', 'Camilan', 'Goreng', ''),
(18, 'sambal-goreng-tempe', 'Sambal Goreng Tempe', 'Tempe adalah makanan yang pasti tidak asing bagi Anda. Makanan fermentasi dari kacang kedelai ini telah menemani hidup sebagai orang Indonesia. Rasa khas tempe dan struktur yang sangat berbeda dari tahu ini selain murah juga bisa bikin ketagihan. Beragam kandungan pada tempe menyimpan banyak manfaat bagi kesehatan tubuh.', 'Sambal', 'Pedas', 'Goreng', 'Makanan Basah'),
(19, 'sambal-pelecing-kangkung', 'Sambal Pelecing Kangkung', 'Kangkung adalah tumbuhan yang termasuk jenis sayur-sayuran dan ditanam sebagai makanan. Tumbuhan ini banyak dijual di pasar-pasar. ', 'Sambal', 'Pedas', '', ''),
(20, 'sayur-asem', 'Sayur Asem', 'Sayur asem adalah satu di antara menu masakan yang memiliki rasa asam, tetapi ada pula yang membuatnya menjadi pedas. Masakan ini terdiri dari berbagai campuran sayur-sayuran dan kacang-kacangan.', 'Sayur', 'Kuah', 'Makanan Basah', 'Rebus'),
(21, 'tumis-kacang-panjang-dan-tempe', 'Tumis Kacang Panjang dan Tempe', 'Kacang panjang tentu buka nama sayuran yang terdengar asing di telinga masyarakat Indonesia. Meski umum dimakan, mungkin tak banyak yang mengetahui kandungan gizi dan manfaat kesehatan dari kacang panjang.', 'Sayur', 'Makanan Basah', 'Lauk', 'Goreng'),
(22, 'tumis-udang-buncis', 'Tumis Udang Buncis', 'Udang merupakan salah satu boga bahari yang banyak dikonsumsi di seluruh dunia. Dalam dunia hewan, udang masuk ke dalam ordo decapoda dan banyak dibudidayakan secara komersial dalam budi daya perairan.', 'Sayur', 'Makanan Basah', 'Lauk', 'Goreng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
