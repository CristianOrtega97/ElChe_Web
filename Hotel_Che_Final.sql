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
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `reservacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `reservacion_nombre` varchar(255) NOT NULL,
  `reservacion_numero` int(11) NOT NULL,
  `reservacion_habitacion` int(11) NOT NULL,
  `reservacion_habitacion_tipo` int(11) NOT NULL,
  `reservacion_ingreso` date NOT NULL,
  `reservacion_salida` date NOT NULL,
  `reservacion_subtotal` float NOT NULL,
  `reservacion_promocion` int(11) NOT NULL,
  `reservacion_total` float NOT NULL,
  PRIMARY KEY (`reservacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
