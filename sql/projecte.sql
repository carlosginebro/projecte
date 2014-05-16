-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generació: 16-05-2014 a les 14:48:43
-- Versió del servidor: 5.5.24-log
-- Versió de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de dades: `projecte`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `estils`
--

CREATE TABLE IF NOT EXISTS `estils` (
  `id_estil` int(3) NOT NULL AUTO_INCREMENT,
  `estil` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `fk_usuari` int(3) NOT NULL,
  PRIMARY KEY (`id_estil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=2 ;

--
-- Bolcant dades de la taula `estils`
--

INSERT INTO `estils` (`id_estil`, `estil`, `fk_usuari`) VALUES
(1, 'normal', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `idioma`
--

CREATE TABLE IF NOT EXISTS `idioma` (
  `id_idioma` int(50) NOT NULL AUTO_INCREMENT,
  `idioma` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `fk_usuari` int(50) NOT NULL,
  PRIMARY KEY (`id_idioma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=2 ;

--
-- Bolcant dades de la taula `idioma`
--

INSERT INTO `idioma` (`id_idioma`, `idioma`, `fk_usuari`) VALUES
(1, 'ca', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id_usu` int(11) NOT NULL,
  `mail` varchar(250) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Bolcant dades de la taula `mail`
--

INSERT INTO `mail` (`id_usu`, `mail`) VALUES
(1, 'antonillombart@ginebro.cat');

-- --------------------------------------------------------

--
-- Estructura de la taula `preguntes`
--

CREATE TABLE IF NOT EXISTS `preguntes` (
  `id_pregunta` int(3) NOT NULL AUTO_INCREMENT,
  `pregunta_ca` varchar(250) COLLATE latin1_spanish_ci NOT NULL,
  `pregunta_es` varchar(250) COLLATE latin1_spanish_ci NOT NULL,
  `nivell_pregunta` int(3) NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=25 ;

--
-- Bolcant dades de la taula `preguntes`
--

INSERT INTO `preguntes` (`id_pregunta`, `pregunta_ca`, `pregunta_es`, `nivell_pregunta`) VALUES
(1, 'És cert que cinc per quatre vint , més dos , igual a vint-i-tres', 'Es cierto que cinco por cuatro veinte , más dos , igual a veintitrés', 1),
(2, 'Si una samarreta mullada s''asseca en una hora. Quant tardarà en assecar-se dues samarretes?', 'Si una camiseta mojada se seca en una hora. Cuánto tardará al secarse dos camisetas?', 1),
(3, 'Estàs participant en una carrera. Avances al segon. En quina posició acabes?', 'Estás participando en una carrera. Avanzas al segundo. En qué posición acabas?', 1),
(4, 'En un arbre hi ha set ocells, si un caçador dispara i mata a dos. Quants ocells queden en l''arbre?', 'En un árbol hay siete pájaros, si un cazador dispara y mata a dos. Cuántos pájaros quedan en el árbol?', 1),
(5, 'SACO és a ASCO com 7683 és a:', 'SACO es a ASCO como 7683 es a:', 2),
(6, 'DIDIIDID és a 49499494 com DIIDIIDD és a:', 'DIDIIDID es a 49499494 como DIIDIIDD es a:', 2),
(7, 'Bol és a cereals com sobre és a:', 'Bol es a cereales como sobre es a:', 2),
(8, 'Planta és a llavor com humà és a:', 'Planta es a semilla como humano es a:', 2),
(9, 'Es triguen 5 segons a partir un tronc en dos trossos. Quant es trigarà a partir un tronc en 10 trossos?', 'Se tardan 5 segundos a partir un tronco en dos trozos. Cuánto se tardará a partir un tronco en 10 trozos?', 3),
(10, 'Dues mares i dues filles queden per menjar en un restaurant. En arribar demanen al cambrer taula per a tres. Per què?', 'Dos madres y dos hijas quedan para comer en un restaurante. Al llegar piden al camarero mesa para tres. Por qué?', 3),
(11, 'Quants metres de terra hi ha en un forat d''1 metre per 1 metre per 2 metres?', 'Cuántos metros de tierra hay en un agujero de 1 metro por 1 metro por 2 metros?', 3),
(12, 'Quantes vegades es posa el Sol per l''oest?', 'Cuántas veces se pone el Sol por el oeste?', 3),
(13, '../css/nivell8/p1/pregunta1.jpg', '../css/nivell8/p1/pregunta1.jpg', 4),
(14, '../css/nivell8/p2/pregunta2.jpg', '../css/nivell8/p2/pregunta2.jpg', 4),
(15, '../css/nivell8/p3/pregunta3.jpg', '../css/nivell8/p3/pregunta3.jpg', 4),
(16, '../css/nivell8/p4/pregunta4.jpg', '../css/nivell8/p4/pregunta4.jpg', 4),
(17, '../css/nivell11/p5/pregunta5.png', '../css/nivell11/p5/pregunta5.png', 5),
(18, '../css/nivell11/p6/pregunta6.jpg', '../css/nivell11/p6/pregunta6.jpg', 5),
(19, '../css/nivell11/p7/pregunta7.jpg', '../css/nivell11/p7/pregunta7.jpg', 5),
(20, '../css/nivell11/p8/pregunta8.jpg', '../css/nivell11/p8/pregunta8.jpg', 5),
(21, 'Quina és la velocitat de la llum?', 'Cual es la velocidad de la luz?', 6),
(22, 'De que està fet l''univers?', 'De que está hecho el universo?', 6),
(23, 'Numero de planetes del sistema solar?', 'Numero de planetas del sistema solar?', 6),
(24, 'Satèl·lit més gran del Saturn?', 'Satélite más grande del Saturno?', 6);

-- --------------------------------------------------------

--
-- Estructura de la taula `respostes`
--

CREATE TABLE IF NOT EXISTS `respostes` (
  `id_resposta` int(3) NOT NULL AUTO_INCREMENT,
  `resposta_ca` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `resposta_es` varchar(250) COLLATE latin1_spanish_ci NOT NULL,
  `fk_pregunta` int(3) NOT NULL,
  `correcte` varchar(2) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_resposta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=104 ;

--
-- Bolcant dades de la taula `respostes`
--

INSERT INTO `respostes` (`id_resposta`, `resposta_ca`, `resposta_es`, `fk_pregunta`, `correcte`) VALUES
(1, 'Si', 'Si', 1, 'si'),
(2, 'No', 'No', 1, 'no'),
(5, 'No és cert', 'No es cierto', 1, 'no'),
(6, 'Està mal formulat', 'Está mal formulado', 1, 'no'),
(7, 'Depèn del vent que faci', 'Depende del viento que haga', 2, 'no'),
(8, 'Seixanta minuts', 'Sesenta minutos', 2, 'si'),
(9, 'El doble', 'El doble', 2, 'no'),
(10, 'La meitat de quatre', 'La mitad de cuatro', 2, 'no'),
(11, 'El primer', 'El primero', 3, 'no'),
(12, 'Davant del segon', 'Delante el segundo', 3, 'no'),
(13, 'Davant del tercer', 'Delante el tercero', 3, 'si'),
(14, 'Tercer', 'Tercero', 3, 'no'),
(15, 'La resta', 'El resto', 4, 'no'),
(16, 'Cap', 'Ninguno', 4, 'si'),
(17, 'Sis', 'Seis', 4, 'no'),
(18, 'No pot matar a dues a la vegada', 'No puede matar a dos a la vegada', 4, 'no'),
(19, '6783', '6783', 5, 'si'),
(20, '8376', '8376', 5, 'no'),
(21, '6837', '6837', 5, 'no'),
(22, '3867', '3867', 5, 'no'),
(23, '49949944', '49949944', 6, 'si'),
(24, '94494499', '94494499', 6, 'no'),
(25, '94944949', '94944949', 6, 'no'),
(26, '49944949', '49944949', 6, 'no'),
(27, 'Carta', 'Carta', 7, 'si'),
(28, 'Carter', 'Cartero', 7, 'no'),
(29, 'Segell', 'Sello', 7, 'no'),
(30, 'Bústia', 'Buzón', 7, 'no'),
(31, 'Espermatozoide', 'Espermatozoide', 8, 'no'),
(32, 'Embrió', 'Embrión', 8, 'si'),
(33, 'Ovari', 'Ovario', 8, 'no'),
(34, 'Òvul', 'Óvulo', 8, 'no'),
(35, '45 segons', '45 segundos', 9, 'si'),
(36, '50 segons', '50 segundos', 9, 'no'),
(37, '55 segons', '55 segundos', 9, 'no'),
(38, 'Depèn de la persona', 'Depende de la persona', 9, 'no'),
(39, 'Són una àvia, una mare i una filla', 'Son una abuela, una madre y una hija', 10, 'si'),
(40, 'La filla està embarassada', 'La hija está embarazada', 10, 'no'),
(41, 'Una va en cadira de rodes', 'Una va en silla de ruedas', 10, 'no'),
(42, 'Les filles són siameses', 'Las hijas son siameses', 10, 'no'),
(43, '0 metres cúbics', '0 metros cúbicos', 11, 'si'),
(44, '2 metres cúbics', '2 metros cúbicos', 11, 'no'),
(45, '4 metres cúbics', '4 metros cúbicos', 11, 'no'),
(46, '3 metres cúbics', '3 metros cúbicos', 11, 'no'),
(47, '1 cop en tot l''any', '1 golpe en todo el año', 12, 'si'),
(48, 'Cap vegada', 'Ninguna vez', 12, 'no'),
(49, '365 dies', '365 días', 12, 'no'),
(50, '182 dies', '182 días', 12, 'no'),
(51, '../css/nivell8/p1/a.jpg', '../css/nivell8/p1/a.jpg', 13, 'no'),
(52, '../css/nivell8/p1/dcorrecte.jpg', '../css/nivell8/p1/dcorrecte.jpg', 13, 'si'),
(53, '../css/nivell8/p1/e.jpg', '../css/nivell8/p1/e.jpg', 13, 'no'),
(54, '../css/nivell8/p1/f.jpg', '../css/nivell8/p1/f.jpg', 13, 'no'),
(55, '../css/nivell8/p2/bcorrecte.jpg', '../css/nivell8/p2/bcorrecte.jpg', 14, 'si'),
(56, '../css/nivell8/p2/c.jpg', '../css/nivell8/p2/c.jpg', 14, 'no'),
(57, '../css/nivell8/p2/d.jpg', '../css/nivell8/p2/d.jpg', 14, 'no'),
(58, '../css/nivell8/p2/f.jpg', '../css/nivell8/p2/f.jpg', 14, 'no'),
(59, '../css/nivell8/p3/a.png', '../css/nivell8/p3/a.png', 15, 'no'),
(60, '../css/nivell8/p3/b.png', '../css/nivell8/p3/b.png', 15, 'no'),
(61, '../css/nivell8/p3/c.png', '../css/nivell8/p3/c.png', 15, 'no'),
(62, '../css/nivell8/p3/fcorrecte.png', '../css/nivell8/p3/fcorrecte.png', 15, 'si'),
(63, '../css/nivell8/p4/a.jpg', '../css/nivell8/p4/a.jpg', 16, 'no'),
(64, '../css/nivell8/p4/bcorrecte.jpg', '../css/nivell8/p4/bcorrecte.jpg', 16, 'si'),
(65, '../css/nivell8/p4/e.jpg', '../css/nivell8/p4/e.jpg', 16, 'no'),
(66, '../css/nivell8/p4/f.jpg', '../css/nivell8/p4/f.jpg', 16, 'no'),
(67, '../css/nivell11/p5/a.jpg', '../css/nivell11/p5/a.jpg', 17, 'no'),
(68, '../css/nivell11/p5/bcorrecte.jpg', '../css/nivell11/p5/bcorrecte.jpg', 17, 'si'),
(69, '../css/nivell11/p5/c.jpg', '../css/nivell11/p5/c.jpg', 17, 'no'),
(70, '../css/nivell11/p5/f.jpg', '../css/nivell11/p5/f.jpg', 17, 'no'),
(71, '../css/nivell11/p6/acorrecte.jpg', '../css/nivell11/p6/acorrecte.jpg', 18, 'si'),
(72, '../css/nivell11/p6/b.jpg', '../css/nivell11/p6/b.jpg', 18, 'no'),
(73, '../css/nivell11/p6/c.jpg', '../css/nivell11/p6/c.jpg', 18, 'no'),
(74, '../css/nivell11/p6/d.jpg', '../css/nivell11/p6/d.jpg', 18, 'no'),
(75, '../css/nivell11/p7/a.jpg', '../css/nivell11/p7/a.jpg', 19, 'no'),
(76, '../css/nivell11/p7/ccorrecte.jpg', '../css/nivell11/p7/ccorrecte.jpg', 19, 'si'),
(77, '../css/nivell11/p7/d.jpg', '../css/nivell11/p7/d.jpg', 19, 'no'),
(78, '../css/nivell11/p7/e.jpg', '../css/nivell11/p7/e.jpg', 19, 'no'),
(79, '../css/nivell11/p8/a.jpg', '../css/nivell11/p8/a.jpg', 20, 'no'),
(80, '../css/nivell11/p8/ccorrecte.jpg', '../css/nivell11/p8/ccorrecte.jpg', 20, 'si'),
(81, '../css/nivell11/p8/d.jpg', '../css/nivell11/p8/d.jpg', 20, 'no'),
(82, '../css/nivell11/p8/f.jpg', '../css/nivell11/p8/f.jpg', 20, 'no'),
(88, '200.000 KMS', '200.000 KMS', 21, 'no'),
(89, '300.000KMS', '300.000KMS', 21, 'si'),
(90, '350.000 KMS', '350.000 KMS', 21, 'no'),
(91, '500.000 KMS', '500.000 KMS', 21, 'no'),
(92, 'Protons i neutrons', 'Protones y neutrones', 22, 'no'),
(93, 'Electrons, protons, oxigen', 'Electrones, protones, oxígeno', 22, 'no'),
(94, 'Neutrons, protons, hidrogen', 'Neutrones, protones, hidrógeno', 22, 'no'),
(95, 'Protons, neutrons, electrons', 'Protones, neutrones, electrones', 22, 'si'),
(96, '8', '8', 23, 'si'),
(97, '10', '10', 23, 'no'),
(98, '7', '7', 23, 'no'),
(99, '9', '9', 23, 'no'),
(100, 'Rea', 'Rea', 24, 'no'),
(101, 'Hipereon', 'Hipereon', 24, 'no'),
(102, 'Titan', 'Titan', 24, 'si'),
(103, 'Febes', 'Febes', 24, 'no');

-- --------------------------------------------------------

--
-- Estructura de la taula `usuari`
--

CREATE TABLE IF NOT EXISTS `usuari` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Usuari` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `Password` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `RecoveryName` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Vides` int(3) NOT NULL,
  `Comodins` int(1) NOT NULL,
  `PuntuacioMax` int(2) NOT NULL,
  `Recordar` int(1) NOT NULL,
  `Activat` int(1) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=2 ;

--
-- Bolcant dades de la taula `usuari`
--

INSERT INTO `usuari` (`Id`, `Usuari`, `Password`, `RecoveryName`, `Vides`, `Comodins`, `PuntuacioMax`, `Recordar`, `Activat`, `Admin`) VALUES
(1, 'test', 'test', 'sdib45as', 4, 0, 200, 1, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
