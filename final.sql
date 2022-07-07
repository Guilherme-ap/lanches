-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2022 às 03:36
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
-- Banco de dados: `final`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`nome`, `email`, `telefone`) VALUES
('matheus', 'matheus@gmail.com', '115576578947');

-- --------------------------------------------------------

--
-- Estrutura da tabela `func`
--

CREATE TABLE `func` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cpf` varchar(13) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `func`
--

INSERT INTO `func` (`id`, `nome`, `email`, `telefone`, `cpf`, `senha`) VALUES
(1, 'Lorrayne Saraiva', 'lo@gmail.com', '119567894', '33365444444', '202cb962ac59075b964b07152d234b'),
(6, 'giorno', 'camila@gmail.com', '11910576589', '112121212121', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `lanche` varchar(50) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `pagamento` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`nome`, `telefone`, `lanche`, `quantidade`, `endereco`, `obs`, `pagamento`) VALUES
('erasmo', '11914000', 'bolinha', 1, 'av brigadeiro n500', 'sem cebola', 'debito'),
('amanda', '115478787', 'bolinha', 1, 'av antonio 587', 'sem cebola', 'debito'),
('Lorrayne ', '11914000', 'bolinha', 1, 'rua das pintangueiras', 'sem cebola', 'dinheiro');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `func`
--
ALTER TABLE `func`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `func`
--
ALTER TABLE `func`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
