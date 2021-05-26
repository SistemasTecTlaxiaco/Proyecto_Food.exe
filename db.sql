-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2021 a las 20:17:15
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agrega`
--

CREATE TABLE `agrega` (
  `id_agrega` int(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `id_platillos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `contraseña` text DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `telefono` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`contraseña`, `id_cliente`, `nombre`, `telefono`) VALUES
('Dulce0409', 1, 'Dulce', '9532402213');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_cliente` int(11) DEFAULT NULL,
  `id_compra` int(11) NOT NULL,
  `id_establecimiento` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE `contiene` (
  `id_contiene` int(11) NOT NULL,
  `id_establecimiento` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `id_oferta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_con`
--

CREATE TABLE `cuenta_con` (
  `fecha_acc` date DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_cuenta` int(11) NOT NULL,
  `id_red` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `fecha` date DEFAULT NULL,
  `id_detalle` int(11) NOT NULL,
  `id_pago` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `id_platillos` int(11) DEFAULT NULL,
  `monto_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE `establecimiento` (
  `Contraseña` text DEFAULT NULL,
  `doc_valida` text DEFAULT NULL,
  `horario` text DEFAULT NULL,
  `id_establecimiento` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `telefono` text DEFAULT NULL,
  `usuario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `establecimiento`
--

INSERT INTO `establecimiento` (`Contraseña`, `doc_valida`, `horario`, `id_establecimiento`, `nombre`, `telefono`, `usuario`) VALUES
('Tacos123', NULL, NULL, 1, 'Tacos Doña Lola', '9532402213', 'Tacos Doña Lola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `seccion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `descuento` int(11) DEFAULT NULL,
  `especificación` text DEFAULT NULL,
  `id_ofertas` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `tiempo` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `descuento` float DEFAULT NULL,
  `id_pago` int(11) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `estado` text DEFAULT NULL,
  `id_pedido` int(11) NOT NULL,
  `no_mesa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `caracteristicas` text DEFAULT NULL,
  `id_platillos` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `red_social`
--

CREATE TABLE `red_social` (
  `contraseña` text DEFAULT NULL,
  `correo` text DEFAULT NULL,
  `id_red` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_menu`
--

CREATE TABLE `tipo_menu` (
  `bebidas` text DEFAULT NULL,
  `especialidad` text DEFAULT NULL,
  `snacks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `calle` text DEFAULT NULL,
  `ciudad` text DEFAULT NULL,
  `colonia` text DEFAULT NULL,
  `coordenadas` float DEFAULT NULL,
  `id_ubicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agrega`
--
ALTER TABLE `agrega`
  ADD PRIMARY KEY (`id_agrega`),
  ADD KEY `FK_agrega_menu` (`id_menu`),
  ADD KEY `FK_agrega_platillos` (`id_platillos`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `FK_compra_cliente` (`id_cliente`),
  ADD KEY `FK_compra_establecimiento` (`id_establecimiento`),
  ADD KEY `FK_compra_pedido` (`id_pedido`);

--
-- Indices de la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD PRIMARY KEY (`id_contiene`),
  ADD KEY `FK_contiene_establecimiento` (`id_establecimiento`),
  ADD KEY `FK_contiene_menu` (`id_menu`),
  ADD KEY `FK_contiene_oferta` (`id_oferta`);

--
-- Indices de la tabla `cuenta_con`
--
ALTER TABLE `cuenta_con`
  ADD PRIMARY KEY (`id_cuenta`),
  ADD KEY `FK_cuenta_con_cliente` (`id_cliente`),
  ADD KEY `FK_cuenta_con_red_social` (`id_red`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `FK_detalle_pedido_pago` (`id_pago`),
  ADD KEY `FK_detalle_pedido_pedido` (`id_pedido`),
  ADD KEY `FK_detalle_pedido_platillos` (`id_platillos`);

--
-- Indices de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  ADD PRIMARY KEY (`id_establecimiento`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id_ofertas`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`id_platillos`);

--
-- Indices de la tabla `red_social`
--
ALTER TABLE `red_social`
  ADD PRIMARY KEY (`id_red`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agrega`
--
ALTER TABLE `agrega`
  MODIFY `id_agrega` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contiene`
--
ALTER TABLE `contiene`
  MODIFY `id_contiene` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuenta_con`
--
ALTER TABLE `cuenta_con`
  MODIFY `id_cuenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  MODIFY `id_establecimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id_ofertas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
  MODIFY `id_platillos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `red_social`
--
ALTER TABLE `red_social`
  MODIFY `id_red` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agrega`
--
ALTER TABLE `agrega`
  ADD CONSTRAINT `FK_agrega_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `FK_agrega_platillos` FOREIGN KEY (`id_platillos`) REFERENCES `platillos` (`id_platillos`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `FK_compra_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `FK_compra_establecimiento` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimiento` (`id_establecimiento`),
  ADD CONSTRAINT `FK_compra_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`);

--
-- Filtros para la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD CONSTRAINT `FK_contiene_establecimiento` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimiento` (`id_establecimiento`),
  ADD CONSTRAINT `FK_contiene_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `FK_contiene_oferta` FOREIGN KEY (`id_oferta`) REFERENCES `oferta` (`id_ofertas`);

--
-- Filtros para la tabla `cuenta_con`
--
ALTER TABLE `cuenta_con`
  ADD CONSTRAINT `FK_cuenta_con_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `FK_cuenta_con_red_social` FOREIGN KEY (`id_red`) REFERENCES `red_social` (`id_red`);

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `FK_detalle_pedido_pago` FOREIGN KEY (`id_pago`) REFERENCES `pago` (`id_pago`),
  ADD CONSTRAINT `FK_detalle_pedido_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `FK_detalle_pedido_platillos` FOREIGN KEY (`id_platillos`) REFERENCES `platillos` (`id_platillos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
