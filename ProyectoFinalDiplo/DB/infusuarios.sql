-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2020 a las 20:15:50
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datosusuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infusuarios`
--

CREATE TABLE `infusuarios` (
  `id` int(2) NOT NULL,
  `Nombres` varchar(20) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `Telefono` int(10) DEFAULT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `Rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `infusuarios`
--

INSERT INTO `infusuarios` (`id`, `Nombres`, `Apellidos`, `Telefono`, `Correo`, `Contraseña`, `Rol`) VALUES
(1, 'Giovanni', 'Baquero', 2147483647, 'giovanni.baquero@uniagustiniana.edu.co', 'giovanni1234', 'Administrador'),
(2, 'Karl-Josef', 'Löffler', 752431968, 'luis.vasquez@uniagustiniana.edu.co', 'luis1234', 'Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `infusuarios`
--
ALTER TABLE `infusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `infusuarios`
--
ALTER TABLE `infusuarios`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
