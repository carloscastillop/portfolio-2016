-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-10-2016 a las 13:20:32
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
  `subjects_id` int(11) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `IP` varchar(45) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`),
  KEY `fk_contacts_users1_idx` (`users_id`),
  KEY `fk_contacts_subjects1_idx` (`subjects_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `created_at`, `updated_at`, `users_id`, `subjects_id`, `company`, `mobile`, `IP`, `message`) VALUES
(1, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 12:41:19', '2016-10-21 12:41:19', 1, 1, 'Space X', '23423423423', '192.168.10.1', NULL),
(2, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 12:43:42', '2016-10-21 12:43:42', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'ksdnbfkj sndkjfn skjdnfkjsdnkfjsndkjfnskdjfnksjdnfjsdbfksbdfkhsdb fjsndjkfnskdfnjksd'),
(3, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 12:53:34', '2016-10-21 12:53:34', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'ksdnbfkj sndkjfn skjdnfkjsdnkfjsndkjfnskdjfnksjdnfjsdbfksbdfkhsdb fjsndjkfnskdfnjksd'),
(4, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 12:54:32', '2016-10-21 12:54:32', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'ksdnbfkj sndkjfn skjdnfkjsdnkfjsndkjfnskdjfnksjdnfjsdbfksbdfkhsdb fjsndjkfnskdfnjksd'),
(5, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 12:57:45', '2016-10-21 12:57:45', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'ksdnbfkj sndkjfn skjdnfkjsdnkfjsndkjfnskdjfnksjdnfjsdbfksbdfkhsdb fjsndjkfnskdfnjksd'),
(6, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:02:54', '2016-10-21 13:02:54', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'ksdnbfkj sndkjfn skjdnfkjsdnkfjsndkjfnskdjfnksjdnfjsdbfksbdfkhsdb fjsndjkfnskdfnjksd'),
(7, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:10:15', '2016-10-21 13:10:15', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'ksdnbfkj sndkjfn skjdnfkjsdnkfjsndkjfnskdjfnksjdnfjsdbfksbdfkhsdb fjsndjkfnskdfnjksd'),
(8, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:10:25', '2016-10-21 13:10:25', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'ksdnbfkj sndkjfn skjdnfkjsdnkfjsndkjfnskdjfnksjdnfjsdbfksbdfkhsdb fjsndjkfnskdfnjksd'),
(9, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:34:06', '2016-10-21 13:34:06', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'hola munfo '),
(10, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:34:28', '2016-10-21 13:34:28', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'hola munfo '),
(11, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:35:34', '2016-10-21 13:35:34', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'hola munfo '),
(12, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:38:54', '2016-10-21 13:38:54', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'hola munfo '),
(13, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:39:33', '2016-10-21 13:39:33', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'hola munfo '),
(14, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:39:54', '2016-10-21 13:39:54', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'hola munfo '),
(15, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:40:05', '2016-10-21 13:40:05', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'hola munfo '),
(16, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:40:13', '2016-10-21 13:40:13', 1, 1, 'Space X', '23423423423', '192.168.10.1', 'hola munfo '),
(17, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:42:12', '2016-10-21 13:42:12', 1, 3, 'Space X', '23423423423', '192.168.10.1', 'hola mundo'),
(18, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:44:30', '2016-10-21 13:44:30', 1, 3, 'Space X', '23423423423', '192.168.10.1', 'hola mundo'),
(19, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-21 13:49:25', '2016-10-21 13:49:25', 1, 1, 'Space X', '23423423423', '192.168.10.1', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sodales eros in enim tristique, sed rhoncus enim mattis. Curabitur nec interdum nunc. Suspendisse posuere, metus venenatis commodo iaculis, nibh massa faucibus diam, molestie accumsan libero ante vel purus. Pellentesque ac maximus est. Maecenas lobortis gravida justo, vitae viverra libero laoreet ac. Quisque hendrerit lobortis sem, id congue augue pulvinar in. Sed sapien magna, efficitur a dapibus at, rhoncus eget metus. Mauris laoreet dolor ac efficitur elementum. Nam elit massa, ultrices eget nunc eget, feugiat maximus tortor. Donec porta, risus eu molestie faucibus, nibh felis interdum libero, at porttitor libero metus nec odio. Nunc aliquam pulvinar sollicitudin. Maecenas sit amet ante vitae mauris ullamcorper lacinia. '),
(20, 'Pedro El Escamoso', 'carloscastillopardo@gmail.com', '2016-10-21 18:21:14', '2016-10-21 18:21:14', 1, 2, '', '293847829374', '192.168.10.1', 'qui wa'),
(21, 'Carlos Castillo', 'info@carloscastillo.cl', '2016-10-26 21:01:08', '2016-10-26 21:01:08', 1, 1, 'le poto', '23423423423', '192.168.10.1', 'sdasd asd as'),
(22, 'Carlos Castillo 1', 'carloscastillopardo@gmail.com', '2016-10-26 21:48:36', '2016-10-26 21:48:36', 1, 5, 'Space X', '293847829374', '192.168.10.1', 'sdsdsd recater');

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
  `sends` decimal(10,0) DEFAULT '0',
  `open` decimal(10,0) DEFAULT '0',
  `download` decimal(10,0) DEFAULT '0',
  `mobile` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cv_requests_users1_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `cv_requests`
--

INSERT INTO `cv_requests` (`id`, `email`, `name`, `company`, `created_at`, `updated_at`, `active`, `users_id`, `IP`, `code`, `send_at`, `sends`, `open`, `download`, `mobile`) VALUES
(33, 'Info@carloscastillo.cl', 'Carlos Castillo', 'Space X', '2016-10-11 21:19:00', '2016-10-12 08:41:04', 1, 1, '192.168.10.1', '13841f27c533af70c854c1c507ac7486', '2016-10-12 08:41:04', '3', '0', '0', NULL),
(34, 'carloscastillopardo@gmail.com', 'Pedro Picapiedra', 'Le Poto', '2016-10-24 11:16:14', '2016-10-24 11:16:56', 1, 1, '192.168.10.1', 'a03cb4d1affeda92a205175b266b37e1', '2016-10-24 11:16:56', '1', '0', '0', NULL),
(35, 'carloscastillopardo@gmail.com', 'Carlos Castillo', 'Le Poto', '2016-10-24 11:23:34', '2016-10-24 11:24:25', 1, 1, '192.168.10.1', 'b1a1566be01913249ab9b2c8ea678d9a', '2016-10-24 11:24:25', '1', '0', '0', NULL),
(36, 'info@carloscastillo.cl', 'Carlos Castillo', 'Space X', '2016-10-24 11:35:05', '2016-10-24 11:35:05', 1, 1, '192.168.10.1', '4378b3b202b90c43b8fcc1dac9953a28', NULL, '0', '0', '0', '1'),
(37, 'carloscastillopardo@gmail.com', 'Carlos Castillo', 'Le Poto', '2016-10-24 11:37:16', '2016-10-24 11:37:16', 1, 1, '192.168.10.1', 'b14efa6e1d835d2935bc0e1f49f4107e', NULL, '0', '0', '0', '7774041601'),
(38, 'carloscastillopardo@gmail.com', 'Carlos Castillo', 'Le Poto', '2016-10-24 11:38:15', '2016-10-24 11:38:15', 1, 1, '192.168.10.1', '7abb194d4d6c704c8f9ba2ca9fa35829', NULL, '0', '0', '0', '7774041601'),
(39, 'carloscastillopardo@gmail.com', 'Carlos Castillo', 'Le Poto', '2016-10-24 11:38:44', '2016-10-24 11:38:44', 1, 1, '192.168.10.1', 'c1148e8b50fcf9ec54377971aaa0ebdd', NULL, '0', '0', '0', '7774041601'),
(40, 'carloscastillopardo@gmail.com', 'Carlos Castillo', 'Le Poto', '2016-10-24 11:39:18', '2016-10-24 11:40:12', 1, 1, '192.168.10.1', '7600ab76d07dfc9a755e42d80347840f', '2016-10-24 11:40:12', '1', '0', '0', '7774041601'),
(41, 'info@carloscastillo.cl', 'Carlos Castillo', 'Space X', '2016-10-25 20:39:38', '2016-10-25 20:41:54', 1, 1, '192.168.10.1', 'aff2d25e49451960366e821b31f473d3', '2016-10-25 20:41:54', '4', '0', '0', '7774041604'),
(42, 'info@carloscastillo.cl', 'Carlos Castillo', 'Space X', '2016-10-25 20:46:45', '2016-10-25 20:48:53', 1, 1, '192.168.10.1', '2e21d9171e5597b96638319bc116ba1e', '2016-10-25 20:48:53', '2', '0', '0', '7774041604');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=169 ;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Usuario :info@carloscastillo.cl ha cerrado sesion', '2016-10-17 14:26:15', '2016-10-17 14:26:15'),
(2, 'Usuario info@carloscastillo.cl ha cerrado sesion', '2016-10-17 14:30:32', '2016-10-17 14:30:32'),
(3, 'Usuario info@carloscastillo.cl ha iniciado sesion incorrectamente', '2016-10-17 14:31:05', '2016-10-17 14:31:05'),
(4, 'Usuario info@carloscastillo.cl ha iniciado sesion incorrectamente', '2016-10-17 14:31:11', '2016-10-17 14:31:11'),
(5, 'Usuario info@carloscastillo.cl ha iniciado sesion', '2016-10-17 14:31:18', '2016-10-17 14:31:18'),
(6, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Laravel', '2016-10-17 15:24:18', '2016-10-17 15:24:18'),
(7, 'Usuario info@carloscastillo.cl ha tratado de acceder a un Skill que no existe ID:1', '2016-10-17 15:47:46', '2016-10-17 15:47:46'),
(8, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Laravel', '2016-10-17 16:21:04', '2016-10-17 16:21:04'),
(9, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Laravel', '2016-10-17 16:21:23', '2016-10-17 16:21:23'),
(10, 'Usuario info@carloscastillo.cl ha editado Skill: Laravel ID: 2', '2016-10-17 16:22:22', '2016-10-17 16:22:22'),
(11, 'Usuario info@carloscastillo.cl ha editado Skill: Laravel ID: 2', '2016-10-17 16:23:42', '2016-10-17 16:23:42'),
(12, 'Usuario info@carloscastillo.cl ha editado Skill: Laravel ID: 2', '2016-10-17 16:24:33', '2016-10-17 16:24:33'),
(13, 'Usuario info@carloscastillo.cl ha editado Skill: Laravel ID: 2', '2016-10-17 16:27:06', '2016-10-17 16:27:06'),
(14, 'Usuario info@carloscastillo.cl ha editado Skill: Laravel ID: 2', '2016-10-17 16:30:12', '2016-10-17 16:30:12'),
(15, 'Usuario info@carloscastillo.cl ha editado Skill: Laravel ID: 2', '2016-10-17 16:31:43', '2016-10-17 16:31:43'),
(16, 'Usuario info@carloscastillo.cl ha editado Skill: Laravel ID: 2', '2016-10-17 16:33:09', '2016-10-17 16:33:09'),
(17, 'Usuario info@carloscastillo.cl ha editado Skill: Laravel ID: 2', '2016-10-17 16:33:25', '2016-10-17 16:33:25'),
(18, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Php', '2016-10-17 16:35:54', '2016-10-17 16:35:54'),
(19, 'Usuario info@carloscastillo.cl ha editado Skill: Laravel ID: 2', '2016-10-17 16:36:44', '2016-10-17 16:36:44'),
(20, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: MySQL', '2016-10-17 16:38:49', '2016-10-17 16:38:49'),
(21, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Bootstrap', '2016-10-17 16:39:50', '2016-10-17 16:39:50'),
(22, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: CSS', '2016-10-17 16:41:13', '2016-10-17 16:41:13'),
(23, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: HTML', '2016-10-17 16:42:35', '2016-10-17 16:42:35'),
(24, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Git', '2016-10-17 16:44:17', '2016-10-17 16:44:17'),
(25, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: GitLab', '2016-10-17 16:45:56', '2016-10-17 16:45:56'),
(26, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: JavaScript', '2016-10-17 16:47:24', '2016-10-17 16:47:24'),
(27, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: JQuery', '2016-10-17 16:49:29', '2016-10-17 16:49:29'),
(28, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Photoshop', '2016-10-17 16:50:48', '2016-10-17 16:50:48'),
(29, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Sass', '2016-10-17 16:51:59', '2016-10-17 16:51:59'),
(30, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Trello', '2016-10-17 16:52:48', '2016-10-17 16:52:48'),
(31, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: OSX user', '2016-10-17 16:54:08', '2016-10-17 16:54:08'),
(32, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Angularjs', '2016-10-17 16:55:28', '2016-10-17 16:55:28'),
(33, 'Usuario info@carloscastillo.cl ha editado Skill: Laravel ID: 2', '2016-10-17 17:04:02', '2016-10-17 17:04:02'),
(34, 'Usuario info@carloscastillo.cl ha editado Skill: CSS3 ID: 6', '2016-10-17 17:05:44', '2016-10-17 17:05:44'),
(35, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Wordpress', '2016-10-17 17:07:24', '2016-10-17 17:07:24'),
(36, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Firefox', '2016-10-17 17:09:30', '2016-10-17 17:09:30'),
(37, 'Usuario info@carloscastillo.cl ha editado Skill: Firefox ID: 18', '2016-10-17 17:10:02', '2016-10-17 17:10:02'),
(38, 'Usuario info@carloscastillo.cl ha editado Skill: Firefox ID: 18', '2016-10-17 17:10:24', '2016-10-17 17:10:24'),
(39, 'Usuario info@carloscastillo.cl ha editado Skill: Firefox ID: 18', '2016-10-17 17:10:53', '2016-10-17 17:10:53'),
(40, 'Usuario info@carloscastillo.cl ha editado Skill: Firefox ID: 18', '2016-10-17 17:14:06', '2016-10-17 17:14:06'),
(41, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Chrome', '2016-10-17 17:15:22', '2016-10-17 17:15:22'),
(42, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: JQuery mobile', '2016-10-17 17:22:06', '2016-10-17 17:22:06'),
(43, 'Usuario info@carloscastillo.cl ha editado Skill: JQuery mobile ID: 20', '2016-10-17 17:27:49', '2016-10-17 17:27:49'),
(44, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: PhoneGap', '2016-10-17 17:32:02', '2016-10-17 17:32:02'),
(45, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Arduino', '2016-10-17 17:36:54', '2016-10-17 17:36:54'),
(46, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Action Script', '2016-10-17 17:40:55', '2016-10-17 17:40:55'),
(47, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: C++', '2016-10-17 17:51:05', '2016-10-17 17:51:05'),
(48, 'Usuario info@carloscastillo.cl ha editado Skill: Photoshop ID: 12', '2016-10-17 17:53:22', '2016-10-17 17:53:22'),
(49, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Painting', '2016-10-17 18:24:57', '2016-10-17 18:24:57'),
(50, 'Usuario info@carloscastillo.cl ha editado Skill: Painting ID: 25', '2016-10-17 18:53:58', '2016-10-17 18:53:58'),
(51, 'Usuario info@carloscastillo.cl ha editado Skill: Painting ID: 25', '2016-10-17 18:54:42', '2016-10-17 18:54:42'),
(52, 'Usuario info@carloscastillo.cl ha editado Skill: Painting ID: 25', '2016-10-17 18:58:32', '2016-10-17 18:58:32'),
(53, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Crafting', '2016-10-17 18:59:34', '2016-10-17 18:59:34'),
(54, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Photography', '2016-10-17 19:13:49', '2016-10-17 19:13:49'),
(55, 'Usuario info@carloscastillo.cl ha iniciado sesion', '2016-10-17 21:56:18', '2016-10-17 21:56:18'),
(56, 'Usuario info@carloscastillo.cl ha iniciado sesion', '2016-10-18 17:24:31', '2016-10-18 17:24:31'),
(57, 'Usuario info@carloscastillo.cl ha iniciado sesion', '2016-10-18 22:00:16', '2016-10-18 22:00:16'),
(58, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Carlos castillo', '2016-10-18 22:44:27', '2016-10-18 22:44:27'),
(59, 'Usuario info@carloscastillo.cl ha iniciado sesion', '2016-10-19 06:29:51', '2016-10-19 06:29:51'),
(60, 'Usuario info@carloscastillo.cl ha iniciado sesion', '2016-10-19 06:34:46', '2016-10-19 06:34:46'),
(61, 'Usuario info@carloscastillo.cl ha editado Skill: Carlos castillo ID: 28', '2016-10-19 07:06:45', '2016-10-19 07:06:45'),
(62, 'Usuario info@carloscastillo.cl ha editado Skill: Photography ID: 27', '2016-10-19 07:08:07', '2016-10-19 07:08:07'),
(63, 'Usuario info@carloscastillo.cl ha editado Skill: Photography ID: 27', '2016-10-19 07:44:42', '2016-10-19 07:44:42'),
(64, 'Usuario info@carloscastillo.cl ha editado Skill: Painting ID: 25', '2016-10-19 08:07:12', '2016-10-19 08:07:12'),
(65, 'Usuario info@carloscastillo.cl ha editado Skill: Painting ID: 25', '2016-10-19 08:08:31', '2016-10-19 08:08:31'),
(66, 'Usuario info@carloscastillo.cl ha editado Skill: Painting ID: 25', '2016-10-19 08:09:24', '2016-10-19 08:09:24'),
(67, 'Usuario info@carloscastillo.cl ha editado Skill: Painting ID: 25', '2016-10-19 08:09:29', '2016-10-19 08:09:29'),
(68, 'Usuario info@carloscastillo.cl ha editado Skill: Crafting ID: 26', '2016-10-19 08:25:49', '2016-10-19 08:25:49'),
(69, 'Usuario info@carloscastillo.cl ha editado Projecto "triangulo asesino" ID:2', '2016-10-19 14:02:19', '2016-10-19 14:02:19'),
(70, 'Usuario info@carloscastillo.cl ha editado Projecto "triangulo asesino" ID:2', '2016-10-19 14:05:51', '2016-10-19 14:05:51'),
(71, 'Usuario info@carloscastillo.cl ha editado Projecto "Motorex chilean web site" ID:2', '2016-10-19 14:40:39', '2016-10-19 14:40:39'),
(72, 'Usuario info@carloscastillo.cl ha editado Projecto "Motorex web site" ID:2', '2016-10-19 14:41:07', '2016-10-19 14:41:07'),
(73, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Motorex customer system', '2016-10-19 14:45:06', '2016-10-19 14:45:06'),
(74, 'Usuario info@carloscastillo.cl ha editado Projecto "Motorex customer system" ID:3', '2016-10-19 14:45:44', '2016-10-19 14:45:44'),
(75, 'Usuario info@carloscastillo.cl ha editado Projecto "Motorex customer system" ID:3', '2016-10-19 14:50:33', '2016-10-19 14:50:33'),
(76, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Motard & Superbike Chile', '2016-10-19 14:56:10', '2016-10-19 14:56:10'),
(77, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Special Olympics Chile', '2016-10-19 15:00:28', '2016-10-19 15:00:28'),
(78, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Amotor', '2016-10-19 15:07:31', '2016-10-19 15:07:31'),
(79, 'Usuario info@carloscastillo.cl ha editado Projecto "Amotor" ID:6', '2016-10-19 15:10:09', '2016-10-19 15:10:09'),
(80, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Boldtex', '2016-10-19 15:15:55', '2016-10-19 15:15:55'),
(81, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Homework Unimarc', '2016-10-19 15:21:54', '2016-10-19 15:21:54'),
(82, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Trabun Hostels website', '2016-10-19 15:25:08', '2016-10-19 15:25:08'),
(83, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Club Unilever', '2016-10-19 15:31:15', '2016-10-19 15:31:15'),
(84, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Demodulo website', '2016-10-19 15:40:33', '2016-10-19 15:40:33'),
(85, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Rexona summer Chile', '2016-10-19 15:45:22', '2016-10-19 15:45:22'),
(86, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Manquehue Club website', '2016-10-19 15:52:56', '2016-10-19 15:52:56'),
(87, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Loharia.com', '2016-10-19 15:56:53', '2016-10-19 15:56:53'),
(88, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Allué Automotive Conversions website', '2016-10-19 16:05:38', '2016-10-19 16:05:38'),
(89, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Security Sat website', '2016-10-19 16:13:33', '2016-10-19 16:13:33'),
(90, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: HostNow website', '2016-10-19 16:17:31', '2016-10-19 16:17:31'),
(91, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: ITD Chile website', '2016-10-19 16:30:24', '2016-10-19 16:30:24'),
(92, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Ministro Hales Division News', '2016-10-19 16:36:03', '2016-10-19 16:36:03'),
(93, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Heavy Duty website', '2016-10-19 16:39:33', '2016-10-19 16:39:33'),
(94, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Beauty world cup', '2016-10-19 16:47:08', '2016-10-19 16:47:08'),
(95, 'Usuario info@carloscastillo.cl ha editado Projecto "Beauty world cup" ID:21', '2016-10-19 17:02:26', '2016-10-19 17:02:26'),
(96, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: VAT calculator', '2016-10-19 17:02:42', '2016-10-19 17:02:42'),
(97, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Invoices calculator', '2016-10-19 17:07:09', '2016-10-19 17:07:09'),
(98, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: ME Maquinarias website', '2016-10-19 17:18:31', '2016-10-19 17:18:31'),
(99, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Toptoilet website', '2016-10-19 17:22:45', '2016-10-19 17:22:45'),
(100, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: CV Social website', '2016-10-19 17:26:14', '2016-10-19 17:26:14'),
(101, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: BiciTrader', '2016-10-19 17:29:57', '2016-10-19 17:29:57'),
(102, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Happy summer Eltit', '2016-10-19 17:33:37', '2016-10-19 17:33:37'),
(103, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Alto Cordillera dental clinic website', '2016-10-19 17:41:10', '2016-10-19 17:41:10'),
(104, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Office Space website', '2016-10-19 17:45:37', '2016-10-19 17:45:37'),
(105, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Dental Clinic Kreisberg website', '2016-10-19 18:03:24', '2016-10-19 18:03:24'),
(106, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: Prestashop', '2016-10-19 18:10:29', '2016-10-19 18:10:29'),
(107, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Ofipack website', '2016-10-19 18:14:06', '2016-10-19 18:14:06'),
(108, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Trans Astros website', '2016-10-19 18:23:34', '2016-10-19 18:23:34'),
(109, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Abengoa provider payment', '2016-10-19 18:28:53', '2016-10-19 18:28:53'),
(110, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Motorex Lab website', '2016-10-19 18:35:25', '2016-10-19 18:35:25'),
(111, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: McDonalds''s', '2016-10-19 18:42:03', '2016-10-19 18:42:03'),
(112, 'Usuario info@carloscastillo.cl ha editado Projecto "McDonalds''s Shift management system" ID:36', '2016-10-19 18:42:46', '2016-10-19 18:42:46'),
(113, 'Usuario info@carloscastillo.cl ha editado Projecto "McDonalds''s Shift management system" ID:36', '2016-10-19 18:42:54', '2016-10-19 18:42:54'),
(114, 'Usuario info@carloscastillo.cl ha creado nuevo Skill: API(s) implementation', '2016-10-19 18:59:54', '2016-10-19 18:59:54'),
(115, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Zom.cl', '2016-10-19 19:01:25', '2016-10-19 19:01:25'),
(116, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Candyspot website', '2016-10-19 19:06:12', '2016-10-19 19:06:12'),
(117, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Altera SMS Bulk system', '2016-10-19 19:19:59', '2016-10-19 19:19:59'),
(118, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Elec website', '2016-10-19 19:24:37', '2016-10-19 19:24:37'),
(119, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: DIDECO system', '2016-10-19 19:30:02', '2016-10-19 19:30:02'),
(120, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Queridos Novios', '2016-10-19 22:17:29', '2016-10-19 22:17:29'),
(121, 'Usuario info@carloscastillo.cl ha creado nuevo Project/Portfolio: Le Portfolio', '2016-10-21 21:52:52', '2016-10-21 21:52:52'),
(122, 'Usuario info@carloscastillo.cl ha editado Projecto "Queridos Novios" ID:42', '2016-10-23 21:27:04', '2016-10-23 21:27:04'),
(123, 'Usuario info@carloscastillo.cl ha editado Projecto "DIDECO system" ID:41', '2016-10-23 21:46:06', '2016-10-23 21:46:06'),
(124, 'Usuario DNIS:447774041604 ha enviado SMS:  hola+mundo - status response: 200', '2016-10-24 09:09:54', '2016-10-24 09:09:54'),
(125, 'Usuario DNIS:447774041604 ha enviado SMS:  hola+mundo - response system:OK2ff35359-4bcb-4768-aba7-502be6f8a7a4 - status response: 200', '2016-10-24 09:10:47', '2016-10-24 09:10:47'),
(126, 'Usuario DNIS:447774041604 ha enviado SMS <br>message:hola+mundo<br>response system:OKf5185d2a-73fa-4978-b2f7-a6b7d2cefefb<br>status response: 200', '2016-10-24 09:12:15', '2016-10-24 09:12:15'),
(127, 'Usuario DNIS:447774041604 ha enviado SMS \\n message:hola+mundo<br>response system:OKc16e400e-5eb4-4bf5-9efd-57b717e27a2b<br>status response: 200', '2016-10-24 09:14:12', '2016-10-24 09:14:12'),
(128, 'Usuario DNIS:447774041604 ha enviado SMS <br>message:hola+mundo<br>response system:OK7f97bbad-0da6-4f1b-ae35-b6433942c22a<br>status response: 200', '2016-10-24 09:25:36', '2016-10-24 09:25:36'),
(129, 'Usuario DNIS:447774041604 ha enviado SMS <br>message:hola+mundo<br>response system:OK5aa91669-872b-463c-9467-f190ce396b1b<br>status response: 200', '2016-10-24 09:26:35', '2016-10-24 09:26:35'),
(130, 'Usuario DNIS:447774041601 ha enviado SMS <br>message:hola+mundo<br>response system:OKcc357e07-f66c-4fbc-ad44-0c89bae20fec<br>status response: 200', '2016-10-24 09:26:52', '2016-10-24 09:26:52'),
(131, 'Usuario DNIS:447774041604 ha enviado SMS <br>message:Hello! this is a test SMS, your code is:<br>response system:8dc818cb-c970-42c1-9c4c-1d7b9102f2aa, [OK8dc818cb-c970-42c1-9c4c-1d7b9102f2aa]<br>status response: 200', '2016-10-24 09:41:10', '2016-10-24 09:41:10'),
(132, 'Usuario DNIS:447774041604 ha enviado SMS <br>message:Hello! this is a test SMS, your code is:<br>response system:170de988-c0f7-436f-9e81-d8d5953a251a, [OK170de988-c0f7-436f-9e81-d8d5953a251a]<br>status response: 200<br>user code:EWTA93068', '2016-10-24 09:42:05', '2016-10-24 09:42:05'),
(133, 'Usuario DNIS:447774041604 ha enviado SMS <br>message:Hello! this is a test SMS, your code is: WJRZ87309<br>response system:0f89b5f9-45ab-4a40-b5a9-a851388c78b6, [OK0f89b5f9-45ab-4a40-b5a9-a851388c78b6]<br>status response: 200<br>user code:WJRZ87309', '2016-10-24 09:43:07', '2016-10-24 09:43:07'),
(134, 'Usuario DNIS:447774041604 ha enviado SMS <br>message: <strong>Hello! this is a test SMS, your code is: HGYR753710</strong><br>response system:293b85f4-0508-437c-b8ee-983f7b6fe7c1, [OK293b85f4-0508-437c-b8ee-983f7b6fe7c1]<br>status response: 200<br>user code:HGYR753710', '2016-10-24 09:43:44', '2016-10-24 09:43:44'),
(135, 'Usuario DNIS:<strong>447774041604</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: JJRJ446711</strong><br>response system:2b073691-948a-45fd-ba05-03af61bed8b2, [OK2b073691-948a-45fd-ba05-03af61bed8b2]<br>status response: 200<br>user code:JJRJ446711', '2016-10-24 09:44:21', '2016-10-24 09:44:21'),
(136, 'Usuario DNIS:<strong>asfdasdasd</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: GREH862012</strong><br>response system:BAD PARAMETERS, [BAD PARAMETERS]<br>status response: 200<br>user code:GREH862012', '2016-10-24 10:04:31', '2016-10-24 10:04:31'),
(137, 'Usuario DNIS:<strong>444345dfgdfg</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: EKEB761313</strong><br>response system:BAD PARAMETERS, [BAD PARAMETERS]<br>status response: 200<br>user code:EKEB761313', '2016-10-24 10:09:45', '2016-10-24 10:09:45'),
(138, 'Usuario DNIS:<strong>447774041604</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: HZTZ342914</strong><br>response system:e2714b2e-e48a-421d-aaf3-b30c1d471a2f, [OKe2714b2e-e48a-421d-aaf3-b30c1d471a2f]<br>status response: 200<br>user code:HZTZ342914', '2016-10-24 10:11:44', '2016-10-24 10:11:44'),
(139, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: PGHY246015</strong><br>response system:d228408e-f71c-4a0a-9a07-7ec76e64f58d, [OKd228408e-f71c-4a0a-9a07-7ec76e64f58d]<br>status response: 200<br>user code:PGHY246015', '2016-10-24 10:13:25', '2016-10-24 10:13:25'),
(140, 'Usuario DNIS:<strong>44jhgjhgjh</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: GEFT244016</strong><br>response system:BAD PARAMETERS, [BAD PARAMETERS]<br>status response: 200<br>user code:GEFT244016', '2016-10-24 10:32:26', '2016-10-24 10:32:26'),
(141, 'Usuario DNIS:<strong>44asdasdasd</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: DSHV350717</strong><br>response system:BAD PARAMETERS, [BAD PARAMETERS]<br>status response: 200<br>user code:DSHV350717', '2016-10-24 10:40:02', '2016-10-24 10:40:02'),
(142, 'Usuario DNIS:<strong>44jhgytuyutuy</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: JVVY961918</strong><br>response system:BAD PARAMETERS, [BAD PARAMETERS]<br>status response: 200<br>user code:JVVY961918', '2016-10-24 10:40:55', '2016-10-24 10:40:55'),
(143, 'Usuario DNIS:<strong>44sdfsdfsdf</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: HWKA592019</strong><br>response system:BAD PARAMETERS, [BAD PARAMETERS]<br>status response: 200<br>user code:HWKA592019', '2016-10-24 10:42:36', '2016-10-24 10:42:36'),
(144, 'Usuario DNIS:<strong>4432423</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: AZHE649320</strong><br>response system:BAD PARAMETERS, [BAD PARAMETERS]<br>status response: 200<br>user code:AZHE649320', '2016-10-24 10:45:56', '2016-10-24 10:45:56'),
(145, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: KAAE640321</strong><br>response system:d0687c3e-7244-4d08-b82d-93f1ab7249d5, [OKd0687c3e-7244-4d08-b82d-93f1ab7249d5]<br>status response: 200<br>user code:KAAE640321', '2016-10-24 10:46:24', '2016-10-24 10:46:24'),
(146, 'Usuario DNIS:<strong>4477740416</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: SVMJ418322</strong><br>response system:BAD PARAMETERS, [BAD PARAMETERS]<br>status response: 200<br>user code:SVMJ418322', '2016-10-24 10:46:42', '2016-10-24 10:46:42'),
(147, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: VDFD516823</strong><br>response system:b0ec90f6-c0e5-4115-9b10-7826f351881b, [OKb0ec90f6-c0e5-4115-9b10-7826f351881b]<br>status response: 200<br>user code:VDFD516823', '2016-10-24 10:51:48', '2016-10-24 10:51:48'),
(148, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: SGSB149724</strong><br>response system:6acbccb6-d238-4015-9332-330802a6a47a, [OK6acbccb6-d238-4015-9332-330802a6a47a]<br>status response: 200<br>user code:SGSB149724', '2016-10-24 10:55:44', '2016-10-24 10:55:44'),
(149, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: PRTH579125</strong><br>response system:2fd9b335-7918-4893-b57f-2d12a8376ea1, [OK2fd9b335-7918-4893-b57f-2d12a8376ea1]<br>status response: 200<br>user code:PRTH579125', '2016-10-24 11:00:43', '2016-10-24 11:00:43'),
(150, 'Usuario DNIS:<strong>447774041604</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: UUDJ188226</strong><br>response system:368e6861-2c58-450a-8bec-19f7c871f1f9, [OK368e6861-2c58-450a-8bec-19f7c871f1f9]<br>status response: 200<br>user code:UUDJ188226', '2016-10-24 11:01:35', '2016-10-24 11:01:35'),
(151, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: TDSC635627</strong><br>response system:2db200d7-e05a-42e7-9cdc-4d4ea1e5eb88, [OK2db200d7-e05a-42e7-9cdc-4d4ea1e5eb88]<br>status response: 200<br>user code:TDSC635627', '2016-10-24 11:02:54', '2016-10-24 11:02:54'),
(152, 'Usuario DNIS:<strong>447774041604</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: DDTV808528</strong><br>response system:3e5d1c9f-b135-4a50-b9ee-90737200c759, [OK3e5d1c9f-b135-4a50-b9ee-90737200c759]<br>status response: 200<br>user code:DDTV808528', '2016-10-24 11:03:34', '2016-10-24 11:03:34'),
(153, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: VTWU798829</strong><br>response system:a0bf704e-3be4-4aab-af76-dd1c36d4f5f5, [OKa0bf704e-3be4-4aab-af76-dd1c36d4f5f5]<br>status response: 200<br>user code:VTWU798829', '2016-10-24 11:04:12', '2016-10-24 11:04:12'),
(154, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: GDGT666530</strong><br>response system:9949fd4e-bec7-4c9c-9497-4aafa7b04386, [OK9949fd4e-bec7-4c9c-9497-4aafa7b04386]<br>status response: 200<br>user code:GDGT666530', '2016-10-24 11:05:13', '2016-10-24 11:05:13'),
(155, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: DRGY309831</strong><br>response system:275591c6-a821-4ea1-95aa-4c9723da8307, [OK275591c6-a821-4ea1-95aa-4c9723da8307]<br>status response: 200<br>user code:DRGY309831', '2016-10-24 11:06:49', '2016-10-24 11:06:49'),
(156, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: HFZZ259432</strong><br>response system:bc48129f-a24f-434c-92bb-549453c707ce, [OKbc48129f-a24f-434c-92bb-549453c707ce]<br>status response: 200<br>user code:HFZZ259432', '2016-10-24 11:09:43', '2016-10-24 11:09:43'),
(157, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: MMVU209833</strong><br>response system:0177f896-95bb-44ea-be06-e5427277e771, [OK0177f896-95bb-44ea-be06-e5427277e771]<br>status response: 200<br>user code:MMVU209833', '2016-10-24 11:12:10', '2016-10-24 11:12:10'),
(158, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: EWGY688434</strong><br>response system:1ed5ae6c-9bc4-40b5-a833-84869058cea7, [OK1ed5ae6c-9bc4-40b5-a833-84869058cea7]<br>status response: 200<br>user code:EWGY688434', '2016-10-24 11:12:41', '2016-10-24 11:12:41'),
(159, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: WYYP415535</strong><br>response system:f36bcf0a-1d32-45c2-97d8-92247ab65637, [OKf36bcf0a-1d32-45c2-97d8-92247ab65637]<br>status response: 200<br>user code:WYYP415535', '2016-10-24 11:13:56', '2016-10-24 11:13:56'),
(160, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: KVUB712536</strong><br>response system:55d2695b-57c5-4c5b-8d43-eb68c276b715, [OK55d2695b-57c5-4c5b-8d43-eb68c276b715]<br>status response: 200<br>user code:KVUB712536', '2016-10-24 11:14:07', '2016-10-24 11:14:07'),
(161, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: TTTM670637</strong><br>response system:e212d2be-7f50-4caf-9d98-2f66cb756817, [OKe212d2be-7f50-4caf-9d98-2f66cb756817]<br>status response: 200<br>user code:TTTM670637', '2016-10-24 11:14:28', '2016-10-24 11:14:28'),
(162, 'Usuario DNIS:<strong>447774041601</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: MYTK972138</strong><br>response system:1573b664-a8a6-42c2-9496-a9222903be70, [OK1573b664-a8a6-42c2-9496-a9222903be70]<br>status response: 200<br>user code:MYTK972138', '2016-10-24 11:14:52', '2016-10-24 11:14:52'),
(163, 'Usuario DNIS:<strong>447774041604</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: HHBM181639</strong><br>response system:60351082-9048-4325-bd67-ce2a2ba7f475, [OK60351082-9048-4325-bd67-ce2a2ba7f475]<br>status response: 200<br>user code:HHBM181639', '2016-10-24 21:16:26', '2016-10-24 21:16:26'),
(164, 'Usuario DNIS:<strong>447774041604</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: KGSY930739</strong><br>response system:19269687-4600-483f-8451-819b672d8f34, [OK19269687-4600-483f-8451-819b672d8f34]<br>status response: 200<br>user code:KGSY930739', '2016-10-24 21:16:26', '2016-10-24 21:16:26'),
(165, 'Usuario DNIS:<strong>447774041604</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: UUZY348241</strong><br>response system:a18be6a7-13fb-418e-b74f-7435245bff41, [OKa18be6a7-13fb-418e-b74f-7435245bff41]<br>status response: 200<br>user code:UUZY348241', '2016-10-24 21:17:26', '2016-10-24 21:17:26'),
(166, 'Usuario DNIS:<strong>447774041604</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: TAHM911642</strong><br>response system:6fc42cd0-740f-49f8-bf2d-92a5ebf58c45, [OK6fc42cd0-740f-49f8-bf2d-92a5ebf58c45]<br>status response: 200<br>user code:TAHM911642', '2016-10-24 21:53:17', '2016-10-24 21:53:17'),
(167, 'Usuario DNIS:<strong>447774041604</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: FKKY879543</strong><br>response system:cb39a2dc-dc07-4b1a-b18f-32c53aaf40b0, [OKcb39a2dc-dc07-4b1a-b18f-32c53aaf40b0]<br>status response: 200<br>user code:FKKY879543', '2016-10-25 16:12:55', '2016-10-25 16:12:55'),
(168, 'Usuario DNIS:<strong>447774041604</strong> ha enviado un SMS <br>message: <strong>Hello! this is a test SMS, your code is: MYCK497244</strong><br>response system:e3f8e7ce-6dc2-452c-a7f0-71c1d32e70a7, [OKe3f8e7ce-6dc2-452c-a7f0-71c1d32e70a7]<br>status response: 200<br>user code:MYCK497244', '2016-10-26 18:00:07', '2016-10-26 18:00:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `link` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `finished` tinyint(1) DEFAULT NULL,
  `order` decimal(10,0) DEFAULT NULL,
  `link_available` tinyint(1) DEFAULT '1',
  `home` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_projects_users_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `name`, `client`, `description`, `image`, `link`, `created_at`, `updated_at`, `deleted_at`, `users_id`, `active`, `finished`, `order`, `link_available`, `home`) VALUES
(2, 'Motorex web site', 'Motorex Chile S.A.', 'Chilean official site for the Swiss brand lubricants', 'porftolio_carlos_castillo_705864439.jpeg', 'http://www.motorexchile.cl', '2016-10-19 12:00:42', '2016-10-19 14:41:07', NULL, 1, 1, 1, '100', 1, 0),
(3, 'Motorex customer system', 'Motorex Chile S.A.', 'web system created for customers who want to order new product orders, see new products, offers and view order history.', 'porftolio_carlos_castillo_1889764681.jpeg', 'http://motorexchile.cl/clientes/', '2016-10-19 14:45:06', '2016-10-19 14:50:33', NULL, 1, 1, 1, '99', 1, 0),
(4, 'Motard & Superbike Chile', 'React producciones', 'Website developed to display all information related with motard and superbike racing in Chile. General information, positions, videos, pictures and more.', 'porftolio_carlos_castillo_973340312.jpeg', 'http://www.motardchile.cl/', '2016-10-19 14:56:10', '2016-10-19 14:56:10', NULL, 1, 1, 1, '98', 0, 0),
(5, 'Special Olympics Chile', 'Special Olympics Chile', 'Web site of an international program of fitness and athletic competition for children and adults who have mental and often physical disabilities. ', 'porftolio_carlos_castillo_1478567893.jpeg', 'http://www.olimpiadasespecialeschile.org', '2016-10-19 15:00:28', '2016-10-19 15:00:28', NULL, 1, 1, 1, '97', 1, 0),
(6, 'Amotor', 'AMOTOR S.A.', 'New and Used cars search web platform. Multi-level users. Multiple web tools for retailers and end users.', 'porftolio_carlos_castillo_1616590739.jpeg', 'http://amotor.cl', '2016-10-19 15:07:31', '2016-10-19 15:10:09', NULL, 1, 1, 1, '96', 1, 0),
(7, 'Boldtex', 'Boldtex Chile', 'Web product catalog and construction of parking lots with high-tech textiles. Cart, register and orders.', 'porftolio_carlos_castillo_729788067.jpeg', 'http://boldtex.cl', '2016-10-19 15:15:55', '2016-10-19 15:15:55', NULL, 1, 1, 1, '95', 1, 0),
(8, 'Homework Unimarc', 'Linea Trade', 'Web advertising campaign aimed at schools in which each course participates accumulate points to win various prizes.', 'porftolio_carlos_castillo_1814950680.jpeg', 'http://www.tareaparalacasa.cl/', '2016-10-19 15:21:54', '2016-10-19 15:21:54', NULL, 1, 1, 1, '94', 0, 0),
(9, 'Trabun Hostels website', 'Trabun Hostels', 'Website information chain hotels in central Chile', 'porftolio_carlos_castillo_697574608.jpeg', 'www.hostalestrabun.cl', '2016-10-19 15:25:08', '2016-10-19 15:25:08', NULL, 1, 1, 1, '93', 0, 0),
(10, 'Club Unilever', 'Linea Trade', 'Website developed for customers with unilever markets and belong to the club, on this website can be found by accumulated points to redeem products and earn more points by answering surveys, games and more.', 'porftolio_carlos_castillo_1946280094.png', 'http://clubunilever.cl', '2016-10-19 15:31:15', '2016-10-19 15:31:15', NULL, 1, 1, 1, '92', 1, 0),
(11, 'Demodulo website', 'Demodulo', 'Website product catalog for supplying stores throughout Chile. User register, cart, order module.', 'porftolio_carlos_castillo_658379878.jpeg', 'http://www.demodulo.cl/', '2016-10-19 15:40:33', '2016-10-19 15:40:33', NULL, 1, 1, 1, '91', 1, 0),
(12, 'Rexona summer Chile', 'Linea Trade', 'Web application for use in tablets in supermarkets. Based on a roulette which the user could enter to win prizes. advertising campaign around Chile.', 'porftolio_carlos_castillo_1173929780.jpeg', 'www.veranorexona.cl', '2016-10-19 15:45:22', '2016-10-19 15:45:22', NULL, 1, 1, 1, '90', 0, 0),
(13, 'Manquehue Club website', 'Manquehue Club Chile', 'Informative club website of the German colony in Santiago. Its branches, admission requirements, facilities, events and more.', 'porftolio_carlos_castillo_1525515785.jpeg', 'http://www.clubmanquehue.cl', '2016-10-19 15:52:56', '2016-10-19 15:52:56', NULL, 1, 1, 1, '89', 1, 0),
(14, 'Loharia.com', 'Loharia', 'Startup platform that allows anybody to buy or sell products, services, consultancy, classes etc for only $5000 Chilean Pesos (or 5pounds)', 'porftolio_carlos_castillo_537370865.jpeg', 'http://www.loharia.com/', '2016-10-19 15:56:53', '2016-10-19 15:56:53', NULL, 1, 1, 1, '89', 0, 0),
(15, 'Allué Automotive Conversions website', 'Allué Automotive Conversions', 'website portfolio, informative for buses and minibuses equipment. mobile workshops.', 'porftolio_carlos_castillo_1437813166.png', 'http://www.allueconversiones.cl', '2016-10-19 16:05:38', '2016-10-19 16:05:38', NULL, 1, 1, 1, '88', 1, 0),
(16, 'Security Sat website', 'Security Sat Chile', 'Wordpress Website for security company', 'porftolio_carlos_castillo_1668861757.jpeg', 'http://www.securitysat.cl', '2016-10-19 16:13:33', '2016-10-19 16:13:33', NULL, 1, 1, 1, '87', 0, 0),
(17, 'HostNow website', 'HostNow, ITD Chile', 'Website hosting services company with clients system', 'porftolio_carlos_castillo_1427011223.jpeg', 'http://www.hostnow.cl', '2016-10-19 16:17:31', '2016-10-19 16:17:31', NULL, 1, 1, 1, '86', 1, 0),
(18, 'ITD Chile website', 'ITD Chile', 'Telecommunications company that provided bulk SMS and bulk mailing services as well as web development solutions, and hosting services.', 'porftolio_carlos_castillo_1154136429.png', 'http://itdchile.cl', '2016-10-19 16:30:24', '2016-10-19 16:30:24', NULL, 1, 1, 1, '85', 1, 0),
(19, 'Ministro Hales Division News', 'Codelco division', 'Related news mining industry and bulk newsletter mailings every month.', 'porftolio_carlos_castillo_88394401.jpeg', 'www.newsletterdivisionministrohales.cl', '2016-10-19 16:36:03', '2016-10-19 16:36:03', NULL, 1, 1, 1, '84', 0, 0),
(20, 'Heavy Duty website', 'Heavy Duty', 'Website relating to the construction, rental and service of cranes and other services', 'porftolio_carlos_castillo_514535212.jpeg', 'http://www.heavyduty.cl', '2016-10-19 16:39:33', '2016-10-19 16:39:33', NULL, 1, 1, 1, '83', 1, 0),
(21, 'Beauty world cup', 'Linea Trade', 'Web application for use in tablets in supermarkets. Based on a roulette which the user could enter to win prizes. advertising campaign around Chile.', 'porftolio_carlos_castillo_118812094.jpeg', 'http://carloscastillo.cl', '2016-10-19 16:47:08', '2016-10-19 17:02:26', NULL, 1, 1, 1, '82', 1, 0),
(22, 'VAT calculator', 'Carlos Castillo (Me)', 'web tool to calculate the VAT', 'porftolio_carlos_castillo_983164739.png', 'http://calculariva.cl/', '2016-10-19 17:02:42', '2016-10-19 17:02:42', NULL, 1, 1, 1, '81', 1, 0),
(23, 'Invoices calculator', 'Carlos Castillo (Me)', 'Web tool to calculate invoices', 'porftolio_carlos_castillo_1061966415.png', 'http://calcularhonorarios.cl', '2016-10-19 17:07:09', '2016-10-19 17:07:09', NULL, 1, 1, 1, '80', 1, 0),
(24, 'ME Maquinarias website', 'ME Maquinarias', 'Website for rental of specialized machinery', 'porftolio_carlos_castillo_1857253474.jpeg', 'http://memaquinarias.cl', '2016-10-19 17:18:31', '2016-10-19 17:18:31', NULL, 1, 1, 1, '79', 0, 0),
(25, 'Toptoilet website', 'Toptoilet', 'Website for rental of portable toilets', 'porftolio_carlos_castillo_552244400.png', 'http://toptoilet.cl', '2016-10-19 17:22:45', '2016-10-19 17:22:45', NULL, 1, 1, 1, '78', 1, 0),
(26, 'CV Social website', 'CV Social', 'Website to find jobs, user register, user apply job.', 'porftolio_carlos_castillo_1480232401.jpeg', 'http://www.cvsocial.cl', '2016-10-19 17:26:13', '2016-10-19 17:26:13', NULL, 1, 1, 1, '77', 0, 0),
(27, 'BiciTrader', 'Carlos Castillo (Me)', 'Platform to search for new and used bicycles and accessories in Chile.', 'porftolio_carlos_castillo_811650218.png', 'https://bicitrader.cl', '2016-10-19 17:29:57', '2016-10-19 17:29:57', NULL, 1, 1, 1, '76', 1, 0),
(28, 'Happy summer Eltit', 'Linea Trade', 'Marketing campaign in supermarkets throughout Chile', 'porftolio_carlos_castillo_2114924148.jpeg', 'http://veranofelizeltit.cl', '2016-10-19 17:33:37', '2016-10-19 17:33:37', NULL, 1, 1, 1, '75', 0, 0),
(29, 'Alto Cordillera dental clinic website', 'Alto Cordillera dental clinic', 'Informative website for dental clinic', 'porftolio_carlos_castillo_1871011215.png', 'http://www.clinicaaltocordillera.cl', '2016-10-19 17:41:10', '2016-10-19 17:41:10', NULL, 1, 1, 1, '74', 1, 0),
(30, 'Office Space website', 'Office Space', 'Web catalog of furniture and office equipment, quotes online', 'porftolio_carlos_castillo_2040257298.png', 'http://espaciooficina.cl', '2016-10-19 17:45:36', '2016-10-19 17:45:36', NULL, 1, 1, 1, '73', 1, 0),
(31, 'Dental Clinic Kreisberg website', 'Dental Clinic Kreisberg', 'Informative website for dental clinic', 'porftolio_carlos_castillo_1022598819.png', 'http://kreisbergortodoncia.cl', '2016-10-19 18:03:24', '2016-10-19 18:03:24', NULL, 1, 1, 1, '72', 1, 0),
(32, 'Ofipack website', 'Ofipack', 'Website of office supplies', 'porftolio_carlos_castillo_1009755193.png', 'http://www.ofipack.cl', '2016-10-19 18:14:06', '2016-10-19 18:14:06', NULL, 1, 1, 1, '71', 1, 0),
(33, 'Trans Astros website', 'Astros Transports', 'Informative website for carrier', 'porftolio_carlos_castillo_112424822.png', 'http://www.transastros.cl', '2016-10-19 18:23:34', '2016-10-19 18:23:34', NULL, 1, 1, 1, '70', 1, 0),
(34, 'Abengoa provider payment', 'Abengoa Chile', 'Payment system providers Company', 'porftolio_carlos_castillo_1273194945.png', 'http://abengoa.itdchile.cl/', '2016-10-19 18:28:53', '2016-10-19 18:28:53', NULL, 1, 1, 0, '69', 1, 0),
(35, 'Motorex Lab website', 'Motorex Chile S.A.', 'Website information for a bicycle mecanics garage with booking module for bike repairs', 'porftolio_carlos_castillo_1596534329.png', 'http://motorexlab.cl', '2016-10-19 18:35:25', '2016-10-19 18:35:25', NULL, 1, 1, 1, '68', 1, 0),
(36, 'McDonalds''s Shift management system', 'McDonalds''s Chile', 'Management system shifts in branches and checklists. Project still under review.', 'porftolio_carlos_castillo_223377879.png', 'http://mc1.itdchile.cl', '2016-10-19 18:42:03', '2016-10-19 18:42:54', NULL, 1, 1, 0, '67', 1, 0),
(37, 'Zom.cl', 'ITD Chile', 'web system via bulk SMS contests. Not implemented yet.', 'porftolio_carlos_castillo_1389351400.png', 'http://zom.cl', '2016-10-19 19:01:24', '2016-10-19 19:01:24', NULL, 1, 1, 1, '66', 1, 0),
(38, 'Candyspot website', 'Candyspot', 'E-commerce selling candy and toys', 'porftolio_carlos_castillo_2144840589.png', 'http://candyspot.cl', '2016-10-19 19:06:12', '2016-10-19 19:06:12', NULL, 1, 1, 1, '65', 1, 0),
(39, 'Altera SMS Bulk system', 'Altera', 'Web app for SMS Bulk, user management, user roles, credits modules, api implementations . Project still under review.', 'porftolio_carlos_castillo_1032162530.png', 'http://mcdigital.itdchile.cl/', '2016-10-19 19:19:59', '2016-10-19 19:19:59', NULL, 1, 1, 0, '64', 1, 0),
(40, 'Elec website', 'Elec S.A.', 'Ecommerce for lighting products. Project still under review.', 'porftolio_carlos_castillo_1352977589.png', 'http://elec.itdchile.cl', '2016-10-19 19:24:37', '2016-10-19 19:24:37', NULL, 1, 1, 0, '63', 1, 0),
(41, 'DIDECO system', 'Municipality of Quintero, Chile', 'Multi-user system that allows users to enter poor requesting financial, medical or social help. The system keeps track of each application and transmitted to various departamentes the municipality. At the end analyzes the general statistics.', 'porftolio_carlos_castillo_254282787.png', 'http://dideco.muniquintero.cl', '2016-10-19 19:30:02', '2016-10-23 21:46:06', NULL, 1, 1, 1, '62', 1, 1),
(42, 'Queridos Novios', 'Queridos Novios Ltda', 'multi-user web system based in wish lists where users can register and create wish lists and other users can buy and give wishes via online transaction.', 'porftolio_carlos_castillo_2037775667.png', 'http://queridosnovios.com', '2016-10-19 22:17:29', '2016-10-23 21:27:04', NULL, 1, 1, 0, '61', 1, 1),
(43, 'Le Portfolio', 'Carlos Castillo (Me)', 'My last portfolio, in english!!!', 'porftolio_carlos_castillo_375404187.png', 'http://carloscastillo.cl', '2016-10-21 21:52:52', '2016-10-21 21:52:52', NULL, 1, 1, 1, '60', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects_galleries`
--

CREATE TABLE IF NOT EXISTS `projects_galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `projects_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_project_gallery_projects1_idx` (`projects_id`)
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

--
-- Volcado de datos para la tabla `projects_has_skills`
--

INSERT INTO `projects_has_skills` (`projects_id`, `skills_id`) VALUES
(29, 2),
(31, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 3),
(32, 3),
(33, 3),
(34, 3),
(35, 3),
(36, 3),
(37, 3),
(38, 3),
(39, 3),
(40, 3),
(41, 3),
(42, 3),
(43, 3),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(20, 4),
(21, 4),
(22, 4),
(23, 4),
(24, 4),
(25, 4),
(26, 4),
(27, 4),
(28, 4),
(29, 4),
(30, 4),
(31, 4),
(32, 4),
(33, 4),
(34, 4),
(35, 4),
(36, 4),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 4),
(42, 4),
(43, 4),
(5, 5),
(6, 5),
(7, 5),
(9, 5),
(10, 5),
(11, 5),
(12, 5),
(13, 5),
(14, 5),
(15, 5),
(16, 5),
(17, 5),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 5),
(24, 5),
(25, 5),
(26, 5),
(27, 5),
(28, 5),
(29, 5),
(30, 5),
(32, 5),
(33, 5),
(34, 5),
(35, 5),
(36, 5),
(37, 5),
(38, 5),
(39, 5),
(40, 5),
(42, 5),
(43, 5),
(2, 6),
(3, 6),
(6, 6),
(7, 6),
(10, 6),
(11, 6),
(12, 6),
(13, 6),
(14, 6),
(15, 6),
(16, 6),
(17, 6),
(19, 6),
(20, 6),
(22, 6),
(23, 6),
(24, 6),
(25, 6),
(26, 6),
(27, 6),
(28, 6),
(29, 6),
(30, 6),
(31, 6),
(32, 6),
(33, 6),
(34, 6),
(35, 6),
(36, 6),
(37, 6),
(38, 6),
(39, 6),
(40, 6),
(41, 6),
(42, 6),
(43, 6),
(2, 7),
(3, 7),
(6, 7),
(7, 7),
(8, 7),
(9, 7),
(10, 7),
(11, 7),
(12, 7),
(13, 7),
(14, 7),
(15, 7),
(16, 7),
(17, 7),
(19, 7),
(20, 7),
(21, 7),
(22, 7),
(23, 7),
(24, 7),
(25, 7),
(26, 7),
(27, 7),
(28, 7),
(29, 7),
(30, 7),
(31, 7),
(32, 7),
(33, 7),
(34, 7),
(35, 7),
(36, 7),
(37, 7),
(38, 7),
(39, 7),
(40, 7),
(41, 7),
(42, 7),
(43, 7),
(14, 8),
(31, 8),
(36, 8),
(37, 8),
(38, 8),
(43, 8),
(38, 9),
(39, 9),
(40, 9),
(41, 9),
(42, 9),
(43, 9),
(2, 10),
(3, 10),
(4, 10),
(5, 10),
(6, 10),
(7, 10),
(8, 10),
(9, 10),
(10, 10),
(11, 10),
(12, 10),
(13, 10),
(14, 10),
(15, 10),
(16, 10),
(17, 10),
(18, 10),
(19, 10),
(20, 10),
(21, 10),
(22, 10),
(23, 10),
(24, 10),
(25, 10),
(26, 10),
(27, 10),
(28, 10),
(29, 10),
(30, 10),
(31, 10),
(32, 10),
(33, 10),
(34, 10),
(35, 10),
(36, 10),
(37, 10),
(38, 10),
(39, 10),
(40, 10),
(41, 10),
(42, 10),
(43, 10),
(2, 11),
(3, 11),
(4, 11),
(5, 11),
(6, 11),
(7, 11),
(8, 11),
(9, 11),
(10, 11),
(11, 11),
(12, 11),
(13, 11),
(14, 11),
(15, 11),
(16, 11),
(17, 11),
(18, 11),
(19, 11),
(21, 11),
(22, 11),
(23, 11),
(24, 11),
(25, 11),
(26, 11),
(27, 11),
(29, 11),
(30, 11),
(31, 11),
(32, 11),
(33, 11),
(34, 11),
(35, 11),
(36, 11),
(37, 11),
(38, 11),
(39, 11),
(40, 11),
(41, 11),
(42, 11),
(43, 11),
(2, 12),
(6, 12),
(8, 12),
(10, 12),
(12, 12),
(13, 12),
(15, 12),
(17, 12),
(18, 12),
(19, 12),
(20, 12),
(21, 12),
(24, 12),
(27, 12),
(29, 12),
(30, 12),
(31, 12),
(32, 12),
(35, 12),
(38, 12),
(42, 12),
(43, 12),
(43, 13),
(14, 14),
(39, 14),
(13, 17),
(16, 17),
(29, 27),
(32, 29),
(39, 30),
(43, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` text,
  `order` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `users_id` int(11) NOT NULL,
  `skill_categories_id` int(11) NOT NULL,
  `home` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_skills_users1_idx` (`users_id`),
  KEY `fk_skills_skill_categories1_idx` (`skill_categories_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `skills`
--

INSERT INTO `skills` (`id`, `name`, `description`, `image`, `order`, `created_at`, `updated_at`, `active`, `users_id`, `skill_categories_id`, `home`) VALUES
(2, 'Laravel', 'le description', '<svg viewBox="0 0 128 128">\r\n                                <path fill="#FD4F31" d="M14.887 18.316l2.72 4.523 2.507 4.182c1.301 2.17 2.602 4.34 3.901 6.51l2.662 4.44 3.882 6.465 4.749 7.936c1.369 2.285 2.741 4.569 4.112 6.853l.184.267c.199.062.357.009.521-.03 1.807-.434 3.614-.865 5.421-1.296 2.931-.7 5.862-1.398 8.792-2.099l4.592-1.098c2.962-.708 5.926-1.414 8.889-2.124 2.996-.716 5.99-1.436 8.985-2.154 1.514-.363 3.028-.725 4.543-1.086l8.792-2.096 9.575-2.28.517-.14-.141-.28c-.869-1.232-1.742-2.462-2.613-3.693l-2.581-3.654-2.76-3.898-2.639-3.737-2.614-3.693-2.701-3.816-2.646-3.731-1.396-1.969c-.213-.303-.383-.628-.497-.982-.275-.856.039-1.425.538-1.846.324-.274.696-.474 1.1-.593.562-.166 1.128-.324 1.702-.432 1.151-.217 2.309-.402 3.465-.594 1.304-.217 2.609-.424 3.915-.639.825-.136 1.65-.279 2.476-.419l3.367-.567c1.089-.183 2.18-.364 3.269-.543l3.568-.583 2.477-.417c.94-.157 1.882-.314 2.823-.468 1.174-.191 2.346-.384 3.521-.568.698-.109 1.399-.148 2.093.052.521.151.994.395 1.436.706l.61.426c.061-.141-.027-.217-.067-.298-.881-1.782-2.082-3.314-3.606-4.592-1.419-1.187-3.012-2.06-4.773-2.616-1.04-.33-2.109-.483-3.199-.565l-.535-.08h-79.262l-.429.069c-.954.075-1.892.217-2.815.47-2.021.555-3.817 1.519-5.401 2.885-.932.803-1.745 1.707-2.435 2.727-1.065 1.574-1.792 3.285-2.156 5.189l.461.803c1.033 1.726 2.067 3.449 3.101 5.173zM20.128 106.141c.97.373 1.972.635 3.006.762l1.047.047c.163.021.32.05.48.05h32.288c-.052 0-.099-.149-.157-.25-1.271-2.168-2.554-4.296-3.81-6.472-1.581-2.742-3.147-5.477-4.705-8.233-1.664-2.944-3.313-5.89-4.965-8.842-1.569-2.807-3.135-5.611-4.698-8.42-.944-1.698-1.883-3.396-2.825-5.095l-.252-.388-.458.091c-.908.234-1.814.471-2.721.709-1.262.332-2.522.67-3.785 1-2.834.738-5.669 1.471-8.503 2.207-2.883.748-5.704 1.498-8.589 2.243-.175.046.519.062-.481.092v17.905c1 .104.136.294.158.477.066.53.085 1.064.179 1.59.349 1.957 1.089 3.747 2.224 5.378 1.664 2.392 3.852 4.103 6.567 5.149zM14.006 65.751c3.336-.793 6.672-1.585 10.008-2.377l4.396-1.039c.732-.174 1.468-.341 2.194-.537.646-.175.727-.389.394-.973-.481-.844-.97-1.682-1.458-2.522l-4.288-7.383-4.287-7.385c-1.454-2.504-2.909-5.009-4.364-7.513l-3.736-6.427-1.553-2.781c-.1-.17.689-.371-.311-.461v40.135c0-.027.204-.05.333-.081l2.672-.656zM116.677 94.439c-1.308.465-2.615.933-3.923 1.401-2.977 1.067-5.953 2.134-8.93 3.202-1.652.593-3.304 1.193-4.959 1.784-3.371 1.204-6.744 2.403-10.117 3.604-1.955.696-3.91 1.325-5.863 2.024-.535.193-1.063.546-1.593.546h22.431l.484-.046c.569-.024 1.131-.078 1.691-.181 2.303-.421 4.365-1.359 6.191-2.815 1.402-1.118 2.544-2.456 3.438-4.016.92-1.606 1.466-3.329 1.728-5.153.023-.157.072-.328-.06-.491-.184-.014-.349.08-.518.141zM114.75 64.318c-.99-1.353-1.98-2.704-2.968-4.058-1.362-1.869-2.723-3.74-4.083-5.609-.553-.759-1.113-1.512-1.654-2.279-.162-.231-.348-.292-.601-.224l-.145.042c-2.505.608-5.011 1.216-7.517 1.823l-4.489 1.089-8.782 2.133c-2.896.704-5.791 1.408-8.687 2.111-3.01.729-6.02 1.456-9.028 2.186-2.961.719-5.921 1.44-8.881 2.16-2.863.695-5.726 1.391-8.589 2.085-1.513.367-3.025.733-4.537 1.103-.223.054-.463.067-.699.247l.202.385c1.268 2.19 2.535 4.379 3.806 6.567 1.438 2.478 2.878 4.955 4.321 7.43 1.587 2.72 3.178 5.439 4.768 8.159.913 1.562 1.821 3.127 2.742 4.685 1.023 1.73 2.051 3.458 3.094 5.178.312.515.666 1.006 1.023 1.49.24.323.537.599.887.81.36.218.75.286 1.159.194.212-.048.419-.118.624-.189l.754-.279c2.74-.938 5.48-1.875 8.223-2.809 2.139-.729 4.28-1.453 6.421-2.177 2.125-.72 4.251-1.438 6.376-2.155 2.109-.713 4.219-1.425 6.329-2.137 2.157-.729 4.314-1.458 6.471-2.189 2.647-.898 5.294-1.8 7.942-2.696 2.553-.864 5.107-1.723 7.662-2.584.156-.053.329-.075.459-.247l.016-.372c0-5.296-.001-10.594.006-15.891 0-.283-.076-.511-.246-.738-.801-1.077-1.588-2.162-2.379-3.244zM114.311 14.411c-.595-.753-1.352-.992-2.279-.75-.404.106-.819.172-1.23.248-1.351.247-2.701.49-4.052.735-1.976.359-3.951.722-5.928 1.077-1.564.282-3.131.558-4.696.833l-6.281 1.099c-.264.046-.53.092-.783.173-.37.119-.478.351-.309.699.139.284.311.556.497.812 1.298 1.79 2.604 3.576 3.908 5.362 1.798 2.463 3.598 4.926 5.397 7.388 1.522 2.083 3.046 4.166 4.57 6.248 1.197 1.637 2.395 3.272 3.593 4.908l.237.286c3.447-.853 6.889-1.703 10.39-2.568l.024-.538c0-7.208-.001-14.415.006-21.622 0-.318-.078-.574-.277-.826-.875-1.103-1.732-2.219-2.597-3.33l-.19-.234zM117.106 49.333c-1.572.377-3.149.737-4.759 1.163.171.303 4.585 6.262 4.842 6.544l.162.089.018-.363v-2.51c.002-1.455.006-2.911.002-4.366 0-.178.049-.367-.072-.547l-.193-.01zM12.93 127v-17.133h3.633v14.133h6.949v3h-10.582zM36.977 127l-1.242-4.078h-6.246l-1.243 4.078h-3.914l6.047-17.203h4.441l6.071 17.203h-3.914zm-2.11-7.125c-1.148-3.695-1.795-5.785-1.939-6.27s-.248-.867-.311-1.148c-.258 1-.996 3.473-2.215 7.418h4.465zM46.68 120.426v6.574h-3.633v-17.133h4.992c2.328 0 4.051.424 5.168 1.271s1.676 2.135 1.676 3.861c0 1.008-.277 1.904-.832 2.689s-1.34 1.4-2.355 1.846c2.578 3.852 4.258 6.34 5.039 7.465h-4.031l-4.09-6.574h-1.934zm0-2.953h1.172c1.148 0 1.996-.191 2.543-.574s.82-.984.82-1.805c0-.812-.279-1.391-.838-1.734s-1.424-.516-2.596-.516h-1.101v4.629zM69.379 127l-1.242-4.078h-6.246l-1.243 4.078h-3.914l6.047-17.203h4.441l6.071 17.203h-3.914zm-2.109-7.125c-1.148-3.695-1.795-5.785-1.939-6.27s-.248-.867-.311-1.148c-.258 1-.996 3.473-2.215 7.418h4.465zM85.223 109.867h3.668l-5.825 17.133h-3.961l-5.812-17.133h3.668l3.223 10.195c.18.602.365 1.303.557 2.104s.311 1.357.357 1.67c.086-.719.379-1.977.879-3.773l3.246-10.196zM100.914 127h-9.867v-17.133h9.867v2.977h-6.234v3.762h5.801v2.977h-5.801v4.417h6.234v3zM104.488 127v-17.133h3.633v14.133h6.949v3h-10.582z"></path>\r\n                            </svg>\r\n                      ', 2, '2016-10-17 15:24:18', '2016-10-17 17:04:02', 1, 1, 1, 0),
(3, 'Php', 'Le description', '<svg viewBox="0 0 128 128">\r\n                                <path fill="#6181B6" d="M64 33.039c-33.74 0-61.094 13.862-61.094 30.961s27.354 30.961 61.094 30.961 61.094-13.862 61.094-30.961-27.354-30.961-61.094-30.961zm-15.897 36.993c-1.458 1.364-3.077 1.927-4.86 2.507-1.783.581-4.052.461-6.811.461h-6.253l-1.733 10h-7.301l6.515-34h14.04c4.224 0 7.305 1.215 9.242 3.432 1.937 2.217 2.519 5.364 1.747 9.337-.319 1.637-.856 3.159-1.614 4.515-.759 1.357-1.75 2.624-2.972 3.748zm21.311 2.968l2.881-14.42c.328-1.688.208-2.942-.361-3.555-.57-.614-1.782-1.025-3.635-1.025h-5.79l-3.731 19h-7.244l6.515-33h7.244l-1.732 9h6.453c4.061 0 6.861.815 8.402 2.231s2.003 3.356 1.387 6.528l-3.031 15.241h-7.358zm40.259-11.178c-.318 1.637-.856 3.133-1.613 4.488-.758 1.357-1.748 2.598-2.971 3.722-1.458 1.364-3.078 1.927-4.86 2.507-1.782.581-4.053.461-6.812.461h-6.253l-1.732 10h-7.301l6.514-34h14.041c4.224 0 7.305 1.215 9.241 3.432 1.935 2.217 2.518 5.418 1.746 9.39zM95.919 54h-5.001l-2.727 14h4.442c2.942 0 5.136-.29 6.576-1.4 1.442-1.108 2.413-2.828 2.918-5.421.484-2.491.264-4.434-.66-5.458-.925-1.024-2.774-1.721-5.548-1.721zM38.934 54h-5.002l-2.727 14h4.441c2.943 0 5.136-.29 6.577-1.4 1.441-1.108 2.413-2.828 2.917-5.421.484-2.491.264-4.434-.66-5.458s-2.772-1.721-5.546-1.721z"></path>\r\n                            </svg>', 1, '2016-10-17 16:35:54', '2016-10-17 16:35:54', 1, 1, 1, 0),
(4, 'MySQL', 'Queries', '<svg viewBox="0 0 128 128">\r\n                                <path fill="#00618A" d="M2.001 90.458h4.108v-16.223l6.36 14.143c.75 1.712 1.777 2.317 3.792 2.317s3.003-.605 3.753-2.317l6.36-14.143v16.223h4.108v-16.196c0-1.58-.632-2.345-1.936-2.739-3.121-.974-5.215-.131-6.163 1.976l-6.241 13.958-6.043-13.959c-.909-2.106-3.042-2.949-6.163-1.976-1.304.395-1.936 1.159-1.936 2.739v16.197zM33.899 77.252h4.107v8.938c-.038.485.156 1.625 2.406 1.661 1.148.018 8.862 0 8.934 0v-10.643h4.117c.019 0-.004 14.514-.004 14.574.022 3.58-4.441 4.357-6.499 4.417h-12.972v-2.764c.022 0 12.963.003 12.995-.001 2.645-.279 2.332-1.593 2.331-2.035v-1.078h-8.731c-4.062-.037-6.65-1.81-6.683-3.85-.002-.187.089-9.129-.001-9.219z"></path><path fill="#E48E00" d="M56.63 90.458h11.812c1.383 0 2.727-.289 3.793-.789 1.777-.816 2.646-1.922 2.646-3.372v-3.002c0-1.185-.987-2.292-2.923-3.028-1.027-.396-2.292-.605-3.517-.605h-4.978c-1.659 0-2.449-.5-2.646-1.606-.039-.132-.039-.237-.039-.369v-1.87c0-.105 0-.211.039-.342.197-.843.632-1.08 2.094-1.212l.395-.026h11.733v-2.738h-11.535c-1.659 0-2.528.105-3.318.342-2.449.764-3.517 1.975-3.517 4.082v2.396c0 1.844 2.095 3.424 5.61 3.793.396.025.79.053 1.185.053h4.267c.158 0 .316 0 .435.025 1.304.105 1.856.343 2.252.816.237.237.315.475.315.737v2.397c0 .289-.197.658-.592.974-.355.316-.948.527-1.738.58l-.435.026h-11.338v2.738zM100.511 85.692c0 2.817 2.094 4.397 6.32 4.714.395.026.79.052 1.185.052h10.706v-2.738h-10.784c-2.41 0-3.318-.606-3.318-2.055v-14.168h-4.108v14.195zM77.503 85.834v-9.765c0-2.48 1.742-3.985 5.186-4.46.356-.053.753-.079 1.108-.079h7.799c.396 0 .752.026 1.147.079 3.444.475 5.187 1.979 5.187 4.46v9.765c0 2.014-.74 3.09-2.445 3.792l4.048 3.653h-4.771l-3.274-2.956-3.296.209h-4.395c-.752 0-1.543-.105-2.414-.343-2.613-.712-3.88-2.085-3.88-4.355zm4.434-.237c0 .132.039.265.079.423.237 1.135 1.307 1.768 2.929 1.768h3.732l-3.428-3.095h4.771l2.989 2.7c.552-.295.914-.743 1.041-1.32.039-.132.039-.264.039-.396v-9.368c0-.105 0-.238-.039-.37-.238-1.056-1.307-1.662-2.89-1.662h-6.216c-1.82 0-3.008.792-3.008 2.032v9.288z"></path><path fill="#00618A" d="M122.336 66.952c-2.525-.069-4.454.166-6.104.861-.469.198-1.216.203-1.292.79.257.271.297.674.502 1.006.394.637 1.059 1.491 1.652 1.938.647.489 1.315 1.013 2.011 1.437 1.235.754 2.615 1.184 3.806 1.938.701.446 1.397 1.006 2.082 1.509.339.247.565.634 1.006.789v-.071c-.231-.294-.291-.698-.503-1.006l-.934-.934c-.913-1.212-2.071-2.275-3.304-3.159-.982-.705-3.18-1.658-3.59-2.801l-.072-.071c.696-.079 1.512-.331 2.154-.503 1.08-.29 2.045-.215 3.16-.503l1.508-.432v-.286c-.563-.578-.966-1.344-1.58-1.867-1.607-1.369-3.363-2.737-5.17-3.879-1.002-.632-2.241-1.043-3.304-1.579-.356-.181-.984-.274-1.221-.575-.559-.711-.862-1.612-1.293-2.441-.9-1.735-1.786-3.631-2.585-5.458-.544-1.245-.9-2.473-1.579-3.59-3.261-5.361-6.771-8.597-12.208-11.777-1.157-.677-2.55-.943-4.021-1.292l-2.37-.144c-.481-.201-.983-.791-1.436-1.077-1.802-1.138-6.422-3.613-7.756-.358-.842 2.054 1.26 4.058 2.011 5.099.527.73 1.203 1.548 1.58 2.369.248.54.29 1.081.503 1.652.521 1.406.976 2.937 1.651 4.236.341.658.718 1.351 1.149 1.939.264.36.718.52.789 1.077-.443.62-.469 1.584-.718 2.369-1.122 3.539-.699 7.938.934 10.557.501.805 1.681 2.529 3.303 1.867 1.419-.578 1.103-2.369 1.509-3.95.092-.357.035-.621.215-.861v.072l1.293 2.585c.957 1.541 2.654 3.15 4.093 4.237.746.563 1.334 1.538 2.298 1.867v-.073h-.071c-.188-.291-.479-.411-.719-.646-.562-.551-1.187-1.235-1.651-1.867-1.309-1.776-2.465-3.721-3.519-5.745-.503-.966-.94-2.032-1.364-3.016-.164-.379-.162-.953-.502-1.148-.466.72-1.149 1.303-1.509 2.154-.574 1.36-.648 3.019-.861 4.739l-.144.071c-1.001-.241-1.352-1.271-1.724-2.154-.94-2.233-1.115-5.83-.287-8.401.214-.666 1.181-2.761.789-3.376-.187-.613-.804-.967-1.148-1.437-.427-.579-.854-1.341-1.149-2.011-.77-1.741-1.129-3.696-1.938-5.457-.388-.842-1.042-1.693-1.58-2.441-.595-.83-1.262-1.44-1.724-2.442-.164-.356-.387-.927-.144-1.293.077-.247.188-.35.432-.431.416-.321 1.576.107 2.01.287 1.152.479 2.113.934 3.089 1.58.468.311.941.911 1.508 1.077h.646c1.011.232 2.144.071 3.088.358 1.67.508 3.166 1.297 4.524 2.155 4.139 2.614 7.522 6.334 9.838 10.772.372.715.534 1.396.861 2.154.662 1.528 1.496 3.101 2.154 4.596.657 1.491 1.298 2.996 2.227 4.237.488.652 2.374 1.002 3.231 1.364.601.254 1.585.519 2.154.861 1.087.656 2.141 1.437 3.16 2.155.509.362 2.076 1.149 2.154 1.798zM90.237 39.593c-.526-.01-.899.058-1.293.144v.071h.072c.251.517.694.849 1.005 1.293l.719 1.508.071-.071c.445-.313.648-.814.646-1.58-.179-.188-.205-.423-.359-.646-.204-.3-.602-.468-.861-.719z"></path>\r\n                            </svg>', 3, '2016-10-17 16:38:49', '2016-10-17 16:38:49', 1, 1, 1, 0),
(5, 'Bootstrap', 'Bootstrap 3 and Bootstrap 2', '<svg viewBox="0 0 128 128">\r\n                                    <path fill="#5B4282" d="M75.701 65.603c-2.334-.768-5.694-.603-10.08-.603h-17.621v23h18.844c2.944 0 5.012-.315 6.203-.535 2.099-.376 3.854-1.104 5.264-1.982 1.409-.876 2.568-2.205 3.478-3.881.908-1.676 1.363-3.637 1.363-5.83 0-2.568-.658-4.54-1.975-6.436-1.316-1.896-3.141-2.965-5.476-3.733zM73.282 55.087c2.317-.688 4.064-1.89 5.239-3.487 1.176-1.598 1.763-3.631 1.763-6.044 0-2.286-.549-4.314-1.646-6.054s-2.662-2.413-4.699-3.056c-2.037-.641-5.53-.446-10.48-.446h-15.459v20h16.587c4.042 0 6.939-.38 8.695-.913zM126 18.625c0-9.182-7.443-16.625-16.625-16.625h-91.75c-9.182 0-16.625 7.443-16.625 16.625v91.75c0 9.182 7.443 16.625 16.625 16.625h91.75c9.182 0 16.625-7.443 16.625-16.625v-91.75zm-35.447 66.12c-1.362 2.773-3.047 4.911-5.052 6.415-2.006 1.504-4.521 2.78-7.544 3.548-3.022.769-6.728 1.292-11.113 1.292h-27.844v-69h27.42c5.264 0 9.485.609 12.665 2.002 3.181 1.395 5.671 3.497 7.474 6.395 1.801 2.898 2.702 5.907 2.702 9.071 0 2.945-.8 5.708-2.397 8.308-1.598 2.602-4.011 4.694-7.237 6.292 4.166 1.222 7.37 3.304 9.61 6.248 2.24 2.945 3.36 6.422 3.36 10.432 0 3.227-.681 6.225-2.044 8.997z"></path>\r\n                                </svg>', 1, '2016-10-17 16:39:50', '2016-10-17 16:39:50', 1, 1, 1, 0),
(6, 'CSS3', 'Cascading Style Sheets 3', '<svg viewBox="0 0 128 128">\r\n                                <path fill="#131313" d="M89.234 5.856h-7.384l7.679 8.333v3.967h-15.816v-4.645h7.678l-7.678-8.333v-3.971h15.521v4.649zm-18.657 0h-7.384l7.679 8.333v3.967h-15.817v-4.645h7.679l-7.679-8.333v-3.971h15.522v4.649zm-18.474.19h-7.968v7.271h7.968v4.839h-13.632v-16.949h13.632v4.839z"></path><path fill="#1572B6" d="M27.613 116.706l-8.097-90.813h88.967l-8.104 90.798-36.434 10.102-36.332-10.087z"></path><path fill="#33A9DC" d="M64.001 119.072l29.439-8.162 6.926-77.591h-36.365v85.753z"></path><path fill="#fff" d="M64 66.22h14.738l1.019-11.405h-15.757v-11.138h27.929000000000002l-.267 2.988-2.737 30.692h-24.925v-11.137z"></path><path fill="#EBEBEB" d="M64.067 95.146l-.049.014-12.404-3.35-.794-8.883h-11.178999999999998l1.561 17.488 22.814 6.333.052-.015v-11.587z"></path><path fill="#fff" d="M77.792 76.886l-1.342 14.916-12.422 3.353v11.588l22.833-6.328.168-1.882 1.938-21.647h-11.175z"></path><path fill="#EBEBEB" d="M64.039 43.677v11.136999999999999h-26.903000000000002l-.224-2.503-.507-5.646-.267-2.988h27.901zM64 66.221v11.138h-12.247l-.223-2.503-.508-5.647-.267-2.988h13.245z"></path>\r\n                            </svg>', 1, '2016-10-17 16:41:13', '2016-10-17 17:05:44', 1, 1, 1, 0),
(7, 'HTML', 'HyperText Markup Language, version 5', '<svg viewBox="0 0 128 128">\r\n                                <path fill="#E44D26" d="M27.854 116.354l-8.043-90.211h88.378l-8.051 90.197-36.192 10.033z"></path><path fill="#F16529" d="M64 118.704l29.244-8.108 6.881-77.076h-36.125z"></path><path fill="#EBEBEB" d="M64 66.978h-14.641l-1.01-11.331h15.651v-11.064h-27.743l.264 2.969 2.72 30.489h24.759zM64 95.711l-.049.013-12.321-3.328-.788-8.823h-11.107l1.55 17.372 22.664 6.292.051-.015z"></path><path d="M28.034 1.627h5.622v5.556h5.144v-5.556h5.623v16.822h-5.623v-5.633h-5.143v5.633h-5.623v-16.822zM51.816 7.206h-4.95v-5.579h15.525v5.579h-4.952v11.243h-5.623v-11.243zM64.855 1.627h5.862l3.607 5.911 3.603-5.911h5.865v16.822h-5.601v-8.338l-3.867 5.981h-.098l-3.87-5.981v8.338h-5.502v-16.822zM86.591 1.627h5.624v11.262h7.907v5.561h-13.531v-16.823z"></path><path fill="#fff" d="M63.962 66.978v11.063h13.624l-1.284 14.349-12.34 3.331v11.51l22.682-6.286.166-1.87 2.6-29.127.27-2.97h-2.982zM63.962 44.583v11.064h26.725l.221-2.487.505-5.608.265-2.969z"></path>\r\n                            </svg>', 1, '2016-10-17 16:42:35', '2016-10-17 16:42:35', 1, 1, 1, 0),
(8, 'Git', 'Git', '<svg viewBox="0 0 128 128">\r\n                                <path fill="#31251C" d="M76.397 55.676c-2.737 0-4.775 1.344-4.775 4.579 0 2.437 1.343 4.129 4.628 4.129 2.784 0 4.676-1.641 4.676-4.23 0-2.934-1.693-4.478-4.529-4.478zm-5.471 22.84c-.648.795-1.294 1.64-1.294 2.637 0 1.989 2.536 2.587 6.021 2.587 2.885 0 6.816-.202 6.816-2.885 0-1.595-1.892-1.693-4.281-1.843l-7.262-.496zm14.725-22.69c.895 1.145 1.842 2.737 1.842 5.026 0 5.522-4.329 8.756-10.597 8.756-1.594 0-3.037-.198-3.932-.447l-1.642 2.637 4.875.297c8.608.549 13.682.798 13.682 7.413 0 5.723-5.024 8.955-13.682 8.955-9.006 0-12.438-2.289-12.438-6.218 0-2.24.996-3.431 2.737-5.076-1.643-.694-2.189-1.937-2.189-3.281 0-1.095.547-2.09 1.443-3.036.896-.944 1.891-1.891 3.084-2.985-2.438-1.194-4.278-3.781-4.278-7.464 0-5.721 3.781-9.65 11.393-9.65 2.14 0 3.435.197 4.578.498h9.703v4.228l-4.579.347zM98.983 46.786c-2.837 0-4.479-1.643-4.479-4.48 0-2.833 1.642-4.377 4.479-4.377 2.886 0 4.527 1.543 4.527 4.377.001 2.837-1.641 4.48-4.527 4.48zm-6.42 29.9v-3.929l2.539-.348c.696-.1.795-.249.795-.997v-14.627c0-.546-.148-.896-.647-1.044l-2.687-.946.547-4.028h10.301v20.646c0 .798.048.896.796.997l2.538.348v3.929h-14.182v-.001zM126.42 74.756c-2.141 1.043-5.274 1.99-8.112 1.99-5.92 0-8.158-2.386-8.158-8.011v-13.035c0-.297 0-.497-.399-.497h-3.482v-4.428c4.38-.499 6.12-2.688 6.667-8.111h4.728v7.067c0 .347 0 .498.398.498h7.015v4.975h-7.413v11.89c0 2.935.697 4.079 3.383 4.079 1.395 0 2.836-.347 4.03-.795l1.343 4.378z"></path><path fill="#F34F29" d="M52.7 61.7l-22.749-22.748c-1.309-1.31-3.434-1.31-4.744 0l-4.724 4.724 5.991 5.992c1.394-.47 2.99-.155 4.1.956 1.116 1.117 1.429 2.727.947 4.125l5.775 5.775c1.396-.481 3.009-.17 4.125.947 1.56 1.559 1.56 4.086 0 5.646-1.561 1.56-4.087 1.56-5.647 0-1.173-1.174-1.463-2.897-.869-4.342l-5.386-5.386-.001 14.174c.381.188.739.438 1.056.754 1.56 1.559 1.56 4.085 0 5.647-1.56 1.559-4.088 1.559-5.646 0-1.56-1.562-1.56-4.088 0-5.647.386-.385.831-.676 1.307-.871v-14.305c-.476-.194-.921-.484-1.307-.871-1.182-1.181-1.466-2.914-.86-4.365l-5.906-5.908-15.599 15.598c-1.311 1.311-1.311 3.436 0 4.747l22.749 22.748c1.31 1.31 3.434 1.31 4.746 0l22.642-22.644c1.311-1.31 1.311-3.436 0-4.746z"></path><path fill="none" d="M1.58 37.928h124.84v52.143h-124.84z"></path>\r\n                            </svg>', 1, '2016-10-17 16:44:17', '2016-10-17 16:44:17', 1, 1, 1, 0),
(9, 'GitLab', 'Provides Git repository management, code reviews, issue tracking, activity feeds and wikis. ', '<svg viewBox="0 0 128 128">\r\n                                <path fill="#FC6D26" d="M109.757 49.765l-5.14-15.82L94.43 2.596c-.523-1.614-2.805-1.614-3.33 0l-10.187 31.35H47.087L36.9 2.596c-.524-1.614-2.806-1.614-3.33 0l-10.187 31.35-5.14 15.82a3.502 3.502 0 0 0 1.272 3.915L64 86l44.485-32.32a3.502 3.502 0 0 0 1.272-3.915"></path><path fill="#E24329" d="M64 86l16.913-52.054H47.087L64 86z"></path><path fill="#FC6D26" d="M64 86L47.087 33.946H23.383L64 86z"></path><path fill="#FCA326" d="M23.383 33.946l-5.14 15.82a3.502 3.502 0 0 0 1.272 3.914L64 86 23.383 33.946z"></path><path fill="#E24329" d="M23.383 33.946h23.704L36.9 2.594c-.524-1.613-2.806-1.613-3.33 0L23.383 33.946z"></path><path fill="#FC6D26" d="M64 86l16.913-52.054h23.704L64 86z"></path><path fill="#FCA326" d="M104.617 33.946l5.14 15.82a3.502 3.502 0 0 1-1.272 3.914L64 86l40.617-52.054z"></path><path fill="#E24329" d="M104.617 33.946H80.913L91.1 2.594c.524-1.613 2.806-1.613 3.33 0l10.187 31.352z"></path><path fill="#5C5C5C" d="M65.387 93.983h-4.49l.015 33.405h18.16v-4.13H65.4l-.015-29.275zM96.363 121.523a7.648 7.648 0 0 1-5.56 2.346c-3.418 0-4.795-1.684-4.795-3.877 0-3.315 2.295-4.896 7.192-4.896.918 0 2.397.102 3.162.255v6.17zm-4.642-20.247c-3.624 0-6.95 1.285-9.543 3.423l1.587 2.747c1.836-1.07 4.08-2.142 7.294-2.142 3.673 0 5.305 1.887 5.305 5.05v1.63c-.714-.152-2.193-.254-3.11-.254-7.857 0-11.835 2.755-11.835 8.518 0 5.15 3.162 7.752 7.957 7.752 3.23 0 6.325-1.48 7.396-3.876l.817 3.264h3.163v-17.085c0-5.406-2.347-9.027-9.03-9.027zM115.234 124.022c-1.683 0-3.163-.204-4.285-.714v-15.452c1.53-1.275 3.417-2.193 5.814-2.193 4.336 0 6.02 3.06 6.02 8.007 0 7.037-2.704 10.352-7.55 10.352m1.886-22.746c-4.012 0-6.17 2.73-6.17 2.73v-4.31l-.015-5.713h-4.386l.014 32.59c2.193.917 5.203 1.427 8.467 1.427 8.364 0 12.394-5.355 12.394-14.586 0-7.293-3.723-12.138-10.304-12.138M16.592 97.604c3.98 0 6.53 1.326 8.212 2.652l1.93-3.34c-2.63-2.306-6.167-3.545-9.94-3.545-9.538 0-16.22 5.815-16.22 17.545C.574 123.205 7.784 128 16.03 128c4.132 0 7.652-.97 9.947-1.938l-.094-13.132v-4.13H13.64v4.13h7.805l.094 9.97c-1.02.51-2.806.918-5.204.918-6.63 0-11.07-4.17-11.07-12.954.002-8.925 4.593-13.26 11.326-13.26M48.16 93.983h-4.387l.014 5.61v19.379c0 5.407 2.347 9.028 9.03 9.028.922 0 1.825-.084 2.702-.243v-3.94a13.47 13.47 0 0 1-2.04.154c-3.674 0-5.306-1.886-5.306-5.048V105.56h7.345v-3.672h-7.346l-.014-7.905zM32.642 127.388h4.387v-25.5H32.64v25.5zM32.642 98.37h4.387v-4.387H32.64v4.386z"></path>\r\n                                </svg>', 1, '2016-10-17 16:45:56', '2016-10-17 16:45:56', 1, 1, 1, 0),
(10, 'JavaScript', 'JavaScript is a client-side scripting language, which means the source code is processed by the client''s web browser rather than on the web server.', '<svg viewBox="0 0 128 128">\r\n                                <path fill="#F0DB4F" d="M1.408 1.408h125.184v125.185h-125.184z"></path><path fill="#323330" d="M116.347 96.736c-.917-5.711-4.641-10.508-15.672-14.981-3.832-1.761-8.104-3.022-9.377-5.926-.452-1.69-.512-2.642-.226-3.665.821-3.32 4.784-4.355 7.925-3.403 2.023.678 3.938 2.237 5.093 4.724 5.402-3.498 5.391-3.475 9.163-5.879-1.381-2.141-2.118-3.129-3.022-4.045-3.249-3.629-7.676-5.498-14.756-5.355l-3.688.477c-3.534.893-6.902 2.748-8.877 5.235-5.926 6.724-4.236 18.492 2.975 23.335 7.104 5.332 17.54 6.545 18.873 11.531 1.297 6.104-4.486 8.08-10.234 7.378-4.236-.881-6.592-3.034-9.139-6.949-4.688 2.713-4.688 2.713-9.508 5.485 1.143 2.499 2.344 3.63 4.26 5.795 9.068 9.198 31.76 8.746 35.83-5.176.165-.478 1.261-3.666.38-8.581zm-46.885-37.793h-11.709l-.048 30.272c0 6.438.333 12.34-.714 14.149-1.713 3.558-6.152 3.117-8.175 2.427-2.059-1.012-3.106-2.451-4.319-4.485-.333-.584-.583-1.036-.667-1.071l-9.52 5.83c1.583 3.249 3.915 6.069 6.902 7.901 4.462 2.678 10.459 3.499 16.731 2.059 4.082-1.189 7.604-3.652 9.448-7.401 2.666-4.915 2.094-10.864 2.07-17.444.06-10.735.001-21.468.001-32.237z"></path>\r\n                                </svg>', 1, '2016-10-17 16:47:24', '2016-10-17 16:47:24', 1, 1, 1, 0),
(11, 'JQuery', 'jQuery is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML.', '<svg viewBox="0 0 128 128">\r\n                                <path fill="#0868AC" d="M27.758 20.421c-7.352 10.565-6.437 24.312-.82 35.54l.411.798.263.506.164.291.293.524c.174.307.353.612.536.919l.306.504c.203.326.41.65.622.973l.265.409c.293.437.592.872.901 1.301l.026.033.152.205c.267.368.542.732.821 1.093l.309.393c.249.313.502.623.759.934l.29.346c.345.406.698.812 1.057 1.208l.021.022.041.045c.351.383.71.758 1.075 1.133l.344.347c.282.284.569.563.858.841l.351.334c.387.364.777.722 1.176 1.07l.018.016.205.174c.351.305.708.605 1.068.902l.442.353c.294.235.591.468.89.696l.477.361c.33.243.663.482.999.717l.363.258.101.072c.318.22.645.431.97.642l.42.28c.5.315 1.007.628 1.519.93l.42.237c.377.217.756.431 1.14.639l.631.326.816.424.188.091.334.161c.427.204.858.405 1.293.599l.273.122c.498.218 1.001.427 1.508.628l.368.144c.469.182.945.359 1.423.527l.179.062c.524.184 1.054.353 1.587.52l.383.114c.542.164 1.079.358 1.638.462 35.553 6.483 45.88-21.364 45.88-21.364-8.674 11.3-24.069 14.28-38.656 10.962-.553-.125-1.089-.298-1.628-.456l-.406-.124c-.526-.161-1.049-.33-1.568-.51l-.215-.077c-.465-.164-.924-.336-1.382-.513l-.388-.152c-.501-.198-1-.405-1.492-.62l-.298-.133c-.423-.191-.842-.384-1.259-.585l-.364-.175c-.327-.159-.65-.328-.974-.495l-.649-.341c-.395-.21-.782-.43-1.167-.654l-.394-.219c-.513-.303-1.019-.615-1.52-.932l-.41-.273c-.363-.234-.725-.473-1.081-.719l-.349-.245c-.344-.242-.685-.489-1.022-.738l-.453-.343c-.31-.237-.618-.476-.922-.721l-.411-.33c-.388-.318-.771-.64-1.149-.969l-.126-.105c-.409-.359-.811-.728-1.208-1.098l-.34-.328c-.294-.279-.584-.561-.868-.851l-.34-.34c-.362-.37-.717-.745-1.065-1.126l-.053-.057c-.368-.402-.728-.813-1.08-1.229l-.283-.336c-.263-.316-.523-.638-.777-.961l-.285-.355c-.307-.397-.605-.793-.898-1.195-8.098-11.047-11.008-26.283-4.535-38.795M50.578 11.519c-5.316 7.65-5.028 17.893-.88 25.983.695 1.356 1.477 2.673 2.351 3.925.796 1.143 1.68 2.501 2.737 3.418.383.422.784.834 1.193 1.238l.314.311c.397.385.801.764 1.218 1.132l.05.043.012.012c.462.405.939.794 1.423 1.178l.323.252c.486.372.981.738 1.489 1.087l.043.033.68.447.322.213c.363.233.73.459 1.104.676l.156.092c.322.185.648.367.975.545l.347.18.682.354.103.047c.469.23.941.453 1.424.663l.314.13c.386.163.775.323 1.167.473l.5.184c.356.132.712.253 1.072.373l.484.155c.511.158 1.017.359 1.549.448 27.45 4.547 33.787-16.588 33.787-16.588-5.712 8.228-16.775 12.153-28.58 9.089-.524-.138-1.042-.288-1.555-.449l-.467-.151c-.365-.117-.728-.243-1.087-.374l-.491-.183c-.394-.152-.784-.309-1.171-.473l-.315-.133c-.485-.211-.962-.434-1.432-.666l-.718-.365-.414-.213c-.306-.166-.61-.338-.909-.514l-.217-.123c-.372-.217-.738-.44-1.1-.672l-.332-.221-.712-.472c-.506-.349-.999-.714-1.484-1.085l-.334-.264c-5.167-4.079-9.263-9.655-11.21-15.977-2.041-6.557-1.601-13.917 1.935-19.891M69.771 4.868c-3.134 4.612-3.442 10.341-1.267 15.435 2.293 5.407 6.992 9.648 12.477 11.66l.682.235.3.096c.323.102.644.22.978.282 15.157 2.929 19.268-7.777 20.362-9.354-3.601 5.185-9.653 6.43-17.079 4.627-.586-.142-1.231-.354-1.796-.555-.725-.259-1.439-.553-2.134-.886-1.318-.634-2.575-1.402-3.741-2.282-6.645-5.042-10.772-14.659-6.436-22.492"></path><path fill="#131B28" d="M66.359 96.295h-4.226c-.234 0-.467.188-.517.417l-1.5 6.94-1.5 6.94c-.049.229-.282.417-.516.417h-2.991c-2.959 0-2.617-2.047-2.011-4.851l.018-.085.066-.354.012-.066.135-.72.145-.771.154-.785.682-3.332.683-3.332c.047-.23-.107-.419-.341-.419h-4.337c-.234 0-.466.188-.514.418l-.933 4.424-.932 4.425-.002.006-.086.412c-1.074 4.903-.79 9.58 5.048 9.727l.17.003h9.163c.234 0 .467-.188.516-.417l1.976-9.289 1.976-9.29c.049-.23-.103-.417-.338-.418zM21.103 96.246h-4.64c-.235 0-.469.188-.521.416l-.44 1.942-.44 1.942c-.051.229.098.416.333.416h4.676c.235 0 .468-.188.518-.417l.425-1.941.425-1.941c.049-.229-.101-.417-.336-.417zM19.757 102.29h-4.677c-.234 0-.469.188-.521.416l-.657 2.91-.656 2.909-.183.834-.631 2.97-.63 2.971c-.049.229-.15.599-.225.821 0 0-.874 2.6-2.343 2.57l-.184-.004-1.271-.023h-.001c-.234-.003-.469.18-.524.407l-.485 2.039-.484 2.038c-.055.228.093.416.326.42.833.01 2.699.031 3.828.031 3.669 0 5.604-2.033 6.843-7.883l1.451-6.714 1.361-6.297c.049-.227-.103-.415-.337-.415zM105.874 100.716l-.194-.801-.191-.82-.097-.414c-.38-1.477-1.495-2.328-3.917-2.328l-3.77-.004-3.472-.005h-3.907c-.234 0-.466.188-.515.417l-.173.816-.204.964-.057.271-1.759 8.24-1.67 7.822c-.05.23-.066.512-.038.626.028.115.479.209.713.209h3.524c.235 0 .532-.042.66-.094s.317-.513.364-.742l.626-3.099.627-3.1.001-.005.084-.413.76-3.56.671-3.144c.05-.229.281-.416.515-.417l11.089-.005c.235.002.383-.185.33-.414zM120.149 93.476l-.854.003h-3.549c-.235 0-.536.159-.667.353l-7.849 11.498c-.132.194-.283.166-.335-.062l-.578-2.533c-.052-.229-.287-.416-.522-.416h-5.045c-.235 0-.374.184-.31.409l2.261 7.921c.064.226.069.596.011.824l-.985 3.833c-.059.228.085.413.32.413h4.987c.234 0 .474-.186.532-.413l.986-3.833c.058-.229.221-.567.363-.755l12.742-16.911c.142-.188.065-.341-.169-.339l-1.339.008zM80.063 103.395v-.004c-.029.254-.264.441-.499.441h-6.397c-.222 0-.334-.15-.301-.336l.006-.015-.004.002.003-.021.029-.109c.611-1.624 1.855-2.69 4.194-2.69 2.634-.001 3.148 1.285 2.969 2.732zm-1.877-7.384c-8.211 0-10.157 4.984-11.249 10.015-1.091 5.128-.998 9.921 7.5 9.921h1.03l.256-.001h.06l1.02-.003h.018c2.244-.009 4.495-.026 5.406-.033.233-.004.461-.191.509-.42l.344-1.681.067-.327.41-2.006c.047-.229-.106-.418-.341-.418h-7.639c-3.039 0-3.941-.807-3.608-3.181h12.211l-.001.001.008-.001c.194-.003.374-.137.445-.315l.029-.106-.001.001c1.813-6.839 1.293-11.445-6.474-11.446zM39.376 103.369l-.116.409v.001l-.922 3.268-.922 3.267c-.063.227-.308.411-.543.411h-4.88c-3.702 0-4.604-2.896-3.702-7.166.901-4.368 2.668-7.083 6.312-7.358 4.98-.376 5.976 3.126 4.773 7.168zm3.348 7.105s2.301-5.588 2.823-8.814c.713-4.319-1.45-10.585-9.804-10.585-8.306 0-11.914 5.981-13.29 12.484-1.376 6.55.427 12.293 8.686 12.246l6.516-.024 6.089-.022c.234-.002.474-.188.534-.414l1.061-4.046c.059-.228-.084-.414-.319-.416l-1.017-.006-1.017-.006c-.199-.001-.313-.131-.289-.302l.027-.095zM83.844 106.733c0 .155-.125.281-.28.281-.154 0-.28-.126-.28-.281 0-.154.125-.279.28-.279.155 0 .28.125.28.279z"></path>\r\n                            </svg>', 1, '2016-10-17 16:49:29', '2016-10-17 16:49:29', 1, 1, 1, 0),
(12, 'Photoshop', 'Adobe Photoshop is a raster graphics editor developed and published by Adobe Systems for macOS and Windows.', '<svg viewBox="0 0 128 128">\r\n                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#80B5E2" d="M126.216.727c-36.223-.011-72.284-.01-108.508-.01-5.181 0-10.451-.004-15.632.011-.328.001-1.076.153-1.076.236v126.036h126v-126.036c0-.083-.414-.237-.784-.237zm-12.736 113.939c-32.641-.038-65.271-.03-97.912-.03-1.576 0-1.569-.003-1.569-1.627v-97.797c.001-1.607-.015-1.212 1.578-1.212h97.798c1.638 0 1.625-.396 1.625 1.291v48.837c0 16.32-.007 32.64.036 48.959.004 1.243-.289 1.58-1.556 1.579zM56.82 39.644c-6.668-1.563-13.38-.792-20.085-.107-1.423.146-1.695.755-1.691 2.018.043 15.207-.044 30.414-.044 45.621v.824h9v-17.861c5 .375 9.576.286 14.049-1.31 7.169-2.558 10.752-8.111 10.365-16.219-.313-6.548-4.426-11.286-11.594-12.966zm-1.953 22.344c-3.194 1.557-6.59 1.52-10.005 1.058-.266-.036-.675-.511-.677-.784-.04-5.331-.03-10.661-.03-16.138 3.131-.488 6.1-.726 9.062.018 3.673.923 5.804 3.319 6.201 6.917.436 3.954-1.247 7.319-4.551 8.929zM88.168 69.094c-1.469-.805-3.08-1.347-4.606-2.053-1.41-.653-2.833-1.296-4.174-2.076-.935-.543-1.36-1.492-1.36-2.611 0-1.892 1.294-3.417 3.504-3.598 1.649-.135 3.361.035 4.994.34 1.376.256 2.681.899 4.082 1.395l1.767-6.269c-3.345-1.624-6.749-2.235-10.285-2.11-3.006.105-5.814.871-8.352 2.599-4.743 3.229-7.057 11.807.051 16.416 1.805 1.171 3.893 1.905 5.851 2.841 1.218.583 2.489 1.079 3.641 1.772 1.452.874 1.946 2.297 1.694 3.94-.247 1.615-1.33 2.638-2.836 2.874-1.68.264-3.466.435-5.118.144-2.339-.411-4.599-1.281-6.974-1.979-.426 1.59-.831 3.349-1.384 5.06-.303.938-.125 1.401.795 1.768 5.617 2.231 11.334 2.69 17.082.717 4.296-1.475 6.915-4.524 7.256-9.169.332-4.527-1.708-7.851-5.628-10.001z"></path>\r\n                            </svg>', 70, '2016-10-17 16:50:48', '2016-10-17 17:53:22', 1, 1, 1, 0),
(13, 'Sass', 'Sass (Syntactically Awesome Stylesheets) is a style sheet language initially designed by Hampton Catlin and developed by Natalie Weizenbaum.', '<svg viewBox="0 0 128 128">\r\n                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#CB6699" d="M1.219 56.156c0 .703.207 1.167.323 1.618.756 2.933 2.381 5.45 4.309 7.746 2.746 3.272 6.109 5.906 9.554 8.383 2.988 2.148 6.037 4.248 9.037 6.38.515.366 1.002.787 1.561 1.236-.481.26-.881.489-1.297.7-3.959 2.008-7.768 4.259-11.279 6.986-2.116 1.644-4.162 3.391-5.607 5.674-2.325 3.672-3.148 7.584-1.415 11.761.506 1.22 1.278 2.274 2.367 3.053.353.252.749.502 1.162.6 1.058.249 2.136.412 3.207.609l3.033-.002c3.354-.299 6.407-1.448 9.166-3.352 4.312-2.976 7.217-6.966 8.466-12.087.908-3.722.945-7.448-.125-11.153-.099-.344-.224-.681-.354-1.014-.13-.333-.283-.657-.463-1.072l6.876-3.954.103.088c-.125.409-.258.817-.371 1.23-.817 2.984-1.36 6.02-1.165 9.117.208 3.3 1.129 6.389 3.061 9.146 1.562 2.23 5.284 2.313 6.944.075.589-.795 1.16-1.626 1.589-2.513 1.121-2.315 2.159-4.671 3.23-7.011l.187-.428c-.077 1.108-.167 2.081-.208 3.055-.064 1.521.025 3.033.545 4.48.445 1.238 1.202 2.163 2.62 2.326.97.111 1.743-.333 2.456-.896 1.114-.879 2.019-1.965 2.691-3.199 1.901-3.491 3.853-6.961 5.576-10.54 1.864-3.871 3.494-7.855 5.225-11.792l.286-.698c.409 1.607.694 3.181 1.219 4.671.61 1.729 1.365 3.417 2.187 5.058.389.775.344 1.278-.195 1.928-2.256 2.72-4.473 5.473-6.692 8.223-.491.607-.98 1.225-1.389 1.888-.247.403-.411.894-.48 1.364-.133.898.422 1.764 1.383 1.971.878.189 1.813.259 2.708.193 3.097-.228 5.909-1.315 8.395-3.157 3.221-2.386 4.255-5.642 3.475-9.501-.211-1.047-.584-2.065-.947-3.074-.163-.455-.174-.774.123-1.198 2.575-3.677 4.775-7.578 6.821-11.569.081-.157.164-.314.306-.482.663 3.45 1.661 6.775 3.449 9.792-.912.879-1.815 1.676-2.632 2.554-1.799 1.934-3.359 4.034-4.173 6.595-.35 1.104-.619 2.226-.463 3.405.242 1.831 1.742 3.021 3.543 2.604 3.854-.892 7.181-2.708 9.612-5.925 1.636-2.166 1.785-4.582 1.1-7.113-.188-.688-.411-1.365-.651-2.154.951-.295 1.878-.649 2.837-.868 4.979-1.136 9.904-.938 14.702.86 2.801 1.05 5.064 2.807 6.406 5.571 1.639 3.379.733 6.585-2.452 8.721-.297.199-.637.356-.883.605-.151.153-.242.459-.205.67.021.123.346.277.533.275 1.047-.008 1.896-.557 2.711-1.121 2.042-1.413 3.532-3.314 3.853-5.817l.063-.188-.077-1.63c-.031-.094.023-.187.016-.258-.434-3.645-2.381-6.472-5.213-8.688-3.28-2.565-7.153-3.621-11.249-3.788-3.338-.136-6.619.36-9.765 1.503-.897.325-1.786.71-2.688 1.073-.121-.219-.251-.429-.358-.646-.926-1.896-2.048-3.708-2.296-5.882-.176-1.544-.392-3.086-.025-4.613.353-1.469.813-2.913 1.246-4.362.223-.746.066-1.164-.646-1.5-.248-.117-.518-.219-.786-.258-1.75-.254-3.476-.109-5.171.384-.6.175-1.036.511-1.169 1.175-.076.381-.231.746-.339 1.122-.443 1.563-.757 3.156-1.473 4.645-1.794 3.735-3.842 7.329-5.938 10.897-.227.385-.466.763-.752 1.23-.736-1.54-1.521-2.922-1.759-4.542-.269-1.832-.481-3.661-.025-5.479.339-1.356.782-2.687 1.19-4.025.193-.636.104-.97-.472-1.305-.291-.169-.62-.319-.948-.368-1.815-.269-3.603-.128-5.354.438-.543.176-.828.527-.994 1.087-.488 1.652-.904 3.344-1.589 4.915-2.774 6.36-5.628 12.687-8.479 19.013-.595 1.321-1.292 2.596-1.963 3.882-.17.326-.418.613-.63.919-.17-.201-.236-.339-.235-.477.005-.813-.092-1.65.063-2.436.469-2.378 1.009-4.743 1.578-7.099.47-1.946 1.017-3.874 1.538-5.807.175-.647.178-1.252-.287-1.796-.781-.911-2.413-1.111-3.381-.409l-.428.242.083-.69c.204-1.479.245-2.953-.161-4.41-.506-1.816-1.802-2.861-3.686-2.803-.878.027-1.8.177-2.613.497-3.419 1.34-6.048 3.713-8.286 6.568-.203.259-.471.495-.757.654-2.893 1.604-5.795 3.188-8.696 4.778l-3.229 1.769c-.866-.826-1.653-1.683-2.546-2.41-2.727-2.224-5.498-4.393-8.244-6.592-2.434-1.949-4.792-3.979-6.596-6.56-1.342-1.92-2.207-4.021-2.29-6.395-.105-3.025.753-5.789 2.293-8.362 1.97-3.292 4.657-5.934 7.611-8.327 3.125-2.53 6.505-4.678 10.008-6.639 4.901-2.743 9.942-5.171 15.347-6.774 5.542-1.644 11.165-2.585 16.965-1.929 2.28.258 4.494.78 6.527 1.895 1.557.853 2.834 1.97 3.428 3.716.586 1.718.568 3.459.162 5.204-.825 3.534-2.76 6.447-5.195 9.05-3.994 4.267-8.866 7.172-14.351 9.091-3.165 1.107-6.421 1.802-9.765 2.083-2.729.229-5.401-.013-7.985-.962-1.711-.629-3.201-1.591-4.399-2.987-.214-.25-.488-.521-.887-.287-.391.23-.46.602-.329.979.219.626.421 1.278.762 1.838.857 1.405 2.107 2.424 3.483 3.298 2.643 1.681 5.597 2.246 8.66 2.377 4.648.201 9.183-.493 13.654-1.74 6.383-1.78 11.933-4.924 16.384-9.884 3.706-4.13 6.353-8.791 6.92-14.419.277-2.747-.018-5.438-1.304-7.944-1.395-2.715-3.613-4.734-6.265-6.125-3.862-2.025-8.03-3.204-12.332-3.204h-4.31c-5.21 0-10.247 1.493-15.143 3.274-3.706 1.349-7.34 2.941-10.868 4.703-7.683 3.839-14.838 8.468-20.715 14.833-2.928 3.171-5.407 6.67-6.833 10.79-.417 1.206-.813 2.499-1.111 3.746m27.839 36.013c-.333 4.459-2.354 8.074-5.657 11.002-1.858 1.646-3.989 2.818-6.471 3.23-.9.149-1.821.185-2.694-.188-1.245-.532-1.524-1.637-1.548-2.814-.037-1.876.62-3.572 1.521-5.186 1.176-2.104 2.9-3.708 4.741-5.206 2.9-2.361 6.046-4.359 9.268-6.245l.243-.1c.498 1.84.735 3.657.597 5.507zm25.158-19.379c-.235 1.424-.529 2.849-.945 4.229-1.438 4.777-3.285 9.406-5.282 13.973-.369.845-.906 1.616-1.373 2.417-.072.124-.179.231-.283.334-.578.571-1.126.541-1.418-.206-.34-.868-.549-1.797-.729-2.716-.121-.617-.092-1.265-.13-1.897.039-4.494 1.41-8.578 3.736-12.38.959-1.568 2.003-3.062 3.598-4.054.49-.305 1.04-.55 1.595-.706.85-.239 1.372.154 1.231 1.006zm17.164 21.868l6.169-7.203c.257 2.675-4.29 8.015-6.169 7.203zm19.703-4.847c-.436.25-.911.43-1.358.661-.409.212-.544-.002-.556-.354-.008-.239.027-.489.093-.721.833-2.938 2.366-5.446 4.647-7.486l.16-.082c1.085 3.035-.169 6.368-2.986 7.982z"></path>\r\n                                </svg>', 1, '2016-10-17 16:51:59', '2016-10-17 16:51:59', 1, 1, 1, 0),
(14, 'Trello', 'Trello is a web-based project management application originally made by Fog Creek Software in 2011, that spun out to be its own company in 2014.', '<svg viewBox="0 0 128 128">\r\n                                <path fill="#23719F" d="M127 16.142c0-8.363-6.779-15.142-15.142-15.142h-95.716c-8.363 0-15.142 6.779-15.142 15.142v95.715c0 8.364 6.779 15.143 15.142 15.143h95.716c8.363 0 15.142-6.779 15.142-15.143v-95.715zm-69 83.398c0 3.807-3.286 6.46-7.093 6.46h-27.344c-3.807 0-6.563-2.653-6.563-6.46v-76.31c0-3.808 2.756-7.23 6.563-7.23h27.344c3.807 0 7.093 3.422 7.093 7.23v76.31zm55-66.456v31.886000000000003c0 3.807-2.936 7.03-6.744 7.03h-27.33c-3.808 0-6.926-3.224-6.926-7.03v-42.104c0-3.808 3.118-6.866 6.926-6.866h27.33c3.808 0 6.744 3.058 6.744 6.866v10.218z"></path>\r\n                            </svg>', 1, '2016-10-17 16:52:48', '2016-10-17 16:52:48', 1, 1, 1, 0),
(15, 'OSX user', 'Mac/OSX user', '<svg viewBox="0 0 128 128">\r\n                                    <path d="M97.905 67.885c.174 18.8 16.494 25.057 16.674 25.137-.138.44-2.607 8.916-8.597 17.669-5.178 7.568-10.553 15.108-19.018 15.266-8.318.152-10.993-4.934-20.504-4.934-9.508 0-12.479 4.776-20.354 5.086-8.172.31-14.395-8.185-19.616-15.724-10.668-15.424-18.821-43.585-7.874-62.594 5.438-9.44 15.158-15.417 25.707-15.571 8.024-.153 15.598 5.398 20.503 5.398 4.902 0 14.106-6.676 23.782-5.696 4.051.169 15.421 1.636 22.722 12.324-.587.365-13.566 7.921-13.425 23.639m-15.633-46.166c4.338-5.251 7.258-12.563 6.462-19.836-6.254.251-13.816 4.167-18.301 9.416-4.02 4.647-7.54 12.087-6.591 19.216 6.971.54 14.091-3.542 18.43-8.796"></path>\r\n                                </svg>', 1, '2016-10-17 16:54:08', '2016-10-17 16:54:08', 1, 1, 1, 0),
(16, 'Angularjs', 'AngularJS is a complete JavaScript-based open-source front-end web application framework mainly maintained by Google and by a community of individuals and corporations to address many of the challenges encountered in developing single-page applications.', '<svg viewBox="0 0 128 128">\r\n                                    <path fill="#B3B3B3" d="M63.81 1.026l-59.257 20.854 9.363 77.637 49.957 27.457 50.214-27.828 9.36-77.635z"></path><path fill="#A6120D" d="M117.536 25.998l-53.864-18.369v112.785l45.141-24.983z"></path><path fill="#DD1B16" d="M11.201 26.329l8.026 69.434 44.444 24.651v-112.787z"></path><path fill="#F2F2F2" d="M78.499 67.67l-14.827 6.934h-15.628l-7.347 18.374-13.663.254 36.638-81.508 14.827 55.946zm-1.434-3.491l-13.295-26.321-10.906 25.868h10.807l13.394.453z"></path><path fill="#B3B3B3" d="M63.671 11.724l.098 26.134 12.375 25.888h-12.446l-.027 10.841 17.209.017 8.042 18.63 13.074.242z"></path>\r\n                                </svg>', 1, '2016-10-17 16:55:28', '2016-10-17 16:55:28', 1, 1, 1, 0),
(17, 'Wordpress', 'WordPress is a free and open-source content management system (CMS) based on PHP and MySQL.', '<svg viewBox="0 0 128 128">\r\n<path fill-rule="evenodd" clip-rule="evenodd" fill="#337BA2" d="M43.257 121.233c.079 1.018.029 2.071.299 3.037.115.408.9.629 1.381.935l.625.401c-.235.137-.469.389-.707.392-1.866.033-3.732.032-5.598.002-.248-.004-.491-.237-.735-.364.198-.143.388-.391.597-.408 1.251-.105 1.632-.865 1.626-1.989-.011-2.066-.006-4.134.003-6.202.005-1.152-.322-1.993-1.679-2.045-.188-.008-.366-.296-.548-.453.182-.111.366-.321.546-.318 2.39.029 4.79-.024 7.167.177 1.873.159 3.107 1.455 3.234 2.949.138 1.639-.703 2.764-2.605 3.486l-.729.272c1.225 1.158 2.31 2.29 3.516 3.272.535.437 1.293.697 1.989.817 1.393.238 2.149-.361 2.187-1.742.061-2.229.032-4.461.011-6.691-.01-1.022-.449-1.697-1.589-1.753-.215-.01-.42-.253-.629-.388.239-.14.478-.4.715-.399 2.432.02 4.875-.055 7.291.161 4.123.366 6.42 3.797 5.214 7.588-.735 2.312-2.495 3.619-4.759 3.773-3.958.27-7.938.215-11.909.243-.316.002-.706-.341-.944-.623-.914-1.085-1.776-2.213-2.668-3.316-.27-.334-.571-.641-.858-.961l-.444.147zm13.119-5.869c0 2.785-.034 5.484.036 8.18.011.414.41 1.039.78 1.187 1.457.581 3.812-.368 4.47-1.842.881-1.973.988-4.05-.203-5.922-1.175-1.847-3.132-1.663-5.083-1.603zm-13.021 4.561c1.262.032 2.653.313 3.192-1.073.302-.777.234-1.982-.183-2.69-.633-1.076-1.906-.888-3.01-.752l.001 4.515z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#515151" d="M96.77 119.35c.834-.18 1.661-.154 2.198-.537.451-.32.563-1.116.908-1.886.199.357.386.539.39.724.025 1.38.03 2.761 0 4.141-.005.216-.226.427-.347.641-.136-.114-.339-.2-.399-.346-.733-1.771-.729-1.772-2.843-1.583.309 1.382-.763 3.149.89 4.058.843.463 2.203.371 3.189.068.841-.256 1.48-1.171 2.212-1.798v3.096c-.405.036-.712.086-1.021.086-4.141.006-8.282-.012-12.422.019-.714.006-1.197-.174-1.633-.773-.857-1.182-1.799-2.302-2.725-3.432-.232-.283-.534-.508-1.021-.962 0 1.154-.042 1.981.012 2.802.056.858.469 1.427 1.418 1.534.279.032.529.325.792.5-.271.105-.54.298-.812.303-1.827.026-3.653.025-5.48.001-.28-.004-.558-.173-.866-.275l.156-.303c2.244-.906 2.25-.906 2.248-3.508-.002-1.623-.014-3.246-.039-4.87-.017-1.121-.321-2.01-1.689-2.058-.197-.007-.384-.287-.577-.441.226-.113.453-.325.678-.323 2.311.022 4.635-.054 6.93.16 2.512.234 4.065 2.329 3.132 4.257-.51 1.053-1.688 1.783-2.725 2.818.984.9 2.117 2.194 3.491 3.135 1.941 1.33 3.268.571 3.317-1.748.041-1.947-.007-3.896-.015-5.845-.004-1.155-.361-1.994-1.717-2.013-.185-.003-.367-.2-.586-.33.705-.52 7.499-.709 10.448-.332l.19 3.214-.333.136c-.686-.717-.601-2.199-2.02-2.204-1.084-.005-2.168-.119-3.332-.189.003 1.356.003 2.59.003 4.063zm-12.647.566c2.61.105 3.646-.603 3.584-2.364-.061-1.698-1.195-2.383-3.584-2.121v4.485z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#3179A1" d="M11.555 120.682c.996-2.947 1.979-5.897 3.003-8.834.141-.404.486-.737.737-1.104.248.378.587.725.729 1.14.931 2.719 1.817 5.451 2.722 8.179.072.219.165.43.375.969.928-2.813 1.787-5.308 2.564-7.829.27-.873-.081-1.504-1.097-1.618-.335-.039-.66-.17-1.051-.274.676-.749 5.957-.804 6.827-.108-.236.112-.424.271-.618.279-1.65.064-2.414 1.097-2.884 2.521-1.258 3.81-2.54 7.611-3.817 11.415-.133.395-.3.778-.452 1.166l-.421.03-3.579-10.821-3.619 10.788-.354.022c-.185-.401-.412-.79-.547-1.207-1.167-3.581-2.319-7.167-3.474-10.751-.495-1.539-.99-3.069-3.012-3.167-.132-.006-.253-.229-.38-.35.158-.13.316-.373.476-.375 2.272-.024 4.546-.024 6.818.001.158.001.313.247.47.379-.169.126-.319.309-.508.367-1.82.55-1.951.761-1.378 2.526.723 2.233 1.468 4.457 2.204 6.686l.266-.03z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#4D4D4D" d="M65.484 111.25c.279-.241.435-.494.587-.491 2.957.044 5.938-.093 8.864.247 2.768.321 4.301 2.919 3.466 5.359-.748 2.189-2.593 2.874-4.68 3.064-.881.081-1.776.013-2.824.013.093 1.453.14 2.78.275 4.098.113 1.114.863 1.56 1.923 1.65.239.021.457.288.684.442-.25.126-.498.36-.75.363-2.191.029-4.384.028-6.575.002-.263-.003-.523-.219-.784-.336.218-.165.432-.463.656-.472 1.463-.056 2.012-.964 2.03-2.235.044-3.081.04-6.162.002-9.243-.016-1.31-.649-2.148-2.072-2.206-.212-.008-.422-.13-.802-.255zm5.523 6.706c2.682.278 3.703.022 4.349-1.167.648-1.192.65-2.439-.116-3.566-1.059-1.559-2.679-1.098-4.233-1.154v5.887z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#3279A1" d="M31.076 126.463c-2.396-.104-4.348-.856-5.794-2.647-2.053-2.542-1.741-5.994.711-8.192 2.645-2.37 7.018-2.472 9.733-.171 1.838 1.559 2.709 3.533 2.111 5.953-.675 2.73-2.601 4.192-5.218 4.856-.546.137-1.122.149-1.543.201zm4.544-6.249l-.224-.147c-.149-.709-.236-1.439-.458-2.125-.642-1.971-1.986-2.945-3.963-2.949-1.97-.004-3.295.975-3.939 2.967-.572 1.771-.498 3.526.383 5.18 1.315 2.468 4.829 2.931 6.549.736.802-1.023 1.116-2.43 1.652-3.662z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#505050" d="M122.748 114.317l.893-.782v4.376l-.259.195c-.209-.295-.498-.562-.615-.891-.591-1.655-1.865-2.553-3.319-2.117-.499.149-1.099.649-1.232 1.11-.109.376.285 1.12.671 1.374 1.008.664 2.131 1.156 3.214 1.703 2.356 1.192 3.198 2.845 2.401 4.736-.809 1.921-3.263 2.915-5.462 2.173-.606-.206-1.167-.544-1.728-.811l-.857 1.126-.379-.116c0-1.477-.009-2.954.015-4.431.002-.143.215-.282.33-.423.18.218.448.41.527.66.523 1.656 1.53 2.756 3.325 2.94 1.023.105 2.023-.021 2.378-1.187.324-1.067-.42-1.669-1.219-2.124-.879-.5-1.808-.909-2.708-1.37-.395-.203-.798-.404-1.153-.665-1.257-.927-1.753-2.263-1.381-3.618.332-1.211 1.523-2.237 2.997-2.28 1.091-.031 2.195.25 3.561.422zM106.479 125.344c-.166.33-.258.607-.429.821-.103.128-.356.25-.49.208-.127-.04-.262-.294-.265-.456-.021-1.299-.021-2.599.001-3.896.002-.159.178-.314.274-.471.184.117.446.193.537.362.169.314.208.696.356 1.024.668 1.482 2.021 2.409 3.573 2.184.649-.093 1.45-.586 1.772-1.138.434-.741-.086-1.504-.814-1.925-.979-.566-1.993-1.075-3.009-1.571-2.297-1.121-3.266-2.972-2.443-4.719.818-1.737 3.33-2.46 5.429-1.556.256.11.499.25.7.354l1.078-.886c.113.317.185.426.186.535.008 1.216.005 2.431.005 3.646l-.317.212c-.211-.27-.504-.509-.619-.814-.573-1.532-1.48-2.381-2.81-2.219-.624.075-1.419.504-1.726 1.018-.45.755.2 1.361.885 1.729.963.519 1.949.992 2.926 1.483 2.418 1.213 3.269 2.898 2.434 4.824-.813 1.876-3.346 2.847-5.517 2.077-.564-.199-1.087-.52-1.717-.826z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#494949" d="M65.261 1.395c-26.781-.478-49.158 21.253-49.165 47.605-.008 27.11 21.338 48.739 48.077 48.699 26.49-.039 47.932-21.587 47.932-48.167-.001-26.148-21.345-47.682-46.844-48.137zm-1.148 93.887c-25.326.006-45.694-20.529-45.693-46.067.001-24.88 20.685-45.48 45.674-45.489 25.432-.008 45.695 20.654 45.687 46.587-.008 24.483-20.807 44.964-45.668 44.969zM88.508 35.935c-.994-1.638-2.216-3.227-2.778-5.013-.64-2.032-1.171-4.345-.832-6.382.576-3.454 3.225-5.169 6.812-5.497-19.624-18.213-50.462-11.694-61.825 8.095 4.374-.203 8.55-.468 12.729-.524.791-.011 2.1.657 2.286 1.277.416 1.385-.748 1.868-1.986 1.963-1.301.102-2.604.199-4.115.314 4.99 14.865 9.905 29.509 14.935 44.494.359-.587.507-.752.572-.945 2.762-8.255 5.54-16.505 8.232-24.784.246-.755.124-1.755-.146-2.531-1.424-4.111-3.13-8.133-4.379-12.294-.855-2.849-1.988-4.692-5.355-4.362-.574.056-1.273-1.178-1.916-1.816.777-.463 1.548-1.316 2.332-1.328 6.857-.104 13.716-.104 20.572.006.786.013 1.557.889 2.335 1.364-.681.622-1.267 1.554-2.063 1.794-1.276.385-2.691.312-4.218.448 4.995 14.857 9.887 29.412 14.953 44.484 2.266-7.524 4.374-14.434 6.422-21.36 1.83-6.182.74-11.957-2.567-17.403zM52.719 88.149c-.092.267-.097.563-.168 1.007 8.458 2.344 16.75 2.175 25.24-.685l-12.968-35.52c-4.151 12.064-8.131 23.63-12.104 35.198zM46.184 86.543c-6.554-17.979-13.022-35.724-19.538-53.596-8.814 17.217-2.109 43.486 19.538 53.596zM100.636 31.14c-.27 2.994-.082 6.327-.941 9.362-2.023 7.152-4.496 14.181-6.877 21.229-2.588 7.66-5.28 15.286-7.927 22.927 12.437-7.372 19.271-18.253 20.359-32.555.62-8.14-2.188-19.412-4.614-20.963z"></path>\r\n</svg>', 99, '2016-10-17 17:07:24', '2016-10-17 17:07:24', 1, 1, 1, 0);
INSERT INTO `skills` (`id`, `name`, `description`, `image`, `order`, `created_at`, `updated_at`, `active`, `users_id`, `skill_categories_id`, `home`) VALUES
(18, 'Firefox', 'Love work with Firefox with Firebug and Web developer add-ons ', '<svg viewBox="0 0 128 128">\r\n<path fill-rule="evenodd" clip-rule="evenodd" fill="#DD732A" d="M14.782 41.322l-2.794 2.237c-.414-1.684-.04-3.155.395-4.579.897-2.942 2.48-5.541 4.282-8.01.653-.896 1.119-1.781 1.099-2.987-.074-4.268.378-8.484 1.841-12.531.746-2.064 1.754-3.985 3.477-5.652.68 3.32 1.296 6.51 3.111 8.903 1.31-1.162 2.621-2.268 3.867-3.44 7.484-7.038 16.294-11.435 26.45-12.883 12.738-1.816 24.495.916 35.167 8.184 1.008.687 2.166 1.156 3.265 1.703 5.054 2.51 8.869 6.246 11.258 11.383.401.86.712 1.761 1.064 2.643l.318-.055c-.441-2.648-.883-5.295-1.375-8.242 5.509 7.732 7.247 16.313 7.717 25.317 1.029-1.436 1.021-3.137 1.579-4.763.183 1.182.412 2.359.542 3.546.508 4.666-.396 9.191-1.256 13.748-2.029 10.764-6.691 20.29-13.717 28.569-8 9.427-17.993 15.721-30.492 17.214-18.138 2.167-33.375-3.661-45.681-17.148-5.905-6.47-9.81-14-11.558-22.575-1.323-6.491-1.004-12.946 1.15-19.261l.337-.968-.046-.353zm82.112-8.608l.344-.296 3.873 2.991c-.051-.908-.012-1.863-.169-2.783-.69-4.016-3.124-6.927-6.148-9.424-3.791-3.13-8.141-5.284-12.649-7.153-.443-.184-.878-.389-1.315-.584l.054-.454 6.355-.376c-2.348-3.875-6.383-4.956-10.471-6.067l.509-.27c-8.287-2.588-16.499-2.791-24.774-.674-7.696 1.969-19.253 8.986-21.039 12.772l.521-.127c2.904-.713 5.805-.909 8.73-.061.318.092.849-.119 1.124-.366 2.741-2.454 5.789-4.376 9.32-5.464 1.113-.343 2.26-.571 3.391-.851-.094.383-.264.538-.453.668-3.661 2.517-6.129 5.826-6.817 10.306-.037.246 0 .615.157.763 1.622 1.525 3.231 3.068 4.94 4.491.59.491 1.423.821 2.19.942 1.48.236 2.993.28 4.492.385.922.065 1.52.717 1.189 1.463-.491 1.112-1.025 2.144-2.151 2.895-2.129 1.421-4.1 3.081-6.154 4.617-.512.384-.533.733-.266 1.3.492 1.048.962 2.123 1.277 3.233.399 1.404.535 2.855.17 4.34-1.16-.256-2.223-.509-3.292-.721-1.075-.213-2.158-.379-3.234-.578-1.347-.247-2.496.225-3.186 1.323-.801 1.274-.813 2.605.042 3.696 1.745 2.222 3.721 4.215 6.053 5.824 1.93 1.333 4.1 2.074 6.41 1.58 1.607-.343 3.182-1.032 4.646-1.805 4.436-2.343 9.439-1.553 12.508 2.094.549.651.878 1.391.412 2.156-.448.735-1.199.908-2.063.691-.897-.225-1.727-.07-2.537.468-2.139 1.42-4.239 2.931-6.507 4.116-3.654 1.91-7.635 2.553-11.748 2.4-.422-.016-.845-.002-1.417-.002l.38.447c2.97 2.88 6.375 5.093 10.304 6.389 4.327 1.426 8.75 2.011 13.239.771 5.031-1.389 8.983-4.438 12.364-8.289 1.362-1.553 2.598-3.217 3.892-4.829l.324.07-1.142 7.793c6.203-7.589 6.4-16.264 5.528-25.412 1.784 1.988 2.326 4.318 3.35 6.654 2.09-7.251 1.056-14.158-.556-21.052z"></path><path fill="#DD732A" d="M26.877 109.18v4.908h5.39v3.121h-5.39v7.337h-4.375v-18.489h11.019l-.454 3.123h-6.19zM40.096 103.59c.472.453.708 1.027.708 1.721s-.236 1.267-.708 1.721c-.471.453-1.071.68-1.8.68-.73 0-1.326-.227-1.787-.68-.463-.454-.694-1.027-.694-1.721s.231-1.268.694-1.721c.461-.454 1.057-.68 1.787-.68.728 0 1.329.226 1.8.68zm-3.881 20.956v-14.167h4.215v14.167h-4.215zM52.835 110.167l-.667 4.082c-.533-.125-.96-.187-1.28-.187-.836 0-1.472.289-1.907.867-.437.578-.778 1.445-1.027 2.602v7.016h-4.216v-14.167h3.683l.347 2.748c.319-.977.804-1.747 1.453-2.307.649-.561 1.384-.84 2.201-.84.516-.001.986.061 1.413.186zM66.44 118.703h-8.776c.142 1.192.479 2.027 1.014 2.508.533.48 1.271.721 2.214.721.569 0 1.12-.103 1.654-.307.533-.205 1.111-.521 1.734-.947l1.733 2.348c-1.653 1.316-3.494 1.974-5.522 1.974-2.294 0-4.055-.675-5.282-2.027-1.227-1.352-1.841-3.166-1.841-5.442 0-1.441.258-2.735.774-3.882.516-1.147 1.271-2.054 2.268-2.721.995-.667 2.188-1 3.574-1 2.045 0 3.646.64 4.803 1.92 1.155 1.28 1.733 3.06 1.733 5.335.001.587-.026 1.093-.08 1.52zm-4.054-2.721c-.035-2.169-.8-3.255-2.294-3.255-.729 0-1.294.267-1.694.8-.4.534-.646 1.415-.733 2.641h4.722v-.186zM74.123 107.845c-.267.285-.399.766-.399 1.441v1.093h3.335l-.454 2.936h-2.881v11.231h-4.215v-11.231h-2.135v-2.936h2.135v-1.253c0-1.423.466-2.583 1.4-3.482.934-.898 2.271-1.347 4.015-1.347 1.405 0 2.694.303 3.868.907l-1.146 2.748c-.712-.355-1.45-.534-2.215-.534-.606 0-1.04.143-1.308.427zM89.41 111.913c1.227 1.326 1.841 3.18 1.841 5.563 0 1.513-.28 2.833-.84 3.962-.561 1.129-1.361 2.005-2.401 2.628-1.041.622-2.272.933-3.695.933-2.151 0-3.846-.662-5.082-1.987-1.236-1.324-1.854-3.179-1.854-5.562 0-1.512.28-2.833.841-3.961.561-1.13 1.36-2.006 2.401-2.628 1.04-.623 2.271-.934 3.694-.934 2.169 0 3.868.662 5.095 1.986zm-7.016 2.188c-.427.721-.641 1.837-.641 3.349 0 1.547.21 2.677.627 3.388.419.711 1.063 1.067 1.935 1.067.854 0 1.494-.359 1.921-1.08s.64-1.836.64-3.349c0-1.547-.209-2.676-.626-3.388-.418-.711-1.063-1.067-1.935-1.067-.854 0-1.495.36-1.921 1.08zM100.722 124.546l-2.454-5.309-2.401 5.309h-4.589l4.563-7.443-4.108-6.724h4.722l1.975 4.536 1.895-4.536h4.481l-3.868 6.59 4.563 7.577h-4.779z"></path>\r\n</svg>', 1, '2016-10-17 17:09:30', '2016-10-17 17:14:06', 1, 1, 1, 0),
(19, 'Chrome', 'Google Chrome is a freeware web browser developed by Google.', '<svg viewBox="0 0 128 128">\r\n<path fill="#CE4E4E" d="M64 30h45.23c-8.153-17-25.119-28.028-44.731-28.028-15.876 0-30.021 7.292-39.158 18.848l16.913 29.444c.848-11.399 9.746-20.264 21.746-20.264zM57.312 100.987l17.212-29.66c-3.009 1.534-6.416 2.398-10.025 2.398-9.569 0-17.718-6.078-20.796-14.584l-20.648-35.31c-5.333 7.94-8.446 17.497-8.446 27.782-.001 25.114 18.555 45.889 42.703 49.374zM110.821 33h-34.294c6.069 4 10.083 10.809 10.083 18.584 0 3.824-.971 7.435-2.679 10.574l.012.016-22.755 39.214c1.094.071 2.197.114 3.311.114 27.554 0 49.891-22.364 49.891-49.918 0-6.559-1.267-11.584-3.569-18.584zM23.649 124.822c-.782.374-2.52.953-4.732.953-4.972 0-8.206-3.371-8.206-8.41 0-5.074 3.473-8.786 8.853-8.786 1.771 0 3.337.443 4.154.886l-.681 2.281c-.715-.374-1.839-.784-3.474-.784-3.78 0-5.823 2.828-5.823 6.232 0 3.813 2.452 6.162 5.721 6.162 1.702 0 2.826-.408 3.678-.783l.51 2.249zM27.157 101.225h2.996v10.317h.068c.477-.852 1.226-1.634 2.146-2.146.885-.511 1.94-.817 3.064-.817 2.213 0 5.754 1.362 5.754 7.015v9.806h-2.996v-9.466c0-2.655-.987-4.868-3.814-4.868-1.94 0-3.438 1.361-4.018 2.961-.17.443-.204.886-.204 1.431v9.942h-2.996v-24.175zM46.055 114.062c0-1.941-.034-3.61-.136-5.142h2.622l.136 3.269h.102c.75-2.212 2.589-3.61 4.598-3.61.307 0 .544.035.816.069v2.827c-.307-.068-.612-.068-1.021-.068-2.111 0-3.609 1.566-4.019 3.813-.067.41-.102.919-.102 1.396v8.784h-2.997v-11.338zM71.764 117.024c0 6.094-4.257 8.751-8.207 8.751-4.426 0-7.899-3.269-7.899-8.479 0-5.482 3.644-8.717 8.173-8.717 4.732.001 7.933 3.44 7.933 8.445zm-13.041.171c0 3.608 2.043 6.332 4.971 6.332 2.86 0 5.005-2.689 5.005-6.401 0-2.792-1.396-6.3-4.937-6.3-3.508.002-5.039 3.269-5.039 6.369zM75.543 113.381c0-1.737-.067-3.099-.136-4.461h2.621l.137 2.69h.103c.92-1.566 2.452-3.031 5.21-3.031 2.212 0 3.915 1.362 4.63 3.303h.068c.511-.954 1.192-1.635 1.873-2.145.987-.75 2.043-1.159 3.609-1.159 2.213 0 5.447 1.431 5.447 7.151v9.67h-2.927v-9.296c0-3.2-1.193-5.073-3.576-5.073-1.736 0-3.03 1.26-3.575 2.689-.137.443-.238.954-.238 1.499v10.182h-2.929v-9.875c0-2.622-1.158-4.495-3.438-4.495-1.839 0-3.235 1.498-3.712 2.996-.17.409-.238.954-.238 1.465v9.908h-2.929v-12.018zM105.609 117.705c.068 4.052 2.622 5.721 5.652 5.721 2.146 0 3.473-.375 4.563-.851l.545 2.146c-1.055.476-2.894 1.055-5.516 1.055-5.073 0-8.104-3.371-8.104-8.342 0-4.972 2.928-8.853 7.729-8.853 5.415 0 6.811 4.699 6.811 7.729 0 .614-.034 1.056-.103 1.396h-11.577v-.001zm8.786-2.145c.034-1.872-.783-4.836-4.154-4.836-3.064 0-4.358 2.759-4.597 4.836h8.751z"></path>\r\n</svg>', 1, '2016-10-17 17:15:22', '2016-10-17 17:15:22', 1, 1, 1, 0),
(20, 'JQuery mobile', 'JQuery mobile', '<img src="/images/skills/jquery-mobile-logo.png" class="img-responsive" alt="JQuery mobile">', 1, '2016-10-17 17:22:06', '2016-10-17 17:27:49', 1, 1, 1, 0),
(21, 'PhoneGap', 'PhoneGap', '<img src="/images/skills/Build-Bot-Preview.png" class="img-responsive" alt="PhoneGap">', 1, '2016-10-17 17:32:02', '2016-10-17 17:32:02', 1, 1, 1, 0),
(22, 'Arduino', 'Arduino is an open-source project that created microcontroller-based kits for building digital devices and interactive objects that can sense and control physical devices.', '<img src="/images/skills/Arduino_Logo.svg.png" class="img-responsive" alt="Arduino">', 1, '2016-10-17 17:36:54', '2016-10-17 17:36:54', 1, 1, 1, 0),
(23, 'Action Script', '[forgotten language] used to develop games and campaings', '<img src="/images/skills/as3.png" class="img-responsive" alt="Action Script">', 80, '2016-10-17 17:40:55', '2016-10-17 17:40:55', 1, 1, 1, 0),
(24, 'C++', '[forgotten language] used to learn to programing', '<svg viewBox="0 0 128 128">\r\n<path fill="#9C033A" d="M117.5 33.5l.3-.2c-.6-1.1-1.5-2.1-2.4-2.6l-48.3-27.8c-.8-.5-1.9-.7-3.1-.7-1.2 0-2.3.3-3.1.7l-48 27.9c-1.7 1-2.9 3.5-2.9 5.4v55.7c0 1.1.2 2.3.9 3.4l-.2.1c.5.8 1.2 1.5 1.9 1.9l48.2 27.9c.8.5 1.9.7 3.1.7 1.2 0 2.3-.3 3.1-.7l48-27.9c1.7-1 2.9-3.5 2.9-5.4v-55.8c.1-.8 0-1.7-.4-2.6zm-35.5 32.5v-4h5v-5h5v5h5v4h-5v5h-5v-5h-5zm3.3-14c-4.2-7.5-12.2-12.5-21.3-12.5-13.5 0-24.5 11-24.5 24.5s11 24.5 24.5 24.5c9.1 0 17.1-5 21.3-12.4l12.9 7.6c-6.8 11.8-19.6 19.8-34.2 19.8-21.8 0-39.5-17.7-39.5-39.5s17.7-39.5 39.5-39.5c14.7 0 27.5 8.1 34.3 20l-13 7.5zm29.7 14h-5v5h-4v-5h-6v-4h6v-5h4v5h5v4z"></path>\r\n</svg>', 81, '2016-10-17 17:51:05', '2016-10-17 17:51:05', 1, 1, 1, 0),
(25, 'Painting', 'I like to paint with acrylic when i feel inspired', 'croppedImg_1900999464.jpeg', 1, '2016-10-17 18:24:57', '2016-10-19 08:09:29', 1, 1, 2, 0),
(26, 'Crafting', 'i like crafting', 'croppedImg_1507281018.jpeg', 2, '2016-10-17 18:59:34', '2016-10-19 08:25:49', 1, 1, 2, 0),
(27, 'Photography', 'amateur ', 'croppedImg_1996410264.jpeg', 3, '2016-10-17 19:13:49', '2016-10-19 07:44:42', 1, 1, 2, 0),
(28, 'Carlos castillo', 'sdfsdfsd sd', 'croppedImg_413256908.jpeg', 7, '2016-10-18 22:44:27', '2016-10-19 07:53:58', 0, 1, 2, 0),
(29, 'Prestashop', 'PrestaShop is a free, open source e-commerce solution.', '<img src="/images/skills/prestashop-bronze.png" class="img-responsive" alt="Prestashop">', 100, '2016-10-19 18:10:29', '2016-10-19 18:10:29', 1, 1, 1, 0),
(30, 'API(s) implementation', 'API(s) implementation(s)', '<img src="/images/skills/api.png" class="img-responsive" alt="API implementation">', 50, '2016-10-19 18:59:54', '2016-10-19 18:59:54', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skills_gallery`
--

CREATE TABLE IF NOT EXISTS `skills_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `skills_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_skills_gallery_skills1_idx` (`skills_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `skills_gallery`
--

INSERT INTO `skills_gallery` (`id`, `image`, `order`, `created_at`, `updated_at`, `active`, `skills_id`) VALUES
(3, 'toadman2.jpg', 1, '2016-10-21 00:00:00', NULL, 1, 26),
(4, 'pharaonman.jpg', 2, '2016-10-21 00:00:00', NULL, 1, 26),
(5, 'photography01.jpg', 1, '2016-10-21 00:00:00', NULL, 1, 27),
(6, 'photography02.jpg', 2, '2016-10-21 00:00:00', '2016-10-21 00:00:00', 1, 27),
(7, 'photography03.jpg', 3, '2016-10-21 00:00:00', '2016-10-21 00:00:00', 1, 27),
(8, 'photography04.jpg', 4, '2016-10-21 00:00:00', '2016-10-21 00:00:00', 1, 27),
(9, 'photography05.jpg', 5, '2016-10-21 00:00:00', '2016-10-21 00:00:00', 1, 27),
(10, 'photography06.jpg', 6, '2016-10-21 00:00:00', '2016-10-21 00:00:00', 1, 27),
(11, 'photography07.jpg', 7, '2016-10-21 00:00:00', '2016-10-21 00:00:00', 1, 27),
(12, 'photography08.jpg', 8, '2016-10-21 00:00:00', '2016-10-21 00:00:00', 1, 27),
(13, 'photography09.jpg', 9, '2016-10-21 00:00:00', '2016-10-21 00:00:00', 1, 27),
(14, 'paint-flor-cielo.jpg', 1, '2016-10-24 00:00:00', '2016-10-24 00:00:00', 1, 25),
(15, 'paint-flores.jpg', 2, '2016-10-24 00:00:00', '2016-10-24 00:00:00', 1, 25),
(16, 'paint-copia.jpg', 4, NULL, NULL, 1, 25),
(17, 'paint-noterminado.jpg', 5, '2016-10-24 00:00:00', '2016-10-24 00:00:00', 1, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill_categories`
--

CREATE TABLE IF NOT EXISTS `skill_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `skill_categories`
--

INSERT INTO `skill_categories` (`id`, `name`, `created_at`, `updated_at`, `active`) VALUES
(1, 'Web development', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 1),
(2, 'Other skills', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sms_sent_messages`
--

CREATE TABLE IF NOT EXISTS `sms_sent_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dnis` varchar(45) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `status_code` varchar(45) DEFAULT NULL,
  `reason_phrase` varchar(45) DEFAULT NULL,
  `user_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sms_sent_messages_users1_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `sms_sent_messages`
--

INSERT INTO `sms_sent_messages` (`id`, `dnis`, `message`, `response`, `created_at`, `updated_at`, `active`, `users_id`, `status_code`, `reason_phrase`, `user_code`) VALUES
(1, '447774041604', 'hola+mundo', 'OK03628011-2a62-4e74-986c-1f571266e5a2', '2016-10-24 09:09:54', '2016-10-24 09:09:54', 1, 1, '200', 'OK', NULL),
(2, '447774041604', 'hola+mundo', 'OK2ff35359-4bcb-4768-aba7-502be6f8a7a4', '2016-10-24 09:10:47', '2016-10-24 09:10:47', 1, 1, '200', 'OK', NULL),
(3, '447774041604', 'hola+mundo', 'OKf5185d2a-73fa-4978-b2f7-a6b7d2cefefb', '2016-10-24 09:12:15', '2016-10-24 09:12:15', 1, 1, '200', 'OK', NULL),
(4, '447774041604', 'hola+mundo', 'OKc16e400e-5eb4-4bf5-9efd-57b717e27a2b', '2016-10-24 09:14:12', '2016-10-24 09:14:12', 1, 1, '200', 'OK', NULL),
(5, '447774041604', 'hola+mundo', 'OK7f97bbad-0da6-4f1b-ae35-b6433942c22a', '2016-10-24 09:25:35', '2016-10-24 09:25:35', 1, 1, '200', 'OK', NULL),
(6, '447774041604', 'hola+mundo', 'OK5aa91669-872b-463c-9467-f190ce396b1b', '2016-10-24 09:26:35', '2016-10-24 09:26:35', 1, 1, '200', 'OK', NULL),
(7, '447774041601', 'hola+mundo', 'OKcc357e07-f66c-4fbc-ad44-0c89bae20fec', '2016-10-24 09:26:52', '2016-10-24 09:26:52', 1, 1, '200', 'OK', NULL),
(8, '447774041604', 'Hello! this is a test SMS, your code is:', '8dc818cb-c970-42c1-9c4c-1d7b9102f2aa', '2016-10-24 09:41:10', '2016-10-24 09:41:10', 1, 1, '200', 'OK', 'PGZA41697'),
(9, '447774041604', 'Hello! this is a test SMS, your code is:', '170de988-c0f7-436f-9e81-d8d5953a251a', '2016-10-24 09:42:05', '2016-10-24 09:42:05', 1, 1, '200', 'OK', 'EWTA93068'),
(10, '447774041604', 'Hello! this is a test SMS, your code is: WJRZ87309', '0f89b5f9-45ab-4a40-b5a9-a851388c78b6', '2016-10-24 09:43:07', '2016-10-24 09:43:07', 1, 1, '200', 'OK', 'WJRZ87309'),
(11, '447774041604', 'Hello! this is a test SMS, your code is: HGYR753710', '293b85f4-0508-437c-b8ee-983f7b6fe7c1', '2016-10-24 09:43:44', '2016-10-24 09:43:44', 1, 1, '200', 'OK', 'HGYR753710'),
(12, '447774041604', 'Hello! this is a test SMS, your code is: JJRJ446711', '2b073691-948a-45fd-ba05-03af61bed8b2', '2016-10-24 09:44:21', '2016-10-24 09:44:21', 1, 1, '200', 'OK', 'JJRJ446711'),
(13, 'asfdasdasd', 'Hello! this is a test SMS, your code is: GREH862012', 'BAD PARAMETERS', '2016-10-24 10:04:31', '2016-10-24 10:04:31', 1, 1, '200', 'OK', 'GREH862012'),
(14, '444345dfgdfg', 'Hello! this is a test SMS, your code is: EKEB761313', 'BAD PARAMETERS', '2016-10-24 10:09:45', '2016-10-24 10:09:45', 1, 1, '200', 'OK', 'EKEB761313'),
(15, '447774041604', 'Hello! this is a test SMS, your code is: HZTZ342914', 'e2714b2e-e48a-421d-aaf3-b30c1d471a2f', '2016-10-24 10:11:44', '2016-10-24 10:11:44', 1, 1, '200', 'OK', 'HZTZ342914'),
(16, '447774041601', 'Hello! this is a test SMS, your code is: PGHY246015', 'd228408e-f71c-4a0a-9a07-7ec76e64f58d', '2016-10-24 10:13:25', '2016-10-24 10:13:25', 1, 1, '200', 'OK', 'PGHY246015'),
(17, '44jhgjhgjh', 'Hello! this is a test SMS, your code is: GEFT244016', 'BAD PARAMETERS', '2016-10-24 10:32:26', '2016-10-24 10:32:26', 1, 1, '200', 'OK', 'GEFT244016'),
(18, '44asdasdasd', 'Hello! this is a test SMS, your code is: DSHV350717', 'BAD PARAMETERS', '2016-10-24 10:40:02', '2016-10-24 10:40:02', 1, 1, '200', 'OK', 'DSHV350717'),
(19, '44jhgytuyutuy', 'Hello! this is a test SMS, your code is: JVVY961918', 'BAD PARAMETERS', '2016-10-24 10:40:55', '2016-10-24 10:40:55', 1, 1, '200', 'OK', 'JVVY961918'),
(20, '44sdfsdfsdf', 'Hello! this is a test SMS, your code is: HWKA592019', 'BAD PARAMETERS', '2016-10-24 10:42:36', '2016-10-24 10:42:36', 1, 1, '200', 'OK', 'HWKA592019'),
(21, '4432423', 'Hello! this is a test SMS, your code is: AZHE649320', 'BAD PARAMETERS', '2016-10-24 10:45:56', '2016-10-24 10:45:56', 1, 1, '200', 'OK', 'AZHE649320'),
(22, '447774041601', 'Hello! this is a test SMS, your code is: KAAE640321', 'd0687c3e-7244-4d08-b82d-93f1ab7249d5', '2016-10-24 10:46:24', '2016-10-24 10:46:24', 1, 1, '200', 'OK', 'KAAE640321'),
(23, '4477740416', 'Hello! this is a test SMS, your code is: SVMJ418322', 'BAD PARAMETERS', '2016-10-24 10:46:42', '2016-10-24 10:46:42', 1, 1, '200', 'OK', 'SVMJ418322'),
(24, '447774041601', 'Hello! this is a test SMS, your code is: VDFD516823', 'b0ec90f6-c0e5-4115-9b10-7826f351881b', '2016-10-24 10:51:48', '2016-10-24 10:51:48', 1, 1, '200', 'OK', 'VDFD516823'),
(25, '447774041601', 'Hello! this is a test SMS, your code is: SGSB149724', '6acbccb6-d238-4015-9332-330802a6a47a', '2016-10-24 10:55:44', '2016-10-24 10:55:44', 1, 1, '200', 'OK', 'SGSB149724'),
(26, '447774041601', 'Hello! this is a test SMS, your code is: PRTH579125', '2fd9b335-7918-4893-b57f-2d12a8376ea1', '2016-10-24 11:00:42', '2016-10-24 11:00:42', 1, 1, '200', 'OK', 'PRTH579125'),
(27, '447774041604', 'Hello! this is a test SMS, your code is: UUDJ188226', '368e6861-2c58-450a-8bec-19f7c871f1f9', '2016-10-24 11:01:35', '2016-10-24 11:01:35', 1, 1, '200', 'OK', 'UUDJ188226'),
(28, '447774041601', 'Hello! this is a test SMS, your code is: TDSC635627', '2db200d7-e05a-42e7-9cdc-4d4ea1e5eb88', '2016-10-24 11:02:54', '2016-10-24 11:02:54', 1, 1, '200', 'OK', 'TDSC635627'),
(29, '447774041604', 'Hello! this is a test SMS, your code is: DDTV808528', '3e5d1c9f-b135-4a50-b9ee-90737200c759', '2016-10-24 11:03:34', '2016-10-24 11:03:34', 1, 1, '200', 'OK', 'DDTV808528'),
(30, '447774041601', 'Hello! this is a test SMS, your code is: VTWU798829', 'a0bf704e-3be4-4aab-af76-dd1c36d4f5f5', '2016-10-24 11:04:12', '2016-10-24 11:04:12', 1, 1, '200', 'OK', 'VTWU798829'),
(31, '447774041601', 'Hello! this is a test SMS, your code is: GDGT666530', '9949fd4e-bec7-4c9c-9497-4aafa7b04386', '2016-10-24 11:05:13', '2016-10-24 11:05:13', 1, 1, '200', 'OK', 'GDGT666530'),
(32, '447774041601', 'Hello! this is a test SMS, your code is: DRGY309831', '275591c6-a821-4ea1-95aa-4c9723da8307', '2016-10-24 11:06:49', '2016-10-24 11:06:49', 1, 1, '200', 'OK', 'DRGY309831'),
(33, '447774041601', 'Hello! this is a test SMS, your code is: HFZZ259432', 'bc48129f-a24f-434c-92bb-549453c707ce', '2016-10-24 11:09:43', '2016-10-24 11:09:43', 1, 1, '200', 'OK', 'HFZZ259432'),
(34, '447774041601', 'Hello! this is a test SMS, your code is: MMVU209833', '0177f896-95bb-44ea-be06-e5427277e771', '2016-10-24 11:12:10', '2016-10-24 11:12:10', 1, 1, '200', 'OK', 'MMVU209833'),
(35, '447774041601', 'Hello! this is a test SMS, your code is: EWGY688434', '1ed5ae6c-9bc4-40b5-a833-84869058cea7', '2016-10-24 11:12:41', '2016-10-24 11:12:41', 1, 1, '200', 'OK', 'EWGY688434'),
(36, '447774041601', 'Hello! this is a test SMS, your code is: WYYP415535', 'f36bcf0a-1d32-45c2-97d8-92247ab65637', '2016-10-24 11:13:55', '2016-10-24 11:13:55', 1, 1, '200', 'OK', 'WYYP415535'),
(37, '447774041601', 'Hello! this is a test SMS, your code is: KVUB712536', '55d2695b-57c5-4c5b-8d43-eb68c276b715', '2016-10-24 11:14:07', '2016-10-24 11:14:07', 1, 1, '200', 'OK', 'KVUB712536'),
(38, '447774041601', 'Hello! this is a test SMS, your code is: TTTM670637', 'e212d2be-7f50-4caf-9d98-2f66cb756817', '2016-10-24 11:14:28', '2016-10-24 11:14:28', 1, 1, '200', 'OK', 'TTTM670637'),
(39, '447774041601', 'Hello! this is a test SMS, your code is: MYTK972138', '1573b664-a8a6-42c2-9496-a9222903be70', '2016-10-24 11:14:52', '2016-10-24 11:14:52', 1, 1, '200', 'OK', 'MYTK972138'),
(40, '447774041604', 'Hello! this is a test SMS, your code is: HHBM181639', '60351082-9048-4325-bd67-ce2a2ba7f475', '2016-10-24 21:16:26', '2016-10-24 21:16:26', 1, 1, '200', 'OK', 'HHBM181639'),
(41, '447774041604', 'Hello! this is a test SMS, your code is: KGSY930739', '19269687-4600-483f-8451-819b672d8f34', '2016-10-24 21:16:26', '2016-10-24 21:16:26', 1, 1, '200', 'OK', 'KGSY930739'),
(42, '447774041604', 'Hello! this is a test SMS, your code is: UUZY348241', 'a18be6a7-13fb-418e-b74f-7435245bff41', '2016-10-24 21:17:26', '2016-10-24 21:17:26', 1, 1, '200', 'OK', 'UUZY348241'),
(43, '447774041604', 'Hello! this is a test SMS, your code is: TAHM911642', '6fc42cd0-740f-49f8-bf2d-92a5ebf58c45', '2016-10-24 21:53:17', '2016-10-24 21:53:17', 1, 1, '200', 'OK', 'TAHM911642'),
(44, '447774041604', 'Hello! this is a test SMS, your code is: FKKY879543', 'cb39a2dc-dc07-4b1a-b18f-32c53aaf40b0', '2016-10-25 16:12:55', '2016-10-25 16:12:55', 1, 1, '200', 'OK', 'FKKY879543'),
(45, '447774041604', 'Hello! this is a test SMS, your code is: MYCK497244', 'e3f8e7ce-6dc2-452c-a7f0-71c1d32e70a7', '2016-10-26 18:00:07', '2016-10-26 18:00:07', 1, 1, '200', 'OK', 'MYCK497244');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `active`, `created_at`, `updated_at`, `deleted_at`, `order`) VALUES
(1, 'Questions or similar', 1, '2016-10-20 00:00:00', '2016-10-20 00:00:00', NULL, 1),
(2, 'I want a web project', 1, '2016-10-20 00:00:00', '2016-10-20 00:00:00', NULL, 2),
(3, 'I want to invite you a coffe and speak', 1, '2016-10-20 00:00:00', '2016-10-20 00:00:00', NULL, 3),
(4, 'Other', 1, '2016-10-20 00:00:00', '2016-10-20 00:00:00', NULL, 5),
(5, 'SMS Services', 1, '2016-10-23 00:00:00', '2016-10-23 00:00:00', NULL, 4);

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
  `cv` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `admin` int(11) DEFAULT '0',
  `remember_token` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `git` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `active`, `created_at`, `updated_at`, `deleted_at`, `cv`, `profession`, `admin`, `remember_token`, `linkedin`, `facebook`, `twitter`, `git`, `google`, `skype`) VALUES
(1, 'info@carloscastillo.cl', '$2y$10$V0e05F1Irsx.OOCE4yGoT.4MhOFrDQmyXEW19sBGhCRn/LQWVo.hm', 'Carlos Castillo', 1, NULL, '2016-10-17 14:30:32', NULL, NULL, 'Web developer', 1, '9NPsqKxt6yzCfrNdVWu8IItZ02NQgC92dBSEzDvrXffcEAkxlfGgWYrCiXsb', 'https://www.linkedin.com/in/carlos-castillo-pardo-92a391129', 'https://www.facebook.com/carloscastillop', 'https://twitter.com/ccastillocl', 'https://gitlab.com/carloscastillop ', NULL, 'carloscastillop');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `fk_contacts_subjects1` FOREIGN KEY (`subjects_id`) REFERENCES `subjects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
-- Filtros para la tabla `projects_galleries`
--
ALTER TABLE `projects_galleries`
  ADD CONSTRAINT `fk_project_gallery_projects1` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_skills_skill_categories1` FOREIGN KEY (`skill_categories_id`) REFERENCES `skill_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_skills_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `skills_gallery`
--
ALTER TABLE `skills_gallery`
  ADD CONSTRAINT `fk_skills_gallery_skills1` FOREIGN KEY (`skills_id`) REFERENCES `skills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sms_sent_messages`
--
ALTER TABLE `sms_sent_messages`
  ADD CONSTRAINT `fk_sms_sent_messages_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
