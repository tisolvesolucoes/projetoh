-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Jan-2021 às 04:20
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
-- Banco de dados: `hashimoto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(225) NOT NULL,
  `nivel` int(11) DEFAULT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nomeUsuario`, `email`, `senha`, `nivel`, `dataCadastro`, `ativo`) VALUES
(1, 'hashimoto', 'email@gmail.com.br', '$2y$10$1HqKnUbCfOfpnkg9Ovi17.DHlyZTleVnbIetA0xVUEAljAKpJMemK', 0, '2021-01-16 18:44:09', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE IF NOT EXISTS `solucoes` (
  `idsolucoes` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `tipoSolucao` int(1) DEFAULT NULL,
  `ativo` int(1) DEFAULT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`idsolucoes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tbl_banners` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) DEFAULT NULL,
  `link` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_banner`),
  KEY `id_banner` (`id_banner`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(225) NOT NULL,
  `nivel` int(11) DEFAULT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tabelasprecos` (
  `idtabelasPrecos` int(11) NOT NULL AUTO_INCREMENT,
  `servico` text,
  `valor` decimal(10,0) DEFAULT NULL,
  `taxa` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `prazo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtabelasPrecos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;