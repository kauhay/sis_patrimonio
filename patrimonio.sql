-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Nov-2021 às 20:16
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `patrimonio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bens`
--

CREATE TABLE `bens` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `filial` varchar(255) NOT NULL,
  `filial_atual` varchar(255) NOT NULL,
  `localizacao` varchar(255) NOT NULL,
  `nota` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `emissao` date NOT NULL,
  `cod_fornecedor` varchar(255) NOT NULL,
  `fornecedor` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `vida_util` int(11) NOT NULL,
  `ativo` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL,
  `caminho_arq` varchar(500) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `danf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bens`
--

INSERT INTO `bens` (`id`, `descricao`, `filial`, `filial_atual`, `localizacao`, `nota`, `serie`, `emissao`, `cod_fornecedor`, `fornecedor`, `cnpj`, `tipo`, `vida_util`, `ativo`, `data_cadastro`, `caminho_arq`, `valor`, `danf`) VALUES
(1, 'notebook i3 4gb 500gb sn4343433', 'filial 1', 'filial 1', 'filial 1', '001', '4343433', '2021-11-02', '1', 'sktecno', '', 'eletronico', 10, '', '2021-11-02', 'arq/75ff17e28d46ba8b37492f6130d7f52e.pdf', '1000', ''),
(46, 'notebook i3 4gb 500gb sn4343433', 'filial 1', 'filial 1', 'ti', '1', '4343433d', '2021-11-02', '9', 'sktecno', '', 'eletronico', 10, '', '2021-11-02', 'arq/f96ca5b85dfc6f211787a692d78b6151.pdf', '1000', ''),
(47, 'notebook i3 4gb 500gb sn4343434', 'filial 2', 'filial 3', 'ti', '9', 'settgdseww4', '2021-11-03', '9', 'sktecno', '', 'eletronico', 10, 'sim', '2021-11-02', '', '1000', ''),
(48, 'notebook i3 4gb 500gb sn4343435', 'filial 2', 'filial 4', 'ti', '17', 'settgdseww5', '2021-11-04', '9', 'sktecno', '', 'eletronico', 10, 'sim', '2021-11-02', '', '1000', ''),
(49, 'notebook i3 4gb 500gb sn4343436', 'filial 3', 'filial 5', 'ti', '25', 'settgdseww6', '2021-11-05', '9', 'sktecno', '', 'eletronico', 10, 'sim', '2021-11-02', '', '1000', ''),
(50, 'notebook i3 4gb 500gb sn4343437', 'filial 4', 'filial 6', 'ti', '33', 'settgdseww7', '2021-11-06', '9', 'sktecno', '', 'eletronico', 10, 'não', '2021-11-02', '', '1000', ''),
(51, 'notebook i3 4gb 500gb sn4343438', 'filial 5', 'filial 7', 'ti', '41', 'settgdseww8', '2021-11-07', '9', 'sktecno', '', 'eletronico', 10, 'sim', '2021-11-02', '', '1000', ''),
(52, 'notebook i3 4gb 500gb sn4343439', 'filial 6', 'filial 8', 'ti', '49', 'settgdseww9', '2021-11-08', '9', 'sktecno', '', 'eletronico', 10, 'sim', '2021-11-02', '', '1000', ''),
(53, 'notebook i3 4gb 500gb sn4343440', 'filial 7', 'filial 3', 'ti', '57', 'settgdseww10', '2021-11-09', '9', 'sktecno', '', 'eletronico', 10, 'sim', '2021-11-02', '', '1000', ''),
(54, 'notebook i3 4gb 500gb sn4343441', 'filial 8', 'filial 3', 'ti', '65', 'settgdseww11', '2021-11-10', '9', 'sktecno', '', 'eletronico', 10, 'sim', '2021-11-02', '', '1000', ''),
(55, 'notebook i3 4gb 500gb sn4343442', 'filial 9', 'filial 3', 'ti', '73', 'settgdseww12', '2021-11-11', '9', 'sktecno', '', 'eletronico', 10, 'sim', '2021-11-02', '', '1000', ''),
(56, 'notebook i3 4gb 500gb sn4343443', 'filial 10', 'filial 3', 'ti', '81', 'settgdseww13', '2021-11-12', '9', 'sktecno', '', 'eletronico', 10, 'sim', '2021-11-02', '', '1000', ''),
(57, '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, '', '2021-11-02', '', '', ''),
(58, '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, '', '2021-11-02', '', '', ''),
(59, '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, '', '2021-11-02', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `nome` varchar(255) NOT NULL,
  `opcao` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `cod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`nome`, `opcao`, `id`, `cod`) VALUES
('filial 1', 'filiais', 1, '1'),
('filial 1', 'localizacao', 2, '1'),
('eletronico', 'tipo', 3, '1'),
('sktecno', 'fornecedor', 4, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(1, 'selton', 'seltonkauhay@gmail.com', '123', 'supadmin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bens`
--
ALTER TABLE `bens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bens`
--
ALTER TABLE `bens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
