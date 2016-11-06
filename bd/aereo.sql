-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 04-Nov-2016 às 21:32
-- Versão do servidor: 5.7.12
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aereo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aeroportos`
--

CREATE TABLE `aeroportos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cod_cidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aeroportos`
--

INSERT INTO `aeroportos` (`id`, `nome`, `cod_cidade`) VALUES
(1, 'Aeroporto Pinto Martins', 1),
(2, 'Aeroporto Santos Dumont', 2),
(3, 'Aeroporto Congonhas', 3),
(4, 'Aeroporto Luis Eduardo M.', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartoes_credito`
--

CREATE TABLE `cartoes_credito` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cartoes_credito`
--

INSERT INTO `cartoes_credito` (`id`, `nome`) VALUES
(1, 'Visa'),
(2, 'MasterCard');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cod_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `cod_estado`) VALUES
(1, 'Fortaleza', 1),
(2, 'Rio de Janeiro', 2),
(3, 'São Paulo', 3),
(4, 'Salvador', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cpf` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(18) DEFAULT NULL,
  `rg` char(11) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `cod_cartao_credito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `email`, `telefone`, `rg`, `senha`, `cod_cartao_credito`) VALUES
(1, 'Tales Azevedo', '00011122232', 'tales@yahoo.com', '8599999959', '19989890021', '123456', 1),
(2, 'Maria Eliana', '55555555512', 'meliana@gmail.com', '2187878000', '2000200200', '123456', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `companhias`
--

CREATE TABLE `companhias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `companhias`
--

INSERT INTO `companhias` (`id`, `nome`) VALUES
(1, 'AZUL'),
(2, 'LATAM'),
(3, 'AVIANCA'),
(4, 'GOL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `uf` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `uf`) VALUES
(1, 'CE'),
(2, 'RJ'),
(3, 'SP'),
(4, 'BA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(18) DEFAULT NULL,
  `cpf` char(11) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `salario` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `email`, `telefone`, `cpf`, `senha`, `salario`) VALUES
(1, 'Wesley Queiroz', 'wesley@yahoo.com', NULL, '00000000011', '123456', '1700'),
(2, 'Silvia Boneira', 'silvia@yahoo.com', NULL, '11111111100', '123456', '1700');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `quantidade_pessoas` int(11) NOT NULL,
  `preco_total` decimal(10,0) NOT NULL,
  `cod_voo` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `voos`
--

CREATE TABLE `voos` (
  `id` int(11) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `cod_aeroporto_origem` int(11) NOT NULL,
  `cod_aeroporto_destino` int(11) NOT NULL,
  `hora_saida` time NOT NULL,
  `hora_chegada` time NOT NULL,
  `duracao_voo` time NOT NULL,
  `data_voo` date NOT NULL,
  `vagas_disponiveis` int(11) NOT NULL,
  `cod_companhia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `voos`
--

INSERT INTO `voos` (`id`, `preco`, `cod_aeroporto_origem`, `cod_aeroporto_destino`, `hora_saida`, `hora_chegada`, `duracao_voo`, `data_voo`, `vagas_disponiveis`, `cod_companhia`) VALUES
(1, '1100', 1, 2, '13:30:00', '19:25:00', '05:55:00', '2016-11-21', 160, 1),
(2, '1150', 1, 2, '17:00:00', '22:00:00', '06:00:00', '2016-11-23', 180, 2),
(3, '850', 3, 4, '14:00:00', '17:00:00', '03:00:00', '2016-11-23', 140, 3),
(4, '1223', 1, 2, '09:00:00', '15:20:00', '06:20:00', '2016-11-21', 152, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dados_voo`
-- (See below for the actual view)
--
CREATE TABLE `v_dados_voo` (
`id` int(11)
,`aeroporto_origem` varchar(30)
,`aeroporto_destino` varchar(30)
,`data_voo` date
,`hora_saida` time
,`hora_chegada` time
,`duracao_voo` time
,`vagas_disponiveis` int(11)
,`preco` decimal(10,0)
,`companhia` varchar(50)
,`cidade_origem` varchar(30)
,`cidade_destino` varchar(30)
,`estado_origem` char(2)
,`estado_destino` char(2)
);

-- --------------------------------------------------------

--
-- Structure for view `v_dados_voo`
--
DROP TABLE IF EXISTS `v_dados_voo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dados_voo`  AS  select `voos`.`id` AS `id`,`a`.`nome` AS `aeroporto_origem`,`b`.`nome` AS `aeroporto_destino`,`voos`.`data_voo` AS `data_voo`,`voos`.`hora_saida` AS `hora_saida`,`voos`.`hora_chegada` AS `hora_chegada`,`voos`.`duracao_voo` AS `duracao_voo`,`voos`.`vagas_disponiveis` AS `vagas_disponiveis`,`voos`.`preco` AS `preco`,`companhias`.`nome` AS `companhia`,`cid_origem`.`nome` AS `cidade_origem`,`cid_destino`.`nome` AS `cidade_destino`,`estado_origem`.`uf` AS `estado_origem`,`estado_destino`.`uf` AS `estado_destino` from (((((((`aeroportos` `a` join `voos` on((`a`.`id` = `voos`.`cod_aeroporto_origem`))) join `aeroportos` `b` on((`b`.`id` = `voos`.`cod_aeroporto_destino`))) join `companhias` on((`companhias`.`id` = `voos`.`cod_companhia`))) join `cidades` `cid_origem` on((`cid_origem`.`id` = `a`.`cod_cidade`))) join `cidades` `cid_destino` on((`cid_destino`.`id` = `b`.`cod_cidade`))) join `estados` `estado_origem` on((`estado_origem`.`id` = `cid_origem`.`cod_estado`))) join `estados` `estado_destino` on((`estado_destino`.`id` = `cid_destino`.`cod_estado`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aeroportos`
--
ALTER TABLE `aeroportos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cidade` (`cod_cidade`);

--
-- Indexes for table `cartoes_credito`
--
ALTER TABLE `cartoes_credito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estado` (`cod_estado`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_cartao_credito` (`cod_cartao_credito`);

--
-- Indexes for table `companhias`
--
ALTER TABLE `companhias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cliente` (`cod_cliente`),
  ADD KEY `fk_voo` (`cod_voo`);

--
-- Indexes for table `voos`
--
ALTER TABLE `voos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aeroporto_origem` (`cod_aeroporto_origem`),
  ADD KEY `fk_aeroporto_destino` (`cod_aeroporto_destino`),
  ADD KEY `fk_companhia` (`cod_companhia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aeroportos`
--
ALTER TABLE `aeroportos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cartoes_credito`
--
ALTER TABLE `cartoes_credito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `companhias`
--
ALTER TABLE `companhias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `voos`
--
ALTER TABLE `voos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aeroportos`
--
ALTER TABLE `aeroportos`
  ADD CONSTRAINT `fk_cidade` FOREIGN KEY (`cod_cidade`) REFERENCES `cidades` (`id`);

--
-- Limitadores para a tabela `cidades`
--
ALTER TABLE `cidades`
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`cod_estado`) REFERENCES `estados` (`id`);

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_cartao_credito` FOREIGN KEY (`cod_cartao_credito`) REFERENCES `cartoes_credito` (`id`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`cod_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `fk_voo` FOREIGN KEY (`cod_voo`) REFERENCES `voos` (`id`);

--
-- Limitadores para a tabela `voos`
--
ALTER TABLE `voos`
  ADD CONSTRAINT `fk_aeroporto_destino` FOREIGN KEY (`cod_aeroporto_destino`) REFERENCES `aeroportos` (`id`),
  ADD CONSTRAINT `fk_aeroporto_origem` FOREIGN KEY (`cod_aeroporto_origem`) REFERENCES `aeroportos` (`id`),
  ADD CONSTRAINT `fk_companhia` FOREIGN KEY (`cod_companhia`) REFERENCES `companhias` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
