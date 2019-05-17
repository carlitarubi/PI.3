-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para evenfi
CREATE DATABASE IF NOT EXISTS `evenfi` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `evenfi`;

-- Volcando estructura para tabla evenfi.audit_per
CREATE TABLE IF NOT EXISTS `audit_per` (
  `id` int(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlf` int(255) NOT NULL,
  `fecha_mod` datetime NOT NULL,
  `usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evenfi.audit_per: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `audit_per` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_per` ENABLE KEYS */;

-- Volcando estructura para tabla evenfi.comentario
CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `id_plan` int(255) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `reply` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_comentario_usuario` (`id_user`),
  KEY `FK_comentario_plan` (`id_plan`),
  KEY `FK_comentario_comentario` (`reply`),
  CONSTRAINT `FK_comentario_comentario` FOREIGN KEY (`reply`) REFERENCES `comentario` (`id`),
  CONSTRAINT `FK_comentario_plan` FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id`),
  CONSTRAINT `FK_comentario_usuario` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evenfi.comentario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;

-- Volcando estructura para tabla evenfi.compra
CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` int(255) NOT NULL,
  `plan` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_compra_usuario` (`user`),
  KEY `FK_compra_plan` (`plan`),
  CONSTRAINT `FK_compra_plan` FOREIGN KEY (`plan`) REFERENCES `plan` (`id`),
  CONSTRAINT `FK_compra_usuario` FOREIGN KEY (`user`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evenfi.compra: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;

-- Volcando estructura para tabla evenfi.linea
CREATE TABLE IF NOT EXISTS `linea` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `compra` int(255) NOT NULL,
  `plan` int(255) NOT NULL,
  `cant` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_linea_compra` (`compra`),
  KEY `FK_linea_plan` (`plan`),
  CONSTRAINT `FK_linea_compra` FOREIGN KEY (`compra`) REFERENCES `compra` (`id`),
  CONSTRAINT `FK_linea_plan` FOREIGN KEY (`plan`) REFERENCES `plan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evenfi.linea: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `linea` DISABLE KEYS */;
/*!40000 ALTER TABLE `linea` ENABLE KEYS */;

-- Volcando estructura para tabla evenfi.plan
CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estilo` varchar(255) NOT NULL,
  `detalles` varchar(255) NOT NULL,
  `n_compra` int(255) NOT NULL,
  `localización` varchar(255) NOT NULL,
  `precio` int(255) NOT NULL,
  `fecha_in` date NOT NULL,
  `fecha_fin` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evenfi.plan: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `plan` DISABLE KEYS */;
/*!40000 ALTER TABLE `plan` ENABLE KEYS */;

-- Volcando estructura para tabla evenfi.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `puntos` int(255) DEFAULT NULL,
  `tickets` varchar(255) DEFAULT NULL,
  `telf` int(255) NOT NULL,
  `localización` varchar(255) NOT NULL,
  `fecha_creación` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_ticket` varchar(255) NOT NULL,
  `estado` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evenfi.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para disparador evenfi.usuario_before_delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `usuario_before_delete` BEFORE DELETE ON `usuario` FOR EACH ROW BEGIN

INSERT INTO audit_per(audit_per.id,audit_per.nombre,audit_per.email,audit_per.tlf,audit_per.fecha_mod,audit_per.usuario)
VALUES (OLD.id, OLD.nombre, OLD.correo, OLD.telf, NOW(), CURRENT_USER());

END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
