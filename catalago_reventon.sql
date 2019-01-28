-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2019 a las 19:35:11
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
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `Id_category` int(11) NOT NULL,
  `Nom_category` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`Id_category`, `Nom_category`) VALUES
(1, 'Zapatos'),
(2, 'Balerinas'),
(3, 'Tenis'),
(4, 'Botas'),
(5, 'Zapatillas'),
(6, 'Sandalias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_navbar`
--

CREATE TABLE `menu_navbar` (
  `Id_navbar` int(11) NOT NULL,
  `Nom_navbar` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `href` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `menu_navbar`
--

INSERT INTO `menu_navbar` (`Id_navbar`, `Nom_navbar`, `href`) VALUES
(1, 'Dama', 'dama.php'),
(2, 'Caballero', 'caballero.php'),
(3, 'Juvenil', 'juvenil.php'),
(4, 'Niñas', 'ninas.php'),
(5, 'Niños', 'ninos.php'),
(6, 'Infantil', 'infantil.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_producto` int(11) NOT NULL,
  `Id_nav` int(11) NOT NULL,
  `Nom_producto` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Acabado` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Precio` double NOT NULL,
  `Imagen` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_producto`, `Id_nav`, `Nom_producto`, `Acabado`, `Precio`, `Imagen`) VALUES
(1, 14, 'Bota Casual Lady Rossy', 'Sintetico', 225, 'bota.jpg'),
(2, 14, 'Bota Casual Fimer', 'Sintetico', 282, 'bota1.jpg'),
(3, 14, 'Botin Casual Cinthia', 'Sintetico', 289, 'bota2.jpg'),
(4, 44, 'Botita Para Niña Mi Bella', 'Felpa', 157, 'bota3.jpg'),
(5, 14, 'Bota Para Temporada de LLuvias', 'Hule', 175, 'bota.jpg'),
(6, 44, 'Bota Casual Lady Rossy', 'Sintetico', 225, 'bota.jpg'),
(7, 44, 'Bota Infantil Lady Rossy', 'Sintetico', 203, 'bota6.jpg'),
(8, 14, 'Bota Especial Para Lluvias', 'Hule', 175, 'botadehule.jpg'),
(9, 14, 'Bota Para Lluvias Gaby´s', 'Hule', 112, 'botagabis.jpg'),
(10, 44, 'Bota Leilani', 'Sintetico', 173, 'bota-nina.jpg'),
(11, 44, 'Botita Infantil Clasica', 'Sintetico', 278, 'bota-nina1.jpg'),
(12, 44, 'Botín Infantil Hs', 'Felpa', 197, 'botin.jpg'),
(13, 14, 'Botín Long Beach', 'Sintetico', 339, 'botin1.jpg'),
(14, 44, 'Botín Infantil Yazzinia', 'Felpa', 173, 'botin2.jpg'),
(15, 44, 'Botín Para Niña', 'Sintetico', 255, 'botin3.jpg'),
(16, 14, 'Botín Stop', 'Sintetico', 218, 'botin4.jpg'),
(17, 14, 'Botín Buke', 'Sintetico', 349, 'botin-buke.jpg'),
(18, 14, 'Botín Fimer', 'Sintetico', 282, 'botin-fimer.jpg'),
(19, 44, 'Botin Para Niña', 'Sintetico', 248, 'botin-nina.jpg'),
(20, 24, 'Bota De Trabajo BoyKap', 'Piel', 289, 'boykap.jpg'),
(21, 24, 'Bota De Trabajo BoyKap', 'Sintetico', 289, 'boykap2.jpg'),
(22, 24, 'Bota De Trabajo BoyKap', 'Sintetico', 330, 'boykap3.jpg'),
(23, 14, 'Botín Casual ByCasino', 'Sintetico', 186, 'bycasino.jpg'),
(24, 24, 'Bota De Trabajo Casco De Acero', 'Piel', 331, 'bycasino2.jpg'),
(25, 14, 'Bota Felipe Meza', 'Sintetico', 307, 'felipemeza.jpg'),
(26, 44, 'Botín Fimer', 'Sintetico', 269, 'fimer.jpg'),
(27, 14, 'Botin Guzbardy', 'Felpa', 226, 'guzbardy.jpg'),
(28, 44, 'Botín Infantil Hemi', 'Sintetico', 140, 'hemi.jpg'),
(29, 14, 'Botin Hs', 'Sintetico', 200, 'hs2.jpg'),
(30, 14, 'Botín Lady Bonita', 'Sintetico', 219, 'ladybonita.jpg'),
(31, 21, 'Zapato Casual Albert', 'Sintetico', 209, 'albert.jpg'),
(32, 21, 'Zapato Casual Albert', 'Sintetico', 195, 'albert2.jpg'),
(33, 14, 'Bota Para LLuvia', 'Hule', 175, 'bota4.jpg'),
(34, 24, 'Bota De Trabajo Lomar', 'Durazno', 255, 'bota5.jpg'),
(35, 21, 'Botin De Vestir Caballero', 'Piel', 299, 'bota-c.jpg'),
(36, 63, 'Tenis Infantil Buker', 'Sintetico', 172, 'buker.jpg'),
(37, 33, 'Tenis Casual Juvenil Buker', 'Sintetico', 184, 'buker-juvenil.jpg'),
(38, 21, 'Zapato Casual Dandy', 'Sintetico', 209, 'dandy2.jpg'),
(39, 33, 'Tenis Casual Eddrus', 'Sintetico', 198, 'eddrus.jpg'),
(40, 13, 'Tenis Deportivo Essvima', 'Sintetico', 248, 'essvima.jpg'),
(41, 33, 'Tenis Deportivo Juvenil', 'Sintetico', 159, 'kingswin.jpg'),
(42, 13, 'Tenis De Descanso Latino', 'Textil', 63, 'latino.jpg'),
(43, 21, 'Zapato Casual Finelli', 'Piel', 249, 'leon.jpg'),
(44, 21, 'Zapato Casual Leon', 'Piel', 257, 'leon-casual.jpg'),
(45, 13, 'Tenis De Moda Hs', 'Sintetico', 194, 'loger.jpg'),
(46, 24, 'Bota De Trabajo Lomar', 'Durazno', 233, 'lomar.jpg'),
(47, 24, 'Bota De Trabajo Lomar', 'Saratoga', 255, 'lomar2.jpg'),
(48, 24, 'Bota De Casual Lomar', 'Saratoga', 255, 'lomar-casual.jpg'),
(49, 24, 'Bota De Trabajo Lomar', 'Saratoga', 255, 'lomar-trabajo.jpg'),
(50, 24, 'Bota De Trabajo Lomar', 'Saratoga', 255, 'lomar2.jpg'),
(51, 13, 'Tenis Casual Juvenil Lopez', 'Sintetico', 142, 'lopez.jpg'),
(52, 14, 'Botín Casual Dama', 'Durazno', 239, 'maricarmen.jpg'),
(53, 21, 'Zapato Casual Naimad', 'Sintetico', 203, 'naimad.jpg'),
(54, 21, 'Botín Casual Naimad', 'Charol', 249, 'naimad2.jpg'),
(55, 13, 'Tenis De Descanso', 'Textil', 70, 'palma-dama.jpg'),
(56, 33, 'Tenis Casual Reeven', 'Felpa', 159, 'revent.jpg'),
(57, 13, 'Tenis Casual Sexy Pop', 'Sintetico', 149, 'sexypop.jpg'),
(58, 63, 'Tenis Infantil Star', 'Picke', 196, 'star.jpg'),
(59, 63, 'Tenis Star Infantil', 'Sintetico', 146, 'star17.jpg'),
(60, 63, 'Tenis Casual Star', 'Sintetico', 98, 'star-bebe.jpg'),
(61, 63, 'Tenis Casual Infantil', 'Sintetico', 117, 'star-bebenina.jpg'),
(62, 63, 'Tenis Casual', 'Sintetico', 136, 'star-nino.jpg'),
(63, 63, 'Tenis Casual Para Niño', 'Sintetico', 139, 'star-nino18.jpg'),
(64, 33, 'Tenis Casual Juvenil', 'Sintetico', 195, 'tenis.jpg'),
(65, 33, 'Tenis Descanso Dpalma', 'Sintetico', 64, 'tenis2.jpg'),
(66, 63, 'Tenis Casual Para Niña', 'Sintetico', 155, 'tenis3.jpg'),
(67, 33, 'Tenis Dpalma', 'Sintetico', 63, 'tenis4.jpg'),
(68, 13, 'Tenis Deportivo Dama', 'Sintetico', 224, 'tenis5.jpg'),
(69, 33, 'Tenis Casual Dpalma', 'Brillos', 105, 'tenis6.jpg'),
(70, 63, 'Tenis Escolar Infantil', 'Sintetico', 131, 'tenis7.jpg'),
(71, 33, 'Tenis Casual Dolo', 'Sintetico', 189, 'tenis-dolo.jpg'),
(72, 33, 'Tenis Tipo Converse', 'Sintetico', 89, 'tiba.jpg'),
(73, 33, 'Tenis Deportivo Juvenil', 'Sintetico', 222, 'tiba-sport.jpg'),
(74, 33, 'Tenis Deportivo Tobago', 'Sintetico', 226, 'tobago.jpg'),
(75, 14, 'Botín Fimer Casual', 'Sintetico', 250, 'fimer-04.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_nav`
--

CREATE TABLE `sub_nav` (
  `Id_nav` int(11) NOT NULL,
  `Parent_navbar` int(11) NOT NULL,
  `Id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `sub_nav`
--

INSERT INTO `sub_nav` (`Id_nav`, `Parent_navbar`, `Id_category`) VALUES
(12, 1, 2),
(13, 1, 3),
(14, 1, 4),
(15, 1, 5),
(16, 1, 6),
(21, 2, 1),
(23, 2, 3),
(24, 2, 4),
(26, 2, 6),
(31, 3, 1),
(32, 3, 2),
(33, 3, 3),
(34, 3, 4),
(35, 3, 5),
(36, 3, 6),
(42, 4, 2),
(43, 4, 3),
(44, 4, 4),
(45, 4, 5),
(46, 4, 6),
(51, 5, 1),
(53, 5, 3),
(54, 5, 4),
(56, 5, 6),
(61, 6, 1),
(62, 6, 2),
(63, 6, 3),
(64, 6, 4),
(65, 6, 5),
(66, 6, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id_category`);

--
-- Indices de la tabla `menu_navbar`
--
ALTER TABLE `menu_navbar`
  ADD PRIMARY KEY (`Id_navbar`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_producto`),
  ADD KEY `Id_nav` (`Id_nav`);

--
-- Indices de la tabla `sub_nav`
--
ALTER TABLE `sub_nav`
  ADD PRIMARY KEY (`Id_nav`),
  ADD KEY `Parent_navbar` (`Parent_navbar`),
  ADD KEY `Id_category` (`Id_category`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `Id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `menu_navbar`
--
ALTER TABLE `menu_navbar`
  MODIFY `Id_navbar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Id_nav`) REFERENCES `sub_nav` (`Id_nav`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sub_nav`
--
ALTER TABLE `sub_nav`
  ADD CONSTRAINT `sub_nav_ibfk_1` FOREIGN KEY (`Parent_navbar`) REFERENCES `menu_navbar` (`Id_navbar`),
  ADD CONSTRAINT `sub_nav_ibfk_2` FOREIGN KEY (`Id_category`) REFERENCES `categories` (`Id_category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
