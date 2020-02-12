-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 07:21 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurante`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_cadegoria` int(11) NOT NULL,
  `categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_cadegoria`, `categoria`) VALUES
(1, 'Carne'),
(2, 'Peixe'),
(3, 'Sopa'),
(4, 'Sobremesa');

-- --------------------------------------------------------

--
-- Table structure for table `ementa`
--

CREATE TABLE `ementa` (
  `id_ementa` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `preco` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ementa`
--

INSERT INTO `ementa` (`id_ementa`, `titulo`, `descricao`, `id_categoria`, `foto`, `preco`) VALUES
(2, 'Arroz de cabidela', 'Prato principal', 1, 'cabidela.jpg', '7'),
(3, 'Frango Churrasco', 'Prato principal', 1, 'churrasco.jpg', '5'),
(6, 'Papas de sarrabulho', 'Prato principal', 1, 'papas.jpg', '10'),
(7, 'Grelhada Mixta', 'Prato Principal', 1, 'grelhada.jpg', '12'),
(10, 'Arroz de chocos', 'Prato principal', 2, 'arrozchocos.jpg', '8'),
(12, 'Bacalhau com natas', 'Prato principal de peixe', 2, 'bacalhau.jpg', '10'),
(13, 'Caril de gambas', 'Prato principal de peixe', 2, 'carildegambas.jpg', '12'),
(15, 'Caldo verde', 'Sopa', 3, 'caldoverde.jpg', '2'),
(17, 'Creme de Courgetes', 'Sopa', 3, 'cremedecourgetes.jpg', '2'),
(19, 'Creme de Tomate', 'Sopa', 3, 'cremedetomate.jpg', '2'),
(20, 'Arroz Doce', 'Sobremesa', 4, 'arrozdoce.jpg', '1'),
(21, 'Bolo Inglês', 'Sobremesa', 4, 'boloingles.jpg', '1'),
(22, 'Baba de Camelo', 'Sobremesa', 4, 'babadecamelo.jpg', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cadegoria`),
  ADD KEY `id_cadegoria` (`id_cadegoria`);

--
-- Indexes for table `ementa`
--
ALTER TABLE `ementa`
  ADD PRIMARY KEY (`id_ementa`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cadegoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ementa`
--
ALTER TABLE `ementa`
  MODIFY `id_ementa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ementa`
--
ALTER TABLE `ementa`
  ADD CONSTRAINT `ementa_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_cadegoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
