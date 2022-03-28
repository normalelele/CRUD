-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2022 a las 18:36:31
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create database `sena_crud`;
use `sena_crud`;
--
-- Base de datos: `sena_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `apre_id` int(10) NOT NULL,
  `apre_ficha` int(10) NOT NULL,
  `apre_tipoid` char(3) NOT NULL,
  `apre_numid` char(20) NOT NULL,
  `apre_nombres` char(60) NOT NULL,
  `apre_apellidos` char(60) NOT NULL,
  `apre_direccion` char(80) NOT NULL,
  `apre_telefono` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`apre_id`, `apre_ficha`, `apre_tipoid`, `apre_numid`, `apre_nombres`, `apre_apellidos`, `apre_direccion`, `apre_telefono`) VALUES
(3, 2235094, 'c.c', '1003383931', 'jaime', 'nuñez', 'calle 32', '3024212313'),
(4, 2235085, 't.i', '100435345', 'brayan', 'sanjuan', 'calle 42', '3113483533');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `ficha_numero` int(10) NOT NULL,
  `ficha_progra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`ficha_numero`, `ficha_progra`) VALUES
(2235085, 1),
(2235095, 1),
(2235094, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `progra_id` int(10) NOT NULL,
  `progra_tipo` int(5) NOT NULL,
  `progra_nombre` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`progra_id`, `progra_tipo`, `progra_nombre`) VALUES
(1, 2, 'ADSI'),
(2, 1, 'COCINA'),
(3, 3, 'AMBIENTAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposprogramas`
--

CREATE TABLE `tiposprogramas` (
  `tiposp_id` int(10) NOT NULL,
  `tiposp_tipo` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiposprogramas`
--

INSERT INTO `tiposprogramas` (`tiposp_id`, `tiposp_tipo`) VALUES
(1, 'virtual'),
(2, 'presencial'),
(3, 'mixto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usua_id` int(10) NOT NULL,
  `usua_nomuser` char(50) NOT NULL,
  `usua_contra` char(20) NOT NULL,
  `usua_tipo` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usua_id`, `usua_nomuser`, `usua_contra`, `usua_tipo`) VALUES
(1, 'jaime', '12345', 'ADMINISTRADOR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`apre_id`),
  ADD KEY `fk_ficha_numero` (`apre_ficha`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`ficha_numero`),
  ADD KEY `fk_progra_nombre` (`ficha_progra`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`progra_id`),
  ADD KEY `fk_tiposp_tipo` (`progra_tipo`);

--
-- Indices de la tabla `tiposprogramas`
--
ALTER TABLE `tiposprogramas`
  ADD PRIMARY KEY (`tiposp_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usua_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  MODIFY `apre_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `progra_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tiposprogramas`
--
ALTER TABLE `tiposprogramas`
  MODIFY `tiposp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usua_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD CONSTRAINT `fk_ficha_numero` FOREIGN KEY (`apre_ficha`) REFERENCES `fichas` (`ficha_numero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `fk_progra_nombre` FOREIGN KEY (`ficha_progra`) REFERENCES `programa` (`progra_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `fk_tiposp_tipo` FOREIGN KEY (`progra_tipo`) REFERENCES `tiposprogramas` (`tiposp_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
