-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2022 a las 18:02:00
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IDcliente` int(3) NOT NULL,
  `idsucursal` int(3) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IDcliente`, `idsucursal`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(0, 2, 'jesus', 'crazy', 'cr321 # 342', '315856523'),
(5, 1, 'jesus', 'restrepo', 'cr321 # 342', '315854665'),
(8, 1, 'Juan Esteban', 'Vanegas', 'cr321 # 342', '315854665'),
(10, 2, 'jesus', 'restrepo', 'cr321 # 342', '315854665');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlador`
--

CREATE TABLE `controlador` (
  `IDcontrolador` int(3) NOT NULL,
  `idcliente` int(3) NOT NULL,
  `idsucursal` int(3) NOT NULL,
  `idHotel` int(3) DEFAULT NULL,
  `idVuelo` int(3) DEFAULT NULL,
  `habitacio` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Asiento` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tiempo` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `controlador`
--

INSERT INTO `controlador` (`IDcontrolador`, `idcliente`, `idsucursal`, `idHotel`, `idVuelo`, `habitacio`, `Asiento`, `tiempo`) VALUES
(2, 8, 1, 5, NULL, 'VIP', NULL, '1 semana'),
(3, 10, 1, NULL, 3, NULL, 'VIP', NULL),
(4, 8, 1, 5, 5, 'VIP', 'VIP', '1 semana'),
(5, 8, 1, 5, 5, 'VIP', 'VIP', '1 semana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `IDhotel` int(3) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ciudad` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `HabitacionesNormales` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `HabitacionesVIP` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`IDhotel`, `nombre`, `direccion`, `ciudad`, `telefono`, `HabitacionesNormales`, `HabitacionesVIP`) VALUES
(0, 'palo quemado', 'cr321 # 342', 'Restrepo', '315854665', '3', '6'),
(5, 'calima', 'cr321 # 342', 'cali', '315854665', '6', '2'),
(7, 'guadalajara de buga', 'cr321 # 34', 'buga', '315854', '10', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `IDsucursal` int(3) NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`IDsucursal`, `direccion`, `telefono`) VALUES
(1, 'cr13 #17200', '3196118458'),
(2, 'Cr13#26', '316 7848');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `IDvuelos` int(3) NOT NULL,
  `origen` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `destino` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaHora` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `asientosNormales` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `asientosVIP` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`IDvuelos`, `origen`, `destino`, `fechaHora`, `asientosNormales`, `asientosVIP`) VALUES
(3, 'mexico', 'cali', '2022-03-24', '5', '6'),
(5, 'mexico', 'bogota', '2022-03-17', '2', '1'),
(6, 'cali', 'bogota', '2022-03-07', '2', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDcliente`),
  ADD KEY `idsucursal` (`idsucursal`);

--
-- Indices de la tabla `controlador`
--
ALTER TABLE `controlador`
  ADD PRIMARY KEY (`IDcontrolador`),
  ADD KEY `controlador_ibfk_1` (`idcliente`),
  ADD KEY `controlador_ibfk_2` (`idsucursal`),
  ADD KEY `controlador_ibfk_3` (`idHotel`),
  ADD KEY `controlador_ibfk_4` (`idVuelo`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`IDhotel`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`IDsucursal`);

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD PRIMARY KEY (`IDvuelos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IDcliente` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `controlador`
--
ALTER TABLE `controlador`
  MODIFY `IDcontrolador` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `IDhotel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `IDsucursal` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `IDvuelos` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`IDsucursal`);

--
-- Filtros para la tabla `controlador`
--
ALTER TABLE `controlador`
  ADD CONSTRAINT `controlador_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`IDcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `controlador_ibfk_2` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`IDsucursal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `controlador_ibfk_3` FOREIGN KEY (`idHotel`) REFERENCES `hotel` (`IDhotel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `controlador_ibfk_4` FOREIGN KEY (`idVuelo`) REFERENCES `vuelos` (`IDvuelos`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
