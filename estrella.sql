-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2018 at 03:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estrella`
--

-- --------------------------------------------------------

--
-- Table structure for table `BebidasYOtros`
--

CREATE TABLE `BebidasYOtros` (
  `IdBebidasYOtros` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `IdIngresoBebidasYOtros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `BebidasYOtros`
--

INSERT INTO `BebidasYOtros` (`IdBebidasYOtros`, `descripcion`, `precio`, `cantidad`, `fecha`, `IdIngresoBebidasYOtros`) VALUES
(1, 'Pilsen', 3000, 5, '2018-05-25 00:00:00', 1),
(2, 'Corona', 10000, 16, '2018-05-10 00:00:00', 1),
(3, 'Heineken', 10000, 24, '2018-05-10 00:00:00', 1),
(4, 'Budweiser', 6000, 24, '2018-05-10 00:00:00', 1),
(5, 'Baviera', 10000, 24, '2018-05-10 00:00:00', 1),
(6, 'Gaseosa', 6000, 15, '2018-05-10 00:00:00', 1),
(7, 'Pulp', 3000, 12, '2018-05-10 00:00:00', 1),
(8, 'Agua', 3000, 8, '2018-05-10 00:00:00', 1),
(9, 'Ourito', 3500, 24, '2018-05-11 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Billar`
--

CREATE TABLE `Billar` (
  `IdBillar` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Billar`
--

INSERT INTO `Billar` (`IdBillar`, `descripcion`, `precio`) VALUES
(1, 'Ficha', 2000),
(2, 'Combo', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `Comida`
--

CREATE TABLE `Comida` (
  `IdComida` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `IdIngresoComida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Comida`
--

INSERT INTO `Comida` (`IdComida`, `descripcion`, `cantidad`, `precio`, `fecha`, `IdIngresoComida`) VALUES
(1, 'Mixto', 1, 2000, '2018-05-25 00:00:00', 1),
(2, 'Pancho', 2, 4000, '2018-05-10 00:00:00', 1),
(3, 'pan', 2, 12121, '2018-05-24 00:00:00', 1),
(4, 'pan', 2, 12121, '2018-05-24 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `CostoProductos`
--

CREATE TABLE `CostoProductos` (
  `IdCostoProductos` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CostoProductos`
--

INSERT INTO `CostoProductos` (`IdCostoProductos`, `monto`, `fecha`) VALUES
(1, 1212, '0000-00-00 00:00:00'),
(2, 1000000, '2018-02-13 00:00:00'),
(3, 121212, '2018-05-17 00:00:00'),
(4, 200000, '2018-05-11 00:00:00'),
(5, 1000000, '2018-05-24 00:00:00'),
(6, 100000000, '2018-05-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `IngresoBebidasYOtros`
--

CREATE TABLE `IngresoBebidasYOtros` (
  `IdIngresoBebidasYOtros` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `precio_total` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IngresoBebidasYOtros`
--

INSERT INTO `IngresoBebidasYOtros` (`IdIngresoBebidasYOtros`, `descripcion`, `cantidad`, `precio`, `precio_total`, `fecha`) VALUES
(1, 'a', 1, 100, 100, '2018-10-05 00:00:00'),
(2, 'Pilsen', 5, 4000, 20000, '2018-05-09 00:00:00'),
(3, 'Mixto', 2, 6000, 12000, '2018-05-11 00:00:00'),
(4, 'Corona', 5, 10000, 50000, '2018-05-11 00:00:00'),
(5, 'Pilsen', 2, 4000, 8000, '2018-05-18 00:00:00'),
(6, 'Agua', 2, 3000, 6000, '2018-05-18 00:00:00'),
(7, 'Pilsen', 1, 4000, 4000, '2018-05-25 00:00:00'),
(8, 'Pilsen', 1, 4000, 4000, '2018-05-25 00:00:00'),
(9, 'Pilsen', 1, 4000, 4000, '2018-05-25 00:00:00'),
(10, 'Pilsen', 1, 4000, 4000, '2018-05-25 00:00:00'),
(11, 'Pilsen', 1, 4000, 4000, '2018-05-25 00:00:00'),
(12, 'Pilsen', 1, 4000, 4000, '2018-05-25 00:00:00'),
(13, 'Pilsen', 1, 4000, 4000, '2018-05-25 00:00:00'),
(14, 'Pilsen', 1, 4000, 4000, '2018-05-25 00:00:00'),
(15, 'Pilsen', 1, 4000, 4000, '2018-05-25 00:00:00'),
(16, 'Pilsen', 2, 4000, 8000, '2018-05-25 00:00:00'),
(17, 'Pilsen', 2, 4000, 8000, '2018-05-25 00:00:00'),
(18, 'Pilsen', 2, 4000, 8000, '2018-05-25 00:00:00'),
(19, 'Pilsen', 2, 4000, 8000, '2018-05-25 00:00:00'),
(20, 'Pilsen', 1, 4000, 4000, '2018-05-26 00:00:00'),
(21, 'Pilsen', 1, 4000, 4000, '2018-05-26 00:00:00'),
(22, 'Pilsen', 1, 4000, 4000, '2018-05-27 00:00:00'),
(23, 'Pilsen', 1, 4000, 4000, '2018-05-27 00:00:00'),
(24, 'Pilsen', 1, 4000, 4000, '2018-05-27 00:00:00'),
(25, 'Pilsen', 1, 4000, 4000, '2018-05-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `IngresoBillar`
--

CREATE TABLE `IngresoBillar` (
  `IdIngresoBillar` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `totalBillar` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IngresoBillar`
--

INSERT INTO `IngresoBillar` (`IdIngresoBillar`, `descripcion`, `precio`, `totalBillar`, `fecha`) VALUES
(1, 'Combo', 5000, 5000, '2018-05-10 00:00:00'),
(2, 'Combo', 5000, 5000, '2018-05-10 00:00:00'),
(3, 'Combo', 5000, 5000, '2018-05-10 00:00:00'),
(4, 'Combo', 5000, 5000, '2018-05-10 00:00:00'),
(5, 'Ficha', 2000, 2000, '2018-05-11 00:00:00'),
(6, 'Ficha', 2000, 2000, '2018-05-25 00:00:00'),
(7, 'Combo', 5000, 5000, '2018-05-27 00:00:00'),
(8, 'Ficha', 2000, 2000, '2018-05-27 00:00:00'),
(9, 'Ficha', 2000, 2000, '2018-05-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `IngresoComida`
--

CREATE TABLE `IngresoComida` (
  `IdIngresoComida` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_total_comida` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IngresoComida`
--

INSERT INTO `IngresoComida` (`IdIngresoComida`, `descripcion`, `precio`, `cantidad`, `precio_total_comida`, `fecha`) VALUES
(1, 'a', 100, 1, 100, '2018-05-10 00:00:00'),
(2, 'Mixto', 6000, 2, 12000, '2018-05-11 00:00:00'),
(3, 'Mixto', 6000, 5, 30000, '2018-05-11 00:00:00'),
(4, 'Pancho', 4000, 4, 16000, '2018-05-01 00:00:00'),
(5, 'Mixto', 4000, 4, 16000, '2018-05-01 00:00:00'),
(6, 'Mixto', 6000, 2, 12000, '2018-05-15 00:00:00'),
(7, 'Mixto', 6000, 2, 12000, '2018-05-15 00:00:00'),
(8, 'Mixto', 6000, 2, 12000, '2018-05-15 00:00:00'),
(9, 'Mixto', 6000, 3, 18000, '2018-05-18 00:00:00'),
(10, 'Mixto', 6000, 3, 18000, '2018-05-18 00:00:00'),
(11, 'Mixto', 6000, 3, 18000, '2018-05-18 00:00:00'),
(12, 'Mixto', 6000, 3, 18000, '2018-05-18 00:00:00'),
(13, 'Mixto', 6000, 3, 18000, '2018-05-18 00:00:00'),
(14, 'Mixto', 6000, 3, 18000, '2018-05-18 00:00:00'),
(15, 'Mixto', 6000, 3, 18000, '2018-05-18 00:00:00'),
(16, 'Pancho', 4000, 1, 4000, '2018-05-18 00:00:00'),
(17, 'Pancho', 4000, 1, 4000, '2018-05-02 00:00:00'),
(18, 'Mixto', 6000, 1, 6000, '2018-05-25 00:00:00'),
(19, 'Mixto', 6000, 1, 6000, '2018-05-25 00:00:00'),
(20, 'Mixto', 6000, 1, 6000, '2018-05-25 00:00:00'),
(21, 'Mixto', 6000, 1, 6000, '2018-05-25 00:00:00'),
(22, 'Pancho', 4000, 1, 4000, '2018-05-27 00:00:00'),
(23, 'Mixto', 6000, 1, 6000, '2018-05-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pozo`
--

CREATE TABLE `Pozo` (
  `IdPozo` int(11) NOT NULL,
  `monto` int(11) DEFAULT NULL,
  `propina` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `total_pozo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pozo`
--

INSERT INTO `Pozo` (`IdPozo`, `monto`, `propina`, `fecha`, `total_pozo`) VALUES
(2, 1000, 500, '2018-05-09 00:00:00', 1500),
(3, 1000, 200, '2018-05-09 00:00:00', 1200),
(4, 1000000, 200000, '2018-05-11 00:00:00', 1200000),
(5, 1000000, 200000, '2018-05-25 00:00:00', 1200000),
(6, 1000000, 200000, '2018-05-25 00:00:00', 1200000),
(7, 100000, 10000, '2018-05-27 00:00:00', 110000),
(8, 2323, 3232, '2018-05-10 00:00:00', 5555);

-- --------------------------------------------------------

--
-- Table structure for table `TotalIngreso`
--

CREATE TABLE `TotalIngreso` (
  `IdTotalIngreso` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `IdIngresoBebidasYOtros` int(11) DEFAULT NULL,
  `IdIngresoComida` int(11) DEFAULT NULL,
  `IdIngresoBillar` int(11) DEFAULT NULL,
  `IdPozo` int(11) DEFAULT NULL,
  `total_dia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TotalIngreso`
--

INSERT INTO `TotalIngreso` (`IdTotalIngreso`, `fecha`, `IdIngresoBebidasYOtros`, `IdIngresoComida`, `IdIngresoBillar`, `IdPozo`, `total_dia`) VALUES
(1, '2018-05-24 00:00:00', 3, 3, 3, 3, 10000),
(2, '2018-11-05 00:00:00', 2, 2, 2, 2, 10000),
(3, '2018-05-25 00:00:00', 3, NULL, NULL, NULL, NULL),
(4, '2018-05-25 00:00:00', 19, NULL, NULL, NULL, NULL),
(5, '2018-05-25 00:00:00', NULL, NULL, NULL, NULL, NULL),
(6, '2018-05-25 00:00:00', NULL, NULL, NULL, NULL, NULL),
(7, '2018-05-25 00:00:00', NULL, NULL, NULL, NULL, NULL),
(8, '2018-05-25 00:00:00', NULL, 21, NULL, NULL, NULL),
(9, '2018-05-25 00:00:00', NULL, NULL, NULL, 6, NULL),
(10, '2018-05-25 00:00:00', NULL, NULL, 6, NULL, NULL),
(11, '2018-05-26 00:00:00', 20, NULL, NULL, NULL, NULL),
(12, '2018-05-26 00:00:00', 21, NULL, NULL, NULL, NULL),
(13, '2018-05-27 00:00:00', 22, NULL, NULL, NULL, NULL),
(14, '2018-05-27 00:00:00', 23, NULL, NULL, NULL, NULL),
(15, '2018-05-27 00:00:00', 24, NULL, NULL, NULL, NULL),
(16, '2018-05-27 00:00:00', 25, NULL, NULL, NULL, NULL),
(17, '2018-05-27 00:00:00', NULL, 22, NULL, NULL, NULL),
(18, '2018-05-27 00:00:00', NULL, 23, NULL, NULL, NULL),
(19, '2018-05-27 00:00:00', NULL, NULL, 7, NULL, NULL),
(20, '2018-05-27 00:00:00', NULL, NULL, 8, NULL, NULL),
(21, '2018-05-27 00:00:00', NULL, NULL, NULL, 7, NULL),
(22, '2018-05-10 00:00:00', NULL, NULL, NULL, 8, NULL),
(23, '2018-05-25 00:00:00', NULL, NULL, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rolando', 'rolopoker@gmail.com', '$2y$10$pvbHvZ0xbDwgUZQ5UttjmuVWngvzdGSLjEkSHKD6koDxF.AlEOEW.', '0IXnNxXwLMbpeK3PMYJS3rWOHbvwR3bpCTxxMG7JB8khdVfaMfxhBZXoeR1k', '2018-05-09 22:01:39', '2018-05-09 22:01:39'),
(2, 'angeles', 'angeles@gmail.com', '$2y$10$xabfdNckC23epvzKsnSjlORdbC2qsGe6fbRTLrEW7aAcGn4smI.D.', '5VT9Hf8zOos2B7OPhE7VPEysCWHGdw1e4ja8gyp16jPQPCSgSTJNjWQn9Gkc', '2018-05-09 22:02:39', '2018-05-09 22:02:39'),
(3, 'matias', 'matias@gmail.com', '$2y$10$OHTTuoSWJbgFEpc5aaBb1eFmDKxQ3XUX8czXNpZiGPdw2xwui4SpO', 'CSHwinlDMkys4bs5zE9Kkmlr2TDmWH2XxpFagawiwzZoTXgm79djuwFTNQAi', '2018-05-09 22:03:00', '2018-05-09 22:03:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BebidasYOtros`
--
ALTER TABLE `BebidasYOtros`
  ADD PRIMARY KEY (`IdBebidasYOtros`),
  ADD UNIQUE KEY `IdBebidasYOtros` (`IdBebidasYOtros`),
  ADD KEY `IdIngresoBebidasYOtros` (`IdIngresoBebidasYOtros`);

--
-- Indexes for table `Billar`
--
ALTER TABLE `Billar`
  ADD PRIMARY KEY (`IdBillar`);

--
-- Indexes for table `Comida`
--
ALTER TABLE `Comida`
  ADD PRIMARY KEY (`IdComida`),
  ADD UNIQUE KEY `IdComida` (`IdComida`),
  ADD KEY `IdIngresoComida` (`IdIngresoComida`);

--
-- Indexes for table `CostoProductos`
--
ALTER TABLE `CostoProductos`
  ADD PRIMARY KEY (`IdCostoProductos`);

--
-- Indexes for table `IngresoBebidasYOtros`
--
ALTER TABLE `IngresoBebidasYOtros`
  ADD PRIMARY KEY (`IdIngresoBebidasYOtros`);

--
-- Indexes for table `IngresoBillar`
--
ALTER TABLE `IngresoBillar`
  ADD PRIMARY KEY (`IdIngresoBillar`);

--
-- Indexes for table `IngresoComida`
--
ALTER TABLE `IngresoComida`
  ADD PRIMARY KEY (`IdIngresoComida`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `Pozo`
--
ALTER TABLE `Pozo`
  ADD PRIMARY KEY (`IdPozo`);

--
-- Indexes for table `TotalIngreso`
--
ALTER TABLE `TotalIngreso`
  ADD PRIMARY KEY (`IdTotalIngreso`),
  ADD KEY `fk_TotalIngreso_1_idx` (`IdIngresoBebidasYOtros`),
  ADD KEY `fk_TotalIngreso_2_idx` (`IdIngresoComida`),
  ADD KEY `fk_TotalIngreso_3_idx` (`IdIngresoBillar`),
  ADD KEY `fk_TotalIngreso_4_idx` (`IdPozo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BebidasYOtros`
--
ALTER TABLE `BebidasYOtros`
  MODIFY `IdBebidasYOtros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Billar`
--
ALTER TABLE `Billar`
  MODIFY `IdBillar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Comida`
--
ALTER TABLE `Comida`
  MODIFY `IdComida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `CostoProductos`
--
ALTER TABLE `CostoProductos`
  MODIFY `IdCostoProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `IngresoBebidasYOtros`
--
ALTER TABLE `IngresoBebidasYOtros`
  MODIFY `IdIngresoBebidasYOtros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `IngresoBillar`
--
ALTER TABLE `IngresoBillar`
  MODIFY `IdIngresoBillar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `IngresoComida`
--
ALTER TABLE `IngresoComida`
  MODIFY `IdIngresoComida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Pozo`
--
ALTER TABLE `Pozo`
  MODIFY `IdPozo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `TotalIngreso`
--
ALTER TABLE `TotalIngreso`
  MODIFY `IdTotalIngreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BebidasYOtros`
--
ALTER TABLE `BebidasYOtros`
  ADD CONSTRAINT `BebidasYOtros_ibfk_1` FOREIGN KEY (`IdIngresoBebidasYOtros`) REFERENCES `IngresoBebidasYOtros` (`IdIngresoBebidasYOtros`);

--
-- Constraints for table `Comida`
--
ALTER TABLE `Comida`
  ADD CONSTRAINT `Comida_ibfk_1` FOREIGN KEY (`IdIngresoComida`) REFERENCES `IngresoComida` (`IdIngresoComida`);

--
-- Constraints for table `TotalIngreso`
--
ALTER TABLE `TotalIngreso`
  ADD CONSTRAINT `fk_TotalIngreso_1` FOREIGN KEY (`IdIngresoBebidasYOtros`) REFERENCES `IngresoBebidasYOtros` (`IdIngresoBebidasYOtros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TotalIngreso_2` FOREIGN KEY (`IdIngresoComida`) REFERENCES `IngresoComida` (`IdIngresoComida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TotalIngreso_3` FOREIGN KEY (`IdIngresoBillar`) REFERENCES `IngresoBillar` (`IdIngresoBillar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TotalIngreso_4` FOREIGN KEY (`IdPozo`) REFERENCES `Pozo` (`IdPozo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
