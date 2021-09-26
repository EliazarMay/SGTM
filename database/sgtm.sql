-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2021 a las 01:38:57
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgtm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_mantenimientos`
--

CREATE TABLE `estatus_mantenimientos` (
  `id_estatus_mantenimiento-` int(11) NOT NULL,
  `estatus_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_tickets`
--

CREATE TABLE `estatus_tickets` (
  `id_estatus_ticket` int(11) NOT NULL,
  `estatus_ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_usuarios`
--

CREATE TABLE `estatus_usuarios` (
  `id_estatus_usuario` int(11) NOT NULL,
  `estatus_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorios`
--

CREATE TABLE `laboratorios` (
  `id_laboratorio` int(11) NOT NULL,
  `lasboratorio` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `id_mantenimiento` int(11) NOT NULL,
  `fecha_programada` date NOT NULL,
  `fecha_realizada` int(11) NOT NULL,
  `descripcion` int(11) NOT NULL,
  `id_laboratorio` int(11) NOT NULL,
  `id_tipo_mantenimiento` int(11) NOT NULL,
  `id_estatus_mantenimiento` int(11) NOT NULL,
  `id_usuario_genera` int(11) NOT NULL,
  `id_usuario_realiza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id_material` int(11) NOT NULL,
  `material` varchar(32) NOT NULL,
  `existencia` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales_mantenimientos`
--

CREATE TABLE `materiales_mantenimientos` (
  `id_material` int(11) NOT NULL,
  `id_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridades`
--

CREATE TABLE `prioridades` (
  `id_prioridad` int(11) NOT NULL,
  `prioridad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id_ticket` int(11) NOT NULL,
  `asunto` varchar(32) NOT NULL,
  `descripcion` varchar(64) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `id_estatus_ticket` int(11) NOT NULL,
  `id_prioridad` int(11) NOT NULL,
  `id_laboratorio` int(11) NOT NULL,
  `id_usuario_soporte` int(11) NOT NULL,
  `archivo_adjunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_usuarios`
--

CREATE TABLE `tipos_de_usuarios` (
  `id_tipo_de_usuario` int(11) NOT NULL,
  `tipo_de_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_mantenimientos`
--

CREATE TABLE `tipos_mantenimientos` (
  `id_tipo_mantenimiento` int(11) NOT NULL,
  `tipo_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `correo` varchar(32) NOT NULL,
  `id_tipo_de_usuario` int(11) NOT NULL,
  `id_estatus_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_soportes`
--

CREATE TABLE `usuarios_soportes` (
  `id_usuario_soporte` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `correo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estatus_mantenimientos`
--
ALTER TABLE `estatus_mantenimientos`
  ADD PRIMARY KEY (`id_estatus_mantenimiento-`);

--
-- Indices de la tabla `estatus_tickets`
--
ALTER TABLE `estatus_tickets`
  ADD PRIMARY KEY (`id_estatus_ticket`);

--
-- Indices de la tabla `estatus_usuarios`
--
ALTER TABLE `estatus_usuarios`
  ADD PRIMARY KEY (`id_estatus_usuario`);

--
-- Indices de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  ADD PRIMARY KEY (`id_laboratorio`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`id_mantenimiento`),
  ADD KEY `id_laboratorio` (`id_laboratorio`,`id_tipo_mantenimiento`),
  ADD KEY `id_tipo_mantenimiento` (`id_tipo_mantenimiento`),
  ADD KEY `id_estatus_mantenimiento` (`id_estatus_mantenimiento`,`id_usuario_genera`,`id_usuario_realiza`),
  ADD KEY `id_usuario_genera` (`id_usuario_genera`),
  ADD KEY `id_usuario_realiza` (`id_usuario_realiza`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `materiales_mantenimientos`
--
ALTER TABLE `materiales_mantenimientos`
  ADD KEY `id_material` (`id_material`,`id_mantenimiento`),
  ADD KEY `id_mantenimiento` (`id_mantenimiento`);

--
-- Indices de la tabla `prioridades`
--
ALTER TABLE `prioridades`
  ADD PRIMARY KEY (`id_prioridad`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_estatus_ticket` (`id_estatus_ticket`),
  ADD KEY `id_prioridad` (`id_prioridad`,`id_laboratorio`,`id_usuario_soporte`),
  ADD KEY `id_laboratorio` (`id_laboratorio`),
  ADD KEY `id_usuario_soporte` (`id_usuario_soporte`);

--
-- Indices de la tabla `tipos_de_usuarios`
--
ALTER TABLE `tipos_de_usuarios`
  ADD PRIMARY KEY (`id_tipo_de_usuario`);

--
-- Indices de la tabla `tipos_mantenimientos`
--
ALTER TABLE `tipos_mantenimientos`
  ADD PRIMARY KEY (`id_tipo_mantenimiento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_de_usuario` (`id_tipo_de_usuario`,`id_estatus_usuario`),
  ADD KEY `id_estatus_usuario` (`id_estatus_usuario`);

--
-- Indices de la tabla `usuarios_soportes`
--
ALTER TABLE `usuarios_soportes`
  ADD PRIMARY KEY (`id_usuario_soporte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estatus_mantenimientos`
--
ALTER TABLE `estatus_mantenimientos`
  MODIFY `id_estatus_mantenimiento-` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estatus_tickets`
--
ALTER TABLE `estatus_tickets`
  MODIFY `id_estatus_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  MODIFY `id_laboratorio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios_soportes`
--
ALTER TABLE `usuarios_soportes`
  MODIFY `id_usuario_soporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD CONSTRAINT `mantenimientos_ibfk_1` FOREIGN KEY (`id_laboratorio`) REFERENCES `laboratorios` (`id_laboratorio`),
  ADD CONSTRAINT `mantenimientos_ibfk_2` FOREIGN KEY (`id_tipo_mantenimiento`) REFERENCES `tipos_mantenimientos` (`id_tipo_mantenimiento`),
  ADD CONSTRAINT `mantenimientos_ibfk_3` FOREIGN KEY (`id_usuario_genera`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `mantenimientos_ibfk_4` FOREIGN KEY (`id_usuario_realiza`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `mantenimientos_ibfk_5` FOREIGN KEY (`id_estatus_mantenimiento`) REFERENCES `estatus_mantenimientos` (`id_estatus_mantenimiento-`);

--
-- Filtros para la tabla `materiales_mantenimientos`
--
ALTER TABLE `materiales_mantenimientos`
  ADD CONSTRAINT `materiales_mantenimientos_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `materiales` (`id_material`),
  ADD CONSTRAINT `materiales_mantenimientos_ibfk_2` FOREIGN KEY (`id_mantenimiento`) REFERENCES `mantenimientos` (`id_mantenimiento`);

--
-- Filtros para la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`id_estatus_ticket`) REFERENCES `estatus_tickets` (`id_estatus_ticket`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`id_prioridad`) REFERENCES `prioridades` (`id_prioridad`),
  ADD CONSTRAINT `tickets_ibfk_3` FOREIGN KEY (`id_laboratorio`) REFERENCES `laboratorios` (`id_laboratorio`),
  ADD CONSTRAINT `tickets_ibfk_4` FOREIGN KEY (`id_usuario_soporte`) REFERENCES `usuarios_soportes` (`id_usuario_soporte`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_de_usuario`) REFERENCES `tipos_de_usuarios` (`id_tipo_de_usuario`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_estatus_usuario`) REFERENCES `estatus_usuarios` (`id_estatus_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
