-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-10-2016 a las 16:37:46
-- Versión del servidor: 5.6.31-0ubuntu0.14.04.2
-- Versión de PHP: 5.6.10-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carloscastillo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contacts_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_requests`
--

CREATE TABLE IF NOT EXISTS `cv_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `users_id` int(11) NOT NULL,
  `IP` varchar(45) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `send_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cv_requests_users1_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `cv_requests`
--

INSERT INTO `cv_requests` (`id`, `email`, `name`, `company`, `created_at`, `updated_at`, `active`, `users_id`, `IP`, `code`, `send_at`) VALUES
(1, 'info@carloscastillo.cl', 'Carlos castillo', NULL, '2016-10-10 12:46:10', '2016-10-10 12:46:10', 0, 1, NULL, NULL, NULL),
(2, 'info@carloscastillo.cl', 'Carlos castillo', NULL, '2016-10-10 13:06:49', '2016-10-10 13:06:49', 0, 1, NULL, NULL, NULL),
(3, 'info@carloscastillo.cl', 'Carlos castillo', NULL, '2016-10-10 13:08:02', '2016-10-10 13:08:02', 0, 1, NULL, NULL, NULL),
(4, 'info@carloscastillo.cl', 'Carlos castillo', NULL, '2016-10-10 13:10:01', '2016-10-10 13:10:01', 0, 1, '192.168.10.1', NULL, NULL),
(5, 'info@carloscastillo.cl', 'Carlos castillo', NULL, '2016-10-10 13:35:33', '2016-10-10 13:35:33', 0, 1, '192.168.10.1', NULL, NULL),
(6, 'Info@carloscastillo.cl', 'carlos castillo', NULL, '2016-10-10 13:40:43', '2016-10-10 13:40:43', 0, 1, '192.168.10.1', '0197fd1775aee6391bbbf9ab8c3d9659', NULL),
(7, 'Info@carloscastillo.cl', 'carlos castillo', NULL, '2016-10-10 13:41:09', '2016-10-10 13:41:09', 0, 1, '192.168.10.1', '0197fd1775aee6391bbbf9ab8c3d9659', NULL),
(8, 'Info@carloscastillo.cl', 'carlos castillo', '', '2016-10-10 13:46:08', '2016-10-10 13:46:08', 0, 1, '192.168.10.1', '0197fd1775aee6391bbbf9ab8c3d9659', NULL),
(9, 'Info@carloscastillo.cl', 'carlos castillo', '', '2016-10-10 13:46:35', '2016-10-10 13:46:35', 0, 1, '192.168.10.1', '0197fd1775aee6391bbbf9ab8c3d9659', NULL),
(10, 'Info@carloscastillo.cl', 'carlos castillo', 'Space X', '2016-10-10 13:49:27', '2016-10-10 13:49:27', 0, 1, '192.168.10.1', '0197fd1775aee6391bbbf9ab8c3d9659', NULL),
(11, 'Info@carloscastillo.cl', 'carlos castillo', 'Space X', '2016-10-10 16:16:35', '2016-10-10 16:16:35', 1, 1, '192.168.10.1', '28b3bf15b05889bba928318ff2bb9648', NULL),
(12, 'Info@carloscastillo.cl', 'carlos castillo', 'Space X', '2016-10-10 16:26:53', '2016-10-10 16:26:53', 1, 1, '192.168.10.1', '197d2c1500d02cafaf6f0c206892b929', NULL),
(13, 'Info@carloscastillo.cl', 'carlos castillo', 'Space X', '2016-10-10 16:32:04', '2016-10-10 16:32:04', 1, 1, '192.168.10.1', '172eab7c25c634cba67d58cfcac6e555', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `finished` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_projects_users_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects_has_skills`
--

CREATE TABLE IF NOT EXISTS `projects_has_skills` (
  `projects_id` int(11) NOT NULL,
  `skills_id` int(11) NOT NULL,
  PRIMARY KEY (`projects_id`,`skills_id`),
  KEY `fk_projects_has_skills_skills1_idx` (`skills_id`),
  KEY `fk_projects_has_skills_projects1_idx` (`projects_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_skills_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `cv` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `active`, `created_at`, `updated_at`, `deleted_at`, `cv`) VALUES
(1, 'info@carloscastillo.cl', '$2y$10$egzhZ9sOU1r6o8hKqpMXXu/gRIKVKJA6XbbCHXAxGzKNIp1bem7kS', 'Carlos Castillo', 1, NULL, NULL, NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `fk_contacts_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv_requests`
--
ALTER TABLE `cv_requests`
  ADD CONSTRAINT `fk_cv_requests_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk_projects_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `projects_has_skills`
--
ALTER TABLE `projects_has_skills`
  ADD CONSTRAINT `fk_projects_has_skills_projects1` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projects_has_skills_skills1` FOREIGN KEY (`skills_id`) REFERENCES `skills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `fk_skills_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
