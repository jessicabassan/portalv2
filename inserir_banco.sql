-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2016 at 08:38 PM
-- Server version: 5.5.43-0+deb8u1
-- PHP Version: 5.6.19-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PHPONG`
--

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`id`, `email`, `nome`, `assunto`, `mensagem`) VALUES
(1, 'idoso1@bol.com.br', 'idoso1', 'reclamacao', 'Estou insatifeito com os servicos prestados'),
(2, 'idoso2@bol.com.br', 'idoso2', 'puxacao de saco', 'Estou extremamente satifeito com os servicos prestados'),
(3, 'idoso3@bol.com.br', 'idoso3', 'puxacao de saco', 'Estou extremamente satifeito com os servicos prestados'),
(4, 'idoso4@bol.com.br', 'idoso4', 'puxacao de saco', 'Estou extremamente satifeito com os servicos prestados');

-- --------------------------------------------------------

--
-- Table structure for table `conteudo`
--

DROP TABLE IF EXISTS `conteudo`;
CREATE TABLE `conteudo` (
  `id` tinyint(4) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conteudo`
--

INSERT INTO `conteudo` (`id`, `titulo`, `texto`, `data`, `usuario`) VALUES
(1, 'home', 'Esta ong da melhor idade visa acompanhar programadores com experiencia', '2016-05-13 23:28:03', '1'),
(2, 'quemsomos', 'Esta ong da pior idade visa acompanhar programadores com experiencia', '2016-05-13 22:42:42', '1');

-- --------------------------------------------------------

--
-- Table structure for table `idoso`
--

DROP TABLE IF EXISTS `idoso`;
CREATE TABLE `idoso` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `idade` int(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `idoso`
--

INSERT INTO `idoso` (`id`, `nome`, `idade`, `endereco`, `email`) VALUES
(1, 'Anonimo', 131, 'rua teste, numero teste', 'anonimo@melhoridade.com.br');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `tipo_acesso` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `titulo`, `link`, `tipo_acesso`) VALUES
(1, 'cadastrar', '/cadastrar', 'a'),
(2, 'consulta', '/consulta', 'i'),
(3, 'contato', '/contato', 'u'),
(4, 'login', '/login', 'u'),
(5, 'quemsomos', '/quemsomos', 'u'),
(6, 'home', '/home', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` char(32) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `tipo_acesso` char(1) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `nome`, `tipo_acesso`, `data_cadastro`) VALUES
(1, 'admin@melhoridade.com.br', '1234', 'testando', 'a', '2016-05-13 23:15:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e_email` (`email`);

--
-- Indexes for table `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idoso`
--
ALTER TABLE `idoso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_email` (`email`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uu_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `idoso`
--
ALTER TABLE `idoso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
