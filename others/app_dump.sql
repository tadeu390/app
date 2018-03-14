-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Mar-2018 às 23:08
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `id` int(11) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modulo_id` int(11) DEFAULT NULL,
  `criar` tinyint(1) DEFAULT NULL,
  `visualizar` tinyint(1) DEFAULT NULL,
  `atualizar` tinyint(1) DEFAULT NULL,
  `apagar` tinyint(1) DEFAULT NULL,
  `grupo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`id`, `data_registro`, `modulo_id`, `criar`, `visualizar`, `atualizar`, `apagar`, `grupo_id`) VALUES
(1, '2018-03-10 17:20:14', 3, 1, 1, 1, 1, 1),
(2, '2018-03-14 21:47:10', 1, 1, 1, 1, 1, 1),
(3, '2018-03-14 21:47:10', 2, 1, 1, 1, 1, 1),
(4, '2018-03-14 21:47:10', 4, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes_geral`
--

CREATE TABLE `configuracoes_geral` (
  `id` int(11) NOT NULL,
  `itens_por_pagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `configuracoes_geral`
--

INSERT INTO `configuracoes_geral` (`id`, `itens_por_pagina`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ativo` tinyint(1) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`id`, `data_registro`, `ativo`, `nome`) VALUES
(1, '2018-03-10 17:20:13', 1, 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ativo` tinyint(1) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `data_registro`, `ativo`, `nome`, `ordem`) VALUES
(1, '2018-03-10 17:20:13', 1, 'Gestão', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulo`
--

CREATE TABLE `modulo` (
  `id` int(11) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ativo` tinyint(1) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `url` varchar(20) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  `icone` varchar(50) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modulo`
--

INSERT INTO `modulo` (`id`, `data_registro`, `ativo`, `nome`, `descricao`, `url`, `ordem`, `icone`, `menu_id`) VALUES
(1, '2018-03-10 17:20:14', 1, 'Módulos', 'Lista de módulos', 'Modulo', 1, 'fa fa-list-alt', 1),
(2, '2018-03-10 17:20:14', 1, 'Menus', 'Lista de menus', 'Menu', 1, 'fa fa-navicon', 1),
(3, '2018-03-10 17:20:14', 1, 'Grupos', 'Lista de grupos', 'Grupo', 1, 'fa fa-th-large', 1),
(4, '2018-03-10 17:20:14', 1, 'Usuários', 'Lista de usuários', 'Usuario', 1, 'glyphicon glyphicon-user', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ultimo_acesso` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `grupo_id` int(11) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `nome` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `data_registro`, `ultimo_acesso`, `grupo_id`, `ativo`, `nome`, `email`, `senha`) VALUES
(1, '2018-03-10 17:20:13', '2018-03-14 21:40:07', 1, 1, 'Admin', 'admin@dominio.com.br', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modulo_acesso` (`modulo_id`),
  ADD KEY `fk_grupo_acesso` (`grupo_id`);

--
-- Indexes for table `configuracoes_geral`
--
ALTER TABLE `configuracoes_geral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_menu_modulo` (`menu_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_grupo_usuario` (`grupo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acesso`
--
ALTER TABLE `acesso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `configuracoes_geral`
--
ALTER TABLE `configuracoes_geral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acesso`
--
ALTER TABLE `acesso`
  ADD CONSTRAINT `fk_grupo_acesso` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`),
  ADD CONSTRAINT `fk_modulo_acesso` FOREIGN KEY (`modulo_id`) REFERENCES `modulo` (`id`);

--
-- Limitadores para a tabela `modulo`
--
ALTER TABLE `modulo`
  ADD CONSTRAINT `fk_menu_modulo` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_grupo_usuario` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
