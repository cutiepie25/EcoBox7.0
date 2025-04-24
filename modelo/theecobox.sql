-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2022 a las 01:00:01
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `theecobox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `Id_detallefac` int(11) NOT NULL,
  `Id_factura` int(11) NOT NULL,
  `Id_prenda` int(11) NOT NULL,
  `Cantidad` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallefactura`
--

INSERT INTO `detallefactura` (`Id_detallefac`, `Id_factura`, `Id_prenda`, `Cantidad`) VALUES
(2, 1, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Id_factura` int(11) NOT NULL,
  `Id_usua` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Id_tipotrans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`Id_factura`, `Id_usua`, `Fecha`, `Id_tipotrans`) VALUES
(1, 1025885232, '2022-09-14', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finalidad_prenda`
--

CREATE TABLE `finalidad_prenda` (
  `Id_tipofinalidad` int(11) NOT NULL,
  `Descrip_finalidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `finalidad_prenda`
--

INSERT INTO `finalidad_prenda` (`Id_tipofinalidad`, `Descrip_finalidad`) VALUES
(2, 'Vender prenda'),
(3, 'Comprar prenda'),
(4, 'Donar prenda'),
(5, 'Solicitar prenda de donación ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenda`
--

CREATE TABLE `prenda` (
  `Id_prenda` int(11) NOT NULL,
  `Descrip` varchar(150) NOT NULL,
  `Id_tipoprenda` int(11) NOT NULL,
  `Id_tipofinalidad` int(11) NOT NULL,
  `Valor` int(11) NOT NULL,
  `Puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prenda`
--

INSERT INTO `prenda` (`Id_prenda`, `Descrip`, `Id_tipoprenda`, `Id_tipofinalidad`, `Valor`, `Puntos`) VALUES
(2, 'Tenis CONVERSE rojos en buen estado', 4, 2, 12000, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc`
--

CREATE TABLE `tipo_doc` (
  `Id_tipodoc` int(11) NOT NULL,
  `Descrip_tipodoc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_doc`
--

INSERT INTO `tipo_doc` (`Id_tipodoc`, `Descrip_tipodoc`) VALUES
(2, 'Tarjeta de Identidad'),
(3, 'Cédula de Extranjería'),
(4, 'Registro Civil'),
(5, 'NIT'),
(6, 'Pasaporte'),
(7, 'Tarjeta de Extranjería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_prenda`
--

CREATE TABLE `tipo_prenda` (
  `Id_tipoprenda` int(11) NOT NULL,
  `Descrip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_prenda`
--

INSERT INTO `tipo_prenda` (`Id_tipoprenda`, `Descrip`) VALUES
(1, 'Camisa'),
(2, 'Jean'),
(3, 'Vestido'),
(4, 'Tenis'),
(5, 'Tacones'),
(6, 'Chaqueta'),
(7, 'Top'),
(8, 'Camisa hombre'),
(9, 'Camisa mujer '),
(10, 'Falda'),
(11, 'Short');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_trans`
--

CREATE TABLE `tipo_trans` (
  `Id_tipotrans` int(11) NOT NULL,
  `Descrip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_trans`
--

INSERT INTO `tipo_trans` (`Id_tipotrans`, `Descrip`) VALUES
(1, 'Donación'),
(2, 'Venta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usua`
--

CREATE TABLE `tipo_usua` (
  `Id_tipousua` int(11) NOT NULL,
  `Descrip_tipousua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usua`
--

INSERT INTO `tipo_usua` (`Id_tipousua`, `Descrip_tipousua`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usua` int(11) NOT NULL,
  `Id_tipodoc` int(11) NOT NULL,
  `Id_tipousua` int(11) NOT NULL,
  `Nom_usua` varchar(30) NOT NULL,
  `Apellido_usua` varchar(30) NOT NULL,
  `Fecha_nac` date NOT NULL,
  `Direcc_usua` varchar(30) NOT NULL,
  `Cel_usua` varchar(10) NOT NULL,
  `Correo_usua` varchar(30) NOT NULL,
  `Clave_usua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usua`, `Id_tipodoc`, `Id_tipousua`, `Nom_usua`, `Apellido_usua`, `Fecha_nac`, `Direcc_usua`, `Cel_usua`, `Correo_usua`, `Clave_usua`) VALUES
(1018230316, 2, 1, 'Rachel Andrea', 'Taborda Góngora', '2005-08-27', 'Diagonal 81b #76-151', '3157947224', 'tabordarachel@gmail.com', '1234567'),
(1020109270, 2, 1, 'Laura ', 'Jaramillo Uribe', '2006-02-08', 'Calle 78a #95a24', '3117441415', 'laurisjara2006@gmail.com', '2641415'),
(1025885232, 2, 1, 'María Alejandra ', 'Rivera Velásquez ', '2005-07-23', 'Calle 76db #86-18', '3195354307', 'm4l3j42005@gmail.com ', '57235723'),
(1025886074, 2, 1, 'María Alejandra ', 'Vargas Duque', '2005-10-22', 'Carrera 94a #77f - 58', '3117526662', 'alejavd2205gmail.com', '090909');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`Id_detallefac`),
  ADD KEY `factura` (`Id_factura`),
  ADD KEY `prenda` (`Id_prenda`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Id_factura`),
  ADD KEY `Id_usua` (`Id_usua`),
  ADD KEY `Id_tipotrans` (`Id_tipotrans`),
  ADD KEY `Id_tipotrans_2` (`Id_tipotrans`);

--
-- Indices de la tabla `finalidad_prenda`
--
ALTER TABLE `finalidad_prenda`
  ADD PRIMARY KEY (`Id_tipofinalidad`);

--
-- Indices de la tabla `prenda`
--
ALTER TABLE `prenda`
  ADD PRIMARY KEY (`Id_prenda`),
  ADD KEY `Id_tipoprenda` (`Id_tipoprenda`),
  ADD KEY `Id_tipofinalidad` (`Id_tipofinalidad`);

--
-- Indices de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`Id_tipodoc`);

--
-- Indices de la tabla `tipo_prenda`
--
ALTER TABLE `tipo_prenda`
  ADD PRIMARY KEY (`Id_tipoprenda`);

--
-- Indices de la tabla `tipo_trans`
--
ALTER TABLE `tipo_trans`
  ADD PRIMARY KEY (`Id_tipotrans`);

--
-- Indices de la tabla `tipo_usua`
--
ALTER TABLE `tipo_usua`
  ADD PRIMARY KEY (`Id_tipousua`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usua`),
  ADD KEY `Id_tipodoc` (`Id_tipodoc`),
  ADD KEY `Id_tipousua` (`Id_tipousua`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `Id_detallefac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `Id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `finalidad_prenda`
--
ALTER TABLE `finalidad_prenda`
  MODIFY `Id_tipofinalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prenda`
--
ALTER TABLE `prenda`
  MODIFY `Id_prenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  MODIFY `Id_tipodoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_prenda`
--
ALTER TABLE `tipo_prenda`
  MODIFY `Id_tipoprenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipo_trans`
--
ALTER TABLE `tipo_trans`
  MODIFY `Id_tipotrans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_usua`
--
ALTER TABLE `tipo_usua`
  MODIFY `Id_tipousua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `detallefactura_ibfk_1` FOREIGN KEY (`Id_factura`) REFERENCES `factura` (`Id_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detallefactura_ibfk_2` FOREIGN KEY (`Id_prenda`) REFERENCES `prenda` (`Id_prenda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`Id_usua`) REFERENCES `usuarios` (`Id_usua`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`Id_tipotrans`) REFERENCES `tipo_trans` (`Id_tipotrans`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prenda`
--
ALTER TABLE `prenda`
  ADD CONSTRAINT `prenda_ibfk_1` FOREIGN KEY (`Id_tipoprenda`) REFERENCES `tipo_prenda` (`Id_tipoprenda`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prenda_ibfk_3` FOREIGN KEY (`Id_tipofinalidad`) REFERENCES `finalidad_prenda` (`Id_tipofinalidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_tipodoc`) REFERENCES `tipo_doc` (`Id_tipodoc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Id_tipousua`) REFERENCES `tipo_usua` (`Id_tipousua`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
