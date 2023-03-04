-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Mar-2023 às 02:05
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `linktree`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_perfis`
--

CREATE TABLE `t_perfis` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profissao` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `senha` varchar(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fundo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `t_perfis`
--

INSERT INTO `t_perfis` (`id`, `nome`, `email`, `profissao`, `descricao`, `instagram`, `facebook`, `linkedin`, `youtube`, `senha`, `foto`, `fundo`) VALUES
(1, 'Marcelo Danelon', 'marcelo@gmail.com', 'Programador', 'teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste ', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.youtube.com/', '1234', '1677891886.', 'fundos/fundo2.png'),
(33, 'dsad', 'teste@email.com', 'dsadsa', '', '', '', '', '', '', '1677891227.', ''),
(34, 'TESTE', 'teste@email.com', 'TESTE', '', '', '', '', '', '', '1677891673.', 'fundos/fundo1.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_perfis`
--
ALTER TABLE `t_perfis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_perfis`
--
ALTER TABLE `t_perfis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
