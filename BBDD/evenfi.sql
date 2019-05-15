-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2019 a las 13:03:53
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evenfi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_user` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `comentario` varchar(600) NOT NULL,
  `reply` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `plan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id` int(11) NOT NULL,
  `compra` int(11) NOT NULL,
  `plan` int(11) NOT NULL,
  `cant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estilo` varchar(50) NOT NULL,
  `detalles` varchar(300) NOT NULL,
  `comentarios` varchar(600) NOT NULL,
  `n_compra` int(50) NOT NULL,
  `localizacion` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha_in` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `puntos` int(11) DEFAULT NULL,
  `tickets` varchar(50) DEFAULT NULL,
  `telf` int(11) NOT NULL,
  `localizacion` varchar(50) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `tipo_ticket` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_plan` (`id_plan`),
  ADD KEY `reply` (`reply`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `plan` (`plan`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compra` (`compra`),
  ADD KEY `plan` (`plan`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `FK4` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `FK5` FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id`),
  ADD CONSTRAINT `FK6` FOREIGN KEY (`reply`) REFERENCES `comentario` (`id`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `FK_compra_plan` FOREIGN KEY (`plan`) REFERENCES `plan` (`id`),
  ADD CONSTRAINT `FK_compra_usuario` FOREIGN KEY (`user`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `linea`
--
ALTER TABLE `linea`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`compra`) REFERENCES `compra` (`id`),
  ADD CONSTRAINT `FK3` FOREIGN KEY (`plan`) REFERENCES `plan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
