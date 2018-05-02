-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 02-Maio-2018 às 10:32
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
-- Estrutura da tabela `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `nome` varchar(50) NOT NULL COMMENT 'Nome do estado'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Estado do utilizador';

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id`, `nome`) VALUES
(1, 'Ativo'),
(2, 'Suspenso'),
(3, 'Inativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE IF NOT EXISTS `funcao` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `nome` varchar(50) NOT NULL COMMENT 'Nome da função'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Função do Utilizador';

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`id`, `nome`) VALUES
(1, 'Admin'),
(2, 'Moderador'),
(3, 'Editor'),
(4, 'Crítico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE IF NOT EXISTS `utilizadores` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `nome` varchar(535) NOT NULL COMMENT 'Nome',
  `foto` varchar(535) NOT NULL COMMENT 'Caminho da Foto',
  `email` varchar(535) NOT NULL COMMENT 'Email',
  `idFuncao` int(11) NOT NULL COMMENT 'ID da função',
  `idEstado` int(11) NOT NULL COMMENT 'ID do Estado'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Utilizadores do sistema';

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id`, `nome`, `foto`, `email`, `idFuncao`, `idEstado`) VALUES
(1, 'Hélder', 'Foto passe.jpg', 'helder@email.com', 1, 1),
(2, 'Hélder Carvalho', 'H''elder Martins Carvalho_QE.JPG', 'helder@email.com', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcao`
--
ALTER TABLE `funcao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFuncao` (`idFuncao`),
  ADD KEY `idEstado` (`idEstado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `funcao`
--
ALTER TABLE `funcao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD CONSTRAINT `utilizadores_ibfk_1` FOREIGN KEY (`idFuncao`) REFERENCES `funcao` (`id`),
  ADD CONSTRAINT `utilizadores_ibfk_2` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
