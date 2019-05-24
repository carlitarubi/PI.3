-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2019 a las 20:22:38
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

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
-- Estructura de tabla para la tabla `audit_per`
--

CREATE TABLE `audit_per` (
  `id` int(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlf` int(255) NOT NULL,
  `fecha_mod` datetime NOT NULL,
  `usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_plan` int(255) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `reply` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(255) NOT NULL,
  `user` int(255) NOT NULL,
  `plan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id` int(255) NOT NULL,
  `compra` int(255) NOT NULL,
  `plan` int(255) NOT NULL,
  `cant` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id` int(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estilo` varchar(255) NOT NULL,
  `detalles` varchar(255) NOT NULL,
  `localización` varchar(255) NOT NULL,
  `precio` int(255) NOT NULL,
  `fecha_in` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id`, `tipo`, `nombre`, `estilo`, `detalles`, `localización`, `precio`, `fecha_in`, `fecha_fin`) VALUES
(1, 'concierto', 'ArenalSound', 'Rock', 'un concierto para gente roja y toda la suciedad de españa', 'Barcelona', 15, '2019-06-12', '2019-06-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `roll` varchar(255) DEFAULT 'Nigger',
  `puntos` int(255) DEFAULT '0',
  `tickets` varchar(255) DEFAULT '0',
  `telf` int(255) NOT NULL,
  `localizacion` varchar(255) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_ticket` varchar(255) NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `pass`, `correo`, `roll`, `puntos`, `tickets`, `telf`, `localizacion`, `fecha_creacion`, `tipo_ticket`, `estado`) VALUES
(13, 'Richi', '', '', 'eltravas@gmail.com', NULL, NULL, NULL, 685938475, 'en tu cora bby', '2019-05-23 21:40:22', '', ''),
(14, 'Nax el wason bb', '', '', 'tusmuelas@gmail.com', 'Nigger', 0, '0', 827346834, 'en tu cora bby', '2019-05-23 21:44:17', '', ''),
(15, 'Manolo', '', '', 'kujasdn@gmail.com', 'Nigger', 0, '0', 92873493, 'Africa, uganda', '2019-05-23 22:35:40', '', ''),
(16, 'Compare', '', '', 'difujnfd@gmail.com', 'Nigger', 0, '0', 92837289, 'losmuertos', '2019-05-23 22:37:05', '', ''),
(17, 'Admin', 'holadonjose', 'admin', 'admin@admin.com', 'Admin', 0, '3', 0, '', '2019-05-24 18:44:43', '', '');

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `usuario_before_delete` BEFORE DELETE ON `usuario` FOR EACH ROW BEGIN

INSERT INTO audit_per(audit_per.id,audit_per.nombre,audit_per.email,audit_per.tlf,audit_per.fecha_mod,audit_per.usuario)
VALUES (OLD.id, OLD.nombre, OLD.correo, OLD.telf, NOW(), CURRENT_USER());

END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `audit_per`
--
ALTER TABLE `audit_per`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_comentario_usuario` (`id_user`),
  ADD KEY `FK_comentario_plan` (`id_plan`),
  ADD KEY `FK_comentario_comentario` (`reply`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_compra_usuario` (`user`),
  ADD KEY `FK_compra_plan` (`plan`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_linea_compra` (`compra`),
  ADD KEY `FK_linea_plan` (`plan`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `FK_comentario_comentario` FOREIGN KEY (`reply`) REFERENCES `comentario` (`id`),
  ADD CONSTRAINT `FK_comentario_plan` FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id`),
  ADD CONSTRAINT `FK_comentario_usuario` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id`);

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
  ADD CONSTRAINT `FK_linea_compra` FOREIGN KEY (`compra`) REFERENCES `compra` (`id`),
  ADD CONSTRAINT `FK_linea_plan` FOREIGN KEY (`plan`) REFERENCES `plan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
