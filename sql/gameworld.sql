-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2017 at 08:39 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `game_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `console` text NOT NULL,
  `price` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`game_id`, `name`, `console`, `price`) VALUES
(1, 'Super Mario Odyssey', 'Switch', '60'),
(2, 'The Legend of Zelda - Breath of The Wild', 'Switch', '60'),
(3, 'Mario + Rabbids Kindom Battle', 'Switch', '60'),
(4, 'Horizon Zero Dawn', 'Playstation', '30'),
(5, 'Until Dawn', 'Playstation', '40'),
(6, 'Danganronpa V3', 'Playstation', '60'),
(7, 'Grand Theft Auto V', 'Xbox', '55'),
(8, 'Battlefield 1', 'Xbox', '25'),
(9, 'Call of Duty - WWII', 'Xbox', '65'),
(10, 'Super Bomberman R', 'Switch', '60'),
(11, 'Mario Kart 8 Deluxe', 'Switch', '55'),
(12, 'Yooka Laylee', 'Switch', '40'),
(13, 'Persona 5', 'Playstation', '60'),
(14, 'The Last of Us Remastered', 'Playstation', '50'),
(15, 'Nier: Automata', 'Playstation', '55'),
(16, 'Cuphead', 'Xbox', '20'),
(17, 'South Park - The Fractured But Whole', 'Xbox', '55'),
(18, 'Fifa 18', 'Xbox', '60');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`game_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
