-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2021 a las 05:57:36
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
-- Base de datos: `curso_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `extracto` varchar(300) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `texto` text NOT NULL,
  `thumb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
(1, 'Titulo del Primer Articulo HD: CÑORA!', 'miles de eones han pasado y ha ningun lugar he llegado.', '2020-08-25 05:00:08', 'no lo permitas davis...', 'veemon pixel art gif 3.gif'),
(2, 'Titulo del segundo Articulo: LA GDL SE MAMO', 'Voladores de Papantla son descubiertos infraganti en media punsada.', '2020-08-26 02:44:34', 'PAN, COMETE UN PAN!\r\n\r\nSi llego a presentar esto como un trabajo real o portafolio y olvido cambiar esto solo quiero decir que los titulos son así por la cuarentena, tengan piedad. ', '00 GDL.jpg'),
(4, 'Titulo del tercer articulo: Comila shinaaaaaaa!', 'LLEVE SU COMILA SHINA SHE PTO. ', '2020-08-07 03:37:36', 'ok creo que de verdad estoy en un punto donde quiero hacer esto pero a su vez no tomarmelo en serio, como quiera no creo estar vivo para el momento en que tenga que presentar un portafolio de trabajos :3', '0china.png'),
(5, 'Titulo del cuarto articulo: Carrito mete nitro hasta adentro', 'sinceramente ya no se que tonteria poner. ', '2020-08-07 03:40:35', 'Si me ves, bésame\r\nHazme un sitio entre tu piel\r\nVoy buscando alguna voz en mí\r\nQue me ayude bien a discernir\r\nPues mi mente es un vestido que\r\nMe queda mal\r\n¿Cuál ha sido, dónde está el error?\r\n¿Quién me ha condenado al terror\r\nDe una mente en blanco y negro?\r\n¿Dónde está mi lugar?\r\nNo soy como los demás\r\nYo sé pensar\r\nEstoy solo y tengo miedo\r\nSi me ves, bésame\r\nHazme un sitio entre tu piel\r\nQue los rasgos de mi cara\r\nNo te impidan ver mi ser\r\nSentirás que mi amor\r\nTiene sed de que una voz\r\nMe susurre una caricia\r\nO me regale una ilusión\r\nDame mimos, dame tu calor\r\nTe los devolveré en forma de flor\r\nRecibirás por cien, multiplicado\r\nLo que me des\r\nSi me apartas, no me integraré\r\nSi me abandonas, yo me perderé\r\nEl rechazo es mi condena\r\n¿Dónde está, mi libertad?\r\nBuscaré un futuro para mí\r\nMe va a…', 'zyppy 0.png'),
(6, 'Joven lobo decide abandonar sus deberes academicos porque se enculo de una coneja', 'Dibujar furros no te hace furro', '2020-08-26 02:50:49', 'bbb\r\n\r\nbbb', 'lego.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
