-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 10:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netacad`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi`
--

CREATE TABLE `evaluasi` (
  `idEvaluasi` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idSoal` int(11) NOT NULL,
  `jawaban` varchar(35) NOT NULL,
  `jawabanBenar` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `idFile` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `namaFile` varchar(50) NOT NULL,
  `lokasiFile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`idFile`, `idUser`, `namaFile`, `lokasiFile`) VALUES
(22, 1, 'AHP.docx', 'localhost/netacad/uploads/AHP.docx'),
(23, 1, 'ROUNDDOWN RW 07 BERSHOLAWAT.docx', 'localhost/netacad/uploads/ROUNDDOWN RW 07 BERSHOLAWAT.docx'),
(24, 1, 'rpp - tampilkan.docx', 'localhost/netacad/uploads/rpp - tampilkan.docx'),
(25, 1, 'nametag.docx', 'localhost/netacad/uploads/nametag.docx');

-- --------------------------------------------------------

--
-- Table structure for table `praktik`
--

CREATE TABLE `praktik` (
  `idPraktik` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idFile` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `idSoal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `opsiA` text NOT NULL,
  `opsiB` text NOT NULL,
  `opsiC` text NOT NULL,
  `opsiD` text NOT NULL,
  `opsiE` text NOT NULL,
  `a` tinyint(1) NOT NULL,
  `b` tinyint(1) NOT NULL,
  `c` tinyint(1) NOT NULL,
  `d` tinyint(1) NOT NULL,
  `e` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`idSoal`, `soal`, `opsiA`, `opsiB`, `opsiC`, `opsiD`, `opsiE`, `a`, `b`, `c`, `d`, `e`) VALUES
(1001, 'Sebuah aturan atau standar yang mengatur bagaimana terjadinya hubungan dan perpindahan data antara dua atau lebih komputer yang saling terhubung, dikenal dengan istilah ....', 'Internet Protocol\r\n', 'Protokol Jaringan', 'Standarisasi', 'Rules', 'Peraturan', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nim` varchar(7) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nim`, `password`, `nama`, `level`) VALUES
(1, '1501702', '12345678', 'Desphi Satria', 1),
(18, 'admin', 'admin', 'Admin', 0),
(20, '1504919', '12345678', 'Ziady Mubaraq', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`idEvaluasi`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idSoal` (`idSoal`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`idFile`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `praktik`
--
ALTER TABLE `praktik`
  ADD PRIMARY KEY (`idPraktik`),
  ADD UNIQUE KEY `idFile` (`idFile`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`idSoal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `idFile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD CONSTRAINT `evaluasi_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `evaluasi_ibfk_2` FOREIGN KEY (`idSoal`) REFERENCES `soal` (`idSoal`);

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `praktik`
--
ALTER TABLE `praktik`
  ADD CONSTRAINT `praktik_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `praktik_ibfk_2` FOREIGN KEY (`idFile`) REFERENCES `file` (`idFile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
