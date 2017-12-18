-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-08-2017 a las 18:27:06
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crgajard`
--
CREATE DATABASE IF NOT EXISTS `crgajard` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crgajard`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE IF NOT EXISTS `carro` (
  `id_carro` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `patente` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `tipo_carro` int(11) NOT NULL,
  PRIMARY KEY (`id_carro`),
  KEY `fk_tipo_carro` (`tipo_carro`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `carro`
--

INSERT INTO `carro` (`id_carro`, `codigo`, `patente`, `estado`, `tipo_carro`) VALUES
(4, 'cb24', 'hjkl23', 1, 4),
(5, 'cur2', 'hl0989', 1, 8),
(6, 'ceg4', 'fv2378', 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emergencia`
--

CREATE TABLE IF NOT EXISTS `emergencia` (
  `id_emergencia` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_emergencia` int(11) NOT NULL,
  `voluntario` int(11) DEFAULT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `nro_emergencia` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_emergencia`),
  KEY `fk_tipo_emergencia` (`tipo_emergencia`),
  KEY `fk_voluntario` (`voluntario`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `emergencia`
--

INSERT INTO `emergencia` (`id_emergencia`, `descripcion`, `direccion`, `tipo_emergencia`, `voluntario`, `latitud`, `longitud`, `nro_emergencia`, `estado`) VALUES
(2, 'Prueba 2', 'Libertad 487-501, Chillan, Chillán, Región del Bío Bío, Chile', 2, 2, -36.606677450214, -72.100850808182, 40, 1),
(8, 'Prueba 4', 'Isabel Riquelme 600-632, Chillan, Chillán, Región del Bío Bío, Chile', 3, 3, -36.608356879474, -72.099863755264, 0, 1),
(9, 'Prueba 5', 'Arturo Prat 623, Chillan, Chillán, Región del Bío Bío, Chile', 2, 2, -36.611086950535, -72.104101645508, 0, 1),
(10, 'Prueba 6', 'Isabel Riquelme 786, Chillan, Chillán, Región del Bío Bío, Chile', 1, 1, -36.610587449488, -72.100646960297, 0, 2),
(11, 'Prueba *', 'Arauco 555, Chillan, Chillán, Región del Bío Bío, Chile', 6, 6, -36.606927213803, -72.102234828033, 0, 1),
(12, 'Ultima Prueba', 'Carrera 677, Chillan, Chillán, Región del Bío Bío, Chile', 5, 6, -36.607547313011, -72.106150853195, 0, 1),
(13, 'Prueba Controlada', 'El Roble 510-566, Chillan, Chillán, Región del Bío Bío, Chile', 2, 2, -36.608520514216, -72.104069459, 0, 2),
(14, 'choque en las calle céntricasde laciudad', 'Constitución 608-654, Chillan, Chillán, Región del Bío Bío, Chile', 2, 2, -36.607590375271, -72.102395760574, 0, 1),
(15, 'probamdo que sea el que aparece primero', 'Bulnes 676, Chillan, Chillán, Región del Bío Bío, Chile', 2, 2, -36.605480296263, -72.100486027756, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_carro`
--

CREATE TABLE IF NOT EXISTS `estado_carro` (
  `id_estado_carro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_estado_carro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `estado_carro`
--

INSERT INTO `estado_carro` (`id_estado_carro`, `nombre`) VALUES
(1, 'disponible'),
(2, 'no disponible'),
(3, 'fuera cuartel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_emergencia`
--

CREATE TABLE IF NOT EXISTS `estado_emergencia` (
  `id_estado_emergencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_estado_emergencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `estado_emergencia`
--

INSERT INTO `estado_emergencia` (`id_estado_emergencia`, `nombre`) VALUES
(1, 'activa'),
(2, 'controlada'),
(3, 'cancelada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grifo`
--

CREATE TABLE IF NOT EXISTS `grifo` (
  `id_grifo` int(11) NOT NULL AUTO_INCREMENT,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `nro_grifo` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_grifo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `grifo`
--

INSERT INTO `grifo` (`id_grifo`, `latitud`, `longitud`, `nro_grifo`, `direccion`) VALUES
(14, -36.606246821436, -72.102331387558, 0, 'Arauco 481, Chillan, Chillán, Región del Bío Bío, Chile'),
(15, -36.606677450214, -72.105571496048, 0, 'Constitución 412, Chillan, Chillán, Región del Bío Bío, Chile'),
(16, -36.607564537918, -72.102932202377, 0, 'Arauco 600, Chillan, Chillán, Región del Bío Bío, Chile'),
(17, -36.606694675315, -72.1011834021, 0, 'Libertad 674, Chillan, Chillán, Región del Bío Bío, Chile'),
(18, -36.604937695188, -72.103479373016, 0, 'Dieciocho de Septiembre 411-491, Chillan, Chillán, Región del Bío Bío, Chile'),
(19, -36.60649658642, -72.106901871719, 0, 'Constitución 290-400, Chillan, Chillán, Región del Bío Bío, Chile'),
(20, -36.607667887278, -72.106193768539, 0, 'Carrera 677, Chillan, Chillán, Región del Bío Bío, Chile'),
(21, -36.608623862296, -72.103554474869, 0, 'Libertad 501, Chillan, Chillán, Región del Bío Bío, Chile'),
(22, -36.609261172391, -72.101258503952, 0, 'Libertad 501, Chillan, Chillán, Región del Bío Bío, Chile'),
(23, -36.605316655071, -72.101612555542, 0, 'Bulnes 616, Chillan, Chillán, Región del Bío Bío, Chile'),
(24, -36.605738676386, -72.09905909256, 0, 'Bulnes 772-828, Chillan, Chillán, Región del Bío Bío, Chile'),
(25, -36.605919541957, -72.104166018524, 0, 'Libertad 458, Chillan, Chillán, Región del Bío Bío, Chile'),
(26, -36.605557810391, -72.105635869064, 0, 'Libertad 398, Chillan, Chillán, Región del Bío Bío, Chile'),
(27, -36.607013338991, -72.104498612442, 0, 'Constitución 492, Chillan, Chillán, Región del Bío Bío, Chile'),
(28, -36.608244918661, -72.104959952393, 0, 'El Roble 425-473, Chillan, Chillán, Región del Bío Bío, Chile'),
(29, -36.60434341344, -72.105153071442, 0, 'Bulnes 398, Chillan, Chillán, Región del Bío Bío, Chile'),
(30, -36.609209498795, -72.10665510849, 0, 'Maipón 418, Chillan, Chillán, Región del Bío Bío, Chile'),
(31, -36.609657335471, -72.105002867737, 0, 'Maipón 502, Chillan, Chillán, Región del Bío Bío, Chile'),
(32, -36.611173071078, -72.103940712967, 0, 'El Roble 623, Chillan, Chillán, Región del Bío Bío, Chile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_perfil` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nombre_perfil`) VALUES
(1, 'administrador'),
(2, 'voluntario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_carro`
--

CREATE TABLE IF NOT EXISTS `tipo_carro` (
  `id_tipo_carro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo_carro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tipo_carro`
--

INSERT INTO `tipo_carro` (`id_tipo_carro`, `nombre`) VALUES
(3, 'hazmat'),
(4, 'bomba'),
(5, 'cisterna'),
(6, 'Tripulación'),
(7, 'Escala giratoria'),
(8, 'Unidad de rescate');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_emergencia`
--

CREATE TABLE IF NOT EXISTS `tipo_emergencia` (
  `id_tipo_emergencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo_emergencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tipo_emergencia`
--

INSERT INTO `tipo_emergencia` (`id_tipo_emergencia`, `nombre`, `clave`) VALUES
(1, 'Estructural Simple', '10-0-1'),
(2, 'Rescate simple', '10-3-1'),
(3, 'Entrega de agua', '10-9-1'),
(4, 'Llamado vehicular ', '10-1'),
(5, 'estructural pública', '10-0-3'),
(6, 'Escape de gas', '10-6'),
(7, 'Otro servicio', '10-9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `login_usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena_usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `perfil_fk` (`perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `login_usuario`, `contrasena_usuario`, `perfil`) VALUES
(1, 'UsuarioPrueba', '18452683-2', '123', 1),
(2, 'VoluntarioPrueb', '12345678-9', '1234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntario`
--

CREATE TABLE IF NOT EXISTS `voluntario` (
  `id_voluntario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_voluntario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `voluntario`
--

INSERT INTO `voluntario` (`id_voluntario`, `nombre`, `correo`, `direccion`, `telefono`) VALUES
(1, 'Cristofer Gajardo', 'crgajard@alumnos.ubiobio.cl', 'camino san Ignacio Pinto', 977019946),
(2, 'Nicolás Cancino', 'ncancino7@gamil.com', 'Las Canoas', 987654356),
(3, 'Miguel Gajardo', 'cristofergajardoc@gmail.com', 'pinto chillan', 977019946),
(6, 'Damian', 'dfabrega@alumnos.ubiobio.cl', 'chillan', 987676545);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carro`
--
ALTER TABLE `carro`
  ADD CONSTRAINT `carro_ibfk_1` FOREIGN KEY (`tipo_carro`) REFERENCES `tipo_carro` (`id_tipo_carro`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `carro_ibfk_2` FOREIGN KEY (`estado`) REFERENCES `estado_carro` (`id_estado_carro`);

--
-- Filtros para la tabla `emergencia`
--
ALTER TABLE `emergencia`
  ADD CONSTRAINT `emergencia_ibfk_1` FOREIGN KEY (`tipo_emergencia`) REFERENCES `tipo_emergencia` (`id_tipo_emergencia`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `emergencia_ibfk_2` FOREIGN KEY (`voluntario`) REFERENCES `voluntario` (`id_voluntario`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `emergencia_ibfk_4` FOREIGN KEY (`estado`) REFERENCES `estado_emergencia` (`id_estado_emergencia`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`perfil`) REFERENCES `perfil` (`id_perfil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
