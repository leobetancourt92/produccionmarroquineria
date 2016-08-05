-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2016 a las 05:44:01
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

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

CREATE TABLE `bodega` (
  `bod_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `bod_total` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `col_id` int(11) NOT NULL,
  `col_descripcion` varchar(50) DEFAULT NULL,
  `col_estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`col_id`, `col_descripcion`, `col_estado`) VALUES
(1, 'lal', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden_de_compra`
--

CREATE TABLE `detalle_orden_de_compra` (
  `pro_id` int(11) NOT NULL,
  `det_com_id` int(11) NOT NULL,
  `det_com_cantidad` int(11) DEFAULT NULL,
  `det_com_etapa` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `emp_id` int(11) NOT NULL,
  `emp_nit` varchar(45) DEFAULT NULL,
  `emp_razon_social` varchar(60) DEFAULT NULL,
  `emp_telefono` varchar(45) DEFAULT NULL,
  `emp_direccion` varchar(60) DEFAULT NULL,
  `emp_correo` varchar(60) DEFAULT NULL,
  `emp_contacto` varchar(45) DEFAULT NULL,
  `emp_estado` tinyint(4) NOT NULL DEFAULT '1',
  `tip_cli_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
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

CREATE TABLE `orden_de_compra` (
  `ord_com_id` int(11) NOT NULL,
  `ord_com_fecha` varchar(45) DEFAULT NULL,
  `ord_com_total` varchar(45) DEFAULT NULL,
  `ord_com_estado` tinyint(4) NOT NULL DEFAULT '1',
  `tip_cli_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `per_id` int(11) NOT NULL,
  `per_telefono` varchar(15) DEFAULT NULL,
  `per_direccion` varchar(60) DEFAULT NULL,
  `per_correo` varchar(60) DEFAULT NULL,
  `per_fecha_nacimiento` date DEFAULT NULL,
  `per_estado` varchar(45) DEFAULT NULL,
  `tip_cli_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `pro_id` int(11) NOT NULL,
  `pro_descripcion` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pro_costo` int(11) DEFAULT NULL,
  `pro_cantidad` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `tal_id` int(11) NOT NULL,
  `col_id` int(11) NOT NULL,
  `pro_estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `talla` (
  `tal_id` int(11) NOT NULL,
  `tal_dimension` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `tip_pro_id` int(11) NOT NULL,
  `tal_estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`tal_id`, `tal_dimension`, `tip_pro_id`, `tal_estado`) VALUES
(1, 'ksk', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `tip_cli_id` int(11) NOT NULL,
  `tip_identificacion` int(11) DEFAULT NULL,
  `tip_nombres` varchar(45) DEFAULT NULL,
  `tip_apellidos` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `tip_pro_id` int(11) NOT NULL,
  `tip_descripcion` varchar(50) DEFAULT NULL,
  `tip_estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`tip_pro_id`, `tip_descripcion`, `tip_estado`) VALUES
(1, 'aa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DEMO', 'SENA', 'demo@sena.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bodega`
--
ALTER TABLE `bodega`
  ADD PRIMARY KEY (`bod_id`),
  ADD KEY `fk_bodega_producto1_idx` (`pro_id`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`col_id`);

--
-- Indices de la tabla `detalle_orden_de_compra`
--
ALTER TABLE `detalle_orden_de_compra`
  ADD PRIMARY KEY (`pro_id`,`det_com_id`),
  ADD KEY `fk_producto_has_orden_de_compra_orden_de_compra1_idx` (`det_com_id`),
  ADD KEY `fk_producto_has_orden_de_compra_producto1_idx` (`pro_id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `fk_empresa_tipo_cliente1_idx` (`tip_cli_id`);

--
-- Indices de la tabla `orden_de_compra`
--
ALTER TABLE `orden_de_compra`
  ADD PRIMARY KEY (`ord_com_id`),
  ADD KEY `fk_orden_de_compra_tipo_cliente_idx` (`tip_cli_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`per_id`),
  ADD KEY `fk_persona_tipo_cliente1_idx` (`tip_cli_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `fk_producto_talla1_idx` (`tal_id`),
  ADD KEY `fk_producto_color1_idx` (`col_id`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`tal_id`),
  ADD KEY `fk_talla_tipo_producto1_idx` (`tip_pro_id`);

--
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`tip_cli_id`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`tip_pro_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bodega`
--
ALTER TABLE `bodega`
  MODIFY `bod_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `col_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `orden_de_compra`
--
ALTER TABLE `orden_de_compra`
  MODIFY `ord_com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `tal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  MODIFY `tip_cli_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `tip_pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
