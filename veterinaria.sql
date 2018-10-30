-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2017 at 02:51 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veterinaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `ap_paterno` varchar(45) DEFAULT NULL,
  `ap_materno` varchar(45) DEFAULT NULL,
  `dir_calle` varchar(45) DEFAULT NULL,
  `dir_numero` int(11) DEFAULT NULL,
  `dir_ciudad` varchar(45) DEFAULT NULL,
  `telefono_cliente` varchar(45) DEFAULT NULL,
  `id_veterinario` int(11) NOT NULL,
  `id_familia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `ap_paterno`, `ap_materno`, `dir_calle`, `dir_numero`, `dir_ciudad`, `telefono_cliente`, `id_veterinario`, `id_familia`) VALUES
(1, 'Carlos', 'Gonzalez', 'Sosa', '123 street', 123, '123 city', '123123123', 1, 1),
(2, 'Alex', 'Gomez', 'Gonzalez', 'Calle agua', 123, 'Fresnillo', '1232321', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `familia`
--

CREATE TABLE `familia` (
  `id_familia` int(11) NOT NULL,
  `apellido_familia` varchar(45) DEFAULT NULL,
  `cuenta_bancaria` varchar(45) DEFAULT NULL,
  `dir_calle` varchar(45) DEFAULT NULL,
  `dir_numero` int(11) DEFAULT NULL,
  `dir_ciudad` varchar(45) DEFAULT NULL,
  `telefono_familia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `familia`
--

INSERT INTO `familia` (`id_familia`, `apellido_familia`, `cuenta_bancaria`, `dir_calle`, `dir_numero`, `dir_ciudad`, `telefono_familia`) VALUES
(1, 'Pinales', '321', '123 street', 123, '123 city', '123123123'),
(3, 'Sanchez', 'asdasd', 'asdasd', 123, 'Fresnillo', '123123123'),
(4, 'Castro', '123123', '123123', 123123, '123123', '123123'),
(5, 'Rodarte', '123123', '123123', 123123, '123123', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `historial_medico`
--

CREATE TABLE `historial_medico` (
  `id_historial_medico` int(11) NOT NULL,
  `fecha_diagnostico` date DEFAULT NULL,
  `enfermedad` varchar(45) DEFAULT NULL,
  `diagnostico` varchar(45) DEFAULT NULL,
  `id_mascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mascota`
--

CREATE TABLE `mascota` (
  `id_mascota` int(11) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `raza` varchar(45) DEFAULT NULL,
  `especie` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `peso_actual` double DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `id_veterinario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mascota`
--

INSERT INTO `mascota` (`id_mascota`, `fecha_nacimiento`, `alias`, `raza`, `especie`, `color`, `peso_actual`, `precio`, `id_veterinario`, `id_cliente`) VALUES
(1, '2017-11-30', 'Ali', 'Pastor Aleman', 'Grande', 'Negro', 30, 150, 1, 1),
(2, '2017-12-28', 'Pelusa', 'Boxer', 'Chico', 'Blanca', 20, 200, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mascotas_ventas`
--

CREATE TABLE `mascotas_ventas` (
  `id_mascota` int(11) NOT NULL,
  `id_ventas` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `peso`
--

CREATE TABLE `peso` (
  `id_peso` int(11) NOT NULL,
  `fecha_peso` date DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `id_mascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peso`
--

INSERT INTO `peso` (`id_peso`, `fecha_peso`, `peso`, `id_mascota`) VALUES
(1, '2017-12-13', 50, 1),
(2, '2017-12-13', 50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vacunas`
--

CREATE TABLE `vacunas` (
  `id_vacunas` int(11) NOT NULL,
  `fecha_vacuna` date DEFAULT NULL,
  `enfermedad` varchar(45) DEFAULT NULL,
  `id_mascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vacunas`
--

INSERT INTO `vacunas` (`id_vacunas`, `fecha_vacuna`, `enfermedad`, `id_mascota`) VALUES
(1, '2017-12-29', 'Sifilis', 1),
(2, '2017-11-29', 'gonorrea', 1),
(3, '2017-12-27', 'tos', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `fecha_venta` date DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id_ventas`, `fecha_venta`, `total`) VALUES
(1, '2017-12-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `veterinario`
--

CREATE TABLE `veterinario` (
  `id_veterinario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `ap_paterno` varchar(45) DEFAULT NULL,
  `ap_materno` varchar(45) DEFAULT NULL,
  `dir_calle` varchar(45) DEFAULT NULL,
  `dir_numero` int(11) DEFAULT NULL,
  `dir_ciudad` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `veterinario`
--

INSERT INTO `veterinario` (`id_veterinario`, `nombre`, `ap_paterno`, `ap_materno`, `dir_calle`, `dir_numero`, `dir_ciudad`, `telefono`) VALUES
(1, 'Jesus', 'Sanchez', 'Jaime', 'Accion Ejidal', 109, 'Fresnillo', '4931486415');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `fk_cliente_veterinario1_idx` (`id_veterinario`),
  ADD KEY `fk_cliente_familia1_idx` (`id_familia`);

--
-- Indexes for table `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id_familia`);

--
-- Indexes for table `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD PRIMARY KEY (`id_historial_medico`),
  ADD KEY `fk_historial_medico_mascota1_idx` (`id_mascota`);

--
-- Indexes for table `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id_mascota`),
  ADD KEY `fk_mascota_veterinario1_idx` (`id_veterinario`),
  ADD KEY `fk_mascota_cliente1_idx` (`id_cliente`);

--
-- Indexes for table `mascotas_ventas`
--
ALTER TABLE `mascotas_ventas`
  ADD PRIMARY KEY (`id_mascota`,`id_ventas`),
  ADD KEY `fk_mascota_has_ventas_ventas1_idx` (`id_ventas`),
  ADD KEY `fk_mascota_has_ventas_mascota_idx` (`id_mascota`);

--
-- Indexes for table `peso`
--
ALTER TABLE `peso`
  ADD PRIMARY KEY (`id_peso`),
  ADD KEY `fk_peso_mascota1_idx` (`id_mascota`);

--
-- Indexes for table `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`id_vacunas`),
  ADD KEY `fk_vacunas_mascota1_idx` (`id_mascota`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`);

--
-- Indexes for table `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`id_veterinario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `familia`
--
ALTER TABLE `familia`
  MODIFY `id_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `historial_medico`
--
ALTER TABLE `historial_medico`
  MODIFY `id_historial_medico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peso`
--
ALTER TABLE `peso`
  MODIFY `id_peso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `id_vacunas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `id_veterinario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_familia1` FOREIGN KEY (`id_familia`) REFERENCES `familia` (`id_familia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_veterinario1` FOREIGN KEY (`id_veterinario`) REFERENCES `veterinario` (`id_veterinario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD CONSTRAINT `fk_historial_medico_mascota1` FOREIGN KEY (`id_mascota`) REFERENCES `mascota` (`id_mascota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `fk_mascota_cliente1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mascota_veterinario1` FOREIGN KEY (`id_veterinario`) REFERENCES `veterinario` (`id_veterinario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mascotas_ventas`
--
ALTER TABLE `mascotas_ventas`
  ADD CONSTRAINT `fk_mascota_has_ventas_mascota` FOREIGN KEY (`id_mascota`) REFERENCES `mascota` (`id_mascota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mascota_has_ventas_ventas1` FOREIGN KEY (`id_ventas`) REFERENCES `ventas` (`id_ventas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peso`
--
ALTER TABLE `peso`
  ADD CONSTRAINT `fk_peso_mascota1` FOREIGN KEY (`id_mascota`) REFERENCES `mascota` (`id_mascota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vacunas`
--
ALTER TABLE `vacunas`
  ADD CONSTRAINT `fk_vacunas_mascota1` FOREIGN KEY (`id_mascota`) REFERENCES `mascota` (`id_mascota`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
