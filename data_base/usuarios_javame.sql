-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-12-2012 a las 17:00:21
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `personas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_javame`
--

CREATE TABLE IF NOT EXISTS `usuarios_javame` (
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuarios_javame`
--

INSERT INTO `usuarios_javame` (`usuario`, `password`, `rol`) VALUES
('andres', '1234', 'Administrador'),
('carlos', 'loquendo', 'Administrador'),
('pepe', 'qweasd', 'Administrador'),
('cristiano', 'ronaldo', 'Estudiante');
