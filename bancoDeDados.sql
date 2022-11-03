-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Ago-2022 às 00:37
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `etec3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dtnasc` date NOT NULL,
  `cpf` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `nome`, `dtnasc`, `cpf`) VALUES
(2, 'cleo@gmail.com', '2e3cf606120c5b885a50b3452a76b92c', 'Cleo Leal', '2005-02-28', '5552525'),
(3, 'email@gmail.com', 'e8d95a51f3af4a3b134bf6bb680a213a', 'Nome do usuario', '2000-01-01', '66652255215'),
(6, 'ccddd@ghmail.com', '2e3cf606120c5b885a50b3452a76b92c', 'faaaaa', '2000-01-01', '7242425'),
(7, 'dfaafsd@gmail.com', '2e3cf606120c5b885a50b3452a76b92c', 'faddfsa', '2000-01-01', '112521582'),
(8, 'cll@gmail.com', '2e3cf606120c5b885a50b3452a76b92c', 'ccllsdlkl', '2000-01-01', '15121551'),
(9, 'cc@gmail.com', '2e3cf606120c5b885a50b3452a76b92c', 'Claudiomiro', '2000-01-01', '152052'),
(10, 'taina@gmail.com', '2e3cf606120c5b885a50b3452a76b92c', 'Taina', '2003-01-16', '15252525');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;