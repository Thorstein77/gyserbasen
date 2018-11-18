-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 11:57 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gyserbasen`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `aId` int(11) NOT NULL,
  `aUser` varchar(100) NOT NULL,
  `aEmail` varchar(60) NOT NULL,
  `aPw` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`aId`, `aUser`, `aEmail`, `aPw`) VALUES
(6, 'kristian', 'jubbelidiot@gmail.com', '$2y$10$Ef18RNK7t2uS4VMchjdY1ugbdj2qKuZlktOwMQyiTIaAK8cuxUmHK'),
(7, 'admin', 'admin@kthor.dk', '$2y$10$rz/dElFeRbpu6X.uTwMzB.BFttzoYve57kJepuo.PbsQDRCmM4JBS');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `gId` int(11) NOT NULL,
  `gName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`gId`, `gName`) VALUES
(1, 'Gyser'),
(2, 'Thriller'),
(3, 'Action'),
(4, 'Mysterium'),
(5, 'Sci-fi'),
(6, 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mId` int(11) NOT NULL,
  `mTitle` varchar(200) COLLATE utf8_danish_ci NOT NULL,
  `mGenre` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `mYear` year(4) NOT NULL,
  `mImg` varchar(150) COLLATE utf8_danish_ci DEFAULT NULL,
  `mApi` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mId`, `mTitle`, `mGenre`, `mYear`, `mImg`, `mApi`) VALUES
(1, 'Venom', 'Gyser <br>Sci-fi <br>Action', 2018, 'images/venom.jpg', 'movie/335983'),
(2, 'The Nun', 'Gyser <br>Mysterium <br>Thriller', 2018, 'images/thenun.jpg', 'movie/439079'),
(3, 'Halloween', 'Gyser <br>Thriller', 2018, 'images/halloween.jpg', 'movie/424139'),
(4, 'The First Purge', 'Gyser <br>Action <br>Thriller <br>Sci-fi', 2018, 'images/thefirstpurge.jpg', 'movie/442249'),
(5, 'The Predator', 'Gyser <br>Sci-fi <br>Action <br>Thriller', 2018, 'images/predator.jpg', 'movie/346910'),
(6, 'A Quiet Place', 'Drama <br>Gyser <br>Thriller <br>Sci-fi', 2018, 'images/aquiteplace.jpg', 'movie/447332'),
(7, 'The Purge: Election Year', 'Action <br>Gyser <br>Thriller', 2016, 'images/thepurge3.jpg', 'movie/316727'),
(8, 'Maskernes Nat', 'Gyser <br>Thriller', 1978, 'images/maskernesnat.jpg', 'movie/948');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`aId`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`gId`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `aId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `gId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
