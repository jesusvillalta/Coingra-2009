-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 12-03-2006 a las 03:45:30
-- Versión del servidor: 5.0.18
-- Versión de PHP: 5.1.2
-- 
-- Base de datos: `coingra`
-- 
CREATE DATABASE `coingra` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE coingra;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `clientes`
-- 

CREATE TABLE `clientes` (
  `nif` varchar(12) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido1` varchar(20) NOT NULL,
  `apellido2` varchar(20) NOT NULL,
  `telefono1` int(9) NOT NULL,
  `telefono2` int(9) default NULL,
  `direccion` varchar(50) default NULL,
  PRIMARY KEY  (`nif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `clientes`
-- 

INSERT INTO `clientes` VALUES ('11111111-a', 'Guillermo', 'Cortés', 'Moreno', 958127638, 654214565, 'C/ Avda. América');
INSERT INTO `clientes` VALUES ('44276162-n', 'jesus', 'villalta', 'cubero', 958818827, 652468058, 'C/ mirador de la sierra nº 11 3º-A');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `inmuebles`
-- 

CREATE TABLE `inmuebles` (
  `ref` smallint(5) unsigned NOT NULL auto_increment COMMENT 'NO RELLENAR',
  `ref_interna` varchar(10) NOT NULL COMMENT 'OBLIGATORIO',
  `ref_externa` varchar(10) NOT NULL COMMENT 'OBLIGATORIO referencia del inmueble en inmobiliaria ajena',
  `tipo` varchar(15) NOT NULL COMMENT 'OBLIGATORIO',
  `dormitorios` int(1) NOT NULL COMMENT 'OBLIGATORIO',
  `salon` tinyint(1) default NULL,
  `banios` int(1) NOT NULL COMMENT 'OBLIGATORIO',
  `aseos` int(1) NOT NULL COMMENT 'OBLIGATORIO',
  `m2_construidos` int(3) NOT NULL COMMENT 'OBLIGATORIO',
  `m2_utiles` int(3) default NULL,
  `precio` int(7) NOT NULL COMMENT 'OBLIGATORIO',
  `foto1` varchar(10) default NULL,
  `foto2` varchar(10) default NULL,
  `foto3` varchar(10) default NULL,
  `foto4` varchar(10) default NULL,
  `foto5` varchar(10) default NULL,
  `foto6` varchar(10) default NULL,
  `foto7` varchar(10) default NULL,
  `provincia` varchar(10) NOT NULL COMMENT 'OBLIGATORIO',
  `localidad` varchar(25) NOT NULL COMMENT 'OBLIGATORIO',
  `zona_o_barrio` varchar(25) default NULL,
  `direccion` varchar(50) default NULL,
  `referencia_de_zona` varchar(100) default NULL,
  `nif_cliente` varchar(10) NOT NULL,
  `amueblado` varchar(2) default NULL,
  `garaje` varchar(2) default NULL,
  `ascensor` varchar(2) default NULL,
  `calefaccion` varchar(2) default NULL,
  `cocina_amueblada` varchar(2) default NULL,
  `terraza` varchar(2) default NULL,
  `soleado` varchar(2) default NULL,
  `areas_deportivas` varchar(2) default NULL,
  `jardin` varchar(2) default NULL,
  `piscina` varchar(2) default NULL,
  `trastero` varchar(2) default NULL,
  `armarios_empotrados` varchar(2) default NULL,
  `video_portero` varchar(2) default NULL,
  `aire_acondicionado` varchar(2) default NULL,
  `doble_ventana` varchar(2) default NULL,
  `carpinteria_metalica` varchar(2) default NULL,
  `alarma` varchar(2) default NULL,
  `parabolica` varchar(2) default NULL,
  `chimenea` varchar(2) default NULL,
  `puerta_blindada` varchar(2) default NULL,
  `tendedero` varchar(2) default NULL,
  `linea_telefonica` varchar(2) default NULL,
  `observaciones` varchar(250) default 'No hay observaciones',
  `destacado` varchar(2) NOT NULL default 's' COMMENT '[s | n] indica los inmuebles que aparecen en la página inicial como destacados',
  PRIMARY KEY  (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `inmuebles`
-- 

INSERT INTO `inmuebles` VALUES (1, '1', '1', 'adosado', 4, NULL, 1, 1, 100, 90, 199200, '0001_1.jpg', '', '', '', '', '', '', 'GRANADA', 'GRANADA', 'LOS PAJARITOS', 'C/ mirador de la sierra nº 11 3º-A', 'Junto instituto Alhambra y colegios de la zona. Cerca de grandes superficies como Carrefour', '44276162-n', 's', 's', 's', 's', '', 's', 'n', '', '', 's', 's', 's', 's', 's', 's', '-', 'n', 'n', '-', 'n', 'n', 'n', 'Las casas aún en construcción, se podría elegir con cocina y salón independientes o con cocina americana. Solería de gres de 1ª calidad. Preinstalación de chimenea. Piscina opcional de 8x4 bomba y 2 luces, en gresite de 1ª calidad.', 's');
INSERT INTO `inmuebles` VALUES (2, '2', '2', 'Piso', 4, NULL, 2, 5, 456, NULL, 156244, '0002_1.jpg', '', '', '', '', '', '', 'GRANADA', 'GRANADA', 'ZAIDIN', NULL, 'Cerca de Carrefour y de iglesia cristiana', '', NULL, 's', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No hay observaciones', 's');
INSERT INTO `inmuebles` VALUES (3, '3', '3', 'piso', 2, NULL, 2, 1, 150, NULL, 33200102, '0003_1.jpg', '', '', '', '', '', '', 'GRANADA', 'ATARFE', 'ASAVER', NULL, 'Cerca del rio la pista de hielo y el polideportivo', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No hay observaciones', 's');
INSERT INTO `inmuebles` VALUES (4, '4', '4', 'Duplex', 4, NULL, 2, 1, 122, 101, 1154200, '', '', '', '', '', '', '', 'GRANADA', 'MARACENA', NULL, 'c/ pinillas', 'Cerca del rio la pista de hielo y los supermercdos', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sí', 'sI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No hay observaciones', 's');
INSERT INTO `inmuebles` VALUES (5, '5', '0', '', 2, NULL, 1, 0, 129, 112, 50255, '', '', '', '', '', '', '', 'GRANADA', 'GRANADA', 'HIPERCOR', NULL, 'Cerca del metreo ligero, mercadona, Carreofour, Lidl y otros supermercados más', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No hay observaciones', 's');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `localidades`
-- 

CREATE TABLE `localidades` (
  `granada` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `localidades`
-- 

INSERT INTO `localidades` VALUES ('GRANADA');
INSERT INTO `localidades` VALUES ('ATARFE');
INSERT INTO `localidades` VALUES ('ARMILLA');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `provincias`
-- 

CREATE TABLE `provincias` (
  `provincia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `provincias`
-- 

INSERT INTO `provincias` VALUES ('GRANADA');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipos`
-- 

CREATE TABLE `tipos` (
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `tipos`
-- 

INSERT INTO `tipos` VALUES ('adosado');
INSERT INTO `tipos` VALUES ('apartamento');
INSERT INTO `tipos` VALUES ('ático');
INSERT INTO `tipos` VALUES ('casa');
INSERT INTO `tipos` VALUES ('casa rústica');
INSERT INTO `tipos` VALUES ('chalet');
INSERT INTO `tipos` VALUES ('dúplex');
INSERT INTO `tipos` VALUES ('finca');
INSERT INTO `tipos` VALUES ('local comercial');
INSERT INTO `tipos` VALUES ('oficina');
INSERT INTO `tipos` VALUES ('piso');
INSERT INTO `tipos` VALUES ('local');
