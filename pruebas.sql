-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para rtt
CREATE DATABASE IF NOT EXISTS `rtt` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `rtt`;

-- Volcando estructura para tabla rtt.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla rtt.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla rtt.movils
CREATE TABLE IF NOT EXISTS `movils` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Placa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Modelo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Marca` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla rtt.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla rtt.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla rtt.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla rtt.registros
CREATE TABLE IF NOT EXISTS `registros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Tarifa_Id` bigint(20) unsigned DEFAULT NULL,
  `Servicios_id` bigint(20) unsigned DEFAULT NULL,
  `User_id` bigint(20) unsigned DEFAULT NULL,
  `LatitudD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LongitudD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LatitudO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LongitudO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ValorTotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TipoPago` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registros_tarifa_id_foreign` (`Tarifa_Id`),
  KEY `registros_servicios_id_foreign` (`Servicios_id`),
  KEY `registros_user_id_foreign` (`User_id`),
  CONSTRAINT `registros_servicios_id_foreign` FOREIGN KEY (`Servicios_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `registros_tarifa_id_foreign` FOREIGN KEY (`Tarifa_Id`) REFERENCES `tarifas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `registros_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla rtt.servicios
CREATE TABLE IF NOT EXISTS `servicios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Movil_id` bigint(20) unsigned DEFAULT NULL,
  `User_id` bigint(20) unsigned DEFAULT NULL,
  `Horario1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Horario2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Latitud` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Longitud` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `servicios_movil_id_foreign` (`Movil_id`),
  KEY `servicios_user_id_foreign` (`User_id`),
  CONSTRAINT `servicios_movil_id_foreign` FOREIGN KEY (`Movil_id`) REFERENCES `movils` (`id`) ON DELETE CASCADE,
  CONSTRAINT `servicios_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla rtt.tarifas
CREATE TABLE IF NOT EXISTS `tarifas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Horario1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Horario2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ValorMinimo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ValorKilometro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ruta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Latitud` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Longitud` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RadioProximacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla rtt.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numdoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotoperfil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaVencimiento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perfils` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
