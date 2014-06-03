-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2014 a las 19:40:03
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
-- Creación: 31-05-2014 a las 09:08:51
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 80),
(2, 1, NULL, NULL, 'Entradas', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Groups', 14, 25),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'view', 17, 18),
(11, 8, NULL, NULL, 'add', 19, 20),
(12, 8, NULL, NULL, 'edit', 21, 22),
(13, 8, NULL, NULL, 'delete', 23, 24),
(14, 1, NULL, NULL, 'Mods', 26, 37),
(15, 14, NULL, NULL, 'index', 27, 28),
(16, 14, NULL, NULL, 'view', 29, 30),
(17, 14, NULL, NULL, 'add', 31, 32),
(18, 14, NULL, NULL, 'edit', 33, 34),
(19, 14, NULL, NULL, 'delete', 35, 36),
(20, 1, NULL, NULL, 'Pages', 38, 41),
(21, 20, NULL, NULL, 'display', 39, 40),
(22, 1, NULL, NULL, 'Users', 42, 57),
(23, 22, NULL, NULL, 'index', 43, 44),
(24, 22, NULL, NULL, 'view', 45, 46),
(25, 22, NULL, NULL, 'add', 47, 48),
(26, 22, NULL, NULL, 'edit', 49, 50),
(27, 22, NULL, NULL, 'delete', 51, 52),
(28, 22, NULL, NULL, 'login', 53, 54),
(29, 22, NULL, NULL, 'logout', 55, 56),
(30, 1, NULL, NULL, 'Widgets', 58, 69),
(31, 30, NULL, NULL, 'index', 59, 60),
(32, 30, NULL, NULL, 'view', 61, 62),
(33, 30, NULL, NULL, 'add', 63, 64),
(34, 30, NULL, NULL, 'edit', 65, 66),
(35, 30, NULL, NULL, 'delete', 67, 68),
(36, 1, NULL, NULL, 'AclExtras', 70, 71),
(37, 1, NULL, NULL, 'DebugKit', 72, 79),
(38, 37, NULL, NULL, 'ToolbarAccess', 73, 78),
(39, 38, NULL, NULL, 'history_state', 74, 75),
(40, 38, NULL, NULL, 'sql_explain', 76, 77);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--
-- Creación: 31-05-2014 a las 09:08:51
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 8),
(3, NULL, 'Group', 3, NULL, 9, 12),
(4, 1, 'User', 1, NULL, 2, 3),
(5, 2, 'User', 2, NULL, 6, 7),
(6, 3, 'User', 3, NULL, 10, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--
-- Creación: 31-05-2014 a las 09:08:52
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 30, '1', '1', '1', '1'),
(4, 2, 14, '1', '1', '1', '1'),
(5, 3, 1, '-1', '-1', '-1', '-1'),
(6, 3, 33, '1', '1', '1', '1'),
(7, 3, 34, '1', '1', '1', '1'),
(8, 3, 17, '1', '1', '1', '1'),
(9, 3, 18, '1', '1', '1', '1'),
(10, 3, 29, '1', '1', '1', '1'),
(11, 2, 2, '1', '1', '1', '1'),
(12, 3, 5, '1', '1', '1', '1'),
(13, 3, 6, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--
-- Creación: 31-05-2014 a las 09:06:36
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
  `user_id_val` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--
-- Creación: 31-05-2014 a las 09:06:35
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administrators', '2014-05-31 11:17:52', '2014-05-31 11:17:52'),
(2, 'managers', '2014-05-31 11:18:01', '2014-05-31 11:18:01'),
(3, 'users', '2014-05-31 11:18:07', '2014-05-31 11:18:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mods`
--
-- Creación: 31-05-2014 a las 09:07:13
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
  `user_id_val` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--
-- Creación: 31-05-2014 a las 09:20:48
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nombre_completo`, `group_id`, `created`, `modified`) VALUES
(1, 'admin', '9bab92c88ab415e37ec477ba85ad103c8856ca2f', 'admin', 1, '2014-05-31 11:18:49', '2014-05-31 11:18:49'),
(2, 'manager', '554bf23e40410c035a5ff74feb037a28673e24f8', 'manager', 2, '2014-05-31 11:21:46', '2014-05-31 11:21:46'),
(3, 'user', 'a68e11c1643ea3e9b6a11676e59b067e9208b3bb', 'user', 3, '2014-05-31 11:21:58', '2014-05-31 11:21:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `widgets`
--
-- Creación: 31-05-2014 a las 09:07:13
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
