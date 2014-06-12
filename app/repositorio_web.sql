-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2014 a las 16:13:19
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `repositorio_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 2),
(2, NULL, NULL, NULL, 'controllers', 3, 82),
(3, 2, NULL, NULL, 'Entradas', 4, 15),
(4, 3, NULL, NULL, 'index', 5, 6),
(5, 3, NULL, NULL, 'view', 7, 8),
(6, 3, NULL, NULL, 'add', 9, 10),
(7, 3, NULL, NULL, 'edit', 11, 12),
(8, 3, NULL, NULL, 'delete', 13, 14),
(9, 2, NULL, NULL, 'Groups', 16, 27),
(10, 9, NULL, NULL, 'index', 17, 18),
(11, 9, NULL, NULL, 'view', 19, 20),
(12, 9, NULL, NULL, 'add', 21, 22),
(13, 9, NULL, NULL, 'edit', 23, 24),
(14, 9, NULL, NULL, 'delete', 25, 26),
(15, 2, NULL, NULL, 'Mods', 28, 39),
(16, 15, NULL, NULL, 'index', 29, 30),
(17, 15, NULL, NULL, 'view', 31, 32),
(18, 15, NULL, NULL, 'add', 33, 34),
(19, 15, NULL, NULL, 'edit', 35, 36),
(20, 15, NULL, NULL, 'delete', 37, 38),
(21, 2, NULL, NULL, 'Pages', 40, 43),
(22, 21, NULL, NULL, 'display', 41, 42),
(23, 2, NULL, NULL, 'Users', 44, 59),
(24, 23, NULL, NULL, 'index', 45, 46),
(25, 23, NULL, NULL, 'view', 47, 48),
(26, 23, NULL, NULL, 'add', 49, 50),
(27, 23, NULL, NULL, 'edit', 51, 52),
(28, 23, NULL, NULL, 'delete', 53, 54),
(29, 23, NULL, NULL, 'login', 55, 56),
(30, 23, NULL, NULL, 'logout', 57, 58),
(31, 2, NULL, NULL, 'Widgets', 60, 71),
(32, 31, NULL, NULL, 'index', 61, 62),
(33, 31, NULL, NULL, 'view', 63, 64),
(34, 31, NULL, NULL, 'add', 65, 66),
(35, 31, NULL, NULL, 'edit', 67, 68),
(36, 31, NULL, NULL, 'delete', 69, 70),
(37, 2, NULL, NULL, 'AclExtras', 72, 73),
(38, 2, NULL, NULL, 'DebugKit', 74, 81),
(39, 38, NULL, NULL, 'ToolbarAccess', 75, 80),
(40, 39, NULL, NULL, 'history_state', 76, 77),
(41, 39, NULL, NULL, 'sql_explain', 78, 79);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 10),
(3, NULL, 'Group', 3, NULL, 11, 14),
(4, NULL, 'Group', 4, NULL, 15, 20),
(5, NULL, 'Group', 5, NULL, 21, 22),
(6, 1, 'User', 1, NULL, 2, 3),
(7, 2, 'User', 2, NULL, 8, 9),
(8, 2, 'User', 3, NULL, 6, 7),
(9, NULL, 'User', 4, NULL, 23, 24),
(10, NULL, 'User', 5, NULL, 25, 26),
(11, NULL, 'User', 6, NULL, 27, 28),
(12, NULL, 'User', 7, NULL, 29, 30),
(13, NULL, 'User', 8, NULL, 31, 32),
(14, NULL, 'User', 9, NULL, 33, 34),
(15, NULL, 'User', 10, NULL, 35, 36),
(16, NULL, 'User', 13, NULL, 37, 38),
(17, 3, 'User', 15, NULL, 12, 13),
(25, 4, 'User', 19, NULL, 16, 17),
(26, 4, 'User', 16, NULL, 18, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 2, '1', '1', '1', '1'),
(2, 3, 2, '-1', '-1', '-1', '-1'),
(3, 3, 3, '1', '1', '1', '1'),
(4, 3, 31, '1', '1', '1', '1'),
(5, 3, 15, '1', '1', '1', '1'),
(6, 2, 2, '-1', '-1', '-1', '-1'),
(7, 2, 6, '1', '1', '1', '1'),
(8, 2, 7, '1', '1', '1', '1'),
(9, 2, 18, '1', '1', '1', '1'),
(10, 2, 19, '1', '1', '1', '1'),
(11, 2, 34, '1', '1', '1', '1'),
(12, 2, 35, '1', '1', '1', '1'),
(13, 2, 30, '1', '1', '1', '1'),
(14, 2, 3, '1', '1', '1', '1'),
(15, 2, 31, '1', '1', '1', '1'),
(16, 2, 15, '1', '1', '1', '1'),
(17, 3, 6, '1', '1', '1', '1'),
(18, 3, 7, '1', '1', '1', '1'),
(19, 3, 18, '1', '1', '1', '1'),
(20, 3, 19, '1', '1', '1', '1'),
(21, 3, 34, '1', '1', '1', '1'),
(22, 3, 35, '1', '1', '1', '1'),
(23, 3, 30, '1', '1', '1', '1'),
(24, 3, 26, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE IF NOT EXISTS `entradas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `url` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `idiomas` varchar(45) NOT NULL,
  `modelo_uso` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `val_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `user_id`, `title`, `body`, `url`, `categoria`, `idiomas`, `modelo_uso`, `created`, `modified`, `val_user_id`) VALUES
(1, 1, 'RepositorioWeb', 'Una pagina genial', 'http://localhost/repositorioWeb', 'Divulgacion', 'EspaÃ±ol', 'Gratuito', '2014-06-08 20:36:17', '2014-06-09 01:05:20', 1),
(2, 2, 'Youtube', 'Sitio de videos', 'https://www.youtube.com', 'Ocio y entretenimiento', 'Multiples', 'Gratuito con publicidad', '2014-06-08 20:38:06', '2014-06-09 00:54:50', 1),
(3, 1, 'Prueba', 'Prueba Prueba Prueba Prueba Prueba ', 'Anonima', 'Ensayo', 'Esperanto', 'Test', '2014-06-10 03:06:25', '2014-06-10 03:32:18', 1),
(7, 2, 'Prueba 2', 'Prueba para el documento', 'URL larga con sus URIs y todo', 'Test', 'Esperanto', 'Pruebas', '2014-06-10 14:28:43', '2014-06-10 14:33:19', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administrators', '2014-06-04 01:12:46', '2014-06-04 01:12:46'),
(2, 'managers', '2014-06-04 01:12:57', '2014-06-04 01:12:57'),
(3, 'users', '2014-06-04 01:13:13', '2014-06-04 01:13:13'),
(4, 'pendientes', '2014-06-04 01:13:20', '2014-06-04 01:13:20'),
(5, 'banned', '2014-06-04 01:13:29', '2014-06-04 01:13:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mods`
--

CREATE TABLE IF NOT EXISTS `mods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `entrada_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `url` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `idiomas` varchar(45) DEFAULT NULL,
  `modelo_uso` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `val_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `mods`
--

INSERT INTO `mods` (`id`, `user_id`, `entrada_id`, `title`, `body`, `url`, `categoria`, `idiomas`, `modelo_uso`, `created`, `modified`, `val_user_id`) VALUES
(7, 2, 7, 'Prueba X', '', '', '', 'Swajili', 'De pago y de lujo', '2014-06-10 14:51:04', '2014-06-10 15:06:38', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `nombre_completo` varchar(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nombre_completo`, `group_id`, `created`, `modified`) VALUES
(1, 'admin', '9bab92c88ab415e37ec477ba85ad103c8856ca2f', 'admin', 1, '2014-06-04 01:13:54', '2014-06-04 01:13:54'),
(2, 'manager', '554bf23e40410c035a5ff74feb037a28673e24f8', 'manager', 2, '2014-06-04 01:14:42', '2014-06-10 15:27:40'),
(3, 'user', 'a68e11c1643ea3e9b6a11676e59b067e9208b3bb', 'user', 3, '2014-06-04 01:14:12', '2014-06-04 01:14:12'),
(15, 'prueba', 'f200c5693487dfb1304a31783f9e8fde459e2095', 'prueba', 3, '2014-06-05 22:44:42', '2014-06-08 20:47:33'),
(16, 'Prueba Documento', 'dc23ff1346c88de8993757f0e0b84d41f9eb51a0', 'Prueba Documento', 4, '2014-06-10 15:14:57', '2014-06-10 15:14:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `part_no` varchar(12) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
