-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 09:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pandoradb`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`) VALUES
(1, 'Black Clover Movie', 'uploads/bcmovie.jpg'),
(2, 'Beast Tamer', 'uploads/beasttamer.jpg'),
(3, 'Rascal Does Not Dream of Bunny Girl Senpai', 'uploads/bunnygirlsenpai.jpg'),
(4, 'Chainsaw Man', 'uploads/chainsawman.jpg'),
(5, 'DARLING in the FRANXX', 'uploads/darlinginthefranxx.jpg'),
(6, 'Drifting Home', 'uploads/drifting home.jpg'),
(7, 'Demon Slayer Movie: Mugen Train', 'uploads/dsmugentrain.jpg'),
(8, 'Evangelion: 1.0 You Are (Not) Alone', 'uploads/evangelion1.jpg'),
(9, 'Evangelion: 2.0 You Can (Not) Advance', 'uploads/evangelion2.jpg'),
(10, 'Evangelion: 3.0 You Can (Not) Redo', 'uploads/evangelion3.jpg'),
(11, 'Evangelion: 3.0+1.0 Thrice Upon a Time', 'uploads/evangelion3+1.jpg'),
(12, 'In/Spectre', 'uploads/inspectre.jpg'),
(13, 'Josee, the Tiger and the Fish', 'uploads/josee.jpg'),
(14, 'Kaguya-Sama: Love is war', 'uploads/kaguyasama1.jpg'),
(15, 'Love Flops', 'uploads/loveflops.jpg'),
(16, 'More than a married couple, but not lovers', 'uploads/morethanamarriedcouplebutnotlovers.jpg'),
(17, 'Sword Art Online', 'uploads/sao.jpg'),
(18, 'Sword Art Online: Progressive', 'uploads/saoprogressive.jpg'),
(19, 'Sword Art Online: Progressive - Scherzo of Deep Night', 'uploads/saoprogressive2.jpg'),
(20, 'Spy x Family Part 2', 'uploads/spyxfamily2.jpg'),
(21, 'The Devil is a Part-Timer! Season 2', 'uploads/thedevilisaparttimer2.jpg'),
(22, 'The Eminence in Shadow', 'uploads/theeminenceinshadow.jpg'),
(23, 'The Quintessential Quintuplets', 'uploads/thequintessentialquintuplets1.jpg'),
(24, 'The Quintessential Quintuplets 2', 'uploads/thequintessentialquintuplets2.png'),
(25, 'The Quintessential Quintuplets: The Movie', 'uploads/thequintessentialquintupletsmovie.jpg'),
(26, 'Tonikawa: Over The Moon For You', 'uploads/tonikawaotmfu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'pandora', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(2, 'pandoraroot', '63a9f0ea7bb98050796b649e85481845', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
