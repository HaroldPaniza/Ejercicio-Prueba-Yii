-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2022 a las 02:22:04
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camposextras`
--

CREATE TABLE `camposextras` (
  `id` int(11) NOT NULL,
  `realiza_compra` char(1) DEFAULT NULL,
  `articulo` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `metodo_pago` varchar(30) DEFAULT NULL,
  `no_compra` varchar(30) DEFAULT NULL,
  `id_externo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `camposextras`
--

INSERT INTO `camposextras` (`id`, `realiza_compra`, `articulo`, `precio`, `metodo_pago`, `no_compra`, `id_externo`) VALUES
(1, 's', 'Celular', 350000, 'Efectivo', 'No', 111139),
(2, 's', 'celular', 350000, 'efectivo', '', NULL),
(3, 's', 'televisor', 520000, 'tarjeta_debito', '', NULL),
(4, 's', 'celular', 350000, 'tarjeta_debito', '', NULL),
(5, 'n', '', NULL, '', 'muy caro', NULL),
(6, 's', 'televisor', 520000, 'efectivo', '', 111149),
(7, 's', 'celular', 350000, 'efectivo', '', 111150),
(8, 's', 'televisor', 520000, 'tarjeta_credito', '', 111153),
(9, 'n', '', NULL, '', 'no le interesa', 111155),
(10, 's', 'televisor', 520000, 'efectivo', '', 111157),
(11, 's', 'celular', 350000, 'efectivo', '', 111158),
(12, 's', 'televisor', 520000, 'tarjeta_debito', '', 111159),
(13, 'n', '', NULL, '', 'muy caro', 111160),
(14, 's', 'celular', 350000, 'efectivo', '', 111162);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cedula` int(15) NOT NULL,
  `nombre_cliente` varchar(40) NOT NULL,
  `telefono` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `genero` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cedula`, `nombre_cliente`, `telefono`, `email`, `genero`) VALUES
(111137, 1102113958, 'Ena Luz', 2147483647, 'enavega@gmail.com', 'F'),
(111139, 1103114, 'Daison', 2147483647, 'daisonp@gmail.com', 'm'),
(111141, 1103114958, 'Thiago', 2147483647, 'Thiago02@gmail.com', 'm'),
(111142, 12345231, 'Javier', 312934223, 'Jacos@gmail.com', 'm'),
(111146, 1239874, 'Sofia Vergara', 2147483647, 'sofiap@gmail.com', 'f'),
(111147, 12342123, 'Francisco', 2147483647, 'franciscop@gmail.com', 'm'),
(111148, 12312123, 'David', 2147483647, 'davidp@gmail.com', 'm'),
(111149, 129198281, 'Oscar', 2147483647, 'haroldp@gmail.com', 'm'),
(111150, 1103112581, 'Harold Paniza', 2147483647, 'haroldp@gmail.com', 'm'),
(111153, 19128181, 'Ena Luz', 2147483647, 'enavega@gmail.com', 'f'),
(111155, 123128653, 'David', 2147483647, 'davidp@gmail.com', 'm'),
(111156, 92717121, 'Fabio', 2147483647, 'fabiolopez@gmail.com', 'm'),
(111157, 95155141, 'Fabio', 2147483647, 'fabiolopez@gmail.com', 'm'),
(111158, 123172812, 'Jose Perez', 302181716, 'Josep@gmail.com', 'm'),
(111159, 12321131, 'BpHA', 313209131, 'haroldp@gmail.com', 'm'),
(111160, 171516171, 'Daison', 2147483647, 'daisonp@gmail.com', 'm'),
(111161, 12312113, 'Oscar', 2147483647, 'davidp@gmail.com', 'm'),
(111162, 111111111, 'Harold Paniza', 2147483647, 'haroldp@gmail.com', 'm'),
(111163, 1212100, 'Oscar', 2147483647, 'haroldp@gmail.com', 'm'),
(111165, 1615141, 'David', 2147483647, 'davidp@gmail.com', 'm'),
(111166, 142313141, 'Oscar', 2147483647, 'oscarp@gmail.com', 'm'),
(111167, 2147483647, 'Oscar', 2147483647, 'davidp@gmail.com', 'm'),
(111168, 312323123, 'Harold', 2147483647, 'oscarp@gmail.com', 'm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camposextras`
--
ALTER TABLE `camposextras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `´camposextras_clientes´` (`id_externo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camposextras`
--
ALTER TABLE `camposextras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111169;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `camposextras`
--
ALTER TABLE `camposextras`
  ADD CONSTRAINT `´camposextras_clientes´` FOREIGN KEY (`id_externo`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
