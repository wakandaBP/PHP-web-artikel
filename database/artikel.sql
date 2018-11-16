-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 02:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `penulis_artikel` varchar(30) NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `judul_artikel`, `penulis_artikel`, `isi_artikel`) VALUES
(1, 'Suit Protokol Internet', 'Wikipedia', 'Suit protokol internet merupakan model jaringan komputer dan rangkaian protokol komunikasi yang digunakan di internet dan jaringan komputer yang mirip. Ia dikenal dengan TCP/IP (singkatan dari Transmission Control Protocol/Internet Protocol) yang diterjemahkan menjadi Protokol Kendali Transmisi/Protokol Internet, yang merupakan gabungan dari protokol TCP (Transmission Control Protocol) dan IP (Internet Protocol) sebagai sekelompok protokol yang mengatur komunikasi data dalam proses tukar-menukar data dari satu komputer ke komputer lain di dalam jaringan internet yang akan memastikan pengiriman data sampai ke alamat yang dituju. Protokol ini tidaklah dapat berdiri sendiri, karena memang protokol ini berupa kumpulan protokol (protocol suite). Protokol ini juga merupakan protokol yang paling banyak digunakan saat ini, karena protokol ini mampu bekerja dan diterapkan pada lintas perangkat lunak dalam berbagai sistem operasi Istilah yang diberikan kepada perangkat lunak ini adalah TCP/IP stack.\r\n\r\nProtokol TCP/IP dikembangkan pada akhir dekade 1970-an hingga awal 1980-an sebagai sebuah protokol standar untuk menghubungkan komputer-komputer dan jaringan untuk membentuk sebuah jaringan yang luas (WAN). TCP/IP merupakan sebuah standar jaringan terbuka yang bersifat independen terhadap mekanisme transport jaringan fisik yang digunakan, sehingga dapat digunakan di mana saja. Protokol ini menggunakan skema pengalamatan yang sederhana yang disebut sebagai alamat IP (IP Address) yang mengizinkan hingga beberapa ratus juta komputer untuk dapat saling berhubungan satu sama lainnya di Internet. Protokol ini juga bersifat routable yang berarti protokol ini cocok untuk menghubungkan sistem-sistem berbeda (seperti Microsoft Windows dan keluarga UNIX) untuk membentuk jaringan yang heterogen.\r\n\r\nProtokol TCP/IP selalu berevolusi seiring dengan waktu, mengingat semakin banyaknya kebutuhan terhadap jaringan komputer dan Internet. Pengembangan ini dilakukan oleh beberapa badan, seperti halnya Internet Society (ISOC), Internet Architecture Board (IAB), dan Internet Engineering Task Force (IETF). Macam-macam protokol yang berjalan di atas TCP/IP, skema pengalamatan, dan konsep TCP/IP didefinisikan dalam dokumen yang disebut sebagai Request for Comments (RFC) yang dikeluarkan oleh IETF.'),
(2, 'Sejarah wakanda', 'Kiren Harirharan', 'Pada dasarnya sejarah di benua Afrika jarang yang dikisahkan melalui media tertulis. Kebanyakan merupakan cerita dari mulut ke mulut. Maka dari itu kadang cerita mengenai sejarah Afrika menjadi kurang detil. Namun, jejak sejarah ini biasanya dilengkapi oleh catatan dari orang-orang asing, seperti penjelajah Eropa hingga pedagang dari Arab.'),
(3, 'Apa itu Ubuntu?', 'Ubuntu.id', '\"Ubuntu\" berasal dari bahasa kuno Afrika, yang berarti \"rasa perikemanusian terhadap sesama manusia\". Ubuntu juga bisa berarti \"aku adalah aku karena keberadaan kita semua\". Tujuan dari distribusi Linux Ubuntu adalah membawa semangat yang terkandung di dalam Ubuntu ke dalam dunia perangkat lunak.\r\n\r\nUbuntu adalah sistem operasi lengkap berbasis Linux, tersedia secara bebas dan mempunyai dukungan baik yang berasal dari komunitas maupun tenaga ahli profesional. Ubuntu sendiri dikembangkan oleh komunitas sukarelawan Ubuntu dan kami mengundang Anda untuk turut serta berpartisipasi mengembangkan Ubuntu! \r\nKomunitas Ubuntu dibentuk berdasarkan gagasan yang terdapat di dalam filosofi Ubuntu: bahwa perangkat lunak harus tersedia dengan bebas biaya, bahwa aplikasi perangkat lunak tersebut harus dapat digunakan dalam bahasa lokal masing-masing dan untuk orang-orang yang mempunyai keterbatasan fisik, dan bahwa pengguna harus mempunyai kebebasan untuk mengubah perangkat lunak sesuai dengan apa yang mereka butuhkan.\r\nPerihal kebebasan inilah yang membuat Ubuntu berbeda dari perangkat lunak berpemilik (proprietary); bukan hanya peralatan yang Anda butuhkan tersedia secara bebas biaya, tetapi Anda juga mempunyai hak untuk memodifikasi perangkat lunak Anda sampai perangkat lunak tersebut bekerja sesuai dengan yang Anda inginkan. \r\n\r\nBerikut ini adalah komitmen publik tim Ubuntu untuk para penggunanya:\r\nUbuntu akan selalu bebas dari biaya, maka dari itu tidak akan ada biaya tambahan untuk \"edisi enterprise\", kami akan membuat semua pekerjaan terbaik Ubuntu tersedia untuk semua orang dengan istilah Bebas yang sama.\r\nUbuntu juga menyediakan dukungan komersial dari ratusan perusahaan di seluruh dunia. Ubuntu dirilis secara tetap dan dapat Anda prediksikan; rilis Ubuntu terbaru tersedia setiap enam bulan. Setiap rilis akan didukung oleh Ubuntu dengan perbaikan pada keamanan dan perbaikan lainnya secara bebas selama sekurangnya 18 bulan.\r\nUbuntu akan menyertakan terjemahan dan prasarana aksesibilitas terbaik yang dimiliki oleh komunitas Perangkat Lunak Bebas, hal ini berguna untuk membuat Ubuntu dapat dipergunakan oleh banyak orang. Kami juga bekerja sama dengan seluruh komunitas Perangkat Lunak Bebas dalam hal perbaikan bug dan saling membagi kode.\r\nUbuntu berkomitmen secara penuh terhadap prinsip-prinsip dari pengembangan perangkat lunak bebas; untuk ini kami mendorong masyarakat untuk menggunakan perangkat lunak bebas dan open source, lalu memperbaikinya dan kemudian menyebarkannya kembali.\r\nUbuntu cocok digunakan baik untuk desktop maupun server. Ubuntu saat ini mendukung berbagai arsitektur komputer seperti PC (Intel x86), PC 64-bita (AMD64), PowerPC (Apple iBook dan Powerbook, G4 dan G5), Sun UltraSPARC dan T1 (Sun Fire T1000 dan T2000). \r\n\r\nUbuntu menyertakan lebih dari 16.000 buah perangkat lunak, dan untuk instalasi desktop dapat dilakukan dengan menggunakan satu CD saja. Ubuntu menyertakan semua aplikasi standar untuk desktop mulai dari pengolah kata, aplikasi lembar sebar (spreadsheet) hingga aplikasi untuk mengakses internet, perangkat lunak untuk server web, peralatan untuk bahasa pemrograman dan tentu saja beragam permainan.'),
(4, 'Air pembangkit energi', 'Kiren', 'Isi'),
(5, 'Kampret', 'Usop', 'Ini diaasdsa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `no` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `kode_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`no`, `id_artikel`, `subjek`, `komentar`, `kode_user`) VALUES
(5, 1, 'Kenapa menggunakan TCP?', 'Kenapa menggunakan TCP sementara bisa menggunakan UDP?', 2),
(6, 3, 'Kenapa harus menggunakan ubuntu?', 'Isi komentarnya', 3),
(7, 3, 'Apa itu opensource?', 'Apa sih opensource itu?', 3),
(8, 4, 'Kenapa?', 'Karena', 3),
(9, 4, 'Subjek', 'Isi', 3),
(10, 4, 'asdsa', 'asdasd', 3),
(11, 4, 'ghthftnftnft', 'opipuipuio', 3),
(12, 4, 'ghthftnftnfa', 'opipuipuih', 3),
(13, 1, 'Kepanjangan TCP', 'Apasih kepanjangan tcp itu min?', 4),
(14, 1, 'Kepanjangan TCP', 'adasda', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `kode_user` int(5) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` enum('A','G') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`kode_user`, `nama_user`, `nama`, `email`, `password`, `hak_akses`) VALUES
(1, 'admin', 'Yan', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'A'),
(2, 'lapet', 'Ling Ling', 'ling@keling.nl', '2f6490c4c3a7f44bd3ffa9b7b6a5177c', 'G'),
(3, 'jorbut', 'jorbut', 'jorbut@lapet.com', 'e92961d84a1efe7324f3673e73552369', 'G'),
(4, 'lala', 'lala', 'lala@lala.co.id', '2e3817293fc275dbee74bd71ce6eb056', 'G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `kode_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
