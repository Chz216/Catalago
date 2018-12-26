-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-12-2018 a las 21:29:17
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalago_reventon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `Id_categoria` int(11) NOT NULL,
  `Tipo_categoria` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`Id_categoria`, `Tipo_categoria`) VALUES
(7, 'Zapatos'),
(8, 'Tenis'),
(9, 'Botas'),
(10, 'Sandalias'),
(11, 'Balerinas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_producto` int(11) NOT NULL,
  `Id_linea` int(11) NOT NULL,
  `Id_categoria` int(11) NOT NULL,
  `Nom_producto` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Acabado` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Color` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Precio` double NOT NULL,
  `Imagen` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_producto`, `Id_linea`, `Id_categoria`, `Nom_producto`, `Acabado`, `Color`, `Precio`, `Imagen`) VALUES
(1, 1, 9, 'Bota Casual Lady Rossy', 'Sintetico', 'Varios', 225, 'bota.jpg'),
(2, 1, 9, 'Bota Casual Fimer', 'Sintetico', 'Varios', 282, 'bota1.jpg'),
(3, 1, 9, 'Botin Casual Cinthia', 'Sintetico', 'Varios', 289, 'bota2.jpg'),
(4, 5, 9, 'Botita Para Niña Mi Bella', 'Felpa', 'Varios', 157, 'bota3.jpg'),
(5, 1, 9, 'Bota Para Temporada de LLuvias', 'Hule', 'Varios', 175, 'bota.jpg'),
(6, 5, 9, 'Bota Casual Lady Rossy', 'Sintetico', 'Varios', 225, 'bota.jpg'),
(7, 5, 9, 'Bota Infantil Lady Rossy', 'Sintetico', 'Varios', 203, 'bota6.jpg'),
(8, 1, 9, 'Bota Especial Para Lluvias', 'Hule', 'Varios', 175, 'botadehule.jpg'),
(9, 1, 9, 'Bota Para Lluvias Gaby´s', 'Hule', 'Varios', 112, 'botagabis.jpg'),
(10, 5, 9, 'Bota Leilani', 'Sintetico', 'Varios', 173, 'bota-niña.jpg'),
(11, 5, 9, 'Botita Infantil Clasica', 'Sintetico', 'Varios', 278, 'bota-niña1.jpg'),
(12, 5, 9, 'Bottín Infantil Hs', 'Felpa', 'Varios', 197, 'botin.jpg'),
(13, 1, 9, 'Botín Long Beach', 'Sintetico', 'Varios', 339, 'botin1.jpg'),
(14, 5, 9, 'Botín Infantil Yazzinia', 'Felpa', 'Varios', 173, 'botin2.jpg'),
(15, 5, 9, 'Botín Para Niña', 'Sintetico', 'Varios', 255, 'botin3.jpg'),
(16, 1, 9, 'Botín Stop', 'Sintetico', 'Varios', 218, 'botin4.jpg'),
(17, 1, 9, 'Botín Buke', 'Sintetico', 'Varios', 349, 'botin-buke.jpg'),
(18, 1, 9, 'Botín Fimer', 'Sintetico', 'Varios', 282, 'botin-fimer.jpg'),
(19, 5, 9, 'Botin Para Niña', 'Sintetico', 'Varios', 248, 'botin-niña.jpg'),
(20, 2, 9, 'Bota De Trabajo BoyKap', 'Piel', 'Varios', 289, 'boykap.jpg'),
(21, 2, 9, 'Bota De Trabajo BoyKap', 'Sintetico', 'Varios', 289, 'boykap2.jpg'),
(22, 2, 9, 'Bota De Trabajo BoyKap', 'Sintetico', 'Varios', 330, 'boykap3.jpg'),
(23, 1, 9, 'Botín Casual ByCasino', 'Sintetico', 'Varios', 186, 'bycasino.jpg'),
(24, 2, 9, 'Bota De Trabajo Casco De Acero', 'Piel', 'Varios', 331, 'bycasino2.jpg'),
(25, 1, 9, 'Bota Felipe Meza', 'Sintetico', 'Varios', 307, 'felipemeza.jpg'),
(26, 5, 9, 'Botín Fimer', 'Sintetico', 'Varios', 269, 'fimer.jpg'),
(27, 1, 9, 'Botin Guzbardy', 'Felpa', 'Varios', 226, 'guzbardy.jpg'),
(28, 5, 9, 'Botín Infantil Hemi', 'Sintetico', 'Varios', 140, 'hemi.jpg'),
(29, 1, 9, 'Botin Hs', 'Sintetico', 'Varios', 200, 'hs2.jpg'),
(30, 1, 9, 'Botín Lady Bonita', 'Sintetico', 'Varios', 219, 'ladybonita.jpg'),
(31, 2, 7, 'Zapato Casual Albert', 'Sintetico', 'Varios', 209, 'albert.jpg'),
(32, 2, 7, 'Zapato Casual Albert', 'Sintetico', 'Negro', 195, 'albert2.jpg'),
(33, 1, 9, 'Bota Para LLuvia', 'Hule', 'Varios', 175, 'bota4.jpg'),
(34, 2, 9, 'Bota De Trabajo Lomar', 'Durazno', 'Varios', 255, 'bota5.jpg'),
(35, 2, 7, 'Botin De Vestir Caballero', 'Piel', 'Negro', 299, 'bota-c.jpg'),
(36, 4, 8, 'Tenis Infantil Buker', 'Sintetico', 'Varios', 172, 'buker.jpg'),
(37, 3, 8, 'Tenis Casual Juvenil Buker', 'Sintetico', 'Varios', 184, 'buker-juvenil.jpg'),
(38, 2, 7, 'Zapato Casual Dandy', 'Sintetico', 'Varios', 209, 'dandy2.jpg'),
(39, 3, 8, 'Tenis Casual Eddrus', 'Sintetico', 'Varios', 198, 'eddrus.jpg'),
(40, 1, 8, 'Tenis Deportivo Essvima', 'Sintetico', 'Varios', 248, 'essvima.jpg'),
(41, 3, 8, 'Tenis Deportivo Juvenil', 'Sintetico', 'Varios', 159, 'kingswin.jpg'),
(42, 1, 8, 'Tenis De Descanso Latino', 'Textil', 'Varios', 63, 'latino.jpg'),
(43, 2, 7, 'Zapato Casual Finelli', 'Piel', 'Varios', 249, 'leon.jpg'),
(44, 2, 7, 'Zapato Casual Leon', 'Piel', 'Café', 257, 'leon-casual.jpg'),
(45, 1, 8, 'Tenis De Moda Hs', 'Sintetico', 'Varios', 194, 'loger.jpg'),
(46, 2, 9, 'Bota De Trabajo Lomar', 'Durazno', 'Varios', 233, 'lomar.jpg'),
(47, 2, 9, 'Bota De Trabajo Lomar', 'Saratoga', 'Varios', 255, 'lomar2.jpg'),
(48, 2, 9, 'Bota De Casual Lomar', 'Saratoga', 'Varios', 255, 'lomar-casual.jpg'),
(49, 2, 9, 'Bota De Trabajo Lomar', 'Saratoga', 'Varios', 255, 'lomar-trabajo.jpg'),
(50, 2, 9, 'Bota De Trabajo Lomar', 'Saratoga', 'Varios', 255, 'lomar2.jpg'),
(51, 1, 8, 'Tenis Casual Juvenil Lopez', 'Sintetico', 'Varios', 142, 'lopez.jpg'),
(52, 1, 9, 'Botín Casual Dama', 'Durazno', 'Varios', 239, 'maricarmen.jpg'),
(53, 2, 7, 'Zapato Casual Naimad', 'Sintetico', 'Varios', 203, 'naimad.jpg'),
(54, 2, 7, 'Botín Casual Naimad', 'Charol', 'Varios', 249, 'naimad2.jpg'),
(55, 1, 8, 'Tenis De Descanso', 'Textil', 'Varios', 70, 'palma-dama.jpg'),
(56, 3, 8, 'Tenis Casual Reeven', 'Felpa', 'Varios', 159, 'revent.jpg'),
(57, 1, 8, 'Tenis Casual Sexy Pop', 'Varios', 'Varios', 149, 'sexypop.jpg'),
(58, 6, 8, 'Tenis Infantil Star', 'Picke', 'Varios', 196, 'star.jpg'),
(59, 6, 8, 'Tenis Star Infantil', 'Varios', 'Varios', 146, 'star17.jpg'),
(60, 6, 8, 'Tenis Casual Star', 'Sintetico', 'Varios', 98, 'star-bebe.jpg'),
(61, 6, 8, 'Tenis Casual Infantil', 'Sintetico', 'Varios', 117, 'star-bebeniña.jpg'),
(62, 6, 8, 'Tenis Casual', 'Sintetico', 'Varios', 136, 'star-niño.jpg'),
(63, 6, 8, 'Tenis Casual Para Niño', 'Sintetico', 'Varios', 139, 'star-niño18.jpg'),
(64, 3, 8, 'Tenis Casual Juvenil', 'Sintetico', 'Varios', 195, 'tenis.jpg'),
(65, 3, 8, 'Tenis Descanso Dpalma', 'Sintetico', 'Varios', 64, 'tenis2.jpg'),
(66, 6, 8, 'Tenis Casual Para Niña', 'Sintetico', 'Varios', 155, 'tenis3.jpg'),
(67, 3, 8, 'Tenis Dpalma', 'Sintetico', 'Varios', 63, 'tenis4.jpg'),
(68, 1, 8, 'Tenis Deportivo Dama', 'Sintetico', 'Varios', 224, 'tenis5.jpg'),
(69, 3, 8, 'Tenis Casual Dpalma', 'Brillos', 'Varios', 105, 'tenis6.jpg'),
(70, 6, 8, 'Tenis Escolar Infantil', 'Sintetico', 'Varios', 131, 'tenis7.jpg'),
(71, 3, 8, 'Tenis Casual Dolo', 'Sintetico', 'Varios', 189, 'tenis-dolo.jpg'),
(72, 3, 8, 'Tenis Tipo Converse', 'Sintetico', 'Varios', 89, 'tiba.jpg'),
(73, 3, 8, 'Tenis Deportivo Juvenil', 'Sintetico', 'Varios', 222, 'tiba-sport.jpg'),
(74, 3, 8, 'Tenis Deportivo Tobago', 'Sintetico', 'Varios', 226, 'tobago.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_linea`
--

CREATE TABLE `tipo_linea` (
  `Id_linea` int(11) NOT NULL,
  `Tipo_linea` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_linea`
--

INSERT INTO `tipo_linea` (`Id_linea`, `Tipo_linea`) VALUES
(1, 'Dama'),
(2, 'Caballero'),
(3, 'Juvenil'),
(4, 'Niños'),
(5, 'Niñas'),
(6, 'Infantil');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_producto`),
  ADD KEY `Id_categoria` (`Id_categoria`),
  ADD KEY `Id_linea` (`Id_linea`);

--
-- Indices de la tabla `tipo_linea`
--
ALTER TABLE `tipo_linea`
  ADD PRIMARY KEY (`Id_linea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `tipo_linea`
--
ALTER TABLE `tipo_linea`
  MODIFY `Id_linea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`Id_linea`) REFERENCES `tipo_linea` (`Id_linea`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
