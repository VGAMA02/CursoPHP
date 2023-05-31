-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2021 a las 05:56:03
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
-- Base de datos: `galeria_practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `imagen`, `texto`) VALUES
(1, 'un camote', '109685058_3267108650021267_6041965409500416513_n.jpg', 'las ganozas buena edicion :3'),
(2, 'flamedramon Hd', 'flame.jpg', 'Flcl'),
(3, 'legoshi Hd', 'legoshi.jpg', 'flcl'),
(4, 'life', 'life.jpg', '<3'),
(5, 'life1', 'life1.jpg', '<3'),
(6, 'lobo', 'lobo.jpg', 'flcl'),
(7, 'megaman x', 'mega.jpg', 'mecha'),
(8, 'Natsu', 'natsu.jpg', 'Dragon Slayer'),
(9, 'GDL', '00 GDL.jpg', 'POS F'),
(10, 'Happy', '0-Animacion-de-happy-base.gif', 'a ver si esto sale como imagen'),
(11, 'China Chinosa', '0china.png', 'bomnito'),
(12, 'CDMX', '1 CDMX.png', 'BAIA BAIA'),
(13, 'Lesh', 'A2.png', 'un furro conbinacion HD'),
(14, 'niko base', 'base.png', 'esta madre existe'),
(15, 'HD MONO', 'IMG-20200501-WA0017.jpg', 'MONO'),
(16, 'Juno ', 'juno.jpg', 'flcl'),
(17, 'La zorra que hay en mi', 'la zorra que hay en mi.jpg', ':#'),
(18, 'legoshi 2 acuarela', 'legoshi2.jpg', 'lobo acuareloso flcl'),
(19, 'Mount and blame', 'MOUNT AND BLAME.jpg', 'chaleshion'),
(20, 'Natsu negativo', 'Natsu negativo.jpg', 'lol'),
(21, 'otro bato', 'otro wey 0.png', 'otro gato'),
(22, 'OvniMarko', 'ovniMarko.png', 'chidori'),
(23, 'Pandemia Rosa', 'Pandemia rosa.jpg', 'lol'),
(24, 'El Princeso', 'princeso.jpg', 'El princeso x2'),
(25, 'marko primer diseño', 'received_1603426023087212.jpeg', 'Pernaje creado para el maga'),
(26, 'SANIC 2', 'sonic casino fin.png', 'BUENA IMAGEN'),
(27, 'Veemon observado al infinito :v', 'veemon pixel art gif 3.gif', 'F wruande'),
(28, 'V chale', 'V-V.png', 'lel'),
(29, 'Whisper Recortes', 'WHISPER1-1.jpg', 'boomnito.'),
(30, 'Whisper & tangle', 'whisp-tang-DIGIT.jpg', 'muy boomnito'),
(31, 'la fosa de la discordia', 'yolo2.png', 'a ver o-o'),
(32, 'zyppy', 'zyppy 0.png', 'rocket league');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
