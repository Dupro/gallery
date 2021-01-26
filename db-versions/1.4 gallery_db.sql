-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 11:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photo_id`, `author`, `body`) VALUES
(1, 12, 'Dusko', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alternate_text` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `caption`, `description`, `filename`, `alternate_text`, `type`, `size`, `user_id`) VALUES
(12, 'Automobil', 'Nova kapcija', '<p>testtt</p>', 'images-37 copy.jpg', 'Alternativa od teksta', 'image/jpeg', 20381, 5),
(21, 'automobilcic', '', '', 'images-11 copy.jpg', '', 'image/jpeg', 27916, 0),
(22, 'jos jedan', '', '', 'images-12.jpg', '', 'image/jpeg', 18540, 0),
(23, 'Dusko Pro', '', '', 'images-50.jpg', '', 'image/jpeg', 21652, 0),
(24, 'Licna karta12', '', '', 'images-14.jpg', '', 'image/jpeg', 21992, 0),
(26, 'Licna karta1123', '', '', 'images-16.jpg', '', 'image/jpeg', 21133, 5),
(30, 'auto', '', '', 'images-26.jpg', '', 'image/jpeg', 21802, 0),
(31, 'auto2', '', '', 'images-18.jpg', '', 'image/jpeg', 27595, 0),
(34, '', '', '', 'images-41 copy.jpg', '', 'image/jpeg', 16296, 0),
(35, '', '', '', 'images-40.jpg', '', 'image/jpeg', 24385, 0),
(36, '', '', '', 'images-28.jpg', '', 'image/jpeg', 17662, 0),
(37, '', '', '', 'images-29 copy.jpg', '', 'image/jpeg', 25493, 0),
(38, '', '', '', 'images-36 copy.jpg', '', 'image/jpeg', 21672, 0),
(39, '', '', '', 'images-9 copy.jpg', '', 'image/jpeg', 21108, 0),
(40, '', '', '', 'images-13 copy.jpg', '', 'image/jpeg', 22082, 0),
(41, '', '', '', 'images-32 copy.jpg', '', 'image/jpeg', 22772, 0),
(42, '', '', '', 'images-33 copy.jpg', '', 'image/jpeg', 16855, 0),
(43, '', '', '', 'images-36.jpg', '', 'image/jpeg', 21672, 0),
(44, '', '', '', 'images-39 copy.jpg', '', 'image/jpeg', 24969, 0),
(45, '', '', '', 'images-42 copy.jpg', '', 'image/jpeg', 22401, 0),
(46, '', '', '', 'images-43 copy.jpg', '', 'image/jpeg', 27955, 0),
(47, '', '', '', 'images-50 copy.jpg', '', 'image/jpeg', 21652, 0),
(48, '', '', '', 'images-1 copy.jpg', '', 'image/jpeg', 28947, 0),
(50, '', '', '', '_large_image_3.jpg', '', 'image/jpeg', 165053, 5),
(51, 'qweqweqwe', '', '', 'images-6.jpg', '', 'image/jpeg', 21886, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `user_image`) VALUES
(5, 'Elon', '123', 'Elon', 'Musk', 'images-37%20copy.jpg'),
(29, 'Dusko', '123', 'Dusko', 'Prokopijevic', 'images-5 copy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
