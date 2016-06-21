-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2016 às 05:06
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Alimento'),
(2, 'Brinquedo'),
(3, 'Saude'),
(4, 'Produto'),
(5, 'Acessorio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `localidade`
--

CREATE TABLE IF NOT EXISTS `localidade` (
  `id_loc` int(11) NOT NULL AUTO_INCREMENT,
  `descricaoloc` varchar(255) NOT NULL,
  PRIMARY KEY (`id_loc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `preco` double NOT NULL,
  `descricao` text NOT NULL,
  `usado` tinyint(1) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `usado`, `categoria_id`) VALUES
(47, 'Banho e tosa', 180, 'Pacote para um mÃªs', 0, 3),
(48, 'RaÃ§Ã£o Royal', 235, 'Pacote com 7 Kg', 0, 1),
(49, 'Bolinha', 5, 'DiversÃ£o para seu pet', 0, 2),
(50, 'RemÃ©dio de pulga', 10, 'Combate as malditas pulgas', 0, 3),
(51, 'Shampoo', 13, 'Cabelo brilhante', 0, 4),
(52, 'Condicionador Pet', 15, 'Suave como pluma', 0, 4),
(53, 'Coleirinha', 34, 'Seu passeio mais divertido', 0, 5),
(60, 'Caminha', 235, 'Seu pet dormindo feliz', 0, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

CREATE TABLE IF NOT EXISTS `telefones` (
  `id_tel` int(11) NOT NULL AUTO_INCREMENT,
  `contato` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `descricaotel` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `telefones`
--

INSERT INTO `telefones` (`id_tel`, `contato`, `telefone`, `descricaotel`) VALUES
(6, 'Carlos Henrique ', '(64)8774-7156', 'abacate'),
(8, 'Angelica Cristina', '(64)8774-7156', 'Estadual'),
(12, '', '', ''),
(13, '', '', ''),
(14, 'fgf', 'gfdg', 'gfd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usado`
--

CREATE TABLE IF NOT EXISTS `usado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'paloma@paloma', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'aluno@com.br', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
