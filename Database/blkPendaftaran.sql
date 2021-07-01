-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 09:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blk`
--

-- --------------------------------------------------------

--
-- Table structure for table `programpelatihan`
--

CREATE TABLE `programpelatihan` (
  `gambar` varchar(100) NOT NULL,
  `subJurusan` varchar(50) NOT NULL,
  `waktuPelatihan` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `Kejuruan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programpelatihan`
--

INSERT INTO `programpelatihan` (`gambar`, `subJurusan`, `waktuPelatihan`, `deskripsi`, `Kejuruan`) VALUES
('gIT2.jpg', 'Desain Grafis', '260 Jam', 'Pelatihan ini mempelajari cara melakukan produksi media cetak, antara lain poster..', 'IT'),
('gIT2.jpg', 'Multimedia', '240 Jam Pelatihan', 'Pelatihan ini mempelajari cara melakukan produksi video. Selain mempelajari teknik-teknik pengambilan video, siswa juga mempelajari tekning editing video....', 'IT'),
('gIT2.jpg', 'Office Tools', '260 Jam Pelatihan', 'Pelatihan ini mempelajari cara membuat dokumen perkantoran. Siswa mempelajari penggunaan aplikasi perkantoran, seperti Microsoft Word, Microsoft Excel, Microsoft Power Point, dan lain-lain.', 'IT'),
('gIT1.jpg', 'Programing Web', '340 Jam', 'Pelatihan ini mempelajari cara membuat website dinamis.', 'IT'),
('gIT3.jpg', 'Teknik Jaringan', '240-260 Jam', 'Pelatihan ini mempelajari cara membuat jaringan komputer...', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id_user` int(11) NOT NULL,
  `NIK` bigint(16) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `subJurusan` varchar(80) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `foto` varchar(200) NOT NULL DEFAULT 'profil.jpg',
  `password` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id_user`, `NIK`, `nama_lengkap`, `subJurusan`, `no_tlp`, `foto`, `password`, `status`) VALUES
(19, 1122334455667788, 'Admin Ilham', 'Programing Web', '082230029824', '60cff465218f5.jpg', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(20, 1234567891234567, 'Kiki Sofidin', 'Desain Grafis', '08230293873', '60cff49c9d771.jpg', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(26, 1029388283737463, 'Bruno Mars', 'Teknik Jaringan', '082382938748', '60d080d1e0d80.jpg', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(28, 2839283728374623, 'Ahmad Mokelin', 'Multimedia', '083293849382', '60d08153293cf.jpg', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(29, 3333029383746236, 'Ghofar Gazali', 'Teknik Jaringan', '085637483738', '60d08dc1c6ecb.jpg', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(30, 3333823827123273, 'M. Dhika Z', 'Programing Web', '082384732182', '60d09bcf44e05.jpg', '81dc9bdb52d04dc20036dbd8313ed055', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `programpelatihan`
--
ALTER TABLE `programpelatihan`
  ADD PRIMARY KEY (`subJurusan`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `pilih_program` (`subJurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userdata`
--
ALTER TABLE `userdata`
  ADD CONSTRAINT `userdata_ibfk_1` FOREIGN KEY (`subJurusan`) REFERENCES `programpelatihan` (`subJurusan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
