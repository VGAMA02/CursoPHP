-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2021 a las 05:55:23
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

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
-- Estructura de tabla para la tabla `articuloslocales`
--

CREATE TABLE `articuloslocales` (
  `id` int(11) NOT NULL,
  `articulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articuloslocales`
--

INSERT INTO `articuloslocales` (`id`, `articulo`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et iaculis nisl, et tempor ligula. Aliquam id justo augue. Phasellus ut maximus dolor'),
(2, 'ut luctus neque. Proin feugiat, nibh consequat iaculis venenatis, leo lectus auctor dui, non eleifend nisi lorem a nunc. Aenean nec consectetur dui. Sed pretium, lacus eget pretium dictum, ante odio dignissim ipsum, at dignissim nibh erat ut sapien. Nullam condimentum erat ac elit mollis'),
(3, 'consequat. Suspendisse convallis scelerisque arcu, ac mollis sem imperdiet sit amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque tristique diam eu feugiat egestas. Nulla sit amet imperdiet diam, semper volutpat dui. '),
(4, 'Nullam odio justo, commodo eget facilisis non, varius ac nisi. Maecenas vitae diam auctor sem suscipit pellentesque eu a erat. Maecenas pretium nisi vel lacus gravida pharetra. Suspendisse facilisis orci ipsum, non commodo tortor dictum ut. Sed sed dolor in purus scelerisque posuere.'),
(5, 'Nullam sed tincidunt odio, id rutrum tellus. Nunc accumsan ipsum non mauris ullamcorper consectetur. In rhoncus lorem ut mi condimentum, et mollis dolor consectetur.'),
(6, 'Nam at sem urna. Maecenas gravida eros eget lacus varius sodales. Curabitur et lorem non neque molestie ullamcorper vel a mauris. Cras dignissim ipsum euismod elit accumsan, non blandit odio aliquet.'),
(7, 'Donec vel efficitur nibh. In non mauris eget felis feugiat semper. Aenean facilisis nulla at pellentesque semper. Pellentesque velit massa, mattis eget aliquet non, accumsan a elit. '),
(8, ' Etiam molestie mauris id commodo dapibus. Nulla sed nulla non lectus fermentum tempor. Pellentesque vitae justo vel odio pharetra finibus'),
(9, 'Duis enim mauris, rhoncus quis dolor vel, facilisis commodo massa. Interdum et malesuada fames ac ante ipsum primis in faucibus.'),
(10, 'Fusce sodales risus est, nec rhoncus mauris laoreet at. Proin ac mattis tellus. Aenean at ipsum eu orci sagittis egestas. Quisque id nulla in nibh ornare blandit suscipit a ligula.'),
(11, 'Vivamus magna enim, placerat et accumsan a, pharetra ac nunc. Nam ac tempus felis. Praesent vel congue purus. Fusce leo nulla, sodales et luctus vel, finibus ut neque. Duis semper, erat at convallis suscipit, nisi nisl sodales metus, vel porta justo turpis in est. Etiam eget tempus leo. Morbi ut lacinia mauris.'),
(12, 'Nulla ipsum sapien, bibendum in nibh ac, lacinia dictum orci. Donec a nisl luctus, aliquet dolor non, tempus lacus. Vivamus quis massa tellus. Maecenas porta massa in accumsan tristique. Fusce nec finibus lacus. In semper vulputate nisl, ut dictum tellus semper sit amet. Donec non lacinia mauris. Vestibulum mollis vehicula ante, eget lobortis odio rhoncus sed.'),
(13, 'Curabitur quam orci, rhoncus nec eros id, placerat placerat turpis. '),
(14, 'Proin tincidunt mattis sem a vestibulum. Aliquam erat volutpat. Mauris semper posuere ligula, id iaculis dui dignissim nec. Nunc quam magna, porta a ligula nec, ultricies volutpat risus. Nam at urna velit. Nulla ut placerat eros.'),
(15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et iaculis nisl, et tempor ligula. Aliquam id justo augue. Phasellus ut maximus dolor, ut luctus neque. Proin feugiat, nibh consequat iaculis venenatis, leo lectus auctor dui, non eleifend nisi lorem a nunc. Aenean nec consectetur dui. Sed pretium, lacus eget pretium dictum, ante odio dignissim ipsum, at dignissim nibh erat ut sapien.'),
(16, 'Nullam condimentum erat ac elit mollis consequat. Suspendisse convallis scelerisque arcu, ac mollis sem imperdiet sit amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque tristique diam eu feugiat egestas. Nulla sit amet imperdiet diam, semper volutpat dui. Nullam odio justo, commodo eget facilisis non, varius ac nisi. Maecenas vitae diam auctor sem suscipit pellentesque eu a erat. Maecenas pretium nisi vel lacus gravida pharetra. Suspendisse facilisis orci ipsum, non commodo tortor dictum ut. Sed sed dolor in purus scelerisque posuere.'),
(17, 'Nullam sed tincidunt odio, id rutrum tellus. Nunc accumsan ipsum non mauris ullamcorper consectetur. In rhoncus lorem ut mi condimentum, et mollis dolor consectetur. Nam at sem urna. Maecenas gravida eros eget lacus varius sodales. Curabitur et lorem non neque molestie ullamcorper vel a mauris. Cras dignissim ipsum euismod elit accumsan, non blandit odio aliquet.'),
(18, 'Donec vel efficitur nibh. In non mauris eget felis feugiat semper. Aenean facilisis nulla at pellentesque semper. Pellentesque velit massa, mattis eget aliquet non, accumsan a elit.'),
(19, 'Etiam molestie mauris id commodo dapibus. Nulla sed nulla non lectus fermentum tempor. Pellentesque vitae justo vel odio pharetra finibus.'),
(20, ' Duis enim mauris, rhoncus quis dolor vel, facilisis commodo massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sodales risus est, nec rhoncus mauris laoreet at. Proin ac mattis tellus. Aenean at ipsum eu orci sagittis egestas. Quisque id nulla in nibh ornare blandit suscipit a ligula.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articuloslocales`
--
ALTER TABLE `articuloslocales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articuloslocales`
--
ALTER TABLE `articuloslocales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
