-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2023 a las 05:33:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor-tareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `id_estado` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `titulo`, `descripcion`, `correo`, `fecha`, `id_estado`) VALUES
(32, 'asdas', 'kmilolovera@gmail.comkmilolovera@gmail.comkmilolovera@gmail.com', 'kmilolovera@gmail.com', '2023-11-12', 2),
(41, 'tarea pagina web', 'hacer', 'kmilolovera@gmail.com', '2023-11-12', 1),
(42, 'tarea pagina ss', 'adfsafda', 'kmilolovera@gmail.com', '2023-11-12', 2),
(43, 'tarea pagina ', 'hacer', 'kmilolovera@gmail.com', '2023-11-12', 3),
(47, 'asdf', 'asdfaf', 'kmilolovera@gmail.com', '2023-11-12', 3),
(51, 'test2', 'hacer pagina web hacer pagina web', 'test@gmail.com', '2023-11-19', 2),
(52, 'test3', 'hacer pagina web hacer pagina web', 'test@gmail.com', '2023-11-19', 3),
(54, 'testtests', 'teste', 'test@gmail.com', '2023-11-30', 1),
(55, 'asdfasdfsdaf', 'test', 'test@gmail.com', '2023-11-30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(9) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `pais`, `fecha`) VALUES
(1, 'test', 'test@gmail.com', 'qwerty', 'Chile', '2023-11-18'),
(2, 'Camilo', 'kmilolovera@gmail.com', 'qwerty', 'Argentina', '2023-11-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
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
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
