-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2026 at 05:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbnfilmai`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `contentid` int(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `contentid`, `type`) VALUES
(165, 21, 4, 'movie'),
(166, 21, 6, 'movie'),
(167, 21, 19, 'series'),
(168, 21, 20, 'series');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `image`) VALUES
(1, 'Avengers Endgame', '../images/Avengers_Endgame.jpg'),
(2, 'The Dark Knight', '../images/The_Dark_Knight.jpg'),
(3, 'Spiderman 2', '../images/Spiderman_2.jpg'),
(4, 'Lord of the Rings', '../images/Lord_Of_The_Rings_The_Return_Of_The_King.jpg'),
(5, 'Mad Max Fury Road', '../images/Mad_Max_Fury_Road.jpg'),
(6, 'John Wick Chapter 2', '../images/John_Wick_Chapter_2.jpg'),
(7, 'John Wick Chapter 4', '../images/John_Wick_Chapter_4.jpg'),
(8, 'The Matrix', '../images/The_Matrix.jpg'),
(9, 'Harry Potter Deathly Hallows Part 2', '../images/Harry_Potter_And_The_Deathly_Hollows_Part_2.jpg'),
(10, 'Doctor Strange', '../images/Doctor_Strange.jpg'),
(11, 'Avatar Fire and Ash', '../images/Avatar_Fire_And_Ash.jpg'),
(12, 'Avatar The Way of Water', '../images/Avatar_The_Way_Of_Water.jpg'),
(13, 'Doctor Strange Multiverse of Madness', '../images/Doctor_Strange_In_The_Multiverse_Of_Madness.jpg'),
(14, 'Black Panther', '../images/Black_Panther.jpg'),
(15, 'The Green Mile', '../images/The_Green_Mile.jpg'),
(16, 'Spirited Away', '../images/Spirited_Away.jpg'),
(17, 'Scream', '../images/Scream.jpg'),
(18, 'The Shinning', '../images/The_Shining.jpg'),
(19, 'HALLOWEEN 2', '../images/Halloween_2.jpg'),
(20, 'Five Nights At Freddy\'s', '../images/Five_Nights_At_Freddys.jpg'),
(21, 'Five Nights at Freddy\'s 2', '../images/Five_Nights_At_Freddys_2.jpg'),
(22, 'Alien: Covenant', '../images/Alien_Covenant.jpg'),
(23, 'The Silence of the Lambs', '../images/The_Silence_Of_The_Lambs.jpg'),
(24, 'Jaws', '../images/Jaws.jpg'),
(25, 'Home Alone', '../images/Home_Alone.jpg'),
(26, 'Dumb and Dumber', '../images/Dumb_And_Dumber.jpg'),
(27, 'The Hangover Part II', '../images/The_Hangover_Part_2.jpg'),
(28, 'Superbad', '../images/Superbad.jpg'),
(29, 'Shaft', '../images/Shaft.jpg'),
(30, 'Borat', '../images/borat.jpg'),
(31, 'The Wolf of Wall Street', '../images/The_Wolf_Of_Wall_Steet.jpg'),
(32, 'Shrek', '../images/Shrek.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `name`, `image`) VALUES
(1, 'Arcane', '../images/Arcane.jpg'),
(2, 'Gravity Falls', '../images/Gravity_Falls.jpg'),
(3, 'Rick And Morty', '../images/Rick_And_Morty.jpg'),
(4, 'Invincible', '../images/Invincable.jpg'),
(5, 'Spongebob Squarepants', '../images/Spongebob_Squarepants.jpg'),
(6, 'The Simpsons', '../images/The_Simpsons.jpg'),
(7, 'Avatar: The Last Airbender', '../images/Avatar_The_Last_Airbender.jpg'),
(8, 'Blue Eye Samurai', '../images/Blue_Eye_Samurai.jpg'),
(9, 'Game Of Thrones', '../images/Game_Of_Thrones.jpg'),
(10, 'Breaking Bad', '../images/Breaking_Bad.jpg'),
(11, 'Peaky Blinders', '../images/Peaky_Blinders.jpg'),
(12, 'House of the Dragon', '../images/House_Of_The_Dragon.jpg'),
(13, 'A Knight Of The Seven Kingdoms', '../images/A_Knight_Of_The_Seven_Kingdoms.webp'),
(14, 'Better Call Saul', '../images/Better_Call_Saul.jpg'),
(15, 'Band of Brothers', '../images/Band_Of_Brothers.jpg'),
(16, 'The Wire', '../images/The_Wire.jpg'),
(17, 'Stranger Things', '../images/Stranger_Things.jpg'),
(18, 'Andor', '../images/Andor.jpg'),
(19, 'The Witcher', '../images/The_Witcher.jpg'),
(20, 'Lord of the Rings: The Rings of Power', '../images/Lord_Of_The_Rings_The_Rings_Of_Power.jpg'),
(21, 'Wednesday', '../images/Wednesday.jpg'),
(22, 'The Mandalorian', '../images/The_Mandalorian.jpg'),
(23, 'Lost', '../images/Lost.jpg'),
(24, 'Loki', '../images/Loki.jpg'),
(25, 'Attack on Titan', '../images/Attack_On_Titan.jpg'),
(26, 'Naruto: Shippuden', '../images/Naruto_Shippuden.jpg'),
(27, 'One Piece', '../images/One_Piece.jpg'),
(28, 'Demon Slayer', '../images/Demon_Slayer.jpg'),
(29, 'Dragonball Z', '../images/Dragonball_Z.jpg'),
(30, 'Death Note', '../images/Death_Note.png'),
(31, 'Chainsaw Man', '../images/Chainsaw_Man.jpg'),
(32, 'Vinland Saga', '../images/Vinland_Saga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
