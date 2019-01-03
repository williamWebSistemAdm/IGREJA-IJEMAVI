-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jan-2019 às 13:36
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ijemavi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `devocional`
--

CREATE TABLE `devocional` (
  `id_devocional` int(11) NOT NULL,
  `titulo_dev` varchar(100) NOT NULL,
  `resumo_dev` varchar(300) NOT NULL,
  `data_dev` date NOT NULL,
  `texto_dev` varchar(4555) NOT NULL,
  `autor_dev` varchar(100) NOT NULL,
  `usuario_logado_dev` varchar(100) DEFAULT NULL,
  `foto_dev` varchar(45) DEFAULT NULL,
  `id_obreiro_dev_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devocional`
--
ALTER TABLE `devocional`
  ADD PRIMARY KEY (`id_devocional`),
  ADD KEY `fk_devocional_obreiros1_idx` (`id_obreiro_dev_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devocional`
--
ALTER TABLE `devocional`
  MODIFY `id_devocional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `devocional`
--
ALTER TABLE `devocional`
  ADD CONSTRAINT `fk_devocional_obreiros1` FOREIGN KEY (`id_obreiro_dev_fk`) REFERENCES `obreiros` (`id_obreiros`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
