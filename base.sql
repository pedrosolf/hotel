-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2024 a las 17:03:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `cod_book` varchar(50) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `id_room` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_book` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `activo` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bookings`
--

INSERT INTO `bookings` (`id`, `cod_book`, `date_in`, `date_out`, `id_room`, `id_user`, `date_book`, `activo`) VALUES
(1, '11111111', '2024-01-29', '2024-02-05', 5, 1, '2024-01-29 16:00:26', 0),
(2, '22222222', '2024-01-31', '2024-02-03', 20, 2, '2024-01-29 15:54:53', 0),
(3, '33333333', '2024-02-10', '2024-02-12', 1, 1, '2024-01-30 13:52:54', 1),
(4, '11111112', '2024-01-29', '2024-01-31', 2, 1, '2024-01-30 13:53:02', 1),
(5, '11111113', '2024-01-29', '2024-01-31', 3, 1, '2024-01-30 15:41:15', 1),
(6, '11111114', '2024-01-29', '2024-01-31', 4, 1, '2024-01-29 15:09:04', 0),
(8, '11111115', '2024-01-29', '2024-01-31', 10, 1, '2024-01-29 20:33:08', 0),
(11, 'MtT7OQnCuY', '2024-01-29', '2024-02-05', 16, 1, '2024-01-29 20:29:57', 0),
(12, 'RcMR5u4TKx', '2024-01-29', '2024-02-05', 17, 1, '2024-01-29 20:31:20', 0),
(14, 'A3D9PbEKbu', '2024-01-29', '2024-02-05', 1, 1, '2024-01-29 20:38:30', 0),
(15, 'FJapTuBdUL', '2024-01-29', '2024-02-05', 6, 1, '2024-01-29 20:50:02', 0),
(16, 'jw3F4IdVQX', '2024-01-29', '2024-01-31', 7, 1, '2024-01-29 23:24:54', 0),
(18, 'cTI41BGB0R', '2024-01-30', '2024-01-31', 8, 21, '2024-01-30 14:02:56', 1),
(19, 'AOoENXo4cW', '2024-01-30', '2024-02-04', 11, 21, '2024-01-30 14:04:07', 1),
(20, '5fqoeirElX', '2024-01-30', '2024-02-02', 18, 20, '2024-01-30 15:54:29', 0),
(21, '2Dy8uqwdHQ', '2024-01-30', '2024-02-02', 19, 20, '2024-01-30 15:56:09', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `floor` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `type`, `floor`, `price`, `descripcion`) VALUES
(1, 'Room 100', 1, 'Piso 1', 150, NULL),
(2, 'Room 101', 1, 'Piso 1', 150, NULL),
(3, 'Room 102', 1, 'Piso 1', 150, NULL),
(4, 'Room 103', 1, 'Piso 1', 150, NULL),
(5, 'Room 104', 1, 'Piso 1', 150, NULL),
(6, 'Room 200', 2, 'Piso 2', 250, NULL),
(7, 'Room 201', 2, 'Piso 2', 250, NULL),
(8, 'Room 202', 2, 'Piso 2', 250, NULL),
(9, 'Room 203', 2, 'Piso 2', 250, NULL),
(10, 'Room 204', 2, 'Piso 2', 250, NULL),
(11, 'Room 300', 3, 'Piso 3', 500, NULL),
(12, 'Room 301', 3, 'Piso 3', 500, NULL),
(13, 'Room 302', 3, 'Piso 3', 500, NULL),
(14, 'Room 303', 3, 'Piso 3', 500, NULL),
(15, 'Room 304', 3, 'Piso 3', 500, NULL),
(16, 'Room 400', 4, 'Piso 4', 700, NULL),
(17, 'Room 401', 4, 'Piso 4', 700, NULL),
(18, 'Room 402', 4, 'Piso 4', 700, NULL),
(19, 'Room 403', 4, 'Piso 4', 700, NULL),
(20, 'Room 404', 4, 'Piso 4', 700, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL DEFAULT 1,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `room_type`
--

INSERT INTO `room_type` (`id`, `description`, `capacity`, `total`, `img`) VALUES
(1, 'Simple', 1, 5, 'assets/images/simple.jpg'),
(2, 'Doble', 2, 5, 'assets/images/doble.jpg'),
(3, 'Familiar', 4, 5, 'assets/images/familiar.jpg'),
(4, 'Suite', 2, 5, 'assets/images/suite.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `rol` int(11) NOT NULL DEFAULT 0,
  `token` varchar(300) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `dni`, `name`, `lastname`, `email`, `password`, `phone`, `address`, `rol`, `token`, `date`) VALUES
(1, '34718285', 'Pedro', 'Solf', 'pedro@mail.com', '$2y$10$pNv3m8d7ExrMKti1eBD/T.lL2fhfkGTlc.DW9obrPLxzkNMfA32EG', '3795025805', 'Perugorria 384', 0, '', '2024-01-30 13:00:18'),
(2, '24789321', 'Juan', 'Gomez', 'juan123@gmail.com', '123456', '741963852', 'Junin 1254', 0, '', '2024-01-29 20:56:43'),
(3, '54741862', 'Maria', 'Ramos', 'clara741@gmail.com', '123456', '011458965', '25 de mayo 875', 0, '', '2024-01-29 20:56:49'),
(20, '26890060', 'luis', 'alegre', 'luis@gmail.com', '$2y$10$pNv3m8d7ExrMKti1eBD/T.lL2fhfkGTlc.DW9obrPLxzkNMfA32EG', '3655255', 'peru 785', 0, NULL, '2024-01-29 22:29:51'),
(21, '45789321', 'tomas', 'holder', 'tomas@gmail.com', '$2y$10$4m1YiHDEvN6EnKuUhXVCOeRj49CGwC2Q73qnQlSSuxQL/liMe.miW', '3254666', 'san juan 123', 0, NULL, '2024-01-30 13:56:43'),
(22, '12345678', 'admin', 'admin', 'admin@admin.com', '$2y$10$QwYtUEn0tU2/NnIcuvKQfu1UN8MsUeIV29G3BTd5qXlB4zKbgqay.', '437671', 'admin 123', 1, NULL, '2024-01-30 14:11:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indices de la tabla `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`type`) REFERENCES `room_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
