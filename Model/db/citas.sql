-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2023 a las 00:26:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `admin_id` int(11) NOT NULL,
  `admin_ident` int(11) DEFAULT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `admin_correo` varchar(300) DEFAULT NULL,
  `admin_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`admin_id`, `admin_ident`, `admin_name`, `admin_correo`, `admin_password`) VALUES
(1, NULL, 'diego', 'diego@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_citas`
--

CREATE TABLE `categoria_citas` (
  `categoria_id` int(11) NOT NULL,
  `categoria_name` varchar(100) DEFAULT NULL,
  `categoria_precio` int(11) DEFAULT NULL,
  `categoria_createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria_citas`
--

INSERT INTO `categoria_citas` (`categoria_id`, `categoria_name`, `categoria_precio`, `categoria_createdAt`) VALUES
(1, 'Masaje Facial', 12000, '2019-07-25 11:22:38'),
(2, 'Facial de Fruta', 11500, '2019-07-25 11:22:53'),
(3, 'Facial de Pepino', 10000, '2019-07-25 11:23:10'),
(4, 'Manicure de Lujo', 15000, '2019-07-25 11:23:34'),
(5, 'Integral de Pedicure y Coerte de Cabello', 13500, '2019-07-25 11:23:47'),
(6, 'Manicure Precio Estudiantes', 6500, '2019-07-25 11:24:01'),
(7, 'Depilado de Piernas', 40000, '2019-07-25 11:24:19'),
(8, 'Corte de Cabello Hombre', 15000, '2019-07-25 11:24:38'),
(9, 'Corte de Barba', 11500, '2019-07-25 11:24:53'),
(10, 'Masaje Espalda', 40000, '2019-07-25 11:25:08'),
(11, 'TeÃ±ido de Cabello', 12000, '2019-07-25 11:25:35'),
(12, 'Peinado  con Rayos', 54000, '2019-08-19 13:36:27'),
(13, 'Ondulado y Grafilado', 43000, '2019-08-21 15:45:50'),
(14, 'Blower y Alizer', 33000, '2019-08-21 16:23:23'),
(15, 'Masaje Facial Vertido', 5000, '2020-01-23 19:47:52'),
(16, 'Esfoliante de Avena', 36400, '2020-01-24 17:04:15'),
(17, 'Esfoliante de Quinoa', 43400, '2020-01-24 17:04:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `cliente_id` int(11) NOT NULL,
  `cliente_name` varchar(100) DEFAULT NULL,
  `cliente_correo` varchar(300) DEFAULT NULL,
  `cliente_fecha` varchar(25) DEFAULT NULL,
  `cliente_tel` varchar(20) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`cliente_id`, `cliente_name`, `cliente_correo`, `cliente_fecha`, `cliente_tel`, `categoria_id`) VALUES
(1, 'ByDiegreeN', 'diegoalejandrogarcia140902@gmail.com', '2023', '3214867673', 2),
(2, 'asdeditao', 'diegoalejandrogarcia140902@gmail.com', '10', '1313111111', NULL),
(5, 'asdeditao', 'diegoalejandrogarcia140902@gmail.com', '10', '1313111111', 2),
(6, 'asddeditao2', 'diegoalejandrogarcia140902@gmail.com', '10131313', '13131', 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `categoria_citas`
--
ALTER TABLE `categoria_citas`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`cliente_id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria_citas`
--
ALTER TABLE `categoria_citas`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria_citas` (`categoria_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
