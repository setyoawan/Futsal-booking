-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 08:02 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(15, 'novan', '86b841de480bd4c10a60642dac5e8bb5', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tgl_artikel` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul_artikel`, `isi_artikel`, `tgl_artikel`) VALUES
(49, 'Internazionale futsal adakan nobar piala dunia', ' hey  guys ! dengan adanya pertandingan piala dunia yang di gelar 4 tahunan internazionale futsal mengadakan acara nonton bareng ', '2018-06-30 00:00:00'),
(50, 'Internazionale futsal lengkapi lapangan dengan scoreboard digital', 'internazionale futsal menggunakan score board digital, dengan adanya teknologi scoreboard digital ini memudahkan klub yang bertanding mengetahu score dengan jelas', '2018-06-30 00:00:00'),
(51, 'Internazionale futsal mengganti jenis lapangan rumput sintetis', 'internazionale futsal mengganti jenis lapangan dari bahan dasar kayu menjadi rumput sintetis .pergantian ini di sebabkan beberapa hal yang mempengaruhi pengurus menggantinya. ', '2018-06-30 00:00:00'),
(52, 'Internazionale futsal menyediakan sewa rompi latihan', 'sekarang sparing jadi gampang dengan adanya fasiltas sewa rompi yang di peruntukkan untuk kebutuhan latihan klub dan juga sparingan.', '2018-06-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `klub` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_ktp` varchar(15) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `waktu` date NOT NULL,
  `jam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `username`, `klub`, `alamat`, `no_ktp`, `no_telepon`, `waktu`, `jam`) VALUES
(8, 'awan', 'gedang fc', 'jalan rimba mulya lengkong', '12345679', '098785899914', '2018-11-12', '18:00 - 19:00'),
(9, 'ahmad novanto', 'gedang fc', 'jalan merdeka barat no 12 leng', '123456780', '087367623655', '2018-11-15', '11:00 - 12:00');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `penyelenggara` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `nama_event` varchar(30) NOT NULL,
  `hadiah` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `pelaksanaan` date NOT NULL,
  `jam` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `penyelenggara`, `alamat`, `no_telepon`, `nama_event`, `hadiah`, `deskripsi`, `pelaksanaan`, `jam`) VALUES
(1, 'pemerintah kecamatan lengkong', 'jalan merdeka timur nomer 20 lengkong', '089653097212', 'piala bergilir camat', 'sepedah motor', 'event yang di adakan setiap tahun yang diselenggarakan oleh pemerintah kecamatan lengkong nganjuk', '0000-00-00', '11:00'),
(4, 'pabrik gula lestari', 'jalan raya patianrowo kertosono', '082332456722', 'buka giling cup', 'gula 1 kwintal', 'event yang selalu di adakan setiap tahunnya ', '2018-08-15', '10:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `klub` varchar(30) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `klub`, `alamat`, `no_ktp`, `no_telepon`, `password`) VALUES
(16, 'user', 'gedang fc', 'jalan rimba mulya 9 lengkong', '12345678', '0895331535131', 'ee11cbb19052e40b07aac0ca060c23ee'),
(29, 'novan', 'lengkong fc', 'jalan kemuning no 17 lengkong', '12345678', '08245499915', '86b841de480bd4c10a60642dac5e8bb5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
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
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
