-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-08-2010 a las 23:29:34
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lexersports`
--
CREATE DATABASE `lexersports` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lexersports`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` varchar(500) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('77c377ce6f2ace13a07cc8d565d221ae', '192.168.0.2', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280950911, ''),
('65e44efecd37c6643d327f0b023829de', '192.168.0.2', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280950922, ''),
('817dfbc85533f1bb2a2be5a84cafa927', '192.168.0.2', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280951034, ''),
('0192aafb0729296ee793afcd4d1022f4', '192.168.0.2', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280951055, ''),
('03ad8bb7849b9016479e5b85fe752cc8', '192.168.0.2', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280951068, ''),
('9a70cc1e06719bbe1cdb144c173269f5', '192.168.0.2', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280951110, ''),
('cdd71a5d9c21043a0b0e7e19d2e31446', '192.168.0.2', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280951131, ''),
('dd0171b3526794e4e918a2265ab1e7cf', '192.168.0.2', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280950998, ''),
('fe3fc4a8ad196ef411f0eac8fcda7209', '127.0.0.1', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280956982, ''),
('051ab08948c1ede693e4d769d1a11fb5', '192.168.0.2', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280950905, ''),
('9e6f256396048e4f7dc74e77c7385b1f', '192.168.0.2', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.9', 1280950818, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_type` varchar(30) NOT NULL COMMENT 'nombre de las tablas',
  `email` varchar(100) NOT NULL COMMENT 'Este es el nombre de usuario',
  `password` char(64) NOT NULL,
  `newsletter` bit(1) NOT NULL DEFAULT b'1',
  `token` char(23) DEFAULT NULL,
  `active` bit(1) NOT NULL DEFAULT b'0',
  `date_added` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_club`
--

CREATE TABLE IF NOT EXISTS `users_club` (
  `users_type_club` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` int(4) NOT NULL,
  `image_height` int(4) NOT NULL,
  `nombre_club` varchar(100) NOT NULL,
  `presidente_actual` varchar(50) NOT NULL,
  `cuit` varchar(25) NOT NULL,
  `anio_fundacion` int(4) NOT NULL,
  `sports_id` int(11) NOT NULL,
  `estadio` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `states_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `phone_area` int(5) NOT NULL,
  `phone_city` int(5) NOT NULL,
  `phone_num` int(15) NOT NULL,
  `celu_area` int(5) NOT NULL,
  `celu_city` int(5) NOT NULL,
  `celu_num` int(15) NOT NULL,
  `categorie` varchar(200) NOT NULL,
  `titular_lastname` varchar(50) NOT NULL,
  `titular_firstname` varchar(50) NOT NULL,
  `titular_cargo` varchar(50) NOT NULL,
  `titular_phone_area` int(5) NOT NULL,
  `titular_phone_city` int(5) NOT NULL,
  `titular_phone_num` int(15) NOT NULL,
  `titular_celu_area` int(5) NOT NULL,
  `titular_celu_city` int(5) NOT NULL,
  `titular_celu_num` int(15) NOT NULL,
  `titular_documento_tipo` varchar(100) NOT NULL,
  `titular_documento_num` varchar(20) NOT NULL,
  `titular_documento_show` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`users_type_club`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_club`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_club_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_club_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_club_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_club_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_club_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_club_videogallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_dep`
--

CREATE TABLE IF NOT EXISTS `users_dep` (
  `users_type_dep` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` int(4) NOT NULL,
  `image_height` int(4) NOT NULL,
  `sex` char(1) NOT NULL,
  `nacimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado_civil` varchar(20) NOT NULL,
  `documento_tipo` varchar(100) NOT NULL,
  `documento_num` varchar(20) NOT NULL,
  `documento_show` bit(1) NOT NULL DEFAULT b'0',
  `current_country` int(11) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `current_state` int(11) NOT NULL,
  `current_zipcode` varchar(10) NOT NULL,
  `origin_country` int(11) NOT NULL,
  `origin_city` varchar(100) NOT NULL,
  `origin_state` int(11) NOT NULL,
  `origin_zipcode` varchar(10) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `passport` varchar(20) NOT NULL,
  `phone_area` int(5) NOT NULL,
  `phone_city` int(5) NOT NULL,
  `phone_num` int(15) NOT NULL,
  `celu_area` int(5) NOT NULL,
  `celu_city` int(5) NOT NULL,
  `celu_num` int(15) NOT NULL,
  `website` varchar(150) NOT NULL,
  `profesion` varchar(100) NOT NULL,
  `estudios` varchar(100) NOT NULL,
  `check_discapacidad` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`users_type_dep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_dep`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_dep_disc`
--

CREATE TABLE IF NOT EXISTS `users_dep_disc` (
  `disc_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `detalle` text NOT NULL,
  PRIMARY KEY (`disc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_dep_disc`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_dep_lang`
--

CREATE TABLE IF NOT EXISTS `users_dep_lang` (
  `deplang_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `level_oral` varchar(20) NOT NULL,
  `level_write` varchar(20) NOT NULL,
  PRIMARY KEY (`deplang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_dep_lang`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_dep_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_dep_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_dep_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_dep_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_dep_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_dep_videogallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_prepfisico`
--

CREATE TABLE IF NOT EXISTS `users_prepfisico` (
  `users_type_prepfisico` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` int(4) NOT NULL,
  `image_height` int(4) NOT NULL,
  `sex` char(1) NOT NULL,
  `nacimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado_civil` varchar(20) NOT NULL,
  `documento_tipo` varchar(100) NOT NULL,
  `documento_num` varchar(20) NOT NULL,
  `documento_show` bit(1) NOT NULL DEFAULT b'0',
  `current_country` int(11) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `current_state` int(11) NOT NULL,
  `current_zipcode` varchar(10) NOT NULL,
  `origin_country` int(11) NOT NULL,
  `origin_city` varchar(100) NOT NULL,
  `origin_state` int(11) NOT NULL,
  `origin_zipcode` varchar(10) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `passport` varchar(20) NOT NULL,
  `phone_area` int(5) NOT NULL,
  `phone_city` int(5) NOT NULL,
  `phone_num` int(15) NOT NULL,
  `celu_area` int(5) NOT NULL,
  `celu_city` int(5) NOT NULL,
  `celu_num` int(15) NOT NULL,
  `website` int(150) NOT NULL,
  PRIMARY KEY (`users_type_prepfisico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_prepfisico`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_prepfisico_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_prepfisico_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_prepfisico_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_prepfisico_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_prepfisico_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_prepfisico_videogallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_repr`
--

CREATE TABLE IF NOT EXISTS `users_repr` (
  `users_type_repr` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lastname` int(11) NOT NULL,
  `firstname` int(11) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` int(4) NOT NULL,
  `image_height` int(4) NOT NULL,
  `sex` char(1) NOT NULL,
  `nacimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `documento_tipo` varchar(100) NOT NULL,
  `documento_num` varchar(20) NOT NULL,
  `documento_show` bit(1) NOT NULL,
  `current_country` int(11) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `current_state` int(11) NOT NULL,
  `current_zipcode` varchar(10) NOT NULL,
  `origin_country` int(11) NOT NULL,
  `origin_city` varchar(100) NOT NULL,
  `origin_state` int(11) NOT NULL,
  `origin_zipcode` varchar(10) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `passport` varchar(20) NOT NULL,
  `phone_area` int(5) NOT NULL,
  `phone_city` int(5) NOT NULL,
  `phone_num` int(15) NOT NULL,
  `celu_area` int(5) NOT NULL,
  `celu_city` int(5) NOT NULL,
  `celu_num` int(15) NOT NULL,
  `website` varchar(150) NOT NULL,
  `profesion` varchar(100) NOT NULL,
  `trabajo` varchar(100) NOT NULL,
  `agente_fifa` bit(1) NOT NULL DEFAULT b'0',
  `agente_fifa_licencia` varchar(30) NOT NULL,
  `sports_id` int(11) NOT NULL,
  `level` varchar(15) NOT NULL,
  PRIMARY KEY (`users_type_repr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_repr`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_repr_lang`
--

CREATE TABLE IF NOT EXISTS `users_repr_lang` (
  `reprlang_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `level_oral` varchar(20) NOT NULL,
  `level_write` varchar(20) NOT NULL,
  PRIMARY KEY (`reprlang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_repr_lang`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_repr_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_repr_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_repr_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_repr_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_repr_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_repr_videogallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_sponsors`
--

CREATE TABLE IF NOT EXISTS `users_sponsors` (
  `users_type_sponsors` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` int(4) NOT NULL,
  `image_height` int(4) NOT NULL,
  `cuit` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `states_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `phone_area` int(5) NOT NULL,
  `phone_city` int(5) NOT NULL,
  `phone_num` int(15) NOT NULL,
  `celu_area` int(5) NOT NULL,
  `celu_city` int(5) NOT NULL,
  `celu_num` int(15) NOT NULL,
  `rubro` varchar(100) NOT NULL,
  `titular_lastname` varchar(50) NOT NULL,
  `titular_firstname` varchar(50) NOT NULL,
  `titular_cargo` varchar(100) NOT NULL,
  `titular_phone_area` int(5) NOT NULL,
  `titular_phone_city` int(5) NOT NULL,
  `titular_phone_num` int(15) NOT NULL,
  `titular_celu_area` int(5) NOT NULL,
  `titular_celu_city` int(5) NOT NULL,
  `titular_celu_num` int(15) NOT NULL,
  `titular_documento_tipo` varchar(100) NOT NULL,
  `titular_documento_num` varchar(20) NOT NULL,
  `titular_documento_show` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`users_type_sponsors`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_sponsors`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_sponsors_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_sponsors_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_sponsors_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_sponsors_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_sponsors_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_sponsors_videogallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_trainer`
--

CREATE TABLE IF NOT EXISTS `users_trainer` (
  `users_type_trainer` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` tinyint(4) NOT NULL,
  `image_height` tinyint(4) NOT NULL,
  `nacimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado_civil` varchar(20) NOT NULL,
  `documento_tipo` varchar(100) NOT NULL,
  `documento_num` varchar(20) NOT NULL,
  `documento_show` bit(1) NOT NULL DEFAULT b'0',
  `current_country` int(11) NOT NULL,
  `current_state` int(11) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `current_zipcode` varchar(10) NOT NULL,
  `origin_country` int(11) NOT NULL,
  `origin_city` varchar(100) NOT NULL,
  `origin_state` int(11) NOT NULL,
  `origin_zipcode` varchar(10) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `passport` varchar(20) NOT NULL,
  `phone_area` int(5) NOT NULL,
  `phone_city` int(5) NOT NULL,
  `phone_num` int(15) NOT NULL,
  `celu_area` int(5) NOT NULL,
  `celu_city` int(5) NOT NULL,
  `celu_num` int(15) NOT NULL,
  `website` varchar(150) NOT NULL,
  `check_repr` bit(1) NOT NULL DEFAULT b'0',
  `sponsor` varchar(100) NOT NULL,
  `level` varchar(15) NOT NULL,
  PRIMARY KEY (`users_type_trainer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_trainer`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_trainer_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_trainer_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_trainer_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_trainer_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_trainer_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_trainer_videogallery`
--

