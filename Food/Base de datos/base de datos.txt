-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.5.10-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para base de datos
CREATE DATABASE IF NOT EXISTS `base de datos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `base de datos`;

-- Volcando estructura para tabla base de datos.agrega
CREATE TABLE IF NOT EXISTS `agrega` (
  `id_agrega` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) DEFAULT NULL,
  `id_platillos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_agrega`),
  KEY `FK_agrega_menu` (`id_menu`),
  KEY `FK_agrega_platillos` (`id_platillos`),
  CONSTRAINT `FK_agrega_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  CONSTRAINT `FK_agrega_platillos` FOREIGN KEY (`id_platillos`) REFERENCES `platillos` (`id_platillos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `contraseña` int(11) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text DEFAULT NULL,
  `telefono` text DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.compra
CREATE TABLE IF NOT EXISTS `compra` (
  `id_cliente` int(11) DEFAULT NULL,
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_establecimiento` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `FK_compra_cliente` (`id_cliente`),
  KEY `FK_compra_establecimiento` (`id_establecimiento`),
  KEY `FK_compra_pedido` (`id_pedido`),
  CONSTRAINT `FK_compra_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `FK_compra_establecimiento` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimiento` (`id_establecimiento`),
  CONSTRAINT `FK_compra_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.contiene
CREATE TABLE IF NOT EXISTS `contiene` (
  `id_contiene` int(11) NOT NULL AUTO_INCREMENT,
  `id_establecimiento` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `id_oferta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contiene`),
  KEY `FK_contiene_establecimiento` (`id_establecimiento`),
  KEY `FK_contiene_menu` (`id_menu`),
  KEY `FK_contiene_oferta` (`id_oferta`),
  CONSTRAINT `FK_contiene_establecimiento` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimiento` (`id_establecimiento`),
  CONSTRAINT `FK_contiene_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  CONSTRAINT `FK_contiene_oferta` FOREIGN KEY (`id_oferta`) REFERENCES `oferta` (`id_ofertas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.cuenta_con
CREATE TABLE IF NOT EXISTS `cuenta_con` (
  `fecha_acc` date DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_cuenta` int(11) NOT NULL AUTO_INCREMENT,
  `id_red` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cuenta`),
  KEY `FK_cuenta_con_cliente` (`id_cliente`),
  KEY `FK_cuenta_con_red_social` (`id_red`),
  CONSTRAINT `FK_cuenta_con_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `FK_cuenta_con_red_social` FOREIGN KEY (`id_red`) REFERENCES `red_social` (`id_red`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.detalle_pedido
CREATE TABLE IF NOT EXISTS `detalle_pedido` (
  `fecha` date DEFAULT NULL,
  `id_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `id_pago` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `id_platillos` int(11) DEFAULT NULL,
  `monto_total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detalle`),
  KEY `FK_detalle_pedido_pago` (`id_pago`),
  KEY `FK_detalle_pedido_pedido` (`id_pedido`),
  KEY `FK_detalle_pedido_platillos` (`id_platillos`),
  CONSTRAINT `FK_detalle_pedido_pago` FOREIGN KEY (`id_pago`) REFERENCES `pago` (`id_pago`),
  CONSTRAINT `FK_detalle_pedido_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  CONSTRAINT `FK_detalle_pedido_platillos` FOREIGN KEY (`id_platillos`) REFERENCES `platillos` (`id_platillos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.establecimiento
CREATE TABLE IF NOT EXISTS `establecimiento` (
  `Contraseña` text DEFAULT NULL,
  `doc_valida` text DEFAULT NULL,
  `horario` text DEFAULT NULL,
  `id_establecimiento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text DEFAULT NULL,
  `telefono` text DEFAULT NULL,
  `usuario` text DEFAULT NULL,
  PRIMARY KEY (`id_establecimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` text DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.oferta
CREATE TABLE IF NOT EXISTS `oferta` (
  `descuento` int(11) DEFAULT NULL,
  `especificación` text DEFAULT NULL,
  `id_ofertas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text DEFAULT NULL,
  `tiempo` time DEFAULT NULL,
  PRIMARY KEY (`id_ofertas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.pago
CREATE TABLE IF NOT EXISTS `pago` (
  `descuento` float DEFAULT NULL,
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.pedido
CREATE TABLE IF NOT EXISTS `pedido` (
  `estado` text DEFAULT NULL,
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `no_mesa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.platillos
CREATE TABLE IF NOT EXISTS `platillos` (
  `caracteristicas` text DEFAULT NULL,
  `id_platillos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text DEFAULT NULL,
  `precio` float DEFAULT NULL,
  PRIMARY KEY (`id_platillos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.red_social
CREATE TABLE IF NOT EXISTS `red_social` (
  `contraseña` text DEFAULT NULL,
  `correo` text DEFAULT NULL,
  `id_red` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_red`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.tipo_menu
CREATE TABLE IF NOT EXISTS `tipo_menu` (
  `bebidas` text DEFAULT NULL,
  `especialidad` text DEFAULT NULL,
  `snacks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla base de datos.ubicacion
CREATE TABLE IF NOT EXISTS `ubicacion` (
  `calle` text DEFAULT NULL,
  `ciudad` text DEFAULT NULL,
  `colonia` text DEFAULT NULL,
  `coordenadas` float DEFAULT NULL,
  `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_ubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
