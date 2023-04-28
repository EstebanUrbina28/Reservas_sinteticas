-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2022 a las 19:17:05
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sintetica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `nombre` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`nombre`, `email`, `pass`, `id`) VALUES
('club xilon', 'e.and@hotmail.com', '12345', 10),
('club xilon', 'e.and@hotmail.com', '12345', 11),
('alejandro', 'alejo@hotmail.com', '54321', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canchas`
--

CREATE TABLE `canchas` (
  `id_can` int(20) NOT NULL,
  `nombre_cancha` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `direccion_cancha` varchar(40) NOT NULL,
  `telefono_cancha` varchar(15) NOT NULL,
  `tipo_cancha` varchar(10) NOT NULL,
  `numero_cancha` varchar(10) NOT NULL,
  `horario_cancha` varchar(30) NOT NULL DEFAULT current_timestamp(),
  `servicio` varchar(50) NOT NULL,
  `techo` varchar(10) NOT NULL,
  `precio` int(15) NOT NULL,
  `img` varchar(200) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canchas`
--

INSERT INTO `canchas` (`id_can`, `nombre_cancha`, `direccion_cancha`, `telefono_cancha`, `tipo_cancha`, `numero_cancha`, `horario_cancha`, `servicio`, `techo`, `precio`, `img`, `img1`, `img2`) VALUES
(56, 'club xilon', 'avenida santander ', '3127170098', 'Futbol 11', 'Cancha 5', '6:00 am a 11:00 pm ', 'Servicio de Cafeteria y parqueadero', 'SI', 750000, 'upload/club xilon.jpg', '.', '.'),
(57, 'Cancha Sintetica El Toque', 'Calle 18 No. 6 -07 ', '3178494205', 'Futbol 5', 'Cancha 4', '1:00 pm a 10:00 pm', 'Servicio de Cafeteria y parqueadero', 'NO', 45000, 'upload/club xilon.jpgfutboleros pasto.jpg', 'upload/club xilon.jpgfutboleros pasto.jpg', '.'),
(58, 'club xilon', 'Calle 18 No. 6 -07 ', '22323232323', 'Futbol 5', 'Cancha 1', '1:00 pm a 10:00 pm', 'Servico de Cafeteria, Bar y Parqueadero', 'SI', 450000, 'upload/manaos.jpg', '.', '.'),
(59, 'club xilon', 'Calle 18 No. 6 -07 ', '22323232323', 'Futbol 5', 'Cancha 1', '1:00 pm a 10:00 pm', 'Servico de Cafeteria, Bar y Parqueadero', 'SI', 450000, 'upload/manaos.jpg', '.', '.'),
(60, 'club xilon', 'Calle 18 No. 6 -07 ', '22323232323', 'Futbol 5', 'Cancha 1', '1:00 pm a 10:00 pm', 'Servico de Cafeteria, Bar y Parqueadero', 'SI', 450000, 'upload/sin camp nou.jpg', '.', '.'),
(61, 'club xilon', 'Calle 18 No. 6 -07 ', '7298712', 'Futbol 11', 'Cancha 4', '5:00 pm a 7:00 pm', 'Servicio de Cafeteria y parqueadero', 'SI', 60000, 'upload/tribuna sur.jpg', 'upload/Sin panamericana.jpg', '.'),
(62, 'club xilon', 'Calle 18 No. 6 -07 ', '9019273', 'Futbol 11', 'Cancha 5', '5:00 pm a 7:00 pm', 'Servicio de Parqueadero', 'SI', 50000, 'upload/monumental .jpg', 'upload/la pelotera .jpg', 'upload/sin camp nou.jpg'),
(63, 'Cancha Sintética El Toque', 'avenida santander ', '1222222222', 'Futbol 5', 'Cancha 1', '1:00 pm a 10:00 pm', 'Servico de Cafeteria, Bar y Parqueadero', 'SI', 2344455, 'upload/monumental .jpg', 'upload/sin camp nou.jpg', 'upload/tribuna sur.jpg'),
(64, 'Unida deportiva', 'calle 43 # 205', '7234567', 'Futbol 8', 'Cancha 3', '2:00 pm a 7:00 pm', 'Servicio de Cafeteria, Duchas y parqueadero', 'NO', 30000, 'upload/club xilon.jpg', 'upload/futboleros pasto.jpg', 'upload/la pelotera .jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cli` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cli`, `nombre`, `telefono`, `fecha`, `hora`) VALUES
(10, 'Esteban Urbina', '3187170062', '2022-05-12', '18:12:00'),
(11, '3198280083', '22-05-14', '0000-00-00', '00:00:00'),
(12, '31090902343', '22-05-28', '0000-00-00', '00:00:00'),
(13, 'Jhon jairo delgado', '3009783465', '2022-06-01', '21:32:00'),
(14, 'Carolina Benavides', '3003459087', '2022-05-04', '20:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(20) NOT NULL,
  `fotos` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `canchas`
--
ALTER TABLE `canchas`
  ADD PRIMARY KEY (`id_can`) USING BTREE;

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`) USING BTREE;

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `canchas`
--
ALTER TABLE `canchas`
  MODIFY `id_can` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cli` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
