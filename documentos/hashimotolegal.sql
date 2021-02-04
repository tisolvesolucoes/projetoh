-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Fev-2021 às 19:03
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hashimotolegal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_banners`
--

DROP TABLE IF EXISTS `tbl_banners`;
CREATE TABLE IF NOT EXISTS `tbl_banners` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `link` varchar(250) DEFAULT '',
  PRIMARY KEY (`id_banner`),
  KEY `id_banner` (`id_banner`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_banners`
--

INSERT INTO `tbl_banners` (`id_banner`, `nome`, `link`) VALUES
(1, '5bdfa9234ea2939ce620a502ec218524.jpg', NULL),
(2, '5878da5ca2d3f8bc70eaa75d94826300.jpg', NULL),
(3, '7cc62a50e1d67fb32f4321acb82c6931.png', NULL),
(4, 'd106f9732d62e67c601425adb213a7d4.png', NULL),
(5, 'f742b31f3dd6d3e6b9eea7231584b23d.jpg', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_solucoes`
--

DROP TABLE IF EXISTS `tbl_solucoes`;
CREATE TABLE IF NOT EXISTS `tbl_solucoes` (
  `idSolucoes` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(70) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `tipoSolucao` int(1) DEFAULT NULL,
  `ativo` int(1) DEFAULT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`idSolucoes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tabela_preco`
--

DROP TABLE IF EXISTS `tbl_tabela_preco`;
CREATE TABLE IF NOT EXISTS `tbl_tabela_preco` (
  `idTabelaPreco` int(11) NOT NULL AUTO_INCREMENT,
  `servico` text,
  `valor` decimal(10,0) DEFAULT NULL,
  `taxa` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `prazo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTabelaPreco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(225) NOT NULL,
  `nivel` int(1) DEFAULT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`idUsuario`, `nomeUsuario`, `email`, `senha`, `nivel`, `dataCadastro`, `ativo`) VALUES
(1, 'hashimoto', 'email@gmail.com.br', '$2y$10$1HqKnUbCfOfpnkg9Ovi17.DHlyZTleVnbIetA0xVUEAljAKpJMemK', 1, '2021-01-30 01:23:44', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
