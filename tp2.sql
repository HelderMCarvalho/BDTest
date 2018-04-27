-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 27-Abr-2018 às 14:57
-- Versão do servidor: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE IF NOT EXISTS `utilizadores` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `nome` varchar(535) NOT NULL COMMENT 'Nome',
  `foto` varchar(535) NOT NULL COMMENT 'Caminho da Foto',
  `email` varchar(535) NOT NULL COMMENT 'Email',
  `funcao` varchar(20) NOT NULL COMMENT 'Função',
  `estado` varchar(20) NOT NULL COMMENT 'Estado'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Utilizadores do sistema';

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id`, `nome`, `foto`, `email`, `funcao`, `estado`) VALUES
(1, 'Hélder Martins Carvalho', 'Foto passe.jpg', 'helder@email.com', 'Admin', 'Ativo'),
(10, 'Hélder Carvalho', 'H''elder Martins Carvalho_QE.JPG', 'helder@email.com', 'Moderador', 'Ativo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
