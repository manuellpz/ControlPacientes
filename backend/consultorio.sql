-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2022 a las 02:11:04
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL,
  `folio` int(11) NOT NULL,
  `fecha` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `nombrePaciente` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `edadPaciente` int(3) NOT NULL,
  `pesoPaciente` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `tallaPaciente` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `presionPaciente` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `alergiasPaciente` varchar(255) COLLATE latin1_spanish_ci NOT NULL DEFAULT 'NINGUNA',
  `diagnosticoPaciente` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `receta` text COLLATE latin1_spanish_ci NOT NULL,
  `medico` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `folio`, `fecha`, `nombrePaciente`, `edadPaciente`, `pesoPaciente`, `tallaPaciente`, `presionPaciente`, `alergiasPaciente`, `diagnosticoPaciente`, `receta`, `medico`) VALUES
(1, 0, '1/7/2022 5:33:38 PM', 'Juan Soto', 42, '75', '1.65', '120/80', 'NINGUNA', 'Resfriado Comun', 'Clorfenamina Compuesta - 1 tableta / 8 horas / 10 dias', 'Manuel Lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `universidad` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `cedula` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `especialidad` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `posicion` varchar(255) COLLATE latin1_spanish_ci NOT NULL DEFAULT 'Medico',
  `usuario` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `universidad`, `cedula`, `especialidad`, `posicion`, `usuario`, `contrasena`) VALUES
(1, 'Alberto', 'Soto', 'UAG - Universidad Autonoma de Guadalajara', '15934635', 'Medico Cirujano', 'Admin', 'albertst', 'albert2022'),
(2, 'Manuel', 'Lopez', 'UAS', '00156865', 'Medico Cirujano', 'Medico', 'Manuellpz', 'manuellpz2022');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
