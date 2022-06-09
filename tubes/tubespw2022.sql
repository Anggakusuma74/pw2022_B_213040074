-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 07:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespw2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_profile`
--

CREATE TABLE `d_profile` (
  `id_profile` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_profile`
--

INSERT INTO `d_profile` (`id_profile`, `nama`, `username`, `password`, `email`, `alamat`) VALUES
(1, 'Muhammad Angga Kusuma', 'anggakusuma', '123456', 'mu.anggakusuma@gmail.com', 'Jl. Gg. H. Ridho II, Setiabudi, Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `koleksi_film`
--

CREATE TABLE `koleksi_film` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `pemeran` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koleksi_film`
--

INSERT INTO `koleksi_film` (`id`, `judul`, `genre`, `durasi`, `sutradara`, `penulis`, `pemeran`, `sinopsis`, `gambar`) VALUES
(1, 'The Batman ', 'Action', '2h 56m', 'Matt Reeves', 'Peter Craig, Matt Reeves', 'Robert Pattinson, bersama ZoÃ« Kravitz, Paul Dano, Jeffrey Wright, John Turturro, Peter Sarsgaard, Andy Serkis, dan Colin Farrell.', 'Ketika bukti mulai mengarah lebih dekat ke rumah dan skala rencana pelaku menjadi jelas, ia harus menjalin hubungan baru, membuka kedok pelakunya dan membawa keadilan atas penyalahgunaan kekuasaan dan korupsi yang telah lama menjangkiti kota metropolitan.', 'the batman.jpg'),
(3, 'The SpongeBob Movie: Sponge on the Run', 'Comedy', '1h 23m', 'Tim Hill', 'Tim Hill, Jonathan Aibel, Glenn Berger', 'Tom Kenny, Awkwafina, Matt Berry, Snoop Dogg, Bill Fagerbakke, Clancy Brown, Tiffany Haddish, Carolyn Lawrence, Mr. Lawrence, Keanu Reeves, Danny Trejo, Reggie Watts.', 'Dalam misi mereka untuk menyelamatkan Gary, SpongeBob dan geng Bikini Bottom bergabung untuk perjalanan heroik dan lucu, di mana mereka menemukan tidak ada yang lebih kuat dari kekuatan persahabatan.', 'the spongebob.jpg'),
(4, 'Rampage', 'Action', '1h 47m', 'Brad Peyton', 'Ryan Engle, Carlton Cuse, Ryan J. Condal, Adam Sztykiel', 'Dwayne Johnson, Naomie Harris, Malin Ã…kerman, Jake Lacy, Jeffrey Dean Morgan.', 'Saat binatang bermutasi memulai jalan kehancuran, Okoye bekerja sama dengan insinyur genetika dan militer yang didiskreditkan untuk mengamankan penangkal dan mencegah bencana global.', 'rampage.jpeg'),
(6, 'The Boss Baby', 'Comedy', '1h 37m', 'Tom McGrath', 'Michael McCullers', 'Alec Baldwin, Steve Buscemi, Jimmy Kimmel, Lisa Kudrow, Tobey Maguire, Miles Christopher Bakshi, James McGrath, Conrad Vernon, ViviAnn Yee, Eric Bell Jr., David Soren, Edie Mirman, James Ryan, Walt Dohrn, Jules Winter', 'Persaingan saudara kandung instan harus segera dikesampingkan ketika Tim menemukan bahwa Boss Baby sebenarnya adalah mata-mata dalam misi rahasia, dan hanya dia yang dapat membantu menggagalkan rencana pengecut yang melibatkan pertempuran epik antara anak', 'the boss baby.jpg'),
(7, 'Black Widow', 'Action', '2h 13m', 'Cate Shortland', 'Jac Schaeffer dan Ned Benson', 'Scarlett Johansson, David Harbour, Florence Pugh, O-T Fagbenle, dan Rachel Weisz, Olga Kurylenko, William Hurt, Ray Winstone.', 'Dikejar oleh kekuatan yang tidak akan berhenti untuk menjatuhkannya, Natasha harus berurusan dengan sejarahnya sebagai mata-mata, dan hubungan yang rusak tertinggal jauh sebelum dia menjadi Avenger.', 'black widow.jpg'),
(11, 'Resident Evil ', 'Action', '1h 47m', 'Johannes Roberts', 'Johannes Roberts', 'Kaya Scodelario, Hannah John-Kamen, Robbie Amell, Tom Hopper, Avan Jogia, Donal Logue, Neal McDonough, Lily Gao, Chad Rook, Marina Mazepa', 'Ketika kejahatan itu dilepaskan, sekelompok orang yang selamat harus bekerja sama untuk mengungkap kebenaran di balik Umbrella dan berhasil melewati malam.', 'resident evil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'anggakusuma', '$2y$10$V5Pf7.GEln.N/g1Qyhx/le7rVqfosOo0g6WLpgnK7PyaQhWaEm2KG'),
(7, 'admin', '$2y$10$9x0HDd3ex.jaq.mbzinDceKgT2NZ6cxWQ.UIfyHst9Rvq5axDUbKu'),
(8, 'angga', '$2y$10$kvm1Ne4s77i8jRcZMqnL3uEo4Ji61ZSJUmF6bw9g7q1Oq7jf5blxK'),
(9, 'mimin', '$2y$10$VKhu6kO9kSl.oimcMzISYuTu9J76mvgk7KsUw3Ar4VtM9thCa3qv.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_profile`
--
ALTER TABLE `d_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `koleksi_film`
--
ALTER TABLE `koleksi_film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_profile`
--
ALTER TABLE `d_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `koleksi_film`
--
ALTER TABLE `koleksi_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
