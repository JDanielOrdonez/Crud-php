-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2022 a las 21:58:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_niño`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id_niños` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` text NOT NULL,
  `vacunado` varchar(2) NOT NULL,
  `estatura` float NOT NULL,
  `peso` float NOT NULL,
  `genero` varchar(10) NOT NULL,
  `tipo_sangre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id_niños`, `nombre`, `apellido`, `edad`, `direccion`, `vacunado`, `estatura`, `peso`, `genero`, `tipo_sangre`) VALUES
(5, 'Jesus Daniel', 'Dominguez Ordoñez', 13, 'Pichucalco Chiapas', 'SI', 1.2, 38, 'Hombre', 'A+'),
(6, 'Damian', 'Guzman Logio', 13, 'Teapa Tabasco', 'SI', 1.5, 40.2, 'Mujer', 'AB+'),
(7, 'Monica', 'Perez Garcia', 15, 'Pichucalco Chiapas', 'SI', 1.5, 50, 'Hombre', 'AB-'),
(8, 'Hector Armando', 'Sanchez Cruz', 17, 'Teapa Tabasco', 'NO', 1.6, 55.3, 'Hombre', 'B+'),
(9, 'Jose Martin', 'Mendez Serino', 15, 'Pichucalco Chiapas', 'SI', 1.7, 60, 'Mujer', 'AB+'),
(10, 'Jose Antonio', 'Lopez Lopez', 16, 'Teapa Tabasco', 'SI', 1.4, 80, 'Hombre', 'A+'),
(11, 'Manuel ', 'Gomez Lopez', 13, 'Tacotalpa Tabasco', 'SI', 1.4, 40, 'Hombre', 'B-');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id_niños`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id_niños` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
