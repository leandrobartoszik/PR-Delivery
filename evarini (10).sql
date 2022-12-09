-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Mar-2022 às 14:44
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

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
('123', '123', '123', '202cb962ac59075b964b07152d234b70', '2022-03-08 09:44:43'),
('Pericles Dambroski Fortes Bittencourt', '4299915177', 'rua sete de setembro , centro , apt 103', '202cb962ac59075b964b07152d234b70', '');

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
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `sessao` varchar(50) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `adicionais` varchar(50) NOT NULL,
  `horapedido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`sessao`, `cliente`, `telefone`, `endereco`, `produto`, `preco`, `adicionais`, `horapedido`) VALUES
('2m4hd64mlpe1gb8fj6ijq8ubm7', 'Pericles Dambroski Fortes Bittencourt', '4299915177', 'rua sete de setembro , centro , apt 103', 'hambúrguer caseiro', '6.99', 'cheddar,queijo', '2022-03-16 09:23:54'),
('2m4hd64mlpe1gb8fj6ijq8ubm7', '', '', '', 'Coca Cola 600 ML', '4.99', '', '2022-03-16 09:24:04'),
('2m4hd64mlpe1gb8fj6ijq8ubm7', '', '', '', 'Coca Cola 600 ML', '4.99', '', '2022-03-16 09:24:18'),
('e8olsr6d9c76csk3tc4030a6g0', '123', '123', '123', 'hambúrguer caseiro', '6.99', '', '2022-03-17 10:20:51'),
('e8olsr6d9c76csk3tc4030a6g0', '', '', '', 'Coca Cola 600 ML', '4.99', '', '2022-03-17 10:20:55'),
('jffhde6eidoqdp7jf82c1mt5pd', 'Pericles Dambroski Fortes Bittencourt', '4299915177', 'rua sete de setembro , centro , apt 103', 'hambúrguer caseiro', '6.99', '', '2022-03-17 10:32:24'),
('jffhde6eidoqdp7jf82c1mt5pd', 'Pericles Dambroski Fortes Bittencourt', '4299915177', 'rua sete de setembro , centro , apt 103', 'hambúrguer caseiro', '6.99', '', '2022-03-17 10:36:22'),
('jffhde6eidoqdp7jf82c1mt5pd', '', '', '', 'hambúrguer caseiro', '6.99', '', '2022-03-17 10:39:17'),
('jffhde6eidoqdp7jf82c1mt5pd', '', '', '', 'Coca Cola 600 ML', '4.99', '', '2022-03-17 10:39:19'),
('jffhde6eidoqdp7jf82c1mt5pd', '', '', '', 'hambúrguer caseiro', '6.99', '', '2022-03-17 10:39:20'),
('q83qdn8p3q1c1sgqn5s7gtun7t', 'Pericles Dambroski Fortes Bittencourt', '4299915177', 'rua sete de setembro , centro , apt 103', 'hambúrguer caseiro', '6.99', 'cheddar,queijo', '2022-03-17 10:39:44'),
('q83qdn8p3q1c1sgqn5s7gtun7t', '', '', '', 'Coca Cola 600 ML', '4.99', '', '2022-03-17 10:39:46'),
('aqjjg5j8cqn4f4k93f4s363qd7', 'Pericles Dambroski Fortes Bittencourt', '4299915177', 'rua sete de setembro , centro , apt 103', 'hambúrguer caseiro', '6.99', '', '2022-03-17 10:42:41'),
('aqjjg5j8cqn4f4k93f4s363qd7', '', '', '', 'Coca Cola 600 ML', '4.99', '', '2022-03-17 10:42:43'),
('aqjjg5j8cqn4f4k93f4s363qd7', '', '', '', 'hambúrguer caseiro', '6.99', 'cheddar,queijo', '2022-03-17 10:42:46'),
('htpqnduv1ulb1jftkc7com8iq6', '123', '123', '123', 'Coca Cola 600 ML', '4.99', '', '2022-03-17 10:43:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidosfeitos`
--

CREATE TABLE `pedidosfeitos` (
  `sessao` varchar(50) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `adicionais` varchar(50) NOT NULL,
  `horapedido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'https://img.elo7.com.br/product/zoom/262F374/adesi', 'hambúrguer caseiro', '6.99', 'cheddar', 'cebola', '', '', '', '', '', '', ''),
(2, 'https://www.botecogois.com.br/wp-content/uploads/2', 'Coca Cola 600 ML', '4.99', '', '', '', '', '', '', '', '', '');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
