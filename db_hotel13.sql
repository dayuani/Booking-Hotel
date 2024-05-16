-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 06:57 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel13`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`id`, `nama`, `keterangan`, `image`) VALUES
(0, 'wwwwww', 'tes', 'kolam.jpg'),
(1, 'Kolam Renang', 'Kolam berukuran 20m x 10m dengan air yang jernih', 'kolam.jpg'),
(2, 'Restoran ', 'Restoran makan dengan menu yang lengkap', 'restoran.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id` int(11) NOT NULL,
  `kamar_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id`, `kamar_id`, `nama`) VALUES
(0, 2, 'tes'),
(1, 1, '-kolam<br>\r\n-tv 55\"');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `tipe`, `jumlah`, `image`) VALUES
(0, 'pipiipi', 0, 'slide_01.jpg'),
(1, 'Deluxe Room', 12, 'deluxe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(200) NOT NULL,
  `nama_tamu` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `kamar_id` int(11) NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `nama_pemesan`, `nama_tamu`, `email`, `hp`, `kamar_id`, `tgl_checkin`, `tgl_checkout`, `status`, `jumlah`) VALUES
(0, 'mrs.dian', 'dayuani', 'dilla1234@gmail.com', '123456', 2, '2022-04-06', '2022-04-16', 'vip', 4),
(1, 'ayu', 'atyu', 'lfebriasih@gmail.com', '543424', 1, '2022-03-01', '2022-04-06', 'reservasi', 1),
(3, 'will', 'will', 'will@gmail.com', '354678', 1, '2022-04-06', '2022-04-15', 'reservasi', 2),
(4, 'dipta', 'dipa', 'diptanih@gmail.com', '081234567', 2, '2022-04-05', '2022-04-18', 'reservasi', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampilkamar`
-- (See below for the actual view)
--
CREATE TABLE `tampilkamar` (
`id_kamar` int(11)
,`tipe` varchar(200)
,`jumlah` int(5)
,`image` varchar(100)
,`id_fasilitas` int(11)
,`nama` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `level` enum('admin','resepsionis','tamu') NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `level`, `password`) VALUES
(1, 'dayu', 'dayuani', 'resepsionis', 'dayuani');

-- --------------------------------------------------------

--
-- Structure for view `tampilkamar`
--
DROP TABLE IF EXISTS `tampilkamar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampilkamar`  AS SELECT `kamar`.`id` AS `id_kamar`, `kamar`.`tipe` AS `tipe`, `kamar`.`jumlah` AS `jumlah`, `kamar`.`image` AS `image`, `fasilitas_kamar`.`id` AS `id_fasilitas`, `fasilitas_kamar`.`nama` AS `nama` FROM (`kamar` left join `fasilitas_kamar` on(`kamar`.`id` = `fasilitas_kamar`.`kamar_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kamar_id` (`kamar_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
