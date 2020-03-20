-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 03:20 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `ID_BUKU` int(11) NOT NULL,
  `JUDUL` varchar(100) NOT NULL,
  `HARGA` varchar(15) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  `GAMBAR` varchar(20) NOT NULL,
  `PENGARANG` varchar(15) NOT NULL,
  `DESKRIPSI` mediumtext NOT NULL,
  `KATEGORI` varchar(15) NOT NULL,
  `RATING` int(11) NOT NULL,
  `BEKAS` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`ID_BUKU`, `JUDUL`, `HARGA`, `USERNAME`, `JUMLAH`, `GAMBAR`, `PENGARANG`, `DESKRIPSI`, `KATEGORI`, `RATING`, `BEKAS`) VALUES
(2, 'Kalkulus', '90000', 'suryamahadi', 20, 'kalkulus1.jpg', 'Purcell', 'Buku pelajaran yang bikin kepala puyeng', 'Matematika', 3, 0),
(3, 'Matematika Kelas VII', '120000', 'suryamahadi', 5, 'mtk.jpg', 'Pemerintah', 'Buku pelajaran kesayangan anda', 'Matematika', 4, 1),
(4, 'Sejarah SMA XI', '150000', 'suryamahadi', 10, 'sejarah.jpg', 'Indonesia', 'Buku sejarahnya anak Indonesia', 'Lain-Lain', 0, 0),
(5, 'Teknik Dasar Komputer', '95000', 'share424', 150, 'komp.jpg', 'Noor Siti Halim', 'Buku ini berisi dasar-dasar teknik komputer, mulai dari bab pertama dan kedua yang merupakan penjelasan tentang mikroprosesor, serta pemaparan organisasi dan arsitektur komputer. Termasuk di dalamnya berupa penjelasan fungsi dari bagian-bagian CPU, siklus instruksi, set instruksi dan mode pengalamatannya. Selain itu, pada bab-bab berikutnya dijelaskan pula mengenai sistem bus, sistem input/output, komunikasi serial dan penjelasan beberapa protokol komunikasi.\r\n\r\nPenulis berharap dengan hadirnya buku ini dapat memperkaya khasanah referensi bagi mereka yang mengajar dan belajar dalam bidang sistem komputer maupun teknik komputer di tingkat SMK khususnya, karena dalam penyusunannya, penulis banyak menyesuaikan dengan silabus sistem komputer dan komputer terapan kurikulum 2013 tingkat SMK. Namun, tidak menutup kemungkinan bagi para pelajar di tingkat perguruan tinggi maupun dari kalangan umum juga dapat menggunakan buku ini.', 'Komputer', 0, 1),
(6, 'Kupas Tuntas Istilah No Programming', '34230', 'share424', 200, 'coding.jpg', 'Fiqih Ismawan, ', 'Pernahkah Anda membayangkan bagaimana membuat sebuah prototipe aplikasi program dengan cara yang sangat mudah, praktis, interaktif, dan powerful?\r\n\r\nKemudian dengan tool apakah, Anda dapat membuat sebuah prototipe aplikasi program tersebut? Dan yang paling utama, memakan waktu berapa lamakah Anda dapat membuatnya? Belum lagi ketika Anda mengalami kesulitan dalam merancang sebuah konsep serta menyimulasikan prototipe aplikasi program yang Anda buat tersebut. Sungguh sangat rumit dan memakan waktu yang cukup lama untuk memikirkan hal itu semua.\r\n\r\nKini semua hal tersebut dapat terjawab dengan mudah dan praktis. Semua dapat dilakukan dan dinikmati secara instan, powerful, dan praktis dalam satu sentuhan pada satu tool saja. Sehingga Anda tak perlu khawatir dengan permasalahan-permasalahan yang Anda alami sebelumnya. Sungguh sangat menyebalkan dan membosankan, jika Anda harus membuat sebuah prototipe aplikasi program dengan sekumpulan coding yang membingungkan. Hadirnya istilah \"NO PROGRAMMING\" atau lebih dikenal dengan istilah \"TANPA CODING\", kini sudah dapat Anda nikmati dalam membangun sebuah prototipe aplikasi program.\r\n\r\nPembahasan dalam buku:\r\n- Menjelaskan konsep No Programming, di mana pembaca tidak akan  menemukan konsep itu pada jenis buku pemrograman lain.\r\n- Memungkinkan pembaca memahami dan mempercayai, ternyata ada sebuah konsep revolusioner dalam dunia programming, yakni membuat program aplikasi tanpa coding.\r\n- Memungkinkan pembaca menentukan konsep aplikasi apa yang dibuat sesuai dengan kebutuhan device. Mulai dari device android, iphone, tablet, website, google glass, dan lainnya yang diinginkan, kemudian mengeksplorasi ide serta kreativitas dalam membuat wireframe prototipe program aplikasi tersebut. Menyajikan contoh studi kasus prototipe program aplikasi sebagai bahan acuan dalam kebutuhan sistem.\r\n- Memberikan gambaran nyata pada dunia pemrograman bahwa ada sebuah konsep NO PROGRAMMING dalam membangun prototipe atau wireframe program aplikasi mobile, web, dan lain-lain.\r\n- Bersifat To The Point, tidak banyak teori, dan tidak bertele-tele dalam penjelasannya. ', 'Komputer', 5, 1),
(7, 'Kalkulus Dasar', '70000', 'share424', 5, 'kalku2.jpg', 'Sunkan E. Gauta', 'Isi:\r\nHimpunan dan Fungsi\r\nLimit\r\nTurunan\r\nIntegral\r\nTurunan Parsial dan Turunan Berarah\r\nAplikasi Turunan dan Integral\r\nDeret Tak Hingga\r\nPengantar Persamaan Diferensial', 'Matematika', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID_HISTORY` varchar(10) NOT NULL,
  `ID_BUKU` varchar(10) NOT NULL,
  `UNAME_PENJUAL` varchar(20) NOT NULL,
  `UNAME_PEMBELI` varchar(20) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JUMLAH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `ID_KERANJANG` int(11) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `ID_BUKU` int(11) NOT NULL,
  `JUMLAH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`ID_KERANJANG`, `USERNAME`, `ID_BUKU`, `JUMLAH`) VALUES
(1, 'share424', 2, 1),
(2, 'share424', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ID_RATING` varchar(10) NOT NULL,
  `ID_BUKU` varchar(10) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `RATING` varchar(15) NOT NULL,
  `KOMENTAR` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `ALAMAT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`, `NAMA`, `EMAIL`, `ALAMAT`) VALUES
('share424', '12345', 'Made Raharja Surya M', 'share424@gmail.com', 'Sukabirus'),
('suryamahadi', 'qwert', 'Surya Maha', 'share@gmail.com', 'Sukapura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID_BUKU`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID_HISTORY`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`ID_KERANJANG`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ID_RATING`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `ID_BUKU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `ID_KERANJANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
