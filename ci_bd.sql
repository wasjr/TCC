-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 03:00 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `dm_tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `dm_tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cd_tipo_usuario` int(11) NOT NULL,
  `ds_tipo_usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dm_tipo_usuario`
--

INSERT INTO `dm_tipo_usuario` (`id_tipo_usuario`, `cd_tipo_usuario`, `ds_tipo_usuario`) VALUES
(1, 1, 'admin'),
(2, 2, 'aluno'),
(3, 3, 'professor'),
(4, 4, 'secretaria'),
(5, 5, 'gestor');

-- --------------------------------------------------------

--
-- Table structure for table `dm_usuario`
--

CREATE TABLE IF NOT EXISTS `dm_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(10) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `dm_usuario`
--

INSERT INTO `dm_usuario` (`id_usuario`, `login`, `senha`, `id_tipo_usuario`) VALUES
(1, 'wasjr', '1234', 0),
(2, 'lala', '5555', 0),
(3, 'isa', '2222', 0),
(4, 'kjasd', '77777', 0),
(5, 'kjasd', '77777', 0),
(6, 'dgasd', '8956', 0),
(7, 'ggadas', '877979', 0),
(8, 'ggasfas', '77754', 0),
(9, 'jjgd', 'adas', 0),
(10, 'hhsdsf', 'asd8', 0),
(11, 'h4qwe', '202020', 0),
(12, 'lwoa', '9996', 0),
(13, 'bbsasd', 'asdas', 0),
(14, 'v2', '222222', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
