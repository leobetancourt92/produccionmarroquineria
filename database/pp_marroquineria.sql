-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2016 a las 20:04:11
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
-- Estructura de tabla para la tabla `bodega`
--

DROP TABLE IF EXISTS `bodega`;
CREATE TABLE IF NOT EXISTS `bodega` (
  `bod_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `bod_total` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bod_id`),
  KEY `fk_bodega_producto1_idx` (`pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`col_id`, `col_descripcion`, `col_estado`) VALUES
(1, 'lal', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden_de_compra`
--

DROP TABLE IF EXISTS `detalle_orden_de_compra`;
CREATE TABLE IF NOT EXISTS `detalle_orden_de_compra` (
  `pro_id` int(11) NOT NULL,
  `det_com_id` int(11) NOT NULL,
  `det_com_cantidad` int(11) DEFAULT NULL,
  `det_com_etapa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pro_id`,`det_com_id`),
  KEY `fk_producto_has_orden_de_compra_orden_de_compra1_idx` (`det_com_id`),
  KEY `fk_producto_has_orden_de_compra_producto1_idx` (`pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_nit` varchar(45) DEFAULT NULL,
  `emp_razon_social` varchar(60) DEFAULT NULL,
  `emp_telefono` varchar(45) DEFAULT NULL,
  `emp_direccion` varchar(60) DEFAULT NULL,
  `emp_correo` varchar(60) DEFAULT NULL,
  `emp_contacto` varchar(45) DEFAULT NULL,
  `emp_estado` tinyint(4) NOT NULL DEFAULT '1',
  `tip_cli_id` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `fk_empresa_tipo_cliente1_idx` (`tip_cli_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_de_compra`
--

DROP TABLE IF EXISTS `orden_de_compra`;
CREATE TABLE IF NOT EXISTS `orden_de_compra` (
  `ord_com_id` int(11) NOT NULL AUTO_INCREMENT,
  `ord_com_fecha` varchar(45) DEFAULT NULL,
  `ord_com_total` varchar(45) DEFAULT NULL,
  `ord_com_estado` tinyint(4) NOT NULL DEFAULT '1',
  `tip_cli_id` int(11) NOT NULL,
  PRIMARY KEY (`ord_com_id`),
  KEY `fk_orden_de_compra_tipo_cliente_idx` (`tip_cli_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_telefono` varchar(15) DEFAULT NULL,
  `per_direccion` varchar(60) DEFAULT NULL,
  `per_correo` varchar(60) DEFAULT NULL,
  `per_fecha_nacimiento` date DEFAULT NULL,
  `per_estado` varchar(45) DEFAULT NULL,
  `tip_cli_id` int(11) NOT NULL,
  PRIMARY KEY (`per_id`),
  KEY `fk_persona_tipo_cliente1_idx` (`tip_cli_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_descripcion` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pro_costo` int(11) DEFAULT NULL,
  `pro_cantidad` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `tal_id` int(11) NOT NULL,
  `col_id` int(11) NOT NULL,
  `pro_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pro_id`),
  KEY `fk_producto_talla1_idx` (`tal_id`),
  KEY `fk_producto_color1_idx` (`col_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`pro_id`, `pro_descripcion`, `pro_costo`, `pro_cantidad`, `tal_id`, `col_id`, `pro_estado`) VALUES
(1, '0101', 10010, '120010102', 1, 1, 0),
(2, '0101', 10010, '120010102', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

DROP TABLE IF EXISTS `talla`;
CREATE TABLE IF NOT EXISTS `talla` (
  `tal_id` int(11) NOT NULL AUTO_INCREMENT,
  `tal_dimension` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `tip_pro_id` int(11) NOT NULL,
  `tal_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tal_id`),
  KEY `fk_talla_tipo_producto1_idx` (`tip_pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`tal_id`, `tal_dimension`, `tip_pro_id`, `tal_estado`) VALUES
(1, 'ksk', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

DROP TABLE IF EXISTS `tipo_cliente`;
CREATE TABLE IF NOT EXISTS `tipo_cliente` (
  `tip_cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_identificacion` int(11) DEFAULT NULL,
  `tip_nombres` varchar(45) DEFAULT NULL,
  `tip_apellidos` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tip_cli_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

DROP TABLE IF EXISTS `tipo_producto`;
CREATE TABLE IF NOT EXISTS `tipo_producto` (
  `tip_pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_descripcion` varchar(50) DEFAULT NULL,
  `tip_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tip_pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`tip_pro_id`, `tip_descripcion`, `tip_estado`) VALUES
(1, 'aa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'luisfernando', 'luispalacios2014@hotmail.com', '$2y$10$Ny.QZGnqtU0Vr30kERpr7eEBc1DmEucfMe6tsqXcR02Z5NjLZyT8u', NULL, '2016-07-31 22:58:27', '2016-07-31 22:58:27'),
(2, 'prueba', 'prueba@hotmail.com', '$2y$10$cCHhS1aNPAoNJIzNxYbzW.02pyFtb32BTBP2uNYHJELai5sXNKiXe', NULL, '2016-07-31 23:32:35', '2016-07-31 23:32:35'),
(3, 'prueba2', 'prueba2@hotmail.com', '$2y$10$jt0uymSzcwlliS/4/vAwDuSFX8vAs98c0Jm.WifohfVxLjZqz0uki', NULL, '2016-08-01 00:11:59', '2016-08-01 00:11:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
