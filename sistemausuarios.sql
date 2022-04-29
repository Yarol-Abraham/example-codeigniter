-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 03:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemausuarios`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password_user`) VALUES
(16, 'manual_4', 'manuel4@gmail.com', '123456'),
(32, 'test_5', 'test_5@gmail.com', '123456'),
(33, 'test_6', 'test_6@gmail.com', '123456'),
(34, 'test_7', 'test_7@gmail.com', '123456'),
(35, 'test_8', 'test_8@gmail.com', '123456'),
(36, 'test_9', 'test_9@gmail.com', '123456'),
(37, 'test_10', 'test_10@gmail.com', '123456'),
(38, 'test_11', 'test_11@gmail.com', '123456'),
(40, 'test_12', 'test_12@gmail.com', '123456'),
(41, 'test_13', 'test_13@gmail.com', '123456'),
(42, 'test_14', 'test_14@gmail.com', '123456'),
(43, 'test_15', 'test_15@gmail.com', '123456'),
(44, 'sdasd', 'test_5sadsadas@gmail.com', '123456'),
(45, 'vbcvbg', 'test_5sdasdvc@gmail.com', '123456'),
(46, 'probando', 'probrando@gmail.com', '123456'),
(47, 'yarol', 'yarol@gmail.com', '123456'),
(48, 'jhggffg', 'test_5dasdasd@gmail.com', 'manuel_5'),
(49, 'test_20', 'test_205@gmail.com', '123456'),
(50, 'test_21', 'test_21@gmail.com', '123456'),
(51, 'kkjhjkhj', 'test_5sdasdasd@gmail.com', 'test_6'),
(52, 'hola', 'hola@gmail.com', 'hola'),
(53, 'holalalala', 'holaallala@gmail.com', '123456'),
(54, 'prueba', 'prueba@gmail.com', '123456'),
(55, 'prueba lol', 'bkdgjklgsgfgmail.com', '123456'),
(56, 'ejemplo finalizado', 'finish@gmail.com', '123456'),
(57, 'test upload', 'test_upload@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
