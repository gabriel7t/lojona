-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2020 às 20:10
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_lojona`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `codigo_produto` int(11) NOT NULL,
  `codigo_cliente` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartao`
--

CREATE TABLE `cartao` (
  `codigo_cliente` int(16) NOT NULL,
  `numero_cartao` varchar(32) NOT NULL,
  `nome_cartao` varchar(48) NOT NULL,
  `validade_m` int(4) NOT NULL,
  `validade_a` int(4) NOT NULL,
  `ccv` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cartao`
--

INSERT INTO `cartao` (`codigo_cliente`, `numero_cartao`, `nome_cartao`, `validade_m`, `validade_a`, `ccv`) VALUES
(10, '0101020203030404', 'VICTOR L SOUZA', 12, 20, 777);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codigo` int(12) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `rg` int(8) NOT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(64) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codigo`, `nome`, `cpf`, `rg`, `nascimento`, `email`, `senha`) VALUES
(7, 'Gabriel Abreu', 12345678910, 12345678, '1997-11-05', 'andrade@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, 'Joao Silva', 11111111111, 11111111, '2020-02-04', 'joao@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(10, 'Victor Souza', 09823810923, 34503944, '2012-06-27', 'awsd@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `codigo` int(16) NOT NULL,
  `codigo_cliente` int(12) NOT NULL,
  `totalvalor` double NOT NULL,
  `parcelas` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`codigo`, `codigo_cliente`, `totalvalor`, `parcelas`) VALUES
(10, 9, 3599.89990234375, NULL),
(14, 9, 4499.7999267578125, 3),
(15, 9, 16999.900390625, 0),
(16, 9, 899.9000244140625, 4),
(17, 10, 899.9000244140625, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `codigo_cliente` int(12) NOT NULL,
  `rua` varchar(48) NOT NULL,
  `bairro` varchar(24) NOT NULL,
  `cep` varchar(16) NOT NULL,
  `uf` varchar(24) NOT NULL,
  `cidade` varchar(24) NOT NULL,
  `numero` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`codigo_cliente`, `rua`, `bairro`, `cep`, `uf`, `cidade`, `numero`) VALUES
(7, 'Rua Padre 3', 'cidade nova', '69045000', 'Amazonas', 'Manaus', 21),
(9, 'Rua 1', 'centro', '1111111111111111', 'Manaus', 'Amazonas', 52),
(10, 'Rua andrade', 'cidade nova', '69045745', 'Rua tereza', 'Manaus', 69);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `codigo` int(11) NOT NULL,
  `descricao` varchar(64) NOT NULL,
  `preco` float NOT NULL,
  `estoque` int(5) NOT NULL,
  `imagens` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `descricao`, `preco`, `estoque`, `imagens`) VALUES
(1, 'Apple iPhone 11 128GB Roxo', 4499.9, 35, 'imagens/produtos/iphone/iphone11.png'),
(2, 'Cabo Lightning Original 1m', 89.9, 55, 'imagens/produtos/acessorios/lightning.png'),
(3, 'Apple Airpods', 899.9, 20, 'imagens/produtos/acessorios/airpods.png'),
(4, 'iPad Mini 5 256GB Cinza Espacial', 3599.9, 27, 'imagens/produtos/ipad/ipad-mini.png'),
(5, 'MacBook Pro 15\" (2019) Cinza Espacial', 16999.9, 12, 'imagens/produtos/macbook/macbook-pro15.png'),
(6, 'iPhone 11 Pro 256GB Cinza Espacial', 7299.9, 45, 'imagens/produtos/iphone/iphone11-pro.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD KEY `codigo_cliente` (`codigo_cliente`),
  ADD KEY `codigo_produto` (`codigo_produto`);

--
-- Índices para tabela `cartao`
--
ALTER TABLE `cartao`
  ADD KEY `codigo_cliente` (`codigo_cliente`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo_cliente` (`codigo_cliente`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD KEY `codigo_cliente` (`codigo_cliente`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `codigo` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`codigo_cliente`) REFERENCES `cliente` (`codigo`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`codigo_produto`) REFERENCES `produtos` (`codigo`);

--
-- Limitadores para a tabela `cartao`
--
ALTER TABLE `cartao`
  ADD CONSTRAINT `cartao_ibfk_1` FOREIGN KEY (`codigo_cliente`) REFERENCES `cliente` (`codigo`);

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`codigo_cliente`) REFERENCES `cliente` (`codigo`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`codigo_cliente`) REFERENCES `cliente` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
