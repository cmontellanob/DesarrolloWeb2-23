-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2023 a las 23:33:16
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `fotografia` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `CU` varchar(8) NOT NULL,
  `idcarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `fotografia`, `nombres`, `apellidos`, `CU`, `idcarrera`) VALUES
(2, '6508b6c4b7417.jpg', 'Juanito', 'Perez', '35-865', 4),
(3, '', 'Juan ', 'Perez', '35-6666', 4),
(4, '', 'MariaJuana', 'Ramirez', '35-6661', 3),
(5, '', 'MArcelino', 'Ballivin', '111-333', 2),
(7, '', 'Ricardo', 'Vaca', '35-65546', 4),
(9, '64ff8d7d7de04.jpg', 'Caudia ff', 'Juarez', '35-239', 1),
(11, '', 'Maria', 'Perez', '35-454', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `nombre`) VALUES
(1, 'ING.  DE SISTEMAS'),
(2, 'ING. EN CIENCIAS DE LA COMPUTACION'),
(3, 'ING. EN TRCNOLOGIAS DELAINFORMACION Y SEGURODAD'),
(4, 'ING. EN TELECOMUNICACIONES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provincia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iddepartamento` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `provincia`, `iddepartamento`) VALUES
(1, 'Oropeza', 1),
(2, 'Azurduy', 1),
(3, 'Zudáñez', 1),
(4, 'Tomina', 1),
(5, 'Hernando Siles', 1),
(6, 'Yamparaez', 1),
(7, 'Nor Cinti', 1),
(8, 'Belisario Boeto', 1),
(9, 'Sur Cinti', 1),
(10, 'Luis Calvo', 1),
(11, 'Murillo', 2),
(12, 'Omasuyos', 2),
(13, 'Pacajes', 2),
(14, 'Camacho', 2),
(15, 'Muñecas', 2),
(16, 'Larecaja', 2),
(17, 'Franz Tamayo', 2),
(18, 'Ingavi', 2),
(19, 'Loayza', 2),
(20, 'Inquisivi', 2),
(21, 'Sud Yungas', 2),
(22, 'Los Andes', 2),
(23, 'Aroma', 2),
(24, 'Nor Yungas', 2),
(25, 'Abel Iturralde', 2),
(26, 'Bautista Saavedra', 2),
(27, 'Manco Kapac', 2),
(28, 'Gualberto Villarroel', 2),
(29, 'Gral. Jose Manuel Pando', 2),
(30, 'Caranavi', 2),
(31, 'Cercado', 3),
(32, 'Campero', 3),
(33, 'Ayopaya', 3),
(34, 'Esteban Arze', 3),
(35, 'Arani', 3),
(36, 'Arque', 3),
(37, 'Capinota', 3),
(38, 'German Jordan', 3),
(39, 'Quillacollo', 3),
(40, 'Chapare', 3),
(41, 'Tapacari', 3),
(42, 'Carrasco', 3),
(43, 'Mizque', 3),
(44, 'Punata', 3),
(45, 'Bolivar', 3),
(46, 'Tiraque', 3),
(47, 'Avaroa', 4),
(48, 'Carangas', 4),
(49, 'Sajama', 4),
(50, 'Litoral', 4),
(51, 'Poopo', 4),
(52, 'Pantaleon Dalence', 4),
(53, 'Ladislao Cabrera', 4),
(54, 'Atahuallpa', 4),
(55, 'Saucari', 4),
(56, 'Tomas Barron', 4),
(57, 'Sur Carangas', 4),
(58, 'San Pedro de Totora', 4),
(59, 'Sebastian Pagador', 4),
(60, 'Mejillones', 4),
(61, 'Nor Carangas', 4),
(62, 'Cercado', 4),
(63, 'Tomas Frias', 5),
(64, 'Rafael Bustillo', 5),
(65, 'Cornelio Saavedra', 5),
(66, 'Chayanta', 5),
(67, 'Charcas', 5),
(68, 'Nor Chichas', 5),
(69, 'Alonso de Ibañez', 5),
(70, 'Sud Chichas', 5),
(71, 'Nor Lipez', 5),
(72, 'Sud Lipez', 5),
(73, 'Jose Maria Linares', 5),
(74, 'Antonio Quijarro', 5),
(75, 'Gral. Bernardino Bilbao', 5),
(76, 'Daniel Campos', 5),
(77, 'Modesto Omiste', 5),
(78, 'Enrique Baldivieso', 5),
(79, 'Arce', 6),
(80, 'Gran Chaco', 6),
(81, 'Avilez', 6),
(82, 'Mendez', 6),
(83, 'Burnet O connor', 6),
(84, 'Cercado', 6),
(85, 'Andres Ibañez', 7),
(86, 'Warnes', 7),
(87, 'Velasco', 7),
(88, 'Ichilo', 7),
(89, 'Chiquitos', 7),
(90, 'Sara', 7),
(91, 'Cordillera', 7),
(92, 'Valle Grande', 7),
(93, 'Florida', 7),
(94, 'Obispo Santistéban', 7),
(95, 'Ñuflo de Chavez', 7),
(96, 'Angel Sandoval', 7),
(97, 'Manuel Maria Caballero', 7),
(98, 'German Busch', 7),
(99, 'Guarayos', 7),
(100, 'Vaca Diez', 8),
(101, 'Gral. Jose Ballivian', 8),
(102, 'Yacuma', 8),
(103, 'Moxos', 8),
(104, 'Marban', 8),
(105, 'Mamore', 8),
(106, 'Itenez', 8),
(107, 'Cercado', 8),
(108, 'Nicolas Suarez', 9),
(109, 'Manuripi', 9),
(110, 'Madre de Dios', 9),
(111, 'Abuna', 9),
(112, 'Gral. Federico Roman', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `password`, `rol`) VALUES
(1, 'Administrador', 'admin@sis256.edu', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Administrador'),
(2, 'Usuario', 'usuario@sis256.edu', 'dd5fef9c1c1da1394d6d34b248c51be2ad740840', 'Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provincias_iddepartamento_foreign` (`iddepartamento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
