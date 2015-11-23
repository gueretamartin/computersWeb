-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2015 a las 23:29:07
-- Versión del servidor: 5.0.24-community-nt
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carlosvii`
--
CREATE DATABASE IF NOT EXISTS `carlosvii` DEFAULT CHARACTER SET ucs2 COLLATE ucs2_spanish2_ci;
USE `carlosvii`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `referencia` varchar(20) collate ucs2_spanish2_ci default NULL,
  `texto` varchar(255) collate ucs2_spanish2_ci NOT NULL,
  `precio` varchar(10) collate ucs2_spanish2_ci default NULL,
  `idSeccion` int(10) unsigned default NULL,
  `idImagen` int(11) default NULL,
  `idImagenGrande` int(10) unsigned default NULL,
  `descripcion` text collate ucs2_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(10) NOT NULL auto_increment,
  `usuario` varchar(20) collate ucs2_spanish2_ci default NULL,
  `nombre` varchar(20) collate ucs2_spanish2_ci default NULL,
  `apellido` varchar(20) collate ucs2_spanish2_ci default NULL,
  `fechaNacimiento` varchar(10) collate ucs2_spanish2_ci default NULL,
  `email` varchar(50) collate ucs2_spanish2_ci default NULL,
  `contrasena` varchar(50) collate ucs2_spanish2_ci default NULL,
  PRIMARY KEY  (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `nombre`, `apellido`, `fechaNacimiento`, `email`, `contrasena`) VALUES
(1, 'alvfacu', 'Facundo', 'Alvarez', 'asdasdasd', 'alvfacu@gmail.com', '242ac92bff7cc0bf1f52de2f254b27a8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
