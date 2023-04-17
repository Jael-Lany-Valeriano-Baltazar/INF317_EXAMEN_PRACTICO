-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-04-2023 a las 19:47:24
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `MIBASEJAEL`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `INSCRIPCION`
--

CREATE TABLE `INSCRIPCION` (
  `CI_EST` int(11) NOT NULL,
  `SIGLA` char(3) DEFAULT NULL,
  `NOTA1` float DEFAULT NULL,
  `NOTA2` float DEFAULT NULL,
  `NOTA3` float DEFAULT NULL,
  `NOTAFINAL` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `INSCRIPCION`
--

INSERT INTO `INSCRIPCION` (`CI_EST`, `SIGLA`, `NOTA1`, `NOTA2`, `NOTA3`, `NOTAFINAL`) VALUES
(654321, 'FIS', 30, 30, 25, 85),
(765432, 'FIS', 17, 23, 21, 61),
(876543, 'QUI', 27, 28, 13, 68),
(987654, 'MAT', 25, 30, 20, 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PERSONA`
--

CREATE TABLE `PERSONA` (
  `CI` int(11) NOT NULL,
  `NOMBRE_COMPLETO` char(200) DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `TELEFONO` varchar(13) DEFAULT NULL,
  `DEPARTAMENTO` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `PERSONA`
--

INSERT INTO `PERSONA` (`CI`, `NOMBRE_COMPLETO`, `FECHA_NAC`, `TELEFONO`, `DEPARTAMENTO`) VALUES
(123456, 'NOM_E NOM_EE APM_E APP_EE', '1992-06-12', '(591)65341267', 'SC'),
(234567, 'NOM_F NOM_FF APM_F APP_FF', '1991-11-30', '(591)65311100', 'LP'),
(345678, 'NOM_G NOM_GG APM_G APP_GG', '1990-12-20', '(591)73528899', 'OR'),
(654321, 'NOM_D NOM_DD APM_D APP_DD', '2001-04-03', '(591)65222243', 'BE'),
(765432, 'NOM_C NOM_CC APM_C APP_CC', '2002-02-15', '(591)61183677', 'PA'),
(876543, 'NOM_B NOM_BB APM_B APP_BB', '1999-06-25', '(591)60001102', 'LP'),
(987654, 'NOM_A NOM_AA APM_A APP_AA', '2000-05-05', '(591)75237612', 'OR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO`
--

CREATE TABLE `USUARIO` (
  `CI` int(11) NOT NULL,
  `USUARIO` char(50) DEFAULT NULL,
  `PASSWRD` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `USUARIO`
--

INSERT INTO `USUARIO` (`CI`, `USUARIO`, `PASSWRD`) VALUES
(123456, 'USER@UNO', 'USER123'),
(234567, 'USER@DOS', 'USER234'),
(345678, 'USER@TRES', 'USER345'),
(654321, 'EST@654', 'EST654'),
(765432, 'EST@765', 'EST765'),
(876543, 'EST@876', 'EST876'),
(987654, 'EST@987', 'EST987');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `INSCRIPCION`
--
ALTER TABLE `INSCRIPCION`
  ADD PRIMARY KEY (`CI_EST`);

--
-- Indices de la tabla `PERSONA`
--
ALTER TABLE `PERSONA`
  ADD PRIMARY KEY (`CI`);

--
-- Indices de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`CI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
