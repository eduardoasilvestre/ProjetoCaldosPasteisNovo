-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Jun 26, 2012 as 01:47 PM
-- Versão do Servidor: 5.5.10
-- Versão do PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `caldos_pasteis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `CODIGO_CLIENTE` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NOME_CLIENTE` varchar(50) NOT NULL,
  `CPF_CLIENTE` varchar(50) NOT NULL,
  `PROFISSAO_CLIENTE` varchar(50) NOT NULL,
  `RELACAO_IFTM` varchar(200) DEFAULT NULL,
  `LOGIN` varchar(45) NOT NULL,
  `SENHA` varchar(45) NOT NULL,
  `ULTIMO_ACESSO` date DEFAULT NULL,
  PRIMARY KEY (`CODIGO_CLIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `cliente`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `CODIGO_PRODUTO` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NOME_PRODUTO` varchar(50) NOT NULL,
  `CODIGO_TIPO_PRODUTO` int(10) unsigned NOT NULL,
  `DESCRICAO_PRODUTO` varchar(200) NOT NULL,
  `VALOR_PRODUTO` double NOT NULL,
  PRIMARY KEY (`CODIGO_PRODUTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `produto`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `satisfacao`
--

CREATE TABLE IF NOT EXISTS `satisfacao` (
  `CODIGO_SATISFACAO` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NOME_CLIENTE_SATISFACAO` varchar(50) NOT NULL,
  `COMENTARIOS_SATISFACAO` varchar(300) NOT NULL,
  `TIPO_SATISFACAO` int(2) unsigned NOT NULL,
  `TIPO_DESCRICAO_SATISFACAO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CODIGO_SATISFACAO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `satisfacao`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `ativo` int(1) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `data_modificacao` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `ativo`, `data_criacao`, `data_modificacao`) VALUES
(24, 'eduardo', '123456', 1, '2012-06-18 19:04:35', '2012-06-18 19:04:35'),
(25, 'augusto1', 'silvestre', 0, '2012-06-18 20:00:20', '2012-06-18 20:00:20');
