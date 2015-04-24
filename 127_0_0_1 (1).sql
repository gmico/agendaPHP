-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-04-2015 a les 20:27:06
-- Versió del servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `migrations`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Bolcant dades de la taula `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_04_07_174303_create_poblacions_and_votants_tables', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `poblacions`
--

CREATE TABLE IF NOT EXISTS `poblacions` (
`id` int(10) unsigned NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `habitants` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `slug` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Bolcant dades de la taula `poblacions`
--

INSERT INTO `poblacions` (`id`, `nom`, `habitants`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Barcelona', 4000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Barcelona'),
(2, 'HospitaletXD', 200, '0000-00-00 00:00:00', '2015-04-21 15:14:15', 'Hospitalet'),
(4, 'Terrassa', 5000000, '2015-04-17 11:47:50', '2015-04-17 11:47:50', 'Terrassa'),
(5, 'Manresa', 1343403, '2015-04-21 15:20:01', '2015-04-21 15:20:01', 'manresa'),
(6, 'badalona', 616816, '2015-04-21 16:07:06', '2015-04-21 16:23:07', 'badalona');

-- --------------------------------------------------------

--
-- Estructura de la taula `votants`
--

CREATE TABLE IF NOT EXISTS `votants` (
`id` int(10) unsigned NOT NULL,
  `dni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `datanaixament` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `poblacion_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Bolcant dades de la taula `votants`
--

INSERT INTO `votants` (`id`, `dni`, `nom`, `datanaixament`, `created_at`, `updated_at`, `poblacion_id`, `slug`, `description`) VALUES
(1, '12345678R', 'guillem', '21/12/1984', '0000-00-00 00:00:00', '2015-04-07 16:21:30', '1', 'guillem', 'Votant guillem'),
(2, '22345678G', 'edu', '12/10/1994', '0000-00-00 00:00:00', '2015-04-07 16:21:30', '2', 'edu', 'Votant edu'),
(3, '32345678H', 'miriam', '13/11/1974', '0000-00-00 00:00:00', '2015-04-07 16:21:30', '2', 'miriam', 'Votant miriam'),
(4, '42345678E', 'olek', '24/04/1989', '0000-00-00 00:00:00', '2015-04-07 16:21:30', '2', 'olek', 'Votant olek'),
(5, '72345678V', 'richar', '02/12/2010', '0000-00-00 00:00:00', '2015-04-07 16:21:30', '1', 'richar', 'Votant richar'),
(6, '92345678W', 'alberto', '08/06/1987', '0000-00-00 00:00:00', '2015-04-07 16:21:30', '1', 'alberto', 'Votant alberto'),
(7, '77745678B', 'joanillo', '26/08/1964', '0000-00-00 00:00:00', '2015-04-07 16:21:30', '2', 'joanillo', 'Votant joanillo'),
(8, '78945678T', 'bernat', '10/04/1954', '0000-00-00 00:00:00', '2015-04-07 16:21:30', '1', 'bernat', 'Votant Bernat'),
(9, '54345678A', 'cristina', '22/01/1999', '0000-00-00 00:00:00', '2015-04-07 16:21:30', '2', 'cristina', 'Votant cristina'),
(10, '76586678R', 'vanesa', '30/09/1990', '0000-00-00 00:00:00', '2015-04-07 16:21:30', '1', 'vanesa', 'Votant vanessa'),
(12, '3423423423f', 'paco', '', '2015-04-21 15:14:01', '2015-04-21 15:42:18', '4', 'paco', 'srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df gsdfs dfsdfsdf srfgsdfscgd fgdfgd fgdfg df'),
(13, '123456789', 'Isabel', '12/12/1954', '2015-04-21 15:54:41', '2015-04-21 15:54:41', '4', 'isabel', 'fw rert rth sdyjhdr thdrth dfyjh dhjd ghjdfgh ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poblacions`
--
ALTER TABLE `poblacions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votants`
--
ALTER TABLE `votants`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `votants_dni_unique` (`dni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poblacions`
--
ALTER TABLE `poblacions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `votants`
--
ALTER TABLE `votants`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
