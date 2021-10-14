-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2021 a las 20:55:02
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `articulos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `hour` varchar(50) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `title`, `description`, `date`, `hour`, `url`) VALUES
(2, 'Segundo Articulo', 'Este es mi segundo articulo en esta pagina web', '2021-04-25', '00:29:15', 'fotos/136681214_3718730851525779_3893701764541310722_n.jpg'),
(3, 'Extensiones para VScode', 'Aqui les enseño una lista de extensiones para VS code y asi incrementar la productividad', '2021-04-25', '00:42:15', 'fotos/139713852_130936758845688_5262602646805324688_o.jpg'),
(4, 'Frameworks', 'Estos son los frameworks mas populares en el mercado además que son de acceso gratuito para la comunidad', '2021-05-03', '17:03:21', 'fotos/173112526_3971235872941941_9129496534873730087_n.jpg'),
(5, 'IDE Python', 'Aquí le presentamos los mejores IDE para Python y así pueda aumentar su eficiencia al codificar con autocompletado inteligente', '2021-05-03', '21:53:59', 'fotos/148567478_3789913177740879_7490764776534728760_o.jpg'),
(6, 'Firebase', 'Este es uno de los mejores hosting para subir tus paginas gratuitamente', '2021-05-05', '14:26:00', 'fotos/166373528_217303746852558_3958369458731525270_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_articulo` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_articulo`, `id_usuario`, `nombre`, `comentario`, `url`, `fecha`, `hora`) VALUES
(2, 3, 15, 'Christian Ricardo', 'Que buen articulo, me parecio muy entretenido y educativo', NULL, '2021-05-13', '21:16:04'),
(3, 3, 15, 'Christian Ricardo', 'Que interesante articulo', NULL, '2021-05-13', '21:20:18'),
(4, 3, 15, 'Christian Ricardo', 'Que gran articulo', NULL, '2021-05-13', '21:33:18'),
(5, 3, 17, 'Juan Marcelo', 'Que buen articulo', NULL, '2021-05-13', '21:45:14'),
(6, 2, 15, 'Christian Ricardo', 'Que gran articulo', NULL, '2021-06-18', '02:49:38'),
(7, 3, 15, 'Christian Ricardo', 'Que gran articulo , cada dia mas me lleno de conocimiento', NULL, '2021-06-25', '00:02:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(700) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `edad`, `celular`, `email`, `password`, `rol`, `avatar`) VALUES
(15, 'Christian Ricardo', 'Aponte Gutierrez', 21, 918955118, 'cristhianprozqwerty@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'administrador', NULL),
(17, 'Juan Marcelo', 'Aliaga Perez', 25, 975548632, 'juanmar.96@gmail.com', 'ca4cbee5bc95b8f615379e1732db6288deeba6c0dc175d39d124aa7d0a530bc6c8340a04d17dbd94acc6dccc36c7712e55ef39e3168ad9fd97a95e5e6487b17a', 'usuario', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
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
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
