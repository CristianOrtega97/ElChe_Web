-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2020 a las 23:54:11
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel_che`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costos`
--

CREATE TABLE `costos` (
  `costos_id` int(11) NOT NULL,
  `costos` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `habitaciones_id` int(11) NOT NULL,
  `habitaciones_tipo` int(11) NOT NULL,
  `habitaciones_numero` int(11) NOT NULL,
  `habitaciones_capacidad` int(11) NOT NULL,
  `habitaciones_costo` int(11) NOT NULL,
  `habitaciones_disponibilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numero`
--

CREATE TABLE `numero` (
  `numero_id` int(11) NOT NULL,
  `numero_num` int(11) NOT NULL,
  `tipo_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `promociones_id` int(11) NOT NULL,
  `promociones_porcentaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `reservacion_id` int(11) NOT NULL,
  `reservacion_nombre` varchar(255) NOT NULL,
  `reservacion_habitacion` int(11) NOT NULL,
  `reservacion_habitacion_tipo` int(11) NOT NULL,
  `reservacion_ingreso` date NOT NULL,
  `reservacion_salida` date NOT NULL,
  `reservacion_subtotal` decimal(10,0) NOT NULL,
  `reservacion_promocion` int(11) NOT NULL,
  `reservacion_total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

CREATE TABLE `tarjetas` (
  `tarjetas_id` int(11) NOT NULL,
  `tarjetas_tipo` int(11) DEFAULT NULL,
  `tarjetas_numero` int(11) NOT NULL,
  `tarjetas_mes` int(11) NOT NULL,
  `tarjetas_year` int(11) NOT NULL,
  `tarjetas_ccv` int(11) NOT NULL,
  `tarjetas_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas_tipo`
--

CREATE TABLE `tarjetas_tipo` (
  `tarjetas_tipo_id` int(11) NOT NULL,
  `tarjetas_tipo_nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_habitaciones`
--

CREATE TABLE `tipo_habitaciones` (
  `tipo_id` int(11) NOT NULL,
  `tipo_nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarios_id` int(11) NOT NULL,
  `usuarios_nombres` varchar(255) NOT NULL,
  `usuarios_apellidos` varchar(255) NOT NULL,
  `usuarios_num_empleado` int(11) NOT NULL,
  `usuarios_telefono` int(11) NOT NULL,
  `usuarios_correo` varchar(255) NOT NULL,
  `usuarios_contra` varchar(255) NOT NULL,
  `usuarios_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `costos`
--
ALTER TABLE `costos`
  ADD PRIMARY KEY (`costos_id`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`habitaciones_id`),
  ADD KEY `habitaciones_tipo` (`habitaciones_tipo`),
  ADD KEY `habitaciones_numero` (`habitaciones_numero`),
  ADD KEY `habitaciones_costo` (`habitaciones_costo`);

--
-- Indices de la tabla `numero`
--
ALTER TABLE `numero`
  ADD PRIMARY KEY (`numero_id`),
  ADD KEY `tipo_num` (`tipo_num`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`promociones_id`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`reservacion_id`),
  ADD KEY `reservacion_habitacion` (`reservacion_habitacion`),
  ADD KEY `reservacion_habitacion_tipo` (`reservacion_habitacion_tipo`),
  ADD KEY `reservacion_promocion` (`reservacion_promocion`);

--
-- Indices de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD PRIMARY KEY (`tarjetas_id`),
  ADD KEY `tarjetas_tipo` (`tarjetas_tipo`),
  ADD KEY `tarjetas_usuario` (`tarjetas_usuario`);

--
-- Indices de la tabla `tarjetas_tipo`
--
ALTER TABLE `tarjetas_tipo`
  ADD PRIMARY KEY (`tarjetas_tipo_id`);

--
-- Indices de la tabla `tipo_habitaciones`
--
ALTER TABLE `tipo_habitaciones`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarios_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `costos`
--
ALTER TABLE `costos`
  MODIFY `costos_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `habitaciones_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `numero`
--
ALTER TABLE `numero`
  MODIFY `numero_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `promociones_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  MODIFY `reservacion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  MODIFY `tarjetas_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarjetas_tipo`
--
ALTER TABLE `tarjetas_tipo`
  MODIFY `tarjetas_tipo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_habitaciones`
--
ALTER TABLE `tipo_habitaciones`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarios_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `habitaciones_ibfk_1` FOREIGN KEY (`habitaciones_tipo`) REFERENCES `tipo_habitaciones` (`tipo_id`),
  ADD CONSTRAINT `habitaciones_ibfk_2` FOREIGN KEY (`habitaciones_numero`) REFERENCES `numero` (`numero_id`),
  ADD CONSTRAINT `habitaciones_ibfk_3` FOREIGN KEY (`habitaciones_costo`) REFERENCES `costos` (`costos_id`);

--
-- Filtros para la tabla `numero`
--
ALTER TABLE `numero`
  ADD CONSTRAINT `numero_ibfk_1` FOREIGN KEY (`tipo_num`) REFERENCES `tipo_habitaciones` (`tipo_id`);

--
-- Filtros para la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD CONSTRAINT `reservacion_ibfk_2` FOREIGN KEY (`reservacion_habitacion`) REFERENCES `numero` (`numero_id`),
  ADD CONSTRAINT `reservacion_ibfk_3` FOREIGN KEY (`reservacion_habitacion_tipo`) REFERENCES `habitaciones` (`habitaciones_id`),
  ADD CONSTRAINT `reservacion_ibfk_4` FOREIGN KEY (`reservacion_promocion`) REFERENCES `promociones` (`promociones_id`);

--
-- Filtros para la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD CONSTRAINT `tarjetas_ibfk_1` FOREIGN KEY (`tarjetas_tipo`) REFERENCES `tarjetas_tipo` (`tarjetas_tipo_id`),
  ADD CONSTRAINT `tarjetas_ibfk_2` FOREIGN KEY (`tarjetas_usuario`) REFERENCES `usuarios` (`usuarios_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
