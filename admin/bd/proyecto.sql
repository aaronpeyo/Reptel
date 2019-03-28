-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2019 a las 05:07:51
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(20) NOT NULL,
  `nombreCategoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombreCategoria`, `descripcion`) VALUES
(1, 'Micas', 'todo tipo de micas'),
(3, 'Audifonos', 'todo tipo de audifonos de diversas marcas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idComentario`, `email`, `mensaje`, `fecha`, `status`) VALUES
(12, 'eberemanuel88@gmail.com', 'calele compa', '22/02/2019', 1),
(10, 'priv4tebot01@gmail.com', 'jtghxchgc', '22/02/2019', 1),
(13, 'goku@gmail.com', ',khv,hjv,hv.jbkjb', '22/02/2019', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idContacto` int(100) NOT NULL,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE ucs2_spanish_ci NOT NULL,
  `numero` varchar(13) COLLATE ucs2_spanish_ci NOT NULL,
  `mensaje` varchar(200) COLLATE ucs2_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idContacto`, `nombre`, `email`, `numero`, `mensaje`) VALUES
(7, 'Admin', 'admin@admin.com', '4567544', 'Hola mundo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faq`
--

CREATE TABLE `faq` (
  `idFaq` int(11) NOT NULL,
  `pregunta` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `respuesta` varchar(300) COLLATE ucs2_spanish_ci NOT NULL,
  `fecha` varchar(11) COLLATE ucs2_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `faq`
--

INSERT INTO `faq` (`idFaq`, `pregunta`, `respuesta`, `fecha`) VALUES
(4, 'Hola mundo?', 'Hola admin', '28/02/2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombreProducto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `idCategoria`, `url`, `nombreProducto`, `precio`, `stock`, `descripcion`) VALUES
(19, 0, 'uploads/descarga (1).jfif', 'Audifonos', 100, 2, 'todo tipo de audifonos de diversas marcas'),
(18, 0, 'uploads/FB_IMG_1472846175077.jpg', 'lol', 100, 4, 'todo tipo de audifonos de diversas marcas'),
(20, 0, 'uploads/descarga.jfif', 'Audifonos', 100, 2, 'todo tipo de audifonos de diversas marcas'),
(21, 0, 'uploads/images.jfif', 'Audifonos', 100, 4, 'todo tipo de audifonos de diversas marcas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1',
  `privilegios` tinyint(4) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `email`, `password`, `estatus`, `privilegios`) VALUES
(19, 'admin@admin.com', '123', 1, 1),
(33, 'jennival209@gmail.com', '12345', 1, 1),
(34, 'goku@gmail.com', '123', 1, 3),
(35, 'priv4tebot01@gmail.com', '12345', 1, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idContacto`);

--
-- Indices de la tabla `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`idFaq`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idCategoria_2` (`idCategoria`),
  ADD KEY `idCategoria_3` (`idCategoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `faq`
--
ALTER TABLE `faq`
  MODIFY `idFaq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
