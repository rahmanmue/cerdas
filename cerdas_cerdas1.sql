-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2022 at 06:17 AM
-- Server version: 5.7.37
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerdas_cerdas1`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `skor` int(11) NOT NULL,
  `lama_pengerjaan` varchar(11) NOT NULL,
  `waktu_pengerjaan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `id_user`, `level`, `skor`, `lama_pengerjaan`, `waktu_pengerjaan`) VALUES
(1, 2, 1, 1, '07', '2022-01-25 18:15:38');

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
(3, 'IPA'),
(4, 'Bahasa Indonesia'),
(5, 'IPS'),
(6, 'Matematika');

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
(5, '1', '1', '5'),
(7, '1', '2', '1'),
(8, '1', '2', '2'),
(9, '1', '2', '3'),
(10, '1', '2', '4'),
(11, '1', '3', '1'),
(12, '1', '3', '2'),
(13, '1', '3', '3'),
(14, '1', '1', '6');

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
(5, 3, '1', 'cicak1.jpg', '<p><span xss=removed>Fungsi bagian yang diberi tanda panah pada hewan tersebut adalah. untuk...</span></p>', 'A. Mengeluarkan tinta hitam', 'B. Mengeluarkan bisa', 'C. Mengelabui musuh', 'pilihan_C', '<p>Hewan diatas adalah cicak. Tubuh cicak terdiri dari kepala, badan, kaki, dan ekor.<br>Ketika dalam keadaan bahaya, cicak dapat memutuskan ekornya untuk mengelabuhi musuh.</p>'),
(7, 3, '1', 'angkllung.jpg', '<p>Alat musik pada gambar diatas dapat bersuara menggunakan...</p>', 'A. Gerak', 'B. Panas', 'C. Listrik', 'pilihan_A', '<p>Angklung dapat berbunyi apabila digetarkan atau digerakkan. jadi kesimpulannya, angklung dapat mengubah energi gerak menjadi energi bunyi</p>');

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
(6, 1, '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Penggunaan kata aku digunakan saat bersama…</span></p>', '', '1', 'A. Teman sebaya', 'B. Orang tua', 'C. Keluarga', 'D. Saudara', 'pilihan_A'),
(7, 1, '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Jika belum kenal dengan teman satu kelas. Maka kita bisa segera….</span></p>', '', '1', 'A. Menjauh', 'B. Berkenalan', 'C. Diam', 'D. Berlari', 'pilihan_B'),
(8, 1, '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Momo : Siapakah namamu?</span></p>\r\n<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Cici: …. Cici. </span></p>\r\n<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Kata apa yang cocok untuk melengkapi percakapan diatas?</span></p>', '', '1', 'A. Namamu', 'B. Namaku', 'C. Namanya', 'D. Nama dia', 'pilihan_B'),
(9, 1, '<p><span xss=removed data-sheets-value=\"{\" data-sheets-userformat=\"{\">Dengan teman baru kita tidak boleh…</span></p>', '', '1', 'A. Bertengkar', 'B. Bermain', 'C. Belajar', 'D. Berbicara', 'pilihan_A'),
(10, 2, '<p>Perhatikan gambar berikut, pertanyaan apakah yang tepat dengan jawaban pada gambar tersebut?</p>', 'siti.png', '1', 'A. Apa kesukaanmu?', 'B. Siapa namamu?', 'C. Dimana rumahmu?', 'D. Kenapa kamu?', 'pilihan_B'),
(11, 2, '<p><span xss=removed>Perhatikan gambar berikut, a</span><span xss=removed>pakah yang sedang mereka lakukan?</span></p>', 'olahraga.png', '1', 'A. Berjalan', 'B. Berlari', 'C. Beristirahat', 'D. Berbicara', 'pilihan_A'),
(12, 2, '<p><span xss=removed>Berdasarkan gambar di bawah ini, sedang apakah Siti ?</span></p>', 'keluarga.png', '1', 'A. Meminta uang', 'B. Berpamitan', 'C. Menangis', 'D. Bernyanyi', 'pilihan_B'),
(13, 2, '<p><span xss=removed>Perhatikan gambar berikut, j</span><span xss=removed>awaban apakah yang tepat ketika kita sedang memperkenalkan diri?</span></p>', 'sapa.png', '1', 'A. Namanya', 'B. Namamu', 'C. Namaku', 'D. Nama dia', 'pilihan_C'),
(14, 2, '<p><span xss=removed>Perhatikan gambar berikut, di sekolah kita mendapat banyak...</span></p>', 'berteman.png', '1', 'A. Uang', 'B. Teman', 'C. Mainan', 'D. Makanan', 'pilihan_B'),
(15, 2, '<p><span xss=removed>Ketika bertemu dengan teman sebaiknya kita…</span></p>', '', '1', 'A. Cemberut', 'B. Marah', 'C. Tersenyum', 'D. Bahagia', 'pilihan_C'),
(16, 2, '<p>Kepada teman kita harus..</p>', '', '1', 'A. Benci', 'B. Takut', 'C. Sayang', 'D. Marah', 'pilihan_C'),
(17, 2, '<p>Bila kita berpegian kita harus...</p>', '', '1', 'A. Berpamitan', 'B. Diam', 'C. Tak acuh', 'D. Ramah', 'pilihan_A'),
(18, 2, '<p>Gerakan lokomotor adalah...</p>', '', '1', 'A. Gerakan berpindah tempat', 'B. Gerakan berjalan', 'C. Gerakan melompat', 'D. Gerakan berlari', 'pilihan_A'),
(19, 2, '<p>Gerak lokomotor meliputi jalan lari dan...</p>', '', '1', 'A. Berlari', 'B. Melompat', 'C. Duduk', 'D. Menendang', 'pilihan_B'),
(20, 1, '<p>Kepada teman kita harus...</p>', '', '1', 'A. Benci', 'B. Takut', 'C. Sayang', 'D. Cinta', 'pilihan_C'),
(21, 1, '<p>Di sekolah kita bisa dapat mendapat banyak...</p>', '', '1', 'A. Makanan', 'B. Teman', 'C. Mainan', 'D. Hadiah', 'pilihan_B'),
(22, 1, '<p>Ucapan selamat pagi merupakan contoh kalimat...</p>', '', '1', 'A. Berterima kasih', 'B. Meminta maaf', 'C. Salam', 'D. Meminta izin', 'pilihan_C'),
(23, 1, '<p>Bila kita bepergian, kita harus...</p>', '', '1', 'A. Berpamitan', 'B. Diam', 'C. Tidak acuh', 'D. Langsung saja', 'pilihan_A'),
(24, 1, '<p>Dengan berpamitan, orang tua menjadi...</p>', '', '1', 'A. Baik', 'B. Tidak cemas', 'C. Pemarah', 'D. Dendam', 'pilihan_B'),
(25, 1, '<p>Dengan semangat belajar, kita akan...</p>', '', '1', 'A. Pintar', 'B. Malas ', 'C. Bosan', 'D. Kaya', 'pilihan_A'),
(26, 3, '<p><span xss=removed>Jumlah huruf ada …</span></p>', '', '1', 'A. 24', 'B. 26', 'C. 25', 'D. 27', 'pilihan_B'),
(27, 3, '<p><span xss=removed>\"SITI\" ada berapa huruf di nama tersebut?</span></p>', '', '1', 'A. 4', 'B. 6', 'C. 3', 'D. 2', 'pilihan_A'),
(28, 3, '<p><span xss=removed>Nama temanku Tina. \" </span><span xss=removed>T_ N_ \"</span><br xss=removed><span xss=removed>Huruf yang tepat untuk melengkapi nama tersebut adalah ..</span></p>', '', '1', 'A. A dan I', 'B. O dan O', 'C. I dan A', 'D. U dan E', 'pilihan_C'),
(29, 3, '<p><span xss=removed>Perhatikan huruf berikut ( </span><span xss=removed>i-a-D-n )</span><br xss=removed><span xss=removed>Susuan huruf yang benar adalah...</span></p>', '', '1', 'A. Dani', 'B. Nina', 'C. Nuni', 'D. Nani', 'pilihan_A'),
(30, 3, '<p><span xss=removed>Sesudah huruf C adalah huruf...</span></p>', '', '1', 'A. A', 'B. E', 'C. D', 'D. B', 'pilihan_C'),
(31, 3, '<p><span xss=removed>Sesudah huruf K adalah...</span></p>', '', '1', 'A. M', 'B. L', 'C. N', 'D. O', 'pilihan_B'),
(32, 3, '<p><span xss=removed>Huruf ke 5 adalah huruf...</span></p>', '', '1', 'A. D', 'B. F', 'C. E', 'D. C', 'pilihan_C'),
(33, 3, '<p><span xss=removed>Nama kakakku Fira ( </span><span xss=removed>_</span><span xss=removed>i_a )</span></p>\r\n<p><span xss=removed>Huruf yang tepat untuk melengkapi nama tersebut adalah ..</span></p>', '', '1', 'A. a dan r', 'B. f dan r', 'C. r dan f', 'D. f dan a', 'pilihan_B'),
(34, 3, '<p><span xss=removed>Huruf terakhir adalah huruf ...</span></p>', '', '1', 'A. X', 'B. V', 'C. W', 'D. Z', 'pilihan_D'),
(35, 3, '<p><span xss=removed>Sebelum huruf P adalah huruf ...</span></p>', '', '1', 'A. R', 'B. S', 'C. O', 'D. Q', 'pilihan_C'),
(36, 4, '<p><span xss=removed>Sebelum belajar, sebaiknya kita…</span></p>', '', '1', 'A. Berdoa', 'B. Makan', 'C. Minum', 'D. Bermain', 'pilihan_A'),
(37, 4, '<p><span xss=removed>Amati nama berikut! ( M O M _ )</span><br xss=removed><span xss=removed>Huruf yang hilang dari nama tersebut adalah...</span></p>', '', '1', 'A. O', 'B. M', 'C. I', 'D. E', 'pilihan_A'),
(38, 4, '<p><span xss=removed>Huruf Vocal dari nama M O M O yaitu…</span></p>', '', '1', 'A. O dan O', 'B. M dan O', 'C. M dan M', 'D. O dan M', 'pilihan_A'),
(39, 4, '<p><span xss=removed>Amati nama berikut! ( </span><span xss=removed>C-C-I-I )</span></p>\r\n<p><span xss=removed>Susunan huruf tepat dari nama tersebut adalah...</span></p>', '', '1', 'A. I-I-C-C', 'B. C-I-I-C', 'C. I-C-I-C', 'D. C-I-C-I', 'pilihan_D'),
(40, 4, '<p><span xss=removed>Huruf Konsonan dari nama C I C I yaitu…</span></p>', '', '1', 'A. I dan C', 'B. C dan C', 'C. I dan I', 'D. C dan I', 'pilihan_B'),
(41, 4, '<p><span xss=removed>Nama bilangan dari gambar tersebut adalah…</span></p>', 'tangan.png', '1', 'A. Lima', 'B. Empat', 'C. Tiga', 'D. Dua', 'pilihan_B'),
(42, 4, '<p><span xss=removed>Jumlah pensil pada gambar di atas berjumlah…</span></p>', 'pensil.png', '1', 'A. 8', 'B. 9', 'C. 6', 'D. 7', 'pilihan_B'),
(43, 4, '<p><span xss=removed>Lima dapat ditulis menjadi angka...</span></p>', '', '1', 'A. 6', 'B. 4', 'C. 7', 'D. 5', 'pilihan_D'),
(44, 4, '<p><span xss=removed>Angka 9 jika ditulis, menjadi...</span></p>', '', '1', 'A. Delapan', 'B. Enam', 'C. Tujuh', 'D. Sembilan', 'pilihan_D'),
(45, 4, '<p><span xss=removed>Susunan angka yang tepat dari bilangan \" 1-3-5-4-6-7-2-8-10-9 \" adalah…</span></p>', '', '1', 'A. 10-4-3-2-1-5-6-7-8', 'B. 1-2-3-4-5-6-7-8-9-10', 'C. 7-1-4-2-5-3-8-9-10', 'D. 1-2-3-4-5-6-8-7-9-10', 'pilihan_B'),
(46, 5, '<p><span xss=removed>Urutan huruf abjad yang benar adalah…</span></p>', '', '1', 'A. A-B-D-E-C', 'B. F-H-I-J-G ', 'C. A-C-D-E-F', 'D. F-G-H-I-J', 'pilihan_D'),
(47, 5, '<p>Perhatikan huruf berikut!</p>\r\n<p><strong>a b c a</strong></p>\r\n<p>Jika huruf-huruf tersebut diurutkan dengan benar, maka huruf-huruf ini menjadi kata...</p>', '', '1', 'A. acab', 'B. acba', 'C. baca', 'D. baac', 'pilihan_C'),
(48, 5, '<p><span xss=removed>Urutan huruf abjad yang salah adalah…</span></p>', '', '1', 'A. A-B-C-D-E', 'B. K-L-M-N-O', 'C. F-G-H -I-J', 'D. A-B-D-E-C', 'pilihan_D'),
(49, 5, '<p><span xss=removed>Ada berapakah jumlah huruf abjad pada kata...</span></p>\r\n<h4 xss=removed>BELAJAR</h4>', '', '1', 'A. Enam', 'B. Tujuh', 'C. Sembilan', 'D. Delapan', 'pilihan_B'),
(50, 5, '<p><span xss=removed>Ada berapakah jumlah huruf abjad pada kata...</span></p>\r\n<h4 xss=removed>RAJIN</h4>', '', '1', 'A. Sembilan', 'B. Enam', 'C. Lima', 'D. Tiga', 'pilihan_C'),
(51, 5, '<p>Perhatikan gambar diatas, sebelum belajar kita harus ... terlebih dahulu</p>', 'berdoa.png', '1', 'A. Makan', 'B. Bermain', 'C. Menangis', 'D. Berdoa', 'pilihan_D'),
(52, 5, '<p><span xss=removed>Nama temanku adalah Beni. Huruf yang tepat untuk melengkapi gambar adalah…</span></p>', 'anak2.png', '1', 'A. A dan I', 'B. I dan E', 'C. E dan I', 'D. E dan A', 'pilihan_C'),
(53, 5, '<p><span xss=removed>Lambang bilangan sepuluh adalah…</span></p>', '', '1', 'A. 11', 'B. 10', 'C. 14', 'D. 20', 'pilihan_B'),
(54, 5, '<p><span xss=removed>Berapakah jumlah buku pada gambar di atas?</span></p>', 'buku.png', '1', 'A. Sepuluh', 'B. Delapan', 'C. Sembilan', 'D. Tujuh', 'pilihan_C'),
(55, 5, '<p><span xss=removed>Memberikan salam kepada Ibu guru, merupakan contoh sikap yang…</span></p>', '', '1', 'A. Baik', 'B. Jahat', 'C. Biasa', 'D. Cuek', 'pilihan_A'),
(56, 7, '<p><span xss=removed>Anggota tubuh yang digunakan untuk melihat adalah …</span></p>', '', '1', 'A. Mulut', 'B. Mata', 'C. Hidung', 'D. Telinga', 'pilihan_B'),
(57, 7, '<p><span xss=removed>Jumlahku satu</span><br xss=removed><span xss=removed>Aku terletak di bawah mata</span><br xss=removed><span xss=removed>Aku bisa mencium aroma yang wangi</span><br xss=removed><span xss=removed>Aku adalah …</span></p>', '', '1', 'A. Hidung', 'B. Mata', 'C. Telinga', 'D. Mulut', 'pilihan_A'),
(58, 7, '<p><span xss=removed>Anggota tubuh yang digunakan untuk berjalan adalah …</span></p>', '', '1', 'A. Tangan', 'B. Jari', 'C. Kaki', 'D. Mulut', 'pilihan_C'),
(59, 7, '<p><span xss=removed>Anggota tubuh yang biasa digunakan untuk makan adalah …</span></p>', '', '1', 'A. Mata', 'B. Telinga', 'C. Hidung', 'D. Mulut', 'pilihan_D'),
(60, 7, '<p><span xss=removed>Aku berjumlah sepuluh</span><br xss=removed><span xss=removed>Ada yang kecil</span><br xss=removed><span xss=removed>Ada yang besar</span><br xss=removed><span xss=removed>Ada yang tinggi</span><br xss=removed><span xss=removed>Aku bekerja sama dengan tangan untuk membantu ibu</span><br xss=removed><span xss=removed>Aku adalah …</span></p>', '', '1', 'A. Kaki', 'B. Tangan', 'C. Jari', 'D. Lutut', 'pilihan_C'),
(61, 7, '<p><span xss=removed>Apa nama anggota tubuh yang ada disamping kiri dan kanan wajah…</span></p>', '', '1', 'A. Dagu', 'B. Pipi', 'C. Mulut', 'D. Kening', 'pilihan_B'),
(62, 7, '<p><span xss=removed>Saat makan, sebaiknya kita menggunakan tangan …</span></p>', '', '1', 'A. Kanan', 'B. Kiri', 'C. Keduanya', 'D. Orang lain', 'pilihan_A'),
(63, 7, '<p><span xss=removed>Yang harus dilakukan atas pemberian Tuhan adalah …</span></p>', '', '1', 'A. Cuek', 'B. Kesal', 'C. Sombong', 'D. Bersyukur', 'pilihan_D'),
(64, 7, '<p><span xss=removed>Hal yang harus dilakukan sebelum makan adalah …</span></p>', '', '1', 'A. Mandi', 'B. Bermain', 'C. Berdoa', 'D. Ibadah', 'pilihan_C'),
(65, 7, '<p><span xss=removed>Aku berjumlah dua</span><br xss=removed><span xss=removed>Aku terletak di kanan dan di kiri</span><br xss=removed><span xss=removed>Aku bisa mendengar jika ibu guru memanggil namaku</span><br xss=removed><span xss=removed>Aku adalah …</span></p>', '', '1', 'A. Tangan', 'B. Kaki', 'C. Pipi', 'D. Telinga', 'pilihan_D'),
(66, 8, '<p><span xss=removed>Dengan membaca dapat menambah…</span></p>', '', '1', 'A. Tenaga', 'B. Uang', 'C. Pengetahuan', 'D. Kesehatan', 'pilihan_C'),
(67, 8, '<p><span xss=removed>Mata merupakan panca indera untuk…</span></p>', '', '1', 'A. Makan', 'B. Melihat', 'C. Mendengar', 'D. Menarik', 'pilihan_B'),
(68, 8, '<p><span xss=removed>Jumlah mata kita ada…</span></p>', '', '1', 'A. Dua', 'B. Satu', 'C. Tiga', 'D. Empat', 'pilihan_A'),
(69, 8, '<p><span xss=removed>Jarak mata kita saat membaca yaitu sekitar…</span></p>', '', '1', 'A. 30 cm', 'B. 50 cm', 'C. 80 cm', 'D. 100 cm', 'pilihan_A'),
(70, 8, '<p><span xss=removed>Posisi badan kita saat duduk yang benar yaitu…</span></p>', '', '1', 'A. Bungkuk', 'B. Tegak', 'C. Miring', 'D. Berayun', 'pilihan_B'),
(71, 8, '<p><span xss=removed>Dengan duduk tegak dan mengatur jarak saat membaca dapat membuat badan dan mata kita menjadi…</span></p>', '', '1', 'A. Pegal', 'B. Sehat', 'C. Sakit', 'D. Cape', 'pilihan_B'),
(72, 8, '<p><span xss=removed>Momo dan Cici bermain tebak angka.</span><br xss=removed><span xss=removed>Berapa jumlah jarinya...</span></p>', 'tangan1.png', '1', 'A. 4', 'B. 6', 'C. 3', 'D. 5', 'pilihan_D'),
(73, 8, '<p><span xss=removed>Berapakah jumlah jari yang ditunjukan oleh Cici berdasarkan gambar di atas?</span></p>', '', '1', 'A. 5', 'B. 4', 'C. 6', 'D. 7', 'pilihan_B'),
(74, 8, '<p><span xss=removed>Angka 6 jika ditulis, menjadi...</span></p>', '', '1', 'A. Lima', 'B. Delapan', 'C. Enam', 'D. Empat', 'pilihan_C'),
(75, 8, '<p><span xss=removed>Nama bilangan Sembilan merupakan lambang bilangan dari...</span></p>', '', '1', 'A. 9', 'B. 4', 'C. 6', 'D. 8', 'pilihan_A'),
(76, 9, '<p><span xss=removed>Bagian tubuh depan yang tidak boleh disentuh adalah…</span></p>', '', '1', 'A. Dada', 'B. Tangan', 'C. Kepala', 'D. Kaki', 'pilihan_A'),
(77, 9, '<p><span xss=removed>Bagian tubuh belakang yang tidak boleh disentuh adalah…</span></p>', '', '1', 'A. Punggung', 'B. Pundak', 'C. Pantat', 'D. Kepala', 'pilihan_C'),
(78, 9, '<p><span xss=removed>Salah satu cara menjaga kebersihan tubuh adalah…</span></p>', '', '1', 'A. Selalu cuci tangan dan kaki', 'B. Jarang mandi', 'C. Tidak gosok gigi', 'D. Tidak ganti pakaian', 'pilihan_A'),
(79, 9, '<p><span xss=removed>Anggota tubuh yang biasa kita gerakkan saat menari misalnya…</span></p>', '', '1', 'A. Hidung', 'B. Telinga', 'C. Kepala', 'D. Dagu', 'pilihan_C'),
(80, 9, '<p><span xss=removed>Mata digunakan untuk…</span></p>', '', '1', 'A. Melihat', 'B. Makan', 'C. Menghirup', 'D. Mendengar', 'pilihan_A'),
(81, 9, '<p><span xss=removed>Beni berlari menggunakan…</span></p>', '', '1', 'A. Tangan', 'B. Kaki', 'C. Kepala', 'D. Hidung', 'pilihan_B'),
(82, 9, '<p><span xss=removed>Salah satu fungsi tangan adalah…</span></p>', '', '1', 'A. Menendang', 'B. Berlari', 'C. Memegang', 'D. Melompat', 'pilihan_C'),
(83, 9, '<p><span xss=removed>Kita merasakan bau menggunakan…</span></p>', '', '1', 'A. Mata', 'B. Dagu', 'C. Mulut', 'D. Hidung', 'pilihan_D'),
(84, 9, '<p><span xss=removed>Kita harus merawat tubuh agar…</span></p>', '', '1', 'A. Lemas', 'B. Sakit', 'C. Malas', 'D. Sehat', 'pilihan_D'),
(85, 9, '<p><span xss=removed>Membaca sambil tiduran dapat merusak…</span></p>', '', '1', 'A. Hidung', 'B. Mata', 'C. Telinga', 'D. Mulut', 'pilihan_B'),
(86, 10, '<p><span xss=removed>a - a - t - m</span><br xss=removed><span xss=removed>Jika huruf tersebut disusun maka akan menjadi kata ..</span></p>', '', '1', 'A. atam', 'B. maat', 'C. amat', 'D. mata', 'pilihan_D'),
(87, 10, '<p><span xss=removed>e - l - t -i - n - a - g</span><br xss=removed><span xss=removed>Jika huruf tersebut disusun maka akan menjadi kata ...</span></p>', '', '1', 'A. tinagel', 'B. leganit', 'C. telinga', 'D. angilet', 'pilihan_C'),
(88, 10, '<p><span xss=removed>u - b - a - h</span><br xss=removed><span xss=removed>Jika huruf tersebut disusun maka akan menjadi kata ...</span></p>', '', '1', 'A. habu', 'B. abuh', 'C. ubha', 'D. bahu', 'pilihan_D'),
(89, 10, '<p><span xss=removed>6 jika dibaca adalah...</span></p>', '', '1', 'A. Enam', 'B. Empat', 'C. Delapan', 'D. Sembilan', 'pilihan_A'),
(90, 10, '<p><span xss=removed>10 jika dibaca adalah …</span></p>', '', '1', 'A. Sebelas', 'B. Sepuluh', 'C. Delapan', 'D. Sembilan', 'pilihan_B'),
(91, 10, '<p><span xss=removed>( MULUT )</span><br xss=removed><span xss=removed>Ada berapa huruf di kata tersebut ...</span></p>', '', '1', 'A. Lima', 'B. Enam', 'C. Tujuh', 'D. Empat', 'pilihan_A'),
(92, 10, '<p><span xss=removed>( JARI )</span><br xss=removed><span xss=removed>Ada berapa huruf di kata tersebut ...</span></p>', '', '1', 'A. Enam', 'B. Empat', 'C. Lima', 'D. Dua', 'pilihan_B'),
(93, 10, '<p><span xss=removed>( SEMBILAN )</span><br xss=removed><span xss=removed>Ada berapa huruf di kata tersebut ...</span></p>', '', '1', 'A. Delapan', 'B. Sembilan', 'C. Sepuluh', 'D. Tujuh', 'pilihan_A'),
(94, 10, '<p><span xss=removed>DUA TELINGA</span><br xss=removed><span xss=removed>Ada berapa huruf di kata tersebut ...</span></p>', '', '1', 'A. Sebelas', 'B. Sembilan', 'C. Sepuluh', 'D. Delapan', 'pilihan_C'),
(95, 10, '<p><span xss=removed>( SEPULUH )</span><br xss=removed><span xss=removed>Jika kata tersebut di tulisakan menggunakan lambang angka,</span><br xss=removed><span xss=removed>angka berapakah yang cocok dengan kata tersebut....</span></p>', '', '1', 'A. 12', 'B. 10', 'C. 11', 'D. 13', 'pilihan_B'),
(96, 11, '<p><span xss=removed>Agar tubuh selalu sehat maka kita harus menjaga…</span></p>', '', '1', 'A. Rumah', 'B. Kesehatan', 'C. Sekolah', 'D. Mesjid', 'pilihan_B'),
(97, 11, '<p><span xss=removed>Jika kita tidak menjaga dan merawat tubuh maka tubuh menjadi…</span></p>', '', '1', 'A. Sehat', 'B. Bugar', 'C. Semangat', 'D. Sakit', 'pilihan_D'),
(98, 11, '<p><span xss=removed>Pandemi Covid-19 saat ini menuntut kita untuk selalu …….. tangan sebelum dan sesudah melakukan aktivitas</span></p>', '', '1', 'A. Mencuci', 'B. Bertepuk', 'C. Pegangan', 'D. Angkat', 'pilihan_A'),
(99, 11, '<p><span xss=removed>Cara mencuci tangan yang baik yaitu menggunakan…</span></p>', '', '1', 'A. Tisu', 'B. Sabun', 'C. Tanah', 'D. Kain', 'pilihan_B'),
(100, 11, '<p><span xss=removed>Supaya tubuh kita tetap sehat kita harus menulis dengan posisi yang…</span></p>', '', '1', 'A. Salah', 'B. Benar', 'C. Lurus', 'D. Miring', 'pilihan_B'),
(101, 11, '<p><span xss=removed>Supaya tubuh kita tetap sehat kita harus menulis dengan posisi yang, Kecuali…</span></p>', '', '1', 'A. Salah', 'B. Benar', 'C. Tegak', 'D. Nyaman', 'pilihan_A'),
(102, 11, '<p><span xss=removed>Saat membaca buku sebaiknya posisi tubuh kita sambil…</span></p>', '', '1', 'A. Tidur', 'B. Berlari', 'C. Melompat', 'D. Duduk', 'pilihan_D'),
(103, 11, '<p><span xss=removed>Dengan merawat tubuh hal tersebut termasuk salah satu cara … kepada Tuhan</span></p>', '', '1', 'A. Berdoa', 'B. Berlari', 'C. Bersyukur', 'D. Berteduh', 'pilihan_C'),
(104, 11, '<p><span xss=removed>Tubuh yang sakit membuat kita menjadi…</span></p>', '', '1', 'A. Semangat', 'B. Lemah', 'C. Bahagia', 'D. Ceria', 'pilihan_B'),
(105, 11, '<p><span xss=removed>Tangan yang kotor dapat dibersihkan dengan…</span></p>', '', '1', 'A. Makan', 'B. Berlari', 'C. Mencuci tangan', 'D. Berdoa', 'pilihan_C'),
(106, 12, '<p><span xss=removed>Siti mandi menggunakan ...</span></p>', '', '1', 'A. Tanah', 'B. Rumput', 'C. Sabun', 'D. Pasir', 'pilihan_C'),
(107, 12, '<p><span xss=removed>Ani memiliki 3 Sampo, lalu Toni memberikannya 5 Sampo lagi.</span></p>\r\n<p><span xss=removed>Berapa jumlah sampo Ani …</span></p>', '', '1', 'A. 7 Sampo', 'B. 8 Sampo', 'C. 5 Sampo', 'D. 6 Sampo', 'pilihan_B'),
(108, 12, '<p><span xss=removed>Nina keramas menggunakan …</span></p>', '', '1', 'A. Sabun', 'B. Odol', 'C. Sampo', 'D. Minyak', 'pilihan_C'),
(109, 12, '<p><span xss=removed>Sabun, sampo, sikat gigi dan pasta gigi adalah alat untuk merawat …</span></p>', '', '1', 'A. Tubuh', 'B. Tanaman', 'C. Mainan', 'D. Makanan', 'pilihan_A'),
(110, 12, '<p><span xss=removed>Menggosok gigi menggunakan …</span></p>', '', '1', 'A. Sabun', 'B. Sampo', 'C. Sikat gigi', 'D. Gayung', 'pilihan_C'),
(111, 12, '<p>Anggun memiliki 4 sabun, Dina memiliki 2 sabun.</p>\r\n<p>4 sabun ... 2 sabun</p>', '', '1', 'A. Sama dengan', 'B. Lebih banyak dari', 'C. Lebih sedikit dari', 'D. Tidak sama dengan', 'pilihan_B'),
(112, 12, '<p><span xss=removed>Resa membeli 3 pasta gigi3, Dani membeli 7 pasta gigi.</span></p>\r\n<p><span xss=removed>3 Pasta gigi … 7 Pasta gigi</span></p>', '', '1', 'A. Lebih sedikit dari', 'B. Sama dengan', 'C. Lebih banyak dari', 'D. Tidak sama dengan', 'pilihan_A'),
(113, 12, '<p>Rika memiliki 5 sampo, Rahman memiliki 5 sampo.</p>\r\n<p><span xss=removed>5 Sampo … 5 Sampo</span></p>', '', '1', 'A. Sama dengan', 'B. Lebih banyak dari', 'C. Tidak sama dengan', 'D. Lebih sedikit dari', 'pilihan_A'),
(114, 12, '<p>Cika memiliki 2 pasta gigi, lalu Cika membeli lagi 5 pasta gigi.</p>\r\n<p><span xss=removed>Berapa jumlah pasta gigi Cika…</span></p>', '', '1', 'A. 5 pasta gigi', 'B. 8 pasta gigi', 'C. 4 pasta gigi', 'D. 7 pasta gigi', 'pilihan_D'),
(115, 12, '<p>Zaki memiliki 5 sabun, Rijal memiliki 6 sabun.</p>\r\n<p><span xss=removed>5 Sabun … 6 Sabun</span></p>', '', '1', 'A. Lebih banyak dari', 'B. Lebih sedikit dari', 'C. Tidak sama dengan', 'D. Sama dengan', 'pilihan_B'),
(116, 13, '<p><span xss=removed>Selain kita harus menjaga kesehatan tubuh kita juga harus menjaga…</span></p>', '', '1', 'A. Lingkungan', 'B. Makanan', 'C. Mainan', 'D. Uang', 'pilihan_A'),
(117, 13, '<p><span xss=removed>Kegiatan yang termasuk menjaga </span><span xss=removed>kesehatan</span> <span xss=removed>tubuh yaitu…</span></p>', '', '1', 'A. Mandi', 'B. Tidur', 'C. Belanja', 'D. Menonton', 'pilihan_A'),
(118, 13, '<p><span xss=removed>Saat menyikat gigi kita memerlukan … agar gigi menjadi bersih</span></p>', '', '1', 'A. Sabun', 'B. Sampo', 'C. Pasta gigi', 'D. Pasir', 'pilihan_C'),
(119, 13, '<p><span xss=removed>Jika rambut kita kotor, kita harus mencucinyanya menggunakan …</span></p>', '', '1', 'A. Salep', 'B. Tisu', 'C. Sapu tangan', 'D. Sampo', 'pilihan_D'),
(120, 13, '<p><span xss=removed>Jika tidak dirawat gigi menjadi…</span></p>', '', '1', 'A. Putih', 'B. Bersih', 'C. Berlubang', 'D. Rapih', 'pilihan_C'),
(121, 13, '<p><span xss=removed>Huruf vokal dari kata BERSIH yaitu…</span></p>', '', '1', 'A. E dan I', 'B. R dan S', 'C. H dan B', 'D. I dan R', 'pilihan_A'),
(122, 13, '<p><span xss=removed>Huruf konsonan dari kata KOTOR yaitu…</span></p>', '', '1', 'A. O dan O', 'B. R dan T', 'C. K, T dan R', 'D. O dan T', 'pilihan_C'),
(123, 13, '<p><span xss=removed>Tangan yang kotor dapat dibersihkan dengan…</span></p>', '', '1', 'A. Bermain', 'B. Makan', 'C. Tidur', 'D. Cuci tangan', 'pilihan_D'),
(124, 13, '<p><span xss=removed>Angka 3 … dari 6</span></p>', '', '1', 'A. Kurang', 'B. Sama', 'C. Lebih', 'D. Bagi', 'pilihan_A'),
(125, 13, '<p><span xss=removed>Pernyataan yang sesuai dengan gambar diatas yaitu…</span></p>', 'sabun.png', '1', 'A. Sabun yang kiri lebih banyak dari sabun yang ka', 'B. Sabun yang kanan lebih banyak dari sabun yang k', 'C. Sabun yang kanan lebih sedikit dari sabun yang ', 'D. Sabun kanan dan kiri memiliki jumlah yang sama', 'pilihan_B'),
(126, 1, '<p><span xss=removed>Ungkapan merupakan gabungan kata yang memiliki arti…</span></p>', '', '2', 'A. Berbeda', 'B. Sama', 'C. Sinonim', 'D. Antonim', 'pilihan_A'),
(127, 1, '<p><span xss=removed>Ibu memberikan buah tangan kepada Momo dan Cici.</span><br xss=removed><span xss=removed>Arti ungkapan dari buah tangan adalah…</span></p>', '', '2', 'A. Buah-buahan', 'B. Oleh-oleh', 'C. Minuman', 'D. Makanan', 'pilihan_B'),
(128, 1, '<p><span xss=removed>Ayah dan ibu bahagia melihat buah hati mereka selalu rukun.</span><br xss=removed><span xss=removed>Arti ungkapan dari buah hati adalah…</span></p>', '', '2', 'A. Hati-hati', 'B. Keluarga', 'C. Anak', 'D. Ayah', 'pilihan_C'),
(129, 1, '<p><span xss=removed>Hidup rukun di rumah membuat orang tua menjadi…</span></p>', '', '2', 'A. Berbeda', 'B. Kecewa', 'C. Bahagia', 'D. Sedih', 'pilihan_C'),
(130, 1, '<p><span xss=removed>Jika kita telah diberi sesuatu dan dibantu oleh orang lain, sebaiknya kita mengucapkan…</span></p>', '', '2', 'A. Terima kasih', 'B. Mohon maaf', 'C. Sama-sama', 'D. Dadah', 'pilihan_A'),
(131, 1, '<p><span xss=removed>5 puluhan sama dengan…</span></p>', '', '2', 'A. 5', 'B. 25', 'C. 50', 'D. 55', 'pilihan_C'),
(132, 1, '<p><span xss=removed>90 sama dengan..</span></p>', '', '2', 'A. 9 ribuan', 'B. 9 ratusan', 'C. 9 satuan', 'D. 9 puluhan', 'pilihan_D'),
(133, 1, '<p><span xss=removed>Bilangan 22 mempunyai 2 puluhan dan 2…</span></p>', '', '2', 'A. Satuan', 'B. Belasan', 'C. Puluhan', 'D. Ratusan', 'pilihan_A'),
(134, 1, '<p><span xss=removed>Lambang bilangan dari seratus tiga puluh tujuh adalah…</span></p>', '', '2', 'A. 713', 'B. 371', 'C. 137', 'D. 173', 'pilihan_C'),
(135, 1, '<p><span xss=removed>Jumlah kubus di atas adalah…</span></p>', 'kubus.png', '2', 'A. 123', 'B. 135', 'C. 153', 'D. 125', 'pilihan_B'),
(136, 2, '<p><span xss=removed>Lambang Negara Indonesia adalah…</span></p>', '', '2', 'A. Bendera merah putih', 'B. Garuda pancasila', 'C. UUD 1945', 'D. Lagu indonesia raya', 'pilihan_B'),
(137, 2, '<p><span xss=removed>Bunyi sila kedua Pancasila adalah…</span></p>', '', '2', 'A. Kemanusiaan yang adil dan beradab', 'B. Persatuan indonesia', 'C. Ketuhanan yang maha esa', 'D. Keadilan sosial bagi seluruh rakyat indonesia', 'pilihan_A'),
(138, 2, '<p><span xss=removed>Gambar di atas merupakan simbol sila ketiga Pancasila, yang berbunyi…</span></p>', 'pohon.png', '2', 'A. Kemanusiaan yang adil dan beradab', 'B. Persatuan indonesia', 'C. Ketuhanan yang maha esa', 'D. Keadilan sosial bagi seluruh rakyat indonesia', 'pilihan_B'),
(139, 2, '<p><span xss=removed>Gambar di atas merupakan simbol sila kelima Pancasila, yang berbunyi…</span></p>', 'padikapas.png', '2', 'A. Ketuhanan yang maha esa', 'B. Kemanusiaan yang adil dan beradab', 'C. Keadilan sosial bagi seluruh rakyat indonesia', 'D. Persatuan indonesia', 'pilihan_C'),
(140, 2, '<p><span xss=removed>Perilaku yang sesuai dengan sila kedua Pancasila adalah</span></p>', '', '2', 'A. Mengganggu teman yang sedang belajar', 'B. Menolong teman yang terjatuh', 'C. Mengejek teman', 'D. Membuang sampah sembarangan', 'pilihan_B'),
(141, 2, '<p><span xss=removed>Gambar di atas sesuai dengan sila Pancasila ke…</span></p>', 'banteng.png', '2', 'A. Pertama', 'B. Kedua', 'C. Ketiga', 'D. Keempat', 'pilihan_D'),
(142, 2, '<p><span xss=removed>Tidak mengganggu teman yang sedang beribadah sesuai dengn sila ke…</span></p>', '', '2', 'A. Pertama', 'B. Kedua', 'C. Ketiga', 'D. Keempat', 'pilihan_A'),
(143, 2, '<p><span xss=removed>Sila pertama Pancasila memiliki simbol…</span></p>', '', '2', 'A. Bulan', 'B. Bintang', 'C. Rantai', 'D. Pohon beringin', 'pilihan_B'),
(144, 2, '<p><span xss=removed>Dasar negara kita adalah…</span></p>', '', '2', 'A. Garuda', 'B. Pancasila', 'C. Indonesia', 'D. Merah putih', 'pilihan_B'),
(145, 2, '<p><span xss=removed>Bermusyawarah merupakan sikap yang sesuai dengan sila ke-4 yang berlambangkan...</span></p>', '', '2', 'A. Padi dan kapas', 'B. Kepala banteng', 'C. Rantai', 'D. Bintang', 'pilihan_A'),
(146, 3, '<p><span xss=removed>Dengan menjaga kebersihan rumah, rumah akan menjadi…</span></p>', '', '2', 'A. Bersih', 'B. Kotor', 'C. Tidak rapih', 'D. Panas', 'pilihan_A'),
(147, 3, '<p><span xss=removed>Jika rumah kotor akan menjadi sarang….</span></p>', '', '2', 'A. Harimau', 'B. Tanaman', 'C. Penyakit', 'D. Hantu', 'pilihan_C'),
(148, 3, '<p><span xss=removed>Ayah dan ibu bahagia melihat buah hati mereka selalu rukun.</span><br xss=removed><span xss=removed>Arti ungkapan dari buah hati adalah…</span></p>', '', '2', 'A. Hati-hati', 'B. Anak', 'C. Keluarga', 'D. Saudara', 'pilihan_B'),
(149, 3, '<p><span xss=removed>Dengan melakukan kerja sama pekerjaan akan menjadi lebih…</span></p>', '', '2', 'A. Berat', 'B. Ringan', 'C. Sama saja', 'D. Ramai', 'pilihan_B'),
(150, 3, '<p><span xss=removed>Kerja sama merupakan kegiatan yang termasuk kedalam pengamalan pancasila yaitu sila yang ke…</span></p>', '', '2', 'A. 4', 'B. 3', 'C. 2', 'D. 1', 'pilihan_B'),
(151, 3, '<p><span xss=removed>Bunyi dari sila ke 3 pada pancasila yaitu..</span></p>', '', '2', 'A. Keadilan sosial bagi seluruh rakyat Indonesia', 'B. Persatuan Indonesa', 'C. Ketuhanan Yang Maha Esa', 'D. Kemanusiaan yang adil dan beradab', 'pilihan_A'),
(152, 3, '<p><span xss=removed>Kerja sama merupakan kegiatan yang termasuk kedalam pengamalan pancasila yaitu sila yang ke…</span></p>', '', '2', 'A. 1', 'B. 25', 'C. 3', 'D. 4', 'pilihan_C'),
(153, 3, '<p><span xss=removed>Bunyi dari sila ke 3 pada pancasilan yaitu..</span></p>', '', '2', 'A. Keadilan sosial bagi seluruh rakyat Indonesia', 'B. Persatuan Indonesia', 'C. Kemanusiaan yang adil dan beradab', 'D. Ketuhanan yang maha esa', 'pilihan_A'),
(154, 3, '<p><span xss=removed>Ungkapan cepat kaki ringan tangan memiliki arti…</span></p>', '', '2', 'A. Cepat saat berlari', 'B. Senang bekerja sama', 'C. Mudah membantu orang serta giat dalam bekerja', 'D. Tidak suka bergaul', 'pilihan_C'),
(155, 3, '<p>Bekerja sama membersihkan rumah dapat ... kerukunan.</p>', '', '2', 'A. Melarang', 'B. Menjauhi', 'C. Menjaga', 'D. Merusak', 'pilihan_C'),
(156, 4, '<p>Hidup rukun itu rasanya...</p>', '', '2', 'A. Membosankan', 'B. Mengharukan', 'C. Menyenangkan', 'D. Meresahkan', 'pilihan_C'),
(157, 4, '<p>Beni selalu menolong orang lain agar mendapatkan pujian. Sikap Rudi tersebut merupakan…</p>', '', '2', 'A. Pantas ditiru', 'B. Tidak pantas ditiru', 'C. Sangat mulia', 'D. Terpuji', 'pilihan_B');

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
(2, 'siswa1', 'siswa@gmail.com', '$2y$10$FMwnEvs/6dM5F/5LOoJgregh87gRrHoD7hdGBRdV45c6q4pq8eAFu', 'siswa'),
(3, 'siswa2', 'siswa2@gmail.com', '$2y$10$BeYWlchAAPn0AzOmLKRTHekUAaeiGFtIfcuK/6vEf2tr5UlSDx8mS', 'siswa'),
(4, 'siswa3', 'siswa3@gmail.com', '$2y$10$I.GDrX6nYdnKWZCJKlMqgOEapZuVJSFoNESZ.ZX017nl/udBjpC.G', 'siswa');

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
(1, 1, 'Video 1', '1', 'https://video.cerdasbelajar.id/embed?m=kn94z8gs2'),
(8, 2, 'Video 2', '1', 'https://video.cerdasbelajar.id/embed?m=4u3ozOFlz'),
(9, 3, 'Video 3', '1', 'https://video.cerdasbelajar.id/embed?m=8KJsTjek5'),
(10, 4, 'Video 4', '1', 'https://video.cerdasbelajar.id/embed?m=feqmxJw3Y'),
(11, 5, 'Video 5', '1', 'https://video.cerdasbelajar.id/embed?m=TCGBPUnex'),
(12, 14, 'Video 6', '1', 'https://video.cerdasbelajar.id/embed?m=6z65NwjX0'),
(13, 7, 'Video 7', '1', 'https://video.cerdasbelajar.id/embed?m=iQdOa7lma'),
(14, 1, 'Video 1', '2', 'https://video.cerdasbelajar.id/embed?m=bXHPzYbYd'),
(15, 2, 'Video 2', '2', 'https://video.cerdasbelajar.id/embed?m=qA9gQ1XVI'),
(16, 4, 'Video 3', '2', 'https://video.cerdasbelajar.id/embed?m=zP5THU2uX'),
(17, 5, 'Video 4', '2', 'https://video.cerdasbelajar.id/embed?m=yRnwPDTnj'),
(18, 14, 'Video 5', '2', 'https://video.cerdasbelajar.id/embed?m=OOJ6E5nOH'),
(19, 7, 'Video 6', '2', 'https://video.cerdasbelajar.id/embed?m=vUy6ZMMQj'),
(20, 3, 'Video 7', '2', 'https://video.cerdasbelajar.id/embed?m=bOteQRD1O'),
(21, 8, 'Video 8', '2', 'https://video.cerdasbelajar.id/embed?m=zFDmNMuaw'),
(22, 1, 'Video 1', '3', 'https://video.cerdasbelajar.id/embed?m=BJ6nQidj1'),
(23, 3, 'Video 2', '3', 'https://video.cerdasbelajar.id/embed?m=1kPqdOUsr'),
(24, 4, 'Video 3', '3', 'https://video.cerdasbelajar.id/embed?m=me90oetuU'),
(25, 5, 'Video 4', '3', 'https://video.cerdasbelajar.id/embed?m=D9oUDkGAg'),
(26, 9, 'Video 5', '3', 'https://video.cerdasbelajar.id/embed?m=j6CjgfC9p'),
(27, 1, 'Video 1', '4', 'https://video.cerdasbelajar.id/embed?m=Faym6iTho'),
(28, 3, 'Video 2', '4', 'https://video.cerdasbelajar.id/embed?m=iWtFiWFQe'),
(29, 4, 'Video 3', '4', 'https://video.cerdasbelajar.id/embed?m=HAe6wIvox'),
(30, 5, 'Video 4', '4', 'https://video.cerdasbelajar.id/embed?m=oPM6TkdJA'),
(31, 14, 'Video 5', '4', 'https://video.cerdasbelajar.id/embed?m=Hipdt0bA8'),
(32, 1, 'Video 1', '5', 'https://video.cerdasbelajar.id/embed?m=rfp1LS9gQ'),
(33, 2, 'Video 2', '5', 'https://video.cerdasbelajar.id/embed?m=GaghBLWI2'),
(34, 3, 'Video 3', '5', 'https://video.cerdasbelajar.id/embed?m=ZkAm814Uc'),
(35, 4, 'Video 4', '5', 'https://video.cerdasbelajar.id/embed?m=l82xLtHrp'),
(36, 5, 'Video 5', '5', 'https://video.cerdasbelajar.id/embed?m=mP2TLXzgn'),
(37, 1, 'Video 1', '6', 'https://video.cerdasbelajar.id/embed?m=Ksb79SmDH'),
(38, 2, 'Video 2', '6', 'https://video.cerdasbelajar.id/embed?m=wtbbLWyiD'),
(39, 3, 'Video 3', '6', 'https://video.cerdasbelajar.id/embed?m=8XkGzoq22'),
(40, 4, 'Video 4', '6', 'https://video.cerdasbelajar.id/embed?m=yDmka9uPR'),
(41, 5, 'Video 5', '6', 'https://video.cerdasbelajar.id/embed?m=UJbGI5wr0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pembahasan`
--
ALTER TABLE `pembahasan`
  MODIFY `id_pembahasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
