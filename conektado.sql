-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-05-2015 a las 19:54:03
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `conektado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Musica`
--

CREATE TABLE IF NOT EXISTS `Musica` (
`ID` int(11) NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `artista` text COLLATE utf8_unicode_ci NOT NULL,
  `posicion` int(1) NOT NULL COMMENT '0 = Principal , 1 = otros ',
  `cancion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Musica`
--

INSERT INTO `Musica` (`ID`, `url`, `imagen`, `artista`, `posicion`, `cancion`) VALUES
(1, 'audio/musicaNueva/evanoff.mp3', 'images/musicaNueva/artistas/portada_evanoff.jpg', 'Evanoff', 0, 'Moria de ganas'),
(2, 'audio/musicaNueva/ElGalanDeLaPlebada.mp3', 'images/musicaNueva/artistas/alfredo.jpg', 'Alfredo', 1, 'El galan de la plebada'),
(3, 'audio/musicaNueva/incomparable.mp3', 'images/musicaNueva/artistas/incomparable.jpg', 'EyBy Valencia', 1, 'El incomparable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Programas`
--

CREATE TABLE IF NOT EXISTS `Programas` (
`ID` int(10) NOT NULL,
  `Programa` text COLLATE utf8_unicode_ci NOT NULL,
  `Horario` text COLLATE utf8_unicode_ci NOT NULL,
  `img1` text COLLATE utf8_unicode_ci NOT NULL,
  `img2` text COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `Generos` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Programas`
--

INSERT INTO `Programas` (`ID`, `Programa`, `Horario`, `img1`, `img2`, `Descripcion`, `Generos`) VALUES
(1, 'Buenos días con el compita', 'Lunes a Viernes de 9 a 11 hrs.', 'images/prog1.png', 'images/rocola.jpg', 'Programa mañanero que te contagia de buena vibra con noticias sorprendentes, el clima, complacencias musicales y mucha información.', 'Pop, electro pop'),
(2, 'Zona Grupera', 'Martes y Jueves 18 hrs.', 'images/prog3.png', 'images/rocola.jpg', 'Musica grupera ', 'Grupero ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Musica`
--
ALTER TABLE `Musica`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Programas`
--
ALTER TABLE `Programas`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Musica`
--
ALTER TABLE `Musica`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `Programas`
--
ALTER TABLE `Programas`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
