-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Mar-2022 às 13:50
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
-- Banco de dados: `evarini`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data_do_pedido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`nome`, `telefone`, `endereco`, `senha`, `data_do_pedido`) VALUES
('joao ricardo de souza seramim', '42999984243', 'rua do danieus , centro danieus , numero danieus', '23d4208fd50c4633eb70127857f778ea', '2022-02-25 10:26:05'),
('32112', '212312', '1212', 'a3183256749175a171a972ab8073bca4', '2022-02-25 10:31:09'),
('teste', '40028922', '2112', '202cb962ac59075b964b07152d234b70', '2022-02-25 10:31:44'),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2022-02-25 10:37:40'),
('123', '123', '123', '202cb962ac59075b964b07152d234b70', '2022-03-08 09:44:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginadmin`
--

CREATE TABLE `loginadmin` (
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `loginadmin`
--

INSERT INTO `loginadmin` (`usuario`, `senha`) VALUES
('123', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(50) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `adicional_1` varchar(50) NOT NULL,
  `adicional_2` varchar(50) NOT NULL,
  `adicional_3` varchar(50) NOT NULL,
  `adicional_4` varchar(50) NOT NULL,
  `adicional_5` varchar(50) NOT NULL,
  `adicional_6` varchar(50) NOT NULL,
  `adicional_7` varchar(50) NOT NULL,
  `adicional_8` varchar(50) NOT NULL,
  `adicional_9` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `imagem`, `nome`, `preco`, `adicional_1`, `adicional_2`, `adicional_3`, `adicional_4`, `adicional_5`, `adicional_6`, `adicional_7`, `adicional_8`, `adicional_9`) VALUES
(1, '12312', '123123', '123123', '2', '', '', '', '', '', '', '', ''),
(2, 'imagem', 'nome', 'preco', '', '', '', '', '', '', '', '', ''),
(3, '1', '123123231231', '2', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'imagem1', 'nome1', 'preco1', '1', '', '', '', '', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
