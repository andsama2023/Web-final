-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2023 a las 04:02:25
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `psicologia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `comentario` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `comentario`) VALUES
(1, 'andres ', 'necesito una cita medica de gran urgencia ya que asjfgsajkfhkjsafhjksagfjaksfgjksagfsjakfgjkasfghaskfgshakgfsajkfgsajfgsajkfgsajkfgsajkfgsajkfgsjakgfsjakgfjskagfsjakgfjsakhfjsakfgjskagfsjakgfsajkgfsajkfgsajkfgsajkgfsajkfgjagfjaskgfjksagfjksagfjksagfjksagfjksagfjksagfjksagf'),
(2, 'andres ', 'nose'),
(3, 'diana', 'si'),
(4, 'PRUEBACONVOCATORIA', 'ae'),
(5, 'PRUEBACONVOCATORIA', 'ae'),
(6, 'PRUEBACONVOCATORIA', 'ae'),
(7, 'PRUEBACONVOCATORIA', 'ae'),
(8, 'PRUEBACONVOCATORIA', 'ae'),
(9, 'nose', 'mira'),
(10, 'jjjj', 'a'),
(11, 'a', '4r'),
(12, 'otra ', 'aver'),
(13, 'a', 'r'),
(14, 'aaa', 'aa'),
(15, 'jessi', 'que interesante '),
(16, 'Rosa', 'Ta bacano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `documento` int(11) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `documento`, `direccion`, `contrasena`) VALUES
(5, 'andres', 28757547, 'cra 89 11', '1'),
(18, 'sdhdsh', 32642624, 'sdggdsg', '1'),
(19, 'gdsshd', 2147483647, 'dsgdsg', '1'),
(20, 'sdgds', 353535256, 'fsf', '5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento` (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
