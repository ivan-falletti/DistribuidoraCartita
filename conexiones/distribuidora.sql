-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2017 at 07:31 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `distribuidora`
--
CREATE DATABASE `distribuidora` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `distribuidora`;

-- --------------------------------------------------------

--
-- Table structure for table `localidad`
--

CREATE TABLE `localidad` (
  `id_localidad` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_localidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `localidad`
--

INSERT INTO `localidad` (`id_localidad`, `nombre`) VALUES
(1, 'Arocena'),
(2, 'Barrancas'),
(3, 'Coronda'),
(4, 'Colonia Belgrano'),
(5, 'Esperanza'),
(6, 'Galvez'),
(7, 'San Carlos Centro'),
(8, 'San Carlos Norte'),
(9, 'San Carlos Sur '),
(10, 'Santa Clara');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(15) NOT NULL auto_increment,
  `descripcion` varchar(100) NOT NULL,
  `material` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  PRIMARY KEY  (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `descripcion`, `material`, `precio`) VALUES
(1, 'Bandeja cuadrada nro 617', 'telgopor', 1.5),
(2, 'Bandeja rectangular nro 625', 'telgopor', 1.75),
(3, 'Bandeja para pizza nro 628', 'telgopor', 2.8),
(4, 'Bandeja térmicas con tapa', 'telgopor', 4.5),
(5, 'Bandeja rectangular', 'plástico', 0.75),
(6, 'Bandeja ovalada', 'plástico', 0.75),
(7, 'Bandeja cuadrada con tapa apta para microondas', 'plástico', 4),
(8, 'Bandeja ovalada con tapa apta para microondas', 'plástico', 4.5),
(9, 'Bandeja rectangular', 'cartón', 0.5),
(10, 'Bandeja redonda', 'cartón', 0.5),
(11, 'Bandeja cuadrada dorada', 'cartón', 1.25),
(12, 'Bandeja redonda dorada', 'cartón', 1.25),
(13, 'Bandeja rectangular nro 100', 'aluminio', 4.75),
(14, 'Bandeja budinera nro 8 ', 'aluminio', 4),
(15, 'Moldes para cupcakes', 'aluminio', 0.25),
(16, 'Bandeja pizzera nro 33', 'aluminio', 5),
(17, 'Tortera redonda', 'plástico', 15),
(18, 'Tortera cuadrada', 'plástico ', 15),
(19, 'Tortera rectangular', 'plástico', 12),
(20, 'Tortera para una porción', 'plástico', 10),
(21, 'Bandeja blonda rectangular', 'plástico', 7.5),
(22, 'Bandeja blonda redonda', 'plástico', 7.5),
(23, 'Bandeja blonda cuadrada metalizada', 'plástico', 10),
(24, 'Bandeja blonda rectangular metalizada ', 'plástico', 8.75),
(25, 'Bolsa camiseta común', 'plástico', 32),
(26, 'Bolsa oxi-biodegradable', 'plástico biodegradable ', 40),
(27, 'Bolsa camiseta color', 'plástico', 50),
(28, 'Bolsa oxi-biodegradable color', 'plástico biodegradable ', 55),
(29, 'Bolsas comunes', 'polipropileno', 25),
(30, 'Bolsas con adhesivo', 'polipropileno', 53.5),
(31, 'Bolsa de arranque común', 'polipropileno', 40),
(32, 'Bolsa de arranque color', 'polipropileno', 28),
(33, 'Bolsa de tela', 'tela reforzada', 21.5),
(34, 'Bolsa de tela', 'tela común', 15),
(35, 'Bolsa de tela', 'tela ecológica', 18.5),
(36, 'Bolsa de tela ', 'tela friselina', 15),
(37, 'Bolsa lisa', 'plástico', 110),
(38, 'Bolsa con motivos', 'plástico 150', 0),
(39, 'Bolsa lisa', 'cartón', 120),
(40, 'Bolsa con motivos', 'cartón', 180),
(41, 'Bolsas comunes', 'papel', 245),
(42, 'Bolsas para cumpleaños', 'papel', 145),
(43, 'Bolsas papel fantasía', 'papel fantasía', 180),
(44, 'Bolsa papel reforzado', 'papel reforzado', 10),
(45, 'Bolsa residuo común', 'plástico', 12),
(46, 'Bolsa residuo color ', 'plástico', 15),
(47, 'Bolsa residuo biodegradable', 'plástico biodegradable', 20),
(48, 'Bolsa para productos tóxicos', 'plástico especia', 35),
(49, 'Caja para masas común', 'cartón ', 15),
(50, 'Caja para masa color', 'cartón de color ', 20),
(51, 'Caja para masas o bombones ', 'cartón reforzado', 28),
(52, 'Caja bombonera', 'carton corrugado', 9.5),
(53, 'Cono para papas fritas', 'cartón', 82),
(54, 'Caja para empanadas', 'cartón reforzado', 140),
(55, 'Caja para sandwich ', 'cartón', 100),
(56, 'Caja para hamburguesa', 'cartón', 94),
(57, 'Caja para pizza', 'cartón reforzado', 120),
(58, 'Caja para pizza ', 'cartón común', 100),
(59, 'Caja para pizza', 'cartón reciclable ', 140),
(60, 'Caja para pizza redonda', 'cartón común ', 120),
(61, 'Caja para ravioles', 'cartón ', 250),
(62, 'Caja para sorrentinos', 'cartón', 125),
(63, 'Caja para canelones', 'cartón', 110),
(64, 'Caja para tallarines', 'cartón', 200),
(65, 'Caja embalaje común', 'cartón', 30),
(66, 'Caja embalaje color ', 'cartón color', 65),
(67, 'Caja archivadora común-color', 'cartón', 90),
(68, 'Caja archivadora reforzada', 'cartón reforzado', 130),
(69, 'Caja', 'cartón corrugado', 375),
(70, 'Caja-bolsa ', 'cartón reforzado', 270),
(71, 'Caja', 'cartón cartulina', 300),
(72, 'Caja-bolsa ', 'cartón cartulina', 264),
(73, 'Resma papel blanco', 'papel', 95),
(74, 'Resma papel madera', 'papel', 95),
(75, 'Resma color', 'papel', 145),
(76, 'Papel crepé', 'papel', 60),
(77, 'Bobina blanca', 'papel', 65),
(78, 'Bobina papel madera', 'papel', 80),
(79, 'Bobina industrial', 'papel', 149),
(80, 'Bobina color ', 'papel', 100),
(81, 'Papel film para hogar ', 'film plástico', 129),
(82, 'Papel film industrial', 'film plástico', 400),
(83, 'Papèl aluminio para hogar', 'papel aluminio', 110),
(84, 'Papel aluminio color', 'papel aluminio', 135),
(85, 'Folex', 'polipropileno', 150),
(86, 'Papel de regalo', 'papel', 27.5),
(87, 'Servilletas', 'papel', 165),
(88, 'Servilletas ', 'papel fantasia', 30),
(89, 'Cinta scoth escolar', '', 29),
(90, 'Cinta scotch embalar', '', 50),
(91, 'Cinta papel', 'papel madera', 64),
(92, 'Cinta para moños ', 'plástico', 48),
(93, 'Blonda blanca redonda ', 'papel', 20),
(94, 'Blonda blanca cuadrada', 'papel', 20),
(95, 'Blonda redonda color', 'papel ', 22),
(96, 'Blonda redonda metalizada', 'papel metal', 95);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL auto_increment,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `dni` int(8) NOT NULL,
  `tel` int(15) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `dir` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `userpass` varchar(11) NOT NULL,
  `repuserpass` varchar(11) NOT NULL,
  PRIMARY KEY  (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `dni`, `tel`, `loc`, `dir`, `useremail`, `userpass`, `repuserpass`) VALUES
(3, 'Dario', 'Carta', 33363672, 2147483647, 'Galvez', 'Santa Fe 391', 'dc@gmail.com', '1234', ''),
(4, 'Melisa', 'Delgado', 37331562, 2147483647, 'galvez', 'tacuari 175', 'melid248@gmail.com', '1234', ''),
(9, 'Dario', 'Ambort', 33363672, 2147483647, 'galvez', 'Santa Fe 391', 'dc@gmail.com', '123', '123'),
(10, 'Mirta', 'Legran', 1892319, 4343434, 'Bs As', 'Santa Fe 391', 'ml@gmail.com', '321', '321');


--
-- Table structure for table `cart_items`
--
CREATE TABLE IF NOT EXISTS `cart_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


--
-- Table structure for table `compras`
--
CREATE TABLE IF NOT EXISTS `compras` (
  `idcompra` int(11) NOT NULL AUTO_INCREMENT,
  `numeroventa` int(11) DEFAULT NULL,
  `codart` int(11) DEFAULT NULL,
  `precio` varchar(15) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `nombre` text,
  `apellido` varchar(35) DEFAULT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `provincia` varchar(30) DEFAULT NULL,
  `localidad` varchar(30) DEFAULT NULL,
  `codpostal` varchar(5) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `numcalle` double DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `subtotal` float NOT NULL,
  `titular` varchar(30) NOT NULL,
  `tipotarj` varchar(20) NOT NULL,
  `cuotas` int(2) NOT NULL,
  `numtarj` varchar(16) NOT NULL,
  `vtotarj` varchar(5) NOT NULL,
  `codseg` int(3) NOT NULL,
  PRIMARY KEY (`idcompra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;