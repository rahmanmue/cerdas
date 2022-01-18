-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 05:24 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerdas`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id_games` int(11) NOT NULL,
  `nama_games` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nama_mapel`) VALUES
(3, 'IPA 2');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `tema` varchar(10) NOT NULL,
  `subtema` varchar(10) NOT NULL,
  `pembelajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `tema`, `subtema`, `pembelajaran`) VALUES
(1, '1', '1', '1'),
(2, '1', '1', '2'),
(3, '1', '1', '3'),
(4, '1', '1', '4'),
(5, '1', '1', '5');

-- --------------------------------------------------------

--
-- Table structure for table `pembahasan`
--

CREATE TABLE `pembahasan` (
  `id_pembahasan` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `kelas` enum('1','2','3','4','5','6') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `pilihan_A` varchar(50) NOT NULL,
  `pilihan_B` varchar(50) NOT NULL,
  `pilihan_C` varchar(50) NOT NULL,
  `jawaban` varchar(10) NOT NULL,
  `pembahasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembahasan`
--

INSERT INTO `pembahasan` (`id_pembahasan`, `id_mapel`, `kelas`, `gambar`, `soal`, `pilihan_A`, `pilihan_B`, `pilihan_C`, `jawaban`, `pembahasan`) VALUES
(1, 3, '1', 'download.jpg', 'ini soal', 'sdadsa', 'asd', 'asd', 'pilihan_A', ''),
(2, 3, '1', 'download1.jpg', '1', '1', '1', '1', 'pilihan_A', ''),
(4, 3, '2', '', 'asdajsnajsdnas', 'A. aa', 'B. bb', 'C. cc', 'pilihan_A', '<p>asdmad </p>');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `soal` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kelas` enum('1','2','3','4','5','6') NOT NULL,
  `pilihan_A` varchar(50) NOT NULL,
  `pilihan_B` varchar(50) NOT NULL,
  `pilihan_C` varchar(50) NOT NULL,
  `pilihan_D` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_materi`, `soal`, `gambar`, `kelas`, `pilihan_A`, `pilihan_B`, `pilihan_C`, `pilihan_D`, `jawaban`) VALUES
(1, 1, 'aksdsa', 'banteng.png', '1', 'ahh', 's', 'd', 'd', 'pilihan_A'),
(2, 1, 's', '', '3', 's', 's', 'ss', 'D. s', 'pilihan_A'),
(3, 1, '1', '', '5', 'Asd', 'a', 'a', 'a', 'pilihan_A'),
(4, 1, 'soal', '', '1', 'A. ini', 'B. itu', 'C. bb', 'D. kuku', 'pilihan_B'),
(5, 1, 'ssad', '', '1', 'A. as', 'B. sa', 'C. sds', 'D. ad', 'pilihan_A');

-- --------------------------------------------------------

--
-- Table structure for table `soal_games`
--

CREATE TABLE `soal_games` (
  `id_soal_games` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `soal` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('admin','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$vv4ivxE/q7fJTLP4/yFDvOtvGRblox/NbBJGjQVFimOE08vDk4q5.', 'admin'),
(2, 'siswa1', 'siswa@gmail.com', '$2y$10$FMwnEvs/6dM5F/5LOoJgregh87gRrHoD7hdGBRdV45c6q4pq8eAFu', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `kelas` enum('1','2','3','4','5','6') NOT NULL,
  `link_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `id_materi`, `judul`, `kelas`, `link_video`) VALUES
(1, 1, 'test', '1', 'https://video.cerdasbelajar.id/embed?m=j6CjgfC9p'),
(8, 3, 'df', '2', '21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_games`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `pembahasan`
--
ALTER TABLE `pembahasan`
  ADD PRIMARY KEY (`id_pembahasan`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `soal_games`
--
ALTER TABLE `soal_games`
  ADD PRIMARY KEY (`id_soal_games`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id_games` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembahasan`
--
ALTER TABLE `pembahasan`
  MODIFY `id_pembahasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal_games`
--
ALTER TABLE `soal_games`
  MODIFY `id_soal_games` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
