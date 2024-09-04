-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-08-2024 a las 13:00:15
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ghxumdmy_neonhouselednew`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `servicio` varchar(250) DEFAULT NULL,
  `numero` varchar(9) DEFAULT NULL,
  `mensaje` text,
  `emailMarck` varchar(10) DEFAULT NULL,
  `new` varchar(10) DEFAULT NULL,
  `production` varchar(10) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_hora_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactanos`
--

INSERT INTO `contactanos` (`id`, `nombre`, `email`, `servicio`, `numero`, `mensaje`, `emailMarck`, `new`, `production`, `estado`, `fecha_hora`, `fecha_hora_actualizacion`) VALUES
(172, 'Kado12', 'gonzalosh01@gmail.com', 'Desing y desarrollo web', '912151197', 'prueba', 'no', 'no', 'no', '1', '2024-06-24 16:21:04', '2024-06-26 16:46:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idcliente` int(2) NOT NULL,
  `image` varchar(150) NOT NULL,
  `imgstatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `descripcion`, `idcliente`, `image`, `imgstatus`) VALUES
(275, 'polleria', 15, '92024030803RENDER 3.png', 1),
(276, 'polleria', 15, '872024030803RENDER 4.png', 1),
(277, 'polleria', 15, '322024030803RENDER 5.png', 1),
(278, 'polleria', 15, '312024030803RENDER 6.png', 1),
(279, 'polleria', 15, '462024030803RENDER 7.png', 1),
(280, 'polleria', 15, '872024030803RENDER 8.png', 1),
(281, 'polleria', 15, '382024030803RENDER 9.png', 1),
(282, 'polleria', 15, '642024030803RENDER 1.png', 1),
(283, 'polleria', 15, '132024030803RENDER 2.png', 1),
(284, 'polleria', 15, '452024030804render  1.png', 1),
(285, 'polleria', 15, '592024030804render 2.png', 1),
(286, 'polleria', 15, '632024030804render 5.png', 1),
(287, 'polleria', 15, '472024030804render 6.png', 1),
(288, 'polleria', 15, '852024030804render 3.png', 1),
(289, 'polleria', 15, '232024030804render 4.png', 1),
(290, 'polleria', 15, '552024030804render 88.png', 1),
(291, 'polleria', 15, '592024030804render 7.png', 1),
(292, 'polleria', 15, '02024030804R1.jpg', 1),
(293, 'polleria', 15, '552024030804R2.jpg', 1),
(294, 'polleria', 15, '672024030804R3.jpg', 1),
(295, 'polleria', 15, '352024030804R4.jpg', 1),
(296, 'polleria', 15, '742024030804R5.jpg', 1),
(297, 'polleria', 15, '572024030804R6.jpg', 1),
(298, 'polleria', 15, '3620240308041.jpg', 1),
(299, 'polleria', 15, '9920240308042.jpg', 1),
(300, 'polleria', 15, '4520240308043.jpg', 1),
(301, 'polleria', 15, '9120240308044.jpg', 1),
(302, 'polleria', 15, '5320240308045.jpg', 1),
(303, 'polleria', 15, '6820240308046.jpg', 1),
(304, 'polleria', 15, '9820240308047.jpg', 1),
(305, 'polleria', 15, '7920240308048.jpg', 1),
(306, 'polleria', 15, '2220240308049.jpg', 1),
(307, 'polleria', 15, '53202403080410.jpg', 1),
(308, 'polleria', 15, '44202403080411.jpg', 1),
(309, 'polleria', 15, '75202403080412.jpg', 1),
(310, 'polleria', 15, '19202403080413.jpg', 1),
(311, 'polleria', 15, '16202403080414.jpg', 1),
(312, 'polleria', 15, '95202403080415.jpg', 1),
(313, 'polleria', 15, '24202403080416.jpg', 1),
(314, 'polleria', 15, '42202403080417.jpg', 1),
(315, 'polleria', 15, '23202403080418.jpg', 1),
(316, 'polleria', 15, '502024030804RENDER 1.png', 1),
(317, 'polleria', 15, '962024030804RENDER 2.png', 1),
(318, 'polleria', 15, '252024030804RENDER 5.png', 1),
(319, 'polleria', 15, '442024030804RENDER 6.png', 1),
(320, 'polleria', 15, '132024030804RENDER 3.png', 1),
(321, 'polleria', 15, '542024030804RENDER 4.png', 1),
(322, 'polleria', 15, '792024030804RENDER 7.png', 1),
(323, 'AJI', 16, '882024031908FACHADA.png', 1),
(324, 'AJI', 16, '392024031908RENDER 1.png', 1),
(325, 'AJI', 16, '772024031908RENDER 2.png', 1),
(326, 'AJI', 16, '382024031908RENDER 3.png', 1),
(327, 'AJI', 16, '782024031908RENDER 4.png', 1),
(328, 'AJI', 16, '212024031908RENDER 5.png', 1),
(329, 'AJI', 16, '322024031908RENDER 6.png', 1),
(330, 'AJI', 16, '412024031908RENDER 7.png', 1),
(331, 'AJI', 16, '762024031908RENDER 8.png', 1),
(332, 'AJI', 16, '872024031908RENDER 9.png', 1),
(333, 'AJI', 16, '952024031908FACHADA AL.jpg', 1),
(334, 'AJI', 16, '762024031908Render 1 AL.png', 1),
(335, 'AJI', 16, '642024031908Render 2 AL.png', 1),
(336, 'AJI', 16, '842024031908Render 3 AL.jpg', 1),
(337, 'AJI', 16, '212024031908Render 4 AL.jpg', 1),
(338, 'AJI', 16, '562024031908Render 5 AL.jpg', 1),
(339, 'AJI', 16, '442024031908Render 6 AL.jpg', 1),
(340, 'AJI', 16, '942024031908Render 7 AL.jpg', 1),
(341, 'AJI', 16, '422024031909render 1.png', 1),
(342, 'AJI', 16, '982024031909render 2.png', 1),
(343, 'AJI', 16, '922024031909render 3.png', 1),
(344, 'AJI', 16, '392024031909render 4.png', 1),
(345, 'AJI', 16, '352024031909render 5.jpg', 1),
(346, 'AJI', 16, '712024031909render 6.png', 1),
(347, 'AJI', 16, '892024031909render 7.jpg', 1),
(348, 'AJI', 16, '572024031909render 8.jpg', 1),
(349, 'AJI', 16, '332024031909render 9.jpg', 1),
(350, 'AJI', 16, '652024031909render 10.jpg', 1),
(351, 'AJI', 16, '902024031909render 11.jpg', 1),
(352, 'AJI', 16, '122024031909FACHADA.png', 1),
(353, 'AJI', 16, '772024031909RENDER 1.png', 1),
(354, 'AJI', 16, '772024031909RENDER 2.png', 1),
(355, 'AJI', 16, '892024031909RENDER 3.png', 1),
(356, 'AJI', 16, '342024031909RENDER 4.png', 1),
(357, 'AJI', 16, '592024031909RENDER 5.png', 1),
(358, 'AJI', 16, '852024031909RENDER 6.png', 1),
(359, 'AJI', 16, '12024031909RENDER 7.png', 1),
(360, 'AJI', 16, '782024031909RENDER 8.png', 1),
(361, 'AJI', 16, '212024031909RENDER 9.png', 1),
(362, 'AJI', 16, '992024031909RENDER 10.png', 1),
(363, 'AJI', 16, '492024031909FACHADA.jpg', 1),
(364, 'AJI', 16, '672024031909R1.jpg', 1),
(365, 'AJI', 16, '832024031909R2.jpg', 1),
(366, 'AJI', 16, '772024031909R3.png', 1),
(367, 'AJI', 16, '672024031909R4.jpg', 1),
(368, 'AJI', 16, '182024031909R5.jpg', 1),
(369, 'AJI', 16, '272024031909R6.jpg', 1),
(370, 'AJI', 16, '82024031909FACHADA1.png', 1),
(371, 'AJI', 16, '642024031909PANORAMICO 1.1.jpg', 1),
(372, 'AJI', 16, '512024031909PANORAMICO 2 (1).jpg', 1),
(373, 'AJI', 16, '772024031909RENDER 1.png', 1),
(374, 'AJI', 16, '342024031909RENDER 2.png', 1),
(375, 'edith', 17, '1920240410191-6.png', 1),
(376, 'edith', 17, '620240410192-6.png', 1),
(377, 'edith', 17, '2520240410193-6.png', 1),
(378, 'edith', 17, '8420240410194-6.png', 1),
(379, 'edith', 17, '520240410195-6.png', 1),
(380, 'edith', 17, '8620240410196-6.png', 1),
(381, 'edith', 17, '83202404102001.png', 1),
(382, 'edith', 17, '13202404102002.png', 1),
(383, 'edith', 17, '7202404102003.png', 1),
(384, 'edith', 17, '62202404102004.png', 1),
(385, 'edith', 17, '73202404102005.png', 1),
(386, 'edith', 17, '64202404102006.png', 1),
(387, 'edith', 17, '63202404102007.png', 1),
(388, 'edith', 17, '02024041020Fachada.png', 1),
(389, 'edith', 17, '41202404102001.png', 1),
(390, 'edith', 17, '60202404102002.png', 1),
(391, 'edith', 17, '40202404102003.png', 1),
(392, 'edith', 17, '64202404102004.png', 1),
(393, 'edith', 17, '38202404102005.png', 1),
(394, 'edith', 17, '16202404102006.png', 1),
(395, 'edith', 17, '482024041020Panorama 01.jpg', 1),
(396, 'edith', 17, '72024041020render 1 intervenido.png', 1),
(397, 'edith', 17, '572024041020Render 1.png', 1),
(398, 'edith', 17, '52024041020render 2 intervenido.png', 1),
(399, 'edith', 17, '772024041020render 2.png', 1),
(400, 'edith', 17, '242024041020render 3.png', 1),
(401, 'edith', 17, '672024041020render 4.png', 1),
(402, 'edith', 17, '452024041020render 5.png', 1),
(403, 'edith', 17, '792024041020render 6 fachada.png', 1),
(404, 'edith', 17, '702024041020render 360 - 1.png', 1),
(405, 'edith', 17, '932024041020render 360 - 2.jpg', 1),
(406, 'edith', 17, '352024041020Sin título-1.jpg', 1),
(407, 'edith', 17, '52024041020Sin título-2.jpg', 1),
(408, 'edith', 17, '932024041020render 1 J..jpg', 1),
(409, 'edith', 17, '422024041020render 2 J..jpg', 1),
(410, 'edith', 17, '422024041020render 3 J..jpg', 1),
(411, 'edith', 17, '712024041020render 5 J..jpg', 1),
(412, 'edith', 17, '202024041020render 6 J..jpg', 1),
(413, 'edith', 17, '662024041020render 360 J..jpg', 1),
(414, 'edith', 17, '182024041020render 1 intervenido.png', 1),
(415, 'edith', 17, '272024041020Render 1.png', 1),
(416, 'edith', 17, '952024041020render 2 intervenido.png', 1),
(417, 'edith', 17, '12024041020render 2.png', 1),
(418, 'edith', 17, '632024041020render 3.png', 1),
(419, 'edith', 17, '582024041020render 4.png', 1),
(420, 'edith', 17, '332024041020render 5.png', 1),
(421, 'edith', 17, '802024041020render 6 fachada.png', 1),
(422, 'edith', 17, '932024041020render 360 - 1.png', 1),
(423, 'edith', 17, '362024041020render 360 - 2.jpg', 1),
(424, 'edith', 17, '92024041020Sin título-1.jpg', 1),
(425, 'edith', 17, '142024041020Sin título-2.jpg', 1),
(426, 'edith', 17, '432024041020FACHADA.png', 1),
(427, 'edith', 17, '552024041020PANORAMICO 1.5.jpg', 1),
(428, 'edith', 17, '842024041020PANORAMICO 2 (1).jpg', 1),
(429, 'edith', 17, '312024041020RENDER 1.5.png', 1),
(430, 'edith', 17, '182024041020RENDER 2.png', 1),
(431, 'edith', 17, '802024041020RENDER 3.png', 1),
(432, 'edith', 17, '802024041020RENDER 4.png', 1),
(433, 'edith', 17, '622024041020RENDER 5.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libroreclamacion`
--

CREATE TABLE `libroreclamacion` (
  `idReclamacion` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `documento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numeroDocumento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `distrito` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tipoReclamo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `servicioContratado` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `reclamoPerson` varchar(1050) COLLATE utf8_unicode_ci NOT NULL,
  `checkReclamoForm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `aceptaPoliticaPrivacidad` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalbranding`
--

CREATE TABLE `modalbranding` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modaldesing`
--

CREATE TABLE `modaldesing` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modaldesing`
--

INSERT INTO `modaldesing` (`id`, `nombre`, `telefono`, `correo`) VALUES
(1, 'Daniela', 'Infantes', 'danielamij251@gmail.com'),
(2, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(3, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(4, 'Juan Carlos Molina ', 'Molina', 'tmlighting@hotmail.com'),
(5, 'johao', 'montoya', 'johaomontoya01@gmail.com'),
(6, 'johao', 'montoya', 'johaomontoya01@gmail.com'),
(7, 'johao', 'montoya', 'johaomontoya01@gmail.com'),
(8, 'Luis', 'Cáceres', 'luisjorgejorge1919@gmail.com'),
(9, 'Luis Jorge', 'Cáceres B', 'luisjorgejorge1919@gmail.com'),
(10, 'Branco Manuel', 'Arguedas ', 'bm.arguedasv@gmail.com'),
(11, 'Luis Jorge', 'Cáceres B', 'luisjorgejorge1919@gmail.com'),
(12, 'Juan', 'Jhon', 'juansuarezf16@gmail.com'),
(13, 'Juan carlos', 'Molina or', 'tmlighting@hotmail.com'),
(14, 'jennyfer Jesus ', 'Horna Vil', 'hornavillarjenni@gmail.com'),
(15, 'Nicolle', 'Lozano Sa', 'nicollels_18@hotmail.com'),
(16, 'Gabriela', 'Chinga Pa', 'gabychinga@gmail.com'),
(17, 'Zack', '970339137', 'axellaziness@gmail.com'),
(18, 'Antony Aranda', '970339137', 'axellaziness@gmail.com'),
(19, 'Antony Aranda', '970339137', 'axellaziness@gmail.com'),
(20, 'Zack', '970339137', 'axellaziness@gmail.com'),
(21, 'prueba', '940759137', 'taodrake01@gmail.com'),
(22, 'Antony Aranda', '970339137', 'axellaziness@gmail.com'),
(23, 'Nicolle Lozano', '993771339', 'nicollels_18@hotmail.com'),
(24, '123', '988777666', 'diegolevanososa@gmail.com'),
(25, 'Franco', '990269910', 'lopezurcia@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalgestion`
--

CREATE TABLE `modalgestion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modalgestion`
--

INSERT INTO `modalgestion` (`id`, `nombre`, `telefono`, `correo`) VALUES
(1, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(2, 'Daniela', 'Infantes', 'danielamij251@gmail.com'),
(3, 'sebastian', 'Cardenas', 'sebastian.clover.52@gmail.com'),
(4, 'asdadas', 'cardenas', 'taodrake01@gmail.com'),
(5, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(6, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(7, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(8, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(9, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(10, 'Antony Aranda', '970339137', 'axellaziness@gmail.com'),
(11, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(12, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(13, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(14, 'Daniela Michelle Infantes Juárez ', '999355516', 'danielamij251@gmail.com'),
(15, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(16, 'jennyfer Jesus ', '943004092', 'hornavillarjenni@gmail.com'),
(17, 'Jennyfer Jesus Horna Villar ', '943004092', 'jenny30052002@gmail.com'),
(18, 'Akiro', '987063652', 'akirothor@gmail.com'),
(19, 'Kado12', '912151197', 'gonzalosh01@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalmarketing`
--

CREATE TABLE `modalmarketing` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modalmarketing`
--

INSERT INTO `modalmarketing` (`id`, `nombre`, `telefono`, `correo`) VALUES
(1, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(2, 'Daniela', 'Infantes', 'undefined'),
(3, 'asdadas', 'cardenas', 'undefined'),
(4, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(5, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(6, 'asdadas', 'cardenas', 'undefined'),
(7, 'johao', 'montoya', 'undefined'),
(8, 'Antony', 'Aranda', 'undefined'),
(9, 'Nicolle', 'Lozano Sa', 'undefined'),
(10, 'pingui', '929177594', 'undefined'),
(11, 'prueba1', '940759137', 'undefined'),
(12, 'prueba1', '940759137', 'undefined'),
(13, 'Renzo', '956185681', 'undefined'),
(14, 'Franco', '990269910', 'lopezurcia@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personcamino5`
--

CREATE TABLE `personcamino5` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personcamino5`
--

INSERT INTO `personcamino5` (`id`, `nombre`, `email`, `telefono`) VALUES
(1, 'juka', 'yuntasproducciones@gmail.com', '912 849 782'),
(2, 'Daniela Infantes', 'danielamij251@gmail.com', '999 351 599'),
(3, 'carloss', 'informestami01@gmail.com', '978 883 199'),
(4, 'Juan carlos', 'yuntasproducciones@gmail.com', '912849782'),
(5, 'Daniela Infantes', 'danielamij251@gmail.com', '999 351 599'),
(6, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(7, 'sebastian', 'taodrake01@gmail.com', '940759137'),
(8, 'sebastian', 'taodrake01@gmail.com', '940759137'),
(9, 'sebastian', 'sebastian.clover.52@gmail.com', '940759137'),
(10, 'jennyfer Jesus ', 'hornavillarjenni@gmail.com', '943004092'),
(11, 'Antony Aranda', 'axellaziness@gmail.com', '970339137');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personcampañas3`
--

CREATE TABLE `personcampañas3` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personcampañas3`
--

INSERT INTO `personcampañas3` (`id`, `nombre`, `telefono`, `email`) VALUES
(1, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(2, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(3, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(4, 'Daniela Infantes', '999 351 599', 'danielamij251@gmail.com'),
(5, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(6, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(7, 'carloss', '936910425', 'ventasneonhouse@gmail.com'),
(8, 'Daniela Infantes', '999 351 599', 'danielamij251@gmail.com'),
(9, 'carloss', '912 849 782', 'yuntasproducciones@gmail.com'),
(10, 'Juan carlos', '912849782', 'yuntasproducciones@gmail.com'),
(11, 'Diego MF', '900265655', 'dmarquezf11@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persondigi1`
--

CREATE TABLE `persondigi1` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `service` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persondigi1`
--

INSERT INTO `persondigi1` (`id`, `nombre`, `telefono`, `email`, `service`) VALUES
(16, 'Antony Aranda', '970339137', '3456antony@gmail.com', '1'),
(17, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com', '0'),
(18, 'johao montoya', '910376683', 'johaomontoya01@gmail.com', '0'),
(19, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '1'),
(20, 'Daniela Infantes', '999355516', 'danielamij251@gmail.com', '1'),
(21, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(22, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(23, 'Gabriela Chinga Pastor', '991494279', 'gabychinga@gmail.com', '0'),
(24, 'Victor Miguel Granda Herrera', '966956176', 'grandahvictor@gmail.com', '0'),
(25, 'Victor Miguel Granda Herrera', '966956176', 'grandahvictor@gmail.com', '0'),
(26, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(27, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com', '0'),
(28, 'dikalz', '931805941', 'dikalzeeuu@gmail.com', '0'),
(29, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '1'),
(30, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(31, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(32, 'Gabriela Chinga Pastor', '991494279', 'gabychinga@gmail.com', '0'),
(33, 'Levanoi', '989898989', 'dikalzeeuu@gmail.com', '2'),
(34, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com', '0'),
(35, 'asds', '999888777', 'dikalzeeuu@gmail.com', '1'),
(37, 'Diaklz', '931805941', 'dikalz@gmail.com', 'Diseño y Desarrollo Web'),
(38, 'sdasd sadas ', '931805941', 'dikalzeeuu@gmail.com', 'Diseño y Desarrollo Web'),
(39, 'sdasd sadsa ', '994673564', '123@gmail.com', 'Diseño y Desarrollo Web'),
(40, 'sdasd', '931805941', 'asdsd@gmail.com', 'Gestión de Redes Sociales'),
(41, 'sadasd', '931805941', 'asdasd@gmail.com', 'Marketing y Gestión Digital'),
(42, '123', '931805941', 'diegolevanososa@gmail.com', 'Diseño y Desarrollo Web'),
(43, '123', '931805941', '123@gmail.com', 'Diseño y Desarrollo Web'),
(44, 'Ssndkska', '931805941', 'Ajjsa@gmail.com', 'Diseño y Desarrollo Web'),
(45, '2323', '931805941', '122@gmail.com', 'Diseño y Desarrollo Web'),
(46, '12112', '931805941', '123@gmail.com', 'Diseño y Desarrollo Web'),
(47, 'diego', '931805941', '123@gmail.com', 'Diseño y Desarrollo Web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personredes4`
--

CREATE TABLE `personredes4` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personredes4`
--

INSERT INTO `personredes4` (`id`, `nombre`, `telefono`, `email`) VALUES
(1, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(2, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(3, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(4, 'Daniela Infantes', '999351599', 'danielamij251@gmail.com'),
(5, 'Rosa Jhannis ', '936910425', 'ventasneonhouse@gmail.com'),
(6, 'Juan carlos', '936910425', 'yuntasproducciones@gmail.com'),
(7, 'juka', '978 883 199', 'informestami01@gmail.com'),
(8, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personweb2`
--

CREATE TABLE `personweb2` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personweb2`
--

INSERT INTO `personweb2` (`id`, `nombre`, `email`, `telefono`) VALUES
(4, 'Antony Aranda', 'axellaziness@gmail.com', '970339137'),
(5, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(6, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(7, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(8, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(9, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(10, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(11, 'Daniela', 'danielamij251@gmail.com', '999351599'),
(12, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(13, 'carloss', 'informestami01@gmail.com', '978 883 199'),
(14, 'Daniela Infantes', 'danielamij251@gmail.com', '999 351 599'),
(15, 'carloss', 'informestami01@gmail.com', '978 883 199'),
(16, 'Daniela Infantes', 'danielamij251@gmail.com', '999351599'),
(17, 'carloss', 'tmlighting@hotmail.com', '936910425'),
(18, 'Juan', 'dmarquezf11@gmail.com', '900265655'),
(19, 'johao montoya', 'kodabarbitas87@gmail.com', '910376683');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posting_blog`
--

CREATE TABLE `posting_blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `contenido` text,
  `link` text,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posting_blog`
--

INSERT INTO `posting_blog` (`id`, `titulo`, `contenido`, `link`, `fecha`) VALUES
(3, 'prueba', 'prueba uno', 'https://www.youtube.com/watch?v=oiKmwSV-CMM', '2024-06-23 18:04:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptor`
--

CREATE TABLE `suscriptor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `suscriptor`
--

INSERT INTO `suscriptor` (`id`, `nombre`, `telefono`, `correo`) VALUES
(1, 'juan ', '12345678', 'jperez@gmail.com'),
(2, 'Jorge Luis', '910105210', 'jLuis243@gmail.com'),
(3, 'Miguel', '123456789', 'miguel@example.com'),
(4, 'Miguel', '+51963255544', 'miguelespiritu1999@gmail.com'),
(5, 'MARILIN ', '930223106', 'marilinparedes16@gmail.com'),
(6, 'Anita ', '+56996304095', 'acontrerasvaldes@gmail.com'),
(7, 'jeffrey', '956845988', 'jeffrey.ost@gmail.com'),
(8, 'Luis', '123456789', 'jLuis@gmail.com'),
(9, 'Víctor ', '993934730', 'guillermoibarravictoralberto@gmail.com'),
(10, 'Daniel', '123456789', 'corbarda@gmail.com'),
(11, 'juan', '936910425', 'tmlighting@hotmail.com'),
(12, 'Jorge', '123456789', 'correo@gmail.com'),
(13, 'Fátima', '997976780', 'fatimatoche@gmail.com'),
(14, 'Zaida', '922576253', 'arq.zaidasoteloalmeyda@gmail.com'),
(15, 'Juan', '998313645', 'speruchito@gmail.com'),
(16, 'CLARIBEL', '993601022', 'tarazonaclaribel@gmail.com'),
(17, 'Miriam Curo', '999999999', 'miriam.curo@fusion.pe'),
(18, 'Alejandra', '967764756', 'lucerosanchezalejandra@gmail.com'),
(19, 'renzo', '955137451', 'sucasaire.1211@gmail.com'),
(20, 'Andrea', '946372831', 'andreacccarolina@gmail.com'),
(21, 'EDSON PAOLO', '970142663', 'paolo.rosas.97@hotmail.com'),
(22, 'Ricardo', '930705564', 'ricardo2006c@gmail.com'),
(23, 'Eduardo Rosadio', '994548099', 'erosadio@ajaxperu.com'),
(24, 'Yahaira Paz', '942143401', 'yahairapaz16@gmail.com'),
(25, 'Sajury', '989569641', 'sajuryvasti@gmail.com'),
(26, 'Daniel ', 'ssdsada', 'jMart@gmail.com'),
(27, 'José Carlos', '99884538', 'consorciogranaltura@gmail.com'),
(28, 'Jaime', '922987335', 'jaimegarciajgb@hotmail.com'),
(29, 'Araceli Velaochaga', '014220531', 'aracelivrm@gmail.com'),
(30, 'Andrea ', '933686720', 'esclividiabm@gmail.com'),
(31, 'stefany santoS', '984745640', 'stefany.santos.puma@gmail.com'),
(32, 'Soledad', '947804377', 'soletineo87@gmail.com'),
(33, 'Ruth ', '964252018', 'arteyestilos_melissa@hotmail.com'),
(34, 'Evelin ', '991673197', 'evelin_malen1@hotmail.com'),
(35, 'Henry Heresi Soto ', '59173773572', 'henryheresi@gmail.com'),
(36, 'Marco', '941122457', 'marconolascor@gmail.com'),
(37, 'Diana ', '0991787887', 'dianaburgos.services@gmail.com'),
(38, 'Zair', '958498455', 'zairbravovicente@gmail.com'),
(39, 'Prueba form categorías', '21321', 'david-aries-5@hotmail.com'),
(40, 'david Tello', '1232323', 'asdssd@xxc'),
(41, 'ANTONELLA', '978284510', 'Anto2528@gmail.com'),
(42, 'Piero', '989228136', 'piero_stll@hotmail.com'),
(43, 'ricardo bernuy', '953600611', 'ricki23431@gmail.com'),
(44, 'Claudia Ruiz ', '3153208231', 'claudiaruiz08@hotmail.com'),
(45, 'Roberto', '918492848', 'roberto_saga36@hotmail.com'),
(46, 'david', '970778989', 'atellovalqui@gmail.com'),
(47, 'Milagros ', '916404468', 'milagrosnarvaez44@gmail.com'),
(48, 'Roxana Patricia ', '981958115', 'patriciarivadfarfan@gmail.com'),
(49, 'Alex', '9212661608', 'alfa99940@gmail.com'),
(50, 'Gema', '0997982866', 'gelili1991@hotmail.com'),
(51, 'Leonardo', '93884893', 'irwinleonardo_9@hotmail.com'),
(52, 'Gilmar Pacahuala', '+51922052377', 'gilmarpa2000@gmail.com'),
(53, 'Jesus Fermin', '04129098769', 'ferminalejandro@gmail.com'),
(54, 'Nino', '925779428', 'nino.meza1@gmail.com'),
(55, 'Cidalia Merino', '902700618', 'lisamerinov@gmail.com'),
(56, 'Oscar', '3014182120', 'oscarandres.j8@gmail.com'),
(57, 'Jose alfredo', '921627643', 'alfredo.nima.herrera@gmail.com'),
(58, 'Gonzalo', '933703549', 'gmc4996@gmail.com'),
(59, 'Jamir', '997885651', 'jsullon31@gmail.com'),
(60, 'cynthia', '3313615359', 'pitufre637@gmail.com'),
(61, 'Emily ', '987273524', 'emiatq@gmail.com'),
(62, 'Alexander', '945371988', 'alequisperojas@gmail.com'),
(63, 'BRA', '945481609', 'brayanjohan97@gmail.com'),
(64, 'Christian ', '3023881274', 'coviedoforero@gmail.com'),
(65, 'Natalia ', '+573114413339', 'natyy410@gmail.com'),
(66, 'Miguel Ruben', '915984338', 'miguel.huamani.e@gmail.com'),
(67, 'Fuicer ', '922722012', 'procermaperu@gmail.com'),
(68, 'Ernesto Gerardo Ponce Apaza', '966377388', 'eponce@mef.gob.pe'),
(69, 'Oscar', '7025747097', 'oortegaparra@gmail.com'),
(70, 'Sandra Flores', '987195208', 'fantasy9614@gmail.com'),
(71, 'John', '68396557', 'micheljohn836@gmail.com'),
(72, 'Randa', '934062253', 'randall2tj@gmail.com'),
(73, 'soley ruiz', '984747263', 'kr46136@gmail.com'),
(74, 'Katherine ', '992299028', 'torres_katherine@hotmail.com'),
(75, 'Charli', '953922791', 'charmit2017@gmail.com'),
(76, 'Miluska', '902426445', 'Ambarmiluska1@gmail.com'),
(77, 'Paula', '627329938', 'paulaosorioavila210196@gmail.com'),
(78, 'Israel ', '0984449596', 'israel_tamayo087@hotmail.com'),
(79, 'Zoila', '922113125', 'zoila_1228@hotmail.com'),
(80, 'Cristhian ', '914393102', 'miriamtoledosuarez@gmail.com'),
(81, 'Milagros Xiomara ', '932341133', 'milagrosperezcano28@gmail.com'),
(82, 'Tiffany ', '982279972', 'tiffacazeneuve@gmail.com'),
(83, 'Patricia ', '962802989', 'patricia.esparza@pucp.pe'),
(84, 'Mariely Marín ', '0983125009', 'yleiram.marianna@gmail.com'),
(85, 'JANELY FIORELLA', '951168918', '1824110474@untels.edu.pe'),
(86, 'Dina Zapata', '949 922 696', 'importaciones@isotechperu.com'),
(87, 'Norcka Mercedes', '956000564', 'norckag@gmail.com'),
(88, 'Renzo', '949690810', 'renzo_19921@hotmail.com'),
(89, 'ggf', '123456789', 'abc@gmail.com'),
(90, 'renzo', '123456789', 'dc@gmail.com'),
(91, 'Diego Armando ', '952982406', 'bnegaskrranza@gmail.com'),
(92, 'Yessica', '936481452', 'yevile02.2002@gmail.com'),
(93, 'JORGE CACERES', '960649076', 'KOKYCACERES@GMAIL.COM'),
(94, 'fgdgf', '1234656789', 'rdgd@gmail.com'),
(95, 'luis', '970733170', 'felipe.rios@frproduccion.com'),
(96, 'tany', '994078320', 'neonhouseled@gmail.com'),
(97, 'Mishell Valenzuela', '996134298', 'mishiprincesa13@gmail.com'),
(98, 'Jose Diaz', '990996213', 'joseluisdiazlinares@gmail.com'),
(99, 'Oscar', '3175763009', 'oscarandres15@gmail.com'),
(100, 'brunela naomi', '981177302', 'bruneladelcastillocarpio@hotmail.com'),
(101, '123213', 'bcdef', '123213@dghdgdf'),
(102, 'Diego', '923402107', 'diego.1596.cp@gmail.com'),
(103, 'Elizabeth', '999465858', 'alaberian@inlearning.edu.pe'),
(104, 'ANGIE ', '923370033', 'aurrutia231@gmail.com'),
(105, 'Alvaro', '980791809', 'alvarob29@icloud.com'),
(106, 'Antonio ', '957708738', 'Thoooni_ripcurl@hotmail.com'),
(107, 'Edwin Rodriguez', '947660668', 'edwinhuerta@hotmail.com'),
(108, 'Gino ', '981426209', 'gino_bullon@hotmail.com'),
(109, 'Víctor ', '959189362', 'hostalmiskychurin@gmail.com'),
(110, 'Carol', '50317177', 'carolgonza2004@gmail.com'),
(111, 'camila', '998111420', 'cami.obre20@gmail.com'),
(112, 'maria cristina', '994856489', 'fernandez090699@gmail.com'),
(113, 'Flavia', '972010622', 'flaviavillafranca05@gmail.com'),
(114, 'diana lisbet', '957781719', 'liscarranza.h@gmail.com'),
(115, 'Brayan', '942667445', 'braky.acu.1023@gmail.com'),
(116, 'Diana', '0990293956', 'dianys_84@hotmail.com'),
(117, 'Bris', '966835182', 'brisafy.123@gmail.com'),
(118, 'Ronald', '671779280', 'r.leyyon.e@gmail.com'),
(119, 'maria', '910975784', 'maria_yucra_@hotmail.com'),
(120, 'Mónica Araceli', '3313660375', 'monyaracelync@gmail.com'),
(121, 'lilian', '99213884', 'ltm.matos@gmail.com'),
(122, 'KATHYA ', '947538088', 'kathya1205@gmail.com'),
(123, 'Alex', '984181985', 'alexbch28.91@gmail.com'),
(124, 'HP', '000000000', 'periwinkel1020@gmail.com'),
(125, 'Alison Bullón', '977139457', 'alisonbullon2607@gmail.com'),
(126, 'Candy ', '981364222', 'candyarana01@gmail.com'),
(127, 'GIANFRANCO ', '917994136', 'giangrj97@gmail.com'),
(128, 'Grace Requiz', '928077061', 'requizgrace97@gmail.com'),
(129, 'Robert', '944325666', 'ditocruzcruz@gmail.com'),
(130, 'Richard', '965260080', 'burgosrx@gmail.com'),
(131, 'Gustavo', '945920676', 'gustavohc_99@hotmail.com'),
(132, 'Javier', '939753081', 'jperez@envarmin.com.pe'),
(133, 'Martha Suarez', '910948491', 'marthag.suarezlama@gmail.com'),
(134, 'carlos', '939298142', 'perualsur@gmail.com'),
(135, 'Jazmin', '966533289', 'jazmin.navarro300@gmail.com'),
(136, 'martha', '973911888', 'cobisgenperu@gmail.com'),
(137, 'Milagros maricielo', '946686287', '71484113@certus.edu.pe'),
(138, 'vladimir', '956965321', 'vladimir.alvapar@gmail.com'),
(139, 'ener', '924731642', 'rolando_cont@hotmail.com'),
(140, 'Valeri', '99884433', 'jiminpk59@gmail.com'),
(141, 'yohana sanchez', '+51972051071', 'yohanamsg8@gmail.com'),
(142, 'Marina', '943 218 298', 'marina.avendano@students.markham.edu.pe'),
(143, 'Isabella ', '966145072', 'isabellam.montoya.im@gmail.com'),
(144, 'kimberly ', '69216016', 'kimberlytello08@hotmail.com'),
(145, 'Carlos Alberto Quispe Puga', '929413995', 'ingenium@outlook.jp'),
(146, 'Maria', '934841379', 'mafer10franco@gmail.com'),
(147, 'Angelo', '949036561', 'angelosalcedob@gmail.com'),
(148, 'Jhonnatan ', '3124235601', 'jhonatan.moreno@hotmail.com'),
(149, 'Carmen ', '987888503', 'carmenmunoz599@gmail.com'),
(150, '737383', '32323322', 'ueueusudj@gmail.com'),
(151, 'Galilea', '980251290', 'gsantacruz591@gmail.com'),
(152, 'shirley', '924302322', 'mmlshirley05@gmail.com'),
(153, 'Danett López ', '938643943', 'danettlopezpastor@gmail.com'),
(154, 'Darlyn Vela Ramírez', '978732893', 'dvelaramirez@gmail.com'),
(155, 'Silvia', '70531289', 'sildenvenegas@gmail.com'),
(156, 'Karin Alejandrina Gonzales Cruz ', '988348231', 'adonai888@hotmail.com'),
(157, 'Carla ', '0961123222', 'carla-orbeait@hotmail.com'),
(158, 'Jorge', '6642929006', 'jorge.a.gurrola@gmail.com'),
(159, 'Jesus Alberto', '954050439', 'jpalaciosmeron2018@yahoo.es'),
(160, 'Sara Odreman', '646678424', 'saraisabelaoc@gmail.com'),
(161, 'Eduviges ', '9212551168', 'edw81@me.con'),
(162, 'Teo', '925472528', 'cooltriniti.movil@gmail.com'),
(163, 'Robert Alexander', '944714973', 'reborn2318@gmail.com'),
(164, 'Gustavo Adrian ', '922005411', 'gustavoadrianpazos@gmail.com'),
(165, 'Carol', '928459305', 'carolrocca27@gmail.com'),
(166, 'america', '993494351', 'querebaluamerica@gmail.com'),
(167, 'Maximo', '937879684', 'maximoc1525@gmail.com'),
(168, 'Alexa', '930407848', 'ql.alexa@hotmail.com'),
(169, 'Miguel', '936218375', 'angelmiguel@outlook.com'),
(170, 'Lys chen', '992561659', 'lyschen123@gmail.com'),
(171, 'Flor ', '5532762826', 'altimadoom@gmail.com'),
(172, 'marcia azevedo', '55 83991360740', 'marciakk@hotmail.com'),
(173, 'Job', '962196222', 'jobz9396@gmail.com'),
(174, 'Nataly ', '+56954044349', 'hippita@gmail.com'),
(175, 'Lina', '3102595393', 'pripelima2012@gmail.com'),
(176, 'Alexis Javier', '914220366', 'aestefania.mg@gmail.com'),
(177, 'maylen', '75447830', 'maylencopa6@gmail.com'),
(178, 'Yessica', '995694039', 'yessica1462678@gmail.com'),
(179, 'Fernando', '993509691', 'fcapcha@gmail.com'),
(180, 'Ilda', '3234639049', 'olgapulidocu2@gmail.com'),
(181, 'Julio', '977627251', 'julio1998gv@gmail.com'),
(182, 'Abigail', '981255262', 'damanlo.3005@gmail.com'),
(183, 'Wilder jara montes', '983626479', 'wilder.jara@hotmail.com'),
(184, 'Noe', '956753197', 'huamanchumaceronoe4@gmail.com'),
(185, 'Patricia ', '672766267', 'Patrigarcia.23@gmail.com'),
(186, 'Dafna ', '923463468', 'dafna.10diaz@gmail.com'),
(187, 'Nicolas', '969228789', 'crisantogarciakarito@gmail.com'),
(188, 'Abel', '971704683', 'abeltv10@gmail.com'),
(189, 'Eddy Marcial', '994714115', 'elmoritoe@hotmail.com'),
(190, 'Wilder', '941164487', 'wilderbustamante2@gmail.com'),
(191, 'cristian camilo vergara', '319 2902697', 'cami97090605368@gmail.com'),
(192, 'sergio', '745812597', 'sergio10@gmail.com'),
(193, 'Jotaro', '979690187', 'gustavovizard@gmail.com'),
(194, 'adrian', '985784332', 'adrian0910@gmail.com'),
(195, 'yoddys', '993521105', 'PAVONYODDYS@GMAIL.COM'),
(196, 'Juan ', '+57 3107780472', 'alpinsheit2013@hotmail.com'),
(197, 'Daniel', '454544444', 'sasasa@gmail.com'),
(198, 'Jesús Omar', '999888777', 'octavio@gmail.com'),
(199, 'felipe', '999753756', 'baciliojuarezf@gmail.com'),
(200, 'Ángela ', '954251484', 'rebecavillajuan@gmail.com'),
(201, 'Gaurav', '7988229010', 'Ergauravsharma1000@gmail.com'),
(202, 'Jose', '946515623', 'dj-zeta@hotmail.com'),
(203, 'María Victoria', '+58 4127601218', 'mariavhm10@gmail.com'),
(204, 'Tamara ', '+56977654388', 'tamara.rivera@live.cl'),
(205, 'Daniel', '996107887', 'daniel.alegria110902@gmail.com'),
(206, 'Alonoso ', '9371815511', 'Alonsogranadillo6@gmail.com'),
(207, 'fredy', '995524981', 'alfredof2513@gmail.com'),
(208, 'Yessenia', '90274223', 'yesseniaposaico@gmail.com'),
(209, 'roberto', 'montoya', 'mocars15@gmail.com'),
(210, 'Luis', '959455969', 'luimarticorena@gmail.com'),
(211, 'Eloisse Montalban', '944893494', 'eloisse.2689@gmail.com'),
(212, 'Estefany ', '928579016', 'estefanyorequichca2021@gmail.com'),
(213, 'Aracelly', '965437382', 'aracellysamiria18@gmail.com'),
(214, 'Lorena Bardales ', '943398000', 'Lorebaraba@hotmail.com'),
(215, 'Ana Cristina ', '6673028794', 'martharodriguez070855@gmail.com'),
(216, 'ANDRES CACERES', '3213566417', 'CACERE_66@HOTMAIL.COM'),
(217, 'cielo', '969445007', 'pamela.venegas.francia@gmail.com'),
(218, 'dayana', '902464500', 'dayanabelen1105@gmail.com'),
(219, 'dayana', '+51902464500', 'dayana11051@hotmail.com'),
(220, 'Claudia', '903091864', 'valeramedinaclaudiapatricia@gmail.com'),
(221, 'enrique', '930812105', 'enriquefloresfuentes1945@gmaill.com'),
(222, 'Juan Alberto Luis', '962270792', 'jalef4437@gmail.com'),
(223, 'Karina', '947210492', 'karinayaninaromero32@gmail.com'),
(224, 'Lorena Avalos ', '919591181', 'lorenaas388@gmail.com'),
(225, 'Monica', '03814097563', 'monolacanfora@gmail.com'),
(226, 'Verónica ', '940159627', 'esmitv.04@gmail.com'),
(227, 'nora ', '955349522', 'nojv107@hotmail.com'),
(228, 'Flavia Vega', '910221427', 'flavegabal@gmail.com'),
(229, 'sdasdsa', 'dasd', 'dasdasd|@dmail.com'),
(230, 'Carlos', '934420686', 'pixelesplantas.5@gmail.com'),
(231, 'Fabi', '950514854', 'f5056146@gmail.com'),
(232, 'Yeilis ', '0403646864', 'verteldiazyei@gmail.com'),
(233, 'Ivonne ', '4495111681', 'ivonnesolis046@gmail.com'),
(234, 'laura yvonne', '2382357070', 'ly_hd@icloud.com'),
(235, 'Victoria Cruz', '7879622760', 'profesionalcruz.vc@gmail.com'),
(236, 'Yeral Ramos', '961446900', 'yeraljesus25.66@gmail.com'),
(237, 'Brisa', '979373993', 'minsuga2504@gmail.com'),
(238, 'Joaquin', '982566648', 'joacogaboartimillones@gmail.com'),
(239, 'David Katsu ', '919586544', 'dkatsu23@gmail.com'),
(240, 'Soledad ', '994860686', 'solecazal@gmail.com'),
(241, 'Antonio Ramirez Hutado', '72134772', 'ramirezantonio19@hotmail.com'),
(242, 'Keila', '0991298523', 'k11_93@mail.com'),
(243, 'Maria Milagros ', '927049583', 'mariamilagros291097@gmail.com'),
(244, 'Almendra ', '961211966', 'almendrarovivanco@gmail.com'),
(245, 'Yancy Rojas M', '60406366', 'yarome03@gmail.com'),
(246, 'ariana', '960227301', 'arijebel17@gmail.com'),
(247, 'Darel', 'Admi de Yuntas Producciones', 'darel.delaguila15@gmail.com'),
(248, 'IssBesser GmbH', '01772424047', 'issbessergmbh@gmail.com'),
(249, 'luis', '999999999', '|uis@gmail.com'),
(250, 'a', 'a', 'aa@dad.c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `nombres` varchar(60) NOT NULL,
  `telefono` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_level`, `status`, `nombres`, `telefono`) VALUES
(1, 'Renderadmin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, 'Juan Carlos', 936910425),
(9, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, 'Juan Carlos', 999999999),
(15, 'pamela', '67d9674c8455f6c240f73ebadbe2795bb187109a', 2, 1, 'don mario', 936910425),
(16, 'CIRO', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 1, 'CIRO', 936910425),
(17, 'edith', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 1, 'jugueria', 936910425);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL,
  `group_level` int(2) NOT NULL,
  `group_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'admin', 1, 1),
(2, 'cliente', 2, 1),
(3, 'gestion', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `nombre`, `rol`) VALUES
(1, 'Admin', 'Admin2023', 'Jorge Mandieta\n', 'Administrador'),
(64, 'Admin', 'juan12345', 'JUAN CARLOS ', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `libroreclamacion`
--
ALTER TABLE `libroreclamacion`
  ADD PRIMARY KEY (`idReclamacion`);

--
-- Indices de la tabla `modalbranding`
--
ALTER TABLE `modalbranding`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modaldesing`
--
ALTER TABLE `modaldesing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalgestion`
--
ALTER TABLE `modalgestion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalmarketing`
--
ALTER TABLE `modalmarketing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personcamino5`
--
ALTER TABLE `personcamino5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personcampañas3`
--
ALTER TABLE `personcampañas3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persondigi1`
--
ALTER TABLE `persondigi1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personredes4`
--
ALTER TABLE `personredes4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personweb2`
--
ALTER TABLE `personweb2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posting_blog`
--
ALTER TABLE `posting_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscriptor`
--
ALTER TABLE `suscriptor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_level` (`user_level`) USING BTREE;

--
-- Indices de la tabla `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_level` (`group_level`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=434;

--
-- AUTO_INCREMENT de la tabla `libroreclamacion`
--
ALTER TABLE `libroreclamacion`
  MODIFY `idReclamacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modalbranding`
--
ALTER TABLE `modalbranding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modaldesing`
--
ALTER TABLE `modaldesing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `modalgestion`
--
ALTER TABLE `modalgestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `modalmarketing`
--
ALTER TABLE `modalmarketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `personcamino5`
--
ALTER TABLE `personcamino5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `personcampañas3`
--
ALTER TABLE `personcampañas3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `persondigi1`
--
ALTER TABLE `persondigi1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `personredes4`
--
ALTER TABLE `personredes4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personweb2`
--
ALTER TABLE `personweb2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `posting_blog`
--
ALTER TABLE `posting_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `suscriptor`
--
ALTER TABLE `suscriptor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
