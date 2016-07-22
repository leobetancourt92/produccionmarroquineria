-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2016 a las 23:31:16
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pp_marroquineria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `col_id` int(11) NOT NULL AUTO_INCREMENT,
  `col_descripcion` varchar(50) DEFAULT NULL,
  `col_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`col_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`col_id`, `col_descripcion`, `col_estado`) VALUES
(1, 'NEGRO', 1),
(2, 'VERDED', 1),
(3, 'AZUL', 1),
(4, 'AMARILLO', 1),
(5, 'BLANCO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_descripcion` varchar(50) DEFAULT NULL,
  `pro_costo` int(11) DEFAULT NULL,
  `pro_cantidad` varchar(50) DEFAULT NULL,
  `tal_id` int(11) NOT NULL,
  `col_id` int(11) NOT NULL,
  `pro_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pro_id`),
  KEY `fk_producto_talla1_idx` (`tal_id`),
  KEY `fk_producto_color1_idx` (`col_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`pro_id`, `pro_descripcion`, `pro_costo`, `pro_cantidad`, `tal_id`, `col_id`, `pro_estado`) VALUES
(1, 'nikee', 90000, '89', 1, 5, 1),
(2, 'masm', 0, 'mamma', 1, 2, 0),
(3, 'masm', 0, 'mamma', 1, 2, 0),
(4, 'masm', 0, 'mamma', 1, 2, 0),
(21, 'dasd', 0, 'aasda', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

DROP TABLE IF EXISTS `talla`;
CREATE TABLE IF NOT EXISTS `talla` (
  `tal_id` int(11) NOT NULL AUTO_INCREMENT,
  `tal_dimension` varchar(50) DEFAULT NULL,
  `tipo_producto_tip_id` int(11) NOT NULL,
  `tal_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tal_id`),
  KEY `fk_talla_tipo_producto1_idx` (`tipo_producto_tip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`tal_id`, `tal_dimension`, `tipo_producto_tip_id`, `tal_estado`) VALUES
(1, 'GRANDE', 2, 1),
(2, 'PEQUENO', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

DROP TABLE IF EXISTS `tipo_producto`;
CREATE TABLE IF NOT EXISTS `tipo_producto` (
  `tip_id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_descripcion` varchar(50) DEFAULT NULL,
  `tip_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`tip_id`, `tip_descripcion`, `tip_estado`) VALUES
(1, 'ZAPATOS', 1),
(2, 'BOLSOS', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_color1` FOREIGN KEY (`col_id`) REFERENCES `color` (`col_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_talla1` FOREIGN KEY (`tal_id`) REFERENCES `talla` (`tal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `talla`
--
ALTER TABLE `talla`
  ADD CONSTRAINT `fk_talla_tipo_producto1` FOREIGN KEY (`tipo_producto_tip_id`) REFERENCES `tipo_producto` (`tip_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
