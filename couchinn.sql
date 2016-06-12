-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-05-2016 a las 15:31:41
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `couchinn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `couch`
--

CREATE TABLE IF NOT EXISTS `couch` (
  `titulo` varchar(80) NOT NULL,
  `estado` enum('Publicado','Despublicado') NOT NULL DEFAULT 'Publicado',
  `capacidad` int(10) unsigned NOT NULL,
  `idCouch` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) DEFAULT NULL,
  `direccion` varchar(125) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  `idFoto` int(10) unsigned DEFAULT NULL,
  `idTipo` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idCouch`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `couch`
--

INSERT INTO `couch` (`titulo`, `estado`, `capacidad`, `idCouch`, `descripcion`, `direccion`, `idUsuario`, `idFoto`, `idTipo`) VALUES
('Casa de Los Simpsons', 'Publicado', 4, 4, 'La casa cuenta con dos habitaciones, ambas en planta alta, una cocina y un baño.', 'La Plata', 1, 1, 3),
('Casa Dada Vuelta', 'Publicado', 2, 5, '"Patas para arriba" es como todos la llaman. Definitaivamente, resulta un gran atractivo pasar unos días acá.', 'Córdoba', 2, 2, 2),
('Casa con forma de pera', 'Publicado', 1, 6, 'Rodeada de increíbles paisajes, con forma de pera y el mejor lugar para conocer las costumbres de esta increíble provinicia', 'Neuquén', 3, 3, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `idFoto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreFoto` varchar(50) NOT NULL,
  `idCouch` int(11) NOT NULL,
  PRIMARY KEY (`idFoto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`idFoto`, `nombreFoto`, `idCouch`) VALUES
(1, 'casa.jpg', 4),
(2, 'hall.png', 4),
(3, 'pieza.jpg', 4),
(4, 'cocina.jpg', 4),
(5, 'austria.jpg', 5),
(6, 'pera.jpg', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocouch`
--

CREATE TABLE IF NOT EXISTS `tipocouch` (
  `idTipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  PRIMARY KEY (`idTipo`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `tipocouch`
--

INSERT INTO `tipocouch` (`idTipo`, `nombre`, `estado`) VALUES
(1, 'Casa', 'Activo'),
(2, 'Choza', 'Activo'),
(3, 'Departamento', 'Activo'),
(4, 'Avión', 'Activo'),
(5, 'Isla', 'Activo'),
(6, 'Otro', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipoUsuario` enum('Free','Premium','Admin') NOT NULL DEFAULT 'Free',
  `mail` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `tipoUsuario`, `mail`, `edad`, `telefono`, `contraseña`, `foto`, `nombre`) VALUES
(1, 'Premium', 'juancito@nnwdf.com', 20, 2430493, 'contraseña', NULL, 'Juan Pedro'),
(2, 'Free', 'maria@jofrd.com', 53, 24234, 'sffsd', NULL, 'María Marta'),
(3, 'Premium', 'Sebastian@opfr-com', 34, 654364, 'sdfghsdefdwd', NULL, 'Sebastián gomez'),
(4, 'Free', 'jrjrd@jgf.com', 40, 54232, 'sdfsdfsdf', 'sfsdf', 'Basura'),
(5, 'Free', 'mail', 20, 33434, 'vlave', NULL, 'juan'),
(6, 'Free', 'banana@hotmail.com', 20, 20202, 'pass', NULL, 'Martín');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
